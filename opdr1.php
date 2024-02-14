<?php

class House 
{
    public $description;

    public $completed = false;

    public $floorOne;

    public $roomsTwo;

    public $widthThree;

    public $heightFour;

    public $depthFive;

    public $volumeHello;

    public $priceSixth;

    public function __construct($description)
    {
        /* var_dump($description); */
        $this->description = $description;
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function getHouse(){
        return "Het huis heeft ".$this->floorOne. " verdiepingen, " .$this->roomsTwo. " kamers, " .$this->widthThree. " breed, " .$this->heightFour. " hoog, " .$this->depthFive. " diep en een volume van " .$this->volumeHello. " kubieke meter. Daarnaast kost het huis " .$this->priceSixth;
    }

    public function getHouseOne(){
        return "Het huis heeft ".$this->floorOne. " verdiepingen, " .$this->roomsTwo. " kamers, " .$this->widthThree. " breed, " .$this->heightFour. " hoog, " .$this->depthFive. " diep en een volume van " .$this->volumeHello. " kubieke meter. Daarnaast kost het huis " .$this->priceSixth;
    }
}

$house = new House('Huis 1',);
$house->floorOne =2;
$house->roomsTwo =4;
$house->widthThree =50.5;
$house->heightFour =80.6;
$house->depthFive =3.2;
$house->volumeHello =3;
$house->priceSixth =150000;
echo $house->getHouse();
echo "</br></br>";

$house2 = new House('Huis 2');
$house2->floorOne =4;
$house2->roomsTwo =8;
$house2->widthThree =65.5;
$house2->heightFour =95.6;
$house2->depthFive =2.2;
$house2->volumeHello =6;
$house2->priceSixth =200000;
echo $house2->getHouseOne();
echo "</br></br>";

$house3 = new House('Huis 3',);
$house3->floorOne =6;
$house3->roomsTwo =12;
$house3->widthThree =44.5;
$house3->heightFour =77.6;
$house3->depthFive =1.2;
$house3->volumeHello =900;
$house3->priceSixth =300000;
echo $house3->getHouse();
echo "</br></br>";


$house->complete();
$house2->complete();
$house3->complete();


var_dump($house);
echo '</br>';
var_dump($house2);
echo '</br>';
var_dump($house3);
echo '</br>';
// var_dump($house->completed);



