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

//  if (isset($_POST['Submit'])) 
//  {
		
// 		if(!empty($_POST['nometro'])) {
//   $i = 0;
//   foreach($_POST['nometro'] as $x){
//    $_SESSION["nometro"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["nometroArraySize"] = $i; //store the number of 'modes'
// }






//   $_SESSION['nometroother'] = $_POST['nometroother'];
 

// $_SESSION['takeMetro'] = $_POST['takeMetro'];
// if(!empty($_POST['yesmetro'])) {
//   $i = 0;
//   foreach($_POST['yesmetro'] as $x){
//    $_SESSION["yesmetro"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["yesmetroArraySize"] = $i; //store the number of 'modes'
// }



  

// if(!empty($_POST['getbackhomefrommetro'])) {
//   $i = 0;
//   foreach($_POST['getbackhomefrommetro'] as $x){
//    $_SESSION["getbackhomefrommetro"][$i] = $x;
//    $i++;
//   }
//   $_SESSION["getbackhomefrommetroArraySize"] = $i; //store the number of 'modes'
// }


  
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
 
 
// $stmt = $conn->prepare("UPDATE users3 SET yesmetro = :yesmetro_string ,getbackhomefrommetro = :getbackhomefrommetro_string,nometro = :nometro_string,nometroother = :nometroother,takeMetro =:takeMetro




 
 
 
//  WHERE id = :id");


 
 
 
 











// $stmt->bindParam(':id', $id);
// $stmt->bindParam(':takeMetro', $takeMetro);







// $stmt->bindParam(':nometro_string', $nometro_string);

// $stmt->bindParam(':nometroother', $nometroother);

// $stmt->bindParam(':yesmetro_string', $yesmetro_string);

// $stmt->bindParam(':getbackhomefrommetro_string', $getbackhomefrommetro_string);


   
   
   
  



   

				   
				   
			
												 
	
	
	
	

	
	

// $id= $_SESSION['id'];
// $nometroother= $_SESSION['nometroother'];
// $takeMetro= $_SESSION['takeMetro'];
// $op_page=$_SESSION['op_page'];	
// 		$nm = [];
	
// 		$ym = [];
// 		$gbhfm = [];



// $i = 0;
		

		

		
	
		
		
		
		
// 		for($i = 0;$i<$_SESSION["nometroArraySize"];$i++) {
// 		$nm[$i]=$_SESSION['nometro'][$i];
// 		}
		
// 		$nometro_string = implode(",",$nm);
		
		
	
		
// 			for($i = 0;$i<$_SESSION["yesmetroArraySize"];$i++) {
// 		$ym[$i]=$_SESSION['yesmetro'][$i];
// 		}
		
// 		$yesmetro_string = implode(",",$ym);
		
// 			for($i = 0;$i<$_SESSION["getbackhomefrommetroArraySize"];$i++) {
// 		$gbhfm[$i]=$_SESSION['getbackhomefrommetro'][$i];
// 		}
		
// 		$getbackhomefrommetro_string = implode(",",$gbhfm);




		
		
		
		
		
		
		
		
		
	
	
	
	
	


// $stmt->execute();

	

 

	
	
	
	


	
	

	
	
	
	

// 			$arr = array(2,3);
	
// 	$link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
 
// 	if($link === false){
// 		die("ERROR: Could not connect. " . mysqli_connect_error());
// 	}
// 	$username= $_SESSION['username'];

// 	$sql = "SELECT op_page1 FROM users3 WHERE username='$username'";
// 	if($result = mysqli_query($link, $sql)){
// 		if(mysqli_num_rows($result) > 0){

// 			while($row = mysqli_fetch_array($result)){
// 				$op_page1 = $row['op_page1'];
// 				if($op_page1 == 0){
// 					$op_page1 = $arr[array_rand($arr)];
// 					$stmt = $conn->prepare("UPDATE users3 SET op_page1 = :op_page1 WHERE id = :id");
// 					$stmt->bindParam(':id', $id);
// 					$stmt->bindParam(':op_page1', $op_page1);
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
	 
