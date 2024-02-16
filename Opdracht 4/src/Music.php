<?php

class Music extends Product
{
    private string $artist;
    private array $numbers = [];

    public function __construct($name, $price, $tax, $profit, $description)
    {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
    }

    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    public function addNumber($number)
    {
        $this->numbers[] = $number;
    }

    public function getInfo(): array
    {
        return [$this->artist, $this->numbers];
    }

    public function setCategory()
    {
        $this->category = 'Music';
    }
}