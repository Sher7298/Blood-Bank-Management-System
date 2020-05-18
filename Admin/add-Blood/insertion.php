<?php
include'Connection.php';
if (isset($_POST["submit"])) {
 
  $BGroupVar=$_POST['SelectBlood'];
  $UnitCoastVar=$_POST['cost'];
  $DateVar=$_POST['Date'];
  $DesVar=$_POST['description'];
  
  $Query="INSERT INTO `add-blood`(`BLOODGROUP`, `BLOODUNIT`, `DATE`, `DESCRIPTION`) VALUES ('$BGroupVar','$UnitCoastVar','$DateVar',' $DesVar')";
  $FireQuery=mysqli_query($Connection,$Query);
  if ($FireQuery) {
  	header('location:Add-Blood.php');
  }
  else{
  	echo "errror";
  }
 
}





  ?>
