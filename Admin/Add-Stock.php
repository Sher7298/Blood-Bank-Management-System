<?php 
include'Stock/Stock-insertion.php';
include '../header.php';
session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:AdminLogin.php');
   
 }

 ?>



<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
  <script type="text/javascript" src="stock/Stock-Validation.js"></script>
  <script type="text/javascript" src="signupvalidation.js"></script>
<style type="text/css">
  body{
    margin: 0px;
    padding: 0px;

  }
  

  .bainer{
    background-image: url("index-3.jfif");
    position: relative;
    background-size: cover;
    background-position: center;
    height: 500px;
     background-repeat: no-repeat;
  }
  form input{
    border:none;
  }



</style>
<!-- NaveBar Start From Here -->
<?php include '../NavBar.php';
echo"<br><br><br><br><br><br><br><br>"?>
<!-- End Of Nave Bar NaveBar   -->
<div class="container">
  <div class="row">
   <div class="col-lg-4">
     
      <h2 class="text-center">Add Stock </h2><br>
    <form name="MyForm" action="#" method="POST">
      <div class="from-group">
        <select class="form-control" name="SelectBlood">
          <option value="optionStock">Select Blood Group Here</option>
           <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
        </select>
      </div><br>
      <div class="from-group">
        <label>Total Available Unit:</label>
        <input type="number" name="stock"   class="form-control">
      </div><br>
      <div class="from-group">
        <label>Stock Date:</label>
        <input type="Date" name="date" class="form-control">
      </div><br>
      <div class="from-group">
        <label>Stock Description:</label>
        <input type="text" name="description" class="form-control">
      </div><br>
      <div class="from-group">
      <button type="submit"  name="Submit" class="btn btn-danger   form-control" onclick=" return StockVal()">Submit</button>
      </div>

   </div>
      
    </form>
  </div>
</div>




  <br><br><br><br><br><br><br><br>

<!--  Footer syart from here -->
<?php include'../footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>

