<?php
for($i=0;$i<1;$i++){
   $first = (int)readline('Enter first Operator: ');
   $condition = true;
  if($first == 1){
      echo "neither prime number or composite";
  }
  else if($first>1){
      for($i=2;$i<$first;$i++){
          if($first % $i == 0){
            $condition = false;  
          }
      }
      
        if($condition){
      echo "is a prime number";
  }
  else{
       echo "composite number";;
  }
  }

  

}
?>