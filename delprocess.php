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
    
    <li><a href="Book.html">Book Appointment</a></li>
    <li><a href="managebookings.html">Manage Bookings</a></li>
    <li><a href="aboutus.html">About</a></li>
        
    </ul>
    </div>
    
<?php

require "head.php";
require "config.php";


$man_id=$_GET['man'];
$count=$dbo->prepare("DELETE FROM Bookings WHERE b_id=$man_id");
$count->execute();
<p style="font-size:15px; font-color: green;"><?php echo "<br><br><br><br><br><br>Your booking is cancelled sucessfully" ; ?> </p>

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
