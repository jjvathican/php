
<link rel="stylesheet" type="text/css" href="style.css" />

<?php
include 'db_connection.php';


//$user_name=$_SESSION["user"];
include 'header.php';
?>
<body onload="tdystime();">


<center>
<h1 class=headit>GET CURRENT CANDIDATE :</h1>




<table>

<tr>

<td>
<br><br>

<script>
 
function showUser()
{

 
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
xmlhttp.open("GET","candidate_result_1.php",true);
xmlhttp.send();
}
</script>

<button  onclick="showUser()">Click me</button>


<br><br>





<br>
<div id="txtHint" >
<b>your VOTER DETAILS WILL BE DISPLAYED HERE</b>
</div>

<br><br><br>


<br><br><br>
</td>
</tr>



	
</table>



<h1 class=headit>PREDICTING RESULT :</h1>




<table>

<tr>

<td>
<br><br>

<script>
 
function showUser1()
{

 
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
document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","candidate_result_2.php",true);
xmlhttp.send();
}
</script>

<button  onclick="showUser1()">Click me</button>


<br><br>





<br>
<div id="txtHint1" >
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