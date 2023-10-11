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

              <img src="/img/slider/oil-barrels.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

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
                data-elementdelay="0.05" style="  color: #ffffff; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);z-index: 2;">Oil & gas trading
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
                data-splitout="none" style="  color: #ffffff;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);z-index: 2;">Consistently Exceeding Expectations: Over +5 Million Barrels Sold and Counting<br>
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

              <img src="/img/slider/greenPanels.webp"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

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

              <img src="/img/slider/escrow-account.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

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

                <img src="/img/slider/business-advisory.webp"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

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
                  {{-- <img alt="" width="46" src="/img/img-icon/icon-architecture.png"> --}}
                  <i class="fas fa-star fa-lg"></i>
                  <h5>Excellence in Everything</h5>
                </div>
                <div class="service-item">
                  {{-- <img alt="" width="58" src="/img/img-icon/icon-interiors.png"> --}}
                  <i class="fas fa-building fa-lg"></i>
                  <h5>Trust as our Foundation.</h5>
                </div>
                <div class="service-item">
                  {{-- <img alt="" width="58" src="/img/img-icon/icon-planing.png"> --}}
                  <i class="fas fa-lightbulb fa-lg"></i>
                  <h5>Forward-Thinking Adaptability</h5>
                </div>
              </div>
              <div class="clearfix visible-sm"></div>
              <div class="col-base col-about-img col-sm-6 col-md-4">
                <img alt="" class="img-responsive" src="/img/Legend Icon White.png" style="box-shadow: none;">
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects -->
      <div class="modal fade" id="trading">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Trade Oil and Gas with Confidence</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Trade Oil and Gas with Confidence:</b> <br>
                                At Legend Brokers, our Oil and Gas trading division stands as a beacon of excellence in the industry. With a wealth of experience and a deep understanding of the global energy market, we navigate the complexities of Oil and Gas trading with precision. We provide our clients with unmatched insights, enabling them to make informed decisions in a volatile market landscape.
                                With a track record of excellence, we take pride in having sold over +5 million barrels, and our journey continues.
                                </p>
                                <p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="trading-metal-confidence">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Trade Metals with Confidence</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                                <p>
                                    <b>Trade Metals with Confidence:</b> <br>
                                    At Legend Brokers we navigate the complexities of metals trading with precision. We offer a wide range of metals, including precious and base metals, and provide clients with unmatched knowledge and support. Our dedication to reliability, transparency, and efficiency ensures that every metals trading transaction is executed with professionalism and expertise.
                                                                    </p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="trading-renewable-confidence">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Trade Renewable Energy Equipment with Confidence</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                                <p>
                                    <b>Trade Renewable Energy Equipment with Confidence:</b> <br>
