<?php 

	require 'config/database.php';
	require 'vendor/stefangabos/zebra_session/Zebra_Session.php';

	$con = connect();
	$session = new Zebra_Session($con, 'sEcUr1tY_c0dE');

	if($_SESSION['user']) {
		header("Location: ./page.php");
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	    $result = mysqli_query($con, $query);  

	    if(mysqli_num_rows($result) > 0) {
	    	$_SESSION['user'] = ['id' => 1, 'email' => 'toetet@gmail.com'];
	    	header("Location: ./page.php");
	    }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sokudan Login</title>
	<link rel="stylesheet" type="text/css" href="css/sokudan.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
</head>
	
<body class="body-login">
	
	<div class="container-login"><!-- start container -->
		
		

		
		<div class="row-login"><!-- start row -->
			
			<div class="con-fix login-con"> <!-- start inner container -->
				
				
				<div class="col-half col-right">  <!-- start half container -->
					
					<div class="login"><!-- start login -->
					
					<p>Sign In to your account</p>

					<form method="POST" action="">

					<input type="email" name="email" placeholder="USER ID">

					<input type="password" name="password" placeholder="PASSWORD">

					<button class="btn btn-signin" type="submit" onclick="">Sign In</button>

					</form>
						
					
					
					</div><!-- End login -->
												
				</div>  <!-- End half container -->
				
					
				<div class="col-half"><!-- start half container -->
					
					<div class="news"><!-- start news -->
						
					<h3>LOAD BALANCER TEST</h3>  
					
					<br>
					
					<p>SERVER 02</p>
					
					</div><!-- End news -->
				
				</div>  <!-- End half container -->
				
					
			</div> <!-- End inner container -->
			
		</div><!-- End row -->
		
		
	</div><!-- End Container -->	
		
		
		
</body>
</html>