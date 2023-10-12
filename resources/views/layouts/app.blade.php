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
<link href="/css/style.css" rel="stylesheet" media="screen">
<style>
    blockquote footer, blockquote small, blockquote .small {
        color: #c5a47e !important;
    }
    blockquote {
    border-left: 0 !important;
}
    #testimonial {
	background: #272727;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#989898', endColorstr='#585858',GradientType=1 );
	padding: 50px 0 50px 0;
    color: #fff;
    border-radius: 30px;
}

.quoteLoop {
	height: auto;
	width: 100%;
	margin: 0 auto;
	position: relative;
}

.quote {
	margin: 10px 30px;
	height: inherit;
	top: 0px;
	display: none;
	text-align: center;
}
    .modal-content {
        background-color: #D8D8D8 !important;
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
    @php
        $welcome = Route::current()->getName() == 'home' ? true : false;
    @endphp
    <header id="top" class="{{$welcome ? 'header-home' : 'header-inner'}}">
        <div class="brand-panel">
            <a href="/" class="brand">
              Legend<span class="text-primary"> </span>Brokers
            </a>
          </div>
      <div class="brand-panel" style="{{!$welcome ? 'height: 25%;' : ''}}">
        <a href="/" class="brand js-target-scroll">
            {{-- <img style="align-items: center;
            display: flex;
            justify-content: flex-start;" src="/img/Legend Icon White.png" /> --}}

          Legend<span class="text-primary"> </span>Brokers
        </a>
        <div class="brand-name" style="{{!$welcome ? 'display: none;' : ''}}">Legend Brokers</div>
        <div class="slide-number" style="{{!$welcome ? 'display: none;' : ''}}">
          <span class="current-number text-primary">0<span class="count">1</span></span>
          <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
      </div>
      <div class="header-phone">+971 (58) 930 4438</div>
      @if(!$welcome)
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="line"></div>
         </div>
        <ul class="social-list">
            <li><a href="https://www.linkedin.com/company/legendbrokerslimited/" class="fa fa-linkedin" target="_blank"></a></li>
         </ul>
      </div>
      @else
      <div class="vertical-panel"></div>
      <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Best Trading Experience</div>
            <div class="line"></div>
         </div>
        <ul class="social-list">
          <li><a href="https://www.linkedin.com/company/legendbrokerslimited/" class="fa fa-linkedin" target="_blank"></a></li>
         </ul>
      </div>
      @endif

      <!-- Navigation Desctop -->

      <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
          <a href="#top" class="brand js-target-scroll">
            Legend<span class="text-primary"></span>Brokers
          </a>
          <ul class="navbar-desctop-menu">
            <li class="{{$welcome ? 'active' : ''}}">
              <a href="{{route("home")}}">Home</a>
            </li>
            <li class="{{ Route::current()->getPrefix() == '/commodity-trading' || Route::current()->getName() == 'renewableDevelopment' || Route::current()->getName() == 'business-advisory' || Route::current()->getName() == 'escrow' ? 'active' : ''}}">
              <a href="#">Services</a>
              <ul>
                <li><a href="#"> Commodity Trading </a>
                    <ul>
                        <li>
                            <a href="{{route('oil')}}">Oil and Gas Trading </a>
                        </li>
                        <li>
                            <a href="{{route('renewableTrading')}}">Renewable Energy</a>
                        </li>
                        <li>
                            <a href="{{route('metalTrading')}}">Metals Trading.</a>
                        </li>
                    </ul>
                    </li>
                <li>
                  <a href="{{route('business-advisory')}}">Business Advisory</a>
                </li>
                <li>
                    <a href="{{route('renewableDevelopment')}}">Renewable Energy Development</a>
                  </li>
                  <li>
                    <a href="{{route('escrow')}}">Escrow Services</a>
                  </li>
              </ul>
            </li>
            {{-- <li>
              <a href="blog.html">Blog</a>
              <ul>
                <li><a href="blog.html">Blog - List</a></li>
                <li>
                  <a href="blog-details.html">Blog - Post</a>
                </li>
              </ul>
            </li> --}}
            <li class="{{Route::current()->getName() == "aboutUs" ? 'active' : ''}}">
                <a href="{{route('aboutUs')}}">About us</a>
              </li>
            <li>
              <a href="{{route('contact')}}">Contacts</a>
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
            <li class="{{$welcome ? 'active' : ''}}">
              <a href="/">Home</a>
            </li>
              <li class="{{ Route::current()->getPrefix() == '/commodity-trading' || Route::current()->getName() == 'renewableDevelopment' || Route::current()->getName() == 'business-advisory' || Route::current()->getName() == 'escrow' ? 'active' : ''}}">
                <a href="#">Services <i class="fa fa-angle-down"></i></a>
                <ul>
                  <li><a href="#"> Commodity Trading </a>
                      <ul>
                          <li>
                              <a href="{{route('oil')}}">Oil and Gas Trading </a>
                          </li>
                          <li>
                              <a href="{{route('renewableTrading')}}">Renewable Energy</a>
                          </li>
                          <li>
                              <a href="{{route('metalTrading')}}">Metals Trading.</a>
                          </li>
                      </ul>
                </li>
                <li>
                    <a href="{{route('business-advisory')}}">Business Advisory</a>
                  </li>
                  <li>
                      <a href="{{route('renewableDevelopment')}}">Renewable Energy Development</a>
                    </li>
                    <li>
                      <a href="{{route('escrow')}}">Escrow Services</a>
                    </li>
                </ul>
            </li>
            <li class="{{Route::current()->getName() == "aboutUs" ? 'active' : ''}}">
                <a href="{{route('aboutUs')}}">About us</a>
              </li>
            {{-- <li>
              <a href="#">Resources <i class="fa fa-angle-down"></i></a>
              <ul>
                <li><a href="blog.html">Blog - List</a></li>
                <li>
                  <a href="blog-details.html">Blog - Post</a>
                </li>
              </ul>
            </li> --}}
            <li>
              <a href="{{route('contact')}}" class="{{Route::current()->getName() == "contact" ? 'active' : ''}}">Contact us</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

  <!-- Layout -->

  @yield('content')

<!-- SCRIPTS -->

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.magnific-popup.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="https://kit.fontawesome.com/95cf922473.js" crossorigin="anonymous"></script>
<!-- SLIDER REVOLUTION -->
<script src="/js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="/js/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script>
    function fade($ele) {
    $ele.fadeIn(1000).delay(3000).fadeOut(1000, function() {
        var $next = $(this).next('.quote');
        fade($next.length > 0 ? $next : $(this).parent().children().first());
   });
}
fade($('.quoteLoop > .quote').first());

$(document).ready(function () {
    var steps = $(".step");
    var currentStep = 0;

    function showStep(stepIndex) {
        steps.removeClass("active");
        steps.eq(stepIndex).addClass("active");
    }

    function animateOnScroll() {
        var windowHeight = $(window).height();
        var scrollPosition = $(window).scrollTop();

        steps.each(function (index, step) {
            var stepOffset = $(step).offset().top;

            if (stepOffset < scrollPosition + windowHeight * 0.75) {
                currentStep = index;
            }
        });

        showStep(currentStep);
    }

    $(window).on("scroll", animateOnScroll);
});
</script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="/js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="/js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="/js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="/js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="/js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="/js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="/js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="/js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="/js/rev-slider/revolution.extension.video.min.js"></script>
<script src="/js/interface.js"></script>
</body>
</html>
