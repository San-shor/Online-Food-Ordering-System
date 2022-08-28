<?php
	
	$conn = mysqli_connect('localhost','root','','jhatpat-foods', 3306);

	if ($conn == false) 
	{
		echo "Database connection failed";
	}
?>