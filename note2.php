




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

	<form method="post" action="" class="input_form">

		<?php if (isset($errors)) { ?>

	<p><?php echo $errors; ?></p>

<?php } ?>

		<input type="text" name="task" class="task_input">

		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>

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

<?php 



require "config.php";

require "head.php";





	if(isset($_POST['task'])) {

		

		$t = $_POST['task'];

		

		$sql = "insert into tasks(task) VALUES ('$t')";



	//execute the query



	if($dbo -> query($sql))



	{







		echo "<h1></h1>";



		echo "note is inserted";







	}



			



}



else {



	die("Input error");



}













?>
