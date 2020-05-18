<?php
include'Connection.php';

if (isset($_POST["save"])) {

  $NameVar=$_POST['name'];
  $CnicVar=$_POST['cnic'];
  $EmailVar=$_POST['email'];
   $ContactVar=$_POST['contactNumber'];
  $BGroupVar=$_POST['BloodGroup'];
  $AddressVar=$_POST['address'];
  $MessageVar=$_POST['message'];
  
  $Query="INSERT INTO `contact-us`( `NAME`, `CNIC`, `EMAIL`, `CONTACT-NUMBER`, `BLOOD-GROUP`, `Address`, `MESSAGE`) VALUES ('$NameVar','$CnicVar',' $EmailVar','$ContactVar','$BGroupVar','$AddressVar','$MessageVar')";
  $FireQuery=mysqli_query($Connection,$Query);
  if ($FireQuery) {
  	echo "data insertd successfully";
  }
  else{
  	echo "errror";
  }
 
}





  ?>
