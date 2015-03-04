<?php
$primeList = 10001; //what were looking for
$primeCount = 0; //
$stop = false;
$j = 2;
while ($stop == false) {
   if (isPrime($j)) {
      $latestPrime = $j;
       echo "$latestPrime\n";
      $primeCount++;
       if($primeCount == $primeList+1) {
           $stop = true;
       }
   }
   $j++;
}

function isPrime($checkInt)
{
    $max = ceil($checkInt/2);
    $prime = true;
    for($i = 2; $i < $max; $i++) {
        if($checkInt % $i == 0) {
            $prime = false;
            break;
        }
    }
    return $prime;
}