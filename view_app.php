 <!DOCTYPE html>
 <html>
 <head>
 <title>View Appointment</title>
 </head>
 <body>
 <table>
  <tr>calendar</tr>
  <th>from_time</th>
  <th>to_time</tr>
  <th>
  <?php
  include("config.php")
  $sql = "SELECT calendar,from_time,to_time from personal_appointment";
  $result = $conn-> query($sql);

  if ($result-> num_rows > 0) {
  while ($row = $result-> fetch_assoc ()){
  echo "<tr><td>" . $row["calendar" . "</td><td>" . $row["from_time"] . </td><td>" . $row["to_time"] . "</td></tr>";
  }
  echo "</table>";
  }
  else{
  echo "0 result";

  }
  $conn-> close();
  ?>

  </tr>
 </table>
 </body>
 </html>