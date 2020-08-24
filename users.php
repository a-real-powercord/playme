<!DOCTYPE html>
<html lang="en">
<?php 

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'dojustly01';
$DATABASE_NAME = 'authentication';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
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

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-thumbnail">
            <img src="./img/core-img/preloader.png" alt="">
        </div>
    </div>
    


    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <?php require('nav.php') ?>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h2 class="title mt-70">Edit Users</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <!-- ***** Musci Details Area Start ***** -->
    <div class="demo bottomright">
            <h4 id="insert-peen" class="now-playing"></h4>
    </div>

    

    <section class="blog-details-area">
        <div class="container">
            <div class="music-page-space-maker"></div>
            
    <?php

    $query = "SELECT `accounts`.`id` , `accounts`.`username` , `accounts`.`password` , `accounts`.`email` 
    FROM accounts
    ORDER BY id ASC";


    $result = mysqli_query($con, $query);

    $results_array = array();

    while ($output = mysqli_fetch_array($result)){
        $results_array[$output["id"]] = [$output["username"], $output["email"]];
    }
    ?>
    
        <div class="grid-parent top-grid">
            <div class="grid-child"><h2 class='heading' data-type="player"></h2><a class="" aria-hidden="true"></a></div>
            <div class="grid-child"><h2 class='heading' data-type="username">NAME <i class="fa fa-angle-down name-down" style="font-size:24px"></i></h2></div>
            <div class="grid-child"><h2 class='heading' data-type="password">EMAIL <i class="fa fa-angle-down artist-down" style="font-size:24px"></i></h2></div>
            <div class="grid-child"><h2 class='heading' data-type="genre">EDIT <i class="fa fa-angle-down" style="font-size:24px"></i></h2></div>
        </div>
        <div id="container">
    <?php
    
    foreach ($results_array as $array_value){
        $username = $array_value[0];
        $email = $array_value[1];

        

    ?>
    <!-- ***** One line on the grid-->
                <div class="grid-parent data-parent grid-color" data-player = "<?php echo $directory ?>" data-title="<?php echo $username?>" data-artist="<?php echo $email?>" data-genre="<?php echo $password?>">
                    <div class="grid-child grid-before">
                    </div>
                    <div class="grid-child grid-items"><?php echo $username ?></div>
                    <div class="grid-child grid-items"><?php echo $email ?></div>
                    <div class="grid-child grid-items"><button>Delete</button></div>
                
  </div>

    <?php
    
    }

    ?>

</div>

            </div>
        </div>
    </section>
    <!-- ***** Blog Details Area End ***** -->
    <!-- ***** Newsletter Area Start ***** -->
    
    <!-- ***** Footer Area End ***** -->
    <!-- ******* All JS ******* -->
    <!-- jQuery js -->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js" integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA=" crossorigin="anonymous"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/playme.bundle.mini.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>
    <!-- Sort js -->
    <script language="JavaScript" type="text/javascript" src="js/sort.js"></script>
    <!--Audio Scripts -->
    <script src="js/player.js"></script>

    <script>
        $(document).ready(function () {
            $('.mediPlayer').mediaPlayer();
        });
    </script>
    
</body>

</html>