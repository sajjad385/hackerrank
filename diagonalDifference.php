<?php

function diagonalDifference($arr) {
        $length = count($arr);
        $a = 0;
        $b = 0;
        $reverseArr = array();
        for($i = 0; $i < $length; $i++) {
            $reverseArr[] =  array_reverse($arr[$i]);
        }
        for($j = 0; $j < $length; $j++) {
            $a +=$arr[$j][$j];
            $b += $reverseArr[$j][$j];
        }
       return abs($a - $b);
}
diagonalDifference(
    [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ]
);
