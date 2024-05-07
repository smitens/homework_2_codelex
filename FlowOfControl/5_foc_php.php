<?php

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
