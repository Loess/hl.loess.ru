<?php
$head_title=($ru==0?"Entity editing in GoldSrc maps - Half-Life.Loess.ru":"Редактирование entity на картах GoldSrc - Half-Life.Loess.ru");
?>
<?php
function rus(){
	?>

<style type="text/css">
 h2 {margin-top: 15px;}
 </style><div>

    <h1>
        Редактирование Entity на картах GoldSrc без декомпиляции
    </h1>  <br />
    <div>
        <div style="display:inline;">В этой статье пойдет речь о портировании карт в Half-Life из других игр GoldSource (Counter-Strike, Team Fortress Classic, Day of Defeat и других.). Процесс не будет скучен и однообразен. На редактирование энтитей одной карты примерно уходит от 10 минут до одного часа.
        <br /><br />Для редактирования понадобятся:
        <br /></li><li> RipEnt. Консольное приложение из набора компиляторов <a href="http://wiki.hldm.org/index.php/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D1%8B_%D0%B4%D0%BB%D1%8F_%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D1%8B_%D1%81_%D0%BA%D0%B0%D1%80%D1%82%D0%B0%D0%BC%D0%B8#Zoner.27s_Halflife_Tools_.28ZHLT.29" >Zoner's Halflife Tools (ZHLT)</a>.
        <br /></li><li> Игра Half-Life с настроенным AmxModX и плагин <a href="http://aghl.ru/forum/viewtopic.php?f=19&amp;t=733" target="_blank">"Weapon Factory"</a>, для удобного и быстрого раскидывания предметов по карте.
        <br /></li><li> EntConverter.
        <br /><div class="quote"><b>всё, кроме самой игры, одним архивом:</b>
<a href="http://hl.loess.ru/content/ented/ented_tools.zip" >ented_tools.zip</a> [4.35 Mb]</div>
        <br />Процесс портирования -- это раскидывание предметов Half-Life по карте -- оружия, точек спавна, и удаление предметов другой игры. Вся информация об объектах на карте хранится в текстовом
виде, нам нужно лишь экспортировать эту информацию в текстовый файл, отредактировать его и импортировать обратно в карту.
        <br /><br />Раскидывать предметы по карте мы будем в самой игре, очень удобно летать по карте и в подходящие места вставлять оружие. Делать это будем с помощью AMX плагина от <a href="http://1337.uz/feedback/" target="_blank">GordonFreeman'а</a> -- Weapon Factory.
        <br />Переименуйте файл liblist.gam в liblist_backup.gam, он находится в директории valve.
        <br />Теперь скачиваем архив ented_tools.zip и копируем все содержимое папки amxx в директорию valve, на все предложения о заменах нажимаем "Да".
        <br /><br />Сам процесс редактирования я продемонстрирую на карте для Counter-Strike -- <a href="http://cs.gamebanana.com/maps/177129" target="_blank">fy_kano</a>. Заходим в архив fy_kano_4.rar, видим там директорию cstrike, заходим в неё и распаковываем все содержимое из неё в директорию valve с заменой (например, в D:\Games\Steam\steamapps\common\Half-Life\valve), в данном случае - папки gfx и maps.
        <br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886684_1.gif|--><a href="http://hldm.org/uploads/posts/2014-04/1396886684_1.gif" onclick="return hs.expand(this)" ><img src="content/ented/1396886684_1.gif" alt='fy_kano_4.rar' title='fy_kano_4.rar'  /></a><!--TEnd--></div>
        <br /><br />При первом запуске карты в игре Half-Life я получил ошибку "Mod_NumForName: models/winebottle.mdl not found".
        <br /><br /><div style="text-align:center;"><!--dle_image_begin:http://hldm.org/uploads/posts/2014-04/1396886615_2.gif|--><img src="content/ented/1396886615_2.gif" alt="GoldSrc model load error" title="GoldSrc model load error"  /><!--dle_image_end--></div>
        <br /><br />Подобные ошибки появляются, когда используемый ресурс (модель, звук, спрайт) не был найден. Есть два способа решения этой проблемы. <span style="color:#ff471a">Первый способ</span> -- скопировать используемые ресурсы карты из игры Counter-Strike в Half-Life. <span style="color:#47d147">Второй способ</span> -- удалить или заменить сведения об объектах из ent файла, в этом случае мы удалим объект на карте или просто заменим свойства объекта, и игра не станет его искать, либо загрузит другой файл. С этим способом нужно быть аккуратным и учитывать особенности карты, т.к. некоторые объекты могут быть очень важны. Если на карте есть какой-либо вертолет, дерево, бутылка, человек, то он может пропасть.
        <br /><br />Рассмотрим <span style="color:#47d147">второй способ</span>, т.к. экспортировать сведения об объектах нам все равно придется. Для этого воспользуемся приложением RipEnt. В архиве, что я дал, имеется два bat файла, необходимо открыть их и исправить имя карты на свое, сохранить и запустить ripent_export.bat
        <br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886614_3.gif|--><a href="http://hldm.org/uploads/posts/2014-04/1396886614_3.gif" onclick="return hs.expand(this)" ><img src="content/ented/-1396886614_3.gif" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div>
        <br /><br />После запуска, у нас появится новый ent файл с названием нашей карты. Открываем этот файл и удаляем ненужные объекты, каждый объект начинается с открывающей фигурной скобки "{", и заканчивается "}", между скобками находятся различные директивы со свойствами. Директива "classname" это название объекта, мы будем работать лишь с некоторыми:
        <br /><br /><b>cycler_sprite</b> 			-- модель или спрайт на карте.
        <br /><b>env_sprite</b>				-- спрайт на карте (огонь или какой-то эффект).
        <br /><b>info_player_deathmatch</b> 	-- точка спавна игроков в мультиплеере. В Counter-Strike точка спавна террористов.
        <br /><b>info_player_start</b>		-- точка спавна игрока в одиночном режиме. В Counter-Strike точка спавна спецназовцев.
        <br /><b>game_player_equip</b>		-- объект позволяет экипировать игрока нужным оружием.
        <br /><b>ambient_generic</b>		-- звук на карте.
        <br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886603_4.gif|--><a href="http://hldm.org/uploads/posts/2014-04/1396886603_4.gif" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886603_4.gif" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />На карте fy_kano я убрал все cycler_sprite, game_player_equip, и оставил по одному info_player_deathmatch и info_player_start, остальные спавны будут расставляться по всей карте. Также я переместил некоторые стандартные файлы из cstrike в valve. После редактирования ent файла, его нужно импортировать обратно, для этого в архиве есть ripent_import.bat. Импортируем свойства объектов, кидаем карту в папку valve/maps и пробуем запустить ее в игре.<br /><br />После запуска можно заметить отсутствие различного оружия и предметов.<br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886669_5.jpg|--><a href="http://hldm.org/uploads/posts/2014-04/1396886669_5.jpg" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886669_5.jpg" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />Теперь воспользуемся плагином "Weapon Factory". Вводим в консоли "wp_spawn" и видим появившееся слева меню.<br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886623_6.jpg|--><a href="http://hldm.org/uploads/posts/2014-04/1396886623_6.jpg" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886623_6.jpg" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--><br /><br /><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886689_7.jpg|--><a href="http://hldm.org/uploads/posts/2014-04/1396886689_7.jpg" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886689_7.jpg" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />Выбираем, какое оружие или предмет будем спавнить. Можно указать угол поворота нашего предмета. До перезагрузки карты все добавленные предметы будут иметь голографический эффект.<br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886597_8.jpg|--><a href="http://hldm.org/uploads/posts/2014-04/1396886597_8.jpg" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886597_8.jpg" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--><br /><br /><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886657_9.jpg|--><a href="http://hldm.org/uploads/posts/2014-04/1396886657_9.jpg" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886657_9.jpg" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />Помимо оружия и патронов, не забываем расставить места спавна игроков. В плагине "Weapon Factory" объекта info_player_deathmatch нет, вернее он есть, но не работает. Я обычно использую монтировку в качестве точки спавна, в текстовом файле entity потом можно исправить weapon_crowbar на info_player_deathmatch.<br /><br />После того, как расставили все предметы и точки спавна, перезагружаем карту ("restart" в консоли) и видим уже, что наша карта полна предметами. Но портирование на этом не закончено, все эти предметы хранятся в базе данных плагина "Weapon Factory", а нам нужно внедрить все предметы в саму карту - bsp-файл.<br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886640_10.jpg|--><a href="http://hldm.org/uploads/posts/2014-04/1396886640_10.jpg" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886640_10.jpg" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />Теперь нужно конвертировать данные "Weapon Factory" в данные, которые можно спокойно импортировать в карту. Переходим в директорию valve\addons\amxmodx\configs\weapon_factory, в ней должен находится ini-файл с названием нашей карты, в моем случае fy_kano.ini. Для конвертации воспользуемся моим конвертером EntConverter, копируем файл ent_converter.exe в директорию с ini файлами valve\addons\amxmodx\configs\weapon_factory и запускаем его. После этого должен появится ent-файл с названием нашей карты, в моем случае это fy_kano.ent, все содержимое этого файла нужно дописать в ent-файл, который мы экспортировали с помощью RipEnt.<br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886603_11.gif|--><a href="http://hldm.org/uploads/posts/2014-04/1396886603_11.gif" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886603_11.gif" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />Не забываем про наш костыль. Нужно заменить weapon_crowbar на info_player_deathmatch. В некоторых случаях игроки могут появиться в земле, поэтому нужно увеличить z-координату (высоту) объекта, не забываем, что числа могут быть отрицательными.<br /><br /><div style="text-align:center;"><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886612_12.gif|--><a href="http://hldm.org/uploads/posts/2014-04/1396886612_12.gif" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886612_12.gif" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--><br /><br /><!--TBegin:http://hldm.org/uploads/posts/2014-04/1396886622_13.gif|--><a href="http://hldm.org/uploads/posts/2014-04/1396886622_13.gif" onclick="return hs.expand(this)" ><img src="/uploads/posts/2014-04/thumbs/1396886622_13.gif" alt='Портирование карт без декомпиляции' title='Портирование карт без декомпиляции'  /></a><!--TEnd--></div><br /><br />После сохранения конечного ent-файла, его нужно импортировать в карту, для этого нужно запустить файл "ripent_import.bat". Карта успешно портирована из Counter-Strike в Half-Life. Можно проверить, все ли работает. Перед этим не забываем удалить liblist.gam и переименовать liblist_backup.gam обратно в liblist.gam, этим самым мы отключим AmxModx и плагин "Weapon Factory", если этого не сделать, то все раскиданные нами предметы будут дублироваться.<br /><br />Подобным образом можно портировать почти все GoldSource карты. Помимо портирования, можно добавлять какие-то предметы в существующие карты Half-Life, исправить какие-то проблемы карт и т.п.</div>
    </div>

<?php

}


