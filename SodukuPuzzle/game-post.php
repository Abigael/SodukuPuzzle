<?php


require 'lib/game.inc.php';
$controller = new BoardController($board, $_REQUEST);
if($controller->isReset()) {
    unset($_SESSION[BOARD_SESSION]);
}
header('Location: ' . $controller->getPage());

?>
