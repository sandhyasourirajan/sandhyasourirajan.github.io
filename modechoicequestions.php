<?php
session_start();
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_limiter("private_no_expire");
error_reporting(0);

 
// $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//  if (isset($_POST['Submit'])) { 
 
 


 
 
 
 

// 	$totalOp = 0;
// 	$filledOp = 0;
 
// 		if($_SESSION['prev_page'] == 'future'){
// 			$totalOp += 1;
// 			if(isset($_SESSION['takeMetro'])){
// 				$filledOp += 1;
// 				if($_SESSION['takeMetro'] == 'yes'){
// 					$totalOp += 1;
// 					if(!empty($_SESSION['yesmetro'])){
// 						$filledOp += 1;
// 					}
// 					$totalOp += 1;
// 					if(!empty($_SESSION['getbackhomefrommetro'])){
// 						$filledOp += 1;
// 					}
// 				}
// 				if($_SESSION['takeMetro'] == 'no'){
// 					$totalOp += 1;
// 					if(!empty($_SESSION['nometro'])){
// 						$filledOp += 1;
// 					}
// 				}
// 			}
// 		}
// 			if($totalOp != 0)
// 				$_SESSION['future_Op'] = ($filledOp/$totalOp);
// 			else
// 				$_SESSION['future_Op'] = 1.0;











// $id= $_SESSION['id'];



//  } 
	

 
//  include 'header.php';
// ?>
// <?php 

 


// /* Attempt MySQL server connection. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
// $far = $_SESSION['far'];
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
//  $username= $_SESSION['username'];
// // Attempt select query execution
// $sql = "SELECT * FROM users3 WHERE username='$username'";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){

//         while($row = mysqli_fetch_array($result)){
            
//            $op_page=$row['op_page'];
// 			$ddtt=$row['ddtt'];
// 			$longer=$row['longer'];
// 			$dn1=$row['dn1'];
// 			$r111=$row['r111'];
// 			$dn2=$row['dn2'];
// 			$r222=$row['r222'];
// 			$dn3=$row['dn3'];
// 			$r3=$row['r3'];
// 			$dn4=$row['dn4'];
// 			$r4=$row['r4'];
// 			$dn5=$row['dn5'];
// 			$r5=$row['r5'];
// 			$dn6=$row['dn6'];
// 			$r6=$row['r6'];
// 			$dn7=$row['dn7'];
// 			$r7=$row['r7'];
// 			$dn8=$row['dn8'];
// 			$r8=$row['r8'];
// 			$dn9=$row['dn9'];
// 			$r9=$row['r9'];
// 			$dn10=$row['dn10'];
// 			$r10=$row['r10'];
// 			$dn11=$row['dn11'];
// 			$r11=$row['r11'];
// 			$dn12=$row['dn12'];
// 			$r12=$row['r12'];
// 			$dn13=$row['dn13'];
// 			$r13=$row['r13'];
// 			$dn14=$row['dn14'];
// 			$r14=$row['r14'];
// 			$dn15=$row['dn15'];
// 			$r15=$row['r15'];
// 			$dn16=$row['dn16'];
// 			$r16=$row['r16'];
// 			$dn17=$row['dn17'];
// 			$r17=$row['r17'];
// 			$dn18=$row['dn18'];
// 			$r18=$row['r18'];
// 			$dn19=$row['dn19'];
// 			$r19=$row['r19'];
// 			$dn20=$row['dn20'];
// 			$r20=$row['r20'];
// 			$dn21=$row['dn21'];
// 			$r21=$row['r21'];
// 			$dn22=$row['dn22'];
// 			$r22=$row['r22'];
// 			$dn23=$row['dn23'];
// 			$r23=$row['r23'];
// 			$dn24=$row['dn24'];
// 			$r24=$row['r24'];
// 			$travelandwait = $row['travelandwait'];
// 			$travelcost = $row['travelcost'];
// 			$reliability = $row['reliability'];
// 			$safety = $row['safety'];
// 			$flexibility = $row['flexibility'];
// 			$privacy = $row['privacy'];
// 			$env = $row['env'];
// 			$statussymbol = $row['statussymbol'];
// 			$studying= $row['studying'];
// 			$relaxing= $row['relaxing'];
// 			$leisurereading= $row['leisurereading'];
// 			$talking= $row['talking'];
// 			$browsing= $row['browsing'];
// 			$contemplating= $row['contemplating'];
// 			$nothing= $row['nothing'];
// 			$leisurecalling= $row['leisurecalling'];
// 			$otherthan= $row['otherthan'];

// 			$studyingp= $row['studyingp'];
// 			$relaxingp= $row['relaxingp'];
// 			$leisurereadingp= $row['leisurereadingp'];
// 			$talkingp= $row['talkingp'];
// 			$browsingp= $row['browsingp'];
// 			$contemplatingp= $row['contemplatingp'];
// 			$nothingp= $row['nothingp'];
// 			$leisurecallingp= $row['leisurecallingp'];
// 			$otherthanp= $row['otherthanp'];
	 
//         }
     
//         // Close result set
//         mysqli_free_result($result);
//     } else{
//         echo "No records matching your query were found.";
//     }
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// // Close connection
// mysqli_close($link);
$_SESSION['prev_page1'] = 'modechoice';
?>

<html>
<head>


	<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="/test4/2611/js/jquery.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery1.js" type="text/javascript"></script>	
       <link href="estilo.css" type="text/css" rel="stylesheet" />
<!--
    <script src="/1412/js/jquery.js" type="text/javascript"></script>
