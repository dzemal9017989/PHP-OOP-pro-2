<?php

require_once 'Dice.php';


class Game
{
    private $dice;
    private $throwCount;

    private $scoreBoard;

    public function __construct()
    {
        $this->dice = new Dice();
        $this->throwCount = 0;
        $this->scoreBoard = [];
    }

    public function play()
    {
        if (count($this->scoreBoard) == 3){
            return $this->reset();
        }
        $this->dice->throwDice();
        $this->scoreBoard[] = $this->dice->getFaceValue();
        foreach($this->scoreBoard as $key => $score){
            echo "Worp " . $key+1 . ": " . $score . "<br/>";
        }

        
    }

    public function reset()
    {
        $this->scoreBoard = [];
    }
}
