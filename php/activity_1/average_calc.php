<?php
# AVERAGE NUMBER CALCULATOR
function get_validate_number($prompt) {
    echo $prompt;
    $input = trim(fgets(STDIN));

    if (!is_numeric($input)) {
        echo "\n## Error: Enter a valid number\n";
        exit();
    }
    return floatval($input);
}

$num1 = get_validate_number("Enter first number: ");
$num2 = get_validate_number("Enter second number: ");
$num3 = get_validate_number("Enter third number: ");

$average = round(($num1+$num2+$num3)/3, 2);
echo "Average is " . strval($average);
?>