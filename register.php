<?php 
session_start();
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
error_reporting(0);
// $servername = "localhost";
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

// if(!isset($_POST['reg_user'])){
//     $stmt = $conn->prepare("INSERT INTO users3() VALUES ()");
//     $stmt->execute();
//     $last_id = $conn->lastInsertId();
//     $_SESSION["id"] = $last_id;
//     if ($_SESSION['id'] == 'NULL')
//     {
//         echo 'the session is empty';
//     }
// }
// include('server.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style100.css">
</head>
<body><bR><br><br><br><bR><br><br><br>

	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
	
	<span style="color: #060686">	Please note your serial number and password so you could return to your survey later to make changes. </span>
			<label><b><?php echo"Your serial no. is ".$_SESSION["id"]?></b><br></label>
			<input type="hidden" name="username" value="<?php echo (isset($_SESSION['id'])) ? $_SESSION['id']: ''?>" class="textInput">
		</div>
		
	
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>