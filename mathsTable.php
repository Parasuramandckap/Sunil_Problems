<?php


$GiveNumber =  readline("Enter the table of the Number : ");
$limit = readline("Enter the limit: ");


if(is_numeric($GiveNumber) && is_numeric($limit) ){
    for($i=1;$i<=$limit;$i++){
        $result = $GiveNumber *$i;
        echo $i."*".$GiveNumber."=".$result;
        echo "\n";
    }
}else{
    echo "please enter the  maths table number";
}