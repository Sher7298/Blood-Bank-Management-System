<?php 
include '../header.php';
include 'Connection.php';

session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:contact/AdminLogin.php');
   
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
<?php include '../NavBar.php';
echo"<br><br><br>";?>
<!-- navigation bar is end here -->
</head>

<br><br><br>
<div class="container" style="margin-top: 30px">
  <div class="row" style="margin-right: 0px;margin-left: 0px">
      <div class="col-lg-12 text-center" style="background-color:black;color: white;font-size: 50px ">Accepter Record</div>
  </div>
  <div class="row">
     <div class="col-lg-12">
<?php 

        $Query="SELECT * FROM `contact-us`";
        $result= mysqli_query($Connection,$Query); 
      if ($result->num_rows>0) {
    
?>
            
       <table  border="1" class="table  table-hover tabele-border text-center" style="border: 1px solid red">

              <tr style="background-color:black; font-size: 14px; color: white; text-align: center; ">
                <th>ID</th>
                <th>Name</th>
                <th>Cnic</th>
                <th>Email</th>
                <th>Contact#</th>
                <th>Blood Requires</th>
                <th>Address</th>
                <th>Message</th>              
                <th >Action</th>
              </tr>

<?php
         while ($res=mysqli_fetch_array($result)) { 
  ?>


   <tr class="text-center text-success "> <!-- always pass table fields name here -->
      <td><?php echo $res['CONTACTID']; ?></td>
      <td><?php echo $res['NAME']; ?></td>
      <td><?php echo $res['CNIC']; ?></td> 
       <td><?php echo $res['EMAIL']; ?></td>
      <td><?php echo $res['CONTACT-NUMBER']; ?></td>
      <td><?php echo $res['BLOOD-GROUP']; ?></td>
      <td><?php echo $res['Address']; ?></td>
      <td><?php echo $res['MESSAGE']; ?></td> 
      <td>
         <button>
          <a href="?RID=<?php echo $res['CONTACTID']; ?>">Delete</a>
          
        </button>
      </td>
      
  
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
<?php include '../footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>

  <?php
include'Connection.php';


  $BloodId=$_GET['RID'];
  
  
  $Query="DELETE FROM `contact-us` WHERE CONTACTID=$BloodId";
  $FireQuery=mysqli_query($Connection,$Query);
  
    //header('location:contactDetail.php')

  ?>