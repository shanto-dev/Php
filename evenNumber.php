
<?php


include_once 'app/evenFunction.php';

$x = 24;
if(isEvent($x)){  //argument 
    echo "{$x} is an even Number";
}
else{
    echo "{$x} is an odd Number";
}
