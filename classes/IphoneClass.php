<?php

namespace Mahara\classes;
use Mahara\classes\Product;
use Mahara\Interfaces\Interfaces;

class IphoneClass extends Product implements Interfaces{
    function calculateTotalCost(){
        $y=$this->quantity*100;
        $x=($this->price*$this->quantity)+$y;
        echo "$x";
        
      }


}
