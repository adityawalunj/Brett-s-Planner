



<html>

<head>

	<title>Reschedule Bookings </title>

</head>	

	<body>









<h1> RESCHEDULE BOOKINGS</h1>

	<h2> Enter the booking id  <form action = "" method = "POST">

		<input type="text" name="man" size=30> 

		<input type=submit value=Check> </form></h2>

</body>





<?php

require "head.php";

require "config.php";



$bookingid=$_POST["man"];







$sql="select * from Bookings where b_id=$bookingid";



if ($dbo->query($sql) != 0){





foreach ($dbo->query($sql) as $row) {



     echo" NAME: $row[b_name]

         <br>EMAIL:$row[b_email]";

		

$date = new DateTime($row[b_date]);







$date=$date->format('d-m-Y');













		echo"	<br>DATE:$date

          





            <br>TIME: $row[b_starttime]



			

           <br><button><a href=manage1.php>Back</a></button>



			 



<button><a href=manage1.php?todo=delete&manid=$row[b_id]>modify</a></button>";

	

	

$todo=$_REQUEST['todo'];



echo $todo;



if($todo=='delete'){



	



$man_id=$_GET['manid'];



$count=$dbo->prepare("DELETE FROM Bookings WHERE b_id=$man_id");







$count->execute();

	echo "Your booking is cancelled sucessfully";



}



}

}

else

{

echo "no bookings found";

}























?>