<?php
//echo ($_SERVER["HTTP_X_REQUESTED_WITH"].$_SERVER["HTTP_REFERER"]);     XMLHttpRequest    http://hl.loess.ru/?mod=9
//elseif($page=='iteminfo' && isset($_GET['id'])&&isset($_SERVER["HTTP_X_REQUESTED_WITH"])&&$_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest"){iteminfo($_GET['id']);}
/*echo("<pre>");
print_r($_SERVER);
echo("</pre>");*/
//sleep (1);
//echo("onthego");
//$data=GetInfo("*",$id,"","0");
//$hosting=($_SERVER["DOCUMENT_ROOT"]=="/home/loess/domains/hl.loess.ru/public_html")?"www":($_SERVER["DOCUMENT_ROOT"]=="X:/home/loess.ru/hl"?"localhost":die("unknown DB link"));
$hosting='www';

if (isset($_GET['id'])
	and is_numeric($_GET["id"])
	and isset($_GET['comm'])
	and $_GET['id']>0
	and isset($_SERVER["HTTP_X_REQUESTED_WITH"])
	and $_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest"
	and stristr($_SERVER["HTTP_REFERER"],"https://hl.loess.ru/")){

	@require_once("lib.php");
	@require_once("lib_mysql.php");
//	@mysql_query('SET NAMES cp1251');
	$id=intval($_GET["id"]);
//  function GetInfo($select,$id=0,$where="",$limit="",$table="hl_mods") {  // * или поля через запятую
    $data=GetInfo($link,"alivelinks",$id,"","0");
    if($_GET["comm"]!=substr(md5(md5($data['alivelinks']).date('F')),0,3)) exit("error 3"); //не сходится $_GET["comm"]
    if($data=="") exit("error 2");                                              //пустой ответ
echo process_links($data['alivelinks'],1);
$f=@fopen("./persistent/downloads.txt","a");
@flock($f,LOCK_EX);
@fwrite($f,$_GET['id']."	".date("Y.m.d H:i:s")." ".$_SERVER['REMOTE_ADDR']."	(".$_SERVER['HTTP_USER_AGENT'].")\r\n");
@flock($f,LOCK_UN);
@fclose($f);
}
else echo("error 1");                                                           //неверный запрос


?>