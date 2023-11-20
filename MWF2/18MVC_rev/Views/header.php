<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
  <!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Modiste a fashion Category Bootstrap Responsive web Template| Home :: w3layouts</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Modiste Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
      addEventListener("load", function () {
      	setTimeout(hideURLbar, 0);
      }, false);
      
      function hideURLbar() {
      	window.scrollTo(0, 1);
      }
      // if ( window.history.replaceState) {
      //   window.history.replaceState(null,null,window.location.href)
      // }

    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="<?php echo $this->assets_url;?>css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets  $this->dynamic_assets_url -->
    
    <link href="<?php echo $this->dynamic_assets_url;?>css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <!-- <link href="//fonts.googleapis.com/css?family=Thasadith:400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet"> -->
  </head>
  <body>
    <div class="main-top" id="home">
      <!-- header -->
      <div class="headder-top">
        <!-- nav -->
        <nav >
          <div id="logo">
            <h1><a href="index.html">Modiste</a></h1>
          </div>
          <label for="drop" class="toggle">Menu</label>
          <input type="checkbox" id="drop">
          <ul class="menu mt-2">
            <li class="active"><a href="index">Home</a></li>
            <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="about">About</a></li>
            <li><a href="service.html">Services</a></li>
            
            <!-- <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
              <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
              <input type="checkbox" id="drop-2">
              <ul>
                <li><a href="gallery" class="drop-text">Gallery</a></li>
                <li><a href="blog" class="drop-text">Blog</a></li>
              </ul>
            </li> -->
            <li><a href="contact">Contact Us</a></li>
            <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
              <!-- First Tier Drop Down -->
              <label for="drop-2" class="toggle toogle-2">Account <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">Account <span class="fa fa-angle-down" aria-hidden="true"></span></a>
              <input type="checkbox" id="drop-2">
              <ul>
                <li><a href="login" class="drop-text">Login</a></li>
                <li><a href="registration" class="drop-text">Registration</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- //nav -->
      </div>
      <!-- //header -->