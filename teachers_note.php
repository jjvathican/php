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
<h1 class=headit>TEACHERS NOTE ON STUDENT</h1>

<form method="post" name ="form1" acton="student_page.php">
<br><br><br>
<table>

<tr>
<td>
<br><br>
Enter the  Student id :
<br><br><br>
</td>
<td>
<br><br>
<select name = "student_id"  style="width :  200px;">
        <?php
       $sql="select student_page.student_id,student.s_gen from student,student_page where student_page.student_id=student.s_id";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[1]."</option>";
				}
			}
		}
        ?>          
</select>
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>
TEACHERS NOTE:
<br><br><br>
</td>
<td>
<br><br>
<textarea name="teachers" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>
VALIDATE:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="valid" value="1"> YES
 <INPUT type="radio" name="valid" value="0"> NO

<br><br><br>
</td>
</tr>


<tr>
<td>
<input type="submit" value="Insert" name="submit" onclick="CheckPassword(document.form1.spassword,document.form1.spassword1)">

</td>
</tr>
	
</table>
</form>
</center>
<?php
}
?>
<?php include 'footer.php';?>