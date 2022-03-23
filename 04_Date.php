<?php
    echo date('d').'<br>'; //Day
    echo date('m').'<br>'; //Month
    echo date('y').'<br>'; //Year

    echo date('d/m/y').'<br>'; //day/month/year
    echo date('D/M/Y').'<br>'; //day/month/year

    echo date('h').'<br>'; //Hour
    echo date('i').'<br>'; //Min
    echo date('s').'<br>'; //Seconds
    echo date('a').'<br>'; //PM or AM

    //set Time zone
    // date_default_timezone_set('Pakistan/Peshawar');
    // echo date('h:i:s a').'<br>';


    $timestamp = mktime(1, 14, 54, 6, 18, 2001);

    echo date('m/d/y h:i:s a', $timestamp);

?>
