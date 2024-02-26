<?php

$Price = 6900;
if ($Price > 5000) {
      $dis = $Price * 0.1; 
    $after = $Price -   $dis; 
    echo "Total after 10% discount: Rs. " . $after;
} else {
    
    echo "Total price without discount: Rs. " . $Price;
}

?>