<?php
//!!REOPEN WITH 1251 ENCODING!

error_reporting(E_ALL);
$start_array = explode(" ",microtime());
if (isset($_GET['phpinfo'])){phpinfo();die();}
$hostlink="http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,-9)."";

if(isset($_COOKIE["ru"]) and $_COOKIE["ru"]=="1"){$ru="1";}
elseif(isset($_COOKIE["ru"]) and $_COOKIE["ru"]=="0"){$ru="0";}
elseif(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) and stristr(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,21),"ru")){$ru="1";}   //если браузер читает по-русски, ру=1
else{$ru="0";}
global $ru;
if		(isset($_GET['ru'])){$ru="1";setcookie("ru","1",time()+60*60*24*30,'/',".loess.ru");}
elseif	(isset($_GET['en'])){$ru="0";setcookie("ru","0",time()+60*60*24*30,'/',".loess.ru");}  // $ru или не ру
$query=explode("&",$_SERVER["QUERY_STRING"]);                     //взрываем строку запроса
if(isset($_GET['ru'])){unset ($query[array_search("ru",$query)]);}     //удаляем ?ru
if(isset($_GET['en'])){unset ($query[array_search("en",$query)]);}     //удаляем ?ru
$query=implode("&amp;",$query);                     //собираем обратно
//print_r($query);
$pagelimit=25;                                      //лимит строк
//$hosting=($_SERVER["DOCUMENT_ROOT"]=="/home/loess/domains/hl.loess.ru/public_html")?"www":
//		($_SERVER["DOCUMENT_ROOT"]=="X:/home/loess.ru/hl"?"localhost":die("cannot get DOCUMENT_ROOT"));
//$hosting=="www"?(!!!!!!!!!!!!!!!):($hosting=="localhost"?(!!!!!!!!!!!!!!!):1);
$hosting='www';

require_once("lib.php");
require_once("lib_mysql.php");

ob_start(/*"callback"*/);
//HEAD
$head_title="Half-Life.Loess.ru - MODs";$hosting=="localhost"?($head_title.=" - localhost"):1;
$head_keywords="Half-Life mod мод скачать download Counter-Strike hl cs hldm ag моды моды goldsrc source описание";
$head_desc="All MODs for Half-Life - Half-Life.Loess.ru";
header('Content-Type: text/html; charset=windows-1251');
require_once("tpl_header.php");

 ?>
<body>
<div id="container">
	<div id="body">
<?php /*<img src="./style/backgrou.jpg" width="100%" height="36" alt="" border="0" />
горизонтальный бар в шапке*/ ?>
<h1 style="padding-top: 15px;">Half-Life.Loess.<?php
if($ru==1){
	if($query==""){$query="?";}else{$query="?".$query."&amp;";}              //если что-то есть - добавляем ?
	echo("ru<sup><small><small><small><a href=\"http://".
	$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9).$query."en\">EN</a>");}
else{
	if($query==""){$query="?";}else{$query="?".$query."&amp;";}              //если что-то есть - добавляем ? или &
	echo("<a href=\"http://".
	$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9).$query."ru\">ru</a><sup><small><small><small>EN");}


 ?>
</small></small></small></sup></h1>
<br />
<?php												/*  бфло 200px     */					 ?>
<table border="0"><tr><td style="width:150px; height:260px; border:none;">
<div class="h4" id="fixme">
<?php require_once("tpl_menu.php"); ?>
</div><img src="./style/spacer.gif" width="150" height="" alt="" /></td>

