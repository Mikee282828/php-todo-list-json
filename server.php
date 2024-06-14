<?php

header("Content-Type: application/json");

if (isset($_POST["title"])) {

    $prova = file_get_contents("dati.json");

    $tasks = json_decode($prova,true); //il true serve per dire che è un array associativo

    $newTask = [
        "title" => $_POST["title"],
        "done" => $_POST["done"],
        "Date" => $_POST["Date"],
    ];

    $tasks[] = $newTask;
    
    file_put_contents("dati.json",json_encode($tasks));

    echo json_encode($tasks);

} else {
    $prova = file_get_contents("dati.json");

    header("Content-Type: application/json");

    echo $prova;
}
