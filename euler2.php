<?php
$sum = 0;
$second = 1;
$first = 0;
while($first < 4000000) {
  //placeholder for 3d number;
  $newFib = $first + $second;
  if($newFib % 2 == 0) { //fib number is even, count dat
    $sum += $newFib;
  }
  $first = $second;
  $second = $newFib;
}

echo $sum . "\n";
