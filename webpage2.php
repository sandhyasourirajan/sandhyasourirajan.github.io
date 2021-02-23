<?php
session_start();
include 'header.php';
error_reporting(1);




 /*Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// $link = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");


 /* Check connection*/
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
//  $username= $_SESSION['username'];
//  /*Attempt select query execution*/
// $sql = "SELECT * FROM users3 WHERE username='$username'";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){

//         while($row = mysqli_fetch_array($result)){
            
//           $email=$row['email'];
// 		     $mobilenumber=$row['mobilenumber'];
// 			$email1=$row['email1'];
           
// 				$date=$row['date'];
         
// 				$surveyor=$row['surveyor'];
         
    
	 
// 	 $age=$row['age'];
// 	 $gender=$row['gender'];
// 	 $status=$row['status'];
// 	 $role=$row['role'];
// 	 $roleother=$row['roleother'];
// 	 $des=$row['des'];
// 	 $designation=$row['designation'];
// 	 $company=$row['company'];
// 	 $location=$row['location'];
	 

// 	 $worklocationstreetname=$row['worklocationstreetname'];
// 	 $worklocationlocality=$row['worklocationlocality'];
// 	 $worklocationlandmarks=$row['worklocationlandmarks'];
	 
	 
	 
	 
	 
	 
	 
// 	 $institution=$row['institution'];
	
// 	 $numberofhousehold=$row['numberofhousehold'];


// 	 $homenumber=$row['homenumber'];
// 	 $streetname=$row['streetname'];
// 	 $locality=$row['locality'];
// 	 $majorlandmarks=$row['majorlandmarks'];
// 	  $pincode=$row['pincode'];
// 	 $tw=$row['tw'];
// 	 $cars=$row['cars'];
// 	 $bicycle=$row['bicycle'];
	 
	 
// 	  $tw1=$row['tw1'];
// 	 $cars1=$row['cars1'];
// 	 $bicycle1=$row['bicycle1'];
	 
	 
	 
	 
	
// 	 $homemapaddress=$row['homemapaddress'];
// 	 $homelatitude=$row['homelatitude'];
// 	 $homelongitude=$row['homelongitude'];
	 

// 	  $anyothervehicle3=$row['anyothervehicle3'];
// 	   $monthlyrange=$row['monthlyrange'];
	   
	
	
// 		 	   $officetransport=$row['officetransport'];
// 	   $a=explode(",",$officetransport);
// 		    $officetransportanyother=$row['officetransportanyother'];

// 				 $far=$row['far'];
// 				  $email1=$row['email1'];
				  
				  
// 				  $housenumber=$row['housenumber'];
// 			$streetname=$row['streetname'];
// 				$locality=$row['locality'];
				
				
				
				
				
				
				
				
// 					$majorlandmarks=$row['majorlandmarks'];
// 					$pincode=$row['pincode'];
				  
// 				   $V1=$row['V1'];
//                 $M1=$row['M1'];
// 					$MO1=$row['MO1'];
// 					$MY1=$row['MY1'];
// 					$YA1=$row['YA1'];
// 					$FT1=$row['FT1'];
// 					$KV1=$row['KV1'];
// 					$R1=$row['R1'];
					
					
// 					$genderhousehold=$row['genderhousehold'];
// 					$agehousehold=$row['agehousehold'];
// 					$statushousehold=$row['statushousehold'];
	 
	 
// 	 $otherjob1=$row['otherjob1'];
// 	 $otherjob2=$row['otherjob2'];
	 
	 
// 	 $otherjob1role=$row['otherjob1role'];
// 	 $otherjob1roleother=$row['otherjob1roleother'];
// 	 $otherjob1des=$row['otherjob1des'];
// 	 $otherjob1designation=$row['otherjob1designation'];
// 	 $otherjob1company=$row['otherjob1company'];
// 	 $otherjob1location=$row['otherjob1location'];
	 
	
// 	 $otherjob2role=$row['otherjob2role'];
// 	 $otherjob2roleother=$row['otherjob2roleother'];
// 	 $otherjob2des=$row['otherjob2des'];
// 	 $otherjob2designation=$row['otherjob2designation'];
// 	 $otherjob2company=$row['otherjob2company'];
// 	 $otherjob2location=$row['otherjob2location'];
//        }
     
//        /*  Close result set*/
//         mysqli_free_result($result);
//    } else{
//         echo "No records matching your query were found.";
//     }
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
//  /*Close connection*/
// mysqli_close($link);
?>


<html>
<head>
	<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond:500" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="/test4/elcitasurveyfinal/js/jquery.js" type="text/javascript"></script>
