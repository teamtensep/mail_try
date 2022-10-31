<?php
//get data from form 

$selectDepartment = $_REQUEST['department'];
$selectDoctor = $_REQUEST['doctor']
$name = $_REQUEST['name'];
$email= $_REQUEST['emailaddress'];
$date= $_REQUEST['date'];
$time= $_REQUEST['time'];
$to = "teamtensep@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Date =" . $date, "\r\n Deparment =" . $selectDepartment, "\r\n Doctor =" . $selectDoctor;
$headers = "From: noreply@debolish.com" . "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
