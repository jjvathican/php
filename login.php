
<?php
//echo "hello";
include 'db_connection.php';
if(isset($_POST["submit"]))
{
   
  $sname=$_POST["uname"];
    $spassword=$_POST["psw"];
 echo $sname;
echo $spassword;
   $sql="select * from student where password='$spassword' and s_gen='$sname';";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
        echo "value present";
                if($row=$res->fetch_array())
        {


        session_start();


        echo $row[2];
                $_SESSION["uid"] = $row[0];
                $_SESSION["user"] = $row[2];
                $_SESSION["student_gen"]=$row[1];
               //  $_SESSION["user_type"]="student";
              
              echo "user id :",$row[0];
             
        $stud_id=$row[0];
   // $sql1="select count(*) from candidate where candidate.c_id=$stud_id";
    $sql1="SELECT count(*) FROM candidate,post,post_name where candidate.post_id=post.p_id  and post.post_id=post_name.p_id and candidate.student_id=$stud_id and post_name.p_duration>(select TIMESTAMPDIFF(year,post.elect_end, now()))";
    //candidate who completed the election period will be considered as student
    if($res1=$con->query($sql1))
    {
      if($res1->num_rows>0)
      {
        
        if($row1=$res1->fetch_array())
        {
             
           if($row1[0]>0)
           {
            echo "  set";
            $_SESSION["user_type"]="candidate";
           }
           else
           {
            
           $_SESSION["user_type"]="student";
           }
        }
     
      }
    }
   echo '<script>window.location = "home.php";</script>';  
  
            
       
        }
      }
      else
      {
        echo " v: ".$res->num_rows;
      }
      
    }
    else
      {
        echo "Login Failed";
      
      }
    //  header("Location: election_process.php");
      
  // header("Location: profile.php");
}
else
{ 
  ?>

<html>

<head>

<style>
body {font-family: Arial, Helvetica, sans-serif;



    

 
 
  /* bring your own prefixes */
  transform: translate(70%, 13%);
    width: 40%;
    border: 3px solid #73AD21;
    padding:10px;
    align-items: center;
    display: flex;
    height: 80vh;
    flex-direction: row;
    margin: 10;
  



}
form 
{
  border: 3px solid #f1f1f1 ;
  align-items: center;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>
</head>
<body>


<table>
  <tr><th>
<h1>LOGIN</h1></th></tr>
<tr>
  <th>
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">ADMIN <a href="admin_login.php">go to admin</a></span>
  </div>
</form>
</th>
</tr>
</table>
<?php
}
?>
</body>
</html>
