<?php

//Includes:
include("db_inc.php");
$db = db_connect();

$result = array('success' => 'false');

$corranswers = $_POST['corranswers'];
$falseanswers = $_POST['falseanswers'];

$query = "Insert into quizresultdata(corranswers, falseanswers) Values('" . $corranswers . "', '" . $falseanswers . "')";
//echo $query;
$ka = db_query($query);

$result = array('success' => 'true');

echo json_encode($result);
?>