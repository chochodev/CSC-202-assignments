<?php

echo("---- SALARY GRADER IN PHP TERMINAL ----\n");
echo("Salary grades = [\nA = 15,000\nB = 12,000\nC = 10,000\nD = 9,000\n]");
while (true) {
    echo("Enter your salary grade: ");
    $salary = trim(fgets(STDIN));

    if (in_array($salary, ['A','B','C','D'])) {
        switch (true) {
            case $salary >= 70:
                echo("GRADE: A\n");
                break;
            case $salary >= 60:
                echo("GRADE: B\n");
                break;
            case $salary >= 50:
                echo("GRADE: C\n");
                break;
            case $salary >= 45:
                echo("GRADE: D\n");
                break;
            default:
                echo("GRADE: F\n");
                break;
        }
    }
    else {
        echo("salary grade not included\nTerminating...");
        break;
    }
    
}

?>