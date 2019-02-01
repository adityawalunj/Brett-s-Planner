<!doctype html>
<html>
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<meta charset="utf-8">
<title>Check Availability</title>
	<script type="text/javascript" src="lib/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker.css" />
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>

<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
</head>

<body>
Select the date to check the availability
<div id="Datepicker1"></div>
<input type="text" id="date_picker">
<script type="text/javascript">
$(document).ready(function() {
	$( "#date_picker" ).datepicker({dateFormat: 'dd-mm-yy',minDate:new Date(),maxDate: '+2w',
	 onSelect:function() {

selectedDate = $('#date_picker').val();

var url="avail_process.php?selectedDate="+selectedDate;

$('#d1').load(url);

  },
		beforeShowDay:function (dt) {
    return [dt.getDay() == 0 || dt.getDay() == 6 ? false : true];
}
	}); 
});
</script>
<?php
echo "";
?>


</body>
</html>
