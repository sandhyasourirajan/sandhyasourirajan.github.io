<?php
session_start();
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_cache_limiter("private_no_expire");
include 'header.php';

error_reporting(1);

 
//  $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//   if (isset($_POST['Submit'])) { 
 
 


 
 
 
 


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
//  ?>
// <?php 

 


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
            
           
			
//      	 $op_page=$row['op_page'];
// 	 $WorkHome=$row['WorkHome'];
// 	 	 $workfromhomenoother=$row['workfromhomenoother'];
// 	 $workfromhometime=$row['workfromhometime'];
// 	  $workfromhomeno=$row['workfromhomeno'];
// 	   $a=explode(",",$workfromhomeno);
// 	   $workfromhometimenoother=$row['workfromhometimenoother'];
// 	    $Supplies=$row['Supplies'];
// 		 $shoponlinetype=$row['shoponlinetype'];
// 		    $b=explode(",",$shoponlinetype);
		 
// 		 $shoponlinetypeno=$row['shoponlinetypeno'];
// 		   $c=explode(",",$shoponlinetypeno);
		 
// 		  $grocery=$row['grocery'];
// 		   $staples=$row['staples'];
// 		    $household=$row['household'];
// 			 $clothes=$row['clothes'];
// 	 $leisure=$row['leisure'];
// 			 $zomato=$row['zomato'];
// 			 $shoponlinetypenoother=$row['shoponlinetypenoother'];
// 			$useolauber = $row['useolauber'];
// 			$useolapool = $row['useolapool'];
// 			$usequickride = $row['usequickride'];
// 			$usebounce = $row['usebounce'];
// 			$userapido = $row['userapido'];
// 			$useyulu = $row['useyulu'];
// 			$travelandwait = $row['travelandwait'];
// 			$travelcost = $row['travelcost'];
// 			$reliability = $row['reliability'];
// 			$safety = $row['safety'];
// 			$flexibility = $row['flexibility'];
// 			$privacy = $row['privacy'];
// 			$env = $row['env'];
// 			$statussymbol = $row['statussymbol'];
// 			$filmstar = $row['filmstar'];
// 			$leader = $row['leader'];
// 			$colleagues = $row['colleagues'];
// 			$neighbors = $row['neighbors'];
// 			$friends = $row['friends'];
// 			$family = $row['family'];
// 			$i11 = $row['i11'];
// 			$i9 = $row['i9'];
// 			$i8 = $row['i8'];
// 			$i5 = $row['i5'];
// 			$i4 = $row['i4'];
// 			$i3 = $row['i3'];
// 			$i2 = $row['i2'];
// 			$i1 = $row['i1'];
// 			$d=explode(",",$row['rank1']);
// 			$e=explode(",",$row['rank2']);
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
$_SESSION['prev_page1'] = 'present4';
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="/test4/2611/js/jquery.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery1.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery2.js" type="text/javascript"></script>
<script src="/test4/2611/js/jquery3.js" type="text/javascript"></script>
<!--
<script src="/1412/js/jquery.js" type="text/javascript"></script>
<script src="/1412/js/jquery1.js" type="text/javascript"></script>
<script src="/1412/js/jquery2.js" type="text/javascript"></script>
<script src="/1412/js/jquery3.js" type="text/javascript"></script>
-->
  <?php
$db=mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
	


			
		
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



echo "latitude ".$_SESSION["latitude"];echo "<br> ";
echo "longitude ".$_SESSION["longitude"];echo "<br> ";
$lat=$_SESSION["homelatitude"];
$long=$_SESSION["homelongitude"];
echo "$lat";
echo "$long";
?>
<script>

