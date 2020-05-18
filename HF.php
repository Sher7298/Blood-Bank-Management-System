

<?php session_start();  ?>




<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Management System</title>
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

<meta charset="utf-8">
 <!-- Form Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
</head>
<body>

 <div class="containerfluid" >
  <div class="row" style="background-color: #BD4232">
    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><span class="fas fa-hand-holding-heart" style="font-size: 70px;color: white;"><span style="font-size: 30px;margin-left: 10px;">Save Human Lives</span></span>
  </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
      
    </div>
</div>






<!--  Footer syart from here -->
<footer class="page-footer text-center" style="background-color:#F70F24">
  
    <div class="row">
      <div class="col-lg-12">
       
        <h3><span class="glyphicon glyphicon-user" ></span> © Copyrights  2018 Divisions of SaveHuman Blood Bank. </h3>

      </div>
            
    </div>
  </div>
</footer><!--  Footer End from here -->
</body>
</html>