<?php
echo("<td rowspan=\"2\" style=\"padding:0px;border:none;width:100%;/*background-color:green;*/\">");
if(isset($_GET["mods"])){
//echo($hostlink);
//0-z nav c отключаемыми линками
/*if(isset($_GET["show"]) and $_GET["show"]=="0-9")echo("0-9&nbsp;");else echo("<a href=\"?mods&amp;show=0-9\">0-9</a>&nbsp;");
$output="";
foreach(range("A","Z") as $letter) {
if(isset($_GET["show"]) and $_GET["show"]==strtolower($letter)) $output.=($letter."&nbsp;");
else $output.="<a href=\"?mods&amp;show=".strtolower($letter)."\">".$letter."</a>&nbsp;";
}
$output=substr($output,0,-6)."&nbsp;<a href=\"?mods\">All</a>";
echo $output;*/
//$sortbyurl=((isset($_GET["sortby"]) and $_GET["sortby"]=="last")?'&amp;sortby=last':'');
$sortbyurl=(isset($_GET["sortby"])?($_GET["sortby"]=="last"?'&amp;sortby=last':(
									$_GET["sortby"]=="type"?'&amp;sortby=type':(
									$_GET["sortby"]=="engine"?'&amp;sortby=engine':(
									$_GET["sortby"]=="status"?'&amp;sortby=status':(
									$_GET["sortby"]=="maps"?'&amp;sortby=maps':('')))))):'');
echo "<div style=\"position: absolute;right: 18px;text-align:right;\">".(($ru!=1)?"Mod search:":"Поиск по названию:").
"<form action=\".\"><input type=\"hidden\" name=\"mods\" />
<input type=\"text\" name=\"search\" value=\"".(isset($_GET["search"])?$_GET["search"]:'')."\"
class=\"name\" onfocus=\"id=className\" onblur=\"id=''\"
/>
</form></div>";
/*//
position: fixed;background: grey;right: 30px;*/
//echo("<a href=\"".$hostlink."?mods".(($sortbyurl!='')?'':'&amp;sortby=last')."\">".(($sortbyurl!='')?'Sort by name':'Sort by last update')."</a>");
echo("<a href=\"".$hostlink."?mods".(($sortbyurl!='')?'':'&amp;sortby=last')."\">".(($sortbyurl!='')?(($ru!=1)?'Sort by name':"Сортировать по имени"):(($ru!=1)?'Sort by last update':"Сортировать по дате обновления"))."</a>");
echo("<br />");
// .((isset($_GET["sortby"]) and $_GET["sortby"]=="last")?'&amp;sortby=last':'').
$output="<a href=\"".$hostlink."?mods".$sortbyurl."\">".(($ru==1)?"Все":"All")."</a>&nbsp;";
$output.="<a href=\"".$hostlink."?mods&amp;show=0-9".$sortbyurl."\">0-9</a>&nbsp;";
foreach(range("A","Z") as $letter) {$output.="<a href=\"".$hostlink."?mods&amp;show=".strtolower($letter)."".$sortbyurl."\">".$letter."</a>&nbsp;";}
$output=substr($output,0,-6)."";
echo $output;
echo("<br />");

	$offset=0;
	if(isset($_GET["sortby"]) and $_GET["sortby"]=="last"){$order_by="`lastupdate` DESC";}
	elseif(isset($_GET["sortby"]) and $_GET["sortby"]=="type"){$order_by="`type` DESC";}
	elseif(isset($_GET["sortby"]) and $_GET["sortby"]=="engine"){$order_by="`requirements` DESC";}
	elseif(isset($_GET["sortby"]) and $_GET["sortby"]=="status"){$order_by="`dowehave` DESC";}
//	elseif(isset($_GET["sortby"]) and $_GET["sortby"]=="maps"){$order_by="`maps` DESC";}
	elseif(isset($_GET["sortby"]) and $_GET["sortby"]=="maps"){$order_by="`maps` REGEXP '^[A-Za-z]+$' DESC
        ,CAST(`maps` as SIGNED INTEGER) DESC
        ,CAST(REPLACE(`maps`,'-','')AS SIGNED INTEGER) DESC
        ,`maps` DESC";} //natural sorting descending http://stackoverflow.com/questions/17354217/natural-sorting-sql-order-by
	else $order_by="`name` ASC";//else $order_by="`id` ASC";
	 // `lastupdate` DESC       `id` ASC
	if (isset($_GET["offset"]) and is_numeric($_GET["offset"]) and $_GET["offset"] % $pagelimit == 0){
	$offset=$_GET["offset"];
	}

	if (isset($_GET["search"])){
	$offset=0;$pages=0;
	$search=@$_GET["search"];
	$search=trim($search); //убираем пробелы слевасправа
	$search=substr($search,0,24);       //24 символов пользователю будет достаточно для поиска.
	$search=preg_replace("/[^\w\x7F-\xFF\s]/"," ",$search);  //Теперь каленым железом выжжем все "ненормальные" символы.
    $good=trim(preg_replace("/\s(\S{1,1})\s/"," ", preg_replace("/\s+/", "  "," $search ")));
    $good=preg_replace("/\s+/", " ", $good);
	echo ((($ru!=1)?"You search for ":"Вы искали ")."[<b>").$good."</b>]<br />";
    //нет проверки на 2 символа
	$res=mysqli_query($link,"SELECT COUNT(*) FROM `hl_mods` WHERE name LIKE '%".str_replace(" ","%' and name LIKE '%",$good)."%'");
	$res=mysqli_fetch_array($res);

	if($res[0]==0 or !isset($res[0])){echo (($ru!=1)?"Result: match not found":"Совпадений не найдено");   //<br />
//		$res=mysql_query("SELECT COUNT(*) FROM `hl_mods`");
//		$res=mysql_fetch_array($res);
//		$pages=$res[0]/$pagelimit;
		$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"ORDER BY ".$order_by,$offset.",".$pagelimit."");
		}
	elseif($res[0]==1){echo (($ru!=1)?"Found one!":"Найден один мод:");
		$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"WHERE name LIKE '%".str_replace(" ","%' and name LIKE '%",$good)."%' ORDER BY ".$order_by,$offset.",".$pagelimit."");
		header( "Location: http://".$_SERVER["HTTP_HOST"]."/?mod=".key($data), true, 303);
		//2013-10-08 сделан редирект на мод сразу
		}
	elseif($res[0]<=$pagelimit){echo (($ru!=1)?"Showing <b>".$res[0]."</b> results":"Совпадений: <b>".$res[0]."</b>");
		$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"WHERE name LIKE '%".str_replace(" ","%' and name LIKE '%",$good)."%' ORDER BY ".$order_by,$offset.",".$pagelimit."");
		}
	else{echo (($ru!=1)?"Found <b>":"Найдено <b>").$res[0].(
				($ru!=1)?"</b> results, showing first <b>20</b>, please, clarify your search query":
				"</b> модов, показываю первые <b>20</b>, пожалуйста, уточните поисковый запрос");
		$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"WHERE name LIKE '%".str_replace(" ","%' and name LIKE '%",$good)."%' ORDER BY ".$order_by,$offset.",".$pagelimit."");
    	}
	}
	elseif (isset($_GET["show"]) and $_GET["show"]=="0-9"){
	$res=mysqli_query($link,"SELECT COUNT(*) FROM `hl_mods` WHERE left(name,1) RLIKE '^[0-9]'");
	$res=mysqli_fetch_array($res);
    $pages=$res[0]/$pagelimit;
	$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"WHERE left(name,1) RLIKE '^[0-9]' ORDER BY ".$order_by,$offset.",".$pagelimit."");
	}
	elseif (isset($_GET["show"]) and preg_match("/^[A-z]{1}$/",$_GET["show"])){
	$res=mysqli_query($link,"SELECT COUNT(*) FROM `hl_mods` WHERE upper(left(name,1)) = '".strtoupper($_GET["show"])."'");
	$res=mysqli_fetch_array($res);
	$pages=$res[0]/$pagelimit;
	$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"WHERE upper(left(name,1)) = '".strtoupper($_GET["show"])."' ORDER BY ".$order_by,$offset.",".$pagelimit."");
	}
	else{
	$res=mysqli_query($link,"SELECT COUNT(*) FROM `hl_mods`");
	$res=mysqli_fetch_array($res);
	$pages=$res[0]/$pagelimit;
	$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"ORDER BY ".$order_by,$offset.",".$pagelimit."");
	}

if ($pages>1){
	$pages=$pages-0.01;
	$pages=floor($pages);
	while ($pages>0) { $paginating[]=$pages*$pagelimit;$pages--;}
	if(isset($paginating)){
	$paginating=array_reverse($paginating);
	if($offset==0){$output="<span style=\"font-family: Verdana;\">0</span>      ";}
	else $output="<a href=\"".$hostlink."?mods".((!isset($_GET["show"]))?(""):("&amp;show=".$_GET["show"]))."".$sortbyurl."\">0</a>      ";
		foreach ($paginating as $key=>$value){
		if($offset==$value){$output.="<span style=\"font-family: Verdana;\">".($value/$pagelimit)."</span>      ";}
		//elseif($offset==0 and $value==0){$output.="<span style=\"font-family: Verdana;\">".$value."</span>      ";}
		else $output.="<a href=\"".$hostlink."?mods".((!isset($_GET["show"]))?("&amp;offset=".$value):("&amp;show=".$_GET["show"]."&amp;offset=".$value))."".$sortbyurl."\" title=\"".$value."\">".($value/$pagelimit)."</a>      ";
		}
	}
	$output=substr($output,0,-6);
	echo $output;
}
echo("<br/>");
/*	$res=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM `hl_mods`"));
echo $res[0];*/

if($ru==0){
	$output="<table class=\"moddb\"><tr class=\"head\">".
	"<td><b>".($sortbyurl!=''?"<a href=\"".$hostlink."?mods\" title=\"Sort by name\">Name</a>":'Name')."</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=type'?"<a href=\"".$hostlink."?mods&amp;sortby=type\" title=\"Sort by type\">Type</a>":'Type')."</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=engine'?"<a href=\"".$hostlink."?mods&amp;sortby=engine\" title=\"Sort by engine\">For</a>":'For')."</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=status'?"<a href=\"".$hostlink."?mods&amp;sortby=status\" title=\"Sort by status\">Status</a>":'Status')."</b></td>".
	"<td><b>Mod homepage</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=maps'?"<a href=\"".$hostlink."?mods&amp;sortby=maps\" title=\"Sort by maps\">Content</a>":'Content')."</b></td>".
	"<td><b>Reviews</b></td></tr>
	";}
