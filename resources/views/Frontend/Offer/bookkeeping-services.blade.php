@extends('layouts.frontend')
@section('title') Bookkeeping Services | The Bookify @endsection
@section('meta_description') Get reliable bookkeeping services with real-time reports, clean accounts, and expert support. The Bookify helps businesses stay compliant, organized, and financially confident. @endsection
@section('content')
<style>
    .page-header-box h1 {
    display: inline-block;
    font-size: 40px;
    font-weight: 700;
    line-height: 1.2em;
    letter-spacing: -0.02em;
    color: var(--white-color);
    text-align: center;
    margin-bottom: 10px;
    cursor: none;
}


.section-title {
    margin-bottom: 16px;
}
.what-we-do {
    background-color: transparent;
    padding: 50px 0;
}
.contact-form .form-control {
    border: 1px solid #ccc !important; 
    border-radius: 6px;             
    background-color: #fff;       
    padding: 10px 15px;        
    box-shadow: none;          
    color: #000;      
}

.contact-form .form-control:focus {
    border-color: #86f0b9ff !important;  
    box-shadow: 0 0 0 0.2rem rgba(0, 204, 97, 0.25);
    outline: none;
}

.pricing-box {
    margin-bottom: -27px;
}

.our-pricing {
    background-color: var(--secondary-color);
    padding: 28px 0;
}


</style>

 <div class="page-header" style="background-color:#014652; padding:100px 0;">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Left Content -->
      <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque" style="color:#fff; font-weight:700; line-height:1.3;">
            Professional Bookkeeping Services To Ease The Burden Of Accounting
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Comprehensive And Professional Bookkeeping Services To Sole Traders, Partnerships, And Limited Companies.
          </p>

          <div class="hero-btn mt-4 d-flex justify-content-center">
            <a href="tel:+15513481040" class="btn-default">
                <i class="fa-solid fa-phone me-2"></i>
                Book A Free Consultation
            </a>
        </div>

        </div>
      </div>

      <!-- Right Form -->
      <div class="col-lg-5 col-md-12">
        <div class="contact-form p-4" style="background:#fff; border-radius:10px; box-shadow:0 4px 25px rgba(0,0,0,0.15);">
           <form action="{{ route('contact-enquiry') }}" enctype="multipart/form-data" method="POST" id="contactForm" class="wow fadeInUp" data-wow-delay="0.5s" data-toggle="validator">
            @csrf   
             <input type="hidden" name="enquiry_type" id="enquiry_type" value="Bookkeeping Services">
            <div class="form-group mb-3">
              <input type="text" name="full_name" class="form-control" id="full_name" placeholder="First name*">
               <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
            </div>

            <div class="form-group mb-3">
              <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone no*">
               <div class="field_error" id="mobile-error" style="color:#ff0000;"></div>
            </div>

            <div class="form-group mb-3">
              <input type="email" name="email" class="form-control" id="email" placeholder="E-mail address*">
               <div class="field_error" id="email-error" style="color:#ff0000;"></div>
            </div>

            <div class="form-group mb-4">
              <input type="text" name="profession" class="form-control" id="profession" placeholder="Profession*">
               <div class="field_error" id="profession-error" style="color:#ff0000;"></div>
            </div>
            <div class="form-group col-md-12 mb-4 text-center">
                <div class="d-inline-block">
                    <div class="g-recaptcha" data-sitekey="6Lf5KxMsAAAAAPmSX6ShrBobBt-I0g2OqOa762Kf"></div>
                    <div class="field_error" id="captcha-error" style="color:#ff0000; margin-top:5px;"></div>
                </div>
            </div>
            <button type="submit" class="btn-default w-100" >
              Send Message
            </button>
          </form>
           <!-- Google reCAPTCHA Script -->
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        </div>
      </div>

    </div>
  </div>
</div>

<!-- Responsive + Input Styles -->
<style>
  input.form-control {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    font-size: 15px;
    color: #333;
  }

  input.form-control:focus {
    border-color: #00cc61;
    outline: none;
    box-shadow: 0 0 5px rgba(0,204,97,0.3);
  }

  @media (max-width: 991px) {
    .page-header {
      padding: 60px 0;
      text-align: center;
    }

    .page-header-box h1 {
      font-size: 26px;
    }

    .contact-form {
      margin-top: 30px;
    }
  }
