<?php  
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "memo";
	$db_con =  mysqli_connect($localhost, $username, $password, $dbname);
	if(!$db_con){
		echo "Cannot connected to database";
	}
?>