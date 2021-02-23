<?php 
session_start();
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost", "websurve_root", "cistup@1234", "websurve_webbasesurvey");



	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		//if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
		/*	$query = "INSERT INTO users2 (username, email, password) 
					  VALUES('$username', '$email', '$password')";*/
					  
			$idno		= $_SESSION["id"]; 
					  
					  
				$query ="UPDATE users3 set username='$username',password='$password' where id='$idno'";
					  
					  
					  
					  
					  
					  
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: webpage2.php');
			exit();
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
          //goes to the same serial no. if alreasy exists else creates new id
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users3 WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $username; //id becomes username
				$_SESSION['success'] = "You are now logged in";
				header('location: webpage2.php');
				exit();
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
include 'header.php';
?>
