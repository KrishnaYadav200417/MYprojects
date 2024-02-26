<?php

$step = 500; 


if ($step < 5000) {
    $Lvl = "Beginner";
} elseif ($step <= 10000) {
    $Lvl = "Intermediate";
} else {
    $Lvl = "Advanced";
}


echo "Fitness Lvl: " . $Lvl;

?>