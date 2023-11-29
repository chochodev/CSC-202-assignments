<?php

echo "Enter a score between 0 and 100: ";
$score = intval(trim(fgets(STDIN)));

if ($score < 0 || $score > 100) {
    echo "Error: Score is out of range.\n";
} else {
    if ($score >= 70) {
        echo "Grade: A\n";
    } elseif ($score >= 60) {
        echo "Grade: B\n";
    } elseif ($score >= 50) {
        echo "Grade: C\n";
    } elseif ($score >= 45) {
        echo "Grade: D\n";
    } else {
        echo "Grade: F\n";
    }
}

?>