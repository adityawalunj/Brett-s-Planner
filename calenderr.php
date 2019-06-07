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















	















	<br>



    <form action="calender_process.php" method="post">










<h2> Select the date</h2>



<div id="Datepicker1"></div> 



<input type="date"  name="Datepicker1" id="select_date" class="form-control" style="width: 30%;margin-left: 35%">

<h2>Purpose<h2>
<input type="text"  name="purpose" id="select_date" class="form-control" style="width: 30%;height: 50%;margin-left: 35%">


<h2> Select the time</h2>







<div class="mainselection" id="mainselection">







<h2> Start Time </h2>  <select id="starttime" name="fromtime" >

<option>9:30 </option>

<option>10:30 </option>

<option>11:30 </option>

	<option>12:30 </option>

	<option>13:30 </option>

	<option>14:30 </option>

	<option>15:30 </option>

<option>16:00 </option>

  </select>































<h2> End Time </h2>  <select id="endtime" name="totime">

  <option>10:30</option>

 <option>11:30 </option>

<option>12:30 </option>

<option>13:30 </option>

<option>14:30 </option>

<option>15:30 </option>

 </select>

<input type=submit value=Confim class="btn btn-success" style="margin-top: 12px;margin-bottom: 15px">

<a style="margin-top: 12px;margin-bottom: 15px" id="check" class="btn btn-info">View Detail</a>

<!-- <a style="margin-top: 12px" id="check" class="btn btn-info">View Detail</a> -->

 </form>

 </div>

<br><table class="table table-stripped" style="color: white">

	<td><b>Date</b></td>

	<td><b>Start Time</b></td>

	<td><b>End Time</b></td>

	<td><b>Info</b></td>

	<td><b>Reshedule Appointment</b></td>

	<td><b>Cancel Appointment</b></td>

<?php

$date = @$_GET['date'];

$data = explode('?', $date);

$date = @$data[0];

$stime = @$data[1];

$etime = @$data[2];

include "conn.php";

$s = "SELECT * FROM Bookings where b_date='$date' AND b_purpose='personal'";

$r = mysqli_query($conn,$s);

while($row = mysqli_fetch_array($r))

{

	?>

<tr>

	<td><?php echo $row['b_date'] ?></td>

	<td><?php echo $row['b_starttime']; ?></td>

	<td><?php echo $row['b_endtime']; ?></td>

	<td><a href="viewdetail.php?id=<?php echo $row['b_id'] ?>" class="btn btn-info">Info</a></td>

	<td><a href="admin_reshedule.php?id=<?php echo $row['b_id'] ?>" class="btn btn-info">Reshedule</a></td>

	<td><a href="canceldetail.php?id=<?php echo $row['b_id']; ?>" class="btn btn-danger">Cancel</a></td>

</tr>

	<?php

}

?>

</table>





</div>



<div>



</div>



<p>&nbsp; </p>





<p>&nbsp; </p>





<script type="text/javascript">



$("#check").click(function(){

  var date = document.getElementById('select_date').value;

  var stime = document.getElementById('starttime').value;



  var etime = document.getElementById('endtime').value;

  window.location.href="calenderr.php?date="+date+"?"+stime+"?"+etime;

});



$(function() {





	$("#select_date").datepicker({ minDate:new Date(),



		numberOfMonths:1



}); 



});





  </script>



</div>



<div class="footer">







  &copy; Copyright 2019 Brett's Planner







</div>



</body>

</html>