var metro_list = [
  {
    "name": "Sir M Vishveshwaraih",
    "landmarks": [ "UVCE", "K R Circle" ],
    "lat": 12.974154,
    "long": 77.584261
  },
  {
    "name": "Dr.B.R Ambedkar station, Vidhan Soudha",
    "landmarks": [ "Vidhana Soudha", "High Court of Karnataka" ],
    "lat": 12.979532,
    "long": 77.592752
  },
  {
    "name": "Cubbon Park",
    "landmarks": [ "Cubbon Park", "Chinnaswamy Cricket Stadium" ],
    "lat": 12.980898,
    "long": 77.597074
  },
  {
    "name": "M G Road",
    "landmarks": [ "Manekshaw Parade grounds", "Sub-registrar office" ],
    "lat": 12.975248,
    "long": 77.60647
  },
  {
    "name": "Trinity",
    "landmarks": [ "INOX Lido Mall", "Trinity Church" ],
    "lat": 12.97259,
    "long": 77.617031
  },
  {
    "name": "Halasuru",
    "landmarks": [ "Subramanya Swamy Temple", "Police quarters" ],
    "lat": 12.974955,
    "long": 77.62659
  },
  {
    "name": "Indiranagar",
    "landmarks": [ "KFC 100 feet road", "CMH Park" ],
    "lat": 12.977854,
    "long": 77.638611
  },
  {
    "name": "Swami Vivekanand Road",
    "landmarks": [ "Resurrection Church", "Sampurna Monfort College" ],
    "lat": 12.985598,
    "long": 77.645263
  },
  {
    "name": "Baiyyappanahalli",
    "landmarks": [ "Baiyappanahalli police station" ],
    "lat": 12.990512,
    "long": 77.652627
  },
  {
    "name": "Mysore Road",
    "landmarks": [ "BHEL" ],
    "lat": 12.946674,
    "long": 77.530107
  },
  {
    "name": "Deepanjali Nagar",
    "landmarks": [ "BLR Depot garage", "Deepanjali Nagar Post Office" ],
    "lat": 12.952002,
    "long": 77.537251
  },
  {
    "name": "Attiguppe",
    "landmarks": [ "Maruthi Mandira", "BMTC Garage Bus Station" ],
    "lat": 12.961805,
    "long": 77.533865
  },
  {
    "name": "Vijaya Nagar",
    "landmarks": [ "Vijay Nagar BMTC Bus Station", "Vijay nagar Post office" ],
    "lat": 12.970431,
    "long": 77.5376
  },
  {
    "name": "Hosahalli",
    "landmarks": [ "Gayatri Hospital", "Viajaynagar Tollgate Busstop" ],
    "lat": 12.974043,
    "long": 77.545562
  },
  {
    "name": "Magadi Road",
    "landmarks": [ "GT World Mall", "Sheshadripuram Commerce College" ],
    "lat": 12.975454,
    "long": 77.555348
  },
  {
    "name": "City Railway Station",
    "landmarks": [ "Bengaluru City Railway Station" ],
    "lat": 12.975424,
    "long": 77.566035
  },
  {
    "name": "Nadaprabhu Kempegowda Station, Mejestic",
    "landmarks": [ "Bengluru BMTC Bus Station", "Bengaluru KSRTC Bus Station" ],
    "lat": 12.975545,
    "long": 77.573038
  },
  {
    "name": "Yeshwantpur",
    "landmarks": [ "Yeshwanthpur Railway Station", "Govardhan Theatre" ],
    "lat": 13.023823,
    "long": 77.550111
  },
  {
    "name": "Sandal Soap Factory",
    "landmarks": [ "Orion Mall", "Sandal Soap Factory" ],
    "lat": 13.014878,
    "long": 77.553647
  },
  {
    "name": "Mahalakshmi",
    "landmarks": [ "Little Lilly’s English School" ],
    "lat": 13.008512,
    "long": 77.549467
  },
  {
    "name": "Rajajinagar",
    "landmarks": [ "ESI Hospital", "Prerana motors Pvt Ltd." ],
    "lat": 13.000318,
    "long": 77.549932
  },
  {
    "name": "Kuvempu Road",
    "landmarks": [ "Mariyappanapalya Park", "Navrang Circle" ],
    "lat": 12.998052,
    "long": 77.556985
  },
  {
    "name": "Srirampura",
    "landmarks": [ "Harishchandra Ghat", "Devaiah Park" ],
    "lat": 12.996225,
    "long": 77.563588
  },
  {
    "name": "Mantri Square Sampige Road",
    "landmarks": [ "Mantri Square Mall", "Central Circle" ],
    "lat": 12.990562,
    "long": 77.57126
  },
  {
    "name": "Peenya Industry",
    "landmarks": [ "Sri Vidya Kendra school", "Wipro Enterprises Pvt limited" ],
    "lat": 13.036644,
    "long": 77.525305
  },
  {
    "name": "Peenya",
    "landmarks": [ "Central Manufacturing Technology Institute", "Dr. Prabhakar Kore Convention Center" ],
    "lat": 13.0329,
    "long": 77.533721
  },
  {
    "name": "Goraguntepalya",
    "landmarks": [ "People Tree Hospital", "Vivanta by Taj Yeshwanthpur" ],
    "lat": 13.028527,
    "long": 77.541069
  },
  {
    "name": "Nagasandra",
    "landmarks": [ "NHAI RO Office", "Shri Vishnu Nursing College" ],
    "lat": 13.04834,
    "long": 77.500837
  },
  {
    "name": "Dasarahalli",
    "landmarks": [ "Dasarahalli Post Office" ],
    "lat": 13.043425,
    "long": 77.512792
  },
  {
    "name": "Jalahalli",
    "landmarks": [ "Jalahalli BMTC Bus Stop", "Carnival Cinemas" ],
    "lat": 13.03957,
    "long": 77.520105
  },
  {
    "name": "Mejestic",
    "landmarks": [ "Bengluru BMTC Bus Station", "Bengaluru KSRTC Bus Station" ],
    "lat": 12.975583,
    "long": 77.573111
  },
  {
    "name": "Chickpete",
    "landmarks": [ "Raja Market" ],
    "lat": 12.967495,
    "long": 77.575409
  },
  {
    "name": "K R Market",
    "landmarks": [ "Kalasipalya", "KIMS" ],
    "lat": 12.956432,
    "long": 77.574004
  },
  {
    "name": "National College",
    "landmarks": [ "National College Grounds" ],
    "lat": 12.950422,
    "long": 77.573342
  },
  {
    "name": "Lalbagh",
    "landmarks": [ "Lalbagh Park", "Basavanagudi Medical Center" ],
    "lat": 12.94625,
    "long": 77.580733
  },
  {
    "name": "South End Circle",
    "landmarks": [ "Southend Circle", "The Bangalore Hospital" ],
    "lat": 12.938322,
    "long": 77.58076
  },
  {
    "name": "Jayanagar",
    "landmarks": [ "Jayanagara Traffic Police Station", "Jayanagara 4th Block Bus Station" ],
    "lat": 12.929442,
    "long": 77.580478
  },
  {
    "name": "R V Road Terminal",
    "landmarks": [ "Sir M V Rainwater harvesting Theme Park", "Shanthi Hospital" ],
    "lat": 12.921591,
    "long": 77.580527
  },
  {
    "name": "Banshankari",
    "landmarks": [ "Banashankri Temple", "Bangalore Urban Zilla Panchayath Office" ],
    "lat": 12.915378,
    "long": 77.57369
  },
  {
    "name": "JP Nagar",
    "landmarks": [ "Puttenahalli Lake", "St. Thomas International School" ],
    "lat": 12.907557,
    "long": 77.573948
  },
  {
    "name": "Yelachenahalli",
    "landmarks": [ "Jyothy Kendriya Vidhyalaya", "MSG Convention Hall" ],
    "lat": 12.895952,
    "long": 77.570678
  },
  {
    "name": "Jyothipuram",
    "landmarks": [ "Benninganahalli Lake Park", "Tin Factory BMTC Bus Stop" ],
    "lat": 12.996411,
    "long": 77.66833314
  },
  {
    "name": "K.R Puram",
    "landmarks": [ "K R Puram Hanging Bridge", "Lowry Adventist College" ],
    "lat": 13.00004,
    "long": 77.67757505
  },
  {
    "name": "Mahadevpura",
    "landmarks": [ "Mahadevapura Police Station", "Mahadevapura Post Office" ],
    "lat": 12.99651,
    "long": 77.69264
  },
  {
    "name": "Garudacharya palya",
    "landmarks": [ "Brigade Metropolis" ],
    "lat": 12.993374,
    "long": 77.70374371
  },
  {
    "name": "Doddanakundi Industrial Estate",
    "landmarks": [ "Bhagini Restaurant", "Kamat Yatrinivas" ],
    "lat": 12.988815,
    "long": 77.71136667
  },
  {
    "name": "Vishweshwaraya Industrial Estate",
    "landmarks": [ "Brigade Lakefront", "Shell Petrol Bunk" ],
    "lat": 12.980833,
    "long": 77.708778
  },
  {
    "name": "Kundanahalli",
    "landmarks": [ "SAP Labs India Pvt Limited", "RMZ Corporation" ],
    "lat": 12.977533,
    "long": 77.71561404
  },
  {
    "name": "Vydehi hospital",
    "landmarks": [ "Vydehi Institute of medical sciences", "TCS" ],
    "lat": 12.976582,
    "long": 77.72470593
  },
  {
    "name": "Sathya Sai Hospital",
    "landmarks": [ "Inorbit Mall Whitefield" ],
    "lat": 12.981128,
    "long": 77.72755406
  },
  {
    "name": "ITPL Terminal",
    "landmarks": [ "Park Square Mall", "Vivanta by Taj Whitefield" ],
    "lat": 12.98758,
    "long": 77.73787762
  },
  {
    "name": "Kadugodi",
    "landmarks": [ "Reserved forest", "BPL BMTC Bus Stop" ],
    "lat": 12.985638,
    "long": 77.74694496
  },
  {
    "name": "Ujwala Vidyalaya",
    "landmarks": [ "Ujjval Vidhyalaya Composite School" ],
    "lat": 12.987266,
    "long": 77.75380284
  },
  {
    "name": "Whitefield",
    "landmarks": [ "Kadugodi Police Station", "Whitefield Railway Station" ],
    "lat": 12.995497,
    "long": 77.7578276
  },
  {
    "name": "Nayandahalli",
    "landmarks": [ "Nayandalli Flyover" ],
    "lat": 12.936671,
    "long": 77.51960088
  },
  {
    "name": "Raja Rajeshwari Nagar",
    "landmarks": [ "Gopalan Arcarde Mall", "Raja Rajeshwari Temple" ],
    "lat": 12.936671,
    "long": 77.51960088
  },
  {
    "name": "Bangalore University",
    "landmarks": [ "Jnana bharati Railway Station" ],
    "lat": 12.935401,
    "long": 77.51219689
  },
  {
    "name": "Pattanagere",
    "landmarks": [ "R V College" ],
    "lat": 12.924298,
    "long": 77.49833107
  },
  {
    "name": "Mailsandra",
    "landmarks": [ "Assistant Tahsildar Office" ],
    "lat": 12.914721,
    "long": 77.48777386
  },
  {
    "name": "Kengeri",
    "landmarks": [ "Venketeshwara Theatre" ],
    "lat": 12.907922,
    "long": 77.47647545
  },
  {
    "name": "Manjunath Nagar",
    "landmarks": [ "Nelamangala Toll Booth", "Parle Biscuit factory" ],
    "lat": 13.050109,
    "long": 77.4943787
  },
  {
    "name": "Jindal",
    "landmarks": [ "Chikkabidirakallu Govt School", "Vara Siddhi Vinayaka Temple" ],
    "lat": 13.052414,
    "long": 77.4877933
  },
  {
    "name": "Bangalore International Exhibition Center",
    "landmarks": [ "Nadgir Institute of Engg & Technology", "Neelakanta Convention Center" ],
    "lat": 13.057405,
    "long": 77.47286473
  },
  {
    "name": "Anjanapura Road",
    "landmarks": [ "Manasa Theatre", "Siddalingappa Memorial Hospital" ],
    "lat": 12.888916,
    "long": 77.56273435
  },
  {
    "name": "Krishna Leela Park",
    "landmarks": [ "Ekya School Kanakpura Road" ],
    "lat": 12.88462,
    "long": 77.55276179
  },
  {
    "name": "Vajrahalli",
    "landmarks": [ "Yashasvi International School", "D Mart Kanakpura Road" ],
    "lat": 12.87747,
    "long": 77.54476303
  },
  {
    "name": "Thalaghatapura",
    "landmarks": [ "Paramount Grounds", "Thalagattapura Police Station" ],
    "lat": 12.871344,
    "long": 77.53836368
  },
  {
    "name": "Anjanapura Township",
    "landmarks": [ "Deeksha Main Campus Bangalore", "Mantra Lake View" ],
    "lat": 12.861505,
    "long": 77.52986045
  },
  {
    "name": "R.V Road Terminal",
    "landmarks": [ "Sir M V Rainwater Harvesting Theme Park", "National School of Business" ],
    "lat": 12.921438,
    "long": 77.58005457
  },
  {
    "name": "Ragigudda Temple",
    "landmarks": [ "Marenahalli Kala Bhavana", "Sri Renuka Prasanna Theatre" ],
    "lat": 12.917058,
    "long": 77.58830461
  },
  {
    "name": "Jayadeva Hospital",
    "landmarks": [ "Gopalan Innovation Mall" ],
    "lat": 12.916703,
    "long": 77.59995421
  },
  {
    "name": "BTM Layout",
    "landmarks": [ "SBI Bank", "Lara Technologies" ],
    "lat": 12.916552,
    "long": 77.60808396
  },
  {
    "name": "Central Silk Board",
    "landmarks": [ "Silk Board Junction" ],
    "lat": 12.916503,
    "long": 77.62042353
  },
  {
    "name": "HSR Layout",
    "landmarks": [ "Don Bosco College of Sciences and Management" ],
    "lat": 12.910668,
    "long": 77.62641219
  },
  {
    "name": "Oxford College",
    "landmarks": [ "Salarpuria Sattva Greenage", "Oxford College" ],
    "lat": 12.90166,
    "long": 77.6319508
  },
  {
    "name": "Muneswara Nagar",
    "landmarks": [ "Narasimha Chitramandira", "Trident Hyundai Showroom" ],
    "lat": 12.889913,
    "long": 77.63917578
  },
  {
    "name": "Chikkabegur",
    "landmarks": [ "EI Shaddai Church", "ASK Institute of Bakery and Confectionery" ],
    "lat": 12.880753,
    "long": 77.64481993
  },
  {
    "name": "Basapura Road",
    "landmarks": [ "Hosa Road Junction", "Channakeshava English School" ],
    "lat": 12.870777,
    "long": 77.65235157
  },
  {
    "name": "Hosa Road",
    "landmarks": [ "Audi Car Showroom", "Reliance Fresh" ],
    "lat": 12.863865,
    "long": 77.65783866
  },
  {
    "name": "Electronic City-1",
    "landmarks": [ "Sri Venkateshwara Theatre", "NICE Road Entrance/Exit" ],
    "lat": 12.856507,
    "long": 77.66346557
  },
  {
    "name": "Electronic City-2",
    "landmarks": [ "Electronic City Bus Depot", "Electronic City BMTC Bus Stop" ],
    "lat": 12.846418,
    "long": 77.67112585
  },
  {
    "name": "Huskur Road",
    "landmarks": [ "Veersandra Lake" ],
    "lat": 12.83908,
    "long": 77.67734003
  },
  {
    "name": "Hebbagodi",
    "landmarks": [ "Hebbagodi Police Station", "Srinivasa Chitramandhira" ],
    "lat": 12.828971,
    "long": 77.68133091
  },
  {
    "name": "Bommasandra",
    "landmarks": [ "Bommasandra Post Office", "D Mart" ],
    "lat": 12.819416,
    "long": 77.68825872
  },
  {
    "name": "Gottigere",
    "landmarks": [ "Royal Meenakshi Mall", "Loyala Higher Primary School Ground" ],
    "lat": 12.871508,
    "long": 77.59367794
  },
  {
    "name": "Hulimavu",
    "landmarks": [ "Sri Chaitanya School", "Mathru Nursing Home" ],
    "lat": 12.880838,
    "long": 77.59582649
  },
  {
    "name": "IIMB",
    "landmarks": [ "Fortis Hospital", "Apollo Hospital" ],
    "lat": 12.895692,
    "long": 77.59960191
  },
  {
    "name": "JP Nagar",
    "landmarks": [ "Infosys", "Shilpa Kala Mantapa" ],
    "lat": 12.909783,
    "long": 77.60015943
  },
  {
    "name": "Jayadeva",
    "landmarks": [ "Gopal Innovation Mall", "Jayadeva Hospital" ],
    "lat": 12.916703,
    "long": 77.59995421
  },
  {
    "name": "Swagath Cross Road",
    "landmarks": [ "Tavarakere Park", "Carmel Convent High School" ],
    "lat": 12.929423,
    "long": 77.60053141
  },
  {
    "name": "Dairy Circle",
    "landmarks": [ "KMF Circle", "ESI Hospital" ],
    "lat": 12.940831,
    "long": 77.60221963
  },
  {
    "name": "Mico Bosch Industry",
    "landmarks": [ "St. Hopkins MBA College" ],
    "lat": 12.949362,
    "long": 77.6028263
  },
  {
    "name": "Langfard Town",
    "landmarks": [ "Baldwins High School" ],
    "lat": 12.956856,
    "long": 77.60566141
  },
  {
    "name": "Vellara Junction",
    "landmarks": [ "Government Hospital Richmond Town", "St. Gregorios Orthodox Cathedral" ],
    "lat": 12.965005,
    "long": 77.60709699
  },
  {
    "name": "MG Road",
    "landmarks": [ "Manekshaw Parade Ground", "Sub-registrar Office" ],
    "lat": 12.976212,
    "long": 77.60790324
  },
  {
    "name": "Shivajinagara",
    "landmarks": [ "Shivajinagara Bus Station", "BBMP Junior College" ],
    "lat": 12.983877,
    "long": 77.60224475
  },
  {
    "name": "Cantonment Railway Station",
    "landmarks": [ "Bangalore Cantonment Railway Station", "Bamboo Bazaar" ],
    "lat": 12.991779,
    "long": 77.60607814
  },
  {
    "name": "Pottery Town",
    "landmarks": [ "Govt. High School" ],
    "lat": 13.000721,
    "long": 77.60956414
  },
  {
    "name": "Tannery Town",
    "landmarks": [ "United Degree College and PU College" ],
    "lat": 13.009738,
    "long": 77.61371355
  },
  {
    "name": "Venkateshpura",
    "landmarks": [ "Sagar Garden Function Hall", "Jyothi Seva Home for Blind Children" ],
    "lat": 13.01777,
    "long": 77.6178681
  },
  {
    "name": "Arabic College",
    "landmarks": [ "K G Halli Police Station", "Sabeel ur rashad Arabic college" ],
    "lat": 13.029929,
    "long": 77.62044667
  },
  {
    "name": "Nagawara",
    "landmarks": [ "Nagawara Junction Circle", "Elements Mall" ],
    "lat": 13.041154,
    "long": 77.62478153
  },
  {
    "name": "KR Puram",
    "landmarks": [ "K R Puram Hanging Bridge", "Lowry Adventist College" ],
    "lat": 13.00004,
    "long": 77.67757505
  },
  {
    "name": "Mahadevapura",
    "landmarks": [ "Pragathi School", "Elite Ford Showroom" ],
    "lat": 12.993632,
    "long": 77.68552791
  },
  {
    "name": "DRDO Sports Complex",
    "landmarks": [ "Mahadevapura Lake" ],
    "lat": 12.985786,
    "long": 77.69076076
  },
  {
    "name": "Doddanakundi",
    "landmarks": [ "Doddanekundi Lake", "Doddanekundi Post Office" ],
    "lat": 12.976254,
    "long": 77.69661952
  },
  {
    "name": "ISRO",
    "landmarks": [ "ISRO Junction", "The Bawarchi Biryani" ],
    "lat": 12.968899,
    "long": 77.70107353
  },
  {
    "name": "Marathahalli",
    "landmarks": [ "Marathahalli Bridge", "KLM Fashion Mall" ],
    "lat": 12.957707,
    "long": 77.70124831
  },
  {
    "name": "Kodibeesanahalli",
    "landmarks": [ "Marathalli Police Station", "VIMS Hospital" ],
    "lat": 12.94503,
    "long": 77.6980381
  },
  {
    "name": "Kadubeesanahalli",
    "landmarks": [ "New Horizon College of Engineering", "Passport Seva Kendra" ],
    "lat": 12.932114,
    "long": 77.68746136
  },
  {
    "name": "Bellandur",
    "landmarks": [ "RMZ Ecospace" ],
    "lat": 12.927658,
    "long": 77.68009736
  },
  {
    "name": "Ibblur",
    "landmarks": [ "Ibblur Lake Park", "Columbia Asia Hospital Sarjapur Road" ],
    "lat": 12.921128,
    "long": 77.663044
  },
  {
    "name": "Agara Lake",
    "landmarks": [ "Agara Lake", "BMTC Depot" ],
    "lat": 12.920803,
    "long": 77.64383254
  },
  {
    "name": "HSR Layout",
    "landmarks": [ "Carmel Garden Public School" ],
    "lat": 12.916492,
    "long": 77.63254145
  },
  {
    "name": "Silk Board",
    "landmarks": [ "Silk Board Junction" ],
    "lat": 12.917494,
    "long": 77.62380342
  }
];

