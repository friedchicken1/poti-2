<?php
  session_start();

  if(isset($_POST['car_id']))
  {
    $_SESSION['id'][]=$_POST['car_id'];
    $_SESSION['price'][]=$_POST['car_price'];
    $_SESSION['brand'][]=$_POST['car_brand'];
    $_SESSION['model'][]=$_POST['car_model'];
    $_SESSION['year'][]=$_POST['car_year'];
    echo count($_SESSION['id']);
    exit();
  }
?>