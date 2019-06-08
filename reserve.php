<!DOCTYPE html>
<html>
<head>
<title>Reservation</title>
<link rel = "stylesheet" type = "text/css" href ="ware.css"/>
</head>
<body>

<div class="navigation">
  <h1> Tyrone's Rental Centre </h1>
</div>
  <h2>Car Reservation</h2>
<?php
session_start();
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
?>
<div>
  <button class="checkoutbtn">Proceed to Checkout</button>
</div>



</body>
</html>