//Distance function to calculate distance using Haversine formula given lat long of two points

function distance(lat1, lon1, lat2, lon2, unit) {
	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1/180;
		var radlat2 = Math.PI * lat2/180;
		var theta = lon1-lon2;
		var radtheta = Math.PI * theta/180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180/Math.PI;
		dist = dist * 60 * 1.1515;
		if (unit=="K") { dist = dist * 1.609344 }
		if (unit=="N") { dist = dist * 0.8684 }
		return dist;
	}
}

//console.log(JSON.stringify(metro_list));

//Loop that performs linear search to find closest metro using Haversine formula

var myLocation = {
	

	
  lat: '<?php echo $lat; ?>',
  long: '<?php echo $long; ?>'
  
  
}
</script>
<script>
$(document).ready(function(){
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
if("<?php echo $WorkHome;?>" == "no"){
	$("#panel91").show();
}
if("<?php echo $WorkHome;?>" == "yes"){
	$("#panel90").show();
}
if("<?php echo $Supplies;?>" == "no"){
	$("#panel101").show();
}
if("<?php echo $Supplies;?>" == "yes"){
	$("#panel100").show();
}
var min_dist = Infinity;
var min_landmarks = ["No metro found"];

for(var i = 0; i < metro_list.length; i++){
  var lat1 = myLocation.lat;
  var lon1 = myLocation.long;
  var lat2 = metro_list[i].lat;
  var lon2 = metro_list[i].long;


  var dist = distance(lat1, lon1, lat2, lon2, "K");
  //var dist = Math.sqrt(Math.pow(myLocation.lat - metro_list[i].lat, 2) + Math.pow(myLocation.long - metro_list[i].long, 2));
  if(dist < min_dist){
    min_dist = dist;
    min_landmarks = metro_list[i].landmarks;
  }
}
    
    document.getElementById("myText").innerHTML = Math.round(min_dist*100)/100;
    if(min_landmarks.length == 2){
        document.getElementById("myText1").innerHTML = min_landmarks[0] + " and " + min_landmarks[1];
    }else{
	   document.getElementById("myText1").innerHTML = min_landmarks[0];
    }

});

