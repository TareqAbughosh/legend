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

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6" style="background-image: url(https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/2zlYPOQC0YLOnko9UtepFy/1fd4b3fb7308eecfeeac964a29ed6796/GettyImages-1174452698.jpg?w=1500&h=680&q=60&fit=fill&f=faces&fm=jpg&fl=progressive&auto=format%2Ccompress&dpr=1&w=1000&h=)">
          <div class="container">
            <header class="main-header">
              <h1> Empowering Businesses to Thrive </h1>
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
                <h3> Holistic Solutions for Diverse Business Challenges</h3>
              </header>
              <p>At Legend Brokers, we offer a range of consultancy services to help businesses optimize operations, scale effectively, and stay ahead in the market.</p>

              <p>
                <h4>Subsections for each type of service:</h4>
                <ul class="live type2">
                <li><i class="fa fa-line-chart"><b>  Market Research & Analysis </b></i>: Providing data-driven insights to understand market trends, customer behavior, and competitor strategies.</li>
                <li><i class="fa fa-lightbulb-o"><b>  Strategic Planning</b></i>: Crafting bespoke strategies that align with your business goals and market dynamics.</li>
                <li><i class="fa fa-dollar"><b>  Financial Consulting</b></i>: Assisting in financial planning, investment strategies, and risk management.</li>
                <li><i class="fa fa-cogs"><b>  Operational Efficiency</b></i>: Streamlining processes and workflows to enhance productivity and reduce costs.</li>
                <li><i class="fa fa-balance-scale"><b>  Regulatory Compliance & Risk Management</b></i>: Navigating regulatory environments and implementing risk management strategies.</li>
              </ul></p>
              <header class="post-header">
                <h3> Why Choose Legend Brokers?</h3>
              </header>
              <p>
                <h4>Your Success is Our Priority</h4>
                <ul class="live type2">
                <li><b>Expert Knowledge</b>: Our consultants are industry veterans with deep expertise in various domains.</li>
                <li><b>Customized Solutions</b>: We tailor our services to match your unique business needs and objectives.</li>
                <li><b>Global Perspective</b>: We bring an international outlook to help your business compete on a global scale.</li>
                <li><b>Trusted Partnerships</b>: We value long-term relationships and work closely with our clients for sustained success.</li>
              </ul></p>

              <p>
                <h4>Our Impact Speaks for Itself</h4>
                Browse through our case studies to see how we’ve made a difference in various businesses across industries. HERE please use images that are related to the below industries and write how many reports we did for each industry.
                <ul class="live type2">
                <li>Strategic Planning & Management. +90</li>
                <li>Market Research & Analysis. +100</li>
                <li>We bring an international outlook to help your business compete on a global scale.</li>
                <li> Organizational Development & Expansion. +60</li>
              </ul></p>


              <p> <h4><a href="{{route('contact')}}">Contact us:</a></h4>
                To learn more about our Business Advisory services or to discuss your specific requirements, please don't hesitate to Contact Us today.
              </p>
            </article>
          </div>
        </div>
      </div>
      @include('layouts.footer2')
    </section>
</div>
@endsection

