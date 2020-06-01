<?php
include 'db_connection.php';
$q=$_GET["q"];
 

       list($from_date,$to_date)=explode('|',$q);
       //echo $q;
       $sql="select * from post_name";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{	
				$n=0;
				while($row=$res->fetch_array())
				{
				echo "<h1> >> select candidate for the post:".$row[1]." </h1>";
				// $sql1="select * from student where s_id IN (select student_id from candidate where post_id IN (select p_id from post where post_id = $row[0]))";
				$sql1 = "select candidate.c_id, student.s_gen ,student.s_name,student.s_id from student,candidate,post,post_name where post.p_id=candidate.post_id 
				and candidate.student_id = student.s_id and post_name.p_id = post.post_id and post_name.p_id=$row[0] and elect_start='$from_date'";
					if($res1=$con->query($sql1))
						{
							if($res1->num_rows>0)
								{	
									while($row1=$res1->fetch_array())
									{ ?>
										
										<h3>
										<input type="radio" <?php echo "name='voter[".$n."]'"; echo "value='".$row1[0]."'"; ?>  > <?php echo $row1[1]."  name:".$row1[2]; ?></h3>  
											<a href="<?php echo "student-data.php?q=".$row1[3]; ?>" >profile</a><br>

									  <?php	
										//echo "<option  value='".$row1[0]."'>".$row1[1]."</option>";
									}
									?>
									
									<input type="radio"  checked="checked" value="0" <?php echo "name='voter[".$n."]'"; ?> > NULL 
									<?php
									$n=$n+1;

								}						
						}
						echo "<br>";
				}
			}
		}
 

?>