// 	if($op_page1 == 1)
// 		header("Location: future.php");
// 	if($op_page1 == 2)
// 		header("Location: present4.php");
// 	if($op_page1 == 3)
// 		header("Location: modechoicequestions.php");

 
//  }
//  include 'header.php';
// ?>
// <?php 

 


// /* Attempt MySQL server connection. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
//  $username= $_SESSION['username'];
//  error_log($username);
// // Attempt select query execution
// $sql = "SELECT * FROM users3 WHERE username='$username'";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){

//         while($row = mysqli_fetch_array($result)){
            
           
			
     
// 	 $takeMetro=$row['takeMetro'];
// 	 $bikeShare=$row['bikeShare'];
// 	 $yesmetro=$row['yesmetro'];
// 	 $a=explode(",",$yesmetro);
// 	  $yesmetroother=$row['yesmetroother'];
// 	   $getbackhomefrommetro=$row['getbackhomefrommetro'];
// 	   $b=explode(",",$getbackhomefrommetro);
// 	    $getbackhomefrommetroother=$row['getbackhomefrommetroother'];
// 		 $nometro=$row['nometro'];
// 		 $c=explode(",",$nometro);
// 		  $nometroother=$row['nometroother'];
	 
	 
	 
	 
	 
	 
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
$_SESSION['prev_page'] = 'future';
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
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




$lat=$_SESSION["homelatitude"];
$long=$_SESSION["homelongitude"];


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

