<?php



require "head.php";

require "config.php";

$time = $_POST['time'];


session_start();


 $NAME=$_SESSION["n"];

$ID=$_SESSION["i"];


$EMAIL=$_SESSION["e"];


$MOBILE=$_SESSION["m"];


$REASON=$_SESSION["r"];

$date=$_SESSION["d"];

$sql = "insert into Bookings(b_date,b_stid,b_name,b_email,b_phone,b_starttime,b_purpose,b_type) 

			VALUES ('$date', '$ID', '$NAME','$EMAIL','$MOBILE','$time','$REASON','student')";

	//execute the query

	if($dbo -> query($sql))

	{



		echo "<h1></h1>";

		echo "<h2>Your appointment is sucessfully booked<h2>";



	}

			

else {

	echo " Please try again ";

}



?>