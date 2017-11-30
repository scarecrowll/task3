<?php 
	$conn = pg_connect("host=ec2-54-235-210-115.compute-1.amazonaws.com port=5432 dbname=d8bmrqm12r9qrm user=miylqcpjgodxbc password=fce6a36620c8520ca48be45814b2cc90385ad3ce5cc8b1b725f3256a2cdfc463");
	
	if (!$conn) 
	{
  		echo "An error occurred.";
  		exit;
	}
	$result = pg_query($conn, "SELECT * FROM n ORDER BY age");
	if (!$result) 
	{
  		echo "An error occurred.";
  		exit;
	}
	while ($row = pg_fetch_row($result)) 
	{
		echo"$row[0] $row[1] <br>";
	}
	?>
