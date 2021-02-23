<?php 
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
error_reporting(0);



// $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// $test = 0;
//  if (isset($_POST['Submit']) && $_POST["trackingToken"]=="1") 
//  {
// 	 if(!empty($_POST['startaddress1'])) {
//   $i = 0;
//   foreach($_POST['startaddress1'] as $x){
//    $_SESSION["startaddress1"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["startaddress1ArraySize"] = $i; //store the number of 'modes'
// }
	 
	 

//   $_SESSION['starttime1'] = $_POST['starttime1'];
//     $_SESSION['entry1'] = $_POST['entry1'];
//    $_SESSION['pointofentry1'] = $_POST['pointofentry1'];
//     $_SESSION['entrymark1'] = $_POST['entrymark1'];

	
// 	   $_SESSION['address1'] = $_POST['address1'];
//     $_SESSION['timeentry1'] = $_POST['timeentry1'];

// 	  $_SESSION['endtime1'] = $_POST['endtime1'];
	  
	
	   	 
	  
	
	 
	 
	  

// 	    $_SESSION['mode1'] = $_POST['mode1'];
// 	  $_SESSION['modefor1'] = $_POST['modefor1'];
	  
// 	  $_SESSION['tripcost1'] = $_POST['tripcost1'];
		  
//     $_SESSION['parkingtime1'] = $_POST['parkingtime1'];
// 	$_SESSION['parkingcost2'] = $_POST['parkingcost2'];
// 	$_SESSION['parkingcost3'] = $_POST['parkingcost3'];
  
//    $_SESSION['returnmm1'] = $_POST['returnmm1'];
//     $_SESSION['returnmm2'] = $_POST['returnmm2'];
// 	 $_SESSION['returnmm3'] = $_POST['returnmm3'];
// 	  $_SESSION['returnmm4'] = $_POST['returnmm4'];
// 	   $_SESSION['returnmm5'] = $_POST['returnmm5'];
	   
// 	    $_SESSION['tthours1'] = $_POST['tthours1'] ;
// 			 	 $_SESSION['ttminutes1'] = $_POST['ttminutes1'];
			 	 
// 			 	  $_SESSION['latitude1'] = $_POST['latitude1'];
// 			 	   $_SESSION['longitude1'] = $_POST['longitude1'];
  
  
//   $modes = array('mode1','returnmm1','returnmm2','returnmm3','returnmm4','returnmm5');
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
     
//      $_SESSION['sliderChoice2'] = $sliderChoice;
  
  
//   if(!empty($_POST['destination1'])) {
//   $i = 0;
//   foreach($_POST['destination1'] as $x){
//    $_SESSION["destination1"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["destination1ArraySize"] = $i; //store the number of 'modes'
// }
	 
	 
 

   
  
  
  
//    $stmt = $conn->prepare("UPDATE users3 SET startaddress1 = :startaddress1_string ,starttime1 = :starttime1,entry1 = :entry1, pointofentry1 = :pointofentry1,entrymark1 = :entrymark1,
   
// address1 = :address1, timeentry1 = :timeentry1,destination1 = :destination1_string,endtime1 = :endtime1,

//  mode1 = :mode1 ,modefor1 = :modefor1, tripcost1 = :tripcost1,  
 
//  parkingcost1 = :parkingcost1, parkingtime1 = :parkingtime1,
 
//  returnmm1 = :returnmm1,returnmm2 = :returnmm2,returnmm3 = :returnmm3,returnmm4 = :returnmm4,returnmm5 = :returnmm5,
 
//   tthours1 =:tthours1,ttminutes1 =:ttminutes1,
  
//   latitude1 =:latitude1,longitude1 =:longitude1

 
  
 
 
 
 
 
 
 
 
//  WHERE id = :id");
 	
// 	$stmt->bindParam(':id', $id);
// 	$stmt->bindParam(':startaddress1_string', $startaddress1_string);
// 	$stmt->bindParam(':starttime1', $starttime1);
// 	$stmt->bindParam(':entry1', $entry1);
// 	$stmt->bindParam(':pointofentry1', $pointofentry1);
// 	$stmt->bindParam(':entrymark1', $entrymark1);

	
// 	$stmt->bindParam(':address1', $address1);
// 	$stmt->bindParam(':timeentry1', $timeentry1);
// 	$stmt->bindParam(':destination1_string', $destination1_string);
// 	$stmt->bindParam(':endtime1', $endtime1);

	
	

// 	$stmt->bindParam(':mode1', $mode1);
//     $stmt->bindParam(':modefor1', $modefor1);

//     $stmt->bindParam(':tripcost1', $tripcost1);

// 		 $stmt->bindParam(':parkingcost1', $parkingcost1);
// 		  $stmt->bindParam(':parkingtime1', $parkingtime1);
	

	
	
// 	$stmt->bindParam(':returnmm1', $returnmm1);
// 	$stmt->bindParam(':returnmm2', $returnmm2);
// 	$stmt->bindParam(':returnmm3', $returnmm3);
// 	$stmt->bindParam(':returnmm4', $returnmm4);
// 	$stmt->bindParam(':returnmm5', $returnmm5);
	
	
// 		$stmt->bindParam(':tthours1',$tthours1);
// 		$stmt->bindParam(':ttminutes1',$ttminutes1);
	
// 		$stmt->bindParam(':latitude1',$latitude1);
// 			$stmt->bindParam(':longitude1',$longitude1);
	
	
	
	
// 	$id = $_SESSION['id'];
	
	
	
// 	$starttime1 = $_SESSION['starttime1'];
// 	$entry1 = $_SESSION['entry1'];
// 	$pointofentry1 = $_SESSION['pointofentry1'];
// 	$entrymark1 = $_SESSION['entrymark1'];
	
	
// 	$address1 = $_SESSION['address1'];
// 	$timeentry1 = $_SESSION['timeentry1'];
	
	
	
