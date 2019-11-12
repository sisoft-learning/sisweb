<?php 
ob_start();
include("db/dbi.php");


	if (isset($_SESSION['login'])) {
	       $logged = 1 ;  
		  }
    else {
          $logged = 0 ;
    }
?>		         
<!DOCTYPE html> 
<html lang="en">
<head>
<title>Training Institue in Indirapuram, Ghaziabad, Noida, Delhi, NCR - Sisoft Learning</title>
<meta name="description" content="Computer Training Institute in Indirapuram, Ghaziabad. SMAC Center of excellence:Android, iOS, IoT,Embedded. Research and Development of mobility solutions " />
<meta name="keywords" content="Training on iPhone, Android, Embeded Systems, Java, .Net, C/C++" />
<meta name="keywords" content="Computer Training Institute in Delhi, Noida, NCR, Gurgoan,Ghaziabad,Indirapuram" />
<meta name="keywords" content="Online Self-Paced Training Institute" />
<meta name="keywords" content="Mobile application development and research - iOS, Android, Blackberry, Windows8" />
<meta name="keywords" content="Project management training, PMP, MS Project" />
<meta name="keywords" content="Live Project Training or Summer Project Training" />
<meta name="keywords" content="Embedded Systems Training" />
<meta name="keywords" content="Digital Signature Certificate" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">

