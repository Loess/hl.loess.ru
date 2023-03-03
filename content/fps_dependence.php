<?php
$head_title=($ru==0?"How FPS does impact to game engine physics - Half-Life.Loess.ru":"������� FPS �� ������ ������ - Half-Life.Loess.ru");
?>


<?php
if($ru==0){	?>
<style type="text/css">
 h2 {margin-top: 15px;}
 </style><div>
 <div style="padding-top:10px;clear:both;">(Obsolete since february 2013, check <a href="./?txt=1122">february'2013 1122 patch</a>)</div>
<p><i>This page need to be heavily revised by language carrier. If you can help correct lexical mistakes,
please leave your contact information at <a href="./?feedback">guestbook</a>.</i>
</p><br />
 <p>Physics in GoldSrc engine is much depends of the FPS.
</p>

<h2> <span> Most noticeable displays </span></h2>
<ol><li> With FPS lower than 90-100 you will gain horizontal acceleration when you fall on an inclined surface.<br
/>With FPS higher than 100 you will not get this effect.
</li><li> With FPS higher than ~80 horizontal and vertical speed of movement becoming vary very noticeable.<br
/>Speed from fps dependence is sawtooth-shape.<br
/>Maximums are obtained with FPS, which get from dividing 1000 by integer from 1 and higher.<br
/>Minimums are obtained with adding one to the maximum rate (i.e. 1000 / n + 1).
At 501 FPS engine receives the greatest slowdown, reaching 2 times.
For example, with this FPS one can fly with gauss so highly on how much ammunition have.
</li><li> With FPS from 101 to 111.1111 and from 201 to� 250 at bhop you wont lose speed
 while pushing from the surface. With FPS from 250 to 333.3333 speed lost very rarely.
 With 100 FPS speed lost very much (about 12% for each jump).
</li><li> There is a dependence of the rate of fire from FPS. This is most noticeable when shooting with MP5 (comparing,
for example, at 100 and 250 FPS).
But difference is not too big (at 100 FPS 500 bullets fired for about 40 seconds, at 250 - for 38 sec.)
- about 10%.<br />Do not think that 250 FPS is a speedhack, because reality is
100 FPS is slowing, but not 250 - speeding up.<br />Additional research at lower FPS: <a rel="nofollow" class="external free" href="http://www.fortress-forever.com/fpsreport/">http://www.fortress-forever.com/fpsreport/</a>.
</li></ol>
<h2> <span> Example of dependence </span></h2>
<p>Movement speed is gradually increasing from 167 FPS and peaks at 200.
At 201 movement speed falls <b>harshly</b>.
</p>
<h2> <span> Peaks of movement speed </span></h2>
<p>Digits right from floating point do matter:</p>
<pre>1000 / 1 = 1000
1000 / 2 = 500
1000 / 3 = 333.3333
1000 / 4 = 250
1000 / 5 = 200
1000 / 6 = 166.6666
1000 / 7 = 142.8571
1000 / 8 = 125
1000 / 9 = 111.1111
1000 / 10 = 100
1000 / 11 = 90.9090
1000 / 12 = 83.3333
1000 / 13 = 76.9230
1000 / 14 = 71.4285
1000 / 15 = 66.6666
and so on...
</pre>
<h2> <span> Best FPS </span></h2>
<p>Is the value of 250: no slowing when jumping and firing with a machine gun (and the other weapons) is at greatest speed.
</p>
<h2> <span> MP5 shooting speed dependencies </span></h2>
<p>Below is a graphs of time spent on firing full MP5 clip on various FPS.
</p><p>Time graph - shooting at standart Half-Life server.
Fixed graph - shooting at server where time-detection for the next shot is fixed.
</p><p>Measurements are made on the speed peaks FPS to eliminate the influence of the physics,
plus at standard for HL engine FPS - 72.
You may notice that Time chart varies even though this FPS are peaks of speed.
This error appears because of the used method for determining the time of the next shot: time counting from
 the current time event, and not from the time when the previous shot must be.
It is seen that 72 FPS has overestimated time due to an error in the network protocol of engine.
</p><p><a href="./content/fps_dependence/time_of_shooting_full_mp5_clip.png" title="�������� ������������� ������ ������ MP5"><img alt="�������� ������������� ������ ������ MP5" src="./content/fps_dependence/time_of_shooting_full_mp5_clip.png" width="800" height="417" /></a>
<a href="./content/fps_dependence/time_of_shooting_full_mp5_clip_%28sized_graph%29.png" title="�������� ������������� ������ ������ MP5 (���������������� ������)"><img alt="�������� ������������� ������ ������ MP5 (���������������� ������)" src="./content/fps_dependence/time_of_shooting_full_mp5_clip_%28sized_graph%29.png" width="800" height="417" /></a>
</p><p><br />
</p></div>


<br /><br /><div style="font-size:xx-small;">Source <a href="http://aghl.ru/wiki/index.php?title=%D0%97%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D1%8C_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B8_%D0%B2_HL_%D0%BE%D1%82_FPS">http://aghl.ru/wiki/</a>

</div>

<?php }
elseif($ru==1){

function cut_between($str,$from,$to,$offsetphrase=''){
    $na4alo=strpos($str,$from,($offsetphrase!=''?strpos($str,$offsetphrase):0))+strlen($from);
    $length=strpos($str,$to,$na4alo)-$na4alo;
 	return(trim(substr($str,$na4alo,$length)));
}

function rus(){?>


<style type="text/css">
 h2 {margin-top: 15px;}
 </style><div>

 <div style="padding-top:10px;clear:both;">(� ������� 2013 ���� �� ��������� ��� ���������� 48+, ������ <a href="./?txt=1122">����������� ���� 1122</a>)</div>
<br /><p>������ � ������ �� ������ ������� �� ������������� FPS.
</p>

<h2> <span> �������� �������� ���������� </span></h2>
<ol><li> ��� FPS �� 90-100 ��� ������� �� ��������� ����������� �� �������� �������������� ���������.<br />��� FPS ���� 100 �� ��������.
</li><li> ��� FPS ������ ~80 �������� ������� ������������� �������� �������� (� ��������������, � ������������).<br />����������� �������� �� FPS ������������.<br />��������� �������� ���������� ��� FPS ���������� �������� 1000 �� ����� ����� �� 1 � ������.<br />�������� �������� ���������� ������������ ������� � ���������� �������� (�.�. 1000 / n + 1). ��� 501 FPS ���������� ���������� ����������, ����������� 2� ���. ��� ����, ��������, ����� �������� �� ������ ����� ������ �� ������� ������ ��������.
</li><li> ��� FPS �� 101 �� 111.1111 � �� 201 �� 250 ��� �������� �������, �� ����� ������������ �� ����������� �� �� ������� ��������. ��� FPS �� 250 �� 333.3333 �������� �������� ����� �����. ��� 100 FPS �������� �������� ����� ������ (������� 12% �� ������ ������).
</li><li> ���������� ����������� �������� �������� (�������� �� �������� �������� �������) �� FPS. ��������, ���� �������� �������� �� 100 FPS � �� 250, �� �� 250 ������� ������ ����� �� �������. �� ����� ���� ������� �� ����� ������ (��� 100 FPS 500 �������� �������������� �������� �� 40 ������, ��� 250 �� 38) - ������� 10%.<br />�� ����� ������, ��� 250 FPS ��� �������, �.�. �� ����� ���� ��� 100 FPS ����� ����������, � �� 250 ���������.<br />�������������� ������������ ����� ������ (EN): <a rel="nofollow" class="external free" href="http://www.fortress-forever.com/fpsreport/">http://www.fortress-forever.com/fpsreport/</a>.
</li></ol>
<h2> <span> ������ ����������� </span></h2>
<p>�������� �������� ���������� ������ ������� � 167 FPS � ��������� ��������� ��� 200. ��� 201 �������� �������� <b>�����</b> ������.
</p>
<h2> <span> ���� �������� �������� </span></h2>
<p>����� ����� ����� (��������� �������) ����� ��������. ������� ��� ��, ��� � �� ������ ��������� ������� ������������ �����.
</p>
<pre>1000 / 1 = 1000
1000 / 2 = 500
1000 / 3 = 333.3333
1000 / 4 = 250
1000 / 5 = 200
1000 / 6 = 166.6666
1000 / 7 = 142.8571
1000 / 8 = 125
1000 / 9 = 111.1111
1000 / 10 = 100
1000 / 11 = 90.9090
1000 / 12 = 83.3333
1000 / 13 = 76.9230
1000 / 14 = 71.4285
1000 / 15 = 66.6666
� ��� �����.
</pre>
<h2> <span> ��������� FPS </span></h2>
<p>������� �������� �������� 250: ��� ����������� ��� ������� � �������� �� �������� (� �������������� ������ ������) �������� ����������.
</p>
<h2> <span> ����������� �������� �� �������� ��5 </span></h2>
<p>���� ��������� ������� ������� �������������� �� ������������� ������ ������ �������� ��5 �� ��������� FPS. �� ������� �� ������ �������� ����� ���������� ��������. �.�., ��� ����������� �������� � 0,1 ��� ������ ���������� ��������� ����� �� ������ 4,9 ������.
</p><p>������ Time - �������� �� ����������� ������� ��. ������ Fixed - �� ������� ���������� ����������� ������� ���������� ��������.
</p><p>������ ����������� �� ��� ���������� ������ �������� �������� ��� ���������� ������� ����������� �� ������, ���� �� ����������� ��� �� ��� - 72. ����� ��������, ��� ������ Time �������� ������ �������� ���� �������� �� ��, ��� ������ FPS �������� ������ ��������. ������ ������ ���������� �� ��������������� ������� ����������� ������� ���������� ��������: ��������� ����� �� �������� ������� ��������� �������, � �� �� �������, ����� ������ ��� ��������� ���������� �������. ������ Fixed ���������� ����� ����� �� ������������� ������ ������ �������������, ���� ��� ������ ��������� �� �������. �����, ��� �� 72 FPS ����� ���������� �����, ��������� ������� � ������� ��������� ������ GoldSource.
</p><p><a href="./content/fps_dependence/time_of_shooting_full_mp5_clip.png" title="�������� ������������� ������ ������ MP5"><img alt="�������� ������������� ������ ������ MP5" src="./content/fps_dependence/time_of_shooting_full_mp5_clip.png" width="800" height="417" /></a>
<a href="./content/fps_dependence/time_of_shooting_full_mp5_clip_%28sized_graph%29.png" title="�������� ������������� ������ ������ MP5 (���������������� ������)"><img alt="�������� ������������� ������ ������ MP5 (���������������� ������)" src="./content/fps_dependence/time_of_shooting_full_mp5_clip_%28sized_graph%29.png" width="800" height="417" /></a>
</p><p><br />
</p></div>

<?php

}
	$fp=@fsockopen("aghl.ru", 80, $errno, $errstr, 3);
	$fp=FALSE;
if (!$fp) {//echo "$errstr ($errno)<br />\n";
 rus();
}
else {$out = "GET /wiki/index.php?title=%D0%97%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D1%8C_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B8_%D0%B2_HL_%D0%BE%D1%82_FPS HTTP/1.1\r\n";
    $out .= "Host: aghl.ru\r\n";
    //$out .= "Accept-Charset: windows-1251\r\n";
    $out .= "Connection: Close\r\n\r\n";
    fwrite($fp, $out);
    $file="";
    while (!feof($fp)) { $file.=fgets($fp, 512); }
    fclose($fp);
$file=iconv('UTF-8', 'windows-1251', substr($file,strpos($file,"<!-- start content -->")));
//echo ($file);
if (stristr($file,"<title>502 Bad Gateway</title>")){rus();}
else{
$file=cut_between($file,'<!-- start content -->','<!-- end content -->');
echo("
<style type=\"text/css\">
 h2 {margin-top: 15px;}
 </style>");
$file='<div '.cut_between($file,'<div',"<!-- \nNewPP limit report").'</div>';    // '<div class="printfooter">'
$file=substr($file,0,strpos($file,'<table id="toc"')).substr($file,strpos($file,'</table>')+8);
/*$offset=0;
while(strpos($file,'<a href',$offset)){	$offset=strpos($file,'<a href',$offset);
	$offset2=strpos($file,'>',$offset);
	$offset3=strpos($file,'</a>',$offset);
	$file=substr($file,0,strpos($file,'<a href')).substr($file,$offset2+1);
}   */
$file=preg_replace('/<a href="([^<]*)">([^<]*)<\/a>/', '$2', $file);
$from=array('src="/wiki/images','width="1290" height="626"','/wiki/index.php?title=%D0%A4%D0%B0%D0%B9%D0%BB:Time_of_shooting_full_MP5_clip.png','/wiki/index.php?title=%D0%A4%D0%B0%D0%B9%D0%BB:Time_of_shooting_full_MP5_clip_(sized_graph).png');
$to=array('src="http://aghl.ru/wiki/images','width="800" height="417"','http://aghl.ru/wiki/images/6/6b/Time_of_shooting_full_MP5_clip.png','http://aghl.ru/wiki/images/9/9f/Time_of_shooting_full_MP5_clip_%28sized_graph%29.png');
$file=str_replace($from,$to,$file);
echo($file);
/*  */
}
}
?>
<br /><br /><div style="font-size:xx-small;">��� ������ ������ ������� ������������ � <a href="http://aghl.ru/wiki/index.php?title=%D0%97%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D1%8C_%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B8_%D0%B2_HL_%D0%BE%D1%82_FPS">http://aghl.ru/wiki/</a>

</div>

<?php
}
?>