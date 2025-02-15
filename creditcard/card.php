<?php
session_start();




?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
 
    
        
        
        
        
        
        
        
   
        
        
        
<h2>Checkout</h2>

<?php
// define variables and set to empty values
$card= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $card= test_input($_POST["card"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Card Number: <input type="text" name="card">
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your card info:</h2>";

if ($card[0] == "4"){
   if (strlen($card) == 13 || strlen($card) == 16) {
    echo "Your VISA CARD $card was accepted! Thank you for shopping with us!";
} else {
    echo "INVALID PLEASE TRY AGAIN";
}
    
    
    
} elseif($card[1] >= "1" && $card[1] <= "5" && $card[0] == "5") {
    
    if (strlen($card) == 16) {
    echo "Your Mastercard $card was accepted! Thank you for shopping with us!";
} else {
    echo "INVALID PLEASE TRY AGAIN";
}
    
    
}elseif($card[0] == "3" && ($card[1] =="4" || $card[1] == "7")){
      if (strlen($card) == 15) {
    echo "Your AMIX CARD $card was accepted! Thank you for shopping with us!";
} else {
    echo "INVALID PLEASE TRY AGAIN";
}
    
    
}else{
    echo "INVALID PLEASE TRY AGAIN";
}

?>

        
    
    </head>
    <body>
       <p>
        <a href="homepage.php">
            <button>Keep Shopping!</button>
        </a> 
    </p>
    
    </body>
</html>
