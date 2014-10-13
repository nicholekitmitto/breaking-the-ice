<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <title>Breaking The Ice</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body>
<!--   <svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
  <symbol id="main_logo" viewBox="0 0 47.583 65.333">
    <polygon class="lower" fill="#5CAA8E" points="0,22.802 10.494,36.234 10.335,46.65 15.9,53.012 27.824,65.333 34.979,52.614 35.774,44.664
      43.327,40.292 46.109,34.329 43.86,26.617 46.708,23.25 25.333,16.5 "/>
    <path class="upper" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M10.391,39.033"/>
    <polygon class="upper" fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" points="0.912,22.396 6.708,15.244 12.273,10.474 17.839,6.102
      21.813,1.729 28.968,0.934 32.836,6.102 37.714,11.666 39.302,17.231 45.437,22.802 "/>
  </symbol>
</svg> -->
  <header class="l_main_header">
    <div class="logo">
      <a href="index.html" class="logo">
        <p class="logo_text">breaking the ice</p>
        <!-- <svg class="main_logo">
          <use xlink:href="#main_logo"></use>
        </svg> -->
        <?php include("img/logo.svg"); ?>
      </a>
    </div>
    <nav>
      <a href="#skip" class="offscreen">Skip to Content</a><!-- provides accessibility for screen readers who don't want to go through the nav over and over-->
      <a class="menu_button" href="#" onclick="toggleNav(); return false;">
        <span>&#9776;</span>
      </a>
      <ul class="navigation" id="navigation_list" role="navigation">
          <li><a href="index.html">Home</a></li>
          <li><a href="hosts.html" class="current">Our Hosts</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="faq.html" class="has_dropdown">FAQ</a>
            <ul class="nav_dropdown">
              <li><a href="#">When?</a></li>
              <li><a href="#">Weather</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Surfboard Hire</a></li>
              <li><a href="#">Prices</a><li>
            </ul>
          </li>
      </ul>
    </nav>
  </header>
  <section class="primary_header">
    <div class="primary_title">
      <h1>our hosts</h1
    </div>
  </section>
  <!-- <section class="primary_header listing">
    <div class="listing_image">
    </div>
  </section> -->
  <main role="main">
    <a id="skip"> </a>
    <h1>Our Sponsored Hosts</h1>
    <ul class="host_listing">
      <li class="listing_row">
        <a href="#">
          <h2>The Vilhjálmsson Family</h2>
          <p class="ellipsis">About the host...</p>
        </a>
      </li>
      <li class="listing_row">
        <a href="#">
          <h2>The Second Family</h2>
          <p class="ellipsis">About the host...</p>
        </a>
      </li>
      <li class="listing_row">
        <a href="#">
          <h2>The Third Family</h2>
          <p class="ellipsis">About the host...</p>
        </a>
      </li>
      <li class="listing_row">
        <a href="#">
          <h2>The Fourth Family</h2>
          <p class="ellipsis">About the host...</p>
        </a>
      </li>
      <li class="listing_row">
        <a href="#">
          <h2>The Fifth Family</h2>
          <p class="ellipsis">About the host...</p>
        </a>
      </li>
    </ul>
    <aside class="map_wrapper">
      <div id="map-canvas"></div>
    </aside>
  </main>

<script src="js/main.js"></script>
<noscript>
  <link rel="stylesheet" type="text/css" href="css/nojs.css"><!--css styles for when javascript is disabled-->
</noscript>
</body>
</html>
 
