<?php include 'header.php';
?>
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
include 'db_connection.php';
if(isset($_POST["submit"]))
{
	
	$candidate	= $_POST["voter"];
	$student_id=$_SESSION["uid"];//$_POST["student_id"];//
	$jd=$_POST["election_time"];
    echo $student_id;
//	$student_id=42;
	//$candidate_id=$_POST["candidate"];
	list($d,$m,$y)=explode('-',$jd);//date("m-d-y"));
	//echo date("Y-m-d");
		//echo $candidate[1]	;
    
		for($i=0;$i<count($candidate);$i++)
		{try{
			//echo $candidate[$i];
			if($candidate[$i]!=0)
			{
			$sql="insert into elect_process(student_id,candid_id,elect_time) values($student_id,$candidate[$i],'$y-$m-$d')";
			if($con->query($sql)==true)
			{
				 echo "<script type='text/javascript'>alert('sucessfull');</script>";
				//echo "<br> alert(Inserted successfully :)) <br>";
				  echo '<script>window.location = "home.php";</script>';
			}
			else
			{
				//echo "<br> Insertion failed :( <br>";
				echo "<script type='text/javascript'>alert('".mysqli_error($con)."');</script>";
				echo '<script>window.location = "election_process.php";</script>';
				 
			}
		}
		}
		catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
}
		}
	
	
	
}
else
{

//$user_name=$_SESSION["user"];
?>
<body onload="tdysdate();">
<center>
<h1 class=headit>LETS VOTE:<?php// echo $user_name; ?></h1>

<form method="post" acton="election_process.php">
<br><br><br>




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
xmlhttp.open("GET","get-data.php?q="+str,true);
xmlhttp.send();
}
</script>





<h2>SELECT DATE:</h2>
<select  onChange="showUser(this.value)" name = "post_id" style="width :  200px; ">
	
        <?php
       $sql=" select distinct elect_start,elect_end from post";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."|".$row[1]."'>"." from : ".$row[0]." to: ".$row[1]."</option>";
				}

			}
		}
        ?>          
</select>

<br><br>


<div id="txtHint" >
<b>your VOTER DETAILS WILL BE DISPLAYED HERE</b>
</div>

<br><br><br>


<br><br><br>
<table>

<tr>

<td>

</td>
</tr>
<tr>
<td>

Current Date :

</td>
<td>


<input type="text" name="election_time" id="placedate" placeholder="dd-mm-yyyy">
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