<?php 
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_limiter("private_no_expire");
session_start();

error_reporting(0);


// $servername = "localhost";// Connect to the daatabase
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// //Completeness algorithm check
//  if (isset($_POST['Submit'])) { 
 
// 	$totalOp = 0;
// 	$filledOp = 0;
 
// 	      if($_SESSION['prev_page1'] == 'modechoice'){
// 			$totalOp += 1;
// 			if($_POST['ddtt'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if($_POST['longer'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['travelandwait'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['travelcost'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['reliability'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['safety'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['flexibility'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['privacy'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['env'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['statussymbol'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if((isset($_POST['navigation']))||(isset($_POST['studying']))||(isset($_POST['relaxing']))||(isset($_POST['leisurereading']))||(isset($_POST['talking']))||(isset($_POST['browsing']))||(isset($_POST['contemplating']))||(isset($_POST['nothing']))||(isset($_POST['otherthan']))){
// 				$filledOp += 1;
// 			}
// 		}else if($_SESSION['prev_page1'] == 'present4'){
// 			$totalOp += 1;
// 			if(isset($_POST['WorkHome'])){
// 				$filledOp += 1;
// 				if($_POST['WorkHome'] == 'yes'){
// 					$totalOp += 1;
// 					if(isset($_POST['workfromhometime'])){
// 						$filledOp += 1;
// 					}
// 				}
// 				if($_POST['WorkHome'] == 'no'){
// 					$totalOp += 1;
// 					if(empty($_POST['workfromhomeno'])){
// 						$filledOp += 1;
// 					}
// 				}
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['Supplies'])){
// 				$filledOp += 1;
// 				if($_POST['Supplies'] == 'yes'){
// 					$totalOp += 1;
// 					if($_POST['grocery'] == 'Select'){
// 						$filledOp += 1;
// 					}
// 					$totalOp += 1;
// 					if($_POST['staples'] == 'Select'){
// 						$filledOp += 1;
// 					}
// 					$totalOp += 1;
// 					if($_POST['household'] == 'Select'){
// 						$filledOp += 1;
// 					}
// 					$totalOp += 1;
// 					if($_POST['clothes'] == 'Select'){
// 						$filledOp += 1;
// 					}
// 					$totalOp += 1;
// 					if($_POST['leisure'] == 'Select'){
// 						$filledOp += 1;
// 					}
// 					$totalOp += 1;
// 					if($_POST['zomato'] == 'Select'){
// 						$filledOp += 1;
// 					}
// 				}
// 				if($_POST['Supplies'] == 'no'){
// 					$totalOp += 1;
// 					if(empty($_POST['shoponlinetypeno'])){
// 						$filledOp += 1;
// 					}
// 				}
// 			}
// 			$totalOp += 1;
// 			if($_POST['useolauber'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if($_POST['useolapool'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if($_POST['usequickride'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if($_POST['usebounce'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if($_POST['userapido'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if($_POST['useyulu'] != 'Select'){
// 				$filledOp += 1;
// 			}
// 			if(isset($_POST['travelandwait'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['travelcost'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['reliability'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['safety'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['flexibility'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['privacy'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['env'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['statussymbol'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['family'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['friends'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['neighbors'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['colleagues'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['leader'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['filmstar'])){
// 				$filledOp += 1;
// 			}
// 			if(isset($_POST['i1'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i2'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i3'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i4'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i5'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i8'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i9'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(isset($_POST['i11'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(!empty($_POST['rank1'])){
// 				$filledOp += 1;
// 			}
// 			$totalOp += 1;
// 			if(!empty($_POST['rank2'])){
// 				$filledOp += 1;
// 			}
// 		}
// 			if($totalOp != 0)
// 				$_SESSION['optional_Op'] = ($filledOp/$totalOp);
// 			else
// 				$_SESSION['optional_Op'] = 1.0;


// 		$_SESSION['ddtt'] = $_POST['ddtt'];
// 		$_SESSION['longer'] = $_POST['longer'];
		
		
// 		 $_SESSION['travelandwait'] = $_POST['travelandwait'];
// 		  $_SESSION['travelcost'] = $_POST['travelcost'];
// 		   $_SESSION['reliability'] = $_POST['reliability'];
// 		    $_SESSION['safety'] = $_POST['safety'];
// 			 $_SESSION['flexibility'] = $_POST['flexibility'];
// 			    $_SESSION['privacy'] = $_POST['privacy'];
// 				 $_SESSION['env'] = $_POST['env'];
// 				   $_SESSION['statussymbol'] = $_POST['statussymbol'];
		
		
		
		
// 		  $_SESSION['WorkHome'] = $_POST['WorkHome'];
// 		    $_SESSION['workfromhometime'] = $_POST['workfromhometime'];
// 			  $_SESSION['workfromhomenoother'] = $_POST['workfromhomenoother'];
// 			    $_SESSION['Supplies'] = $_POST['Supplies'];
// 				  $_SESSION['grocery'] = $_POST['grocery'];
				  
				  
				  
// 				    $_SESSION['staples'] = $_POST['staples'];
// 					  $_SESSION['household'] = $_POST['household'];
// 					    $_SESSION['clothes'] = $_POST['clothes'];
// 						  $_SESSION['leisure'] = $_POST['leisure'];
// 						  $_SESSION['zomato']=$_POST['zomato'];
						  
						  
						  
		                                        
// $slides = array('r111','r222','r3','r4','r5','r6','r7','r8','r9','r10','r11','r12','r13','r14','r15','r16','r17','r18','r19','r20','r21','r22','r23','dn1','dn2','dn3','dn4','dn5','dn6','dn7','dn8','dn9','dn10','dn11','dn12','dn13','dn14','dn15','dn16');
     
// foreach($slides as $x){
//     if(isset($_POST[$x]))
//         $_SESSION[$x] = $_POST[$x];
//     else
//         $_SESSION[$x] = NULL;
// }
												
												
	
	
	
	
	
	
	
//   $_SESSION['useolauber'] = $_POST['useolauber'];
//   $_SESSION['useolapool'] = $_POST['useolapool'];
//   $_SESSION['usequickride'] = $_POST['usequickride'];
//   $_SESSION['usebounce'] = $_POST['usebounce']; 
//   $_SESSION['userapido'] = $_POST['userapido'];
//   $_SESSION['useyulu'] = $_POST['useyulu']; 
//   $_SESSION['family'] = $_POST['family'];
//   $_SESSION['friends'] = $_POST['friends']; 
//   $_SESSION['neighbors'] = $_POST['neighbors'];
//   $_SESSION['colleagues'] = $_POST['colleagues']; 
//   $_SESSION['leader'] = $_POST['leader'];
//   $_SESSION['filmstar'] = $_POST['filmstar'];

  
// $_SESSION['i1'] = $_POST['i1'];
// $_SESSION['i2'] = $_POST['i2'];
// $_SESSION['i3'] = $_POST['i3'];
// $_SESSION['i4'] = $_POST['i4'];
// $_SESSION['i5'] = $_POST['i5'];

// $_SESSION['i8'] = $_POST['i8'];
// $_SESSION['i9'] = $_POST['i9'];



// $_SESSION['i11'] = $_POST['i11'];
												
												

// $_SESSION['studying'] = $_POST['studying'];
// $_SESSION['relaxing'] = $_POST['relaxing'];
// $_SESSION['leisurereading'] = $_POST['leisurereading'];
// $_SESSION['talking'] = $_POST['talking'];
// $_SESSION['browsing'] = $_POST['browsing'];
// $_SESSION['contemplating'] = $_POST['contemplating'];
// $_SESSION['nothing'] = $_POST['nothing'];
// $_SESSION['leisurecalling'] = $_POST['leisurecalling'];
// $_SESSION['otherthan'] = $_POST['otherthan'];

	

	
// $_SESSION['studyingp'] = $_POST['studyingp'];
// $_SESSION['relaxingp'] = $_POST['relaxingp'];
// $_SESSION['leisurereadingp'] = $_POST['leisurereadingp'];
// $_SESSION['talkingp'] = $_POST['talkingp'];
// $_SESSION['browsingp'] = $_POST['browsingp'];
// $_SESSION['contemplatingp'] = $_POST['contemplatingp'];
// $_SESSION['nothingp'] = $_POST['nothingp'];
// $_SESSION['leisurecallingp'] = $_POST['leisurecallingp'];
// $_SESSION['otherthanp'] = $_POST['otherthanp'];
										
												
												
		
// 		if(!empty($_POST['rank1'])) {
//   $i = 0;
//   foreach($_POST['rank1'] as $x){
//    $_SESSION["rank1"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["rank1ArraySize"] = $i; //store the number of 'modes'
// }

	
// 		if(!empty($_POST['rank2'])) {
//   $i = 0;
//   foreach($_POST['rank2'] as $x){
//    $_SESSION["rank2"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["rank2ArraySize"] = $i; //store the number of 'modes'
// }											
												
												
												
												
												
												
												
		
	

  
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
// 	// store the valus from future, mode choice and emerging modes page
 
 
// $stmt = $conn->prepare("UPDATE users3 SET WorkHome = :WorkHome,workfromhometime = :workfromhometime,workfromhomenoother = :workfromhomenoother,Supplies = :Supplies,grocery = :grocery,
 
//  staples = :staples,household = :household,clothes = :clothes,leisure = :leisure,
 
 
//  workfromhomeno = :workfromhomeno_string,shoponlinetypeno = :shoponlinetypeno_string,shoponlinetypenoother = :shoponlinetypenoother,
 




// ddtt =:ddtt,longer =:longer,

//  travelandwait =:travelandwait,travelcost =:travelcost,reliability =:reliability,safety =:safety,flexibility =:flexibility,privacy =:privacy,env =:env,statussymbol =:statussymbol,
 
 
//  r111 =:r111,r222 =:r222,r3 =:r3,r4 =:r4,r5 =:r5,
 
//  r6 =:r6,r7 =:r7,r8 =:r8,r9 =:r9,r10 =:r10,
 
//  r11 =:r11,r12 =:r12,r13 =:r13,r14 =:r14,r15 =:r15,
 
//  r16 =:r16,r17 =:r17,r18 =:r18,r19 =:r19,r20 =:r20,
 
//  r21 =:r21,r22 =:r22,r23 =:r23,
 
//   dn1 =:dn1,dn2 =:dn2,dn3 =:dn3,dn4 =:dn4,dn5 =:dn5,
 
//  dn6 =:dn6,dn7 =:dn7,dn8 =:dn8,dn9 =:dn9,dn10 =:dn10,
 
//  dn11 =:dn11,dn12 =:dn12,dn13 =:dn13,dn14 =:dn14,dn15 =:dn15,
 
//  dn16 =:dn16,
 
	   	 
 
//  useolauber =:useolauber,useolapool =:useolapool,usequickride =:usequickride,usebounce =:usebounce,userapido =:userapido,useyulu =:useyulu,
//  family =:family,friends =:friends,neighbors =:neighbors,colleagues =:colleagues,leader =:leader,filmstar =:filmstar,
 

//  i1 =:i1,i2 =:i2,i3 =:i3,i4 =:i4,i5 =:i5,i8 =:i8,i9 =:i9,
 
//  i11 =:i11,
 
 
//   studying =:studying, relaxing =:relaxing, leisurereading =:leisurereading, talking =:talking,
  
//    browsing =:browsing, contemplating =:contemplating, nothing =:nothing, leisurecalling =:leisurecalling, otherthan =:otherthan,
   

	
// 	studyingp =:studyingp, relaxingp =:relaxingp, leisurereadingp =:leisurereadingp, talkingp =:talkingp,
  
//    browsingp =:browsingp, contemplatingp =:contemplatingp, nothingp =:nothingp, leisurecallingp =:leisurecallingp, otherthanp =:otherthanp,
   
 
	
	
 
//  rank1 = :rank1_string,rank2 = :rank2_string
 
 
 
 
 
//  WHERE id = :id");


 
 
 
 




// if(!empty($_POST['workfromhomeno'])) {
//   $i = 0;
//   foreach($_POST['workfromhomeno'] as $x){
//    $_SESSION["workfromhomeno"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["workfromhomenoArraySize"] = $i; //store the number of 'modes'
// }



// if(!empty($_POST['shoponlinetypeno'])) {
//   $i = 0;
//   foreach($_POST['shoponlinetypeno'] as $x){
//    $_SESSION["shoponlinetypeno"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["shoponlinetypenoArraySize"] = $i; //store the number of 'modes'
// }


// $_SESSION['shoponlinetypenoother'] = $_POST['shoponlinetypenoother'];	











// $stmt->bindParam(':id', $id);








	
	
// 	   $stmt->bindParam(':WorkHome', $WorkHome);
// 	      $stmt->bindParam(':workfromhometime', $workfromhometime);
// 		     $stmt->bindParam(':workfromhomenoother', $workfromhomenoother);
// 			    $stmt->bindParam(':Supplies', $Supplies);
// 				   $stmt->bindParam(':grocery', $grocery);
				   
				   
				   
// 				      $stmt->bindParam(':workfromhomeno_string', $workfromhomeno_string);
				
// 						    $stmt->bindParam(':shoponlinetypeno_string', $shoponlinetypeno_string);
// 				   		    $stmt->bindParam(':shoponlinetypenoother', $shoponlinetypenoother);
				   
				   
				   
				   
	

				   
				   
// 				      $stmt->bindParam(':staples', $staples);
// 					     $stmt->bindParam(':household', $household);
// 						    $stmt->bindParam(':clothes', $clothes);
// 							   $stmt->bindParam(':leisure', $leisure);
							     

// 		     $stmt->bindParam(':ddtt', $ddtt);
// 			 	     $stmt->bindParam(':longer', $longer);
	
// 	   $stmt->bindParam(':travelandwait', $travelandwait);
// 	      $stmt->bindParam(':travelcost', $travelcost);
// 		     $stmt->bindParam(':reliability', $reliability);
// 			    $stmt->bindParam(':safety', $safety);
// 				   $stmt->bindParam(':flexibility', $flexibility);
					  
// 						    $stmt->bindParam(':privacy', $privacy);
// 							   $stmt->bindParam(':env', $env);
// 								     $stmt->bindParam(':statussymbol', $statussymbol);
									 
// 									  $stmt->bindParam(':useolauber', $useolauber);
// 									   $stmt->bindParam(':useolapool', $useolapool);
// 									    $stmt->bindParam(':usequickride', $usequickride);
// 										 $stmt->bindParam(':usebounce', $usebounce);
// 										  $stmt->bindParam(':userapido', $userapido);
// 										   $stmt->bindParam(':useyulu', $useyulu);
										   
// 										    $stmt->bindParam(':family', $family);
// 											 $stmt->bindParam(':friends', $friends);
// 											  $stmt->bindParam(':neighbors', $neighbors);
// 											   $stmt->bindParam(':colleagues', $colleagues);
// 											    $stmt->bindParam(':leader', $leader);
// 												 $stmt->bindParam(':filmstar', $filmstar);
	
	
	
	
	
	
	
// 		 	 $stmt->bindParam(':studying', $studying);
// 			 	 $stmt->bindParam(':relaxing', $relaxing);
// 				 	 $stmt->bindParam(':leisurereading', $leisurereading);
// 					 	 $stmt->bindParam(':talking', $talking);
// 						 	 $stmt->bindParam(':browsing', $browsing);
// 							 	 $stmt->bindParam(':contemplating', $contemplating);
// 								 	 $stmt->bindParam(':nothing', $nothing);
// 									 	 $stmt->bindParam(':leisurecalling', $leisurecalling);
// 										 	 $stmt->bindParam(':otherthan', $otherthan);
										
												 
												 
												
// 		 	 $stmt->bindParam(':studyingp', $studyingp);
// 			 	 $stmt->bindParam(':relaxingp', $relaxingp);
// 				 	 $stmt->bindParam(':leisurereadingp', $leisurereadingp);
// 					 	 $stmt->bindParam(':talkingp', $talkingp);
// 						 	 $stmt->bindParam(':browsingp', $browsingp);
// 							 	 $stmt->bindParam(':contemplatingp', $contemplatingp);
// 								 	 $stmt->bindParam(':nothingp', $nothingp);
// 									 	 $stmt->bindParam(':leisurecallingp', $leisurecallingp);
// 										 	 $stmt->bindParam(':otherthanp', $otherthanp);
											 
												 
		

				
												 
	
	
	
	
	
// 	$stmt->bindParam(':rank1_string', $rank1_string);
// 	$stmt->bindParam(':rank2_string', $rank2_string);
	
	
//  $stmt->bindParam(':r111', $r111);
//  $stmt->bindParam(':r222', $r222);
//  $stmt->bindParam(':r3', $r3);
//  $stmt->bindParam(':r4', $r4);
//  $stmt->bindParam(':r5', $r5); 
	
// 	 $stmt->bindParam(':r6', $r6);
//  $stmt->bindParam(':r7', $r7);
//  $stmt->bindParam(':r8', $r8);
//  $stmt->bindParam(':r9', $r9);
//  $stmt->bindParam(':r10', $r10);
 
 
//   $stmt->bindParam(':r11', $r11);
//  $stmt->bindParam(':r12', $r12);
//  $stmt->bindParam(':r13', $r13);
//  $stmt->bindParam(':r14', $r14);
//  $stmt->bindParam(':r15', $r15);
 
//   $stmt->bindParam(':r16', $r16);
//  $stmt->bindParam(':r17', $r17);
//  $stmt->bindParam(':r18', $r18);
//  $stmt->bindParam(':r19', $r19);
//  $stmt->bindParam(':r20', $r20);
 
//   $stmt->bindParam(':r21', $r21);
//  $stmt->bindParam(':r22', $r22);
//  $stmt->bindParam(':r23', $r23);
 

// 	 $stmt->bindParam(':dn1', $dn1);
//  $stmt->bindParam(':dn2', $dn2);
//  $stmt->bindParam(':dn3', $dn3);
//  $stmt->bindParam(':dn4', $dn4);
//  $stmt->bindParam(':dn5', $dn5); 
	
// 	 $stmt->bindParam(':dn6', $dn6);
//  $stmt->bindParam(':dn7', $dn7);
//  $stmt->bindParam(':dn8', $dn8);
//  $stmt->bindParam(':dn9', $dn9);
//  $stmt->bindParam(':dn10', $dn10);
 
 
//   $stmt->bindParam(':dn11', $dn11);
//  $stmt->bindParam(':dn12', $dn12);
//  $stmt->bindParam(':dn13', $dn13);
//  $stmt->bindParam(':dn14', $dn14);
//  $stmt->bindParam(':dn15', $dn15);
 
//   $stmt->bindParam(':dn16', $dn16);

	
// 	 $stmt->bindParam(':i1', $i1);
//  $stmt->bindParam(':i2', $i2);
//  $stmt->bindParam(':i3', $i3);
//  $stmt->bindParam(':i4', $i4);
//  $stmt->bindParam(':i5', $i5); 
	
//  $stmt->bindParam(':i8', $i8);
//  $stmt->bindParam(':i9', $i9);
 
 
//   $stmt->bindParam(':i11', $i11);
	
	
	

// $id= $_SESSION['id'];





// $WorkHome= $_SESSION['WorkHome'];
// $workfromhometime= $_SESSION['workfromhometime'];
// $workfromhomenoother= $_SESSION['workfromhomenoother'];
// $Supplies= $_SESSION['Supplies'];
// $grocery= $_SESSION['grocery'];


// $staples= $_SESSION['staples'];
// $household= $_SESSION['household'];
// $clothes= $_SESSION['clothes'];
// $leisure= $_SESSION['leisure'];




// $ddtt= $_SESSION['ddtt'];
// $longer= $_SESSION['longer'];
// $travelandwait= $_SESSION['travelandwait'];
// $travelcost= $_SESSION['travelcost'];
// $reliability= $_SESSION['reliability'];
// $safety= $_SESSION['safety'];
// $flexibility= $_SESSION['flexibility'];


// $privacy= $_SESSION['privacy'];
// $env= $_SESSION['env'];
// $statussymbol= $_SESSION['statussymbol'];



// $useolauber= $_SESSION['useolauber'];
// $useolapool= $_SESSION['useolapool'];
// $usequickride= $_SESSION['usequickride'];
// $usebounce= $_SESSION['usebounce'];
// $userapido= $_SESSION['userapido'];
// $useyulu= $_SESSION['useyulu'];


// $family= $_SESSION['family'];
// $friends= $_SESSION['friends'];
// $neighbors= $_SESSION['neighbors'];
// $colleagues= $_SESSION['colleagues'];
// $leader= $_SESSION['leader'];
// $filmstar= $_SESSION['filmstar'];









// $r111= $_SESSION['r111'];
// $r222= $_SESSION['r222'];
// $r3= $_SESSION['r3'];
// $r4= $_SESSION['r4'];
// $r5= $_SESSION['r5'];

// $r6= $_SESSION['r6'];
// $r7= $_SESSION['r7'];
// $r8= $_SESSION['r8'];
// $r9= $_SESSION['r9'];
// $r10= $_SESSION['r10'];

// $r11= $_SESSION['r11'];
// $r12= $_SESSION['r12'];
// $r13= $_SESSION['r13'];
// $r14= $_SESSION['r14'];
// $r15= $_SESSION['r15'];

// $r16= $_SESSION['r16'];
// $r17= $_SESSION['r17'];
// $r18= $_SESSION['r18'];
// $r19= $_SESSION['r19'];
// $r20= $_SESSION['r20'];

// $r21= $_SESSION['r21'];
// $r22= $_SESSION['r22'];
// $r23= $_SESSION['r23'];



// $dn1= $_SESSION['dn1'];
// $dn2= $_SESSION['dn2'];
// $dn3= $_SESSION['dn3'];
// $dn4= $_SESSION['dn4'];
// $dn5= $_SESSION['dn5'];

// $dn6= $_SESSION['dn6'];
// $dn7= $_SESSION['dn7'];
// $dn8= $_SESSION['dn8'];
// $dn9= $_SESSION['dn9'];
// $dn10= $_SESSION['dn10'];

// $dn11= $_SESSION['dn11'];
// $dn12= $_SESSION['dn12'];
// $dn13= $_SESSION['dn13'];
// $dn14= $_SESSION['dn14'];
// $dn15= $_SESSION['dn15'];

// $dn16= $_SESSION['dn16'];









// $i1= $_SESSION['i1'];
// $i2= $_SESSION['i2'];
// $i3= $_SESSION['i3'];

// $i4= $_SESSION['i4'];
// $i5= $_SESSION['i5'];



// $i8= $_SESSION['i8'];
// $i9= $_SESSION['i9'];


// $i11= $_SESSION['i11'];






// $studying= $_SESSION['studying'];
// $relaxing= $_SESSION['relaxing'];
// $leisurereading= $_SESSION['leisurereading'];
// $talking= $_SESSION['talking'];
// $browsing= $_SESSION['browsing'];
// $contemplating= $_SESSION['contemplating'];
// $nothing= $_SESSION['nothing'];
// $leisurecalling= $_SESSION['leisurecalling'];
// $otherthan= $_SESSION['otherthan'];



// $studyingp= $_SESSION['studyingp'];
// $relaxingp= $_SESSION['relaxingp'];
// $leisurereadingp= $_SESSION['leisurereadingp'];
// $talkingp= $_SESSION['talkingp'];
// $browsingp= $_SESSION['browsingp'];
// $contemplatingp= $_SESSION['contemplatingp'];
// $nothingp= $_SESSION['nothingp'];
// $leisurecallingp= $_SESSION['leisurecallingp'];
// $otherthanp= $_SESSION['otherthanp'];






















	


// $r1 = [];
// $r2 = [];



// $i = 0;
		

		
// 			for($i = 0;$i<$_SESSION["rank1ArraySize"];$i++) {
// 		$r1[$i]=$_SESSION['rank1'][$i];
// 		}
		
// 		$rank1_string = implode(",",$r1);
		
// 			for($i = 0;$i<$_SESSION["rank2ArraySize"];$i++) {
// 		$r2[$i]=$_SESSION['rank2'][$i];
// 		}
		
// 		$rank2_string = implode(",",$r2);
		
	
		
		
		
	



// 	$yst = [];
// 		$nst = [];
		
// $wfhn = [];

// $sotn =[];






// $i = 0;
		

		
		
		
// 		for($i = 0;$i<$_SESSION["workfromhomenoArraySize"];$i++) {
// 		$wfhn[$i]=$_SESSION['workfromhomeno'][$i];
// 		}
		
// 		$workfromhomeno_string = implode(",",$wfhn);
		
		
		

		
// 		$shoponlinetypenoother= $_SESSION['shoponlinetypenoother'];

		
// 		for($i = 0;$i<$_SESSION["shoponlinetypenoArraySize"];$i++) {
// 		$sotn[$i]=$_SESSION['shoponlinetypeno'][$i];
// 		}
		
// 		$shoponlinetypeno_string = implode(",",$sotn);
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
	


// $stmt->execute();


//  }
 
//  include 'header.php';
//  /* Attempt MySQL server connection. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
//  $username= $_SESSION['username'];
// // Attempt select query execution
// $sql = "SELECT email FROM users3 WHERE username='$username'";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){

//         while($row = mysqli_fetch_array($result)){
            
           
			
     
	 
// 	 $email=$row['email'];
// 	 $email1=$row['email1'];
	 
	 
	 
	 
	 
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
			window.location.href = '<?php if(!isset($_SESSION['prev_page1']))
											echo 'future.php';
										  else if($_SESSION['prev_page1'] == 'modechoice')
											echo 'modechoicequestions.php';
										  else if($_SESSION['prev_page1'] == 'present4')
											echo 'present4.php';?>';
		}
	</script>
	<?php
			if($_SESSION['optional_Op'] < 0.8){
				echo "
					<br><br>
					<div style='text-align:center'>You have not answered some questions in the previous page. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>
	<h3 class="heading">
									 <br><h3 class="heading">
									<U> DAILY TRIP INFORMATION*</U>
									 

</h3>


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
					   </style>
					     





    <script>
        $(document).ready(function() {
            $("#panel27").hide();
            $("#panel28").hide();
            $("#panel8").hide();
            $("#panel9").hide();
            $("#panel5").hide();
            $("#panel6").hide();
            $("#panel90").hide();
			 $("#panel91").hide();
            $("#panel100").hide();
			 $("#panel101").hide();
			 $(".animated").removeClass("hidden animated");
        });
        var showNext = function(ele) {
            if(ele.id == "yesKnown") {
                $("#panel27").show();
                $("#panel28").hide();
            } else if(ele.id == "noKnown") {
                $("#panel27").hide();
                $("#panel28").show();
            } else if(ele.id == "yesMetro") {
                $("#panel8").show();
                $("#panel9").hide();
            } else if(ele.id == "noMetro") {
                $("#panel8").hide();
                $("#panel9").show();
            }  else if(ele.id == "yesWorkHome") {
                $("#panel90").show();
                $("#panel91").hide();
            } else if(ele.id == "noWorkHome") {
                $("#panel90").hide();
                $("#panel91").show();
				
             } else if(ele.id == "yesSupplies") {
                $("#panel100").show();
				 $("#panel101").hide();
            } else if(ele.id == "noSupplies") {
                $("#panel100").hide();
				 $("#panel101").show();
				
				
            } 
        } 
        
    </script>


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
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: red;
}


