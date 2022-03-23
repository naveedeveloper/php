<?php
    echo 'Hello From PHP';

    /*Same as above but 'echo' is bit faster than 'print'*/
    print 'Hello From PHP';


    //Comments
    //Single line comments
    # Single line comments
    /*
        Multiline 
        Comments
    */

    # VARIABLES
    /* 
    -> In php '$' sign is used as prefix for variables e.g $num, $input etc
    -> Start with a letter or an underscore
    -> only letters, numbers and underscore are allowed
    -> Case sensitive
    */
    $output = "I am a variable";
    echo $output;

    # DATA TYPES
    /*
    -> String e.g $var = 'Tayyub';
    -> Integers e.g $var = 123;
    -> floats e.g $var = 22.05;
    -> Booleans e.g $var = true;
    -> Arrays 
    -> Objects
    */

    $string1 = "Hello";
    $stirng2 = "World";
    $num1 = 123;
    $float1 = 12.4;
    $bool1 = true;

    $string3 = $string1 . " " . $stirng2. "\n";
    echo $string3;
    echo $num1;
    echo $float1;
    echo $bool1;

    # Constant
    /*
        # Syntax : define(variable Name, Value)
        -> Case sensitive
        -> In order to make constant insensitive we can use 3rd parameter in define function as
        -> e.g define('GREETING', 'Assalam u Alaikum!', true); 
        -> if 3rd parameter value is true it means constant is insensitive and vice versa
    */

    define('NAME', 'Tayyub Naveed');
    echo NAME;

    // define('GREETING', 'Assalam u Alaikum!', true);
    // echo greeting;
    //echo GREETING;
?>
