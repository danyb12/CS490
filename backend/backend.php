<?php
//Connect to database
$db = mysqli_connect("sql.njit.edu", "ms2285", "spirit29", ms2285);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//Build query
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM Login WHERE username='$username' AND password='$password'";

//Build response
$result=mysqli_query($db,$query);
$response = array(
	"login" => (mysqli_num_rows($result) == 1)
	);
$db->close();

//Return response
header("Content-Type:application/json");
echo json_encode($response);
?>