</style>


                      <style>
					   @media only screen and (max-width: 480px){
						      #center_mobile{
        display: block;
        padding-left: 15px;
    }
    #center_title{
        display: none;
    }
    #institute_title{
        display: none;
    }
	 #center_tab{
        display: none;
    }
						 #mobile_text{
        padding-top:8px;
		font-size:15px;
    }   
						   
						   
					   }
					   
					   
					   @media only screen and (min-width: 481px){
						   
						       #center_mobile{
        display: none;
    }
	 #center_tab{
        display: none;
    }
    #center_title{
        display: block;
    }
    #institute_title{
        display: block;
	}	   
						   
					   }
					   
					
   @media only screen and (max-width: 720px) and (min-width: 480px){
						   
						       #center_mobile{
        display: none;
    }
							       #center_title{
        display: none;
    }
    #center_tab{
        display: block;
    }
    #institute_tab{
        display: block;
	}	   
						   
					   }
					   
    .ques{
        background:#f2f2f2;
        margin-left: 50px;
        margin-right: 50px;
    }
    
    .ques:hover{
        background:#ccc;
    }













					</style>


















<br>
<form action="thankyou.php" method="post" class="form" align="left" name="form" style='font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;'>
    <div id="center_mobile" class="navbar-caption" href="#top"><span style="font-size: 20px;" ></style>
						
		<br><br>We will now request you to download the <b>emTripLog</b> app <img class="image1" src="assets/images/emTripLog.jpg"  width="10%" >  which logs all your trips to help inform us about overall trip patterns and hence traffic at different times of the day. For more details on how the app functions, please <a style="color: #4277f4;padding:0px;" href="http://elcitasurvey.cistup.iisc.ac.in/test4/elcitasurveyfinal/disclaimer.php" style='color: #4277f4;'>click here</a>.
