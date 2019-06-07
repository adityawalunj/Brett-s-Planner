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


<?Php



require "head.php";

require "config.php";

session_start();

$NAME=@$_POST['name1'];

$ID=$_POST['id1'];

$EMAIL=$_POST['email'];

$MOBILE=$_POST['phone'];

$REASON=$_POST['Reason'];



$_SESSION["n"] = $NAME;

$_SESSION["i"] = $ID;


$_SESSION["e"] = $EMAIL;


$_SESSION["m"] = $MOBILE;


$_SESSION["r"] = $REASON;












echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\">







<html>







<head>







<title>Check Availability</title>







<META NAME=\"DESCRIPTION\" CONTENT=\"view calendar admin\">







<META NAME=\"KEYWORDS\" CONTENT=\"view calendar admin\">















";







require "head.php";





echo "<style >



.ui-widget { font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif; font-size: 30px;   }



.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {



    color: green;



    background: lightgreen;



}



.ui-state-disabled .ui-state-default {



    color: red;



    background: Black;



}







#ui-datepicker-div { font-size:40px; }







.na_dates {







    background-color: Red !important;







    background-image :none !important;







    color: #f70404 !important;







}







</style></head><body>";















require "config.php"; // Database Connection 























  















?>





<div class="col-6 col-s-6">
<center>
	<h1 style= "color:#fff"><b><br><br><br><br><br><br>&nbspSelect the day to check the availability<br><br></b></h1> 

<div id="date_picker"></div>
</center>
<br><br><br>

</div>







<div id=d1></div>















<script>







$(document).ready(function() {



function checkDate(selectedDate) {



<?Php



$q="select distinct date_format( Date, '%d-%m-%Y' ) as Date from Student";

$str="[ ";

foreach ($dbo->query($q) as $row) {


$str.="\"$row[Date]\",";


}


$str=substr($str,0,(strlen($str)-1));


$str.="]";




echo "var not_available_dates=$str"; // array is created in JavaScript 















?>	















 var m = selectedDate.getMonth()+1;







 var d = selectedDate.getDate();







 var y = selectedDate.getFullYear();







 m=m.toString();







 d=d.toString();







if(m.length <2){m='0'+m;} 







if(d.length <2){d='0'+d;}  







 var date_to_check = d+ '-' + m + '-'  + y ;







 







 for (var i = 0; i < not_available_dates.length; i++) {







 







 







 if ($.inArray(date_to_check, not_available_dates) != -1 ) {







 return [true,'	',''];







 }else{







return [false,'na_dates',''];







}







} 







} 















$(function() {







    $( "#date_picker" ).datepicker({inline:true,







dateFormat: 'dd-mm-yy',



minDate:new Date(),



				beforeShowDay:function (dt) {



    return [dt.getDay() == 0 || dt.getDay() == 6 ? false : true];



				},







onSelect:function() {







selectedDate = $('#date_picker').val();


alert(selectedDate);

window.location.href='avail_process.php?selectedDate='+selectedDate;


var url="avail_process.php?selectedDate="+selectedDate;







$('#d1').load(url);







  }







});







});















})







</script>

































</body>







</html>

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








