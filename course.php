<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{
	
	$ename=$_POST["ename"];
	$per=$_POST["eperiod"];
	$dept=$_POST["dept"];
	
	
			
		$sql="insert into course(c_name,c_period,dept_id) values('$ename',$per,'$dept')";
			if($con->query($sql)==true)
			{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';  
			}
			else
			{
				echo "<script type='text/javascript'>alert('not sucessfull');</script>";
				echo '<script>window.location = "course.php";</script>';  
			}
		
	
	
}
else
{
?>
<center>
<h1 class=headit>enter course</h1>

<form method="post" acton="batch.php">
<br><br><br>
<table>
	<tr>
<td>
<br><br>
Enter the Course Name. :
<br><br>
</td>
<td>
<br><br>
<input type="text" name="ename">
<br><br>
</td>
</tr>
<tr>
<td>
<br><br>
Enter the  Course  Period :
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="eperiod">
<br><br><br>
</td>
</tr>
<tr>
<tr>
<td>
<br><br>
Enter the  Department id :
<br><br><br>
</td>
<td>
<br><br>
<select name = "dept">
        <?php
       $sql="select * from department";
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
<input type="submit" value="Insert" name="submit">
</td>
</tr>
	
	</table>
</form>
</center>
<?php
}
?>
<?php include 'footer.php';?>