<?php
include 'db_connection.php';
$ename=$_GET["q"];
	$sql="insert into department (d_name) values('$ename')";
			if($con->query($sql)==true)
			{
				echo "OK";
				//echo "Inserted successfully :)";
				
				//include 'error/index.html';
			}
			else
			{
				echo "Insertion failed :(";
				//header("Location:error/index.html");
			}
?>