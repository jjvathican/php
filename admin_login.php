




<?php
//echo "hello";
include 'db_connection.php';
if(isset($_POST["submit"]))
{
  echo "mannnn";
  $sname=$_POST["uname"];
    $spassword=$_POST["psw"];
 echo $sname;
 echo $spassword;
   $sql="select * from admin where password='$spassword' and a_name='$sname';";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
        if($row=$res->fetch_array())
        {
      
        session_start();
                echo $row[2];
                $_SESSION["uid"] = $row[0];
                $_SESSION["user"] = $row[1];
                $_SESSION["user_type"]="admin";
                echo '<script>window.location = "home.php";</script>';
                echo "user found";
            
       
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
form {border: 3px solid #f1f1f1;}

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
<form action="admin_login.php" method="post">
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
    <span class="psw">ADMIN <a href="login.php">go to student</a></span>
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
