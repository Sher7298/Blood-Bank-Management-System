<?php

include 'Connection.php';

if (isset($_POST['submit'])) {
  $uid=$_GET['UID'];
   $NameVar=$_POST['name'];
  $F_NameVar=$_POST['fname'];
  $GenderVar=$_POST['A'];
  $B_GroupVar=$_POST['BloodGroup'];
  $AgeVar=$_POST['age'];
  $ContactVar=$_POST['contact'];
  $AddressVar=$_POST['address'];
  

   $Query="UPDATE `add-donor` SET =`NAME`='$NameVar',`FATHER-NAME`='$F_NameVar',`GENDER`='$GenderVar',`BLOOD-GROUP`='$B_GroupVar',`AGE`='$AgeVar',`CONTACT-NUMBER`='$ContactVar',`ADDRESS`='$AddressVar' WHERE `ID`=$uid";
   $result= mysqli_query($Connection,$Query); 
   if ($result) {
  header('location:Donor-Detail.php');
   }
   else
   {
    echo "dta updation eror";
   }
  
}
  ?>
