<?php
$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userTel = $_POST['tel'];

//subject
$emailSubject = 'HTML email';
//to
$to = 'tom.martinec@email.cz';
//message
$message = '<h1>Rezervováno</h1> . <p>Děkujeme za vaši rezervaci</p>';
//header
$header = "From: " .$userName. "<".$userEmail.">";
$header = "Reply-to: " .$to;

mail($to, $emailSubject, $message, $header);

//MySQL-Connection

$connection = mysqli_connect("localhost", "root", "", "user_contact");
$sql = "INSERT INTO user_info(name, email, tel) VALUES ('{$userName}','{$userEmail}','{$userTel}')";

$result = mysqli_query($connection, $sql);

