<?php

$keyArray = [];
foreach($keys as $key){
    array_push($keyArray,$key);
}
$valueArray = [];
foreach($values as $value){
    array_push($valueArray,$value);
}

$output = array_combine($keyArray,$valueArray);

print_r($output);