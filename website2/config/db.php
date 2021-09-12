<?php
    // Create connection

    $conn = mysqli_connect('localhost', 'root', '', 'php_blog');

    if(mysqli_connect_errno()){
        echo 'Connection Failed <br>'.mysqli_connect_errno();
    }

?>