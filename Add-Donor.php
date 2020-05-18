<?php

include'Admin/Add-Donor/DonorInsertion.php';
include 'Header.php';include 'NavBar.php';?>

<? echo "<br><br><br><br><br><br>";?>
<html>
<head><title>a</title></head>
<style type="text/css">
body{
    
    background-image: url('bg-clr.jpg'); 
  }
  p{
    color:red;
  }
  </style>
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-6">

       <h2 style="font-size: 35px;">
           <span class="glyphicon glyphicon-user" style="color: #F70F24">
            </span><p>Registration Form<p></h2><br><br>

         <form name="MyForm" action="#" method="POST">
           
            <div class="form-group">
             <input type="text" name="name" class="form-control input-sm" placeholder="Enter Your Name" style="height: 40px;width: 300px; border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
            </div>
<div class="form-group">
             <input type="hidden" name="did" class="form-control input-sm" value="<?php echo $did ?>" ="Enter Donor Name" style="height: 40px;width: 300px; border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
            </div>
            <div class="form-group">
             <input type="text" name="fname" id="Name" class="form-control input-sm" placeholder="Enter your Father Name" style="height: 40px;width: 300px; border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
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
                 <input type="text" name="age" id="Age" class="form-control input-sm" placeholder="Enter Your Age" style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black" >
                </div>

                <div class="form-group">
                 <input type="text" name="contact" id="Contact" class="form-control input-sm" placeholder="Enter Your Contact Number" style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
                </div>  

                <div class="form-group">
                 <input type="text" name="address" id="Address" class="form-control input-sm" placeholder="Enter Donor Address" style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">
                </div>

                 <div class="form-group">
                  
                 <input type="text" name="Email" class="form-control" id="Email" placeholder="Enter Your Email Address" style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black">

                </div>

                <div class="form-group">
                  
                  <input type="Password" name="Password" class="form-control"z id="Password"  style="height: 40px;width: 300px;border-left: none;border-top: none;border-right: none; border-bottom: 2px solid black" placeholder="Enter Password For Sign-Ins">                  
                </div>
               

                <div class="form-group">
                  <button type="Submit" align="center" name="submit" style="height: 35px;width: 100px;background-color: red;color: white" onclick="return RegisteratioVal()">Submit</button>
                </div>

         </form>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="col-lg-4 "><span class="image"><img src="Become.jpg" ></span></div>
  </div>
</div>

<!--  Footer syart from here -->
<?php include 'footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>
<script type="text/javascript">
  function RegisteratioVal(){
  
    NameVar=document.forms["MyForm"]["name"].value;
    FNameVar=document.forms["MyForm"]["fname"].value;
    RadioVar=document.forms["MyForm"]["R"].value;
    BloodGroupVar=document.forms["MyForm"]["BloodGroup"].value;
    AgeVar=document.forms["MyForm"]["age"].value;
     ContactVar=document.forms["MyForm"]["contact"].value;
    ContactVar=document.forms["MyForm"]["address"].value;


// (1) Name vallidation is start from here
    NameReg=/[A-za-z .]{3,20}/;
    if (NameVar=="") {
      alert("Name field Can not be left empty");
      return false;
    }
    if (!NameReg.test(NameVar)) {
      alert(" Length Must BE  InBetween 3 And 20......\n And Only Characters,Spaces And Dots (.) Are Allowwed");
      return false;
    }
// (2) Father Name vallidation is start from here
     F_NameReg=/[A-za-z .]{3,20}/;
    if (FNameVar=="") {
      alert(" Father Name field Can not be left empty");
      return false;
    }
    if (!F_NameReg.test(FNameVar)) {
      alert(" Length Must BE  InBetween 3 And 20......\n And Only Characters,Spaces And Dots (.) Are Allowwed");
      return false;
    }
// (3) Radio BUTTON VALIDTAION IS  start from here
    if (RadioVar=="") {
      alert(" Select your Gender Please");
      return false;
    }
// (4) Donor Blood Group Validatio is start from here

    if (BloodGroupVar=="SlectFirst") {
      alert("Please Select Blood Group");
      return false;
    }


// (5) age variable is start from here

    if (AgeVar=="") {
      alert("Please Enter Your Age");
      return false;
    }
    if (isNaN(AgeVar)) {
      alert("Only Integer Are Allowed");
      return false;
    }
    if (AgeVar<18||AgeVar>50)
    { 
        alert("The age must be a number between 18 and 50");
        return false;
    }

// (6) contat validation is start form hereCC
     
    if (ContactVar=="") {
      alert("Please Enter Your Conatact Number ");
      return false;
    }
    if (ContactVar!=11) {
      alert("Please Check Your Number Again");
      return false;
    }
    
// (7) Address Validation is start from here
    if (AddressVar=="") {
      alert("Please Enter Your Valid Address ");
      return false;
    }
  }
</script>

