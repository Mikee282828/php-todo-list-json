<?php
$fileContent = file_get_contents("dati.json");

$tasks = json_decode($fileContent, true);

if (isset($_POST["title"])) {

    $task = [
        "title" => $_POST["title"],
        "done" => ($_POST["done"] == "false") ? false : true,
        "Date" => $_POST["Date"]
    ];

    $tasks[] = $task;

    include "boolOrderer.php";

    $newFileContent = json_encode($tasks);

    file_put_contents("dati.json", $newFileContent);
}

echo $newFileContent;