<script src="/1412/js/jquery1.js" type="text/javascript"></script>
-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="/0612/js/jquery.js" type="text/javascript"></script>
<script src="/0612/js/jquery1.js" type="text/javascript"></script>
<script src="/0612/js/jquery2.js" type="text/javascript"></script>
<!--
    <script src="/1412/js/jquery.js" type="text/javascript"></script>
<script src="/1412/js/jquery1.js" type="text/javascript"></script>
<script src="/1412/js/jquery2.js" type="text/javascript"></script>
-->
 <script>
		$(document).ready(function() {
			$(".animated").removeClass("hidden animated")
			if (/Edge/.test(navigator.userAgent)) {
                $(".slider").css("width",$("#widthMaker").width());
            }
		});
	</script>
	<?php
			if((!$_SESSION['trip2_Man'])||($_SESSION['trip2_Op'] < 0.8)||($_SESSION['future_Op'] < 0.8)){
				echo "
					<br><br><br><br><br><br><br><br><br><br>
					<div style='text-align:center'>You have not answered some questions in the previous page. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>
	
		<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
		<style>


textarea
{
	margin: 100px;
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
    display:none;
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

</style>
				
		  
        <style>
        #myMap {
		   height: 350px;
		   width: 100%;
		}
		 #myMap1 {
		   height: 350px;
		   width: 100%;
		}
		#myMap02 {
		   height: 350px;
		   width: 100%;
		}
        </style>
</head>
<body>


	<section class="mbr-section mbr-section__container article" id="header3-2" data-rv-view="440" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
			<small class="mbr-section-subtitle"><span style="font-style: normal;">
									



									                     						                       <style>
					   @media only screen and (max-width: 561px){
						      #table_phone{
        display: block;
							  padding-left: 15px;}
		
		#table_phone {
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    border-collapse: collapse;
    width:30%	;
}

#table_phone td, #table_phone th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size: 1px;
}

#table_phone tr:nth-child(even){background-color: #f2f2f2;}

#table_phone tr:hover {background-color: #ddd;}

#table_phone th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #008080;
    color: white;
	
}	
		
    
    .table_window{
        display: none;

    }
	 #table_window1{
        display: none;

    }
    
					   }
					   @media only screen and (min-width: 562px){
						   
						       #table_phone{
        display: none;
    }
	
	
	.table_window {
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    border-collapse: collapse;
	width:50vw;
    
}
	#table_window1 {
    font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
    border-collapse: collapse;
	width:50vw;
    
}
.table_window td, .table_window th {
    border: 1px solid #ddd;
    padding: 36px;
	font-size:medium;
	padding-top:10px;
	padding-bottom:10px;

}
#table_window1 td, #table_window1 th {
    border: 1px solid #ddd;
    padding: 8px;
	font-size:small;

}
.table_window td, .table_window th {
    border: 1px solid #ddd;
    padding: 36px;
	font-size:1vw;
	padding-top:10px;
	padding-bottom:10px;

}
#table_window1 td, #table_window1 th {
    border: 1px solid #ddd;
    padding: 1px;
	font-size:1vw;
	padding-top:0px;
	padding-bottom:0px;

}

.table_window tr:nth-child(even){background-color: #f2f2f2;}
#table_window1 tr:nth-child(even){background-color: #f2f2f2;}

.table_window tr:hover {background-color: #ddd;}
#table_window1 tr:hover {background-color: #ddd;}

.table_window th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    background-color: #4d4d4d;
    color: white;
}

#table_window1 th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    background-color: #4d4d4d;
    color: white;
}







    .table_window{
        display: block;
    }
	 #table_window1{
        display: block;
    }
 	
	
 					   }				   
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  </style>
					     

									
									
									
									
									
									
									
									
									
									
									
					
									
									
									
									
									
									
	

  <p align="right"> <a href="index.php?logout='1'" input type="button" id="next" class="Register" align="right">logout</a> </p>
 
<style>
			.Back{
				background: #666;
				border-radius: 6px;
				color: #FFF;
				cursor: pointer;
				display: block;
				margin: 0 auto;
				font: 20px 'Open Sans',Arial;
				padding: 7.5px 15px;
				width: 250px;
				float: left;
				text-align: center;
			}
		</style>

	<script>
		go_back = function(){
		
		  if("<?php echo $op_page;?>" == 1)
		    {
			window.location.href = 'future.php';
		    }
		    else
		    {
		    	window.location.href = 'trip2.php';    
		        
		    }
		
		}
	</script>


<form action="appInstructions.php" method="post" class="form" align="left" >
	
	<table class="table" id="customers">
	

		
						 <tr>
								 
									 <th colspan="2" > <u><b>MODE CHOICE QUESTIONS</b></u><br>
									 This section includes additional questions about your trip to work/education that you described before.
									 </th>
									 
