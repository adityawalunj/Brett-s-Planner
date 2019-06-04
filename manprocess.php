<?php
require "head.php";
require "config.php";

$bookingid=$_GET["man"];

$sql="select * from Bookings where b_id=bookingid";



echo "<table width=500>";



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

			 

<td><a href=add.php?todo=delete&event_id=$row[b_id]>Delete</a></td>





        </tr>";









}



echo "</table>";





?>