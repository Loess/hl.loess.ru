<?php
// For PHP 8.1+: mysqli by default throws mysqli_sql_exception if connect error, but not returns false.
// That's why construct "or mysql_die()" may not work. Add this for old behaviour:
mysqli_report(MYSQLI_REPORT_OFF);

$hostname = getenv('MYSQL_HOST', true) ?: getenv('MYSQL_HOST');
$DB = getenv('MYSQL_DATABASE', true) ?: getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER', true) ?: getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD', true) ?: getenv('MYSQL_PASSWORD');
$persistent_connection = false;

function mysql_die() {
  //header('Refresh: 1; URL=http://hl.loess.ru/');
  echo "<b>Error: no DB access, try to refresh in some minutes</b>";
  // error_log(mysqli_connect_error());
  exit;
}

$host = $persistent_connection ? 'p:' . $hostname : $hostname;
$link = mysqli_connect($host, $user, $password, $DB) or mysql_die();
//mysql_query("SET NAMES UTF8");
//mysql_select_db($DB,$link);
unset($configs);
unset($hostname);
unset($user);
unset($password);
unset($persistent_connection);
unset($DB);
unset($host);

if (!mysqli_set_charset($link, 'cp1251')) {
    mysql_die();
}
setlocale(LC_ALL, 'ru_RU.cp1251');

?>