</tr>
	



			



	
		<tr>
			<td class="td1" colspan="2"><span class="question">
			
			
			
			1. What is the typical door-to-door travel time, including wait time, for your one-way commute (home-to-work/education trip)? 
			
			
			<br>
			
			
			
			<select name="ddtt"  style="width:25%;" >
			<option value="<?php  	if(empty($ddtt)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($ddtt)) ? $ddtt: '';
		
		   }?>"><?php  	if(empty($ddtt)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($ddtt)) ? $ddtt: 'Select';
		   
		   }?></option>
				 <option value="00:00:00">00:00</option>
   <option value="00:05:00">00:05</option>
      <option value="00:10:00">00:10</option>
	     
			  <option value="00:15:00">00:15</option>	
   <option value="00:20:00">00:20</option>
   <option value="00:25:00">00:25</option>   
        <option value="00:30:00">00:30</option>    
   <option value="00:35:00">00:35</option>
   <option value="00:40:00">00:40</option>   
		        <option value="00:45:00">00:45</option>  

   <option value="00:50:00">00:50</option>
      <option value="00:55:00">00:55</option>
				
        <option value="01:00:00">01:00</option>   
		    <option value="01:05:00">01:05</option>   
			  <option value="01:10:00">01:10</option>   
        <option value="01:15:00">01:15</option>    
     <option value="01:20:00">01:20</option>   
  <option value="01:25:00">01:25</option>   	 
        <option value="01:30:00">01:30</option> 
		    <option value="01:35:00">01:35</option> 
  <option value="01:40:00">01:40</option>   			
		 <option value="01:45:00">01:45</option>
		    <option value="01:50:00">01:50</option>   
			  <option value="01:55:00">01:55</option>   
        <option value="02:00:00">02:00</option>  
		
		
		<option value="02:00:00">02:00</option>   
		    <option value="02:05:00">02:05</option>   
			  <option value="02:10:00">02:10</option>   
        <option value="02:15:00">02:15</option>    
     <option value="02:20:00">02:20</option>   
  <option value="02:25:00">02:25</option>   	 
        <option value="02:30:00">02:30</option> 
		    <option value="02:35:00">02:35</option> 
  <option value="02:40:00">02:40</option>   			
		 <option value="02:45:00">02:45</option>
		    <option value="02:50:00">02:50</option>   
			  <option value="02:55:00">02:55</option>   
        <option value="03:00:00">03:00</option>  
		
		
		
		
		
		
		
		
		
		
		
     
			    <option value="More than 3 hours">More than 3 hours</option> 
		
			</select> hours
			
			
			
			
			
			
			
			
			
			
			
			</span>  <br><br>
			
			
			 
		
			</td>
			</tr>
			
			
				<tr>
                    <td class="td1" colspan="2"><span class="question">



2. Often, traffic congestion and other reasons cause travel delays. Please enter how much  longer your one-way commute gets compared to your usual travel time. Do not mention rare, extreme delays.

	
			<select name="longer"  style="width:25%;">
			<option value="<?php  	if(empty($longer)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($longer)) ? $longer: '';
		
		   }?>"> &nbsp; <?php  	if(empty($longer)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($longer)) ? $longer: 'Select';
		   
		   }?></option>
				    <option value="00:00:00">00:00</option>
   <option value="00:05:00">00:05</option>
      <option value="00:10:00">00:10</option>
	     
			  <option value="00:15:00">00:15</option>	
   <option value="00:20:00">00:20</option>
   <option value="00:25:00">00:25</option>   
        <option value="00:30:00">00:30</option>    
   <option value="00:35:00">00:35</option>
   <option value="00:40:00">00:40</option>   
		        <option value="00:45:00">00:45</option>  

   <option value="00:50:00">00:50</option>
      <option value="00:55:00">00:55</option>
				
        <option value="01:00:00">01:00</option>   
		    <option value="01:05:00">01:05</option>   
			  <option value="01:10:00">01:10</option>   
        <option value="01:15:00">01:15</option>    
     <option value="01:20:00">01:20</option>   
  <option value="01:25:00">01:25</option>   	 
        <option value="01:30:00">01:30</option> 
		    <option value="01:35:00">01:35</option> 
  <option value="01:40:00">01:40</option>   			
		 <option value="01:45:00">01:45</option>
		    <option value="01:50:00">01:50</option>   
			  <option value="01:55:00">01:55</option>   
        <option value="02:00:00">02:00</option>  
					    <option value="More than 2 hours">More than 2 hours</option> 
			</select> hours
			
			
			 <b>extra</b> compared to typical travel and wait time.

					</span> <br><br>
		
			 
		

		
			</td>
			</tr>
			 
			
				<tr>
                    <td class="td1" colspan="2"><span class="question">
					
					
					3. Please compare what would be your one-way commute time by the following modes with that of your usual<b> primary mode</b>. Please use the slider for each mode.
					
					
					
					<br>
					
				<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #4CAF50;
  cursor: pointer;
}
</style>
			<br>



<table style="width:100%">

 <tr>
 <td>Input Fields</td>
 <td colspan="50">
 &nbsp;&nbsp;<img id="widthMaker" src="assets/images/Scale1.png" width="100%" height="80%">
 </td>
  <td>Don't know</td>
 </tr>
<script>
	backtodefault = function(ele){
		if($(ele).attr('rel') == 'fasle'){
			$(ele).parent().prev().find("input").val(0);
			$(ele).parent().prev().find("span").html("0");
			$(ele).attr('rel','true');
		}else{
			$(ele).attr('rel','fasle');
			ele.checked = false;
		}
	}
	checkdn = function(ele){
		if($(ele).parent().parent().next().find("input").is(':checked')){
			ele.value = 0;
			$(ele).next().find("span").html("0");
		}
	}
</script>
	
