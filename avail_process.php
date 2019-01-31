<?php

echo "<style>







	

	li {

  font: 200 20px/1.5 Helvetica, Verdana, sans-serif;

  border-bottom: 1px solid #ccc;

   border: 1px solid black;

   

   margin: 10px 0;

   width: 200px;

   background-color: #4CAF50;

}

 

	</style>";

require "config.php";

$frarray = array("09:30:00","09:45:00","10:00:00","10:15:00" ,"10:30:00","10:45:00","11:00:00","11:15:00","11:30:00","11:45:00","12:00:00","12:15:00","13:30:00","13:45:00","14:00:00","14:15:00","14:30:00","14:45:00","15:00:00","15:15:00","15:30:00","15:45:00","16:00:00");

//print_r($array);

echo "<br>";

$date=$_GET["selDate"];

$date = new DateTime($date);

$date=$date->format('Y-m-d');

//$bkarray=array("09:30:00","09:45:00","10:00:00");

//echo $date;

$sql="select b_starttime from Bookings where b_date='$date'";


 $bkarray=array();



	
	foreach ($dbo->query($sql) as $row) {


		$bkarray[]=$row[b_starttime];

	}
	
if (empty($bkarray)){
	 $bkarray=array();
	}

echo "<br>";

$availarray=array();



$availarray = array_diff($frarray,$bkarray);

//print_r($availarray);



 echo "<ul>";

 foreach($availarray as $availval){

     echo "<li>".$availval."</li>";   
 }

echo "</ul>";



?>