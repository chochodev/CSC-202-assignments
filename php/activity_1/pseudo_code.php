<?php
# AREA & CIRCUMFERENCE CALCULATOR

echo "\n## AREA & CIRCUMFERENCE CALCULATOR";
function get_validate_number($prompt) {
    echo $prompt;
    $input = trim(fgets(STDIN));

    if (!is_numeric($input)) {
        echo "\n## Error: Enter a valid number\n";
        exit();
    }
    return floatval($input);
}

$pi = 3.142;
$radius = get_validate_number("Enter the circle radius(meters): ");
$circumference = 2 * $pi * $radius;
$area = $pi * $radius**2;

echo "Results:\nCircumference: $circumference"."m \nArea: $area". "m\u{00B2}\n";

?>