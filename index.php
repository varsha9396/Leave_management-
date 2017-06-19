<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
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
<div id="main">
<h1>PHP Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input type="password" id="password" name="password" placeholder="**********" >
<input type="submit" name="submit"  value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
