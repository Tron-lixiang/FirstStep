<?php
$arr=array(1,2,3,4,6,9,10);
$count=count($arr);
function chazhao($target,$arr){
    for($i=0;$i <count($arr)-1;$i++){
        if ($arr[$i] == $target) {
            echo $i;
        }
    }
}
function erfen($target,$arr){
    $low=0;
    $high=count($arr)-1;
    while ($low<=$high){
        $mid = intval(($low+$high)/2);
        if($arr[$mid]==$target){
            return $mid;
        }
        if($arr[$mid]<$target){
            $low = $mid + 1;
        }else{
            $high = $mid - 1;
        }
    }
    return -1;
}
$target=6;
echo erfen($target,$arr);
echo chazhao(3,$arr);
?>