<?php
   if((!in_array(1,$_SESSION['sliderChoice1']))&&(!in_array(1,$_SESSION['sliderChoice2']))) 
      echo "
  <tr>
    <td>Car</td>
    <td colspan='50'>
	<div class='''slidecontainer'>
  <input type='range' name='r111' min='-120' max='120' value='".(($dn1==NULL)?(($r111==NULL)?'0':$r111):'0')."' class='slider' id='myRange' onchange='checkdn(this)'>
  <p>Value: <span id='demo'></span>mins</p>
</div>
    </td>

    <td><input type='radio'  name='dn1' value='dont know' onclick='backtodefault(this)' rel='".(($dn1==NULL)?"fasle'":"treu' checked")."></td>
  </tr>
<script>
var slider = document.getElementById('myRange');
var output = document.getElementById('demo');
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>";			
    
    if((!in_array(2,$_SESSION['sliderChoice1']))&&(!in_array(2,$_SESSION['sliderChoice2']))) 
      echo "
  <tr>
    <td>Ola share</td>
     <td colspan='50'>	 
	 
	 <div class='''slidecontainer'>
  <input type='range' name='r222' min='-120' max='120' value='".(($dn2==NULL)?(($r222==NULL)?'0':$r222):'0')."' class='slider' id='myRange1' onchange='checkdn(this)'>
  <p>Value: <span id='demo1'></span>mins</p>
</div>
<script>
var slider1 = document.getElementById('myRange1');
var output1 = document.getElementById('demo1');
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>
	 
	 
	 
	 
	 </td>

    <td><input type='radio'  name='dn2' value='dont know' onclick='backtodefault(this)' rel='".(($dn2==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
    
    if((!in_array(6,$_SESSION['sliderChoice1']))&&(!in_array(6,$_SESSION['sliderChoice2'])))
       echo "
  <tr>
    <td>BMTC bus</td>
   <td colspan='50'>	
   
    <div class='''slidecontainer'>
  <input type='range' name='r3' min='-120' max='120' value='".(($dn3==NULL)?(($r3==NULL)?'0':$r3):'0')."' class='slider' id='myRange2' onchange='checkdn(this)'>
  <p>Value: <span id='demo2'></span>mins</p>
</div>
<script>
var slider2 = document.getElementById('myRange2');
var output2 = document.getElementById('demo2');
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
</script>
   
   
   </td>

    <td><input type='radio'  name='dn3' value='dont know' onclick='backtodefault(this)' rel='".(($dn3==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
    
    if($far > 2){
        if((!in_array(7,$_SESSION['sliderChoice1']))&&(!in_array(7,$_SESSION['sliderChoice2'])))
            echo "
   <tr>
    <td>Office shuttle</td>
    <td colspan='50'>	 
	
	<div class='''slidecontainer'>
  <input type='range' name='r4' min='-120' max='120' value='".(($dn4==NULL)?(($r4==NULL)?'0':$r4):'0')."' class='slider' id='myRange3' onchange='checkdn(this)'>
  <p>Value: <span id='demo3'></span>mins</p>
</div>
<script>
var slider3 = document.getElementById('myRange3');
var output3 = document.getElementById('demo3');
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
</script>
	
	
	
	
	
	
	</td>

    <td><input type='radio'  name='dn4' value='dont know' onclick='backtodefault(this)' rel='".(($dn4==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
    }
  
    if((!in_array(3,$_SESSION['sliderChoice1']))&&(!in_array(3,$_SESSION['sliderChoice2'])))
            echo "
   <tr>
    <td>Auto-rickshaw</td>
  <td colspan='50'>	 
  
  <div class='''slidecontainer'>
  <input type='range' name='r5' min='-120' max='120' value='".(($dn5==NULL)?(($r5==NULL)?'0':$r5):'0')."' class='slider' id='myRange4' onchange='checkdn(this)'>
  <p>Value: <span id='demo4'></span>mins</p>
</div>
<script>
var slider4 = document.getElementById('myRange4');
var output4 = document.getElementById('demo4');
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
</script>
	
	
  
  
  
  
  </td>

    <td><input type='radio'  name='dn5' value='dont know' onclick='backtodefault(this)' rel='".(($dn5==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
  
  if((!in_array(4,$_SESSION['sliderChoice1']))&&(!in_array(4,$_SESSION['sliderChoice2'])))
            echo "
     <tr>
    <td>Two-wheeler</td>
      <td colspan='50'>	
	  
	  
	  
	  <div class='''slidecontainer'>
  <input type='range' name='r6' min='-120' max='120' value='".(($dn6==NULL)?(($r6==NULL)?'0':$r6):'0')."' class='slider' id='myRange5' onchange='checkdn(this)'>
  <p>Value: <span id='demo5'></span>mins</p>
</div>
<script>
var slider5 = document.getElementById('myRange5');
var output5 = document.getElementById('demo5');
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
</script>
	
	  
	  
	  </td>

    <td><input type='radio'  name='dn6' value='dont know' onclick='backtodefault(this)' rel='".(($dn6==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
  
    if($far <= 2){
        if((!in_array(5,$_SESSION['sliderChoice1']))&&(!in_array(5,$_SESSION['sliderChoice2'])))
            echo "
   <tr>
    <td>Cycle</td>
    <td colspan='50'>	 
	
	
	<div class='''slidecontainer'>
  <input type='range' name='r7' min='-120' max='120' value='".(($dn7==NULL)?(($r7==NULL)?'0':$r7):'0')."' class='slider' id='myRange6' onchange='checkdn(this)'>
  <p>Value: <span id='demo6'></span>mins</p>
</div>
<script>
var slider6 = document.getElementById('myRange6');
var output6 = document.getElementById('demo6');
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}
</script>
	
	
	
	
	
	
	
	</td>

    <td><input type='radio'  name='dn7' value='dont know' onclick='backtodefault(this)' rel='".(($dn7==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
  
  echo "
   <tr>
    <td>Walk</td>
   <td colspan='50'>	
   
  <div class='''slidecontainer'>
  <input type='range' name='r8' min='-120' max='120' value='".(($dn8==NULL)?(($r8==NULL)?'0':$r8):'0')."' class='slider' id='myRange7' onchange='checkdn(this)'>
  <p>Value: <span id='demo7'></span>mins</p>
</div>
<script>
var slider7 = document.getElementById('myRange7');
var output7 = document.getElementById('demo7');
output7.innerHTML = slider7.value;

slider7.oninput = function() {
  output7.innerHTML = this.value;
}
</script>
	
	
   
   
   </td>

    <td><input type='radio'  name='dn8' value='dont know' onclick='backtodefault(this)' rel='".(($dn8==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
  
	}
  ?>
  
