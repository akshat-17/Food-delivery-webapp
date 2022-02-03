<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['first'])){
header("location: order_now.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<style type="text/css">
body {
	background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(resources/img/login2.jpg);
    background-size: cover;
    background-position: center;
    width: 90%;
  font-family: verdana;

}
html{
	font-size: 25px;
	color: white;
}
h1 {
  
  
  padding-top: 80px;

}
.aa{
	background-color: #CBDB2A;
	color: white;
	border-radius: 40px;
	font-size: 30px;
	margin-left:50px;
	padding: 5px;
	border-color: #CBDB2A;
}

#main {

padding-left: 610px;


}



</style>
<!-- <link href="style.css" rel="stylesheet" type="text/css">
<link href="resources/css/logincss.css" rel= "stylesheet" type="text/css" > -->
</head>

<body>
<div id="main">
<div id="login">
<h1>Login Here </h1><br>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text"><br><br> <br>
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br><br>
<input name="submit" type="submit" value=" Login " class="aa"><br><br><br><br><br><br><br>
Login as <a href="admin_login.php" >Admin</a><br>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>