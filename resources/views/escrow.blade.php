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

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6" style='background-image: url("/img/projects/escrow.jpeg")'>
          <div class="container">
            <header class="main-header">
              <h1>Secure Transactions, Assured Confidence</h1>
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
                <h3> Your Shield in Complex Transactions </h3>
              </header>
              <p>At Legend Brokers, our escrow services provide a secure and neutral platform for safeguarding funds and assets during complex business transactions.</p>

              <p>
                <h4>Subsections for each type of service:</h4>
                <ul class="live type2">
                <li><b>Real Estate Transactions</b>: Ensuring transparency and security in real estate deals by holding funds until all contractual obligations are met..</li>
                <li><b>International Trade</b>: Mitigating risks in cross-border transactions by safeguarding payments and documents until agreed conditions are fulfilled.</li>
                <li><b>Legal Agreements</b>: Providing a neutral third-party oversight for contract fulfillment, ensuring compliance and resolving disputes if necessary.</li>
              </ul></p>

                <h3> Why Choose Legend Brokers? </h3>
              <p>
                <h4>Your Trustworthy Escrow Partner:</h4>
                <ul class="live type2">
                <li><b>Reliable Security</b>:  Our escrow services offer an extra layer of protection, instilling confidence in buyers and sellers alike.</li>
                <li><b>Expert Mediation</b>: Our experienced team ensures smooth transaction processes and prompt dispute resolution if required.</li>
                <li><b>Industry Expertise</b>: Our knowledge spans diverse sectors, allowing us to tailor our services to your specific business needs.</li>
                <li><b>Unbiased Neutrality</b>: As a neutral third-party, we guarantee fair and impartial handling of funds and assets during transactions.</li>
              </ul></p>

                <h3>Over 300 Million USD of 100% successful transactions</h3>
              <p>
                <h4>Key highlight:</h4>
                <ul class="live type2">
                <li><b>International Trade</b>:  Facilitating smooth transactions for 30+ cross-border trade deals, ensuring buyer and seller satisfaction.</li>
                <li><b>Real Estate Transactions</b>: 40+ real estate deals with secure fund holding and contract fulfilment.</li>
              </ul></p>

              <p> <h4><a href="{{route('contact')}}">Contact us:</a></h4>
                To learn more about our Escrow Service or to discuss your specific requirements, please don't hesitate to Contact Us today.
              </p>
            </article>
          </div>
        </div>
      </div>
      @include('layouts.footer2')
    </section>
</div>
@endsection

