<?php
echo "Exercise 1\n";
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: " . json_encode($numbers) . "\n";

sort($numbers);
echo "Sorted numeric array: ";
print_r($numbers);

echo "\n";

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: " . json_encode($words) . "\n";

sort($words);
echo "Sorted string array: ";
print_r($words);

echo "\n";

echo "Exercise 2\n";
echo "\n";
$numbers = [20, 30, 25, 35, -16, 60, -100];
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
$average = $sum / count($numbers);
echo "Average value is $average\n";

echo "Exercise 3\n";
echo "\n";
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
$valueFound = false;
while (!$valueFound) {
    echo "Enter the value to search for: ";
    $value = readline();

    foreach ($numbers as $number) {
    if ($value == $number) {
        $valueFound = true;
        echo "Array contains your entered value $value\n";
        break 2;
    }
}
    echo "Value not found! Do you want to keep trying! (y/n):";
    $tryAgain = readline();
    if (strtolower($tryAgain) !== "y") {
        echo "Exit!\n";
        break;
    }
}

echo "Exercise 4\n";
echo "\n";
$min = 1;
$max = 100;
$array1 = [];
for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand($min, $max);
}
$array2 = [];
for ($i = 0; $i < count($array1); $i++) {
    $array2[$i] = $array1[$i];
}
$array1[count($array1) - 1] = -7;

for ($i = 0; $i < count($array1); $i++) {
    echo "Array 1: " . implode (" ",$array1) ."\n";
    break;
}

for ($i = 0; $i < count($array2); $i++) {
    echo "Array 2: " . implode (" ",$array2) . "\n";
    break;
}

echo "Exercise 5\n";
echo "\n";
function initialize_board($rows, $cols) {
    $board = array();
    for ($i = 0; $i < $rows; $i++) {
        $row = array();
        for ($j = 0; $j < $cols; $j++) {
            $row[] = ' '; // Empty cell
        }
        $board[] = $row;
    }
    return $board;
}

function display_board($board) {
    foreach ($board as $row) {
        echo implode(' | ', $row) . "\n";
        echo str_repeat('---+', count($row)) . "\n";
    }
}

$rows = 3;
$cols = 3;

$board = initialize_board($rows, $cols);

function get_player_input($player) {
    echo "Player $player, enter the row and column where you want to place your mark (exs like here '0 2'): ";
    $input = readline();

    $pattern = '/^[0-2\s\[0-2]/';
    if (!preg_match($pattern, $input)) {
        echo "Invalid input format. Please enter row and column numbers separated by a space.\n";
        return get_player_input($player);
    }

    list($row, $col) = explode(' ', $input);
    $row = intval($row);
    $col = intval($col);

    if ($row < 0 || $row > 2 || $col < 0 || $col > 2) {
        echo "Invalid row or column number. Please enter numbers between 0 and 2.\n";
        return get_player_input($player);
    }

    return array('row' => $row, 'col' => $col, 'player' => $player);
}
function game_over($board) {
    foreach ($board as $row) {
        foreach ($row as $cell) {
            if ($cell === ' ') {
                return false;
            }
        }
    }
    return true;
}

function update_board(&$board, $row, $col, $player)
{
    $board[$row][$col] = $player;
}
function check_win($board, $player) {
    for ($row = 0; $row < 3; $row++) {
        if ($board[$row][0] === $player && $board[$row][1] === $player && $board[$row][2] === $player) {
            return true;
        }
    }
    for ($col = 0; $col < 3; $col++) {
        if ($board[0][$col] === $player && $board[1][$col] === $player && $board[2][$col] === $player) {
            return true;
        }
    }
    if ($board[0][0] === $player && $board[1][1] === $player && $board[2][2] === $player) {
        return true;
    }
    if ($board[0][2] === $player && $board[1][1] === $player && $board[2][0] === $player) {
        return true;
    }
    return false;
}
$currentPlayer = 'X';

while (!game_over($board)) {
    display_board($board);
    $input = get_player_input($currentPlayer);
    update_board($board, $input['row'], $input['col'], $currentPlayer);

    if (check_win($board, $currentPlayer)) {
        display_board($board);
        echo "Player $currentPlayer wins!\n";
        break;
    }

    $currentPlayer = ($currentPlayer === 'X') ? 'O' : 'X';

}
    if (game_over($board)) {
        display_board($board);
        echo "It's a tie!\n";
    }
echo "Exercise 6\n";
echo "\n";
$wordList = ["name", "game", "aim"];

while (true) {
    $randomWord = selectRandomWord($wordList);
    $game_board = [
        'word' => $randomWord,
        'missedLetters' => [],
        'guessed_letters' => [],
    ];
    while (true) {
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
        display_word($game_board['word'], $game_board['guessed_letters']);
        display_misses($game_board['missedLetters']);
        $guess = get_guess();
        update_game_board($game_board, $guess);
        if (game_ended($game_board)) {
            break;
        }
    }
    if (!play_quit()) {
        break;
    }
}

function selectRandomWord($wordList) {
    $randomIndex = array_rand($wordList, 1);
    return $wordList[$randomIndex];
}

function display_word($randomWord, $guessedLetters) {
    $display = '';
    foreach (str_split($randomWord) as $letter) {
        if (in_array($letter, $guessedLetters)) {
            $display .= $letter;
        } else {
            $display .= '_';
        }
    }
    echo "WORD: $display\n";
}

function display_misses($misses) {
    echo "MISSES: ";
    echo implode(', ', $misses);
    echo "\n";
}

function get_guess() {
    echo "GUESS: ";
    return readline();
}

function update_game_board(&$game_board, $guess) {
    if (strpos($game_board['word'], $guess) !== false) {
        $game_board['guessed_letters'][] = $guess;
    } else {
        $game_board['missedLetters'][]= $guess;
    }
}

function game_ended ($game_board): bool {
    if (count($game_board['missedLetters']) >= 4) {
        echo "You run out of tries!\n";
        return true;
    }
    $word = $game_board['word'];
    $guessed_letters = $game_board['guessed_letters'];
    foreach (str_split($word) as $letter) {
        if (!in_array($letter, $guessed_letters)) {
            return false;
        }
    }
        echo "You got it!\n";
        return true;
    }
function play_quit(): bool {
    $choice = readline("Play again or quit?: \n");
    if ($choice == "again") {
        return true;
    }
    return false;
}


