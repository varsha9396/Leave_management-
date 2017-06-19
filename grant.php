<?php
include('configure.php');
$p=$_GET;
foreach($p as $key=>$value)
{ 
$id=$key;
}
$val1='Grant';
$sql ="UPDATE leave_table SET status='$val1' WHERE id='$id' "; 
$result = $conn->query($sql);
header("Location: admin_loggedin.php");
?>
