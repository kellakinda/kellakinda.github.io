<?php
//Datenbank anbinden:
//$db_url = "localhost";
//$db_user = "root";
//$db_pw = "";
$db_url = "db4free.net:3306/uh2016";
$db_user = "sasu";
$db_pw = "uh2016";
$db_name = "uh2016";
function db_connect() {
global $db_url, $db_user, $db_pw, $db_name;
//Verbindung zu PHPMYADMIN:
$db = mysql_connect($db_url,$db_user,$db_pw) or die ("Keine DB_Verbindung möglich!" . mysql_error());
//Verbindung zu meiner DB:
	mysql_select_db($db_name) or die ("DB nicht verfügbar!" . mysql_error());
	
	return $db;
}
//Anfrage an die DB:
function db_query($query) {
	$ergebnis = mysql_query($query) or die ("Fehler bei der SQL_Anfrage!<br />" . mysql_error());
	return $ergebnis; 	
}
//Schließen der DB:
function db_close($db) {
	mysql_close($db) or die  ("Verbindung kann nicht geschlossen werden!<br />" . mysql_error());	
}
?>