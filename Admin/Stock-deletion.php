<?php
include'Connection.php';
echo "welcome";

  $BloodId=$_GET['SID'];
  
  
  $Query="DELETE FROM `stock` WHERE STOCKID=$BloodId";
  $FireQuery=mysqli_query($Connection,$Query);
  
  	header("location:Stock-Detail.php");

  ?>