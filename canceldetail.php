<?php

include('conn.php');

$id = $_GET['id'];

$s = "SELECT * FROM Bookings where b_id='$id'";

$r = mysqli_query($conn,$s);

while($row = mysqli_fetch_array($r))

{

	$email = $row['b_email'];

	$b_date = $row['b_date'];

	$stime = $row['b_starttime'];

	$etime = $row['b_endtime'];

	
}

$del = "DELETE from Bookings where b_id='$id'";

if($conn->query($del))

{

	?>

	<script type="text/javascript">alert("Successfully Cancel Appointment");window.location.href="calenderr.php"</script>

	<?php

}

else

{

	?>

	<script type="text/javascript">alert('Something Went wrong');window.location.href="calenderr.php";</script>

	<?php

}

?>