<?php
	
	session_unregister()

	//This file handes all login requests from our index.php
	$email = $_POST['email'];
	$password = $_POST['password'];

	//Die if email or password is empty, what is shouldn't be
	if(empty($email)){

		header("Location: index.php?error=3");
		die("E-Mail was empty");
	}
	if(empty($password)){

		header("Location: index.php?error=3");
		die("Password was empty");
	}

	//Get config file
	include('config.php');
	
	$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

	if(!$conn){
		//Go back and display alert
		//header("Location: index.php?error=2");
		//Die
		die("Couldn't connect to the database");
	}

	$sql = "SELECT * FROM monster_user WHERE email='$email' AND active=1 AND password='$password'";

	//Handle things
	echo $email;
	echo $password;

	$result = $conn->query($sql);

	//If there is no result
	if(!$row = $result->fetch_assoc()){
		header("Location: index.php?error=1");
		die("Password or e-mail are wrong");
	}
	else{
		echo "You are now logged in!";

	}


?>