<?php 
include'Connection.php';
session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:AdminLogin.php');
   
 } 
?>
<?php include '../Header.php';?>


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
<?php include '../NavBar.php';
echo "<br><br><br><br><br><br>";
?>

<div class="container" style="margin-top: 30px">
  <div class="row" style="margin-right: 0px;margin-left: 0px">
    <div class="col-lg-12 text-center" style="background-color:black;color: white;font-size: 50px ">Donor Record</div>
  </div>
  <div class="row">
    <div class="col-lg-12">

      <?php 

        $Query="SELECT * FROM `add-blood`";
        $result= mysqli_query($Connection,$Query); 
      if ($result->num_rows>0) {
    
?>

         <table  border="1" class="table table-striped table-hover tabele-border text-center" style="border: 1px solid black">

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
  <tr class="text-center text-success ">   <!-- always pass table fields name here -->
        <td><input type="number" name="ID" value="<?php echo $res['BLOODID']; ?>"></td>
        <td><input type="text" name="BG" value="<?php echo $res['BLOODGROUP']; ?>"></td>
        <td><input type="text" name="AU" value="<?php echo $res['BLOODUNIT']; ?>"></td>

         <td><input type="Date" name="Date" value="<?php echo $res['DATE']; ?>" style="width: 120px"></td>
        <td><input type="text" name="Des" value="<?php echo $res['DESCRIPTION']; ?>"></td>
        
       <td>
        <button name="UpDate" value="UpdateBtn">Update</button>
      </td>
        
        <td>
          <button>
            <a href="BloodDeletion.php?BID=<?php echo $res['BLOODID']; ?>">Delete</a>
          </button>
        </td>
      </tr>
</form>              
<?php } ?> <!-- while bracket close here -->
 </table>
 <?php 
 } //  if bracket close 
      else{
        echo "no record exist";
      } 

?>
    </div> <!-- col 12 div close here -->
  </div><!-- row div close here -->
</div> <!-- container div close here -->

<!--  Footer syart from here -->
<?php 
echo "<br><br><br><br><br><br><br><br>";
include '../footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>


<?php 
  include'Connection.php';

  

if (isset($_POST['UpDate'])) {
  $BloodIdVar=$_POST['ID'];
 $BGroupVar=$_POST['BG'];
  $UnitCoastVar=$_POST['AU'];
  $DateVar=$_POST['Date'];
  $DesVar=$_POST['Des'];

$Query="UPDATE `add-blood` SET `BLOODGROUP`='$BGroupVar',`BLOODUNIT`='$UnitCoastVar',`DATE`='$DateVar',`DESCRIPTION`='$DesVar' WHERE `BLOODID`='  $BloodIdVar'";
  $FireQuery= mysqli_query($Connection,$Query);   
}
if (isset($_POST['delete'])) {
 
$BloodId=$_GET['ID'];
$Query="DELETE FROM `add-blood` WHERE BLOODID=$BloodId";
  $FireQuery= mysqli_query($Connection,$Query);   
}  
 ?>

