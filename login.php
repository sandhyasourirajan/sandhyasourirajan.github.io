<?php 
session_start();/*pHp session starts here, make sure there is no white space*/
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
error_reporting(0);/* To see the error make it 1 */
// $servername = "localhost";/* Connect to the external server database */
// $dbname = "websurve_webbasesurvey";
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", "websurve_root", "cistup@1234");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
// include('server.php');/* Include the server.php file */
?> 








<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style100.css">
</head>
<body>
     <!-- Media query for mobile, tab and desktops -->
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
					     
					
     
      <script type = "text/javascript">
         <!--
            function getValue() {
               var retVal = alert("Sorry. We were unable to identify you. We request you to please get a new serial number and password.");

            }
         //-->
		 
		   function getValue1() {
             var retVal = alert("Sorry. We were unable to identify you. We request you to please get a new serial number and password.");
            }
      </script>      
   
   

 
				
                        <div id="center_mobile" class="navbar-caption" href="#top"><span style="font-size: 20px;" ></style>
						
						<br><br><br><br><br><br>

						 
<br><br>

                    </div>
					
				
				
				
				
				
				  <div id="center_title" class="navbar-caption" href="#top"><span style="font-size: 20px; text-align: centre;" ></style>
						
					   
						  
						<br><br><br><br><br><br>	<br><br>
						
						
						
						</div>
						
						
				
				
				
				
				
				
				
				
				
				
				

	
	  <link href="estilo.css" type="text/css" rel="stylesheet" />
	<form method="post" action="login.php">

<!-- error.php-->		<?php include('errors.php'); ?>

		<div class="input-group">
		<p>
		 Logging in for the first time? <br>Please <a href="register.php">click here</a> to get your serial number and enter your password.<br> 
		</p>
			<span style="color: #060686"> Please login with your serial no. </span>
			  
			<label class="header" style="text-align:center;"></label>
		
		</div>
		<div class="input-group">
			<label>Serial no.</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		
    
	</form>

   
       

</body>
</html>