<?php
echo "Exercise 4\n";
class FizzBuzz
{
    public $number;

    public function __construct()
    {
        $this->number = readline("Enter the number: ");
    }

    public function printNumbers()
    {
        for ($i = 1; $i <= $this->number; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 == 0) {
                echo "Fizz ";
            } elseif ($i % 5 == 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }

            if ($i % 20 == 0) {
                echo "\n";
            }
        }
    }
}
$fizzBuzz = new FizzBuzz();
$fizzBuzz->printNumbers();
echo "\n";

