<?php
session_start();
$id=$SESSION['$id'];
if($_GET['action'] == 'logout')
	{	
session_destroy();
unset($_SESSION['id']);
header('Location: user_login.php');
	}
?>
