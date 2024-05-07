<?php
echo "Exercise 3\n";
echo "\n";
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
$valueFound = false;
while (!$valueFound) {
    echo "Enter the value to search for: ";
    $value = readline();

    foreach ($numbers as $number) {
        if ($value == $number) {
            $valueFound = true;
            echo "Array contains your entered value $value\n";
            break 2;
        }
    }
    echo "Value not found! Do you want to keep trying! (y/n):";
    $tryAgain = readline();
    if (strtolower($tryAgain) !== "y") {
        echo "Exit!\n";
        break;
    }
}