</script>
    <script>
        var showNext = function(ele) {
            if(ele.id == "yesELCITA") {
                $("#panel27").show();
                $("#panel28").hide();
            } else if(ele.id == "noELCITA") {
                $("#panel27").hide();
                $("#panel28").show();
            } else if(ele.id == "yesMetro") {
                $("#panel8").show();
                $("#panel9").hide();
            } else if(ele.id == "noMetro") {
                $("#panel8").hide();
                $("#panel9").show();
            } else if(ele.id == "yesKnown") {
                $("#panel5").show();
                $("#panel6").hide();
            } else if(ele.id == "noKnown") {
                $("#panel5").hide();
                $("#panel6").show();
            } else if(ele.id == "yesWorkHome") {
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
<html>
<style>
<head>



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
<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       <link href="estilo.css" type="text/css" rel="stylesheet" />
<body>

<section class="engine"><a href="https://mobirise.ws/f">simple site creator</a></section><section class="mbr-section mbr-after-navbar" id="msg-box5-1" data-rv-view="437" style="background-color: rgb(255,255,255); padding-top: 160px; padding-bottom: 40px;">
             

</section>


	<section class="mbr-section mbr-section__container article" id="header3-2" data-rv-view="440" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
			<small class="mbr-section-subtitle"><br><span style="font-style: normal;">
									


			<style>
			.form {
  margin-left: 0px;
  margin-top: 0px
}
</style>


    
     <style>
     .radiochoice{
	            display:block;
	            float: left;
	        }
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
    .radiochoice{
	            width:100%;
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
					   














					</style>
					   







<style>
#email_error
{
	color:red;
	font-size:small;
}
</style>

</head>








  
  
  
  
  
  
  
  
  
  
  
  
  <div id="panel2" class="panel active">
  

		
   <!--     If ELCITA provided shared transport from your home to work would you take it?  <br><br>
	
	
	

	
	<input type="radio" id="yesELCITA" name="takeELCITA" value="yes" onclick="showNext(this)">Yes<br>
    <input type="radio" id="noELCITA" name="takeELCITA" value="no" onclick="showNext(this)">No<br>

	

	<div class="tab-panels1">
  <ul class="tabs1">
    <li rel="panel27" class="active1">Yes</li>
    <li rel="panel28">No</li>

  </ul>


  <div id="panel27" class="panel1 active1">
   

<form  onsubmit="return validateForm()" action="present4.php" method="post" class="form" align="left" style="width:109%;" name="english_registration_form" id="english_registration_form">

			
	<table class="table"  id="customers">




	
		
		
			
			

			<tr>
			<td class="td1"><b><a name="sharedtransportyes" id="sharedtransportyes"></a>1.</b>&nbsp;&nbsp;Which attributes would be primary for you to consider the service (select all that apply) <br><br>
			<input type="checkbox" name="yessharedtransport[]" value="cost"> Cost  <br>
<input type="checkbox" name="yessharedtransport[]" value="Few or no stops"> Direct service with few or no stops  <br>
<input type="checkbox" name="yessharedtransport[]" value="must be quiet so I could work or sleep"> Must be on time  <br>
<input type="checkbox" name="yessharedtransport[]" value="punctual"> Must have AC <br>
<input type="checkbox" name="yessharedtransport[]" value="must get a seat"> Must get a seat  <br>
<input type="checkbox" name="yessharedtransport[]" value="five minutes walking distance from my home"> Needs to stop within short walking distance of my home  <br>
<input type="checkbox" name="yessharedtransport[]" value="five minutes walking distance from my office"> Needs to stop within short walking distance of my office <br>
<input type="checkbox" name="yessharedtransport[]" value="wi-fi service provided"> Wi-fi service provided <br> 
<input type="checkbox" name="yessharedtransport[]" value="any other why not BMTC"> Any other, please enter in the text box to the right <br>

</td>
	<td><input type="text" name="yessharedtransportother" class="textInput"></td> 
		</tr>
		
		
			<tr>
			<td class="td1">2.  Suppose the service will not operate if there is not enough willingness to pay for it. With that knowledge, what is the maximum amount you will be willing to pay per month to avail the service? <br><br>
			 <select name="costimp"  style="width:100%;">
			 <option value="No Value">&nbsp; Select </option>
			 <option value="Less than 500"> &nbsp; Would not like to pay </option>
	<option value="Less than 500"> &nbsp; Less than 500 </option>
    <option value="Rs 500-750">&nbsp; Rs 500-1000</option>
 
    <option value="Rs 1000-1500">&nbsp; Rs 1000-1500</option>

    <option value="Rs 2000-2500">&nbsp; Rs 2000-2500</option>
  
     <option value="More than 3000">&nbsp; More than 3000</option>
    
  
  </select>
			
			
			
			
			
			
			
			
			
	
			
			
</td>
	<td></td> 
		</tr>
		
					
		



-->  
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
	<?php
			if((!$_SESSION['trip2_Man'])||($_SESSION['trip2_Op'] < 0.8)||($_SESSION['future_Op'] < 0.8)){
				echo "
					<div style='text-align:center'>You have not answered some questions in the previous pages. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>


<form  onsubmit="return validateForm()" action="appInstructions.php" method="post" class="form" align="left" style="width:109%;" name="english_registration_form" id="english_registration_form">

			
	<table class="table"  id="customers">
	 <tr>
								 
									 <th colspan="2"> <b><u>Emerging modes and trends</u></b> 
								<p align="right"> <a href="index.php?logout='1'" input type="button" id="next" class="Register" align="right">logout</a> </p>
								</th>
							

									 
</tr>
	
<tr><td class="td1" colspan="2">
	

	
			<span class="question">1. Do you work from home sometimes? </span><br>
			
			<input type="radio" id="yesWorkHome" name="WorkHome" value="yes" onclick="showNext(this)" <?php echo ($WorkHome== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
            <input type="radio" id="noWorkHome" name="WorkHome" value="no" onclick="showNext(this)" <?php echo ($WorkHome== 'no') ?  "checked" : "" ;  ?>>No<br>
			
			
			
			
		
				<div class="tab-panels1">
 <!-- <ul class="tabs1">
    <li rel="panel90" class="active1">Yes</li>
    <li rel="panel91">No</li>

  </ul>
-->
  <div id="panel90" class="panel1 active1">
   


 <br><span class="question">How many days a month do you work from home?</span> <br>
  
	        <input type="radio" name="workfromhometime" value="Never" <?php echo ($workfromhometime== 'Never') ?  "checked" : "" ;  ?>>&nbsp; Never<br>
			
						<input type="radio" name="workfromhometime" value="1-2 days" <?php echo ($workfromhometime== '1-2 days') ?  "checked" : "" ;  ?>>&nbsp; 1-2 days<br>
			<input type="radio" name="workfromhometime" value="3-5 days" <?php echo ($workfromhometime== '3-5 days') ?  "checked" : "" ;  ?>>&nbsp; 3-5 days <br>
				<input type="radio" name="workfromhometime" value="6-10 days" <?php echo ($workfromhometime== '6-10 days') ?  "checked" : "" ;  ?>>&nbsp; 6-10 days<br>

			
			<input type="radio" name="workfromhometime" value="11+ days" <?php echo ($workfromhometime== '11+ days') ?  "checked" : "" ;  ?>>&nbsp; 11+ days <br>
			



 </div>
  
  
  
  
  
  
  
  
  
  
  

 








	
	 <div id="panel91" class="panel1">
    
	<br><span class="question">Please mention your reasons.</span><br>
	        <input type="checkbox" name="workfromhomeno[]" value="Employer policy does not allow work from home"
				<?php
if(in_array("Employer policy does not allow work from home",$a))
{
	
	echo "checked";
}
	


?>			>&nbsp;	Employer policy does not allow work from home  <br>
			<input type="checkbox" name="workfromhomeno[]" value="I need to interact facetoface conduct meetings with my colleagues on a regular basis"
				<?php
if(in_array("I need to interact facetoface conduct meetings with my colleagues on a regular basis",$a))
{
	
	echo "checked";
}
	


?>			>&nbsp; 	I need to interact face-to-face /conduct meetings with my colleagues on a regular basis<br>
	
					<input type="checkbox" name="workfromhomeno[]" value="My home environment is not conductive for work"
					<?php
if(in_array("My home environment is not conductive for work",$a))
{
	
	echo "checked";
}
	


?>						>&nbsp; 	My home environment is not conductive for work<br>
			<input type="checkbox" name="workfromhomeno[]" value="My position requires me be at the work place"
				<?php
if(in_array("My position requires me be at the work place",$a))
{
	
	echo "checked";
}
	


?>
			
			>&nbsp; 	The nature of my work requires me be at the work place <br>
			
				<input type="checkbox" name="workfromhomeno[]" value="Any other"
					<?php
if(in_array("Any other",$a))
{
	
	echo "checked";
}
	


?>				
				>&nbsp; Any other, please enter in the textbox below <br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="workfromhomenoother" class="textInput" style="width:50%;" 	value="<?php echo (isset($workfromhomenoother)) ? $workfromhomenoother: ''?>" >
			<br><br>
			

	




 </div>


 
 
 

	
			
			
			
			
			
			
			
			
	

	<tr><td class="td1" colspan="2">
	<span class="question">2. Do you shop online or order supplies over phone</span> <br>
	
	<input type="radio" id="yesSupplies" name="Supplies" value="yes" onclick="showNext(this)" <?php echo ($Supplies== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
    <input type="radio" id="noSupplies" name="Supplies" value="no" onclick="showNext(this)" <?php echo ($Supplies== 'no') ?  "checked" : "" ;  ?>>No<br>
	
	
	<div class="tab-panels1">

  <div id="panel100" class="panel1 active1">
   



			
		

<span class="question">How many times a month do you shop online or order over phone for each of these purposes? </span><br>


	       Perishable grocery: such as fruits, vegetables, eggs and meat (if applicable) <br>
	  <select name="grocery"  style="width:20%;">	
	<option value="<?php  	if(empty($grocery)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($grocery)) ? $grocery: '';
		   
		   }?>"><?php  	if(empty($grocery)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($grocery)) ? $grocery: '';
		   
		   }?></option>

	   	   </option>
 <option value="Never"> <label> Never</label> <br></option>

	   <option value="1-2"> <label> 1-2</label> <br></option>
	  <option value="3-5"> <label> 3-5</label><br></option>
    <option value="6-10"> <label> 6-10</label><br></option>
 <option value="11+"><label> 11+</label><br></option>
 
	
			
	
	
	 </select> 
			
			
			
			<br>
			
			
			Non-perishable grocery or staples such as foodgrain, oil, salt etc <br>
		
			
			
			<select name="staples"  style="width:20%;">	
	<option value="<?php  	if(empty($staples)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($staples)) ? $staples: '';
		   
		   }?>"><?php  	if(empty($staples)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($staples)) ? $staples: '';
		   
		   }?></option>
 <option value="Never"> <label> Never</label> <br></option>

	   <option value="1-2"> <label> 1-2</label> <br></option>
	  <option value="3-5"> <label> 3-5</label><br></option>
	  
	    <option value="6-10"> <label> 6-10</label><br></option>
 <option value="11+"><label> 11+</label><br></option>
 
	 </select> 
			
			
			
			
			
			
			
			
			
			
			
			<br>
			
		
			 Household cleaning supplies, toiletry and bath use supplies<br>
		<select name="household"  style="width:20%;">	
<option value="<?php  	if(empty($household)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($household)) ? $household: '';
		   
		   }?>"><?php  	if(empty($household)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($household)) ? $household: '';
		   
		   }?></option>
 <option value="Never"> <label> Never</label> <br></option>

	   <option value="1-2"> <label> 1-2</label> <br></option>
	  <option value="3-5"> <label> 3-5</label><br></option>
    <option value="6-10"> <label> 6-10</label><br></option>
 <option value="11+"><label> 11+</label><br></option>
 
	 </select> 
			
			
			
			<br>
			
			
			
			 Clothes <br>
			<select name="clothes"  style="width:20%;">	
	<option value="<?php  	if(empty($clothes)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($clothes)) ? $clothes: '';
		   
		   }?>"><?php  	if(empty($clothes)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($clothes)) ? $clothes: '';
		   
		   }?></option>

 <option value="Never"> <label> Never</label> <br></option>

	   <option value="1-2"> <label> 1-2</label> <br></option>
	  <option value="3-5"> <label> 3-5</label><br></option>
    <option value="6-10"> <label> 6-10</label><br></option>
 <option value="11+"><label> 11+</label><br></option>
 
	 </select> 
			
			
		
		<br>
		
	
		
		 Leisure shopping: electronics, sports goods, clothes, appliances <br>
	<select name="leisure"  style="width:20%;">	
