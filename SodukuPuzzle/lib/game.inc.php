<?php
require __DIR__ . "/autoload.inc.php";

// Start the PHP session system
session_start();
define("BOARD_SESSION", 'board');

// If there is a Board session, use that. Otherwise, create one
if(!isset($_SESSION[BOARD_SESSION])) {
    if (isset($_GET['name'])) {
        $_SESSION[BOARD_SESSION] = new Board($_GET['name']);
    }
    else {
        $_SESSION[BOARD_SESSION] = new Board("No Name");
    }
}

function cheat() {
    $_SESSION[BOARD_SESSION] = new Board("CHEAT MODE");
    $_SESSION[BOARD_SESSION]->setPuzzleNum(1);
}

$board = $_SESSION[BOARD_SESSION];
if(isset($_GET['userChoice']) && isset($_GET['i']) && isset($_GET['j'])) {
    $userChoice = $_GET['userChoice'];
    $i = $_GET['i'];
    $j = $_GET['j'];




    if (isset($_GET['value'])) {
        $value = $_GET['value'];
    }

    if ($userChoice == "setValue") {
        $cells = $board->getCells();
        $cells[$i][$j]->setAnswer($value);

    } else if ($userChoice == "setEmpty") {
        $cells = $board->getCells();
        $cells[$i][$j]->setEmpty();
    } else if ($userChoice == "setHint") {
        $cells = $board->getCells();
        $cells[$i][$j]->addClue($value);
        $board->increaseClueCount();
    }

    if ($board->isSolved()) {
        header('Location: ' . 'win.php');
    }
}