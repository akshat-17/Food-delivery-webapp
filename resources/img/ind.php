<!DOCTYPE HTML>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>


<title>Add Employee</title>
</head>
<body>

<form method="POST" action="">
<label>First Name</label>
<input type="text" name="first_name" />
<br />
<label>Last Name</label>
<input type="text" name="last_name" />
<br />
<label>Department</label>
<input type="text" name="department" />
<br />
<label>Email</label>
<input type="text" name="email" />

<br />
<input type="submit" value="Add Employee">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$first_name='smit';
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO employees1 (first_name,last_name,department,email)
    VALUES ('$first_name','$last_name','$department','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>


</body>
</html>