<?php
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

