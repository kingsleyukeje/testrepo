<?php
	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "";
	$DB_NAME = "pattern";

	$conn = new MySQLi($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

	if ($conn->connect_errno)
	{
		die("ERROR : -> ".$conn->connect_error);
	}


	
	$query = $conn->query("SELECT * FROM admin ");
	$adminRow = $query->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>

    <title>Welcome - <?php echo $adminRow['admin_name']; ?></title>

   
	

</head>
<body>

   
      

          
                        
                        <span class="glyphicon glyphicon-user"></span>&nbsp;Hi <?php echo $adminRow['admin_name']; ?>&nbsp;<span class="caret"></span></a>
                        
                            
</body>

</html>

	
