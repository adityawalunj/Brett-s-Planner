<?Php







echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1252\">



<html>



<head>



<title>View Calendar Admin</title>



<META NAME=\"DESCRIPTION\" CONTENT=\"view calendar admin\">



<META NAME=\"KEYWORDS\" CONTENT=\"view calendar admin\">








";

require "head.php";







echo "<style >





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

     


</style></head><body>";







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