// 		$i = 0;
// 	$s=[];
//  	for($i = 0;$i<$_SESSION["startaddress1ArraySize"];$i++) {
// 		$s[$i]=$_SESSION['startaddress1'][$i];
// 		}
// 		$startaddress1_string = implode($_POST['startaddress1'],",");
	
	
//  $d=[];
//  	for($i = 0;$i<$_SESSION["destination1ArraySize"];$i++) {
// 		$d[$i]=$_SESSION['destination1'][$i];
// 		}
// 	$destination1_string = implode($_POST['destination1'],",");
	
	
	
	
	
	
	
	
// 	$endtime1 = $_SESSION['endtime1'];
  
	
  
// 	$mode1 = $_SESSION['mode1'];
// 	$tripcost1 = $_SESSION['tripcost1'];

// 	$modefor1 = $_SESSION['modefor1'];
	
	
// 	$parkingcost1 = $_SESSION['parkingcost1'];
// 	$parkingtime1 = $_SESSION['parkingtime1'];
	
// 	$returnmm1= $_SESSION['returnmm1'];
// 	$returnmm2 = $_SESSION['returnmm2'];
// 	$returnmm3 = $_SESSION['returnmm3'];
// 	$returnmm4 = $_SESSION['returnmm4'];
// 	$returnmm5 = $_SESSION['returnmm5'];

// 	$tthours1 = $_SESSION['tthours1'];
// 			$ttminutes1 = $_SESSION['ttminutes1'];
// 				$latitude1 = $_SESSION['latitude1'];
// 					$longitude1 = $_SESSION['longitude1'];
// 	$stmt->execute();
  
  
  
  
  
  
  
  
  
  
  
//  } 
//  else {
	 
// 	 $totalMan = 0;
// 	$filledMan = 0;
// 	$totalOp = 0;
// 	$filledOp = 0;
	
// 	$totalMan += 1;
// 	if(isset($_POST['FromWorksrc'])){
// 		if($_POST['FromWorksrc'] != 'Other')
// 			$filledMan += 1;
// 		else if(($_POST['startaddress4'] != '')&&($_POST['startaddress5'] != '')&&($_POST['startaddress6'] != '')&&($_POST['startaddress7'] != ''))
// 			$filledMan += 1;
// 	}
	
	
// 	$totalMan += 1;
// 	if(isset($_POST['FromWorkdst'])){
// 		if($_POST['FromWorkdst'] != 'Other')
// 			$filledMan += 1;
// 		else if(($_POST['destination5'] != '')&&($_POST['destination6'] != '')&&($_POST['destination7'] != '')&&($_POST['destination8'] != ''))
// 			$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['starttime1'] != ''){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['endtime1'] != ''){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['interStop1']){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if(isset($_POST['entry1'])){
// 		$filledMan += 1;
// 		if($_POST['entry'] == 'yes'){
// 			$totalMan += 1;
// 			if($_POST['pointofentry1'] != ''){
// 				$filledMan += 1;
// 			}
	
