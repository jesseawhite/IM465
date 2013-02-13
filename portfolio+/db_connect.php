<?php //db_connect.php
require_once 'login.php';

// connect to the mysql db

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

// check connection

if (!$db_server) die("Can't connect " . mysql_error());

// select database

mysql_select_db($db_database) or die("Can't connect " . mysql_error());

?>