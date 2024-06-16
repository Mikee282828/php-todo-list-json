<?php
$j = 0;
for ($i = 0; $i < strlen($tasks); $i++) {
    if ($tasks[$j]["done"]) {
        $tasks[] = $tasks[$j];
        array_splice($tasks,$j,1);
    } else {
        $j++;
    }
}