if($ru==0){
	//rus();
	?>
<style type="text/css">
 h2 {margin-top: 15px;}
 </style>

 there's no content yet, check link below


<br /><br /><div style="font-size:xx-small;">Source <a href="http://hldm.org/interes/stati/310-portirovanie-kart-bez-dekompilyacii.html" target="_blank">http://hldm.org/interes/stati/310-portirovanie-kart-bez-dekompilyacii.html</a>

</div>

<?php
   //   */
}
elseif($ru==1){

function cut_between($str,$from,$to,$offsetphrase=''){
    $na4alo=strpos($str,$from,($offsetphrase!=''?strpos($str,$offsetphrase):0))+strlen($from);
    $length=strpos($str,$to,$na4alo)-$na4alo;
 	return(trim(substr($str,$na4alo,$length)));
}


	//$fp=@fsockopen("aghl.ru", 80, $errno, $errstr, 3);
	$fp=FALSE;
if (!$fp) {//echo "$errstr ($errno)<br />\n";
 //rus();
}

?>

<img src="content/ented/slowcoder.png" width="320" height="320" alt="too sloaw" border="0" /><br />
 there's no content yet, check link below:


<br /><br /><div style="font-size:xx-small;">Source <a href="http://hldm.org/interes/stati/310-portirovanie-kart-bez-dekompilyacii.html" target="_blank">http://hldm.org/interes/stati/310-portirovanie-kart-bez-dekompilyacii.html</a>
   <?php  /*
<br /><br /><div style="font-size:xx-small;">Эта статья наглым образом скопипизжена с <a href="http://hldm.org/interes/stati/310-portirovanie-kart-bez-dekompilyacii.html" target="_blank">http://hldm.org/interes/stati/310-portirovanie-kart-bez-dekompilyacii.html</a> и немного отредактирована.
     */?>
</div>

<?php
}
?>