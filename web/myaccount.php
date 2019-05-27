<?php
	session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {echo "You are signed in. </br>";}
	else exit -1;
	echo "username: ". $_SESSION['username'] . "</br>";
	echo "password: ". $_SESSION['password'];
?>
