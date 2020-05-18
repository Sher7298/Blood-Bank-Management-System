<?php
include'Connection.php';
 
  $BloodId=$_GET['BID'];
  
  
  $Query="DELETE FROM `add-blood` WHERE BLOODID=$BloodId";
  $FireQuery=mysqli_query($Connection,$Query);
  
  	header("location:Blood-Setail.php");

  ?>
