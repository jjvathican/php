
<?php

include 'db_connection.php';
$q=$_GET["q"];
?>
<center>
<table>







<style>


.row {
    display: -ms-flexbox; /* IE 10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE 10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
    -ms-flex: 50%; /* IE 10 */
    flex: 50%;
    padding: 0 4px;
}

.column img {
    margin-top: 5px;
    vertical-align: middle;
}

/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
    font-size: 18px;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
</style>


 

<!-- Header -->
<div class="header" id="myHeader">
 
  
  
  <button class="btn active" onclick="two()">2</button>

</div>

<!-- Photo Grid -->
<div class="row"> 
 
    <?php

 $sql="select image from image_location where student_id=$q";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
          
        while($row=$res->fetch_array())
        {
           ?>  <div class="column"> <?php
        echo "<img  style='width:20%' src='".$row[0]."'>";
       ?>  </div> <?php
        }
         
      }
    }

    ?>
    
   
  
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;



// Two images side by side
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%";  // IE10
        elements[i].style.flex = "50%";
    }
}


// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>





<tr>
<td>
<br><br>
<h1>PERSONAL DETAILS :</h1>
<br><br><br>
</td>
<td>
<br><br>
<textarea name='personal' rows='10' cols='100' disabled>
        <?php
       $sql="select personal_profie from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				echo $row[0];
				}
			}
		}
        ?>          
</textarea>
<br><br><br>
</td>
</tr>


<tr>
<td>
<br><br>
<h1>WORK EXPERIENCE :</h1>
<br><br><br>
</td>
<td>
<br><br>
<textarea name='work' rows='10' cols='100' disabled>
        <?php
       $sql="select work_experience from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				echo $row[0];
				}
			}
		}
        ?>          
</textarea>
<br><br><br>
</td>
</tr>



<tr>
<td>
<br><br>
<h1>KEY SKILLS :</h1>
<br><br><br>
</td>
<td>
<br><br>
<textarea name='skills' rows='10' cols='100' disabled>
        <?php
       $sql="select key_skills from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				echo $row[0];
				}
			}
		}
        ?>          
</textarea>
<br><br><br>
</td>
</tr>




<tr>
<td>
<br><br>
<h1>TEACHERS NOTE :</h1>
<br><br><br>
</td>
<td>
<br><br>
<textarea name='skills' rows='10' cols='100' disabled>
        <?php
       $sql="select teachers_note from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				echo $row[0];
				}
			}
		}
        ?>          
</textarea>
<br><br><br>
</td>
</tr>



<tr>
<td>
<br><br>
<h1>EDUCATION :</h1>
<br><br><br>
</td>
<td>
<br><br>
<textarea name='education' rows='10' cols='100' disabled>
        <?php
       $sql="select education from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				echo $row[0];
				}
			}
		}
        ?>          
</textarea>
<br><br><br>
</td>
</tr>

<tr>
<td>
<br><br>
<h1>HONESTY:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="honest" value="1"> EXCELENT
 <INPUT type="radio" name="honest" value="2"> GOOD
 <INPUT type="radio" name="honest" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="honest" value="4"> POOR
<br><br>

   <?php
       $sql="select honest,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
				$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>          

<br><br>
</td>
</tr>


<tr>
<td>
<br><br>
<h1>CONFIDENCE:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="confidence" value="1"> EXCELENT
 <INPUT type="radio" name="confidence" value="2"> GOOD
 <INPUT type="radio" name="confidence" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="confidence" value="4"> POOR
<br><br>

   <?php
       $sql="select confidence,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>          
<br><br>
</td>
</tr>


<tr>
<td>
<br><br>
<h1>INSPIRING:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="inspiring" value="1"> EXCELENT
 <INPUT type="radio" name="inspiring" value="2"> GOOD
 <INPUT type="radio" name="inspiring" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="inspiring" value="4"> POOR
<br><br>

   <?php
       $sql="select inspiring,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>        <br><br>
</td>
</tr>


<tr>
<td>
<br><br>
<h1>COMMITEMENT:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="commit" value="1"> EXCELENT
 <INPUT type="radio" name="commit" value="2"> GOOD
 <INPUT type="radio" name="commit" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="commit" value="4"> POOR
<br><br>

   <?php
       $sql="select commitment,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>      <br><br>
</td>
</tr>

<tr>
<td>
<br><br>
<h1>COMMUNICATION:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="commun" value="1"> EXCELENT
 <INPUT type="radio" name="commun" value="2"> GOOD
 <INPUT type="radio" name="commun" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="commun" value="4"> POOR
<br><br>

   <?php
       $sql="select communication,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>      <br><br>
</td>
</tr>

<tr>
<td>
<br><br>
<h1>DECISION MAKING:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="decision" value="1"> EXCELENT
 <INPUT type="radio" name="decision" value="2"> GOOD
 <INPUT type="radio" name="decision" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="decision" value="4"> POOR
<br><br>

   <?php
       $sql="select decision_making,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>      <br><br>
</td>
</tr>


<tr>
<td>
<br><br>
<h1>ACCOUNTABILITY:</h1>
<br><br><br>
</td>
<td>
<br><br>
 <INPUT type="radio" name="account" value="1"> EXCELENT
 <INPUT type="radio" name="account" value="2"> GOOD
 <INPUT type="radio" name="account" value="3"> AVERAGE
 <INPUT type="radio" checked="checked" name="account" value="4"> POOR
<br><br>

   <?php
       $sql="select accountability,counter from student_page where student_id=$q";
		if($res=$con->query($sql))
		{
			if($res->num_rows>0)
			{
				
				if($row=$res->fetch_array())
				{
			
				$rat=5-($row[0]/$row[1]);
				$round=round($rat,3);
				echo "AVG Rating is:".$round." / "."5";
				}
			}
		}
        ?>      <br><br>
</td>
</tr>



</table>
</center>
