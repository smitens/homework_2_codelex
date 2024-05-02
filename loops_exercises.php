<?php
echo "Exercise 1\n";
echo "The first 10 natural numbers are: ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "\n";

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

echo "Exercise 3\n";
$firstWord = (string) readline("Enter the first word: ");
$secondWord = (string) readline("Enter the second word: ");
$dots = "";
for ($i = 0; $i <= 30; $i++) {
    $dots .= ".";
}
echo $firstWord . $dots . $secondWord;
echo "\n";

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

echo "Exercise 5\n";
class Piglet
{
    public $totalPoints;
    public $points;

    public function __construct()
    {
        echo "Welcome to Piglet game!\n";
        $this->totalPoints = 0;

    }

    public function playPiglets()
    {
        while (true) {
            $randomNumber = rand(1, 6);
            echo "You rolled a $randomNumber!\n";
            if ($randomNumber == 1) {
                echo "You got 0 points.\n";
                break;
            }
            $this->points = $randomNumber;
            $this->totalPoints += $this->points;
            $choice = readline("Roll again? (y/n): ");
            if (strtolower($choice) !== 'y') {
                echo "You got: " . $this->totalPoints . " points.\n";
                break;
            }
        }
    }
}
$piglet = new Piglet();
$piglet->playPiglets();

echo "Exercise 6\n";
class AsciiFigure
{
    public static function drawFigure($size)
    {
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < 4 * ($size - $i - 1); $j++) {
                echo "/";
            }
            for ($j = 0; $j < 8 * $i; $j++) {
                echo "*";
            }
            for ($j = 0; $j < 4 * ($size - $i - 1); $j++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}
$AsciiFigure = new AsciiFigure();
$AsciiFigure->drawFigure(5);
echo "\n";
class AsciiFigureTwo
{
    const SIZE = 7;

    public static function drawFigureTwo()
    {
        for ($i = 0; $i < self::SIZE; $i++) {
            for ($j = 0; $j < 4 * (self::SIZE - $i - 1); $j++) {
                echo "/";
            }
            for ($j = 0; $j < 8 * $i; $j++) {
                echo "*";
            }
            for ($j = 0; $j < 4 * (self::SIZE - $i - 1); $j++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}
$AsciiFigureTwo = new AsciiFigureTwo();
$AsciiFigureTwo->drawFigureTwo();

echo "Exercise 7\n";
class randomNumberGenerator{
    public function generateRandomNumber(): int {
        return rand(1, 6);
    }
}
class RollTwoDice {
    public $desiredSum;
    public $randomGenerator;

    public function __construct() {
        $this->desiredSum = (int) readline ("Enter your desired number of desired sum: ");
        $this->randomGenerator = new randomNumberGenerator();
    }

    public function playRollTwoDice() {
        while (true) {
            $randomNumberOne = $this->randomGenerator->generateRandomNumber();
            $randomNumberTwo = $this->randomGenerator->generateRandomNumber();
            $randomSum = $randomNumberOne + $randomNumberTwo;
            echo $randomNumberOne . " and " . $randomNumberTwo . " = " . $randomSum. "\n";
            if ($randomSum == $this->desiredSum) {
            break;
            }
        }
    }
}
$game = new RollTwoDice();
$game->playRollTwoDice();

echo "Exercise 8\n";
class NumberSquare {
    public $max;
    public $min;

    public function __construct()
    {
        $this->max= (int)readline("max = \n");
        $this->min = (int)readline("min = \n");
    }
    public function drawNumberSquare() {
        $sizeNumber = ($this->max - $this->min) + 1;
        for ($i = 0; $i < $sizeNumber; $i++) {
            for ($j = 0; $j < $sizeNumber; $j++) {
                $currentNumber = $this->min + $i + $j;
                if ($currentNumber > $this->max) {
                    $currentNumber -= $sizeNumber;
                }
                echo $currentNumber . " ";
            }
            echo "\n";
        }
    }
}
$interactiveDrawing = new NumberSquare();
$interactiveDrawing ->drawNumberSquare();