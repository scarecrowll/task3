
<?php
	$conn = pg_connect("host=ec2-54-221-221-153.compute-1.amazonaws.com port=5432 dbname=d61jmbep5stsgi user=uyxnzawchpicvm password=587724c21903603d0814932b32fb538e822499ab7df78c311009f60c37b11adc");
	if (!$conn) 
	{
  		echo "An error occurred.";
  		exit;
	}
	$result = pg_query($conn, "SELECT * FROM student ORDER BY age");
	if (!$result) 
	{
  		echo "An error occurred.";
  		exit;
	}
	while ($row = pg_fetch_row($result)) 
	{
		echo"$row[0] $row[1] $row[2]<br>";
	}
?>

