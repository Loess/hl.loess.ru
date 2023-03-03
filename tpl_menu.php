<?php
if($ru==1){
echo((count($_GET)==0 or (count($_GET)==1 and isset($_GET["ru"])))?"Главная":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."\">Главная</a>");
echo("<br />");
echo("<br />");echo(isset($_GET["mods"])?"Half-Life Mods":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods\">Half-Life Mods</a>");
echo("<br />");
echo("<br />");echo((isset($_GET["txt"]) and $_GET["txt"]=="")?"Статьи":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?txt\">Статьи</a>");
//echo("<br />");echo(isset($_GET["events"])?"События":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?events\">События</a>");
echo("<br />");echo(isset($_GET["feedback"])?"Связь":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?feedback\">Связь</a>");
echo("<br />");echo(isset($_GET["links"])?"Другие сайты":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?links\">Другие сайты</a>");
echo("<br />");
echo("<br />");echo(isset($_GET["download"])?"Скачать HL":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?download\">Скачать HL</a>");
echo("<br />");echo(isset($_GET["server"])?"Сервер HLDM":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?server\">Сервер HLDM</a>");


}
elseif($ru==0){
echo((count($_GET)==0 or (count($_GET)==1 and isset($_GET["en"])))?"Index page":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."\">Index page</a>");
echo("<br />");
echo("<br />");echo(isset($_GET["mods"])?"Half-Life Mods":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods\">Half-Life Mods</a>");
echo("<br />");
echo("<br />");echo((isset($_GET["txt"]) and $_GET["txt"]=="")?"Articles":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?txt\">Articles</a>");
//echo("<br />");echo(isset($_GET["events"])?"Events":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?events\">Events</a>");
echo("<br />");echo(isset($_GET["feedback"])?"Feedback":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?feedback\">Feedback</a>");
echo("<br />");echo(isset($_GET["links"])?"Other Sites":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?links\">Other Sites</a>");
echo("<br />");
echo("<br />");echo(isset($_GET["download"])?"Download HL":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?download\">Download HL</a>");
echo("<br />");echo(isset($_GET["server"])?"HLDM Server":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?server\">HLDM Server</a>");

}
echo("<br />");echo(isset($_GET["donate"])?"Donate":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?donate\">Donate</a>");

/*if($ru==1){
echo((count($_GET)==1)?"Главная":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?ru\">Главная</a>");
echo("<br />");
echo("<br />");echo(isset($_GET["mods"])?"Half-Life Mods":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods&amp;ru\">Half-Life Mods</a>");
echo("<br />");
echo("<br />");echo(isset($_GET["events"])?"Новости сайта":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?events&amp;ru\">Новости сайта</a>");
echo("<br />");echo(isset($_GET["feedback"])?"Связь":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?feedback&amp;ru\">Связь</a>");
echo("<br />");echo(isset($_GET["links"])?"Ссылки":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?links&amp;ru\">Ссылки</a>");

}
else{
echo((count($_GET)==0)?"Index page":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."\">Index page</a>");
echo("<br />");echo("<br />");echo(isset($_GET["mods"])?"Half-Life Mods":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?mods\">Half-Life Mods</a>");
echo("<br />");echo("<br />");echo(isset($_GET["events"])?"Site Events":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?events\">Site Events</a>");
echo("<br />");echo(isset($_GET["feedback"])?"Feedback":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?feedback\">Feedback</a>");
echo("<br />");echo(isset($_GET["links"])?"Other Sites":"<a href=\"http://".$_SERVER["HTTP_HOST"].substr($_SERVER["PHP_SELF"],0,strlen($_SERVER["PHP_SELF"])-9)."?links\">Other Sites</a>");
}
 */
?>