<meta name="google-site-verification" content="eDtPr-M0k9e0kSPelFl_GhmVU7S-85xH5wiD5a1WKbQ" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		 <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>   
		


		
        
        <!-- Google Web Font Embed -->
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


	<!--auto-change-image-start-->
		<script type="text/javascript">
            var picPaths = ['images/php-programm.jpg','images/java-program.jpg','images/programming.jpg'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,3000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
        </script>
	<!--auto-change-image-end-->
	
	
<!--slider js-start -->
		<script src="js/jssor.slider.min.js" type="text/javascript"></script>
		<script type="text/javascript">
        jssor_1_slider_init = function () {
            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
		
		<!--slider js-end-->
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/style.css"  rel='stylesheet' type='text/css'>
		<link href="css/slide.css" rel="stylesheet" type="text/css">
        <link href="css/style-costum.css" rel="stylesheet" type="text/css">
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --> 
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/icon.png">
        


        
    </head>
    
    <body>
             
        <?php include('login_reg.php'); ?>

        <?php 
		$page= 1 ;
	   include("top-header.php");
	   
	   if(@$_GET['session']==1)
	   {
		   session_destroy();
		   unset($_SESSION['login']);
		   echo"<script>window.location='index.php'</script>";
	   }
	   
	   ?>
       <!--slider-start-->
      
          <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:530px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="../img/loading/static-svg/oval.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/banner-bg.jpg" class="img-responsive" style="width:100%;">
                <div style="position:absolute;top:85px;right:100px;width:600px;height:180px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:40px; text-align:center">Want to become a</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#ffffff;line-height:48px; text-align:center">Web Designer & Web Developer</div>
                </div>
                <div style="position:absolute;top:60%;right:0; left:0;width:600px;height:120px;z-index:0; margin:0 auto;">
						<a  class="detail" href="http://localhost/sis-website/training_it_courses.php?a=36" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
            <div>
                <img data-u="image" src="images/slider-3.jpg" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:40px; text-align:center;">Want to become a</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#ffffff;line-height:38px;text-align:center;">Android Developer</div>
                </div>
               <div style="position:absolute;top:60%;left:0; right:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="http://sisoft.in/training_smac.php?a=17" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
            <div>
                <img data-u="image" src="images/slider-2.jpg" />
                <div style="position:absolute;top:85px;left:100px;width:600px;height:120px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#ffffff;line-height:40px;text-align:center;">Want To Become a</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#ffffff;line-height:38px;text-align:center;">Data Analyst</div>
                </div>
               <div style="position:absolute;top:60%;left:0; right:0; margin:0 auto; width:600px;height:120px;z-index:0;">
			  		<a  class="detail" href="http://sisoft.in/Big_Data" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
			
			
			<div>
                <img data-u="image" src="images/slider-5.jpg" />
                <div style="position:absolute;top:75px;left:100px;width:600px;height:175px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#fff;line-height:40px; text-align:center;">Learn</div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#fff;line-height:50px;text-align:center;">Self Paced-Online Training</div>
                </div>
               <div style="position:absolute;top:60%;left:0; right:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="http://sisoft.in/online_courses.php?option=1" style="text-decoration:none; color:#FFFFFF;">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
			
			
			<div>
                <img data-u="image" src="images/slider-6.jpg">
                <div style="position:absolute;top:85px;right:100px;width:600px;height:175px;z-index:0;background-color:rgba(0,0,0,0.5);">
                    <div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#fff;line-height:40px; text-align:center;"></div>
                    <div style="position:absolute;top:60px;left:15px;width:570px;height:40px;z-index:0;font-size:50px;color:#fff;line-height:50px;text-align:center;">Online Assessment</div>
                </div>
               <div style="position:absolute;top:60%;right:0; left:0; margin:0 auto;width:600px;height:120px;z-index:0;">
			   		
			   		<a  class="detail" href="zexam/" style="text-decoration:none; color:#FFFFFF;" target="_blank">Read More</a>
                    <!--<div style="position:absolute;top:15px;left:15px;width:500px;height:40px;z-index:0;font-size:30px;color:#000000;line-height:40px;">Run slider on any device</div>
                    <div style="position:absolute;top:60px;left:15px;width:500px;height:40px;z-index:0;font-size:22px;color:#000000;line-height:38px;">windows, android, mac</div>-->
                </div>
            </div>
			
			
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:22px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
	<script type="text/javascript">jssor_1_slider_init();</script>
	
	
	   <!--slider-end-->  
      
<!-- Automatic Modal -->

<?php include('auto-modal.php'); ?> 
  
 
<div id="success">

  
 </div>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/js/bootstrap-dialog.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.1/css/bootstrap-dialog.css" type="text/css">
 
 
 <style> 
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  
  }

.myCont:hover .image {
  opacity: 0.3;
  transform: rotateZ( -360deg );
}

.myCont:hover .middle {
  opacity: 1;
}

.text {
  background-color: transparent;
  border: 2px solid green;
  color: black;
  font-size: 14px;
  padding: 16px 32px;
}

.text:hover{
	background-color:green;
	color:white;
}
.image{
	border:1px solid #428bca;
}

</style>

<!-- Our  Popular Courses -->
  <div class="container-fluid well">
   <div class="container">
        <h2 align="center">Our Popular Courses</h2>
            <div class="row" style="color:#fff; margin-top:30px;">
			 
			 <div class="col-md-4 myCont">
			 <a href="Java_Core" target="_blank" title="Core Java">
                        <img src="images_course/java.png " class="img-responsive img-rounded img-centered image" alt="Java Core"> 
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Core Java</h4>
			</div>
			 
			  <div class="col-md-4 myCont">
			 <a href="android-training" target="_blank" title="Android">
                        <img src="images_course/android.jpg" class="img-responsive img-rounded img-centered image" alt="Android">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Android</h4> 
			</div>
			
			 <div class="col-md-4 myCont">
			 <a href="TallyERP9" target="_blank" title="TallyERP9">
                        <img src="images_course/tally.png " class="img-responsive img-rounded img-centered image" alt="TallyERP9" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center" style="color:black;">Learn Tally</h4> 
			</div>
			 
		</div>
		<div class="row" style="margin-top:30px;">
		<div class="col-md-4 myCont">
			 <a href="Python" target="_blank" title="Python">
                        <img src="images_course/python.png " border="0" class="img-responsive img-rounded img-centered image" alt="Python">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn Python</h4> 
			</div>
			
		<div class="col-md-4 myCont">
			 <a href="training-smac.php?a=16" target="_blank" title="IOS">
                        <img src="images_course/IOS.png " border="0" class="img-responsive img-rounded img-centered image" alt="IOS" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn IOS</h4> 
			</div>
			
			<div class="col-md-4 myCont">
			 <a href="PHP_MySQL" target="_blank" title="PHP/MySQL">
                        <img src="images_course/phpmysql.png" border="0" class="img-responsive img-rounded img-centered image" alt="PHP/MySQL" style="height:200px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn PHP/MySQL</h4> 
			</div>
		</div>
		
		<div class="row" style="margin-top:30px;">
		<div class="col-md-4 myCont">
			 <a href="C" target="_blank" title="C">
                        <img src="images_course/c.png " border="0" class="img-responsive img-rounded img-centered image" alt="C" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn C</h4> 
			</div>
			
		<div class="col-md-4 myCont">
			 <a href="C_Plus_B_Tech" target="_blank" title="CPP">
                        <img src="images_course/cpp.png" border="0" class="img-responsive img-rounded img-centered image" alt="CPP" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn C++</h4> 
			</div>
			
			<div class="col-md-4 myCont">
			 <a href="Advance_Excel" target="_blank" title="Advance_Excel">
                        <img src="images_course/advance_excel.jpg" border="0" class="img-responsive img-rounded img-centered image" alt="CPP" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn Advance_Excel</h4> 
			</div>	
		</div>
			
 
  
  
  <div class="row" style="margin-top:30px;">
  <div class="col-md-4 myCont">
			 <a href="big-data-hadoop" target="_blank" title="Big-Data/Hadoop">
                        <img src="images_course/bigdata.jpg" border="0" class="img-responsive img-rounded img-centered image" alt="Big-Data/Hadoop" style="height:202px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Big-Data/Hadoop</h4> 
			</div>
			
		<div class="col-md-4 myCont">
			 <a href="block-chain" target="_blank" title="Block Chain">
                        <img src="images_course/blockchain.png" border="0" class="img-responsive img-rounded img-centered image" alt="Block Chain" style="height:200px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Block Chain</h4> 
			</div>
			
		
			
		<div class="col-md-4 myCont">
			 <a href="SEO" target="_blank" title="SEO">
                        <img src="images_course/seo.jpg" border="0" class="img-responsive img-rounded img-centered image" alt="SEO" style="height:200px;">
						<div class="middle">
						<div class="text">VIEW COURSE</div>
						</div>
			</a>
			<h4 align="center">Learn SEO/SMO</h4> 
			</div>
	
	</div>
	 </div>
</div>	


 <div class="container" style="margin-top:0px">
        <h2 align="center">Upcoming Batches</h2>
           
                
				<style>
div.scroll {
	padding-left:8px;
    
    height: 200px;
    overflow: scroll;
}
</style>
                  
             
               
                
				
				 <a href="new_batches.php" style="color:white">
                <div class="col-md-12">
                  
                   <p>
				   
				   <div class="table-responsive scroll">      
	<marquee direction=up onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 5, 0);"  behavior="alternate" scrolldelay="450">				   
  <table class="table" style="color:blue;">
   
    <tbody>

	 <?php      $count=1;  
	 $now_date=date("Y-m-d");
