

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

       list($from_date,$to_date)=explode('|',$q);
       //echo $q;
      
       ?>
		<h1>Table </h1>
	<table class="data-table">
		<caption class="title">ELECTION RESULT</caption>
		<thead>
			<tr>
		<th>Voter_post</th>
		<th>VOter_name</th>
		<th>Voter_id</th>
		<th>Number of votes</th>
			</tr>
		</thead>
		<tbody>
		<?php
	 $t=4;
         $sql="select post_name.p_name,student.s_name student,candidate.c_id,count(*) cou from elect_process,post,post_name,candidate,student where candidate.c_id=elect_process.candid_id and candidate.post_id=post.p_id and post.post_id=post_name.p_id and candidate.c_id=student.s_id and post.elect_start = '$from_date' group by candidate.c_id";
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


           $sql="create or replace view results as select post_name.p_name,student.s_name student,count(*) cou from elect_process,post,post_name,candidate,student where candidate.c_id=elect_process.candid_id and candidate.post_id=post.p_id and post.post_id=post_name.p_id and candidate.c_id=student.s_id and post.elect_start = '$from_date' group by candidate.c_id";
			if($con->query($sql)==true)
			{
				echo "view created sucessfully :)";
			}
			else
			{
				echo "Insertion failed :(";
			}

        ?>
		</tbody>
		<tfoot>
			
		</tfoot>
	</table>
		<h1>Table </h1>
	<table class="data-table">
		<caption class="title">WINNERS</caption>
		<thead>
			<tr>
		<th>Student</th>
		<th>Post_name</th>
		<th>Number of votes</th>
			</tr>
		</thead>
		<tbody>
		<?php
	 $t=3;
         $sql="select a.student,a.p_name,a.cou from results a inner join(select max(cou) cou,p_name  from results group by p_name ) b on a.cou=b.cou and a.p_name=b.p_name;";
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