</table>			
 <br>
  


					
					</span>  <br><br>
		
			 
		   
	
			
			</td>
			</tr>
<tr>
<td class="td1" colspan="2">
			



   
4. Please compare one-way commute cost of the following modes with that of your usual <b> primary mode</b>. Please use the slider for each mode.
					
			
			
		<style>p.b { 
  word-spacing: 20px;
}	
	</style>		
  <br>
  
   <table style="width:100%">

  <tr>
 <td>Input Fields</td>
 <td colspan="50">
 &nbsp;&nbsp;<img src="assets/images/Scale2.png" width="100%" height="80%">
 </td>
  <td>Don't know</td>
 </tr>

	

	
<?php
   if((!in_array(1,$_SESSION['sliderChoice1']))&&(!in_array(1,$_SESSION['sliderChoice2']))) 
      echo "
   <tr>
    <td>Car</td>
    <td colspan='50'>
	
	
<div class='''slidecontainer'>
  <input type='range' name='r9' min='-200' max='200' value='".(($dn9==NULL)?(($r9==NULL)?'0':$r9):'0')."' class='slider' id='myRange9' onchange='checkdn(this)'>
  <p>Value: Rs<span id='demo9'></span></p>
</div>
<script>
var slider9 = document.getElementById('myRange9');
var output9 = document.getElementById('demo9');
output9.innerHTML = slider9.value;

slider9.oninput = function() {
  output9.innerHTML = this.value;
}
</script>

	</td>

    <td><input type='radio'  name='dn9' value='dont know' onclick='backtodefault(this)' rel='".(($dn9==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
        
     if((!in_array(2,$_SESSION['sliderChoice1']))&&(!in_array(2,$_SESSION['sliderChoice2']))) 
      echo "   
  <tr>
    <td>Ola share</td>
     <td colspan='50'>	 
	 
	 <div class='''slidecontainer'>
  <input type='range' name='r10' min='-200' max='200' value='".(($dn10==NULL)?(($r10==NULL)?'0':$r10):'0')."' class='slider' id='myRange10' onchange='checkdn(this)'>
  <p>Value: Rs<span id='demo10'></span></p>
</div>
<script>
var slider10 = document.getElementById('myRange10');
var output10 = document.getElementById('demo10');
output10.innerHTML = slider10.value;

slider10.oninput = function() {
  output10.innerHTML = this.value;
}
</script>

	 
	 
	 </td>

    <td><input type='radio'  name='dn10' value='dont know' onclick='backtodefault(this)' rel='".(($dn10==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
        
    if((!in_array(6,$_SESSION['sliderChoice1']))&&(!in_array(6,$_SESSION['sliderChoice2'])))
       echo "
  <tr>
    <td>BMTC bus</td>
   <td colspan='50'>	
   
   <div class='''slidecontainer'>
  <input type='range' name='r11' min='-200' max='200' value='".(($dn11==NULL)?(($r11==NULL)?'0':$r11):'0')."' class='slider' id='myRange11' onchange='checkdn(this)'>
  <p>Value: Rs<span id='demo11'></span></p>
</div>
<script>
var slider11 = document.getElementById('myRange11');
var output11 = document.getElementById('demo11');
output11.innerHTML = slider11.value;

slider11.oninput = function() {
  output11.innerHTML = this.value;
}
</script>

   
   
   </td>

    <td><input type='radio'  name='dn11' value='dont know' onclick='backtodefault(this)' rel='".(($dn11==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
        
    if($far > 2){
        if((!in_array(7,$_SESSION['sliderChoice1']))&&(!in_array(7,$_SESSION['sliderChoice2'])))
            echo "
   <tr>
    <td>Office shuttle</td>
    <td colspan='50'>	 
	
	<div class='''slidecontainer'>
  <input type='range' name='r12' min='-200' max='200' value='".(($dn12==NULL)?(($r12==NULL)?'0':$r12):'0')."' class='slider' id='myRange12' onchange='checkdn(this)'>
  <p>Value: Rs<span id='demo12'></span></p>
</div>
<script>
var slider12 = document.getElementById('myRange12');
var output12 = document.getElementById('demo12');
output12.innerHTML = slider12.value;

