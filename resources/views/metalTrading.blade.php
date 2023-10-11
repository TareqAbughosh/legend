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
<div class="content">

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6" style="background-image: url(https://pbs.twimg.com/media/DJB5acNXoAAQyfZ.jpg:large)">
          <div class="container">
            <header class="main-header">
              <h1> Precision in Metal Trading</h1>
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

    <section class="blog-details">
      <div class="container">
        <div class="row">
          <div class="col-primary col-md-8">
            <article class="post">
              <header class="post-header">
                <h3> Trade Metals with Confidence</h3>
              </header>
              <p>At Legend Brokers, our Metals trading division is precise and reliabile. With a profound understanding of the global metal markets, we navigate the complexities of Metal Trading with expertise. We provide our clients with unmatched insights, enabling them to make informed decisions in a dynamic market.
            </p>

              <p>
                <h4>Key Highlights:</h4>
                <ul class="live type2">
                <li><b>Global Reach</b>: Our metal trading operations span the globe, connecting buyers and sellers across continents.</li>
                <li><b>Market Expertise</b>: Our team of experts possesses extensive knowledge of metal markets, providing valuable insights.</li>
                <li><b>Quality Assurance</b>: We prioritize quality control and ensure that the metals we trade meet the highest industry standards.</li>
                <li><b>Transparency</b>: Our transactions are characterized by transparency and integrity.</li>
              </ul></p>

              <p>
                <h4>Products Offered:</h4>
                <ul class="live type2">
                <li><b>Precious Metals</b>: Gold, Silver, Platinum, Palladium.</li>
                <li><b>Base Metals</b>: Copper, Aluminum, Zinc, Lead, Nickel.</li>
                <li><b>Special Alloys</b>: Stainless Steel, Titanium, Cobalt.</li>
                <li><b>Rare Earth Metals</b>: Scandium, Yttrium, Lanthanides.</li>
                <li><b>Exotic Metals</b>: Tantalum, Zirconium, Hafnium.</li>
              </ul></p>

              <div class="container">
                <header class="section-header">
                  <h2 class="section-title">Client Testimonials:</h2>
                </header>
                <br>
                  <div class="container" id="testimonial">
                    <div class="quoteLoop">
                      <blockquote class="quote"> <img src="/img/clients/al carmel logo.png" width="40%" height="40%" alt=""/>
                        <h5 style="font-size: 16px;">&nbsp;<br>
                          &rdquo;Price quotations from legend are always competitive and shipping is on time.&rdquo;<br>
                          <small>Y.Aldraghmeh, Sales Executive, Al Carmel.</small></h5>
                      </blockquote>
                    </div>
                  </div>
              </div>

              <p> <h4><a href="{{route('contact')}}">Contact us:</a></h4>
                To learn more about our Metals Trading services or to discuss your specific requirements, please don't hesitate to Contact Us today.
              </p>
            </article>
          </div>
        </div>
      </div>
      @include('layouts.footer2')
    </section>
</div>
@endsection

