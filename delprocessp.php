<!doctype html>
<html>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">

<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">

<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>

<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js"></script>

<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<head>

<link rel="stylesheet" type="text/css" href="personal1.css">

	<style>



	.ui-datepicker td.ui-state-disabled>span{background:#c30;}


.ui-datepicker td.ui-state-disabled{opacity:100;}	


	</style>



<meta charset="utf-8">


<title>Calendar</title>







</head>















<body>



<div class="header">



<a><img src="jcu3.png" alt="Paris" style="width:150px"></a>







 



 



 



 



  <a href="Home.html" class="logo"></a>



  <div class="header-right">



    



    <a href="display.php">View Calendar</a>
     <a href=note.php>Personal Notes</a>



    <a class="active" href="calendar.html">Personal Appointment</a>
 <a href=managebookingp.html>Manage Booking</a>



    <a href="login.php">Logout</a>



    



  </div>



</div>











<div class="col-3 col-s-12">



<div class="holder" id="Holder">


<?php



require "head.php";

require "config.php";





$man_id=$_GET['man'];

$count=$dbo->prepare("DELETE FROM Bookings WHERE b_id=$man_id");

$count->execute();





echo "<h1><br><br><br><br><br><br>Appointment Cancelled Successfully</h1>";

?>

    

