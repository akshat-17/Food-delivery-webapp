<?php
$db = pg_connect('host=localhost dbname=postgres user=postgres password=1234 port = 5432');
$query = "SELECT fname FROM registered_user" ;
$result = pg_query($query);
while($myrow = pg_fetch_assoc($result))
      	{
      		
      		$value1 = $myrow['fname'];
      		$people[] = $value1;
      	}
// $people[] = "Tejas";
// $people[] = "Salman";
// $people[] = "Shahrukh";
// $people[] = "Neil";
// $people[] = "Nitin";
// $people[] = "Mukesh";
// $people[] = "Raj";
// $people[] = "Pranay";
// $people[] = "Sanket";
// $people[] = "Vijay";
// $people[] = "Smit";

//Get query string
$q = $_REQUEST['q'];
$suggestion = "";

//Get suggestions
if($q !== "")
{
	$q = strtolower($q);
	$len = strlen($q);
	foreach($people as $person)
	{
		//stristr:it will find first occurence
		//substr:returns part of a string
		if(stristr($q,substr($person,0,$len)))
		{
			if($suggestion === "")
			{
				$suggestion = $person;

			}
			else
			{
				//if there are multiple names matching the substring entered till now
				//append
				$suggestion .= ", $person";
			}
		}
	}
}
echo $suggestion ==="" ? "No suggestion" : $suggestion;
?>