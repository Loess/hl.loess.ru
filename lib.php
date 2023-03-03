<?php
function process_link_templates($data,$homepage=false){              //линк->иконка-линк
/*$text = preg_replace("#(https?|ftp)://\S+[^\s.,>)\];'\&
quot;!?]#", '<a href="\\0">\\0</a>', $text);
*/
if(!is_string($data)){return("process_link_templates() - ".$data." is not a string");}
if((substr($data,7,11)=="twhl.co.za/") or (substr($data,7,15)=="www.twhl.co.za/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"twhl16\" alt=\"\" /></a>");}
elseif((substr($data,11,12)=="archive.org/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"wayback16\" alt=\"\" /></a>");}
elseif((substr($data,7,22)=="www.planetphillip.com/") or (substr($data,7,26)=="planetphillip.modsite.org/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"pp16\" alt=\"\" /></a>");}
elseif((substr($data,7,14)=="www.moddb.com/") or (substr($data,7,15)=="mods.moddb.com/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"moddb16\" alt=\"\" /></a>");}
elseif((substr($data,7,19)=="www.fileplanet.com/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"fileplanet16\" alt=\"\" /></a>");}
elseif((substr($data,7,20)=="www.atomicgamer.com/") or (substr($data,7,20)=="www.3ddownloads.com/") or (substr($data,7,20)=="www.telefragged.com/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"atomic16\" alt=\"\" /></a>");}
elseif((substr($data,7,18)=="www.filefront.com/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"filefront16\" alt=\"\" /></a>");}
elseif((substr($data,7,15)=="www.pcosmos.ca/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"pcosmos16\" alt=\"\" /></a>");}
elseif((substr($data,7,18)=="www.mediafire.com/"))
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"mf16\" alt=\"\" /></a>");}
elseif((substr($data,7,23)=="store.steampowered.com/"))   //http://store.steampowered.com/app/90017/
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"steam16\" alt=\"\" /></a>");}
elseif((substr($data,7,28)=="tenfourmaps.telefragged.com/"))//http://tenfourmaps.telefragged.com/php/review.php?gameid=hl&levid=pven
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"ten416\" alt=\"\" /></a>");}
elseif((substr($data,7,16)=="www.hlportal.de/"))//http://www.hlportal.de/?sec=mods
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"hlportalde16\" alt=\"\" /></a>");}
elseif((substr($data,7,28)=="developer.valvesoftware.com/"))//http://developer.valvesoftware.com/wiki/Brain_Bread
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"valvesource\" alt=\"\" /></a>");}
elseif((substr($data,7,16)=="www.youtube.com/"))//http://www.youtube.com/watch?v=pxyoYQTpSiU
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"youtube\" alt=\"\" /></a>");}
elseif((substr($data,7,18)=="cs-mapping.com.ua/"))//http://cs-mapping.com.ua/forum/showthread.php?t=16546
{return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"csm\" alt=\"\" /></a>");}
//elseif((substr($data,7,15)=="www.vossey.com/"))
//{return("<a href=\"".$data."\"><img src=\"./style/spacer.gif\" class=\"vossey16\" alt=\"\" /></a>");}  .

	else
	{
		if($homepage) {return("<a href=\"".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"home16\" alt=\"\" /></a>");
		}                                                                      //7                                  //7                 //7
	return("<a href=\"".$data."\" target=\"_blank\">".substr($data,strpos($data,"://")+3,strpos($data,"/",strpos($data,"://")+3)-(strpos($data,"://")+3))."</a>");}      //конечный лимитер = /
}



function process_links($data,$feedback=false,$homepage=false){				//строка с линками->строка с иконками-линками
	$data=explode(" ",$data);
	//dead http://twhl.co.za/vault.php?map= dead http://twhl.co.za/vault.php?map= ftp://ftp.cerious.com/pub/cerious/halflife/
	foreach ($data as $key => $value)
	{
$value=str_replace("&","&amp;",$value);
        if ((substr($value,0,7)=="http://")or(substr($value,0,6)=="ftp://")or(substr($value,0,8)=="https://"))
		{
			if($key>0 and $data[$key-1]=="dead")
			{   unset($data[$key-1]);
            	$data[$key]=process_link_templates("http://web.archive.org/web/*/".$value);
			}
			else
			{
            	$data[$key]=(!$homepage?process_link_templates($value):process_link_templates($value,1)).($feedback!=false?"<a href=\"?brokenlink=".$value."\" class=\"brokenlink\">!</a>":""); //title="сообщить о битой ссылке"
			}
		}
		elseif(is_numeric($value)&&$value>=10000&&$value<=999999999)//icq
		{
			$data[$key]="<a target=\"_blank\" href=\"http://www.icq.com/people/".$value."\"><img style=\"width:18px;height:18px\" src=\"http://icq.com/scripts/online.dll?img=5&icq=".$value."\" /></a>";    //http://www.icq.com/people/6565433/
		}
	}
	return (implode(" ",$data));
}



