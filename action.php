<?php session_start();
if ($_SESSION['sid'])

 ?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "leave_management";
$conn = new mysqli($servername, $username, $password, $dbname);
   	$id = $_GET['id'];
	$user_name = $_GET['user_name'];
	$password = $_GET['password'];
	$login_type = $_GET['login_type'];
	$no_of_days = $_GET['no_of_days'];
	$reason = $_GET['reason'];
	$session = $_SESSION['user_name'];


//echo "check" . $login_type;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
elseif($login_type=="admin")
{
echo "You have logged In as Admin<br>";
echo $user_name;
include('admin_login.php');
}
else
{
echo "You have logged In as user<br>";
echo $user_name;
include('user_login.php');
}

  	$id = $_GET['id'];
	$user_name = $_GET['user_name'];
	$password = $_GET['password'];
	$login_type = $_GET['login_type'];
	$no_of_days = $_GET['no_of_days'];
	$reason = $_GET['reason'];	

if(isset($_GET['Submit']))
{
 // Fetching variables of the form which travels in URL
	if($login_type=="admin")
	{ 
    session_start();
    $user_name=$_GET['user_name'];
    $password=$_GET['password'];
    $_session['login_user']=$user_name;

$sql = "SELECT * FROM leave_details";
		$result = $conn->query($sql);
		echo "<table border=\"2\"><tr><th>ID</th><th>Name</th><th>No_of_days</th><th>Reason</th><th>Date</th><th>To_Date</th><th>Approve</th><th>Reject</th><th>Status</th></tr>";
		if ($result->num_rows > 0) 
{
          // output data of each row
            while($row = $result->fetch_assoc()) 
			{
   				echo " <tr><td>".$row['id']."</td>"."<td> " . $row["user_name"]. "</td> "."<td> " . $row["no_of_days"]. "</td> ". "<td>" . $row["reason"]. "</td> ".  "<td> " .$row["date"]. "</td> ". " <td>" . $row["to_date"]."</td> ". "<td><button>Approve</button>"." <td><button>Reject</button>". "</td> ".  "<td>" . $row["status"]. "</td> "."</td></tr>";        
			}
}
}
else
{
$sql1 = "SELECT * FROM leave_details WHERE user_name='$user_name'";

$result1 = $conn->query($sql1);

echo "&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<table border=\"2\"><tr><th>ID</th><th>No_of_days</th><th>Reason</th><th>Date</th><th>To_Date</th><th>Status</th></tr>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;";


 if ($result1->num_rows > 0) {

          // output data of each row
            while($row1 = $result1->fetch_assoc()) {

echo " <tr><td>".$row1['id']."</td>"."<td> " . $row1["no_of_days"]. "</td> ". "<td>" . $row1["reason"]. "</td> ".  "<td> " .$row1["date"]. "</td> ". " <td>" . $row1["to_date"]."</td> ". "<td>". $row1["status"]. "</td> "."</td></tr>";

        }
    
}
}
}
?>



