<?php
function findMax($arr)
{
    $max=$arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if($max<$arr[$i][$j]){
                $max=$arr[$i][$j];
            }

        }

    }
    return $max;
}

$array = [
    [1, 2, 9, 4],
    [5, 6, 7, 8]
];
echo findMax($array);