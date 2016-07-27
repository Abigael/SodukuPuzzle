<?php
/** @file
 * @brief Unit tests for the class BoardController
 */
class BoardControllerTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {

		$board = new Board("Bob");
		$controller = new BoardController($board, array());

		$this->assertInstanceOf('BoardController', $controller);
		$this->assertFalse($controller->isReset());
		$this->assertEquals('game.php', $controller->getPage());
	}

	public function test_new() {

		$board = new Board("Bob");
		$controller = new BoardController($board, array('submit' => '', 'name' => 'Bob'));

		$this->assertInstanceOf('BoardController', $controller);
		$this->assertTrue($controller->isReset());
		$this->assertEquals('game.php?name=Bob', $controller->getPage());
	}
}

/// @endcond
?>
