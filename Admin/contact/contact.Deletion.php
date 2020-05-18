<?php
include'Connection.php';


  $BloodId=$_GET['RID'];
  
  
  $Query="DELETE FROM `contact-us` WHERE CONTACTID=$BloodId";
  $FireQuery=mysqli_query($Connection,$Query);
  
  	header('location:contactDetail.php')

  ?>