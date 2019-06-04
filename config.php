<?Php

$host_name = "localhost";

$database = "ictatjcu_portal"; // Change your database nae
$username = "ictatjcu_portal";          // Your database user id 
$password = "123zxc";          // Your password


//////// Do not Edit below /////////

try {

$dbo = new PDO('mysql:host='.$host_name.';dbname='.$database, $username, $password);

} catch (PDOException $e) {

print "Error!: " . $e->getMessage() . "<br/>";

die();

}

?>