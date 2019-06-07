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




require "config.php";



$frarray = array("09:30:00","09:45:00","10:00:00","10:15:00" ,"10:30:00","10:45:00","11:00:00","11:15:00","11:30:00","11:45:00","12:00:00","12:15:00","13:30:00","13:45:00","14:00:00","14:15:00","14:30:00","14:45:00","15:00:00","15:15:00","15:30:00","15:45:00","16:00:00");



//print_r($array);



echo "<br>";




$date=$_GET["selectedDate"];



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
echo " <form action = register.php method = POST>";

echo "<h2> Available time slots please select one to proceed booking </h2>";


echo  "<select name=time>";

 foreach($availarray as $availval)
{
echo "<option>$availval</option>";
}

echo "</select>";


echo "<input type=submit value=Confirm> </form> ";



session_start();


$_SESSION["d"] = $date;






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
