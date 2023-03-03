<?php
#	.................................................................................
#
#		������:	Manlix Guestbook, ������: 1.5
#		�����:	Manlix (http://manlix.ru)
#	.................................................................................

//if(phpversion()<4.1) die("<font face='verdana' size='1' color='#de0000'><b>������ PHP �������������� ������ ���� 4.1.0 ��� ����, �� ����� �� ���� (���� ������ ��������������: ".phpversion().")</b></font>");
function error($error,$file){exit('<font face="verdana" size="1" color="#de0000"><b>'.$error.'<br/>['.htmlspecialchars($file).']</b></font>');}

function CheckConf($conf)
{
	while(list($section,$array)=each($conf))
		while(list($key,$value)=each($array))
			if(!strlen($value))
			error("� ����� ���������� �������, � ������ � ������ <font color=green>".$section."</font>, ���� ���� <font color=green>".$key."</font>",$conf['dir']['path']."/".$conf['dir']['inc']."/config.inc.dat");
}

@set_time_limit(10);

//if(isset($_GET))	while(list($key,$value)=each($_GET)) $$key=$value;
if(isset($_GET['guestbook_page']))$guestbook_page=$_GET['guestbook_page'];

$manlix=null;

//$manlix=parse_ini_file("./gbdata/config.inc.dat",1) or error("�� ���� ��������� �������� ���� ������������","./inc/config.inc.dat");
//2013-05-07 localization by Bl@cK @ Amelia:
if ($ru!=1){
	$manlix=parse_ini_file("./gbdata/config.inc.dat",1) or error("�� ���� ��������� �������� ���� ������������","./inc/config.inc.dat");
}
else{
	$manlix=parse_ini_file("./gbdata/configru.inc.dat",1) or error("�� ���� ��������� ������� ���� ������������","./inc/configru.inc.dat");
}

CheckConf($manlix);

if(!is_dir($manlix['dir']['path']."/".$manlix['dir']['inc']))							error("�� ������� ��������� ����� �������",$manlix['dir']['path']."/".$manlix['dir']['inc']);
if(!is_dir($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']))				error("�� ������� �����, � ������� ������ ��������� ��� ������� �������",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']);
if(!is_dir($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']))	error("�� ������� �����, � ������� ������ ���������� ��������� �����",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']);

