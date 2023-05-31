<?php

$numberOne =  readline("Enter the FirstNumber: ");
$numberTwo =  readline("Enter the SecondNumber: ");


if(is_numeric($numberOne) && is_numeric($numberTwo)){
    $numberOne = $numberOne + $numberTwo;
    $numberTwo = $numberOne - $numberTwo;
    $numberOne = $numberOne - $numberTwo;
    
    echo $numberOne." ".$numberTwo;
}
else{
    echo "please enter the value";
}