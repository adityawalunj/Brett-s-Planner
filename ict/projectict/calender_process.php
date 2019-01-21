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
if(isset($_POST['select_date'], $_POST['fromtime'], $_POST['totime'])) {
	//make the database connection
	$conn  = db_connect();
	$date1 = $conn -> real_escape_string($_POST['select_date']);
	$fromtime = $conn -> real_escape_string($_POST['fromtime']);
	$totime = $conn -> real_escape_string($_POST['totime']);
	 
	
	//create an insert query 	
	$sql = "insert into personal_appointment(calendar, from_time, to_time) 
			VALUES ('$date1', '$fromtime', '$totime')";
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

