<?php
	$servername = "localhost";
	$database = "sxc_readers_hub";
	$username = "root";
	$password = "";

	//Create Connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	//Check Connection
	if(!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	//echo "Connected Successfully";
	
?>