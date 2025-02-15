<?php
session_start();


?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

    </head>

    <body>
        
        <form method="post" action="login_check.php">
            
            <h1>Login before Checkout</h1>
            
            <?php
            if (isset($_GET['error'])){ ?>
            <p class="error"> <?php
            }
            
            ?>
            <label>Username</label>
            <input type="text" name="uname"> <br>
            
            <label>Password</label>
            <input type="text" name="password"> <br>
            
            <<h3>hint: mhart for both ;)</h3>


           








                <p>
                    <input type="submit" name="submit" value="Next &gt;">
                </p>
        </form>
        <a href="homepage.php">
            <button>Back</button>
            
        </a>    
    </body>
</html>
