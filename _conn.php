<?php 
	
	$servername = "localhost";
	$username 	= "root";
	$password 	= "";
	$database 	= "db_astigtech";

	// ============== Create connection 

	$connect = mysqli_connect($servername, $username, $password, $database);


	// ============== Check connection

	if ($connect->connect_error)
	{
	  die("Connection failed: " . $connect->connect_error);	
	}

	?> 

	<!------------------ Checking Database Connection 
		<div class="w3-panel w3-green w3-display-container">
	  		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-medium w3-display-topright">&times;</span>
	  		<p> Database Connection Successfully</p>
		</div> 
	 ---------------------->


