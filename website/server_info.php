<?php
    /*
        SUPERGLOBAL are bulit-in variable in php that are accessable in all scopes
    */
    #$_SERVER - a superglobal

    //Create Server Array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF']
    ];

    // echo 'Host Server Name : '.$server['Host Server Name'].'<br>';
    // echo 'Host Header : '.$server['Host Header'].'<br>';
    // echo 'Server Software : '.$server['Server Software'].'<br>';
    // echo 'Document Root : '.$server['Document Root'].'<br>';
    // echo 'Current Page : '.$server['Current Page'].'<br>';

    /*same as abpve */
    //print_r($server);
    

    //echo '<br> <br> <br> <br>';

    //Create Client Array
    $client = [
        'Client Sytem info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

    // echo 'Client Sytem info : '.$client['Client Sytem info'].'<br>';
    // echo 'Client IP : '.$client['Client IP'].'<br>';
    // echo 'Remote Port : '.$client['Remote Port'].'<br>';
?>