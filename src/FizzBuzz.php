<?php
/**
 * FizzBuzz Project
 * @author Eike M
 */

namespace Src;

class FizzBuzz
{

    const FIZZ_DIVISOR = 3;
    const BUZZ_DIVISOR = 5;
    const MAX_INT = 100;
    const DIV_BY3_VALUE = 'fizz';
    const DIV_BY5_VALUE = 'buzz';
    const DIV_BY3AND5_VALUE = 'fizz buzz';
    
    public $startInt;
    public $endInt;

    
    /**
     * Create a new FizzBuzz instance.
     *
     * @param  int  $startInt
     * @param  int  $endInt
     *
     */
    public function __construct($startInt,$endInt) 
    {
        
        $this->startInt = $startInt;
        $this->endInt = $endInt;
       
    }
    
    /**
     * Validate startInt and endInt
     * @return true
     */
    public function validateValue()
    {
       // If one of the 2 supplied values is not an integer, throw and Exeption  
       if(!is_int($this->startInt) || !is_int($this->endInt))
            throw new \InvalidArgumentException('Function only accepts integers');
       
       // If the start Integer is larger than the end Integer, throw an Exeption
       if($this->startInt > $this->endInt)
            throw new \Exception('The Start Integer can not be larger than the End Integer');
       
       // If the end Integer is larger than the max allowed Integer, throw an Exeption
       if($this->endInt > self::MAX_INT)
            throw new \Exception('The End Integer can not be larger than '.self::MAX_INT);
       
       return true;
    }
    
    
    public function getValue()
    {
        try {
            // Validate the Integers supplied on setup
            $this->validateValue();
            
            // Create result  array to store the values from the loop
            $result = array(); 
            
            // Loop through the 2 provided Integers from startInt to endInt
            for ($i = $this->startInt; $i <= $this->endInt; $i++) { 
                
                // If current integer is divisible by 3 and 5  
                if ($i % 3 === 0 && $i % 5 === 0 ) {
                    $output = $i.' '.self::DIV_BY3AND5_VALUE;
                // If current integer is divisible by 3     
                }elseif ( $i % 3 === 0){
                    $output = $i.' '.self::DIV_BY3_VALUE; 
                // If current integer is divisible by 5     
                }elseif($i % 5 === 0){
                    $output = $i.' '.self::DIV_BY5_VALUE;
                // otherwise store the current integer of the loop    
                }else{
                    $output = $i;
                }
                // store the output in the result array
                $result[] = $output;
            }
            // return result 
            return $result;
        }

        //catch exception and return
        catch (\Exception $e) {
            return "An Error occurred !! " .$e->getMessage(); 
        }
    }       
}



?>
