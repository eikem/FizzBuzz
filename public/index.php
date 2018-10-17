<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Src\FizzBuzz;

// Only run this when executed on the commandline
if (php_sapi_name() == 'cli') {
    
    $obj = new FizzBuzz(1,100);
    $FizzResult = $obj->getValue();
   
    echo '****************************************************************'. PHP_EOL;
    echo 'Welcome to Project fizz buzz'. PHP_EOL;
    echo 'Divisible by 3 print fizz' . PHP_EOL;
    echo 'Divisible by 5 print buzz'. PHP_EOL;
    echo 'Divisible by both print fizz buzz otherwise print the Integer'. PHP_EOL;
    echo '****************************************************************'. PHP_EOL;
    
    if(is_array($FizzResult)){
        foreach ($FizzResult as $value){
            echo $value.PHP_EOL;
        }
    }else{
        echo $FizzResult;
    }
}

