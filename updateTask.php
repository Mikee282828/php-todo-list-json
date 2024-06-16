<?php
$fileContent = file_get_contents("dati.json");

$tasks = json_decode($fileContent,true);

if($_POST["booleano"]=="true"){
    $bool = false;
}elseif($_POST["booleano"]=="false"){
    $bool = true;
}

$index = $_POST["indice"];

$tasks[$index]["done"] = $bool;

include "boolOrderer.php";

file_put_contents("dati.json",json_encode($tasks));

echo json_encode($tasks);