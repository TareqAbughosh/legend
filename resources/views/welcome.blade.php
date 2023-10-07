@extends('layouts.app')

@section('content')
<div class="layout">

    <!-- Home -->

    <main class="main">

      <div class="arrow-left"></div>
      <div class="arrow-right"></div>

      <!-- Start revolution slider -->

      <div class="rev_slider_wrapper">
        <div id="rev_slider" class="rev_slider fullscreenbanner">
          <ul>

            <!-- Slide 1 -->

            <li  data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">

              <!-- Main image-->

              <img src="img/slider/oil-barrels.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->

              <div class="slide-title tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']"
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75', '65']"
                data-width="['1100','700','550']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="500"
                data-splitin="chars"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05" style="  color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Oil & gas trading
              </div>

              <!-- Layer 2 -->

              <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                data-transform_out="opacity:0;s:1000;s:1000;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none" style="  color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Consistently Exceeding Expectations: Over +5 Million Barrels Sold and Counting<br>
              </div>

              <!-- Layer 3 -->

              <div class="tp-caption"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_out="x:inherit;y:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on">
              </div>
            </li>

            <!-- Slide 2 -->

            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

              <!-- Main image -->

              <img src="img/slider/greenPanels.webp"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->

              <div class="slide-title tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']"
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-55']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75','65']"
                data-width="['1100','700','500']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="500"
                data-splitin="chars"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05" style="  color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Renewable energy
              </div>


              <!-- Layer 2 -->

              <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                data-transform_out="opacity:0;s:1000;s:1000;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none" style="  color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
                Leading the Green Revolution: Successfully Distributed +1.1 GW of Tier 1 P.V. Panels Across +65 Countries
              </div>

              <!-- Layer 3 -->

              <div class="tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['195','210']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                 data-mask_out="x:inherit;y:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 8;">
              </div>
            </li>

            <!-- Slide 3 -->

            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

              <!-- Main image-->

              <img src="img/slider/escrow-account.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

              <!-- Layer 1 -->

              <div class="slide-title tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']"
                data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                data-fontsize="['50','45', '35']"
                data-lineheight="['80','75', '65']"
                data-width="['1000','700','550']"
                data-height="none"
                data-whitespace="normal"
                data-transform_idle="o:1;"
                data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                data-start="500"
                data-splitin="chars"
                data-splitout="none"
                data-responsive_offset="on"
                data-elementdelay="0.05" style="  color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Escrow Service
              </div>


              <!-- Layer 2 -->

              <div class="slide-subtitle tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                data-fontsize="['18']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                data-transform_out="opacity:0;s:1000;s:1000;"
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none" style="  color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Securing Trust, Every Time: Facilitating Transactions Worth +300 Million with a Perfect 100% Completion Rate
              </div>

              <!-- Layer 3 -->

              <div class="tp-caption tp-resizeme"
                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-mask_out="x:inherit;y:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                style="z-index: 8;">
              </div>
            </li>

            {{-- Layer 4 --}}

            <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000">

                <!-- Main image-->

                <img src="img/slider/business-advisory.webp"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                <!-- Layer 1 -->

                <div class="slide-title tp-caption tp-resizeme"
                  data-x="['right','right','right','right']" data-hoffset="['-18','-18','-18','-18']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['-35','-35', '-25']"
                  data-fontsize="['50','45', '35']"
                  data-lineheight="['80','75', '65']"
                  data-width="['1000','700','550']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="500"
                  data-splitin="chars"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-elementdelay="0.05" style="  color: white;
                  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Business Advisory
                </div>


                <!-- Layer 2 -->

                <div class="slide-subtitle tp-caption tp-resizeme"
                  data-x="['right','right','right','right']" data-hoffset="['0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['75','105']"
                  data-fontsize="['18']"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                  data-transform_out="opacity:0;s:1000;s:1000;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-start="1500"
                  data-splitin="none"
                  data-splitout="none" style="
                  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Unlocking Insights: Delivered Over 250 Comprehensive Reports and In-Depth Analyses for Informed Business Decisions.
                </div>

                <!-- Layer 3 -->

                <div class="tp-caption tp-resizeme"
                  data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']" data-voffset="['195','215']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                  data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_out="x:inherit;y:inherit;"
                  data-start="1500"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  style="z-index: 8;">
                </div>
              </li>
          </ul>
        </div>
      </div>
    </main>

    <div class="content">

      <!-- About  -->

      <section id="about" class="about section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">About <span class="text-primary">Legend brokers</span></h2>
            <strong class="fade-title-left">About</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-base col-sm-6 col-md-4">
                <h3 class="col-about-title">we turn ideas into works of art<span class="text-primary">.</span></h3>
                <div class="col-about-info">
                  <p>At Legend Brokers, we stand as a multifaceted force in the world of business, bridging gaps, forging connections, and enabling growth. Our diverse portfolio of services spans the realms of Oil and Gas trading, Renewable Energy development, Business Advisory, and Escrow Services.
                </p>
                </div>
              </div>
              <div class="col-base col-about-spec col-sm-6 col-md-4">
                <h3 class="col-about-title">our<br> specialization<span class="text-primary">:</span></h3>
                <div class="service-item">
                  {{-- <img alt="" width="46" src="img/img-icon/icon-architecture.png"> --}}
                  <i class="fas fa-star fa-lg"></i>
                  <h4>Excellence in Everything</h4>
                </div>
                <div class="service-item">
                  {{-- <img alt="" width="58" src="img/img-icon/icon-interiors.png"> --}}
                  <i class="fas fa-building fa-lg"></i>
                  <h4>Trust as our Foundation.</h4>
                </div>
                <div class="service-item">
                  {{-- <img alt="" width="58" src="img/img-icon/icon-planing.png"> --}}
                  <i class="fas fa-lightbulb fa-lg"></i>
                  <h4>Forward-Thinking Adaptability</h4>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-about-img col-sm-6 col-md-4">
                <img alt="" class="img-responsive" src="/img/Legend Icon White.png">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects -->

      <section class="projects section">
        <div class="container">
          <h2 class="section-title">Our <span class="text-primary">Markets</span></h2>
        </div>
        <div class="section-content">
          <div class="projects-carousel js-projects-carousel js-projects-gallery">
            <div class="project project-light">
              <a href="img/projects/1-480x880.jpg" title="project 1">
                <figure>
                  <img alt="" src="img/projects/1-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Residential care<br> project in Paris
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project project-light">
              <a href="img/projects/2-480x880.jpg" title="project 2">
                <figure>
                  <img alt="" src="img/projects/2-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Concert hall<br> in New york
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="img/projects/3-480x880.jpg" title="project 3">
                <figure>
                  <img alt="" src="img/projects/3-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Modern hotel<br>in London
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="img/projects/4-480x880.jpg" title="project 4">
                <figure>
                  <img alt="" src="img/projects/4-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Modern hotel<br>in London
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="img/projects/5-480x880.jpg" title="project 5">
                <figure>
                  <img alt="" src="img/projects/5-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Residential care<br> project in Paris
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="img/projects/6-480x880.jpg" title="project 6">
                <figure>
                  <img alt="" src="img/projects/6-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Residential care<br> project in Paris
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="img/projects/7-480x880.jpg" title="project 7">
                <figure>
                  <img alt="" src="img/projects/7-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Residential care<br> project in Paris
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a href="img/projects/8-480x880.jpg" title="project 8">
                <figure>
                  <img alt="" src="img/projects/8-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                      Residential care<br> project in Paris
                    </h3>
                    <h4 class="project-category">
                      Architecture
                    </h4>
                    <div class="project-zoom"></div>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Experience -->

      <section class="experience section">
        <div class="container">
          <div class="text-parallax" data-stellar-background-ratio="0.85" style="background-image: url('img/bg/text-1.jpg');">
            <div class="text-parallax-content">12</div>
          </div>
          <h4 class="experience-info wow fadeInRight"><span class="text-primary">Years of successful work</span><br> in the market</h4>
        </div>
      </section>

      <!-- Clients  -->

      <section class="clients section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Our <span class="text-primary">clients</span></h2>
            <strong class="fade-title-left">clients</strong>
          </header>
          <div class="section-content">
            <ul class="clients-list">
              <li class="client">
                <a href="#"><img alt="" src="img/clients/1.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/2.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/3.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/4.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/5.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/1.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/2.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/3.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/4.png"></a>
              </li>
              <li class="client">
                <a href="#"><img alt="" src="img/clients/5.png"></a>
              </li>
            </ul>
          </div>
          <div class="section-content">
            <a href="#" class="btn btn-shadow-2">Work together <i class="icon-next"></i></a>
          </div>
        </div>
      </section>

      <!-- Contacts -->

      <section class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
            <strong class="fade-title-right">contacts</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                +7 (212) 654-33-35<br>
                +7 (212) 287-85-22<br>
                info@goarch.com<br>
                USA, New York, 57 Quigley Bridge
              </div>
              <div class="col-base  col-md-8">
                <form class="js-ajax-form">
                  <div class="row-field row">
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Email *">
                      </div>
                    </div>
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="Company">
                      </div>
                    </div>
                    <div class="col-field col-sm-12 col-md-4">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-message col-field col-sm-12">
                      <div class="form-group">
                        <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                        <div class="error-message">We're sorry, but something went wrong</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-submit text-right"><button type="submit" class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->

      <footer id="footer" class="footer">
        <div class="container">
          <div class="row-base row">
            <div class="col-base text-left-md col-md-4">
              <a href="#" class="brand">
                go<span class="text-primary">.</span>arch
              </a>
            </div>
            <div class="text-center-md col-base col-md-4">
              <a href="https://themeforest.net/user/murren20" class="author-link">
                by Murren20
              </a>
            </div>
            <div class="text-right-md col-base col-md-4">
              © go.arch 2016. All Rights Reserved.
            </div>
          </div>
        </div>
      </footer>

      <!-- Lines -->

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
    </div>
  </div>
@endsection