<script src="/test4/elcitasurveyfinal/js/jquery1.js" type="text/javascript"></script>	

   <script>
    var V1 = "<?php echo $V1;?>".split(",");
       var M1 = "<?php echo $M1;?>".split(",");
       var MO1 = "<?php echo $MO1;?>".split(",");
       var MY1 = "<?php echo $MY1;?>".split(",");
       var YA1 = "<?php echo $YA1;?>".split(",");
       var FT1 = "<?php echo $FT1;?>".split(",");
       var KV1 = "<?php echo $KV1;?>".split(",");
       var R1 = "<?php echo $R1;?>".split(",");
	   var savedRole = "<?php echo $role;?>";
	   var savedDes = "<?php echo $des;?>";
	   var personStatus = "<?php echo $status;?>";// for age, gender and employment status
	   var numHousehold = "<?php echo $numberofhousehold;?>"; 
	   var genderhousehold = "<?php echo $genderhousehold;?>".split(",");
       var agehousehold = "<?php echo $agehousehold;?>".split(",");
       var statushousehold = "<?php echo $statushousehold;?>".split(",");
       var initializeVehicles = function(){
            table_html = "<datalist id='bikeMakes'></datalist><datalist id='carMakes'></datalist><datalist id='bikeModels'></datalist><datalist id='carModels'></datalist><tr><th>Serial<br> No.</th><th>Vehicle</th><th>Owned/<br>Rented</th><th>Make</th><th>Model</th><th>Model<br> Year</th><th>Year <br>Acquired</th><th>Fuel<br> Type</th><th>Kilometers on the<br> vehicle</th></tr><tr><td>Example</td><td>Motorbike</td><td>Bounce</td><td>Bajaj</td><td>Pulsar</td><td>2017</td><td>2018</td><td>Petrol</td><td>5280</td></tr>";
            numVehicles = V1.length;// the previous vehicle table
            for(var i = 1; i <= numVehicles; i++){
                table_html += "<tr>";
                table_html += "<td>"+ (i) +"</td>";
                table_html += "<td><select name='V1[]' style='width:100%;'><option value='No Value'></option>"+((V1[i-1]=="Car")?"<option selected='selected' value='Car'>Car</option>":"<option value='Car'>Car</option>")+((V1[i-1]=="Two-Wheeler")?"<option selected='selected' value='Two-Wheeler'>Two Wheeler</option>":"<option value='Two-Wheeler'>Two Wheeler</option>")+"</select><br><br></td>";
                table_html += "<td><select name='R1[]' style='width:100%;'><option value='No Value'></option>"+((R1[i-1]=="Owned")?"<option selected='selected' value='Owned'>Owned</option>":"<option value='Owned'>Owned</option>")+((R1[i-1]=="Rented")?"<option selected='selected' value='Rented'>Rented</option>":"<option value='Rented'>Rented</option>")+((R1[i-1]=="Bounce")?"<option selected='selected' value='Bounce'>Bounce</option>":"<option value='Bounce'>Bounce</option>")+((R1[i-1]=="Vogo")?"<option selected='selected' value='Vogo'>Vogo</option>":"<option value='Vogo'>Vogo</option>")+((R1[i-1]=="DriveZy")?"<option selected='selected' value='DriveZy'>DriveZy</option>":"<option value='DriveZy'>DriveZy</option>")+((R1[i-1]=="Zoomcar")?"<option selected='selected' value='Zoomcar'>Zoomcar</option>":"<option value='Zoomcar'>Zoomcar</option>")+((R1[i-1]=="Volercar")?"<option selected='selected' value='Volercar'>Volercar</option>":"<option value='Volercar'>Volercar</option>")+((R1[i-1]=="Other")?"<option selected='selected' value='Other'>Other</option>":"<option value='Other'>Other</option>")+"</select></td>";
				table_html += "<td><input "+((V1[i-1]=="Car")?"list='carMakes'":"list='bikeMakes'")+" type='text' name='M1[]' class='textInput' maxlength='100' size='8' oninput='addMakes(this)' onfocus='addMakes(this)' value='"+M1[i-1]+"'></td>";
                table_html += "<td><input "+((V1[i-1]=="Car")?"list='carModels'":"list='bikeModels'")+" type='text' name='MO1[]' class='textInput' maxlength='100' size='8' onfocus='addModels(this)'value='"+MO1[i-1]+"'></td>";
                table_html += "<td><select name='MY1[]'><option value='No Value'> &nbsp;Select </option>"+((MY1[i-1]=="2018")?"<option selected='selected' value='2018'>&nbsp; 2018</option>":"<option value='2018'>&nbsp; 2018</option>")+((MY1[i-1]=="2017")?"<option selected='selected' value='2017'>&nbsp;  2017 </option>":"<option value='2017'>&nbsp;  2017 </option>")+((MY1[i-1]=="2016")?"<option selected='selected' value='2016'>&nbsp;  2016 </option>":"<option value='2016'>&nbsp;  2016 </option>")+((MY1[i-1]=="2010-2015")?"<option selected='selected' value='2010-2015'>&nbsp;  2010-2015 </option>":"<option value='2010-2015'>&nbsp;  2010-2015 </option>")+((MY1[i-1]=="2005-2010")?"<option selected='selected' value='2005-2010'>&nbsp;  2005-2010 </option>":"<option value='2005-2010'>&nbsp;  2005-2010 </option>")+((MY1[i-1]=="2000-2005")?"<option selected='selected' value='2000-2005'>&nbsp;  2000-2005 </option>":"<option value='2000-2005'>&nbsp;  2000-2005 </option>")+((MY1[i-1]=="2000-")?"<option selected='selected' value='2000-'>&nbsp; Before 2000 </option>":"<option value='2000-'>&nbsp; Before 2000 </option>")+"</select></td>";
                table_html += "<td><select name='YA1[]'><option value='No Value'> &nbsp;Select </option>"+((YA1[i-1]=="2018")?"<option selected='selected' value='2018'>&nbsp; 2018</option>":"<option value='2018'>&nbsp; 2018</option>")+((YA1[i-1]=="2017")?"<option selected='selected' value='2017'>&nbsp;  2017 </option>":"<option value='2017'>&nbsp;  2017 </option>")+((YA1[i-1]=="2016")?"<option selected='selected' value='2016'>&nbsp;  2016 </option>":"<option value='2016'>&nbsp;  2016 </option>")+((YA1[i-1]=="2010-2015")?"<option selected='selected' value='2010-2015'>&nbsp;  2010-2015 </option>":"<option value='2010-2015'>&nbsp;  2010-2015 </option>")+((YA1[i-1]=="2005-2010")?"<option selected='selected' value='2005-2010'>&nbsp;  2005-2010 </option>":"<option value='2005-2010'>&nbsp;  2005-2010 </option>")+((YA1[i-1]=="2000-2005")?"<option selected='selected' value='2000-2005'>&nbsp;  2000-2005 </option>":"<option value='2000-2005'>&nbsp;  2000-2005 </option>")+((YA1[i-1]=="2000-")?"<option selected='selected' value='2000-'>&nbsp; Before 2000 </option>":"<option value='2000-'>&nbsp; Before 2000 </option>")+"</select></td>";
                table_html += "<td><select name='FT1[]'><option value='No Value'>Select</option>"+((FT1[i-1]=="Petrol")?"<option selected='selected' value='Petrol'>Petrol</option>":"<option value='Petrol'>Petrol</option>")+((FT1[i-1]=="Diesel")?"<option selected='selected' value='Diesel'>Diesel</option>":"<option value='Diesel'>Diesel</option>")+((FT1[i-1]=="CNG")?"<option selected='selected' value='CNG'>CNG</option>":"<option value='CNG'>CNG</option>")+"</select></td>";
                table_html += "<td><select name='KV1[]' style='width:100%;' ><option value='No Value'></option>"+((KV1[i-1]=="Below 10,000")?"<option selected='selected' value='Below 10,000'>Below 10,000</option>":"<option value='Below 10,000'>Below 10,000</option>")+((KV1[i-1]=="10,000-30,000")?"<option selected='selected' value='10,000-30,000'>10,000-30,000</option>":"<option value='10,000-30,000'>10,000-30,000</option>")+((KV1[i-1]=="30,000-50,000")?"<option selected='selected' value='30,000-50,000'>30,000-50,000</option>":"<option value='30,000-50,000'>30,000-50,000</option>")+((KV1[i-1]=="50,000-80,000")?"<option selected='selected' value='50,000-80,000'>50,000-80,000</option>":"<option value='50,000-80,000'>50,000-80,000</option>")+((KV1[i-1]=="Above 80,000")?"<option selected='selected' value='Above 80,000'>Above 80,000</option>":"<option value='Above 80,000'>Above 80,000</option>")+"</select></td>";
                table_html += "</tr>";
            }
            if(numVehicles == 0){
                $("#table_window1").html("");
            }else{
                $("#table_window1").html(table_html);
            }
        }
		var initializePeople = function() {
			if((numHousehold == '0')||(numHousehold == 'NULL')||(numHousehold == ''))
				return;
        	var numMembers = parseInt(numHousehold);
			if($(window).width() >= 480){//mobile and desktop query
				var fieldsHTML = "<tr class='peopleField'><td class='td1'><table class='table_window'><tr><th></th><th>Gender</th><th>Age</th><th>Employment Status</th></tr>";
				for(var i = 0; i < numMembers; i++){

					fieldsHTML += "<tr><td>Person "+(i+1)+"</td>";
					fieldsHTML += "<td><select name='genderhousehold[]'><option value='No Value' disabled "+(((typeof genderhousehold[i] == "undefined")||(genderhousehold[i] == ""))?"selected":"")+">Select</option>"+((genderhousehold[i]=="male")?"<option selected='selected' value='male'>Male</option>":"<option value='male'>Male</option>")+((genderhousehold[i]=="female")?"<option selected='selected' value='female'>Female </option>":"<option value='female'>Female </option>")+((genderhousehold[i]=="other")?"<option selected='selected' value='other'>Other </option>":"<option value='other'>Other </option>")+"</select></td>";
					fieldsHTML += "<td><select name='agehousehold[]'><option value='No Value' disabled "+(((typeof agehousehold[i] == "undefined")||(agehousehold[i] == ""))?"selected":"")+">Select</option>"+((agehousehold[i]=='0to5 years')?"<option selected='selected' value='0to5 years'>0 to 5 years </option>":"<option value='0to5 years'>0 to 5 years </option>")+((agehousehold[i]=='6to12 years')?"<option selected='selected' value='6to12 years'>6 to 12 years </option>":"<option value='6to12 years'>6 to 12 years </option>")+((agehousehold[i]=='13to17 years')?"<option selected='selected' value='13to17 years'>13 to 17 years </option>":"<option value='13to17 years'>13 to 17 years </option>")+((agehousehold[i]=='18to25 years')?"<option selected='selected' value='18to25 years'>18 to 25 years </option>":"<option value='18to25 years'>18 to 25 years </option>")+((agehousehold[i]=='26to40 years')?"<option selected='selected' value='26to40 years'>26 to 40 years </option>":"<option value='26to40 years'>26 to 40 years </option>")+((agehousehold[i]=='41to55 years')?"<option selected='selected' value='41to55 years'>41 to 55 years </option>":"<option value='41to55 years'>41 to 55 years </option>")+((agehousehold[i]=='56to65 years')?"<option selected='selected' value='56to65 years'>56 to 65 years </option>":"<option value='56to65 years'>56 to 65 years </option>")+((agehousehold[i]=='65+')?"<option selected='selected' value='65+'>65 and Above </option>":"<option value='65+'>65 and Above </option>")+"</select></td>";
					fieldsHTML += "<td><select name='statushousehold[]'><option value='No Value' disabled "+(((typeof statushousehold[i] == "undefined")||(statushousehold[i] == ""))?"selected":"")+">Select</option>"+((statushousehold[i]=="NA")?"<option selected='selected' value='NA'>NA</option>":"<option value='NA'>NA</option>")+((statushousehold[i]=="Employed")?"<option selected='selected' value='Employed'>Employed</option>":"<option value='Employed'>Employed</option>")+((statushousehold[i]=="Housewife")?"<option selected='selected' value='Housewife'>Housewife</option>":"<option value='Housewife'>Housewife</option>")+((statushousehold[i]=='lookingforemployment')?"<option selected='selected' value='lookingforemployment'>Looking for employment</option>":"<option value='lookingforemployment'>Looking for employment</option>")+((statushousehold[i]=="Student")?"<option selected='selected' value='Student'>Student</option>":"<option value='Student'>Student</option>")+((statushousehold[i]=="Retired")?"<option selected='selected' value='Retired'>Retired</option>":"<option value='Retired'>Retired</option>")+((statushousehold[i]=="Unemployed")?"<option selected='selected' value='Unemployed'>Unemployed</option>":"<option value='Unemployed'>Unemployed</option>")+((statushousehold[i]=="Other")?"<option selected='selected' value='Other'>Other</option>":"<option value='Other'>Other</option>")+"</select></td></tr>";
				}
				fieldsHTML += "</table></td><td></td></tr>";
				$(fieldsHTML).insertAfter("#peopleFields");
			}else{
				var fieldsHTML = "<tr class='peopleField'><td class='td1'>";
				for(var i = 0; i < numMembers; i++){
					fieldsHTML += "Enter details of person "+(i+1)+"<br>";
					fieldsHTML += "Gender: <br><select name='genderhousehold[]' style='display:block;' class='textInput inputResizer'><option value='No Value' disabled "+(((typeof genderhousehold[i] == "undefined")||(genderhousehold[i] == ""))?"selected":"")+">Select</option>"+("<option "+((genderhousehold[i]=="male")?"selected='selected'":"")+" value='male'>Male</option>")+("<option "+((genderhousehold[i]=="female")?"selected='selected'":"")+" value='female'>Female </option>")+("<option "+((genderhousehold[i]=="other")?"selected='selected'":"")+" value='other'>Other </option>")+"</select>";
					fieldsHTML += "Age Category: <br><select name='agehousehold[]' style='display:block;' class='textInput inputResizer'><option value='No Value' disabled  "+(((typeof agehousehold[i] == "undefined")||(agehousehold[i] == ""))?"selected":"")+">Select</option>"+("<option "+((agehousehold[i]=="0to5 years")?"selected='selected'":"")+" value='0to5 years'>0 to 5 years </option>")+("<option "+((agehousehold[i]=="6to12 years")?"selected='selected'":"")+" value='6to12 years'>6 to 12 years </option>")+("<option "+((agehousehold[i]=="13to17 years")?"selected='selected'":"")+" value='13to17 years'>13 to 17 years </option>")+("<option "+((agehousehold[i]=="18to25 years")?"selected='selected'":"")+" value='18to25 years'>18 to 25 years </option>")+("<option "+((agehousehold[i]=="26to40 years")?"selected='selected'":"")+" value='26to40 years'>26 to 40 years </option>")+("<option "+((agehousehold[i]=="41to55 years")?"selected='selected'":"")+" value='41to55 years'>41 to 55 years </option>")+("<option "+((agehousehold[i]=="56to65 years")?"selected='selected'":"")+" value='56to65 years'>56 to 65 years </option>")+("<option "+((agehousehold[i]=="65+")?"selected='selected'":"")+" value='65+'>65 and above </option>")+"</select>";
					fieldsHTML += "Employment Status:<br><select name='statushousehold[]' style='display:block;' class='textInput inputResizer'><option value='No Value' disabled "+(((typeof statushousehold[i] == "undefined")||(statushousehold[i] == ""))?"selected":"")+">Select</option>"+("<option "+((statushousehold[i]=="NA")?"selected='selected'":"")+" value='NA'>NA</option>")+("<option "+((statushousehold[i]=="Employed")?"selected='selected'":"")+" value='Employed'>Employed</option>")+("<option "+((statushousehold[i]=="Housewife")?"selected='selected'":"")+" value='Housewife'>Housewife</option>")+("<option "+((statushousehold[i]=="lookingforemployment")?"selected='selected'":"")+" value='lookingforemployment'>Looking for employment</option>")+("<option "+((statushousehold[i]=="Student")?"selected='selected'":"")+" value='Student'>Student</option>")+("<option "+((statushousehold[i]=="Retired")?"selected='selected'":"")+" value='Retired'>Retired</option>")+("<option "+((statushousehold[i]=="Unemployed")?"selected='selected'":"")+" value='Unemployed'>Unemployed</option>")+("<option "+((statushousehold[i]=="Other")?"selected='selected'":"")+" value='Other'>Other</option>")+"</select><br>";
				}
				fieldsHTML += "</td></tr>";
				$(fieldsHTML).insertAfter("#peopleFields");
			}
			
        }
		
        var numVehicles;
        var numBikes;
        var numCars;
        var companies_list;
        var fourWheelers;
        var twoWheelers;
        $(document).ready(function() {
			if(personStatus == "Employed"){
				$("#panel35").show();
				$("#panel36").hide();
			} else if(personStatus == "Student"){
				$("#panel35").hide();
				$("#panel36").show();
			} else {
				$("#panel35").hide();
				$("#panel36").hide(); 
			}
			$(".hidden.animated").removeClass("hidden animated")
            $(".canHide").hide();
            $(".passHide").hide();
            $("#rideHide").hide();
            $("#otherHide1").hide();
            $("#otherHide2").hide();
            $("#homeTypeHide").hide();
			$("#otherjobquestion").hide();
			$("#otherjobquestion1").hide();
			if(<?php echo in_array("Any other, please enter in the textbox below",$a)?"true":"false";?>)
				$('input[name="officetransportanyother"]').hide();
			if(savedRole != "any other")
				$("#roleOther").hide();
			if(savedDes != "Any other")
				$("#desOther").hide();			
            numBikes = 0;
            numCars = 0;
            //initializeVehicles();
			initializePeople();
            fourWheelers = {
  "Audi": [ "A3", "A4", "A5", "A6", "A8", "Q3", "Q5", "Q7", "S5" ],
  "BMW": [ "X1", "X3", "X5", "X6", "3 Series", "5 Series", "6 Series", "7 Series", "M Series" ],
  "Chevrolet": [ "Aveo", "Aveo U VA", "Beat", "Captiva", "Cruze", "Enjoy", "Optra", "Optra Magnum", "Optra SRV", "Sail", "Sail Hatchback", "Spark", "Tavera", "Trailblazer" ],
  "Datsun": [ "GO", "redi-GO", "GO Plus" ],
  "Fiat": [ "Abarth Punto", "Abarth Avventura", "Avventura Urban Cross", "Avventura", "Linea Classic", "Fiat Linea", "Fiat Punto EVO" ],
  "Ford India": [ "Abarth Punto", "Abarth Avventura", "Avventura Urban Cross", "Avventura", "Linea Classic", "Fiat Linea", "Fiat Punto EVO" ],
  "Honda": [ "Amaze", "Accord", "Brio", "BRV", "City", "Civic", "CR-V", "Jazz", "Mobilio", "WRV" ],
  "Hyundai": [ "Accent CRDi", "Elite i20", "EON", "Elantra", "Creta", "Grand i10", "Getz", "i20 Active", "Santro", "Sonata", "Santa Fe", "Tucson", "Verna", "Xcent" ],
  "Jeep": [ "Compass" ],
  "Mahindra": [ "Alturas G4", "Bolero", "Bolero Power Plus", "KUV100 NXT", "Logan", "Marazzo", "NuvoSport", "Rexton", "Scorpio", "Thar", "TUV 300", "TUV 300 Plus", "Verito", "Verito Vibe", "XUV500", "Xylo" ],
  "Maruti Suzuki": [ "Alto 800", "Alto K10", "Baleno", "Baleno RS", "Celerio", "Celerio X", "Ciaz", "Dzire", "Ertiga", "Eeco", "Gypsy", "Ignis", "Omni", "S-Cross", "Swift", "Wagon R", "Vitara Brezza" ],
  "Mercedes-Benz": [ "CLA", "A-Class", "GLA 45 AMG", "GLS", "B-Class", "C-Class", "CLS", "E-Class", "G-Class", "S-Class", "GLA Class", "GLC", "GLE", "SLC" ],
  "Nissan": [ "Micra Active", "Micra", "Sunny", "Terrano", "X-Trail" ],
  "Premier": [ "Rio" ],
  "Renault": [ "KWID", "Duster", "Captur", "Lodgy" ],
  "Skoda": [ "Fabia", "Kodiaq", "Laura", "Octavia", "Rapid", "Rapid Onyx Edition", "Superb", "Superb Sportline", "Yeti" ],
  "Tata Motors": [ "Bolt", "Hexa", "Nano", "Nexon", "Safari Storme", "Sumo", "Sumo Gold", "Tiago", "Tiago NRG", "Tigor", "Tiago JTP", "Zest" ],
  "Toyota": [ "Corolla Altiss", "Camry", "Etios Cross", "Etios Liva", "Fortuner", "Innova Crysta", "Innova Touring Sport", "Land Cruiser", "Land Cruiser Prado", "Prius", "Platinum Etios", "Yaris" ],
  "Volkswagen": [ "Ameo", "Beetle", "GTI", "Jetta", "Polo", "Passat", "Tiguan", "Vento" ]
};
             twoWheelers = {
  "Aprilia (Scooters)": [ "SR 150", "SR 125", "SR 150 Race" ],
  "Bajaj (Motorcycles)": [ "Avenger 220 Cruise Desert Gold Edition", "Avenger 220 Cruise", "Avenger 220 Street", "Avenger 150 Street", "Avenger 180", "Avenger 200", "Byk 100", "Boxer BM150", "CT100", "CT100B", "Dominar 400", "Discover 1", "Discover 100", "Discover 110", "Discover 135", "Discover 150", "Discover 100M", "Discover 100T", "Discover 125M", "Discover 125T", "Discover 125ST", "Discover 150S", "Discover 150F", "Kawasaki 4S Champaion 100", "Kawasaki Aspire 110", "Kawasaki Boxer 100", "Kawasaki Boxer AT 100", "Kawasaki Boxer AR 100", "Kawasaki Boxer CT 100", "Kawasaki Caliber 110", "Kawasaki Caliber 115", "Kawasaki Caliber Croma 110", "Kawasaki Eliminator 175", "Kawasaki KB100", "Kawasaki KB125", "Kawasaki Wind 125", "Pulsar 135LS", "Pulsar 150", "Pulsar 180", "Pulsar 220F", "Pulsar AS150", "Pulsar NS200", "Pulsar RS200", "Pulsar 200", "Pulsar 220", "Pulsar 220S", "Platina 100", "Platina 125", "Prowler RR125", "SX Enduro 100", "XCD 125", "XCD 135", "V15", "V12" ],
  "Hero MotoCorp (Motorcycles)": [ "Achiever 150", "Glamour", "Glamour Programmed FI", "New Glamour", "HF Dawn", "HF Deluxe", "HF Deluxe ECO", "Karizma R", "Karizma ZMR", "Passion  Pro", "Passion X Pro", "Passion Pro 110", "Super Splendor", "Splendor plus", "New Super Splendor", "Splendor iSmart+", "Splendor Pro", "Xtreme Sports", "Xtreme 200R" ],
  "Hero MotoCorp (Scooters)": [ "Destini 125", "Duet", "Maestro Edge", "Pleasure" ],
  "Honda (Motorcycles)": [ "CD 110 Dream", "CB Shine ", "CB Shine SP", "CB Hornet 160R", "CB Unicorn 150", "CB Unicorn 160 ", "CBR150R", "CBR250R", "CBR300R", "CBR650F", "Dream Neo", "Dream Yuga", "Livo", "XBlade" ],
  "Honda (Scooters)": [ "Activa 5G", "Activa 125", "Activa I", "Aviator", "Dio", "Grazia", "Honda Cliq", "Navi" ],
  "Royal Enfield (Motorcycles)": [ "Bullet 350", "Bullet 500", "Classic 350", "Classic 500", "Continental GT 650", "Interceptor 650", "Himalayan", "Thunderbird 350", "Thunderbird 350X", "Thunderbird 500", "Thunderbird 500X" ],
  "Suzuki (Motorcycles)": [ "Gixxer", "Gixxer SF", "Gixxer SP", "Gixxer SF SP", "Gixxer 250", "Hayate EP", "Intruder", "Intruder SP" ],
  "Suzuki (Scooters)": [ "Access 125", "Burgman Street", "Let's 113cc" ],
  "TVS Motor (Motorcycles)": [ "Apache RTR 160", "Apache RTR 160 4V", "Apache RTR 200 4V Race Edition 2.0", "Apache RR 310", "Apache RTR 180", "Radeon", "Sport", "Star City Plus", "Victor" ],
  "TVS Motor (Scooters)": [ "Jupiter", "Jupiter Grande", "NTORQ 125", "Scooty Pep Plus", "Scooty Zest", "Wego", "XL100" ],
  "Yamaha (Motorcycles)": [ "FZ FI", "FZ S FI (V 2.0)", "FZ 250cc", "Fazer 250cc", "Fazer-FI", "Saluto", "Saluto RX", "SZ-RR", "YZF R15 V3 Moto GP Edition", "YZF R15 V3", "YZF R15S", "YZF R3" ],
  "Yamaha (Scooters)": [ "Alpha", "Fascino", "Ray ZR", "Ray Z" ],
  "Vespa (Scooters)": [ "Elegante 150", "LX 125", "Notte 125", "RED 125", "SXL 150", "SXL 125", "VXL 150", "VXL 125" ]
};
// json table for list of companies and their addresses
            company_addresses = {
                "Infosys Limited" : [
                    "Plot No. 44, Electronics City, West Phase, Bangalore",
                    "Sy. Nos. 8 (P), 44 (P), 92 (P) & 93 (P)  Electronics City, West Phase, Bangalore",
                    "Sy. No. 9 (P), Electronics City, West Phase, Bangalore",
                    "No 44 Electronics City Phase I, Hosur Main Road, Bengaluru",
                    "Plot No. 110-P,Q,R Survey No. 68, West Phase, Electronics City, Bangalore",
                    "SY NO 156 & 157 PLOT NO 52 & 53 Electronics City West Phase, Hosur Road, Bengaluru",
                    "Sy No.10, Plot No.47  Electronics city Phase I, Hosur Road, Bengaluru",
                    "Plot No 57,58,59 & 63 ,  Sy No 157,158,161, 64 , Electronics City, Hosur Road, Bengaluru",
                    "Sy No 66 Doddathogur Begur Hobli, Electronics City, Bengaluru",
                    "Plot No 40/41 (P) Electronics city phase II, Hosur Road, Bengaluru",
                    "JP Software Park B Block, Electronics City Hosur Road, Electronics City Bangalore - 560 100.",
                    "JP IT Park  A Block  Electronics City Hosur Road Bangalore - 560 100",
                    "Plot no 20  Sy no 43 part East phase (Phase II) within e-City Industrial Township Area, Electronics city Bangalore",
                    "Electronics City, West Phase, Bangalore"
                ],
	            "Bangalore Mechatronics Pvt Ltd" : [
                    "Unit  A-213, Block I, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
                    "Unit A-214, Block I ,KSIIDC Complex, Electronics City, Hosur Road, Bengaluru"
		        ],
	            "Bangalore Safety Glass Work P Ltd" : [
                    "A-206, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
                    "A-205, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
                    "A-203, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
                    "A-202, Block II, KSSIDC Complex, Electronics City"
		        ],
	            "Biomedix Optotech & Devices Pvt Ltd" : [
                    "A-208, Block II, KSSIDC Complex, Electronics City, Hosur Road, Bengaluru",
                    "A-209, Block II, KSSIDC Complex, Electronics City, Hosur Road, Bengaluru"
		        ],
	            "Celstream Systems" : [
			        "Flat No A-201 Block II KSSIDC Complex, Electronics City, Bangalore"
		        ],
	            "Celstream Systems Private Limited" : [
			        "Sy NO : 29/A , 2nd Cross Electronics City Phase I, Hosur Main Road, Bengaluru"
		        ],
	            "Cimtrix Systems P Ltd" : [
			        "Plot No.A207, I Floor, KSSIDC Complex, Electronics City, Bangalore 560100",
			        "Plot No.B310, I Floor, KSSIDC Complex, Electronics City, Bangalore 560100"
		        ],
	            "Crystal Aqua Purity Systems" : [
			        "A 308,KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
			        "B-309/310, Block III, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
			        "C-311, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
			        "B-310, Block III, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru"
		        ],
	            "Cubic Systems" : [
                    "A-101, BLOCK-II, Ground Floor, KSSIDC Complex, Electronics City, Bengaluru",
                    "A-102, Block II, KSSIDC Complex, Electronics City, Bengaluru"
                ],

                "Customised Technologies Pvt Ltd" : [
                    "No 82B,  Electronics city phase I, Hosur Road, Bengaluru",
                    "No 73 C  Electronics city phase I, Hosur Road, Bengaluru",
                    "No 73 D  Electronics city phase I, Hosur Road, Bengaluru"
                ],

                "EIT Service India Pvt Ltd" : [
                    "Surya Tech Park II Sy No 91/1,91/2,91/3, Veerasandra Village Electronics City I Bangalore  560 100",
                    "Surya Wave SY # 61(P) Doddathogur Village, Electronic City Phase I, Bangalore 560100",
                    "Prathik Tech Park Sy no 93/1 Veersandra Village, Electronics City, Bengaluru"
                ],

                "ELCIA" : [
                    "Sy no 7 (P) ELCIA Complex Electronics City Phase I, Bengaluru",
                    "Plot No 3  Sy No 20 & 22  Electronics City Phase I, Bengaluru"
                ],
                
                "ELCIA Cluster" : [
                    "Plot No 3  Sy No 20 & 22  Electronics City Phase I, Bengaluru"
                ],

                "Exa Thermometrics India Pvt Ltd 73/E" : [
                    "73/E Electronics City  Phase I, Hosur Road,Bengaluru"
                ],
	
                "Exa Thermometrics India Pvt Ltd-85A" : [
                    "85A,  Electronics City Phase I, Hosur Road, Bengaluru"
		        ],
	
                "Flextronics Technologies (I) Pvt Ltd."
                        : [
                            "Sy.No. 70A, Eelctronics City West Phase, Electronics City Hosur Road Bangalore - 560 100"
                        ]
                    ,

                "Flextronics Technologies India Pvt. Ltd."
                        : [
                            "S Venugopala Reddy # 18, 17th E Main 7th Cross , 6th Block  Koramangala, Bangalore "
                        ]
                    ,

                "Hewlett Packard Enterprise Global Soft Pvt Ltd"
                        : [
                            "Sy no 39 (P) EC II, HP Avenue Electronics city Phase I, Hosur Road,Bengaluru"
                        ]
                    ,

                "Hewlett Packard Global Soft Pvt Ltd"
                        : [
                            "Sy no 39 /40  (P) EC I Electronics city Phase I Hosur Road Bangalore 560 100",
                            "Sy No.39/40(P), EC II, Ecity Phase I"
                        ]
                    ,

                "Hical Infra Private Limited"
                        : [
                            "Sy no 46 & 47  Electronics city, Phase II,Bengaluru"
                        ]
                    ,

                "Hical Technologies Pvt Ltd Pha I"
                        : [
                            "Sy No 09  Electronics City Phase I, Hosur Road, Bengaluru"
                        ]
                    ,

                "HP PPS Service India Pvt Ltd"
                        : [
                            "Surya Wave SY # 61(P) Doddathogur Village, Electronic City Phase I, Bangalore 560100",
                            "Surya Park II, sy # 91/1,91/2,91/3, Veerasandra Village, Electronic City Phase I, Bangalore 560100"
                        ]
                    ,

                "ICICI Bank Ltd"
                        : [
                            "Sy no 7 (P) ELCIA Complex Electronics City Phase I, Bengaluru",
                            "No 17B   Opp to Tata BP Solar  Electronics city phase II"
                        ]
                    ,

                "ILMS Builders Private Ltd"
                        : [
                            "Software Park #  95 /1 & 95/2, Tower -2,Electronics City, Bengaluru"
                        ]
                    ,

                "ILMS Projects Private Ltd"
                        : [
                            "Software Park #  95 /1 & 95/2, Tower -2,Electronics City, Bengaluru"
                        ]
					,
                
                "Institute of Finanace and International Management"
                        : [
                            "8 P & 9 P, KIADB Industrial Area, Electronic City Phase I, Bengaluru, Karnataka 560100"
                        ]
                    ,

                "Instrument Research Associates Pvt. Ltd."
                        : [
                            "B- 203, Block I , KSSIDC  Complex,Electronics City, Hosur Road, Bengaluru",
                            "B 202, Block I, KSSIDC Complex, Electronics City ,Hosur Road, Bengaluru",
                            "A-201, Block I, KSSIDC Complex, Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Interconnection Technology"
                        : [
                            "C 311,Block II, KSSIDC Complex",
                            "Unit No B 313, Block II KSSIDC Complex Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Licra Marketing & Consultancy"
                        : [
                            "A 207  Block 3  Kssidc Industrial Estate Electronics city phase I BANGALORE"
                        ]
                    ,

                "Licra Technologies"
                        : [
                            "A-107, block III,KSIIDC Complex, Electronics City, Hosur Road, Bengaluru",
                            "A 106  Block 3  KSSIDC Industrial Estate Electronics city phase I BANGALORE",
                            "A 206  Block 3  KSSIDC Industrial Estate Electronics city phase I BANGALORE"
                        ]
                    ,

                "Mahanth Tools"
                        : [
                            "B - 110, Block III KSSIDC Complex, Electronics City, Bangalore - 560100"
                        ]
                    ,

                "Mahanth Tools  A 108"
                        : [
                            "A108, Block III, KSSIDC Complex, Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Mahanth Tools B 109"
                        : [
                            "B109, Block III, KSIIDC Complex, Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "MGM Casting Private Limited"
                        : [
                            "Electronics City Phase -I, Hosur Road, Bengaluru",
                            "Sy no 13 Plot No 27/B, Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Moog Controls India Pvt Ltd"
                        : [
                            "No 41P, 99P & 100P Electronics city phase II,Bengaluru"
                        ]
                    ,

                "Moog India Technology Center Pvt Ltd"
                        : [
                            "Plot no 1,2,&3  Electronics City Phase I, Hosur Main Road,Bengaluru"
                        ]
                    ,

                "P S Ramesh"
                        : [
                            "A301, II Floor, KSSIDC Block I, Electronics City Bangalore 560100",
                            "A302, II Floor, KSSIDC Block I, Electronics City Bangalore 560100",
                            "A303, II Floor, KSSIDC Block I, Electronics City Bangalore 560100"
                        ]
                    ,

                "Paramount Industries -Unit 87"
                        : [
                            "Unit II  No 87, 6th Cross Electronics city phase I, Hosur Road, Bengaluru"
                        ]
                    ,

                "Paramount Industries -Unit Iv  56B"
                        : [
                            "Sy.No. 56B, Electronics City, Hosur Road Banagalore - 560 100"
                        ]
                    ,

                "Paramount Stationeries"
                        : [
                            "No. V-4, Inside KSSIDC Complex, Electronics City Hosur Road Bangalore - 560100"
                        ]
                    ,

                "Pixel Softek Pvt Ltd"
                        : [
                            "Plot No. 26(P)(Corner)Sy.No.41, Electronics City, East Phase, (II Phase) Bengaluru :560 100 "
                        ]
                    ,

                "Pixel Infotech Pvt Ltd"
                        : [
                            "Sy. No.41, Plot 26(P), Phase II Electronics City, Bangalore 560100"
                        ]
                    ,

                "Raghav Bahl  B 301 Cyber Park"
                        : [
                            "Cyber park phase 2 of  3rd Floor ,B-301,Sy no 66 & 67 Electronics city West phase, Hosur Road, Bengaluru"
                        ]
                    ,

                "Raghav Bahl  B 401 Cyber Park"
                        : [
                            "Cyber park phase 2 of  4th Floor ,B-401,Sy no 66 & 67 Electronics city West phase, Bengaluru"
                        ]
                    ,

                "RGA Software Systems P Ltd"
                        : [
                            "Surya Tech Park II Sy No 91/1,91/2,91/3, Veerasandra Village Electronics City, Hosur Road, Bengaluru",
                            "Surya Wave Sy no 61(P) Doddathogur village, Electronics City, Bengaluru",
                            "No 99, Surya Park, ring Road , Electronics city phase I, Hosur Road, Bengaluru",
                            "Surya Sapphire  Plot no 03, Electronics City Phase-I, Hosur Road, Bengaluru"
                        ]
                    ,

                "S Venugopala Reddy (70A, SVR Fortune)"
                        : [
                            "#18, 17th E Main 7th Cross , 6th Block  Koramangala, Bengaluru",
                            "88/A, S V R Platina, Adjacent to K S S I D C Complex, Electronics City Phase 1, Bengaluru 560100"
                        ]
                    ,

                "Sheela Nagaraj"
                        : [
                            "Plot Nos. 74- E within Sy. No. 68 (p) in West Phase, Electronics City, Bangalore 560100",
                            "73 -F within Sy. No. 68 (p) in West Phase, Electronics City, Bangalore 560100",
                            "A Block III, KSSIDC Complex, Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Shreetronics  Enterprises -SBI Building"
                        : [
                            "Software Park Sy no 11 Part  14 Part, Electronics City, Phase -I, Hosur Road, Bengaluru"
                        ]
                    ,

                "Shreetronics Enterprises  - Center Point"
                        : [
                            "Software Park Sy no 11 Part  14 Part, Electronics City, Hosur Main Road, Bengaluru"
                        ]
                    ,

                "Shreetronics Enterprises  - Lord Plaza"
                        : [
                            "Software Park Sy no 11 Part  14 Part, Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Software Technology Park of India"
                        : [
                            "Sy no 66 & 67, Cyber park phase 1 of 6th Floor ,A 601",
                            "Plot No. 76, 77 and Part 78 in Survey No. 66 and 67 part, West Phase, Electronics City, Bengaluru"
                        ]
                    ,

                "Sree Venkateshwara Enterprises"
                        : [
                            "N Y Narayan Sy No 95/1,  95/ 2, Electronics City Phase I, Hosur Road, Bengaluru"
                        ]
                    ,

                "Sree Venkateswara Industries LLP"
                        : [
                            "Plot no 42/1 & 45/14 Phase II, Electronics City, Bengaluru"
                        ]
                    ,

                "State Bank Of India"
                        : [
                            "Software Park Sy no 11 Part  14 Part, Electronics City, Phase -I, Hosur Road, Bengaluru",
                            "No 17B   Opp to Tata BP Solar  Electronics city phase II"
                        ]
                    ,

                "Supreme Telecommunication Ltd"
                        : [
                            "A312, II Floor, KSSIDC Block I, Electronics City Bangalore 560100",
                            "A313, II Floor, KSSIDC Block I, Electronics City Bangalore 560100",
                            "A314, II Floor, KSSIDC Block I, Electronics City Bangalore 560100"
                        ]
                    ,

                "Synthesis Winding Technologies Pvt Ltd"
                        : [
                            "Sy.no. 42, Plot No 14/A, Electronics City II Phase Hosur Road Bangalore - 560100",
                            "# 95, 5th Cross Electronics City Phase I, Hosur Road, Bengaluru"
                        ]
                    ,

                "Syscon  Instruments Pvt Ltd Unit 2"
                        : [
                            "Plot No 89/A, 90/A   Electronics City Phase I, Hosur Road, Bangalore"
                        ]
                    ,

                "Syscon Instruments  Pvt Ltd"
                        : [
                            "Plot No 66, Keonics Electronics City, Hosur Road, Bengaluru"
                        ]
                    ,

                "Tata Power Solar Systems Limited"
                        : [
                            "Plot No 67B / 78, Electronics  City Phase I,  Bengaluru 560100",
                            "Part 43 & 44, Electronics city phase II, Hosur Road, Bengaluru"
                        ]
                    ,

                "Xavier Institute of Management & Entrepreneurship"
                        : [
                            "Plot no.3 Survey 43P, 44P, Electronics City, Bangalore 560100",
                            "Plot No.16, Electronics City, Phase 2, Hosur Road, Bangalore 560100"
                        ]
                    ,

                "Yokogawa India Limited"
                        : [
                            "Sy.No. 94/1C & 94/2, Tower 1, Electronics City West Phase, Electronics City, Hosur Road, Bangalore - 560 100",
                            "Plot No. 97G in Survey No. 5, Electronics City, Bangalore 560100",
                            "# 96, Electronics City Phase I, Hosur Road, Bengaluru"
                        ]
            }
            companies_list = ["3M India Limited", "A Vaidyanathan, Prop: Cleantech Consultants","A B Electronics","A Gousigan & A Nataraj","Accord Software & Systems Pvt Ltd","Aishwarya Hi Tech Industries","Ajay Industries","Altron Hotels Pvt Ltd","Amitronics Pvt Ltd","Amphenol Interconnect India Pvt Ltd","Ananth T  N - RR Electronics","Ananya Software Pvt Ltd ","Arpana Investment","Artech Info Systems Pvt Ltd.","Arvind  Industries","Aurigene Discovery Technologies Ltd","Avon Data Cables Pvt Ltd","Axis Bank Limited ","B L Ramadevi","B S Shashidhar","Babu Reddy","Bangalore Education Trust","Bangalore Goa Estates Private Limited","Bangalore Management Association","Bangalore Mechatronics Pvt Ltd","Bangalore Safety Glass Work P Ltd","Bank Of India","Baron Electronics  Pvt Ltd","Beena Jain -Semicon Park ","Bharat Sanchar Nigam Ltd ","Bhavani Industries ","BHEL - Electronics  Systems Division","Bhrugendra P Bhat","Biocon Limited","Biomedix Optotech & Devices Pvt Ltd","Bright Vista","Broadcom (Wipro campus)","By Design India Pvt Ltrd.","C Anand Reddy ","C Dac  NCST ","Café shawamek","Canara bank","Capronics Private Limited ","Celstream Systems","Celstream Systems Private Limited","Centre for Developmental Education","CGI Information Systems and Management Consultants Pvt. Ltd. (Tower 2 & Cyber Park)","Chandramathi M  C/O Cafe Corner ","Cimtrix Systems P Ltd","Clinigene International Pvt Ltd","Cmos Communication  28A","Coffee Day Next to Titan","Compact Maple Leaf  ","Continental Automotive Components (India) Pvt Ltd ","Corporate Forms Print India P Ltd","Corporation Bank","Cosmic Industrial Laboratories Ltd ","Crystal Aqua Purity Systems","Cubic Systems","Customised Technologies Pvt Ltd","Cyber Park Development & Construction Ltd (STPI)","Cyient","Dalmia Bharat Sugar & Industries Ltd ","DBOI Global Services India Pvt. Ltd.","Dr Vidhya Chanukya","Dr. Didar Singh Dulay C/o GNAT  Technologies Pvt Ltd","Dubas Engineering Pvt Ltd ","Dynascan Inspection System ","Edizi Tools Pvt Ltd ","EIT Service India Pvt Ltd","Ekram Hotel Private Limited ","ELCIA","ELCIA Cluster","Elixir Industries","Em Steele Filling Station ","Enertec Controls Limited","Erkadi Systems","Everest Electronics Components Pvt. Ltd.","Exa Thermometrics India Pvt Ltd 73/E","Exa Thermometrics India Pvt Ltd-85A","Exasense Labs Limited (Namtech Systems) ","Fanuc India Pvt Ltd ","Flextronics Technologies (I) Pvt Ltd.","Flextronics Technologies India Pvt. Ltd.","FNF Business Process Outsourcing Services Pvt Ltd","Fortuna Tech Park","Gana Yantrika Enterprises Pvt Ltd.","Gaurav Girdhar Motwane","GE india Industrial Pvt ltd.","GE Intelligent Platforms Pvt. Ltd.","Genpact India Pvt Ltd","Gill Instruments Pvt Ltd","Global Tech Park Limited ( TCS)","Happiest minds Technologies  Pvt Ltd (Safety & Traffic)","Harita Projects Pvt. Ltd","HCL Technologies","Hewlett Packard Enterprise Global Soft Pvt Ltd","Hewlett Packard Global Soft Pvt Ltd","Hical Infra Private Limited","Hical Technologies Pvt Ltd Pha I","HP PPS Service India Pvt Ltd","ICICI Bank Ltd","IDBI Bank","IIIT-B","ILMS Builders Private Ltd","ILMS Projects Private Ltd","Indian Bank","Infosys Limited","Inknow Tech Pvt Ltd","Institute of Finanace and International Management","Instrument Research Associates Pvt. Ltd.","Interconnection Technology","International School of Business & Research (ISBR)","Interplex Electronics India Pvt Ltd","ITI Ltd","J P Sudhakar","Jas Telecom Pvt Ltd","JJ Glastronics Pvt Ltd","JP IT PARK  -  B BLOCK","K MURALI  -   Kuppa Moger 30%","K N Govindraju","K Shyamprasad","K Vasudeva","Kamalalaya Hiisoft","Karam Chand  Thapar and  Brothers (Coal Sales ) Ltd","Karnataka Hybrid Micro Limited","Karnataka State Fire and Emergency Services","Karnataka State Small Industries Development Corporation Limited -Mahanth Tool Room","Kayess Engineers","Kaypee Electronics & Associates Pvt Ltd","Konar Engineering Services  Pvt Ltd","KSSIDC -Raffles Citi Management Consultants Private Limited","Kulu Phokela","Kumaon Entertainment & Hospitalities Pvt Ltd","KVS Reddy","LemonTree Hotel Bangalure","Licra Marketing & Consultancy","Licra Technologies","M A KHADAR","M R Shantha Kumar","Mach Electronics - J Nagarajan","Mahanth Tools","Mahanth Tools  A 108","Mahanth Tools B 109","Majestic Developers","Makar  Electronics Pvt Ltd","Mani Prasanna Tea & Tiffen Centre","Manjunath Kuppa Moger","Measurements and Controls India Ltd","Mega Imaging Systems","MGM Casting Private Limited","Microland Limited","Mile Stone Plot Developers (P) Ltd","Momentive Performance Materials (India) Pvt Ltd","Moog Controls India Pvt Ltd","Moog India Technology Center Pvt Ltd","Mprime Premises Private Limited","MRO Tek Limited","Muni Kannaiah Naidu","N Ananda Reddy","N Srinivasa Murthy - Kuppa Moger 30%","N Y Narayan & Others Tower 1 , 94/1c & 94/2","Namtech TAI Ltd","Narayana Chandra Reddy","Nashaa Electronics Inc K Nasser","Neil Computer Development Pvt Ltd","Net Magic IT Solutions Pvt Ltd","NRN Holdings Private Limited","NSDL- E Governace Infrastructure Ltd","NTTF -  Nettur Technical  Training Foudation","Numato Systems Pvt Ltd.","OnMobile Global LTD","Opto Circuits (India) Ltd","Oyster Inn Hotel","P S Ramesh","Pack O Tronics Fabricana","Paramount Industries -Unit 87","Paramount Industries -Unit Iv  56B","Paramount Stationeries","Partha Dental Care","PerfectVIPs Techno Solutions Pvt LTD","Perk Inn Hotels & Palaces Ltd","Perk Inn International Ltd","Pixel Softek Pvt Ltd","Pixel Infotech Pvt Ltd","Polymatrix Instrumentation Pvt Ltd","Ponni Tech Park Pvt Ltd (Tessolve)","Pranam Hospitalities and Services Pvt Ltd","Prathibha Bhat","Precision Plasto Pack","Print Point India Pvt Ltd","Quadro Info Technologies Pvt Ltd -SPPL","Quasitum Interlisoft (India) Pvt Ltd","Radel Electronics  Pvt Ltd","Radha Regent Hotels Pvt Ltd","Raghav Bahl  B 301 Cyber Park","Raghav Bahl  B 401 Cyber Park","Rahul Dravid","Rajini Poddar & Mr. Ajay Poddar","Rajkamal Industries","Ramesh  Kumar -VSM Enterprises prathik  Teck Park","Relic Industries","Rest Inn (SKR Hotels)","RGA Software Systems P Ltd","Ritukapur - B 201  Cyber Park","RK Complex- N Paravathi Devi/R Krishna Murthy","RNT Engineering Pvt Ltd -  A 110","Robert Bosch (Cyber Park)","RS Electronics Limited","S N Automats","S S Family Trust","S Venugopala Reddy (70A, SVR Fortune)","S Venugopala Reddy (88/A SVR Platinum)","Saastha Warehousing Ltd (Arvind Mills Ltd)","Sahanesh Narayan Sy No 94/1A,1B,1C","Samsung T Square  Retail","Schneider Electric India Pvt Ltd","Shantha Kelvadi","Sheela Nagaraj","Shiva Vision Opticals","Shreetronics  Enterprises -SBI Building","Shreetronics Enterprises  - Center Point","Shreetronics Enterprises  - Lord Plaza","Shri G Prasad Reddy & Smt. K M Lakshmi","Siemens Technology and Services Pvt Ltd","Sigma Aldrich","Sign & Display Systems Pvt Ltd","Silkee Electronics Pvt Ltd","Silver Line Investments","SLV Industries Prop: B. Venkateshwara Reddy","Smart Link Netwok Systems Ltd","Software Technology Park of India","Software Technology Parks of India","Soroco India Pvt Ltd (NRN Holdings)","Sparrow Electronics Ltd","Sree Lakshmi Travels","Sree Venkateshwara Enterprises","Sree Venkateswara Industries LLP","Sri Sai Marketing","Sriranga IT Park","SRS Travels - Tours & Travels","State Bank Of India","Sunik Components Pvt Ltd","Sunil Kumar Agarwal","Supreme Telecommunication Ltd","Susheela Associates","Sushruta Elcoma Pvt Ltd","Syed Sajjad Ahmed, Prop: Lunar Electronics","Symbiosis Society Bangalore","Syngene International Limited","Synthesis Winding Technologies Pvt Ltd","Syscon  Instruments Pvt Ltd Unit 2","Syscon Instruments  Pvt Ltd","System Control Technology Solutions Pvt Ltd","Task IT Park","Tata Consultancy Services Ltd","Tata Power Solar Systems Limited","Tech Mahindra Limited","Technosoft International Pvt Ltd","Tejas Network Limited","Teknic Electromeconics Pvt Ltd","Teknic Euchner (I) India Pvt Ltd","Tescom Systems ","Thalassary Restaurant","The Oterra","The Tata Power Company Limited","Thread  Gauge  Products Pvt Ltd","Timken Engineering & Research India Pvt Ltd","Titan Eyes Opticals","Total Environment Technologies Pvt Ltd","Trehan Promoters & Builders Pvt Ltd","Tronn  Electronics","Tuv Rheinland India Pvt Ltd","Umesh K S","United Bank of India","V Com","V2  Dental Health  Care  Solutions","Vattikuti Technologies Pvt Ltd","Velankani Earth One Private Limited","Velankani Electronics Private Limited","Velankani Information  Systems Pvt Ltd","Velankani Infrastructure and Projects Pvt Ltd.","Velankani Software Pvt Ltd.","Venkatadri  IT Citi","Venture Technologies","Venugopal Nambiar Semicon Park","Verbinden Communication Pvt Ltd","Verifone India Technology Pvt Ltd","Vidyut Electricals","Vinyas Microsystems","Vishwa Micro Processors Pvt Ltd","Viteos Capital Market Services Limited","Voda Fone  Store","Vxl Instruments Limited","Vyom Technologies","Welingkar Institute of Management Development and Research","Wipro Limited","Wipro Limited  EC -STPI )","Wipro Limited (EC -5  S2 SEZ)","Xavier Institute of Management & Entrepreneurship","Xsysys Technologies Pvt Ltd","YASKAWA India Pvt Ltd","Yokogawa India Limited","YUM RESTAURANT (INDIA) PVT LTD","ZED Infra Tech","ZenMeter Solutions Pvt. Ltd"];
            if ($(window).width() < 480) {
                $('#center_title24').remove();
            }
            else {
                $('#center_mobile24').remove();
            }
            
        });
        var updateList = function(ele) {
            var datalistHTML = "";
            for(var i = 0; i < companies_list.length; i++){
                if(companies_list[i].toLowerCase().startsWith(ele.value.toLowerCase())){
                    datalistHTML += "<option value='"+companies_list[i]+"'>";
                }
            }
            $("#companies").html(datalistHTML);
        }
        var addAddresses = function(ele) {
            var datalistHTML = "";
            var addressList;
            if(ele.id == "work_location")
                addressList = company_addresses[$("#companyName").val()];
            else if(ele.id == "institute_location"){
                addressList = company_addresses[$("#institute").val()];
            }
            if(addressList == null){
				if(ele.id == "work_location")
                $("#work_addresses").html("");
            else if(ele.id == "institute_location"){
                $("#institute_addresses").html("");
            }
			return;}
            for(var i = 0; i < addressList.length; i++){
                    datalistHTML += "<option value='"+addressList[i]+"'>";
            }
            if(ele.id == "work_location")
                $("#work_addresses").html(datalistHTML);
            else if(ele.id == "institute_location"){
                $("#institute_addresses").html(datalistHTML);
            }
        }
        var addMakes = function(ele) {
            //console.log($(ele).attr("list"));
            $("#"+$(ele).attr("list")).empty();
            var readList;
            if($(ele).attr("list") == "bikeMakes")
                readList = twoWheelers;
            else
                readList = fourWheelers;
            for(var key in readList){
                if(key.toLowerCase().startsWith(ele.value.toLowerCase())){
                    $("#"+$(ele).attr("list")).append("<option value='"+key+"'></option>");
                }
            }
        }
        var addModels = function(ele) {
            $("#"+$(ele).attr("list")).empty();
            var readList;
            if($(ele).attr("list") == "bikeModels")
                readList = twoWheelers;
            else
                readList = fourWheelers;
            var ModelList = readList[$(ele).parent().prev().children(".textInput").val()];
            for(var i = 0; i < ModelList.length; i++){
                $("#"+$(ele).attr("list")).append("<option value='"+ModelList[i]+"'></option>");
            }
        }
        var populate = function(ele){
            table_html = "<datalist id='bikeMakes'></datalist><datalist id='carMakes'></datalist><datalist id='bikeModels'></datalist><datalist id='carModels'></datalist><tr><th>Serial<br> No.</th><th>Vehicle <br> type</th><th>Owned/<br>Rented</th><th>Make</th><th>Model</th><th>Model<br> Year</th><th>Year <br>Acquired</th><th>Fuel<br> Type</th><th>Kilometers on the<br> vehicle</th></tr><tr><td>Example</td><td>Motorbike</td><td>Bounce</td><td>Bajaj</td><td>Pulsar</td><td>2017</td><td>2018</td><td>Petrol</td><td>5280</td></tr>";
            numBikes = parseInt($("#numBikes").val());
            numCars = parseInt($("#numCars").val());
            numVehicles = 0;
            for(var i = 1; i <= numBikes; i++){
                table_html += "<tr>";
                table_html += "<td>"+ (numVehicles+i) +"</td>";
                table_html += "<td><select name='V1[]' style='width:100%;'><option value='No Value'></option><option value='Car'>Car</option><option selected='selected' value='Two-Wheeler'>Two Wheeler</option></select><br><br></td>";
                table_html += "<td><select name='R1[]' style='width:100%;'><option value='No Value'></option><option value='Owned'>Owned</option><option value='Rented'>Rented</option><option value='Bounce'>Bounce</option><option value='Vogo'>Vogo</option><option value='DriveZy'>DriveZy</option><option value='Zoomcar'>Zoomcar</option><option value='Volercar'>Volercar</option><option value='Other'>Other</option></select></td>";
				table_html += "<td><input list='bikeMakes' type='text' name='M1[]' class='textInput' maxlength='100' size='8' oninput='addMakes(this)' onfocus='addMakes(this)'></td>";
                table_html += "<td><input list='bikeModels' type='text' name='MO1[]' class='textInput' maxlength='100' size='8' onfocus='addModels(this)'></td>";
                table_html += "<td><select name='MY1[]'><option value='No Value'> &nbsp;Select </option><option value='2018'>&nbsp; 2018</option><option value='2017'>&nbsp;  2017 </option><option value='2016'>&nbsp;  2016 </option><option value='2010-2015'>&nbsp;  2010-2015 </option><option value='2005-2010'>&nbsp;  2005-2010 </option><option value='2000-2005'>&nbsp;  2000-2005 </option><option value='2000-'>&nbsp; Before 2000 </option></select></td>";
                table_html += "<td><select name='YA1[]'><option value='No Value'> &nbsp;Select </option><option value='2018'>&nbsp; 2018</option><option value='2017'>&nbsp;  2017 </option><option value='2016'>&nbsp;  2016 </option><option value='2010-2015'>&nbsp;  2010-2015 </option><option value='2005-2010'>&nbsp;  2005-2010 </option><option value='2000-2005'>&nbsp;  2000-2005 </option><option value='2000-'>&nbsp; Before 2000 </option></select></td>";
                table_html += "<td><select name='FT1[]'><option value='No Value'>Select</option><option value='Petrol'>Petrol</option><option value='Diesel'>Diesel</option><option value='CNG'>CNG</option></select></td>";
                table_html += "<td><select name='KV1[]' style='width:100%;' ><option value='No Value'></option><option value='Below 10,000'>Below 10,000</option><option value='10,000-30,000'>10,000-30,000</option><option value='30,000-50,000'>30,000-50,000</option><option value='50,000-80,000'>50,000-80,000</option><option value='Above 80,000'>Above 80,000</option></select></td>";
                table_html += "</tr>";
            }
            numVehicles += numBikes;
            for(var i = 1; i <= numCars; i++){
                table_html += "<tr>";
                table_html += "<td>"+ (numVehicles+i) +"</td>";
                table_html += "<td><select name='V1[]' style='width:100%;'><option value='No Value'></option><option selected='selected' value='Car'>Car</option><option value='Two-Wheeler'>Two Wheeler</option></select><br><br></td>";
                table_html += "<td><select name='R1[]' style='width:100%;'><option value='No Value'></option><option value='Owned'>Owned</option><option value='Rented'>Rented</option><option value='Bounce'>Bounce</option><option value='Vogo'>Vogo</option><option value='DriveZy'>DriveZy</option><option value='Zoomcar'>Zoomcar</option><option value='Volercar'>Volercar</option><option value='Other'>Other</option></select></td>";
				table_html += "<td><input list='carMakes' type='text' name='M1[]' class='textInput' maxlength='100' size='8' oninput='addMakes(this)' onfocus='addMakes(this)'></td>";
                table_html += "<td><input list='carModels' type='text' name='MO1[]' class='textInput' maxlength='100' size='8' onfocus='addModels(this)'></td>";
                table_html += "<td><select name='MY1[]'><option value='No Value'> &nbsp;Select </option><option value='2018'>&nbsp; 2018</option><option value='2017'>&nbsp;  2017 </option><option value='2016'>&nbsp;  2016 </option><option value='2010-2015'>&nbsp;  2010-2015 </option><option value='2005-2010'>&nbsp;  2005-2010 </option><option value='2000-2005'>&nbsp;  2000-2005 </option><option value='2000-'>&nbsp; Before 2000 </option></select></td>";
                table_html += "<td><select name='YA1[]'><option value='No Value'> &nbsp;Select </option><option value='2018'>&nbsp; 2018</option><option value='2017'>&nbsp;  2017 </option><option value='2016'>&nbsp;  2016 </option><option value='2010-2015'>&nbsp;  2010-2015 </option><option value='2005-2010'>&nbsp;  2005-2010 </option><option value='2000-2005'>&nbsp;  2000-2005 </option><option value='2000-'>&nbsp; Before 2000 </option></select></td>";
                table_html += "<td><select name='FT1[]'><option value='No Value'>Select</option><option value='Petrol'>Petrol</option><option value='Diesel'>Diesel</option><option value='CNG'>CNG</option></select></td>";
                table_html += "<td><select name='KV1[]' style='width:100%;' ><option value='No Value'></option><option value='Below 10,000'>Below 10,000</option><option value='10,000-30,000'>10,000-30,000</option><option value='30,000-50,000'>30,000-50,000</option><option value='50,000-80,000'>50,000-80,000</option><option value='Above 80,000'>Above 80,000</option></select></td>";
                table_html += "</tr>";
            }
            numVehicles += numCars;
            if(numVehicles == 0){
                $("#table_window1").html("");
            }else{
                $("#table_window1").html(table_html);
            }
        }                         
        var showNext = function(ele) { // hide and show the tab-panels according to the chosen input when coming back to the survey using serial no.
            $(".canHide input").removeClass("hidden animated");
            $(".passHide input").removeClass("hidden animated");
            $("#rideHide input").removeClass("hidden animated");
            $(".passHide input").hide();
            if(ele.id == "numCars"){
                if($("#"+ele.id).val() > 0) {
                    $(".canHide").show();
                } else {
                    $(".canHide").hide();
                }
                populate(ele);
            } else if(ele.id == "yesPass") {
                $(".passHide").show();
            } else if(ele.id == "noPass") {
                $(".passHide").hide();
            }
               else if(ele.id == "otherjobyes") {
                $("#otherjobquestion").show();
            } else if(ele.id == "otherjobno") {
                $("#otherjobquestion").hide();
            }
			else if(ele.id == "otherjobyes1") {
                $("#otherjobquestion1").show();
            } else if(ele.id == "otherjobno1") {
                $("#otherjobquestion1").hide();
            }
			else if(ele.id == "passType") {
                if($("#passType").val() != "anyother"){
                    $(".passHide input").hide();
                } else {
                    $(".passHide input").show();
                }
            }
			else if(ele.id == "role"){
				if(ele.value == "any other"){
					$("#roleOther").show();
				} else {
					$("#roleOther").hide();
				}
			}
			else if(ele.id == "des"){
				if(ele.value == "Any other"){
					$("#desOther").show();
				} else {
					$("#desOther").hide();
				}
			}

else if(ele.id == "yesRide") {
                $("#rideHide").show();
                $("#otherHide1").hide();
                $("#otherHide2").hide();
            } else if(ele.id == "noRide") {
                $("#rideHide").hide();
                if(($("#numCars").val() != "0"&&$("#numCars").val() != "No Value")||($("#numBikes").val() != "0"&&$("#numBikes").val() != "No Value")){
                    $("#otherHide1").show();
                    if($("[name=personalcaryesorno]").val() == "yes")
                        $("#otherHide2").show();
                    else
                        $("#otherHide2").hide();
                }
            } else if(ele.id == "yesOther") {
                $("#otherHide2").show();
            } else if(ele.id == "noOther") {
                $("#otherHide2").hide();
            } 






			else if(ele.id == "homeType"){
                if(ele.value != "Hostel"){
                    $("#homeTypeHide").show();
                }else{
                    $("#homeTypeHide").hide();
                }
            }
        } 
        var displayChoice = function() {
            if($("#status.textInput").val() == "Employed"){
                $("#panel35").show();
                $("#panel36").hide();
            } else if($("#status.textInput").val() == "Student"){
                $("#panel35").hide();
                $("#panel36").show();
            } else {
                $("#panel35").hide();
                $("#panel36").hide(); 
            }
        }
		var addPeopleFields = function(ele) {
		    console.log("working")
			if($(window).width()>=480){
				$(".peopleField").remove();
				if(ele.value == 0)
					return;
				var fieldsHTML = "<tr class='peopleField'><td class='td1'><table class='table_window'><tr><th></th><th>Gender</th><th>Age</th><th>Employment Status</th></tr>";
				for(var i = 1; i <= ele.value; i++){
					fieldsHTML += "<tr><td>Person "+i+"</td>";
					fieldsHTML += "<td><select name='genderhousehold[]'><option value='No Value' disabled selected>Select</option><option value='male'>Male</option><option value='female'>Female </option><option value='other'>Other </option></select></td>";
					fieldsHTML += "<td><select name='agehousehold[]'><option value='No Value' disabled selected>Select</option><option value='0to5 years'>0 to 5 years </option><option value='6to12 years'>6 to 12 years </option><option value='13to17 years'>13 to 17 years </option><option value='18to25 years'>18 to 25 years </option><option value='26to40 years'>26 to 40 years </option><option value='41to55 years'>41 to 55 years </option><option value='56to65 years'>56 to 65 years </option><option value='65+'>65 and above </option></select></td>";
					fieldsHTML += "<td><select name='statushousehold[]'><option value='No Value' disabled selected>Select</option><option value='NA'>NA</option><option value='Employed'>Employed</option><option value='Housewife'>Housewife</option><option value='lookingforemployment'>Looking for employment</option><option value='Student'>Student</option><option value='Retired'>Retired</option><option value='Unemployed'>Unemployed</option><option value='Other'>Other</option></select></td></tr>";
				}
				fieldsHTML += "</table></td><td></td></tr>";
				$(fieldsHTML).insertAfter("#peopleFields");
			}else{
				$(".peopleField").remove();
				if(ele.value == 0)
					return;
				var fieldsHTML = "<tr class='peopleField'><td class='td1'>";
				for(var i = 1; i <= ele.value; i++){
					fieldsHTML += "Enter details of person "+i+"<br>";
					fieldsHTML += "Gender: <br><select name='genderhousehold[]' style='display:block;' class='textInput inputResizer'><option value='No Value' disabled selected>Select</option><option value='male'>Male</option><option value='female'>Female </option><option value='other'>Other </option></select>";
					fieldsHTML += "Age Category: <br><select name='agehousehold[]' style='display:block;' class='textInput inputResizer'><option value='No Value' disabled selected>Select</option><option value='0to5 years'>0 to 5 years </option><option value='6to12 years'>6 to 12 years </option><option value='13to17 years'>13 to 17 years </option><option value='18to25 years'>18 to 25 years </option><option value='26to40 years'>26 to 40 years </option><option value='41to55 years'>41 to 55 years </option><option value='56to65 years'>56 to 65 years </option><option value='65+'>65 and above </option></select>";
					fieldsHTML += "Employment Status:<br><select name='statushousehold[]' style='display:block;' class='textInput inputResizer'><option value='No Value' disabled selected>Select</option><option value='NA'>NA</option><option value='Employed'>Employed</option><option value='Housewife'>Housewife</option><option value='lookingforemployment'>Looking for employment</option><option value='Student'>Student</option><option value='Retired'>Retired</option><option value='Unemployed'>Unemployed</option><option value='Other'>Other</option></select><br>";
				}
				fieldsHTML += "</td></tr>";
				$(fieldsHTML).insertAfter("#peopleFields");
			}
        }
		
		 
    </script>
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
<section class="engine"><a href="https://mobirise.ws/f">simple site creator</a></section><section class="mbr-section mbr-after-navbar" id="msg-box5-1" data-rv-view="437" style="background-color: rgb(255,255,255); padding-top: 160px; padding-bottom: 40px;">
             

</section>

  <link href="estilo.css" type="text/css" rel="stylesheet" />
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
 


	<form action="webpage100.php" method="post" class="form" align="left" style="width:100%;" name="english_registration_form" id="english_registration_form">
<table class="table" id="customers">
								
	
	

<tr> 

<td class="td1" colspan="2">
<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						/*echo $_SESSION['success']; */
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			
		<?php endif ?>
	</div>
<?php echo"Serial no. ".$_SESSION["id"]?><br>



Date : <?php

date_default_timezone_set('Asia/Kolkata');
echo  date('d/m/Y h:i:s a', time());
?>
<br> <input type="hidden" name="date" value=" <?php
echo  date("Y-m-d H:i:s");
?>">



<br>







	<b>Please enter your mobile number so that we could contact you for response verfication and sending the confirmation code for receiving your gift.*<br></b>
<input type="text" name="mobilenumber" class="textInput" style="width:35%"; 	value="<?php echo (isset($mobilenumber))?$mobilenumber:''?>" placeholder="Mobile Number"  ><br></td>

</tr>
 <tr>
								 
									 <th > <b>Individual and Household Information</b></th>
									 <th> Input Field</th>
									 
</tr>


	
		<tr>
			<td class="td1"><span class="question">1. What is your age category?</span>  <br><br>
			
			</td>
			<td>
		
			 
		   <select name="age"  style="width:100%;" id="age" class="textInput" >
		   <option value="<?php  	if(empty($age)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($age)) ? $age: '';
		   
		   }?>"><?php  	if(empty($age)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($age)) ? $age: '';
		   
		   }?></option>
		
			<option value="18-25">&nbsp;  18-25 years </option>
			<option value="26-40">&nbsp;  26-40 years </option>
			<option value="41-55">&nbsp;  41-55 years </option>
			<option value="56-65">&nbsp;  56-65 years </option>
			<option value="65+">&nbsp; 65+ </option>
			
			</select>
			<br>
			<span class="error"><p id="age_error" style="width:100%;"></p></span>
			</td>
			</tr>
			
			
				<tr>
                    <td class="td1"><span class="question">2. Please mention your gender. </span> <br><br>
		
			 
		
			<br>
			<span class="error"><p id="gender_error" style="width:100%;"></p></span>
			</td>
			<td><select name="gender"  style="width:100%;" id="gender" class="textInput">
		<option value="<?php  if(empty($gender)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($gender)) ? $gender: '';
		   
		   }?>"><?php  	if(empty($gender)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($gender)) ? $gender: '';
		   
		   }?></option>
			<option value="Male">&nbsp;  Male</option>
			<option value="Female">&nbsp;  Female </option>
			<option value="Other">&nbsp;  Other </option>
		
		</select>	</td>
			</tr>
			 
			
				<tr>
                    <td class="td1"><span class="question">3. Which of the following best describes your status?*</span>  <br><br>
		
			 
		   
			<br>
			<span class="error"><p id="age_error" style="width:100%;"></p></span>
			
			
			</td>
			<td><select name="status"  style="width:100%;" id="status" class="textInput"  onchange="displayChoice()">
		   <option value="<?php  	if(empty($status)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($status)) ? $status: '';
		   
		   }?>"><?php  	if(empty($status)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($status)) ? $status: '';
		   
		   }?></option>
		
			<option value="Employed">&nbsp;  Employed   </option>
			
			
			<option value="Student">&nbsp;  Student </option>
			<option value="Retired">&nbsp;  Retired</option>
			<option value="Other">&nbsp; Other </option>
			
			
			
			</select></td>
			</tr>
<tr>
<td class="td1" colspan="2">
			
				<div class="tab-panels2">
<!--
  <ul class="tabs2">
    <li rel="panel35" class="active2">Worker</li>
    <li rel="panel36">Student</li>

  </ul>
-->

  <div id="panel35" class="panel2 active2">
   

      <span class="question">Which of the following describes your work profile?* </span>
			
			
			
			
			<br>
			<span class="error"><p id="role_error" style="width:80%;"></p></span>
			
			<select name="role"  style="width:80%;" id="role" class="textInput" onchange="showNext(this)">
			<option value="<?php  	if(empty($role)) 
		   {
			   echo '';
		   }
		   else
		   {
		       echo (isset($role)) ? $role: '';
		   }?>"><?php  	if(empty($role)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($role)) ? $role: 'Select';
		   
		   }?></option>
			<option value="Contractor">&nbsp; Contractor</option>
			<option value="Employee Full-time">&nbsp; Employee Full-time</option>
			<option value="Employee Part-time">&nbsp; Employee Part-time</option>
			
			<option value="Self-employed/Business owner">&nbsp; Self-employed/Business owner</option>

			
			
			
		
		
			
			
				<option value="any other">&nbsp; Any other, please enter in textbox below</option>
			
			</select><br><input id="roleOther" type="text" name="roleother" class="textInput" style="width:80%;"
	value="<?php echo (isset($roleother)) ? $roleother: ''?>" 			><br><br>



			
			
      <span class="question">Which of the following describes your designation?*</span>
			
			<br>
			<span class="error"><p id="des_error" style="width:80%;"></p></span>
			
			<select name="des" style="width:80%;" id="des" class="textInput" onchange="showNext(this)">
			<option value="<?php  	if(empty($des)) 
		   {
			   echo '';
		   }
		   else
		   {
				echo (isset($des)) ? $des: '';
		   }?>"><?php  	if(empty($des)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($des)) ? $des: 'Select';
		   
		   }?></option>
			
				<option value="Senior employee">&nbsp;  Senior employee </option>
				<option value="Mid-level employee">&nbsp;  Mid-level employee </option>
				<option value="Junior employee">&nbsp;  Junior employee </option>
				<option value="Consultant">&nbsp; Consultant </option>
									<option value="Intern">&nbsp; Intern </option>
										<option value="Service staff">&nbsp; Service staff </option>
					<option value="Technician">&nbsp; Technician</option>
		

		
			
			
		
		
			
				<option value=" Temporary worker">&nbsp;  Temporary Worker </option>
			
			<option value="Any other">&nbsp; Any other, please enter in textbox below </option>
			</select><br><input type="text" name="designation" id="desOther" class="textInput" style="width:80%;"
			
			
			
				value="<?php echo (isset($designation)) ? $designation: ''?>" 
				>
			
			<br><br>
			
			
      <span class="question">Please enter the name of the company/business you work at.* </span>
		
		
		
		
		
			<span class="error"><p id="des_error" style="width:80%;"></p></span>
			<input list="companies" type="text" name="company" id="companyName" class="textInput" style="width:80%;" onchange="updateList(this)"
			
			
				value="<?php echo (isset($company)) ? $company: ''?>" onfocus="updateList(this)">
			<datalist id="companies">
            </datalist>
			
			
			
			
			
			
			
			
			
			
			
			
			
			

		
		
		
		
		
		
		
			
			<span class="error"><p id="nameandaddress_error" style="width:80%;"></p></span>
			
			<br><br>
			
			
      <span class="question">Please enter  the address of your work location.*</span>  
	
			
			
			
			
			
			
			
				<input list="work_addresses" type="text" name="location" id="work_location" class="textInput" onfocus="addAddresses(this)" style="width:80%;"
			
			
				value="<?php echo (isset($location)) ? $location: ''?>"  placeholder="Select address if given OR enter building number/intersection"
			
			
			
			
			
			
			>
            <datalist id="work_addresses"></datalist>
			<span class="error"><p id="nameandaddress_error" style="width:80%;"></p></span>
			
			
			
			
			
			
			
			
			
			
		
			<input type="text" name="worklocationstreetname" class="textInput" style="width:80%"; 	value="<?php echo (isset($worklocationstreetname)) ? $worklocationstreetname: ''?>" placeholder="Street name"  ><br>
			<input type="text" name="worklocationlocality" class="textInput" style="width:80%"; 	value="<?php echo (isset($worklocationlocality)) ? $worklocationlocality: ''?>" placeholder="Locality/Neighborhood/Area"  ><bR>
			<input type="text" name="worklocationlandmarks" class="textInput" style="width:80%"; 	value="<?php echo (isset($worklocationlandmarks)) ? $worklocationlandmarks: ''?>" placeholder="Major landmark"  ><br>
			
			
			
			
			
			
			
			
			
			
			
           
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

 </div>
  
  
  
  
  
  
  
  
  
  
  
  
  <div id="panel36" class="panel2">
    


      <span class="question">Please enter the name of your educational institution.*</span> 


			<input list="instituteNames" type="text" name="institution" id="institute" class="textInput" style="width:80%;" value="<?php echo (isset($institution)) ? $institution: ''?>" placeholder="Select institute if given OR enter the name. ">
            <datalist id="instituteNames">
                <option value="IIIT-B"></option>
				<option value="Institute of Finance and International Management"></option>
                <option value="International School of Business & Research (ISBR)"></option>
                <option value="Xavier Institute of Management & Entrepreneurship"></option>
	            <option value="Welingkar Institute of Management Development and Research"></option>
            </datalist>
			<span class="error"><p id="nameandaddress_error" style="width:80%;"></p></span>
			
			<br><br>
			
			

            <datalist id="institute_addresses"></datalist>
			<span class="error"><p id="nameandaddress_error" style="width:80%;"></p></span>
				

	
	
	
	
	
	
	</div>
			
			
			
			
			
		</td>	
			
		
