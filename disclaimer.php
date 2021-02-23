<?php 
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_limiter("private_no_expire");
include 'header.php';
error_reporting(0);
 session_start();
?>
<html>
<head>

	<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="/test4/2611/js/jquery.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery1.js" type="text/javascript"></script>
  <link href="estilo.css" type="text/css" rel="stylesheet" />
<body>

<section class="engine"><a href="https://mobirise.ws/f">simple site creator</a></section><section class="mbr-section mbr-after-navbar" id="msg-box5-1" data-rv-view="437" style="background-color: rgb(255,255,255); padding-top: 0px; padding-bottom: 40px;">
             

</section>


	<section class="mbr-section mbr-section__container article" id="header3-2" data-rv-view="440" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
			<small class="mbr-section-subtitle"><br><span style="font-style: normal;">
									


<br><br><br><br>
<style>
			.Back{
				background: #666;
				border-radius: 6px;
				color: #FFF;
				cursor: pointer;
				display: block;
				margin: 5px auto;
				font: 20px 'Open Sans',Arial;
				padding: 7.5px 15px;
				width: 250px;
				float: left;
				text-align: center;
			}
		</style>

	<script>
		go_back = function(){
			window.location.href = 'appInstructions.php';
		}
	</script>
 <style>
					   @media only screen and (max-width: 561px){
						      #image1{
         width:20%; 
	  
	   
	                                  }
		
		                      #image2{
								  
								  width:20%; 
	  
    
                                     }




					                                          }
					   @media only screen and (min-width: 562px){
						   #image1{
       width:10%; 
	   
	                                  }
		
		                      #image2{
								  
								  width:5% ;
								 
    
                                     }

						   
	
 					                                            }				   
					




body {
    background: #fafafa;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #333;
}


.tab-panels ul {
    margin: 0;
    padding: 0;
}
.tab-panels1 ul {
    margin: 0;
    padding: 0;
}
.tab-panels2 ul {
    margin: 0;
    padding: 0;
}
.tab-panels3 ul {
    margin: 0;
    padding: 0;
}
.tab-panels ul li {
    list-style-type: none;
    display: block;
    background: #999;
    margin: 0;
    
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-weight: 200;
    cursor: pointer;
	padding: 8px 49px;
	font-size: 11px;
	

}
.tab-panels1 ul li {
    list-style-type: none;
    display: inline-block;
    background: #999;
    margin: 0;
    padding: 12px 63px;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-weight: 200;
    cursor: pointer;

}
.tab-panels2 ul li {
    list-style-type: none;
    display: inline-block;
    background: #999;
    margin: 0;
    padding: 12px 63px;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-weight: 200;
    cursor: pointer;

}
.tab-panels3 ul li {
    list-style-type: none;
    display: inline-block;
    background: #999;
    margin: 0;
    padding: 12px 63px;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-weight: 200;
    cursor: pointer;

}
.tab-panels ul li:hover {
    color: #fff;
    background: #666;
}
.tab-panels1 ul li:hover {
    color: #fff;
    background: #666;
}
.tab-panels2 ul li:hover {
    color: #fff;
    background: #666;
}
.tab-panels3 ul li:hover {
    color: #fff;
    background: #666;
}

.tab-panels ul li.active {
    color: #fff;
    background: #666;
}
.tab-panels1 ul li.active1 {
    color: #fff;
    background: #666;
	
}
.tab-panels2 ul li.active1 {
    color: #fff;
    background: #666;
}
.tab-panels3 ul li.active1 {
    color: #fff;
    background: #666;
}
.tab-panels .panel {
    display:none;
    background: #fff;
    padding: 30px;
    border-radius: 0 0 10px 10px;
}
.tab-panels1 .panel1 {
    display:none;
    background: #fff;
    padding: 30px;
    border-radius: 0 0 10px 10px;
}
.tab-panels2 .panel2 {
    display:none;
    background: #fff;
    padding: 30px;
    border-radius: 0 0 10px 10px;
}

.tab-panels3 .panel3 {
    display:none;
    background: #fff;
    padding: 30px;
    border-radius: 0 0 10px 10px;
}

.tab-panels .panel.active {
    display:block;
}

.tab-panels1 .panel1.active1 {
    display:none;
}

.tab-panels2 .panel2.active2 {
    display:none;
}
.tab-panels3 .panel3.active3 {
    display:none;
}



body {
    background: #fafafa;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #333;
}


.tab-panels ul {
    margin: 0;
    padding: 0;
}
.tab-panels1 ul {
    margin: 0;
    padding: 0;
}
.tab-panels ul li {
    list-style-type: none;
    display: inline-block;
    background: #999;
    margin: 0;
    padding: 12px 63px;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-weight: 200;
    cursor: pointer;

}
.tab-panels1 ul li {
    list-style-type: none;
    display: inline-block;
    background: #999;
    margin: 0;
    padding: 12px 63px;
    border-radius: 10px 10px 0 0;
    color: #fff;
    font-weight: 200;
    cursor: pointer;

}
.tab-panels ul li:hover {
    color: #fff;
    background: #666;
}
.tab-panels1 ul li:hover {
    color: #fff;
    background: #666;
}

