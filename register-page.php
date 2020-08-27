<!DOCTYPE html>
<html>
	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="PlayMe">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
 

  <!-- Title -->
  <title></title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/progres-bar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  
  

</head>
</html>
<body>

        <!-- Welcome Slides -->


        <!-- Single Welcome Slide -->

            <div class="login-box middle">
            <div id="loginloader">
                <div class="loginloader-thumbnail">
                <img src="./img/core-img/preloader.png" alt="">
                </div>
            </div>
            <div class="register">
			<h1>Register</h1>
      <div class='login-error' id='login-error'></div>
			<form action="php/register_auth.php" method="post" autocomplete="off" id="register-bs">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
				<input type="email" name="email" placeholder="Email" id="email" required>


				<input type="submit" value="Register">
				
			</form>
			<h3>Already Registered? Click <a href="login-page.php">HERE</a></h3>
		</div>
            

        

        </div>
</body>
<!-- jQuery js -->

<script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/playme.bundle.js"></script>
  <!-- Active js -->
  <script src="js/login-ajax.js"></script>
  <script src="js/default-assets/active.js"></script>