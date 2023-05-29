<?php

$base = readline("enter the  base: ");
$height = readline("enter the height: ");


if(is_numeric($base) && is_numeric($height)){
    $rsult = 1/2 * $base * $height;

    echo $rsult."cm²";
}
else{
    echo "please the value in number";
}
