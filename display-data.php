<html><body><table border=2 cellspacing=1 cellpadding=1><tr align="center">

<body>

<?Php

echo "<style >

table, th, td {
  border: 1px solid black;
}

table.center {
    margin-left:auto; 
    margin-right:auto;
  }

h3 {
	text-align:center;
    font-size: 24px;
    line-height: 40px;
}




</style>";

require "config.php"; // Database Connection 

$date=$_GET['selectedDate'];

echo"<h3> Appointments on ";  echo $date;
echo"</h3>";

$date = new DateTime($date);




$date=$date->format('Y-m-d');






//echo $date;

$sql="select * from Bookings where b_date ='$date' AND b_type='student'";

echo "<table width=2000>";

echo "<tr>";

           echo"<td>Name</td>";

            echo"<td>Email</td>";

            echo"<td>Start Time</td>";
			
			echo"<td>End Time</td>";

            echo"<td>Purpose</td>"; 
			
			 echo"<td>Type</td>"; 

        echo"</tr>";
		
	



foreach ($dbo->query($sql) as $row) {

echo"<tr>";

           echo "<td>$row[b_name]</td>

            <td><a href=mailto:$row[b_email]>$row[b_email]</td>

            <td>$row[b_starttime]</td>
			
			<td>$row[b_endtime]</td>

            <td>$row[b_purpose]</td>
			
			<td>$row[b_type]</td>
			 



        </tr>";



//echo "$row[Name]: $row[Email]:$row[Time]: $row[Purpose]<br>";

}

echo"</table>";

?>

</body>

</html>