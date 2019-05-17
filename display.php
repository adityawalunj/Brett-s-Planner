<?Php















echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\">







<html>







<head>







<title>View Calendar Admin</title>







<META NAME=\"DESCRIPTION\" CONTENT=\"view calendar admin\">







<META NAME=\"KEYWORDS\" CONTENT=\"view calendar admin\">

















";



require "head.php";









echo"<head>

<div class=header>

</a>

</div>

</head>";





echo "<style>





* {box-sizing: border-box;}



body { 

  margin: 0;

  font-family: Arial, Helvetica, sans-serif;



  background-image: url(7.jpg);

  background-color: #cccccc;



}



.header {

  overflow: hidden;



  padding: 5px ;

	border-radius: 10px;

}



.header a {

  float: left;

  color: black;

  text-align: center;

  padding: 8px;

  text-decoration: none;

  font-size: 18px; 

  line-height: 25px;

  border-radius: 10px;
  

	

}





  .header a.img { 

  border: 4px rgba(41,81,103,0.16);

  border-radius: 4px;

  padding: -50px;

  width: 140px;

 position: absolute;

}

	

	





.header a:hover {

  background-color: rgba(97,95,95,0.49);

  color: whitesmoke;

}



.header a.active {

  background-color: dodgerblue;

  color: white;

}



.header-right {

 
  float: right;
  padding: 5px;
  
 
  
	

}



@media screen and (max-width: 500px) {

  .header a {

    float: none;

    display: block;

    text-align: left;
    

	  

	  

  }

  

  .header-right {

    float: none;

     

  }

}

/* Create three unequal columns that floats next to each other */

.column {

  float: left;

  padding: 10px;

}









/* Middle column */

.column.middle {

  width: 50%;

}



/* Clear floats after the columns */

.row:after {

  

  display: table;

  clear: both;

}



/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */

@media screen and (max-width: 600px) {

  .column.side, .column.middle {

    width: 100%;

  }

}

	













.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {



    color: green;



    background: lightgreen;



}



.ui-widget { font-family: Trebuchet MS, Tahoma, Verdana, Arial, sans-serif; font-size: 40px;   }



.ui-state-disabled .ui-state-default {



    color: white;

	

	





    background: grey;



}



.ui-datepicker-week-end a {

   background-color: grey;

   color: grey !important;

}





<?php include 'rwd.css'; ?>







.na_dates {







    background-color: grey !important;







    background-image :none !important;







    color: #f70404 !important;







}



.ui-datepicker-week-end a {

   background-color: grey;

}



     





</style></head><body>


<div class=header>

<a><img src=jcu3.png alt= Paris style= width:140px ></a>

  <div class=header-right>


    

    <a class=active href=display.html>View Calendar</a>

    <a href=calendar.html>Personal Appointment</a>

    <a href=login.php>Logout</a>

  </div>

</div>











";















require "config.php"; // Database Connection 

















?>







<div class="col-6 col-s-6">

<div id="date_picker"></div>

<br><br><br>







<div id=d1></div>















<script>







$(document).ready(function() {















/////////////////////







function checkDate(selectedDate) {







<?Php















$q="select distinct date_format( b_date, '%d-%m-%Y' ) as b_date from Bookings";







 







$str="[ ";







foreach ($dbo->query($q) as $row) {







$str.="\"$row[b_date]\",";







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









dateFormat: 'dd-mm-yy', firstDay: 1, minDate: new Date(),











beforeShowDay:checkDate,







onSelect:function() {







selectedDate = $('#date_picker').val();







var url="display-data.php?selectedDate="+selectedDate;







$('#d1').load(url);







  }







});







});















})







</script>



</div>



















</body>







</html>

<?Php

echo "<style >



/* Style the footer */

.footer {

  background: rrgba(55,89,92,0.31);

  padding: 10px;

  text-align: center;
color: white;

	border-radius: 0px;

}

</style>



<body>

<div class=footer>

  &copy; Copyright 2019 Brett's Planner

</div>



</body>";









