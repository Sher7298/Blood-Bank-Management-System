<?php include 'header.php';
include 'Connection.php';
if (isset($_POST['ClickLogin'])) {
  $EmailVar=$_POST['Email'];
  $PasswordVar=$_POST['Password'];
$query="SELECT * FROM `usersignin` WHERE Email='$EmailVar' AND Password='$PasswordVar'";
  $fire=mysqli_query($Connection,$query);  
    $TotalRecord=mysqli_num_rows($fire);
  if ($TotalRecord==1) {
        $_SESSION['UserEmail']=$EmailVar;
       header('location:Emergency-Number.php');
  }
  else{
    header('location:UserLogin.php');
    
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Form</title>  
</head>
<body style="height: 200px">
  <?php include 'NavBar.php';?>
 <br><br><br><br><br><br><br>
<!-- Login Form -->
<div class="contianer">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <center> <h1 style="font-size: 40px"><b> User Login Form</b></h1></center><hr>
    </div>
    <div class="col-md-3"></div>
  </div>
   <form name="MyForm" action="#" method="POST">
   <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
       <div class="form-group">
         <label>Email:</label><br>
         <input type="text" name="email" class="form-control">
        </div>
     </div>
   </div>
    <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
        <div class="form-group">
            <label>Password:</label><br>
            <input type="Password" name="Password" class="form-control"z >
        </div>
     </div>
   </div>
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-4">
        <div class="form-group">
         <button type="submit"  name="ClickLogin" style="height: 35px;width: 110px">Login</button
       </div>
      </div>
    </div>
</form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--  Footer syart from here -->
<footer class="page-footer text-center" style="background-color:black" >
    
        <div class="row">
            <div class="col-lg-12">
       
                <h3 style="color: white ;"><span class="glyphicon glyphicon-user"></span> © Copyrights  2019 Divisions of SaveHuman Blood Bank. </h3>

            </div>
            
        </div>
    </div>
</footer><!--  Footer End from here -->php'; ?>
</body>
</html>
