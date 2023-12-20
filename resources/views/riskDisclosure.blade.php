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
<div class="layout">

    <!-- Home -->

    <main class="main main-inner bg-about" data-stellar-background-ratio="0.6" style="background-image: url(https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8d2hpdGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80);">
      <div class="container">
        <header class="main-header">
          <h1>Risk disclosure</h1>
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
            <h3 class="entry-title">Legend Brokers<span class="text-primary">.</span></h3>
            <p class="entry-text">This document is a disclosure by Legend Brokers (“Company”), which provides the
                Legend Brokers service to the Client under the terms and conditions of the Client
                Agreement, of the potential risks involved in trading on financial markets. The
                Client should first and foremost be aware of the potential losses associated with
                this activity. However, due to the wide range of possible scenarios, this document
                cannot disclose all risks inherent in trading on financial markets. The terms used in
                this document have the same meaning as defined in the corresponding Regulations
                which consists of all the documents located in the “Regulatory Documents” section
                of the Company’s website.</p>
          </div>
        </div>
      </section>


      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
                <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                      <h4>1. Effect of “Leverage”</h4>
                      <ul class="live type2">
                        <li><b>1.1</b> When executing trading operations under margin trading conditions, even
                            small market movements may have great impact on a Client’s trading account due
                            to the effect of leverage. The Client must consider that if the trend on the market
                            is against them, the Client may sustain a total loss of their initial margin and any
                            additional funds deposited to maintain open positions. The Client shall hold full
                            responsibility for all risks, financial resources used and the chosen trading strategy.</li>
                        <li><b>1.2</b> We highly recommend maintaining a Margin Level no lower than 1,000%, as
                            well as placing Stop Loss orders to limit potential losses.</li>
                      </ul>
                    </div>
                  </div>
        </div>
          </div>
        </div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>2. Highly Volatile Instruments</h4>
              <ul class="live type2">
                <li><b>2.1.</b> Many instruments are traded within wide ranges of intraday price movements
                    so the Client must carefully consider the fact that there is not only high probability
                    of profit, but also of loss.</li>
              </ul>
            </div>
          </div>
        </div>
                  </div>
        </div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>3. Technical Risks</h4>
              <ul class="live type2">
                <li><b>3.1.</b> The Client shall assume the risk of financial loss caused by the failure of
                    information, communication, electronic and other systems.</li>
                <li><b>3.2.</b> When executing trading operations through the client terminal, the Client
                    shall assume the risk of financial loss, which can be caused by:<br>
                    a) the failure of Client hardware, software and internet connection.<br>
                    b) the improper operation of Client equipment.<br>
                    c) the wrong settings in the client terminal.<br>
                    d) delayed client terminal updates.<br>
                    e) the Client’s ignorance of the applicable rules described in the MetaTrader User
                    Guide and in the Help section.<br></li>
                <li><b>3.3.</b> The Client acknowledges that at the moment of peak load there may be some
                    difficulties in getting telephone communication with the duty operator, especially
                    on the fast market (for example, when key economic indicators are released).</li>
              </ul>
            </div>
          </div>
        </div>
          </div>
        </div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>4. Abnormal Market Conditions</h4>
              <ul class="live type2">
                <li><b>4.1.</b> The Client shall acknowledge that under abnormal market conditions, the
                    execution time for Client instructions may increase.</li>
              </ul>
            </div>
          </div>
        </div>
                  </div>
        </div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>5. Trading Platform</h4>
              <ul class="live type2">
                <li><b>5.1.</b> The Client shall acknowledge that only one request or instruction is allowed
                    in the queue. Once the Client has sent a request or instruction, any other request
                    or instruction sent by the Client will be ignored. In the “Order” window, the
                    “Order is locked” message will appear.</li>
                <li><b>5.2.</b> The Client shall acknowledge that the only reliable source of quoting
                    information is the server for Clients with live accounts. The quote base in the
                    client terminal shall not be considered a reliable source of quoting information, as
                    in the case of a bad connection between the client terminal and the server, some
                    of the quotes simply may not reach the client terminal.</li>
                <li><b>5.3.</b> The Client shall acknowledge that when the Client closes the window to
                    place/modify/delete an order, as well as the window to open/close a position, the
                    instruction or request which has been sent to the server will not be cancelled..</li>
                <li><b>5.4.</b> The Client shall assume the risk of executing unplanned transactions in the
                    case that the Client sends another instruction before receiving the result from the
                    instruction sent previously.</li>
                <li><b>5.5.</b> The Client shall acknowledge that if an order has already been executed but
                    the Client sends an instruction to modify the level of a pending order and the
                    levels of Stop Loss and/or Take Profit orders at the same time, the only instruction
                    that will be executed is the instruction to modify the Stop Loss and/or Take Profit
                    levels on the position opened on that order.</li>

              </ul>
            </div>
          </div>
        </div>
    </div>
</div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>6. Communications</h4>
              <ul class="live type2">
                <li><b>6.1.</b> The Client shall assume the risk of any financial loss caused by the Client
                    either not receiving a notification from the Company.</li>
                <li><b>6.2.</b> The Client shall acknowledge that unencrypted information transmitted by
                    email is not protected from unauthorized access.</li>
                <li><b>6.3.</b> The Client shall agree that the Company have the right to delete messages
                    sent to the Client through internal mail 3 (three) days after they have been sent,
                    despite the fact that the Client may not have received them yet.</li>
                <li><b>6.4.</b> The Client shall hold full responsibility for the safekeeping of information
                    received from the Company and assumes the risk of any financial loss caused by
                    unauthorized access to the Client’s trading account by a third party.</li>

              </ul>
            </div>
          </div>
        </div>
    </div>
</div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>7. Force Majeure</h4>
              <ul class="live type2">
                <li><b>7.1.</b> The Client shall assume all risks of financial loss caused by a force majeure.</li>
              </ul>
            </div>
          </div>
        </div>
                  </div>
        </div>
      </section>

      <section id="services" class="services section">
        <div class="container">
          <div class="section-content">
            <div class="row-services row-base row">
          <div class="col-base col-service col-sm-6 col-md-10 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item">
                <h4>8. Statutory Prohibitions and Restrictions</h4>
              <ul class="live type2">
                <li><b>8.1.</b> The Client shall assume all financial and other risks when completing
                    operations (or actions connected with these operations) on financial markets that
                    are statutorily prohibited or restricted by the legislation of the country in which
                    the Client is resident..</li>
              </ul>
            </div>
          </div>
        </div>
                  </div>
        </div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <h2 class="text-center mb-4">Legend Brokers</h2>
        
              <p><strong>Low spreads and zero commission:</strong> Depends on the product and account type.</p>
        
              <p><strong>Over-the-counter leveraged derivative contracts:</strong> Including contracts for difference and spot foreign exchange, are complex financial instruments. These instruments come with a high risk of losing money rapidly due to leverage. You should consider whether you understand how these products work, whether you can afford to incur losses, and whether you have the appropriate risk appetite. We recommend you seek professional advice before investing.</p>
        
              <p><strong>Legend Brokers Limited:</strong> Is a company incorporated with limited liability under the laws of the Emirate of Ras Al Khaimah, United Arab Emirates (UAE), and the federal laws of the UAE, under registration number IC20130350.</p>
        
              <p><strong>Disclaimer:</strong> The information on this site is not directed at residents of the United Arab Emirates, United States, Belgium, Canada, and Singapore and is not intended for use by any person in any jurisdiction where such use would be contrary to local law or regulation.</p>
            </div>
          </div>
        </div>
        @include('layouts.footer2')
      </section>
@endsection
