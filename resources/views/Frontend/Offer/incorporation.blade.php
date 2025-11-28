@extends('layouts.frontend')
@section('title') Incorporation | The Bookify @endsection
@section('meta_description') Start your business with The Bookify’s seamless incorporation services, including entity setup, compliance support, documentation, and expert financial guidance. @endsection
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
    padding: 6px 15px;         
    box-shadow: none;          
    color: #000;      
}

.contact-form .form-control:focus {
    border-color: #86f0b9ff !important;  
    box-shadow: 0 0 0 0.2rem rgba(0, 204, 97, 0.25);
    outline: none;
}

.our-feature
 {
    padding: 50px 0;
    background-color: var(--dark-color);
    background-image: url(../images/our-feature-bg.svg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
 <div class="page-header" style="background-color:#014652; padding:100px 0;">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Left Content -->
      <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque" style="color:#fff; font-weight:700; line-height:1.3;">
            Incorporation Service Made Simple To Support Business Expansion
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Streamline your business registrations, Licenses, Permits, Tax Filings, and more with The Bookify Incorporation Services.
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
            <input type="hidden" name="enquiry_type" id="enquiry_type" value="Incorporation">
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
        <h2 class="mb-0" style="font-weight:700; font-size:2.4rem; white-space: nowrap;">
          Softwares We Integrate To </br> <span style="color:#00cc61;">Make Your Business Easy!</span>
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


 <div class="fact-counter" style="padding: 60px 0;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image Section -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal" style="margin: 0;">
                            <img src="/frontend/my-img/incorporation.jpg" alt="" style="width: 100%; border-radius: 10px;">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content Section -->
            <div class="col-lg-6">
                <div class="fact-counter-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" >
                           Expert Incorporation Services For  <span style="color:#00C853;">Future Milestones</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It may be challenging for small business incorporation. So, if you consider a business incorporation package, you should speak with a professional first. Whether it is a small business owner or a venture capitalist, The Bookify can complete the required paperwork to set up your firm and assist you in taking advantage of the built-in tax benefits for your selected structure because of our expertise in financial and tax services.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">The Bookify can assist you in selecting and maintaining the proper structure for your requirements, whether it is:</p>

                    </div>
                        <ul>
                            <li> Corporations (C-corp, S-corp, sometimes B-corp)</li>
                            <li> Limited Liability Companies (LLC)</li>
                            <li> Partnerships and sole proprietorships</li>
                            <li> Nonprofit Corporations and other Other Tax-Exempt</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="our-feature">
    <div class="container">
        
        <!-- Section Title -->
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <div class="section-title dark-section">
                    <h2 class="text-anime-style-2 text-center" data-cursor="-opaque">
                        Our  <span>Incorporation Services</span>
                    </h2>
                    <p class="text-center">
                        There are many things to think about while starting a new business. What is your company model? Do you have a business plan? How much money do you have to put into your business? And how exactly are you going to set up the business? Working with an online incorporation firm is frequently a wise choice because it may help you save a ton of time and effort. With our company incorporation services you can access lot of modules.
                    </p>
                </div>
            </div>
        </div>
        <!-- Section Title End -->

        <!-- Feature List -->
        <div class="row">
            <div class="col-lg-12">
                <div class="our-feature-list">

                    <div class="our-feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-2.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3 class="text-center">Corporate Supplies</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Corporate and LLC Kits</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> LLC Member Share Certificates</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Corporate Stock Certificates</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Forms &amp; Templates</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Corporate Minutes and Bylaws</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Meeting Minutes Templates</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> LLC Operating Agreement</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-3.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3 class="text-center">Forms & Templates</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Corporate Minutes and Bylaws</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Meeting Minutes Templates</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> LLC Operating Agreement</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3 class="text-center">Services & Supplies</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>  Registered Agent Services</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>  Corporate Supplies</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Express Filing Services</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Licenses, Permits, & Tax Filings</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>  Entity Classification</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> S Corp Elections Form 2553</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> 501C (3) Filings</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3  class="text-center">Licenses & Registrations</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Employer Identification Numbers (EINs)</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Sales & Use Tax Permits</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Payroll Tax Registration (SUI/SIT)</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Business Licenses</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Secretary of State Filings</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> FEIN from the IRS</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3  class="text-center">Business Structures</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> C Corporation</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>S Corporation</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Nonprofit Corporation</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Sole Proprietorship</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Partnership</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Limited Liability Partnership (LLP)</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Limited Liability Company (LLC)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3  class="text-center">Business Filings</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Doing Business As (DBAs)</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Change a Registered Agent</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Articles of Amendments</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Entity Conversions</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Reinstatements</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Articles of Dissolution (Close a Business)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3  class="text-center">Compliance Services</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Registered Agent Services</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Initial Reports</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Annual Reports</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Certificates Of Good Standing</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Certified Copies Of Documents</li>
                            </ul>
                        </div>
                    </div>

                    <div class="our-feature-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                        </div>
                        <div class="feature-item-content">
                            <h3  class="text-center">Names & Trademark Protection</h3>
                            <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Doing Business As (DBAs)</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i> Trademark Search and Registration</li>
                              <li style="color:#fffff4;"><i class="fa-solid fa-check" style="color:#fffff4; margin-right:8px;"></i>Business Name Search and Reservations</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Feature List End -->

        <!-- Contact Button -->
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <a href="tel:+15513481040" class="btn-default">
                    <i class="fa-solid fa-phone me-2"></i> Contact Now
                </a>
            </div>
        </div>

    </div>
</div>


<style>
  /* make sure this targets only our section */


  /* Responsive: 1 column on narrow screens */
  @media (max-width: 767px) {
    #ps-grid {
      grid-template-columns: 1fr !important;
      gap:20px !important;
      padding: 0 12px;
    }
    #payroll-services-2x2 h2 {
      font-size:24px !important;
    }
  }

  /* On medium screens show two columns but tighter spacing */
  @media (min-width: 768px) and (max-width: 1024px) {
    #ps-grid {
      grid-template-columns: repeat(2, 1fr);
      gap:20px;
      padding: 0 20px;
    }
  }
</style>

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
          <p>Happy Customers</p>
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

.pricing-body {
  flex-grow: 1;
}

.pricing-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.pricing-btn {
  margin-top: auto;
}

.pricing-btn .btn {
  min-width: 130px;
}

.pricing-box {
    margin-bottom: -27px;
}

.our-pricing {
    background-color: var(--secondary-color);
    padding: 28px 0;
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