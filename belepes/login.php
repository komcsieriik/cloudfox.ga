<?php 

session_start();

// Ellenorzi ha már bevan jelentkezve a user
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
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
  <LINK REL="SHORTCUT ICON" HREF="icon/icon.ico" />
  <link rel="stylesheet" href="others/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="others/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="others/css/my-login.css">
</head>

<body min-height="4000" class="my-login-page"><br /><br />
  <div class="container">
    <div class="row justify-content-start">

    </div>
  </div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
						<img src="logo.png" width="400" height"400">
					<div class="card fat">
						<div class="card-body">
							<h4 style="color:#e38809" class="card-title">Cloudfox <small class="text-muted"> Bejelentkezés</small></h4>
							<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php
				  $_SESSION["loggedin"] = false;

                require 'config/functions.php';
                require 'config/AuthMeController.php';
                require 'config/Sha256.php';
                $authme_controller = new Sha256();

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                  $action = $_POST["action"];
                  $user = $_POST["username"];
                  $pass = $_POST["password"];
                   
                  $was_successful = false;
if ($action && $user && $pass) {
    if ($action === 'Login') {
        session_start();
        $was_successful = process_login($user, $pass, $authme_controller);
        if ($was_successful === true) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $user;
        }
    }
}
                }

                ?>

								<div class="form-group">
									<label for="username">Nickneved</label>

									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Jelszavad</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								<div class="form-group no-margin">
									<button type="submit" name="action" class="btn btn-warning btn-block" value="Login">Bejelentkezés</button>
								</div>
								<div class="margin-top20 text-center">
									Még nincs fiókod? <a style="color:#e38809" href="register.php">Itt regisztrálhatsz!</a>
								</div>
							</form>
						</div>
					</div>
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
