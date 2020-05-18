<?php 
include'DonorInsertion.php'; 
include '../header.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
 <script type="text/javascript">
  function RegisteratioVal(){
    alert("button is pressed");
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


img{
    margin-top: 230px;
    margin-left: 100px;
    animation-name: SignUppic;
    animation-duration:3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in;
    animation-direction: alternate;
    
  }
  @keyframes SignUppic{
    
    0% {transform: translate(-50%,-50%) skewY(5deg);}
  
    50%{ transform: translate(-50%,-50%) skewY(-5deg);}
   
    100%{ transform: translate(-50%,-50%) skewY(5deg); }
  
  }

</style>

<?php include '../NavBar.php';?>

<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-6">

       <h2 style="font-size: 35px;">
           <span class="glyphicon glyphicon-user" style="color: #F70F24">
            </span>Registration Form</h2><br><br>

         <form name="MyForm" action="#" method="POST">
           
            <div class="form-group">
             <input type="text" name="name" class="form-control input-sm" placeholder="Enter Donor Name" style="height: 40px;width: 300px; border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
            </div>
<div class="form-group">
             <input type="hidden" name="did" class="form-control input-sm" value="<?php echo $did ?>" ="Enter Donor Name" style="height: 40px;width: 300px; border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
            </div>
            <div class="form-group">
             <input type="text" name="fname" id="Name" class="form-control input-sm" placeholder="Enter Donor F-Name" style="height: 40px;width: 300px; border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
            </div>


            <div class="form-group">
              <label>Your Gender:</label>
              <input type="radio" name="R" value="Male">Male
              <input type="radio" name="R" value="Female">Female
              <input type="radio" name="R" value="Other">Other
            </div>

               <div class="form-group">
                         <select  name="BloodGroup"  style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
                            <option value="SlectFirst">Select Donor Blood Group Here</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                             <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                             <option value="O+">O+</option>
                            <option value="O-">O-</option>
                          
                          </select>
                </div>

                <div class="form-group">                         
                 <input type="text" name="age" id="Age" class="form-control input-sm" placeholder="Enter Donor Age" style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black" >
                </div>

                <div class="form-group">
                 <input type="text" name="contact" id="Contact" class="form-control input-sm" placeholder=". . . . - . . . . . . . OR . . . - . . . . . . . ." style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
                </div>  

                <div class="form-group">
                 <input type="text" name="address" id="Address" class="form-control input-sm" placeholder="Enter Donor Address" style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
                </div>
                <div class="form-group">
                  <button type="Submit" name="submit" style="height: 35px;width: 300px;background-color: #731A0E;color: white" onclick="return RegisteratioVal()">Submit</button>
                </div>

         </form>
    </div>
    <div class="col-lg-4 "><span class="image"><img src="Become.jpg" ></span></div>
  </div>
</div>

<!--  Footer syart from here -->
<?php include '../footer.php'; ?>
<!--  Footer End from here -->

</body>
</html>
