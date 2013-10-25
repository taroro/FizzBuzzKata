<?php
require_once 'FizzBuzz.php';
class FizzBuzzTest extends PHPUnit_Framework_TestCase{
  var $fizzBuzz; 

  function setUp(){
    $this->fizzBuzz = new FizzBuzz();
  }

  public function testFizzBuzzWithZero() {
    $expected = $this->fizzBuzz->fizzOrBuzz(0);
    $this->assertEquals(0, $expected);
  }

  public function testFizzBuzzWithOne() {
    $expected = $this->fizzBuzz->fizzOrBuzz(1);
    $this->assertEquals(1, $expected);
  }

  public function testFizzBuzzWithThree() {
    $expected = $this->fizzBuzz->fizzOrBuzz(3);
    $this->assertEquals('Fizz', $expected);
  } 

  public function testFizzBuzzWithFive() {
    $expected = $this->fizzBuzz->fizzOrBuzz(5);
    $this->assertEquals('Buzz', $expected);
  } 

  public function testFizzBuzzWithSix() {
    $expected = $this->fizzBuzz->fizzOrBuzz(6);
    $this->assertEquals('Fizz', $expected);
  }

  public function testFizzBuzzWithTen() {
    $expected = $this->fizzBuzz->fizzOrBuzz(10);
    $this->assertEquals('Buzz', $expected);
  }

  public function testFizzBuzzWithFifteen() {
    $expected = $this->fizzBuzz->fizzOrBuzz(15);
    $this->assertEquals('FizzBuzz', $expected);
  }

}
?>