</style>


<div class="partners-section py-4" style="background-color:#d8d8d8;">
  <div class="container">
    <div class="row align-items-center justify-content-between text-center text-lg-start" style="margin:0;">

      <!-- Text Section -->
      <div class="col-lg-auto col-md-12 mb-3 mb-lg-0" style="flex: 0 0 auto; margin-bottom: 0;">
        <h2 class="mb-0" style="font-weight:700; font-size:2.1rem; white-space: nowrap;">
          Accounting Softwares </br> We Integrate To </br> <span style="color:#00cc61;">Make Your Business Easy!</span>
        </h2>
      </div>

      <!-- Logos Section -->
      <div class="col-lg-auto col-md-12 text-lg-end text-center" style="flex: 0 0 auto; margin-top: 0;">
        <div class="d-inline-flex align-items-center" style="gap: 100px;">
          <img src="/frontend/my-img/xero.png" alt="Xero" class="partner-logo" style="width:90px; height:auto;">
          <img src="/frontend/my-img/quickbook.png" alt="QuickBooks" class="partner-logo" style="width:90px; height:auto;">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="our-service-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">services</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Put The Right Foot With Our  <span>Certified Bookkeepers.</span></h2>
                        </div>
                        <div class="service-content-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="tel:+15513481040" class="btn-default"><i class="fa-solid fa-phone me-2"></i> Call Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="our-service-list">
                        <div class="service-item">
                            <div class="service-no">
                                <h2>01</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-1.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>A financial system that is always up-to-date with live transactions</h3>
                                    <p>Better decision making by more accurate financial reports.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>02</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-2.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>A friendly experience around the clock</h3>
                                    <p>Get committed Bookkeeping executive support for all of your demands and projects any place, any time.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>03</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-3.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Accounting software</h3>
                                    <p>Access the business-in-progress on the go and update your accounting records anywhere.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>04</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-4.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Financial reporting</h3>
                                    <p>In-depth analysis of your business profitability, income, expenses, and losses to help you make smarter business decisions.
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>05</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-5.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Tax season support</h3>
                                    <p>To avoid issues and headaches during tax filing season, organize your bookkeeping records and other documents chronologically.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>06</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-6.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Mobile accounting</h3>
                                    <p>Catch up with your financial and other business-related information through any mobile device.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Level Up Your <span>Business With The Bookify</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We will help you to maintain a clear perspective on your company’s performance 
                            and be financially ready throughout the year with the aid of periodic reports, 
                            standardized breakdowns, and biweekly evaluations.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            The Bookify syncs with your financial bookkeeping to maintain order and pave the way for a better future for you.
                             Virtual Financial Review is available at any time and welcomes any inquiries, day or night.
                              Set up an appointment with your designated Accounts executive right away to discuss your 
                              financial review or other inquiry forms.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           The Bookify provides best bookkeeping services for small 
                           business to maintain all financial records.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/my-img/levelup.jpg" 
                                 alt="Introduction Video" 
                                 class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="section-title mt-5">
    <h2 class="text-anime-style-2 text-center" data-cursor="-opaque" style="line-height:1.4;">
        Bookkeeping Services 
        <span style="display:block; margin-top:10px;">
            Why Should A Business Like Yours Choose The Bookify?
        </span>
    </h2>
</div>

<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>


            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Bookkeeping  <span>Precision</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           Give your bookkeepers the freedom to succeed in tax and legal compliance. Our account executives assist them with their bookkeeping software to provide the utmost accuracy.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          Empower your business with seamless financial management. Our expert team ensures every transaction is recorded accurately, reports are delivered on time, and compliance standards are always met — helping you maintain transparency, reduce errors, and make confident financial decisions with ease.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          Achieve unmatched financial clarity with our dedicated bookkeeping support. We help streamline your accounting processes, optimize software performance, and maintain precise records — ensuring your books stay organized, compliant, and ready for any audit or business review.
                        </p>
                       
                    </div>

                    <!-- Optional Button -->
                    <!--
                    <div class="what-we-do-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#0" class="btn-default">Contact Now</a>
                    </div>
                    -->
                </div>
            </div>

        </div>
    </div>
