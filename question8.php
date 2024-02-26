<?php

$marksobtain= 85; 
if ($marksobtain>= 90) {
    $grade = "A";
} elseif ($marksobtain>= 80) {
    $grade = "B";
} elseif ($marksobtain>= 70) {
    $grade = "C";
} elseif ($marksobtain>= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Grade: " . $grade;

?>