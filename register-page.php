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
        <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
            <div class="login-box middle">
            <div class="register">
			<h1>Register</h1>
			<form action="php/register_auth.php" method="post" autocomplete="off">
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

				<input type="text" name="permissions" placeholder="Permissions Level" id="permissions" required>
				<input type="submit" value="Register">
				
			</form>
			<h3>Already Registered? Click <a href="login-page.php">HERE</a></h3>
		</div>
            

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
  <script src="js/default-assets/active.js"></script>