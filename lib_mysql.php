<?php
$configs = include('persistent/config.php');
$hostname = $configs['dbhost'];
$DB = $configs['dbname'];
$user = $configs['dbusername'];
$password = $configs['dbpassword'];
$persistent_connection =  $configs['dbpersistentconn'];

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