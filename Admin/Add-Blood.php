<?php 
include'add-Blood/insertion.php';
// include'updateBlood.php';

include'Connection.php';
session_start();
if (!isset($_SESSION['SessionName'])) {
  header('location:AdminLogin.php');
 }

 ?>
 <?php include '../Header.php';?>

<br><br><br><br><br><br>

<!DOCTYPE html>
<html>
<head>
  <title>Blood Bank Management System</title>
  <script type="text/javascript" src="C:\Users\Sher Ali\Desktop\Blood Bank Management System\javascript validation/BloodValidation.js"></script>
  <script type="text/javascript">
    
function bloodVal(){
   BloodGroupVar=document.forms["MyForm"]["SelectBlood"].value;
   CostVar=document.forms["MyForm"]["cost"].value;
     DescriptionVar=document.forms["MyForm"]["description"].value;


// (1) BLood Group Validation is start from Here
      if (BloodGroupVar=="OptionBlood") {
          alert("Please Select Blood Group");
          return false;
      }

// (2) Cost Validation is Start Form Here
    if (CostVar=="") {
      alert("Please Enter Cost OF blood Per Unit");
      return false;
    }

    if (isNaN(CostVar) ) {
      alert("Please Enter Cost In Integer Only");
      return false;
    }
    if (CostVar>3000) {
      alert("please Enter Cost Below 3000");
      return false;
    }

// (3) Description Validation is start from here
    if (DescriptionVar=="") {
      alert("Please Enter Description");
      
    }


}


    
  </script>
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

<?php include '../NavBar.php';?>
<div class="container">
  <div class="row">
   <div class="col-lg-4">
     
      <h2 class="text-center">Add Blood </h2><br>
    <form name="MyForm" action="#" method="POST">
      <div class="from-group">
        <select class="form-control" name="SelectBlood">
          <option value="OptionBlood">Select Blood Group Here</option>
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
        <label>Cost Per Unit:</label>
        <input type="text" name="cost" class="form-control">
      </div><br>
      
       <div class="from-group">
        <label>Date:</label>
        <input type="date" name="Date" class="form-control">
      </div><br>
      <div class="from-group">
        <label>Description:</label>
        <input type="text" name="description" class="form-control">
      </div><br>
      <div class="from-group">
      <button type="submit" name="submit" class="btn btn-danger form-control" onclick="return bloodVal()">Submit</button>
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


