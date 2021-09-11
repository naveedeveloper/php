<?php
    //check for POST data
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';
    }else{
        echo 'No Data';
    }
    */
    
    //check for valid email
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }else{
            echo 'Email is not valid';
        }
    }else{
        echo 'Data is not in POST method';
    }
    */

    //Senitize the email
    /*
    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        //Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email.'<br>';
    }else{
        echo 'Data is not in POST method';
    }
    */

    //Integer Filteration
    
    /*
    $var = 3;

    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var.'is a number';
    }else{
        echo $var.' not a number';
    }
    */
    
    //Now Integer senitization
    /*
    $number = 'asdfas6a8g7aga7g6a87fg6';
    $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
    echo $number;
    */

    //Special charactors senitization
    /*
    $input = '<script>alert(1)</script>';
    //echo $input;

    echo filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
    */

    
?>

<form method="post" action="9_filter.php">
        <input type="text" name="data">
        <button type="submit">Submit</button>
</form>
