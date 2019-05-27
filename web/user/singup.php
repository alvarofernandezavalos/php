<?php

	$servername = "mariadb";
	$username = "root";
	$password = "random";
	$dbname = "mydb";

	if(!isset($_GET['username'])) {
		echo "error no argument user";
		exit -1;
	}
	if(!isset($_GET['password'])) {
		echo "error no argument password";
		exit -2;
	}

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$username = $_GET['username'];
	$password = $_GET['password'];

	$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
