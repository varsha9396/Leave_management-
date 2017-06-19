

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
<form method="post" action="user_logindb.php">
Email:&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name="email"> <br><br>
 
Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
	<input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="login"><br><br>
<a href="home.php">Back to home</a>
</form>
</body>
</html>
<?php
if($_GET['action'] == 'er')
	{
		echo "You have Entered wrong password";
		echo "<br>";
	}
?>
