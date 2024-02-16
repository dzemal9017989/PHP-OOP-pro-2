<?php

class ProductList
{
    private string $name;
    private array $items = [];

    public function addProduct($product)
    {
         $this->items[] = $product;
    }

    public function getProducts(): array
    {
        return $this->items;
    }
}