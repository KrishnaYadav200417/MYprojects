<?php

$Answers = ['A', 'C', 'B', 'D', 'A'];
$usersAnswers = ['A', 'B', 'C', 'D', 'A'];

$score = 0;
foreach ($usersAnswers as $index => $Answerswer) {
    if ($Answerswer == $Answers[$index]) {
   
        $score++;
    }
}
$totalScore = ($score / count($Answers)) * 100;
echo "Your score: " . $totalScore . "%";

?>