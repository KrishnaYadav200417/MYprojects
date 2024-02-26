<?php

$username  = "user123";
$storedPassword = "password123";
$input = "user123"; 
$inputPass = "password123";
if ($input == $username  && $inputPass == $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid details ";
}

?>