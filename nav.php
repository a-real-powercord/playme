<!-- NAVIGATION -->

<div class="classy-nav-container breakpoint-off">
        <!-- classy Menu -->
        <nav class="classy-navbar justify-content-between" id="playmeNav">

          <!-- Logo -->
          <a class="nav-brand" href="index.php"><img src="./img/core-img/logo.png" alt=""></a>

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
              <h4 id="insert-peen" class="now-playing"></h4>
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
                <?php if(!isset($_SESSION['loggedin'])){?>
                <li><a href="login-page.php">Login</a></li>
                <?php }
                else{
                
                ?>
                  <li><a href="php/logout.php">Logout</a></li>
                <?php } ?>
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