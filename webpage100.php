<?php 
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");//get the date
header("Cache-Control: no-store, no-cache, must-revalidate"); // to retain the values on the page onclick back button
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_limiter("private_no_expire");
session_start(); // pHp session starts here
include 'header.php'; // include the header, the website banner
error_reporting(1);


// $servername = "localhost"; // connect to the external database
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if (isset($_POST['Submit'])){ // for survey completion algorithm, count the number of values filled
	
// 	$totalMan = 0;
// 	$filledMan = 0;
// 	$totalOp = 0;
// 	$filledOp = 0;
	
// 	$totalMan += 1;
// 	if(($_POST['mobilenumber'] != '')||($_POST['email'] != '')){
// 		$filledMan += 1;
// 	}
	
// 	$totalOp += 1;
// 	if($_POST['age'] != ''){
// 		$filledOp += 1;
// 	}
	
// 	$totalOp += 1;
// 	if($_POST['gender'] != ''){
// 		$filledOp += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['status'] != ''){
// 		$filledMan += 1;
// 		if($_POST['status'] == "Employed"){
// 			$totalMan += 1;
// 			if($_POST['role'] != ''){
// 				$filledMan += 1;
// 			}
// 			$totalMan += 1;
// 			if($_POST['des'] != ''){
// 				$filledMan += 1;
// 			}
// 			$totalMan += 1;
// 			if($_POST['company'] != ''){
// 				$filledMan += 1;
// 			}
// 			$totalMan += 1;
// 			if(($_POST['location'] != '')||(($_POST['worklocationstreetname'] != '')&&($_POST['worklocationlocality'] != '')&&($_POST['worklocationlandmarks'] != ''))){
// 				$filledMan += 1;
// 			}
// 		}
// 		if($_POST['status'] == "Student"){
// 			$totalMan += 1;
// 			if($_POST['institution'] != ''){
// 				$filledMan += 1;
// 			}
// 		}
// 	}
	
// 	$totalOp += 1;
// 	if($_POST['numberofhousehold'] != 'NULL'){
// 		$filledOp += 1;
// 		if($_POST['numberofhousehold'] != 0){
// 			if(!empty($_POST['genderhousehold'])) {
// 				foreach($_POST['genderhousehold'] as $x){
// 					$totalOp += 1;
// 					if($x != 'No Value'){
// 						$filledOp += 1;
// 					}
// 				}
// 			}
// 			error_log($_POST['genderhousehold']);
	
// 			if(!empty($_POST['agehousehold'])) {
// 				foreach($_POST['agehousehold'] as $x){
// 					$totalOp += 1;
// 					if($x != 'No Value'){
// 						$filledOp += 1;
// 					}
// 				}
// 			}
  
// 			if(!empty($_POST['statushousehold'])) {
// 				foreach($_POST['statushousehold'] as $x){
// 					$totalOp += 1;
// 					if($x != 'No Value'){
// 						$filledOp += 1;
// 					}
// 				}
// 			}
// 		}else{
// 			$_POST['genderhousehold'] = array('');
// 			$_POST['agehousehold'] = array('');
// 			$_POST['statushousehold'] = array('');
// 		}
// 	}
	
// 	$totalMan += 1;
// 	if((($_POST['housenumber'] != '')&&($_POST['streetname'] != '')&&($_POST['locality'] != '')&&($_POST['majorlandmarks'] != '')&&($_POST['pincode'] != ''))||($_POST['homemapaddress'] != 'Infosys Parking Lot, Electronics City Phase 1, Electronic City, Bengaluru, Karnataka 560100, India')){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if(($_POST['tw'] != 'NULL')&&($_POST['cars'] != 'NULL')&&($_POST['bicycle'] != 'NULL')){
// 		$filledMan += 1;
// 	}else if(($_POST['tw1'] != 'NULL')&&($_POST['cars1'] != 'NULL')&&($_POST['bicycle1'] != 'NULL')){
// 		$filledMan += 1;
// 	}
	
// 	$totalOp += 1;
// 	if($_POST['monthlyrange'] != ''){
// 		$filledOp += 1;
// 	}
	
// 	$totalOp += 1;
// 	if(!empty($_POST['officetransport'])){
// 		$filledOp += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['far'] != ''){
// 		$filledMan += 1;
// 	}
// 	//post the session variable
// 	 $_SESSION['mobilenumber'] = $_POST['mobilenumber'];
// 	 $_SESSION['email'] = $_POST['email'];
// 	  $_SESSION['email1'] = $_POST['email1'];
	
//  $_SESSION['role'] = $_POST['role'];
//   $_SESSION['roleother'] = $_POST['roleother'];
//  $_SESSION['des'] = $_POST['des'];
//   $_SESSION['designation'] = $_POST['designation'];
//  $_SESSION['age'] = $_POST['age'];
//  $_SESSION['gender'] = $_POST['gender'];

// /* $_SESSION['V2'] = $_POST['V2'];
//  $_SESSION['V3'] = $_POST['V3'];
//  $_SESSION['V4'] = $_POST['V4'];
//  $_SESSION['V5'] = $_POST['V5'];
 

//  $_SESSION['M2'] = $_POST['M2'];
//   $_SESSION['M3'] = $_POST['M3'];
//  $_SESSION['M4'] = $_POST['M4'];
//  $_SESSION['M5'] = $_POST['M5'];
 

//  $_SESSION['MO2'] = $_POST['MO2'];
//  $_SESSION['MO3'] = $_POST['MO3'];
//  $_SESSION['MO4'] = $_POST['MO4'];
//   $_SESSION['MO5'] = $_POST['MO5'];
  

//  $_SESSION['MY2'] = $_POST['MY2'];
//  $_SESSION['MY3'] = $_POST['MY3'];
//  $_SESSION['MY4'] = $_POST['MY4'];
//  $_SESSION['MY5'] = $_POST['MY5'];
 

//   $_SESSION['YA2'] = $_POST['YA2'];
//  $_SESSION['YA3'] = $_POST['YA3'];
//  $_SESSION['YA4'] = $_POST['YA4'];
//  $_SESSION['YA5'] = $_POST['YA5'];
 

//  $_SESSION['FT2'] = $_POST['FT2'];
//  $_SESSION['FT3'] = $_POST['FT3'];
//   $_SESSION['FT4'] = $_POST['FT4'];
//  $_SESSION['FT5'] = $_POST['FT5'];
 

//  $_SESSION['KV2'] = $_POST['KV2'];
//  $_SESSION['KV3'] = $_POST['KV3'];
//  $_SESSION['KV4'] = $_POST['KV4'];
//  $_SESSION['KV5'] = $_POST['KV5'];*/
 

//  $_SESSION['officetransportanyother'] = $_POST['officetransportanyother'];
//  $_SESSION['far'] = $_POST['far'];
 
 
 
 
//  	 $_SESSION['status'] = $_POST['status'];
//   $_SESSION['company'] = $_POST['company'];
//     $_SESSION['location'] = $_POST['location'];
	
// 	 $_SESSION['worklocationstreetname'] = $_POST['worklocationstreetname'];
// 	  $_SESSION['worklocationlocality'] = $_POST['worklocationlocality'];
// 	   $_SESSION['worklocationlandmarks'] = $_POST['worklocationlandmarks'];
	
	
// 	 $_SESSION['institution'] = $_POST['institution']; 
	  
	  
	
		
		
// 		    $_SESSION['housenumber'] = $_POST['housenumber'];
// 			    $_SESSION['streetname'] = $_POST['streetname'];
// 				    $_SESSION['locality'] = $_POST['locality'];
// 					    $_SESSION['majorlandmarks'] = $_POST['majorlandmarks'];
// 					     $_SESSION['pincode'] = $_POST['pincode'];

		
		
		
		
		
		
		
		
// 		 $_SESSION['tw'] = $_POST['tw'];
// 		  $_SESSION['cars'] = $_POST['cars'];
// 		   $_SESSION['bicycle'] = $_POST['bicycle'];
	  
			
// 		 $_SESSION['tw1'] = $_POST['tw1'];
// 		  $_SESSION['cars1'] = $_POST['cars1'];
// 		   $_SESSION['bicycle1'] = $_POST['bicycle1'];
	  
// 			  $_SESSION['anyothervehicle3'] = $_POST['anyothervehicle3'];
// 			   $_SESSION['monthlyrange'] = $_POST['monthlyrange'];
				
			 
				  
 

//      $_SESSION['homemapaddress'] = $_POST['homemapaddress'];
	 	

// 	     $_SESSION['homelatitude'] = $_POST['homelatitude'];
// 		     $_SESSION['homelongitude'] = $_POST['homelongitude'];
 
 
 
 
//   $_SESSION['numberofhousehold'] = $_POST['numberofhousehold'];
// 	  $_SESSION['date'] = $_POST['date'];

	   
	   
	   
	   
	    
	   
	   
	 
//   if(!empty($_POST['officetransport'])) {
//   $i = 0;
//   foreach($_POST['officetransport'] as $x){
//    $_SESSION["officetransport"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["officetransportArraySize"] = $i; //store the number of 'modes'
// }
   
	   
	   
	   
	   
	   
	   
	   
 
//   if(!empty($_POST['genderhousehold'])) {
//   $i = 0;
//   foreach($_POST['genderhousehold'] as $x){
//    $_SESSION["genderhousehold"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["genderhouseholdArraySize"] = $i; //store the number of 'modes'
// }



//  if(!empty($_POST['agehousehold'])) {
//   $i = 0;
//   foreach($_POST['agehousehold'] as $x){
//    $_SESSION["agehousehold"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["agehouseholdArraySize"] = $i; //store the number of 'modes'
// }


//  if(!empty($_POST['statushousehold'])) {
//   $i = 0;
//   foreach($_POST['statushousehold'] as $x){
//    $_SESSION["statushousehold"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["statushouseholdArraySize"] = $i; //store the number of 'modes'
// }
 
 
//    if(!empty($_POST['genderhousehold1'])) {
//   $i = 0;
//   foreach($_POST['genderhousehold1'] as $x){
//    $_SESSION["genderhousehold1"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["genderhousehold1ArraySize"] = $i; //store the number of 'modes'
// }





//  if(!empty($_POST['statushousehold1'])) {
//   $i = 0;
//   foreach($_POST['statushousehold1'] as $x){
//    $_SESSION["statushousehold1"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["statushousehold1ArraySize"] = $i; //store the number of 'modes'
// }
 
 
 
// //update the table with respective columns stored in mysql
 
 
 
//       $stmt = $conn->prepare("UPDATE users3 SET email =:email,role =:role,roleother =:roleother,des =:des,designation=:designation,age=:age,
	  
	  
	  
// 	  gender=:gender,mobilenumber=:mobilenumber,officetransport=:officetransport_string,officetransportanyother=:officetransportanyother,far=:far,
	
	
	
// 	company=:company,location=:location,
	
	
	
	
// 	worklocationstreetname=:worklocationstreetname,worklocationlocality=:worklocationlocality,worklocationlandmarks=:worklocationlandmarks,
	
	
	
	
	
	
// 	institution=:institution,
	
	
	
// 	housenumber=:housenumber,streetname=:streetname,locality=:locality,majorlandmarks=:majorlandmarks,pincode= :pincode,
	
	
	
	
	
	
// 	tw=:tw,cars=:cars,bicycle=:bicycle,tw1=:tw1,cars1=:cars1,bicycle1=:bicycle1,anyothervehicle3=:anyothervehicle3,monthlyrange=:monthlyrange,
	
// 	status=:status,email1=:email1,homemapaddress=:homemapaddress,homelatitude=:homelatitude,homelongitude=:homelongitude,numberofhousehold=:numberofhousehold,genderhousehold=:genderhousehold_string,agehousehold=:agehousehold_string,statushousehold=:statushousehold_string,
	
	

	
// 	date=:date
	
	

	
	
	
	
  
 
 
 
 
 
 
 
 
//  WHERE id = :id");
 	
  
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


 
	
// 	//bind parameters
	
	
	
	
	
// 		$stmt->bindParam(':id', $id);
	
	
// 	$stmt->bindParam(':email', $email);
	
	
	
	
// 	$stmt->bindParam(':email1', $email1);
	
// 	$stmt->bindParam(':role', $role);
// 	$stmt->bindParam(':roleother', $roleother);
// 	$stmt->bindParam(':des', $des);
//     $stmt->bindParam(':designation', $designation);
// 	$stmt->bindParam(':age', $age);
// 	$stmt->bindParam(':gender', $gender);
	

	
	

	
	
// 	$stmt->bindParam(':officetransport_string', $officetransport_string);
// 	$stmt->bindParam(':officetransportanyother', $officetransportanyother);
// 	$stmt->bindParam(':far', $far);
													
	

 
 
 
 

 
//  $stmt->bindParam(':company', $company);
//  $stmt->bindParam(':location', $location);
 
//   $stmt->bindParam(':worklocationstreetname', $worklocationstreetname);
//    $stmt->bindParam(':worklocationlocality', $worklocationlocality);
//     $stmt->bindParam(':worklocationlandmarks', $worklocationlandmarks);
 
//  $stmt->bindParam(':institution', $institution);

  
  
  
//     $stmt->bindParam(':housenumber', $housenumber);
// 	  $stmt->bindParam(':streetname', $streetname);
// 	    $stmt->bindParam(':locality', $locality);
// 		  $stmt->bindParam(':majorlandmarks', $majorlandmarks);
//   $stmt->bindParam(':pincode', $pincode);
  
  
  
  
  
  
//  $stmt->bindParam(':tw', $tw);
//  $stmt->bindParam(':cars', $cars);
//  $stmt->bindParam(':bicycle', $bicycle);
//   $stmt->bindParam(':tw1', $tw1);
//  $stmt->bindParam(':cars1', $cars1);
//  $stmt->bindParam(':bicycle1', $bicycle1);

 
 
//  $stmt->bindParam(':anyothervehicle3', $anyothervehicle3);
//  $stmt->bindParam(':monthlyrange', $monthlyrange);
 
 
//   $stmt->bindParam(':status', $status);
 

//   $stmt->bindParam(':homemapaddress', $homemapaddress);
//    $stmt->bindParam(':homelatitude', $homelatitude);
//     $stmt->bindParam(':homelongitude', $homelongitude);
 
 
//    $stmt->bindParam(':numberofhousehold', $numberofhousehold);
 
 
//  $stmt->bindParam(':genderhousehold_string', $genderhousehold_string);

//  $stmt->bindParam(':agehousehold_string', $agehousehold_string);

//  $stmt->bindParam(':statushousehold_string', $statushousehold_string);
  
 
//  $stmt->bindParam(':date', $date);
 
 
//   $stmt->bindParam(':mobilenumber', $mobilenumber);

 
 

// // set the variables as session variable

 
//  $gh=[];
// $ah=[];
// $sh=[];


// $vv1=[];
// $mm1=[];
// $mmo1=[];
// $mmy1=[];
// $yya1=[];
// $fft1=[];
// $kkv1=[];
// $rr1=[];

// $ha=[];
// $ot=[];

// $i = 0;
// 			for($i = 0;$i<$_SESSION["officetransportArraySize"];$i++) {
// 		$ot[$i]=$_SESSION['officetransport'][$i];
// 		}
		
// 		$officetransport_string = implode(",",$ot);
		
		

		
	
 

		

		
//  for($i = 0;$i<$_SESSION["genderhouseholdArraySize"];$i++) {
// 		$gh[$i]=$_SESSION['genderhousehold'][$i];
// 		}
// 		$genderhousehold_string = implode(",",$gh);
	
 
//  for($i = 0;$i<$_SESSION["agehouseholdArraySize"];$i++) {
// 		$ah[$i]=$_SESSION['agehousehold'][$i];
// 		}
		
// 		$agehousehold_string = implode(",",$ah);
		
		
		
// 		for($i = 0;$i<$_SESSION["statushouseholdArraySize"];$i++) {
// 		$sh[$i]=$_SESSION['statushousehold'][$i];
// 		}
		
// 		$statushousehold_string = implode(",",$sh);
 
 	
 
 
 
 
 
 
 
 
 
//     $email = $_SESSION['email'];
	
	 
//     $id = $_SESSION['id'];
// 	   $email1 = $_SESSION['email1'];
 	
// 	$role = $_SESSION['role'];
// 	$roleother = $_SESSION['roleother'];
// 	$des = $_SESSION['des'];
// 	$designation = $_SESSION['designation'];
// 	$age = $_SESSION['age'];
// 	$gender = $_SESSION['gender'];

//     	$cat8 = $_SESSION['cat8'];
// 	$V1 = $_SESSION['V1'];
	
	
	
	
	
	
	
	
	
	
	
	
// 	$M1 = $_SESSION['M1'];
	
// 	$MO1 = $_SESSION['MO1'];

// 	$MY1 = $_SESSION['MY1'];
	
// 	$YA1 = $_SESSION['YA1'];
	
// 	$FT1 = $_SESSION['FT1'];
	
// 	$KV1 = $_SESSION['KV1'];
	
// 		$R1 = $_SESSION['R1'];
	

// 	$officetransportanyother = $_SESSION['officetransportanyother'];
// 	$far = $_SESSION['far'];
	
	
	
// 	$company = $_SESSION['company'];
// 	$location = $_SESSION['location'];
	
	
// 	$worklocationstreetname = $_SESSION['worklocationstreetname'];
// 	$worklocationlocality = $_SESSION['worklocationlocality'];
// 	$worklocationlandmarks = $_SESSION['worklocationlandmarks'];
	
	
	
	
	
// 	$institution = $_SESSION['institution'];

	
// 		$housenumber = $_SESSION['housenumber'];
// 	$streetname = $_SESSION['streetname'];
// 	$locality = $_SESSION['locality'];
// 	$majorlandmarks = $_SESSION['majorlandmarks'];
// 	$pincode = $_SESSION['pincode'];

	
	
	
		

	
	
	
	
	
// 	$tw = $_SESSION['tw'];
// 	$cars = $_SESSION['cars'];
// 	$bicycle = $_SESSION['bicycle'];	 
	
		
// 	$tw1 = $_SESSION['tw1'];
// 	$cars1 = $_SESSION['cars1'];
// 	$bicycle1 = $_SESSION['bicycle1'];

	
	

// 	$anyothervehicle3 = $_SESSION['anyothervehicle3'];
// 	$monthlyrange = $_SESSION['monthlyrange'];
	
	
	
	
// 	$status = $_SESSION['status'];
	
	

// 		$homelatitude = $_SESSION['homelatitude'];
// 			$homelongitude = $_SESSION['homelongitude'];
// 				$homemapaddress = $_SESSION['homemapaddress'];
	
	
	
	
// 			$numberofhousehold = $_SESSION['numberofhousehold'];
	
	
// 	$date = $_SESSION['date'];
	
	
	
// 		$mobilenumber = $_SESSION['mobilenumber'];
	
	
	
	
// $email = $_SESSION['email'];
	
// 	$stmt->execute();
	

 
 
 
//  } 
 


// /* Attempt MySQL server connection. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
 
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
            
           
			
     
	 
// 	 $startaddress=$row['startaddress'];
// 	$starttime=$row['starttime'];
// 	$entry=$row['entry'];
// 	$pointofentry=$row['pointofentry'];
// 	$entrymark=$row['entrymark'];
	
	
// 	$address=$row['address'];
// 	$latitude=$row['latitude'];
// 	$longitude=$row['longitude'];
// 	$timeentry=$row['timeentry'];
// 	$destination=$row['destination'];
	
// 			$workmm1=$row['workmm1'];
// 				$workmm2=$row['workmm2'];
// 					$workmm3=$row['workmm3'];
// 						$workmm4=$row['workmm4'];
// 							$workmm5=$row['workmm5'];
	
// 	$endtime=$row['endtime'];
// 	$work=$row['work'];
// 	$purpose=$row['purpose'];
// 	$mode=$row['mode'];
// 	$modefor=$row['modefor'];
	
// 	$personalcar=$row['personalcar'];
// 	$tripcost=$row['tripcost'];
	 
	 
// 	 $parkingcost=$row['parkingcost'];
// 	 $parkingcost1=$row['parkingcost1'];
// 	 $parkingtime=$row['parkingtime'];
	 
// 	 	 $tthours=$row['tthours'];
// 	 	 	 $ttminutes=$row['ttminutes'];
	 
	 
// 	 $startaddress=$row['startaddress'];
// 	 $startaddress1=$row['startaddress1'];
// 	 $startaddress2=$row['startaddress2'];
// 	 $startaddress3=$row['startaddress3'];
// 	 	 $startaddresspincode=$row['startaddresspincode'];
	 
	 
	 
	 
	 
// 	 $destination=$row['destination'];
// 	 $destination1=$row['destination1'];
// 	 $destination2=$row['destination2'];
// 	 $destination3=$row['destination3'];
// 	 $destination4=$row['destination4'];
// 	 $ToWorksrc=$row['ToWorksrc'];
// 	 $ToWorkdst=$row['ToWorkdst'];
	 
// 	 $interStop=$row['interStop'];
// 	 $Tointermediate1=$row['Tointermediate1'];
//      $Tointermediate2=$row['Tointermediate2'];
//      $Tointermediate3=$row['Tointermediate3'];
//      $Tointermediate4=$row['Tointermediate4'];
//      $Tointermediate5=$row['Tointermediate5'];
//      $ToInterTime1=$row['ToInterTime1'];
//      $ToInterTime2=$row['ToInterTime2'];
//      $InterStopPurpose=$row['InterStopPurpose'];
//      $PurposeOther=$row['PurposeOther'];
//      $ToTotalTravel1=$row['ToTotalTravel1'];
//      $ToTotalTravel2=$row['ToTotalTravel2'];
	 
	 
	 
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
// 		//gets the value of home, work, location address from the webpage2.php and store in different variables
// $company1=$_SESSION["company"];
// $institution1=$_SESSION["institution"];


// $housenumber1=$_SESSION["housenumber"];
// $streetname1=$_SESSION["streetname"];
// $locality1=$_SESSION["locality"];
// $majorlandmarks1=$_SESSION["majorlandmarks"];
// $pincode1=$_SESSION["pincode"];


// $location1=$_SESSION["location"];
// $worklocationlocality1=$_SESSION["worklocationlocality"];
// $worklocationstreetname1=$_SESSION["worklocationstreetname"];
// $worklocationlandmarks1=$_SESSION["worklocationlandmarks"];



// $VV1=$_SESSION["V1"];
// $VV2=$_SESSION["V2"];
// $VV3=$_SESSION["V3"];
// $VV4=$_SESSION["V4"];
// $VV5=$_SESSION["V5"];





// $MM1=$_SESSION["M1"];
// $MM2=$_SESSION["M2"];
// $MM3=$_SESSION["M3"];
// $MM4=$_SESSION["M4"];
// $MM5=$_SESSION["M5"];
// $MM6=$_SESSION["MO1"];
// $MM7=$_SESSION["MO2"];
// $MM8=$_SESSION["MO3"];
// $MM9=$_SESSION["MO4"];
// $MM10=$_SESSION["MO5"];

?>
<html>
<head>

	<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="/test4/2611/js/jquery.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery1.js" type="text/javascript"></script>	
<!--
    <script src="/1412/js/jquery.js" type="text/javascript"></script>
<script src="/1412/js/jquery1.js" type="text/javascript"></script>
-->



	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
		
		
	
	
	<style>
<head> <!-- tab and body styles-->



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
		
		
	
<style> <!-- para styles-->
.para
{
	font-weight: 0;
	font-size: small;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>

	
		
		  
        <style><!-- map style and width-->
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
		#mapa {
		   height: 350px;
		   width: 100%;
		}
        </style>
		<style>
		 @media only screen and (max-width: 480px)
		 {
			 .td1{
				 width: 150px;
			 }
		 }
		 
		 </style>
	
 






	
</head>
<body>
<!--Mobirise section-->
<section class="engine"><a href="https://mobirise.ws/f">simple site creator</a></section><section class="mbr-section mbr-after-navbar" id="msg-box5-1" data-rv-view="437" style="background-color: rgb(255,255,255); padding-top: 0px; padding-bottom: 40px;">
             

</section>

<!--Mobirise section-->
	<section class="mbr-section mbr-section__container article" id="header3-2" data-rv-view="440" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
			<small class="mbr-section-subtitle"><br><span style="font-style: normal;">
									


<br><br><br><br>
<br><br><br><br>

<style> <!-- back button styling-->
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
			window.location.href = 'webpage2.php';
		}
	</script>
			<?php
			$_SESSION['webpage2_Man'] = (($totalMan - $filledMan) == 0);
			if($totalOp != 0)
				$_SESSION['webpage2_Op'] = ($filledOp/$totalOp);
			else
				$_SESSION['webpage2_Op'] = 1.0;
			if((!$_SESSION['webpage2_Man'])||($_SESSION['webpage2_Op'] < 0.8)){
				echo "
					<br><br>
					<div style='text-align:center'>You have not answered some questions in the previous page. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>



<form  method="post" action="trip2.php<?php echo '?'.mt_rand();?>" class="form" align="left" name="form" >
		<!--Table-->	
	<table class="table"  id="customers">
     
			
		
		
		
			
		<tr> <!-- tr is table row-->
			<th class="td1" colspan="2"> 
<u style="font-size:30px;">TRIP to Work/Education</u>

<br>
	<span id="para" class="para" style="font-size:20px;">	
Please enter the details of your <b>*usual* trip to work or education (i.e., commute trip)</b> you made on the <b>most recent working day.</b>

</span>
		
</th>

			
		</tr>
		<tr>
			<td class="td1" colspan="2">1. If you started this trip from home, check the ‘Home’ button. If you did not start from home, please enter the address of the start location.*
			</td>
					
			
			
			
			
		</tr>


<style>
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}



:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: black;
}






::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: black;
}
::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}
</style>
<!--for filling the home address if home button is clicked-->
<!-- showing and hiding panels according to the choice-->

			<script>
				
function myFunction() {
    
  $("#panel105").show();
	 $("#panel100").show();
				 $("#panel101").hide();
	var x = '<?php echo $housenumber1; ?>';
	
	

	

 
	
	
	
	var input = document.getElementById ("myText");

            input.placeholder = '<?php echo $housenumber1; ?>';
			input.value = '<?php echo $housenumber1; ?>';
			
			
			
				
	var input = document.getElementById ("myText02");

            input.placeholder = '<?php echo $streetname1; ?>';
			input.value = '<?php echo $streetname1; ?>';
			
			
				
	var input = document.getElementById ("myText03");

            input.placeholder = '<?php echo $locality1; ?>';
			input.value = '<?php echo $locality1; ?>';
			
			
				
	var input = document.getElementById ("myText04");

            input.placeholder = '<?php echo $majorlandmarks1; ?>';
			input.value = '<?php echo $majorlandmarks1; ?>';
			
							
	var input = document.getElementById ("myText05");

            input.placeholder = '<?php echo $pincode1; ?>';
			input.value = '<?php echo $pincode1; ?>';
			
		
}



function myFunction1() {
	 $("#panel100").show();
				 $("#panel101").hide();
	
	 var y = '<?php echo $company1; ?>';
  var y1 = '<?php echo $companyother1; ?>';
	
	if(y=='NULL')
	{
	
		var input = document.getElementById ("myText");
		input.placeholder = '<?php echo $location1; ?>';
		input.value = '<?php echo $location1; ?>';
		
		
		var input = document.getElementById ("myText02");
		input.placeholder = '<?php echo $worklocationstreetname1; ?>';
		input.value = '<?php echo $worklocationstreetname1; ?>';
		
		
		var input = document.getElementById ("myText03");
		input.placeholder = '<?php echo $worklocationlocality1; ?>';
		input.value = '<?php echo $worklocationlocality1; ?>';
		
		
		var input = document.getElementById ("myText04");
		input.placeholder = '<?php echo $worklocationlandmarks1; ?>';
		input.value = '<?php echo $worklocationlandmarks1; ?>';
		
		
		
		
		
		
		
		
		
		
		
		
		
	}
	else{
		
	
var input = document.getElementById ("myText");
	input.placeholder = '<?php echo $company1; ?>';
	
	input.value = '<?php echo $company1; ?>';
		
	}
 
    
}


