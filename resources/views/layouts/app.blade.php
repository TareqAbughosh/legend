<!DOCTYPE HTML>
<html lang="en">
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LEGEND BROKERS</title>

<!-- Favicons -->
<link rel="shortcut icon" href="favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
<style>
    .shadow-effect {
                background: #fff;
                padding: 20px;
                border-radius: 4px;
                text-align: center;
        border:1px solid #ECECEC;
                box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
            }
            #customers-testimonials .shadow-effect p {
                font-family: inherit;
                font-size: 17px;
                line-height: 1.5;
                margin: 0 0 17px 0;
                font-weight: 300;
            }
            .testimonial-name {
                margin: -17px auto 0;
                display: table;
                width: auto;
                background: #c5a47e;
                padding: 9px 35px;
                border-radius: 12px;
                text-align: center;
                color: black;
                box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
            }
            #customers-testimonials .item {
                text-align: center;
                padding: 50px;
                    margin-bottom:80px;
                opacity: 1;
                -webkit-transform: scale3d(0.8, 0.8, 1);
                transform: scale3d(0.8, 0.8, 1);
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }
            #customers-testimonials .owl-item.active.center .item {
                opacity: 1;
                -webkit-transform: scale3d(1.0, 1.0, 1);
                transform: scale3d(1.0, 1.0, 1);
            }
            #customers-testimonials .owl-item img {
                transform-style: preserve-3d;
                max-width: 90px;
                margin: 0 auto 17px;
            }
            #customers-testimonials.owl-carousel .owl-dots .owl-dot.active span,
    #customers-testimonials.owl-carousel .owl-dots .owl-dot:hover span {
                background: #3190E7;
                transform: translate3d(0px, -50%, 0px) scale(0.7);
            }
    #customers-testimonials.owl-carousel .owl-dots{
        display: inline-block;
        width: 100%;
        text-align: center;
    }
    #customers-testimonials.owl-carousel .owl-dots .owl-dot{
        display: inline-block;
    }
            #customers-testimonials.owl-carousel .owl-dots .owl-dot span {
                background: #3190E7;
                display: inline-block;
                height: 20px;
                margin: 0 2px 5px;
                transform: translate3d(0px, -50%, 0px) scale(0.3);
                transform-origin: 50% 50% 0;
                transition: all 250ms ease-out 0s;
                width: 20px;
            }
    </style>
</head>
<body>

    <!-- Loader -->

    <div class="loader">
      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="loader-brand">
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>
    </div>

    <!-- Header -->

    <header id="top" class="header-home">
      <div class="brand-panel">
        <a href="#top" class="brand js-target-scroll">
            {{-- <img style="align-items: center;
            display: flex;
            justify-content: flex-start;" src="/img/Legend Icon White.png" /> --}}

          Legend<span class="text-primary"> </span>Brokers
        </a>
        <div class="brand-name">Legend Brokers</div>
        <div class="slide-number">
          <span class="current-number text-primary">0<span class="count">1</span></span>
          <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
      </div>
      <div class="header-phone">+7 (212) 674-25-10</div>
      <div class="vertical-panel"></div>
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Best Trading Experience</div>
            <div class="line"></div>
         </div>
        <ul class="social-list">
          <li><a href="" class="fa fa-instagram"></a></li>
          <li><a href="" class="fa fa-twitter"></a></li>
          <li><a href="" class="fa fa-behance"></a></li>
          <li><a href="" class="fa fa-facebook"></a></li>
         </ul>
      </div>

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="#top" class="brand js-target-scroll">
            Legend<span class="text-primary"></span>Brokers
          </a>
          <ul class="navbar-desctop-menu">
            <li class="active">
              <a href="{{route("home")}}">Home</a>
            </li>
            <li>
              <a href="about.html">About us</a>
            </li>
            <li>
              <a href="projects.html">Services</a>
              <ul>
                <li><a href="projects.html">Projects - List</a></li>
                <li>
                  <a href="project.html">Project - details</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="blog.html">Blog</a>
              <ul>
                <li><a href="blog.html">Blog - List</a></li>
                <li>
                  <a href="blog-details.html">Blog - Post</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contacts.html">Contacts</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Navigation Mobile -->

      <nav class="navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
          Legend<span class="text-primary"></span>Brokers
        </a>

        <!-- Navbar Collapse -->

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="navbar-nav-mobile">
            <li class="active">
              <a href="#">Home <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="../light/index.html">Home - Light</a></li>
                <li class="active">
                  <a href="index.html">— Home - Dark</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="about.html">About us</a>
            </li>
            <li>
              <a href="#">Services <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="projects.html">Projects - List</a></li>
                <li>
                  <a href="project.html">Project - details</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Resources <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="blog.html">Blog - List</a></li>
                <li>
                  <a href="blog-details.html">Blog - Post</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contacts.html">Contact us</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

  <!-- Layout -->

  @yield('content')

<!-- SCRIPTS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://kit.fontawesome.com/95cf922473.js" crossorigin="anonymous"></script>
<!-- SLIDER REVOLUTION -->
<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script>
jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
</script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>
<script src="js/interface.js"></script>
</body>
</html>