At Legend Brokers, we offer a comprehensive range of high-quality products from tier one manufacturers. Our extensive selection, coupled with our commitment to fast delivery dates, ensures that you have access to the latest and most reliable renewable energy solutions.
We take pride in our successful distribution of +1.1 GW of Tier 1 solar equipments across +65 countries. In small letters, this achievement translates to a remarkable reduction of 15.8 billion KG CO2 emissions over 25 years, equivalent to removing +3.5 million cars from the road or planting +28.7 million trees.  Try to have icons here if possible
                                </p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="development">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Renewable Energy Development</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Renewable Energy Development. </b> <br>
                                At Legend Brokers we are dedicated to advancing clean and sustainable energy solutions that pave the way for a greener future. With a focus on innovation and collaboration, we specialize in the development of renewable energy projects and the distribution of high-quality equipment. Our goal is to make a positive impact by reducing carbon footprints, mitigating environmental impact, and creating a sustainable energy landscape for generations to come.
                                </p>

                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="renewable-energy-consultation">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Renewable Energy Consultation</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <b>Renewable Energy Consultation.</b> <br>
                                Legend Brokers is your gateway to informed decisions and sustainable choices. Our team of experts provides tailored guidance on renewable energy solutions, helping you navigate the complexities of the industry. From project feasibility assessments to equipment selection and regulatory compliance, we offer comprehensive consultation services. Whether you're a seasoned player or a newcomer to renewable energy, we empower you to make impactful choices that benefit both your business and the planet.</p>
                            <p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="market-research-analysis">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Market Research & Analysis</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <b>Market Research & Analysis.</b> <br>
                                At Legend Brokers, we excel in providing data-driven insights into market trends, customer behavior, and competitor strategies. Our in-depth analysis empowers businesses to make informed choices, seize opportunities, and stay ahead of the curve. With a commitment to meticulous research, we are your trusted partner in navigating the complexities of the market, ensuring that your strategies are grounded in robust data and insights. </p>

                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="advisory">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Strategic Planning & Management </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Strategic Planning & Management:</b> <br>
                                At Legend Brokers, we specialize in crafting meticulous strategies that align with your unique objectives and market dynamics. Our approach encompasses long-term vision, goal setting, and performance monitoring. With a focus on precision and innovation, we provide the strategic guidance needed to thrive in an ever-evolving business environment. Partner with us to chart a course to success and realize your business aspirations.
                                </p>
                            </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="Organizational-Development-Expansion">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Organizational Development & Expansion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <b>Organizational Development & Expansion.</b> <br>
                                At Legend Brokers, we offer comprehensive solutions to enhance your organizational structure, cultivate talent, and foster leadership development. Our expertise extends to risk management, compliance, and global expansion strategies. We provide the guidance and support needed to navigate complex regulatory environments, seize international opportunities, and create a stronger, more adaptable organization. Partner with us to unlock your business's full potential and embark on a path of continuous growth and expansion. </p>

                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="escrow">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Commodity Trading </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Commodity Trading.</b> <br>
                                At Legend Brokers, our impartial and secure escrow platform ensures that funds and assets are safeguarded during complex commodity trades. We act as a neutral third party, overseeing transactions with transparency and integrity. Whether it's facilitating seamless mergers and acquisitions, ensuring real estate deal transparency, or mitigating risks in international trade, our commitment to neutrality guarantees equitable and transparent commodity trading transactions. With us as your trusted partner, you can engage in commodity trading with confidence and peace of mind. </p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="Energy-Project-Financing">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color: black;">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" style="color: black !important;">Energy Project Financing</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <b>Energy Project Financing.</b> <br>
                                At Legend Brokers, we provide a secure and impartial platform to protect funds and assets during the financing of energy projects. Our role as a trusted intermediary ensures that all parties involved have the assurance they need to move forward with these complex endeavors. From securing funding for sustainable energy initiatives to facilitating transparent transactions, our commitment to neutrality and security guarantees that your energy projects are supported by a foundation of trust and reliability.</p>
                            <p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/300" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="{{route('contact')}}" class="btn btn-secondary">Contact us</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
      <section class="projects section">
        <div class="container">
          <h2 class="section-title">Our <span class="text-primary">Markets</span></h2>
        </div>
        <div class="section-content">
          <div class="projects-carousel js-projects-carousel">
            <div class="project project-light">
              <a href="#"  data-toggle="modal" data-target="#trading">
                <figure>
                  <img alt="" src="/img/projects/6-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                        Trade Oil and Gas with Confidence
                    </h3>
                    <h4 class="project-category">
                      Trading
                    </h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a  href="#"  data-toggle="modal" data-target="#trading-renewable-confidence">
                <figure>
                  <img alt="" src="/img/projects/6-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                        Trade Renewable Energy <br> Equipment with Confidence
                    </h3>
                    <h4 class="project-category">
                      Renewable Energy
                    </h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a  href="#"  data-toggle="modal" data-target="#trading-metal-confidence">
                <figure>
                  <img alt="" src="/img/projects/6-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                        Trade Metals with Confidence
                    </h3>
                    <h4 class="project-category">
                      Trade
                    </h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
              <a  href="#"  data-toggle="modal" data-target="#development">
                <figure>
                  <img alt="" src="/img/projects/6-480x880.jpg">
                  <figcaption>
                    <h3 class="project-title">
                        Renewable Energy <br> Development
                    </h3>
                    <h4 class="project-category">
                      Development
                    </h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="project">
                <a  href="#"  data-toggle="modal" data-target="#renewable-energy-consultation">
                  <figure>
                    <img alt="" src="/img/projects/6-480x880.jpg">
                    <figcaption>
                      <h3 class="project-title">
                         Renewable Energy <br> Consultation
                      </h3>
                      <h4 class="project-category">
                        Consultation
                      </h4>
                    </figcaption>
                  </figure>
                </a>
              </div>
              <div class="project">
                <a  href="#"  data-toggle="modal" data-target="#advisory">
                  <figure>
                    <img alt="" src="/img/projects/6-480x880.jpg">
                    <figcaption>
                      <h3 class="project-title">
                        Strategic Planning <br> & Management
                      </h3>
                      <h4 class="project-category">
                        Planning
                      </h4>
                    </figcaption>
                  </figure>
                </a>
              </div>
              <div class="project">
                <a  href="#"  data-toggle="modal" data-target="#market-research-analysis">
                  <figure>
                    <img alt="" src="/img/projects/6-480x880.jpg">
                    <figcaption>
                      <h3 class="project-title">
                        Market Research <br> & Analysis
                      </h3>
                      <h4 class="project-category">
                        Research
                      </h4>
                    </figcaption>
                  </figure>
                </a>
              </div>
              <div class="project">
                <a  href="#"  data-toggle="modal" data-target="#Organizational-Development-Expansion">
                  <figure>
                    <img alt="" src="/img/projects/6-480x880.jpg">
                    <figcaption>
                      <h3 class="project-title">
                        Organizational Development <br> & Expansion
                      </h3>
                      <h4 class="project-category">
                        Development
                      </h4>
                    </figcaption>
                  </figure>
                </a>
              </div>
              <div class="project">
                <a  href="#"  data-toggle="modal" data-target="#escrow">
                  <figure>
                    <img alt="" src="/img/projects/6-480x880.jpg">
                    <figcaption>
                      <h3 class="project-title">
                        Commodity Trading
                      </h3>
                      <h4 class="project-category">
                        Trading
                      </h4>
                    </figcaption>
                  </figure>
                </a>
              </div>
              <div class="project">
                <a  href="#"  data-toggle="modal" data-target="#Energy-Project-Financing">
                  <figure>
                    <img alt="" src="/img/projects/6-480x880.jpg">
                    <figcaption>
                      <h3 class="project-title">
                        Energy Project Financing
                      </h3>
                      <h4 class="project-category">
                        Financing
                      </h4>
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
          <div class="text-parallax" data-stellar-background-ratio="0.85" style="background-image: url('/img/bg/text-1.jpg');">
            <div class="text-parallax-content">10</div>
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
          <br>
            <div class="container" id="testimonial">
                <div class="quoteLoop">
                    <blockquote class="quote"> <img src="/img/clients/logo_dark.png" width="40%" height="40%" alt=""/>
                      <h5 style="font-size: 16px;">&nbsp;<br>
                        &rdquo;Our collaboration with Legend Brokers in the realm of oil and gas trading has been exceptionally rewarding.&rdquo;<br>
                        <small>I.Krestol, Commercial Manager, Ensa Energia</small></h5>
                    </blockquote>
                    <blockquote class="quote"> <img src="/img/clients/logo lubrico.png" width="40%" height="40%" alt=""/>
                      <h5 style="font-size: 16px;">&nbsp;<br>
                        &ldquo;Their market expertise, and robust network have enabled us to optimize our trading strategies and maximize profitability. &rdquo;<br>
                        <small>M.Cortuk, Head of Commodities Trading, Lubrico Petrokimya A.Ş</small></h5>
                    </blockquote>
                    <blockquote class="quote"> <img src="/img/clients/rencom.png" width="40%" height="40%" alt=""/>
                        <h5 style="font-size: 16px;">&nbsp;<br>
                          &ldquo;Our partnership with Legend Brokers has been instrumental in the successful sales and development of several renewable energy power plants. &rdquo;<br>
                          <small>Hamlet Tunian, CEO, Recom Technologies</small></h5>
                      </blockquote>
                      <blockquote class="quote"> <img src="/img/clients/maxSolar.png" width="40%" height="40%" alt=""/>
                        <h5 style="font-size: 16px;">&nbsp;<br>
                          &ldquo;The level of professionalism and efficiency shown by Legend Brokers was impressive. Their support in procuring top-grade solar panels was invaluable to our project's success. &rdquo;<br>
                          <small>M.Giorgos, Project Manager, MaxSolar Inc.</small></h5>
                      </blockquote>
                      <blockquote class="quote"> <img src="/img/clients/jarlin.png" width="40%" height="40%" alt=""/>
                        <h5 style="font-size: 16px;">&nbsp;<br>
                          &ldquo;Teaming up with Legend Brokers enabled us to navigate complex regulatory environments and secure funding efficiently. &rdquo;<br>
                          <small>J.Sarafyan, Sales Manager, Jarlene Investments</small></h5>
                      </blockquote>
                      <blockquote class="quote"> <img src="/img/clients/wms-marine-services-logo.png" width="40%" height="40%" alt=""/>
                        <h5 style="font-size: 16px;">&nbsp;<br>
                          &ldquo;When it comes to support, Legend brokers are always on top of the list, they never are late with submitting their reports. &rdquo;<br>
                          <small>Kerstol Katvabia, Accounts Manager, World Marine Services</small></h5>
                      </blockquote>
                  </div>
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
                +971 (58) 930 4438<br>
                Info@LegendBrokers.com<br>
                Global Formations Office 611, 6th Floor,Fairmont Dubai, Sheikh Zayed Road, Dubai, United Arab Emirates
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
      @include('layouts.footer')
    </div>
  </div>
@endsection
