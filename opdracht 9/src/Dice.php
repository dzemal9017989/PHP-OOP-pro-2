<?php

class Dice
{
    // Constante voor het aantal zijden van de dobbelsteen
    const NUMBER_OF_SIDES = 6;
    
    // Privévariabele om de waarde van het gezicht van de dobbelsteen bij te houden
    private $faceValue = 0;

    // Methode om de dobbelsteen te gooien en een willekeurige waarde toe te wijzen aan het gezicht
    public function throwDice()
    {
        $this->faceValue = rand(1, self::NUMBER_OF_SIDES); // Kies een willekeurig getal tussen 1 en het aantal zijden van de dobbelsteen
    }

    // Methode om de huidige waarde van het gezicht van de dobbelsteen op te vragen
    public function getFaceValue()
    {
        return $this->faceValue; // Geef de waarde van het gezicht van de dobbelsteen terug
    }
}
