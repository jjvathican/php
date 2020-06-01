<?php
include 'header.php';
include 'db_connection.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if(isset($_POST["submit"]))
{
	

	
	$message=$_POST["message"];
	$head=$_POST["head"];
    $date=$_POST["fdate"];
    
    list($d,$m,$y)=explode('-',$date);
	//echo $user_id;
	//$dept=$_POST["dept"];

	
		
	 
		$sql="insert into events(e_name,e_desc,e_date) values('$head','$message','$y-$m-$d')";
			if($con->query($sql)==true)
			{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';  
			}
			else
			{
				echo mysqli_error($con)	;
				//echo "<script type='text/javascript'>alert('not sucessfull');</script>";
				//echo '<script>window.location = "a_notification.php";</script>';  
			}
		
	
}
else
{
	
?>
<center>
<h1 class=headit>NOTIFICATION</h1>

<form method="post" name ="form1" acton="admin_notification.php">
<br><br><br>
<table>

<tr>
<td>
<br><br>
HEADING :
<br><br>
</td>
<td>
<br><br>
<input type="text" name="head" onchange ="entername(this)">
<br><br>
</td>
</tr>

<tr>
<td>
<br><br>
NOTIFICATION MESSAGE :
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
<body onload="tdysdate();">
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
</td>
</tr>




<tr>
<td>
<br>
<br>

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