function myFunction2() {
	
	 $("#panel100").show();
				 $("#panel101").hide();
	
	
   var z = '<?php echo $institution1; ?>';
  var z1 = '<?php echo $institutionother1; ?>';
	
	if(z=='NULL')
	{
		
		var input = document.getElementById ("myText");
		input.placeholder = '<?php echo $institutionother1; ?>';
			input.value = '<?php echo $institutionother1; ?>';
	}
	
	else
	{
		 
		  var input = document.getElementById ("myText");
		  input.placeholder = '<?php echo $institution1; ?>';
		  	input.value = '<?php echo $institution; ?>';
	}
	
	
  
	 
	
	
}

function myFunction3() {
	
	
                $("#panel100").hide();
				 $("#panel101").show();
   var x="";
  
	
		  
	
	
	 var input = document.getElementById ("myText");
		  input.placeholder = '';
  	input.value = '';
	 
	
	
}



function myFunction4() {
  
	
	  $("#panel90").show();
                $("#panel91").hide();
	var x = '<?php echo $homeaddress1; ?>';
	
	

	

 
	
	
	
	var input = document.getElementById ("myText1");

            input.placeholder = '<?php echo $homeaddress1; ?>';
			input.value = '<?php echo $homeaddress1; ?>';
}



function myFunction5() {
	$("#panel90").show();
                $("#panel91").hide();
	
	 var y = '<?php echo $company1; ?>';
  var y1 = '<?php echo $companyother1; ?>';
	
	if(y=='NULL')
	{
	
var input = document.getElementById ("myText1");
		input.placeholder = '<?php echo $location1; ?>';
		input.value = '<?php echo $location1; ?>';
		
		
		var input = document.getElementById ("myText12");
		input.placeholder = '<?php echo $worklocationstreetname1; ?>';
		input.value = '<?php echo $worklocationstreetname1; ?>';
		
		
		var input = document.getElementById ("myText13");
		input.placeholder = '<?php echo $worklocationlocality1; ?>';
		input.value = '<?php echo $worklocationlocality1; ?>';
		
		
		var input = document.getElementById ("myText14");
		input.placeholder = '<?php echo $worklocationlandmarks1; ?>';
		input.value = '<?php echo $worklocationlandmarks1; ?>';
		
		
		
	}
	else{
		
	
var input = document.getElementById ("myText1");
		input.placeholder = '<?php echo $location1; ?>';
		input.value = '<?php echo $location1; ?>';
		
		
		var input = document.getElementById ("myText12");
		input.placeholder = '<?php echo $worklocationstreetname1; ?>';
		input.value = '<?php echo $worklocationstreetname1; ?>';
		
		
		var input = document.getElementById ("myText13");
		input.placeholder = '<?php echo $worklocationlocality1; ?>';
		input.value = '<?php echo $worklocationlocality1; ?>';
		
		
		var input = document.getElementById ("myText14");
		input.placeholder = '<?php echo $worklocationlandmarks1; ?>';
		input.value = '<?php echo $worklocationlandmarks1; ?>';
		
		
		
	}
 
    
}


