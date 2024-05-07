<?php
echo "Exercise 4\n";
echo"\n";

$dayNumber = (int) readline ("Enter number (0 -6) and I will tell you which day of the week it represents: ");


switch ($dayNumber) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Not a valid day";
        break;
}
echo "\n";

if ($dayNumber >= 0 && $dayNumber <= 6) {
    if ($dayNumber == 0) {
        echo "Sunday";
    } elseif ($dayNumber == 1) {
        echo "Monday";
    } elseif ($dayNumber == 2) {
        echo "Tuesday";
    } elseif ($dayNumber == 3) {
        echo "Wednesday";
    } elseif ($dayNumber == 4) {
        echo "Thursday";
    } elseif ($dayNumber == 5) {
        echo "Friday";
    } elseif ($dayNumber == 6) {
        echo "Saturday";
    }
} else {
    echo "Not a valid day";
}
echo "\n";