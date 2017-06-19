<?php
include('configure.php');
include('user_logindb.php');

if(isset($_POST['submit11']))
{
	$reason1 = $_POST['reason1'];        
    $date1 = $_POST['dob1'];
	$date2 = $_POST['dob2'];
	 $id = $_SESSION['id'];
	$sql = "INSERT INTO leave_table(reason,from_date,to_date,user_id) VALUES ('$reason1','$date1','$date2','$id')";
} 
	if ($conn->query($sql) === TRUE) 
	{
    		header('Location: user_loggedin.php?msg=success');
			//echo "Your record has been successfully Entered<a href=\"home.php\">go to back</a>";
	} 
	
	else
	{
			header('Location: user_loggedin.php?msg=error');
    		//echo "Error: " . $sql . "<br>" . $conn->error;
 	}
 
?>

