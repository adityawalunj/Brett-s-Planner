<?php

$conn = mysqli_connect("localhost","ictatjcu_portal","123zxc","ictatjcu_portal");



/*date_default_timezone_set("Australia/Brisbane");

$date = date('Y-m-d');

$time = date('h:i:s');



$ntime = date('H:i', strtotime('-1 hour'));

$s = "SELECT * FROM bookings where b_date = '$date'";

$res = mysqli_query($conn,$s);

while($row = mysqli_fetch_array($res))

{

   

    $dbdate = $row['b_starttime'];

    $email = $row['b_email'];

    if($dbdate == $ntime)

    {

        require @ "Mail.php";

        $to      = $email;

        $from    = "myemail@here.com"; // the email address

        $subject = "Remainder email";

        $body    = "Your New Appointment With ".$row['b_name']."at ".$dbdate;



        $host    = "smtp.gmail.com";

        $port    =  "587";

        $user    = "krishpatel2894@gmail.com";

        $pass    = "dhaansu2894";

        $headers = array("From"=> $from, "To"=>$to, "Subject"=>$subject);

        $smtp    = @Mail::factory("smtp", array("host"=>$host, "port"=>$port, "auth"=> true, "username"=>$user, "password"=>$pass));

        $mail    = @$smtp->send($to, $headers, $body);



        if (PEAR::isError($mail)){

            echo "error: {$mail->getMessage()}";

        } else {

            echo "Message sent";

        } 

        

    }



}

*/









?>