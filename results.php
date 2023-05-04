<?php
  //Declare the value for tax and discount
  define("TAX_RATE", 1.13);

  define("DISCOUNT", 0.05);

  define("SAUCEPRICE", 0.10);

  //Choice of each item
  $userNuggets = $_POST['userNuggets'];

  $userDrink = $_POST['userDrink'];

  $userFries = $_POST['userFries'];

  $userSauce = $_POST['userSauce'];

  //Price for each item
  $nuggetPrice = "";

  $drinkPrice = "";

  $friesPrice = "";
  
	// Get info from the user for their meal
	$userMain = $_POST['userMain'];

  $userSide1 = $_POST['userSide1'];

	$userSide2 = $_POST['userSide2'];

  $sauceAmount = $_POST['sauceAmount'];
    
  
        
//Statement for the price of nuggets 
if ($userNuggets == "6pcs nugget") {
  $nuggetPrice = 5.99;

}

else if ($userNuggets == "10pcs nugget") {
  $nuggetPrice = 7.49;

}

else  {
  $nuggetPrice = 11.99;
}
    ?>
    <?php
//Statement for the price of drink
if ($userDrink == "Small Drink") {
  $drinkPrice = 1.50;

}

else if ($userDrink == "Medium Drink") {
  $drinkPrice = 2.25;

}

else  {
  $drinkPrice = 3.00;
}
?>
      <?php
//Statement for the price of fries

if ($userFries == "small fries") {
  $friesPrice = 1.25;

}

else if ($userFries == "medium fries") {
  $friesPrice = 2.00;

}

else  {
  $friesPrice = 2.50;
}
?>
      <?php
 if ($userMain == ""){
   echo "";
 }
 else{
	// calculate the amount the user has to pay
  $subTotal = ($nuggetPrice * $userMain) + ($drinkPrice * $userSide1) + ($friesPrice * $userSide2) + (SAUCEPRICE * $sauceAmount);
  $total = $subTotal * TAX_RATE;
  $discountedTotal = $total - ($total * DISCOUNT);
 }
?>

  
  <?php 
  //Data given back to user
  if ($userMain > 0){
  echo "your order is " . $userMain . " " . $userNuggets . ", " . $userSide1 . " " .  $userDrink . ", " . $userSide2 . " " . $userFries . ", " . $sauceAmount . " " . $userSauce . " sauce." .
    "<br>The subtotal of your order is $" . round($subTotal, 2) . "." .
  "<br>The total amount this order will cost you is $ " . round($total, 2) . "." .
"<br>The amount of money this will cost you with the discount is $ " . round($discountedTotal, 2) . ".";
    }
  else{
    echo "Please enter a valid order.";
  }
    ?>