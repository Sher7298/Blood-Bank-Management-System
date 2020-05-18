<?php
session_start();
session_destroy();
//session_unset();
// if (isset($_COOKIE['Name']) && isset($_COOKIE['pass'])) {

// 		$NameVar=$_COOKIE['Name']; 
// 		$PasswordVar=$_COOKIE['pass'];
// 		setcookie('Name',$NameVar,time()-1);
// 		setcookie('pass',$PasswordVar,time()-1);
// }



header('location:AdminLogin.php');




  ?>