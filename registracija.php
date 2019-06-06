<?php
require_once('db_functions.php');

//print_r($_GET);pasitikrinau, reiksmes sudeda i masyva
$a = $_GET['name'];
$b = $_GET['email'];
$c = $_GET['subject'];
createQuestion("$a", "$b", "$c");
 ?>
 <h2>Ačiū už klausimą, mes su Jumis susisieksime</h2>
