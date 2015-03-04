<?php
$max = 100;
$sumSquare = 0;
$squaresSum = 0;
$sum = 0;
for($i = 0; $i <= $max; $i++) {
   $sum += $i;
   $squaresSum += ($i*$i);
}
$sumSquare = $sum*$sum;

echo $sumSquare - $squaresSum . "\n";