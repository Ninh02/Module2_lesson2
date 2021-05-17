<?php
function concatArray($arr1,$arr2){
    for($i=0;$i<count($arr2);$i++){
        array_push($arr1,$arr2[$i]);
    }
   return $arr1;
}
$array1=[1,2,3,4,5];
$array2=[4,5,6,7,8,9];
echo '<pre>';
print_r(concatArray($array1,$array2));
