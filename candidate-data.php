

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
	</style>
</head>
<?php

include 'db_connection.php';
$q=$_GET["q"];

       $can=$q;
       //echo $q;
      
       ?>
		<h1>Table </h1>
	<table class="data-table">
		<caption class="title">TABLE VIEW FOR ADMIN</caption>
		<thead>
			<tr>
		<th>BATCH_NAME</th>
		<th>NUMBER OF VOTES</th>
			</tr>
		</thead>
		<tbody>
		<?php
	 $t=2;
         $sql="select batch.b_name,count(*)  from elect_process,student,batch where  elect_process.student_id=student.s_id and student.batch_id=batch.b_id and elect_process.candid_id=(select candidate.c_id from candidate,student where candidate.student_id=student.s_id and student.s_id=$can) group by batch.b_name;";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
				echo '<tr>';
				for($i=0;$i<$t;++$i)
				{
					echo '<td>'.$row[$i].'</td>';
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
 

?>