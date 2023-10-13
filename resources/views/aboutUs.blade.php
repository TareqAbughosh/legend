@extends('layouts.app')

@section('content')
<style>
    @charset "UTF-8";
.live {
  overflow: hidden;
}
.live > li {
  list-style: none;
  position: relative;
  padding: 0 0 0 2em;
  margin: 0 0 0.5em 10px;
  transition: 0.12s;
}
.live > li::before {
  position: absolute;
  content: "•";
  font-family: Arial;
  color: #FFF;
  top: 0;
  left: 0;
  text-align: center;
  font-size: 2em;
  opacity: 0.5;
  line-height: 0.75;
  transition: 0.5s;
}
.live > li:hover {
  color: #FFF;
}
.live > li:hover::before {
  transform: scale(2);
  opacity: 1;
  text-shadow: 0 0 4px;
  transition: 0.1s;
}
.live.type2 > li::before {
  content: "";
  width: 10px;
  height: 10px;
  background: #FFF;
  border-radius: 3px;
  line-height: 0;
  top: 0.27em;
  left: 5px;
}
.live.type2 > li:hover::before {
  transform: none;
  border-radius: 5px;
  width: 25px;
  left: -10px;
  background: #c5a47e;
}

.live.numbers {
  counter-reset: numbers 0;
}
.live.numbers > li::before {
  content: counter(numbers, decimal) ".";
  counter-increment: numbers 1;
  font-size: 1em;
  opacity: 0.5;
  line-height: 1.2;
  transition: 0.5s;
}
.live.numbers > li:hover:before {
  opacity: 1;
  left: -10px;
  transform: none;
  text-shadow: none;
  transition: 0.12s;
}</style>
<div class="layout">

    <!-- Home -->

    <main class="main main-inner bg-about" data-stellar-background-ratio="0.6" style="background-image: url(https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2hpdGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80);">
      <div class="container">
        <header class="main-header">
          <h1>About Legend brokers</h1>
        </header>
      </div>

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
    </main>

    <div class="content">

      <!-- About  -->

      <section id="about" class="about">
        <div class="container">
          <div class="entry">
            <h3 class="entry-title">Comprehensive Business Solutions for a Sustainable Future<span class="text-primary">.</span></h3>
            <p class="entry-text">At Legend Brokers, we are your trusted partner for comprehensive business solutions. Our diverse portfolio spans from Commodity Trading and Renewable Energy Development to Escrow Services and Business Advisory. With a strong network of top professional companies in various industries, we thrive on embracing new challenges and delivering exceptional results.</p>
          </div>
        </div>
      </section>


      <section id="services" class="services section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">Our</span> Core Values</h2>
          </header>
          <div class="section-content">
            <div class="row-services row-base row">
                <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                      <h4>Our Philosophy:</h4>
                      <ul class="live type2">
                        <li><b>Innovation</b>: We constantly explore new technologies and solutions to stay at the forefront of industry trends.</li>
                        <li><b>Sustainability</b>: Our commitment to environmental responsibility drives our renewable energy initiatives.</li>
                        <li><b>Professionalism</b>: We uphold the highest standards of integrity, transparency, and ethical conduct in all our business endeavors.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="clearfix visible-sm"></div>
                  <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                      <h4>Our Mission</h4>
                      <ul class="live type2">
                        <li>To empower businesses and industries with innovative solutions for a sustainable future.</li>

                      </ul>
                    </div>
                  </div>
                  <div class="clearfix visible-sm"></div>
                  <div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                      <h4>Our Vision</h4>
                      <ul class="live type2">
                        <li>To be the global leader in providing comprehensive business solutions, driven by excellence, sustainability, and professionalism.</li>
                      </ul>
                    </div>
                  </div>
        </div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title"><span class="text-primary">Our</span> Achievements</h2>
          </header>
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
              <ul class="live type2">
                <li><b>Oil and Gas Trading</b>: "Consistently Exceeding Expectations: Over +5 Million Barrels Sold and Counting."</li>
                <li><b>Renewable Energy</b>: "Leading the Green Revolution: Successfully Distributed +1.1 GW of Tier 1 P.V. Panels Across +65 Countries. In small letters Slashing Carbon Footprint by 15.8 Billion KG CO2 - Equivalent to Removing +3.5 Million Cars or Planting +28.7 Million Trees Over 25 Years."</li>
                <li><b>Escrow Services</b>: "Securing Trust, Every Time: Facilitating Transactions Worth +300 Million with a Perfect 100% Completion Rate."</li>
                <li><b>Business Advisory</b>: "Unlocking Insights: Delivered Over 250 Comprehensive Reports and In-Depth Analyses for Informed Business Decisions."</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Objects -->

      <section id="objects" class="objects section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">We are <span class="text-primary">worldwide</span></h2>
          </header>
          <div class="section-content">
            <div class="row-services row-base row">
                <div class="clearfix visible-sm"></div>
                <div class="col-base col-service wow fadeInUp justify-content-center" data-wow-delay="0.6s">
                  <div class="service-item">
                    <h4>Global Reach, Local Expertise</h4>
                    <p>We take pride in our global presence, having worked in over +65 countries across Europe, the Middle East, Singapore, and the Philippines. Our extensive experience and strong partnerships have enabled us to consistently exceed expectations and drive success in every endeavor.</p>
                  </div>
                </div>
              </div>
              <br>
            <div class="objects">
              <img alt="" class="img-responsive" src="img/map.png">


              <div class="object-label" style="left: 58%; top: 50.4%;">
                <div class="object-info">
                  <h3 class="object-title">Middle east</h3>

                </div>
              </div>

              <div class="object-label" style="left: 50.7%; top: 20.4%;">
                <div class="object-info">
                  <h3 class="object-title">Europe</h3>

                </div>
              </div>


              <div class="object-label" style="left: 81%; top: 58%;">
                <div class="object-info">
                  <h3 class="object-title">Philippines</h3>
                </div>
              </div>

              <div class="object-label" style="left: 75%; top: 60%;">
                <div class="object-info">
                  <h3 class="object-title">Singapore</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contacts -->

      <section class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                +971 (58) 930 4438<br>
                Info@LegendBrokers.com<br>
                Trading@LegendBrokers.com<br>
                Global Formations Office 611, 6th Floor,Fairmont Dubai, Sheikh Zayed Road, Dubai, United Arab Emirates
              </div>
              <div class="col-base  col-md-8">
                <form method="post" action="{{route('contact_us_post')}}">
                    @csrf
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
                    <div class="{{session('success') || session('error') ? '' : 'col-message'}} col-field col-sm-12">
                        <div class="form-group">
                          @if(session('success'))
                          <div class="alert alert-success"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                          @endif
                          @if(session('error'))
                          <div class="alert alert-danger">We're sorry, but something went wrong</div>
                          @endif
                        </div>
                      </div>
                  </div>
                  <div class="form-submit text-right"><button class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        @include('layouts.footer2')
      </section>
@endsection
