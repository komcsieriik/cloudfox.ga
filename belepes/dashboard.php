<?php
//csak bejelentkezett jatekosoknak.
//session inditas.
require_once "config/AuthMeController.php";


session_start();



if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("location: login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
 <!-- Meta -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="author" content="komcsierik">
     <meta name="keywords" content="cloudfox">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta property="og:type" content="Cloudfox" />
     <meta property="og:title" content="Minecraft szerver" />
     <meta property="og:description" content="Mennyire vagy jó túlélő? Próbáld ki magad a szerverünkön te is! Egyszerű túlélő szerver, kisebb kiegészítésekkel." />
     <meta property="og:image" content="http://cloudfox.ga/belepes/logo.png" />
     <meta property="og:url" content="http://cloudfox.ga/" />
     <meta property="og:url" content="http://cloudfox.ga/index.html" />
 <!-- /Meta-->
  <link rel="stylesheet" href="others/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="others/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="others/css/my-login.css">
</head>

<body min-height="4000" scroll="no" style="overflow: hidden" class="my-login-page"><br /><br />
	<section  class="h-100">
		<div  class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div  class="card-wrapper">
						<center><img src="others/fej.jpg" width="150" height"150"> </center>
<br>						
			<center><h1 style="color:#e38809"><?php echo ($_SESSION["username"]); ?></h1> </center>
			<center><h4 style="color: white">[ Sikeresen bejelentkeztél! ]</h4></center>
		<br>

	<center><a href="logout.php" class="btn btn-danger">Kijelentkezés</a> </center>
					<div style="color:#e38809" class="footer">
						Cloudfox by komcsierik &copy; 2021
					</div>
                         
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
