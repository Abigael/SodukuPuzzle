<?php


class BoardSelection {
    private $userGrids;
    private $solutions;
    private $puzzleNum;

    public function __construct() {
        $this->solutions = array();
        $this->userGrids = array();

        $this->createPuzzles(); // Hard Code Puzzle into The Board
        $this->puzzleNum = rand(0,9);
    }

    public function getUserGrid() {
        return $this->userGrids[$this->puzzleNum];
    }

    public function getPuzzleNum() {
        return $this->puzzleNum;
    }

    public function setPuzzleNum($num) {
        $this->puzzleNum = $num;
    }

    public function getSolution() {
        return $this->solutions[$this->puzzleNum];
    }

    public function createPuzzles() {
        // This is 1 puzzlie
        $g0 = array(9,0,6,0,0,0,0,0,0);
        $g1 = array(7,0,0,0,0,6,4,0,8);
        $g2 = array(0,0,4,1,0,0,0,3,0);
        $g3 = array(1,2,0,5,0,9,6,0,3);
        $g4 = array(6,8,0,0,1,0,0,7,5);
        $g5 = array(5,0,9,6,0,3,0,8,1);
        $g6 = array(0,6,0,0,0,5,8,0,0);
        $g7 = array(2,0,8,7,0,0,0,0,4);
        $g8 = array(0,0,0,0,0,0,1,0,9);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 1 puzzlie
        $s0 = array(9,3,6,8,4,7,5,1,2);
        $s1 = array(7,1,2,3,5,6,4,9,8);
        $s2 = array(8,5,4,1,9,2,7,3,6);
        $s3 = array(1,2,7,5,8,9,6,4,3);
        $s4 = array(6,8,3,2,1,4,9,7,5);
        $s5 = array(5,4,9,6,7,3,2,8,1);
        $s6 = array(4,6,1,9,3,5,8,2,7);
        $s7 = array(2,9,8,7,6,1,3,5,4);
        $s8 = array(3,7,5,4,2,8,1,6,9);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;

        // This is 2 puzzlie (CHEAT MODE PUZZLE)
        $g0 = array(0,0,0,0,5,0,0,1,9);
        $g1 = array(0,0,0,0,2,0,6,3,5);
        $g2 = array(0,0,9,1,0,0,7,0,0);
        $g3 = array(0,0,8,0,4,0,9,0,1);
        $g4 = array(6,0,0,0,0,0,0,0,7);
        $g5 = array(1,0,5,0,9,0,8,0,0);
        $g6 = array(0,0,6,0,0,5,1,0,0);
        $g7 = array(4,5,2,0,1,0,0,0,0);
        $g8 = array(3,7,0,0,8,0,0,0,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 2 puzzlie (CHEAT MODE PUZZLE)
        $s0 = array(2,6,3,7,5,8,4,1,9);
        $s1 = array(8,1,7,4,2,9,6,3,5);
        $s2 = array(5,4,9,1,6,3,7,8,2);
        $s3 = array(7,3,8,5,4,2,9,6,1);
        $s4 = array(6,9,4,8,3,1,2,5,7);
        $s5 = array(1,2,5,6,9,7,8,4,3);
        $s6 = array(9,8,6,3,7,5,1,2,4);
        $s7 = array(4,5,2,9,1,6,3,7,8);
        $s8 = array(3,7,1,2,8,4,5,9,6);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;

        // This is 3 puzzlie
        $g0 = array(0,0,0,0,0,7,0,3,0);
        $g1 = array(0,2,0,0,4,6,1,0,7);
        $g2 = array(3,4,0,0,5,0,0,0,2);
        $g3 = array(0,5,3,0,0,0,0,0,8);
        $g4 = array(4,0,0,0,0,0,0,0,5);
        $g5 = array(9,0,0,0,0,0,4,6,0);
        $g6 = array(5,0,0,0,2,0,0,4,9);
        $g7 = array(7,0,8,6,9,0,0,2,0);
        $g8 = array(0,9,0,8,0,0,0,0,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 3 puzzlie
        $s0 = array(6,1,5,2,8,7,9,3,4);
        $s1 = array(8,2,9,3,4,6,1,5,7);
        $s2 = array(3,4,7,1,5,9,6,8,2);
        $s3 = array(1,5,3,4,6,2,7,9,8);
        $s4 = array(4,7,6,9,3,8,2,1,5);
        $s5 = array(9,8,2,5,7,1,4,6,3);
        $s6 = array(5,6,1,7,2,3,8,4,9);
        $s7 = array(7,3,8,6,9,4,5,2,1);
        $s8 = array(2,9,4,8,1,5,3,7,6);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;


        // This is 4 puzzlie
        $g0 = array(0,8,1,0,0,0,0,5,6);
        $g1 = array(0,7,0,0,5,0,0,0,0);
        $g2 = array(2,0,0,6,0,3,1,0,0);
        $g3 = array(4,0,0,0,2,0,0,0,0);
        $g4 = array(1,3,0,7,0,5,0,6,2);
        $g5 = array(0,0,0,0,4,0,0,0,9);
        $g6 = array(0,0,4,8,0,2,0,0,5);
        $g7 = array(0,0,0,0,1,0,0,2,0);
        $g8 = array(5,1,0,0,0,0,6,8,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 4 puzzlie
        $s0 = array(3,8,1,2,9,4,7,5,6);
        $s1 = array(9,7,6,1,5,8,2,4,3);
        $s2 = array(2,4,5,6,7,3,1,9,8);
        $s3 = array(4,5,7,9,2,6,8,3,1);
        $s4 = array(1,3,9,7,8,5,4,6,2);
        $s5 = array(6,2,8,3,4,1,5,7,9);
        $s6 = array(7,9,4,8,6,2,3,1,5);
        $s7 = array(8,6,3,5,1,7,9,2,4);
        $s8 = array(5,1,2,4,3,9,6,8,7);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;



        // This is 5 puzzlie
        $g0 = array(0,4,0,0,6,0,7,0,2);
        $g1 = array(0,0,0,0,7,5,0,9,0);
        $g2 = array(0,0,0,2,0,0,6,0,0);
        $g3 = array(7,5,0,0,0,8,3,0,0);
        $g4 = array(8,0,6,0,0,0,9,0,1);
        $g5 = array(0,0,9,3,0,0,0,8,7);
        $g6 = array(0,0,2,0,0,1,0,0,0);
        $g7 = array(0,1,0,5,8,0,0,0,0);
        $g8 = array(3,0,7,0,4,0,0,1,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 5 puzzlie
        $s0 = array(9,4,8,1,6,3,7,5,2);
        $s1 = array(2,6,3,8,7,5,1,9,4);
        $s2 = array(1,7,5,2,9,4,6,3,8);
        $s3 = array(7,5,1,9,2,8,3,4,6);
        $s4 = array(8,3,6,4,5,7,9,2,1);
        $s5 = array(4,2,9,3,1,6,5,8,7);
        $s6 = array(5,8,2,7,3,1,4,6,9);
        $s7 = array(6,1,4,5,8,9,2,7,3);
        $s8 = array(3,9,7,6,4,2,8,1,5);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;


        // This is 6 puzzlie
        $g0 = array(4,2,0,0,3,0,0,0,1);
        $g1 = array(6,0,0,1,0,0,0,4,0);
        $g2 = array(0,0,1,4,0,0,0,0,2);
        $g3 = array(5,0,8,0,0,0,4,7,0);
        $g4 = array(0,6,0,0,0,0,0,1,0);
        $g5 = array(0,3,4,0,0,0,9,0,8);
        $g6 = array(3,0,0,0,0,6,8,0,0);
        $g7 = array(0,9,0,0,0,7,0,0,3);
        $g8 = array(2,0,0,0,5,0,0,6,4);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 6 puzzlie
        $s0 = array(4,2,9,6,3,5,7,8,1);
        $s1 = array(6,7,3,1,2,8,5,4,9);
        $s2 = array(8,5,1,4,7,9,6,3,2);
        $s3 = array(5,1,8,3,9,2,4,7,6);
        $s4 = array(9,6,2,7,8,4,3,1,5);
        $s5 = array(7,3,4,5,6,1,9,2,8);
        $s6 = array(3,4,5,2,1,6,8,9,7);
        $s7 = array(1,9,6,8,4,7,2,5,3);
        $s8 = array(2,8,7,9,5,3,1,6,4);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;



        // This is 7 puzzlie
        $g0 = array(0,0,0,0,1,0,0,0,0);
        $g1 = array(2,7,0,8,0,9,0,6,0);
        $g2 = array(0,0,4,0,3,0,8,9,0);
        $g3 = array(7,0,9,0,0,2,0,3,0);
        $g4 = array(6,0,0,0,0,0,0,0,8);
        $g5 = array(0,2,0,1,0,0,7,0,5);
        $g6 = array(0,5,7,0,6,0,2,0,0);
        $g7 = array(0,8,0,9,0,4,0,1,7);
        $g8 = array(0,0,0,0,2,0,0,0,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 7 puzzlie
        $s0 = array(9,3,8,6,1,5,4,7,2);
        $s1 = array(2,7,1,8,4,9,5,6,3);
        $s2 = array(5,6,4,2,3,7,8,9,1);
        $s3 = array(7,4,9,5,8,2,1,3,6);
        $s4 = array(6,1,5,4,7,3,9,2,8);
        $s5 = array(8,2,3,1,9,6,7,4,5);
        $s6 = array(4,5,7,3,6,1,2,8,9);
        $s7 = array(3,8,2,9,5,4,6,1,7);
        $s8 = array(1,9,6,7,2,8,3,5,4);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;



        // This is 8 puzzlie
        $g0 = array(7,2,0,0,0,0,0,8,0);
        $g1 = array(4,0,9,0,6,5,1,3,0);
        $g2 = array(0,0,1,8,0,0,0,0,0);
        $g3 = array(0,5,0,0,4,0,0,0,0);
        $g4 = array(3,0,0,5,9,2,0,0,8);
        $g5 = array(0,0,0,0,3,0,0,9,0);
        $g6 = array(0,0,0,0,0,1,7,0,0);
        $g7 = array(0,9,8,3,5,0,6,0,1);
        $g8 = array(0,7,0,0,0,0,0,5,9);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 8 puzzlie
        $s0 = array(7,2,6,4,1,3,9,8,5);
        $s1 = array(4,8,9,2,6,5,1,3,7);
        $s2 = array(5,3,1,8,7,9,2,6,4);
        $s3 = array(9,5,2,1,4,8,3,7,6);
        $s4 = array(3,6,7,5,9,2,4,1,8);
        $s5 = array(8,1,4,7,3,6,5,9,2);
        $s6 = array(6,4,5,9,8,1,7,2,3);
        $s7 = array(2,9,8,3,5,7,6,4,1);
        $s8 = array(1,7,3,6,2,4,8,5,9);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;




        // This is 9 puzzlie
        $g0 = array(0,2,0,1,0,0,6,0,7);
        $g1 = array(1,0,0,0,4,0,9,0,2);
        $g2 = array(0,0,0,9,6,0,0,0,8);
        $g3 = array(0,0,8,0,0,5,7,0,0);
        $g4 = array(7,0,0,0,0,0,0,0,3);
        $g5 = array(0,0,3,6,0,0,8,0,0);
        $g6 = array(8,0,0,0,1,9,0,0,0);
        $g7 = array(4,0,5,0,2,0,0,0,1);
        $g8 = array(6,0,7,0,0,8,0,2,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 9 puzzlie
        $s0 = array(5,2,9,1,8,3,6,4,7);
        $s1 = array(1,8,6,5,4,7,9,3,2);
        $s2 = array(3,7,4,9,6,2,1,5,8);
        $s3 = array(9,6,8,2,3,5,7,1,4);
        $s4 = array(7,5,1,8,9,4,2,6,3);
        $s5 = array(2,4,3,6,7,1,8,9,5);
        $s6 = array(8,3,2,4,1,9,5,7,6);
        $s7 = array(4,9,5,7,2,6,3,8,1);
        $s8 = array(6,1,7,3,5,8,4,2,9);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;


        // This is 10 puzzlie
        $g0 = array(0,5,0,0,0,0,8,6,0);
        $g1 = array(0,0,0,1,8,0,0,0,3);
        $g2 = array(0,0,0,9,6,0,1,2,5);
        $g3 = array(1,0,0,0,0,0,5,7,0);
        $g4 = array(0,7,0,0,5,0,0,8,0);
        $g5 = array(0,8,3,0,0,0,0,0,4);
        $g6 = array(4,9,2,0,7,1,0,0,0);
        $g7 = array(7,0,0,0,3,6,0,0,0);
        $g8 = array(0,3,5,0,0,0,0,1,0);
        $tempGrid = array($g0,$g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8);
        $this->userGrids[] = $tempGrid;
        // This is 10 puzzlie
        $s0 = array(3,5,1,7,4,2,8,6,9);
        $s1 = array(2,6,9,1,8,5,7,4,3);
        $s2 = array(8,4,7,9,6,3,1,2,5);
        $s3 = array(1,2,4,3,9,8,5,7,6);
        $s4 = array(9,7,6,2,5,4,3,8,1);
        $s5 = array(5,8,3,6,1,7,2,9,4);
        $s6 = array(4,9,2,5,7,1,6,3,8);
        $s7 = array(7,1,8,4,3,6,9,5,2);
        $s8 = array(6,3,5,8,2,9,4,1,7);
        $tempSolution = array($s0,$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8);
        $this->solutions[] = $tempSolution;

    }
}