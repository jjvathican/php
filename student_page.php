
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include 'header.php';
include 'db_connection.php';
?>

<?php
if(isset($_POST["submit"]))
{
	 

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

	$user_id=$_SESSION["uid"];
	//echo $user_id;
	//$dept=$_POST["dept"];

	
		
	
		$sql="insert into student_page(student_id,personal_profie,work_experience,key_skills,education,honest,confidence,inspiring,commitment,communication,decision_making,accountability)values($user_id,'$personal','$work','$skills','$education',$honest,$confidence,$inspiring,$commit,$commun,$decision,$account)";
			if($con->query($sql)==true)
			{
				echo "Inserted successfully :)";
				$sql="update student_page set counter = counter + 1 where student_id=$user_id";
				if($con->query($sql)==true)
				{
				echo "<script type='text/javascript'>alert('sucessfull');</script>";
				echo '<script>window.location = "home.php";</script>';    
				}
				else
				{
				echo mysqli_error($con)	;
				echo "<script type='text/javascript'>alert('not sucessfull');</script>";
				echo '<script>window.location = "student_page.php";</script>';  
				}
			}
			else
			{
				echo mysqli_error($con)	;
				echo "Insertion failed :( ";
			}
		
	
}
else
{


	
?>

<center>
<h1 class=headit><?php echo "WELCOME USER:" ?></h1>
<form method="post" name ="form1" acton="student_page.php">
<br><br><br>
<table>



<tr>
<td>
<br><br>
PERSONAL PROFILE:
<br><br><br>
</td>
<td>
<br><br>
<textarea name="personal" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
WORK EXPERIENCE:
<br><br><br>
</td>
<td>
<br><br>
<textarea name="work" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>



<tr>
<td>
<br><br>
KEY SKILLS:
<br><br><br>
</td>
<td>
<br><br>
<textarea name="skills" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>



<tr>
<td>
<br><br>
EDUCATIONS:
<br><br><br>
</td>
<td>
<br><br>
<textarea name="education" rows="4" cols="50"></textarea>
<br><br><br>
</td>
</tr>



<tr>
<td>
<br><br>
HONESTY:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="honest" value="1"> EXCELENT
 <INPUT type="radio" name="honest" value="2"> GOOD
 <INPUT type="radio" name="honest" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="honest" value="4"> POOR
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
CONFIDENCE:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="confidence" value="1"> EXCELENT
 <INPUT type="radio" name="confidence" value="2"> GOOD
 <INPUT type="radio" name="confidence" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="confidence" value="4"> POOR
<br><br><br>
</td>
</tr>



<tr>
<td>
<br><br>
INSPIRING:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="inspiring" value="1"> EXCELENT
 <INPUT type="radio" name="inspiring" value="2"> GOOD
 <INPUT type="radio" name="inspiring" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="inspiring" value="4"> POOR
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>
COMMITEMENT:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="commit" value="1"> EXCELENT
 <INPUT type="radio" name="commit" value="2"> GOOD
 <INPUT type="radio" name="commit" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="commit" value="4"> POOR
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
COMMUNICATION:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="commun" value="1"> EXCELENT
 <INPUT type="radio" name="commun" value="2"> GOOD
 <INPUT type="radio" name="commun" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="commun" value="4"> POOR
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
DECISION MAKING:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="decision" value="1"> EXCELENT
 <INPUT type="radio" name="decision" value="2"> GOOD
 <INPUT type="radio" name="decision" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="decision" value="4"> POOR
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>
ACCOUNTABILITY:
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="account" value="1"> EXCELENT
 <INPUT type="radio" name="account" value="2"> GOOD
 <INPUT type="radio" name="account" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="account" value="4"> POOR
<br><br><br>
</td>
</tr>

<tr>
<td>
<input type="submit" value="submit" name="submit" >

</td>
</tr>
	
</table>
</form>
</center>
<?php

}
?>
<?php include 'footer.php';?>