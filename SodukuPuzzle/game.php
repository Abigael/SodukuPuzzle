<?php
require 'lib/format.inc.php';
require 'lib/game.inc.php';
$view = new BoardView($board);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Super Sudoku</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

<?php echo present_header();?>



<div class="section">
    <h3>Welcome to Super Sudoku Game Play Page!</h3>
    <p>Here is your game: <?php echo $board->getName() . ' -- This is puzzle number: ' . $board->getPuzzleNum() ?></p>
    <p>Note: Upon entering an incorrect value, the text will be red.</p>

    <?php

    echo $view->presentBoard();
    ?>


    <form class="indexForm" action="solution.php">
        <div><input type="submit" name="submit" value="Give Up"></div>
        <input type="hidden" name="puzzleNum" value=<?php echo $board->getPuzzleNum()?>>
    </form>
</div>
</body>
</html>