slider12.oninput = function() {
  output12.innerHTML = this.value;
}
</script>

	
	
	
	
	
	</td>

    <td><input type='radio'  name='dn12' value='dont know' onclick='backtodefault(this)' rel='".(($dn12==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
    }
        
  if((!in_array(3,$_SESSION['sliderChoice1']))&&(!in_array(3,$_SESSION['sliderChoice2'])))
            echo "
   <tr>
    <td>Auto-rickshaw</td>
  <td colspan='50'>	 
  
  <div class='''slidecontainer'>
  <input type='range' name='r13' min='-200' max='200' value='".(($dn13==NULL)?(($r13==NULL)?'0':$r13):'0')."' class='slider' id='myRange13' onchange='checkdn(this)'>
  <p>Value: Rs<span id='demo13'></span></p>
</div>
<script>
var slider13 = document.getElementById('myRange13');
var output13 = document.getElementById('demo13');
output13.innerHTML = slider13.value;

slider13.oninput = function() {
  output13.innerHTML = this.value;
}
</script>

  
  
  
  
  
  
  </td>

    <td><input type='radio'  name='dn13' value='dont know' onclick='backtodefault(this)' rel='".(($dn13==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
  
  if((!in_array(4,$_SESSION['sliderChoice1']))&&(!in_array(4,$_SESSION['sliderChoice2'])))
            echo "
     <tr>
    <td>Two-wheeler</td>
      <td colspan='50'>	
	  
	  <div class='''slidecontainer'>
  <input type='range' name='r14' min='-200' max='200' value='".(($dn14==NULL)?(($r14==NULL)?'0':$r14):'0')."' class='slider' id='myRange14' onchange='checkdn(this)'>
  <p>Value: Rs<span id='demo14'></span></p>
</div>
<script>
var slider14 = document.getElementById('myRange14');
var output14 = document.getElementById('demo14');
output14.innerHTML = slider14.value;

slider14.oninput = function() {
  output14.innerHTML = this.value;
}
</script>

	  
	  
	  
	  
	  </td>

    <td><input type='radio'  name='dn14' value='dont know' onclick='backtodefault(this)' rel='".(($dn14==NULL)?"fasle'":"treu' checked")."></td>
  </tr>";
  
  
?>
  
  
  
</table>
  
  
  
  
  </td>
</tr>		
			
			
		
	
		
		
		
		
		
		
		
	
		
		
		  <tr>
                <td class="td1" colspan="2">
                   
                 5. Please compare the reliability (i.e., timeliness of arrival, certainty of travel time and wait time) of the following modes when compared to your usual mode.
<br>

<style>
	.pacing{
		padding-right: 30px;
	}
</style>

 <table style="width:100%">

 </tr>
	<?php
   if((!in_array(1,$_SESSION['sliderChoice1']))&&(!in_array(1,$_SESSION['sliderChoice2']))) 
      echo "
	 <tr>
    <td>Car</td>
	<td colspan='10'> <label><input type='radio'  name='r17' value='1' class='big pacing' ".(($r17== '1') ?  "checked" : "")."/>Much Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r17' value='2' class='big pacing' ".(($r17== '2') ?  "checked" : "")."/>Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r17' value='3' class='big pacing' ".(($r17== '3') ?  "checked" : "")."/>About the Same</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r17' value='4' class='big pacing' ".(($r17== '4') ?  "checked" : "")."/>More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r17' value='5' class='big pacing' ".(($r17== '5') ?  "checked" : "")."/>Much More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>";
        
    if((!in_array(2,$_SESSION['sliderChoice1']))&&(!in_array(2,$_SESSION['sliderChoice2']))) 
      echo "
  <tr>
    <td>Ola share</td>
     <td colspan='10'> <label><input type='radio'  name='r18' value='1' class='big pacing' ".(($r18== '1') ?  "checked" : "")."/>Much Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r18' value='2' class='big pacing' ".(($r18== '2') ?  "checked" : "")."/>Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r18' value='3' class='big pacing' ".(($r18== '3') ?  "checked" : "")."/>About the Same</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r18' value='4' class='big pacing' ".(($r18== '4') ?  "checked" : "")."/>More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r18' value='5' class='big pacing' ".(($r18== '5') ?  "checked" : "")."/>Much More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>";
        
    if((!in_array(6,$_SESSION['sliderChoice1']))&&(!in_array(6,$_SESSION['sliderChoice2'])))
       echo "
  <tr>
    <td>BMTC bus</td>
   <td colspan='10'> <label><input type='radio'  name='r19' value='1' class='big pacing' ".(($r19== '1') ?  "checked" : "")."/>Much Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r19' value='2' class='big pacing' ".(($r19== '2') ?  "checked" : "")."/>Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r19' value='3' class='big pacing' ".(($r19== '3') ?  "checked" : "")."/>About the Same</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r19' value='4' class='big pacing' ".(($r19== '4') ?  "checked" : "")."/>More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r19' value='5' class='big pacing' ".(($r19== '5') ?  "checked" : "")."/>Much More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>";
        
     if($far > 2){
        if((!in_array(7,$_SESSION['sliderChoice1']))&&(!in_array(7,$_SESSION['sliderChoice2'])))
            echo "   
   <tr>
    <td>Office shuttle</td>
    <td colspan='10'> <label><input type='radio'  name='r20' value='1' class='big pacing' ".(($r20== '1') ?  "checked" : "")."/>Much Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r20' value='2' class='big pacing' ".(($r20== '2') ?  "checked" : "")."/>Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r20' value='3' class='big pacing' ".(($r20== '3') ?  "checked" : "")."/>About the Same</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r20' value='4' class='big pacing' ".(($r20== '4') ?  "checked" : "")."/>More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r20' value='5' class='big pacing' ".(($r20== '5') ?  "checked" : "")."/>Much More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>";
     }
  
    if((!in_array(3,$_SESSION['sliderChoice1']))&&(!in_array(3,$_SESSION['sliderChoice2'])))
            echo "
   <tr>
    <td>Auto-rickshaw</td>
  <td colspan='10'> <label><input type='radio'  name='r21' value='1' class='big pacing' ".(($r21== '1') ?  "checked" : "")."/>Much Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r21' value='2' class='big pacing' ".(($r21== '2') ?  "checked" : "")."/>Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r21' value='3' class='big pacing' ".(($r21== '3') ?  "checked" : "")."/>About the Same</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r21' value='4' class='big pacing' ".(($r21== '4') ?  "checked" : "")."/>More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r21' value='5' class='big pacing' ".(($r21== '5') ?  "checked" : "")."/>Much More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>";
  
  if((!in_array(4,$_SESSION['sliderChoice1']))&&(!in_array(4,$_SESSION['sliderChoice2'])))
            echo "
     <tr>
    <td>Two-wheeler</td>
    <td colspan='10'> <label><input type='radio'  name='r22' value='1' class='big pacing' ".(($r22== '1') ?  "checked" : "")."/>Much Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r22' value='2' class='big pacing' ".(($r22== '2') ?  "checked" : "")."/>Less Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r22' value='3' class='big pacing' ".(($r22== '3') ?  "checked" : "")."/>About the Same</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r22' value='4' class='big pacing' ".(($r22== '4') ?  "checked" : "")."/>More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><input type='radio'  name='r22' value='5' class='big pacing' ".(($r22== '5') ?  "checked" : "")."/>Much More Reliable</label>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>";
        
 
    ?>

 
  
