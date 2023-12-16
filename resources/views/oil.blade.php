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
  color: black;
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
  background: #272727;
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

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
          <div class="container">
            <header class="main-header">
              <h1>Empowering the Energy Sector</h1>
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
                <h3> Trade Oil and Gas with Confidence</h3>
              </header>
              <p>At Legend Brokers, our Oil and Gas trading division stands as a beacon of excellence in the industry. With a wealth of experience and a deep understanding of the global energy market, we navigate the complexities of Oil and Gas trading with precision. We provide our clients with unmatched insights, enabling them to make informed decisions in a volatile market landscape.</p>

              <p>
                <h4>Key Highlights:</h4>
                <ul class="live type2">
                <li><b>Global Reach</b>: We operate on a global scale, over 300 million barrels, facilitating transactions across borders and continents.</li>
                <li><b>Market Expertise</b>: Our team of experts possesses extensive +10 years knowledge of oil and gas markets, providing valuable insights.</li>
                <li><b>Risk Management</b>: We employ robust risk management strategies to safeguard your investments.</li>
                <li><b>Transparency</b>: Our transactions are characterized by transparency and integrity.</li>
              </ul></p>

              <p>
                <h4>Services Offered:</h4>
                <ul class="live type2">
                <li><b>Trading Expertise</b>:  We offer a wide range of trading services, including spot and futures contracts.</li>
                <li><b>Supply Chain Management</b>: Our end-to-end supply chain partnerships network optimize logistics and reduce costs.</li>
                <li><b>Market Analysis</b>: We provide real-time market analysis to help you make informed decisions.</li>
                <li><b>Regulatory Complianc</b>: We ensure strict adherence to all regulatory requirements.</li>
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

              <p> <h4><a href="{{route('contact')}}">Contact us:</a></h4>
                To learn more about our Oil and Gas Trading services or to discuss your specific requirements, please don't hesitate to Contact Us today.
              </p>
            </article>
          </div>
          <div class="col-secondary col-md-4">
            <div class="widget widget_recent_post">
              <h3 class="widget-title">Live Oil Price Data Visualization</h3>
              <div style="position: relative; padding-bottom: 75%; height: 0;">
                <iframe
                  src="https://datasource.kapsarc.org/explore/embed/dataset/spot-prices-for-crude-oil-and-petroleum-products/analyze/?sort=-period&dataChart=eyJxdWVyaWVzIjpbeyJjaGFydHMiOlt7InR5cGUiOiJsaW5lIiwiZnVuYyI6IkFWRyIsInlBeGlzIjoiZXVyb3BlX2JyZW50X3Nwb3RfcHJpY2VfZm9iX2RhaWx5IiwiY29sb3IiOiIjZmZkOTJmIiwic2NpZW50aWZpY0Rpc3BsYXkiOnRydWV9LHsidHlwZSI6ImxpbmUiLCJmdW5jIjoiQVZHIiwieUF4aXMiOiJjdXNoaW5nX29rX3d0aV9zcG90X3ByaWNlX2ZvYl9kYWlseSIsImNvbG9yIjoiI2U3OGFjMyIsInNjaWVudGlmaWNEaXNwbGF5Ijp0cnVlfV0sInhBeGlzIjoicGVyaW9kIiwibWF4cG9pbnRzIjoiIiwidGltZXNjYWxlIjoiZGF5Iiwic29ydCI6IiIsImNvbmZpZyI6eyJkYXRhc2V0Ijoic3BvdC1wcmljZXMtZm9yLWNydWRlLW9pbC1hbmQtcGV0cm9sZXVtLXByb2R1Y3RzIiwib3B0aW9ucyI6eyJzb3J0IjoiLXBlcmlvZCJ9fX1dLCJ0aW1lc2NhbGUiOiIiLCJzaW5nbGVBeGlzIjp0cnVlLCJkaXNwbGF5TGVnZW5kIjp0cnVlLCJhbGlnbk1vbnRoIjp0cnVlfQ%3D%3D&static=false&datasetcard=false"
                  style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                  frameborder="0"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.footer2')
    </section>
</div>
@endsection