// 			$totalMan += 1;
// 			if($_POST['timeentry1'] != ''){
// 				$filledMan += 1;
// 			}
// 		}
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['mode1'] != ''){
// 		$filledMan += 1;
// 	}
	
// 	$totalMan += 1;
// 	if($_POST['tripcost1'] != ''){
// 		$filledMan += 1;
// 	}
	
// 			$_SESSION['trip2_Man'] = (($totalMan - $filledMan) == 0);
// 			error_log($_SESSION['trip2_Man']);
// 			if($totalOp != 0)
// 				$_SESSION['trip2_Op'] = ($filledOp/$totalOp);
// 			else
// 				$_SESSION['trip2_Op'] = 1.0;
// 			error_log($_SESSION['trip2_Op']);

// 	$_SESSION['FromWorksrc'] = $_POST['FromWorksrc'];
// 	$_SESSION['FromWorkdst'] = $_POST['FromWorkdst'];
//   $_SESSION['starttime1'] = $_POST['starttime1'];
//     $_SESSION['entry1'] = $_POST['entry1'];
//    $_SESSION['pointofentry1'] = $_POST['pointofentry1'];
//     $_SESSION['entrymark1'] = $_POST['entrymark1'];

	
// 	   $_SESSION['address1'] = $_POST['address1'];
//     $_SESSION['timeentry1'] = $_POST['timeentry1'];

// 	  $_SESSION['endtime1'] = $_POST['endtime1'];

	
	   	 
	  
	
	 
	 
	  
	  
// 	    $_SESSION['mode1'] = $_POST['mode1'];
// 	  $_SESSION['modefor1'] = $_POST['modefor1'];

// 	  $_SESSION['tripcost1'] = $_POST['tripcost1'];
// 	$_SESSION['parkingtime1'] = $_POST['parkingtime1'];
// 	$_SESSION['parkingcost2'] = $_POST['parkingcost2'];
// 	$_SESSION['parkingcost3'] = $_POST['parkingcost3'];
	
			  
			    
//    $_SESSION['returnmm1'] = $_POST['returnmm1'];
//     $_SESSION['returnmm2'] = $_POST['returnmm2'];
// 	 $_SESSION['returnmm3'] = $_POST['returnmm3'];
// 	  $_SESSION['returnmm4'] = $_POST['returnmm4'];
// 	   $_SESSION['returnmm5'] = $_POST['returnmm5'];
	   
// 	   $_SESSION['Fromintermediate1'] = $_POST['Fromintermediate1'];
// 		   $_SESSION['Fromintermediate2'] = $_POST['Fromintermediate2'];
// 		   $_SESSION['Fromintermediate3'] = $_POST['Fromintermediate3'];
// 		   $_SESSION['Fromintermediate4'] = $_POST['Fromintermediate4'];
// 		   $_SESSION['Fromintermediate5'] = $_POST['Fromintermediate5'];
// 		   $_SESSION['FromInterTime1'] = $_POST['FromInterTime1'];
// 		   $_SESSION['FromInterTime2'] = $_POST['FromInterTime2'];
// 		   $_SESSION['InterStopPurpose1'] = $_POST['InterStopPurpose1'];
// 		   $_SESSION['PurposeOther1'] = $_POST['PurposeOther1'];
// 		   $_SESSION['interStop1'] = $_POST['interStop1'];
// 		   $_SESSION['FromTotalTravel1'] = $_POST['FromTotalTravel1'];
// 		   $_SESSION['FromTotalTravel2'] = $_POST['FromTotalTravel2'];
	   
//     $_SESSION['tthours1'] = $_POST['tthours1'] ;
// 			 	 $_SESSION['ttminutes1'] = $_POST['ttminutes1'];
// 		  $_SESSION['latitude1'] = $_POST['latitude1'];
// 			 	   $_SESSION['longitude1'] = $_POST['longitude1'];
	   
// 	    $modes = array('mode1','returnmm1','returnmm2','returnmm3','returnmm4','returnmm5');
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
     
//      $_SESSION['sliderChoice2'] = $sliderChoice;
  
// 			 $_SESSION['destination5'] = $_POST['destination5']; 
//  $_SESSION['destination6'] = $_POST['destination6'];
//  $_SESSION['destination7'] = $_POST['destination7'];
//  $_SESSION['destination8'] = $_POST['destination8'];
//  			 $_SESSION['destinationhome5'] = $_POST['destinationhome5']; 
//  $_SESSION['destinationhome6'] = $_POST['destinationhome6'];
//  $_SESSION['destinationhome7'] = $_POST['destinationhome7'];
//  $_SESSION['destinationhome8'] = $_POST['destinationhome8'];
//  $_SESSION['destinationhomepincode'] = $_POST['destinationhomepincode'];
 

	

// $_SESSION['startaddresswork4'] = $_POST['startaddresswork4'];
// 	     $_SESSION['startaddresswork5'] = $_POST['startaddresswork5'];
// 		   $_SESSION['startaddresswork6'] = $_POST['startaddresswork6'];
// 		     $_SESSION['startaddresswork7'] = $_POST['startaddresswork7'];

//  $_SESSION['startaddressstudy'] = $_POST['startaddressstudy'];
	
//  $_SESSION['startaddress4'] = $_POST['startaddress4'];
// 	     $_SESSION['startaddress5'] = $_POST['startaddress5'];
// 		   $_SESSION['startaddress6'] = $_POST['startaddress6'];
// 		     $_SESSION['startaddress7'] = $_POST['startaddress7'];
	  
	  
	  
// 	     $stmt = $conn->prepare("UPDATE users3 SET startaddress4 = :startaddress4,startaddress5 = :startaddress5,startaddress6 = :startaddress6,startaddress7 = :startaddress7,
		 
		 
// 		 startaddresswork4 = :startaddresswork4,startaddresswork5 = :startaddresswork5,startaddresswork6 = :startaddresswork6,startaddresswork7 = :startaddresswork7,startaddressstudy = :startaddressstudy,
		 
		 
		 
// 		 starttime1 = :starttime1,entry1 = :entry1, pointofentry1 = :pointofentry1,entrymark1 = :entrymark1,
   
// address1 = :address1, timeentry1 = :timeentry1,


// destination5 = :destination5,destination6 = :destination6,destination7 = :destination7,destination8 = :destination8,

// destinationhome5 = :destinationhome5,destinationhome6 = :destinationhome6,destinationhome7 = :destinationhome7,destinationhome8 = :destinationhome8,destinationhomepincode = :destinationhomepincode,



// endtime1 = :endtime1,

//  mode1 = :mode1 ,modefor1 = :modefor1, tripcost1 = :tripcost1, parkingcost2 =:parkingcost2,parkingcost3 =:parkingcost3, parkingtime1 =:parkingtime1,

 
  
//   returnmm1 = :returnmm1,returnmm2 = :returnmm2,returnmm3 = :returnmm3,returnmm4 = :returnmm4,returnmm5 = :returnmm5,FromWorksrc=:FromWorksrc,FromWorkdst=:FromWorkdst,
  
//     tthours1 =:tthours1,ttminutes1 =:ttminutes1,
//      latitude1 =:latitude1,longitude1 =:longitude1,Fromintermediate1=:Fromintermediate1,Fromintermediate2=:Fromintermediate2,Fromintermediate3=:Fromintermediate3,Fromintermediate4=:Fromintermediate4,Fromintermediate5=:Fromintermediate5,
//      FromInterTime1=:FromInterTime1,FromInterTime2=:FromInterTime2,InterStopPurpose1=:InterStopPurpose1,PurposeOther1=:PurposeOther1,interStop1=:interStop1,FromTotalTravel1=:FromTotalTravel1,FromTotalTravel2=:FromTotalTravel2
 
 
 
 
 
 
 
//  WHERE id = :id");
 	
// 	$stmt->bindParam(':id', $id);
	
	
	
	
// 	$stmt->bindParam(':FromWorksrc', $FromWorksrc);
// 	$stmt->bindParam(':FromWorkdst', $FromWorkdst);
// 	$stmt->bindParam(':startaddresswork4', $startaddresswork4);
// 	$stmt->bindParam(':startaddresswork5', $startaddresswork5);
// 	$stmt->bindParam(':startaddresswork6', $startaddresswork6);
// 	$stmt->bindParam(':startaddresswork7', $startaddresswork7);
	
// 	$stmt->bindParam(':startaddressstudy', $startaddressstudy);
	
// 	$stmt->bindParam(':startaddress4', $startaddress4);
// 	$stmt->bindParam(':startaddress5', $startaddress5);
// 	$stmt->bindParam(':startaddress6', $startaddress6);
// 	$stmt->bindParam(':startaddress7', $startaddress7);
	
	
	
	
// 	$stmt->bindParam(':starttime1', $starttime1);
// 	$stmt->bindParam(':entry1', $entry1);
// 	$stmt->bindParam(':pointofentry1', $pointofentry1);
// 	$stmt->bindParam(':entrymark1', $entrymark1);

	
// 	$stmt->bindParam(':address1', $address1);
// 	$stmt->bindParam(':timeentry1', $timeentry1);
	
	
// 	$stmt->bindParam(':destination5', $destination5);
// 		$stmt->bindParam(':destination6', $destination6);
// 			$stmt->bindParam(':destination7', $destination7);
// 				$stmt->bindParam(':destination8', $destination8);
	
	
// 		$stmt->bindParam(':destinationhome5', $destinationhome5);
// 		$stmt->bindParam(':destinationhome6', $destinationhome6);
// 			$stmt->bindParam(':destinationhome7', $destinationhome7);
// 				$stmt->bindParam(':destinationhome8', $destinationhome8);
// 				$stmt->bindParam(':destinationhomepincode', $destinationhomepincode);
	
	
	
	
// 	$stmt->bindParam(':endtime1', $endtime1);

	
	

// 	$stmt->bindParam(':mode1', $mode1);
//     $stmt->bindParam(':modefor1', $modefor1);

//     $stmt->bindParam(':tripcost1', $tripcost1);

		
// 	   $stmt->bindParam(':parkingcost2', $parkingcost2);
// 	   $stmt->bindParam(':parkingcost3', $parkingcost3);
// 	      $stmt->bindParam(':parkingtime1', $parkingtime1);

		  
		  
// 		  	$stmt->bindParam(':returnmm1', $returnmm1);
// 	$stmt->bindParam(':returnmm2', $returnmm2);
// 	$stmt->bindParam(':returnmm3', $returnmm3);
// 	$stmt->bindParam(':returnmm4', $returnmm4);
// 	$stmt->bindParam(':returnmm5', $returnmm5);
	
// 			$stmt->bindParam(':tthours1',$tthours1);
// 		$stmt->bindParam(':ttminutes1',$ttminutes1);
	
// 		$stmt->bindParam(':latitude1',$latitude1);
// 			$stmt->bindParam(':longitude1',$longitude1);
			
// 		$stmt->bindParam(':Fromintermediate1',$Fromintermediate1);
// 		$stmt->bindParam(':Fromintermediate2',$Fromintermediate2);
// 		$stmt->bindParam(':Fromintermediate3',$Fromintermediate3);
// 		$stmt->bindParam(':Fromintermediate4',$Fromintermediate4);
// 		$stmt->bindParam(':Fromintermediate5',$Fromintermediate5);
// 		$stmt->bindParam(':FromInterTime1',$FromInterTime1);
// 		$stmt->bindParam(':FromInterTime2',$FromInterTime2);
// 		$stmt->bindParam(':InterStopPurpose1',$InterStopPurpose1);
// 		$stmt->bindParam(':PurposeOther1',$PurposeOther1);
// 	    $stmt->bindParam(':interStop1',$interStop1);
// 		$stmt->bindParam(':FromTotalTravel1',$FromTotalTravel1);
// 		$stmt->bindParam(':FromTotalTravel2',$FromTotalTravel2);
	
	
	
		  
	
// 	$id = $_SESSION['id'];
	
// 	$FromWorksrc = $_SESSION['FromWorksrc'];
// 	$FromWorkdst = $_SESSION['FromWorkdst'];
// 	$starttime1 = $_SESSION['starttime1'];
// 	$entry1 = $_SESSION['entry1'];
// 	$pointofentry1 = $_SESSION['pointofentry1'];
// 	$entrymark1 = $_SESSION['entrymark1'];
	
	
// 	$address1 = $_SESSION['address1'];
// 	$timeentry1 = $_SESSION['timeentry1'];

	
// 		$destination5 = $_SESSION['destination5'];
// $destination6 = $_SESSION['destination6'];
// $destination7 = $_SESSION['destination7'];
// $destination8 = $_SESSION['destination8'];
		
	
// 		$destinationhome5 = $_SESSION['destinationhome5'];
// $destinationhome6 = $_SESSION['destinationhome6'];
// $destinationhome7 = $_SESSION['destinationhome7'];
// $destinationhome8 = $_SESSION['destinationhome8'];
// $destinationhomepincode = $_SESSION['destinationhomepincode'];
	
// 	$startaddresswork4 = $_SESSION['startaddresswork4'];
// 	$startaddresswork5 = $_SESSION['startaddresswork5'];
// 	$startaddresswork6 = $_SESSION['startaddresswork6'];
// 	$startaddresswork7 = $_SESSION['startaddresswork7'];
// 	$startaddressstudy = $_SESSION['startaddressstudy'];
	
// 	$startaddress4 = $_SESSION['startaddress4'];
// 	$startaddress5 = $_SESSION['startaddress5'];
// 	$startaddress6 = $_SESSION['startaddress6'];
// 	$startaddress7 = $_SESSION['startaddress7'];
	
// 	$endtime1 = $_SESSION['endtime1'];

	
   
// 	$mode1 = $_SESSION['mode1'];
// 	$tripcost1 = $_SESSION['tripcost1'];

// 	$modefor1 = $_SESSION['modefor1'];
	
	
// 	$parkingcost2 = $_SESSION['parkingcost2'];
// 	$parkingcost3 = $_SESSION['parkingcost3'];
// 	$parkingtime1 = $_SESSION['parkingtime1'];
	
// 		$returnmm1= $_SESSION['returnmm1'];
// 	$returnmm2 = $_SESSION['returnmm2'];
// 	$returnmm3 = $_SESSION['returnmm3'];
// 	$returnmm4 = $_SESSION['returnmm4'];
// 	$returnmm5 = $_SESSION['returnmm5'];
// 		$tthours1 = $_SESSION['tthours1'];
// 			$ttminutes1 = $_SESSION['ttminutes1'];
// 				$latitude1 = $_SESSION['latitude1'];
// 					$longitude1 = $_SESSION['longitude1'];
					
// 	    $Fromintermediate1 = $_SESSION['Fromintermediate1'];
// 		$Fromintermediate2 = $_SESSION['Fromintermediate2'];
// 		$Fromintermediate3 = $_SESSION['Fromintermediate3'];
// 		$Fromintermediate4 = $_SESSION['Fromintermediate4'];
// 		$Fromintermediate5 = $_SESSION['Fromintermediate5'];
// 		$FromInterTime1 = $_SESSION['FromInterTime1'];
// 		$FromInterTime2 = $_SESSION['FromInterTime2'];
// 		$InterStopPurpose1 = $_SESSION['InterStopPurpose1'];
// 		$PurposeOther1 = $_SESSION['PurposeOther1'];
// 		$interStop1 = $_SESSION['interStop1'];
// 		$FromTotalTravel1 = $_SESSION['FromTotalTravel1'];
// 		$FromTotalTravel2 = $_SESSION['FromTotalTravel2'];
					
// 	$stmt->execute();

// 	if($_SESSION['far']=='0 to less than 2 km')// checks the value of farr and then decides which page to send randomly
// 		$arr = array(2,3);
// 	else
// 		$arr = array(1);
	
// 	$link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
 
// 	if($link === false){
// 		die("ERROR: Could not connect. " . mysqli_connect_error());
// 	}
// 	$username= $_SESSION['username'];

// 	$sql = "SELECT op_page FROM users3 WHERE username='$username'";
// 	if($result = mysqli_query($link, $sql)){
// 		if(mysqli_num_rows($result) > 0){

// 			while($row = mysqli_fetch_array($result)){// when the respondent comes back it should go back to the same optional page , the below code checks that
// 				$op_page = $row['op_page'];
// 				if($op_page == 0){
// 					$op_page = $arr[array_rand($arr)];
// 					$stmt = $conn->prepare("UPDATE users3 SET op_page = :op_page WHERE id = :id");
// 					$stmt->bindParam(':id', $id);
// 					$stmt->bindParam(':op_page', $op_page);
				
// 					$stmt->execute();
// 					$test=$stmt->error_list;
// 				}
// 			}
// 		mysqli_free_result($result);
// 		}else{
// 			echo "No records matching your query were found.";
// 		}
// 	} else{
// 		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// 	}
// 	mysqli_close($link);
	 
// 	if($op_page == 1)
// 		header("Location: future.php");
// 	if($op_page == 2)
// 		header("Location: present4.php");
// 	if($op_page == 3)
// 		header("Location: modechoicequestions.php");
// 			$op_page=$_SESSION['op_page'];
//   }
 
//  include 'header.php';
 
// ?>
// <?php 
// header("Cache-Control: no cache");
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
            
           
			
     
	 
// 	 $startaddress2=$row['startaddress2'];
// 	$starttime2=$row['starttime2'];
// 	$entry2=$row['entry2'];
// 	$pointofentry2=$row['pointofentry2'];
// 	$entrymark2=$row['entrymark2'];
	
	
// 	$address2=$row['address2'];

// 	$timeentry2=$row['timeentry2'];
// 	$destination2=$row['destination2'];
	
	
// 	$endtime2=$row['endtime2'];
// 	$work2=$row['work2'];
// 	$purpose2=$row['purpose2'];
// 	$mode2=$row['mode2'];
// 	$modefor2=$row['modefor2'];
	
// 	$personalcar2=$row['personalcar2'];
// 	$olacost2=$row['olacost2'];
	 
	 
	 
// 	  $parkingtime2=$row['parkingtime2'];
// 	 $parkingcost2=$row['parkingcost2'];
	 
	 
	 
	 
	 
	 
	 
	 
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="/test4/2611/js/jquery.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery1.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style3.css">
		
	
			
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
        #mapa {
		   height: 350px;
		   width: 100%;
		}
		 #myMap21 {
		   height: 350px;
		   width: 100%;
		}
		 #myMap22 {
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
<br><br><br><br>








