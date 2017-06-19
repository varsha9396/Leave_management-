<?php
include('configure.php');

$p=$_GET;
foreach($p as $key=>$value)
{ $id=$key;
}
	$result = $conn->query($sql);
	$sql = "DELETE FROM user WHERE id='$id' ";
	$result = $conn->query($sql);
header("Location: admin_loggedin.php");
	 
?>
