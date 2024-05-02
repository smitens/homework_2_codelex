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

echo "Exercise 5\n";
echo"\n";
$phoneKeyPadMapping = [
    'ABC' => 2,
    'DEF' => 3,
    'GHI' => 4,
    'JKL' => 5,
    'MNO' => 6,
    'PQRS' => 7,
    'TUV' => 8,
    'WXYZ' => 9
];
$anyString = strtoupper( readline("Enter a string: "));
$output ="";
foreach (str_split($anyString) as $character) {
    $digit = '';
    if ($character >= 'A' && $character <= 'C') {
        $digit = 2;
    } elseif ($character >= 'D' && $character <= 'F') {
        $digit = 3;
    } elseif ($character >= 'G' && $character <= 'I') {
        $digit = 4;
    } elseif ($character >= 'J' && $character <= 'L') {
        $digit = 5;
    } elseif ($character >= 'M' && $character <= 'O') {
        $digit = 6;
    } elseif ($character >= 'P' && $character <= 'S') {
        $digit = 7;
    } elseif ($character >= 'T' && $character <= 'V') {
        $digit = 8;
    } elseif ($character >= 'W' && $character <= 'Z') {
        $digit = 9;
    }

    $output .= $digit;
}
echo $output . "\n";

$result ="";
for ($i = 0; $i < strlen($anyString); $i++) {
    $char = $anyString[$i];
    switch ($char) {
        case 'A':
        case 'B':
        case 'C':
            $result .= 2;
            break;
        case 'D':
        case 'E':
        case 'F':
            $result .= 3;
            break;
        case 'G':
        case 'H':
        case 'I':
            $result .= 4;
            break;
        case 'J':
        case 'K':
        case 'L':
            $result .= 5;
            break;
        case 'M':
        case 'N':
        case 'O':
            $result .= 6;
            break;
        case 'P':
        case 'Q':
        case 'R':
        case 'S':
            $result .= 7;
            break;
        case 'T':
        case 'U':
        case 'V':
            $result .= 8;
            break;
        case 'W':
        case 'X':
        case 'Y':
        case 'Z':
            $result .= 9;
            break;
        default:
            break;
    }
}
echo $result . "\n";