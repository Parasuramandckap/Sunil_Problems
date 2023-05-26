<?php
$GiveNumber =  readline("Enter the number: ");

function factorial($number){
    if(is_numeric($number)){
        $answer = 1;
        if($number == 0 || $number == 1){
            return $answer;
        }
        else{
            for($i=1;$i<=$number;$i++){
                $answer = $answer * $i;
            }
            echo "Factorial of ".$number.":".$answer;
        }
    }
    else{
        return "please enter the number";
    }
}

echo factorial($GiveNumber);