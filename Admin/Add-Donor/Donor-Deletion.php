<?php 
include'Connection.php';

$id=$_GET['ID']; //fieled id
$deletion="DELETE FROM `add-donor` WHERE ID=$id";  //tabel id
mysqli_query($Connection,$deletion);
 header('location:Donor-Detail.php'); //  to ramian in the same page after deletion


 ?>