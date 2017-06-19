<?php
session_start();

if($_SESSION['id'])
{
echo "<br><a href=\"user_logout.php?action=logout\"><button>LOGOUT</button></a>";
	if($_GET['msg'] == 'success')
	{
		echo "Your record has been successfully Entered";
		echo "<br>";
	}
	$id = $_SESSION['id'];

	require('configure.php');
	include('user_logindb.php');
	//$sql ="SELECT * FROM user WHERE id=" . $id;
	//$result = $conn->query($sql);
   	//$row = $result->fetch_assoc(); 
	//$sql ="SELECT * FROM leave_table WHERE user_id='$id'"; 
    	//$result = $conn->query($sql);
	
	//while($row=mysql_fetch_array($result))
//	{
	//	echo $row['from_date'];
	//}
	$sql ="SELECT u.id,u.name,u.email,u.password,u.address,u.country,u.gender,u.dob,l.status,l.from_date,l.to_date,l.reason FROM user u , leave_table l WHERE l.user_id=u.id and u.id='$id'"; 
$result = $conn->query($sql);

	echo "<table border=\"2\"><tr><th>Email</th><th>Reason</th><th> From_date</th><th>To_date</th><th>Status</th></tr>";
if ($result->num_rows > 0) 
 {
           while($row = $result->fetch_assoc()) 
 		{ 

	echo " <tr>"."<td> " . $row["email"]. "</td> ". "<td>" . $row["reason"]. "</td> ".  "<td> " . $row["from_date"]. "</td> ". " <td>" . $row["to_date"]."</td> ". "<td>" . $row["status"]. "</td> "."</tr>"; 

		}
}

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
	
?>	


<html>
<head><title>Leave Management System</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    <script language="javascript">
    function validateForm()
    {
      


      var f=document.forms["user"]["dob1"].value;
//alert(f);
    if (f==null || f=="")
      {
      alert("please Enter date greater then tdy ");
      return false; 
      }
      var g=document.forms["user"]["dob2"].value;
    if (g==null || g=="")
      {
      alert("please Enter To date");
      return false;
      }

      var h=document.forms["user"]["reason1"].value;
    if (h==null || h=="")
      {
      alert("please Enter reason");
      return false;
      }

currentdate = new Date();
  var date=f.substr(8,10);
	 var month=f.substr(5,7);
	var year=f.substr(0,4);
	var date1=new Date(year,month - 1,date);
	alert(date1);

}
    </script>





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

<script>
  $( function() {
    $( "#dob1" ).datepicker({dateFormat: "yy-mm-dd" }).val();

  } );
</script>
<script>
  $( function() {
    $( "#dob2" ).datepicker({ dateFormat: "yy-mm-dd" }).val();
  } );
</script>


<form method="post" name="user" id="user" onSubmit="return validateForm();" >
<fieldset>
<legend>APPLY FOR Leave</legend>


Reason:
<textarea col="5"rows="10" name="reason1" ></textarea><br><br><br>
from:
	<input type="text" name="dob1" id="dob1" placeholder="MM-DD-YYYY"/>
To:
	<input type="text" name="dob2" id="dob2" placeholder="MM-DD-YYYY"/><br><br><br>
	<input type="submit" name="submit11" value="Submit"><br><br><br><br>
</form>
<fieldset>
	</body>
</html> 
<?php


} 

?>





