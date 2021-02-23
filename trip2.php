<?php 
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_limiter("private_no_expire");
session_start();
include 'header.php';
error_reporting(0);



// $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//  if (isset($_POST['Submit']) && $_POST["trackingToken"]=="1") 
//  { 

// 	$totalMan = 0;
// 	$filledMan = 0;
// 	$totalOp = 0;
// 	$filledOp = 0;
	
// 	$totalman += 1;
// 	if(isset($_POST['ToWorksrc'])||(($_POST['startaddress'] != '')&&($_POST['startaddress1'] != '')&&($_POST['startaddress2'] != '')&&($_POST['startaddress3'] != '')&&($_POST['startaddresspincode'] != ''))){
// 		$filledman += 1;
// 	}
	
// 	$totalMan += 1;
// 	if(isset($_POST['ToWorkdst'])||(($_POST['destination'] != '')&&($_POST['destination1'] != '')&&($_POST['destination2'] != '')&&($_POST['destination3'] != ''))||($_POST['destination4'] != '')){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['starttime']){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['endtime']){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['interStop']){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if(isset($_POST['entry'])){
// 		$filledMan += 1;
// 		if($_POST['entry'] == 'yes'){
// 			$totalMan += 1;
// 			if($_POST['pointofentry'] != ''){
// 				$filledMan += 1;
// 			}
	
