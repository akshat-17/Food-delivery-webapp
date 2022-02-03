<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				// $db = pg_connect("host=localhost dbname=postgres user=postgres password=1234 port=5432") or die ("Could not connect to server\n");
		  // //Get data

				// $query = pg_query("select * from registered_user where passw='$password' AND email='$username'");

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.

// $rows = pg_num_rows($query);
if ($username == 'admin' && $password == 'admin') {
// $_SESSION['second']=$username;
// $ses=pg_query("select fname from registered_user where email='$username'");
// $row = pg_fetch_assoc($ses);
// $_SESSION['first'] =$row['fname']; // Initializing Session
header("location: admin.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}

}
}
?>