$query="SELECT start_date,course_name,duration FROM `trng_batches` WHERE start_date >= '".$now_date."' ORDER BY start_date LIMIT 0 , 10";
$resultset=mysqli_query($conn, $query);	
//echo $query;			  
	  while($row=mysqli_fetch_array($resultset)) { ?>
	   <tr>
	   <td><strong><?php echo $count; ?></strong></td>
	   <td ><strong><?php echo $row["start_date"];?></strong></td>
	                        
	 <td ><strong> <?php echo $row["course_name"];?></strong></td>                     
	                        
	 <td ><strong> <?php echo $row["duration"];?></strong></td>
	  
	   </tr>
	
	
	            
	  <?php $count++; }  ?> 

   </tbody>
	
  </table>
  </marquee>   
  </div>
				   </p>
      
                </div></a>
                
               
           
        </div><!--Upcoming Batches-->
        

		
<style>
.myTab tr:nth-child(odd) {
    background: #edecc0;
}

a{
	color: blue;
	font-weight:bold;
	font-size: 14px;
}

</style>
		
   <div class="container" style="margin-top:0px">
        <h2 align="center"> Our Hot Courses</h2>
            <div class="row" style="color:#fff; margin-left:40px; margin-top:30px;">
                <table class="table table-bordered table-stripped col-sm-3 myTab" style="width:30%;">
				<thead>
				<tr>
				<th style="color:white; background-color:#FE9A2E; text-align:center;">IT COURSES</th>
				</tr>
				</thead>
				<tbody style="text-align: center;">
				<tr><td><a href="Embedded_System">Embedded System</a></td></tr>
				<tr><td><a href="Ethical_Hacking">Ethical Hacking</a></td></tr>
				<tr><td><a href="Linux_Device_Driver">Linux Device Drivers</a></td></tr>
				<tr><td><a href="Computer_Fundamentals">Computer Fundamentals</a></td></tr>
				<tr><td><a href="Graphics_Design">Graphics Design</a></td></tr>
				<tr><td><a href="Web_Site_Design">Web Site Design</a></td></tr>
				<tr><td><a href="selenium">Selenium</a></td></tr>
				<tr><td><a href="training-it-courses.php" style='color:red;'>More...</a></td></tr>
				
				</tbody>
				</table>
				
				 <table class="table table-bordered table-stripped col-sm-3 myTab" style="width:30%; margin-left:40px;">
				<thead>
				<tr>
				<th style="color:white; background-color:#428bca; text-align:center; font-weight: bold;">MANAGEMENT</th>
				</tr>
				</thead>
				<tbody style="text-align: center;">
				<tr><td><a href="project-management">Project Management</a></td></tr>
				<tr><td><a href="ms-project">MS Project</a></td></tr>
				<tr><td><a href="pmp-certification">PMP Certification</a></td></tr>
				<tr><td><a href="PMCO">PMCO Certification</a></td></tr>
				<tr><td><a href="Prince2"> Prince 2</a></td></tr>
				<tr><td><a href="ITIL">ITIL </a></td></tr>
				<tr><td><a href="agile-scrum">Agile Scrum </a></td></tr>
				<tr><td><a href="training-project-mgnt.php?a=30" style='color:red;'>More...</a></td></tr>
				</tbody>
				</table>
				
				
				<table class="table table-bordered col-sm-3 myTab" style="width:30%; margin-left:40px;">
				<thead>
				<tr>
				<th style="color:white; background-color:#FA5858; text-align: center; font-weight: bold;">SOFT-SKILLS</th>
				</tr>
				</thead>
				<tbody style="text-align: center;">
				<tr><td><a href="english-communication">English Communication Course</a></td></tr>
				<tr><td><a href="personality-development"> Personality Development</a></td></tr>
				<tr><td><a href="succeed-in-interviews">Succeed in job Interview</a></td></tr>
				<tr><td><a href="time-management">Time Management</a></td></tr>
				<tr><td><a href="business-communication">Business Communication</a></td></tr>
				<tr><td><a href="organizational-behaviour">Organization Behavior</a></td></tr>
				<tr><td><a href="college-to-corporate">College To Corporate</a></td></tr>
				<tr><td><a href="training-softskills.php?a=20" style='color:red;'>More...</a></td></tr>
				</tbody>
				</table>
			</div>
   </div>

   <style>
