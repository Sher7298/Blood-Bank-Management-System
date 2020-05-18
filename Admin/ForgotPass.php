<?php include '../Header.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
  </head>
  <?php include '../NavBar.php';?>
<br><br><br><br><br><br><br><br>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-1"></div>
   <div class="col-lg-4">
     
      <h2 class="text-center" style="color: grey">Dont Worry If You Forgot Password </h2><br>
    <form name="MyForm" action="#" method="POST">
      
      <div class="from-group">
        <label>User Name:</label>
        <input type="text" name="name"   class="form-control">
      </div><br>
      <div class="from-group">
        <label>User Email:</label>
        <input type="email" name="email" class="form-control">
      </div><br>
      
      <div class="from-group">
      <button type="submit"  name="Submit" class="btn btn-danger   form-control">Submit</button>
      </div>

   </div>
      
    </form>
       <div class="col-lg-2"></div>
    <div class="col-md-5">
      <img src="../images/forgot.jfif" style="height: 300px;width: 300px">
    </div>
  </div>
</div>
<br><br>
<!--  Footer syart from here -->
<?php include '../footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>

<?php
include '../Connection.php';

if (isset($_POST['Submit'])) {
  $NameVar=$_POST['name'];
  $EmailVar=$_POST['email'];
  $query="SELECT * FROM `admin-login` WHERE NAME='$NameVar' AND EMAIL='$EmailVar'";
  $result=mysqli_query($Connection,$query);
  while ($row=mysqli_fetch_assoc($result)) {
        $nameVar=$row['NAME'];
         $emailVar=$row['EMAIL'];
         $passVar=$row['PASSWORD'];
  }

if ($EmailVar==$emailVar)
{
  $from="FROM:luqman7071@gmail.com";
  $to=$EmailVar;
  $subject="Your Name And PAssword";
  $body="Dear $nameVar \n > YOur User Name:$nameVar \n >your password is :$passVar";
  mail($to,$subject,$body,$from);
  echo "Check Your inbox ";
}
  else{
     echo "please check your email"; }


}// first if
else
{
  echo "please enter your email and user name";
}
  ?>
