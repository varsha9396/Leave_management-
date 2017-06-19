<?php
session_start();
$id=$SESSION['$id'];
if($_GET['action'] == 'logout')
	{
	//session_unregister('$id');
	
	header('Location: admin_login.php');
session_destroy();
	}
?>
