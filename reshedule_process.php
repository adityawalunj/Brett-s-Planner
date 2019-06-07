<?php



require "head.php";



require "config.php";





$emailid=$_POST["email"];
$currentdate=date("Y-m-d");


$sql="select * from Bookings where b_email='$emailid' AND b_date >='$currentdate'";



$result1 = $dbo->query($sql);



$row = $result1->fetch();



if ($row) 



{

$result = $dbo->query($sql);



echo "<h2> Your booking details </h2>";



foreach ($result as $row) 



{

$bookid=$row[b_id];

echo" NAME: $row[b_name]


<br>EMAIL:$row[b_email]";



$date = new DateTime($row[b_date]);



$date=$date->format('d-m-Y');



echo"<br>DATE:$date



<br>TIME: $row[b_starttime]



<br><form action =delprocess.php?man=$bookid  method = POST> 



<input type=submit onclick=myFunction() value=Cancel> </form><br>



<form action =check.php method = POST> 



<input type=submit onclick=myFunction() value=Modify> </form>







";



}



}



else



{



echo "<h2> Please check the mail id </h2>

<button><a href=admin_rshedule.html>Back to Manage Booking</a></button>";









}



?>

