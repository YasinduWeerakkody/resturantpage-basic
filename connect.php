<?php

	include 'config.php';

	$username = $_POST['userName'];
	$first_name = $_POST['firstName'];
	$last_name = $_POST['lastName'];
	$phone_no = $_POST['Phone'];
	$Email = $_POST['eMail'];
	$password = $_POST['Password'];
	$repeat_password = $_POST['pswrepeat'];

	$sql = "insert into registration(username , first_name , last_name , phone_no , Email , password , repeat_password) values(?,?,?,?,?,?,?)";
	$statment = $connection->prepare($sql);

	$statment->bind_param("sssisss" , $username , $first_name , $last_name , $phone_no , $Email , $password , $repeat_password);

	if($statment->execute()){
	echo 'insert data success !';
	}else{
	echo 'insert data faild !';
	}

	


?>