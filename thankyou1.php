<?php 
function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
session_start();
include 'header.php';
error_reporting(1);


//  $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


		
//  if (isset($_POST['Submit'])) { 
 
//    $_SESSION['comment'] = $_POST['comment'];
//       $_SESSION['survey2'] = $_POST['survey2'];
//        $_SESSION['lastpagetime'] = $_POST['lastpagetime'];
   
// $stmt = $conn->prepare("UPDATE users3 SET comment = :comment,completed = :completed,survey2 = :survey2, lastpagetime = :lastpagetime

 
 
 
 
 
 
 
 
 
//  WHERE id = :id");


 
 
 

					











// $stmt->bindParam(':id', $id);

// $stmt->bindParam(':comment', $comment);
// $stmt->bindParam(':completed', $completed);
// $stmt->bindParam(':survey2', $survey2);
// $stmt->bindParam(':lastpagetime', $lastpagetime);






// $id= $_SESSION['id'];


// $comment= $_SESSION['comment'];
// $survey2= $_SESSION['survey2'];
// $lastpagetime= $_SESSION['lastpagetime'];

// $completed = ($_SESSION['email_Man'])&&($_SESSION['webpage2_Man'])&&($_SESSION['webpage2_Op'] >= 0.8)&&($_SESSION['webpage100_Man'])&&($_SESSION['webpage100_Op'] >= 0.8)&&($_SESSION['trip2_Man'])&&($_SESSION['trip2_Op'] >= 0.8)&&($_SESSION['optional_Op'] >= 0.8)&&($_SESSION['future_Op'] >= 0.8);
// if($completed)
//     $completed=1;
// else
//     $completed=0;
// $stmt->execute();


//  } 
	
// 	// if(($_SESSION['email_Man'])&&($_SESSION['webpage2_Man'])&&($_SESSION['webpage2_Op'] >= 0.8)&&($_SESSION['webpage100_Man'])&&($_SESSION['webpage100_Op'] >= 0.8)&&($_SESSION['trip2_Man'])&&($_SESSION['trip2_Op'] >= 0.8)&&($_SESSION['optional_Op'] >= 0.8)){
// 		// $username= $_SESSION['username'];

// 		// $stmt1 = $conn->prepare("SELECT ConfirmCode FROM users3 WHERE username = :username");
// 		// $stmt1->bindParam(':username', $username);
// 		// $stmt1->execute();
// 		// while($row = $stmt1->fetch()) {
// 			// $ConfirmCode = $row['ConfirmCode'];
// 			// if($ConfirmCode == NULL){
// 				// $ConfirmCode = random_str(10);
// 				// $stmt = $conn->prepare("SELECT COUNT(*) FROM users3 WHERE ConfirmCode = :ConfirmCode");
// 				// $stmt->bindParam(':ConfirmCode', $ConfirmCode);
// 				// $stmt->execute();
// 				// $ConfirmResult = $stmt->fetch();
// 				// if($ConfirmResult[0] == 0){
// 					// $stmt = $conn->prepare("UPDATE users3 SET ConfirmCode = :ConfirmCode WHERE id = :id");
// 					// $stmt->bindParam(':id', $id);
// 					// $stmt->bindParam(':ConfirmCode', $ConfirmCode);
// 					// $stmt->execute();
// 				// }
// 			// }
// 		// }
// 	// }else{
// 		// $ConfirmCode = '';
// 	// }
 
?>



<html>
<head>

	<title> Register, login and logout user php mysql</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	
	
	
</head>
<body>




<br><br><br><br><br><br><br><br><br>

	

									<b> <br>
									 
																
									 <br></b>
									 
									 
									 
							                  <div class="w3-content w3-display-container" style="max-width:800px">
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
			window.location.href = 'thankyou.php';
		}
		go_to_start = function(){
			window.location.href = 'webpage2.php';
		}
	</script>						  
				<?php if($completed){
					echo '<div style="text-align:center">Congratulations on completing your survey! We will next verify your responses. This may include a phone call/text message on your mobile or an email sent to your gmail in the next 3 to 5 working days.</div>';
				}else{
					echo "
					<div style='text-align:center'>Thank you for completing your survey. 
					You have either missed one or more mandatory question or left some of the remaining questions unanswered. 
					You may go back to answer more questions. If you believe this assessment is in error, 
					please write to <a href='mailto:surveys.cistup@iisc.ac.in' style='color: #4277f4;'>surveys.cistup@iisc.ac.in</a> with your serial number/mobile number and gmail address.<br>
					<div style='float:none;margin-bottom:10px;' class='Register Back' onclick='go_back()'>Previous Page</div>
					<div style='float:none;' class='Register Back' onclick='go_to_start()'>First Page</div>
					</div>
					<br>
				";
				}?>
				  
				  <figure>
				    <figcaption>	<h2 style="text-align:center;">Thank you for your valuable input.	</h2></figcaption>
  <img class="mySlides" src="assets/images/electroniccityp.jpg" style="width:100%; border-style:ridge;border-width:thick;">

</figure>


</div>		 
									 
									 
									 



			
			
			
			
			
			
			
			
			
			
			
			
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

