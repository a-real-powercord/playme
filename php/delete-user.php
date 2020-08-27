<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'dojustly01';
$db_name = 'authentication';
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST["username"];
    $query = "DELETE FROM authentication.accounts WHERE accounts.username = '$username'";
    mysqli_query($con, $query);
}
?>