
<?php
include 'header.php';
//session_start();
include 'db_connection.php';
 echo   $_SESSION["uid"];
?>
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
<body>
    <br><br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<br><br><br>
<!-- Header -->
<div class="header" id="myHeader">
 
  
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">4</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
 
    <?php
   
   $id=$_SESSION["uid"];
 $sql="select image from image_location where student_id=$id";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
          
        while($row=$res->fetch_array())
        {
           ?>  <div class="column"> <?php
        echo "<img  style='width:100%' src='".$row[0]."'>";
       ?>  </div> <?php
        }
         
      }
    }

    ?>
    
  
  

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "100%";  // IE10
        elements[i].style.flex = "100%";
    }
}

// Two images side by side
function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "50%";  // IE10
        elements[i].style.flex = "50%";
    }
}

// Four images side by side
function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.msFlex = "25%";  // IE10
        elements[i].style.flex = "25%";
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

</body>
</html>
<?php include 'footer.php';?>