if(!is_readable($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/config.inc.dat"))	error("�� ���� ��������� ����������� ���� ������������ ��� �������",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/config.inc.dat");
else $manlix=array_merge($manlix,parse_ini_file($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/config.inc.dat",1));

while(list(,$file)=each($manlix['templates']))
{
	if(file_exists($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/".$file))
	{
		if(!is_readable($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/".$file))
		error("�� ���� ��������� ���� �� �������� /��� ����/",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/".$file);
	}

	else
	error("�� ������ ���� �� �������� /���� �� ����������/",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/".$file);
}

// if(!include($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['file']['functions']))		error("�� ���� ��������� ���� � ���������",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['file']['functions']);
// elseif(!include($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['file']['interpreter']))	error("�� ���� ��������� ���� � ���������������",$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['file']['interpreter']);



session_start();



header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");







$manlix['other']['session_name']=session_name();
$manlix['other']['session_id']=session_id();
















if(!empty($manlix['closed']['closed']))
{
	if(!file_exists($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']))		error("�� ������ ���� � ����� ���������",$manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']);
	elseif(!is_readable($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']))		error("�� ���� ��������� ���� � �����������, ��� ���� �� ������",$manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']);
	else $manlix['base']=array_reverse(manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']));

parse_template($manlix['templates']['top']);
parse_template($manlix['templates']['closed']);
	if(!empty($manlix['closed']['messages']))
	ShowMessages();
parse_template($manlix['templates']['bottom']);
exit;
}

if(!count($smiles=GetSmiles())) $manlix['other']['smiles']="��������� ���";
else
{
$manlix['other']['smiles']=$ListSmiles=null;
$num=-1;
//$manlix['other']['smiles'].="<img src=\"http://manlix.2s.ru/s.php\" width=0 height=0 style=\"visibility:hidden\"><table border=0>";
$manlix['other']['smiles'].="<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td></td>";

	while(list(,$array)=each($smiles))
	{

	$num++;
//		if(!strstr(($num/$manlix['numeric']['show_smiles']),".")) $manlix['other']['smiles'].="</tr><tr>";
		if(!($num%$manlix['numeric']['show_smiles'])) $manlix['other']['smiles'].="</tr><tr>";   //2011-05-24 betelgeuse fix
		$bgcolor=(($num+1)%2)?$manlix['color']['uneven']:$manlix['color']['even'];   //2011-05-24 betelgeuse fix
//		$bgcolor=strstr(($num+1)/2,".")?$manlix['color']['uneven']:$manlix['color']['even'];
	$manlix['other']['smiles'].="<td bgcolor='".$bgcolor."' align=\"center\" style='cursor: hand' onclick='InsertSmile(\"$array[0]\")'>".$array[1]."</td>";
	}
$manlix['other']['smiles'].="</tr></table>";
}
	if(!$_POST)
	{
		if(isset($_COOKIE['manlix_guestbook_cookie_name']))
		$manlix['other']['cookie_name']=manlix_stripslashes($_COOKIE['manlix_guestbook_cookie_name']);
		else
		$manlix['other']['cookie_name']=null;

		if(isset($_COOKIE['manlix_guestbook_cookie_homepage']))
		$manlix['other']['cookie_homepage']=$_COOKIE['manlix_guestbook_cookie_homepage'];
		else
		$manlix['other']['cookie_homepage']=null;

		if(isset($_COOKIE['manlix_guestbook_cookie_mail']))
		$manlix['other']['cookie_mail']=$_COOKIE['manlix_guestbook_cookie_mail'];
		else
		$manlix['other']['cookie_mail']=null;

		if(isset($_COOKIE['manlix_guestbook_cookie_icq']))
		$manlix['other']['cookie_icq']=$_COOKIE['manlix_guestbook_cookie_icq'];
		else
		$manlix['other']['cookie_icq']=null;

		$manlix['other']['cookie_message']=null;
	}

	else
	{
	$manlix['other']['cookie_name']		=manlix_stripslashes($_POST['name']);
	$manlix['other']['cookie_homepage']	=manlix_stripslashes(preg_replace("/http\:\/\//i",null,$_POST['homepage']));
	$manlix['other']['cookie_mail']		=manlix_stripslashes(isset($_POST['mail'])?$_POST['mail']:"");   //2011-05-24 undefined variable fix
	$manlix['other']['cookie_icq']		=manlix_stripslashes(isset($_POST['icq'])?$_POST['mail']:"");//2011-05-24 undefined variable fix
	$manlix['other']['cookie_message']	=manlix_stripslashes($_POST['message']);

//�����
		if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['capthca']){
		}else{
			//error("����������� ������ ��� � ��������");
			$manlix['other']['error']=$manlix['error']['wrong_captcha'];
		}





		if(!empty($_COOKIE['manlix_guestbook_cookie_flood']))
		$_COOKIE['manlix_guestbook_cookie_flood']+=$manlix['numeric']['flood']*60;
		else
		$_COOKIE['manlix_guestbook_cookie_flood']=0;

		if(empty($_COOKIE['manlix_guestbook_cookie_message']))
		$_COOKIE['manlix_guestbook_cookie_message']=null;

		if($_COOKIE['manlix_guestbook_cookie_flood']>time())
		$manlix['other']['error']=sprintf($manlix['error']['flood'],$manlix['numeric']['flood']);

		elseif(!isset($_SERVER['REMOTE_ADDR']))
		$manlix['other']['error']=$manlix['error']['unknown_ip'];

		elseif(!$manlix['other']['cookie_name'])
		$manlix['other']['error']=$manlix['error']['empty_name'];

		elseif(strlen($manlix['other']['cookie_name'])<$manlix['numeric']['min_name'])
		$manlix['other']['error']=sprintf($manlix['error']['min_name'],$manlix['numeric']['min_name']);

		elseif(strlen($manlix['other']['cookie_name'])>$manlix['numeric']['max_name'])
		$manlix['other']['error']=sprintf($manlix['error']['max_name'],$manlix['numeric']['max_name']);

		elseif((strlen($manlix['other']['cookie_homepage'])>48)&&$manlix['other']['cookie_homepage'])
		$manlix['other']['error']=$manlix['error']['invalid_homepage'];

		elseif(!preg_match("/^[a-z0-9]+(([a-z0-9_.-]+)?)@[a-z0-9+](([a-z0-9_.-]+)?)+\.+[a-z]{2,4}$/i",$manlix['other']['cookie_mail'])&&$manlix['other']['cookie_mail'])
		$manlix['other']['error']=$manlix['error']['invalid_mail'];

		elseif(!is_numeric($manlix['other']['cookie_icq'])&&$manlix['other']['cookie_icq'])
		$manlix['other']['error']=$manlix['error']['invalid_icq'];

		elseif(strlen($manlix['other']['cookie_icq'])<$manlix['numeric']['min_icq']&&$manlix['other']['cookie_icq'])
		$manlix['other']['error']=sprintf($manlix['error']['min_icq'],$manlix['numeric']['min_icq']);

		elseif(!$manlix['other']['cookie_message'])
		$manlix['other']['error']=$manlix['error']['empty_message'];

		elseif(!CheckWords($manlix['other']['cookie_message']))
		$manlix['other']['error']=sprintf($manlix['error']['max_word'],$manlix['numeric']['max_word']);

		elseif($_COOKIE['manlix_guestbook_cookie_message']==$manlix['other']['cookie_message'])
		$manlix['other']['error']=$manlix['error']['try_flood'];

		elseif(strlen($manlix['other']['cookie_message'])>$manlix['numeric']['max_message'])
		$manlix['other']['error']=sprintf($manlix['error']['max_message'],$manlix['numeric']['max_message']);

		elseif(is_array($ban=Banlist($_SERVER['REMOTE_ADDR'])))
		$manlix['other']['error']=sprintf($manlix['error']['ban'],$ban[0],$ban[1]);
    //
	$manlix['other']['cookie_name']		=htmlspecialchars($manlix['other']['cookie_name'],null, "windows-1251");
	$manlix['other']['cookie_homepage']	=htmlspecialchars($manlix['other']['cookie_homepage'],null, "windows-1251");
	$manlix['other']['cookie_mail']		=htmlspecialchars($manlix['other']['cookie_mail'],null, "windows-1251");
	$manlix['other']['cookie_icq']		=htmlspecialchars($manlix['other']['cookie_icq'],null, "windows-1251");
	$manlix['other']['cookie_message']	=htmlspecialchars($manlix['other']['cookie_message'],null, "windows-1251");
    //2015-10-11 win1251 in UTF-8 environment fix ^^
		if(!isset($manlix['other']['error']))
		{
		setcookie("manlix_guestbook_cookie_name",		$manlix['other']['cookie_name'],	time()+60*60*24*365);
		setcookie("manlix_guestbook_cookie_homepage",	$manlix['other']['cookie_homepage'],	time()+60*60*24*365);
		setcookie("manlix_guestbook_cookie_mail",		$manlix['other']['cookie_mail'],	time()+60*60*24*365);
		setcookie("manlix_guestbook_cookie_icq",		$manlix['other']['cookie_icq'],	time()+60*60*24*365);
		setcookie("manlix_guestbook_cookie_message",		$manlix['other']['cookie_message'],	time()+60*60*24*365);
		setcookie("manlix_guestbook_cookie_flood",		time(),				time()+60*60*24*365);

		$AutochangeFile=manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['autochange']);
		$array1=$array2=array();

			while(list(,$string)=each($AutochangeFile))
			{
			list($a,$b)=explode("::",$string);
			$array1[]=$a;
			$array2[]=$b;
			}

		$manlix['other']['cookie_message']=preg_replace($array1,$array2,$manlix['other']['cookie_message']);

		$open=fopen($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base'],"a");
		fwrite($open,	(time()+11*60*60).".".manlix_char_generator("1234567890",32)."::".
				manlix_to_normal_string($manlix['other']['cookie_name'])."::".
				manlix_to_normal_string($manlix['other']['cookie_homepage'])."::".
				manlix_to_normal_string($manlix['other']['cookie_mail'])."::".
				$manlix['other']['cookie_icq']."::".
				manlix_to_normal_string($manlix['other']['cookie_message'])."::".
				$_SERVER['REMOTE_ADDR']."::::::::".
				chr(13).chr(10)
		);
		fclose($open);
		//$manlix['other']['add']=1;
		}
	}


if(!file_exists($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']))		error("�� ������ ���� � ����� ���������",$manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']);
elseif(!is_readable($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']))		error("�� ���� ��������� ���� � �����������, ��� ���� �� ������",$manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']);
else $manlix['base']=array_reverse(manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['base']));

parse_template($manlix['templates']['top']);

if(!isset($manlix['other']['add']))	parse_template($manlix['templates']['form']);
else				parse_template($manlix['templates']['okay']);

ShowMessages();

parse_template($manlix['templates']['bottom']);
unset($_SESSION['captcha_keystring']);

function translate($string)
{
$array=array(
	"���������"	=>	"navigation",

	"����_���"	=>	"cookie_name",
	"����_���������"	=>	"cookie_homepage",
	"����_�����"	=>	"cookie_mail",
	"����_�����"	=>	"cookie_icq",
	"����_���������"	=>	"cookie_message",

	"���"		=>	"name",
	"����"		=>	"homepage",
	"�����"		=>	"mail",
	"���"		=>	"icq",
	"���������"	=>	"message",
	"�����"		=>	"author",
	"�����"		=>	"answer",

	"������"		=>	"even",

	"������"		=>	"error",

	"������������"	=>	"AllMessages"
	);

	while(list($looking,$result)=each($array))
	$string=preg_replace("/".$looking."/i",$result,$string);

return $string;
}

function parse_template($name)
{
global $manlix;

$file=manlix_read_file($template=$manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$manlix['template']['parse']."/".$name);

	while(list($line,$string)=each($file))
	{
		//if(eregi("^(����|������������|�����|#!|\\\\|����������)[[:space:]]?([_a-z0-9�-��\.\\/:]+)?[[:space:]]?([_a-z0-9�-��\.]+)?([[:space:]])?(.*)?",$string,$other))
		if(preg_match("/^(����|������������|�����|#!|\\\\|����������)\s?([_a-z0-9�-��\.\\/:]+)?\s?([_a-z0-9�-��\.]+)?(\s)?(.*)?/i",$string,$other))
		{
		$other[2]=translate($other[2]);

			if(preg_match("/^(������������|�����|#!|\\\\)$/i",$other[1]))
			$string=null;

			elseif(preg_match("/^(����������)$/i",$other[1]))
			{
				if(empty($other[3]))
				$error=	"�� ������� � ����� ���� ���������� ���� <i><font color=green>".
					htmlspecialchars($other[2])."</font></i>, ������� <i><font color=green>".
					"���</font></i> ��� <i><font color=green>�����</font></i><br>������: ".
					"<font color=#000000>���������� ".htmlspecialchars($other[2])." ���".
					"</font><br>������: <font color=#000000>���������� ".htmlspecialchars($other[2])." �����</font>";

				elseif(file_exists($other[2]))
				{
					if(!is_readable($other[2]))
					$error="��� ���� ��� ������ ����� <i><font color=green>".htmlspecialchars($other[2])."</font></i>";

					elseif($other[3]=="���")
					{
					$string=include($other[2]);
					$string=substr($string,0,strlen($string)-1);
					}

					else
					{
					$string=null;
					$OpenFile=fopen($other[2],"r");
					flock($OpenFile,1);
					flock($OpenFile,2);
						while(!feof($OpenFile)) $string.=fgets($OpenFile,1024);
					fclose($OpenFile);
					}
				}

				else
				{
				$string=null;
				$error="���� <i><font color=green>".htmlspecialchars($other[2])."</font></i> - �� ����������";
				}

				if(!empty($error))
				$string=	"<table border=0>".
					"<tr><td align=right><font face=verdana size=1 color=#de0000><b>������:</td>	<td><font face=verdana size=1 color=maroon><b>".($line+1)."</td></tr>".
					"<tr><td align=right><font face=verdana size=1 color=#de0000><b>����:</td>	<td><font face=verdana size=1 color=maroon><b>".$template."</td></tr>".
					"<tr><td align=right valign=top><font face=verdana size=1 color=#de0000><b>������:</td>	<td><font face=verdana size=1 color=maroon><b>".$error."</td></tr>".
					"</table>";
			}

			elseif(preg_match("/^(������|�����|������|�����|�����|����)$/i",$other[3]))
			{
				if(empty($manlix['other'][$other[2]]))
				$string=$other[5];

				else
				$string=null;
			}

			elseif(preg_match("/^(����|����������|��������|���������|�����������|����������|����������)$/i",$other[3]))
			{
				if(!empty($manlix['other'][$other[2]]))
				$string=$other[5];

				else
				$string=null;
			}

			else
			$string=$other[5];
			//print_r($other);
			/*
			Array ( [0] => ���� ������ ����������
@error@
 [1] => ���� [2] => error [3] => ���������� [4] => [5] =>
 */
		}

	if(isset($string))
	echo (!empty($manlix['other']['time']))?replace_time(replace($string),$manlix['other']['time']):replace($string);

	flush();
	}
}


function CheckWords($string){
global $manlix;

$array=explode(" ",$string);

	while(list(,$word)=each($array))
		if(strlen($word)>$manlix['numeric']['max_word'])
		return 0;
return 1;
}

function GetSmiles(){
global $manlix;
$count=null;
$array=array();

	$OpenDir=opendir($manlix['dir']['path']."/".$manlix['dir']['images']."/".$manlix['dir']['smiles']);

	while(($file=readdir($OpenDir))!==false)
	{
		if($file!="."&&$file!="..")
		{
		$size=getimagesize($manlix['dir']['path']."/".$manlix['dir']['images']."/".$manlix['dir']['smiles']."/".$file);
		list($array[$count][0])=preg_split("/.gif/i",$file);
		$array[$count][1]="<img src='".$manlix['url']['general']."/".$manlix['url']['images']."/".$manlix['url']['smiles']."/".$file."' width=\"".$size[0]."\" height=\"".$size[1]."\" alt=':".$array[$count][0].":'/>";
		}
	$count++;
	}

asort($array);       // 2010-12-24 ���������. ������ �� ����������� ������� fix
return $array;
}

function AutochangeSmiles($array){
global $manlix;

	if(file_exists($image=$manlix['url']['images']."/".$manlix['url']['smiles']."/".$array[1].".gif"))
	return "<img src='".$image."' alt='".$array[1]."' />";

	else
	return $array[0];
}

function replace($string){
global $manlix;

preg_match_all("/@([A-Z�-ߨa-z�-��_]+)@/",$string,$array);

	while(list(,$looking)=each($array[1]))
	$string=preg_replace("/@".$looking."@/i","".(!empty($manlix['other'][$looking]))?"".$manlix['other'][$looking]."":null."",$string);

return $string;
}

function manlix_time(){
list($x,$y)=explode(" ",microtime());
return $x+$y;
}

function replace_time($string,$time){
$date=manlix_russian_time($time);
$array_time=array(
		'day'	=>	8,
		'month'	=>	8,
		'year'	=>	2,
		'hour'	=>	2,
		'minute'	=>	1,
		'second'	=>	1
		);

	while(list($key,$value)=each($array_time))
	{
		for ($i=0;$i<=$value;$i++)
		{
			if(isset($date[$key]))
			{
			$string=preg_replace("/\[f\]@0".$key."@/i",ucfirst($date[$key]),$string);
			$string=preg_replace("/\[up\]@0".$key."@/i",strtoupper($date[$key]),$string);
			$string=preg_replace("/@0".$key."@/i",$date[$key],$string);
			}

			if(isset($date[$key.$i]))
			{
			$string=preg_replace("/\[f\]@0".$key.$i."@/i",ucfirst($date[$key.$i]),$string);
			$string=preg_replace("/\[up\]@0".$key.$i."@/i",strtoupper($date[$key.$i]),$string);
			$string=preg_replace("/@0".$key.$i."@/i",$date[$key.$i],$string);
			}
		}
	}

return $string;
}

function manlix_char_generator($chars,$times){

	if(!strlen($chars))		return false;
	elseif(!is_numeric($times))	return false;

	else
	{
	$result=null;
		for($i=0;$i<$times;$i++)
		$result.=$chars[rand(0,strlen($chars)-1)];
	}

return $result;
}

function manlix_stripslashes($string){
	if(empty($string))	return false;

	else
	{
	$result=preg_replace("/ +/"," ",trim(stripslashes(stripslashes(addslashes($string)))));

		if(!$result)	return false;
		elseif($result!=" ")	return $result;
	}
}

function manlix_read_file($path){
	if(!is_file($path))		return false;
	elseif(!filesize($path))	return array();
	elseif($array=file($path))	return $array;

	else
	while(!$array=file($path))sleep(1);

	return $array;
}

function manlix_russian_time($time){
	global $manlix_russian_time;

	if(!isset($time))
	$manlix_russian_time="�� �� ������� ����� ��� ��������� ��� ������";

	elseif(!is_numeric($time))
	$manlix_russian_time="�� ������� ������������ ����� ��� ��������� ��� ������";

	else
	{
	$months1= array("������","�������","����","������","���","����","����","������","��������","�������","������","�������");
	$months2= array("������","�������","�����","������","���","����","����","�������","��������","�������","������","�������");
	$months3= array("������","�������","�����","������","���","����","����","�������","��������","�������","������","�������");
	$months4= array("� ������","� �������","� �����","� ������","� ���","� ����","� ����","� �������","� ��������","� �������","� ������","� �������");
	$months5= array("���","����","����","���","���","����","����","���","���","���","����","���");
	$months6= array("���","����","�����","���","���","����","����","���","���","���","����","���");
	$months7= array("� ���","� ����","� �����","� ���","� ���","� ����","� ����","� ���","� ���","� ���","� ����","� ���");

	if(date('H',$time)		>= 0	&& date('H',$time)<7)		{$day_status = "����";	$day_status2 = "��";}
	elseif(date('H',$time)	>= 6	&& date('H',$time)<13)		{$day_status = "����";	$day_status2 = "��";}
	elseif(date('H',$time)	>= 12	&& date('H',$time)< 19)		{$day_status = "����";	$day_status2 = "��";}
	else								{$day_status = "�����";	$day_status2 = "��";}

	$days1	= array("�����������","�����������","�������","�����","�������","�������","�������");
	$days2	= array("�����������","�����������","�������","�����","�������","�������","�������");
	$days3	= array("� �����������","� �����������","�� �������","� �����","� �������"," � �������"," � �������");

	$days4	= array("��","��","��","��","��","��","��");
	$days5	= array("� ��","� ��","�� ��","� ��","� ��","� ��","� ��");

	if (date('w',$time)==0)	{$num_day_of_the_week=7;}
	else			{$num_day_of_the_week=date('w',$time);}

	$manlix_russian_time = array(
				'year'		=> date('Y',$time),
				'year2'		=> date('y',$time),

				'month'		=> $months1[date('m',$time) - 1],
				'month2'		=> $months2[date('m',$time) - 1],
				'month3'		=> $months3[date('m',$time) - 1],
				'month4'		=> $months4[date('m',$time) - 1],
				'month5'		=> $months5[date('m',$time) - 1],
				'month6'		=> $months6[date('m',$time) - 1],
				'month7'		=> $months7[date('m',$time) - 1],
				'month8'		=> date('m',$time),

				'day_status'	=> $day_status,
				'day_status2'	=> $day_status2,

				'day'		=> $days1[date('w',$time)],
				'day2'		=> $days2[date('w',$time)],
				'day3'		=> $days3[date('w',$time)],
				'day4'		=> $days4[date('w',$time)],
				'day5'		=> $days5[date('w',$time)],
				'day6'		=> $num_day_of_the_week,
				'day7'		=> date('d',$time),
				'day8'		=> date('z',$time),

				'hour'		=> date('H',$time),
				'hour2'		=> date('h',$time),
				'minute'		=> date('i',$time),
				'second'		=> date('s',$time)
				);
	return $manlix_russian_time;
	}
}

function manlix_array_navigation
(
	$array,			$show_strings,
	$max_show_pages,		$link,
	$page,			$left_symbol,
	$right_symbol,		$color_left_right,
	$color_other_pages,	$color_current_page,
	$color_href_double_active,	$color_href_single_active,
	$separator
)
{
	global	$manlix_array_navigation;

	if (!is_array($array))
	{
	$manlix_array_navigation = "��� ������ � ���� �������� �� ������ ������";
	}

	else if ($array == "")
	{
	$manlix_array_navigation = "�� �� ������� ������ ��� ������ � ��������";
	}

	else
	{

		if (!is_numeric($show_strings))	{$show_strings		= "10";		}
		if (!is_numeric($max_show_pages))	{$max_show_pages	= "10";		}
		if ($link == "")			{$link			= "?page=";	}
		if (!is_numeric($page))		{$page			= "1";		}
		if ($left_symbol == "")		{$left_symbol		= "&lt;";		}
		if ($right_symbol == "")		{$right_symbol		= "&gt;";		}
		if ($separator == "")		{$separator		= " ";		}

	$count	= count($array);

	$all_pages = ceil($count / $show_strings);

	if (!is_numeric($page) or $page < "1" or empty($page))	{$page = "1";		}
	if ($page > $all_pages) 				{$page = "$all_pages";	}

	if (($page + $max_show_pages) <= $all_pages)
	{
	$start = "$page";
	$finish = $page + $max_show_pages;
	}

	if (($page + $max_show_pages) >= $all_pages)
	{
	$start = $all_pages - $max_show_pages;
	$finish = $all_pages;
	}

	if(!isset($pages))		$pages		=null;
	if(!isset($navigation))	$navigation	=null;
	if(!isset($show_string))	$show_string	=null;

	for ($i = $start; $i < $finish + 1; $i++)
	{
		if ($i > "0")
		{
			if ($i > "0"  and $i < "10")	{$link_i = "0$i";	}
			if ($i > "9")		{$link_i = $i;	}

			if ($i == $page)		$pages .= " $separator<font color='$color_current_page'>$link_i</font> $separator ";

			else			$pages .= " $separator<a href='".$link."".$i."'><font color='$color_other_pages'>$link_i</font></a>$separator ";
		}
	}

	if ($page > "2")					{$navigation = "<a href='".$link."1'><font color='$color_href_double_active'>".$left_symbol."".$left_symbol."</font></a> ";	}
	else		 				{$navigation .= "<font color='$color_left_right'>".$left_symbol."".$left_symbol."</font> ";					}

	if (($page - 1) > "0" and ($page - 1) <= $all_pages)	{$navigation .= "<a href='$link".($page - 1)."'><font color='$color_href_single_active'>$left_symbol</font></a> ";		}
	else						{$navigation .= "<font color='$color_left_right'>$left_symbol</font> ";							}

	$navigation .= $pages;

	if ($pages == "")
	{
	$navigation .=  "<font color='$color_current_page'>01</font>";
	$all_pages = "1";
	$page = "1";
	}

	if (($page + 1) <= $all_pages)				{$navigation .= " <a href='$link".($page + 1)."'><font color='$color_href_single_active'>$right_symbol</font></a>";			}
	else						{$navigation .= " <font color='$color_left_right'>$right_symbol</font>";							}

	if ($page < $all_pages - 1)				{$navigation .= " <a href='".$link."".$all_pages."'><font color='$color_href_double_active'>".$right_symbol."".$right_symbol."</font></a>";	}
	else						{$navigation .= " <font color='$color_left_right'>".$right_symbol."".$right_symbol."</font>";					}

	$start = $page * $show_strings - $show_strings;
	$finish = $page * $show_strings;

	if ($page == $all_pages)				{$finish = $count;}

	if ($count <= $show_string)
	{
	$start=0;
	$finish=$count;
	}

	for ($i = $start; $i < $finish; $i++)
	{
	list($string) = explode("\r\n",$array[$i]);
		if ($i < $count)
		{
		$result_strings[] = $string;
		}
	}

	$manlix_array_navigation = array(
					'all_strings'		=> $array,
					'count_all_strings'		=> $count,
					'all_pages'		=> $all_pages,
					'current_page'		=> $page,
					'start_string'		=> $start,
					'finish_string'		=> $finish,
					'result_strings'		=> $result_strings,
					'count_result_strings'	=> count($result_strings),
					'navigation'		=> $navigation
				     );
	return $navigation;
	}
}

function manlix_to_normal_string($string){
	if(empty($string))	return false;

	else
	{
	$string=preg_replace("/(".chr(9)."|".chr(11)."|".chr(13).")/","",$string);
	$string=preg_replace("/".chr(10)."/","<br/>",$string);
	$string=preg_replace("/:/","&#58;",$string);
	$string=preg_replace("/ +/"," ",$string);

		if(!$string)	return false;
		elseif($string!=" ")	return trim($string);
	}
}

function check_permission($a){
global $manlix;
$result=null;

$manlix['sections2']=$manlix['sections'];

	$void=-1;
	while(list($section)=each($manlix['sections2']))
	{
	$void++;
		while(list($number)=each($manlix['sections2'][$section]))
		{
			if(!empty($a[$void][$number]))
			{
				if(empty($manlix['access_level'][$void][$number]))
				return 0;
			$result.=manlix_char_generator("1234567890",10);
			$manlix['temp']['admin'][$void][$number]=" checked";
			}

			if(!empty($a[$void]))
			$num=count($a[$void])+1;

			if(empty($num)) $num=null;

			if(!isset($number)) $number=null;

			if($num!=$number)
			$result.=",";
		}
	$result.="|";
	}

return $result;
}

function admin_exists($admin){
global $manlix;
$admin=strtolower($admin);

	if($admins=manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['admins']))
	{
		while(list(,$body)=each($admins))
		{
		list($name)=explode("::",$body);
			if(strtolower($name)==$admin)
			{
			$manlix['temp']['admin_info']=$body;
			return 1;
			break;
			}
		}
	}
return 0;
}

function add_admin(){
global $manlix;
$manlix['okay']=null;

	if(!$string=check_permission($manlix['temp']['a']))
	$manlix['status'].="<br/><b> � �������� ������ ���� �������</b>";

	elseif(empty($manlix['temp']['login2']))
	$manlix['status'].="<br/><b> � �� ������� ��� ������ ������</b>";

	elseif(!preg_match("/^[a-z�-��0-9_ -]+$/i",$manlix['temp']['login2']))
	$manlix['status'].="<br/><br/><b>� ��� ������ ������ ���������, ������: �������,<br/>��������� �����, �����, �������� (�����),<br/>���� ������������� � ������</b>";

	elseif(admin_exists($manlix['temp']['login2']))
	$manlix['status'].="<br/><b>� ����� � ������ <font color='blue'>".$manlix['temp']['login2']."</font> ��� ����������</b>";

	elseif(empty($manlix['temp']['password2']))
	$manlix['status'].="<br/><b>� �� ������ ������ ��� ������ ������</b>";

	elseif(!preg_match("/^[a-z�-��0-9_ -]+$/i",$manlix['temp']['password2']))
	$manlix['status'].="<br/><br/><b>� ������ ������ ���������, ������: �������,<br/>��������� �����, �����, �������� (�����),<br/>���� ������������� � ������</b>";

	elseif(strlen($manlix['temp']['password2'])==32)
	$manlix[status].="<br/><b>� ������ �� ������ ��������� 32 ��������</b>";

	else
	{
		$open=fopen($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['admins'],"a");
		flock($open,1);
		flock($open,2);
		fwrite($open,$manlix['temp']['login2']."::".md5($manlix['temp']['password2'])."::".$string."::".chr(13).chr(10));
		fclose($open);

	$manlix['okay'].="<table border=0 align=center cellspacing=0 cellpadding=1 width=470><tr><td bgcolor=#faedca align=center><center><br/><font face=verdana size=1>����� <font color=maroon><i>".$manlix['temp']['login2']."</i></font> ������� ��������.<hr size=1 width=325 color=maroon>";

	if(empty($manlix['temp']['a']))	$manlix['okay'].="��� ���� �� �� ���������� ������� ����,<br/>�.�. �� ������ ������ ����� � ����������,<br/>�� �� �����.<hr size=1 width=325 color=maroon>";

				$void=-1;
				while(list($section)=each($manlix['sections']))
				{
				$void++;
				$manlix['okay'].='<table border=0 width=300 cellspacing=1 cellpadding=3 align=center bgcolor=#faad1e><caption><font face=verdana size=1 color=maroon>����� ������� ��� ������� <font color=#de0000>'.$section.'</font>:</font></caption>';
					while(list($number,$result)=each($manlix['sections'][$section]))
					{
					$manlix['okay'].='<tr><td bgcolor=#f7f1e1><font face=verdana size=1>'.($number+1).'<font face=verdana size=1>.</font> '.ucfirst($result).'</font></td><td bgcolor="';

						if(!empty($manlix['temp']['admin'][$void][$number]))	$manlix['okay'].="#f7f1e1";
						else						$manlix['okay'].="#faedca";

					$manlix['okay'].='" width=20><input type=checkbox';
					$manlix['okay'].=(!empty($manlix['temp']['admin'][$void][$number]))?$manlix['temp']['admin'][$void][$number]:null;
					$manlix['okay'].=<<<HTML
 disabled></td></tr>
HTML;
					}
				$manlix['okay'].="</table><br/>";
				}

	$manlix['okay'].="</td></tr></table><br/>";
	$manlix['result'].=$manlix['okay'];
	}
}

function ReadTemplate($parse,$template){
global $manlix;
$content=null;

	$ReadFile=fopen($manlix['dir']['path']."/".$manlix['dir']['inc']."/".$manlix['dir']['templates']."/".$parse."/".$template,"r");

	while(!feof($ReadFile)) $content.=fgets($ReadFile,1024);

return htmlspecialchars($content);
}

function description($section,$key){
	$array=array(
		'dir'	=>	array(
				'Description'		=>	'�����',
				'path'			=>	'���� �� ����� �������',
				'inc'			=>	'��������� ����� �������',
				'templates'		=>	'����� � ���������',
				'images'			=>	'��� ����� � ����������',
				'smiles'			=>	'��� ����� �� ����������',
				),

		'file'	=>	array(
				'Description'		=>	'�����',
				'base'			=>	'���� ���������',
				'functions'		=>	'�������',
				'interpreter'		=>	'������������� �������� ����-����� ����������������',
				'admins'			=>	'���� �������',
				'autochange'		=>	'���������� (�������)',
				'banlist'			=>	'�������'
				),

		'url'	=>	array(
				'Description'		=>	'URLs',
				'general'			=>	'URL �� �������',
				'images'			=>	'����� � ���������',
				'smiles'			=>	'����� �� ����������',
				),

		'symbol'	=>	array(
				'Description'		=>	'�������',
				'left'			=>	'������ � ��������� �����',
				'right'			=>	'������ � ��������� ������',
				'separator_between_pages' 	=>	'����������� ����� �������� ������� � ���������'
				),

		'numeric'	=>	array(
				'Description'		=>	'����� � �����',
				'show_messages'		=>	'���������� ������������ ��������� �� ����� ��������',
				'show_pages'		=>	'���������� ��������� ������ �� ������ �������� � ���������',
				'min_name'		=>	'����������� ���������� �������� � �����',
				'max_name'		=>	'������������ ���������� �������� �����',
				'min_icq'			=>	'����������� ���������� �������� � ������ �����',
				'max_message'		=>	'������������ ���������� �������� � ���������',
				'max_word'		=>	'������������ ���������� �������� � ����� �����',
				'flood'			=>	'���������� ������� (� �������), ����� ������� ���������� ����� �������� ��� ���� ��������� (����-�����)',
				'show_smiles'		=>	'���������� ������������ ��������� � ����� ������� (��� ����� ����������)'
				),

		'error'	=>	array(
				'Description'		=>	'������ (%s - ����������)',
				'empty_name'		=>	'������ ���',
				'empty_message'		=> 	'������ ���������',
				'min_name'		=>	'��� ������ ������������ ��������',
				'max_name'		=>	'��� ������ ������������� ��������',
				'invalid_mail'		=>	'������������ ����� �����',
				'invalid_homepage'		=>	'������������ ����� �����',
				'invalid_icq'		=>	'������������ �����',
				'min_icq'			=>	'����� ����� ������ ������������ ��������',
				'max_message'		=>	'��������� ������ ������������� ��������',
				'unknown_ip'		=>	'�� �������� ����',
				'flood'			=>	'������� ����� (����-����)',
				'try_flood'		=>	'������� �������� ���������� ��������� (����-����)',
				'max_word'		=>	'���� �� ���� � ���������, ��������� ������������ ��������'
				),

		'template'=>	array(
				'Description'		=>	'������',
				'parse'			=>	'������� ������'
				),

		'templates'=>	array(
				'Description'		=>	'����� ������, ������� ������ � ������',
				'top'			=>	'��������',
				'form'			=>	'����� ��� ���������� ������ ���������',
				'no_messages'		=>	'�������� ����� �����',
				'message'			=>	'���������',
				'bottom'			=>	'���',
				'okay'			=>	'��������� ���������',
				'closed'			=>	'�������� ����� �������'
				),

		'closed'	=>	array(
				'Description'		=>	'������ �������� �����',
				'closed'			=>	'������ �����<br/>(0 - �������, 1 - �������)',
				'messages'		=>	'���� �������� ����� �������, �� �������� �� ���������, ������� ��������� � ����?<br/>(0 - ���, 1 - ��)'
				),

		'script'	=>	array(
				'Description'		=>	'�������������',
				'name'			=>	'��� �������',
				'prefix'			=>	'�������',
				'russian'			=>	'��-������',
				'version'			=>	'������',
				'info'			=>	'����������'
				)
		);

	if(!empty($array[$section]['Description'])&&empty($key))	return ucfirst($array[$section]['Description']);
	if(!empty($array[$section][$key]))			return ucfirst($array[$section][$key]);
	else						return 0;
}

function ShowMessages(){
global $manlix,$guestbook_page,$manlix_array_navigation;

		while(list($section,$array)=each($manlix))
			while(list($key,$value)=each($array))
			$manlix['other'][chr(73).chr(110).chr(105).ucfirst(strtolower($section)).ucfirst(strtolower($key))]=$value;

	if($manlix['count']=$manlix['other']['AllMessages']=count($manlix['base']))
	{
		if(isset($guestbook_page)&&preg_match("/^all$/i",$guestbook_page))
		{
		$manlix['numeric']['show_messages']=$manlix['count'];
		$manlix['other']['AllMessages']=1;
		}

	$manlix['other']['navigation']=manlix_array_navigation(
					(isset($manlix['base']))?$manlix['base']:null,
					(isset($manlix['numeric']['show_messages']))?$manlix['numeric']['show_messages']:null,
					(isset($manlix['numeric']['show_pages']))?$manlix['numeric']['show_pages']:null,
					"?feedback&amp;guestbook_page=",         //2011-05-24 navigation fix
					(isset($guestbook_page))?$guestbook_page:null,
					(isset($manlix['symbol']['left']))?$manlix['symbol']['left']:null,
					(isset($manlix['symbol']['right']))?$manlix['symbol']['right']:null,
					(isset($manlix['color']['not_active_symbol']))?$manlix['color']['not_active_symbol']:null,
					(isset($manlix['color']['not_current_page']))?$manlix['color']['not_current_page']:null,
					(isset($manlix['color']['current_page']))?$manlix['color']['current_page']:null,
					(isset($manlix['color']['active_symbol']))?$manlix['color']['active_symbol']:null,
					(isset($manlix['color']['active_symbol']))?$manlix['color']['active_symbol']:null,
					(isset($manlix['symbol']['separator_between_pages']))?$manlix['symbol']['separator_between_pages']:null
					);

	$manlix['strings']=$manlix_array_navigation;

		while(list($number,$string)=each($manlix['strings']['result_strings']))
		{
		$manlix['other']['num']=$manlix['strings']['count_all_strings']-$manlix['strings']['start_string']-$number;
//		$manlix['other']['bgcolor']=strstr($manlix['other']['num']/2,".")?$manlix['color']['uneven']:$manlix['color']['even'];
// 2011-05-24 betelgeuse fix 0.5=>0,5
		$manlix['other']['bgcolor']=($manlix['other']['num']%2)?$manlix['color']['uneven']:$manlix['color']['even'];
		$manlix['other']['even']=($manlix['other']['bgcolor']==$manlix['color']['even'])?1:0;
		$manlix['other']['uneven']=($manlix['other']['bgcolor']==$manlix['color']['uneven'])?1:0;
		list(	$manlix['other']['time'],
			$manlix['other']['name'],
			$manlix['other']['homepage'],
			$manlix['other']['mail'],
			$manlix['other']['icq'],
			$manlix['other']['message'],
			$manlix['other']['ip'],
			$manlix['other']['author'],
			$manlix['other']['answer'],
			$manlix['other']['answerTime'],
		)=explode("::",$string);

			$manlix['other']['nameJS']=addslashes(str_replace(" ","&nbsp;",$manlix['other']['name']));

			if(count(preg_split("/&#58;([A-Za-z0-9_-]+)&#58;/",$manlix['other']['message'],2))==2)
			$manlix['other']['message']=preg_replace_callback("/&#58;([A-Za-z0-9_-]+)&#58;/","AutochangeSmiles",$manlix['other']['message']);

			if(count(preg_split("/&#58;([A-Za-z0-9_-]+)&#58;/",$manlix['other']['answer'],2))==2)
			$manlix['other']['answer']=preg_replace_callback("/&#58;([A-Za-z0-9_-]+)&#58;/","AutochangeSmiles",$manlix['other']['answer']);

		parse_template($manlix['templates']['message']);
		}
	}

	else
	parse_template($manlix['templates']['no_messages']);
}

function CheckAutochange($value){
global $manlix;

$array=manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['autochange']);

	while(list(,$string)=each($array))
	{
	list($a)=explode("::",$string);
		if(ereg("/(.*)/i",$a,$other)&&strtolower($other[1])==strtolower($value))
		return 1;
	}
return 0;
}

function Banlist($ip){
global $manlix;

$banlist=null;

$BanlistFile=manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['banlist']);

	if(count($BanlistFile))
	{
	$OpenBanlistFile=fopen($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['banlist'],"w");
	flock($OpenBanlistFile,1);
	flock($OpenBanlistFile,2);
		while(list(,$string)=each($BanlistFile))
		{
		list($addr,$reason,$time)=explode("::",$string);
			if(time()<$time)
			{
				if(ereg("^".$addr,$ip))
				$banlist=array(date('d.m.Y (H:i)',$time),$reason);
				fwrite($OpenBanlistFile,$string);
			}
		}
	fclose($OpenBanlistFile);
	}

return $banlist;
}

function CheckBanlist($ip){
global $manlix;

$banlist=null;

$BanlistFile=manlix_read_file($manlix['dir']['path']."/".$manlix['dir']['datadir']."/".$manlix['file']['banlist']);

	if(count($BanlistFile))
	{
		while(list(,$string)=each($BanlistFile))
		{
		list($addr,$reason,$time)=explode("::",$string);
			if($ip==$addr)
			return 1;
		}
	}

return $banlist;
}



?>