.tab-panels ul li.active {
    color: #fff;
    background: #666;
}
.tab-panels1 ul li.active1 {
    color: #fff;
    background: #666;
}

.tab-panels .panel {
    display:none;
    background: #fff;
    padding: 30px;
    border-radius: 0 0 10px 10px;
}
.tab-panels1 .panel1 {
    display:none;
    background: #fff;
    padding: 30px;
    border-radius: 0 0 10px 10px;
}

.tab-panels .panel.active {
    display:none;
}

.tab-panels1 .panel1.active1 {
    display:none;
}

.image3{
	border: black 1px solid;
}

@media only screen and (max-width: 600px){
	.image3{
		width:40%;
	}
	.image1{
		width:10%;
	}
}

@media only screen and (min-width: 600px){
	.image3{
		width:20%;
		margin-left:80px;
	}
	.image1{
		width:5%;
	}
	.heads4{
		font-size:25px;
		font-family:sans-serif;
	}
	.body{
		font-family:sans-serif;
	}
}


</style>
<br><h3 class="heading"><U> emTripLog: Data driven congestion and emission reduction</U></h3>

<form action="" method="post" class="form" align="left" name="form" >
<br>
<div class="heads4">Introduction and Purpose</div>

<p class="body4">Center for infrastructure, Sustainable Transport, and Urban Planning (CiSTUP) at the Indian Institute of Science (IISc),
 Bangalore, is using emTripLog to collect information from users about travel behavior across all modes. We will use the aggregate information
 for better transportation infrastructure planning. This app is part of a travel behavior research platform developed by a 
 Ph.D. student at the University of California, Berkeley. </p>

<div class="heads4">What we collect</div>

<p class="body4">We automatically <b>track your location, accelerometer, device-generated activity recognition, and battery usage</b>. 
We also ask you to optionally enter your primary travel mode and purpose of travel through the app. While we ask your mobile number
 and gmail to cross-check your data and match your app data to your survey data, we will never aim to identify you by name. Since our
 code is open source, you can inspect all the plugins at 
 <a href=https://github.com/e-mission/e-mission-base/blob/master/config.xml style='color: #4277f4;padding: 0px;'>https://github.com/e-mission/e-mission-base/blob/master/config.xml</a>.</p>

<div class="heads4">How we associate it with you</div>

<p class="body4">You log in to the app using a valid gmail address.
 We map that to the gmail address we request you to enter on the survey webpage before you install emTripLog. 
 If you are <b>not comfortable sharing your regularly used gmail address</b>, you can create a temporary one to use for this platform.
 The only reason we use an email address is so that we can ensure that your data is only available to somebody logged in as you and remains available even if you switch phones.</p>

<div class="heads4">Who gets to see it</div>

<p class="body4">Individually identified by gmail id, real-time data is only accessible to the CiSTUP researchers involved in the study.
 The aggregate results of the data will be published in reports and academic publications. It will not be used for marketing or advertising purposes.
 Aggregate views of the collected data (both automatic and optional) that <b>do not show individual trajectories</b> (e.g. heatmaps) may be made publicly available through
 the platform website and on the phone app.</p>

<div class="heads4">Your rights</div>

<p class="body4"><b>Participation in research is completely voluntary</b>. You have the right to decline to participate or to withdraw at any point in this study.</p>

<div class="heads4">Questions</div>

<p class="body4">If you have any questions about this research, please feel free to contact us at 
<a href="mailto: surveys.cistup@iisc.ac.in" style='color: #4277f4;padding: 0px;'>surveys.cistup@iisc.ac.in</a> or at 080-2293-2043 extension 31 Monday to Friday between 2:30 pm to 3 pm.</p>

<td class="td1" colspan=2><div class="Register Back" onclick="go_back()">Previous Page</div></td>

</form>

			
					
			
			
			
			
			
			
			
			
			
			
			
			</span></small>
			</div>
			</div>
			</div>
	

</section>

<section class="engine"><a href="https://mobirise.ws/f">simple site creator</a></section><section class="mbr-section mbr-after-navbar" id="msg-box5-1" data-rv-view="437" style="background-color: rgb(255,255,255); padding-top: 0px; padding-bottom: 20px; align:right">


    <style>
a {
    text-decoration: none;
    display: inline-block;
    padding: 8px 0px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.next {
    background-color: #008080;
    color: white;
	align: right;
	font-size: x-large;
	
}

</style>
   
 


              

</section>






  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <input name="animation" type="hidden">
  </body>
</html>
  
  

    


 
 



