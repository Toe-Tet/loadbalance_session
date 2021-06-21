<?php 

require 'config/database.php';
require 'vendor/stefangabos/zebra_session/Zebra_Session.php';

$con = connect();
$session = new Zebra_Session($con, 'sEcUr1tY_c0dE');

if(!$_SESSION['user']) {
	header("Location: ./index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	session_destroy();
	header("Location: ./index.php");
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
	
	<div class="container-signup"><!-- start container -->
					
		<div class="row-signup"><!-- start row 1 -->
			
				
			<div class="con-fix con-signup"> <!-- start inner container -->
				
				
				<div class="col-full"><!-- start full container-tiitle -->
					
					<div class="col-title">
					<H3>SERVER & SECTION CHECK</H3>
					</div>
					
				</div><!-- End full container-tiitle -->
				
				
				<div class="col-half">  <!-- start half container -->
							
					<p class="caption">FULL NAME</p>
					<p class="server">WEB SEVER 01</p>	
											
				</div>  <!-- End half container -->
				
					
				<div class="col-half"><!-- start half container -->
											
					<p class="caption">SECTION NAME</p>
					<p class="section">SECTION 01</p>
									
				</div>  <!-- End half container -->
					
	
		 <!-- start Row2 -->
					
		 		<form action="" method="POST">

					<div class="col-full"><!-- start half container -->
						
						<button class="btn btn-refresh" onclick="javascript:window.location.reload();" type="button">SEVER RELOAD</button>
						
						<button class="btn btn-Logout" type="submit">LOG OUT</button>
										
					</div>  <!-- End half container -->	

				</form>						
			
				
				
				
			</div> <!-- End Fix container -->
			
		</div><!-- End row 2 -->
		
		
		
		
	</div>	<!-- End continer -->
		
</body>
</html>