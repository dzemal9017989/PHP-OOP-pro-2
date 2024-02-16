<?php

class Game extends Product{


    private string $genre;


    private array $requirements = [];


    public function __construct(string $name, float $price, float $tax, float $profit, string $description)
    {
        parent::__construct($name, $price, $tax, $profit, $description);

        $this->setCategory();
    }

   

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    

    public function addRequirements(string $requirement): void
    {
        $this->requirements[] = $requirement;
    }

    public function getInfo(): array 
    {
        return [
            'genre' => $this->genre,
            'requirements' => $this->requirements
        ];
    }

    public function setCategory(): void
    {
        $this->category = 'Game';
    }

}