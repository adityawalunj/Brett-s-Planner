<?php
require "head.php";
require "config.php";	
?>
<!doctype html>
<html>
<head>

<title> process </title>
</head>

<?php
if(isset($_POST['Datepicker1'], $_POST['fromtime'], $_POST['totime'])) {
	$date1 = $_POST['Datepicker1'];
	$date = new DateTime($date1);
    $date=$date->format('Y-m-d');
	$ftime = $_POST['fromtime'];
	$ttime = $_POST['totime'];
	 
	
	//create an insert query 	
	$sql = "insert into Bookings(b_date,b_starttime, b_endtime,b_purpose) 
			VALUES ('$date', '$ftime', '$ttime','personal')";
	//execute the query
	if($dbo -> query($sql))
	{

		echo "<h1></h1>";
		echo "<h2>Your personal appointment is sucessfully booked<h2>";

	}
			
}
else {
	die("Input error");
}
?>    

</div>
</body>
</html>