</tr>		
			
			
		
	
		
		
		
		
	
		
		
		  <tr id="peopleFields">
		  <td class="td1" colspan="2">
				 </style>
                
				
				
                    <span class="question">4. Please enter the number of members in your household <b>excluding </b>you. </span><i> <b>No</b> housemates, roommates, short-term visitors, and family members living in a different location.
<br></i>
<br>
                
                    <select id="numHousehold" style="width:35%;" class="textInput" onchange="addPeopleFields(this)" name="numberofhousehold">
                        <option value="<?php  	if($numberofhousehold == NULL) 
		   {
			   echo 'NULL';
		   }
		   else
		   {
		   echo $numberofhousehold;
		   
		   }?>"><?php  	if($numberofhousehold == NULL) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $numberofhousehold;
		   
		   }?></option>
                        <option value=0>0</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>
                        <option value=11>11</option>
                        <option value=12>12</option>
                    </select>
					
				<br>Please fill in the table for each household member. For employment status of children 0 to 5 years, please choose NA.
                </td>
					
            </tr>
		
		
		
		
		
		
	
		
<tr>
    <td class="td1" colspan="2"><span class="question">5. Please enter the address of your home location.*  </span>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<br><br>
	
	
	
	
	
	
			<input type="text" name="housenumber" class="textInput" style="width:40%"; 	value="<?php echo (isset($housenumber)) ? $housenumber: ''?>" placeholder="House number/ Nearest intersection" >
			<input type="text" name="streetname" class="textInput" style="width:40%"; 	value="<?php echo (isset($streetname)) ? $streetname: ''?>" placeholder="Street name"  ><br><br>
			<input type="text" name="locality" class="textInput" style="width:40%"; 	value="<?php echo (isset($locality)) ? $locality: ''?>" placeholder="Locality/Neighborhood/Area"  >
			<input type="text" name="majorlandmarks" class="textInput" style="width:40%"; 	value="<?php echo (isset($majorlandmarks)) ? $majorlandmarks: ''?>" placeholder="Major landmark"  ><br><br>
			<input type="text" name="pincode" class="textInput" style="width:40%"; 	value="<?php echo (isset($pincode)) ? $pincode: ''?>" placeholder="Pincode"  ><br><br>
			
			
		<div class="tab-panels">
  <ul class="tabs">
    <li rel="panel1" class="active">Optional, click here for map. Move location marker to mark the address</li>
   
   
  </ul>

  <div id="panel1" class="panel active">
  

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
        <link href="estilo.css" type="text/css" rel="stylesheet" />

        
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-Zczfd7TqDheFotCy2AUS10K2Q5dNV2Q&libraries=places"></script>
     
        
        <script type="text/javascript" src="mapa.js"></script>
        
    
                <fieldset>

            
            
                    <div class="campos">
                        <label for="txtEndereco">Enter Address:</label>
                        <input type="text" id="txtEndereco" name="homemapaddress" placeholder="Enter address and submit!" value="<?php echo (isset($homemapaddress)) ? $homemapaddress: ''?>" />
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Submit" />
                    </div>

                    <div id="mapa"></div>
                    
    
                    
                    <input type="text" id="txtLatitude" name="homelatitude" value="<?php echo (isset($homelatitude)) ? $homelatitude: ''?>"  />
                    <input type="text" id="txtLongitude" name="homelongitude" value="<?php echo (isset($homelongitude)) ? $homelongitude: ''?>"  />

                </fieldset>
       

		<br><br>

 </div>
 
 

			 
           
 
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
			</td>
					
			
			
			
			
		</tr>
						<tr>
