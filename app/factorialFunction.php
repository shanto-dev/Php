<?php 
/**
 *  Variable type hinting 
 */

 

function Factorial(int $n){
    $resutl = 1;
    for($i = $n; $i > 1; $i--){
        $resutl *= $i;
    }
    return $resutl;
}