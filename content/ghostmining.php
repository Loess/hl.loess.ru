<?php
//Ghostmining, lamping||Ghostmining, lamping
$head_title=("Ghostmining, lamping - Half-Life.Loess.ru");
//$head_title=($ru==0?"Articles - Half-Life.Loess.ru":"Статьи - Half-Life.Loess.ru");

/*if($ru==0){ ?>template
<?php }
elseif($ru==1){ */?>
<h3>GhostMining</h3><br />
<?php if($ru==0){echo("<i><b>There is no English version, use <a href=\"http://translate.google.com/translate?sl=ru&tl=en&u=http%3A%2F%2Fhl.loess.ru%2F%3Ftxt%3Dghostmining\">Google Translator</a> or something</b></i>");} ?>
<p style="font-family: 'Times New Roman', Times, serif;font-size:medium">
В Half-Life gauss при простреле через стены работает примерно так:
<br /><img src="./content/ghostmining/gauss.gif" width="528" height="320"
alt="http://maps.burkow.ru/not.htm#oos" border="0" style="background-color:white" />
<br />но если взрыв (<b>любой</b>, не только от гаусса) происходит в сильно ограниченном пространстве, проявляется <s>баг</s> фишка,
названная <b>GhostMining</b>-ом:

<div style="background-color:dimgrey; border: 2px dashed grey;padding:2px;margin:4px">Гостмайнинг
(GhostMining) - баг в играх на движке GoldSource
(HL, AG, CS и другие), когда мина,
пакет, граната, подствол или ракета взорванные в узком месте производят
значительное (равное прямому попаданию в голову) повреждение всему окружающему
несмотря на преграды, тоесть через стены.<br />Точнее, игнорируются стены,
которые обращены к взрыву внутренней стороной (изнанкой), а стены обращенные
лицевой стороной (текстурой) блокируют распространение взрыва. Увидеть область
поражения можно зайдя в режим спектатора и посмотрев из точки взрыва.<br />Гостмайнинг
состоит из нескольких ошибок в коде - один в коде движка и
другой в коде мода. GaussLamping, в принципе - использование этих же багов в движке и моде.</div>
<p style="font-family: 'Times New Roman', Times, serif;font-size:medium">
Много таких мест образуется из-за особенности оптимизации маппинга - если отодвинуть маленький браш от
большого, прилегающий фейс большого не будет разбит на более мелкие.

<br /><br />К примеру, почти все лампочки на <b>crossfire</b> сделаны таким образом:<br />
<img src="./content/ghostmining/crossfire0001.jpg" width="374" height="280" alt="crossfire" border="0" /><img
src="./content/ghostmining/crossfire0000.jpg" width="374" height="280" alt="crossfire" border="0" /><!--<img
src="./content/ghostmining/crossfire0002.jpg" width="374" height="280" alt="crossfire" border="0" /> -->

<br /><br />Ну а наличие tripmines на карте выводит <b>GhostMining</b> на новый уровень:
<br /><iframe width="420" height="315"
src="http://www.youtube.com/embed/FB8IDRL0RK0" frameborder="0" allowfullscreen></iframe>

<br /><br />Для серверов есть фикс - плагин AMXX, фиксящий этот баг:
<a href="http://aghl.ru/forum/viewtopic.php?f=19&t=305" target="_blank">aghl.ru</a>

<br /><br /><div style="font-size:xx-small;">Использованы материалы:
http://hydrogen.clan.su/publ/maps/datacore/3-1-0-27 http://maps.burkow.ru/not.htm#oos
http://aghl.ru/wiki/index.php?title=GhostMining
</div>

<?php
//}
?>