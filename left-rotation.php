<?php

 function rotateLeft(array $arr, int $d) {
    // if we use for loop its works perfectly,
    // but when submitted to hackerrank it will not accept the solution
    // because of time limit exceed.
    /*for($i=0; $i<$d; $i++) {
        $arr[] = $arr[0];
        array_shift($arr);
    }*/
    $splice = array_splice($arr, 0, $d);
    array_push($arr, ...$splice);
    return $arr;
    }

print_r(rotateLeft([1,2,3,4,5], 4));