</div>


<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Monitoring Financial <span>Health</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           Receive your company’s financial performance analyzed so you can make informed decisions on its financial prospects, from basic cost accounting systems to investment analysis with our best accounting and bookkeeping services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                         At The Bookify, we go beyond basic bookkeeping to give you a clear and complete picture of your company’s financial health. Our experts continuously monitor your income, expenses, assets, and liabilities to identify patterns that influence profitability and sustainability. Through detailed financial analysis, we help you recognize underperforming areas, optimize cash flow, and uncover new opportunities for growth. Whether it’s monthly performance reviews, budget forecasting, or trend evaluations, our proactive approach ensures your business remains financially sound and strategically positioned for success.
                        </p>
                    </div>

                    <!-- Optional Button -->
                    <!--
                    <div class="what-we-do-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#0" class="btn-default">Contact Now</a>
                    </div>
                    -->
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/my-img/monitoring.webp" alt="Designated Expert">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/my-img/designated.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Designated  <span>Expert</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It is essential to have an expert bookkeeper on board for your company who knows how to organize your finances without wasting a lot of your time. The Bookify offers such expertise, and with our collaboration, you can have a bigger chance of building and growing your business with industry’s best bookkeeper services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Our designated experts bring years of experience across diverse industries, ensuring that every financial record is accurate, compliant, and insightful. With their guidance, you gain real-time visibility into your business’s financial health, empowering you to make informed decisions and drive sustainable growth with confidence.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Our professionals don’t just manage your books — they act as strategic partners, helping you identify opportunities, optimize cash flow, and enhance profitability through proactive financial insights.
                        </p>
                    </div>

                    <!-- Optional Button -->
                    <!--
                    <div class="what-we-do-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#0" class="btn-default">Contact Now</a>
                    </div>
                    -->
                </div>
            </div>

        </div>
    </div>
</div>


<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Task  <span>Automation</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Easily automate your business processes with a few simple clicks and save time every time with our Online Bookkeeping Services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                           Our automation tools work seamlessly in the background, ensuring your financial data stays accurate, updated, and ready for smart business decisions.
                        </p>
                    </div>

                    
                        <ul>
                            <li>Technical support</li>
                            <li>Monitoring Bill Payments</li>
                            <li>Building Banking Transactions Databases</li>
                            <li>Detecting Data Management Errors</li>
                            <li>Creating Balance Sheets</li>
                            <li>Generating Income Statements</li>
                            <li>Verifying Reports Authenticity</li>
                        </ul>

                    <!-- Optional Button -->
                    <!--
                    <div class="what-we-do-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#0" class="btn-default">Contact Now</a>
                    </div>
                    -->
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/my-img/task-automation.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="fact-counter" style="padding: 60px 0;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image Section -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal" style="margin: 0;">
                            <img src="/frontend/my-img/key-facts.jpg" alt="" style="width: 100%; border-radius: 10px;">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content Section -->
            <div class="col-lg-6">
                <div class="fact-counter-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" >
                            Simplifying <span style="color:#00C853;">Taxes</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           You’ll have financial data prepared for tax season, and the taxman won’t be on your tail if you have The Bookify’s bookkeeping service in place. 
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Enjoy the convenience of complete tax preparation and live tax consultant services throughout the season without stress.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">With The Bookify, tax time becomes simple and stress-free. Our experts handle everything from documentation to submission, ensuring your returns are accurate and compliant. Stay confident knowing your taxes are managed with precision.
                        </p>
                    </div>

                        <ul>
                             <li> Advising, Preparing and Filing Tax Forms</li>
                            <li> Managing Client and Tax Authority Communication</li>
                            <li> Checking Legal Compliances of Tax Forms</li>
                            <li> Best Assisting in Future Tax Planning</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Account  <span>Reconciliation</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Keeping accounts for debits and credits properly balanced to prevent troubles. Monitoring of overdue amounts to maintain consistency between your balance sheet and bank statement.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                           Maintain complete financial harmony with our comprehensive bookkeeping approach. We ensure your debits and credits are always balanced, monitor overdue payments, and keep your bank statements perfectly aligned with your accounts. From connecting bank accounts to managing vendors, products, and services — our expert support keeps your financial operations smooth, transparent, and error-free.

                        </p>
                    </div>

                        <ul>
                            <li>Connect bank accounts</li>
                            <li>Vendor list</li>
                            <li>All your products and services</li>
                            <li>Technical Support & Assistance</li>
                        </ul>

                    <!-- Optional Button -->
                    <!--
                    <div class="what-we-do-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="#0" class="btn-default">Contact Now</a>
                    </div>
                    -->
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/my-img/tax.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Fact Counter Section -->
<section class="fact-counter-section">
  <div class="container">
    <div class="fact-counter-box-list">

      <!-- Fact Counter Box -->
      <div class="fact-counter-box">
        <div class="icon-box">
          <img src="/frontend/images/icon-fact-counter-1.svg" alt="">
        </div>
        <div class="fact-counter-box-content">
          <h2><span class="counter">250</span>+</h2>
          <p>Invoices Processed</p>
        </div>
      </div>

      <!-- Fact Counter Box -->
      <div class="fact-counter-box">
        <div class="icon-box">
          <img src="/frontend/images/icon-fact-counter-2.svg" alt="">
        </div>
        <div class="fact-counter-box-content">
          <h2><span class="counter">80</span>%+</h2>
          <p>Transparent Prices</p>
        </div>
      </div>

      <!-- Fact Counter Box -->
      <div class="fact-counter-box">
        <div class="icon-box">
          <img src="/frontend/images/icon-fact-counter-3.svg" alt="">
        </div>
        <div class="fact-counter-box-content">
          <h2><span class="counter">300</span>+</h2>
          <p>Happy Customer</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS -->