function myFunction6() {
	
	$("#panel90").hide();
                $("#panel91").show();
	
   var z = '<?php echo $institution1; ?>';
  var z1 = '<?php echo $institutionother1; ?>';
	
	if(z=='NULL')
	{
		
		var input = document.getElementById ("myText15");
		input.placeholder = '<?php echo $institutionother1; ?>';
			input.value = '<?php echo $institutionother1; ?>';
	}
	
	else
	{
		 
		  var input = document.getElementById ("myText15");
		  input.placeholder = '<?php echo $institution1; ?>';
		  	input.value = '<?php echo $institution1; ?>';
	}
	
	
  
	 
	
	
}

function myFunction7() {
	
	$("#panel90").hide();
                $("#panel91").show();
	
   var x="";
  
	
		  
	
	
	 var input = document.getElementById ("myText1");
		  input.placeholder = '';
  	input.value = '';
	 
	
	
}



</script>
<!--showing and hiding panels-->
 <script>
        $(document).ready(function() {
			console.log(document.referrer);
			console.log(window.location.href);
			$(".animated").removeClass("hidden animated");
			 $("#panel105").hide();
            $("#panel100").show();
			 $("#panel101").hide();
			 $("#panel90").show();
			 $("#panel91").hide();
			 
			 
			 		 if("<?php echo $ToWorksrc;?>" == "Home")
				myFunction();
			 
			 
			 
			 
			 if("<?php echo $ToWorkdst;?>" == "Institute")
				myFunction6();
			 
			 
        });
        
    </script>
			
		
		<tr> <td class="td1" colspan="2">
		
		
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
		<!--home address pops up from webpage2.php when clicked home button-->
		<input type="radio" name="ToWorksrc" value="Home"  onchange="myFunction()" class="big" id="anyotheraddress3" <?php echo ($ToWorksrc == 'Home') ?  "checked" : "" ;  ?>>Home</br>


  <div id="panel100" class="panel1 active1">
   
	
	<input type="text" name="startaddress" class="textInput" placeholder="Nearest street intersection/Building number" id="myText" style="width:80%;" value="<?php echo (isset($startaddress)) ? $startaddress: ''?>"  ><br>
	<input type="text" name="startaddress1" class="textInput" placeholder="Major landmark" id="myText02" style="width:80%;" value="<?php echo (isset($startaddress1)) ? $startaddress1: ''?>"  ><br>
	<input type="text" name="startaddress2" class="textInput" placeholder="Street name" id="myText03" style="width:80%;" value="<?php echo (isset($startaddress2)) ? $startaddress2: ''?>"  ><br>
	<input type="text" name="startaddress3" class="textInput" placeholder="Locality/Neighborhood/Area" id="myText04" style="width:80%;" value="<?php echo (isset($startaddress3)) ? $startaddress3: ''?>"  ><br>
	  <div id="panel105" class="panel1 active1">
    <input type="text" name="startaddresspincode" class="textInput" placeholder="Pincode" id="myText05" style="width:80%;" value="<?php echo (isset($startaddresspincode)) ? $startaddresspincode: ''?>"  ><br>