<option value="<?php  	if(empty($leisure)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($leisure)) ? $leisure: '';
		   
		   }?>"><?php  	if(empty($leisure)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($leisure)) ? $leisure: '';
		   
		   }?></option>

 <option value="Never"> <label> Never</label> <br></option>

	   <option value="1-2"> <label> 1-2</label> <br></option>
	  <option value="3-5"> <label> 3-5</label><br></option>
    <option value="6-10"> <label> 6-10</label><br></option>
 <option value="11+"><label> 11+</label><br></option>
 
	 </select> 
			
				<br>
		
	
		
		 Order lunch delivery: Zomato, Swiggy, UberEats <br>
	<select name="zomato"  style="width:20%;">	
<option value="<?php  	if(empty($zomato)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($zomato)) ? $zomato: '';
		   
		   }?>"><?php  	if(empty($zomato)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($zomato)) ? $zomato: '';
		   
		   }?></option>

 <option value="Never"> <label> Never</label> <br></option>

	   <option value="1-2"> <label> 1-2</label> <br></option>
	  <option value="3-5"> <label> 3-5</label><br></option>
    <option value="6-10"> <label> 6-10</label><br></option>
 <option value="11+"><label> 11+</label><br></option>
	 </select> 
			
			
			<br><br>
			
			
			
		
			
			
 </div>
  
  
  
    <div id="panel101" class="panel1 active1">
  
  
  
  
  
  <br><span class="question">Please explain your reasons </span><br>
	        <input type="checkbox" name="shoponlinetypeno[]" value="Enjoy selecting in person and buying"
			<?php
if(in_array("Enjoy selecting in person and buying",$c))
{
	
	echo "checked";
}
	


?>			
			
			>&nbsp; Enjoy selecting in person and buying <br>
			<input type="checkbox" name="shoponlinetypeno[]" value="Defective item difficult to return"
			
			<?php
if(in_array("Defective item difficult to return",$c))
{
	
	echo "checked";
}
	


?>			
			>&nbsp; Defective item difficult to return<br>
			<input type="checkbox" name="shoponlinetypeno[]" value="Not comfortable with shopping applications and websites"
			
			<?php
if(in_array("Not comfortable with shopping applications and websites",$c))
{
	
	echo "checked";
}
	


?>			
			>&nbsp; Not comfortable with shopping applications and websites <br>
			
			<input type="checkbox" name="shoponlinetypeno[]" value="Any other"
			
			
			<?php
if(in_array("Any other",$c))
{
	
	echo "checked";
}
	


?>			
			>&nbsp; Any other, please enter in the textbox below<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="shoponlinetypenoother" class="textInput" style="width:50%;" value="<?php echo (isset($shoponlinetypenoother)) ? $shoponlinetypenoother: ''?>"

		
>
			<br><br>
	
  
  
  
  
  
  
  
  
  
  
  
  </div>
  

	

	

		
		</td>
		
		</tr>	

<tr><td class="td1" colspan="2">
3. How many times a month do you use these modes?<br><br>

&nbsp;&nbsp;Ola/Uber<br>
 <select  name="useolauber" style="width:35%;">
	<option value="<?php  	if(empty($useolauber)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($useolauber)) ? $useolauber: '';
		   
		   }?>"  selected ><?php  	if(empty($useolauber)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($useolauber)) ? $useolauber: '';
		   
		   }?></option>
                        <option value="Never">Never</option>
                        <option value="1-2 times">1-2 times</option>
                        <option value="3-5 times">3-5 times</option>
                        <option value="6-10 times">6-10 times</option>
                        <option value="11+ times">11+ times</option>
                    
                    </select><br><br>
