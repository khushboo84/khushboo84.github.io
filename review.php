<!DOCTYPE html>
<html>
<head>
</head>
       <body style="background-color:peach"> 
  <center>
		<?php

		 	$db_username = 'root';
 			$db_password = '';
 			$db_name = 'project';
 			$db_host = 'localhost:3307';
		$conn = new mysqli($db_host, $db_username, $db_password,$db_name);
			if(!$conn) { 
    		echo "Unable to connect database".mysqli_error($conn);die; 
				} else { 
    				echo ""; 
						}
		
		// Taking all 7 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email_id = $_REQUEST['email_id'];
		$feedback	= $_REQUEST['feedback'];
		
		// Performing insert query execution
		$sql1 = "INSERT INTO feedback1 VALUES ('$first_name','$last_name','$email_id','$feedback')";
		
		if(mysqli_query($conn, $sql1)){
			echo "";
		} else{
			echo "ERROR: Hush! Sorry $sql1. "
				. mysqli_error($conn);
		}
		
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
         
</body>
</html>