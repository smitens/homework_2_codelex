<?php

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

