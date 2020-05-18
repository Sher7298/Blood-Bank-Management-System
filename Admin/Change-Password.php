<?php 
include'ChangePhpCode.php';
 include '../Header.php';
session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:AdminLogin.php');
   
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
  <script type="text/javascript" src="Change-Password.js"></script>
<style type="text/css">
  body{
    margin: 0px;
    padding: 0px;

  }


</style>
<?php include '../NavBar.php';
echo"<br><br><br><br><br><br><br><br>";?>

<div class="container">
  <div class="row">
   <div class="col-lg-4">
     
      <h2 class="text-center">Change Password</h2><br>
    <form name="MyForm" action="ChangePhpCode.php" method="POST">
      <div class="from-group">
        <label>Old Password:</label>
        <input type="Password" name="Opassword" class="form-control">
      </div><br>
      <div class="from-group">
        <label>New Password:</label>
        <input type="Password" name="password" class="form-control">
      </div><br>
      <div class="from-group">
        <label>Confirm Password:</label>
        <input type="Password" name="cpassword" class="form-control">
      </div><br>
      <div class="from-group">
      <button type="submit"  name="Change" class="btn btn-danger form-control" onclick="return ChangePassord()">Submit</button>
      </div>

   </div>
      
    </form>
  </div>
</div>




  <br><br><br><br><br><br><br><br>
<!--  Footer syart from here -->
<?php include '../footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>


