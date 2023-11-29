<?php

echo("---- SCORE GRADER IN PHP TERMINAL ----\n");
while (true) {
    echo("Enter your score between 0 to 100: ");
    $score = intval(trim(fgets(STDIN)));

    if ($score > 100 || $score < 0) {
        echo("Score out of range");
        break;
    }
    else {
        switch (true) {
            case $score >= 70:
                echo("GRADE: A\n");
                break;
            case $score >= 60:
                echo("GRADE: B\n");
                break;
            case $score >= 50:
                echo("GRADE: C\n");
                break;
            case $score >= 45:
                echo("GRADE: D\n");
                break;
            default:
                echo("GRADE: F\n");
                break;
        }
    }
    
}

?>