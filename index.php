<?php

require_once __DIR__ . '/autoloader.php';

use Mahara\classes\Product;
use Mahara\classes\IphoneClass;
#use Mahara\Classes\SamsungProduct;


/*include __DIR__.'/Interfaces/Interfaces.php';
include __DIR__.'/traits/Logger.php';
include __DIR__.'/classes/Product.php';
include __DIR__.'/classes/IphoneClass.php';
include __DIR__.'/classes/SamsungProduct.php';*/


$input_Q=$_POST["quantity"] ?? 0;
$Pro_Type=$_POST["productType"] ?? '';

if ($input_Q > 0){

    if ($Pro_Type == 'Samsung'){
    $test=new Product($Pro_Type,2000,$input_Q);
    $test->displayProductInfo();
    $test->calculateTotalCost();
    }else{
        $iphone=new IphoneClass($Pro_Type,2000,$input_Q);
        $iphone->displayProductInfo();
        $iphone->calculateTotalCost();
    }

    
}

