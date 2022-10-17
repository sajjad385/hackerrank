<?php

$length = count($arr);
      $positive = array_filter($arr, function($value) {
        return $value > 0;
      });

      $negative = array_filter($arr, function($value) {
        return $value < 0;
      });
      $zero = array_filter($arr, function($value) {
        return $value == 0;
      });
      if(isset($positive)) {
        $positive = count($positive) / $length;
      }
      if(isset($negative)) {
        $negative = count($negative) / $length;
      }
     if(isset($zero)) {
        $zero = count($zero) / $length;
     }
    echo number_format($positive, 6).PHP_EOL, 
         number_format($negative, 6).PHP_EOL,
         number_format($zero, 6);

