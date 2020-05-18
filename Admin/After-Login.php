<?php 
include'Connection.php';
session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:AdminLogin.php');
   
 } 
?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  body{
    margin: 0px;
    padding: 0px;
    height: 100px;
    background-image: url("adminbg6.jpg");
  }
</style>
	<title>Blood Bank Management System</title>
  <script type="text/javascript" src="signupvalidation.js"></script>

<?php include '../Header.php';?><br><br>
<?php include '../NavBar.php';?><br><br><br>
<br><br><br><br>


<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php
              include 'Connection.php';
            
 
				

           
  $Query="SELECT * FROM `admin-login` ";
			   $FireQuery=mysqli_query($Connection,$Query);
			 
while ($row=mysqli_fetch_array($FireQuery)) {
  echo "Wellcome ";
	echo "Mr.<h2>".$row['NAME']."</h2><br>";
	echo "<img src='1.png' height='200px' width='150px' alt='Image not found'>";
	echo "<h3>".$row['EMAIL']."</h3><br>";
}

			  ?>

		</div>

</div>


<br><br><br>
<!--  Footer syart from here -->
<?php include '../footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>













