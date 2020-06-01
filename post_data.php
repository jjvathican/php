<?php
include 'db_connection.php';
$ename=$_GET["q"];
$dur=$_GET["p"];
	$sql="insert into post_name(p_name,p_duration) values('$ename','$dur')";
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