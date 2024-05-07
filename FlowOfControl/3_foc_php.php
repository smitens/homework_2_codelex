<?php
echo "Exercise 3\n";
echo"\n";
function readNumber($prompt): string {
    while (true) {
        echo $prompt;
        $value = (int)readline();
        if ($value > 0) {
            return $value;
        }
        echo "Error: Value invalid!\n";
    }
}
$value = readNumber("Enter the number: ");
$valueAsString = trim($value);
echo "Number of digits of the value is: " . strlen($valueAsString). "\n";


