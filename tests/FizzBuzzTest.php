<?php
require_once __DIR__ . '/../src/FizzBuzz.php';


use Src\FizzBuzz;

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
 
    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz(1,15);
    }
    
    // test FizzBuzz result array for the first 15 integers
    public function testFizzBuzz()
    {
        $expectedResult = array(
            1, 2, '3 fizz', 4, '5 buzz',
            '6 fizz', 7, 8, '9 fizz', '10 buzz',
            11, '12 fizz', 13, 14, '15 fizz buzz'
        );
       
        $actualResult = $this->fizzBuzz->getValue();
        $this->assertEquals($expectedResult,$actualResult);
    }
    
    // test for when a string was send instead of an integer
    public function testStringSend()
    {
        $this->fizzBuzz = new FizzBuzz("1",15);
       
        $actual = $this->fizzBuzz->getValue();
        $this->assertEquals("An Error occurred !! Function only accepts integers",$actual);
    }
    
    // test for if endInt is larger than the max allowed 
    public function testEndIntegerLarger100()
    {
        $this->fizzBuzz = new FizzBuzz(1,101);
       
        $actual = $this->fizzBuzz->getValue();
        $this->assertEquals("An Error occurred !! The End Integer can not be larger than 100",$actual);
    }
    
    // test for if startInt is larger than endInt 
    public function testStartIntegerNotLargerThanEndInteger()
    {
        $this->fizzBuzz = new FizzBuzz(15,1);
       
        $actual = $this->fizzBuzz->getValue();
        $this->assertEquals("An Error occurred !! The Start Integer can not be larger than the End Integer",$actual);
    }
 
}
?>
