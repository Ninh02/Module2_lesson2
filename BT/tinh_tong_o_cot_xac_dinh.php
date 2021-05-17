<?php
function sum($arr,$a){
    $sum=0;
       for($j=0;$j<count($arr[$a]);$j++){
           if($a==0){
               $sum+=$arr[0][$j];
           }elseif ($a==1){
               $sum+=$arr[1][$j];
           }
       }
    return $sum;
}
$array=[
    [1,2,3,4,5],
    [4,10,6,7,8]
];
echo sum($array,1);