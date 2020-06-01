<?php
include 'header.php';
include 'db_connection.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if(isset($_POST["submit"]))
{
	

	
	$teachers_note=$_POST["teachers"];
	$user_id=$_POST["student_id"];
	$validate=$_POST["valid"];
	//echo $user_id;
	//$dept=$_POST["dept"];

	
		
	
		$sql="update  student_page set teachers_note='$teachers_note',validated=$validate where student_id=$user_id";
			if($con->query($sql)==true)
			{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';  
			}
			else
			{
				echo mysqli_error($con)	;
				echo "<script type='text/javascript'>alert('not sucessfull');</script>";
				echo '<script>window.location = "teachers_note.php";</script>';  
			}
		
	
}
else
{
	
?>
<center>
<h1 class=headit>NOTIFICATIONT</h1>

<form method="post" name ="form1" acton="admin_notification.php">
<br><br><br>
<table>



<tr>
<td>
<br><br>
NOTIFICATION MESSAGE
<br><br><br>
</td>
<td>
<br><br>
<textarea name="message" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>





<tr>
<td>
<input type="submit" value="Insert" name="submit" )">

</td>
</tr>
	
</table>
</form>
</center>
<?php
}
?>
<?php include 'footer.php';?>