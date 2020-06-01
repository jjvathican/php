<?php
include 'db_connection.php';
$student_gen=$_GET["q"];
$title_name=$_GET["p"];
$comments=$_GET["m"];
// echo $student_gen;
// echo $title_name;
// echo $comments;
list($m,$d,$y)=explode('-',date("m-d-y"));
$sql="insert into issues (is_name,student_gen,is_details,is_date) values('$title_name','$student_gen','$comments','$y-$m-$d')";
if($con->query($sql)==true)
{
    echo "OK";
}
else
{
    echo "Insertion failed :(";
}
	
?>