//'&amp;sortby=type'
elseif($ru==1){
/*$output="<table class=\"moddb\"><tr class=\"head\">".
"<td><b>Название</b></td><td><b>Тип</b></td><td><b>Для</b></td><td><b>Статус</b></td><td><b>Домашняя страница</b></td><td><b>Содержимое</b></td><td><b>Обзоры</b></td></tr>
";} */
	$output="<table class=\"moddb\"><tr class=\"head\">".
	"<td><b>".($sortbyurl!=''?"<a href=\"".$hostlink."?mods\" title=\"Сортировать по названию\">Название</a>":'Название')."</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=type'?"<a href=\"".$hostlink."?mods&amp;sortby=type\" title=\"Сортировать по типу\">Тип</a>":'Тип')."</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=engine'?"<a href=\"".$hostlink."?mods&amp;sortby=engine\" title=\"Сортировать по движку\">Для</a>":'Для')."</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=status'?"<a href=\"".$hostlink."?mods&amp;sortby=status\" title=\"Сортировать по статусу\">Статус</a>":'Статус')."</b></td>".
	"<td><b>Домашняя страница</b></td>".
	"<td><b>".($sortbyurl!='&amp;sortby=maps'?"<a href=\"".$hostlink."?mods&amp;sortby=maps\" title=\"Сортировать по количеству карт\">Содержимое</a>":'Содержимое')."</b></td>".
	"<td><b>Обзоры</b></td></tr>
	";}
echo($output);
//$data=GetInfo($link,"id,name,type,requirements,dowehave,homepage,maps,dlltexmodlsoun,c17rate,c17path,pp,moddb,reviews,twhl",0,"ORDER BY `name` ASC", "0".","."999");
//               +++++  -        -        +        -       -        +           -      -      -    -     -    -
//                  1   2        3          4        5      6        7           8       9     10  11     12   13
$i=1;
	foreach ($data as $key=>$value)
	{
		$i++;
		echo(($i&1)==0?"<tr>":"<tr class=\"even\">");
		foreach ($value as $k=>$v)
		{
			if($k==0) continue;
			elseif($k==1){$v="<a href=\"".$hostlink."?mod=".$value[0]."\">".str_replace('&',"&amp;",$v)."</a>";}
			elseif($k==3){
            $v=process_templates("reqs",$v);
			}
			elseif($k==4){
				if(strstr($v,"Y")){$v="Yes";}
				elseif(strstr($v,"N")){$v="<a href=\"?lookingfor=".$value[0]."\" class=\"brokenlink\">looking for this</a>";}
				elseif(strstr($v,"DEV")){$v="wip";}
			}
			elseif($k==5/* or $k==4*/){$v=process_links($v,1,0);}
			elseif($k==6){($v!="")?$v=$v.(($v=="1")?" map":" maps").(($value[7]=="")?"":", "):$v=$v; $v.=($value[7]=="")?"":"new ".$value[7];}
			elseif($k==7)continue;
			elseif($k==8)continue;
			elseif($k==9){$v=($v!=""?process_templates("c17",$value[9],$value[3],$value[8])." ":"");
						($value[10]!="")?$v.=process_templates("pp",$value[10])." ":"";
						($value[11]!="")?$v.=process_links($value[11])." ":"";
						($value[12]!="")?$v.=process_links($value[12])." ":"";
						($value[13]!="")?$v.=process_links($value[13])." ":"";}
			elseif($k==10)continue;
			elseif($k==11)continue;
			elseif($k==12)continue;
			elseif($k==13)continue;

			echo("<td>".$v."</td>");
		}
		echo("</tr>
");
	}

echo("</table>");
}







//------------------------------------------------------------------------------------------------------------







