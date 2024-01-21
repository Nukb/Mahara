<?php
    
class ExceptionTest extends Exception{

}
function divideNumbers(float $dividend,float $divisor){
        if ($divisor== 0){
            throw new ExceptionTest("Cannot divide by Zero");
        }
        else{
        $x=$dividend/$divisor;
        echo"$x";
        }}


try{
    divideNumbers(3,0);
}
catch(ExceptionTest $e)
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}






