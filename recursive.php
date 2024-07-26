<?php 

function printN($i){
    if($i >= 15){
        return;
    }

    echo $i."\n";
    $i++;
    printN($i);
}
printN(2);

echo "<hr>";

function printNumber($counter, $end, $stape = 1){
    if($counter > $end){
        return;
    }
    echo $counter."\n";
    $counter += $stape;
    printNumber($counter, $end, $stape);
}

printNumber(7,80, 5);


?>