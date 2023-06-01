<?php

$yearInput = readLine("Please enter a Year: ");

function findLeapyear($yearInput){
    $result = "";
    if($yearInput % 4 == 0 && $yearInput % 100 != 0){
        $result .= "It's a Leap Year";
    }
    else if($yearInput % 400 == 0 ){
        $result .= "It's a Leap Year";
    }
    else{
        $result .= "It's not a Leap Year";
    }
    return $result;
}

echo findLeapyear($yearInput);
