<?php
namespace Mahara\classes;
use Mahara\Interfaces\Interfaces;
use Mahara\classes\Product;


class SamsungProduct extends Product implements Interfaces{

function calculateTotalCost(){
    $y=$this->quantity*200;
    $x=$this->price*$this->quantity;
    echo "$x";
}

}

