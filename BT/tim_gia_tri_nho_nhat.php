<?php
function findMin($arr){
    $min=$arr[0];
    for($i=0;$i<count($arr);$i++){
        if($min>$arr[$i]){
            $min=$arr[$i];
        }
    }
    return $min;
}
$array=[8,2,3,9,12,6];
echo "Gia tri nho nhat trong mang la: " .findMin($array);