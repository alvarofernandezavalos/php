<?php
	session_start();

	$servername = "mariadb";
	$username = "root";
	$password = "random";
	$dbname = "mydb";

	if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['admin'] == 1) {
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT username, password, admin FROM users";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    while($row = $result->fetch_assoc()) {
		        echo "username: " . $row["username"]. " - password: " . $row["password"]. "<br>";
		    }
		} else {
		    echo "0 results";
		}

		$conn->close();

	} else {
		echo "permission denied";
	}
?>
