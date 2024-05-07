<?php
echo "Exercise 3\n";
$firstWord = (string) readline("Enter the first word: ");
$secondWord = (string) readline("Enter the second word: ");
$dots = "";
for ($i = 0; $i <= 30; $i++) {
    $dots .= ".";
}
echo $firstWord . $dots . $secondWord;
echo "\n";