else {//echo("<td rowspan=\"2\" style=\"padding:0px;background-color:green;\">");
//2013-10-10 www.isolated-design.de fix
    if (isset($_GET["mod"]) and $_GET["mod"] == 992 and $_SERVER['HTTP_REFERER'] == "http://www.isolated-design.de/half-life-mods/underground/") {
        header("Location: http://" . $_SERVER["HTTP_HOST"] . "/?mods=&search=underground", true, 303);
    } elseif (isset($_GET["mod"]) and $_GET["mod"] == 83 and $_SERVER['HTTP_REFERER'] == "http://www.isolated-design.de/half-life-mods/black-mesa-sideline/") {
        header("Location: http://" . $_SERVER["HTTP_HOST"] . "/?mods=&search=black+mesa+sideline", true, 303);
    }


    if (isset($_GET["mod"]) and is_numeric($_GET["mod"])) {
        //echo ("!!".$_SERVER['HTTP_REFERER']."!!");
        $id = intval($_GET["mod"]);
        $res = mysqli_query($link,"SELECT COUNT(*) FROM `hl_mods`");
        $res = mysqli_fetch_array($res);
        if ($id > 0 and $id <= $res[0]) {
            //$data=GetInfo($link,"*",$id,"","0");//2016-01-03
            //////////////////////////////////////2016-01-03
            require_once('edit.php');
            $db = new db;
            $input = new input();
            $identity = $input->get_identity();
            $data = $db->getmodbyid($id, $identity);
///////////////////////////////////////////2016-01-03
            // echo('<pre>');
            // print_r($data);                         //     $res[0] колво записей
            $data['name'] = str_replace('&', "&amp;", $data['name']);//заменяем амперсанды в имени
             ?>
            <script type="text/javascript">
                <!--
                $(document).ready(function () {
                    <?php    // вешаем на клик по элементу с id = example-1
                     ?>
                    $('#showmelink').click(function () {
                        $('#showme').load('./giveme.php?id=<?=$id ?>&comm=<?=(substr(md5(md5($data['alivelinks']).date('F')),0,3)) ?>');
                        <?php  //append - добавить text - заменить
                         ?>
                    })

                    $('#showme').bind("ajaxSend", function () {
                        $(this).hide();
                    }).bind("ajaxComplete", function () {
                        $(this).show();
                    }).bind("ajaxError", function () {
                        $(this).text('error requesting link');
                    });

                    $("#loading").bind("ajaxSend", function () {
                        $(this).show(); // показываем элемент
                    }).bind("ajaxComplete", function () {
                        $(this).hide(); // скрываем элемент
                    });
                });
                -->
            </script>
            <table border="0" style="border-spacing: 0px;width:100%;border-collapse:collapse">
                <tr>
                    <td
                        style="width:100%;border: none;border-bottom: 1px solid #444"><h2><?=$data['name']  ?> <a
                                href="?edit=<?=$data['id']  ?>" title="edit mod">&#9998;</a></h2></td>
                    <td
                        style="background-color:#444;border-left: 1px solid #444;border-right: 1px solid #444;border-top: 1px solid #444;border-bottom: 1px solid #000;min-width: 129px;"
                        ><h2
                            style="text-shadow: black 0px 0px 2px;font-family: Verdana; padding-left:20px;padding-right:20px;text-align:center;"><?php //min-width: 129px;  2013-05-07 at Amelia
                            /*if ($id>1 and $id<=$res[0]){
                                echo ("<a style=\"text-decoration:none\" href=\"?mod=".($id-1)."\">&lt;&lt;</a>");
                            }
                            else echo ("&lt;&lt;");  //2013-05-07 at Amelia  */
                            echo("&nbsp;<a style=\"text-decoration:none\" href=\"?mods&amp;offset=" . (floor(($id - 1) / $pagelimit) * $pagelimit) . "\">&#8593;</a>&nbsp;"); //вычисляем оффсет
                            /*if ($id>0 and $id<$res[0]){
                                echo ("<a style=\"text-decoration:none\" href=\"?mod=".($id+1)."\">&gt;&gt;</a>");
                            }
                            else echo ("&gt;&gt;"); //2013-05-07 at Amelia */
                             ?></h2></td>
                </tr>

                <tr>
                    <td><p><b><a href=""><?=$data['type'];  ?></a></b>&nbsp;&nbsp;&nbsp;<?php
                            if (strstr($data['dowehave'], "Y")) {
                            } elseif (strstr($data['dowehave'], "N")) {
                                echo "<a href=\"?lookingfor=" . $data['id'] . "\" class=\"brokenlink\">" .
                                    ($ru == 1 ? "разыскивается" :
                                        "looking for this") . "</a>";
                            } elseif (strstr($data['dowehave'], "DEV")) {
                                echo "<span style=\"color:red;\">" .
                                    ($ru == 1 ? "в разработке" :
                                        "in development") . "</span>";
                            } else echo "<a href=\"?lookingfor=" . $data['id'] . "\" class=\"brokenlink\">" . $data['dowehave'] . "</a>";
                            //if ($data[$id][9]!=""){echo "status:&nbsp;".$data[$id][9]."&nbsp;&nbsp;&nbsp;";}
                            echo "&nbsp;&nbsp;&nbsp;"

                             ?><?php if ($data['lastver'] != "") {
                                echo "<span style=\"color: white;\">" .
                                    ($ru == 1 ? "П</span>оследняя версия:&nbsp;" :
                                        "L</span>ast version:&nbsp;")
                                    . $data['lastver'] . "&nbsp;&nbsp;&nbsp;";
                            }
                            if ($data['released'] != "0000-00-00") {
                                echo "<span style=\"color: white;\">" .
                                    ($ru == 1 ? "Р</span>елиз:&nbsp;" :
                                        "R</span>eleased:&nbsp;")                //  если released и lastupdate равны, оставляем только released
                                    . $data['released'] . "&nbsp;&nbsp;&nbsp;";
                            }
                            if ($data['lastupdate'] != "0000-00-00" and $data['lastupdate'] != $data['released']) {
                                echo "<span style=\"color: white;\">" .
                                    ($ru == 1 ? "П</span>осл. обновление:&nbsp;" :
                                        "L</span>ast update:&nbsp;") . $data['lastupdate'] . "";
                            }  ?></p>

                        <p><?php if ($data['requirements'] != "") {
                                echo "<span style=\"color: white;\">" .
                                    ($ru == 1 ? "Т</span>ребования:&nbsp;" :
                                        "R</span>equirement:&nbsp;")
                                    . process_templates("reqs", $data['requirements'], "", "", 1) . "&nbsp;&nbsp;&nbsp;";
                            } else echo "<span style=\"color: white;\">" .
                                ($ru == 1 ? "Т</span>ребования:&nbsp;неспецифичны&nbsp;&nbsp;&nbsp;" :
                                    "R</span>equirement:&nbsp;non-specific&nbsp;&nbsp;&nbsp;")
                             ?>
                            <br/><?php if ($data['dev'] != "") {
                                echo "<span style=\"color: white;\">" .
                                    ($ru == 1 ? "Р</span>азработчик:&nbsp;" :
                                        "D</span>eveloper:&nbsp;")
                                    . process_links($data['dev'], 0, 0);
                            } ?>
                            <br/><?php if ($data['homepage'] != "") {
                                echo "<span style=\"color: white;\">" .
                                    ($ru == 1 ? "Д</span>омашняя:&nbsp;" :
                                        "H</span>omepage:&nbsp;")
                                    . process_links($data['homepage'], 1, 0);
                            } else echo "<br/>"; ?>

                        </p></td>
                    <td style="text-align:center;text-shadow: black 1px 1px 2px;border-left: 1px solid #444;border-right: 1px solid #444;border-top: 1px solid #000;border-bottom: 1px solid #000;background-color:#444;"
                        ><b><a href=""><?=$data['type'];  ?></a></b><br
                            /><?php if ($data['maps'] != "") {
                            echo "" . $data['maps'] . "" . (($data['maps'] == "1") ? " map" : " maps");
                        } ?><br
                            /><?php if ($data['dlltexmodlsoun'] != "") {
                            echo "" . $data['dlltexmodlsoun'];
                        } ?><br
                            /><?php if (stristr($data['dowehave'], "steam")) {
                            echo "steam-friendly";
                        } ?></td>
                </tr>
                <tr>
                    <td><?php
                        $o = "";
                        if ($data['c17path']) {
                            $o .= process_templates("c17", $data['c17path'], $data['requirements'], $data['c17rate']) . " ";
                        }
                        if ($data['pp']) {
                            $o .= process_templates("pp", $data['pp']) . " ";
                        }
                        if ($data['moddb']) {
                            $o .= process_links($data['moddb']) . " ";
                        }
                        if ($data['reviews']) {
                            $o .= process_links($data['reviews'], 1) . " ";
                        }
                        if ($data['twhl']) {
                            $o .= process_links($data['twhl']) . " ";
                        }
                        if ($o) echo "<span style=\"color: white;\">" .
                            ($ru == 1 ? "О</span>бзоры: " :
                                "R</span>eviews: ") . $o;
                        unset ($o);
                         ?><?php
                        $o = "";
                        if ($data['filename']) {
                            $o = $data['filename'];
                        }
                        if ($o) echo "<br /><span style=\"color: white;\">" .
                            ($ru == 1 ? (strstr($data['filename'], " ") ? "В</span>ероятные имена файлов" : "В</span>ероятное имя файла") :
                                "M</span>ost possible filename" . (strstr($data['filename'], " ") ? "s" : ""))
                            . ": " . $o;
                        unset ($o); //rowspan="2" ниже строчкой
                         ?></td>
                    <td style="vertical-align:middle;text-align:center;text-shadow: black 1px 1px 2px;border: 1px solid #444;border-top: 1px solid #000;background-color:#444;"
                        ><span id="showme"><?php
                            if ($data['rate'] != "") {
                                echo "rated " . $data['rate'] . "/10<br />";
                            }
                             ?><?php /*if ($data[$id][8]!=""){echo process_links($data[$id][8],1);}*/

                            if ($data['alivelinks'] != ""){
                             ?><a href="#" id="showmelink"
                                 onclick="return false;"><?=($ru == 1 ? "Скачать" : "Download")  ?></a></span><span
                            id="loading" style="display: none"><img src="./style/loading.gif"
                                                                    width="16" height="16" alt="loading..." border="0"/></span><?php }

                        elseif (strstr($data['dowehave'], "Y")) {
                             ?><a href="./?requestlink=<?=$data['id']  ?>" id="requestlink"><?=($ru == 1 ? "Запросить ссылку" : "Request a link")  ?></a></span><span
id="loading" style="display: none"><img src="./style/loading.gif"
width="16" height="16" alt="loading..." border="0" /></span><?php } elseif (strstr($data['dowehave'], "N")) {
                            echo("<a href=\"?lookingfor=" . $data['id'] . "\" class=\"brokenlink\">" . ($ru == 1 ? "Отправить ссылку" : "Submit a link") . "</a>");
                        } else {
                            echo($ru == 1 ? "Не доступно для загрузки" : "Not available for download");
                        }

                         ?></td>
                </tr>
                <?php //<tr><td></td><td></td></tr> выше строчкой
                if ($data['desc'] != ""/* and $ru==1*/) {  ?>
                    <tr>
                    <td colspan="2" style="text-shadow: black 1px 1px 2px;padding-left:10px;border: 1px solid #444;background-color:#444;border-top:1px solid
#000;"><?=($ru == 1 ? "Описание" : "Description")  ?></td></tr>
                    <tr>
                    <td colspan="2" style="border: 1px solid
#444;/*background-color:#444;*/"><?=$data['desc'];  ?></td></tr><?php
                }
                ///////2015-10-21 комментарии print_r(GetComments($link,$page=4,$limit="0,10",$table="hl_comments"));
                $commentpageid = $id;
                //require_once('./comment_system.php');


                 ?></table>

            <?php
            $head_title = $data['name'] . ($ru == 0 ? " MOD" : "") . " - Half-Life.Loess.ru";
            $head_keywords = $data['name'] . " Half-Life mod мод скачать download Counter-Strike hl cs hldm ag моды моды goldsrc source описание";
            $head_desc = $data['name'] . " MOD for Half-Life - Half-Life.Loess.ru";
            /*
            foreach($data[$id] as $k => $v)
            {
            Array
            (
                [id] => 273
                [name] => Freeman's Fight
                [lastver] =>
                [type] => S
                [requirements] =>
                [released] => 2001-07-01
                [lastupdate] => 0000-00-00
                [filename] => fm_fight.zip
                [alivelinks] => http://www.atomicgamer.com/files/21750/fm_fight-zip
                [dowehave] => Y
                [dev] => [DFA]BLACKlue
                [homepage] =>
                [maps] => 14
                [dlltexmodlsoun] =>
                [rate] =>
                [c17rate] => c
                [c17path] => fr_fight
                [pp] => 933 freemans-fight-half-life
                [moddb] =>
                [reviews] =>
                [twhl] =>
                [desc] =>
                [anything else] =>
            )

              */
//($v!="")?$v=$v.(($v=="1")?" map":" maps")
//0 id
//1 name            .
//2 lastver         .
//3 type            .
//4 requirements    .
//5 released        .
//6 lastupdate      .
//7 filename
//8 alivelinks
//9 dowehave         +
//10 dev             .
//11 homepage        .
//12 maps            .
//13 dlltexmodlsoun  .
//14 rate            .
//15 c17rate         .
//16 c17path         .
//17 pp              .
//18 moddb           .
//19 reviews           .
//20 twhl            .
//21 desc
//22 anything else
            /*
                if($k<=8) continue;
                if($k>=9 and $k<=22) continue;
                echo($k."=>".$v."<br/>");
            }

             */

            /* ?>
            <div style="background: #d69522; color:black; border: 1px solid #c8c8c8;float: left;"><h2><?=$data[$id][1]; ?></h2></div><div style="background: #d69522; color:black; border: 1px solid #c8c8c8;float: right"><h2><<&nbsp;>></h2></div>

            <?php //*/
        } else echo "wrong num";

    } elseif (isset($_GET["brokenlink"])) {
        setcookie("manlix_guestbook_cookie_message", "here is a broken link:" . $_GET["brokenlink"], time() + 60 * 60/**24*365*/);
        echo("report broken link<br />Soon<br />
	now go <a href=\"?feedback\">feedback</a> and write about it");
        $head_title = ($ru == 0 ? "Report broken link - Half-Life.Loess.ru" : "Сообщить о битой ссылке - Half-Life.Loess.ru");
    }
    elseif (isset($_GET["requestlink"])) {
        echo("request link<br />Soon<br />
	now go <a href=\"?feedback\">feedback</a> and write about it");
        $head_title = ($ru == 0 ? "Request a link - Half-Life.Loess.ru" : "Запросить ссылку - Half-Life.Loess.ru");
    }
    elseif (isset($_GET["lookingfor"])) {
        echo("looking for a mod<br />Soon<br />
	now go <a href=\"?feedback\">feedback</a> and write about it");
        $head_title = ($ru == 0 ? "Submit mod - Half-Life.Loess.ru" : "Отправить мод - Half-Life.Loess.ru");
    }
    elseif (isset($_GET["feedback"])) {
        $head_title = ($ru == 0 ? "Feedback - Half-Life.Loess.ru" : "Обратная связь - Half-Life.Loess.ru");
        require_once('./gb.php');
    }
    elseif (isset($_GET["engine"])) {
        require_once("./content/engine.php");
        $head_title = ($ru == 0 ? "Engines - Half-Life.Loess.ru" : "Движки - Half-Life.Loess.ru");
    }
    elseif (isset($_GET["txt"])) {

        if ($_GET["txt"] == "") {     //титлы на 2й строке файла
            $files = scandir('content');
            foreach ($files as $key => $val) {
                if (substr(strrchr($val, '.'), 1) != "php") {   // получить все после последней точки
                    unset($files[$key]);
                }
            }

            foreach ($files as $key => $val) {
                $handle = @fopen("./content/" . $val, "r");
                if ($handle) {
                    $buffer = fgets($handle, 4096);
                    $buffer = trim(fgets($handle, 4096));//2я строка
                    fclose($handle);
                } else $buffer = substr($val, 0, (strlen($val) - 4));
                if (strstr($buffer, "do not post")) continue;   // отмазка на 2й строке файла
                //$head_title=("Uplinks - Half-Life.Loess.ru");
                //$head_title=($ru==0?"Articles - Half-Life.Loess.ru":"Статьи - Half-Life.Loess.ru");
                if (strstr($buffer, "//")) {
                    $buffer = substr($buffer, 2);
                    if (strstr($buffer, "||")) {
                        if ($ru == 0) {
                            $buffer = substr($buffer, 0, strpos($buffer, "||"));
                        } else {
                            $buffer = substr($buffer, strpos($buffer, "||") + 2);
                        }
                    }
                }
                if (strstr($buffer, '$head_title')) {
                    if (strstr($buffer, "ru==0?")) {
                        if ($ru == 0) {
                            $start = strpos($buffer, "ru==0?") + 7;
                            $length = strpos($buffer, '":"', $start) - $start;
                            $buffer = substr($buffer, $start, $length);
                        } else {
                            $start = strpos($buffer, '":"') + 3;
                            $length = strpos($buffer, '");', $start) - $start;
                            $buffer = substr($buffer, $start, $length);
                        }
                    } else {
                        $start = strpos($buffer, '("') + 2;
                        $length = strpos($buffer, '");', $start) - $start;
                        $buffer = substr($buffer, $start, $length);
                    }
                }
                $buffer = str_replace(" - Half-Life.Loess.ru", "", $buffer);

                $articles[] = array("filename" => $val, "timestamp" => filemtime('./content/' . $val), "topic" => $buffer);
            }
            unset($files, $buffer, $handle);

            //сортировка статей
            function build_sorter($key)
            {
                return function ($a, $b) use ($key) {
                    //return strnatcmp($a[$key], $b[$key]);
                    return $b[$key] - $a[$key];     //сравнение
                };
            }

            usort($articles, build_sorter('timestamp'));

            /// вывод списка статей
            foreach ($articles as $key => $val) {
                echo("<a href=\"./?txt=" . substr($articles[$key]["filename"], 0, -4) . "\">" . $articles[$key]["topic"] . "</a>
		<small><small>upd " . date("j M Y", $articles[$key]["timestamp"]) . "</small></small><br />");  // H:i:s
            }
            //print_r($articles);
            /*
        $hrs=ceil((time()-getlastmod())/60/60);
        if(strlen($hrs)>1){$i=substr($hrs,-2);}
        else{$i=substr($hrs,-1);}
        if($i>=21){$i=substr($i,-1);}
        if($i=="1"){$i="час";}
        elseif($i=="2"||$i=="3"||$i=="4"){$i="часа";}
        elseif($i<21){$i="часов";}

        echo ("обновлено ".$hrs." ".$i." назад");
            */
            $head_title = ($ru == 0 ? "Articles - Half-Life.Loess.ru" : "Статьи - Half-Life.Loess.ru");
        }
        elseif ($_GET["txt"] != "") {
            //if (preg_match_all("/^[0-9A-z]+$/",$_GET["txt"],$m) and !strstr($_GET["txt"],'\\')){print_r($m);

            $_GET["txt"] = preg_replace("/[^0-9a-z_]+/", "", $_GET["txt"]);
            $_GET["txt"] = str_replace(array('\\', '/', ':', '*', '?', '"', '<', '>', '|'), "", $_GET["txt"]);
            //print_r($_GET["txt"]);
            if (file_exists("./content/" . $_GET["txt"] . ".php")) {
                require_once("./content/" . $_GET["txt"] . ".php");
            } else {
                echo($ru == 0 ? "No such article, try to search at <a href=\"./?txt\">List of articles</a>" :
                    "Нет такой статьи, поищите в общем списке: <a href=\"./?txt\">Список статей</a>");
            }

        }
        /*elseif ($_GET["txt"]=="uplinks"){
        echo("<p style=\"text-shadow: white 0px 0px 1px;\">");require_once("./content/uplinks.php");echo("</p>");
        //$head_title=("Uplinks - Half-Life.Loess.ru");
        }*/
        /*elseif($_GET["txt"]=="changelog1110"){
        echo("<p style=\"\">");echo(nl2br(htmlentities(implode("",file("./content/changelog1110.txt")))));echo("</p>");
        $head_title=("&lt;1110 changelog - Half-Life.Loess.ru");}   */
        /*elseif($_GET["txt"]=="1111versions"){
        echo("");require_once("./content/1111.php");echo("");
        $head_title=("1111 versions - Half-Life.Loess.ru");}
        */
    }
    elseif (isset($_GET["events"])) {
        echo("<p style=\"text-shadow: white 0px 0px 1px;\">");
        require_once("./content/updates.txt");
        echo("</p>");
        $head_title = ($ru == 0 ? "News - Half-Life.Loess.ru" : "Новости - Half-Life.Loess.ru");
    }
    elseif (isset($_GET["edit"]) and is_numeric($_GET["edit"])) {
        $id = intval($_GET["edit"]);
        $res = mysqli_query($link,"SELECT COUNT(*) FROM `hl_mods`");
        $res = mysqli_fetch_array($res);
        if (!($id > 0 and $id <= $res[0]))//     $res[0] колво записей
        {
            echo "wrong num";
        } else {
            require_once('edit.php');
            $db = new db;
            $input = new input();
            $identity = $input->get_identity();
            $data = $db->getmodbyid($id, $identity);

            //echo ('<pre>');
            //print_r ($data);
            //селект из новой таблицы едитов по идентити
            //выбор идент
            //если есть свой идент выбр его иначе ниже
            //$data=GetInfo($link,"*",$id,"","0");//мои исходные данные, родная таблица
            //print_r ($data);
            foreach ($data as $k => $v) $data[$k] = htmlspecialchars($v, ENT_QUOTES | ENT_SUBSTITUTE, 'CP1251');//$data['name']=str_replace('&',"&amp;",$data['name']);//заменяем амперсанды в имени (есть в id=139 С&С)
            //htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'utf-8')
            echo('Edits available only for your identity until it\'s being reviewed! Please use existing markup as a sample and separate links with spaces.<br />');
            echo($data['name'] . ' mod edits:<br />');
            echo('<a href="./?mod=' . $data['id'] . '">(view current)</a><br />');
            $res = mysqli_query($link,"select identity,COUNT(*) from hl_mods_edits WHERE id=" . $id . " group by identity;");

            while ($row = mysqli_fetch_array($res)) echo($row['identity'] . ' (' . $row['COUNT(*)'] . ')<br />');
            $editsamount = $db->getmodeditscount($id, $_SERVER["REMOTE_ADDR"]);
            if ($editsamount >= 20) die('This MOD has exceeded maximum amount of edits!<br/>
please, check back later after edits approval');

            echo('<form action="./edit.php" method="POST">');// enctype="text/plain" - пост не работал яхз
            echo('<table class="moddb"><tr class="head"><td>param</td><td>content</td></tr>');
            echo('<tr><td align="right">Your edit identity:</td><td><input name="identity" type="hidden" value="' . $identity . '">' . $identity . '</td>');
            echo('<tr><td align="right">Mod id:</td><td><input name="id" type="hidden" value="' . $data['id'] . '">' . $data['id'] . '</td>');
            echo('<tr><td align="right">Mod name from liblist.gam:</td><td><input name="name" type="text" value="' . $data['name'] . '" maxlength="123" size="80"></td></tr>');
            echo('<tr><td align="right">Last known version:</td><td><input name="lastver" type="text" value="' . $data['lastver'] . '" maxlength="39" size="39"></td></tr>');
            echo('<tr><td align="right">Mod type:</td><td><input name="type" type="text" value="' . $data['type'] . '" maxlength="28" size="28"></td></tr>');
            echo('<tr><td align="right">Mod requirements to run:</td><td><input name="requirements" type="text" value="' . $data['requirements'] . '" maxlength="11" size="10"></td></tr>');
            echo('<tr><td align="right">Date of first release:</td><td><input name="released" type="text" value="' . $data['released'] . '" maxlength="10" size="10"> YYYY-mm-dd</td></tr>');
            echo('<tr><td align="right">Date of last released update:</td><td><input name="lastupdate" type="text" value="' . $data['lastupdate'] . '" maxlength="10" size="10"> YYYY-mm-dd</td></tr>');
            echo('<tr><td align="right">Last known archive filename(s):</td><td><input name="filename" type="text" value="' . $data['filename'] . '" maxlength="117" size="80"></td></tr>');
            echo('<tr><td align="right">Alive links:</td><td><textarea name="alivelinks" cols="78" rows="3">' . $data['alivelinks'] . '</textarea></td></tr>');
            if (isset($data['dowehave']))
                echo('<tr><td align="right">Is it steam-compatible?</td><td><input name="steamcompatible" type="checkbox"' . (strstr($data['dowehave'], 'team') ? " checked" : "") . '></td></tr>');
            elseif (isset($data['steamcompatible']))
                echo('<tr><td align="right">Is it steam-compatible?</td><td><input name="steamcompatible" type="checkbox"' . (strstr($data['steamcompatible'], 'on') ? " checked" : "") . '></td></tr>');
            echo('<tr><td align="right">Who\'s the developer?</td><td><textarea name="dev" cols="78" rows="3">' . $data['dev'] . '</textarea></td></tr>');
            echo('<tr><td align="right">Homepage(s):</td><td><textarea name="homepage" cols="78" rows="3">' . $data['homepage'] . '</textarea></td></tr>');
            echo('<tr><td align="right">Amount of maps:</td><td><input name="maps" type="text" value="' . $data['maps'] . '" maxlength="20" size="16"></td></tr>');
            echo('<tr><td align="right">New DLLs?</td><td><input name="dll" type="checkbox"' . (strstr($data['dlltexmodlsoun'], 'dll') ? " checked" : "") . '></td></tr>');
            echo('<tr><td align="right">New textures?</td><td><input name="tex" type="checkbox"' . (strstr($data['dlltexmodlsoun'], 'tex') ? " checked" : "") . '></td></tr>');
            echo('<tr><td align="right">New models?</td><td><input name="mdl" type="checkbox"' . (strstr($data['dlltexmodlsoun'], 'mdl') ? " checked" : "") . '></td></tr>');
            echo('<tr><td align="right">New sounds?</td><td><input name="snd" type="checkbox"' . (strstr($data['dlltexmodlsoun'], 'snd') ? " checked" : "") . '></td></tr>');
            if (isset($data['c17rate'])) echo('<tr><td align="right">City17 rating:</td><td>' . (($data['c17rate'] != "") ? $data['c17rate'] : '-') . '</td></tr>');
            if (isset($data['c17path'])) echo('<tr><td align="right">City17 sitepath:</td><td>' . (($data['c17path'] != "") ? $data['c17path'] : '-') . '</td></tr>');
            echo('<tr><td align="right">Planetphillip id, hardlink and/or link:</td><td><input name="pp" type="text" value="' . $data['pp'] . '" maxlength="123" size="80"></td></tr>');
            echo('<tr><td align="right">Moddb link:</td><td><input name="moddb" type="text" value="' . $data['moddb'] . '" maxlength="123" size="80"></td></tr>');
            echo('<tr><td align="right">Other reviews links:</td><td><textarea name="reviews" cols="78" rows="3">' . $data['reviews'] . '</textarea></td></tr>');
            echo('<tr><td align="right">TWHL link:</td><td><input name="twhl" type="text" value="' . $data['twhl'] . '" maxlength="123" size="80"></td></tr>');
            echo('<tr><td align="right">Description text:</td><td><textarea  name="desc" cols="78" rows="10">' . $data['desc'] . '</textarea></td></tr>');
            echo('<tr><td align="right"><input type="reset" value="Reset"></td><td><input type="submit" value="Send"></td></tr>');
            echo('</table><br/>');
            // echo("<pre>");
            //print_r($data);
        }


        $head_title = ($ru == 0 ? "Edit - Half-Life.Loess.ru" : "Правка - Half-Life.Loess.ru");
    }
    elseif (isset($_GET["links"])) {
        $head_title = ($ru == 0 ? "Links - Half-Life.Loess.ru" : "Сайты - Half-Life.Loess.ru");;
        require_once("./content/links.txt");
    }
    elseif (isset($_GET["server"])) {
    	require_once("./content/server.php");
    }
    elseif (isset($_GET["donate"])) {
    	require_once("./content/donate.php");
    }
    elseif (isset($_GET["download"])) {
    	require_once("./content/download.php");
    }
    elseif (isset($_GET["upload"])) {
        require_once("lib_importcsvtomysql.php");
    }
    elseif (isset($_GET["edits"])) {
        require_once('edit.php');
        $db = new db;
        //$input = new input();
        //$identity = $input->get_identity();
        echo('<pre>');
        $data = $db->rawquery('SELECT * from hl_mods_edits');
        $data=$data->fetchAll(PDO::FETCH_ASSOC);

        function filter(&$value) {$value = htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'CP1251'); }
        array_walk_recursive($data, "filter");

        print_r($data);

    }
}

if((count($_GET)==0 and $ru==0) or (count($_GET)==1 and isset($_GET["en"]))){

$target=mktime(0,0,0,11,19,1998);
$today=time();
//$today=mktime(0,0,0,12,21,1999);
$difference=($today-$target)/3600/24+0.3;//дни
$years=floor($difference/365);//кол-во лет округляем вниз
$difference=$difference-$years/4;//убираем високосные дни
$years=floor($difference/365);//кол-во лет без високосных дней
$months=floor($difference%365/(365/12));
$days=floor($difference%365-$months*(365/12));
echo "<p>".process_templates("reqs",1000,"","",0)." Half-Life was released ";
if($years>0){echo $years." year".($years>1?"s":"");}
if($months>0){echo ", ".$months." month".($months>1?"s":"");}
if($days>0){echo " and ".$days." day".($days>1?"s":"");}
echo " ago.</p>";
echo "<p>Here you can download 99% of the modifications ever released for it. </p>";
echo("<p style=\"/*text-shadow: white 0px 0px 1px;*/\">For a full list go to: <a href=\"./?mods\">HL MODS</a> or <a href=\"./?mods&amp;sortby=last\">Last MODS</a></p>");
echo "<p>if you have any questions or if you have found any additional links then leave a comment at <a href=\"./?feedback\">guestbook</a>.</p>";
echo("<br /><br />Last events:<p style=\"/*text-shadow: white 0px 0px 1px;*/\">");require_once("./content/updates.txt");echo("</p>");

	/* ?>The main idea of this site - to collect, organize and systematize the huge number of mods of the immortal games from Valve. The site does not specialize in just <u>one type</u> of modifications, maps, games, descriptions of them, etc. The aim is wiki-like organization of the library of any manifestation of mod-building, whether it is multiplayer map, shown in some African site, or an oficial mod, independently overgrown by additions. Distinctive features of the site should be dynamic, relevant, ability to edit any who are able to correctly describe such manifestations.<br />
The site was just born, but already has a huge database of <?php
echo("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods\">modifications for GoldSRC</a>");
 ?>, wikification of the site is planned as soon as possible, because rivals are not asleep =) <br />
The site hopes to be not only "thing in itself", but also as open as possible, both for users and for the creators of mods, and even bloggers. In the future site may become an open analogue of moddb.
<?php*/
}
elseif((count($_GET)==0 and $ru==1) or (count($_GET)==1 and isset($_GET["ru"]))){

$target=mktime(0,0,0,11,19,1998);
$today=time();
//$today=mktime(0,0,0,12,21,1999);
$difference=($today-$target)/3600/24+0.3;//дни
$years=floor($difference/365);//кол-во лет округляем вниз
$difference=$difference-$years/4;//убираем високосные дни
$years=floor($difference/365);//кол-во лет без високосных дней
$months=floor($difference%365/(365/12));
$days=floor($difference%365-$months*(365/12));
echo "<p>".process_templates("reqs",1000,"","",0)." Half-Life был издан ";
if($years>0){echo $years." лет";}
if($months>0){echo ", ".$months." месяц".($months>1?"ев":"");}
if($days>0){echo " и ".$days." дней";}
echo " назад.</p>";
echo "<p>Здесь можно скачать 99% модов Half-Life. Если не получается - <a href=\"./?feedback\">попросите в ГБ</a> поправить линк</p>";
echo("<p style=\"/*text-shadow: white 0px 0px 1px;*/\">весь список: <a href=\"./?mods\">HL MODS</a> или <a href=\"./?mods&amp;sortby=last\">Последние МОДы</a>,</p>");
echo "<p>по всем вопросам прошу в <a href=\"./?feedback\">гостевуху</a>.</p>";
echo("<br /><br />Последние события:<p style=\"/*text-shadow: white 0px 0px 1px;*/font-family:sans-serif;\">");require_once("./content/updates.txt");echo("</p>");
/* ?>Главная идея этого сайта - собрать, упорядочить и систематизировать огромное количество модов для бессмертных движков от Valve. Сайт не специализируется на <u>отдельном типе</u> модификаций, карт, игр, описаний к ним, и пр. Задачей ставится организация wiki-подобной библиотеки о любом проявлении модостроения, будь то мультиплеерная карта, зарелизенная самиздатом на каком-нибудь африканском сайте, или официальный мод, самостоятельно обросший дополнениями. Отличительными чертами сайта должны быть динамичность, актуальность, возможность редактирования любым, кто в состоянии грамотно описать подобные проявления.<br />
Сайт только родился, но уже имеет огромную базу <?php
echo("<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods\">модификаций под GoldSRC</a>");
 ?>, викификация сайта планируется в кратчайшие сроки, потому что конкуренты не дремлют =)<br />
Сайт надеется быть не только "вещью в себе", но и максимально открытым, как для пользователей, так и для создателей модов, и даже блоггеров. В будущем сайт, возможно, станет открытым аналогом moddb.

<?php  */
}


 ?>
</td></tr>
<tr>
<td><?php
if($hosting=="www"){
	 ?><div align="left" style="padding-left:10px;padding-bottom:30px">
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t15.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='88' height='31'><\/a>")
//--></script><!--/LiveInternet-->
<?php
	if(1==1){  ?><br />
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">//<![CDATA[
var a='';js=10;d=document;
try{a+=';r='+escape(d.referrer);}catch(e){}try{a+=';j='+navigator.javaEnabled();js=11;}catch(e){}
try{s=screen;a+=';s='+s.width+'*'+s.height;a+=';d='+(s.colorDepth?s.colorDepth:s.pixelDepth);js=12;}catch(e){}
try{if(typeof((new Array).push('t'))==="number")js=13;}catch(e){}
try{d.write('<a href="http://top.mail.ru/jump?from=2019956"><img src="http://d2.cd.be.a1.top.mail.ru/counter?id=2019956;t=47;js='+js+
a+';rand='+Math.random()+'" alt="" style="border:0;" height="31" width="88" \/><\/a>');}catch(e){}//]]></script>
<noscript><p><a href="http://top.mail.ru/jump?from=2019956"><img src="http://d2.cd.be.a1.top.mail.ru/counter?js=na;id=2019956;t=47"
style="border:0;" height="31" width="88" alt="" /></a></p></noscript>
<!-- //Rating@Mail.ru counter -->
<br />

	<?php }
 ?>
<!-- Yandex.Metrika counter --><div style="display:none;"><script type="text/javascript">(function(w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter5527900 = new Ya.Metrika({id:5527900, clickmap:true, trackLinks:true, webvisor:true}); } catch(e) { } }); })(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/5527900" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</div><div align="left" style="margin-left:0px;padding-bottom:0px"><a href="http://clustrmaps.com/map/Hl.loess.ru"><img
src="http://www2.clustrmaps.com/stats/maps-no_clusters/hl.loess.ru-thumb.jpg"
alt="Locations of visitors to this page" <?php
	if(count($_GET)==0 or isset($_GET["mods"]) or isset($_GET["txt"]) or (count($_GET)==1 and isset($_GET["ru"])) or
	(count($_GET)==1 and isset($_GET["en"]))){echo("width=\"120\" height=\"80\"");}
	else echo("width=\"0\" height=\"0\"");
	 ?>/></a></div><?php
	}
