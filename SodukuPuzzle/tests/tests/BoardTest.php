<?php
/** @file
 * @brief Unit tests for the class Board
 */
class BoardTest extends \PHPUnit_Framework_TestCase {
	public $puzzlenum = 1;

	public function test_construct() {
		$board = new Board("Bob");
		$this->assertInstanceOf('Board', $board);
		$this->assertEquals("Bob", $board->getName());

		$board->setPuzzleNum(1);

		$sol = $board->getBoardSelection()->getUserGrid();

		$this->assertTrue(in_array(5,$sol[0]));
		$this->assertTrue(in_array(1,$sol[0]));
		$this->assertTrue(in_array(9,$sol[0]));
		$this->assertFalse(in_array(6,$sol[0]));

		$this->assertTrue(in_array(2,$sol[1]));
		$this->assertTrue(in_array(3,$sol[1]));
		$this->assertTrue(in_array(6,$sol[1]));
		$this->assertTrue(in_array(5,$sol[1]));

		$this->assertTrue(in_array(9,$sol[2]));
		$this->assertTrue(in_array(1,$sol[2]));
		$this->assertTrue(in_array(7,$sol[2]));

		$this->assertTrue(in_array(8,$sol[3]));
		$this->assertTrue(in_array(4,$sol[3]));
		$this->assertTrue(in_array(9,$sol[3]));
		$this->assertTrue(in_array(1,$sol[3]));
		$this->assertFalse(in_array(6,$sol[3]));

		$this->assertTrue(in_array(6,$sol[4]));
		$this->assertTrue(in_array(7,$sol[4]));

		$this->assertTrue(in_array(1,$sol[5]));
		$this->assertTrue(in_array(5,$sol[5]));
		$this->assertTrue(in_array(9,$sol[5]));
		$this->assertTrue(in_array(8,$sol[5]));

		$this->assertTrue(in_array(6,$sol[6]));
		$this->assertTrue(in_array(5,$sol[6]));
		$this->assertTrue(in_array(1,$sol[6]));
		$this->assertFalse(in_array(2,$sol[6]));

		$this->assertTrue(in_array(4,$sol[7]));
		$this->assertTrue(in_array(5,$sol[7]));
		$this->assertTrue(in_array(2,$sol[7]));
		$this->assertTrue(in_array(1,$sol[7]));

		$this->assertTrue(in_array(3,$sol[8]));
		$this->assertTrue(in_array(7,$sol[8]));
		$this->assertTrue(in_array(8,$sol[8]));




		for($x=0;$x<10;$x++) {
			$sol = $board->getSolution();

			for($i=0;$i<9;$i++) {
				for($num=0;$num<9;$num++) {

					$this->assertTrue(in_array($num+1, $sol[$i]));
				}
			}
		}


	}

	public function test_PuzzleNum() {
		$board = new Board("Bob");
		$board->setPuzzleNum(0);
		$this->assertEquals(0, $board->getPuzzleNum());

		$board->setPuzzleNum(9);
		$this->assertEquals(9, $board->getPuzzleNum());

		$board->setPuzzleNum(4);
		$this->assertNotEquals(1, $board->getPuzzleNum());

	}

	public function test_GetCells() {
		$board = new Board("Bob");
		$board->setPuzzleNum(1);

		$cells = $board->getCells();

		$this->assertEquals(9, $cells[0][8]->getAnswer());
		$this->assertNotEquals(8, $cells[0][8]->getAnswer());

	}

	public function test_Solution() {
		$board = new Board("Bob");

		$board->setPuzzleNum(0);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(1);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(2);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(3);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(4);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(5);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(6);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(7);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(8);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());

		$board->setPuzzleNum(9);
		$this->assertFalse($board->isSolved());
		$board->setSolution();
		$this->assertTrue($board->isSolved());
	}
}


/// @endcond
?>
