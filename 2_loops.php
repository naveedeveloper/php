<?php
    #LOOPS : Execute code set number of times
    /*
        => TYPES
        -> For
        -> while
        -> do.while
        -> Foreach
    */

    # For loop
    # syntax: for(init, condition, inc or dec)
    echo 'FOR LOOP !!! <br>';
    for($i = 0; $i <= 10; $i++){
        echo 'Number : '.$i;
        echo '<br>';
    }

    # while loop
    # @params : condition
    echo 'WHILE LOOP !!! <br>';
    $j = 0;

    while($j < 5){
        echo 'Number : '.$j.'<br>';
        $j++;
    }

    # do ...  while loop
    # @params - condition
    echo 'DO WHILE LOOP!! <br>';
    $k = 12;
    do{
        echo $k.'<br>';
        $k++;
    }while($k < 20);

    # foreach loop used for arrays
    echo 'FOREACH LOOP!! <br>';
    $arr = [1, 2, 3, 4];
    foreach($arr as $num){
        echo $num;
        echo '<br>';
    }

    $people = array(
        'Tayyub' => 'tayyub@gamil.com',
        'Usman' => 'manzoorUsman@gmail.com',
        'Afridi' => 'afridi@gmail.com'
    );

    foreach($people as $person => $email){
        echo $person.' : '.$email.'<br>';
    }
?>