<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$edate=strtotime($_POST['bdate']); 
$edate=date("Y-m-d",$edate);
$sql="insert into bookings(`bdate`) values('$edate')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>

<?php header('Location: registration/login.php'); ?>