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
    <li><a href="\Update/new/Home.html">Home</a></li>
    
    <li><a href="\Update/new/Book.html">Book Appointment</a></li>
    <li><a href="\Update/new/managebookings.html">Manage Bookings</a></li>
    <li><a href="\Update/new/aboutus.html">About</a></li>
        
    </ul>
    </div>
<?php



require "head.php";

require "config.php";

$time = $_POST['time'];


session_start();


 $NAME=$_SESSION["n"];

$ID=$_SESSION["i"];


$EMAIL=$_SESSION["e"];


$MOBILE=$_SESSION["m"];


$REASON=$_SESSION["r"];

$date=$_SESSION["d"];

$sql = "insert into Bookings(b_date,b_stid,b_name,b_email,b_phone,b_starttime,b_purpose,b_type) 

			VALUES ('$date', '$ID', '$NAME','$EMAIL','$MOBILE','$time','$REASON','student')";

	//execute the query

	if($dbo -> query($sql))

	{



		echo "<h1></h1>";

		echo "<h2><b><br><br><br><br><br>&nbspYour appointment is sucessfully booked<br><br><h2>";
        
    $sql1="Select * from Bookings where b_date='$date' AND b_starttime='$time'";
   
   foreach ($dbo->query($sql1) as $row)
    {
       $bkid=$row[b_id];
      
    }

                   
      $message=
      " Your booking with Brett is confirmed.Please note the Booking Id.
        
        Your bookind id is : $bkid 
        Date : $date
        Time : $time
        Click the link below to see the details and to cancel the appointment
        http://portal.ictatjcub.com/managebookings.html ";

      mail($EMAIL,"Appointment Confirmed with Brett",$message,"From:Do not reply@breet.com");
      
     echo "A confirmation mail has been send to your Mail ID ";
        
      


	}

			

else {

	echo " Please try again ";

}




session_destroy();





?>
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