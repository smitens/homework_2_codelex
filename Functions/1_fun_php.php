<?php
echo "Exercise 1\n";

$text = (string)readLine("Enter any word:\n");
function newText(string $text): string
{
    return $text . " codelex";
}

echo newText($text);
echo "\n";

echo "\n";