<td class="td1" colspan="2">			
				
				
		  <div id="center_title24" class="navbar-caption" href="#top"><span style=" text-align: centre;" ></style>		
				
	
				
	<style>
	.f1
	{
		text-align:right;
	}
	.f2
	{
		text-align:right;
    }
	
	
	
	</style>
	

   
    <span class="question2"><span class="question">6.  How many vehicles are owned by your household?* </span> <br><Br>

	<span  >
	a. Motorized two wheelers: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;
	b. Cars including SUV, Minivans:<br>
			
	 <select  name="tw" style="width:35%;" >
		<option value="<?php  	if(($tw == 'NULL')||($tw == NULL))
		   {
			   echo '0';
		   }
		   else
		   {
		   echo $tw;
		
		   }?>"><?php  	if(($tw == 'NULL')||($tw == NULL)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $tw;
		   
		   }?></option>
	 <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6 or more">6 or more</option>
 
  </select>
  
  
  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  <select  name="cars" style="width:35%;" >
	<option value="<?php  	if(($cars == 'NULL')||($cars == NULL))
		   {
			   echo '0';
		   }
		   else
		   {
		   echo $cars;
		   
		   }?>"  selected ><?php  	if(($cars == 'NULL')||($cars == NULL)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $cars;
		   }?></option>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6 or more">6 or more</option>

  </select>
  
  
  
  
