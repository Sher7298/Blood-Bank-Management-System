<?php 
include'Connection.php';
if (isset($_POST['Change'])) {
  $OldPassword=$_POST['Opassword'];
  $NewPassword=$_POST['password'];
  $CPassword=$_POST['cpassword'];
   // echo "$OldPassword/$NewPassword/ $OldPassword";

  $query="SELECT `PASSWORD`FROM `admin-login` WHERE PASSWORD='$OldPassword'";
  $result=mysqli_query($Connection,$query);
  $row=mysqli_fetch_assoc($result);


  $DbPassword=$row['PASSWORD'];
  if ( $OldPassword==$DbPassword) 
{ 
	$querychange="UPDATE `admin-login` SET `PASSWORD`='$NewPassword' WHERE PASSWORD='$OldPassword'";
    $result=mysqli_query($Connection,$querychange);
		    if ($result) {
		    	echo "your password changeed";
		    }




		       if ($NewPassword==$CPassword) {
		       	
		       }
		       else{
		       	echo "Your New Paasword did match";
		       }
}


  else{
  	echo "Old Password Did Match";
  }
}



