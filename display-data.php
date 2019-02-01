<html><body><table border=1 cellspacing=1 cellpadding=2><tr align="center">

<body>

<?Php

echo "<style >



thead, tfoot {

  background: black;

  color: white;

  text-shadow: 1px 1px 1px black;

}



thead th, tfoot th, tfoot td {

  background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.5));

  border: 3px solid purple;

}

tbody tr:nth-child(odd) {

  background-color: #ff33cc;

}



tbody tr:nth-child(even) {

  background-color: #e495e4;

}



tbody tr {

  background-image: white;

}



table {

  background-color: #ff33cc;

}



</style>";

require "config.php"; // Database Connection 

$date=$_GET['selectedDate'];

$date = new DateTime($date);

$date=$date->format('Y-m-d');



//echo $date;

$sql="select * from Student where Date ='$date'";

echo "<table width=1000>";

echo "<tr>";

           echo"<td>Name</td>";

            echo"<td>Email</td>";

            echo"<td>Time</td>";

            echo"<td>Purpose</td>"; 

        echo"</tr>";



foreach ($dbo->query($sql) as $row) {

echo"<tr>";

           echo "<td>$row[Name]</td>

            <td>$row[Email]</td>

            <td>$row[Time]</td>

            <td>$row[Purpose]</td> 



        </tr>";



//echo "$row[Name]: $row[Email]:$row[Time]: $row[Purpose]<br>";

}

echo"</table>";

?>

</body>

</html>