<span  class="f2" style="text-align:right">
  <br><br>
	c. Bicycles: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 

			 d. Any other vehicle type
			 please enter in the textbox
			
    
	<style>
	.f1
	{
		text-align:right;
	}
	.f2
	{
		text-align:right;
    }
	
	
	
	</style>
	
	

		
		 <select name="bicycle"  style="width:35%;" id="role" class="textInput">
			<option value="<?php  	if(($bicycle == 'NULL')||($bicycle == NULL)) 
		   {
			   echo '0';
		   }
		   else
		   {
		   echo $bicycle;
		   
		   }?>" ><?php  	if(($bicycle == 'NULL')||($bicycle == NULL))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $bicycle;
		   
		   }?></option>
		   
	    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6 or more">6 or more</option>

  </select>
    
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
		
		<input type="text" name="anyothervehicle3" class="textInput" style="width:35%;" 	value="<?php echo (isset($anyothervehicle3)) ? $anyothervehicle3: ''?>" >	
		
		
		
		
		
		
		

	</div>
	
	
	
	 <div id="center_mobile24" class="navbar-caption" href="#top"> </style>
	 
	 
	   
    <span class="question2"><span class="question">6. How many vehicles are owned by your household?*</span> <br><Br>

	<span  >
	a. Motorized two wheelers: <br>
	 <select  name="tw" style="width:80%;" >
	<option value="<?php  	if(($tw == 'NULL')||($tw == NULL))
		   {
			   echo '0';
		   }
		   else
		   {
		   echo $tw;
		
		   }?>"><?php  	if(($tw == 'NULL')||($tw == NULL)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $tw;
		   
		   }?></option>
	 <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6 or more">6 or more</option>
 
  </select><br>
	
	
	
	b. Cars including SUV, Minivans:<br>
			
	
  
  

  <select  name="cars" style="width:80%;" >
	<option value="<?php  	if(($cars == 'NULL')||($cars == NULL))
		   {
			   echo '0';
		   }
		   else
		   {
		   echo $cars;
		   
		   }?>"  selected ><?php  	if(($cars == 'NULL')||($cars == NULL))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $cars;
		   
		   }?></option>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6 or more">6 or more</option>

  </select>
  
  
  <br>
  
