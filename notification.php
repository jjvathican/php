
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.bodyit {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.containerit {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}



.containerit::after {
  content: "";
  clear: both;
  display: table;
}



.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>


<?php include 'header.php';?>
<div class="bodyit">
<h2>NOTIFICATION</h2>
<?php
$val=$_SESSION["student_gen"];
$sql="select * from issues where student_gen='$val'";

    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
        while($row=$res->fetch_array())
        {
            ?>
            <div class="containerit">
            <p><?php echo $row[3]; ?> </p>
            <span class="time-right"><?php echo $row[2]; ?></span>
            </div>
            <?php
        }
      }
    }
?>



</div>
<?php include 'footer.php';?>
</html>