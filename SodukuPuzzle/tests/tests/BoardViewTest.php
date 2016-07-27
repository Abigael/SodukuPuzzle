<?php
/** @file
 * @brief Unit tests for the class BoardView
 */
class BoardViewTest extends \PHPUnit_Framework_TestCase {
    public function test_construct() {
        $board = new Board("Bob");
        $view = new BoardView($board);

        $this->assertInstanceOf('BoardView', $view);

    }


    public function test_PresentBoard() {
        $board = new Board("Bob");
        $board->setPuzzleNum(1);
        $view = new BoardView($board);

        $boardHTML = $view->presentBoard();

        $this->assertContains('5', $boardHTML);
        $this->assertContains('1', $boardHTML);
        $this->assertContains('9', $boardHTML);
        $this->assertContains('2', $boardHTML);
        $this->assertContains('6', $boardHTML);
        $this->assertContains('3', $boardHTML);
        $this->assertContains('5', $boardHTML);
        $this->assertContains('9', $boardHTML);
        $this->assertContains('1', $boardHTML);
        $this->assertContains('7', $boardHTML);
        $this->assertContains('8', $boardHTML);
        $this->assertContains('4', $boardHTML);
        $this->assertContains('9', $boardHTML);
        $this->assertContains('1', $boardHTML);
        $this->assertContains('6', $boardHTML);
        $this->assertContains('7', $boardHTML);
        $this->assertContains('1', $boardHTML);
        $this->assertContains('5', $boardHTML);
        $this->assertContains('9', $boardHTML);
        $this->assertContains('8', $boardHTML);
        $this->assertContains('6', $boardHTML);
        $this->assertContains('5', $boardHTML);
        $this->assertContains('1', $boardHTML);
        $this->assertContains('4', $boardHTML);
        $this->assertContains('5', $boardHTML);
        $this->assertContains('2', $boardHTML);
        $this->assertContains('1', $boardHTML);
        $this->assertContains('3', $boardHTML);
        $this->assertContains('7', $boardHTML);
        $this->assertContains('8', $boardHTML);
        $this->assertNotContains('.two-deep', $boardHTML);

    }
}

/// @endcond
?>
