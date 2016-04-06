<?php

$arr = array(1,3,2,8,5,7,4,0);

function bubble_sort($a) {
    
    array_pop($a);
    return $a;
}

$arr = bubble_sort($arr);

print_r($arr);

?>