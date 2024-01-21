<?php 

/*spl_autoload_register(function ($class){
    $classFile = __DIR__."/classes/".$class.".php";
    if (file_exists($classFile)){
        require $classFile;

    }});*/

spl_autoload_register(function ($class) {

    $arrClass = explode('\\', $class);

    $file = __DIR__ . '/' . strtolower($arrClass[1]) . '/' . $arrClass[2] . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
    