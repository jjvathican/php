<script >
function showUser(str)
{
if (str=="")
{
document.getElementById("txtHint").innerHTML="";
return;
}
 
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
xmlhttp.open("GET","department_data.php?q="+str,true);
xmlhttp.send();
}

</script>	
 

<?php include 'header.php';?>
  <div id="donate" data-scroll-index="8" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Department</h3>
                <p class="lead">Enter details for department :  like commerce,computer </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                       
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="dname" class="form-control" placeholder="Enter Dpartment Name">
                                </div>
                                
                           
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                   <button class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="showUser(document.getElementsByName('dname')[0].value)">apply</button>
                                   
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
    
   