</div>
	
</div>







	<br>
	<br>
			
			<p id="demo"> </p>

			
</td>
					
			
			
			
			
			
			
			
	
			
		</tr>
		
		
		
		
		
		
		
		<tr>
			<td class="td1" colspan="2">2. Please enter the end location for this trip.* 
			
			
			
			
			
			
			
			
			
			
			
			</td>
			
		</tr>
			<tr> <td class="td1" colspan="2">
		
<!--work address or institute address pops up from webpage2.php when clicked work or institute button-->
    <input type="radio" name="ToWorkdst" value="Work"  onchange="myFunction5()" class="big" <?php echo ($ToWorkdst == 'Work') ?  "checked" : "" ;  ?>>Work</br>
	<input type="radio" name="ToWorkdst" value="Institute"  onchange="myFunction6()" class="big" <?php echo ($ToWorkdst == 'Institute') ?  "checked" : "" ;  ?>>Educational institute</br>

	
	<div>
	 <div id="panel90" class="panel1 active1">
	<input type="text" name="destination" class="textInput" placeholder="Nearest street intersection/Building number" id="myText1" style="width:80%;" value="<?php echo (isset($destination)) ? $destination: ''?>"  ><br>
	<input type="text" name="destination1" class="textInput" placeholder="Major landmark" id="myText12" style="width:80%;" value="<?php echo (isset($destination1)) ? $destination1: ''?>"  ><br>
		<input type="text" name="destination2" class="textInput" placeholder="Street name" id="myText13" style="width:80%;" value="<?php echo (isset($destination2)) ? $destination2: ''?>"  ><br>
		<input type="text" name="destination3" class="textInput" placeholder="Locality/Neighborhood/Area" id="myText14" style="width:80%;" value="<?php echo (isset($destination3)) ? $destination3: ''?>"  ><br>
	
	
	</div>

	
	 <div id="panel91" class="panel1 active1">
	<input type="text" name="destination4" class="textInput" placeholder="Institute Name" id="myText15" style="width:80%;" value="<?php echo (isset($destination4)) ? $destination4: ''?>"  ><br>
	
	
	</div>
	
	</div>
	
		<br>
			
			<br>
			
			<p id="demo"> </p>

</td>
					
			
		
			
			
			
			
			
	
			
		</tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--travel time calculation-->
		
<script>
                showTravel = function(){
                    if(($('input[name="endtime"]').val() == '') || ($('input[name="starttime"]').val() == ''))
                        return;
                    startTime = $('input[name="starttime"]').val().split(':');
                    endTime = $('input[name="endtime"]').val().split(':');
                    hours = (parseInt(endTime[0])-parseInt(startTime[0]));
					hoursinminutes = hours * 60;
					minutes = hoursinminutes + (parseInt(endTime[1])-parseInt(startTime[1]));
					hours = Math.floor(minutes/60);
				
					minutes = Math.trunc(minutes%60);
				
				    $('input[name="tthours"]').val(hours);
				    $('input[name="ttminutes"]').val(minutes);
                    $('.displayTime').remove();
                    $('<tr class="displayTime"><td class="td1" colspan="2">Your total travel time is '+hours+' hours and '+minutes+' minutes.</td></tr>').insertAfter($('input[name="endtime"]').parent().parent());
                }
            </script>
		
			<tr> <!-- printing travel time-->
			<td class="td1" colspan="2">
	
			    <input type=hidden name="tthours" value="<?php echo (isset($tthours)) ? $tthours: ''?>" >
		    <input type=hidden name="ttminutes" value="<?php echo (isset($ttminutes)) ? $ttminutes: ''?>">
			    </td>
			    
			    </tr>
		
		<tr>
			<td class="td1" colspan="2">3. Please enter the start time of this trip.*  
			<input type="time" name="starttime" class="textInput" value="<?php echo (isset($starttime)) ? $starttime: ''?>" id="timepicker" onchange="showTravel()"></td>
		</tr>
		
		
	
		
		<tr>
			<td class="td1" colspan="2" >4. Please enter the end time of this trip.*
			<input type="time" name="endtime" class="textInput" value="<?php echo (isset($endtime)) ? $endtime: ''?>" id="timepicker" onchange="showTravel()"></td>
		</tr>

		<tr>  <!--showNext function shows the map panel if choosen yes-->
			<td class="td1" colspan="2">5. Did this trip include an entry into or exit from Electronics City?*  <br>
				
    <input type="radio" id="yesEntry" name="entry" value="yes" onclick="showNext(this)" class="big" <?php echo ($entry== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
    <input type="radio" id="noEntry" name="entry" value="no" onclick="showNext(this)" class="big" <?php echo ($entry== 'no') ?  "checked" : "" ;  ?>>No<br><br>
<!--
	<div class="tab-panels1">
  <ul class="tabs1">
    <li rel="panel33" class="active1">Yes</li>
    <li rel="panel34">No</li>

  </ul>
-->

  <div id="panel33" class="panel1 active1"> 
   <script>
		fillMapField = function(ele){
			$('#txtEndereco').val(ele.value)
			showNext(ele);
		}
   </script>

Please mark your point of entry into Electronics City on the map or choose from the options below.*<br>
			<select id="pointofentry" name="pointofentry" style="width:75%;" onchange='fillMapField(this)'>
					<option value="<?php  	if(empty($pointofentry ))
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($pointofentry)) ? $pointofentry: '';
		
		   }?>"><?php  	if(empty($pointofentry)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($pointofentry)) ? $pointofentry: 'Select';
		   
		   }?></option>
