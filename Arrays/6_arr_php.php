<?php
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

