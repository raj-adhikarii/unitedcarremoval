<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- <title>United Car Removal | Top Cash for Cars with United Car Removal</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="/js/script.js" defer></script>

    <?php wp_head() ?>
</head>
<body>
    <!-- Top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-right">
                <p><span class="top-bar-icon"><img src="<?php echo get_theme_file_uri('/img/time.svg'); ?>" alt=""></span><span class="top-bar-text">Sat to Sun 24 hours</span></p>
            </div>
            <div class="top-left">
                <p><span class="top-bar-icon"><img src="<?php echo get_theme_file_uri('/img/icon-phone.svg'); ?>" alt=""></span><span class="top-bar-text">0487002222</span></p>
            </div>
        </div>
    </div>
    <!-- nav -->
    <div class="nv" id="mynav">
        <div class="container">
            <nav>
              <div class="wrapper">
                <?php if ( function_exists( 'the_custom_logo' ) ) {
                  the_custom_logo();
				} ?>
                <input type="radio" name="slider" id="menu-btn">
                <input type="radio" name="slider" id="close-btn">
                <ul class="nav-links">
                  <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                  <li <?php if ('is_front_page') echo 'class="current-menu-item"'?: 'class="menu-item"' ?>><a href="<?php echo site_url(); ?>">Home</a></li>
                  <li <?php if (is_page('about-us')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/about-us">About</a></li>
                  <li <?php if (is_page('sell-car-for-cash')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/sell-car-for-cash">Sell Car for Cash</a></li>
                  <li <?php if (is_page('free-scrap-car-removal')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/free-scrap-car-removal">Scrap Car Removal</a></li>
        
                  <li>
                    <a href="#" class="desktop-item">Car Services</a>
                    <input type="checkbox" id="showMega">
                    <label for="showMega" class="mobile-item">Car Services</label>
                    <div class="mega-box">
                      <div class="content">
                        <div class="row">
                          <img src="<?php echo get_theme_file_uri('/img/nav-car.jpg'); ?>" alt="">
                        </div>
                        <div class="row">
                          <header>Car Removal</header>
                          <ul class="mega-links">
                            <li <?php if (is_page('used-car-removal')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/used-car-removal">Used Car Removal</a></li>
                            <li <?php if (is_page('old-car-removals')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/old-car-removals">Old Car Removals</a></li>
                            <li <?php if (is_page('unwanted-car-towing')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/unwanted-car-towing">Unwanted Car Towing</a></li>
                            
                          </ul>
                        </div>
                        <div class="row">
                          <header>Cash For Car</header>
                          <ul class="mega-links">
                            <li <?php if (is_page('cash-for-unwanted-car')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-unwanted-car">Cash For Unwanted Car</a></li>
                            <li <?php if (is_page('cash-for-scrap-car')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-scrap-car">Cash For Scrap Car</a></li>
                            <li <?php if (is_page('car-recyclers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/car-recyclers">Car Recyclers</a></li>
                          </ul>
                        </div>
                        <div class="row">
                          <header>Car Disposal</header>
                          <ul class="mega-links">
                            <li <?php if (is_page('car-disposal')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/car-disposal">Car Disposal</a></li>
                            <li <?php if (is_page('car-dismantlers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/car-dismantlers">Car Dismantlers</a></li>
                            <li <?php if (is_page('used-car-buyers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/used-car-buyers">Used Car Buyers</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
        
                  <li>
                    <a href="#" class="desktop-item">Car Wreckers</a>
                    <input type="checkbox" id="showDrop">
                    <label for="showDrop" class="mobile-item">Car Wreckers</label>
                    <ul class="drop-menu">
                      <li <?php if (is_page('car-wreckers-sydney')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/car-wreckers-sydney">Car Wreckers</a></li>
                      <li <?php if (is_page('jeep-wreckers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/jeep-wreckers">Jeep Wreckers</a></li>
                      <li <?php if (is_page('van-wreckers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/van-wreckers">Van Wreckers</a></li>
                      <li <?php if (is_page('truck-wreckers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/truck-wreckers">Truck Wreckers</a></li>
                      <li <?php if (is_page('suv-wreckers')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/suv-wreckers">SUV Wreckers</a></li>
                    </ul>
                  </li>
        
                  <li>
                    <a href="#" class="desktop-item">Locations</a>
                    <input type="checkbox" id="showMega2">
                    <label for="showMega2" class="mobile-item">Locations</label>
                    <div class="mega-box">
                      <div class="content">
                        <div class="row">
                          <img src="<?php echo get_theme_file_uri('/img/car-nav.jpg'); ?>" alt="">
                        </div>
                        <div class="row">
                          <header>Cash for car</header>
                          <ul class="mega-links">
                            <li <?php if (is_page('cash-for-car-sydney')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-car-sydney">Cash For Car Sydney</a></li>
                            <li <?php if (is_page('car-wreckers-penrith')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/car-wreckers-penrith">Car Wreckers Penrith</a></li>
                            <li <?php if (is_page('cash-for-car-liverpool')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-car-liverpool">Cash For Car Liverpool</a></li>
                          </ul>
                        </div>
                        <div class="row">
                          <header>Car Removal</header>
                          <ul class="mega-links">
                            <li <?php if (is_page('car-removal-blacktown')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/car-removal-blacktown">Car Removal Blacktown</a></li>
                            <li <?php if (is_page('cash-for-cars-manly')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-cars-manly">Cash For Cars Manly</a></li>
                            <li <?php if (is_page('cash-for-cars-bondi')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-car-bondi">Cash For Cars Bondi</a></li>
                          </ul>
                        </div>
                        <div class="row">
                          <header>Car Towing</header>
                          <ul class="mega-links">
                            <li <?php if (is_page('cash-for-cars-campbelltown')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/cash-for-cars-campbelltown">Cash For Car Campbelltown</a></li>
                            <li <?php if (is_page('all-car-towing-strathfield')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/all-car-towing-strathfield">All Car Towing Strathfield</a></li>
                            <li <?php if (is_page('sell-accient-car-mosman')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url(); ?>/sell-accient-car-mosman">Sell Accident Car Mosman</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li <?php if (is_page('blog')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                </ul>
                <!-- <?php wp_nav_menu(array(
                    'theme-location' => 'primaryMenu'
                )); ?> -->
                <label for="menu-btn" class="btn menu-btn"><i class="fa-solid fa-bars"></i></label>
                <div class="contact-cta"> <span class="cta"><a class="cta-link" href="<?php echo site_url(); ?>/contact-us">Contact Us</a></span></div>
              </div>
            </nav> 
          </div>
    </div>