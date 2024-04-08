<?php

// Inclusief het bestand met de definitie van de Dice klasse
require_once 'Dice.php';

// Definitie van de Game klasse
class Game
{
    // Private attributen van de Game klasse
    private $dice; // Een instantie van de Dice klasse
    private $scoreBoard; // Een array om de scores bij te houden

    private $wakes = 0;

    private $bears = 0;


    // Constructor van de Game klasse
    public function __construct()
    {
        // Initialiseert een nieuwe instantie van de Dice klasse
        $this->dice = new Dice();
        // Initialiseert het scorebord als een lege array
        $this->scoreBoard = [];
    }

    // Methode om het spel te spelen
    public function play()
    {
        $this->reset();
        $aantalDb = 1;
        if(isset($_POST['aantalDb'])) {
            $aantalDb = $_POST['aantalDb'];
        }

        // Gooit de dobbelsteen en krijgt de waarde
        for ($x = 0; $x < $aantalDb; $x++) {
            $this->dice->throwDice();
            $this->scoreBoard[] = $this->dice->getFaceValue();
        }
        
        $this->showDices();
    }

    public function showDices()
    {
        // Laat de scores zien op het scorebord
        foreach($this->scoreBoard as $key => $score){
            echo "Dobbelsteen " . ($key + 1) . ": " . $score . "<br/>";
        }
    }

    // Methode om het scorebord te resetten
    public function reset()
    {
        // Zet het scorebord leeg
        $this->scoreBoard = [];
        $this->bears = 0;
        $this->wakes = 0;
    }

    public function guess()
    {
        $this->getResults();
        $raadWakken = 0;
        $raadIjsberen = 0;
        if (isset($_POST['raadWakken'])) {
            $raadWakken = $_POST['raadWakken'];
        }

        if (isset($_POST['raadIjsberen'])) {
            $raadIjsberen = $_POST['raadIjsberen'];
        }

        if ($this->wakes == $raadWakken && $this->bears == $raadIjsberen) {
            echo 'Correct geraden';
        }
        else {
            echo 'niet correct geraden</br>';
            echo 'Hint: Ijsberen bevinden zich alleen rondom de wakken';
        }
    }

    public function getResults() {
        $this->wakes = 0;
        $this->bears = 0;
         // Laat de scores zien op het scorebord
        foreach($this->scoreBoard as $faceValue){
            $this->wakes += $this->hasWake($faceValue);
            $this->bears += $this->getBears($faceValue);
        }
    }

    public function showResults()
    {
        $this->showDices();
        $this->getResults();
        echo 'Aantal wakken: ' . $this->wakes . ' Aantal ijsberen: ' . $this->bears;
    }

    private function getBears($faceValue)
    {
        return $faceValue - $this->hasWake($faceValue);
    } 

    private function hasWake($faceValue)
    {
        return $faceValue % 2;  
    }


}

