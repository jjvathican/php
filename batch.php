<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{
	
	echo $_POST["course"];
	list($period,$course,$cou_id)=explode('|',$_POST["course"]);
    $jd=$_POST["fdate"];
	if(preg_match("/[0-9]{2}-[0-9]{2}-[0-9]{4}/",$jd))
	{
		list($m,$d,$y)=explode('-',$jd);
		echo $period." ".$course;
		$nextyear=$y+$period;
		$ename=$course.substr($y,-2);
		

		if(!checkdate($m,$d,$y))
		{
			echo "Date not valid";
		}
		else
		{
			
			$sql="insert into batch(b_name,course_id,f_year,t_year) values('$ename',$cou_id,'$y-$m-$d','$nextyear-$m-$d')";
			if($con->query($sql)==true)
			{
				
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';  
				
			}
			else
			{
				
				echo "<script type='text/javascript'>alert('not sucessfull');</script>";
				echo '<script>window.location = "batch.php";</script>';  
				
			}
		}
	}
	
}
else
{
?>
<center>
<h1 class=headit>Enter Batch</h1>

<form method="post" acton="batch.php">
<br><br><br>
<table>

<tr>
<td>
<br><br>
Enter the Course name:
<br><br><br>
</td>
<td>
<br><br>
<select name = "course">
        <?php
       $sql="select * from course";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[2]."|".$row[1]."|".$row[0]."'>".$row[1]."</option>";
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
Enter the  Join-date :
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="fdate" placeholder="mm-dd-yyyy">
<br><br><br>
</td>



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