<span  class="f2" style="text-align:right">
  <br>
	c. Bicycles: <br>
	
	
	
	
	 <select name="bicycle"  style="width:80%;" id="role" class="textInput">
			<option value="<?php  	if(($bicycle == 'NULL')||($bicycle == NULL))
		   {
			   echo '0';
		   }
		   else
		   {
		   echo $bicycle;
		   
		   }?>" ><?php  	if(($bicycle == 'NULL')||($bicycle == NULL))
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo $bicycle;
		   
		   }?></option>
		   
	    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6 or more">6 or more</option>

  </select>
	
	
	
	
	
	
	<br>
			 d. Any other vehicle type:<br>
			
    		<input type="text" name="anyothervehicle3" class="textInput" style="width:80%;" 	value="<?php echo (isset($anyothervehicle3)) ? $anyothervehicle3: ''?>" >	

	

		
		

		

		
		
		
		
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 </div>
	
	
	
	
	
		
		
		</td>
	</tr>
	
			
			<tr>
                <td class="td1"><span class="question">7. What is the monthly income range of your household, <b>including</b> your income and that of other members? </span>  <br><br>
		
			 
		
			
			</td>
			<td><select name="monthlyrange"  style="width:100%;">
		<option value="<?php  	if(empty($monthlyrange)) 
		   {
			   echo '';
		   }
		   else
		   {
		   echo (isset($monthlyrange)) ? $monthlyrange: '';
		   
		   }?>"><?php  	if(empty($monthlyrange)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($monthlyrange)) ? $monthlyrange: 'Select';
		   
		   }?></option>
			<option value="Less than 25,000">&nbsp;  Less than 25,000</option>
			<option value="25,000-50,000">&nbsp;  25,000-50,000 </option>
			<option value="50,000-1,00,000">&nbsp;  50,000-1,00,000</option>
		   <option value="1,00,000-2,00,000">&nbsp;  1,00,000-2,00,000</option>

		   <option value="2,00,000 and above">&nbsp;  2,00,000 and above</option>

		 
		</select>	
			</td>
			</tr>
			
		
		
		
		<script>
			noneCheck = function(ele){
				if(ele.value == 'None'){
					$('input[name="officetransport[]"]').prop('checked', false);
					$('input[name="officetransportanyother"]').val("");
					$('input[name="officetransportanyother"]').hide();
					ele.checked=true;
				}else{
					if(ele.value == 'Any other, please enter in the textbox below'){
						if(ele.checked)
							$('input[name="officetransportanyother"]').show();
						else{
							$('input[name="officetransportanyother"]').val("");
							$('input[name="officetransportanyother"]').hide();
						}
					}
					$('input[name="officetransport[]"][value="None"]').prop('checked', false);
				}
			}
		</script>
		
		<tr>
            <td class="td1" colspan="2"><span class="question">8. Which of the following transport modes does your office provide for employee commute trips? Please select all that apply.</span> <br><br>

			
			
			<input type="checkbox" onclick="noneCheck(this)" name="officetransport[]" value="None"
					<?php
