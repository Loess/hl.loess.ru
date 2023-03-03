<?php
function csv_to_mysql_insert($data) //если будут добавл€тьс€ новые столбцы, в этой функции добавить ещЄ $result.="'".$value."',";
{	$result="";	foreach ($data as $key => $value)
	{
	if($key=="id" && $value=="") {echo('csv_to_mysql_insert - no id at $data<br/>');break; }//если id == "" пропускаем
	if($key=="Name" && $value=="") {echo('csv_to_mysql_insert - no name at $data<br/>');break;} //если name == "" пропускаем
    $value=str_replace("'","''",$value);
    $value=str_replace('\\','\\\\',$value);
    if (($key=="Released" or $key=="Last Update")&& $value!="") {  //приводим дату к виду 2010-01-01

    	$value=array_reverse(explode(".",$value));//в массив, реверсим
    	if (count($value)==2){$value[]="1";}//если год и мес€ц - добавл€ем число
		$value=implode("-",$value);//соедин€ем в строку
		$result.="'".$value."',";
    }/*
  т.к. сортировка вывода сразу по двум пол€м - released и lastupdate не приносит
  желаемого результата, - заносим в поле lastupdate дату релиза, а при выводе,
  если released и lastupdate равны, оставл€ем только released:
*/	elseif (($key=="Last Update" && $value=="")&& $data["Released"]!="") {  //если lastupdate пусто, а released не пусто, берем released
    	$value=array_reverse(explode(".",$data["Released"]));//в массив, реверсим
    	if (count($value)==2){$value[]="1";}//если год и мес€ц - добавл€ем число
		$value=implode("-",$value);//соедин€ем в строку
		$result.="'".$value."',";
    }
////////////////////////////////////////////////////////////////////////////////
    elseif ($key=="MySQL renew?"){ continue;
    	if ($value!=""){echo("!!!!!");}
    }    //обновл€ть ли запись в базе?
    elseif ($key=="Dll" or $key=="Textures" or $key=="Models" or $key=="Sounds"){    //dll,tex,mdl,snd
    	if($data["Dll"]=="Y") {$data["Dll"]="dll";} elseif($data["Dll"]=="N") {$data["Dll"]="";}
    	if($data["Textures"]=="Y") {$data["Textures"]="tex";} elseif($data["Textures"]=="N") {$data["Textures"]="";}
    	if($data["Models"]=="Y") {$data["Models"]="mdl";} elseif($data["Models"]=="N") {$data["Models"]="";}
    	if($data["Sounds"]=="Y") {$data["Sounds"]="snd";} elseif($data["Sounds"]=="N") {$data["Sounds"]="";}
    	if($key=="Sounds"){$result.="'".$data["Dll"].",".$data["Textures"].",".$data["Models"].",".$data["Sounds"]."',";}
    }
    else{
	$result.="'".$value."',";
	}
	}
	$result=substr($result,0,strlen($result)-1); //убираем посл зап€тую
	if($result==""){die("died by csv_to_mysql_insert empty result<br/>");}
	return $result;
}
function csv_to_array($filename='', $delimiter=';')//http://gist.github.com/385876
{
	if(!file_exists($filename) || !is_readable($filename))
		return FALSE;

	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE)
	{
		while (($row = fgetcsv($handle, 1000000, $delimiter)) !== FALSE)
		{
			if(!$header)
				$header = $row;
			else
				$data[] = array_combine($header, $row);
		}
		fclose($handle);
	}
	return $data;
}
$data=csv_to_array('mods.csv');
if ($data==FALSE) die("no csv found");
//print_r($data[0]);

echo("<a href=\"".$hostlink."?upload\">Upload</a><br/>\r\n");
echo(""." ѕерезалить базу из csv ".$hostlink."?upload&rebuildbase - old-style, сброс€тс€ downloads<br/>\r\n");

