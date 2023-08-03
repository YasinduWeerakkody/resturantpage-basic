<?php

	include 'config.php';

//error_reporting(0);

    $Name = $_POST['Name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];


    $sql = "insert into contact(Name , mail , phone , comment) values(?,?,?,?)";
    $statment = $connection->prepare($sql);

    $statment->bind_param("ssis", $Name, $mail, $phone, $comment);

	if($statment->execute()){
	echo 'insert data success !';
	}else{
	echo 'insert data faild !';
	}

	if($connection -> connect_error){
        die("Connection error");
    }else{
        echo 'connection ok';
    }


?>