$(document).ready(function(){

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
        $(document).ready(function() {
            $("#panel27").hide();
            $("#panel28").hide();
			$("#panel8").hide();
			$("#panel9").hide();
			if("<?php echo $takeMetro;?>" == "no")
				$("#panel9").show();
			if("<?php echo $takeMetro;?>" == "yes")
				$("#panel8").show();
            $("#panel5").hide();
            $("#panel6").hide();
            $("#panel90").hide();
			 $("#panel91").hide();
            $("#panel100").hide();
			 $("#panel101").hide();
        });
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
<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     
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






  <link href="estilo.css" type="text/css" rel="stylesheet" />




  <div id="panel1" class="panel active">
  
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
			window.location.href = 'trip2.php';
		}
	</script>
	<?php
			if((!$_SESSION['trip2_Man'])||($_SESSION['trip2_Op'] < 0.8)){
				echo "
					<br><br>
					<div style='text-align:center'>You have not answered some questions in the previous page. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>


<form action="future.php" method="post" class="form" align="left" >
			
	<table class="table"  id="customers">

		 <tr>
								 
									 <th colspan="2"> <b><u>FUTURE METRO AND LAST MILE</u></b>
									<p align="right"> <a href="index.php?logout='1'" input type="button" id="next" class="Register" align="right">logout</a> </p>
     </th>
									 
</tr>
				
		
	
		
	           <tr>
			
			<td class="td1" colspan="2">1. Namma Metro will serve Electronic City with one station at the Toll Gate and one at the HP Entrance. The map shows the existing and proposed metro lines in Bangalore. 
			
			
			
			
			<br><br>
	
			
			</td></tr>
			
				<tr <?php 
				if(empty($lat)||(($lat == 12.8499)&&($long == 77.66250000000002))){
					echo "style='display:none'";
				}
			?>>
			<td class='td1' colspan="2"> 
			It appears that the distance of the nearest existing/proposed metro stop from your house is <b><span id='myText' ></span></b>km and it is located close to <b> <span id='myText1'></span> </b>. <br>
			
			
			
			
			
			
					</td>
			
			

	
			
			
			
			
	
			
			</tr>
        
            <tr>
			<td class="td1" colspan="2">
			
			
			<img src="assets/images/mm1.jpg"    width="75%">
			
			
			
		<br>
		
		
		
		
		
		
	<!--It appears that the distance of the nearest metro stop from your house is <b>0.52 km</b> and it is located close to <b>Electronic City-1</b> metro station. The nearest landmark is <b>Sri Venkateshwara Theatre</b>. <br>
			
		
			
			
	-->	<br>

To enable access to your workplace from the metro stations, the following last mile connectivity infrastructure might be available in the future. 


<br><br>






<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>





<div class="row">
  <div class="column">
   &nbsp;&nbsp; <img src="assets/images/walkway3.jpg" alt="Snow" style="width:87%"  border="3"><br>Elevated walkways or bikeways
  </div>
  <div class="column">
    <img src="assets/images/bikeshare1.jpg" style="width:82%"  border="3"><br>App-based Bikeshare (bike rental): eg. Yulu or Pedl
  </div>
  <div class="column">
    <img src="assets/images/bounce1.jpg" alt="Mountains" style="width:82%" border="3"><br>App-based two-wheeler rental: eg. Bounce, Vogo
  </div>
</div>


















	
			</td>
			</tr>
	
			 <tr>
			<td class="td1" colspan="2">
			<span class="question">When Metro comes to Electronic City along with the above last mile modes, would you use it for your commute?* </span><br>
                <input type="radio" id="yesMetro" name="takeMetro" value="yes" onclick="showNext(this)" <?php echo ($takeMetro== 'yes') ?  "checked" : "" ;  ?>>Yes<br>
                <input type="radio" id="noMetro" name="takeMetro" value="no" onclick="showNext(this)" <?php echo ($takeMetro== 'no') ?  "checked" : "" ;  ?>>No<br><br>



   



<!--			
<span class="question">	Are you familiar with the bikesharing systems such as Yulu or Pedl bikes?</span><br>
			
			<input type="radio" id="yesKnown" name="bikeShare" value="yes" onclick="showNext(this)" <?php echo ($bikeShare== 'yes') ?  "checked" : "" ;  ?> >Yes<br>
            <input type="radio" id="noKnown" name="bikeShare" value="no" onclick="showNext(this)" <?php echo ($bikeShare== 'no') ?  "checked" : "" ;  ?>>No<br><br>

			

	<div class="tab-panels2">
  <ul class="tabs2">
    <li rel="panel5" class="active2">Yes</li>
    <li rel="panel6">No</li>

  </ul>


  <div id="panel5" class="panel2 active2">
   

   



<b>Please proceed</b>


 </div>
  
  
  
  
  
  
  
  
  
  
  
  
  <div id="panel6" class="panel2">
    
 Bikesharing systems provide a network of shared bicycles that can be rented easily by an app in different business models.<br>

<img src="assets/images/bikeshare1.jpg"    width="100%">
			
			

 </div>
 
-->


  <div id="panel8" class="panel1 active1">
		
				
		<span class="question"> How would you reach work from Electronics City metro station? You may select more than one option.* </span>  <br><br>
           
 <input type="checkbox" name="yesmetro[]" value="Train"
					<?php
if(in_array("Train",$a))
{
	
	echo "checked";
}
	


?>
  ><b> Train</b>  <br>
 






		   <input type="checkbox" name="yesmetro[]" value="Office bus or ELCITA shuttle"
					<?php
if(in_array("Office bus or ELCITA shuttle",$a))
{
	
	echo "checked";
}
	


?>
  ><b> Office bus or ELCITA shuttle</b>  <br>

        <input type="checkbox" name="yesmetro[]" value="BMTC Bus"

			<?php
if(in_array("BMTC Bus",$a))
{
	
	echo "checked";
}
	


?>
  ><b> BMTC Bus</b>  <br>  
			
			

			
			
			        <b> Car/Cab/Carpool</b>  <br>  
			
			
			
			<input type="checkbox" name="yesmetro[]" value="Office cab service"
			
			<?php
if(in_array("Office cab service",$a))
{
	
	echo "checked";
}
	


?>
  > &nbsp;&nbsp;&nbsp;&nbsp;Office cab service  <br>
            <input type="checkbox" name="yesmetro[]" value="Ride in friend or colleague’s car"  
						<?php
if(in_array("Ride in friend or colleague’s car",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car  <br>
			
			
			
			
			
			       <input type="checkbox" name="yesmetro[]" value="QuickRide or similar app-based carpool" 
						<?php
if(in_array("QuickRide or similar app-based carpool",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool  <br>
			
			
			
            <input type="checkbox" name="yesmetro[]" value="Ola Uber or similar app-based carpool" 
						<?php
if(in_array("Ola Uber or similar app-based carpool",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar  <br>
            <input type="checkbox" name="yesmetro[]" value="Olashare Uberpool or similar app-based carpool" 
						<?php
if(in_array("Olashare Uberpool or similar app-based carpool",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar app-based carpool  <br>
			
			
			
					

			
			
		<b> Auto-Rickshaw</b> <br>	
			
			
			
			<input type="checkbox" name="yesmetro[]" value="Ola auto" 
						<?php
if(in_array("Ola auto",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ola auto <br>	
			
			
			<input type="checkbox" name="yesmetro[]" value="Uber Auto" 
						<?php
if(in_array("Uber Auto",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Uber auto <br>	
			
			
			
			
			
			
			
			
			<b> Two-wheeler shared, taxi</b> <br>
			
			

			
            <input type="checkbox" name="yesmetro[]" value="Ride in friend or colleague’s two-wheeler" 
						<?php
if(in_array("Ride in friend or colleague’s two-wheeler",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler  <br>
            <input type="checkbox" name="yesmetro[]" value="Appbased twowheeler rental like BounceVogo etc"
			<?php
if(in_array("Appbased twowheeler rental like BounceVogo etc",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc.  <br>
			
			
			
			           <input type="checkbox" name="yesmetro[]" value="Bike-taxi such as Rapido" 
						<?php
if(in_array("Bike-taxi such as Rapido",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido <br>
			
			
			
			
			
			
			
			
			
			
			
             <b>Bicycle, using elevated bikeways OR on the road</b> <br>
			<input type="checkbox" name="yesmetro[]" value="Bikeshare Yulu or Pedl"
			<?php
if(in_array("Bikeshare Yulu or Pedl",$a))
{
	
	echo "checked";
}
	


?>	> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl  <br>
            <input type="checkbox" name="yesmetro[]" value="Walk using elevated walkways OR on the road" 
						<?php
if(in_array("Walk using elevated walkways OR on the road",$a))
{
	
	echo "checked";
}
	


?>
			><b>Walk, using elevated walkways OR on the road</b><br>


	<br><br>
		
		



						
		<span class="question">	  How would you return back from the metro station closest to your home? You may select more than one option.*   <br><br></span>
           
			            
						
				 <input type="checkbox" name="getbackhomefrommetro[]" value="Train"
					<?php
if(in_array("Train",$b))
{
	
	echo "checked";
}
	


?>
  ><b> Train</b>  <br>		
						
						
						
						
						
						
						
						
						
						<input type="checkbox" name="getbackhomefrommetro[]" value="Office bus or ELCITA shuttle"
					<?php
if(in_array("Office bus or ELCITA shuttle",$b))
{
	
	echo "checked";
}
	


?>
  ><b> Office bus or ELCITA shuttle</b>  <br>

        <input type="checkbox" name="getbackhomefrommetro[]" value="BMTC Bus"

			<?php
if(in_array("BMTC Bus",$b))
{
	
	echo "checked";
}
	


?>
  ><b> BMTC Bus</b>  <br>  
			
			

			
			
			       <b> Car/Cab/Carpool</b>  <br>  
			
			
			
			<input type="checkbox" name="getbackhomefrommetro[]" value="Office cab service"
			
			<?php
if(in_array("Office cab service",$b))
{
	
	echo "checked";
}
	


?>
  > &nbsp;&nbsp;&nbsp;&nbsp;Office cab service  <br>
            <input type="checkbox" name="getbackhomefrommetro[]" value="Ride in friend or colleague’s car"  
						<?php
if(in_array("Ride in friend or colleague’s car",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s car  <br>
			
			
			
			
			
			       <input type="checkbox" name="getbackhomefrommetro[]" value="QuickRide or similar app-based carpool" 
						<?php
if(in_array("QuickRide or similar app-based carpool",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;QuickRide or similar app-based carpool  <br>
			
			
			
            <input type="checkbox" name="getbackhomefrommetro[]" value="Ola Uber or similar app-based carpool" 
						<?php
if(in_array("Ola Uber or similar app-based carpool",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ola/Uber or similar  <br>
            <input type="checkbox" name="getbackhomefrommetro[]" value="Olashare Uberpool or similar app-based carpool" 
						<?php
if(in_array("Olashare Uberpool or similar app-based carpool",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Olashare/Uberpool or similar app-based carpool  <br>
			
			
			
			<b> Auto-Rickshaw</b> <br>	
			
			
			
			<input type="checkbox" name="getbackhomefrommetro[]" value="Ola auto" 
						<?php
if(in_array("Ola auto",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ola auto <br>	
			
			
			<input type="checkbox" name="getbackhomefrommetro[]" value="Uber Auto" 
						<?php
if(in_array("Uber Auto",$a))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Uber auto <br>	
			
			
			
           <b> Two-wheeler shared, taxi</b> <br>
			
			

			
            <input type="checkbox" name="getbackhomefrommetro[]" value="Ride in friend or colleague’s two-wheeler" 
						<?php
if(in_array("Ride in friend or colleague’s two-wheeler",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Ride in friend or colleague’s two-wheeler  <br>
            <input type="checkbox" name="getbackhomefrommetro[]" value="Appbased twowheeler rental like BounceVogo etc"
			<?php
if(in_array("Appbased twowheeler rental like BounceVogo etc",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;App-based two-wheeler rental like Bounce, Vogo etc.  <br>
			
			
			
			           <input type="checkbox" name="getbackhomefrommetro[]" value="Bike-taxi such as Rapido" 
						<?php
if(in_array("Bike-taxi such as Rapido",$b))
{
	
	echo "checked";
}
	


?>
			> &nbsp;&nbsp;&nbsp;&nbsp;Bike-taxi such as Rapido <br>
			
			
			
			
			
			
			
			
			
			
			
            <b>Bicycle, using elevated bikeways OR on the road</b> <br>
			<input type="checkbox" name="getbackhomefrommetro[]" value="Bikeshare Yulu or Pedl"
			<?php
if(in_array("Bikeshare Yulu or Pedl",$b))
{
	
	echo "checked";
}
	


?>	> &nbsp;&nbsp;&nbsp;&nbsp;Bikeshare, Yulu or Pedl  <br>
            <input type="checkbox" name="getbackhomefrommetro[]" value="Walk using elevated walkways OR on the road" 
						<?php
if(in_array("Walk using elevated walkways OR on the road",$b))
{
	
	echo "checked";
}
	


?>
			><b>Walk, using elevated walkways OR on the road</b><br>



		



 </div>
  
  
  
  
  
  
  </div>
  
  
  
  
  
  <div id="panel9" class="panel1">
    

<span class="question">	Please explain your reason (check all that apply)</span> <br><br></a>
			
			
			
			
			
			<input type="checkbox" name="nometro[]" value="Home located close to work so do not need to use metro"
			<?php
if(in_array("Home located close to work so do not need to use metro",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp;Home located close to work so do not need to use metro<br>			
			
			
			
			
			
			
			
			
			
			
			
			<input type="checkbox" name="nometro[]" value="Inconvenient to get to the stop from my home"
<?php
if(in_array("Inconvenient to get to the stop from my home",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp;Inconvenient to get to the stop from my home<br>
			
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Crime-prone locality"
			<?php
if(in_array("Crime-prone locality",$c))
{
	
	echo "checked";
}
	


?>
			> Personal security concerns <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Road in poor condition"
			<?php
if(in_array("Road in poor condition",$c))
{
	
	echo "checked";
}
	


?>
			> Road in poor condition<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Too far to walk"
				<?php
if(in_array("Too far to walk",$c))
{
	
	echo "checked";
}
	


?>
				>  Too far to walk  <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Too much traffic"
<?php
if(in_array("Too much traffic",$c))
{
	
	echo "checked";
}
	


?>
> Too much traffic  <br>


			<input type="checkbox" name="nometro[]" value="Inconvenient to get to the stop from my work"
			<?php
if(in_array("Inconvenient to get to the stop from my work",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp;Inconvenient to get to the stop from my work <br>
			
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Crime-prone locality "
			<?php
if(in_array("Crime-prone locality",$c))
{
	
	echo "checked";
}
	


?>
			> Personal security concerns <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Road in poor condition"
			<?php
if(in_array("Road in poor condition",$c))
{
	
	echo "checked";
}
	


?>
			> Road in poor condition<br>
			
			
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Too far to walk"
				<?php
if(in_array("Too far to walk",$c))
{
	
	echo "checked";
}
	


?>
				>  Too far to walk  <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="checkbox" name="nometro[]" value="Too much traffic"
<?php
if(in_array("Too much traffic",$c))
{
	
	echo "checked";
}
	


?>
> Too much traffic  <br>



            <input type="checkbox" name="nometro[]" value="Need to run errands on the way"
			<?php
if(in_array("Need to run errands on the way",$c))
{
	
	echo "checked";
}
	


?>	>&nbsp;Need to run errands on the way: shopping, picking up grocery, dropping off or picking up child<br>
			<input type="checkbox" name="nometro[]" value="No one in my position rides the metro"
			<?php
if(in_array("No one in my position rides the metro",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp;No one in my position rides the metro<br>
            <input type="checkbox" name="nometro[]" value="The commute will take too long"
			<?php
if(in_array("The commute will take too long",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp;The commute will take too long<br>
			
			
			
		   <input type="checkbox" name="nometro[]" value="Metro might not be available during the hours I work"
			<?php
if(in_array(" Metro might not be available during the hours I work",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp; Metro might not be available during the hours I work<br>




   <input type="checkbox" name="nometro[]" value="Personal security concerns during the ride"
			<?php
if(in_array("Personal security concerns during the ride",$c))
{
	
	echo "checked";
}
	


?>
			>&nbsp;Personal security concerns during the ride<br>


			
			
			
			
			
			
			
		 <input type="checkbox" name="nometro[]" value="Any other"
		 <?php
if(in_array("Any other",$c))
{
	
	echo "checked";
}
	


?>
		 >&nbsp;Any other, please enter in the textbox below<br>
		
			
			


	<input type="text" name="nometroother" class="textInput" value="<?php echo (isset($nometroother)) ? $nometroother: ''?>" >

</div>
   
   
   
   <br><br>
   
   
   
 
			

</div>
 
 

		
		
		</td>
			</tr> 
			
			
		  
				
	       
			
			
			
			
			
			
			
			
			
			
			
						
		
		
		
		
	




















			
			
			</td>
			
			
			
			</tr>		
			
		
	
			
			
			
	
	
			
			
	
 

</td>
	
		</tr>
		
			<tr><td colspan="2"><div class="Register Back" onclick="go_back()">Previous Page</div><input type="submit" name="Submit" value="Next Page" id="register_btn3" class="Register"/></td></tr>
		
		
		
		</table>
		</form>
		
		
		</table>
		</form>






 </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 




</body>


</html>


