 
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #db2e36; padding: 0px">
  <div class="col-lg-2"></div>

<span class="fas fa-hand-holding-heart" style="font-size: 70px;color: white; margin-left: -75px"><span style="font-size: 30px;margin-left: 20px;">Save Human Blood Bank</span></span><hr>
    <div class="container" >
       
           <button class="navbar-toggle"  type="button"  data-target="#response" data-toggle="collapse" >
       <span class="navbar-toggle-icon"></span>
       </button>

      <div class="collapse navbar-collapse " id="response">

         <?php 
    // session_start();
     if (isset($_SESSION['SessionName'])) 
     {
      ?>
<ul class=" nav navbar-nav" style="margin-left: 31px;" >
 
   <li class="navbar-item"><a href="../Add-Donor/Donor-Detail.php"  style="color: white">Donor Details</a></li>
index  <li class="navbar-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white">Blood Managemen<span class="caret"></span></a>

     <ul class="dropdown-menu" style="background-color: #bc090c">
         <li class="navbar-item"><a href="../Admin/Add-Blood.php" class="nav-link" style="color: white"> Add Blood</a></li>
         <li class="navbar-item"><a href="../Admin/Blood-Setail.php" class="nav-link" style="color: white;"> Blood Detail</a></li>
             </ul>
            </li>

             <li class="navbar-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: white">Stock Management<span class="caret"></span></a>

                   <ul class="dropdown-menu" style="background-color: #bc090c">
                     <li class="navbar-item"><a href="../Admin/Add-Stock.php" class="nav-link" style="color: white"> Add Stock</a></li>
                     <li class="navbar-item"><a href="../Admin/Admin-PHP/Stock/Stock-Detail.php" class="nav-link" style="color: white;"> Stock Detail</a></li>
                   </ul>
                 </li>
    
               <li class="navbar-item dropdown"><a href="../Admin/contact/contactDetail.php" class="nav-link " style="color: white">Blood Required</a></li>
              <li class="navbar-item dropdown"><a href="../Admin/Change-Password.php" class="nav-link " style="color: white">Change Password</a></li>
              <li class="navbar-item dropdown"><a href="../Admin/logout.php" class="nav-link " style="color: white">LogOut</a></li>
            
          </ul>

   <?php }  else { ?>
      <ul class=" nav navbar-nav  " style="margin-left: 31px;" >

          <li class="navbar-item dropdown"><a href="index.php" class="nav-link" style="color: white">Home</a></li>
           <li class="navbar-item dropdown"><a href="Add-Donor.php" class="nav-link" style="color: white">Registration</a></li>
         
          <li class="navbar-item"><a href="Emergency-Number.php" class="nav-link" style="color: white">Emergency#</a></li>
           <li class="navbar-item"><a href="contactUs.php" class="nav-link" style="color: white">Contact Us</a></li>
          <li class="navbar-item"><a href="aboutus.php" class="nav-link" style="color: white">About</a></li>
           <li class="navbar-item"><a href="Admin/AdminLogin.php"  style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          
       </ul>
     <?php }

      ?>

     


         <ul class="nav navbar-nav navbar-right">
                   <a href="#">
                     <span class="fab fa-facebook-square" style="font-size: 30px;color:white;padding: 5px;"></span>
                   </a>
                    <a href="#">
                      <span class="fab fa-instagram" style="font-size: 30px;color:white; padding: 5px;"></span>
                    </a>
                    <a href="#">
                      <span class="fab fa-twitter-square" style="font-size: 30px;color:white;padding: 5px;"></span>
                    </a>
                    <a href="#">
                      <span class="fas fa-envelope" style="font-size: 30px;color:white;padding: 5px;"></span>
                    </a>
                   </ul>

              </li>
             </ul> 

      </div>
</div>
 </nav><br><br><br>
 
<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #db2e36; padding: 0px">
  <div class="col-lg-2"></div>

<span class="fas fa-hand-holding-heart" style="font-size: 70px;color: white; margin-left: -75px"><span style="font-size: 30px;margin-left: 20px;">Save Human Blood Bank</span></span><hr>
    <div class="container" >
       
           <button class="navbar-toggle"  type="button"  data-target="#response" data-toggle="collapse" >
       <span class="navbar-toggle-icon"></span>
       </button>

      <div class="collapse navbar-collapse " id="response">

         <?php 
    
      <ul class=" nav navbar-nav  " style="margin-left: 31px;" >

          <li class="navbar-item dropdown"><a href="index.php" class="nav-link" style="color: white">Home</a></li>
           <li class="navbar-item dropdown"><a href="Add-Donor.php" class="nav-link" style="color: white">Registration</a></li>
         
          <li class="navbar-item"><a href="Emergency-Number.php" class="nav-link" style="color: white">Emergency#</a></li>
           <li class="navbar-item"><a href="contactUs.php" class="nav-link" style="color: white">Contact Us</a></li>
          <li class="navbar-item"><a href="aboutus.php" class="nav-link" style="color: white">About</a></li>
           <li class="navbar-item"><a href="Admin/AdminLogin.php"  style="color: white"><span class="glyphicon glyphicon-log-in"></span> Login</a>
          
       </ul>
     <?php }

      ?>

     


         <ul class="nav navbar-nav navbar-right">
                   <a href="#">
                     <span class="fab fa-facebook-square" style="font-size: 30px;color:white;padding: 5px;"></span>
                   </a>
                    <a href="#">
                      <span class="fab fa-instagram" style="font-size: 30px;color:white; padding: 5px;"></span>
                    </a>
                    <a href="#">
                      <span class="fab fa-twitter-square" style="font-size: 30px;color:white;padding: 5px;"></span>
                    </a>
                    <a href="#">
                      <span class="fas fa-envelope" style="font-size: 30px;color:white;padding: 5px;"></span>
                    </a>
                   </ul>

              </li>
             </ul> 

      </div>
</div>
 </nav><br><br><br>