// 			$totalMan += 1;
// 			if($_POST['timeentry'] != ''){
// 				$filledMan += 1;
// 			}
// 		}
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['mode'] != ''){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['tripcost'] != ''){
// 		$filledMan += 1;
// 	}
 
// 	$_SESSION['ToWorksrc'] = $_POST['ToWorksrc'];
// 	$_SESSION['ToWorkdst'] = $_POST['ToWorkdst'];
//   $_SESSION['starttime'] = $_POST['starttime'];
//     $_SESSION['entry'] = $_POST['entry'];
//    $_SESSION['pointofentry'] = $_POST['pointofentry'];
//    $_SESSION['entrymark'] = $_POST['entrymark'];
//    	   $_SESSION['address'] = $_POST['address'];
// 	   	  $_SESSION['latitude'] = $_POST['latitude'];
// 	  $_SESSION['longitude'] = $_POST['longitude'];
//     $_SESSION['timeentry'] = $_POST['timeentry'];
// 	$_SESSION['parkingtime'] = $_POST['parkingtime'];
// 	$_SESSION['parkingcost'] = $_POST['parkingcost'];
// 	$_SESSION['parkingcost1'] = $_POST['parkingcost1'];
	
		
		
		
// 		 $_SESSION['workmm1'] = $_POST['workmm1'];
// 		  $_SESSION['workmm2'] = $_POST['workmm2'];
// 		   $_SESSION['workmm3'] = $_POST['workmm3'];
// 		    $_SESSION['workmm4'] = $_POST['workmm4'];
// 			 $_SESSION['workmm5'] = $_POST['workmm5'];
		
		
		
		
		
		
		
		
		
		
		
		
	 
	 








// 	 $_SESSION['endtime'] = $_POST['endtime'];

	 
	   
// 	  $_SESSION['mode'] = $_POST['mode'];
     
     
// 			 $_SESSION['tthours'] = $_POST['tthours'] ;
// 			 $_SESSION['ttminutes'] = $_POST['ttminutes'];
		
     
//      $modes = array('mode','workmm1','workmm2','workmm3','workmm4','workmm5');
//      $sliderChoice = array();
     
//      $cars = array('Car/Cab/Carpool','Own car drive self','Own car as passenger','Office car','Office cab service','Ride in friend or colleague’s car','QuickRide or similar app-based carpool','Ola/Uber or similar');
//      $bikes = array('Two-wheeler owned, shared, taxi','Own two-wheeler','Own two-wheeler with family members, colleagues, or friends','Ride in friend or colleague’s two-wheeler','App-based two-wheeler rental like Bounce, Vogo etc','Bike-taxi such as Rapido','Bicycle, personal or bikeshare');
//      $cycles = array('Personal Bicycle','Bikeshare, Yulu or Pedl');
//      $auto = array('Auto-Rickshaw','Regular auto-rickshaw','Ola/Uber auto-rickshaw');
    
//      foreach($modes as $x){
//         if(in_array($_SESSION[$x],$cars))
//             array_push($sliderChoice,1);
     
//         if($_SESSION[$x] == 'Olashare/Uberpool or similar')
//             array_push($sliderChoice,2);
     
//         if(in_array($_SESSION[$x],$auto))
//             array_push($sliderChoice,3);
     
//         if(in_array($_SESSION[$x],$bikes))
//             array_push($sliderChoice,4);
     
//         if(in_array($_SESSION[$x],$cycles))
//             array_push($sliderChoice,5);
     
//         if($_SESSION[$x] == 'BMTC Bus')
//             array_push($sliderChoice,6);
         
//         if($_SESSION[$x] == 'Namma Metro')
//             array_push($sliderChoice,7);
//      }
     
//      $_SESSION['sliderChoice1'] = $sliderChoice;
     
     
// 	   	  $_SESSION['modefor'] = $_POST['modefor'];

	

	 

	
	
	  	  

	  
//   $_SESSION['tripcost'] = $_POST['tripcost'];

//    $_SESSION['startaddress'] = $_POST['startaddress'];
//     $_SESSION['startaddress1'] = $_POST['startaddress1'];
// 	 $_SESSION['startaddress2'] = $_POST['startaddress2'];
// 	  $_SESSION['startaddress3'] = $_POST['startaddress3'];
// 	   $_SESSION['startaddresspincode'] = $_POST['startaddresspincode'];
	  
	  
	  
// 	   $_SESSION['destination'] = $_POST['destination'];
// 	    $_SESSION['destination1'] = $_POST['destination1'];
// 		 $_SESSION['destination2'] = $_POST['destination2'];
// 		  $_SESSION['destination3'] = $_POST['destination3'];
// 		   $_SESSION['destination4'] = $_POST['destination4'];
		   
// 		   $_SESSION['Tointermediate1'] = $_POST['Tointermediate1'];
// 		   $_SESSION['Tointermediate2'] = $_POST['Tointermediate2'];
// 		   $_SESSION['Tointermediate3'] = $_POST['Tointermediate3'];
// 		   $_SESSION['Tointermediate4'] = $_POST['Tointermediate4'];
// 		   $_SESSION['Tointermediate5'] = $_POST['Tointermediate5'];
// 		   $_SESSION['ToInterTime1'] = $_POST['ToInterTime1'];
// 		   $_SESSION['ToInterTime2'] = $_POST['ToInterTime2'];
// 		   $_SESSION['InterStopPurpose'] = $_POST['InterStopPurpose'];
// 		   $_SESSION['PurposeOther'] = $_POST['PurposeOther'];
// 		   $_SESSION['interStop'] = $_POST['interStop'];
// 		   $_SESSION['ToTotalTravel1'] = $_POST['ToTotalTravel1'];
// 		   $_SESSION['ToTotalTravel2'] = $_POST['ToTotalTravel2'];
  
  
//    $stmt = $conn->prepare("UPDATE users3 SET 
   
   
   
//    startaddress = :startaddress, startaddress1 = :startaddress1, startaddress2 = :startaddress2, startaddress3 = :startaddress3,startaddresspincode =:startaddresspincode,
   
   
   
//    starttime = :starttime,
   
   
   
//    entry = :entry,timeentry = :timeentry,
   
   
//    destination = :destination,destination1 = :destination1,destination2 = :destination2,destination3 = :destination3,destination4 = :destination4,
   
   
   
//    pointofentry = :pointofentry,entrymark = :entrymark,address = :address,endtime = :endtime,
//    mode = :mode,tripcost = :tripcost,latitude = :latitude,longitude = :longitude,
//    modefor = :modefor,parkingcost= :parkingcost,parkingcost1= :parkingcost1,parkingtime= :parkingtime,
 
 
 
 
 
//  workmm1= :workmm1,workmm2= :workmm2,workmm3= :workmm3,workmm4= :workmm4,workmm5= :workmm5,ToWorksrc =:ToWorksrc,ToWorkdst =:ToWorkdst,
 
//  tthours =:tthours,ttminutes =:ttminutes,Tointermediate1=:Tointermediate1,Tointermediate2=:Tointermediate2,Tointermediate3=:Tointermediate3,Tointermediate4=:Tointermediate4,Tointermediate5=:Tointermediate5,
//  ToInterTime1=:ToInterTime1,ToInterTime2=:ToInterTime2,InterStopPurpose=:InterStopPurpose,PurposeOther=:PurposeOther,interStop=:interStop,ToTotalTravel1=:ToTotalTravel1,ToTotalTravel2=:ToTotalTravel2
 
 
 
 
//  WHERE id = :id");
 
 
// 	$stmt->bindParam(':id', $id);
	
	
	
// 	$stmt->bindParam(':startaddress', $startaddress);
// 	$stmt->bindParam(':startaddress1', $startaddress1);
// 	$stmt->bindParam(':startaddress2', $startaddress2);
// 	$stmt->bindParam(':startaddress3', $startaddress3);
// 		$stmt->bindParam(':startaddresspincode', $startaddresspincode);
	
// 		$stmt->bindParam(':destination', $destination);
// 	$stmt->bindParam(':destination1', $destination1);
// 	$stmt->bindParam(':destination2', $destination2);
// 	$stmt->bindParam(':destination3', $destination3);
// 	$stmt->bindParam(':destination4', $destination4);
	
	
// 	$stmt->bindParam(':pointofentry', $pointofentry);
// 	$stmt->bindParam(':starttime', $starttime);
// 	$stmt->bindParam(':entry', $entry);
// 	$stmt->bindParam(':entrymark', $entrymark);

	
// 	$stmt->bindParam(':timeentry', $timeentry);

	
	
// 	$stmt->bindParam(':endtime', $endtime);
// 	$stmt->bindParam(':address', $address);
	
	
	
// 	$stmt->bindParam(':mode', $mode);
// 	$stmt->bindParam(':tripcost', $tripcost);

// 	$stmt->bindParam(':longitude', $longitude);
// 	$stmt->bindParam(':latitude', $latitude);
	

//     $stmt->bindParam(':modefor', $modefor);
// 	  $stmt->bindParam(':parkingcost', $parkingcost);
// 	  $stmt->bindParam(':parkingcost1', $parkingcost1);
// 	    $stmt->bindParam(':parkingtime', $parkingtime);
		
		
		
		
// 		 $stmt->bindParam(':workmm1', $workmm1);
// 		  $stmt->bindParam(':workmm2', $workmm2);
// 		   $stmt->bindParam(':workmm3', $workmm3);
// 		    $stmt->bindParam(':workmm4', $workmm4);
// 			 $stmt->bindParam(':workmm5', $workmm5);
// 			 $stmt->bindParam(':ToWorksrc',$ToWorksrc);
// 			 $stmt->bindParam(':ToWorkdst',$ToWorkdst);
		
		
		
		
// 		$stmt->bindParam(':tthours',$tthours);
// 		$stmt->bindParam(':ttminutes',$ttminutes);
		
// 		$stmt->bindParam(':Tointermediate1',$Tointermediate1);
// 		$stmt->bindParam(':Tointermediate2',$Tointermediate2);
// 		$stmt->bindParam(':Tointermediate3',$Tointermediate3);
// 		$stmt->bindParam(':Tointermediate4',$Tointermediate4);
// 		$stmt->bindParam(':Tointermediate5',$Tointermediate5);
// 		$stmt->bindParam(':ToInterTime1',$ToInterTime1);
// 		$stmt->bindParam(':ToInterTime2',$ToInterTime2);
// 		$stmt->bindParam(':InterStopPurpose',$InterStopPurpose);
// 		$stmt->bindParam(':PurposeOther',$PurposeOther);
// 		$stmt->bindParam(':interStop',$interStop);
// 		$stmt->bindParam(':ToTotalTravel1',$ToTotalTravel1);
// 		$stmt->bindParam(':ToTotalTravel2',$ToTotalTravel2);
		
		

	
// 	$id = $_SESSION['id'];
	
	

	
// 	$ToWorksrc = $_SESSION['ToWorksrc'];
// 	$ToWorkdst = $_SESSION['ToWorkdst'];
// 	$startaddress = $_SESSION['startaddress'];
// 	$startaddress1 = $_SESSION['startaddress1'];
// 	$startaddress2 = $_SESSION['startaddress2'];
// 	$startaddress3 = $_SESSION['startaddress3'];
// 	$startaddresspincode = $_SESSION['startaddresspincode'];
	
	
	
// 	$destination = $_SESSION['destination'];
// 	$destination1 = $_SESSION['destination1'];
// 	$destination2 = $_SESSION['destination2'];
// 	$destination3 = $_SESSION['destination3'];
// 	$destination4 = $_SESSION['destination4'];
	
	
	
	
	
	
	
// 	$workmm1 = $_SESSION['workmm1'];
// 	$workmm2 = $_SESSION['workmm2'];
// 	$workmm3 = $_SESSION['workmm3'];
// 	$workmm4 = $_SESSION['workmm4'];
// 	$workmm5 = $_SESSION['workmm5'];
	
// 	$starttime = $_SESSION['starttime'];
	
// 	$pointofentry = $_SESSION['pointofentry'];
// 	$entry = $_SESSION['entry'];
// 	$entrymark = $_SESSION['entrymark'];
	
// 	$timeentry = $_SESSION['timeentry'];

// 	$endtime = $_SESSION['endtime'];
// 	$address = $_SESSION['address'];
// 	$tripcost = $_SESSION['tripcost'];
	

// 	$mode = $_SESSION['mode'];

// 	$latitude = $_SESSION['latitude'];
// 	$longitude = $_SESSION['longitude'];
	
// 	$modefor = $_SESSION['modefor'];

	
// 	$parkingcost = $_SESSION['parkingcost'];
// 	$parkingcost1 = $_SESSION['parkingcost1'];
	
// 	$parkingtime = $_SESSION['parkingtime'];
	
	
// 		$tthours = $_SESSION['tthours'];
// 			$ttminutes = $_SESSION['ttminutes'];
			
// 	$Tointermediate1 = $_SESSION['Tointermediate1'];
// 		$Tointermediate2 = $_SESSION['Tointermediate2'];
// 		$Tointermediate3 = $_SESSION['Tointermediate3'];
// 		$Tointermediate4 = $_SESSION['Tointermediate4'];
// 		$Tointermediate5 = $_SESSION['Tointermediate5'];
// 		$ToInterTime1 = $_SESSION['ToInterTime1'];
// 		$ToInterTime2 = $_SESSION['ToInterTime2'];
// 		$InterStopPurpose = $_SESSION['InterStopPurpose'];
// 		$PurposeOther = $_SESSION['PurposeOther'];
// 		$interStop = $_SESSION['interStop'];
// 		$ToTotalTravel1 = $_SESSION['ToTotalTravel1'];
// 		$ToTotalTravel2 = $_SESSION['ToTotalTravel2'];

	
	
// 	$stmt->execute();
  
  
  
  
  
  
  
  
  
  
  
//  }
 
 
 
//  // else {
	
	
	
	
	
	
	
	
	
// 	   // $_SESSION['startaddress'] = $_POST['startaddress'];
//     // $_SESSION['startaddress1'] = $_POST['startaddress1'];
// 	 // $_SESSION['startaddress2'] = $_POST['startaddress2'];
// 	  // $_SESSION['startaddress3'] = $_POST['startaddress3'];
	  
	  
	  
// 	   // $_SESSION['destination'] = $_POST['destination'];
// 	    // $_SESSION['destination1'] = $_POST['destination1'];
// 		 // $_SESSION['destination2'] = $_POST['destination2'];
// 		  // $_SESSION['destination3'] = $_POST['destination3'];
// 		   // $_SESSION['destination4'] = $_POST['destination4'];
	
//   // $_SESSION['starttime'] = $_POST['starttime'];
//     // $_SESSION['entry'] = $_POST['entry'];
//    // $_SESSION['pointofentry'] = $_POST['pointofentry'];
//    // $_SESSION['entrymark'] = $_POST['entrymark'];
//    	   // $_SESSION['address'] = $_POST['address'];
// 	   	  // $_SESSION['latitude'] = $_POST['latitude'];
// 	  // $_SESSION['longitude'] = $_POST['longitude'];
//     // $_SESSION['timeentry'] = $_POST['timeentry'];

// 	  // $_SESSION['endtime'] = $_POST['endtime'];
//   // $_SESSION['work'] = $_POST['work'];
// 	   // $_SESSION['purpose'] = $_POST['purpose'];
// 	  // $_SESSION['mode'] = $_POST['mode'];
// 	   	  // $_SESSION['modefor'] = $_POST['modefor'];
// 	    // $_SESSION['personalcar'] = $_POST['personalcar'];	  
	
// 		 // $_SESSION['workmm1'] = $_POST['workmm1'];
// 		  // $_SESSION['workmm2'] = $_POST['workmm2'];
// 		   // $_SESSION['workmm3'] = $_POST['workmm3'];
// 		    // $_SESSION['workmm4'] = $_POST['workmm4'];
// 			 // $_SESSION['workmm5'] = $_POST['workmm5'];
		
		
		
				
//   // $_SESSION['olacost'] = $_POST['olacost'];
  		
  
//     // $_SESSION['parkingcost'] = $_POST['parkingcost'];
	
// 	  // $_SESSION['parkingtime'] = $_POST['parkingtime'];
  
  
  
//    // $stmt = $conn->prepare("UPDATE users3 SET 
   
//       // startaddress = :startaddress, startaddress1 = :startaddress1, startaddress2 = :startaddress2, startaddress3 = :startaddress3,
   
   
   
//    // starttime = :starttime,
   
   
   
//    // entry = :entry,timeentry = :timeentry,
   
   
//    // destination = :destination,destination1 = :destination1,destination2 = :destination2,destination3 = :destination3,destination4 = :destination4,
   
   
   
   
   
   
   
   
   
   
   
//    // pointofentry = :pointofentry,entrymark = :entrymark,address = :address,endtime = :endtime,work = :work,
//    // mode = :mode,olacost = :olacost, personalcar = :personalcar,latitude = :latitude,longitude = :longitude,
//  // purpose = :purpose, modefor = :modefor, parkingcost =:parkingcost, parkingtime = :parkingtime,
//   // workmm1= :workmm1,workmm2= :workmm2,workmm3= :workmm3,workmm4= :workmm4,workmm5= :workmm5
 
 

 
  
 
 
 
 
 
 
 
 
//  // WHERE id = :id");
 
 
// 	// $stmt->bindParam(':id', $id);
	
	
	

// 	// $stmt->bindParam(':pointofentry', $pointofentry);
// 	// $stmt->bindParam(':starttime', $starttime);
// 	// $stmt->bindParam(':entry', $entry);
// 	// $stmt->bindParam(':entrymark', $entrymark);

	
// 	// $stmt->bindParam(':timeentry', $timeentry);

// 	// $stmt->bindParam(':endtime', $endtime);
// 	// $stmt->bindParam(':address', $address);
// 	// $stmt->bindParam(':work', $work);
	
	
// 	// $stmt->bindParam(':mode', $mode);
// 	// $stmt->bindParam(':olacost', $olacost);
// 	// $stmt->bindParam(':personalcar', $personalcar);
// 	// $stmt->bindParam(':longitude', $longitude);
// 	// $stmt->bindParam(':latitude', $latitude);
	
// 	// $stmt->bindParam(':purpose', $purpose);
//     // $stmt->bindParam(':modefor', $modefor);

// 	    // $stmt->bindParam(':parkingcost', $parkingcost);
//     // $stmt->bindParam(':parkingtime', $parkingtime);
	
// 		 // $stmt->bindParam(':workmm1', $workmm1);
// 		  // $stmt->bindParam(':workmm2', $workmm2);
// 		   // $stmt->bindParam(':workmm3', $workmm3);
// 		    // $stmt->bindParam(':workmm4', $workmm4);
// 			 // $stmt->bindParam(':workmm5', $workmm5);
		
// 			// $stmt->bindParam(':startaddress', $startaddress);
// 	// $stmt->bindParam(':startaddress1', $startaddress1);
// 	// $stmt->bindParam(':startaddress2', $startaddress2);
// 	// $stmt->bindParam(':startaddress3', $startaddress3);
	
// 		// $stmt->bindParam(':destination', $destination);
// 	// $stmt->bindParam(':destination1', $destination1);
// 	// $stmt->bindParam(':destination2', $destination2);
// 	// $stmt->bindParam(':destination3', $destination3);
// 	// $stmt->bindParam(':destination4', $destination4);

	
// 	// $id = $_SESSION['id'];
	
		
		
// 	// $starttime = $_SESSION['starttime'];
// 	// $pointofentry = $_SESSION['pointofentry'];
// 	// $entry = $_SESSION['entry'];
// 	// $entrymark = $_SESSION['entrymark'];
	
// 	// $timeentry = $_SESSION['timeentry'];
	

// 	// $endtime = $_SESSION['endtime'];
// 	// $address = $_SESSION['address'];
// 	// $olacost = $_SESSION['olacost'];
	
	
// 	// $work = $_SESSION['work'];
// 	// $mode = $_SESSION['mode'];
// 	// $personalcar = $_SESSION['personalcar'];
// 	// $latitude = $_SESSION['latitude'];
// 	// $longitude = $_SESSION['longitude'];
	
// 	// $modefor = $_SESSION['modefor'];
// 	// $purpose = $_SESSION['purpose'];
	
// 	// $parkingcost = $_SESSION['parkingcost'];
// 	// $parkingtime = $_SESSION['parkingtime'];
// 	// $workmm1 = $_SESSION['workmm1'];
// 	// $workmm2 = $_SESSION['workmm2'];
// 	// $workmm3 = $_SESSION['workmm3'];
// 	// $workmm4 = $_SESSION['workmm4'];
// 	// $workmm5 = $_SESSION['workmm5'];
	
	
// 		// $startaddress = $_SESSION['startaddress'];
// 	// $startaddress1 = $_SESSION['startaddress1'];
// 	// $startaddress2 = $_SESSION['startaddress2'];
// 	// $startaddress3 = $_SESSION['startaddress3'];
	
	
	
// 	// $destination = $_SESSION['destination'];
// 	// $destination1 = $_SESSION['destination1'];
// 	// $destination2 = $_SESSION['destination2'];
// 	// $destination3 = $_SESSION['destination3'];
// 	// $destination4 = $_SESSION['destination4'];
	
	
	
	
	
// 	// $stmt->execute();
  
  
  
  
  
  
//   // if($_SESSION['far']>2)
//   // {
  
// 	 // header('Location: '.'quickride.php');
//   // }
  
//   // else{
	  
// 	   // header('Location: '.'present4.php');
//   // }
	  
//   // }
//  include 'header.php';

 
// ?>
// <?php 
// session_cache_limiter("private_no_expire");
// include 'header.php';
// error_reporting(0);
//  session_start();

 


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
            
           
			
     
	 
// 	 $startaddresswork4=$row['startaddresswork4'];
// 	 $startaddresswork5=$row['startaddresswork5'];
// 	 $startaddresswork6=$row['startaddresswork6'];
// 	 $startaddresswork7=$row['startaddresswork7'];
	 
// 	 	 $startaddressstudy=$row['startaddressstudy']; 
// 	 $startaddress4=$row['startaddress4'];
// 	 $startaddress5=$row['startaddress5'];
// 	 $startaddress6=$row['startaddress6'];
// 	 $startaddress7=$row['startaddress7'];
	 
	 
// 	$starttime1=$row['starttime1'];
// 	$entry1=$row['entry1'];
// 	$pointofentry1=$row['pointofentry1'];
// 	$entrymark1=$row['entrymark1'];
	
	
// 	$address1=$row['address1'];
// 		$latitude1=$row['latitude1'];
// 			$longitude1=$row['longitude1'];

// 	$timeentry1=$row['timeentry1'];
// 	$destination5=$row['destination5'];
// 	$destination6=$row['destination6'];
// 	$destination7=$row['destination7'];
// 	$destination8=$row['destination8'];
	
// $destinationhome5=$row['destinationhome5'];
// 	$destinationhome6=$row['destinationhome6'];
// 	$destinationhome7=$row['destinationhome7'];
// 	$destinationhome8=$row['destinationhome8'];
// 	$destinationhomepincode=$row['destinationhomepincode'];
	
// 	$endtime1=$row['endtime1'];
	
// 		$tthours1=$row['tthours1'];
// 			$ttminutes1=$row['ttminutes1'];


// 	$mode1=$row['mode1'];
// 	$modefor1=$row['modefor1'];
	

// 	$tripcost1=$row['tripcost1'];
	 
	 
	 
// 	 $parkingtime1=$row['parkingtime1'];
// 	 $parkingcost2=$row['parkingcost2'];
// 	 $parkingcost3=$row['parkingcost3'];
	 
// 	 	 $returnmm1=$row['returnmm1'];
// 		 	 $returnmm2=$row['returnmm2'];
// 			 	 $returnmm3=$row['returnmm3'];
// 				 	 $returnmm4=$row['returnmm4'];
// 					 	 $returnmm5=$row['returnmm5'];
// 	 $FromWorksrc = $row['FromWorksrc'];
// 	$FromWorkdst = $row['FromWorkdst'];
	 
// 	 $Fromintermediate1=$row['Fromintermediate1'];
//      $Fromintermediate2=$row['Fromintermediate2'];
//      $Fromintermediate3=$row['Fromintermediate3'];
//      $Fromintermediate4=$row['Fromintermediate4'];
//      $Fromintermediate5=$row['Fromintermediate5'];
//      $FromInterTime1=$row['FromInterTime1'];
//      $FromInterTime2=$row['FromInterTime2'];
//      $InterStopPurpose1=$row['InterStopPurpose1'];
//      $PurposeOther1=$row['PurposeOther1'];
//      $interStop1=$row['interStop1'];
//      $FromTotalTravel1=$row['FromTotalTravel1'];
//      $FromTotalTravel2=$row['FromTotalTravel2'];
	 
	 
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
.para
{
	font-weight: 0;
	font-size: small;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
</style>

		
		<style>




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
		 #myMap11 {
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

<section class="engine"><a href="https://mobirise.ws/f">simple site creator</a></section><section class="mbr-section mbr-after-navbar" id="msg-box5-1" data-rv-view="437" style="background-color: rgb(255,255,255); padding-top: 0px; padding-bottom: 40px;">
             

</section>


	<section class="mbr-section mbr-section__container article" id="header3-2" data-rv-view="440" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
			<small class="mbr-section-subtitle"><br><span style="font-style: normal;">
									


<br><br><br><br>
<br><br>



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
			window.location.href = 'webpage100.php';
		}
	</script>
		<?php
			$_SESSION['webpage100_Man'] = (($totalMan - $filledMan) == 0);
			if($totalOp != 0)
				$_SESSION['webpage100_Op'] = ($filledOp/$totalOp);
			else
				$_SESSION['webpage100_Op'] = 1.0;
			if((!$_SESSION['webpage100_Man'])||($_SESSION['webpage2_Op'] < 0.8)){
				echo "
					<div style='text-align:center'>You have not answered some questions in the previous page. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>

<form  method="post" action="trip3.php<?php echo '?'.mt_rand();?>" class="form" align="left" name="form" >
			
	<table class="table"  id="customers">

		
		<tr>
			<th class="td1" colspan="2"><u style="font-size:30px;">RETURN TRIP (back from Work/Education)</u><br>
			
			
			<span id="para" class="para" style="font-size:20px;">	
			Please enter the details of your <b>*usual* trip back from work or education (i.e., commute trip)</b> you made on the <b>most recent working day.</b>

</span>

			</th>
			
			
		</tr>
		

		
		
			<tr>
			<td class="td1" colspan="2">1. If you started this trip from work or educational institute, check the ‘Work’ or the ‘Educational Institute’ button. If you did not start from work or educational institute, please enter the address of the start location.* 
			</td>
					
			
			
		
			
		</tr>
		
				<?php




$company2=$_SESSION["company"];
$companyother2=$_SESSION["companyother"];
$institution2=$_SESSION["institution"];
$institutionother2=$_SESSION["institutionother"];
$homeaddress2=implode(",",array_filter($_SESSION["homeaddress"]));



$location1=$_SESSION["location"];
$worklocationlocality1=$_SESSION["worklocationlocality"];
$worklocationstreetname1=$_SESSION["worklocationstreetname"];
$worklocationlandmarks1=$_SESSION["worklocationlandmarks"];


$VV1=$_SESSION["V1"];
$VV2=$_SESSION["V2"];
$VV3=$_SESSION["V3"];
$VV4=$_SESSION["V4"];
$VV5=$_SESSION["V5"];


$housenumber1=$_SESSION["housenumber"];
$streetname1=$_SESSION["streetname"];
$locality1=$_SESSION["locality"];
$majorlandmarks1=$_SESSION["majorlandmarks"];
$pincode1=$_SESSION["pincode"];


$MM1=$_SESSION["M1"];
$MM2=$_SESSION["M2"];
$MM3=$_SESSION["M3"];
$MM4=$_SESSION["M4"];
$MM5=$_SESSION["M5"];
$MM6=$_SESSION["MO1"];
$MM7=$_SESSION["MO2"];
$MM8=$_SESSION["MO3"];
$MM9=$_SESSION["MO4"];
$MM10=$_SESSION["MO5"];


?>
		

		
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

			<script>
function myFunction() {
  
	 $("#panel100").show();
				 $("#panel101").hide();
				  $("#panel102").hide();
	var x = '<?php echo $homeaddress2; ?>';
	
	

	

 
	
	
	
	var input = document.getElementById ("myText");
            input.placeholder = '<?php echo $homeaddress2; ?>';
			 input.value = '<?php echo $homeaddress2; ?>';
}



function myFunction1() {
	 $("#panel100").show();
				 $("#panel101").hide();
	 $("#panel102").hide();
	
	
		var input = document.getElementById ("myText");
		input.placeholder = '<?php echo $location1; ?>';
		 input.value = '<?php echo $location1; ?>';
	
	
var input = document.getElementById ("myText001");
	input.placeholder = '<?php echo $worklocationlocality1; ?>';
	 input.value = '<?php echo $worklocationlocality1; ?>';
		
		
var input = document.getElementById ("myText002");
	input.placeholder = '<?php echo $worklocationstreetname1; ?>';
	 input.value = '<?php echo $worklocationstreetname1; ?>';
	 
	 	
var input = document.getElementById ("myText003");
	input.placeholder = '<?php echo $worklocationlandmarks1; ?>';
	 input.value = '<?php echo $worklocationlandmarks1; ?>';
 
    
}


function myFunction2() {
	 $("#panel102").show();
				 $("#panel101").hide();
	              $("#panel100").hide();
	
	

		 
		  var input = document.getElementById ("myText005");
		  input.placeholder = '<?php echo $institution2; ?>';
		   input.value = '<?php echo $institution2; ?>';
		  
	
  
	 
	
	
}

function myFunction3() {
	 $("#panel100").hide();
				 $("#panel101").show();
	$("#panel102").hide();
  
	
	
}







function myFunction4() {
  
		
	  $("#panel90").show();
                $("#panel91").hide();

	
	
var input = document.getElementById ("fillHome");

            input.placeholder = '<?php echo $housenumber1; ?>';
			input.value = '<?php echo $housenumber1; ?>';
			
			
			
				
	var input = document.getElementById ("myText006");

            input.placeholder = '<?php echo $streetname1; ?>';
			input.value = '<?php echo $streetname1; ?>';
			
			
				
	var input = document.getElementById ("myText007");

            input.placeholder = '<?php echo $locality1; ?>';
			input.value = '<?php echo $locality1; ?>';
			
			
				
	var input = document.getElementById ("myText008");

            input.placeholder = '<?php echo $majorlandmarks1; ?>';
			input.value = '<?php echo $majorlandmarks1; ?>';
		
		var input = document.getElementById ("myText009");

            input.placeholder = '<?php echo $pincode1; ?>';
			input.value = '<?php echo $pincode1; ?>';
		
	

 
	
	
	
}



function myFunction5() {
		
	  $("#panel90").show();
                $("#panel91").hide();
	 var y = '<?php echo $company2; ?>';
  var y1 = '<?php echo $companyother2; ?>';
	
	if(y=='NULL')
	{
	
		var input = document.getElementById ("myText1");
		input.placeholder = '<?php echo $companyother2; ?>';
		input.value = '<?php echo $companyother2; ?>';
		
	}
	else{
		
	
var input = document.getElementById ("myText1");
	input.placeholder = '<?php echo $company2; ?>';
	
	input.value = '<?php echo $company2; ?>';
		
	}
 
    
}


function myFunction6() {
	
		
	  $("#panel90").show();
                $("#panel91").hide();
	
   var z = '<?php echo $institution2; ?>';
  var z1 = '<?php echo $institutionother2; ?>';
	
	if(z=='NULL')
	{
		
		var input = document.getElementById ("myText1");
		input.placeholder = '<?php echo $institutionother2; ?>';
			input.value = '<?php echo $institutionother2; ?>';
	}
	
	else
	{
		 
		  var input = document.getElementById ("myText1");
		  input.placeholder = '<?php echo $institution2; ?>';
		  	input.value = '<?php echo $institution2; ?>';
	}
	
	
  
	 
	
	
}

function myFunction7() {
	
		
	  $("#panel90").hide();
                $("#panel91").show();
	
   var x="";
  
	 
	
	
}


</script>

	 <script>
        $(document).ready(function() {
			$(".animated").removeClass("hidden animated");
            $("#panel100").show();
			 $("#panel101").hide();
			 $("#panel90").hide();
			 $("#panel91").show();
			 $("#panel102").hide();
			 if("<?php echo $InterStopPurpose1;?>" != "Any other")
			    $("#StopOther").hide();
			 if("<?php echo $FromWorksrc;?>" == "Institute")
				myFunction2();
			 if("<?php echo $FromWorksrc;?>" == "Work")
				 myFunction1();
			 if("<?php echo $FromWorksrc;?>" == "Other")
				 myFunction3();
			 if("<?php echo $FromWorkdst;?>" == "Home")
				 myFunction4();
			 if("<?php echo $FromWorkdst;?>" == "Other")
				 myFunction7();
        });
        
    </script>		
		
		<tr> <td class="td1" colspan="2">
		
		

		

    <input type="radio" name="FromWorksrc" value="Work"  onchange="myFunction1()" class="big" <?php echo ($FromWorksrc == 'Work') ?  "checked" : "" ;  ?>>Work</br>
	<input type="radio" name="FromWorksrc" value="Institute"  onchange="myFunction2()" class="big" <?php echo ($FromWorksrc == 'Institute') ?  "checked" : "" ;  ?>>Educational institute</br>
	<input type="radio" name="FromWorksrc" value="Other" onchange="myFunction3()" class="big" <?php echo ($FromWorksrc == 'Other') ?  "checked" : "" ;  ?>>Any other, please enter in the textbox below</br>
	
	
	  <div id="panel100" class="panel1 active1">
	<input type="text" name="startaddresswork4" class="textInput" placeholder="Nearest street intersection/Building number" id="myText" style="width:80%;" 

value="<?php echo (isset($startaddresswork4)) ? $startaddresswork4: ''?>" 	>



<input type="text" name="startaddresswork5" class="textInput" placeholder="Major landmark" id="myText001" style="width:80%;" 

value="<?php echo (isset($startaddresswork5)) ? $startaddresswork5: ''?>" 	>



<input type="text" name="startaddresswork6" class="textInput" placeholder="Street name" id="myText002" style="width:80%;" 

value="<?php echo (isset($startaddresswork6)) ? $startaddresswork6: ''?>" 	>



<input type="text" name="startaddresswork7" class="textInput" placeholder="Locality/Neighborhood/Area" id="myText003" style="width:80%;" 

value="<?php echo (isset($startaddresswork7)) ? $startaddresswork7: ''?>" 	>

</div>



<div id="panel102" class="panel1 active1">

<input type="text" name="startaddressstudy" class="textInput" placeholder="Institute name" id="myText005" style="width:80%;" value=""  ><br>


</div>

<div id="panel101" class="panel1 active1">

<input type="text" name="startaddress4" class="textInput" placeholder="House number / Nearest street intersection" id="myText" style="width:80%;" value="<?php echo (isset($startaddress4)) ? $startaddress4: ''?>"   ><br>
<input type="text" name="startaddress5" class="textInput" placeholder="Street name" id="myText" style="width:80%;" value="<?php echo (isset($startaddress5)) ? $startaddress5: ''?>"   ><br>
<input type="text" name="startaddress6" class="textInput" placeholder="Locality/Neighborhood/Area" id="myText" style="width:80%;" value="<?php echo (isset($startaddress6)) ? $startaddress6: ''?>"   ><br>
<input type="text" name="startaddress7" class="textInput" placeholder="Major landmark" id="myText" style="width:80%;" value="<?php echo (isset($startaddress7)) ? $startaddress7: ''?>"   ><br>

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
		
		<input type="radio" name="FromWorkdst" value="Home"  onchange="myFunction4()" class="big" <?php echo ($FromWorkdst == 'Home') ?  "checked" : "" ;  ?>>Home</br>

	<input type="radio" name="FromWorkdst" value="Other" onchange="myFunction7()" class="big" <?php echo ($FromWorkdst == 'Other') ?  "checked" : "" ;  ?>>Any other, please enter in the textbox below</br>
	
	<div>
	 <div id="panel90" class="panel1 active1">
		<input type="text" name="destinationhome5" class="textInput" placeholder="House number/ Nearest street intersection" id="fillHome" style="width:80%;" value="<?php echo (isset($destinationhome5)) ? $destinationhome5: ''?>"  ><br>
		<input type="text" name="destinationhome6" class="textInput" placeholder="Street name" id="myText006" style="width:80%;" value="<?php echo (isset($destinationhome6)) ? $destinationhome6: ''?>"  ><br>
		<input type="text" name="destinationhome7" class="textInput" placeholder="Locality/Neighborhood/Area" id="myText007" style="width:80%;"    value="<?php echo (isset($destinationhome7)) ? $destinationhome7: ''?>" ><br>
		<input type="text" name="destinationhome8" class="textInput" placeholder="Major landmark" id="myText008" style="width:80%;" value="<?php echo (isset($destinationhome8)) ? $destinationhome8: ''?>" ><br>
	    	<input type="text" name="destinationhomepincode" class="textInput" placeholder="Pincode" id="myText009" style="width:80%;" value="<?php echo (isset($destinationhomepincode)) ? $destinationhomepincode: ''?>" ><br>
	
	
	</div>
<div id="panel91" class="panel1 active1">
	
	
	
	<input type="text" name="destination5" class="textInput" placeholder="House number/ Nearest street intersection"  style="width:80%;" value="<?php echo (isset($destination5)) ? $destination5: ''?>"  ><br>
		<input type="text" name="destination6" class="textInput" placeholder="Street name"  style="width:80%;" value="<?php echo (isset($destination6)) ? $destination6: ''?>"  ><br>
		<input type="text" name="destination7" class="textInput" placeholder="Locality/Neighborhood/Area"  style="width:80%;" value="<?php echo (isset($destination7)) ? $destination7: ''?>"  ><br>
		<input type="text" name="destination8" class="textInput" placeholder="Major landmark"  style="width:80%;" value="<?php echo (isset($destination8)) ? $destination8: ''?>"  ><br>
	
	</div>
	
	</div>

		<br>
<br>
			
			<p id="demo"> </p>

			
			
			
			
			
	</td>
			
		</tr>
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script>
                showTravel = function(ele){
                    startTime = $('input[name="starttime1"]').val().split(':');
                    endTime = $('input[name="endtime1"]').val().split(':');
					hours = (parseInt(endTime[0])-parseInt(startTime[0]));
					hoursinminutes = hours * 60;
					minutes = hoursinminutes + (parseInt(endTime[1])-parseInt(startTime[1]));
					hours = Math.floor(minutes/60);
					minutes = Math.trunc(minutes%60);
					 $('input[name="tthours1"]').val(hours);
				    $('input[name="ttminutes1"]').val(minutes);
                    $('.displayTime').remove();
                    $('<tr class="displayTime"><td class="td1" colspan="2">Your total travel time is '+hours+' hours and '+minutes+' minutes.</td></tr>').insertAfter($(ele).parent().parent());
                }
            </script>
		
				<td class="td1" colspan="2">
	
			    <input type=hidden name="tthours1"  value="<?php echo (isset($tthours1)) ? $tthours1: ''?>">
		    <input type=hidden name="ttminutes1" value="<?php echo (isset($ttminutes1)) ? $ttminutes1: ''?>">
			    </td>
			    
			    </tr>
		
		
		<tr>
			<td class="td1" colspan="2">3. Please enter the start time of this trip.* 
			<input type="time" name="starttime1" class="textInput"
			
			value="<?php echo (isset($starttime1)) ? $starttime1: ''?>" id="timepicker" ></td>
		</tr>
		
		

	
		<tr>
			<td class="td1" colspan="2">4. Please enter the end time of this trip.*
			<input type="time" name="endtime1" class="textInput" value="<?php echo (isset($endtime1)) ? $endtime1: ''?>" id="timepicker" onchange="showTravel(this)"></td>
		</tr>

		<tr>
			<td class="td1" colspan="2">5. Did this trip include an entry into or exit from Electronics City?*  <br>
				
    <input type="radio" id="yesEntry" name="entry1" value="yes" onclick="showNext(this)" class="big"  <?php echo ($entry1== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
    <input type="radio" id="noEntry" name="entry1" value="no" onclick="showNext(this)" class="big"  <?php echo ($entry1== 'no') ?  "checked" : "" ;  ?>>No<br><br>
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
			<select id="pointofentry1" name="pointofentry1" style="width:75%;" onchange='fillMapField(this)'>
			
			<option value="<?php  	if(empty($pointofentry1 ))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($pointofentry1)) ? $pointofentry1: '';
		
		   }?>"><?php  	if(empty($pointofentry1)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($pointofentry1)) ? $pointofentry1: '';
		   
		   }?></option>
<option value="tollgate electronic city">&nbsp;  Toll Gate<br>
<option value="hp entrance electronic city">&nbsp;  HP Entrance <br>
			<option value="petrol bunk electronic city">&nbsp;  Petrol bunk <br>
		<option value="Konappana agrahara electronic city">&nbsp;  Konappana Agrahara<br>
			<option value="Doddathoguru velankani electronic city">&nbsp;  Doddathoguru/Velankani <br>
	<option value="neeladri shi electronic city">&nbsp;  Neeladri/Shikaripalya <br>
	<option value="any other">&nbsp;  Any other, please enter in the textbox below or use map <br>
			</select><br><input type="text" name="entrymark1" class="textInput" value="<?php echo (isset($entrymark1)) ? $entrymark1: ''?>" style="width:75%;" ><br><br><br>

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
                        <label for="txtEndereco">Address:</label>
                        <input type="text" id="txtEndereco" name="address1" placeholder="Enter address and submit!" value="<?php echo (isset($address1)) ? $address1: ''?>" />
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Submit" />
                    </div>

                    <div id="mapa"></div>
                    
    
                    
                    <input type="hidden" id="txtLatitude" name="latitude1" value="<?php echo (isset($latitude1)) ? $latitude1: ''?>"  />
                    <input type="hidden" id="txtLongitude" name="longitude1" value="<?php echo (isset($longitude1)) ? $longitude1: ''?>"  />

                </fieldset>
       

		<br><br>
		
		
		
		
		
		



 </div>
  


 </div>
  
  
  
  
  
  
  
  
  
  
  Please enter your approximate time of entry into or exit from Electronic City.*
			<input type="time" name="timeentry1" class="textInput" value="<?php echo (isset($timeentry1)) ? $timeentry1: ''?>" id="timepicker" >
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  
  
  
  
  
  <div id="panel34" class="panel1">
    


<b> Please Proceed!! </b>

 </div>
 
	
	
	
	
	
	
	
	
	
	
	
	
<!--	</div>-->
 </td>	
		</tr>
		

		
		<tr>
			<td class="td1" colspan="2">6 a.	Please enter the primary mode of travel for this trip.  The primary transport mode is that with which you travelled the longest distance. Please see figure below for two examples of primary mode.* <br><br>
			
			
		<select id="modeClick" onchange="showNext(this)" name="mode1"  style="width:80%;">	

		
		
				<option value="<?php  	if(empty($mode1)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($mode1)) ? $mode1: '';
		
		   }?>"><?php  	if(empty($mode1)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($mode1)) ? $mode1: '';
		   
		   }?></option>
		
	 <option value="Train" style="font-weight: bold; text-decoration: underline;"><label>Train</label> <br></option>
		 <option value="Namma Metro" style="font-weight: bold; text-decoration: underline;"><label>Namma Metro</label> <br></option>
	 	 <option value="Office bus or ELCITA shuttle" style="font-weight: bold; text-decoration: underline;"><label>Office bus or ELCITA shuttle</label> <br></option>
	 	 <option value="BMTC Bus" style="font-weight: bold; text-decoration: underline;"><label>BMTC Bus</label> <br></option>
	 	 <option value="Car/Cab/Carpool" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Car/Cab/Carpool</label> <br></option>
	 
	 
	   <option value="Own car drive self"><label>&nbsp;&nbsp;&nbsp;&nbsp; Own car drive self</label> <br></option>
	     <option value="Own car as passenger"><label>&nbsp;&nbsp;&nbsp;&nbsp; Own car as passenger</label> <br></option>
		   <option value="Office car"><label>&nbsp;&nbsp;&nbsp;&nbsp; Office car</label> <br></option>
		     <option value="Office cab service"><label>&nbsp;&nbsp;&nbsp;&nbsp; Office cab service</label> <br></option>
			   <option value="Ride in friend or colleague’s car"><label>&nbsp;&nbsp;&nbsp;&nbsp; Ride in friend or colleague’s car</label> <br></option>
			     <option value="QuickRide or similar app-based carpool"><label>&nbsp;&nbsp;&nbsp;&nbsp; QuickRide or similar app-based carpool</label> <br></option>
				   <option value="Ola/Uber or similar"><label>&nbsp;&nbsp;&nbsp;&nbsp; Ola/Uber or similar</label> <br></option>
				     <option value="Olashare/Uberpool or similar"><label>&nbsp;&nbsp;&nbsp;&nbsp; Olashare/Uberpool or similar</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
	 
	 
		 <option value="Auto-Rickshaw" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Auto-Rickshaw</label> <br></option>
		 <option value="Regular auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Regular auto-rickshaw</label> <br></option>
			<option value="Ola/Uber auto-rickshaw"><label> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber auto-rickshaw</label> <br></option>	 
				 <option value="Two-wheeler owned, shared, taxi" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Two-wheeler owned, shared, taxi</label> <br></option>

				 
				 
				 
				 
				 

				 
				 
			  <option value="Own two-wheeler"><label>&nbsp;&nbsp;&nbsp;&nbsp; Own two-wheeler</label> <br></option>
 <option value="Own two-wheeler with family members, colleagues, or friends"> <label>&nbsp;&nbsp;&nbsp;&nbsp; Own two-wheeler with family members, colleagues, or friends</label> <br></option>
  <option value="Ride in friend or colleague’s two-wheeler"><label>&nbsp;&nbsp;&nbsp;&nbsp; Ride in friend or colleague’s two-wheeler</label> <br></option>
	 <option value="App-based two-wheeler rental like Bounce, Vogo etc"> <label>&nbsp;&nbsp;&nbsp;&nbsp; App-based two-wheeler rental like Bounce, Vogo etc</label><br></option>
 <option value="Bike-taxi such as Rapido"> <label>&nbsp;&nbsp;&nbsp;&nbsp; Bike-taxi such as Rapido</label><br></option>
 
 	 <option value="Bicycle, personal or bikeshare" style="font-weight: bold; text-decoration: underline;color: #111;" disabled><label>Bicycle, personal or bikeshare</label> <br></option>
	 
	 
	 
	 			  <option value="Personal Bicycle"><label>&nbsp;&nbsp;&nbsp;&nbsp; Personal Bicycle</label> <br></option>
 <option value="Bikeshare, Yulu or Pedl"> <label>&nbsp;&nbsp;&nbsp;&nbsp; Bikeshare, Yulu or Pedl</label> <br></option>

	 
	 

	 
	 
	  	 <option value="Walk" style="font-weight: bold; text-decoration: underline;"><label>Walk</label> <br></option>
	 
	 
	 
	 
	 
	 
	 
 <option value="other"> <label>Any other</label> <br></option>
	 </select>
