<?php


class BoardView
{

    private $board;

    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    public function presentBoard()
    {

        $cells = $this->board->getCells();

        $h = "";
        $h .= "<table class=\"one-deep\">";
        for ($i = 0; $i < 9; $i++) {
            $h .= "<tr>";
            for ($j = 0; $j < 9; $j++) {
                $class = "";
                if (($i + 1) % 3 == 0) {
                    $class .= "floor";
                }
                if (($j + 1) % 3 == 0) {
                    $class .= " wall";
                }
                if ($this->board->cellIsWrong($i, $j)) {
                    $class .= " red-text";
                }
                else if($cells[$i][$j]->getEditable()) {
                    $class .= " green-text";
                } else {
                    $class .= " black-text";
                }

                $h .= "<td class=\"" . $class . "\">";

                if ($cells[$i][$j]->getEditable()) {
                    $h .= "<a href=\"choice.php?i=" . $i . "&amp;j=" . $j . "\">";
                }
                $h .= $this->presentCell($cells[$i][$j]);

                if (count($cells[$i][$j]->getClues()) == 0) {
                    $h .= "&nbsp;";
                }

                if ($cells[$i][$j]->getEditable()) {
                    $h.= "</a>"
                        . "</td>";
                }


            }
            $h .= "</tr>";
        }
        $h .= "</table>";
        return $h;
    }

    public function presentClueCount() {
        return $this->board->getClueCount();
    }

    private function presentCell($cell)
    {
        $html = " ";

        if (count($cell->getClues()) == 0) {
            if($cell->getAnswer() != 0) {
                $html .= $cell->getAnswer();
            }
        } else {
            $clues = $cell->getClues();
            for ($i = count($clues); $i < 9; $i++) {
                $clues[] = 0;
            }


            $count = 0;

            $html .= "<table class=\"two-deep\">";
            $html .= "<tr>";
            for($i=0;$i<3;$i++) {
                $html .= "<tr>";

                for($j=0;$j<3;$j++) {
                    if($clues[$count] != 0) {
                        $html .= "<td>" . $clues[$count] . "</td>";
                    }
                    else {
                        $html .= "<td> </td>";
                    }
                    $count++;
                }
                $html .= "</tr>";
            }
            $html .= "</table>";
        }
        return $html;
    }
}




/*
 *
 */