<form  method="post" action="trip4.php" class="form" align="left" name="form" >
			
	<table class="table"  id="customers">

		
		<tr>
			<td class="td1"><h2>TRIP 3 <?php echo $_SERVER['HTTP_HOME'];    ?></h2></td> 
			
			
		</tr>
		
		
			<tr>
			<td class="td1">1. Please enter the start address for this trip. For a non-residential location, like school or restaurant, please mention name of the location (for example school or restaurant, and neighborhood). For a residential location, please mention nearby intersection or landmark, and neighborhood.(You could enter 'home' or 'work' or 'educational institute' if applicable) 
			 
           
			</td>
					
			
			
			<td></td>
			
		</tr>
		
		
		

		
		
		
		
			<?php




$company2=$_SESSION["company"];
$companyother2=$_SESSION["companyother"];
$institution2=$_SESSION["institution"];
$institutionother2=$_SESSION["institutionother"];
$homeaddress2=implode(",",array_filter($_SESSION["homeaddress"]));
$destination1=implode(",",array_filter($_SESSION["destination1"]));
$VV1=$_SESSION["V1"];
$VV2=$_SESSION["V2"];
$VV3=$_SESSION["V3"];
$VV4=$_SESSION["V4"];
$VV5=$_SESSION["V5"];





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
  
	
	var x = '<?php echo $homeaddress2; ?>';
	
	

	

 
	
	
	
	var input = document.getElementById ("myText");
            input.placeholder = '<?php echo $homeaddress2; ?>';
			 input.value = '<?php echo $homeaddress2; ?>';
}