<style>
.fact-counter-section {
  background: #f9f9f9; /* soft gray background */
  padding: 80px 0;
  text-align: center;
}

.fact-counter-box-list {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 80px;
  flex-wrap: wrap;
}

.fact-counter-box {
  background: #ffffff;
  border-radius: 12px;
  box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.08);
  padding: 40px 30px;
  width: 240px;
  text-align: center;
  transition: all 0.3s ease;
}

.fact-counter-box:hover {
  transform: translateY(-5px);
  box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.12);
}

.icon-box {
  background: #00d47e;
  width: 60px;
  height: 60px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
}

.icon-box img {
  width: 28px;
  height: 28px;
  filter: brightness(0) invert(1); /* makes SVG icons white */
}

.fact-counter-box-content h2 {
  font-size: 36px;
  font-weight: 700;
  color: #00495f;
  margin-bottom: 8px;
}

.fact-counter-box-content p {
  font-size: 16px;
  color: #666;
  text-transform: capitalize;
}
</style>




<div class="our-pricing py-5">
  <div class="container">
    <!-- Section Header -->
    <div class="row section-row align-items-center text-center mb-5">
      <div class="col-lg-12">
        <div class="section-title">
          <h3 class="wow fadeInUp">pricing plan</h3>
          <h2 class="text-anime-style-2" data-cursor="-opaque">
            Only The Best Plans <span>Made For You</span>
          </h2>
          <p class="mx-auto" style="max-width:700px;">
            Let’s start the journey towards success and enhance revenue for your business. 
            Take your company to the next level.
          </p>
        </div>
      </div>
    </div>


    <!-- Buttons Below Cards -->
    <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.4s">
    <a href="/pricing" class="btn-default"
        style="display:inline-flex;align-items:center;justify-content:center;min-width:220px;height:55px;margin:8px;font-size:16px;font-weight:600;text-align:center;">
        <i class="fa-solid fa-paper-plane me-2"></i> Select Your Plan
    </a>
    <a href="tel:+15513481040" class="btn-default"
        style="display:inline-flex;align-items:center;justify-content:center;min-width:220px;height:55px;margin:8px;font-size:16px;font-weight:600;text-align:center;">
        <i class="fa-solid fa-phone me-2"></i>
       Speak with Expert
    </a>
</div>
  </div>
</div>



@endsection