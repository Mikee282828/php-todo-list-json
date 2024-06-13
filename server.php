<?php

$prova = [
    [
        "task" => "prendere le medicine",
        "done" => false,
        "Date" => "13/06/2024 18:00"
    ],
    [
        "task" => "prendere le medicine 2",
        "done" => false,
        "Date" => "13/06/2024 19:00"
    ],
    [
        "task" => "prendere le medicine 3",
        "done" => false,
        "Date" => "13/06/2024 20:00"
    ]
];
header("Content-Type: application/json");

echo json_encode($prova);