function myFunction1() {
	 $("#panel100").show();
				 $("#panel101").hide();
	
	 var y = '<?php echo $company2; ?>';
  var y1 = '<?php echo $companyother2; ?>';
	
	if(y=='NULL')
	{
	
		var input = document.getElementById ("myText");
		input.placeholder = '<?php echo $companyother2; ?>';
		 input.value = '<?php echo $companyother2; ?>';
		
	}
	else{
		
	
var input = document.getElementById ("myText");
	input.placeholder = '<?php echo $company2; ?>';
	 input.value = '<?php echo $company2; ?>';
		
	}
 
    
}


function myFunction2() {
	 $("#panel100").show();
				 $("#panel101").hide();
	
	
	
   var z = '<?php echo $institution2; ?>';
  var z1 = '<?php echo $institutionother2; ?>';
	
	if(z=='NULL')
	{
		
		var input = document.getElementById ("myText");
		input.placeholder = '<?php echo $institutionother2; ?>';
		 input.value = '<?php echo $institutionother2; ?>';
	}
	
	else
	{
		 
		  var input = document.getElementById ("myText");
		  input.placeholder = '<?php echo $institution2; ?>';
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
  
	
	var x = '<?php echo $homeaddress2; ?>';
	
	

	

 
	
	
	
	var input = document.getElementById ("myText1");

            input.placeholder = '<?php echo $homeaddress2; ?>';
			input.value = '<?php echo $homeaddress2; ?>';
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
  
	
		  
	
	
	 var input = document.getElementById ("myText1");
		  input.placeholder = '';
  	input.value = '';
	 
	
	
}


</script>
			
		 <script>
        $(document).ready(function() {
          
            $("#panel100").show();
			 $("#panel101").hide();
			 $("#panel90").show();
			 $("#panel91").hide();
			 
			 
			 
        });
        var showNext = function(ele) {
               if(ele.id == "anyotheraddress") {
                $("#panel100").hide();
				 $("#panel101").show();
            } 
			//$(".animated").removeClass("hidden animated");
			
			/*else if(ele.id == "noSupplies") {
                $("#panel100").hide();
				 $("#panel101").show();
				
				
            } */
        } 
        
    </script>
		<tr> <td class="td1">
		
		

		
		<input type="radio" name="homeaddress1" value="Home"  oninput="myFunction()" class="big")>Home</br>
    <input type="radio" name="homeaddress1" value="Work"  oninput="myFunction1()" class="big">Work</br>
	<input type="radio" name="homeaddress1" value="Institute"  oninput="myFunction2()" class="big">Educational institute</br>
	<input type="radio" name="homeaddress1" value="Other" oninput="myFunction3()" class="big">Any other please enter in the textbox below</br>
	
		  <div id="panel100" class="panel1 active1">
	<input type="text" name="startaddress2[]" class="textInput" placeholder="<?php echo $destination1; ?>" value="<?php echo $destination1; ?>" id="myText" style="width:80%;" 

