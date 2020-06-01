
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
include 'db_connection.php';


//$user_name=$_SESSION["user"];
include 'header.php';
?>
<body onload="tdystime();">
<center>
<h1 class=headit>CANDIDATE RESULT:<?//php echo $user_name; ?></h1>


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
xmlhttp.open("GET","candidate-data.php?q="+str,true);
xmlhttp.send();
}
</script>



<button  onclick="showUser( 86 )">Click me</button>




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

</center>
</body>

<?php include 'footer.php';?>