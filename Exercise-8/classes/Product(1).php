<?php

namespace Maharah\Classes;

class Product
{
    protected $name;
    protected $price;
    protected $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function displayProductInfo()
    {
        return "Product: {$this->name} <br /> Price: {$this->price} LYD <br /> Quantity: {$this->quantity} <br />";
    }
}
