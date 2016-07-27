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

<?php echo present_header(); ?>

<div class="section">
    <h3>Welcome to Super Sudoku Winner Page!</h3>
    <p>Congratulations on successfully completing the Super Sudoku puzzle! </p>
    <p>It took you <?php echo $view->presentClueCount() ?> hints. </p>
    <p><a href="index.php">Play a New Game!</a></p>
</div>
</body>
</html>