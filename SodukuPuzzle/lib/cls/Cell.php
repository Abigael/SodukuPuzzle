<?php


class Cell {

    private $clues;
    private $answer;
    private $editable;


    public function __construct() {
        $this->clues = array();
        $this->answer = 0;
        $this->editable = false;
    }

    public function addClue($num) {
        if(!in_array($num, $this->clues) && $this->isValidNum($num)) {
            $this->answer = 0;
            $this->clues[] = $num;
        }
    }

    public function setAnswer($num) {
        if($this->answer != $num && $this->isValidNum($num)) {
            $this->clues = array();
            $this->answer = $num;
        }
    }

    public function setEmpty() {
        if ($this->editable) {
            $this->answer = 0;
            $this->clues = array();
        }
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function getClues() {
        return $this->clues;
    }

    public function getEditable() {
        return $this->editable;
    }
    public function setEditable($flag) {
        $this->editable = $flag;
    }

    public function isValidNum($num) {
        $flag = false;

        if(is_numeric($num)) {
            if ($num >= 0 && $num <= 9) {
                $flag = true;
            }
        }
        return $flag;

    }



}