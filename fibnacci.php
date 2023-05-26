<?php

$Number = readline("Enter the Number:");



function fibnacci($Number){
    $a=0;
    $b=1;
    $result = $a+$b;
    echo "Fibonacci Series \n";
    echo $a." ".$b;
    for($i=2;$i<$Number;$i++){
        $result = $a + $b;
        $a = $b;
        $b = $result;
        echo " ".$result." ";
    }
}
fibnacci($Number);