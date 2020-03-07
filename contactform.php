<?php

if(isset($_POST['sumbit'])){
	$name = $_POST['name'];
	$mailFrom = $_POST['mail'];
	$number = $_POST['number'];
	$message = $_POST['message'];
	
	$mailTo ="elwindaniel13@gmail.com";
	$headers ="From: ".$mailFrom;
	$txt = "You have received a mail from".$name.".\n\n".$message;
	
	mail($mailTo, $name,$txt, $headers);
	header("Location:contactus.html?mailsend");
}
