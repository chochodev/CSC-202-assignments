<?php

while (true) {
    
    echo "Enter a score between 0 and 100: ";
    $score = trim(fgets(STDIN));

    if (!is_numeric($score)) {
        echo "Error: Enter a valid score.\nTerminating...";
        break;
    }
    else if ($score < 0 || $score > 100) {
        echo "Error: Score is out of range.\nTerminating...";
        break;
    } else {
        if ($score >= 90) {
            echo "Grade: A\n";
        } elseif ($score >= 80) {
            echo "Grade: B\n";
        } elseif ($score >= 70) {
            echo "Grade: C\n";
        } elseif ($score >= 60) {
            echo "Grade: D\n";
        } else {
            echo "Grade: F\n";
        }
    }
}

?>