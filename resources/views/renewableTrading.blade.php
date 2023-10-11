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

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6" style="background-image: url(https://unece.org/sites/default/files/user_upload/renewable_energy.jpg)">
          <div class="container">
            <header class="main-header">
              <h1> Empowering the Energy Sector</h1>
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
                <h3> Trade Renewable Energy with Confidence</h3>
              </header>
              <p>At Legend Brokers, we offer a comprehensive range of high-quality products from tier one manufacturers. Our extensive selection, coupled with our commitment to fast delivery dates, ensures that you have access to the latest and most reliable renewable energy solutions.
                We take pride in our successful distribution of +1.1 GW of Tier 1 solar equipments across +65 countries. In small letters, this achievement translates to a remarkable reduction of 15.8 billion KG CO2 emissions over 25 years, equivalent to removing +3.5 million cars from the road or planting +28.7 million trees.  Try to have icons here if possible
            </p>

              <p>
                <h4>Key Highlights:</h4>
                <ul class="live type2">
                <li><b>Global Impact</b>: Our renewable energy trading operations have a significant global impact, contributing to a 15.8 KG of CO2 emission reduction for a cleaner and more sustainable planet.</li>
                <li><b>Technology Leadership</b>: We collaborate with cutting-edge manufacturers to bring you the latest innovations in renewable energy solutions.</li>
                <li><b>Environmental Commitment</b>: Our focus on environmental responsibility extends to every aspect of our renewable energy trading.</li>
                <li><b>Reliability Guarantee</b>: We offer a reliability guarantee, ensuring that the renewable energy products you receive meet the highest quality standards.</li>
              </ul></p>

              <p>
                <h4>Services Offered:</h4>
                <ul class="live type2">
                <li><b>Product Diversity</b>: Our extensive product range covers a wide spectrum of renewable energy solutions, from solar panels to wind turbines.</li>
                <li><b>Tailored Solutions</b>: We understand that each renewable energy project is unique. Our team specializes in creating customized solutions to meet your specific needs.</li>
                <li><b>Market prices</b>: We provide real-time market prices to help you stay competitive in the marke.</li>
                <li><b>Regulatory Compliance</b>: We help you find products that are acceptable to be imported according to every countries’ regulatory requirements.</li>
              </ul></p>

              <div class="container">
                <header class="section-header">
                  <h2 class="section-title">Testimonials:</h2>
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
              <div class="container">
                <h2>Our Renewable Energy Products:</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Solar PV Panels</h4>
                                <p><strong>Efficiency</strong> High-quality panels can have efficiencies upwards of 20%.</p>
                                <p><strong>Durability</strong>: Look for panels that can withstand environmental stress and have a life expectancy of 25+ years.</p>
                                <p><strong>Warranty</strong>: A performance guarantee is important, often 25 years for panels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Inverters</h4>
                                <p><strong>Efficiency</strong>: It’s important to choose inverters with high conversion efficiency, generally above 95%.</p>
                                <p><strong>Reliability</strong>: Inverters should have robust safety features and fault detections.</p>
                                <p><strong>Warranty</strong>: Generally, inverters come with a warranty period of 5-10 years.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Batteries</h4>
                                <p><strong>Capacity & Depth of Discharge</strong> Choose batteries with sufficient storage capacity and an optimal depth of discharge for your system’s needs.</p>
                                <p><strong>Lifespan</strong>: High-quality batteries can have a lifespan of 10+ years.</p>
                                <p><strong>Warranty</strong>: Generally, battery warranties range from 5 to 10 years.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

              <p> <h4><a href="{{route('contact')}}">Contact us:</a></h4>
                Partnering with a trusted Broker like Legend Brokers ensures that your renewable energy project will be equipped with the best components available for your specific project, optimizing performance and longevity through our wide range of partnerships with Manufacturers.
              </p>
            </article>
          </div>
        </div>
      </div>
      @include('layouts.footer2')
    </section>
</div>
@endsection

