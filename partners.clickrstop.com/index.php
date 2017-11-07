
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ZurApp | Device Slider</title>

  <!--SEO Meta Tags-->
  <meta name="description" content="ZurApp - Multiconcept App Showcase Theme" />
  <meta name="keywords" content="multipurpose, multiconcept, app showcase, mobile, blog, portfolio, specialty pages, landing, elements, shortcodes, html5, css3, jquery, js, modernizr, gallery, slider, touch, creative" />
  <meta name="author" content="8Guild" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Pixeden Stroke Icons -->
  <link href="css/pixeden.css" rel="stylesheet" media="screen">

  <!-- All Theme Styles including Bootstrap, FontAwesome, etc. compiled from styles.scss-->
  <link href="css/styles.css" rel="stylesheet" media="screen">

  <!-- Style Switcher -->
  <link href="css/style-switcher.css" rel="stylesheet" media="screen">

  <!--Modernizr / Detectizr-->
  <script src="js/modernizr.custom.js"></script>
  <script src="js/detectizr.min.js"></script>
</head>

<!-- Body -->
<!-- "is-preloader preloading" is a helper classes if preloader is enabled. -->
<body class="is-preloader preloading">

  <!-- Preloader -->
  <!-- 
      Data API:
      data-spinner - Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
      data-screenbg - Screen background color. Hex, RGB or RGBA colors
   -->
  <div id="preloader" data-spinner="spinner7" data-screenbg="#fff"></div>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Add class ".navbar-sticky" to make navbar stuck when it hits the top of the page. You can also use modifier class like: "navbar-light" to change navbar apperance. The screen width at which navbar collapses can be controlled through the variable "$nav-collapse" in sass/variables.scss -->
    <header class="navbar navbar-light navbar-sticky">
      <div class="container">
        <a href="index.html" class="site-logo">
          <img src="images/logo-default.png" class="logo-default" alt="ZurApp">
          <img src="images/logo-alt.png" class="logo-alt" alt="ZurApp">
        </a><!-- .site-logo -->
        
        <!-- Mobile Menu Toggle -->
        <div class="nav-toggle"><span></span></div>

        <div class="clearfix">

          <div class="toolbar text-right">
            <a href="#intro" class="btn btn-sm btn-ghost btn-default scroll-to" data-offset-top="-40">Learn More</a>
            <a href="#download" class="btn btn-sm btn-warning scroll-to" data-offset-top="70">Get App</a>
          </div><!-- .toolbar -->

          <!-- Use modifier class to apply different submenu (dropdown) animations. Possible options: .submenu-slideUp, .submenu-slideDown, .submenu-flipIn. Please note if no class added to .main-navigation default fadeIn animation will be applied. Note: this is applicable only for Desktop. -->
          <nav class="main-navigation submenu-flipIn">
            <ul class="menu">
              <li class="has-submenu current"><a href="#">Home</a>
                <ul class="submenu">
                  <li class="current"><a href="index.html">Device Slider</a></li>
                  <li><a href="home-app-intro-light.html">App Intro Light</a></li>
                  <li><a href="home-app-intro-dark.html">App Intro Dark</a></li>
                  <li><a href="home-scroll-slideshow-scale.html">Scroll Slideshow Scale Effect</a></li>
                  <li><a href="home-scroll-slideshow-rotate.html">Scroll Slideshow Rotate Effect</a></li>
                  <li><a href="home-scroll-slideshow-gallery.html">Scroll Slideshow Gallery Effect</a></li>
                  <li><a href="home-scroll-slideshow-opacity.html">Scroll Slideshow Opacity Effect</a></li>
                  <li><a href="home-scroll-slideshow-parallax.html">Scroll Slideshow Parallax Effect</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#">Blog</a>
                <ul class="submenu">
                  <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                  <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                  <li><a href="single-right-sidebar.html">Single Post Right Sidebar</a></li>
                  <li><a href="single-left-sidebar.html">Single Post Left Sidebar</a></li>
                  <li><a href="single-no-sidebar.html">Single Post No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#">Portfolio</a>
                <ul class="submenu">
                  <li><a href="portfolio-grid-boxed.html">Portfolio Grid Boxed</a></li>
                  <li><a href="portfolio-grid-fullwidth.html">Portfolio Grid Full Width</a></li>
                  <li><a href="portfolio-single.html">Single Project</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#">Pages</a>
                <ul class="submenu">
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="404.html">404</a></li>
                  <li><a href="coming-soon-dark.html">Coming Soon Dark</a></li>
                  <li><a href="coming-soon-light.html">Coming Soon Light</a></li>
                </ul>
              </li>
              <li><a href="elements.html">Elements</a></li>
            </ul>
          </nav><!-- .main-navigation -->
        </div><!-- .clearfix -->
      </div><!-- .container -->
    </header><!-- .navbar -->
    
    <!-- Device Slider -->
    <section class="device-slider">
      <span class="angle"></span>
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <!-- Phone Carousel -->
            <!-- Data API:
              data-loop="true/false" enable/disable looping
              data-autoplay="true/false" enable/disable carousel autoplay
              data-interval="3000" autoplay interval timeout in miliseconds 
             -->
            <div class="phone-carousel" data-loop="true" data-autoplay="true" data-interval="4000">
              <img src="images/phone.png" class="phone-mask" alt="Phone">
              <!-- Fallback Cover Screen -->
              <div class="cover">
                <img src="images/screen01.png" alt="Screen 1">
              </div>
              <div class="carousel">
                <div class="inner">
                  <img src="images/screen01.png" alt="Screen 1">
                  <img src="images/screen02.png" alt="Screen 2">
                  <img src="images/screen03.png" alt="Screen 3">
                  <img src="images/screen04.png" alt="Screen 4">
                </div>
              </div>
            </div><!-- .phone-carousel -->
          </div>
          <div class="col-sm-7 padding-top mobile-center">
            <div class="block-title light-skin">
              <h1>We have made a great app...</h1>
            </div>
            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor similique a ratione eveniet quas, sunt asperiores, quam ad voluptas distinctio, aliquid culpa consectetur! Quisquam, incidunt culpa corporis fuga aperiam quos.</p>
            <!-- App Store Button -->
            <a href="#" class="btn btn-app-store">
              <i class="fa fa-apple"></i>
              <div>
                <span>Download on the</span>
                App Store
              </div>
            </a>
            <!-- Google Play Button -->
            <a href="#" class="btn btn-google-play">
              <img src="images/google-play.png" alt="Google Play">
              <span>Get it on</span>
            </a>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .device-slider -->
     
    <!-- Introduction -->
    <section class="container padding-top-3x padding-bottom-3x" id="intro">

      <!-- Social Bar -->
      <div class="social-bar text-right space-bottom-3x">
        <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
          <i class="fa fa-twitter"></i>
          <span>13</span>
        </a>
        <a href="#" class="sb-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr">
          <i class="fa fa-tumblr"></i>
          <span>124</span>
        </a>
        <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
          <i class="fa fa-facebook"></i>
          <span>0</span>
        </a>
      </div><!-- .social-bar -->

      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-lg-10">
              <!-- Block Title -->
              <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
              <div class="block-title featured-title">
                <h2>Take a look at our screen, we've worked hard on it.</h2>
                <span>For You!</span>
              </div><!-- .block-title.featured-title -->
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <p>Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
              <p><a href="#">Aliquam at porttitor sem</a>. Aliquam erat volutpat. Donec placerat nisl magna, et faucibus arcu condimentum sed.</p>
              <a href="https://vimeo.com/33984473" class="video-popup-btn space-bottom">
                <span class="play-btn"><i class="fa fa-play"></i></span>
                <span class="label">Watch a<br>Quick Demo</span>
              </a>
            </div>
            <div class="col-sm-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div><!-- .col-md-8 -->
        <div class="col-md-4">
          <img src="images/screen01.jpg" class="block-center" alt="Screen 1">
        </div><!-- .col-md-4 -->
      </div><!-- .row -->
      <div class="space-bottom-3x visible-lg"></div>
      <div class="space-bottom-2x hidden-lg"></div>

      <div class="row padding-top">
        <div class="col-md-5 col-md-push-7">
          <!-- Block Title -->
          <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
          <div class="block-title featured-title">
            <h2>Take a look at our screens</h2>
            <span>Look!</span>
          </div><!-- .block-title.featured-title -->
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div><!-- .col-md-5.col-md-push-7 -->

        <div class="col-md-7 col-md-pull-5">
          <img src="images/screen02.jpg" class="block-center" alt="Screen 2">
        </div><!-- .col-md-7.col-md-pull-5 -->
      </div><!-- .row -->
    </section><!-- .container -->
    <div class="space-top visible-lg"></div>

    <!-- Features -->
    <!-- Apply modifier classes: ".angle-top" - for top positioned angle; ".angle-bottom" - bottom respectively; color classes: ".gray-bg", ".dark-bg" -->
    <section class="fw-section gray-bg angle-top mobile-center">
      <div class="container padding-top-3x padding-bottom-3x">
        <div class="row">
          <div class="col-lg-9">

            <!-- Block Title -->
            <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
            <div class="block-title featured-title">
              <h2>Everything you need to know about marketing in one App.</h2>
              <span>Features</span>
            </div><!-- .block-title.featured-title -->
          </div><!-- .col-lg-9.col-md-10 -->
        </div><!-- .row -->

        <!-- Features -->
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-4">
            <!-- Icon Block -->
            <!-- Apply modifier classes to ".icon-block": ".text-center" and "text-right" - for alignment. -->
            <section class="icon-block">
              <i class="pe-7s-display1"></i>
              <h3 class="ib-title">In App Analytics</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident perferendis modi quidem deserunt vero.</p>
            </section><!-- .icon-block -->
          </div><!-- .col-lg-3.col-md-4.col-sm-4 -->

          <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
            <section class="icon-block">
              <i class="pe-7s-phone"></i>
              <h3 class="ib-title">Fully Responsive</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident perferendis modi quidem deserunt vero.</p>
            </section><!-- .icon-block -->
          </div><!-- .col-lg-3.col-lg-offset-1.col-md-4.col-sm-4 -->

          <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
            <section class="icon-block">
              <i class="pe-7s-cloud"></i>
              <h3 class="ib-title">Cloud Storage</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident perferendis modi quidem deserunt vero.</p>
            </section><!-- .icon-block -->
          </div><!-- .col-lg-3.col-lg-offset-1.col-md-4.col-sm-4 -->
        </div><!-- .row -->

        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-4">
            <!-- Icon Block -->
            <!-- Apply modifier classes to ".icon-block": ".text-center" and "text-right" - for alignment. Apply ".light-skin" class for changing appearance. -->
            <section class="icon-block">
              <i class="pe-7s-signal"></i>
              <h3 class="ib-title">WiFi Detection</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident perferendis modi quidem deserunt vero.</p>
            </section><!-- .icon-block -->
          </div><!-- .col-lg-3.col-md-4.col-sm-4 -->

          <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
            <section class="icon-block">
              <i class="pe-7s-monitor"></i>
              <h3 class="ib-title">Retina Ready</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident perferendis modi quidem deserunt vero.</p>
            </section><!-- .icon-block -->
          </div><!-- .col-lg-3.col-lg-offset-1.col-md-4.col-sm-4 -->

          <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4">
            <section class="icon-block">
              <i class="pe-7s-map"></i>
              <h3 class="ib-title">Integrated Maps</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident perferendis modi quidem deserunt vero.</p>
            </section><!-- .icon-block -->
          </div><!-- .col-lg-3.col-lg-offset-1.col-md-4.col-sm-4 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .fw-section -->

    <!-- Market Buttons -->
    <!-- Use appropriate modifier classes for setting the width of buttons (depends on number of buttons). E.x. ".count-3" if you want use all 3 buttons. Another options ".count-2" and no class for 1 button. -->
    <section class="market-buttons count-3" id="download">
      <a href="#" class="market-btn app-store">
        <div class="icon">
          <i class="fa fa-apple"></i>
        </div>
        <div class="label">
          <small>Download on the</small>
          <h4>App Store</h4>
        </div>
      </a><!-- .app-store -->
      <a href="#" class="market-btn google-play">
        <div class="icon">
          <i class="fa fa-play"></i>
        </div>
        <div class="label">
          <small>Get it on</small>
          <h4>Google Play</h4>
        </div>
      </a><!-- .google-play -->
      <a href="#" class="market-btn windows">
        <div class="icon">
          <i class="fa fa-windows"></i>
        </div>
        <div class="label">
          <small>Get it on</small>
          <h4>Windows Store</h4>
        </div>
      </a><!-- .windows -->
    </section><!-- .market-buttons -->
    
    <!-- Devices -->
    <!-- Apply modifier classes: ".angle-top" - for top positioned angle; ".angle-bottom" - bottom respectively; color classes: ".gray-bg", ".dark-bg" -->
    <section class="fw-section dark-bg angle-bottom padding-top-3x">
      <div class="container padding-top">

        <!-- Block Title -->
        <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
        <div class="block-title featured-title light-skin">
          <h2>On desktop. On your mobile. On your Mac.<br>Online. Well, not lovely?</h2>
          <span>On Desktop?</span>
        </div><!-- .block-title.featured-title -->
        <div class="row text-light">
          <div class="col-lg-4 col-md-5 space-bottom-2x">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quis nostrud eiusmod tempor.</p>
            <p class="space-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <img src="images/browsers.png" alt="Browsers">
          </div><!-- .col-lg-4.col-md-5 -->
          <div class="col-lg-8 col-md-7">
            <img src="images/devices.png" class="block-center" alt="Devices">
            <div class="padding-bottom visible-xs"></div>
          </div><!-- .col-lg-8.col-md-7 -->
        </div><!-- .row.text-light -->
      </div><!-- .container -->
    </section><!-- .fw-section -->

    <!-- Feature Tabs -->
    <section class="container padding-top-3x padding-bottom-3x">
      <div class="row">
        <div class="col-lg-6 col-md-7 col-sm-9">

          <!-- Block Title -->
          <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
          <div class="block-title featured-title">
            <h2>Learn how to work with the app in minutes</h2>
            <span>Minutes</span>
          </div><!-- .block-title.featured-title -->
        </div>
      </div><!-- .row-->

      <div class="featured-tabs">
        <div class="row">
          <div class="col-md-7 col-md-push-5 padding-top-2x space-bottom">
            <!-- Nav Tabs -->
            <!-- Add data-autoswitch="true" to enable automatic tabs change. data-interval="4000" - controls the timeout. PLEASE NOTE: autoplay causes some issues with sections with fixed backgrounds. -->
            <ul class="nav-tabs" role="tablist">
              <li class="active">
                <span class="number"><i>1</i></span>
                <a href="#tab01" role="tab" data-toggle="tab">Registration</a>
                <p>Atque aliquam, quo minus, sunt animi suscipit, quibusdam accusantium aliquid, repellat officiis iure dolorem.</p>
                <div class="social-btns">
                  <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                    <i class="fa fa-facebook"></i>
                  </a>
                  <a href="#" class="sb-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
                    <i class="fa fa-instagram"></i>
                  </a>
                  <a href="#" class="sb-dropbox" data-toggle="tooltip" data-placement="top" title="Dropbox">
                    <i class="fa fa-dropbox"></i>
                  </a>
                </div>
              </li>
              <li>
                <span class="number"><i>2</i></span>
                <a href="#tab02" role="tab" data-toggle="tab">Short Introduction</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquam, quo minus, sunt animi suscipit, quibusdam accusantium aliquid, repellat officiis iure. Dolorem quis dolores.</p>
              </li>
              <li>
                <span class="number"><i>3</i></span>
                <a href="#tab03" role="tab" data-toggle="tab">Receive Feedback</a>
                <p>Molestias, non nulla placeat odio, qui dicta alias, numquam quo rerum asperiores eos, fuga maiores odit quae laborum.</p>
              </li>
            </ul><!-- .nav-tabs -->
          </div><!-- .col-md-7.col-md-push-5 -->
          <div class="col-md-5 col-md-pull-7">
            <!-- Tab Panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane transition fade right in active" id="tab01">
                <img src="images/01.png" class="block-center" alt="Tab">
              </div>
              <div role="tabpanel" class="tab-pane transition fade scale" id="tab02">
                <img src="images/02.png" class="block-center" alt="Tab">
              </div>
              <div role="tabpanel" class="tab-pane transition fade flip" id="tab03">
                <img src="images/03.png" class="block-center" alt="Tab">
              </div>
            </div><!-- .tab-content -->
          </div><!-- .col-md-7.col-md-push-5 -->
        </div><!-- .row -->
      </div><!-- .featured-tabs -->
    </section><!-- .container -->

    <!-- Split Section -->
    <section class="split-section img-left">
      <div class="image" style="background-image: url(images/01.jpg);"></div>
      <!-- Add ".dark-bg" class to content to change background to dark. In this case make sure apply ".text-light" class to the ".containe"r below. -->
      <div class="content"></div>
      <div class="container padding-top-3x padding-bottom-3x">
        <div class="row space-top">
          <div class="col-md-5 col-md-offset-7">
            <h3>At Your Office...</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam incidunt impedit repellendus optio delectus obcaecati esse, labore voluptates, ratione vitae voluptatem cumque temporibus.</p>
            <ul class="featured-list">
              <li>Aliquam at porttitor sem</li>
              <li>Loremur adipiscing elit. dimentum sed.</li>
              <li>Cliquam erat volutpat</li>
              <li>Donec placerat nisl magna sed.</li>
            </ul>
            <a href="#" class="btn btn-default-2">Learn More</a>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .split-section -->

    <!-- Split Section -->
    <section class="split-section img-right">
      <div class="image" style="background-image: url(images/02.jpg);"></div>
      <!-- Add ".dark-bg" class to content to change background to dark. In this case make sure apply ".text-light" class to the ".container" below. -->
      <div class="content"></div>
      <div class="container padding-top-3x padding-bottom-3x">
        <div class="row space-top">
          <div class="col-md-5">
            <h3>At Your Home...</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quibusdam incidunt impedit repellendus optio delectus obcaecati esse, labore voluptates, ratione vitae voluptatem cumque temporibus.</p>
            <ul class="featured-list">
              <li>Aliquam at porttitor sem</li>
              <li>Loremur adipiscing elit. dimentum sed.</li>
              <li>Cliquam erat volutpat</li>
              <li>Donec placerat nisl magna sed.</li>
            </ul>
            <a href="#" class="btn btn-default-2">Learn More</a>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .split-section -->

    <!-- Video -->
    <!-- Apply ".parallax-bg" class to make background image fixed on scroll. Add/remove ".overlay" to darken/lighten the background. Overlay color can be changed in variable.scss -> $fw-section-overlay-color -->
    <section class="fw-section parallax-bg padding-top-3x padding-bottom-3x" style="background-image: url(images/video-bg.jpg);">
      <span class="overlay"></span>
      <div class="container padding-top-3x padding-bottom-3x text-center">
        <a href="https://vimeo.com/33984473" class="video-popup-btn light-skin">
          <span class="play-btn"><i class="fa fa-play"></i></span>
        </a><!-- .video-popup-btn -->
      </div><!-- .container -->
    </section><!-- .fw-section.parallax-bg -->

    <!-- Team -->
    <section class="container padding-top-3x padding-bottom-3x">
      <div class="row space-top">
        <div class="col-md-8 col-sm-10">

          <!-- Block Title -->
          <!-- Use modifier classes: ".featured-title" - to enable fancy animation on hover; ".text-center" and "text-right" - for title alignment. Apply ".light-skin" class for changing appearance. -->
          <div class="block-title mobile-center featured-title">
            <h2>small group of dedicated knights behind this app</h2>
            <span>Our Team</span>
          </div><!-- .block-title.featured-title -->
        </div>
      </div><!-- .row-->

      <div class="row">
        <div class="col-md-4 col-sm-6">
          <!-- Use modifier classes: ".circle" or ".triangle" to change avatar shape. Default is rectangle, no class applied. -->
          <section class="team-member circle">
            <div class="team-header">
              <div class="avatar">
                <img src="images/01.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-stackoverflow" data-toggle="tooltip" data-placement="top" title="Stack Overflow">
                  <i class="fa fa-stack-overflow"></i>
                </a>
                <a href="#" class="sb-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr">
                  <i class="fa fa-tumblr"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Morris James</h3>
            <span class="team-position">Programmer</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->

        <div class="col-md-4 col-sm-6">
          <section class="team-member triangle">
            <div class="team-header">
              <div class="avatar">
                <img src="images/02.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble">
                  <i class="fa fa-dribbble"></i>
                </a>
                <a href="#" class="sb-behance" data-toggle="tooltip" data-placement="top" title="Behance">
                  <i class="fa fa-behance"></i>
                </a>
                <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Jane Dow</h3>
            <span class="team-position">UX Designer</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->
        
        <div class="clearfix visible-sm"></div>

        <div class="col-md-4 col-sm-6">
          <section class="team-member">
            <div class="team-header">
              <div class="avatar">
                <img src="images/03.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="sb-dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble">
                  <i class="fa fa-dribbble"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Steve Bloom</h3>
            <span class="team-position">Art Director</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->

        <div class="col-md-4 col-sm-6">
          <section class="team-member triangle">
            <div class="team-header">
              <div class="avatar">
                <img src="images/04.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="Google+">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Clara Kent</h3>
            <span class="team-position">CEO, Co-Founder</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->
        
        <div class="clearfix visible-sm"></div>

        <div class="col-md-4 col-sm-6">
          <section class="team-member">
            <div class="team-header">
              <div class="avatar">
                <img src="images/05.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-paypal" data-toggle="tooltip" data-placement="top" title="PayPal">
                  <i class="fa fa-paypal"></i>
                </a>
                <a href="#" class="sb-dropbox" data-toggle="tooltip" data-placement="top" title="Dropbox">
                  <i class="fa fa-dropbox"></i>
                </a>
                <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="Google+">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Antonio Soretti</h3>
            <span class="team-position">Financial Director</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->

        <div class="col-md-4 col-sm-6">
          <section class="team-member circle">
            <div class="team-header">
              <div class="avatar">
                <img src="images/06.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-github" data-toggle="tooltip" data-placement="top" title="Github">
                  <i class="fa fa-github"></i>
                </a>
                <a href="#" class="sb-stackoverflow" data-toggle="tooltip" data-placement="top" title="Stack Overflow">
                  <i class="fa fa-stack-overflow"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Jim Kirk</h3>
            <span class="team-position">Java Developer</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->
        
        <div class="clearfix visible-sm"></div>
        
        <div class="col-md-4 col-sm-6">
          <section class="team-member">
            <div class="team-header">
              <div class="avatar">
                <img src="images/07.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="sb-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr">
                  <i class="fa fa-tumblr"></i>
                </a>
                <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Lea Organa</h3>
            <span class="team-position">Manager</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->

        <div class="col-md-4 col-sm-6">
          <section class="team-member circle">
            <div class="team-header">
              <div class="avatar">
                <img src="images/08.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble">
                  <i class="fa fa-dribbble"></i>
                </a>
                <a href="#" class="sb-flickr" data-toggle="tooltip" data-placement="top" title="Flickr">
                  <i class="fa fa-flickr"></i>
                </a>
                <a href="#" class="sb-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                  <i class="fa fa-linkedin"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">Susanna Davis</h3>
            <span class="team-position">UI Designer</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->
        
        <div class="clearfix visible-sm"></div>

        <div class="col-md-4 col-sm-6">
          <section class="team-member triangle">
            <div class="team-header">
              <div class="avatar">
                <img src="images/09.jpg" alt="Team">
              </div>
              <div class="social-bar">
                <a href="#" class="sb-skype" data-toggle="tooltip" data-placement="top" title="Skype">
                  <i class="fa fa-skype"></i>
                </a>
                <a href="#" class="sb-google-plus" data-toggle="tooltip" data-placement="top" title="Google+">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="sb-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                  <i class="fa fa-linkedin"></i>
                </a>
              </div>
            </div>
            <h3 class="team-name">John Obs</h3>
            <span class="team-position">Marketing Guru</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </section><!-- .team-member-->
        </div><!-- .col-md-4.col-sm-6-->
      </div><!-- .row-->
    </section><!-- .container -->

    <!-- Testimonials -->
    <!-- Apply modifier classes: ".angle-top" - for top positioned angle; ".angle-bottom" - bottom respectively; color classes: ".gray-bg", ".dark-bg" -->
    <section class="fw-section gray-bg angle-top mobile-center">
      <div class="container padding-top-2x padding-bottom-3x space-bottom">
        
        <!-- Quotations Carousel -->
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">

            <!-- Quotation Carousel -->
            <!-- Data API:
              data-loop="true/false" enable/disable looping
              data-autoplay="true/false" enable/disable carousel autoplay
              data-interval="3000" autoplay interval timeout in miliseconds 
              Simply add necessary data attribute to the ".quote-carousel" with appropriate value to adjust carousel functionality.
             -->
            <div class="quote-carousel" data-loop="true">
              <div class="inner">
                <blockquote class="text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Eveniet quae</a> ipsum ut, libero inventore obcaecati earum ad nobis.</p>
                  <cite>
                    Johnathan Doe
                    <span>Founder &amp; CEO</span>
                  </cite>
                </blockquote>
                <blockquote class="text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Eveniet quae</a> ipsum ut, libero inventore obcaecati earum ad nobis.</p>
                  <cite>
                    Susanna Davis
                    <span>Marketing Guru</span>
                  </cite>
                </blockquote>
                <blockquote class="text-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Eveniet quae</a> ipsum ut, libero inventore obcaecati earum ad nobis.</p>
                  <cite>
                    Terry Mitchell
                    <span>Technical Director</span>
                  </cite>
                </blockquote>
              </div><!-- .inner -->
            </div><!-- .quote-carousel -->
          </div><!-- .col-lg-10.col-lg-offset-1 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .fw-section -->

    <!-- Awards -->
    <!-- Use appropriate modifier classes for setting the width of buttons (depends on number of buttons). E.x. ".count-3" if you want use all 3 buttons. Another options ".count-2" and no class for 1 button. -->
    <section class="awards count-3">
      <a href="#" class="award">
        <div class="inner">
          <h3 class="award-title">
            <span class="palm-left-light"></span>
            <span class="palm-left-dark"></span>
            Winner
            <span class="palm-right-light"></span>
            <span class="palm-right-dark"></span>
          </h3>
          Best Mobile App<br>
          SXSW<br>
          <span class="date">2015</span>
        </div>
      </a><!-- .award -->
      <a href="#" class="award">
        <div class="inner">
          <h3 class="award-title">
            <span class="palm-left-light"></span>
            <span class="palm-left-dark"></span>
            Winner
            <span class="palm-right-light"></span>
            <span class="palm-right-dark"></span>
          </h3>
          Best Mobile App<br>
          SXSW<br>
          <span class="date">2014</span>
        </div>
      </a><!-- .award -->
      <a href="#" class="award">
        <div class="inner">
          <h3 class="award-title">
            <span class="palm-left-light"></span>
            <span class="palm-left-dark"></span>
            Winner
            <span class="palm-right-light"></span>
            <span class="palm-right-dark"></span>
          </h3>
          Best Mobile App<br>
          SXSW<br>
          <span class="date">2013</span>
        </div>
      </a><!-- .award -->
    </section><!-- .awards -->

    <!-- Clients -->
    <!-- Apply ".parallax-bg" class to make background image fixed on scroll. Add/remove ".overlay" to darken/lighten the background. Overlay color can be changed in variable.scss -> $fw-section-overlay-color -->
    <section class="fw-section parallax-bg padding-top-3x padding-bottom-3x" style="background-image: url(images/clients-bg.jpg);">
      <span class="overlay" style="opacity: .77;"></span>
      <div class="container padding-top text-center">

        <!-- Clients Carousel -->
        <!-- Data API:
          data-loop="true/false" enable/disable looping
          data-autoplay="true/false" enable/disable carousel autoplay
          data-interval="3000" autoplay interval timeout in miliseconds 
          Simply add necessary data attribute to the ".quote-carousel" with appropriate value to adjust carousel functionality.
         -->
        <div class="clients-carousel space-top-2x space-bottom-3x" data-loop="true" data-autoplay="true" data-interval="4000">
          <div class="inner">
            <a href="#" class="client">
              <img src="images/01.png" alt="Client">
            </a><!-- .client -->
            <a href="#" class="client">
              <img src="images/02.png" alt="Client">
            </a><!-- .client -->
            <a href="#" class="client">
              <img src="images/03.png" alt="Client">
            </a><!-- .client -->
            <a href="#" class="client">
              <img src="images/04.png" alt="Client">
            </a><!-- .client -->
            <a href="#" class="client">
              <img src="images/05.png" alt="Client">
            </a><!-- .client -->
            <a href="#" class="client">
              <img src="images/06.png" alt="Client">
            </a><!-- .client -->
          </div><!-- .inner -->
        </div><!-- .clients-carousel -->
        <div class="row space-bottom">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 text-light">
            <h2 class="text-light">Any famous clients? Yeah!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi iure est quis consequuntur dolorem adipisci nam corporis quia sequi quisquam soluta nulla quibusdam voluptatibus fuga laborum eos, officia, distinctio quidem laboriosam aperiam illo ab ex facilis harum optio, fuga enim eos voluptas ipsum laborum recusandae sequi.</p>
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    </section><!-- .fw-section.parallax-bg -->

    <!-- Instagram -->
    <section class="instagram-feed">
      <a href="#" class="item">
        <img src="images/01.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/02.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/03.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/04.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/05.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/06.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/07.jpg" alt="Instagram">
      </a><!-- .item -->
      <a href="#" class="item">
        <img src="images/08.jpg" alt="Instagram">
      </a><!-- .item -->
    </section><!-- .instagram-feed -->

    <!-- Scroll To Top Button -->
    <a href="#" class="scroll-to-top-btn">
      <i class="fa fa-angle-up"></i>
    </a><!-- .scroll-to-top-btn -->

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-7">

            <form action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=011a3332a0" method="post" target="_blank" class="space-top-2x" novalidate autocomplete="off">
              <div class="row">
                <div class="col-sm-8">
                  <label for="subscr_email" class="sr-only">Subscribe to latest news</label>
                  <input type="email" class="form-control" id="subscr_email" name="EMAIL" placeholder="Subscribe for news. Enter email">
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;">
                    <input type="text" name="b_168a366a98d3248fbc35c0b67_011a3332a0" tabindex="-1" value="">
                  </div>
                </div><!-- .col-sm-8 -->
                <div class="col-sm-4">
                  <button type="submit" class="btn btn-block btn-inline">Subscribe</button>
                </div><!-- .col-sm-4 -->
              </div><!-- .row -->
            </form><!-- <form> -->
            <div class="space-bottom-2x visible-xs"></div>
            <a href="index.html" class="footer-logo">
              <img src="images/logo-default.png" alt="ZurApp">
            </a><!-- .footer-logo -->

            <div class="social-bar">
              <a href="#" class="sb-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="fa fa-twitter"></i>
                <span>13</span>
              </a>
              <a href="#" class="sb-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr">
                <i class="fa fa-tumblr"></i>
                <span>124</span>
              </a>
              <a href="#" class="sb-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fa fa-facebook"></i>
                <span>0</span>
              </a>
            </div><!-- .social-bar -->
            
            <div class="row">
              <div class="col-sm-4">
                <div class="widget widget_pages">
                  <h3 class="widget-title">Home</h3>
                  <ul>
                    <li><a href="index.html">Device Slider</a></li>
                    <li><a href="home-app-intro-light.html">App Introduction</a></li>
                    <li><a href="home-scroll-slideshow-scale.html">Scroll Slideshow</a></li>
                  </ul>              </div><!-- .widget_pages -->
              </div><!-- .col-sm-4 -->
              <div class="col-sm-4">
                <div class="widget widget_pages">
                  <h3 class="widget-title">Blog</h3>
                  <ul>
                    <li><a href="blog-right-sidebar.html">Blog Posts</a></li>
                    <li><a href="single-right-sidebar.html">Single Post</a></li>
                  </ul>
                </div><!-- .widget_pages -->
              </div><!-- .col-sm-4 -->
              <div class="col-sm-4">
                <div class="widget widget_pages">
                  <h3 class="widget-title">Portfolio</h3>
                  <ul>
                    <li><a href="portfolio-grid-boxed.html">Portfolio Grid</a></li>
                    <li><a href="portfolio-single.html">Single Project</a></li>
                  </ul>
                </div><!-- .widget_pages -->
              </div><!-- .col-sm-4 -->
            </div><!-- .row -->

            <div class="copyright">
              <p>2015 &copy; <a href="http://8guild.com/" target="_blank">8Guild</a>. Premium themes</p>
            </div><!-- .copyright -->

          </div><!-- .col-md-7 -->

          <div class="col-lg-4 col-lg-offset-1 col-md-5">
            <a href="#" class="market-btn app-store">
              <div class="icon">
                <i class="fa fa-apple"></i>
              </div>
              <div class="label">
                <small>Download on the</small>
                <h4>App Store</h4>
              </div>
            </a><!-- .app-store -->
            <a href="#" class="market-btn google-play">
              <div class="icon">
                <i class="fa fa-play"></i>
              </div>
              <div class="label">
                <small>Get it on</small>
                <h4>Google Play</h4>
              </div>
            </a><!-- .google-play -->
            <a href="#" class="market-btn windows">
              <div class="icon">
                <i class="fa fa-windows"></i>
              </div>
              <div class="label">
                <small>Get it on</small>
                <h4>Windows Store</h4>
              </div>
            </a><!-- .windows -->
          </div><!-- .col-md-5 -->
        </div><!-- .row -->
      </div><!-- .container -->
    </footer><!-- .footer -->
  </div><!-- .page-wrapper -->

  <!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/preloader.min.js"></script>
  <script src="js/placeholder.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/velocity.min.js"></script>
  <script src="js/magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/style-switcher.js"></script>

</body><!-- <body> -->

</html>
