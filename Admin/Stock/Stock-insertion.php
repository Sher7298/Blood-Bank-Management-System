<?php
include'Connection.php';
if (isset($_POST["Submit"])) {
 
  $BGroupVar=$_POST['SelectBlood'];
  $UnitCoastVar=$_POST['stock'];
  $DateVar=$_POST['date'];
  $DesVar=$_POST['description'];
  
  $Query="INSERT INTO `stock`(`BLOODGROUP`, `AVAILABLE-UNITS`, `DATE`, `DESCRIPTION`)VALUES ('$BGroupVar','$UnitCoastVar','$DateVar',' $DesVar')";
  $FireQuery=mysqli_query($Connection,$Query);
  if ($FireQuery) {
  	echo "data insertd successfully";
  }
  else{
  	echo "errror";
  }
 
}





  ?>
