@extends('layouts.app')

@section('content')

<main class="main main-inner bg-about" data-stellar-background-ratio="0.6" style="background-image: url(https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2hpdGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80);">
    <div class="container">
      <header class="main-header">
        <h1>Contact us</h1>
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
                    <input type="text" class="form-control" name="name" placeholder="Name *">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" required placeholder="Email *">
                  </div>
                </div>
                <div class="col-field col-sm-6 col-md-4">
                  <div class="form-group">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone *">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="company" placeholder="Company">
                  </div>
                </div>
                <div class="col-field col-sm-12 col-md-4">
                  <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message *"></textarea>
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