function process_templates($type,$data,$reqs="",$c17rate="",$reqsfull=""){
	switch($type){   //reqs c17 pp moddb twhl
	   case "reqs":
	   if($data=="")return NULL;//or false
	   elseif($data=="of" or $data=="th" or $data=="bs" or $data=="cs"/* or $data=="hl:s"*/){
	   	switch($data){
	   		case "of":$text="Opposing Force";break;
	   		case "th":$text="They Hunger";break;
	   		case "bs":$text="Blue Shift";break;
	   		case "cs":$text="Counter-Strike";break;
	   		//case "hl:s":$text="Half-Life: Source";break;
	   	}
	   	$out="<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?engine=".$data."\"><img src=\"./style/spacer.gif\" class=\"".$data."\" alt=\"\" />".($reqsfull!=""?$text:"")."</a>"; //только картинка
	   return($out);
	   }
	   elseif($data=="HOE"){$text="Heart of Evil";
//	   return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?engine=".$data."\">".($reqsfull!=""?$text:"HOE")."</a>");
	   return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods=&search=heart+of+evil\">".($reqsfull!=""?$text:"HOE")."</a>");
	   }
	   elseif($data=="dod"){$text="Day of Defeat";
	   return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods=&search=day+of+defeat\">".($reqsfull!=""?$text:"DOD")."</a>");
	   }
	   elseif($data=="HQA"){$text="HalfQuake Amen";
	   return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods=&search=half+quake+amen\">".($reqsfull!=""?$text:"HQA")."</a>");
	   }
	   elseif($data=="hl:s"){$text="Half-Life: Source";
	   return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?engine=".$data."\">".($reqsfull!=""?$text:"HL:S")."</a>");
	   }
	   else{
	   	if(is_numeric($data) and $data<1111 and $data>999){
       	return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?engine=".$data."\"><img src=\"./style/spacer.gif\" class=\"hl\" alt=\"\" />".($reqsfull!=""?$data:"")."</a>");    //только картинка
	   	}
		elseif(is_numeric($data) and $data>=1111){
       	return("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?engine=".$data."\"><img src=\"./style/spacer.gif\" class=\"hlsteam\" alt=\"\" />".($reqsfull!=""?$data:"")."</a>");   //только картинка
		}
		else return($data);
	   }
	   break;



	   case "c17":    //($type,$data,$reqs="",$c17rate="",$reqsfull="")
	   if($data=="") return NULL;
	   else{
       	if($reqs=="of" or $reqs=="th" or $reqs=="bs"){
	   	return("<a href=\"http://hl.loess.ru/c17archive/".$reqs."/".$data.".shtml\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"c17".(($c17rate!="")?$c17rate:"16")."\" alt=\"\" /></a>");
	   	}
       	elseif($reqs=="opfor/1111"){
	   	return("<a href=\"http://hl.loess.ru/c17archive/of/".$data.".shtml\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"c17".(($c17rate!="")?$c17rate:"16")."\" alt=\"\" /></a>");
	   	}
       	else{
       	$data=explode(" ",$data);
       		foreach ($data as $key => $value)
			{
			$data[$key]="<a href=\"http://hl.loess.ru/c17archive/hl/".$value."/\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"c17".(($c17rate!="" and ($c17rate=="a" or $c17rate=="b" or $c17rate=="c" or $c17rate=="d" or $c17rate=="e"))?$c17rate:"16")."\" alt=\"\" /></a>";
			}
	   	return(implode(" ",$data));  //<span class=\"c1716\">&nbsp;e&nbsp;</span>      /*(($c17rate!="")?"16".$c17rate:"").*/
	   	}
	   }
	   break;



	   case "pp":
	   	 if($data=="") return NULL;
	   	 else{
	   	 $data=explode(" ",$data);
	   	 $count=0;
	   	 $out="";
	   	 	while(isset($data[$count]) and is_numeric($data[$count]))  //вывод из поля pp по 2 линка
	   	 	{
            $out.="<a href=\"http://www.planetphillip.com/?p=".$data[$count]."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"pp16\" alt=\"\" /></a>";
            if(isset($data[$count+2])){$out.="&nbsp;";}   //разделитель между ними
            $count=$count+2;
	   	 	}
	   	 if(is_numeric($data[0])){
	   	 //return("<a href=\"http://www.planetphillip.com/?p=".$data[0]."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"pp16\" alt=\"\" /></a>");
	   	 return $out;
	   	 }
	   	 else return("<a href=\"http://www.planetphillip.com/posts/".$data[0]."/\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"pp16\" alt=\"\" /></a>");
	   	 }
	   break;



	   case "moddb":
		if($data=="") return NULL;
		elseif(is_numeric($data)){
		return("<a href=\"http://mods.moddb.com/".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"moddb16\" alt=\"\" /></a>");
		}
		else{
		return(process_links($data));
		}
	   break;



	   case "twhl":
		if($data=="") return NULL;
		elseif(is_numeric($data)){
		return("<a href=\"http://twhl.co.za/vault.php?map=".$data."\" target=\"_blank\"><img src=\"./style/spacer.gif\" class=\"twhl16\" alt=\"\" /></a>");
		}
		else{
		return(process_links($data));
		}

	   break;
	   default:

	}

}

  function GetInfo($link,$select,$id=0,$where="",$limit="",$table="hl_mods") {     // *  или поля через запятую
  	if($id>0){$query = "SELECT ".$select." FROM ".$table." WHERE ID=".$id.";";}
  	elseif($limit==""){$query = "SELECT ".$select." FROM ".$table." WHERE ".$where." ;";}
  	else{$query = "SELECT ".$select." FROM ".$table." ".$where." LIMIT ".$limit.";";}    //$limit 0,30   0-старт 30-кол-во отобр
    $res = mysqli_query($link,$query);	if (!$res) {return false;}
    if($id>0 and mysqli_num_rows($res)==1) { return mysqli_fetch_assoc($res); }           //если 1 строка ответ
    if (mysqli_num_rows($res)>0){while($R=mysqli_fetch_row($res)){$data[$R[0]]=$R;};return $data;}
    else { return false; }
  }
  function GetComments($link,$page=0,$limit="",$table="hl_comments") {//2015-10-21
  	if($page!=0){
  		$query = "SELECT * FROM ".$table." WHERE page=".$page;
  		if($limit!=""){$query.=" LIMIT ".$limit;}    //$limit 0,30   0-старт 30-кол-во отобр
  		$query.=";";
  	}
  	else{return false;}
    $res = mysqli_query($link,$query);
    if (!$res) {return false;}
    if (mysqli_num_rows($res)>0){while($R=mysqli_fetch_array($res, MYSQL_ASSOC)){$data[]=$R;};return $data;}
    else { return false; }
  }
  function GetAssocArray($link,$query) {
// returns an array(key0=>value0, key1=>value1, ... ) - associative array,
// where keyX   - first parameter in SELECT query
//       valueX - second parameter in SELECT query
    $res= mysqli_query($link,$query);
    if(mysqli_num_rows($res)) {
      while($R= mysqli_fetch_row($res)) $arr[$R[0]]= $R[1];
      return $arr;
    } else { return false; }
  }
  function GetIno($link,$select) {
    if(!$this->tbl) { return false; }
    $query = "SELECT * FROM $this->tbl WHERE ID=$this->id";
    $res = mysqli_query($link,$query);
    if(mysqli_num_rows($res)) { return mysqli_fetch_assoc($res); }
    else { return false; }
  }

  function Create($link,$name,$account,$passwd,$groupid){
    $query = "INSERT INTO hl_mods (UserName,Account,Passwd,GroupID) VALUES ('$name','$account',PASSWORD('$passwd'),'$groupid')";
    mysqli_query($link,$query);
    //$this->id=mysql_insert_id();
    return mysqli_error();
  }




?>