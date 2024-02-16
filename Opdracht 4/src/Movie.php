<?php


class Movie extends Product
{
    private string $quality;

 

    public function __construct($name, $price, $tax, $profit, $description)
    {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
    }


    public function setQuality($quality)
    {
        $this->quality = $quality;
    }

    

    public function getInfo(): array
    {
        return [$this->quality];
    }

    public function setCategory()
    {
        $this->category = 'Movie';
    }
}