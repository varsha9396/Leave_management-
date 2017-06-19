<html>
<head><title>
User Registration</title>

<style>
body {
    background-color: #57B7AC;
}

p {
    font-family: Times New Roman;
    font-size: 15px;
}
legend {
    display: block;
    padding-left: 2px;
    padding-right: 2px;
    border: 5px;
}
</style>
</head>
<body><center><h1 style="color:blue;">  Leave Management</h1><br><br>




 <fieldset>
<legend > Choose Option</legend>
<br><h2>For User</h2>

<a href="user_login.php"> For Login</a><br><br>
<a href="registration_page.php"> For registration</a> &nbsp; &nbsp; &nbsp;
<a href="/login.php"></a>

<br><br>
<br><h2>For Admin</h2>
<a href="admin_login.php"> For Login</a><br><br></center>


   </fieldset>
</body>
<?php
if($_GET['msg'] == 'success')
	{
		echo "Your record has been successfully Entered";
		echo "<br>";
	}


?>
