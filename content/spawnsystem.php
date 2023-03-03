<?php
$head_title=($ru==0?"Spawn system - Half-Life.Loess.ru":"������� ������ ������� - Half-Life.Loess.ru");
//$head_title=($ru==0?"Articles - Half-Life.Loess.ru":"������ - Half-Life.Loess.ru");

if($ru==0){ ?>
<h3>Spawn system</h3><br />
<p>
Most of you have probably seen some good players predict where a player will spawn next on a map like crossfire. Although some of you think that it's a random process, and well it is, but it's not truly random. Knowing the system WILL give you an advantage, but you probably already know that if you've played or seen a crossfire match of top level players.
<br /><br />
The idea behind it all is simple - every map has a spawn point order. When a mapper creates a map, he places them in some order, most of them place spawnpoints after they create everything else, so spawn points usually follow some path, or atleast they are clustered in groups. For example you can see the order of spawn points on crossfire in the following image.
<br />
<img src="./content/spawnsystem/crossfire2.png" width="" height="" alt="crossfire.jpg" border="0">
<br />You can determine the order of spawn points using a program like BSPViewer.
<br /><br />
The first spawn on the map after a mapchange or a match start is random as far as I know. But all of the next spawns are not fully random. Every spawn after the first one will be up to 5 spawn spots away. For example you spawn at the spawn point 1, then someone kills you. Then you will only spawn in one of the points from 2 to 6, which will be picked randomly. Another example would be if your enemy spawned on the spawnpoint number 15, then after you killed him he would only spawn on one of these spawn points : 16, 17, 1, 2, 3.
<br /><br />
The only exception is that if the spawn point that is randomly chosen is taken, e.g. if someone is standing on it, then the next one is chosen, and if that one is invalid too, then the next one is chosen, and so on.. And if there are no valid spawn points, then the person standing on the one that was selected first would be killed, and you would spawn. For example, some of you may know, that this happens on agtricks map when more than one person happens to spawn at once, because that map has only one spawn point.
<br /><br />
I you have doubts about this then you can find this information by yourself by reading the source code from half-life sdk, if you know C/C++ you can find a relevant code snippet
<a href="./content/spawnsystem/spawns.src.txt">here</a>.
<br /><br />
Also you can find the spawn point order for some other maps here:
<br />
<a href="./content/spawnsystem/crossfire_by_gf.jpg">crossfire_by_gf</a><br />
<a href="./content/spawnsystem/crossfire_by_quicksilver.jpg">crossfire_by_quicksilver</a><br />
<a href="./content/spawnsystem/stalkyard.jpg">stalkyard</a><br />
<a href="./content/spawnsystem/doublecross.jpg">doublecross</a><br />
<a href="./content/spawnsystem/boot_camp.jpg">boot_camp</a><br />
<a href="./content/spawnsystem/datacore.jpg">datacore</a><br />
<a href="./content/spawnsystem/endcamp.jpg">endcamp</a><br />
<a href="./content/spawnsystem/lost_village2.jpg">lost_village2</a><br />
<a href="./content/spawnsystem/rapidcore.jpg">rapidcore</a><br />
<a href="./content/spawnsystem/stalkx.jpg">stalkx</a><br />
    <br />
    <iframe width="630" height="472" src="http://www.youtube.com/embed/THzHuWjuTZk" frameborder="0" allowfullscreen></iframe>


    <br /><div style="font-size:xx-small;">Sources used:
http://ghetto.us.lt/spawns.htm http://hydrogen.clan.su/publ/spawn_system/1-1-0-37
</div>
<?php }
elseif($ru==1){ ?>
<h3>������� ������ �������</h3><br />
<p style="/*font-family: 'Times New Roman', Times, serif;font-size:medium*/">
����������� �� ���, ��������, ������, ��� ������� ������ �������������,
��� �� ����� ��������� ���������. ���-�� ������, ��� ��� ����������� ��� ����, �� ��� �� ���.
���� ��� �������, ��� ���� ���������� ���������� �������, � ��� ����� ��������� ������������.
<br /><br />
���� ������ - ������ ����� ����� ������ ������������ ����� ���������.
����� ������ ������� �����, �� ����������� �� � ������������ �������,
� ��������� ���� ������� ����� ����� ��������� ���� ���������� �����. ��������,
�� �������� ���� ���������� ������ ������� �� crossfire:<br />
<img src="./content/spawnsystem/crossfire2.png" width="" height="" alt="crossfire.jpg" border="0">
<br /><br />
������� �� ������ ������:
<!--<a href="./content/spawnsystem/crossfire.jpg">crossfire</a>--><br />
<a href="./content/spawnsystem/crossfire_by_gf.jpg">crossfire_by_gf</a><br />
<a href="./content/spawnsystem/crossfire_by_quicksilver.jpg">crossfire_by_quicksilver</a><br />
<a href="./content/spawnsystem/stalkyard.jpg">stalkyard</a><br />
<a href="./content/spawnsystem/doublecross.jpg">doublecross</a><br />
<a href="./content/spawnsystem/boot_camp.jpg">boot_camp</a><br />
<a href="./content/spawnsystem/datacore.jpg">datacore</a><br />
<a href="./content/spawnsystem/endcamp.jpg">endcamp</a><br />
<a href="./content/spawnsystem/lost_village2.jpg">lost_village2</a><br />
<a href="./content/spawnsystem/rapidcore.jpg">rapidcore</a><br />
<a href="./content/spawnsystem/stalkx.jpg">stalkx</a><br />
<br />
������ ����� �� �����, ��������, ���������� ��������, �� ��� ��������� ����� �� �������� ��������� ����������.
������ ����������� ���� ���������� �������� �� ���� ���������,
�.�. ���� �� ��������� �� ����� �3 � ��� �����, �� � ��������� ��� �� ��������� �� ����� � ������� �� 4 �� 8 (4,5,6,7,8),
� ���� �� ��������� �� ����� �6, �� ��������� ����� � ������� �� 7 �� 11 (7,8,9,10,11),
����� �� ��������� �������������, �� ������ ���������� ����� � 1 �� ������� ����������� ������ 5,
��������, ���� ����� ����� ����� 17 ������, � ��� ��������� ���������� �� ����� �15 ��� ���� ����,
�� �� � ��������� ��� �� �������� �� 16,17,1,2 ��� 3 �����.
������������ ����������� �������� ���� ��� ������, ����� ��������� ���� ����������� ���-���� �����,
� ����� ������ ��� (��� ���� ������ ����������) ����������� ��������� (+1) � ��� �����, �� ���� ���
����� ����������� ��������, �� �����, �������� ��� ��������� ����, ����� ����, � �� ��������� �� ���
����� (�������� ����� ������� ����� agtricks)
<br /><br />
������ ������� �� ���� ����� � ������� � ���� �� ������������ ���� �� ����� �������
(���� ���� ������� ������������ ��), ����������� �����, ���� C/C++, �� ������ ����� ��
��������� ��������� ���� half-life sdk <a href="./content/spawnsystem/spawns.src.txt">�����</a>.
<br />
<iframe width="630" height="472" src="http://www.youtube.com/embed/THzHuWjuTZk" frameborder="0" allowfullscreen></iframe>


<br /><br /><div style="font-size:xx-small;">������������ ���������:
http://ghetto.us.lt/spawns.htm http://hydrogen.clan.su/publ/spawn_system/1-1-0-37
</div>

<?php
}
?>