<option value="tollgate electronic city">&nbsp;  Toll Gate<br>
<option value="hp entrance electronic city">&nbsp;  HP Entrance <br>
			<option value="petrol bunk electronic city">&nbsp;  Petrol bunk <br>
		<option value="Konappana agrahara electronic city">&nbsp;  Konappana Agrahara<br>
			<option value="Doddathoguru velankani electronic city">&nbsp;  Doddathoguru/Velankani <br>
	<option value="neeladri shi electronic city">&nbsp;  Neeladri/Shikaripalya <br>
	<option value="any other">&nbsp;  Any other, please enter in the textbox below or use map <br>
			</select><br><br><input type="text" id="mapOther" name="entrymark" class="textInput" style="width:75%;" value="<?php echo (isset($entrymark)) ? $entrymark: ''?>"><br><br><br>

			
			<div id="mapwork">
			
<div class="tab-panels">
  <ul class="tabs">
    <li rel="panel1" class="active">Optional, click here for map. Move location marker to mark the address</li>
   
   
  </ul>

  <div id="panel1" class="panel active">
  
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
        <link href="estilo.css" type="text/css" rel="stylesheet" />

        
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Zczfd7TqDheFotCy2AUS10K2Q5dNV2Q&libraries=places"></script>
     
        <script type="text/javascript" src="mapa.js"></script>
        <script type="text/javascript" src="jquery-ui.custom.min.js"></script>
    
                <fieldset>

   
            
                    <div class="campos">
                        <label for="txtEndereco">Address: </label>
                        <input type="text" id="txtEndereco" name="address" placeholder="Enter address and submit!" value="<?php echo (isset($address)) ? $address: ''?>" />
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Submit" />
                    </div>

                    <div id="mapa"></div>
                    
    
                    
                    <input type="hidden" id="txtLatitude" name="latitude" value="<?php echo (isset($latitude)) ? $latitude: ''?>"  />
                    <input type="hidden" id="txtLongitude" name="longitude" value="<?php echo (isset($longitude)) ? $longitude: ''?>"  />

                </fieldset>
       
  
	
 
   
       
		<br><br>
		
		
		

  
  
  
  
  </div>
  
  </div>
  	

  

  
  
 Please enter your approximate time of entry into or exit from Electronic City.* 
			<input type="time" name="timeentry" class="textInput" value="<?php echo (isset($timeentry)) ? $timeentry: ''?>" id="timepicker" >
  
  
  
  
 
  
  
  
  	  
  </div>
  

  
  
  
  <div id="panel34" class="panel1">
    


<b> Please Proceed!! </b>

 </div>
 
	
	
	
	
	
	
	
	
	
	
	
	
<!--	</div>-->
 </td>	
		</tr>
  
  
  
  


		
		
		
		<tr>
			<td class="td1" colspan="2">6 a.	Please enter the primary mode of travel for this trip.  The primary transport mode is that with which you travelled the longest distance. Please see figure below for two examples of primary mode.* <br><br>
			
			
		<select id="modeClick" onchange="showNext(this)" name="mode"  style="width:80%;">	

		
				<option value="<?php  	if(empty($mode)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($mode)) ? $mode: '';
		
		   }?>"><?php  	if(empty($mode)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($mode)) ? $mode: 'Select';
		   
		   }?></option>
		
		

		
		
			 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>
	         <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car as passenger</label> <br></option>
		   <option value="Office car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office car</label> <br></option>
		     <option value="Office cab service"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br></option>
		 		 <option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
	     <option value="Own two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler</label> <br></option>
         <option value="Own two-wheeler with family members, colleagues, or friends"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler with family members, colleagues, or friends</label> <br></option>
         <option value="Ride in friend or colleague’s two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler</label> <br></option>
	     <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
         <option value="Bike-taxi such as Rapido"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido</label><br></option>
         <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	     <option value="Personal Bicycle"><label> &nbsp;&nbsp;&nbsp;&nbsp;Personal Bicycle</label> <br></option>
         <option value="Bikeshare, Yulu or Pedl"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl</label> <br></option>
         <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	     <option value="other"> <label>Any other</label> <br></option>
	 </select>





			<input id="modeNext" placeholder="Enter Your Mode Here" type="text" name="modefor" class="textInput" value="<?php echo (isset($modefor)) ? $modefor: ''?>" ></td>
		</tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<tr>
			<td class="td1" colspan="2">
			
			
			<b>Existing Travel Characteristics</b><br>
<b><u>Example 1</b></u><br>
<img src="assets/images/exampletrip11.png"   id="image1" width="80%"><br>
<b><u>Example 2</b></u><br>
<img src="assets/images/exampletrip12.png"   id="image2" width="80%"><br><br><br>
			
			6 b. If you used multiple modes for <b>this trip</b>, please enter the modes in the order of sequence you used them, including the primary mode. In the first example of the figure above, the sequence of modes are (1) Ola, (2) Metro, and (3) Shuttle. If you used a single mode, you may skip this question.

