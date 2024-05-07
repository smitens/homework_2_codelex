<?php
echo "Exercise 2\n";
function multiply(int $numberOne, int $numberTwo): int
{
    return $numberOne * $numberTwo;
}

echo "The result of multiplication is: " . multiply((int)readline("Enter a number: "), (int)readline("Enter a second number: ")) . "\n";

echo "\n";
