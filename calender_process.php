<?php

//must appear BEFORE the <html> tag

include_once('include/config.php');	

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title> process </title>

</head>



<?php

if(isset($_POST['id1'],$_POST['select_date'], $_POST['fromtime'], $_POST['totime'])) {

	//make the database connection

	$conn  = db_connect();
        $id = $conn -> real_escape_string($_POST['id1']);

	$date1 = $conn -> real_escape_string($_POST['select_date']);
	     $date1 = new DateTime($date1);
        $date1=$date1->format('Y-m-d');

	$fromtime = $conn -> real_escape_string($_POST['fromtime']);

	$totime = $conn -> real_escape_string($_POST['totime']);
	




	 

	

	//create an insert query 	

	$sql = "insert into Bookings (b_id,b_date, b_starttime, b_endtime) 

			VALUES ('$id','$date1', '$fromtime', '$totime')";

	//execute the query

	if($conn -> query($sql))

	{



		echo "<h1></h1>";

		echo "<p>Hi inserted sucessfully <b>$name</b></p>";



	}

	$conn -> close();		

}

else {

	die("Input error");

}

?>    



</div>

</body>

</html>



