<?Php



echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\">

<html>

<head>

<title>Cancellation</title>



";

require "head.php";



echo "<style >

.na_dates {

    background-color: Green !important;

    background-image :none !important;

    color: #ffffff !important;

}

</style></head><body>";



require "config.php"; // Database Connection 



$todo=$_REQUEST['todo'];



if($todo=='delete'){

	

$event_id=$_GET['event_id'];

$count=$dbo->prepare("DELETE FROM plus2net_event WHERE event_id=:event_id");

$count->bindParam(":event_id",$event_id,PDO::PARAM_INT,3);

$count->execute();	

}

if($todo=='add'){
$event_id=$_GET['bid'];
echo $event_id;
$sql="select * from Bookings where bdate=:event_id";

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
}
echo "<br><br>

Date: <form method=post action=''><input type=hidden name=todo value=add><input type='text'  name=bid> <input type=text name=event size=80><input type=submit value='Add'></form>

<br><br><br>";

$sql="select * from Bookings order by b_date desc";

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



<script>

$(document).ready(function() {

////////////



$(function() {

    $( "#date_picker" ).datepicker({

dateFormat: 'dd-mm-yy'

});

});

//////////////////////////

/////////////

})

</script>



<?Php

require "../footer.php";

?>

</body>

</html>

