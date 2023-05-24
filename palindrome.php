<?php

$GivenInput = readline("Enter Here: ");

$reveredString = "";
for($i=strlen($GivenInput)-1;$i>=0;$i--){
    $reveredString.=$GivenInput[$i];
}
if($reveredString == $GivenInput){
    echo $GivenInput." is a Palindrome .\n";
}
else{
     echo $GivenInput." is not a Palindrome .\n";
}