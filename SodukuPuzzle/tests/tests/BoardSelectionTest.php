<?php
/** @file
 * @brief Unit tests for the class Board
 */
class BoardSelectionTest extends \PHPUnit_Framework_TestCase
{
	public $puzzlenum = 1;

	public function test_construct() {
		$boardSelection = new BoardSelection();
		$this->assertInstanceOf('BoardSelection', $boardSelection);


	}

	public function test_UserGrid() {
		$boardSelection = new BoardSelection();
		$boardSelection->setPuzzleNum(1);

		$sol = $boardSelection->getUserGrid();

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

	}

	public function test_Solution() {
		$boardSelection = new BoardSelection();
		$boardSelection->setPuzzleNum(1);

		for($x=0;$x<10;$x++) {
			$sol = $boardSelection->getSolution();

			for($i=0;$i<9;$i++) {
				for($num=0;$num<9;$num++) {

					$this->assertTrue(in_array($num+1, $sol[$i]));
				}
			}
		}

	}

	public function test_PuzzleNum() {
		$boardSelection = new BoardSelection();

		$boardSelection->setPuzzleNum(1);
		$this->assertEquals(1, $boardSelection->getPuzzleNum());
		$this->assertNotEquals(2, $boardSelection->getPuzzleNum());


		$boardSelection->setPuzzleNum(9);
		$this->assertEquals(9, $boardSelection->getPuzzleNum());
		$this->assertNotEquals(5, $boardSelection->getPuzzleNum());
	}

	public function test_CreatePuzzles() {

	}

}


/// @endcond
?>