<br><br>
<div>
 <span style="display: block;">1. Please download emTripLog from Play Store (Android users) or from App Store (iOS users). After downloading, you will reach the following page.<br>
</span><br>
 <img class="image3" src="assets/images/log1.png"><br><br>
</div>
<div>
<span style="display: block;">
2. As directed on the mobile screen, if you are in front of your <b>computer</b>, please scan the QR code on the right. 
If you are installing with just your <b>phone</b>, and no computer, please open the survey link (elcitasurvey.cistup.iisc.ac.in) on a browser. When you come to the current (Daily Trip Information) page, click the link below.<br>
<a href ="emission://change_client?new_client=cistupec&clear_local_storage=true&clear_usercache=true" style='color: #4277f4;'> Click Here to Setup the App! </a>
</span><br>
<img class="image3" src="qrcode.png"  width="20%" >
</div>
<br>
3. Once the UI-only update download is complete, please select ok for all the notifications and questions. For permission to access your location, please select “Always” and NOT “Only while using the app”. 
<br><br>
4. You will need a valid gmail address to log in to the app. That gmail address will be your user id for this app. If you are not comfortable sharing your regular gmail address, you can create a temporary one to use for this platform. 
<br><br>
<b><span style="color:red;font-size:25px;">IMPORTANT</span>: Please enter the gmail address you used to log into emTripLog IN THE TEXTBOX BELOW.</b> It will help us link your app data to your survey input.
<input name="email" style="border:1px solid black;margin: 5px auto;width: 50%;display:block;height:50px;" value="<?php echo (isset($email))?$email:''?>" placeholder="Same Gmail Address Please!!!!"><br><br>

