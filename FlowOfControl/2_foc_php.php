<?php
echo "Exercise 2\n";
echo"\n";
function validNumber($prompt): string {
    while (true) {
        echo $prompt;
        $value = (int)readline();
        if ($value !== 0) {
            return $value;
        }
        echo "Error: Value invalid!\n";
    }
}
$value = validNumber("Enter the number: ");
if ($value > 0) {
    echo "Value is positive!\n";
} else {
    echo "Value is negative!\n";
}

