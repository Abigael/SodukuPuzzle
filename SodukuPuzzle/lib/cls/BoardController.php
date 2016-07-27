<?php


class BoardController {
    private $board;
    private $page = 'game.php';
    private $reset = false;
    private $name;

    public function __construct(Board $board, $request) {
        $this->board = $board;
        if(isset($request['submit']) && !isset($request['cheat'])) {
            $this->reset = true;
            $this->name = $request['name'];
            $this->page = 'game.php?name='. $this->name;
        }
        else if(isset($request['submit']) && isset($request['cheat'])) {
            cheat();
        }


    }

    public function isReset() {
        return $this->reset;
    }

    public function getPage() {
        return $this->page;
    }
}