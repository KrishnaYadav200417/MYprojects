<?php

$username  = "user124";
$storedPassword = "password124";
$input = "user124"; 
$inputPass = "password124";
if ($input == $username  && $inputPass == $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid details ";
}

?>
