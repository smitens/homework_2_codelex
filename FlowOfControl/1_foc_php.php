<?php
echo "Exercise 1\n";
echo"\n";
function readValidNumber($prompt): string {
    while (true) {
        echo $prompt;
        $value = (int) readline();
        if ($value !== 0) {
            return $value;
        }
        echo "Error: Value invalid!\n";
    }
}

$value_1 = readValidNumber("Input the 1st number: ");
$value_2 = readValidNumber("Input the 2nd number: ");
$value_3 = readValidNumber("Input the 3rd number: ");

$maxValue = max($value_1, $value_2, $value_3);
echo "The largest value is: $maxValue\n";
