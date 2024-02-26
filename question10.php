<?php

$Title = "This is an example of a very long article title that needs to be truncated to fit the 50 character limit";
if (strlen($Title) > 50) {
   
    $truncatedTitle = substr($Title, 0, 50);
} else {
   
    $truncatedTitle = $Title;
}

// Output the truncated or original title
echo "Article Title: " . $truncatedTitle;

?>