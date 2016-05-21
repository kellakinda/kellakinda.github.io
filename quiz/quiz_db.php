<?php

//SELECT:
$db = db_connect();
$anfrage = "SELECT * FROM question";  //alle Datensätze!
$questoinq = db_query($anfrage); //Funktionsaufruf mit Anfrage an DB
$anzahl_questions = mysql_num_rows($questoinq);

$questions = array();

$zeile = null;
$count = 0;

for($i=0;$i<$anzahl_questions;$i++) {
	$zeile = mysql_fetch_row($questoinq);	
	//Array erstellen => alle Datensätze in Objekte speichern => diese in das Array speichern
    $questions[$count][0] = $zeile[0];
    $questions[$count][1] = $zeile[1];
    $questions[$count][2] = $zeile[2];
    $questions[$count][3] = $zeile[3];
    $questions[$count][4] = $zeile[4];
    $questions[$count][5] = $zeile[5];
    $questions[$count][6] = $zeile[6];
    $count++;    
}
//echo json_encode($questions);

?>