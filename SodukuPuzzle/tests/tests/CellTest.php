<?php
/** @file
 * @brief Unit tests for the class Cell
 */
class CellTest extends \PHPUnit_Framework_TestCase
{
	public function test_construct() {
		//$this->assertEquals($expected, $actual);
		$cell = new Cell();
		$this->assertInstanceOf("Cell", $cell);
		$this->assertEquals(0, $cell->getAnswer());
		$this->assertEquals(false, $cell->getEditable());
	}

	public function test_AddClue() {
		$cell = new Cell();
		$cell->addClue(1);
		$cell->addClue(2);
		$cell->addClue(3);
		$cell->addClue(5);
		$cell->addClue(9);

		$this->assertTrue(in_array(1, $cell->getClues()));
		$this->assertTrue(in_array(2, $cell->getClues()));
		$this->assertTrue(in_array(3, $cell->getClues()));
		$this->assertTrue(in_array(5, $cell->getClues()));
		$this->assertTrue(in_array(9, $cell->getClues()));


		$this->assertFalse(in_array(4, $cell->getClues()));
		$this->assertFalse(in_array(6, $cell->getClues()));
		$this->assertFalse(in_array(7, $cell->getClues()));
		$this->assertFalse(in_array(8, $cell->getClues()));
		$this->assertFalse(in_array(0, $cell->getClues()));

	}

	public function test_IsValidNum() {
		$cell = new Cell();

		$this->assertTrue($cell->isValidNum(1));
		$this->assertTrue($cell->isValidNum(2));
		$this->assertTrue($cell->isValidNum(3));
		$this->assertTrue($cell->isValidNum(4));
		$this->assertTrue($cell->isValidNum(5));
		$this->assertTrue($cell->isValidNum(6));
		$this->assertTrue($cell->isValidNum(7));
		$this->assertTrue($cell->isValidNum(8));
		$this->assertTrue($cell->isValidNum(9));

		$this->assertFalse($cell->isValidNum(-1));
		$this->assertFalse($cell->isValidNum(10));
	}
}

/// @endcond
?>
