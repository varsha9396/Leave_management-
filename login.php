<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) 
{
	if (empty($_POST['username']) || empty($_POST['password'])) 
	{
		$error = "Username or Password is invalid";
	}
	else
	{

// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "company";
	$connection = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) 
	{
    		die("Connection failed: " . $connection->connect_error);
	}

// To protect MySQL injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	echo $username;
	$username =($username);
	$password = mysqli_real_escape_string($password);

// SQL query to fetch information of registerd users and finds user match.
	$sql ="SELECT * FROM login WHERE username='$username' and password='$password'";
	echo $sql; 
        $result = $conn->query($sql);
	if ($result->num_rows > 0) 
	 {
		$_SESSION['login_user']=$username; // Initializing Session
		header("location: profile.php"); // Redirecting To Other Page
	 } 
	else 
	{
		$error = "Username or Password is invalid";
	}
	mysqli_close($connection); // Closing Connection
}
}
?>

