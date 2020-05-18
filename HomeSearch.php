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
		?>
		 <script type="text/javascript">
		 	alert("Blood Is Avialable");
		 </script>
		<?php  
	}
	else {
	     ?>
		 <script type="text/javascript">
		 	alert(" Sorry Dear Blood Is Not Avialable At This Momebt");
		 </script>
		<?php
	}
}



  ?>