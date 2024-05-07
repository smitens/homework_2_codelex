<?php
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

