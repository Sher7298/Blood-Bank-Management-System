  <?php
include'Connection.php';
if (isset('UpdateBtn')) {

  
}
$BGroupVar=$_POST['SelectBlood'];
  $UnitCoastVar=$_POST['stock'];
  $DateVar=$_POST['date'];
  $DesVar=$_POST['description'];

  $BloodId=$_GET['UID'];
   
  
  
  $Query="UPDATE `stock` SET `BLOODGROUP`=,`AVAILABLE-UNITS`=,`DATE`=,`DESCRIPTION`= WHERE `STOCKID`=$BloodId ";
  $FireQuery=mysqli_query($Connection,$Query);
  
    header("location:Stock-Detail.php");

  ?>
