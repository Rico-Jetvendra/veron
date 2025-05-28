<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
      <title>Veron Indonesia - {{ $title }}</title>
      <link rel="icon" href="{{ asset('media/icon.jpg') }}" type="image/x-icon"/>
      <link rel="shortcut icon" href="{{ asset('media/icon.jpg') }}" type="image/x-icon"/>
      <link href="{{ asset('css/master.css') }}" rel="stylesheet">
   </head>
   <body>
      <!-- Loader-->
      <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
      <!-- Loader end-->

      <div data-off-canvas="slidebar-5 left overlay" class="mobile-slidebar-menu">
         <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button">
         <span class="toggle-menu-button-icon"><span></span> <span></span> <span></span> <span></span>
         <span></span> <span></span></span>
         </button>
         <ul id="menu-main-menu-2" class="yamm main-menu nav navbar-nav  menu-marker-arrow">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="dropdown">
               <a href="vehicle-listings.html">Vehicle Listings</a>
               <ul class="dropdown-menu">
                  <li><a href="vehicle-listings.html">Car Listings</a></li>
                  <li><a href="vehicle-listings_no-sidebar.html">Car Grid</a></li>
                  <li><a href="car-details.html">Car Details</a></li>
               </ul>
            </li>
            <li class=""><a href="{{ route('about.index') }}">About Us</a></li>
            <li class=""><a href="{{ route('contact.index') }}">Contact</a></li>
            <li class="dropdown">
               <a href="blog.html">Language</a>
               <ul class="dropdown-menu">
                  <li><a href="blog-post.html">Indonesia</a></li>
                  <li><a href="blog.html">English</a></li>
               </ul>
            </li>
         </ul>
      </div>
      <!-- ========================== -->
      <!-- FULL SCREEN MENU  -->
      <!-- ========================== -->
      <div class="wrap-fixed-menu" id="fixedMenu">
         <nav class="fullscreen-center-menu">
            <div class="menu-main-menu-container">
               <ul id="menu-main-menu-1" class="nav navbar-nav">
                  <li class=""><a href="home.html">Home</a></li>
                  <li class=""><a href="vehicle-listings.html">Auto Listings</a></li>
                  <li class=""><a href="news-grid.html">News</a></li>
                  <li class=""><a href="contact.html">Contact</a></li>
               </ul>
            </div>
         </nav>
         <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
      </div>
      <div class="l-theme animated-css" data-header="sticky" data-header-top="200">
      <!-- HEADER -->
      <header>
         <div class="container">
            <div class="header-middle row">
               <div class="col-lg-4 col-md-3">
                  <div class="header-logo">
                     <a href="{{ route('home') }}"><img src="{{ asset('media/logo.png') }}" /></a>
                  </div>
                  <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button ">
                  <span class="toggle-menu-button-icon"><span></span> <span></span> <span></span> <span></span>
                  <span></span> <span></span></span>
                  </button>
               </div>
               <div class="col-lg-8 col-md-9">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="header-banner">
                           <span class="icon-map header-banner_icon"></span>
                           <div class="header-banner_title">
                              <h3>Working</h3>
                              <span>Monday - Saturday</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="header-banner">
                           <span class="icon-earphones-alt header-banner_icon"></span>
                           <div class="header-banner_title">
                              <h3>Phone</h3>
                              <span>(021) 29518999</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="header-banner">
                           <span class="icon-envelope-open header-banner_icon"></span>
                           <div class="header-banner_title">
                              <h3>Email Us</h3>
                              <span>veron@example.com</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom row">
               <div class="col-md-10">
                  <div class="nav header-navbar header-2">
                     <ul id="menu-main-menu-2" class="yamm main-menu nav navbar-nav menu-marker-arrow">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="dropdown">
                           <a href="vehicle-listings.html">Tires Listings</a>
                           <ul class="dropdown-menu">
                              <li><a href="vehicle-listings.html">Passenger</a></li>
                              <li><a href="vehicle-listings_no-sidebar.html">Radial</a></li>
                              <li><a href="car-details.html">Offroad</a></li>
                           </ul>
                        </li>
                        <li class="#"><a href="{{ route('about.index') }}">About Us</a></li>
                        <li class="#"><a href="{{ route('contact.index') }}">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-2">
                <div class="nav header-navbar header-2">
                    <ul id="menu-main-menu-2" class="yamm main-menu nav navbar-nav menu-marker-arrow" style="float:right;">
                        <li class="dropdown">
                           <a href="blog.html">Language</a>
                           <ul class="dropdown-menu">
                              <li><a href="#"><img src="{{ asset('media/flag/indonesia.webp') }}" width="20"> Indonesia</a></li>
                              <li><a href="#"><img src="{{ asset('media/flag/english.png') }}" width="20"> English</a></li>
                           </ul>
                        </li>
                    </ul>
                </div>
               </div>
            </div>
         </div>
      </header>
