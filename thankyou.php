<?php 
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
include 'header.php';
error_reporting(0);


// $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//  if (isset($_POST['Submit'])) { 
 
// 	$totalMan = 0;
// 	$filledMan = 0;
	
// 	$totalMan += 1;
// 	if($_POST['email'] != ''){
// 		$filledMan += 1;	
// 	}
// 	$_SESSION['email_Man'] = (($totalMan-$filledMan)==0);
	
// 		$totalMan += 1;
// 	if($_POST['email1'] != ''){
// 		$filledMan += 1;	
// 	}
// 	$_SESSION['email1_Man'] = (($totalMan-$filledMan)==0);
	

// 	$_SESSION['email'] = $_POST['email']; 
// 		$_SESSION['email1'] = $_POST['email1']; 
 
// $stmt = $conn->prepare("UPDATE users3 SET email = :email, email1 = :email1 
 
//  WHERE id = :id");

// $id = $_SESSION['id'];
// $email = $_SESSION['email'];
// $email1 = $_SESSION['email1'];
 
// $stmt->bindParam(':id', $id);
// $stmt->bindParam(':email', $email);
// $stmt->bindParam(':email1', $email1);
// $stmt->execute();
//  } 
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
            
           
			
     
	 
// 	 $comment=$row['comment'];
// 	 $survey2=$row['survey2'];
	 
	 
	 
	 
	 
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

	  <link href="estilo.css" type="text/css" rel="stylesheet" />
	
	<script>
    function read() {
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (moreText.style.display === "inline") {
            btnText.innerHTML = "MORE INFORMATION";
            moreText.style.display = "none";
        } else {
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    } 
</script>
</head>
<body>

<style>
                  
                    #more {display: none;}
                    #myBtn{
                        cursor: pointer;
                        color: firebrick;
                    }
                
                </style>


<br><br><br><br><br><br><br><br><br>

	<script>
	</script>
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
			window.location.href = 'appInstructions.php';
		}
	</script>
	<?php
			if(!$_SESSION['email_Man']){
				echo "
					<br><br>
					<div style='text-align:center'>You have not entered your email in the previous page. Please go back by clicking the button below.<br>
					<div style='float:none;' class='Register Back' onclick='go_back()'>Previous Page</div>
					</div>
					<br>
				";
			}
			?>
	
	<form action="thankyou1.php" method="post" class="form" align="left" >
			
	<table class="table"  id="customers">

		
		<tr>
		
		<td class="td1" colspan="2"><b>Additional comments or suggestions on your Electronics City traffic experience: please enter below.		</b><br><br>
		
	<textarea name="comment" rows="4" cols="50" class="textInput" ><?php if(isset($comment)){ echo htmlspecialchars($comment); } ?></textarea><br>
	

	
	
 <b>Your responses are valuable in helping us find solutions to traffic problems in Electronics City. Part II of the survey will be an online choice game that will take 3 minutes to complete and will be very useful for our detailed technical analysis. Could we contact you to participate in Part II? </b>
 
  <input type="radio"  name="survey2" value="yes" class="big" <?php echo ($survey2== 'yes') ?  "checked" : "" ;  ?> />Yes&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio"  name="survey2" value="no" class="big" <?php echo ($survey2== 'no') ?  "checked" : "" ;  ?> />No&nbsp;&nbsp;&nbsp;&nbsp;

	
	<?php

date_default_timezone_set('Asia/Kolkata');
  date('h:i:s a', time());
?>
<br> <input type="hidden" name="lastpagetime" value=" <?php
echo  date("H:i:s");
?>">
		
		
		
		
		
		</td>
	
		
		</tr>	
		
			<tr><td colspan="2"><div class="Register Back" onclick="go_back()">Previous Page</div><input type="submit" name="Submit" value="Submit!" id="register_btn3" class="Register"/></td></tr>
		
		
		
		</table>
		</form>
			
			
			
			
			
			
			
			
			
			
			
			
			</span></small>
			</div>
			</div>
			</div>
	

</section>



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
   
 


              


  </body>
</html>

