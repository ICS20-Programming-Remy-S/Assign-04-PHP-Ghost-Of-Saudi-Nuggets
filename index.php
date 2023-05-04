<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Ghost of saudi nuggets">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Remy Skelton">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Ghost Of Saudi Nuggets</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Ghost of Saudi Nuggets</h1>";
			echo "<h3>Please Enter your order in our online menu below(if you do not want the item put 0 in amount)</h3>";
		?>
		<!--- PHP results and user input --->
        <form action="./results.php" method="post" target="results">
 <label for="userNuggets">Nugget options:</label>
        <select name="userNuggets" id="userNuggets">
  <option value="6pcs nugget">6pcs nugget($5.99)</option>
  <option value="10pcs nugget">10pcs nugget($7.49)</option>
  <option value="20pcs nugget">20pcs nugget($11.99)</option>
</select>
        <label for="usersMain">Please enter the amount of nuggets :</label>
        <input type="number" id="userMain" name = "userMain" placeholder="ex.4" step="1" min="1"><br><br>
        
        <label for="userDrink">Drink options:</label>
        <select name="userDrink" id="userDrink">
  <option value="Small Drink">Small Drink($1.50)</option>
  <option value="Medium Drink">Medium Drink($2.25)</option>
  <option value="Large Drink">Large Drink($3.00)</option>
</select>
        <label for="userSide1">Please enter the amount of drinks :</label>
        <input type="number" id="userSide1" name = "userSide1" placeholder="ex.6" step="1" min="0"><br><br>
        
        <label for="userFries">Fries options:</label>
        <select name="userFries" id="userFries">
  <option value="small fries">Small fries($1.25)</option>
  <option value="medium fries">Medium fries($2.00)</option>
  <option value="large fries">Large fries($2.50)</option>
</select>
        <label for="userSide2">Please enter the amount of fries :</label>
        <input type="number" id="userSide2" name = "userSide2" placeholder="ex.2" step="1" min="0"><br><br>

        <label for="userSauce">Sauce options:</label>
        <select name="userSauce" id="userSauce">
  <option value="BBQ">BBQ($0.10)</option>
  <option value="Ranch">Ranch($0.10)</option>
  <option value="Honey">Honey($0.10)</option>
</select>
        <label for="sauceAmount">Please enter the amount of Sauce :</label>
        <input type="number" id="sauceAmount" name ="sauceAmount" placeholder="ex.6" step="1" min="0"><br><br>
        <input type="submit" value="calculate">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				  The amount of money this wil cost you is $" . round($subTotal, 2) . "." .
  "<br>The amount of money spent on your team is " . round($total, 2) . "." .
"<br>The profit you make from your team is " . round($discountedTotal, 2) . "."
        ?>
        <!---Text for the ghost of saudi—-->
	    </iframe>
        <h3>The Ghost of Saudi has been thriving since the world cup which has brought many new customer to our location. Due to the growth in customer we have been able to expand throughout Saudi Arabia and bring more people joy. Dispite, the fact that so many people come here regularly we make sure each time you get great food matched with amazing service. Finally, we provide many great deal on our food like the discounted price if you use our app which you can find on any device.</h3>
    <!---Images--->
    <h1>
    <img src="./images/ghostOfSaudi.jpg" width="300" height="300">
    </h1>
	</body>
</html>