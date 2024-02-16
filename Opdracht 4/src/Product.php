<?php

abstract class Product
{
    private string $name;
    private float $purchasePrice;
    private int $tax;
    private string $description;
    private float $profit;
    protected string $category;

    public function __construct($name, $price, $tax, $profit, $description)
    {
        $this->name = $name; 
        $this->purchasePrice = $price;
        $this->tax = $tax;
        $this->profit = $profit;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getSalesprice(): float
    {
        return round($this->purchasePrice + $this->profit + (($this->tax/100) * ($this->purchasePrice + $this->profit)), 2);
    }

    public function printInfo(): string
    {
        $print = '<ul>';
        foreach($this->getInfo() as $item)
        {
    
            if(is_array($item)){

                $print .= '<li><ul>'; 
                foreach($item as $subitem)
            {
                $print .= "<li>$subitem<ul>";
            }
            $print .= '</ul></li>';
        }else{
            $print .= "<li>$item</li>";
        }
        
    }
        $print .= '</ul>';
        return $print;
    }


    abstract public function getInfo();
    abstract public function setCategory();

}