<?php
//do not post
if($ru==0){
$output="<p>Most of the mods working with the Steam engine, versions from 1.1.1.1 and above
(status says \"Steam-friendly\").<br />
Some of them will have no background images - you can use 1.1.1.0.<br />
If the mod does not work with your engine - check the requirements of developer.</p>
<table class=\"moddb\"><tr class=\"head\">".
"<td><b>Icon</b></td><td><b>Description</b></td><td><b>Where to find</b></td></tr>
";}
elseif($ru==1){
$output="<p>Подавляющее большинство модов работает на Steam-версии движка, от 1.1.1.1 и выше
(в статусе мода указано \"Steam-friendly\").<br />
Некоторые из них будут без фоновой картинки - можно использовать 1.1.1.0.<br />
Если мод не работает на вашем движке - смотрите требования, ставьте мод
на движок, указанный разработчиком (или выше).</p>
<table class=\"moddb\"><tr class=\"head\">".
"<td><b>Значок</b></td><td><b>Описание</b></td><td><b>Где взять</b></td></tr>
";}
echo($output);
$data=array(
array(1000,'Half-Life 1.0.0.5','http://www.google.com/search?q=half-life+original+cd+download'),
array(1008,'Half-Life 1.0.0.8','http://www.google.com/search?q=%2210051008.exe%22'),
array(1009,'Half-Life 1.0.0.9','http://www.filewatcher.com/_/?q=10051009.exe'),
array(1013,'Half-Life 1.0.1.3','http://www.google.com/search?q=%2210051013.exe%22'),
array(1016,'Half-Life 1.0.1.6','http://www.google.com/search?q=%2210051016.exe%22'),
array(1100,'Half-Life 1.1.0.0','http://www.mmnt.ru/int/get?st=hl1100.exe'),
array(1101,'Half-Life 1.1.0.1','http://www.mmnt.ru/int/get?st=hl1101.exe'),
array(1104,'Half-Life 1.1.0.4','http://www.mmnt.ru/int/get?st=hl1104.exe'),
array(1106,'Half-Life 1.1.0.6','http://www.mmnt.ru/int/get?st=hl1106.exe'),
array(1107,'Half-Life 1.1.0.7','http://www.filewatcher.com/_/?q=hl1107.exe'),
array(1108,'Half-Life 1.1.0.8','ftp://ftp.cerious.com/pub/cerious/halflife/hl1108.exe'),
array(1110,'Half-Life 1.1.1.0','http://www.gamefront.com/files/986769/hl1110_exe'),
array(1111,'Half-Life 1.1.1.1','http://www.google.com/search?q=cs16full http://store.steampowered.com/app/70/'),
array('of','Opposing Force','http://www.google.com/search?q=opposing%20force%20download http://store.steampowered.com/app/50/'),
array('bs','Blue Shift','http://www.google.com/search?q=blue%20shift%20download http://store.steampowered.com/app/130/'),
array('cs','Counter-Strike','http://www.google.com/search?q=cs16full http://store.steampowered.com/app/10/'),
array('th','They Hunger','http://www.filefront.com/2121619/They-Hunger-Episodes-1-2-and-3/'),
//array('dod','Day of Defeat','dod.7z'),
//array('HOE','Heart Of Evil',''),
//array('HQA','HalfQuake Amen',''),
array('hl:s','Half-Life: Source','http://store.steampowered.com/app/280/')
);
$i=0;
	foreach ($data as $key=>$value)
	{
		$i++;
		if ($_GET["engine"]==$value[0]){        echo("<tr class=\"selected\">");$selected=1;
		}
		elseif(is_numeric($_GET["engine"])and is_numeric($value[0]) and $_GET["engine"]<1111 and $_GET["engine"]>999){        	if (($value[0]-$_GET["engine"])>0 and !isset($selected)){echo("<tr class=\"selected\">");$selected=1;}
        	else echo(($i&1)==1?"<tr>":"<tr class=\"even\">");
		}
		else echo(($i&1)==1?"<tr>":"<tr class=\"even\">");
		foreach ($value as $k=>$v)
		{
			//{$v="<a href=\"".$hostlink."?mod=".$value[0]."\">".$v."</a>";}
			if($k==0){$v=process_templates("reqs",$v,"","",1);}
			elseif($k==2){$v=process_links($v,1,0);}

			echo("<td>".$v."</td>");
		}
		echo("</tr>
");
	}

echo("</table>");

if($ru==0){
$output="<br /><br /><p>See also: <a href=\"http://hl.loess.ru/?txt=changelog1110\">HL version &lt;1110 changelog</a>
"."<br /><p>See also: <a href=\"http://hl.loess.ru/?txt=1111versions\">What version &gt;1111 to choose?</a>
";}
elseif($ru==1){
$output="<br /><br /><p>Смотри также: <a href=\"http://hl.loess.ru/?txt=changelog1110\">История изменений &lt;1110</a>
"."<br /><p>Смотри также: <a href=\"http://hl.loess.ru/?txt=1111versions\">Какую версию &gt;1111 выбрать?</a>
";}
echo($output);
?>