<input id="modeNext" placeholder="Enter Your Mode Here" type="text" name="modefor1" class="textInput" value="<?php echo (isset($modefor1)) ? $modefor1: ''?>" ></td>
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
  
 1.<select id="modeClick" onchange="showNext(this)" name="returnmm1"  style="width:80%;">	

		
				<option value="<?php  	if(empty($returnmm1)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm1)) ? $returnmm1: '';
		
		   }?>"><?php  	if(empty($returnmm1)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm1)) ? $returnmm1: '';
		   
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
  
  2.<select id="modeClick" onchange="showNext(this)" name="returnmm2"  style="width:80%;">	

		
				<option value="<?php  	if(empty($returnmm2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm2)) ? $returnmm2: '';
		
		   }?>"><?php  	if(empty($returnmm2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm2)) ? $returnmm2: '';
		   
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
	 3.<select id="modeClick" onchange="showNext(this)" name="returnmm3"  style="width:80%;">	

		
				<option value="<?php  	if(empty($returnmm3)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm3)) ? $returnmm3: '';
		
		   }?>"><?php  	if(empty($returnmm3)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm3)) ? $returnmm3: '';
		   
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
	 4.<select id="modeClick" onchange="showNext(this)" name="returnmm4"  style="width:80%;">	

		
				<option value="<?php  	if(empty($returnmm4)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm4)) ? $returnmm4: '';
		
		   }?>"><?php  	if(empty($returnmm4)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm4)) ? $returnmm4: '';
		   
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
	 5.<select id="modeClick" onchange="showNext(this)" name="returnmm5"  style="width:80%;">	

		
				<option value="<?php  	if(empty($returnmm5)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm5)) ? $returnmm5: '';
		
		   }?>"><?php  	if(empty($returnmm5)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($returnmm5)) ? $returnmm5: '';
		   
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
                <input type="radio" id="yesInter" name="interStop1" value="yes" onclick="showNext(this)" class="big" <?php echo ($interStop1== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
                <input type="radio" id="noInter" name="interStop1" value="no" onclick="showNext(this)" class="big" <?php echo ($interStop1== 'no') ?  "checked" : "" ;  ?>>No<br><br>
        
        <div id="interPanel">
                Please mention where you stopped.<br>
                <input type="text" name="Fromintermediate1" class="textInput" placeholder="Nearest street intersection/Building number" style="width:80%;" value="<?php echo (isset($Fromintermediate1)) ? $Fromintermediate1: ''?>"><br>
	            <input type="text" name="Fromintermediate2" class="textInput" placeholder="Major landmark" style="width:80%;" value="<?php echo (isset($Fromintermediate2)) ? $Fromintermediate2: ''?>"><br>
		        <input type="text" name="Fromintermediate3" class="textInput" placeholder="Street name" style="width:80%;" value="<?php echo (isset($Fromintermediate3)) ? $Fromintermediate3: ''?>"><br>
		        <input type="text" name="Fromintermediate4" class="textInput" placeholder="Locality/Neighborhood/Area" style="width:80%;" value="<?php echo (isset($Fromintermediate4)) ? $Fromintermediate4: ''?>"><br>
		        <input type="text" name="Fromintermediate5" class="textInput" placeholder="Pincode" style="width:80%;" value="<?php echo (isset($Fromintermediate5)) ? $Fromintermediate5: ''?>"><br>
        
        <script>
                showStopTime = function(){
                    if(($('input[name="FromInterTime1"]').val() == '') || ($('input[name="FromInterTime2"]').val() == '') || ($('input[name="starttime1"]').val() == '') || ($('input[name="endtime1"]').val() == ''))
                        return;
                    startTime = $('input[name="starttime1"]').val().split(':');
                    endTime = $('input[name="FromInterTime1"]').val().split(':');
                    hours = (parseInt(endTime[0])-parseInt(startTime[0]));
					hoursinminutes = hours * 60;
					minutes = hoursinminutes + (parseInt(endTime[1])-parseInt(startTime[1]));
					hours = Math.floor(minutes/60);
				
					minutes = Math.trunc(minutes%60);
					
					startTime1 = $('input[name="FromInterTime2"]').val().split(':');
                    endTime1 = $('input[name="endtime1"]').val().split(':');
                    hours1 = (parseInt(endTime1[0])-parseInt(startTime1[0]));
					hoursinminutes1 = hours1 * 60;
					minutes1 = hoursinminutes1 + (parseInt(endTime1[1])-parseInt(startTime1[1]));
					hours1 = Math.floor(minutes1/60);
				
					minutes1 = Math.trunc(minutes1%60);

				    $('input[name="FromTotalTravel1"]').val(hours+' hr ' + minutes + ' min');
				    $('input[name="FromTotalTravel2"]').val(hours1+' hr ' + minutes1 + ' min');
                    $('.stopTime').remove();
                    $('<span class="stopTime"><br>Your trip from your origin to your intermediate stop took '+hours+' hours and '+minutes+' minutes, and your trip from your intermediate stop to your final destination took '+hours1+' hours and '+minutes1+' minutes.</span>').insertAfter($('input[name="FromInterTime2"]'));
                }
        </script>
        
			    <input type=hidden name="FromTotalTravel1" value="<?php echo (isset($FromTotalTravel1)) ? $FromTotalTravel1: ''?>" >
		    <input type=hidden name="FromTotalTravel2" value="<?php echo (isset($FromTotalTravel2)) ? $FromTotalTravel2: ''?>">

            Please mention the time when you stopped.  
			<input type="time" name="FromInterTime1" class="textInput" value="<?php echo (isset($FromInterTime1)) ? $FromInterTime1: ''?>" onchange="showStopTime()"><br>
			
			Please mention the time when you resumed this trip.  
			<input type="time" name="FromInterTime2" class="textInput" value="<?php echo (isset($FromInterTime2)) ? $FromInterTime2: ''?>" onchange="showStopTime()"><br>
			
			Please mention the purpose of the stop.<br>
			
		<select id="StopPurpose" onchange="showNext(this)" name="InterStopPurpose1" style="width:80%;">
		    <option value="<?php  	if(empty($InterStopPurpose1))
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($InterStopPurpose1)) ? $InterStopPurpose1: '';
		   }?>"><?php  	if(empty($InterStopPurpose1))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($InterStopPurpose1)) ? $InterStopPurpose1: 'Select';
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
			<input style="width:80%" id="StopOther" placeholder="Enter Your Purpose Here" type="text" name="PurposeOther1" class="textInput" value="<?php echo (isset($PurposeOther1)) ? $PurposeOther1: ''?>" >
        </div>
        </td></tr>
		
		
		
		
		
		
		
		
				
				<tr>
			<td class="td1" colspan="2">8. Please enter the approximate cost of this trip, including tolls & fuel cost or fare.*<br>
			&nbsp;Rs.<input type="number" name="tripcost1" class="textInput" value="<?php echo (isset($tripcost1)) ? $tripcost1: ''?>" ></td>
		</tr>
					<!--	<tr>
			<td class="td1" colspan="2">8.If applicable, for personal vehicle users, please mention<br><br> Parking cost:  <br>
			
	
	 
	 
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
	
	  
	 	<select class="moneyBox" name="parkingcost2">	

		
				<option value="<?php  	if(empty($parkingcost2)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($parkingcost2)) ? $parkingcost2: '';
		
		   }?>"><?php  	if(empty($parkingcost2)) 
		   {
			   echo 'Select Amount';
		   }
		   else
		   {
		   echo (isset($parkingcost2)) ? $parkingcost2: 'Select Amount';
		   
		   }?></option>
	









		
	 
	   <option value="40"> <label>Less than Rs. 40</label> <br></option>

	   <option value="80"><label>Rs. 40 - Rs. 80 </label> <br></option>
	  <option value="160"><label>Rs. 120 - Rs. 160</label><br></option>
 <option value="200"> <label>Rs. 160 - Rs. 200</label><br></option>
 
   <option value="300"> <label>Rs. 200 - Rs. 300</label> <br></option>
 <option value="400"> <label>Rs. 300 or more</label><br></option>

	

