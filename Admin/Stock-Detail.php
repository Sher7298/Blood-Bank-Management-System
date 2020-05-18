<?php 

include'Connection.php';
if (isset($_POST['UpDate'])) {

  
 $BloodId=$_POST['id'];
$BGroupVar=$_POST['BG'];
  $UnitCoastVar=$_POST['AU'];
  $DateVar=$_POST['Date'];
  $DesVar=$_POST['Des'];

 
   
  
  
  $Query="UPDATE `stock` SET `BLOODGROUP`='$BGroupVar',`AVAILABLE-UNITS`=' $UnitCoastVar',`DATE`=' $DateVar',`DESCRIPTION`='$DesVar' WHERE `STOCKID`=$BloodId ";
  $FireQuery=mysqli_query($Connection,$Query);
  
    header("location:Stock-Detail.php");

}  




include 'C:/xampp/htdocs/BBMS/header.php';
include 'Connection.php';

session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:AdminLogin.php');
   
 }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
  <script type="text/javascript" src="signupvalidation.js"></script>
  <style type="text/css">
    tr input{
      border: none;
      width: 100px;
    
    }
  </style>

<!--Navigation bar start from here  -->
<?php include 'C:/xampp/htdocs/BBMS/NavBar.php';
echo"<br><br>"?>
<!-- navigation bar is end here -->
</head>

<br><br><br><br>
<div class="container" style="margin-top: 30px">
  <div class="row" style="margin-right: 0px;margin-left: 0px">
      <div class="col-lg-12 text-center" style="background-color:black;color: white;font-size: 50px ">Stock Record</div>
  </div>
  <div class="row">
     <div class="col-lg-12">
<?php 

        $Query="SELECT * FROM `stock`";
        $result= mysqli_query($Connection,$Query); 
      if ($result->num_rows>0) {
    
?>
            
       <table  border="1" class="table  table-hover tabele-border text-center" style="border: 1px solid black">

              <tr style="background-color:black; font-size: 14px; color: white; text-align: center; ">
                <th>Donor-ID</th>
                <th>Blood Group</th>
                <th>Uni-Cost</th>
                <th>Date</th>
                <th>Description</th>               
                <th colspan="2">Action</th>
                
              </tr>

<?php
         while ($res=mysqli_fetch_array($result)) { 
  ?>

<form action="#" method="POST">
   <tr class="text-center text-success ">
      <td><input type="number" name="id" value="<?php echo $res['STOCKID']; ?>"></td>
      <td><input type="text" name="BG" value="<?php echo $res['BLOODGROUP']; ?>"></td>
      <td><input type="text" name="AU" value="<?php echo $res['AVAILABLE-UNITS']; ?>"></td>  <!-- always pass table fields name here -->
       <td><input type="Date"  name="Date" value="<?php echo $res['DATE']; ?>" style="width: 140px"></td>
      <td><input type="text" name="Des" value="<?php echo $res['DESCRIPTION']; ?>"></td>
      
      <td>
        <button><a href="Stock-deletion.php?SID=<?php echo $res['STOCKID']; ?>">Delete</a></button>
      </td>
      <td>
        <button name="UpDate" value="UpdateBtn">Update</button>
      </td>
   </tr>
  
</form>
  <?php } ?><!-- while bracket close -->
</table>

<?php 
 } //  if bracket close 
      else{
        echo "no record exist";
      } 

?>
 
  </div> <!-- Column End here -->

  </div> <!-- Row end here -->
</div><!--  container end here -->

  
<!--  Footer syart from here -->
<?php 
echo"<br><br><br><br><br><br><br><br>";
include 'C:/xampp/htdocs/BBMS/footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>

