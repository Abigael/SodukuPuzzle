<?php
require 'lib/format.inc.php'
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
    <h3>Welcome to Super Sudoku!</h3>
    <p>"Sudoku originally called Number Place, is a logic-based,
        combinatorial number-placement puzzle. The objective is to fill a
        9×9 grid with digits so that each column, each row, and each
        of the nine 3×3 sub-grids that compose the grid (also called "boxes", "blocks", "regions", or "sub-squares")
        contains all of the digits from 1 to 9. The puzzle setter provides a
        partially completed grid, which for a well-posed puzzle has a unique solution."</p>
    <p><a href="http://en.wikipedia.org/wiki/Sudoku">Learn more about Sudoku Here!</a></p>

    <p>When you are ready to play, please enter your name and click on the Start Game button!</p>

    <form class="indexForm" action="game-post.php">
        <div><input type="text" name="name" placeholder="Name">
        <input type="checkbox" name="cheat">Cheat Mode</div>
        <div><input type="submit" name="submit" value="Start Game"></div>
    </form>
</div>
</body>
</html>