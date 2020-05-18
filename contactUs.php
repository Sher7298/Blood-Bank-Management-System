
<?php 
include 'Admin/contact/ContactInsert.php';
include 'Header.php';
include 'NavBar.php';
?>
<html>
<head>
  <title>Contact Us</title>i
</head>
<style type="text/css">
p{
  color: white;
}
  body{
    
    background-image: url('bg-clr.jpg'); 
}
</style>
<body>
<div class="container" style="background-color: re">
  <div class="box">
    <div  class="row">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Contact Us</h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13281.141577721093!2d73.0612873697754!3d33.67567360000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1546497513555" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-lg-4 mt-1">
        <p>Helpline:
          <strong>111 - 111 - 422</strong>
        </p>
        <p>Email:
          <strong> lab@SaveHuman.com</strong>
        </p>
        <p>Fax:<strong>+92.21.32237735 l</strong></p>
        
        <p>Address:Divisions of
          <strong>SaveHuman Blood Bank.</strong><br>
          43-Bahria Town,Ali Mosque Road,Islamabad- Pakistan.
        </p>

      </div>
    </div>
  </div>
</div>
<br><br><br>


<div class="container" style="background-color: re">
  <div class="box">
    <div  class="row">
      <div class="col-lg-12">
        
        <h2 class="intro-text text-center">Contact Form</h2>
       
        <p>Contact us by filling this simple form.we are here to help you.</p>
      </div>
    </div>
    <form action="#" method="POST" name="MyForm">
      <div class="row">
        <div class=" fom-group col-lg-4 ">
          <label>Name:</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class=" fom-group col-lg-4 ">
          <label>CNIC:</label>
          <input type="text" name="cnic" class="form-control">
        </div>
         <div class=" fom-group col-lg-4 ">
          <label>Email:</label>
          <input type="text" name="email" class="form-control">
        </div>
      </div>
      
        <div class="row">
           <div class=" fom-group col-lg-4 ">
          <label>Contact Number:</label>
          <input type="text" name="contactNumber" class="form-control">
          </div>
     
         <div class=" fom-group col-lg-4 " style="margin-top: 25px">
         <select class="form-control" name="BloodGroup" >
                <option value="SelectFirst">Select Donor Blood Group Here</option>
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
         <div class=" fom-group col-lg-4 ">
           <label>Address:</label>
          <input type="text" name="address" class="form-control">
        </div>
    </div>
        
      <div class="row">
        <div class="col-lg-12">
          <label>Message:</label>
          <textarea class="form-control" rows="2" name="message"></textarea>
        </div>
        <div class="col-lg-9"></div>
         <div class="col-lg-3">
          <br>
          <button type="submit" name="save" class="btn btn-default" style="color: white; background: red; width: 200px" onclick="return contact()">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
<br><br>

<!--  Footer syart from here -->
<?php include 'footer.php'; ?>
<!--  Footer End from here -->
</body>
</html>
<script type="text/javascript">
  function contact(){
    NameVar=document.forms["MyForm"]["name"].value;
    CnicVar=document.forms["MyForm"]["cnic"].value;
     EmailVar=document.forms["MyForm"]["email"].value;
    ContactVar=document.forms["MyForm"]["contactNumber"].value;
    BloodVar=document.forms["MyForm"]["BloodGroup"].value;
    AddressVar=document.forms["MyForm"]["address"]

//(1) Name vallidation is start from here
    NameReg=/[A-za-z .]{3,20}/;
    if (NameVar=="") {
      alert("Name field Can not be left empty");
      return false;
    }
    if (!NameReg.test(NameVar)) {
      alert(" Length Must BE  InBetween 3 And 20......\n And Only Characters,Spaces And Dots (.) Are Allowwed");
      return false;
    }

// cnic
if (CnicVar=="") {
      alert("cnic field cannt b left empty");
      return false;
    }
    cnicReg=/[0-9]{5,5}(-)[0-9]{7,7}(-)[0-9]{1,1}/;
    if (!cnicReg.test(CnicVar)) {
      alert(" cnic fomate 00000-0000000-0");
      return false;
    }
// email validation is start from here
if (EmailVar=="") {
      alert("mail field cannt b left empty");
      return false;
    }
    emailReg=/[A-Za-z0-9]{3,}(@)[A-Za-z]{4,6}(.)[A-Za-z]{2,3}/;
    if (!emailReg.test(EmailVar)) {
      alert(" enter proper formate for emial");
      return false;
    }
// (6) contat validation is start form hereCC
     
    if (ContactVar=="") {
      alert("Please Enter Your Conatact Number ");
      return false;
    }
     ContactReg=/(0)[0-9]{3,3}(-)[0-9]{7,7}/;
    if (!ContactReg.test(ContactVar)) {
      alert("Please Check Your Number Again");
      return false;
    }  
// (4) Donor Blood Group Validatio is start from here

    if (BloodVar=="SelectFirst") {
      alert("Please Select Blood Group");
      return false;
    }
    // (4) Donor Blood Group Validatio is start from here

    if (AddressVar=="") {
      alert("Please enter Address");
      return false;
    }  
  }
</script>


