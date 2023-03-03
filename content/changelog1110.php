<?php
$head_title=($ru==0?"Changelog before 1110 - Half-Life.Loess.ru":"История изменений до 1110 - Half-Life.Loess.ru");

echo("<p style=\"\">");echo(nl2br(htmlspecialchars(
implode("",file("./content/changelog1110.txt"))
,null,'win-1251'))

);echo("</p>");
?>
