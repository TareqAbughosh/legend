@extends('layouts.app')

@section('content')

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