<?php
class FizzBuzz{
  private $fizz = 3;
  private $buzz = 5;
  function isFizz($number){
   if($number%$this->fizz == 0) return true; 
   return false;
  }

  function isBuzz($number) {
    if($number%$this->buzz == 0) return true;
    return false;
  }

  function fizzOrBuzz($number){
    if($number == 0) return 0;
    if($this->isFizz($number) && $this->isBuzz($number)) return 'FizzBuzz';
    if($this->isFizz($number)) return 'Fizz'; 
    if($this->isBuzz($number)) return 'Buzz'; 
    return $number; 
  }
}
