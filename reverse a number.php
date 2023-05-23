<?php


//Write a program in PHP to reverse a number?

$name =readline("Enter the Number:");


if(is_numeric($name)){
$foolNumber = floor($name);
//split the given the number like this [0,1] 
$split_Number = str_split($foolNumber);

$output = [];
//then loop split number and check the i value inside the split number array then i;m store the output array
for ($i=count($split_Number)-1; $i >=0 ; $i--) { 
    $output[] = $split_Number[$i];

}
//implode is type of separater 
echo implode(',', $output);
}
else{
    echo "Its not a Number";
}


