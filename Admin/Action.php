<?php 
$Connection=mysqli_connect("localhost","root","","ddbms");


if (isset($_POST['UpDate'])) {
  
   $IDVar=$_POST['ID'];
  $NameVar=$_POST['N'];
  $F_NameVar=$_POST['FN'];
  $GenderVar=$_POST['G'];
  $B_GroupVar=$_POST['BG'];
  $AgeVar=$_POST['AGE'];
  $ContactVar=$_POST['NO'];
  $AddressVar=$_POST['AD'];

    $Query="UPDATE `add-donor` SET `NAME`='$NameVar',`FATHER-NAME`='$F_NameVar',`GENDER`='$GenderVar',`BLOOD-GROUP`='$B_GroupVar',`AGE`='$AgeVar',`CONTACT-NUMBER`='$ContactVar',`ADDRESS`='$AddressVar' WHERE `ID`=$IDVar";
  $result= mysqli_query($Connection,$Query); 
}    
  
 ?>