<?php
function characterCount($arr,$x){
    $count=0;
    for($i=0;$i<strlen($arr);$i++){
        if($arr[$i]==$x){
            $count++;
        }
    }
    return $count;
}
$arr='language';
echo characterCount($arr,'g');