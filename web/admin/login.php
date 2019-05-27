<?php
	session_start();

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

	$sql = "SELECT username, password, admin FROM users where username='$username' and password='$password'";

	$res = mysqli_query($conn, $sql);

	if (mysqli_num_rows($res) == 1) {
		echo "Yeah, you are log in.";
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $_GET['password'];
		$_SESSION['admin'] = 1;
	} else {
		echo "Please enter a username and password to log in.";
	}

	$conn->close();
?>
