
<?php// include 'header.php';?>
<?php
include 'db_connection.php';

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		table, th, td {
    border: 1px solid black;

}
th,td
{
	width:150px;
	height:80px;
	text-align: center;
}


	</style>
</head>
<body>
<?php

if(isset($_POST["submit"]))
{
	?>
	<form method="post" action="display_desc.php">
<table>
	<tr>
<td>
<br><br><br><br><br><br><br>
SELECT TABLES TO VIEW :
<br><br><br>
</td>
<td>

<select name = "table_name" style="width :  200px;">
        <?php
       $sql="show tables";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[0]."</option>";
				}
			}
		}
        ?> 

</select>

</td>
</tr>
<tr><td>
	<br>
	<input type="submit" value="Search" name="submit">
	<br>
</td>
	</tr>
</table>
</form>
	<h1>Table </h1>
	<table border="1">
		
		<thead>
			<tr>
		<th>Field</th>
		<th>Type</th>
		
		<th>Constraint</th>
		
		<th>&nbsp;&nbsp;Description&nbsp;&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$table_name=$_POST["table_name"];
		$t=6;
	echo $t;
        $sql="desc $table_name";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				$xy=0;
				$vm=0;
				echo '<tr>';
				for($i=0;$i<$t;++$i)
				{
					if($i!=4 && $i!=2)
					{
					if($i==3)
					{
						if($row[$i]=='PRI')
						{
							$xy=1;
						}
						elseif($row[$i]=='MUL')
						{
							$xy=2;
						}
						elseif($row[$i]=='UNI')
						{
							$xy=3;
						}
						else
						{
							$xy=4;
						}
					
					}
					if($xy==1)
					{
						echo '<td>'.'primary key'.'</td>';
						$xy=0;
					}
					elseif($xy==2)
					{
						echo '<td>'.'foreign key'.'</td>';
						$vm=1;
						$xy=0;
					}
					elseif($xy==3)
					{
						echo '<td>'.'unique'.'</td>';
						$xy=0;
					}
					elseif($xy==4)
					{
						$vm=1;
						echo '<td>'.'not null'.'</td>';
						$xy=0;
					}
					elseif($vm==1)
					{
						echo '<td>'.'<textarea style="width:20s0px;height:80px;">Enter details about </textarea>'.'</td>';
						$vm=0;
					}
					else
					{
						if($row[$i]==''&&$i==5)
						{
							echo '<td>'.'<textarea style="width:20s0px;height:80px;">Enter details about </textarea>'.'</td>';
						}
						else
						{
							echo '<td>'.$row[$i].'</td>';
				        }
					}
				    }

				}
				echo '</tr>';
				#echo "<option  value='".$row[0]."|".$row[1]."'>".$row[1]."</option>";
				}
			}
		}
        ?>
		</tbody>
		<tfoot>

		</tfoot>
	</table>
	<?php
}
else
{
 ?>
<form method="post" action="display_desc.php">
<table>
	<tr>
<td>
<br><br>
Enter the  Batch id :
<br><br><br>
</td>
<td>
<br><br>
<select name = "table_name">
        <?php
       $sql="show tables";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo "<option  value='".$row[0]."'>".$row[0]."</option>";
				}
			}
		}
        ?> 

</select>
<br><br><br>
</td>
</tr>
<tr><td>
	<br>
	<input type="submit" value="Search" name="submit">
	<br>
</td>
	</tr>
</table>
</form>
<?php

}
?>
</body>
<br><br><br><br><br><br>
<?php include 'footer.php';?>
</html>