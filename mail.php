<?php
//get data from form 

$selectDepartment = $_POST['department'];
$selectDoctor = $_POST['doctor']
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$date= $_POST['date'];
$time= $_POST['time'];
$to = "team10sep@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Date =" . $date, "\r\n Deparment =" . $selectDepartment, "\r\n Doctor =" . $selectDoctor;
$headers = "From: noreply@medinova.com" . "\r\n";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>