
<?php 
session_start();
if($_SESSION['id'])
{
include('admin_logindb.php');
include('configure.php');
echo "<br><a href=\"admin_logout.php?action=logout\"><button>LOGOUT</button></a>";
if(isset($_POST['submit11']))
{	       
$sql = "DELETE FROM user WHERE id='$id' ";
$result = $conn->query($sql);
}
//LISTING OF SUBMITTED LEAVE APPLICATION
else if(isset($_POST['submit12']))
{

$sql ="SELECT l.id,u.name,u.email,u.password,u.address,u.country,u.gender,u.dob,l.status,l.from_date,l.to_date FROM user u , leave_table l WHERE l.user_id=u.id"; 
$result = $conn->query($sql);

echo "<table border=\"2\"><tr><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th><th>Status</th><th>From date</th><th>To date</th><th>Action</th></tr>";

$num=$result->num_rows;	 
 if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{ 
                echo " <tr><td>". $row['name']."</td> ". "<td>" . $row["email"]. "</td> ". "<td>" . $row["password"]. "</td> ".  "<td> " . $row["address"]. "</td> ". " <td>" . $row["country"]."</td> ". "<td>" . $row["gender"]."</td> ".  "<td>" . $row["dob"]. "</td> "."<td>".$row['status']."</td>"."<td>".$row['from_date']."</td>"."<td>".$row['to_date']."</td>"."<td><form action=\"grant.php\" method=\"get\"><input type=\"submit\" value=\"grant\" name=".$row['id']."></form>"."<td><form action=\"denied.php\" method=\"get\"><input type=\"submit\" value=\"Deny\" name=".$row['id']."></form>"."</td></tr>";   	
		}
 }
}


/*else if(isset($_POST['submit13']))
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
}*/



/*else if(isset($_POST['submit13']))
{
 $g1 = $_POST['g1'];
  $email1 = $_POST['email1'];
$sql ="UPDATE user SET status='$g1' WHERE email='$email1'"; 
$result = $conn->query($sql);
$sql ="SELECT * FROM user"; 
$result = $conn->query($sql);
echo "<table border=\"2\"><tr><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th><th>Status</th><th>Action</th></tr>";

 if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{
                echo "<tr><td>". $row['name'] . "</td> ". "<td>" . $row['email']. "</td> ". "<td>" . $row['password']. "</td> ".  "<td> " . $row['address']. "</td> ". " <td>" . $row['country']."</td> ". "<td>" . $row['gender']."</td> ".  "<td>" . $row['dob']. "</td> " . "<td>" . $row['status'] ."<td><form action=\"delete.php\" method=\"get\"><input type=\"submit\" value=\"Delete\" name=".$row['id']."></form>"."<td><form action=\"update.php\" method=\"get\"><input type=\"submit\" value=\"Edit\" name=".$row['id']."></form>"."</td></tr>";   	
		}
 }
}
*/



else if(isset($_POST['submit14']))
{
$sql ="SELECT * FROM user"; 
$result = $conn->query($sql);
echo "<table border=\"2\"><tr><th>Name</th><th>Email</th><th>Password</th><th>Address</th><th>Country</th><th>Gender</th><th>Date Of Birth</th><th>Action</th></tr>";

 if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{
                echo "<tr><td>". $row['name'] . "</td> ". "<td>" . $row['email']. "</td> ". "<td>" . $row['password']. "</td> ".  "<td> " . $row['address']. "</td> ". " <td>" . $row['country']."</td> ". "<td>" . $row['gender']."</td> ".  "<td>" . $row['dob']. "</td> " .  "<td><form action=\"delete.php\" method=\"get\"><input type=\"submit\" value=\"Delete\" name=".$row['id']."></form>"."<td><form action=\"update.php\" method=\"get\"><input type=\"submit\" value=\"Edit\" name=".$row['id']."></form>"."</td></tr>";   	
		}
 }
}
?>

<html>
<head><title>
Registration</title>
</head>
<body>
<style>
body {
    background-color: #57B7AC;
}

p {
    font-family: Times New Roman;
    font-size: 15px;
}
</style>
<form method="post"><br><br><br>
<input type="submit" value="listing" name="submit12">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="List of Employess" name="submit14">

<br><br>
</form>
</body>
</html>
<?php
} 
?>
