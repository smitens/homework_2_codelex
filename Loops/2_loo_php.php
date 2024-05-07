<?php
echo "Exercise 2\n";
echo "Input number of terms: ";
$n = (int) readline();
for ($i = 1; $i <= $n; $i++) {
    $result = 1;
    for ($j =1; $j <= $i; $j++) {
        $result *=$i;
    }
    echo $result . " ";
}
echo "\n";

