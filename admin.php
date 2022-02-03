<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
  function showSuggestion(str)
  {
    if(str.length==0)
    {
      //nothing is entered yet
      document.getElementById('output').innerHTML='';
    }
    else
    {
      //setting to a new object
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange=function()
      {
        if(this.readyState == 4 && this.status==200)
        {
          // ready state=0:request not initialized
          //               1:server connection established
          //               2:request received
          //               3:processing request
          //               4:request finished and response is ready
            document.getElementById('output').innerHTML = this.responseText;

        }
      }
      xmlhttp.open("GET", "php_ajax.php?q="+str, true);
      xmlhttp.send();
    }
  }
  </script>
  
  </head>

	<body>
    <h1>Search Customer Details</h1>
<form method="POST">
<input type="text" placeholder="Enter Firstname" name="fname" id="search-box" onkeyup="showSuggestion(this.value)" required>

<input type="submit">
</form>
<p>Suggestions: <span id="output"></span></p>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<table border='1' cellpadding='5'cellspacing='0' bgcolor='orange'>
  <tr>
  	<th>Sr no.</th>
    <th>Fname</th>
    <th>LName</th>
    <th>Emailid</th>
    <th>Contact</th>
  </tr>
<?php
$db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');
$fn = isset($_POST['fname']) ? $_POST['fname'] : '';


        $query = "SELECT fname,lname,email,contact FROM registered_user where fname='$fn'" ;
      	$result = pg_query($query);
      	
      	if (!$result) {
      		
       echo "Problem with query " . $query . "<br/>";
       echo pg_last_error();
       exit();
   }
    echo "<br>";
      $i=1;
      	while($myrow = pg_fetch_assoc($result))
      	{
      		
      		$value1 = $myrow['fname'];
	      $value2 = $myrow['lname'];
	      $value3 = $myrow['email'];
			$value4 = $myrow['contact'];
			echo "<tr>"
;          echo "<td>".$i."</td>";
          echo "<td>".$value1."</td>";
          echo "<td>".$value2."</td>";
          echo "<td>".$value3."</td>";
          echo "<td>".$value4."</td>";
          $i = $i +1;

	      
 		 }

?>
</table>

<br>
<br><br>
<h1>Add Customer details</h1>
<form method="POST">
<input type="text" placeholder="Enter Firstname" name="ffname" required>
<input type="text" placeholder="Enter Lastname" name="llname">
<input type="text" placeholder="Enter email" name="eemail">
<input type="text" placeholder="Enter password" name="ppassw">
<input type="text" placeholder="Enter contact" name="ccontact">

<input type="submit">
</form>


<?php
$db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');
$ffn = isset($_POST['ffname']) ? $_POST['ffname'] : '';
$lln = isset($_POST['llname']) ? $_POST['llname'] : '';
$een = isset($_POST['eemail']) ? $_POST['eemail'] : '';
$ppn = isset($_POST['ppassw']) ? $_POST['ppassw'] : '';
$ccn = isset($_POST['ccontact']) ? $_POST['ccontact'] : '';



$query = "INSERT INTO registered_user VALUES ('$ffn','$lln','$een','$ppn','$ccn')";
$result = pg_query($query);

?>

<br>
<br><br>

<h1>Delete Customer details</h1>
<form method="POST">
<input type="text" placeholder="Enter Firstname" name="fffname" required>


<input type="submit">
</form>


<?php
$db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');

$fffn = isset($_POST['fffname']) ? $_POST['fffname'] : '';




$query = "DELETE FROM registered_user WHERE fname='$fffn'";
$result = pg_query($query);

?>

<br>
<br><br>

<h1>All Registered Users</h1>
<table border='30' cellpadding='10' cellspacing='0' bgcolor='orange'>
  <tr>
  	<th>Sr no.</th>
    <th>Fname</th>
    <th>LName</th>
    <th>Emailid</th>
    <th>Password</th>
    <th>Contact</th>
  </tr>
<?php
$db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');



        $query = "SELECT * FROM registered_user" ;
      	$result = pg_query($query);
      	
      	
      	if (!$result) {
      		
       echo "Problem with query " . $query . "<br/>";
       echo pg_last_error();
       exit();
   }
    echo "<br>";
      $i=1;
      	while($myrow = pg_fetch_assoc($result))
      	{
      		
      		$value1 = $myrow['fname'];
	      $value2 = $myrow['lname'];
	      $value3 = $myrow['email'];
			$value4 = $myrow['passw'];
			$value5 = $myrow['contact'];
			echo "<tr>"
;          echo "<td>".$i."</td>";
          echo "<td>".$value1."</td>";
          echo "<td>".$value2."</td>";
          echo "<td>".$value3."</td>";
          echo "<td>".$value4."</td>";
          echo "<td>".$value5."</td>";
          $i = $i +1;

	      
 		 }

?>
</table>



<h1>Orders</h1>

<table border='30' cellpadding='10' cellspacing='0' bgcolor='orange'>
  <tr>
    <th>Sr no.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Time</th>
    <th>Type</th>
    <th>Plan</th>
    <th>Duration</th>
    <th>Quantity</th>
    <th>Address</th>

  </tr>
<?php
$db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');



        $query = "SELECT * FROM order_now" ;
        $result = pg_query($query);
        
        
        if (!$result) {
          
       echo "Problem with query " . $query . "<br/>";
       echo pg_last_error();
       exit();
   }
    echo "<br>";
      $i=1;
        while($myrow = pg_fetch_assoc($result))
        {
          
          $value1 = $myrow['fname'];
        $value2 = $myrow['email'];
        $value3 = $myrow['TTime'];
        $value4 = $myrow['TType'];
        $value5 = $myrow['Plan'];
      $value6 = $myrow['Duration'];
      $value7 = $myrow['Quantity'];
      
      $value8 = $myrow['Address'];
      echo "<tr>"
;          echo "<td>".$i."</td>";
          echo "<td>".$value1."</td>";
          echo "<td>".$value2."</td>";
          echo "<td>".$value3."</td>";
          echo "<td>".$value4."</td>";
          echo "<td>".$value5."</td>";
          echo "<td>".$value6."</td>";
          echo "<td>".$value7."</td>";
          echo "<td>".$value8."</td>";
          $i = $i +1;

        
     }

?>
</table>


</body>
</html>