<?php



if($_GET['msg'] == 'error')
	{
		echo "please, re-enter record";
		echo "<br>";
	}

echo "<br><br><a href=\"home.php\">Go to home page</a><br><br>";
?><html>
<head><title>
User Registration</title>
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
<h1>User Registration </h1>
<form name="form1" action="registration_pagedb.php" method="post">
Name:&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name="name1"> <br><br>
Email:&nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="text" name="email1"> <br><br>
 
Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
	<input type="password" name="password1"><br><br>
Address :
<textarea col="5"rows="10" name="address1"></textarea><br><br><br>
Country: <select name="country1">
  		<option>India</option>
  		<option>Albanie</option>
  		<option>Argentina</option>
  		<option >Austria</option>
  		<option>Bangladesh</option>
  		<option>Bhutan</option>
  		<option >Brazil</option>
  		<option >Canada</option>
	</select>
<br>
<br><br>

Gender: &nbsp&nbsp &nbsp&nbsp <input type="radio" name="gender1" value= 'Male'>Male  &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp
		<input type="radio" name="gender1" value= 'Female'>Female</div><br><br>

Date Of birth <input type="date" name="dob1" placeholder="YYYY-MM-DD"/><br><br>

 <input type="submit" name="submit11" values="Submit"/>
</form>
</body>
</html>

