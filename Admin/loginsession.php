<?php
include'Connection.php';


//i initial session
session_start();
if (isset($_POST['ClickLogin'])) {
  // $BoxVar=$_POST['Box'];
  $NameVar=$_POST['name'];
  $PasswordVar=$_POST['Password'];
  $Query="SELECT * FROM `admin-login` WHERE NAME='$NameVar' AND PASSWORD='$PasswordVar'";
  $FireQuery=mysqli_query($Connection,$Query);
 $TotalRecord=mysqli_num_rows($FireQuery);
 echo $TotalRecord;
 if ($TotalRecord==1) {

        // if (isset($_POST['Box'])) {
        //  setcookie('Name',$NameVar,time()+60*60*7);
        //  setcookie('pass',$PasswordVar,time()+60*60*7);

        // }
    $_SESSION['SessionName']=$NameVar;
      // $_SESSION['SessionPass']=$PasswordVar;

    header('location:After-Login.php');
 }
 else{
   header('location:AdminLogin.php'); 
   
 }




}
  ?>