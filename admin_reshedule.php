<?php

include('conn.php');

$id = $_GET['id'];

$s = "SELECT * FROM Bookings where b_id='$id'";

$r = mysqli_query($conn,$s);

$row = mysqli_fetch_array($r);

$email = $row['b_email'];

?>

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







    <a href="login.php">Logout</a>







    







  </div>







</div>















</div>

<div class="col-3 col-s-12">







<div class="holder" id="Holder">







	<br>



    <form method="post">





<h4> Select the date For Reshedule</h4>



<div id="Datepicker1"></div> 



<input type="date"  name="date" id="select_date" class="form-control" style="width: 30%;margin-left: 35%">



<h4> Select the time For Reshedule</h4>



<div class="mainselection" id="mainselection">

<h4> Start Time </h4>

<select id="starttime" name="stime" >

<option>9:30 </option>

<option>10:30 </option>

<option>11:30 </option>

	<option>12:30 </option>

	<option>13:30 </option>

	<option>14:30 </option>

	<option>15:30 </option>

<option>16:00 </option>

  </select>



<h4> End Time </h4>  

<select id="endtime" name="etime">

  <option>10:30</option>

 <option>11:30 </option>

<option>12:30 </option>

<option>13:30 </option>

<option>14:30 </option>

<option>15:30 </option>

 </select>

<input type=submit value=Confim class="btn btn-success" style="margin-top: 12px;margin-bottom: 15px" name="submit">

<!-- <a style="margin-top: 12px;margin-bottom: 15px" id="check" class="btn btn-info">View Detail</a> -->

<!-- <a style="margin-top: 12px" id="check" class="btn btn-info">View Detail</a> -->

 </form>

 </div>

<br>





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





<?php

include('conn.php');

if(isset($_POST['submit']))

{

	/*$email = $_POST['email'];*/

	$date = $_POST['date'];

	$time = $_POST['stime'];

	$etime = $_POST['etime'];

	$up = "UPDATE Bookings set b_date='$date',b_starttime='$time',b_endtime='$etime' where b_id='$id'";

	$r = mysqli_query($conn,$up);

	if ($r) {



	require @ "Mail.php";

        $to      = "sharonantony04@gmail.com";

        $from    = "myemail@here.com"; // the email address

        $subject = "hiii";

        $body    = "Your Appointment Was Resheduled at ".$date.' '.$time;



        $host    = "smtp.gmail.com";

        $port    =  "587";

        $user    = "sharonantony04@gmail.com";

        $pass    = "24*7qualityworking";

        $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);

        $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));

        $mail    = @$smtp->send($to, $headers, $body);



        if (PEAR::isError($mail)){

            echo "error: {$mail->getMessage()}";

        } else {

            echo "Message sent";

        }

	?>

	<script type="text/javascript">alert("Booking Reshedule Successfully Done");window.location.href="calenderr.php";</script>

	<?php

}

else

{

 ?>

	<script type="text/javascript">alert("Something Went Wrong");window.location.href="admin_reshedule.php";</script>

	<?php

}

}

?>

<style type="text/css">

	h4

	{

		color: white;

	}

</style>