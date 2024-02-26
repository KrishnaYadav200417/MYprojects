<?php

$marks = 75;

if ($marks < 60) {
    $grade = "F";
} elseif ($marks <= 70) {
    $grade = "D";
} elseif ($marks <= 80) {
    $grade = "C";
} elseif ($marks <= 90) {
    $grade = "B";
} else {
    $grade = "A";
}
echo "Grade: " . $grade;

?>