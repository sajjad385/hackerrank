<?php

function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;
    for($i = 0; $i < count($a); $i++) {
        if($a[$i] > $b[$i]) {
            $alice +=1;
        } else if ($a[$i] < $b[$i]) {
            $bob += 1;
        }
    }
   return [$alice, $bob];
}
compareTriplets([1,3,4],[3,5,1]);
