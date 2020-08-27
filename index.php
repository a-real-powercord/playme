<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<head>
    <?php require('connect.php') ?>
  <meta charset="UTF-8">
  <meta name="description" content="PlayMe- Your Music and Podcast Destination">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>PlayMe - Your Music and Podcast Destination</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

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

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Welcome <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?></h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Roses - St JHN's newest release has racked up over 20,000,000 plays in the last month.</h5>
              </div>
              <!-- Welcome Music Area -->
              <div class="playme-music-area mt-100 d-flex align-items-center flex-wrap top-player" data-animation="fadeInUp" data-delay="900ms">
                <div class="playme-music-thumbnail">
                  <img src="./img/album-img/SAINt_JHN_-_Roses_Imanbek_Remix_SAINt_JHN.jpg" alt="">
                </div>
                <div class="playme-music-content">
                  <span class="music-published-date">March 6, 2020</span>
                  <h2>Roses (Imanbek Remix)</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">SAINt JHN</a> | <a href="#" class="music-catagory">Electronic</a> | <a href="#" class="music-duration">00:02:57</a></p>
                  </div>
                  <!-- Music Player -->
                  <div class="playme-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/Roses - Imanbek Remix.mp3">
                    </audio>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** Latest Episodes Area Start ***** -->
  <section class="playme-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest Episodes</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projects Menu -->
    <div class="container">
      <div class="playme-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
          <button class="btn active" data-filter="*">All</button>
          <button class="btn" data-filter="*">Latest</button>
          <button class="btn" data-filter="*">Hottest</button>
          <button class="btn" data-filter="*">Best Rated</button>
          <button class="btn" data-filter="*">Most Played</button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row playme-portfolio music-list">
      <?php

        $query = "SELECT `main`.`pk` , `main`.`song_name` , `genre`.`genre` , `artist`.`artist` , `main`.`directory`
        FROM main
        INNER JOIN `music_db`.`song_to_artist` ON `main`.`pk` = `song_to_artist`.`song_fk` 
        INNER JOIN `music_db`.`song_to_genre` ON `main`.`pk` = `song_to_genre`.`song_pk` 
        INNER JOIN `music_db`.`artist` ON `song_to_artist`.`artist_fk` = `artist`.`artist_id` 
        INNER JOIN `music_db`.`genre` ON `song_to_genre`.`genre_pk` = `genre`.`id`
        ORDER BY pk ASC";


        $result = mysqli_query($conn, $query);


        if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
        }

        $results_array = array();

        while ($output = mysqli_fetch_array($result)){
        if (array_key_exists($output["pk"], $results_array)){ 
            if(in_array($output["artist"], $results_array[$output["pk"]][1]) == false){
            array_push($results_array[$output["pk"]][1], $output["artist"]);
            }   
            if(in_array($output["genre"], $results_array[$output["pk"]][2]) == false){
            array_push($results_array[$output["pk"]][2], $output["genre"]);
            }
        }
        else{
            $results_array[$output["pk"]] = [$output["song_name"], array($output["artist"]), array($output["genre"]), $output["directory"]];
        }
        }

        foreach ($results_array as $array_value){
            $song_name = $array_value[0];
            $artist = $array_value[1];
            $genre = $array_value[2];
            $directory = $array_value[3];

            if(count($array_value[2]) == 1){
            $genre = $array_value[2][0];
            }
            else{
            $genre = join(", ", $array_value[2]);
            }

            if(count($array_value[1]) == 1){
            $artist = $array_value[1][0];

            }
            else{
            $artist = join(", ", $array_value[1]);
            }
            

        ?>
        <!-- ***** One line on the grid-->
                    <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="playme-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="playme-music-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
            <div class="playme-music-content text-center">
              <h2><?php echo $song_name ?></h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author"><?php echo $artist ?></a> | <a href="#" class="music-catagory"><?php echo $genre ?></a></p>
              </div>
              <!-- Music Player -->
              <div class="playme-music-player">
                <audio preload="auto" controls>
                  <source src="<?php echo $directory ?>">
                </audio>
              </div>
            </div>
          </div>
        </div>


        <?php

        }

        ?>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn playme-btn mt-70 loadMore">Load More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Latest Episodes Area End ***** -->

  <!-- ***** Featured Artist Start ***** -->
  <section class="featured-guests-area">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Featured Artists</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="./img/album-img/SAINt_JHN_-_Roses_Imanbek_Remix_SAINt_JHN.jpg" alt="">
            <div class="guest-info">
              <h5>Artist Name</h5>
              <span>ROLE</span>
            </div>
          </div>
        </div>

        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="./img/album-img/SAINt_JHN_-_Roses_Imanbek_Remix_SAINt_JHN.jpg" alt="">
            <div class="guest-info">
              <h5>Artist Name</h5>
              <span>ROLE</span>
            </div>
          </div>
        </div>

        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="./img/album-img/SAINt_JHN_-_Roses_Imanbek_Remix_SAINt_JHN.jpg" alt="">
            <div class="guest-info">
              <h5>Artist</h5>
              <span>ROLE</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Featured Guests Area End ***** -->

  <!-- ***** Newsletter Area Start ***** -->
  <section class="playme-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
    <div class="container">
      <div class="row align-items-center">
        <!-- Newsletter Content -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-content mb-50">
            <h2>Sign Up To Newsletter</h2>
            <h6>Subscribe to receive info on our latest news and episodes</h6>
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
            <div class="copywrite-content">
            </div>
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Categories</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="catagories-nav">
                <li><a href="#">Entrepreneurship</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">Tech</a></li>
                <li><a href="#">Tutorials</a></li>
              </ul>
            </nav>
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
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/playme.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>
  <!-- Popup -->
  <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <!-- Loadmore -->
  <script src="js/default-assets/load-more.js"></script>

</body>

</html>