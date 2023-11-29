<?php

echo("---- SALARY GRADER IN PHP TERMINAL ----\n");
echo("Salary grades = [\nA = 15,000\nB = 12,000\nC = 10,000\nD = 9,000\n]\n");
while (true) {
    echo("Enter your salary grade: ");
    $salary = strtoupper(trim(fgets(STDIN)));

    if (in_array($salary, ['A','B','C','D'])) {
        if ($salary == 'A') {
            echo("SALARY: 15,000\n");
        } else if ($salary == 'B') {
            echo("SALARY: 12,000\n");
        } else if ($salary == 'C') {
            echo("SALARY: 10,000\n");
        } else if ($salary == 'D') {
            echo("SALARY: 9,000\n");
        } else {
            echo("SALARY: 9,000\n");
        }
    } else {
        echo("Salary grade not included\nTerminating...");
        break;
    }
    
}

?>