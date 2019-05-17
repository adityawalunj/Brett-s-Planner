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

if(isset($_POST['id'],$_POST['note'])) {

	//make the database connection

	$conn  = db_connect();
        $id = $conn -> real_escape_string($_POST['id']);

	$note = $conn -> real_escape_string($_POST['note']);
	   

	
	




	 

	

	//create an insert query 	

	$sql = "insert into Notes (id,note) 

			VALUES ($id,'$note')";

	//execute the query

	if($conn -> query($sql))

	{



		echo "<h1></h1>";

		echo "<p>Hi inserted sucessfully <b>$note</b></p>";



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