<bR>

  
 1.<select id="modeClick" onchange="showNext(this)" name="workmm1"  style="width:80%;">	

		
				<option value="<?php  	if(empty($workmm1)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($workmm1)) ? $workmm1: '';
		
		   }?>"> &nbsp; <?php  	if(empty($workmm1)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($workmm1)) ? $workmm1: 'Select';
		   
		   }?></option>
		
		

		
		
		 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>	
	 <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car as passenger</label> <br></option>
		   <option value="Office car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office car</label> <br></option>
		     <option value="Office cab service"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br></option>
		 	<option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
			  <option value="Own two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler</label> <br></option>
 <option value="Own two-wheeler with family members, colleagues, or friends"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler with family members, colleagues, or friends</label> <br></option>
  <option value="Ride in friend or colleague’s two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler</label> <br></option>
	 <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
 <option value="Bike-taxi such as Rapido"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido</label><br></option>
 
 	 <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	 
	 
	 
	 			  <option value="Personal Bicycle"><label> &nbsp;&nbsp;&nbsp;&nbsp;Personal Bicycle</label> <br></option>
 <option value="Bikeshare, Yulu or Pedl"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl</label> <br></option>

	 
	 

	 
	 
	  	 <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	 
	 
	 
	 </select>
  <br>
  
  2.<select id="modeClick" onchange="showNext(this)" name="workmm2"  style="width:80%;">	

		
				<option value="<?php  	if(empty($workmm2)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($workmm2)) ? $workmm2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($workmm2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($workmm2)) ? $workmm2: 'Select';
		   
		   }?></option>
		
		

		
		
			 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>
	 <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car as passenger</label> <br></option>
		   <option value="Office car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office car</label> <br></option>
		     <option value="Office cab service"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br>
		 <option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
			  <option value="Own two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler</label> <br></option>
 <option value="Own two-wheeler with family members, colleagues, or friends"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler with family members, colleagues, or friends</label> <br></option>
  <option value="Ride in friend or colleague’s two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler</label> <br></option>
	 <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
 <option value="Bike-taxi such as Rapido"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido</label><br></option>
 
 	 <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	 
	 
	 
	 			  <option value="Personal Bicycle"><label> &nbsp;&nbsp;&nbsp;&nbsp;Personal Bicycle</label> <br></option>
 <option value="Bikeshare, Yulu or Pedl"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl</label> <br></option>

	 
	 

	 
	 
	  	 <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	 
	 
	 
	 </select>
	 <br>
	 3.<select id="modeClick" onchange="showNext(this)" name="workmm3"  style="width:80%;">	

		
				<option value="<?php  	if(empty($workmm3)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($workmm3)) ? $workmm3: '';
		
		   }?>"> &nbsp; <?php  	if(empty($workmm3)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($workmm3)) ? $workmm3: 'Select';
		   
		   }?></option>
		
		

		
		
			 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>
	 <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car as passenger</label> <br></option>
		   <option value="Office car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office car</label> <br></option>
		     <option value="Office cab service"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br></option>
		 <option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
			  <option value="Own two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler</label> <br></option>
 <option value="Own two-wheeler with family members, colleagues, or friends"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler with family members, colleagues, or friends</label> <br></option>
  <option value="Ride in friend or colleague’s two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler</label> <br></option>
	 <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
 <option value="Bike-taxi such as Rapido"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido</label><br></option>
 
 	 <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	 
	 
	 
	 			  <option value="Personal Bicycle"><label> &nbsp;&nbsp;&nbsp;&nbsp;Personal Bicycle</label> <br></option>
 <option value="Bikeshare, Yulu or Pedl"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl</label> <br></option>

	 
	 

	 
	 
	  	 <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	 
	 </select>
	 
	 <br>
	 4.<select id="modeClick" onchange="showNext(this)" name="workmm4"  style="width:80%;">	

		
				<option value="<?php  	if(empty($workmm4)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($workmm4)) ? $workmm4: '';
		
		   }?>"> &nbsp; <?php  	if(empty($workmm4)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($workmm4)) ? $workmm4: 'Select';
		   
		   }?></option>
		
		

		
		
			 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>
	 <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car as passenger</label> <br></option>
		   <option value="Office car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office car</label> <br></option>
		     <option value="Office cab service"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br></option>
		 <option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
			  <option value="Own two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler</label> <br></option>
 <option value="Own two-wheeler with family members, colleagues, or friends"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler with family members, colleagues, or friends</label> <br></option>
  <option value="Ride in friend or colleague’s two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler</label> <br></option>
	 <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
 <option value="Bike-taxi such as Rapido"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido</label><br></option>
 
 	 <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	 
	 
	 
	 			  <option value="Personal Bicycle"><label> &nbsp;&nbsp;&nbsp;&nbsp;Personal Bicycle</label> <br></option>
 <option value="Bikeshare, Yulu or Pedl"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl</label> <br></option>

	 
	 

	 
	 
	  	 <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	 
	 
	 </select>
	 <br>
	 5.<select id="modeClick" onchange="showNext(this)" name="workmm5"  style="width:80%;">	

		
				<option value="<?php  	if(empty($workmm5)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($workmm5)) ? $workmm5: '';
		
		   }?>"> &nbsp; <?php  	if(empty($workmm5)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($workmm5)) ? $workmm5: 'Select';
		   
		   }?></option>
		
		

		
		
			 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>
	 <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own car as passenger</label> <br></option>
		   <option value="Office car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office car</label> <br></option>
		     <option value="Office cab service"><label> &nbsp;&nbsp;&nbsp;&nbsp;Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br></option>
		 <option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
			  <option value="Own two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler</label> <br></option>
 <option value="Own two-wheeler with family members, colleagues, or friends"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Own two-wheeler with family members, colleagues, or friends</label> <br></option>
  <option value="Ride in friend or colleague’s two-wheeler"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler</label> <br></option>
	 <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
 <option value="Bike-taxi such as Rapido"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido</label><br></option>
 
 	 <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	 
	 
	 
	 			  <option value="Personal Bicycle"><label> &nbsp;&nbsp;&nbsp;&nbsp;Personal Bicycle</label> <br></option>
 <option value="Bikeshare, Yulu or Pedl"> <label> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl</label> <br></option>

	 
	 

	 
	 
	  	 <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	 
	 
	 
	 </select>
	 <br>
	 
  
  
  
 





















			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
			
			
			
			
			
			
			
			
			
			</td>
			
			
			
			
			
			
			
			
			
			
			
		</tr>
		
		

		
		
		
		
		
				
		
		
		
		
		
		<tr>
            <td class="td1" colspan="2">
                7. Did this trip include an intermediate stop for example for dropping off or for picking up children,buying supplies, petrol pump, religious or any other reason?*<br>
                <input type="radio" id="yesInter" name="interStop" value="yes" onclick="showNext(this)" class="big" <?php echo ($interStop== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
                <input type="radio" id="noInter" name="interStop" value="no" onclick="showNext(this)" class="big" <?php echo ($interStop== 'no') ?  "checked" : "" ;  ?>>No<br><br>
        
        <div id="interPanel">
                Please mention where you stopped.<br>
                <input type="text" name="Tointermediate1" class="textInput" placeholder="Nearest street intersection/Building number" style="width:80%;" value="<?php echo (isset($Tointermediate1)) ? $Tointermediate1: ''?>"><br>
	            <input type="text" name="Tointermediate2" class="textInput" placeholder="Major landmark" style="width:80%;" value="<?php echo (isset($Tointermediate2)) ? $Tointermediate2: ''?>"><br>
		        <input type="text" name="Tointermediate3" class="textInput" placeholder="Street name" style="width:80%;" value="<?php echo (isset($Tointermediate3)) ? $Tointermediate3: ''?>"><br>
		        <input type="text" name="Tointermediate4" class="textInput" placeholder="Locality/Neighborhood/Area" style="width:80%;" value="<?php echo (isset($Tointermediate4)) ? $Tointermediate4: ''?>"><br>
		        <input type="text" name="Tointermediate5" class="textInput" placeholder="Pincode" style="width:80%;" value="<?php echo (isset($Tointermediate5)) ? $Tointermediate5: ''?>"><br>
        
        <script>
                showStopTime = function(){
                    if(($('input[name="ToInterTime1"]').val() == '') || ($('input[name="ToInterTime2"]').val() == '') || ($('input[name="starttime"]').val() == '') || ($('input[name="endtime"]').val() == ''))
                        return;
                    startTime = $('input[name="starttime"]').val().split(':');
                    endTime = $('input[name="ToInterTime1"]').val().split(':');
                    hours = (parseInt(endTime[0])-parseInt(startTime[0]));
					hoursinminutes = hours * 60;
					minutes = hoursinminutes + (parseInt(endTime[1])-parseInt(startTime[1]));
					hours = Math.floor(minutes/60);
				
					minutes = Math.trunc(minutes%60);
					
					startTime1 = $('input[name="ToInterTime2"]').val().split(':');
                    endTime1 = $('input[name="endtime"]').val().split(':');
                    hours1 = (parseInt(endTime1[0])-parseInt(startTime1[0]));
					hoursinminutes1 = hours1 * 60;
					minutes1 = hoursinminutes1 + (parseInt(endTime1[1])-parseInt(startTime1[1]));
					hours1 = Math.floor(minutes1/60);
				
					minutes1 = Math.trunc(minutes1%60);

				    $('input[name="ToTotalTravel1"]').val(hours+' hr ' + minutes + ' min');
				    $('input[name="ToTotalTravel2"]').val(hours1+' hr ' + minutes1 + ' min');
                    $('.stopTime').remove();
                    $('<span class="stopTime"><br>Your trip from your origin to your intermediate stop took '+hours+' hours and '+minutes+' minutes, and your trip from your intermediate stop to your final destination took '+hours1+' hours and '+minutes1+' minutes.</span>').insertAfter($('input[name="ToInterTime2"]'));
                }
        </script>
        
			    <input type=hidden name="ToTotalTravel1" value="<?php echo (isset($ToTotalTravel1)) ? $ToTotalTravel1: ''?>" >
		    <input type=hidden name="ToTotalTravel2" value="<?php echo (isset($ToTotalTravel2)) ? $ToTotalTravel2: ''?>">
		
		    Please mention the time when you stopped.  
			<input type="time" name="ToInterTime1" class="textInput" value="<?php echo (isset($ToInterTime1)) ? $ToInterTime1: ''?>" onchange="showStopTime()"><br><br>
		
		    Please mention the time when you resumed this trip.  
			<input type="time" name="ToInterTime2" class="textInput" value="<?php echo (isset($ToInterTime2)) ? $ToInterTime2: ''?>" onchange="showStopTime()"><br><br>
		
		    Please mention the purpose of the stop.<br>
			
			
		<select id="StopPurpose" onchange="showNext(this)" name="InterStopPurpose" style="width:80%;">
		    <option value="<?php  	if(empty($InterStopPurpose))
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($InterStopPurpose)) ? $InterStopPurpose: '';
		   }?>"><?php  	if(empty($InterStopPurpose))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($InterStopPurpose)) ? $InterStopPurpose: 'Select';
		   }?></option>	
            <option value="Education">Education</option>
            <option value="Food">Food</option>
            <option value="Medical">Medical</option>
            <option value="Social">Social</option>
            <option value="Dropping off or picking up children">Dropping off or picking up children</option>
            <option value="Buying something">Buying something</option>
            <option value="Other household work">Other household work</option>
            <option value="Petrol pump">Petrol pump</option>
            <option value="Religious">Religious</option>
            <option value="Any other">Any other</option>
	 </select><br>
			<input style="width:80%" id="StopOther" placeholder="Enter Your Purpose Here" type="text" name="PurposeOther" class="textInput" value="<?php echo (isset($PurposeOther)) ? $PurposeOther: ''?>" >
        </div>
        </td></tr>
		
		
		
		
		
		
		
		
		
		
	
		
	
			
	
				
				<tr>
			<td class="td1" colspan="2">8. Please enter the approximate cost of this trip, including tolls & fuel cost or fare.*<br>
		&nbsp;Rs.<input type="number" name="tripcost" class="textInput" value="<?php echo (isset($tripcost)) ? $tripcost: ''?>" ></td>
		</tr>
				
			
		
		<tr>
			<td class="td1" colspan="2">9. If applicable, for personal vehicle users, please mention<br><br> Parking cost:  <br>
			
	
	 
	 
	 <style>
		@media only screen and (max-width: 480px){
			.moneyBox{
				width:75%;
			}
		}
		@media only screen and (min-width: 480px){
			.moneyBox{
				width:50%;
			}
		}
	 </style>
	 
	 
	 

	  
	 	<select class="moneyBox" name="parkingcost">	

		
				<option value="<?php  	if(empty($parkingcost)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($parkingcost)) ? $parkingcost: '';
		
		   }?>"><?php  	if(empty($parkingcost)) 
		   {
			   echo 'Select Amount';
		   }
		   else
		   {
		   echo (isset($parkingcost)) ? $parkingcost: 'Select Amount';
		   
		   }?></option>
	









		
	 
	   <option value="40"> <label>	 Less than Rs. 40</label> <br></option>

	   <option value="80"><label>Rs. 40 - Rs. 80 </label> <br></option>
	  <option value="160"><label>Rs. 120 - Rs. 160</label><br></option>
 <option value="200"> <label>Rs. 160 - Rs. 200</label><br></option>
 
   <option value="300"> <label>Rs. 200 - Rs. 300</label> <br></option>
 <option value="400"> <label>Rs. 300 or more</label><br></option>

	

