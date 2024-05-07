<?php
echo "Exercise 6\n";
$elements = [1, 2, 3, 4.5, "Zane"];

function doubleInteger($element)
{
    if (is_int($element)) {
        return $element * 2;
    }
    return null;
}
for ($i = 0; $i < count($elements); $i++) {
    $result = doubleInteger($elements [$i]);
    if ($result !== null) {
        echo $result . "\n";
    }
}
