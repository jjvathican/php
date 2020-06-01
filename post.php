<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{
	
	

    $str_date=$_POST["sdate"];
    $end_date=$_POST["edate"];
    $post_id=$_POST["post_id"];
    //echo $post_id;
    $elect_start=$_POST["elect_start"];
    $elect_end=$_POST["elect_end"];
	if(preg_match("/[0-9]{2}-[0-9]{2}-[0-9]{4}/",$str_date) && preg_match("/[0-9]{2}-[0-9]{2}-[0-9]{4}/",$end_date) && 
		preg_match("/[0-9]{2}-[0-9]{2}-[0-9]{4}/",$elect_start)&&preg_match("/[0-9]{2}-[0-9]{2}-[0-9]{4}/",$elect_end))
	{
		list($m,$d,$y)=explode('-',$str_date);
		list($m1,$d1,$y1)=explode('-',$end_date);
		list($mes,$des,$yes)=explode('-',$elect_start);
		list($mee,$dee,$yee)=explode('-',$elect_end);
		if(!checkdate($m,$d,$y) && !checkdate($m1,$d1,$y1) && !checkdate($mes,$des,$yes) && !checkdate($mee,$dee,$yee))
		{
			echo "DOB not valid";
		}
		else
		{
			
			$sql="insert into post(post_id,f_date,t_date,elect_start,elect_end) values('$post_id','$y-$m-$d',' $y1-$m1-$d1','$yes-$mes-$des','$yee-$mee-$dee')";
			if($con->query($sql)==true)
			{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';    
			}
			else
			{   
			    echo "d1".$d1;
			    echo "des".$des;
				echo "<script type='text/javascript'>alert('not sucessfull');</script>";
				echo '<script>window.location = "post.php";</script>';    
				 die(mysqli_error($con));
			}
		}
	}
	else
	{
		echo "preg match error";
	}
 
	
}
else
{
?>
<center>
<br><br><br><br><br><br>
<h1 class="headit">Insert POST Details</h1>
<br><br><br>
<form method="post" action="post.php">
<table>




<tr>
<td>
<br><br>
<font color="black">Enter the  Post Name :!</font>
<br><br><br>
</td>
<td>
<br><br>
<select name = "post_id" style="width : 200px; color: blue;">
        <?php
       $sql="select * from post_name";
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

<font color="black">application begin date :</font>
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="sdate" placeholder="mm-dd-yyyy" style="width :  200px;">
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>

<font color="black">Application due date :
</font>
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="edate" placeholder="mm-dd-yyyy" style="width :  200px;">
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>

<font color="black">Election Start date :</font>
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="elect_start" placeholder="mm-dd-yyyy" style="width :  200px;">
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>

<font color="black">Election End date :</font>
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="elect_end" placeholder="mm-dd-yyyy" style="width :  200px;">
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

