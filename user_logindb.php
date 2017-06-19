<?php
require('configure.php');
session_start();

if(isset($_POST['submit']))
{
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql ="SELECT * FROM user WHERE email='$email' and password='$password'"; 
    $result = $conn->query($sql);

	foreach($result as $row)
	{
     		$id=$row['id'];
	} 
	
	if ($result->num_rows > 0) 
	{
			$_SESSION['id']=$id;
			header("Location: user_loggedin.php");
		
	}
	else
	{
		header("Location: user_login.php?action=er");
	}

}
?>

	