<div>
<span style="display: block;">
5. The first page of your app should look like this after login. 
<br><br><br>
emTripLog is now ready to log your trips. 
</span><bR>
<img class="image3" src="assets/images/firstpage.jpg"  width="20%" ><br>
</div>
<br>
<div>
<span style="display: block;">
<b>During the survey</b>: Please keep emTripLog on your phone for at least <b>72 hours</b>. We request you to pull up your trips by clicking on the Trips icon on the lower left corner of the page and select primary mode and purpose for each trip *<b>once every day</b>*. Please ensure the mode or purpose is selected with a tick ✔ mark.
</span><br>
<img class="image3" src="assets/images/log4.png"  width="20%" >
</div>
<bR><bR>




<br><br>


				

						 


                    </div>
					
  <div id="center_title" class="navbar-caption" href="#top"><span style="font-size: 20px; text-align: centre;" ></style>
						
				
<br><br><span style="display: block;float: left;margin-left: 50px;margin-left: 50px;margin-right: 50px;text-align: justify;">We will now request you to download the <b>emTripLog</b> app <img class="image1" src="assets/images/emTripLog.jpg"  width="10%" >  which logs all your trips to help inform us about overall trip patterns and hence traffic at different times of the day. For more details on how the app functions, please <a style="color: #4277f4;padding:0px;" href="http://elcitasurvey.cistup.iisc.ac.in/test4/elcitasurveyfinal/disclaimer.php" style='color: #4277f4;'>click here</a>.</span>
<br><br>
<div>
 <span style="width: 50%;display: block;float: left;margin-left: 70px;text-align: justify;"><br>1. Please download emTripLog from Play Store (Android users) or from App Store (iOS users). After downloading, you will reach the following page.<br>
