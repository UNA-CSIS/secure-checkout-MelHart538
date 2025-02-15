<?php
session_start();

// sasve the form data into the seeison (fn + ln)
$_SESSION['item1'] = $_POST['item1'];
$_SESSION['item2'] = $_POST['item2'];
$_SESSION['item3'] = $_POST['item3'];
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Order Summery</title>

    </head>

    <body>
        Scissors: <?= $_POST["item1"] ?> <br>
        Thread:  <?= $_POST["item2"] ?> <br>
        Needle: <?= $_POST["item3"] ?> <br>

        <form method="post" action="taxes.php">


            <?php
            $numScissor = $_POST["item1"];
            $numThread = $_SESSION["item2"];
            $numNeedle = $_SESSION["item3"];

            if (is_numeric($numScissor) == false || is_numeric($numThread) == false || is_numeric($numNeedle) == false) {
                echo "The Value you entered is invalid, please go back and enter a number";
            } else {
                $totalScissor = $numScissor * 3;
                $totalThread = $numThread * .50;
                $totalNeedle = $numNeedle * .75;
                $total = $totalScissor + $totalThread + $totalNeedle;
                $_SESSION["totalcost"] = $total;
                echo "Your total is $$total";
                ?>
                <p>
                    <input type="submit" name="submit" value="Next &gt;">
                </p>

    <?php
}
?>







        </form>
        <a href="homepage.php">
            <button>Back</button>
        </a>    
    </body>
</html>
