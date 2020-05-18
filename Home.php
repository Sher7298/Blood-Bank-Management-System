<?php
     include 'Connection.php';
if (isset($_POST['Search'])) {
  $city=$_POST['City'];
  $BloodGroup=$_POST['SelectBlood'];
  $query="SELECT * FROM `stock` WHERE BLOODGROUP='$BloodGroup'";
  $firequery=mysqli_query($Connection,$query);
  if ($firequery) {
    echo "Result is found";
  }
  if ($firequery->num_rows>=1) {
  header('location:welcome.php');
  }
  else {
      header('location:sorry.php');
  }
}
  ?>

<?php include 'Header.php';?>
<?php include 'NavBar.php';?>


<?php echo "<br><br><br><br><br>";?>

<style type="text/css">
h2{
  color: white;
}
  body{
    margin: 0px;
    padding: 0px;
    background-image: url('bg-clr.jpg'); 
    height: 700px; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-size: cover; 
  }
  .bainer{
    background-image: url("index-3.jfif");
    position: relative;
    background-size: cover;
    background-position: center;
    height: 600px;
     background-repeat: no-repeat;
  }
  p{
    color: black;
  }
</style>
<!-- <script type="text/javascript" src="Admin/homesearch.js"></script> work in same page -->
<!-- image slider -->
<div class="container" style="margin-top: padding: 0px; width: 77%">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">


      <div class="item">
        <img src="images/blood1.jpg" style="width:100%; height: 350px;">
        <div class="carousel-caption">
          <!-- <h1 class="display-2">Welcome to Save Human Blood Bank</h1> -->
  
        </div>
      </div>

      <div class="item active">
        <img src="images/blood2.jpg" style="width:100%; height: 350px;">
        <div class="carousel-caption">
       <!--    <h1 class="display-2">Welcome to Save Human Blood Bank......1</h1> -->
          <h3></h3>
         <!--  <button type="button" class="btn btn-ouline-light btn-lg ">Button</button>
          <button type="button" class="btn btn-ouline-light btn-lg  btn-primary">Button</button> -->
        </div>
      </div>

      <div class="item">
        <img src="images/blood3.jpg" style="width:100%; height: 350px;">
        <div class="carousel-caption">
          <!-- <h1 class="display-2">Welcome to Save Human Blood Bank</h1> -->
  
        </div>
      </div>
    
      <div class="item">
        <img src="images/blood4.jpg"  style="width:100%; height: 350px;">
        <div class="carousel-caption">
          <!-- <h1 class="display-2">Welcome to Save Human Blood Bank 3</h1> -->
  
        </div>
      </div>
    </div>

    <!-- Left and right controls -->

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<<div class="container" >
  <div class="box">
    <div  class="row">
      <div class="col-lg-"></div>
      <div class="col-lg-11" style="background-color:black ;color: white; margin-left: 60px;width: 1047px">
        <hr>
        <h2  class="intro-text text-center" >
"Donate Today, You Never Know When you Need it!"
</h2>
        <hr>
      </div>
    </div>

    <div class="row"><br><br>
      
      <div class="col-lg-8" style="font-size: 17px;font-family: serif; word-spacing: 3px;margin-left: 50px; ">
           
                 <h2>Our Goal  <span class="fas fa-hand-point-down" style="font-size: 50px;color: red"></span></h2>
               <p style="line-height: 25px;font-family: serif; word-spacing: 3px;padding: 4px; align:justify">
                 We focus on creating & expanding a virtual army of blood donating volunteers 
                 who could be searched and contacted by family / care givers of a patient in 
                 times of need.<br>
                  The ingenuity of the
                   <strong style="color: red"> SaveHuman Islamabad -Blood Donors Network</strong>
                    is that it simply requires a volunteer to register on 
                    <strong><a href="#">www.saveHuman.com</a></strong>
                     and submit his/her contact details. Save-human collect or store blood.
                      Blood being a highly perishable, we insist that it should be stored in
                       the best vessel – The Human Body!
                     Through this digital platform, we urge you to fulfill your supreme duty
                      as a human being; to save a life, by becoming a proud registered volunteer.
                    </p> 

                <span class="class="  fa fa-chevron-circle-right""></span>

               <ul>
                 <li>You may register as blood donor (Your 1 unit of blood can save 3 lives)</li>
                 <li>Share opportunity with others – Build blood donors network
                     in your city/town by clicking  “Register Your friend”</li>
                 <li>Refer this website to all the people you know. They may
                     be interested in becoming part of this noble cause.</li>
                 <li>Use this site extensively to search for blood donors on 
                      behalf of family, friend or acquaintance.</li>
               </ul>



       </div>
       <div class="col-lg-1"></div>
       <div class="col-lg-3"  style="margin-top: 0px;background-color: red;color:white">
         <form class="text-center" method="POST" action="#" name="MyForm">

           <h2 class="text-center" style="font-family: serif">
            <b>Blood Seeker</b>
             </h2><hr>
           <div class="form-group" style="font-family: serif">
            
             <label><h4><b>City:</b></h4></label><br>
             <input type="text" name="City" style="color: red" class="form-control">
           </div>
           <div class="form-group" style="font-family: serif">
             <label><h4><b>Blood Group:</b></h4></label><br>
             <select class="form-control" name="SelectBlood">
              <option value="Blood">Select Blood Group Here</option>
               <option>A+</option>
               <option>A-</option>
               <option>B+</option>
               <option>B-</option>
               <option>AB+</option>
               <option>AB-</option>
               <option>O+</option>
               <option>O-</option>
             </select>
           </div><br>
           <div class="form-group">
             <button class="btn btn-default" name="Search" style="font-size: 20px;font-family: serif;height: 40px;width: 150px;" onclick="return SearchVal()">Search Here </button>
           </div>
            <div class="form-group">
              <button class="btn btn-default" style="font-size: 20px;font-family: serif;      width: 200px;height: 40px;width: 180px;color:#731A0E ">
                    <a href="contactUs.php " style="text-decoration: none;color:green">Add Blood Request</a>
              </button>
           </div>
         </form>
       </div>
     </div>

  </div>
</div>

<br><br><br>
<!--  Footer syart from here -->
<?php include 'footer.php'; ?>
<?php include 'Marquee.php';?>
<!--  Footer End from here -->

</body>
</html>
<script type="text/javascript">
  function SearchVal()
{
  var CityVar=document.forms["MyForm"]["City"].value;
  var BloodGroupVar=document.forms["MyForm"]["SelectBlood"].value;
  
  //Name Validation Start From Here 
  var CityReg=/[A-za-z]{5,10}/;
  if (CityVar=="") {
    alert(" City Field cannot be left Empty ");
    return false;
  }
  if (!CityReg.test(CityVar)) {
    alert("Integer And Other Special character Are not Allowed");
  }
  
// Blood Group Validation Start From Here 
  if (BloodGroupVar=="Blood") {
    alert(" Blood Group Field cannot be left Empty");
    return false;
  }
 
}
</script>