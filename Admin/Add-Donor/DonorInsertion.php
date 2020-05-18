<?php
include'Connection.php';
if (isset($_POST["submit"])) {
  $NameVar=$_POST['name'];
  $F_NameVar=$_POST['fname'];
  $GenderVar=$_POST['R'];
  $B_GroupVar=$_POST['BloodGroup'];
  $AgeVar=$_POST['age'];
  $ContactVar=$_POST['contact'];
  $AddressVar=$_POST['address'];
  $EmailVar=$_POST['Email'];
  $PasswordVar=$_POST['Password'];

  $Query="INSERT INTO `add-donor`(`NAME`, `FATHER-NAME`, `GENDER`, `BLOOD-GROUP`, `AGE`, `CONTACT-NUMBER`, `ADDRESS`,`Email`,`Password`) VALUES ('$NameVar','$F_NameVar','$GenderVar','$B_GroupVar','$AgeVar','$ContactVar','$AddressVar','$EmailVar','$PasswordVar')";
  $FireQuery=mysqli_query($Connection,$Query);
  if ($FireQuery) {
    echo "data inserted";
  }
  else
  {
    echo "insertion error";
  }
 
}





  ?>

