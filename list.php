<?php
$fileContent = file_get_contents("dati.json");

$tasks = json_decode($fileContent,true);

include "boolOrderer.php";

echo json_encode($tasks);