value="<?php echo (isset($startaddress2)) ? $startaddress2: ''?>" 	>


</div>

<div id="panel101" class="panel1 active1">

<input type="text" name="startaddress2[]" class="textInput" placeholder="House number / Nearest street intersection" id="myText" style="width:80%;" value=""  ><br>
<input type="text" name="startaddress2[]" class="textInput" placeholder="Street name" id="myText" style="width:80%;" value=""  ><br>
<input type="text" name="startaddress2[]" class="textInput" placeholder="Locality" id="myText" style="width:80%;" value=""  ><br>
<input type="text" name="startaddress2[]" class="textInput" placeholder="Major landmark" id="myText" style="width:80%;" value=""  ><br>

</div>

		<br>
</td>
					
			
			
			<td><br>
			
			<p id="demo"> </p>

			
			
			
			
			
	</td>
			
		</tr>

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<tr>
			<td class="td1">2. Please enter the start time of this trip: </td>
			<td><input type="time" name="starttime2" class="textInput" value="<?php echo (isset($starttime2)) ? $starttime2: ''?>" id="timepicker" ></td>
		</tr>
		
		







		<tr>
			<td class="td1" colspan="2">3. Did this trip include an entry into or exit from Electronics City?  <br>
				
    <input type="radio" id="yesEntry" name="Entry2" value="yes" onclick="showNext(this)" class="big"  <?php echo ($entry2== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
    <input type="radio" id="noEntry" name="Entry2" value="no" onclick="showNext(this)" class="big"  <?php echo ($entry2== 'no') ?  "checked" : "" ;  ?>>No<br><br>
<!--
	<div class="tab-panels1">
  <ul class="tabs1">
    <li rel="panel33" class="active1">Yes</li>
    <li rel="panel34">No</li>

  </ul>
-->

  <div id="panel33" class="panel1 active1">
   

Please mark your point of entry into Electronics City on the map or choose from the options below:<br>
			<select name="pointofentry2" style="width:75%;">
		
		
		<option value="<?php  	if(empty($pointofentry2 ))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($pointofentry2)) ? $pointofentry2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($pointofentry2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($pointofentry2)) ? $pointofentry2: '';
		   
		   }?></option>
<option value="tollgate">&nbsp;  Toll Gate<br>
<option value="hp entrance">&nbsp;  HP Entrance <br>
			<option value="petrolbunk">&nbsp;  Petrol Bunk <br>
		<option value="Konappana/agrahara">&nbsp;  Konappana/Agrahara<br>
			<option value="Doddathoguru/velankani">&nbsp;  Doddathoguru/Velankani <br>
	<option value="neeladri/shi">&nbsp;  Neeladri/Shikaripalya <br>
	<option value="neeladri/shi">&nbsp;  Any other, please enter in the textbox below <br>
			</select><br><input type="text" name="entrymark2" class="textInput" value="<?php echo (isset($entrymark2)) ? $entrymark2: ''?>" style="width:75%;"><br><br><br>

<div class="tab-panels">
  <ul class="tabs">
    <li rel="panel1" class="active">Click here for map!</li>
   
   
  </ul>

  <div id="panel1" class="panel active">
  
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
        <link href="estilo.css" type="text/css" rel="stylesheet" />

        
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Zczfd7TqDheFotCy2AUS10K2Q5dNV2Q&libraries=places"></script>
     
        <script type="text/javascript" src="mapa.js"></script>
        <script type="text/javascript" src="jquery-ui.custom.min.js"></script>
    
                <fieldset>

            
            
                    <div class="campos">
                        <label for="txtEndereco">Address:</label>
                        <input type="text" id="txtEndereco" name="address2" placeholder="Enter address and submit!" value="<?php echo (isset($address2)) ? $address2: ''?>" />
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Submit" />
                    </div>

                    <div id="mapa"></div>
                    
    
                    
                    <input type="hidden" id="txtLatitude" name="latitude" />
                    <input type="hidden" id="txtLongitude" name="longitude" />

                </fieldset>
       
	

       
		<br><br>
		
		
		
		
		
		



 </div>
  


 </div>
  
  
  
  
  
  
  
  
  
  
  Please enter your estimated time of entry into/exit from electronics city:
			<input type="time" name="timeentry2" class="textInput" value="<?php echo (isset($timeentry2)) ? $timeentry2: ''?>" id="timepicker">
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </div>
  
  
  
  
  
  
  <div id="panel34" class="panel1">
    