if(isset($_GET["rebuildbase"]) and (!isset($_GET["addnewmods"]) and !isset($_GET["renewmods"]))){	echo("truncate <b>".mysql_query("TRUNCATE TABLE `hl_mods`")."</b><br/>\r\n");
	foreach ($data as $value){		echo("id=".$value["id"]);
		$value=csv_to_mysql_insert($value);
		//print_r($value."<br/>");
		echo(" ".mysql_query("INSERT INTO `hl_mods` VALUES (".$value.");")."<br/>\r\n");
	}

	//echo("\r\n".mysql_query("INSERT INTO `hl_mods` VALUES (".$value.");")."<br/>");
}

$res=mysql_query("SELECT COUNT(*) FROM `hl_mods`");
$res=mysql_fetch_array($res);
echo("<pre>«аписей в базе: ".$res[0]."</pre>\r\n");
echo("<pre>«аписей в csv: ".count($data)."</pre>\r\n<br/>");
$novihmodov=count($data)-$res[0];
if ($novihmodov>0){	echo("Ќовых модов: ".$novihmodov." <a href=\"".$hostlink."?upload&addnewmods\">добавить</a><br/>\r\n");
	for($novihmodov;$novihmodov>0;$novihmodov--){		$novihmodovdata[]=$data[count($data)-1-($novihmodov-1)];
	}
	foreach ($novihmodovdata as $value){		$value=csv_to_mysql_insert($value);
		print_r("INSERT INTO `hl_mods` VALUES (".$value.");<br/>");
		if(isset($_GET["addnewmods"]) and (!isset($_GET["rebuildbase"]) and !isset($_GET["renewmods"]))){
		echo("\r\n".mysql_query("INSERT INTO `hl_mods` VALUES (".$value.");")."<br/>");
		}
	}
}

