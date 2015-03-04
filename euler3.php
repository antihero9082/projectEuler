<?php

$prime = 600851475143; //finding the prim factors of dis
$test = 12; //should return 2,2,3
$top = (int)$prime/2; //the furthest we will go
$primeFactors = []; //store primes in array
$primez = primeFactor($prime);
echo $primez;

function primeFactor($inputNumber)
{
  $primes = [];
  $max = $inputNumber / 2; //maximum iterations
  //only divide by primes
  for($i = 2; $i < $max; $i++) {
    if($input % 2 == 0) {
       $primes[] = 2; //if its divisible by 2, push to primes array
       primeFactor($inputNumber/2);
    } elseif (isPrime($i)) {
      if($input % $i == 0) {  //is a factorial
        $primes[] = $i;                     
      }
    } else {
    
    }
  }
  return $primes;
}

function isPrime($checkInt)
{
  $max = ceil($checkInt/2);
  $prime = true;
  for($i = 0; $i < $max; $i++) {
    if($checkInt % $i == 0) {
      $prime = false;
      break;
    }
  }
  return $prime;
}
