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

echo "Exercise 2\n";
function multiply(int $numberOne, int $numberTwo): int
{
    return $numberOne * $numberTwo;
}

echo "The result of multiplication is: " . multiply((int)readline("Enter a number: "), (int)readline("Enter a second number: ")) . "\n";

echo "\n";

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

echo "Exercise 5\n";
$fruits = [
    [
        "name" => "plums",
        "weight" => 5
    ],
    [
        "name" => "banana",
        "weight" => 15
    ],
    [
        "name" => "apples",
        "weight" => 10.50
    ]
];
$shippingCosts = [
    "overTen" => 2,
    "underTen" => 1
];

foreach($fruits as $fruit) {
    if($fruit["weight"] > 10) {
        echo "Shipping costs of " . $fruit["weight"] . " kg ". $fruit["name"] . ": " . $shippingCosts["overTen"] ."EUR\n";
    } else {
        echo "Shipping costs of " . $fruit["weight"] . " kg ". $fruit["name"] . ": " . $shippingCosts["underTen"] ."EUR\n";
    }
}

echo "Exercise 6\n";
$elements = [1, 2, 3, 4.5, "Zane"];

function doubleInteger($element)
{
    if (is_int($element)) {
        return $element * 2;
    }
        return null;
}
for ($i = 0; $i < count($elements); $i++) {
    $result = doubleInteger($elements [$i]);
    if ($result !== null) {
        echo $result . "\n";
    }
}