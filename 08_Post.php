<?php
    /*
    Both GET and POST method is used to transfer data from client to server in HTTP protocol but Main difference between POST and GET method is that GET carries request parameter appended in URL string while POST carries request parameter in message body which makes it more secure way of transferring data from client to server.
    */
    if(isset($_POST['name'])){
        $name = htmlentities($_POST['name']); 
        echo  $name;
    }

    if(isset($_POST['email'])){
        $email = htmlentities($_POST['email']); 
        echo $email;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MY Website</title>
    </head>
    <body>
        <form method="POST" action="8_post.php">
            <div>
                <label>Name </label><br>
                <input type="text" name="name">
            </div>

            <div>
                <label>Email </label><br>
                <input type="text" name="email">
            </div>
            <br>
            <input type="submit" value="submit">
        </form>   
    </body>
</html>
