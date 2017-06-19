<?php
include('configure.php');
if(isset($_POST['submit11']))
{
	$name1 = $_POST['name1'];        
	$email1 = $_POST['email1'];      
        $password1 = $_POST['password1'];
        $gender1 = $_POST['gender1'];
        $address1 = $_POST['address1'];
        $country1 = $_POST['country1'];
 	
        $dob = $_POST['dob1'];
	$sql = "INSERT INTO user(name,email,password,address,country,gender,dob) VALUES ('$name1','$email1','$password1','$address1','$country1','$gender1','$dob')";
} 
	if ($conn->query($sql) === TRUE) 
	{
	
    header("Location: home.php?msg=success");	
	
	} 
	
	else
	{
			header("Location: registration_page.php?msg=error");
    		echo "Error: " . $sql . "<br>" . $conn->error;
 	}
 
$conn->close();
?>

