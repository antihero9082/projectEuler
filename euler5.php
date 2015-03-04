<?php

$smallest = 2;
$largest = 20;
$start = 2520;
$divisible = false;
while ($divisible == false) {
    //we know we have to do multiples of 20 at least
    for ($i = $largest; $i >= $smallest; $i--) {
        if($start % $i == 0) {
            if ($i == $smallest) {
                echo "$start\n";
            }
           continue;
        } else {
            break;
        }

    }
    $start += 20;
}