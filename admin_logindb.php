<?php
session_start();
require('configure.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit16']))
{
	
	$email=$_POST['email1'];
	$password=$_POST['password1'];
	$sql ="SELECT * FROM admin WHERE name='$email' and password='$password'"; 
    $result = $conn->query($sql);
	foreach($result as $row)
	{
     		$id=$row['id'];
	} 
	
	if ($result->num_rows > 0) 
	{       
		$_SESSION['id']=$id;
		header("Location: admin_loggedin.php");				
	}

}

?>