if(in_array("None",$a))
{
	
	echo "checked";
}
	


?>
  > None  <br>
 
<input type="checkbox" name="officetransport[]" onclick="noneCheck(this)" value="Office bus"
					<?php
if(in_array("Office bus",$a))
{
	
	echo "checked";
}
	


?>
  > Office bus <br>
 

 <input type="checkbox" name="officetransport[]" onclick="noneCheck(this)" value="Company provided cab service"
					<?php
if(in_array("Company provided cab service",$a))
{
	
	echo "checked";
}
	


?>
  > Company provided cab service <br>
 
<input type="checkbox" name="officetransport[]" onclick="noneCheck(this)" value="Car with driver"
					<?php
if(in_array("Car with driver",$a))
{
	
	echo "checked";
}
	


?>
  > Car with driver <br>
 
<input type="checkbox" name="officetransport[]" onclick="noneCheck(this)" value="Any other, please enter in the textbox below"
					<?php
if(in_array("Any other",$a))
{
	
	echo "checked";
}
	


?>
  >Any other, please enter in the textbox below 
 

			
			
			
			
			
			
			
			
			
			
		
		</select><br>	<input type="text" name="officetransportanyother" class="textInput" style="width:35%;"  value="<?php echo (isset($officetransportanyother)) ? $officetransportanyother: ''?>"
		></td>
		</tr>
		

	
    
