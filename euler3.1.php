<?php

$prime = 600851475143; //finding the prim factors of dis
$test = 34; //should return 2,2,3
$top = (int)$prime/2; //the furthest we will go
$topPrime = 0;
$factorials = [];
primeFactor($prime);
echo $topPrime;

function primeFactor($inputNumber)
{
  global $topPrime;
  if(isPrime($inputNumber)) {
      if($inputNumber > $topPrime) {
          $topPrime = $inputNumber;
      }
      $factorials[] = $inputNumber;
      return;
  }
  for($i = 2; $i < $inputNumber / 2; $i++) {
    if($inputNumber % $i == 0) {
      if($i > $topPrime) {
         $topPrime = $i;
      }
      $factorials[] = $i;
      return primeFactor($inputNumber / $i);
    }
  }
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
