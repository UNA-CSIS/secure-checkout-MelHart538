<?php

session_start();

$_SESSION['uname'] = $_POST['uname'];
$_SESSION['password'] = $_POST['password'];
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

    </head>

    <body>
        <?php
        
        $uname = $_POST['uname'];
        $password = $_POST['password'];

if(isset($_POST['uname']) && isset($_POST['password'])){
    if($uname == 'mhart' && $password == 'mhart'){
    echo "hello";
    header("Location: card.php");
    exit();}
    else{
        echo "Invalid username and password"; ?> <br>
        <a href="homepage.php">
            <button>Home page</button>
        </a> 
        <?php
    }
}

?>

    </body>
    
</html>
