<?php
echo "Exercise 7\n";

$person = [
    "personName" => "Zane",
    "licence" => "B",
    "cash" => 4000
];
$guns = [
    [
        "gunName" => "Colt",
        "licence" => "A", "B",
        "price" => 1000
    ],
    [
        "gunName" => "Smith",
        "licence" => "B",
        "price" => 2000
    ],
    [
        "gunName" => "Magnum",
        "licence" => "C",
        "price" => 6000
    ]
];
foreach($guns as $gun) {
    if(array_intersect([$person["licence"]], [$gun["licence"]]) && $person["cash"] >= $gun["price"]) {
        echo $person["personName"]. " can buy the ". $gun["gunName"]. " for ". $gun["price"]."."."\n";
    } else {
        echo $person["personName"]. " can not buy ". $gun["gunName"]."."."\n";
    }
}