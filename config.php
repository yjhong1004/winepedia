<?php
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost:3306", "root", "Ahslzk1004", "JennyBlog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/JennyBlog/');
?>
