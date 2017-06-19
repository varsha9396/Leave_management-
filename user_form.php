<?php 

include('user_logindb.php');
include('configure.php');

if(isset($_POST['submit11']))
{
	       
$sql = "DELETE FROM user WHERE id='$id' ";
	$result = $conn->query($sql);


}

else if(isset($_POST['submit12']))
{

$sql ="SELECT * FROM user"; 
$result = $conn->query($sql);
echo "<table border=\"2\"><tr><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th><th>Action</th></tr>";
$num=$result->num_rows;	 
 if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{ 
                echo " <tr><td>". $row['name']."</td> ". "<td>" . $row["email"]. "</td> ". "<td>" . $row["password"]. "</td> ".  "<td> " . $row["address"]. "</td> ". " <td>" . $row["country"]."</td> ". "<td>" . $row["gender"]."</td> ".  "<td>" . $row["dob"]. "</td> "."<td><form action=\"delete.php\" method=\"get\"><input type=\"submit\" name=".$row['id']." value=\"Delete\"></form>"."<td><form action=\"update.php\" method=\"get\"><input type=\"submit\" value=\"Edit\" name=".$row['id']."></form>"."</td></tr>";   	
		}
 }
}


else if(isset($_POST['submit13']))
{

$sql ="SELECT * FROM user"; 
$result = $conn->query($sql);
echo "<table border=\"2\"><tr><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th></tr>";
$num=$result->num_rows;	 
 if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{
                echo " <tr><td><form>Name<input type=\"text\">". $row['name']."</td> ". "<td>Email<input type=\"email\"> " . $row["email"]. "</td> ". "<td>Password<input type=\"email\">" . $row["password"]. "</td> ".  "<td>Address<input type=\"email\"> " . $row["address"]. "</td> ". " <td>Country<input type=\"email\">" . $row["country"]."</td> ". "<td>gender<input type=\"email\">" . $row["gender"]."</td> ".  "<td>Date of Birth<input type=\"email\">" . $row["dob"]. "</td> "."</td></tr>";   	
		}
 }
}

?>

<html>
<head><title>
Registration</title>
</head>
<body>
<form method="post"><br><br><br>
ID <input type="text" name="id1"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
<input type="submit" value="delete" name="submit11">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="submit" value="listing" name="submit12">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<h3>For updation</h3>
<input type="submit" value="update" name="submit13">
<br><br>
</form>
</body>
</html>
