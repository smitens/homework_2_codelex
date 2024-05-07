<?php

echo "Exercise 2\n";
echo "\n";
$numbers = [20, 30, 25, 35, -16, 60, -100];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / count($numbers);
echo "Average value is $average\n";

