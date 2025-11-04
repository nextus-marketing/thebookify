@extends('layouts.frontend')
@section('title') Bookkeeping Services | The Bookify @endsection
@section('content')
<style>
    .page-header-box h1 {
    display: inline-block;
    font-size: 50px;
    font-weight: 700;
    line-height: 1.2em;
    letter-spacing: -0.02em;
    color: var(--white-color);
    text-align: center;
    margin-bottom: 10px;
    cursor: none;
}


element.style {
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
</style>
 <div class="page-header" style="background-color:#014652; padding:100px 0;">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Left Content -->
      <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
        <div class="page-header-box text-lg-start text-center">
          <h1 class="text-anime-style-2" data-cursor="-opaque" style="color:#fff; font-weight:700; line-height:1.3;">
            Professional Bookkeeping Services to Ease the Burden of Accounting
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Comprehensive and Professional bookkeeping services to sole traders, partnerships, and limited companies.
          </p>

          <div class="hero-btn mt-4">
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
                    <div class="g-recaptcha" data-sitekey="6LfjaAIsAAAAANXgl59wn5VOIhzNoRlCTJY-8bUF"></div>
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

    .btn-default {
      width: 100%;
    }
  }
</style>


<div class="partners-section py-5" style="background-color: #cdcdcd;">
    <div class="container">
        <div class="row align-items-center justify-content-between gy-4">
            
            <div class="col-lg-6 col-md-12">
                <div class="section-title">
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Accounting Softwares We Integrate To 
                        <span>Make Your Business Easy!</span>
                    </h2>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 text-lg-end text-center partners-logos">
                <img src="/frontend/my-img/quickbook.png" alt="QuickBooks" class="partner-logo">
                <img src="/frontend/my-img/xero.png" alt="Xero" class="partner-logo">
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
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Put the right foot with our  <span>certified bookkeepers.</span></h2>
                        </div>
                        <div class="service-content-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="/contact" class="btn-default">Contact Us</a>
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
                            Level Up your <span>Business with TheBookify</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We will help you to maintain a clear perspective on your company’s performance 
                            and be financially ready throughout the year with the aid of periodic reports, 
                            standardized breakdowns, and biweekly evaluations.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            TheBookify syncs with your financial bookkeeping to maintain order and pave the way for a better future for you.
                             Virtual Financial Review is available at any time and welcomes any inquiries, day or night.
                              Set up an appointment with your designated Accounts executive right away to discuss your 
                              financial review or other inquiry forms.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           TheBookify provides best bookkeeping services for small 
                           business to maintain all financial records.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/images/what-we-do-img-1.jpg" 
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
            Why should a business like yours choose TheBookify?
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
                            Bookkeeping Precision  <span>Expert</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It is essential to have an expert bookkeeper on board for your company who knows how to organize your finances without wasting a lot of your time. TheBookify offers such expertise, and with our collaboration, you can have a bigger chance of building and growing your business with industry’s best bookkeeper services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                           At TheBookify, we go beyond basic bookkeeping to give you a clear and complete picture of your company’s financial health. Our experts continuously monitor your income, expenses, assets, and liabilities to identify patterns that influence profitability and sustainability. Through detailed financial analysis, we help you recognize underperforming areas, optimize cash flow, and uncover new opportunities for growth. Whether it’s monthly performance reviews, budget forecasting, or trend evaluations, our proactive approach ensures your business remains financially sound and strategically positioned for success.
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
                         At TheBookify, we go beyond basic bookkeeping to give you a clear and complete picture of your company’s financial health. Our experts continuously monitor your income, expenses, assets, and liabilities to identify patterns that influence profitability and sustainability. Through detailed financial analysis, we help you recognize underperforming areas, optimize cash flow, and uncover new opportunities for growth. Whether it’s monthly performance reviews, budget forecasting, or trend evaluations, our proactive approach ensures your business remains financially sound and strategically positioned for success.
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Designated Expert">
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
                            Designated  <span>Expert</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It is essential to have an expert bookkeeper on board for your company who knows how to organize your finances without wasting a lot of your time. TheBookify offers such expertise, and with our collaboration, you can have a bigger chance of building and growing your business with industry’s best bookkeeper services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Our designated experts bring years of experience across diverse industries, ensuring that every financial record is accurate, compliant, and insightful. With their guidance, you gain real-time visibility into your business’s financial health, empowering you to make informed decisions and drive sustainable growth with confidence.
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

                    <div class="what-we-do-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>Technical support</li>
                            <li>Monitoring Bill Payments</li>
                            <li>Building Banking Transactions Databases </li>
                            <li>Detecting Data Management Errors </li>
                            <li>Creating Balance Sheets </li>
                            <li>Generating Income Statements </li>
                            <li>Verifying Reports Authenticity</li>
                        </ul>
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="" style="width: 100%; border-radius: 10px;">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content Section -->
            <div class="col-lg-6">
                <div class="fact-counter-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" >
                            Key facts our <span style="color:#00C853;">expertise</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Our expertise is built on years of industry experience, proven financial strategies and a commitment to client success.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our expertise is built on decades of hands-on experience, innovative financial solutions, and a deep understanding of evolving tax regulations. We help businesses streamline their compliance processes, minimize liabilities, and stay focused on sustainable growth.</p>

                    </div>
                    <div class="fact-counter-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li> Advising, Preparing and Filing Tax Forms.</li>
                            <li> Managing Client and Tax Authority Communication.</li>
                            <li> Checking Legal Compliances of Tax Forms.</li>
                            <li> Assisting in Future Tax Planning.</li>
                        </ul>
                    </div>
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
                            Simplifying <span>Taxes</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            You’ll have financial data prepared for tax season, and the taxman won’t be on your tail if you have TheBookify’s bookkeeping service in place. Enjoy the convenience of complete tax preparation and live tax consultant services throughout the season without stress.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            With TheBookify, tax time becomes effortless. Our team ensures every transaction is accurately categorized, every document is in place, and every report is ready when you need it. From linking your accounts to managing vendor data, we simplify complex bookkeeping so you can focus on running your business, not chasing paperwork.
                        </p>
                    </div>

                    <div class="what-we-do-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>Connect bank accounts</li>
                            <li>Vendor list</li>
                            <li>All your products and services</li>
                            <li>Technical support</li>
                        </ul>
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
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
          <h2><span class="counter">25</span>+</h2>
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
          <h2><span class="counter">20</span>+</h2>
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

    <div class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="testimonial-content">
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">our testimonial</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            What our <span>clients say</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            As we onboarded more clients, we saw the value of the Bookkeeper's work to manage our ledger. We decided to work with TheBookify. Their excellent team of certified accounting managers reduces hours of work. They are certainly the best accounting firm.
                        </p>
                    </div>
                    <div class="testimonial-btn">
                        <a href="#0" class="btn-default">contact now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="testimonial-slider-box">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="customer-logo">
                                                <img src="/frontend/my-img/footer-logo.png" alt="">
                                            </div>
                                            <div class="testimonial-quotes">
                                                <img src="/frontend/images/testimonial-quotes.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>"The Bookify team has been outstanding to work with from day 1. They know what they are doing and are very efficient with it. Their accounting and tax solutions are unmatched."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="/frontend/images/author-1.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>sarah t. </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="customer-logo">
                                                <img src="/frontend/my-img/footer-logo.png" alt="">
                                            </div>
                                            <div class="testimonial-quotes">
                                                <img src="/frontend/images/testimonial-quotes.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>"We chose the outsourced accounting services of TheBookify. They are very thorough and efficient. It has helped me save both time and money by keeping my books in order. I strongly recommend their services."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="/frontend/images/author-2.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>ellyse p. </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-header">
                                            <div class="customer-logo">
                                                <img src="/frontend/my-img/footer-logo.png" alt="">
                                            </div>
                                            <div class="testimonial-quotes">
                                                <img src="/frontend/images/testimonial-quotes.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="testimonial-body">
                                            <p>" We saw the industry moving toward what Botkeeper is doing—automating bookkeeping—and we knew this would be crucial to our long-term success." Your company has helped us take that further step easily."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="/frontend/images/author-3.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3>robert t.</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>

                    <div class="customer-rating-boxes">
                        <div class="customer-rating-box">
                            <div class="customer-rating-image">
                                <img src="/frontend/images/icon-google.svg" alt="">
                            </div>
                            <div class="customer-rating-content">
                                <p>google rating</p>
                                <div class="customer-rating-counter">
                                    <h3><span class="counter">5.0</span></h3>
                                    <div class="customer-rating-star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer-rating-box">
                            <div class="customer-rating-counter">
                                <p><span class="counter">5.0</span> rated</p>
                            </div>
                            <div class="customer-rating-star-box">
                                <div class="customer-rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="star-rating-img">
                                    <img src="/frontend/images/customer-rating-img.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="customer-rating-box customer-rating-content">
                            <p>Total rating <span class="counter">5.0</span> base on 1250+ review</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
 .h-100
    {
    height:95% !important;
    }
    .pricing-box {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

/* Ensures equal height for pricing-body so buttons align */
.pricing-body {
  flex-grow: 1;
}

/* Optional: adds smooth hover animation */
.pricing-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

/* Center the button and fix alignment */
.pricing-btn {
  margin-top: auto;
}

/* Optional: make button width consistent */
.pricing-btn .btn {
  min-width: 130px;
}
</style>

<div class="our-pricing">
    <div class="container">
        <!-- Section Row Start -->
        <div class="row section-row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">pricing plan</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Flexible pricing plans for <span>you finance</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a href="#0" class="btn-default">contact now</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>
        <!-- Section Row End -->

        <!-- Pricing Row Start -->
        <div class="row">

            <!-- Pricing Box 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp" style="transition: all 0.3s ease;">
                    <!-- Pricing Header -->
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3">
                            <img src="/frontend/my-img/startup.webp" alt="Start-up Icon" class="img-fluid" style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Start-Up</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <!-- Pricing Body -->
                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            Don’t think of all the mess finance creates in mind while starting-up a business. That is our job to do!
                        </p>
                    </div>

                    <!-- Pricing Button -->
                    <div class="pricing-btn mt-4">
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill fw-semibold" style="background-color:#00cc61; border:none;">
                            View Plan
                        </a>
                    </div>
                </div>
            </div>
            <!-- Pricing Box 1 End -->

            <!-- Pricing Box 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp" style="transition: all 0.3s ease;">
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3">
                            <img src="/frontend/my-img/growth.webp" alt="growth Icon" class="img-fluid" style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Growth</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            Noticing profits? Don’t let the complex bookkeeping and accounting issues break that momentum. Trust our Accounts executive.
                        </p>
                    </div>

                    <div class="pricing-btn mt-4">
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill fw-semibold" style="background-color:#00cc61; border:none;">
                            View Plan
                        </a>
                    </div>
                </div>
            </div>
            <!-- Pricing Box 2 End -->

            <!-- Pricing Box 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp" style="transition: all 0.3s ease;">
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3">
                            <img src="/frontend/my-img/expansion.webp" alt="Start-up Icon" class="img-fluid" style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Start-Up</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            Expanding brings revenue but can also be hectic. Get the best accounting solutions for your maturing business.
                        </p>
                    </div>

                    <div class="pricing-btn mt-4">
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill fw-semibold" style="background-color:#00cc61; border:none;">
                            View Plan
                        </a>
                    </div>
                </div>
            </div>
            <!-- Pricing Box 3 End -->

            <!-- Pricing Box 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp" style="transition: all 0.3s ease;">
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3">
                            <img src="/frontend/my-img/personalized.webp" alt="Start-up Icon" class="img-fluid" style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Personalized</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            We can help you curate the finance strategy just the way you want. Obviously, with suggestions from the Accounts Executives.
                        </p>
                    </div>

                    <div class="pricing-btn mt-4">
                        <a href="#" class="btn btn-success px-4 py-2 rounded-pill fw-semibold" style="background-color:#00cc61; border:none;">
                            View Plan
                        </a>
                    </div>
                </div>
            </div>
            <div style="display:flex; justify-content:center; width:100%;">
          <a href="tel:+15513481040" 
             style="background-color:#00cc61; color:#fff; padding:14px 36px; border-radius:50px; text-decoration:none; font-weight:600; display:inline-flex; align-items:center; justify-content:center; font-size:1rem; transition:all 0.3s ease;">
            <i class="fa-solid fa-phone" style="margin-right:10px; font-size:1rem;"></i>
            Call Now : +1 551-348-1040
          </a>
        </div>
      </div>
        </div>
    </div>
</div>

<div class="partners-section" style="background-color:#cdcdcd; display:flex; align-items:center; justify-content:center; text-align:center; padding:80px 0;">
  <div class="container" style="max-width:900px; width:100%;">
    <div class="row" style="display:flex; justify-content:center;">
      
      <!-- Centered Content -->
      <div class="col-lg-8 col-md-10" style="margin:0 auto;">
        <div class="section-title" style="margin-bottom:25px;">
          <h2 class="text-anime-style-2" data-cursor="-opaque" style="color:#000; font-weight:700; line-height:1.4; font-size:2rem; margin:0;">
            Eliminate Complexity and Increase <br>
            Your <span style="color:#00cc61;">Profit Margins</span>
          </h2>
        </div>
        
        <!-- Centered Button -->
        <div style="display:flex; justify-content:center; width:100%;">
          <a href="tel:+15513481040" 
             style="background-color:#00cc61; color:#fff; padding:14px 36px; border-radius:50px; text-decoration:none; font-weight:600; display:inline-flex; align-items:center; justify-content:center; font-size:1rem; transition:all 0.3s ease;">
            <i class="fa-solid fa-phone" style="margin-right:10px; font-size:1rem;"></i>
            Call Now : +1 551-348-1040
          </a>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection