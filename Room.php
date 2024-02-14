<?php


class Room
{
    public $length;

    public $width;

    public $height;



    public function __construct($length, $width, $height){
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getHouseOne(){
        return "Kamer 1: lengte: ".$this->length. " breedte: " .$this->width. " hoogte: " .$this->height;
    }

    public function getVolume(){
        return $this->length * $this->width * $this->height;
    }

    public function getMoney(){
        return $this->length * $this->width * $this->height * 3;
    }

    
}

