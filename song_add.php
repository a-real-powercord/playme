<!DOCTYPE html>
<html lang="en">
<?php require('connect.php') ?>
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
            <div class="classy-nav-container breakpoint-off">
                <!-- classy Menu -->
                <nav class="classy-navbar justify-content-between" id="playmeNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        

                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                            
                                <li class="current-item"><a href="./index.html">Home</a></li>
                                <li><a href="">Songs</a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">- Home</a></li>
                                        <li><a href="./music-list.html">- Song List</a></li>
                                        <li><a href="">- Song List 2</a></li>
                                        <li><a href="">- Contact</a></li>
                                        <li><a href="">- Login</a></li>
                                        <li><a href="">- music Details</a></li>
                                        <li><a href="">- Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Contact</a></li>
                                <li><a href="">Login</a></li>
                            </ul>

                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="index.html" method="post">
                                    <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Top Social Area -->
                            <div class="top-social-area">
                                <a href="#" class="fa fa-youtube-play" aria-hidden="true"></a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h2 class="title mt-70">All Music</h2>
                    <h4 id="insert-peen" class="now-playing"></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <!-- ***** Musci Details Area Start ***** -->
    <section class="blog-details-area">
        <div class="container">
        <div>
            <form action="/action_page.php">
                <label for="sname">Song Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="aname">Artist</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="genre">Genre</label>
                <select id="genre" name="genre">
                    <option value="hip hop">Hip Hop</option>
                    <option value="rap">Rap</option>
                    <option value="indie">Indie</option>
                </select>
            
                <input type="submit" value="Submit">
            </form>
        </div>
        
        </div>

            </div>
        </div>
    </section>
    <!-- ***** Blog Details Area End ***** -->
    <!-- ***** Newsletter Area Start ***** -->
    <section class="playme-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Content -->
                <div class="col-12 col-lg-6">
                    <div class="newsletter-content mb-50">
                        <h2>Register to PlayMe Today!</h2>
                        <h6>Register to gain access to our premium features. </h6>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6">
                    <div class="newsletter-form mb-50">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
                            <button type="submit" class="btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">About Us</h4>

                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    </div>
                </div>

                
                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Follow Us</h4>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- App Download Button -->
                        <div class="app-download-button mt-30">
                            <a href="#"><img src="./img/core-img/app-store.png" alt=""></a>
                            <a href="#"><img src="./img/core-img/google-play.png" alt=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
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