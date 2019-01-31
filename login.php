<?php 



$msg = "";

if(isset($_POST['submit'])){



	$username = $_POST['username'];

	$password = $_POST['password'];



	if($username == "admin" && $password == "admin"){

		$msg = "login success";

		header("Location:display.php");

	}

	else{

		$msg = "Invalid Username and Password !";

	}

}

echo $msg;

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Login Form Design</title>

	<link rel="stylesheet" type="text/css" href="styles1.css">

<body>

	<div class="loginbox">

    <img src="avatar.jpg" class="avatar">

    	<h1> Login Here</h1>

        <form method="post">

        	<p>Username</p>

            <input type="text" name="username" placeholder="Enter Username">

            <p>Password</p>

            <input type="password" name="password" placeholder="Enter Password">

            <p style="color: red;"><?php echo $msg; ?></p><br />

            <input type="submit" name="submit" value="Login">

            <a href="#">Lost your password?</a><br>

            <a href="#">Don't have an account?</a>



         </form>

    

    </div>

    	



</body>

</head>

</html>