&nbsp;&nbsp;Olashare/Uberpool<br>
<select  name="useolapool" style="width:35%;" >
	<option value="<?php  	if(empty($useolapool)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($useolapool)) ? $useolapool: '';
		   
		   }?>"  selected ><?php  	if(empty($useolapool)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($useolapool)) ? $useolapool: '';
		   
		   }?></option>
                        <option value="Never">Never</option>
                        <option value="1-2 times">1-2 times</option>
                        <option value="3-5 times">3-5 times</option>
                        <option value="6-10 times">6-10 times</option>
                        <option value="11+ times">11+ times</option>
                    
                    </select><br><br>
&nbsp;&nbsp;Quickride or similar app-based carpool<br>
<select  name="usequickride" style="width:35%;" >
	<option value="<?php  	if(empty($usequickride)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($usequickride)) ? $usequickride: '';
		   
		   }?>"  selected ><?php  	if(empty($usequickride)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($usequickride)) ? $usequickride: '';
		   
		   }?></option>
                        <option value="Never">Never</option>
                        <option value="1-2 times">1-2 times</option>
                        <option value="3-5 times">3-5 times</option>
                        <option value="6-10 times">6-10 times</option>
                        <option value="11+ times">11+ times</option>
                    
                    </select><br><br>
&nbsp;&nbsp;Bounce, Vogo or app-based two-wheeler rental<br>
<select  name="usebounce" style="width:35%;" >
	<option value="<?php  	if(empty($usebounce)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($usebounce)) ? $usebounce: '';
		   
		   }?>"  selected ><?php  	if(empty($usebounce)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($usebounce)) ? $usebounce: '';
		   
		   }?></option>
                        <option value="Never">Never</option>
                        <option value="1-2 times">1-2 times</option>
                        <option value="3-5 times">3-5 times</option>
                        <option value="6-10 times">6-10 times</option>
                        <option value="11+ times">11+ times</option>
                    
                    </select><br><br>
&nbsp;&nbsp;Rapido or two-wheeler taxi<br>
<select  name="userapido" style="width:35%;" >
	<option value="<?php  	if(empty($userapido)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($userapido)) ? $userapido: '';
		   
		   }?>"  selected ><?php  	if(empty($userapido)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($userapido)) ? $userapido: '';
		   
		   }?></option>
                        <option value="Never">Never</option>
                        <option value="1-2 times">1-2 times</option>
                        <option value="3-5 times">3-5 times</option>
                        <option value="6-10 times">6-10 times</option>
                        <option value="11+ times">11+ times</option>
                    
                    </select><br><br>
&nbsp;&nbsp;Yulu, Pedl or app-based bikeshare<br>
<select  name="useyulu" style="width:35%;" >
	<option value="<?php  	if(empty($useyulu)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($useyulu)) ? $useyulu: '';
		   
		   }?>"  selected ><?php  	if(empty($useyulu)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($useyulu)) ? $useyulu: '';
		   
		   }?></option>
                        <option value="Never">Never</option>
                        <option value="1-2 times">1-2 times</option>
                        <option value="3-5 times">3-5 times</option>
                        <option value="6-10 times">6-10 times</option>
                        <option value="11+ times">11+ times</option>
                    
                    </select><br><br>

