<?php
namespace Mahara\classes;
use Mahara\Interfaces\Interfaces;

 class Product implements Interfaces{
 public string $name;
 public float $price;
 public int $quantity;
 function __construct($name,$price,$quantity) {
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
  }

  function displayProductInfo(){
    echo "$this->name".'<br>';
    echo "$this->price\n".'<br>';
    echo "$this->quantity\n".'<br>';
  }
   function calculateTotalCost(){
    $x=$this->price*$this->quantity;
    echo "$x";}
  


}

?>