<?php
include'Connection.php';
include 'Add-Blood.php';
if (isset($_POST['submit'])) {
	$idvar=$_GET['UID'];
  $BGroupVar=$_POST['SelectBlood'];
  $UnitCoastVar=$_POST['cost'];
  $DateVar=$_POST['Date'];
  $DesVar=$_POST['description'];
  
  $Query="UPDATE `add-blood` SET ``BLOODGROUP`='$BGroupVar',`BLOODUNIT`='$UnitCoastVar',`DATE`='$DateVar',`DESCRIPTION`='$DesVar' WHERE BLOODID='$idvar'";
  $FireQuery=mysqli_query($Connection,$Query);
  if ($FireQuery) {
  	echo "data updated";
  }
  else{
  	echo "updation error";
  }
}


?>