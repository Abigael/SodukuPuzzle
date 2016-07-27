<?php
require 'lib/format.inc.php';
require 'lib/cls/Board.php';
require 'lib/cls/BoardView.php';
require 'lib/cls/BoardSelection.php';

// GIVE UP
if(isset($_GET['puzzleNum'])) {

    $solutionBoard = new Board("solution");
    $solutionBoard->setPuzzleNum($_GET['puzzleNum']);
    $solutionBoard->setSolution();
    $view = new BoardView($solutionBoard);
}
else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Super Sudoku</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<?php echo present_header(); ?>

<div class="section">
    <h3>Welcome to Super Sudoku Solution Page!</h3>
    <p>Here is the solution to your game: </p>

    <?php  echo $view->presentBoard();?>



    <p><a href="index.php">Play a New Game!</a></p>
</div>
</body>
</html>