<b> Please Proceed!! </b>

 </div>
 
	
	
	
	
	
	
	
	
	
	
	
	
<!--	</div>-->
 </td>	
		</tr>
		


		
		
		
	
		
		
	
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  


		
		
		
		
		
		

		<tr>
			<td class="td1">4. Please enter the end address for this trip. For a non-residential location, like school or restaurant, please mention name of the location (for example school or restaurant, and neighborhood). For a residential location, please mention nearby intersection or landmark, and neighborhood.(You could enter 'home' or 'work' or 'educational institute' if applicable) 
			
			
			
			
			
			
			
			</td>
			<td></td>
		</tr>
		
		
		
					<tr> <td class="td1">
		
		<input type="radio" name="homeaddress1" value="Home"  oninput="myFunction4()" class="big" )>Home</br>
    <input type="radio" name="homeaddress1" value="Work"  oninput="myFunction5()" class="big">Work</br>
	<input type="radio" name="homeaddress1" value="Institute"  oninput="myFunction6()" class="big">Educational institute</br>
	<input type="radio" name="homeaddress1" value="Other" oninput="myFunction7()" class="big">Any other please enter in the textbox below</br>
	
	<div>
	 <div id="panel90" class="panel1 active1">
	<input type="text" name="destination2[]" class="textInput" placeholder="" id="myText1" style="width:80%;" value="<?php echo (isset($destination2)) ? $destination2: ''?>"  ><br>

	
	
	</div>
<div id="panel91" class="panel1 active1">
	
	
	
	
	<input type="text" name="destination2[]" class="textInput" placeholder="House number/ Nearest street intersection" id="myText1" style="width:80%;" value=""  ><br>
		<input type="text" name="destination2[]" class="textInput" placeholder="Street name" id="myText1" style="width:80%;" value=""  ><br>
		<input type="text" name="destination2[]" class="textInput" placeholder="Locality" id="myText1" style="width:80%;" value=""  ><br>
		<input type="text" name="destination2[]" class="textInput" placeholder="Major landmark" id="myText1" style="width:80%;" value=""  ><br>
	
	</div>
	
	</div>

		<br>
</td>
					
			
			
			<td><br>
			
			<p id="demo"> </p>

			
			
			
			
			
	</td>
			
		</tr>
				
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<tr>
			<td class="td1">5. Please enter the end time of this trip:</td>
			<td><input type="time" name="endtime2" class="textInput" value="<?php echo (isset($endtime2)) ? $endtime2: ''?>" id="timepicker"></td>
		</tr>
		
	
			
		<tr>
			<td class="td1">6. Please enter the purpose this trip: <br><br>
			<select id="purposeClick" oninput="showNext(this)" name="work2"  style="width:80%;">
		
		
				<option value="<?php  	if(empty($work2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($work2)) ? $work2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($work2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($work2)) ? $work2: '';
		   
		   }?></option>
		
		
		
<option value="education"><label>Education</label> <br></option>
	 <option value="Emergency/Checkup"><label> Emergency/Checkup</label><br></option>
			<option value="maintenance"><label>Household work </label><br></option>
				<option value="leisure ">Leisure<br></option>
			<option value="Meal/Food ">Meal/Food<br></option>
		
			  <option value="returnhome"><label> Return home</label><br></option>
			    <option value="social"><label> Social</label><br></option>
             <option value="work"><label> Work</label><br></option>
            <option value="any other purpose"><label> Any other, please enter in the textbox to the right</label><br></option>
	</select>
</td>
			<td><input id="purposeNext" type="text" name="purpose2" class="textInput" value="<?php echo (isset($purpose2)) ? $purpose2: ''?>"></td>
		</tr>
		
		<tr>
			<td class="td1">7.	Please enter the primary mode of travel for this trip: <br><br>
			
			
		<select id="modeClick" oninput="showNext(this)" name="mode2"  style="width:80%;">	

		
		
				<option value="<?php  	if(empty($mode2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($mode2)) ? $mode2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($mode2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($mode2)) ? $mode2: '';
		   
		   }?></option>
		
			 <option value="Personal car" style="font-weight: bold; text-decoration: underline;"><label>Personal car:</label> <br></option>

			  <option value="personal car: self-driven"><label>Personal car: self-driven</label> <br></option>
 <option value="personal car with driver"> <label>Personal car: with driver</label> <br></option>
  <option value=" personal car:friendandfamily"><label>Personal car: driven by family member</label> <br></option>
	 <option value="twowheelerride"> <label>Two-wheeler ride: self-driven</label><br></option>
 <option value="twowheelerridefamily"> <label>Two-wheeler ride: driven by family member</label><br></option>
 
 	 <option value="Non-motorized" style="font-weight: bold; text-decoration: underline;"><label>Non-motorized:</label> <br></option>
  <option value="Walk"> <label>Walk</label><br></option>
 	   <option value="cycle"> <label>Own Bicycle</label> <br></option>
 
 
	 <option value="App-based shared transport" style="font-weight: bold; text-decoration: underline;"><label>App-based shared transport:</label> <br></option>
 <option value="ola/uber"> <label>Ola/Uber</label><br></option>
	 <option value="olashar/uberpool"> <label>Olashare/Uberpool</label> <br></option>
 <option value="Bikeshare"><label> Bikeshare such as Yulu, Pedl or other </label><br></option>
  <option value="Two-wheeler"><label> Two-wheeler share Bounce, Vogo, Drivezy or other </label><br></option>
  <option value="Rental car"><label> Rental car Zoomcar, Volercar, MylesCar or other </label><br></option>
  <option value="Carpool"><label> Carpool: QuickRide, sRide or other </label><br></option>
 


 	 <option value="Public transport" style="font-weight: bold; text-decoration: underline;"><label>Public transport:</label> <br></option>
	   <option value="bus"> <label>Bus</label> <br></option>
	   <option value="Metro"> <label>Metro</label> <br></option>
	   
	   
	   
	   

	 <option value="Office transport" style="font-weight: bold; text-decoration: underline;"><label>Office transport:</label> <br></option>
	  <option value="office car self-driven"> <label>Office car: self-driven </label><br></option>
 <option value="office car with driver"><label> Office car: with driver </label><br></option>
 <option value="officeshuttle"> <label>Office shuttle</label> <br></option>
 
	 <option value="Share rides" style="font-weight: bold; text-decoration: underline;"><label>Share rides:</label> <br></option>
  <option value="friend's car"><label> Ride in friend's car </label><br></option>
   <option value="friend's two-wheeler"><label>Ride on friend's two-wheeler </label><br></option>



 <option value="other"> <label>Any other, please enter in the textbox to the right</label> <br></option>
	 </select>