</span>
 <img class="image3" src="assets/images/log1.png"><br><br>
</div>
<div>
<span style="width: 50%;display: block;float: left;margin-left: 70px;text-align: justify;">
2. As directed on the mobile screen, if you are in front of your <b>computer</b>, please scan the QR code on the right. 
If you are installing with just your <b>phone</b>, and no computer, please open the survey link (elcitasurvey.cistup.iisc.ac.in) on a browser. When you come to the current (Daily Trip Information) page, click the link below.<br>
<a href ="emission://change_client?new_client=cistupec&clear_local_storage=true&clear_usercache=true" style='color: #4277f4;'> Click Here to Setup the App! </a>
</span>
<img class="image3" src="qrcode.png"  width="20%" >
</div>
<br>
<span style="display: block;float: left;margin-left: 70px;margin-right: 70px;text-align: justify;">3. Once the UI-only update download is complete, please select ok for all the notifications and questions. For permission to access your location, please select “Always” and NOT “Only while using the app”. </span>
<br><br>
<span style="display: block;float: left;margin-left: 70px;margin-right: 70px;text-align: justify;"><br>4. You will need a valid gmail address to log in to the app. That gmail address will be your user id for this app. If you are not comfortable sharing your regular gmail address, you can create a temporary one to use for this platform. </span>
<br><br><br>
<div class='ques' style="margin-top:40px;padding-bottom:10px;padding-top:10px;">
<b><span style="color:red;font-size:25px;text-align: justify;">IMPORTANT</span>: Please enter the gmail address you used to log into emTripLog IN THE TEXTBOX BELOW.</b> It will help us link your app data to your survey input.
<input name="email1" style="border:1px solid black;margin: 5px auto;width: 50%;display:block;height:50px;" value="<?php echo (isset($email1))?$email1:''?>" placeholder="Same Gmail Address Please!!!!">
</div>
<div>
<br>
<span style="width: 50%;display: block;float: left;margin-left: 70px;text-align: justify;">
5. The first page of your app should look like this after login. 
<br>
emTripLog is now ready to log your trips. 
</span>
<img class="image3" src="assets/images/firstpage.jpg"  width="20%" ><br>
</div>
<br>
<div>
<span style="width: 50%;display: block;float: left;margin-left: 70px;text-align: justify;">
<b>During the survey</b>: Please keep emTripLog on your phone for at least <b>72 hours</b>. We request you to pull up your trips by clicking on the Trips icon on the lower left corner of the page and select primary mode and purpose for each trip *<b>once every day</b>*. Please ensure the mode or purpose is selected with a tick ✔ mark.
</span>
<img class="image3" src="assets/images/log4.png"  width="20%" >
</div>
<br><br>




<br><br>





  
  </div>
  
  

   



<td class="td1"><div class="Register Back" onclick="go_back()">Previous Page</div></td><td><input type="submit" name="Submit" value="Next Page" id="register_btn3" class="Register" onclick="return OnButton1();"/>
		


  
  
  
  
  
  
  
  

    


 
 





<br><BR>
 

 </div>
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
	
    document.form.action = "thankyou.php"
    
    document.form.submit();             // Submit the page
    return true;
}

	function OnButton2()
{
    	//var a = '<?php echo '$_SESSION["far"];'?>';
	
	//if(a>2)
	//{
		document.form.action = "future.php"
		
	//}
	//else{
		
	//			document.form.action = "present4.php"
	//}
	
	
	
    
    document.form.submit();             // Submit the page
    return true;
}		
			
			
			</script>











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

