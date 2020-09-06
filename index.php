<?php
$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];
$array3 = [];
for ($i = 0; $i < count($array1); $i++){
    array_push($array3, $array1[$i]);
}
for ($j = 0; $j < count($array1); $j++){
    array_push($array3, $array2[$j]);
}
print_r($array3);