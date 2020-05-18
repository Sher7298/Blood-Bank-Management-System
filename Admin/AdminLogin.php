
<!DOCTYPE html>
<html>
<head>
  <title>Admin Form</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
    margin: 0px;
    padding: 0px;
    height: 100px;
    background-image: url("adminbg4.jpg");
  }
</style>


</head>
<body>
  
<div class="contianer">
  <div class="row" style="background-color: black;">
    <div class="col-md-4"> <button style="background-color: black;border:none;"><a href="../Home.php" style="color: white;">Go To Home</a> </button></div>
    <div class="col-md-4">
      <span class="fas fa-hand-holding-heart" style="font-size: 70px;color: white; margin-left: -75px"><span style="font-size: 30px;margin-left: 20px;">Save Human Lives</span></span><hr>
    </div>
  </div>
</div>
 


<!-- Login Form -->
<div class="contianer">
  <div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-1">
      <h1 style="color: red;"><span class="glyphicon glyphicon-log-in"></span>Admin</h1>
    </div>
    <div class="col-md-3"></div>
</div>
   <form name="MyForm" action="#" method="POST">
   <div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-3">
        <div class="form-group">
           
           <input type="text" name="name" class="form-control" placeholder="Enter Your Name" >
        </div>
     </div>
   </div>


   <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-3">
        <div class="form-group">
            
            <input type="Password" name="Password" class="form-control" placeholder="Enter Your Password" >
        </div>

     </div>
   </div>
    <!--  <div class="form-group">
    <label>Remember Me</label><br>
    <input type="checkbox" name="Box"  >
    </div>
            <br> -->
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-1">
        <div class="form-group">
         <button type="submit"  name="ClickLogin"  class="form-control"  style="color: red">Login</button>
       </div>
      </div>
    </div>

   <div class="row">
     <div class="col-md-5"></div>
     <div class="col-md-1">
       <div class="form-group">
         <button type="submit"  class="form-control" style="color: red"/>
          <a href="ForgotPass.php">Forgot?</a> </button>
        </div>
     </div>
   </div>
</form>
    </div>

</div>
</div>


</body>
</html>

<?php
include'Connection.php';


//i initial session
session_start();
if (isset($_POST['ClickLogin'])) {
  // $BoxVar=$_POST['Box'];
  $NameVar=$_POST['name'];
  $PasswordVar=$_POST['Password'];
  $Query="SELECT * FROM `admin-login` WHERE NAME='$NameVar' AND PASSWORD='$PasswordVar'";
  $FireQuery=mysqli_query($Connection,$Query);
 $TotalRecord=mysqli_num_rows($FireQuery);
 echo $TotalRecord;
 if ($TotalRecord==1) {

        // if (isset($_POST['Box'])) {
        //  setcookie('Name',$NameVar,time()+60*60*7);
        //  setcookie('pass',$PasswordVar,time()+60*60*7);

        // }
    $_SESSION['SessionName']=$NameVar;
      // $_SESSION['SessionPass']=$PasswordVar;

    header('location:After-Login.php');
 }
 else{
   header('location:AdminLogin.php'); 
   
 }




}
  ?>
<?php echo "<br><br><br><br><br><br><br><br><br>"; ?>
<?php include '../footer.php'; ?>
<?php include '../marquee.php'; ?>