<?php
//How to  set up linux server in 2015||How to  set up linux server in 2015
$head_title=("How to set up linux server in 2015 - Half-Life.Loess.ru");
//$head_title=($ru==0?"Articles - Half-Life.Loess.ru":"Статьи - Half-Life.Loess.ru");

/*if($ru==0){ ?>
template
<?php }
elseif($ru==1){ */?>
<h3>Linux server in 2015</h3><br />
<div>
Изучаем материалы:<br />
<a href="https://developer.valvesoftware.com/wiki/SteamCMD">https://developer.valvesoftware.com/wiki/SteamCMD</a> | <a href="https://developer.valvesoftware.com/wiki/SteamCMD:ru">https://developer.valvesoftware.com/wiki/SteamCMD:ru</a><br />
лучший man по теме: <a href="http://unix-gaming.net/ustanovka-i-nastroyka-half-life-servera-linux.html">http://unix-gaming.net/ustanovka-i-nastroyka-half-life-servera-linux.html</a><br />
<a href="http://aghl.ru/wiki/index.php?title=%D0%A3%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0_%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80%D0%B0">http://aghl.ru/wiki/</a> (2 мануала AG+HLDM)<br />
не забываем заглянуть, как оно было во времена hldsupdatetools<br />
<a href="http://www.rackspace.com/knowledge_center/article/half-life-dedicated-server-on-ubuntu-intrepid-steam-version">http://www.rackspace.com/knowledge_center/article/half-life-dedicated-server-on-ubuntu-intrepid-steam-version</a><br /><br />
в файле valve/liblist.gam меняем значение type с singleplayer_only на multiplayer_only<br />
<br />
ставим <a href="http://sourceforge.net/projects/metamod-p/">Metamod-P</a> и другие плагины по вкусу, например, <a href="http://cs.rin.ru/forum/viewforum.php?f=29">Dproto</a> (последняя версия на момент написания - 0.9.356), <a href="http://www.amxmodx.org/downloads.php">AMXX</a><br /><br />

, не забываем вовремя включать моск и переназначать права, как указано в мануале на <a href="http://unix-gaming.net/ustanovka-i-nastroyka-half-life-servera-linux.html">unix-gaming.net</a><br />

после отладки server.cfg, установки прав на файлы и настройки upload-сервера, добавляем ip в <a href="http://css.setti.info/">http://css.setti.info/ </a><br />
затем проверяем его наличие в мастер-серверах <a href="http://api.steampowered.com/ISteamApps/GetServersAtAddress/v0001?addr=91.215.203.99&format=json">http://api.steampowered.com/ISteamApps/GetServersAtAddress/v0001?addr=91.215.203.99&format=json</a>
</div>

<?php
//}
?>