.tooltip {
    position: relative;
    display: inline-block;
    opacity:1;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
    background-color:#fff;
    color: #000;
    text-align:justify;
    border-radius: 6px;
    padding:8px;
    position: absolute;
    z-index:1000;
   top:120px;
    left:32%;
    height:200px;
	border-bottom:#993300 solid 4px;
    /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
    opacity: 0;
    transition: opacity 2s; box-shadow:2px 3px 10px #000;
	font-size:14px;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>  

   
   <!-- Online Course -->
	
	<div class="container-fluid well">
	<div class="container col-md-8" style="margin-left:200px;">
		<?php include("online_courses_matrix.php"); ?>	
    </div>				
    </div>				



<div class="container-fluid well" style="margin-top:-40px">    
      <div class="container" style="margin-top:-30px;">
        <h2 align="center">Software Solutions and Consulting</h2>
            <div class="row" style="color:#000; margin-top:30px;  margin-left:80px;">
                 <p style="font-weight:bold;font-size:medium;">Sisoft is channel partner of Tally Solutions and Redhat. We provide software and solution around these products. </p>
				 		<a href="bp-tally-erp9-for-gst.php"> <img src="images/tally-solutions-3-star-partner.png " height="150" width="250" border="0"  alt="Tally Solutions Certified Partner" style="border: 1px solid blue;"> </a>
							&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="bp-redhat-offerings.php">	<img src="images/redhat-business-partner.png " style="border: 1px solid red;" height="150" width="250" border="0"   alt="Redhat Business Partner"></a>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/logo-redington-cloud-solutions.png " height="150" width="250" border="0" style="border: 1px solid green;"  alt="Redington Cloud Solutions ">
            <a href="digital-signature-certificate.php">  <img src="images/digi.jpg " style="border: 1px solid blue;" height="150" width="250" border="0"   alt="Digital Signature Certificate"></a>
                </div>
                
               
            </div>
        </div><!--Our Major Programs-->
		

		
  <div class="container-fluid" style=" color:#000; margin-bottom:15px;">
<div class="container" style="margin-top:10px; margin-bottom:15px;">
			<h2 align="center" style="margin:0px 0px 10px 0px">Our Learning Solutions</h2>
            <div class="row"> 
				
                <div class="col-sm-4" style='margin-left:50px;'>
                <h5 align="center">Programming Examples</h5>
                    <a href="examples/" target="_blank">
                        <img id="imgBanner" src="images/programming.jpg" border="0" class="img-responsive img-rounded img-centered"  alt="Learning Management System">
                    </a>
                </div>
				<div class="col-md-3"></div>
				<div class="col-sm-4">
                <h5 align="center">Online Assessment</h5>
                    <a href="zexam/" target="_blank">
                        <img src="images/online-testing.jpg " border="0" class="img-responsive img-centered img"  alt="Test your skills">
                    </a>
                </div>
              	
            </div>
        </div><!--Institutes-->
</div>
  
  
  
  
  
  
  
  
  
<div class="container-fluid" style=" color:#000; margin-bottom:10px;">
	<div class="container" style="margin-top:10px; margin-bottom:10px;">
			<h2 align="center" style="margin:0px 0px 0px 0px">Trainer Area</h2>
			<div class="row">   
                <div class="col-sm-4" align="center">
					<h5 align="center">Trainer Workbench - Content Authoring Tool</h5>
						<a href="zcomasys/">
							<img src="images/cca.jpg " border="0" class="img-responsive img-rounded img-centered"  alt="Content Authoring">
						</a>
                </div>
				<div class="col-md-3"></div>
                <div class="col-sm-4" align="center">
					<h5 align="center">Join our Trainer team</h5>
						<a href="career.php?career=4"">
							<img src="images/join-trainer-team2.png " border="0" class="img-responsive img-rounded img-centered"  alt="Join our Trainer team">
						</a>
                </div>

            </div>    	
	</div>
</div>
  
  
    
  <div class="container-fluid well" style="margin-top:-10px">    
      <div class="container" style="margin-top:-20px">
        <h2 align="center">Sisoft for Corporates/Institutes</h2>
            <div class="row" style="color:#fff; margin-top:35px;">
                <div class="col-md-3 blue" style="margin-left:60px;">
                    <p><strong>Corporate Training/ Workshops / Seminars</strong></p>
                    <p>In the increasingly competitive market scenario when you consider training is crucial to top- up the capability of your team, but moving away focus from the business strategies is next to impossible, unravel the dilemma loop partnering with Sisoft.</p>
					
					<a class="btn btn-black" href="reg_sis.php" role="button">Reqest Proposal</a> 
              
                </div>
                 <div class="col-md-1"></div>
                <div class="col-md-3 orange" >
                   <p><strong>Recruitment from sisoft</strong></p>
                   <p>Sisoft provides trained candidates who are well informed technically and have worked on sample projects and this make them being productive from day one. Looking to hire productive people</p>
         <a class="btn btn-black" href="recruit-from-sisoft.php" role="button" style="margin-top:42px;">Submit Placement Request</a>
                </div>
                <div class="col-md-1"></div>
				<div class="col-md-3 green">
                   <p><strong>Internship @ sisoft</strong></p>
                   <p>We provide internship to MTech and Researchers students in areas of SMAC technologies esp mobile app development, Big Data Analytics and IoT. If you are working on these areas and looking for Industry Internship.</p>
        <a class="btn btn-black" href="reg_sis.php" role="button" style="margin-top:30px;">Apply Now</a> 
		
                </div>
               
            </div>
        </div><!--Our Major Programs-->
</div><!--well-->

  
 <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script src="js/side-menu.js" type="text/javascript"></script>   

 
<?php include("footer.php"); ?>
    </body>
</html>