 <?php
include 'db_connection.php';

?>
<?php include 'header.php';?>

	<div id="main-banner" class="banner-one" data-scroll-index="0">
        
		
<?php 
for ($x = 2; $x <= 4; $x++) {

?>
        
		<div data-src="uploads/slide-<?php print $x; ?>.jpg">
			<div class="camera_caption">
				<div class="container">
                    <br><br><br><br><br><br>
					<h1 class="wow fadeInUp animated">Lets vote for better tomorrow</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s"> Come lets vote  </p>
                    <?php 
                    if( $_SESSION["user_type"]=="student")
                    {?>
					<a data-scroll href="election_process.php" class="btn btn-light btn-radius btn-brd grd1">VOTE</a>
                    <?php } ?>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
        <?php
        }
        ?>
		
	</div> <!-- /#theme-main-banner -->


    <div id="about" data-scroll-index="1" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>Welcome to  Online Voting</h2>
                        <blockquote class="lead">The age on balet voting is now over.We need a new system of election process that is both secure and safe . And the  ability to conduct election faster and easier</blockquote>

                        <p>It was a our great mition to develop a software that enable election to all new level.We are currently providing a election that is for both colleges and institute alike. This platform defenitilly interest the staff and student alike .   </p>

                        
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1"> 

            <div class="row text-center">


                

                
                 
	
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="section nopad">
        <img src="uploads/" alt="" class="img-responsive">
    </div>

    <div id="issues" data-scroll-index="2" class="section lb">
        <div class="container">
            <div class="section-title text-left">
                <h3>Issues & Plans</h3>
                <p class="lead">All the issues of the voter is shown here.<br> Each voter have their own authority to resolve their issues</p>
            </div><!-- end title -->

            <div class="row">
         
            <?php
       $sql=" select * from  issues;";
		if($res=$con->query($sql))
		{
            $cct=0;
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
               // echo "<option  value='".$row[0]."|".$row[1]."'>"." from : ".$row[0]." to: ".$row[1]."</option>";
               $cct=$cct+1;
               if($cct%2==0)
               {
               ?> <div class="col-md-5"><?php   
               }
               else
               {
               ?> <div class="col-md-6"> <?php 
               }
                ?>
                    <div class="issuse-wrap clearfix">
                        <img src="uploads/issue_01.jpg" alt="" class="img-responsive img-rounded alignleft">
                        <h4><?php echo $row[1]; ?></h4>
                        <p><?php echo $row[3]; ?></p>
                        <br><h6><?php echo $row[2]; ?></h6>
                    </div><!-- end issue -->
                    </div><!-- end col -->
                <?php
				}

			}
		}
        ?>          
				
              
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="event" data-scroll-index="3" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Events</h3>
                <p class="lead">All the events will be displayed here.<br> plz do check .</p>
            </div><!-- end title -->

            <div class="row">
            <?php
       $sql=" select * from  events;";
		if($res=$con->query($sql))
		{
            $cct=0;
			if($res->num_rows>0)
			{
				while($row=$res->fetch_array())
				{
                    //echo $row[0];
                    ?>
                <div class="col-md-4">
                    <div class="participate-wrap">
                        
						<figure>
							<img src="uploads/politic_04.jpg" alt="" class="img-responsive">
							<figcaption><a href="#" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>
						</figure>
						<div class="event_dit">
							<h4><?php echo $row[1]; ?></h4>
							<ul>
								<li> <a href="#"> <i class="fa fa-calendar"></i> <?php echo $row[3]; ?> </a> </li>
							
							</ul>
							<p><?php echo $row[2]; ?>.</p>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->
                    <?php
                }
            }
        }?>
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


	
	
   
	
	
    <script >
function submitcomplaint(name_id,title,comments)
{

 
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
 
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","issue_data.php?q="+name_id+"&p="+title+"&m="+comments,true);
xmlhttp.send();
}

</script>	
    <div id="donate" data-scroll-index="6" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Notify Issues</h3>
                <p class="lead">Here you notify the authority if you are facing with some issues inside the college campus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="title" id="first_name" class="form-control" placeholder="Issue Title">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="student_id" id="last_name" class="form-control" placeholder="FOR  Student Id">
                                </div>
                                
                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Enter your complaints"></textarea>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="submitcomplaint(document.getElementsByName('student_id')[0].value,document.getElementsByName('title')[0].value,document.getElementsByName('comments')[0].value)">Submit</button>
                                </div>
                                <div id="txtHint" >
                                  
								</div>
                            </fieldset>
                        
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <?php include 'footer.php';?>
