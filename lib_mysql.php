<?php
$hostname = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
$DB = getenv('MYSQL_DATABASE', true) ?: getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD');
$persistent_connection = false;

function mysql_die() {
//header('Refresh: 1; URL=http://hl.loess.ru/');
  echo "<b>Error: no DB access, try to refresh in some minutes</b>";
//  echo  mysql_error();
  exit;
}

if ($persistent_connection) {
  $link = mysql_pconnect($hostname, $user, $password) or mysql_die();
} else {
  $link = mysqli_connect($hostname, $user, $password, $DB) or mysql_die();
}
//mysql_query("SET NAMES UTF8");
//mysql_select_db($DB,$link);
unset($configs);
unset($hostname);
unset($user);
unset($password);
unset($persistent_connection);
unset($DB);

mysqli_query($link,'SET NAMES cp1251');
setlocale(LC_ALL, 'ru_RU.cp1251');

?>