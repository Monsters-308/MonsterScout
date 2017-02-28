<?php
	
	//This file handes all login requests from our index.php

	//CONFIG
	include('config.php');
	
	$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	if(!$conn){
		//Go back and display alert
		header("Location: index.php?error=2");
		//Die
		die("Couldn't connect to the database");
	}

	$sql = "";





?>