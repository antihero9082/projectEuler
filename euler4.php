<?php
//largest palindrome product

$defLargest = 999;
$largest = 999;
$smallest = 100;
$next = $largest;
$greatest = 0;

while ($largest >= $smallest) {
    $product = (string)$largest * $next;
    echo $largest ."*" . $next ."=" . $product . "\n";
    if ($product == strrev($product)) {
        //zomg a palindrome
        echo $largest .' ------ '. $next ."\n";
        echo $product . "\n";
        if($product > $greatest) {
            $greatest = $product;
        }
    }
    if ($next < $smallest) {
        $largest--;
        $next = $defLargest;
     } else {
        $next--;
    }
}

echo "========$greatest==========";

function isPalendrome($input) {
    $input = (string)$input;
    $length = strlen($input);
    $j = 0;
    for ($i = $length - 1; $i > 0; $i--) {
        if($input[$i] != $input[$j]) {
            return false;
        }
        $j++;
    }
    return true;
}