<br></option>
	 </select> for <input class="moneyBox" type="number" name="parkingtime1" value="<?php echo (!empty($parkingtime1)) ? $parkingtime1: ''?>"> hours
	 





<br><span style="text-align:center;margin-left:45%">OR</span><br>
Parking cost:





	 
	 
	
	 
	 
	 	<select class="moneyBox" name="parkingcost3">	

		
				<option value="<?php  	if(empty($parkingcost3)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($parkingcost3)) ? $parkingcost3: '';
		
		   }?>"><?php  	if(empty($parkingcost3)) 
		   {
			   echo 'Select Amount';
		   }
		   else
		   {
		   echo (isset($parkingcost3)) ? $parkingcost3: 'Select Amount';
		   
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
		</tr> -->
		
				
				
					<input type = "hidden" name = "trackingToken" id = "trackingToken" value = "0">
	
			<tr><td colspan="2"><div class="Register Back" onclick="go_back()">Previous Page</div><input type="submit" name="Submit" value="NEXT" id="register_btn3" class="Register" onclick="return OnButton2();"/></td></tr>
		
				
						
		
					
		
		
		
		
	
				
						
	
		
		
		
		
		
		
		
		
		
		
		
	</table>
	
</form>
			
				
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
    document.form.action = "trip3.php"
	document.getElementById("trackingToken").value = "1";
    
    document.form.submit();             // Submit the page
    return true;
}


	function OnButton2()
{
    	var a = '<?php echo $farr; ?>';
	if(a=='0 to less than 2 km')
	{
		document.getElementById("trackingToken").value = "2";
		document.form.action = "trip3.php"
		
	}
	else{
		
				document.form.action = "trip3.php"
	}
	
	
	
    
    document.form.submit();             // Submit the page
    return true;
}		
			
			
			</script>	
			
			
			
			
			
			
			
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
   
 
 	<script>
        $(document).ready(function() {
            $("#panel33").hide();
            $("#panel34").hide();
            $("#specifySource").hide();
            $("#specifyDest").hide();
            $("#modeNext").hide();
            $("#purposeNext").hide();
            if("<?php echo $interStop1;?>" != 'yes')
                $("#interPanel").hide();
        	if("<?php echo $pointofentry1?>" != "any other")
				$("#mapOther").hide();
        });
        var showNext = function(ele) {
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
            }else if(ele.id == "pointofentry1"){
				if(ele.value == "any other"){
					$("#mapOther").show();
				}else{
					$("#mapOther").hide();
				}
			}else if(ele.id == "StopPurpose"){
                console.log(ele.value)
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

			
