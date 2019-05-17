<?php 

    // initialize errors variable

	$errors = "";



	// connect to database

	//define constants for connection info



define("MYSQLUSER","ictatjcu_portal");



define("MYSQLPASS","123zxc");



define("HOSTNAME","localhost");



define("MYSQLDB","ictatjcu_portal");







//make connection to database



function db_connect()



{



	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);



	if($conn -> connect_error) {



		die('Connect Error: ' . $conn -> connect_error);



	}



	return $conn;



} 

	// insert a quote if submit button is clicked

	if (isset($_POST['submit'])) {

		if (empty($_POST['task'])) {

			$errors = "You must fill in the task";

		}else{

			$task = $_POST['task'];

			$sql = "INSERT INTO tasks (task) VALUES ('$task')";

			mysqli_query($db, $sql);

			header('location: index.php');

		}

	}	

if (isset($_GET['del_task'])) {

	$id = $_GET['del_task'];



	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);

	header('location: index.php');

}



?>

	

<!DOCTYPE html>

<html>

<head>

	<title>Notes</title>

	<link rel="stylesheet" type="text/css" href="style3.css">

</head>

<body>

	<div class="heading">

		<h2 style="font-style: 'Hervetica';">Notes</h2>

	</div>

	<form method="post" action="index.php" class="input_form">

	<?php if (isset($errors)) { ?>

	<p><?php echo $errors; ?></p>

<?php } ?>

<input type="text" name="task" class="task_input">

		<button type="submit" name="submit" id="add_btn" class="add_btn">Add </button>

	</form>



<table>

	<thead>

		<tr>

			<th>Number</th>

			<th>Tasks</th>

			<th style="width: 60px;">Action</th>

		</tr>

	</thead>



	<tbody>

		<?php 

		// select all tasks if page is visited or refreshed

		$tasks = mysqli_query($db, "SELECT * FROM tasks");



		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>

			<tr>

				<td> <?php echo $i; ?> </td>

				<td class="task"> <?php echo $row['task']; ?> </td>

				<td class="delete"> 

					<a href="index.php?del_task=<?php echo $row['id'] ?>">x</a> 

				</td>

			</tr>

		<?php $i++; } ?>	

	</tbody>

</table>

</body>

</html>