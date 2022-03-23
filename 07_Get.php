<?php 
    /*
    if(isset($_GET['name'])){
        echo $_GET['name']; 
    }

    if(isset($_GET['email'])){
        echo $_GET['email'];
    }
    */
    /*
        This is not a secure method because hacker can easily harm the html code
        by just putting some malicious script.
        so, chrome use some bulit-in things to prevent it but this is not always the case
        Solution :
        We can use the htmlentities to prevent the page from any malicious activity/thing. 
    */

    if(isset($_GET['name'])){
        echo htmlentities($_GET['name']); 
    }

    if(isset($_GET['email'])){
        echo htmlentities($_GET['email']);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MY Website</title>
    </head>
    <body>
        <form method="GET" action="7_get.php">
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
