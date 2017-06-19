<?php
session_start();
require('configure.php');
include('user_logindb.php');
if($_SESSION['id'])
{
echo "<br><a href=\"user_login.php?action=logout\"><button>LOGOUT</button></a>";
$id=$_SESSION['id'];
$password=$_SESSION['password'];
$sql ="SELECT * FROM user WHERE id='$id' and password='$password'"; 
$result = $conn->query($sql);
echo "<table border=\"2\"><tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th></tr>";
	 
 if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 {
                echo " <tr><td>".$row['id']."</td>"."<td>" . $row['name']."</td> ". "<td> " . $row["email"]. "</td> ". "<td>" . $row["password"]. "</td> ".  "<td> " . $row["address"]. "</td> ". " <td>" . $row["country"]."</td> ". "<td>" . $row["gender"]."</td> ".  "<td>" . $row["dob"]. "</td> "."</tr>";
        }
        } else {
            echo "";
        }
}
session_destroy();
    $conn->close();
?>
<?php

if($_SESSION['id'])
{
?>
<html>
<head><title>
Registration</title>
</head>
<body>
<form method="post" action="leave_application.php"><br><br><br>
user_id
<input type="text" name="id1"/>
Reason:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp<br>
	<br>

from:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<textarea col="5"rows="10" name="reason1"></textarea><br><br><br>
from:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="date" name="dob1" placeholder="YYYY-MM-DD"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
To:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="date" name="dob2" placeholder="YYYY-MM-DD"/><br><br><br>
	<input type="submit" name="submit11" value="Submit"><br><br><br><br>
</form>
<?php }else{
	header('Location: http://localhost/leave_management/user_login.php');
}?>
