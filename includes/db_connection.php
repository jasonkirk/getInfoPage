<?php
require_once("./includes/db_configuration.php");
// Connect to database
$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
		// Test if connection succeeded
		die("Database connection failed: " .
					mysqli_connect_errno() .
			" (" . mysqli_connect_errno() . ")"
		);
}
?>
