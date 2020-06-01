<?php 
include 'header.php';
include 'db_connection.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if(isset($_POST["submit"]))
{
	
	$name=$_POST["sname"];
	$sex=$_POST["ssex"];
	$address=$_POST["saddress"];
	$phone=$_POST["sphone"];
	$password=$_POST["spassword"];
	$password1=$_POST["spassword1"];
	$batch_id_name=$_POST["sbatch_id"];
	//$dept=$_POST["dept"];
	// echo $batch_id_name."<br>";
	// echo $name."<br>";
	// echo $sex."<br>";
	// echo $address."<br>";
	// echo $phone."<br>";
	// echo $password."<br>";
	list($batch_id,$batch_name)=explode('|',$batch_id_name);
	// echo $batch_id."<br>";
	// echo $batch_name."<br>";
	// echo $password1."<br>";
	$sqlc="select count(*) from student where batch_id=$batch_id";
		$res=$con->query($sqlc);
		$row=$res->fetch_array();
		//echo $row[0];
		$num=$row[0]+1;
		$s_gen = $batch_name.'0'.$num;
		echo $s_gen."<br>";
		
	
		if($password ==  $password1)
		{
		if(preg_match("/[0-9]{10}/",$phone))
		{	

		$sql="insert into student(s_gen,s_name,sex,address,phone,batch_id,password) values('$s_gen','$name','$sex','$address','$phone',$batch_id,'$password')";
			if($con->query($sql)==true)
			{
				
				echo '<script>
				alert(" insertion sucessful");
				window.location = "home.php"
				</script>';
			}
			else
			{
			
				echo '<script>
				alert(" insertion failed");
				window.location = "student.php"
				</script>';
			}
		}
		else
		{
			echo '<script>
				alert("phone number not valid");
				window.location = "student.php"
				</script>';
		}
		}
		else
		{
			echo '<script>
			alert("password dont match");
			window.location = "student.php"
			</script>';
		}
	
}
else
{
?>
<center>
<h1 class=headit>Enter Student Details</h1>

<form method="post" name ="form1" acton="student.php">
<br><br><br>
<table>

<script>

function entername(inputtxt)
{
 
  if(!inputtxt.value.match(/^[a-zA-Z]+(\s{1}[a-zA-Z]+)*$/))
       {
       inputtxt.value="";
       alert(" not valid");
        }
}
</script>
	<tr>
<td>
<br><br>
Enter the Student Name. :
<br><br>
</td>
<td>
<br><br>
<input type="text" name="sname" onchange ="entername(this)">
<br><br>
</td>
</tr>

<tr>
<td>
<br><br>
Enter Sex:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="ssex" value="Mas" checked="checked"> Male<BR>
 <INPUT type="radio" name="ssex" value="Fas"> Female<BR>
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
Enter Address:
<br><br><br>
</td>
<td>
<br><br>
<textarea name="saddress" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>




<script>

function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(!inputtxt.value.match(phoneno))
       {
       inputtxt.value="";
       alert(" not valid");
        }
}
</script>

<tr>
<td>
<br><br>
Enter phone:
<br><br><br>
</td>
<td>
<br><br>
<input type="text" name="sphone" onchange ="phonenumber(this)">
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
Enter the Password. :
<br><br>
</td>
<td>
<br><br>
<input type="password" name="spassword">

<br><br>
</td>
</tr>

<tr>
<td>
<br><br>
Enter the Password Again :
<br><br>
</td>
<td>
<br><br>
<input type="password" name="spassword1">
<br><br>
</td>
</tr>

<tr>
<td>
<br><br>
Enter the  Batch id :
<br><br><br>
</td>
<td>
<br><br>
<select name = "sbatch_id">
        <?php
       $sql="select * from batch";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."|".$row[1]."'>".$row[1]."</option>";
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
<input type="submit" value="Insert" name="submit" onclick="CheckPassword(document.form1.spassword,document.form1.spassword1)">
<script>

function CheckPassword(p1,p2) 
{ 
	if(p1.value==p2.value)
	{
var passw=  /^[A-Za-z]\w{7,15}$/;
if(inputtxt.value.match(passw)) 
{ 
alert('Correct, try another...')
return true;
}
else
{ 
alert('Wrong...!')
return false;
}
}
else
{
	alert('password ia not same')
}
}

	</script>
</td>
</tr>
	
</table>
</form>
</center>
<?php
}
?>
<?php include 'footer.php';?>