echo("<br/>");
foreach ($data as $value){
	if ($value['MySQL renew?']!=""){		$mysqldata=GetInfo("*",$value["id"]); //возвращает FALSE если нет такого в базе
		if ($mysqldata==FALSE){continue;} //если в базе не найден мод с таким id (не обновление а новый мод в csv)
		$value=explode("','",substr(csv_to_mysql_insert($value),1,-1));    //убираем зап€тые слева и справа
		$table_head="<table class=\"moddb\"><tr class=\"head\">";$table_row1="";$table_row2="";
		//$mysql_query="UPDATE `loess_tapohkak`.`hl_mods` SET ";
		$mysql_query="UPDATE `hl_mods` SET ";

foreach ($mysqldata as $k=>$v){//добавл€ем двойные апострофы в дате мускул€	$mysqldata[$k]=str_replace("'","''",$v);
}

		if($value[5]=="")$value[5]="0000-00-00";
		if($value[6]=="")$value[6]="0000-00-00";
		if($value[0]==$mysqldata["id"])				{$table_head.='<td>id</td>';$table_row1.='<td>'.$mysqldata["id"].'</td>';				$table_row2.='<td>'.$value[0].'</td>';}
		else 										{$table_head.='<td>id</td>';$table_row1.='<td>'.$mysqldata["id"].'</td>';				$table_row2.='<td style="color:red">'.$value[0]."</td>";		$mysql_query.="`id` = '".$value[0]."',";}
		if($value[1]==$mysqldata["name"])			{$table_head.='<td>name</td>';$table_row1.='<td>'.$mysqldata["name"].'</td>';			$table_row2.='<td>'.$value[1].'</td>';}
		else 										{$table_head.='<td>name</td>';$table_row1.='<td>'.$mysqldata["name"].'</td>';			$table_row2.='<td style="color:red">'.$value[1]."</td>";		$mysql_query.="`name` = '".$value[1]."',";}
		if($value[2]!=$mysqldata["lastver"])		{$table_head.='<td>lastver</td>';$table_row1.='<td>'.$mysqldata["lastver"].'</td>';		$table_row2.='<td style="color:red">'.$value[2]."</td>";		$mysql_query.="`lastver` = '".$value[2]."',";}
		if($value[3]!=$mysqldata["type"])			{$table_head.='<td>type</td>';$table_row1.='<td>'.$mysqldata["type"].'</td>';			$table_row2.='<td style="color:red">'.$value[3]."</td>";		$mysql_query.="`type` = '".$value[3]."',";}
		if($value[4]!=$mysqldata["requirements"])	{$table_head.='<td>requirements</td>';$table_row1.='<td>'.$mysqldata["requirements"].'</td>';$table_row2.='<td style="color:red">'.$value[4]."</td>";	$mysql_query.="`requirements` = '".$value[4]."',";}
		if(strtotime($value[5])!=strtotime($mysqldata["released"]))		{$table_head.='<td>released</td>';$table_row1.='<td>'.$mysqldata["released"].'</td>';$table_row2.='<td style="color:red">'.$value[5]."</td>";$mysql_query.="`released` = '".$value[5]."',";}
		if(strtotime($value[6])!=strtotime($mysqldata["lastupdate"]))	{$table_head.='<td>lastupdate</td>';$table_row1.='<td>'.$mysqldata["lastupdate"].'</td>';$table_row2.='<td style="color:red">'.$value[6]."</td>";$mysql_query.="`lastupdate` = '".$value[6]."',";}
		if($value[7]!=$mysqldata["filename"])		{$table_head.='<td>filename</td>';$table_row1.='<td>'.$mysqldata["filename"].'</td>';	$table_row2.='<td style="color:red">'.$value[7]."</td>";		$mysql_query.="`filename` = '".$value[7]."',";}
		if($value[8]!=$mysqldata["alivelinks"])		{$table_head.='<td>alivelinks</td>';$table_row1.='<td>'.$mysqldata["alivelinks"].'</td>';$table_row2.='<td style="color:red">'.$value[8]."</td>";		$mysql_query.="`alivelinks` = '".$value[8]."',";}
		if($value[9]!=$mysqldata["dowehave"])		{$table_head.='<td>dowehave</td>';$table_row1.='<td>'.$mysqldata["dowehave"].'</td>';	$table_row2.='<td style="color:red">'.$value[9]."</td>";		$mysql_query.="`dowehave` = '".$value[9]."',";}
		if($value[10]!=$mysqldata["dev"])			{$table_head.='<td>dev</td>';$table_row1.='<td>'.$mysqldata["dev"].'</td>';				$table_row2.='<td style="color:red">'.$value[10]."</td>";		$mysql_query.="`dev` = '".$value[10]."',";}
		if($value[11]!=$mysqldata["homepage"])		{$table_head.='<td>homepage</td>';$table_row1.='<td>'.$mysqldata["homepage"].'</td>';	$table_row2.='<td style="color:red">'.$value[11]."</td>";		$mysql_query.="`homepage` = '".$value[11]."',";}
		if($value[12]!=$mysqldata["maps"])			{$table_head.='<td>maps</td>';$table_row1.='<td>'.$mysqldata["maps"].'</td>';			$table_row2.='<td style="color:red">'.$value[12]."</td>";		$mysql_query.="`maps` = '".$value[12]."',";}
		if(str_replace(",","",$value[13])!=str_replace(",","",$mysqldata["dlltexmodlsoun"])){$table_head.='<td>dlltexmodlsoun</td>';$table_row1.='<td>'.$mysqldata["dlltexmodlsoun"].'</td>';$table_row2.='<td style="color:red">'.$value[13]."</td>";		$mysql_query.="`dlltexmodlsoun` = '".$value[13]."',";}
		if($value[14]!=$mysqldata["rate"])			{$table_head.='<td>rate</td>';$table_row1.='<td>'.$mysqldata["rate"].'</td>';			$table_row2.='<td style="color:red">'.$value[14]."</td>";		$mysql_query.="`rate` = '".$value[14]."',";}
		if($value[15]!=$mysqldata["c17rate"])		{$table_head.='<td>c17rate</td>';$table_row1.='<td>'.$mysqldata["c17rate"].'</td>';		$table_row2.='<td style="color:red">'.$value[15]."</td>";		$mysql_query.="`c17rate` = '".$value[15]."',";}
		if($value[16]!=$mysqldata["c17path"])		{$table_head.='<td>c17path</td>';$table_row1.='<td>'.$mysqldata["c17path"].'</td>';		$table_row2.='<td style="color:red">'.$value[16]."</td>";		$mysql_query.="`c17path` = '".$value[16]."',";}
		if($value[17]!=$mysqldata["pp"])			{$table_head.='<td>pp</td>';$table_row1.='<td>'.$mysqldata["pp"].'</td>';				$table_row2.='<td style="color:red">'.$value[17]."</td>";		$mysql_query.="`pp` = '".$value[17]."',";}
		if($value[18]!=$mysqldata["moddb"])			{$table_head.='<td>moddb</td>';$table_row1.='<td>'.$mysqldata["moddb"].'</td>';			$table_row2.='<td style="color:red">'.$value[18]."</td>";		$mysql_query.="`moddb` = '".$value[18]."',";}
		if($value[19]!=$mysqldata["reviews"])		{$table_head.='<td>reviews</td>';$table_row1.='<td>'.$mysqldata["reviews"].'</td>';		$table_row2.='<td style="color:red">'.$value[19]."</td>";		$mysql_query.="`reviews` = '".$value[19]."',";}
		if($value[20]!=$mysqldata["twhl"])			{$table_head.='<td>twhl</td>';$table_row1.='<td>'.$mysqldata["twhl"].'</td>';			$table_row2.='<td style="color:red">'.$value[20]."</td>";		$mysql_query.="`twhl` = '".$value[20]."',";}
		if($value[21]!=$mysqldata["desc"])			{$table_head.='<td>desc</td>';$table_row1.='<td>'.$mysqldata["desc"].'</td>';			$table_row2.='<td style="color:red">'.$value[21]."</td>";		$mysql_query.="`desc` = '".$value[21]."',";}
		if($value[22]!=$mysqldata["anything else"])	{$table_head.='<td>anything else</td>';$table_row1.='<td>'.$mysqldata["anything else"].'</td>';$table_row2.='<td style="color:red">'.$value[22]."</td>";$mysql_query.="`anything else` = '".$value[22]."',";}

		$mysql_query=substr($mysql_query,0,-1)." WHERE `hl_mods`.`id` =".$value[0].";"; //убираем зап€тую+завершаем запрос
		$table_head.="</tr>";$table_row1.="</tr>";$table_row2.="</tr>";
		$table_head=$table_head.$table_row1.$table_row2."</table><br/>";
		if (strstr($table_head,'<td style="color:red">')){			echo("ќбновл€ема€ запись: <a href=\"".$hostlink."?upload&renewmods\">обновить все</a><br/>\r\n");
			echo ($table_head);
			echo("".str_replace(array("<",">"),array("&lt;","&gt;"),$mysql_query)."<br/>");
			if(isset($_GET["renewmods"]) and (!isset($_GET["rebuildbase"]) and !isset($_GET["addnewmods"]))){
				//echo("\r\n".mysql_query("INSERT INTO `hl_mods` VALUES (".$value.");")."<br/>");
				echo("\r\n".mysql_query($mysql_query)."<br/>");
			}

		}
		else echo("<pre>–азницы между csv и ƒЅ в записи ".$value[0]." ".$value[1]." нет \r\n");

		//UPDATE `loess_tapohkak`.`hl_mods` SET `lastupdate` = '2013-10-09', `dev` = '11156', `homepage` = '987' WHERE `hl_mods`.`id` =1171;
		//print_r($mysqldata);
		//print_r($value);
	}
}
echo("</pre>\r\n");



//echo("\r\n"."INSERT INTO `hl_mods` VALUES ('1','101 Grunts','','S','1009','1999-09-1','1999-09-1','101Grunt.zip','http://yadi.sk/d/8YcBLytY6OFtQ','Y','Jonathan L Gower jon@jlgower.freeserve.co.uk','','3','N,N,N,N','','d','101grunts','2800 101-grunts-half-life','','','','','');</pre>");
 //    '1171','новыймод','2','3','4','','','абыр','8','9','11','','',',tex,,','','','','','','','','',''

?>