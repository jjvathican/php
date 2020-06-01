<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{

    $student_id=$_POST["student_id"];
    $post_id=$_POST["post_id"];
	
			
			$sql="insert into restrict_s(student_id,post_id) values($student_id,$post_id)";
			if($con->query($sql)==true)
			{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				 echo '<script>window.location = "home.php";</script>';
			}
			else
			{
				echo "<script type='text/javascript'>alert('failed');</script>";
				echo '<script>window.location = "restrict.php";</script>';
			}
		
	
 
	
}
else
{
?>
<center>
<br><br><br>
<h1 class="headit">LET RESTRICT STUDENT</h1>
<br><br><br>
<form method="post" action="restrict.php">
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
       $sql="select * from student";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[1]."name : ".$row[2]."</option>";
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
Enter the  Post id :
<br><br><br>
</td>
<td>
<br><br>
<select name = "post_id"  style="width :  200px;">
        <?php
       $sql="select post.p_id,post_name.p_name,post.elect_start,post.elect_end from post,post_name where post.post_id=post_name.p_id ";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[1]." ".$row[2]." ".$row[3]."</option>";
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
<input type="submit" value="Insert" name="submit">
</td>
</tr>
</table>
</form>
<br><br>

</center>
<?php
}
?>
<?php include 'footer.php';?>

