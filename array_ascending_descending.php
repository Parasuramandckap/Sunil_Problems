<?php

$Array = [1,20,2,30,-1,0,-5];

//ascending operation;
sort($Array);
$ascending = "";
for($i=0;$i<count($Array);$i++){
    $ascending= $ascending." ".$Array[$i];
}
echo "ascending order  [$ascending]";

//descending operation;
rsort($Array);
$descending = "";
for($j=0;$j<count($Array);$j++){
   $descending = $descending." ".$Array[$j];
}
echo "\n";
echo "descending order  [$descending]";