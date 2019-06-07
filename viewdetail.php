<?php

include('calenderr.php');

?>



<!DOCTYPE html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>









/* Extra styles for the cancel button */

.cancelbtn {

  width: auto;

  padding: 10px 18px;

  background-color: #f44336;

}



/* Center the image and position the close button */

.imgcontainer {

  text-align: center;

  margin: 24px 0 12px 0;

  position: relative;

}





.container {

  padding: 16px;

}



span.psw {

  float: right;

  padding-top: 16px;

}



/* The Modal (background) */

.modal {

  display: none; /* Hidden by default */

  position: fixed; /* Stay in place */

  z-index: 1; /* Sit on top */

  left: 0;

  top: 0;

  width: 100%; /* Full width */

  height: 100%; /* Full height */

  overflow: auto; /* Enable scroll if needed */

  background-color: rgb(0,0,0); /* Fallback color */

  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */

  padding-top: 60px;

}



/* Modal Content/Box */

.modal-content {

  background-color: #fefefe;

  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */

  border: 1px solid #888;

  width: 80%; /* Could be more or less, depending on screen size */

}



/* The Close Button (x) */

.close {

  position: absolute;

  right: 25px;

  top: 0;

  color: #000;

  font-size: 35px;

  font-weight: bold;

}



.close:hover,

.close:focus {

  color: red;

  cursor: pointer;

}



/* Add Zoom Animation */

.animate {

  -webkit-animation: animatezoom 0.6s;

  animation: animatezoom 0.6s

}



@-webkit-keyframes animatezoom {

  from {-webkit-transform: scale(0)} 

  to {-webkit-transform: scale(1)}

}

  

@keyframes animatezoom {

  from {transform: scale(0)} 

  to {transform: scale(1)}

}



/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {

  span.psw {

     display: block;

     float: none;

  }

  .cancelbtn {

     width: 100%;

  }

}

</style>

</head>

<body onload="document.getElementById('id01').style.display='block'">







<div id="id01" class="modal">

  

  <form class="modal-content animate" action="/action_page.php">

    <div class="imgcontainer">

      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->

      <h3>View Detail</h3><hr>

    </div>

    <div class="container">

    	<div class="row">

    		<div class="col-md-11">

    		<table class="table table-stripped"> 

<?php

include('conn.php');

$id = $_GET['id'];

$s = "SELECT * FROM Bookings where b_id='$id'";

$r = mysqli_query($conn,$s);

while($row = mysqli_fetch_array($r))

{

?>

       			

    				<tr><td>Booking Date:</td><td><?php echo $row['b_date'] ?></td></tr>

    				<tr><td>Start Time:</td><td><?php echo $row['b_starttime'] ?></td></tr>

    				<tr><td>End Time:</td><td><?php echo $row['b_endtime'] ?></td></tr> 
                               
                                <tr><td>Reason:</td><td><?php echo $row['b_comments'] ?></td></tr>

    				<?php } ?>   			

    		</table>

    	</div>

    	</div>

    	<!-- <div class="row">

    		<div class="col-md-11">

			      <label for="uname"><b>Username</b></label>

			      <input type="text" placeholder="Enter Username" name="uname" class="form-control" required>

			  </div>

			</div>

	<div class="row">

    		<div class="col-md-11">

		      <label for="psw"><b>Password</b></label>

		      <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>

            </div>

     </div>

    <div class="row">

    		<div class="col-md-11">   

      			<br><button type="submit" class="btn btn-success">Login</button>

      		</div>

      	</div> -->

      

    </div>



    

  </form>

</div>



<script>

// Get the modal

var modal = document.getElementById('id01');



// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {

    if (event.target == modal) {

        modal.style.display = "none";

    }

}

</script>



</body>

</html>

