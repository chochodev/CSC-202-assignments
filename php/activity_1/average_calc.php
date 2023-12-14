<?php
# AVERAGE NUMBER CALCULATOR
function numberValidator($number) {
    if ($number.is_numeric) {
        return;
    } else {
        echo ("Error: Enter a valid number");
    }
}
echo("Enter first number: ");
$num1 = intval(trim(fgets(STDIN)));
numberValidator($num1);
echo($num1);
?>