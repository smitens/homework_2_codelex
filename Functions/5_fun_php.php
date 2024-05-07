<?php
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