</table>
			   </td>
            </tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
<tr>
    <td class="td1" colspan="2">
	
	
	6. On a scale of 1 to 5, please rate the importance of each of the following in your commute mode choice decision, <b>1 being the least important</b> and <b>5 being the most important</b>. <br>
	
	<table style="width:100%">

 












  <tr>
    <td>Travel time & waiting time</td>
      <td colspan="10"> <input type="radio"  name="travelandwait" value="1" class="big" <?php echo ($travelandwait== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="travelandwait" value="2" class="big" <?php echo ($travelandwait== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="travelandwait" value="3" class="big" <?php echo ($travelandwait== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="travelandwait" value="4" class="big" <?php echo ($travelandwait== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="travelandwait" value="5" class="big" <?php echo ($travelandwait== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
  </tr>
  <tr>
    <td>Travel cost: parking, tolls, fares</td>
          <td colspan="10"> <input type="radio"  name="travelcost" value="1" class="big" <?php echo ($travelcost== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="travelcost" value="2" class="big" <?php echo ($travelcost== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="travelcost" value="3" class="big" <?php echo ($travelcost== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="travelcost" value="4" class="big" <?php echo ($travelcost== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="travelcost" value="5" class="big" <?php echo ($travelcost== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    

    
  </tr>
  <tr>
    <td>Reliability (timely arrival, certainty of travel time)</td>
   
     <td colspan="10"> <input type="radio"  name="reliability" value="1" class="big" <?php echo ($reliability== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="reliability" value="2" class="big" <?php echo ($reliability== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="reliability" value="3" class="big" <?php echo ($reliability== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="reliability" value="4" class="big" <?php echo ($reliability== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="reliability" value="5" class="big" <?php echo ($reliability== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
    
  </tr>
   <tr>
    <td>Safety & security</td>
       <td colspan="10"> <input type="radio"  name="safety" value="1" class="big" <?php echo ($safety== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="safety" value="2" class="big" <?php echo ($safety== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="safety" value="3" class="big" <?php echo ($safety== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="safety" value="4" class="big" <?php echo ($safety== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="safety" value="5" class="big" <?php echo ($safety== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    

    
  </tr>
  
   <tr>
    <td>Flexibility, ease of stopping, or detours</td>
       <td colspan="10"> <input type="radio"  name="flexibility" value="1" class="big" <?php echo ($flexibility== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="flexibility" value="2" class="big" <?php echo ($flexibility== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="flexibility" value="3" class="big" <?php echo ($flexibility== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="flexibility" value="4" class="big" <?php echo ($flexibility== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="flexibility" value="5" class="big" <?php echo ($flexibility== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
    
  </tr>
  
  
  
   <tr>
    <td>Privacy, less-crowded</td>
   
     <td colspan="10"> <input type="radio"  name="privacy" value="1" class="big" <?php echo ($privacy== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="privacy" value="2" class="big" <?php echo ($privacy== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="privacy" value="3" class="big" <?php echo ($privacy== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="privacy" value="4" class="big" <?php echo ($privacy== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="privacy" value="5" class="big" <?php echo ($privacy== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
    
    
  </tr>
  



     <tr>
    <td>Environmentally friendly</td>
       <td colspan="10"> <input type="radio"  name="env" value="1" class="big" <?php echo ($env== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="env" value="2" class="big" <?php echo ($env== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="env" value="3" class="big" <?php echo ($env== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="env" value="4" class="big" <?php echo ($env== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="env" value="5" class="big" <?php echo ($env== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
    
  </tr>
  
  
  
    <tr>
    <td>Status symbol</td>
       <td colspan="10"> <input type="radio"  name="statussymbol" value="1" class="big" <?php echo ($statussymbol== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="statussymbol" value="2" class="big" <?php echo ($statussymbol== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio"  name="statussymbol" value="3" class="big" <?php echo ($statussymbol== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;
	  <input type="radio"  name="statussymbol" value="4" class="big" <?php echo ($statussymbol== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio"  name="statussymbol" value="5" class="big" <?php echo ($statussymbol== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
    
  </tr>
  
</table>
		   
		 













		 
			</td>
					
			
			
			
			
		</tr>
				
				
				
			
		
		<tr>
		<td class="td1">
		7. Which of the following activities do you typically do during your commute (other than driving, waiting or traveling). Also, how much of your commute time over a month do you normally spend doing such activities? Please indicate all that apply.
		<br>
		
		
			<table style="width:100%">

 

	


<tr>
<th>Activity</th>
<th>Check if you do the activity</th>
<th>% total commute time spent</th>

</tr>



<script>
	listOfFields = ['navigationp','studyingp','relaxingp','leisurereadingp','talkingp','browsingp','contemplatingp','nothingp','leisurecallingp','otherthanp','prayingp'];
	bound = function(ele){
		if(ele.value > 100)
			ele.value = 100;
		if(ele.value < 0)
			ele.value = 0;
		var total = 0;
		for(var i in listOfFields){
			if($('input[name='+listOfFields[i]+']').val()!=''){
				total += parseInt($('input[name='+listOfFields[i]+']').val());
			}
		}
		if(total > 100){
			alert("Total Percentage over 100!\nDefaulting last entered value to 0.");
			ele.value = 0;
		}
	}
	removeValue = function(ele){
		if($(ele).attr('rel') == 'fasle'){
			$(ele).attr('rel','treu');
		}else{
			$(ele).attr('rel','fasle');
			ele.checked = false;
			$(ele).parent().next().find("input").val("");
		}
	}
</script>



   <tr>
    <td>Office work & related phone calls, studying</td>
      <td > <input type="radio" onclick="removeValue(this)" name="studying" value="1" class="big" rel="<?php echo ($studying==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="studyingp" class="textInput" style="width:80%;" 	value="<?php echo ($studying==NULL)?'':$studyingp;?>" >	</td>
    
  </tr>
    <tr>
    <td>Relaxing, sleeping</td>
      <td > <input type="radio" onclick="removeValue(this)" name="relaxing" value="1" class="big" rel="<?php echo ($relaxing==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="relaxingp" class="textInput" style="width:80%;" 	value="<?php echo ($relaxing==NULL)?'':$relaxingp;?>" >	</td>
    
  </tr>
  
  






    <tr>
    <td>Leisure reading</td>
      <td > <input type="radio" onclick="removeValue(this)" name="leisurereading" value="1" class="big" rel="<?php echo ($leisurereading==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="leisurereadingp" class="textInput" style="width:80%;" 	value="<?php echo ($leisurereading==NULL)?'':$leisurereadingp;?>" >	</td>
    
  </tr>
    <tr>
    <td>Talking to co-passengers</td>
      <td > <input type="radio" onclick="removeValue(this)" name="talking" value="1" class="big" rel="<?php echo ($talking==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="talkingp" class="textInput" style="width:80%;" 	value="<?php echo ($talking==NULL)?'':$talkingp;?>" >	</td>
    
  </tr>
    <tr>
    <td>Browsing, games, video, music</td>
      <td > <input type="radio" onclick="removeValue(this)" name="browsing" value="1" class="big" rel="<?php echo ($browsing==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="browsingp" class="textInput" style="width:80%;" 	value="<?php echo ($browsing==NULL)?'':$browsingp;?>" >	</td>
    
  </tr>
    <tr>
    <td>Contemplating, planning</td>
      <td > <input type="radio" onclick="removeValue(this)" name="contemplating" value="1" class="big" rel="<?php echo ($contemplating==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="contemplatingp" class="textInput" style="width:80%;" 	value="<?php echo ($contemplating==NULL)?'':$contemplatingp;?>" >	</td>
    
  </tr>
    <tr>
    <td>Nothing, observing surroundings</td>
      <td > <input type="radio" onclick="removeValue(this)" name="nothing" value="1" class="big" rel="<?php echo ($nothing==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="nothingp" class="textInput" style="width:80%;" 	value="<?php echo ($nothing==NULL)?'':$nothingp;?>" >	</td>
    
  </tr>
    <tr>
    <td>Non-work phone calls or texting</td>
      <td > <input type="radio" onclick="removeValue(this)" name="leisurecalling" value="1" class="big" rel="<?php echo ($leisurecalling==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="leisurecallingp" class="textInput" style="width:80%;" 	value="<?php echo ($leisurecalling==NULL)?'':$leisurecallingp;?>" >	</td>
    
  </tr>
  



    <tr>
    <td>Other</td>
      <td > <input type="radio" onclick="removeValue(this)" name="otherthan" value="1" class="big" rel="<?php echo ($otherthan==NULL)?'fasle"':'treu" checked';?>/></td>
 
				<td> 	<input oninput="bound(this)" type="number" max="100" name="otherthanp" class="textInput" style="width:80%;" 	value="<?php echo ($otherthan==NULL)?'':$otherthanp;?>" >	</td>
    
  </tr>
   
    
  
</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</td>
		
		</tr>
		
			
			
	
		
		
		
			<tr><td colspan="2"><div class="Register Back" onclick="go_back()">Previous Page</div><input type="submit" name="Submit" value="Next Page" id="register_btn3" class="Register"/></td></tr>
		
		
		
		
	</table>
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
    padding: 8px 16px;
}

a:hover {
    background-color: #ddd;
    color: black;
}

.next {
    background-color: #008080;
    color: white;
	align: right;
	
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
<style>
#nameandaddress_error
{
	color:red;
	font-size:small;
}
#role_error
{
	color:red;
	font-size:small;
}
#des_error
{
	color:red;
	font-size:small;
}
#age_error
{
	color:red;
	font-size:small;
}
#gender_error
{
	color:red;
	font-size:small;
}
#vehicles_error
{
	color:red;
	font-size:small;
}
#far_error
{
	color:red;
	font-size:small;
}
#email_error
{
	color:red;
	font-size:small;
}
</style>
	