</td>




			<td><input id="modeNext" type="text" name="modefor2" class="textInput" value="<?php echo (isset($modefor2)) ? $modefor2: ''?>"></td>
		</tr>
		
		
		
		
		<tr>
			<td class="td1">8. For personal car or two-wheeler, please mention make and model if you own more than one car or two wheeler. </td>
			<td>
				<select id="vehicles" name="personalcar2"  style="width:80%;" oninput="$('[name=personalcar2]').val(this.value)">
		
		
		
				<option value="<?php  	if(empty($personalcar2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($personalcar2)) ? $personalcar2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($personalcar2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($personalcar2)) ? $personalcar2: '';
		   
		   }?></option>
	


			
			
			
			
			
			
			<?php
			
			if(empty($VV1))
			{
				echo "
			<option value='novehicles'><label> You do not have any vehicles</label> <br></option>";
			}else{
                for($i = 0; $i < sizeof($VV1); $i++){
                    echo "<option value='$MM1[$i]'><label> $VV1[$i], $MM1[$i], $MM6[$i] </label> <br></option>";
                }
			}
			?>
			
			
			
			
			
			
			
			 
			 
			 
			 
			 
			 
            <option value="any other purpose"><label> Any other, please enter in the textbox to the right</label><br></option>		
	</select><br>
			
			
			
			
			
			
			
			
			
			
			<input type="text" name="personalcar2" class="textInput" value="<?php echo (isset($personalcar2)) ? $personalcar2: ''?>"></td>
		</tr>
				
				<tr>
			<td class="td1">9. For Ola,Uber and Quickride please mention the cost:</td>
			<td><input type="text" name="olacost2" class="textInput" value="<?php echo (isset($olacost2)) ? $olacost2: ''?>" ></td>
		</tr>
				
				
						<tr>
			<td class="td1">10.If applicable, for personal vehicle users, please mention<br><br> Parking cost:  
			
	
	 
	 
	 
	 
	 
	 

	  
	 	<select id="modeClick" oninput="showNext(this)" name="parkingcost2"  style="width:80%;">	

		
				<option value="<?php  	if(empty($parkingcost2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($parkingcost2)) ? $parkingcost2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($parkingcost2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($parkingcost2)) ? $parkingcost2: '';
		   
		   }?></option>
	









		
	 
	   <option value="40"> <label>	 Less than Rs. 40</label> <br></option>

	   <option value="80"><label>Rs. 40 - Rs. 80 </label> <br></option>
	  <option value="160"><label>Rs. 120 - Rs. 160</label><br></option>
 <option value="200"> <label>Rs. 160 - Rs. 200</label><br></option>
 
   <option value="300"> <label>Rs. 200 - Rs. 300</label> <br></option>
 <option value="400"> <label>Rs. 300 or more</label><br></option>

	

<br></option>
	 </select>
	 





<br><br>
Parking time:





	 
	 
	
	 
	 
	 	<select id="modeClick" oninput="showNext(this)" name="parkingtime2"  style="width:80%;">	

		
				<option value="<?php  	if(empty($parkingtime2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($parkingtime2)) ? $parkingtime2: '';
		
		   }?>"> &nbsp; <?php  	if(empty($parkingtime2)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($parkingtime2)) ? $parkingtime2: '';
		   
		   }?></option>
	









		
	 
	   <option value="0-15">	0-15 minutes <label></label> <br></option>

	   <option value="15-30">15-30 minutes <label></label> <br></option>
	  <option value="30-1">30 minutes - 1 hour <label></label><br></option>
 <option value="1-2"> <label>1-2 hours </label><br></option>
 
   <option value="2-5"> <label> 2-5 hours </label> <br></option>
 <option value="5-8"> <label>  5-8 hour </label><br></option>
	 <option value="9"> <label> 8 hours or more</label> <br></option>

	

<br></option>
	 </select>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
</td>




			<td></td>
		</tr>
		
				
					<tr><td><input type = "hidden" name = "trackingToken" id = "trackingToken" value = "0"></td></tr>
	
			<tr><td></td><td><input type="submit" name="Submit" value="NEXT" id="register_btn3" class="Register" onclick="return OnButton1();"/></td></tr>
			<tr><td></td><td><input type="submit" name="Submit" value="Completed trips" id="register_btn3" class="Register" onclick="return OnButton2();"/></td></tr>
				
						
		
		
				
						

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
    document.form.action = "trip4.php"
	document.getElementById("trackingToken").value = "1";
    
    document.form.submit();             // Submit the page
    return true;
}


	function OnButton2()
{
    	var a = '<?php echo $farr; ?>';;
	if(a>2)
	{
		document.getElementById("trackingToken").value = "2";
		document.form.action = "trip4.php"
		
	}
	else{
		
				document.form.action = "trip4.php"
	}
	
	
	
    
    document.form.submit();             // Submit the page
    return true;
}		
			
			
			</script>	
			
			
			
			<script>
        $(document).ready(function() {
            $("#panel33").hide();
            $("#panel34").hide();
            $("#specifySource").hide();
            $("#specifyDest").hide();
            $("#modeNext").hide();
            $("#purposeNext").hide();
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
            }
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

