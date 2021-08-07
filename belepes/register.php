<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="iLimoPhP">
  <meta name="keyword" content="minecraft theme, iLimoPhP">
  <meta name="description" content="Cloudfox">
  <title>Cloudfox | Regisztráció</title>
  <link rel="stylesheet" href="others/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="others/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="others/css/my-login.css">
</head>
<body min-height="4000" class="my-login-page"><br /><br />
	<section  class="h-100">
		<div  class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div  class="card-wrapper">
						<img src="logo.png" width="400" height"400">
					<div  class="card fat"> 
						<div  class="card-body">
							<h4 style="color:#e38809" class="card-title">Cloudfox <small  class="text-muted">Regisztráció</small></h4>
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <?php
                    $realname ="0";
					require 'config/functions.php';
                require 'config/AuthMeController.php';
                require 'config/Sha256.php';

                $authme_controller = new Sha256();
                if($_SERVER["REQUEST_METHOD"] == "POST") {
                  $action = $_POST["action"];
                  $user = $_POST["username"];
                  $pass = $_POST["password"];
                  $email = $_POST["email"];

                  $was_successful = false;
                  if ($action && $user && $pass) {
                      if ($action === 'Login') {
                          $was_successful = process_login($user, $pass, $authme_controller);
                      }
                      else if ($action === 'Register') {
                          $was_successful = process_register($user, $pass, $email, $authme_controller);
						              $param_username = $username;
                      }
                  }
                }

                ?>
								<div  class="form-group">
									<label for="username">Nickneved</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus>
								</div>

								<div class="form-group">
									<label for="email">E-Mail címed</label>
									<input id="email" type="email" class="form-control" name="email" required>
								</div>

								<div class="form-group">
									<label for="password">Jelszavad</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								</div>

								 <div class="form-group">
									<label>
										<input type="checkbox" name="aggree" value="1"> Tisztában vagyok vele, hogy a Cloudfox minecraft szerverre regisztráltam!
									</label>
								</div> 

								<div class="form-group no-margin">
									<button  type="submit" class="btn btn-warning btn-block" name="action" value="Register">
										Regisztráció
									</button>
								</div>
								<div color="orange" class="margin-top20 text-center">
									Már regisztráltál? <a style="color:#e38809" href="bejelentkezes.php">Jelentkezz be!</a>
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
