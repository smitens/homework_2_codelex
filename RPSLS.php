<?php
$guess = strtolower(readline("Choose Rock, Paper, Scissors, Lizard, Spock: \n"));
$elements = [
    "rock" => ["scissor", "lizard"],
    "paper" => ["rock", "spock"],
    "scissors" => ["paper", "lizard"],
    "lizard" => ["paper", "spock"],
    "spock" => ["scissor", "rock"],
];
$computerElement = array_rand($elements);
$playerElement = $elements[$guess];
echo "Computer choose: " .$computerElement . "\n";
if (in_array($computerElement, $playerElement)) {
    echo "You win!\n";
} else if (in_array($guess, $elements[$computerElement])) {
    echo "You lose!\n";
} else {
    echo "It's a tie!\n";
}