elseif($hosting=="localhost"){
 ?><div align="left"><img style="padding-left:10px;padding-bottom:30px" src="./hit.gif"
width="88" height="31" alt="" border="0" /></div><?php
	}
 ?></td>
</tr>
</table>
	</div>
<?php
/*	<div id="footer">
		<!-- Footer start -->
		<p><strong>Footer</strong> (always at the bottom). View more <a href="http://matthewjamestaylor.com/blog/-website-layouts">website layouts</a> and <a href="http://matthewjamestaylor.com/blog/-web-design">web design articles</a>.</p>
		<!-- Footer end -->
	</div> */


$end_array = explode(" ",microtime());
echo("<div style=\"color:".($hosting=="localhost"?"#c8c8c8":"black").";/*text-shadow: black 1px 1px 2px;padding-left:3px;border: 1px solid #444;
background-color:#444;border-top:1px solid #000;*/\">");
//echo($_SERVER['HTTP_REFERER']."<br />");
printf("Generated in %f seconds</div>",$end_array[1] + $end_array[0] - $start_array[1] - $start_array[0]);
mysqli_close($link);



//echo $out;
 ?>
</div>

</body>
</html><?php
$out1=ob_get_contents();
ob_end_clean();
/*$replace=array(
"/Half-Life.Loess.ru - MODs/"=>$head_title,
"/Half-Life mod мод скачать download Counter-Strike hl cs hldm ag моды моды goldsrc source описание/"=>$head_keywords,
"All MODs for Half-Life - Half-Life.Loess.ru"=>$head_desc
);*/
//$out1=preg_replace("/Half-Life.Loess.ru - MODs/",$head_title,$out1);
//$out1=preg_replace("/Half-Life mod мод скачать download Counter-Strike hl cs hldm ag моды моды goldsrc source описание/",$head_keywords,$out1);
$out1=preg_replace(
array(
"/Half-Life.Loess.ru - MODs/",
"/Half-Life mod мод скачать download Counter-Strike hl cs hldm ag моды моды goldsrc source описание/",
"/All MODs for Half-Life - Half-Life.Loess.ru/")
,array($head_title,$head_keywords,$head_desc),$out1);

echo ($out1);

//ob_end_flush();
 ?>