<?php
    # Arrays in php
    /*
        -> Array: That can holds multiple valuea
        Types:
        -> Indexed
        -> Associative
        -> multi-dimensional
    */

    # Indexed arrays
    $students  = array('Tayyub', 'Faisal', 'Usman', 'Gul Khan');
    // same as above //
    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $students[0];
    echo '<br>';
    echo $students[1];
    echo '<br>';
    echo $students[3];
    echo '<br>';

    /*
        Array related functions
        -> count(arrayName) : Count the number of value in an array
        -> print_r(arrayName) : to print the whole array without any loop
        -> var_dump(arrayANme) : It will give us all the information about array
    */

    echo count($cars);
    echo '<br>';
    echo print_r($cars);
    echo '<br>';
    echo var_dump($cars);
    echo '<br>';

    # Associative arrays

    $people = array('Brad' => 35, 'Ali' => 20, 'Khan' => 56);
    /* same as above */
    $arrayOfPeople = ['Brad' => 35, 'Ali' => 20, 'Khan' => 56];
    
    echo $people['Brad'];
    echo '<br>';
    echo $people['Khan'];
    echo '<br>';
    
    # multi-dimensional

    $cars = [['Honda', 20, 10], ['Ford', 34, 20], ['Toyota', 34, 19]];

    echo $cars[0][0];
    echo '<br>';
    echo $cars[0][1];
    echo '<br>';
    echo $cars[0][2];
?>