</td>
</tr>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<tr>
    <td class="td1" colspan="2">
	
	4.On a scale of 1 to 5, please rate the importance of each of the following in your commute mode choice decision, <b>1 being the least important</b> and <b>5 being the most important</b>. <br>
	
	
	<table style="width:100%">

  <tr>
    <td class="td1">Travel time & waiting time</td>
      <td colspan="50" class="td1"> <div class="radiochoice"><input type="radio"  name="travelandwait" value="1" class="big" <?php echo ($travelandwait== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="travelandwait" value="2" class="big" <?php echo ($travelandwait== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="travelandwait" value="3" class="big" <?php echo ($travelandwait== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="travelandwait" value="4" class="big" <?php echo ($travelandwait== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="travelandwait" value="5" class="big" <?php echo ($travelandwait== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
  </tr>
  <tr>
    <td class="td1">Travel cost: parking, tolls, fares</td>
          <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="travelcost" value="1" class="big" <?php echo ($travelcost== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="travelcost" value="2" class="big"  <?php echo ($travelcost== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="travelcost" value="3" class="big"  <?php echo ($travelcost== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="travelcost" value="4" class="big"  <?php echo ($travelcost== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="travelcost" value="5" class="big"  <?php echo ($travelcost== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    

    
  </tr>
  <tr>
    <td class="td1">Reliability (timely arrival, certainty of travel time)</td>
   
     <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="reliability" value="1" class="big" <?php echo ($reliability== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="reliability" value="2" class="big" <?php echo ($reliability== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="reliability" value="3" class="big" <?php echo ($reliability== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	 <div class="radiochoice"> <input type="radio"  name="reliability" value="4" class="big" <?php echo ($reliability== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="reliability" value="5" class="big" <?php echo ($reliability== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
    
  </tr>

   <tr>
    <td class="td1">Safety & security</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="safety" value="1" class="big" <?php echo ($safety== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="safety" value="2" class="big" <?php echo ($safety== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="safety" value="3" class="big" <?php echo ($safety== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="safety" value="4" class="big" <?php echo ($safety== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="safety" value="5" class="big" <?php echo ($safety== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    

    
  </tr>
  
   <tr>
    <td class="td1">Flexibility, ease of stopping, or detours</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="flexibility" value="1" class="big" <?php echo ($flexibility== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="flexibility" value="2" class="big" <?php echo ($flexibility== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="flexibility" value="3" class="big" <?php echo ($flexibility== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="flexibility" value="4" class="big" <?php echo ($flexibility== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="flexibility" value="5" class="big" <?php echo ($flexibility== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
    
  </tr>
  
  
   <tr>
    <td class="td1">Privacy, less-crowded</td>
   
     <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="privacy" value="1" class="big" <?php echo ($privacy== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="privacy" value="2" class="big" <?php echo ($privacy== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="privacy" value="3" class="big" <?php echo ($privacy== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="privacy" value="4" class="big" <?php echo ($privacy== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="privacy" value="5" class="big" <?php echo ($privacy== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
    
    
  </tr>
  



     <tr>
    <td class="td1">Environmentally friendly</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="env" value="1" class="big" <?php echo ($env== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="env" value="2" class="big" <?php echo ($env== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="env" value="3" class="big" <?php echo ($env== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="env" value="4" class="big" <?php echo ($env== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="env" value="5" class="big" <?php echo ($env== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
    
  </tr>
  
    <tr>
    <td class="td1">Status symbol</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="statussymbol" value="1" class="big" <?php echo ($statussymbol== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="statussymbol" value="2" class="big" <?php echo ($statussymbol== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="statussymbol" value="3" class="big" <?php echo ($statussymbol== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="statussymbol" value="4" class="big" <?php echo ($statussymbol== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="statussymbol" value="5" class="big" <?php echo ($statussymbol== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
    
    
  </tr>
  
</table>
		   
		 













		 
			</td>
					
			
			
			
			
		</tr>
				

				
				
				
				
		<tr>
<td colspan="2" class="td1">		
			5. Our decisions are often influenced by others, due to imitation, peer-pressure, or other reasons. Please rate the following based on their influence on the choices you make regularly, <b>1 being the least influential</b> and <b>5 being the most influential</b>. 

	
			<table style="width:100%">

 

	














  <tr>
    <td class="td1">Parents and family</td>
      <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="family" value="1" class="big" <?php echo ($family== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="family" value="2" class="big" <?php echo ($family== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="family" value="3" class="big" <?php echo ($family== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="family" value="4" class="big" <?php echo ($family== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="family" value="5" class="big" <?php echo ($family== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div>
	
    
  </tr>
  <tr>
    <td class="td1">
Friends</td>
          <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="friends" value="1" class="big" <?php echo ($friends== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="friends" value="2" class="big" <?php echo ($friends== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="friends" value="3" class="big" <?php echo ($friends== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="friends" value="4" class="big" <?php echo ($friends== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="friends" value="5" class="big" <?php echo ($friends== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div>

    

    
  </tr>
  <tr>
    <td class="td1">Neighbors</td>
   
     <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="neighbors" value="1" class="big" <?php echo ($neighbors== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="neighbors" value="2" class="big" <?php echo ($neighbors== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="neighbors" value="3" class="big" <?php echo ($neighbors== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="neighbors" value="4" class="big" <?php echo ($neighbors== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="neighbors" value="5" class="big" <?php echo ($neighbors== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div>
		
    
    
  </tr>
   <tr>
    <td class="td1">Colleagues</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="colleagues" value="1" class="big" <?php echo ($colleagues== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="colleagues" value="2" class="big" <?php echo ($colleagues== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="colleagues" value="3" class="big" <?php echo ($colleagues== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="colleagues" value="4" class="big" <?php echo ($colleagues== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="colleagues" value="5" class="big" <?php echo ($colleagues== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div>
	

    
  </tr>
  
   <tr>
    <td class="td1">Supervisors & team leaders</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="leader" value="1" class="big" <?php echo ($leader== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="leader" value="2" class="big" <?php echo ($leader== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="leader" value="3" class="big" <?php echo ($leader== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="leader" value="4" class="big" <?php echo ($leader== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="leader" value="5" class="big" <?php echo ($leader== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div>

    
  </tr>
  
  
     <tr>
    <td class="td1">Film stars, sports persons, political figures</td>
           <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="filmstar" value="1" class="big" <?php echo ($filmstar== '1') ?  "checked" : "" ;  ?>/>1&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="filmstar" value="2" class="big" <?php echo ($filmstar== '2') ?  "checked" : "" ;  ?>/>2&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="filmstar" value="3" class="big" <?php echo ($filmstar== '3') ?  "checked" : "" ;  ?>/>3&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  <div class="radiochoice"><input type="radio"  name="filmstar" value="4" class="big" <?php echo ($filmstar== '4') ?  "checked" : "" ;  ?>/>4&nbsp;&nbsp;&nbsp;&nbsp;</div>
	    <div class="radiochoice"><input type="radio"  name="filmstar" value="5" class="big" <?php echo ($filmstar== '5') ?  "checked" : "" ;  ?>/>5&nbsp;&nbsp;&nbsp;&nbsp;</div>

    
    

    
  </tr>
  
  </table>
				
				
				</td>
				
				</tr>
				
				
				
				
		<tr>
    <td class="td1" colspan="2">
	
	
	6. Consider the people in your influence group (top two ranks). How would they feel about your ratings of importance that lead to your commute mode choice decision?<br>
	
	<table style="width:100%">

 

	



<tr>
<th>Attributes</th>
<th>Agree (+), Neutral (0), Disagree (-)</th>

</tr>



  <tr>
    <td class="td1">Travel time & waiting time</td>
      <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i1" value="Positive (+)" class="big" <?php echo ($i1== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i1" value="Neutral (0)" class="big" <?php echo ($i1== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i1" value="Negative (-)" class="big" <?php echo ($i1== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	 
    
  </tr>
  <tr>
    <td class="td1">Travel cost: parking, tolls, fares</td>
          <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i2" value="Positive (+)" class="big" <?php echo ($i2== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i2" value="Neutral (0)" class="big" <?php echo ($i2== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i2" value="Negative (-)" class="big" <?php echo ($i2== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
	 
    
  </tr>
  <tr>
    <td class="td1">Reliability (timely arrival, certainty of travel time)</td>
   
     <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i3" value="Positive (+)" class="big" <?php echo ($i3== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i3" value="Neutral (0)" class="big" <?php echo ($i3== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i3" value="Negative (-)" class="big" <?php echo ($i3== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;</div>
	  
  </tr>
 
   <tr>
    <td class="td1">Safety & security</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i4" value="Positive (+)" class="big" <?php echo ($i4== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i4" value="Neutral (0)" class="big" <?php echo ($i4== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i4" value="Negative (-)" class="big" <?php echo ($i4== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;</div>
	
    
  </tr>
  
   <tr>
    <td class="td1">Flexibility, ease of stopping, or detours</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i5" value="Positive (+)" class="big" <?php echo ($i5== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i5" value="Neutral (0)" class="big" <?php echo ($i5== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i5" value="Negative (-)" class="big" <?php echo ($i5== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;</div>
	
    
  </tr>
  
  
  
  
   <tr>
    <td class="td1">Privacy, less-crowded</td>
   
     <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i8" value="Positive (+)" class="big" <?php echo ($i8== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i8" value="Neutral (0)" class="big" <?php echo ($i8== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i8" value="Negative (-)" class="big" <?php echo ($i8== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;</div>
	
    
  </tr>
  



     <tr>
    <td class="td1">Environmentally friendly</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i9" value="Positive (+)" class="big" <?php echo ($i9== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i9" value="Neutral (0)" class="big" <?php echo ($i9== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i9" value="Negative (-)" class="big" <?php echo ($i9== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;</div>
	 
    
  </tr>
  
  
  
    <tr>
    <td class="td1">Status symbol</td>
       <td colspan="10" class="td1"> <div class="radiochoice"><input type="radio"  name="i11" value="Positive (+)" class="big" <?php echo ($i11== 'Positive (+)') ?  "checked" : "" ;  ?>/>Agree (+)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
  <div class="radiochoice"><input type="radio"  name="i11" value="Neutral (0)" class="big" <?php echo ($i11== 'Neutral (0)') ?  "checked" : "" ;  ?>/>Neutral (0)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
    <div class="radiochoice"><input type="radio"  name="i11" value="Negative (-)" class="big" <?php echo ($i11== 'Negative (-)') ?  "checked" : "" ;  ?>/>Disagree (-)&nbsp;&nbsp;&nbsp;&nbsp;</div>
	
    
  </tr>
  
</table>
		   
		 













		 
			</td>
					
			
			
			
			
		</tr>
						
				
				
				
	<tr>
<td class="td1" colspan="2">
7.	What mode do most of people in the <b>first two ranks</b> from Question 5 <b>take to work?</b> You could choose more than one option for each group. 

<br>




<table style="width:100%">

 

	



<tr>
<th>Rank 1</th>
<th>Rank 2</th>

</tr>


<tr>
<td class="td1"> 

<input type="checkbox" name="rank1[]" value="Train"
					<?php
if(in_array("Train",$d))
{
	
	echo "checked";
}
	


?>
  ><b> Train</b>  <br>
 








		   <input type="checkbox" name="rank1[]" value="Namma Metro"
					<?php
if(in_array("Namma Metro",$d))
{
	
	echo "checked";
}
	


?>
  ><b> Namma Metro</b>  <br>

        <input type="checkbox" name="rank1[]" value="Office bus or ELCITA shuttle"

			<?php
if(in_array("Office bus or ELCITA shuttle",$d))
{
	
	echo "checked";
}
	


?>
  ><b> Office bus or ELCITA shuttle</b>  <br>  
			
			

			
			
			        <input type="checkbox" name="rank1[]" value="BMTC Bus"

			<?php
if(in_array("BMTC Bus",$d))
{
	
	echo "checked";
}
	


?>
  ><b> BMTC Bus</b>  <br>  
			
<b> Car/Cab/Carpool</b>  <br>  
			
			



			<input type="checkbox" name="rank1[]" value="Own car drive self"
			
			<?php
if(in_array("Own car drive self",$d))
{
	
	echo "checked";
}
	


?>
  > Own car drive self  <br>
            <input type="checkbox" name="rank1[]" value="Own car as passenger"  
						<?php
if(in_array("Own car as passenger",$d))
{
	
	echo "checked";
}
	


?>
			> Own car as passenger  <br>
			
			
	

			
			
			       <input type="checkbox" name="rank1[]" value="Office car" 
						<?php
if(in_array("Office car",$d))
{
	
	echo "checked";
}
	


?>
			> Office car  <br>
			
			       <input type="checkbox" name="rank1[]" value="Office cab service" 
						<?php
if(in_array("Office cab service",$d))
{
	
	echo "checked";
}
	


?>
			> Office cab service  <br>
			


			
            <input type="checkbox" name="rank1[]" value="Ride in friend or colleague’s car" 
						<?php
if(in_array("Ride in friend or colleague’s car",$d))
{
	
	echo "checked";
}
	


?>
			> Ride in friend or colleague’s car  <br>
            <input type="checkbox" name="rank1[]" value="QuickRide or similar app-based carpool " 
						<?php
if(in_array("QuickRide or similar app-based carpool ",$d))
{
	
	echo "checked";
}
	


?>
			> QuickRide or similar app-based carpool  <br>
			
			

			
					
            <input type="checkbox" name="rank1[]" value="Ola/Uber or similar" 
						<?php
if(in_array("Ola/Uber or similar",$d))
{
	
	echo "checked";
}
	


?>
			> Ola/Uber or similar  <br>
            <input type="checkbox" name="rank1[]" value="Olashare/Uberpool or similar"
						<?php
if(in_array("Olashare/Uberpool or similar",$d))
{
	
	echo "checked";
}
	


?>
			> Olashare/Uberpool or similar <br>
			
			

			
		
	<b> Auto-Rickshaw</b> <br>	
			
			
			
			<input type="checkbox" name="rank1[]" value="Ola auto" 
						<?php
if(in_array("Ola auto",$d))
{
	
	echo "checked";
}
	


?>
			> Ola auto <br>	
			
			
			<input type="checkbox" name="rank1[]" value="Uber Auto" 
						<?php
if(in_array("Uber Auto",$d))
{
	
	echo "checked";
}
	


?>
			> Uber auto <br>	
			
				
			


 <b>Two-wheeler owned, shared, taxi</b>  <br>
			
			
			

 


			           <input type="checkbox" name="rank1[]" value="Own two-wheeler" 
						<?php
if(in_array("Own two-wheeler",$d))
{
	
	echo "checked";
}
	


?>
			> Own two-wheeler <br>
			
			  <input type="checkbox" name="rank1[]" value="Own two-wheeler with family members,colleagues, or friends" 
						<?php
if(in_array("Own two-wheeler with family members,colleagues, or friends",$d))
{
	
	echo "checked";
}
	


?>
			> Own two-wheeler with family members,

colleagues, or friends<br>
			
			
			
			
	


			
            <input type="checkbox" name="rank1[]" value="Ride in friend or colleague’s two-wheeler" 
						<?php
if(in_array("Ride in friend or colleague’s two-wheeler",$d))
{
	
	echo "checked";
}
	


?>
			> Ride in friend or colleague’s two-wheeler <br>
			
			
			


			
			
			
			<input type="checkbox" name="rank1[]" value="App-based two-wheeler rental like Bounce,Vogo etc."
			<?php
if(in_array("App-based two-wheeler rental like Bounce,Vogo etc.",$d))
{
	
	echo "checked";
}
	


?>	> App-based two-wheeler rental like Bounce,Vogo etc.  <br>
            <input type="checkbox" name="rank1[]" value="Bike-taxi such as Rapido" 
						<?php
if(in_array("Bike-taxi such as Rapido",$d))
{
	
	echo "checked";
}
	


?>
			> Bike-taxi such as Rapido<br>

 <b>Bicycle, personal or bikeshare</b><br>
			
			

 
			<input type="checkbox" name="rank1[]" value="Personal Bicycle" 
						<?php
if(in_array("Personal Bicycle",$d))
{
	
	echo "checked";
}
	


?>
			> Personal Bicycle<br>
			
			
			<input type="checkbox" name="rank1[]" value="Bikeshare, Yulu or Pedl" 
						<?php
if(in_array("Bikeshare, Yulu or Pedl",$d))
{
	
	echo "checked";
}
	


?>
			> Bikeshare, Yulu or Pedl<br>
			
				<input type="checkbox" name="rank1[]" value="Walk" 
						<?php
if(in_array("Walk",$d))
{
	
	echo "checked";
}
	


?>
			> <b>Walk</b><br>
			
	<br><br>



 </td>

<td class="td1">
<input type="checkbox" name="rank2[]" value="Train"
					<?php
if(in_array("Train",$e))
{
	
	echo "checked";
}
	


?>
  ><b> Train</b>  <br>
 








		   <input type="checkbox" name="rank2[]" value="Namma Metro"
					<?php
if(in_array("Namma Metro",$e))
{
	
	echo "checked";
}
	


?>
  ><b> Namma Metro</b>  <br>

        <input type="checkbox" name="rank2[]" value="Office bus or ELCITA shuttle"

			<?php
if(in_array("Office bus or ELCITA shuttle",$e))
{
	
	echo "checked";
}
	


?>
  ><b> Office bus or ELCITA shuttle</b>  <br>  
			
			

			
			
			        <input type="checkbox" name="rank2[]" value="BMTC Bus"

			<?php
if(in_array("BMTC Bus",$e))
{
	
	echo "checked";
}
	


?>
  ><b> BMTC Bus</b>  <br>  
			
<b> Car/Cab/Carpool</b>  <br>  
			
			



			<input type="checkbox" name="rank2[]" value="Own car drive self"
			
			<?php
if(in_array("Own car drive self",$e))
{
	
	echo "checked";
}
	


?>
  > Own car drive self  <br>
            <input type="checkbox" name="rank2[]" value="Own car as passenger"  
						<?php
if(in_array("Own car as passenger",$e))
{
	
	echo "checked";
}
	


?>
			> Own car as passenger  <br>
			
			
	

			
			
			       <input type="checkbox" name="rank2[]" value="Office car" 
						<?php
if(in_array("Office car",$e))
{
	
	echo "checked";
}
	


?>
			> Office car  <br>
			
			       <input type="checkbox" name="rank2[]" value="Office cab service" 
						<?php
if(in_array("Office cab service",$e))
{
	
	echo "checked";
}
	


?>
			> Office cab service  <br>
			


			
            <input type="checkbox" name="rank2[]" value="Ride in friend or colleague’s car" 
						<?php
if(in_array("Ride in friend or colleague’s car",$e))
{
	
	echo "checked";
}
	


?>
			> Ride in friend or colleague’s car  <br>
            <input type="checkbox" name="rank2[]" value="QuickRide or similar app-based carpool " 
						<?php
if(in_array("QuickRide or similar app-based carpool ",$e))
{
	
	echo "checked";
}
	


?>
			> QuickRide or similar app-based carpool  <br>
			
			

			
					
            <input type="checkbox" name="rank2[]" value="Ola/Uber or similar" 
						<?php
if(in_array("Ola/Uber or similar",$e))
{
	
	echo "checked";
}
	


?>
			> Ola/Uber or similar  <br>
            <input type="checkbox" name="rank2[]" value="Olashare/Uberpool or similar"
						<?php
if(in_array("Olashare/Uberpool or similar",$e))
{
	
	echo "checked";
}
	


?>
			> Olashare/Uberpool or similar <br>
			
			

			
			
			


			
<b> Auto-Rickshaw</b> <br>	
			
			
			
			<input type="checkbox" name="rank2[]" value="Ola auto" 
						<?php
if(in_array("Ola auto",$e))
{
	
	echo "checked";
}
	


?>
			> Ola auto <br>	
			
			
			<input type="checkbox" name="rank2[]" value="Uber Auto" 
						<?php
if(in_array("Uber Auto",$e))
{
	
	echo "checked";
}
	


?>
			> Uber auto <br>	
			
		
<b>Two-wheeler owned, shared, taxi</b>  <br>
			
			
			

 


			           <input type="checkbox" name="rank2[]" value="Own two-wheeler" 
						<?php
if(in_array("Own two-wheeler",$e))
{
	
	echo "checked";
}
	


?>
			> Own two-wheeler <br>
			
			  <input type="checkbox" name="rank2[]" value="Own two-wheeler with family members,colleagues, or friends" 
						<?php
if(in_array("Own two-wheeler with family members,colleagues, or friends",$e))
{
	
	echo "checked";
}
	


?>
			> Own two-wheeler with family members,

colleagues, or friends<br>
			
			
			
			
	


			
            <input type="checkbox" name="rank2[]" value="Ride in friend or colleague’s two-wheeler" 
						<?php
if(in_array("Ride in friend or colleague’s two-wheeler",$e))
{
	
	echo "checked";
}
	


?>
			> Ride in friend or colleague’s two-wheeler <br>
			
			
			


			
			
			
			<input type="checkbox" name="rank2[]" value="App-based two-wheeler rental like Bounce,Vogo etc."
			<?php
if(in_array("App-based two-wheeler rental like Bounce,Vogo etc.",$e))
{
	
	echo "checked";
}
	


?>	> App-based two-wheeler rental like Bounce,Vogo etc.  <br>
            <input type="checkbox" name="rank2[]" value="Bike-taxi such as Rapido" 
						<?php
if(in_array("Bike-taxi such as Rapido",$e))
{
	
	echo "checked";
}
	


?>
			> Bike-taxi such as Rapido<br>

 <b>Bicycle, personal or bikeshare</b><br>
			
			

 
			<input type="checkbox" name="rank2[]" value="Personal Bicycle" 
						<?php
if(in_array("Personal Bicycle",$e))
{
	
	echo "checked";
}
	


?>
			> Personal Bicycle<br>
			
			
			<input type="checkbox" name="rank2[]" value="Bikeshare, Yulu or Pedl" 
						<?php
if(in_array("Bikeshare, Yulu or Pedl",$e))
{
	
	echo "checked";
}
	


?>
			> Bikeshare, Yulu or Pedl<br>
			
				<input type="checkbox" name="rank2[]" value="Walk" 
						<?php
if(in_array("Walk",$e))
{
	
	echo "checked";
}
	


?>
			> <b>Walk</b><br>
			
	<br><br>


  </td>


</tr>









</table>






</td>




</tr>                     	
				
				
				
				
				
							
				
				
				
<tr><td colspan="2"><div class="Register Back" onclick="go_back()">Previous Page</div><input type="submit" name="Submit" value="Next Page" id="register_btn3" class="Register"/></td></tr>
		
		
		
		</table>
		</form>








</body>


</html>


