<?php

include'Connection.php'; 
 
include '../Header.php';
session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:../Admin/AdminLogin.php');
   
 } 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
 <!--  <script type="text/javascript" src="signupvalidation.js"></script> -->
<style type="text/css">
    tr input{
      border: none;
      width: 100px;
    
    }
  </style>

<?php include '../NavBar.php';?>

<br><br><br><br><br><br>
<div class="container" style="margin-top: 30px">
  <div class="row" style="margin-right: 0px;margin-left: 0px">
    <div class="col-lg-12 text-center" style="background-color:black;color: white;font-size: 50px ">Donor Record</div>
  </div>
  <div class="row">
    <div class="col-lg-12">            
         
              <?php 

        $Query="SELECT * FROM `add-donor`";
        $result= mysqli_query($Connection,$Query); 
      if ($result->num_rows>0) {
    
?>
<table  border="1" class="table table-striped table-hover tabele-border text-center" style="border: 1px solid black">

              <tr style="background-color:black; font-size: 14px; color: white; text-align: center; ">
                <th>ID</th>
                <th>Name</th>
                <th>Father-Name</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th>Age</th>
                <th>Contact#</th>
                <th>Address</th>
                <th colspan="2">Action</th>
                
              </tr>

              <?php
         while ($res=mysqli_fetch_array($result)) { 
  ?>


<form action="Action.php" method="POST">
          <tr class="text-center text-success "><!-- always pass table fields name here -->
                <td><input type="number" name="ID" value="<?php echo $res['ID']; ?>"></td>
                <td><input type="text" name="N" value="<?php echo $res['NAME']; ?>"></td>
                <td><input type="text" name="FN" value="<?php echo $res['FATHER-NAME']; ?>"></td>  
                 <td><input type="text" name="G" value="<?php echo $res['GENDER']; ?>"></td>
                <td><input type="text" name="BG" value="<?php echo $res['BLOOD-GROUP']; ?>"></td>
                <td><input type="number" name="AGE" value="<?php echo $res['AGE']; ?>"></td>
                <td><input type="number" name="NO" value="<?php echo $res['CONTACT-NUMBER']; ?>"></td>
                 <td><input type="text" name="AD" value="<?php echo $res['ADDRESS']; ?>"></td>
               
                <td><button name="UpDate" value="UpdateBtn">Update</button></td>
                <td>
                  <button>
                    <a href="Donor-Deletion.php?ID=<?php echo $res['ID']; ?>">Delete</a></button>
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

<!--  Footer End from here -->
</body>
</html>


<?php 
  

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

 <?php ECHO"<br><br><br><br><br><br><br><br><br><br><br><br><br>"?>
<?php include '../footer.php'; ?>