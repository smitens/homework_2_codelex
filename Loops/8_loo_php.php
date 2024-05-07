<?php

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
