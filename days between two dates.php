<?php
  $date_start = (string)readline('Enter first Operator(yyyy-mm-dd): ');;
  $date_end = (string)readline('Enter first Operator(yyyy-mm-dd): ');;
  

/* when we given the date time in strtotime method it will return  output
 as timestamp in seconds example like this 1614556800 */

    if($date_start == $date_end){
        echo "start date and end date is same";
    }
    else if($date_start < $date_end){
        $date_start = strtotime($date_start);
        $date_end = strtotime($date_end);
        $between_days = $date_end - $date_start;
  
        $numberOfdays = round($between_days/ (60*60*24));

        echo "no of days between two dates is $numberOfdays";
    }
    else{
        echo "end date smaller than start date";
    }

 


?>