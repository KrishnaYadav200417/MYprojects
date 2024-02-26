<?php


$totalorders = 1200; 
$Discount = 1000;


if ($totalorders > $Discount) {
    $discountApplied = true;
    $msg = "Congratulations! Your order qualifies for a discount.";
} else {
    $discountApplied = false;
    $msg = "Add more items to your cart to qualify for a discount.";
}


echo $msg;


if ($discountApplied) {
 
    $discountPercentage = 10;
    $discountAmount = ($totalorders * $discountPercentage) / 100;
    $finalAmount = $totalorders - $discountAmount;
    
    echo "<br>Your total after applying the discount: Rs. " . $finalAmount;
    echo "<br>You saved: Rs. " . $discountAmount;
}

?>