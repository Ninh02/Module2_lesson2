<?php
function deleteElement($arr,$x){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$x){
            array_splice($arr,$arr[$i],1);
        }
    }
    return $arr;
}
$array=[1,2,3,4,5,8,9];
echo '<pre>';
 print_r(deleteElement($array,5));
?>
