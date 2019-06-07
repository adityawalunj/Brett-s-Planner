<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Brett's Planner Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="bookjs.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
<div class = "wrapper">
	<div class = "logo">
    <img src = "JCUB.png" alt="JCU Campus Logo">
    
    </div>
    
	<ul class ="nav-area">
    <li><a href="Home.html">Home</a></li>
    <li><a href="check_availability1.html">Availability</a></li>
    <li><a href="Book.html">Book Appointment</a></li>
    <li><a href="managebookings.html">Manage Bookings</a></li>
    <li><a href="aboutus.html">About</a></li>
        
    </ul>
    </div>
    <div>
<script>
function myFunction() {
  var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                                  return true;
               } else {
                  document.write ("Your appoinment is NOT CANCELLED ");
                  return false;
               }
}
</script>

<?php

require "head.php";

require "config.php";

$bookingid=$_POST["man"];

$emailid=$_POST["email"];

$sql="select * from Bookings where b_id='$bookingid' AND b_email='$emailid'";

$result1 = $dbo->query($sql);

$row = $result1->fetch();

if ($row) 

{
$result = $dbo->query($sql);

echo "<h2> Your booking details </h2>";

foreach ($result as $row) 

{

echo" NAME: $row[b_name]

<br>EMAIL:$row[b_email]";

$date = new DateTime($row[b_date]);

$date=$date->format('d-m-Y');

echo"<br>DATE:$date

<br>TIME: $row[b_starttime]

<br><form action =delprocess.php?man=$bookingid  method = POST> 

<input type=submit onclick=myFunction() value=Cancel> </form>

<button><a href=manage1.php>Back</a></button>";

}

}

else

{

echo "<h3 style=color:#FFFF00> Please check the Booking id and Mail id </h3>";




}

?>
    </div>
    </header>




<div class ="footer-main-div">
<div class ="footer-icons">
<ul>
	
    <li><a href="https://www.facebook.com/JCUBrisbane/" ><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/jcubrisbane?lang=en" ><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/jcubrisbane/?hl=en" ><i class="fa fa-instagram"></i></a></li>
    <li><a href="https://www.linkedin.com/in/brett-vance-63869b92/" ><i class="fa fa-linkedin"></i></a></li>
    <li><a href="https://www.youtube.com/channel/UCdEQAn1al8CdJhEOYcDOOeQ" ><i class="fa fa-youtube"></i></a></li>
</ul>
</div>
<div class="footer-menu">
    <ul>
    	<li><a href="Home.html">Home</a></li>
        <li><a href="https://www.jcub.edu.au/">JCUB</a></li>
        <li><a href="https://www.jcub.edu.au/current-students/the-learning-hub/library/">Library</a></li>
        <li><a href="https://www.jcub.edu.au/about/staff/student-services/">Services</a></li>
        <li><a href="https://www.jcub.edu.au/current-students/the-learning-hub/learning-advisors/">Advisors</a></li>
        <li><a href="https://www.jcub.edu.au/current-students/the-learning-hub/learning-workshops/">Workshops</a></li>
        <li><a href="https://www.jcub.edu.au/contact/">Contact</a></li> 
        <li><a href="privacy.html">Privacy Policy</a></li> 
    </ul>
</div>

</div>



</body>


</html>




