<?php

include 'db_connection.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if(isset($_POST["submit"]))
{
	 session_start();  

	$personal=$_POST["personal"];
	$work=$_POST["work"];
	$skills=$_POST["skills"];
	$education=$_POST["education"];
	$honest=$_POST["honest"];
	$confidence=$_POST["confidence"];
	$inspiring=$_POST["inspiring"];
	$commit=$_POST["commit"];
	$commun=$_POST["commun"];
	$decision=$_POST["decision"];
	$account=$_POST["account"];
	$user_id=$_POST["student_id"];
	//echo $honest;
	//$dept=$_POST["dept"];

	
		
	
		
		$sql="update student_page set counter = counter + 1,honest = honest + $honest,confidence = confidence + $confidence,inspiring = inspiring + $inspiring,commitment = commitment + $commit,communication = communication + $commun,decision_making = decision_making + $decision,accountability = accountability + $account where student_id=$user_id";
		if($con->query($sql)==true)
			{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';  
			}
			else
			{
				echo mysqli_error($con)	;
				echo "<script type='text/javascript'>alert('not sucessfull');</script>";
			}
	
}
else
{
include 'header.php';
?>
<center>
<h1 class=headit>VIEW STUDENT DETAILS:</h1>

<form method="post" name ="form1" acton="viewall.php">
<br><br><br>
<table>


<script>
 
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}
 
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
 
 
 
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","student-data.php?q="+str,true);
xmlhttp.send();
}
</script>








<tr>
<td>
<br><br>
Enter the  Student id :
<br><br><br>
</td>
<td>
<br><br>
<select name = "student_id" onChange="showUser(this.value)" style="width :  200px;">
        <?php
       $sql="select student_page.student_id,student.s_gen,student.s_name from student,student_page where student_page.student_id=student.s_id ";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[1]." ".$row[2]."</option>";
				}
			}
		}
        ?>          
</select>
<br><br><br>
</td>
</tr>


<div id="txtHint" >
<b>USER PROFILE WILL BE DISPLAYED HERE</b>
</div>

<input type="submit" value="Insert" name="submit" >




<tr>
<td>

</td>
</tr>
	
</table>
</form>
</center>
<?php
}
?>
<?php include 'footer.php';?>