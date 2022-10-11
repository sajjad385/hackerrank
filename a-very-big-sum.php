<?php

function aVeryBigSum(array $arr) {
    return array_sum($arr);
}
echo aVeryBigSum([1000000001, 1000000002, 1000000003, 1000000004, 1000000005]);
