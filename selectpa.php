
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>    
    <ul class ="nav-area">
    <li><a href="Home.html">Home</a></li>
    <li><a href="Book.html">Book Appointment</a></li>
    <li><a href="managebookings.html">Manage Bookings</a></li>
    <li><a href="aboutus.html">About</a></li>    
    </ul>
 </div>   
<a class="menutoggle" onclick="openNav()">&#9776;</a>



    <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<style>
    .row{
        text-align: center;
        margin-left: 15px;
        margin-right: 15px;
    }
     
    .manage{
        text-align: center;
        margin-left: 15px;
        margin-right: 15px;
    }
    .manage input {
    width: 100%;
    }
    #mySidenav{
        position: absolute;
        width: 100%;
        background-color: transparent;
    }
    .closebtn, .menutoggle{display:none;
    }
    
    input, textarea {
    margin-top: 13px;
    width: 50%;
   }
    .sidenav a:hover {
      color: #f1f1f1;
    }
    
    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
@media only screen and (max-width: 600px) {

    #mySidenav{
        
        width: 0;
        background-color:#000;
        height:100%;
        z-index: 1111;
    }
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block !important;
      transition: 0.3s;
    }
    .closebtn, .menutoggle{display:block;
    }
    .nav-area li{
        display:block;
        padding-bottom:10px;
    }

}

@media only screen and (max-width: 992px) {

    #mySidenav{
        
        width: 0;
        background-color:#000;
        height:100%;
        z-index: 1111;
    }
    .sidenav a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block !important;
      transition: 0.3s;
    }
    .closebtn, .menutoggle{display:block;
    }
    .nav-area li{
        display:block;
        padding-bottom:10px;
    }

}


.menutoggle {
    font-size: 30px;
    cursor: pointer;
    position: absolute;
    top: 0px;
    float: right;
    right: 10PX;
}
</style>
	<!-- <ul class ="nav-area">
    <li><a href="Home.html">Home</a></li>
    
    <li><a href="Book.html">Book Appointment</a></li>
    <li><a href="managebookings.html">Manage Bookings</a></li>
    <li><a href="aboutus.html">About</a></li>
        
    </ul> -->
    </div>
    
 
<script type="text/javascript" >
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
echo "<div class='' style='padding:15% 15% 10% 20%;color:white'>";
echo "<h2 style='font-size:20px'> Your booking details </h2>";

foreach ($result as $row) 

{


echo" BOOKING ID : $row[b_id] 
<br>NAME: $row[b_name]

<br>EMAIL:$row[b_email]";

$date = @new DateTime($row[b_date]);

$date=$date->format('d-m-Y');

echo"<br>DATE:$date

<br>TIME: $row[b_starttime]
<br><b>Please Note Down the Booking Id to Make Changes to your Appointment: $row[b_id]<b>
<br><form action =delprocess.php?man=$bookingid  method = POST> 

<button class='btn btn-info' type=submit onclick=myFunction() value=CancelAppointments style='width:auto'>Cancel Appointment </button></form>
<a href='managebookings.html' class='btn btn-success'>Back</a>
<button><a href=managebookings.html></a></button>";
echo "</div>";

}

}

else

{

echo "<h2 id=\"test\"> Please check the Booking id and Mail id </h2>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><button><a href=managebookings.html>Back to Manage Booking</a></button>";




}

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




