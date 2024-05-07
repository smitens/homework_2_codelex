<?php

echo "Exercise 4\n";
echo "\n";
$min = 1;
$max = 100;
$array1 = [];
for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand($min, $max);
}
$array2 = [];
for ($i = 0; $i < count($array1); $i++) {
    $array2[$i] = $array1[$i];
}
$array1[count($array1) - 1] = -7;

for ($i = 0; $i < count($array1); $i++) {
    echo "Array 1: " . implode (" ",$array1) ."\n";
    break;
}

for ($i = 0; $i < count($array2); $i++) {
    echo "Array 2: " . implode (" ",$array2) . "\n";
    break;
}
