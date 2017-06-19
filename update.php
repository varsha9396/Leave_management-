<?php
include('configure.php');

$p=$_GET;
foreach($p as $key=>$value)
{ $id=$key;
}
$result = $conn->query($sql);

$sql ="SELECT * FROM user WHERE id='$id'"; 
$result = $conn->query($sql);
echo "<table border=\"2\"><tr><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th></tr>";

if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{ 
			   
                echo " <tr><td><form method=\"post\">Name<input type=\"text\" name=\"name1\" value=".$row['name'].">"."</td> ". "<td>Email<input type=\"text\" name=\"email1\" value=".$row['email']." >" . "</td> ". "<td>Password<input type=\"text\" name=\"password1\" value=".$row['password'].">" . "</td> ".  "<td> Address<input type=\"text\" name=\"address1\" value=".$row['address']."> " . "</td> ". " <td>Country<input type=\"text\" name=\"country1\" value=".$row['country'].">" ."</td> ". "<td>Gender<input type=\"text\" name=\"gender1\" value=".$row['gender'].">" ."</td> ".  "<td>date of birth<input type=\"text\" name=\"dob1\" value=".$row['dob'].">" ."</td>"."<td><input type=\"submit\" value=\"submit\" name=\"submit1\">" . "</td></tr>";   	
		}
 }
if(isset($_POST['submit1']))
{
		
		$name1 = $_POST['name1'];        
		$email1 = $_POST['email1'];      
        $password1 = $_POST['password1'];
        $gender1 = $_POST['gender1'];
        $address1 = $_POST['address1'];
        $country1 = $_POST['country1'];	
        $dob = $_POST['dob1'];
		$sql = "UPDATE user SET name='$name1',email='$email1',password='$password1',address='$address1',country='$country1',gender='$gender1',dob='$dob' WHERE id= '$id' ";
}
if ($conn->query($sql) === TRUE) 
{
header("Location: user_form.php");
    		echo "Record updated successfully";
} 

?>
