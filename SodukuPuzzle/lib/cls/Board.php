<?php
include 'Cell.php';



class Board {

    private $cells;
    private $name;
    private $clueCount;
    private $boardSelection;

    public function __construct($name) {
        $this->name = $name;
        $this->cells = array(array());
        $this->clueCount = 0;

        $this->boardSelection = new BoardSelection();
        $this->setBoard($this->boardSelection->getUserGrid()); // Set the board to a puzzle (This should be random 0-9)


    }

    public function getCells() {
        return $this->cells;
    }

    public function setBoard($grid) {
        for($i=0;$i<9;$i++) {
            for($j=0;$j<9;$j++) {
                $cell = new Cell();
                $cell->setAnswer($grid[$i][$j]);
                if($grid[$i][$j] == 0) {
                    $cell->setEditable(true);
                }
                else {
                    $cell->setEditable(false);
                }
                $this->cells[$i][$j] = $cell;
            }
        }
    }

    public function setSolution() {
        $grid = $this->getSolution();
        for($i=0;$i<9;$i++) {
            for($j=0;$j<9;$j++) {
                $cell = new Cell();
                $cell->setAnswer($grid[$i][$j]);
                if($grid[$i][$j] == 0) {
                    $cell->setEditable(true);
                }
                else {
                    $cell->setEditable(false);
                }
                $this->cells[$i][$j] = $cell;
            }
        }

    }

    public function isSolved() {
        $flag = true;

        for($i=0;$i<9;$i++) {
            for($j=0;$j<9;$j++) {
                $sol = $this->boardSelection->getSolution();
                if ($this->cells[$i][$j]->getAnswer()
                    != $sol[$i][$j]) {
                    $flag = false;
                    break;
                }
            }
        }
        return $flag;
    }

    public function cellIsWrong($I, $J) {
        $flag = false;
        $sol = $this->boardSelection->getSolution();
        if($this->cells[$I][$J]->getAnswer() != $sol[$I][$J]) {
            $flag = true;
        }
        return $flag;
    }

    public function getName() {
        return $this->name;
    }

    public function getPuzzleNum() {
        return $this->boardSelection->getPuzzleNum();
    }

    public function setPuzzleNum($num) {
        $this->boardSelection->setPuzzleNum($num);
        $this->setBoard($this->boardSelection->getUserGrid());
    }

    public function getSolution() {
        return $this->boardSelection->getSolution();
    }

    public function increaseClueCount() {
        $this->clueCount++;
    }

    public function getClueCount() {
        return $this->clueCount;
    }

    public function getBoardSelection() {
        return $this->boardSelection;
    }

}