<!DOCTYPE html>
<html lang="en">
<head>
<title>Calendar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">

<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">

<link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">

<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>

<script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
</head>
<body>
    <script>
		var $datePicker = $("div#datepicker");

var $datePicker = $("div");

$datePicker.datepicker({
    changeMonth: true,
    changeYear: true,
    inline: true,
    altField: "#datep",
}).change(function(e){
    setTimeout(function(){   
        $datePicker
            .find('.ui-datepicker-current-day')
            .parent()
            .after('<tr>\n\
                        <td colspan="8">\n\
                            <div> \n\
                                <button>8:00 am – 9:00 am </button>\n\
                            </div>\n\
                            <button>9:00 am – 10:00 am</button>\n\
                            </div>\n\
                            <button>10:00 am – 11:00 am</button>\n\
                            </div>\n\
                        </td>\n\
                   </tr>');

    });
});
<div id="datepicker"></div>
$('.date-picker-2').popover({
	html : true, 
	content: function() {
	  return $("#example-popover-2-content").html();
	},
	title: function() {
	  return $("#example-popover-2-title").html();
	}
});
$(".date-picker-2").datepicker({
	onSelect: function(dateText) { 
        $('#example-popover-2-title').html('<b>Avialable Appiontments</b>');
    	var html = '<button  class="btn btn-success">8:00 am – 9:00 am</button><br><button  class="btn btn-success">10:00 am – 12:00 pm</button><br><button  class="btn btn-success">12:00 pm – 2:00 pm</button>';
    	$('#example-popover-2-content').html('Avialable Appiontments On <strong>'+dateText+'</strong><br>'+html);
    	$('.date-picker-2').popover('show');
    }
});
		</script>
    
</body>
</html>