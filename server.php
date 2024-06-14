<?php

// $prova = [
//     [
//         "title" => "prendere le medicine",
//         "done" => true,
//         "Date" => "13/06/2024 18:00"
//     ],
//     [
//         "title" => "prendere le medicine 1",
//         "done" => false,
//         "Date" => "13/06/2024 19:00"
//     ],
//     [
//         "title" => "prendere le medicine 2",
//         "done" => true,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 3",
//         "done" => true,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 4",
//         "done" => false,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 5",
//         "done" => true,
//         "Date" => "13/06/2024 18:00"
//     ],
//     [
//         "title" => "prendere le medicine 6",
//         "done" => false,
//         "Date" => "13/06/2024 19:00"
//     ],
//     [
//         "title" => "prendere le medicine 7",
//         "done" => true,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 8",
//         "done" => true,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 9",
//         "done" => false,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 10",
//         "done" => true,
//         "Date" => "13/06/2024 18:00"
//     ],
//     [
//         "title" => "prendere le medicine 11",
//         "done" => false,
//         "Date" => "13/06/2024 19:00"
//     ],
//     [
//         "title" => "prendere le medicine 12",
//         "done" => true,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 13",
//         "done" => true,
//         "Date" => "13/06/2024 20:00"
//     ],
//     [
//         "title" => "prendere le medicine 14",
//         "done" => false,
//         "Date" => "13/06/2024 20:00"
//     ],
// ];
$prova = file_get_contents("dati.json");

header("Content-Type: application/json");

echo $prova;