<br></option>
	 </select>for <input class="moneyBox" type="number" name="parkingtime" value="<?php echo (!empty($parkingtime)) ? $parkingtime: ''?>"> hours
	 





<br><span style="text-align:center;margin-left:45%">OR</span><br>
Parking cost:





	 
	 
	
	 
	 
	 	<select class="moneyBox" name="parkingcost1">	

		
				<option value="<?php  	if(empty($parkingcost1)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($parkingcost1)) ? $parkingcost1: '';
		
		   }?>"><?php  	if(empty($parkingcost1)) 
		   {
			   echo 'Select Amount';
		   }
		   else
		   {
		   echo (isset($parkingcost1)) ? $parkingcost1: 'Select Amount';
		   
		   }?></option>
	







		
	 
	  <option value="600"> <label>	 Less than Rs.600</label> <br></option>

	   <option value="1000"><label>Rs.600 - Rs.1000 </label> <br></option>
	  <option value="1500"><label>Rs.1000 - Rs.1500</label><br></option>
 <option value="2000"> <label>Rs.1500 - Rs.2000</label><br></option>
 
   <option value="2500"> <label>Rs.2000 - Rs.2500</label> <br></option>
 <option value="3000"> <label>Rs.2500 - Rs.3000</label><br></option>
 <option value="3500"> <label>Rs.3000 - Rs.3500</label><br></option>
 <option value="4000"> <label>Rs.3500 - Rs.4000</label><br></option>
  <option value="5000"> <label>Rs.4000 and above</label><br></option>
	 </select>monthly
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
</td>
		</tr>
		
				
	
		<input type = "hidden" name = "trackingToken" id = "trackingToken" value = "0">	
						
		<tr><td colspan="2"><div class="Register Back" onclick="go_back()" align="left">Previous Page</div><input type="submit" name="Submit" value="NEXT" id="register_btn3" class="Register" align="right" onclick="return OnButton1();"/></td></tr>
			
				
						
		
		
		
	
		
		
		
		
		
		
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

 <?php
$db=mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
	


			
		
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$farr=$_SESSION["far"];

			?>				
		
			
<script>
	
function OnButton1()
{
    document.form.action = "trip2.php"
	document.getElementById("trackingToken").value = "1";
    
    document.form.submit();             // Submit the page
    return true;
}

	function OnButton2()
{
    	var a = '<?php echo $farr; ?>';
	if(a>2)
	{
		document.getElementById("trackingToken").value = "2";
		document.form.action = "trip2.php"
		
	}
	else{
		
				document.form.action = "trip2.php"
	}
	
	
	
    document.form.submit();             // Submit the page
    return true;
}		
			
			
			</script>	
	<script>
        $(document).ready(function() {
			$(".hidden.animated").removeClass("hidden animated")
            $("#panel33").hide();
            $("#panel34").hide();
            $("#specifySource").hide();
            $("#specifyDest").hide();
            $("#modeNext").hide();
            $("#purposeNext").hide();
            if("<?php echo $interStop;?>" != 'yes')
                $("#interPanel").hide();
            if("<?php echo $InterStopPurpose;?>" != "Any other")
			    $("#StopOther").hide();
			if("<?php echo $pointofentry?>" != "any other")
				$("#mapOther").hide();
        });
        var showNext = function(ele) {//shows the map tab panels
            if(ele.id == "yesEntry") {
                $("#panel33").show();
                $("#panel34").hide();
            } else if(ele.id == "noEntry") {
                $("#panel33").hide();
                $("#panel34").show();
            } else if(ele.id == "otherSource") {
                $("#specifySource").show();
            }else if(ele.id == "otherDest") {
                $("#specifyDest").show();
            }else if(ele.id == "modeClick") {
                if(ele.value == "other"){
                    $("#modeNext").show();
                    $("#modeNext").removeClass("hidden animated");
                }else{
                    $("#modeNext").hide();
                }
            }else if(ele.id == "purposeClick") {
                if(ele.value == "any other purpose"){
                    $("#purposeNext").show();
                    $("#purposeNext").removeClass("hidden animated");
                }else{
                    $("#purposeNext").hide();
                }
            }else if(ele.id == "pointofentry"){
				if(ele.value == "any other"){
					$("#mapOther").show();
				}else{
					$("#mapOther").hide();
				}
			}else if(ele.id == "StopPurpose"){
                if(ele.value == "Any other")
                    $("#StopOther").show();
                else
                    $("#StopOther").hide();
            }else if(ele.id == "yesInter"){
                    $("#interPanel").show();
            }else if(ele.id == "noInter"){
                    $("#interPanel").hide();
            }
			$(".hidden.animated").removeClass("hidden animated")
        } 
        
    </script>	
			



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

