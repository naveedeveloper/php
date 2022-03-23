<?php
    echo 'FUNCTIONS!!! <br>';
    # FUNCTION : Block of code that can be repeatedly called
    /*
        Syntax:
            function functionName(){}
    */

    # function without parameters
    function Greeting(){
        echo 'Assalam-u-Alaikum!! <br>';
    }

    # function call
    Greeting();

    # function having parameters
    function Sum($num1, $num2){
        return $num1 + $num2;
    }

    $sum = Sum(2, 4);
    echo 'Sum  : '.$sum.'<br>';

    // By reference

    $myNum = 108;

    function addFive($num){
        $num += 5;
        echo 'Value of $myNum inside addFive() function : '.$num.'<br>';
    }

    //By reference parameter
    function addTen(&$n){
        $n += 10;
        echo 'Value of $myNum inside addTen() function : '.$n.'<br>';
    }

    addFive($myNum);
    echo 'Value of $myNum after addFive() function execution: '.$myNum.'<br>';
    addTen($myNum);
    echo 'Value of $myNum after addTen() function execution: '.$myNum.'<br>';
?>
