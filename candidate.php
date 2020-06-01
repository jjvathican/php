<?php include 'header.php';?>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{
	
	$student_id=$_SESSION['uid'];//$_POST["stud"];
	$post_id=$_POST["post"];
    $jd=$_POST["fdate"];

	if(preg_match("/[0-9]{2}-[0-9]{2}-[0-9]{4}/",$jd))
	{
		list($d,$m,$y)=explode('-',$jd);
		

		if(!checkdate($m,$d,$y))
		{
			echo "Date not valid";
		}
		else
		{

			$sql="insert into candidate(post_id,student_id,c_date) values($post_id,$student_id,'$y-$m-$d')";
			if($con->query($sql)==true)
			{
				echo '<script>
				alert(" insertion sucessfull");
				window.location = "home.php";
				</script>';
			}
			else
			{
				// die(mysqli_error($con));
				 echo '<script>
				 alert("'.mysqli_error($con).'");
				 window.location = "candidate.php";
				 </script>';
			}
		}
	}
	else
	{
		echo '<script>
		alert("date problem");
		window.location = "home.php"
		</script>';
	}
	
}
else
{
?>
<body onload="tdysdate();">
<center>
<h1 class=headit>Enter Candidate</h1>

<form method="post" acton="candidate.php" >
<br>
<table>

<tr>
<td>
<br><br>
Enter the Post name:
<br><br>
</td>
<td>
<br>
<select name = "post" style="width:200px;">
        <?php
       $sql="select post.p_id,post_name.p_name,post.f_date,post.t_date from post,post_name where post.post_id=post_name.p_id;";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[0]." ".$row[1]." ".$row[2]." ".$row[3]."</option>";
				}
			}
		}
        ?>          
</select>

<br>
</td>
</tr>


<h1><?php echo "your id :",$_SESSION['student_gen']; ?></h1>
<br>





<tr>
<td>
<br><br>
Enter the  Join-date :
<br><br>
</td>
<td>
<br><br>

<input type="text" name="fdate" id="placedate" placeholder="dd-mm-yyyy" style="width :  200px;">
<script >
	function tdysdate()
	{
	var today = new Date();
	var dd=today.getDate();
	var mm=today.getMonth()+1;
	var yy=today.getFullYear();
	if(dd<10)
	{
		dd='0'+dd;
	}
	if(mm<10)
	{
		mm='0'+mm;
	}
	document.getElementById("placedate").value=dd+'-'+mm+'-'+yy;
	}
</script>
<br><br>
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
</body>
<?php
}
?>
<?php include 'footer.php';?>