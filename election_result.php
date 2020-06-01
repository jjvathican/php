
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
include 'db_connection.php';


//$user_name=$_SESSION["user"];
include 'header.php';
?>
<body onload="tdystime();">


<center>
<h1 class=headit>ELECTION RESULT:</h1>
<form method="post" acton="election_process.php">
<br><br><br>



<table>

<tr>

<td>
<br><br>

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
xmlhttp.open("GET","election-data.php?q="+str,true);
xmlhttp.send();
}
</script>




<table>
	<tr>
<td>
Enter DATE:
</td>
<td>
<select  onChange="showUser(this.value)" name = "post_id" style="width :  200px; ">
	<option value="hello">null</option>
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
</td>
</tr>
</table>
<br><br>


<br><br><br>




<br>
<div id="txtHint" >
<b>your VOTER DETAILS WILL BE DISPLAYED HERE</b>
</div>

<br><br><br>


<br><br><br>
</td>
</tr>



	
</table>
</form>
</center>
</body>

<?php include 'footer.php';?>