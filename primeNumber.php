<?php

function check_prime($num)
{
    if($num === 1){
        return false;
    }
    for($i=2;$i<$num;$i++){
       if($num % $i == 0){
           return false;
           break;
       }
    }
    return true;
}
if(check_prime(13)){
    echo "its prime number";
}
else{
    echo "it's a non-prime number";
}