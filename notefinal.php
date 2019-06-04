
<?php

require "config.php";

require "head.php";
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

                $s1="select * from tasks";
                 $i=1;

                foreach ($dbo->query($s1) as $row) {
                 

			echo "<tr>

				<td> $i </td>

				<td class=task>$row[task]</td>

				<td class=delete> 

					<a href=note.php?del_task=$row[id]>x</a> 

				</td>

			</tr>";

		$i=$i+1;
               } ?>	

	</tbody>

</table>

</body>

</html>

<?php 








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



	


}













?>
