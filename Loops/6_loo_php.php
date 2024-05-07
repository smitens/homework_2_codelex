<?php
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

