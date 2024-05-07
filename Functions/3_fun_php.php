<?php
echo "Exercise 3\n";
$person = [
    "name" => "Zane",
    "surname" => "Smite",
    "age" => 40
];
function determineAge($person): string
{
    if ($person["age"] > 18) {
        return $person["name"] . " " . $person["surname"] . " is older than 18 years old!";
    }
    return $person["name"] . " " . $person["surname"] . " is younger than 18 years old!";
}

echo determineAge($person) . "\n";

echo "\n";