</tr>
    <td class="td1"><span class="question">9. How far is your home from your workplace by the route you use the most often?*</span><br><br>
			
			<br>
			<span class="error"><p id="far_error"></p></span>
</td>
			<td><select name="far"  style="width:80%;" id="far2">
			<option value="<?php  	if(empty($far)) 
		   {
			   echo Select;
		   }
		   else
		   {
		   echo (isset($far)) ? $far: '';
		
		   }?>"><?php  	if(empty($far)) 
		   {
			   echo 'Select';
		   }
		   else
		   {
		   echo (isset($far)) ? $far: 'Select';
		   
		   }?></option>
				<option value="0 to less than 2 km">&nbsp; 0 to less than 2 km</option>
			<option value="2 km to less than 5 km">&nbsp; 2 km to less than 5 km </option>
			<option value="5 km to less than 10 km">&nbsp; 5 km to less than 10 km</option>
	
					<option value="10 km to less than 20 km">&nbsp; 10 km to less than 20 km</option>
					<option value="20 km to less than 30 km">&nbsp; 20 km to less than 30 km</option>
			
			<option value="30 km or more">&nbsp; 30 km or more</option>
			
		
			</select></td>
		</tr>

	
		
		
				<tr><td colspan=2><input type="submit" name="Submit" value="Next Page" id="register_btn3" class="Register"/></td></tr>
		
		
		
		
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
  <script type="text/javascript" src="jquery-ui.custom.min.js"></script>
  
  
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
<script>
//document.getElementById("english_registration_form").onsubmit = function ()
// {
//	
//var a = document.forms["english_registration_form"]["nameandaddress"].value;
//var b = document.forms["english_registration_form"]["role"].value;
//var c = document.forms["english_registration_form"]["des"].value;
//var d = document.forms["english_registration_form"]["age"].value;
//var e = document.forms["english_registration_form"]["gender"].value;
//var f = document.forms["english_registration_form"]["vehicles"].value;
//var f = document.forms["english_registration_form"]["far"].value;
//var y = document.forms["english_registration_form"]["email"].value;
//
//var submit=true;



//
//  return submit;
//}


var validateForm = function(){
    var shouldAnswer = ["age","gender","status","numHousehold","homeaddress","tw","cars","bicycle","monthlyrange","officetransport","far"];
    var questionNo = ["1","2","3","4","5","6","7","7","7","8","9","10","11","12","13"];
    var seven = false;
    var unanswered = [];
    for(var i = 0; i < shouldAnswer.length; i++){
        if(document.forms["english_registration_form"][shouldAnswer[i]].value == "No Value"||document.forms["english_registration_form"][shouldAnswer[i]].value == ""){
            if(questionNo[i] == "7"){
                if(!seven){
                    unanswered.push(questionNo[i]);
                    seven = true;
                }
            }else{
                unanswered.push(questionNo[i]);
            }
        }
    }
    var responseString = "";
    if(unanswered.length == 0){
    } else if (unanswered.length <= 5) {
        responseString = "You have not answered the following questions:\nQ ";
        for(var i = 0; i < unanswered.length-1; i++){
            responseString += unanswered[i] + ",";
        }
        responseString += unanswered[unanswered.length-1];
    } else if (unanswered.length < 13){
        responseString = "You have not answered many questions.";
    } else {
        responseString = "You have not answered any question."
    }
    if(document.forms["english_registration_form"]["email1"].value == ""){
        responseString += "\nNo Phone Number Entered!";
    }
    if(responseString == ""){
        return true;
    }else{
        return(confirm(responseString+"\nProceed anyway?"));
    }
}    
</script>

