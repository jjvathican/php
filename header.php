<!DOCTYPE html>
<?php
include 'db_connection.php';
session_start();
 if ($_SESSION['user_type'] == '')
{
    echo 'the session is empty';
   echo '<script>window.location = "login.php";</script>';
}
?>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ELPolitic - Responsive HTML5 OnePage Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
      <div id="loader"></div>  
    </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    



    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>






                    <a class="navbar-brand" href="index.html"><img src="images/logos/abc.png" alt="image"></a>
                    <br><br>
                </div>














                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navba2-right">
                        <li><a  href="home.php" cla3s="active">Home</a></li>
                        <li><a data-scroll-nav="1" href="#about">About Us</a></li>
                        <li><a data-scroll-nav="2" href="#issues">Issues</a></li>
                        <li><a data-scroll-nav="3" href="#event">Event</a></li>
                        <li><a data-scroll-nav="6" href="#blog">Notify</a></li>
                        <li><a data-scroll-nav="7" href="#contact">Contact</a></li>
                        <li><a href="logout.php">LogOut</a></li>
                        <li><a  href="login.php">LoGIN</a></li>
















<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}


.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   
<?php
if ($_SESSION['user_type'] == 'admin')
{
    
  $link = basename($_SERVER['PHP_SELF']);
   $sql="select * from admin_pages";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
        $inc=0;
        while($row=$res->fetch_array())
        {
        echo "<a href='".$row[0]."'>".$row[1]."</a>";
        if($row[0]==$link)
        {
          $inc = $inc + 1;
        }
        }
        if($inc == 0)
        {
           echo '<script>window.location = "login.php";</script>';
        }
      }
    }
}
 
?>

<?php
if ($_SESSION['user_type'] == 'student')
{

  $link = basename($_SERVER['PHP_SELF']);
   $sql="select * from user_pages";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
           $inc=0;
        while($row=$res->fetch_array())
        {
        echo "<a href='".$row[0]."'>".$row[1]."</a>";
        if($row[0]==$link)
        {
          $inc = $inc + 1;
        }
        }
         if($inc == 0)
        {
           echo '<script>window.location = "login.php";</script>';
        }
      }
    }

 
  }
?>

<?php
if ($_SESSION['user_type'] == 'candidate')
{
    
  $link = basename($_SERVER['PHP_SELF']);
   $sql="select * from candid_pages";
    if($res=$con->query($sql))
    {
      if($res->num_rows>0)
      {
           $inc=0;
        while($row=$res->fetch_array())
        {
        echo "<a href='".$row[0]."'>".$row[1]."</a>";
        if($row[0]==$link)
        {
          $inc = $inc + 1;
        }
        }
         if($inc == 0)
        {
           echo '<script>window.location = "login.php";</script>';
        }
      }
    }

  }
?>
  </div>
</div>
 

<div id="main">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 







                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
  <div>
    <br><br>
  </div>

 <br><br><br><br><br><br><br><br>  
