<?php 
require "config.php"; // Database Connection 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "todo");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
			
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO Notes (note) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
			
		}
		
		
	}
// delete task
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
</head>
	<style>
		.heading{
	width: 30%;
	margin: 30px auto;
	text-align: center;
	color: 	whitesmoke;
	background: #646060;
	border: 2px solid #D1CED0;
	border-radius: 20px;
}
form {
	width: 30%; 
	margin: 30px auto; 
	border-radius: 5px; 
	padding: 10px;
	background: #646060;
	border: 1px solid #6B8E23;
}
form p {
	color: red;
	margin: 0px;
}
.task_input {
	width: 65%;
	height: 15px; 
	padding: 10px;
	border: 2px solid #6B8E23;
}
.add_btn {
	height: 39px;
	background: #FFF8DC;
	color: 	#6B8E23;
	border: 2px solid #6B8E23;
	border-radius: 5px; 
	padding: 5px 20px;
}

table {
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
}

tr {
	border-bottom: 1px solid #cbcbcb;
}

th {
	font-size: 19px;
	color: #6B8E23;
}

th, td{
	border: none;
    height: 30px;
    padding: 2px;
}

tr:hover {
	background: #E9E9E9;
}

.task {
	text-align: left;
}

.delete{
	text-align: center;
}
.delete a{
	color: white;
	background: #a52a2a;
	padding: 1px 6px;
	border-radius: 3px;
	text-decoration: none;
}
		</style>
<body>
	<div class="heading">
		<h2 style="font-style: 'Hervetica';">Notes</h2>
	</div>
	<form method="post" action="index.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
			
			<?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
	</form>
<table>
	<thead>
		<tr>
			<th>N</th>
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