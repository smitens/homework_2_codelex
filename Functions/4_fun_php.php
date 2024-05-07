<?php
echo "Exercise 4\n";
$persons = [
    [
        "name" => "Zane",
        "surname" => "Smite",
        "age" => 40
    ],
    [
        "name" => "Dace",
        "surname" => "Smite",
        "age" => 16
    ],
    [
        "name" => "Sandra",
        "surname" => "Smite",
        "age" => 17
    ]
];

function determineTheAge($persons): string
{
    if ($persons["age"] > 18) {
        return $persons["name"] . " " . $persons["surname"] . " is older than 18 years old!";
    }
    return $persons["name"] . " " . $persons["surname"] . " is younger than 18 years old!";
}

$i = 0;
while ($i < count($persons)) {
    echo determineTheAge($persons[$i]). "\n";
    $i++;
}

echo "\n";
