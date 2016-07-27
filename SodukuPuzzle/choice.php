<?php
require 'lib/format.inc.php';

$i;
$j;

if(isset($_GET['i']) && isset($_GET['j'])) {
    $i=$_GET['i'];
    $j=$_GET['j'];
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

<?php echo present_header();?>

<div class="section">
    <h3>Welcome to Super Sudoku User Choices Page!</h3>
    <p>Here you can do three things: </p>

    <form id="indexForm" action="game.php">
        <div><input type="radio" name="userChoice" value="setEmpty">Set Cell to Empty (This will remove all numerical clues and answers from the cell.)</div>
        <div><input type="radio" name="userChoice" value="setValue">Set Cell to Value (This will set cell to given answer.) </div>
        <div><input type="radio" name="userChoice" value="setHint">Set Hint for Cell (This will add a numerical clue to the cell. There is a maximum of 9 clues per cell.) </div>
        <div><input type="number" name="value" min="1" max="9" placeholder="Value" class="textbox"></div>
        <div><input type="submit" name="submit" value="Update"></div>
        <input type="hidden" name="i" value=<?php echo $i?>>
        <input type="hidden" name="j" value=<?php echo $j?>>
    </form>

</div>
</body>
</html>