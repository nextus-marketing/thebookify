@extends('layouts.frontend')
@section('title') Tax & Accounting | The Bookify @endsection
@section('meta_description') Simplify tax and accounting with expert guidance, accurate filings, financial reports, and compliance support to help businesses save time, reduce errors, and stay organized. @endsection
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
    padding: 6px 15px;         
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
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque" style="color:#fff; font-weight:700; line-height:1.3;">
           Your Seek For Professional Tax And Accounting Is Over!
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Tax preparation assistance from committed tax experts who make sure you comply with IRS regulations.
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
            <input type="hidden" name="enquiry_type" id="enquiry_type" value="Tax and Accounting">
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

  <div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" style="font-size:40px;">
                           Bring Your Company's Finances <span>Under Control With The Bookify</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We have dedicated tax professionals who will help you prepare your taxes and ensure you stay compliant with the IRS.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            The Bookify provides affordable tax and accounting services near me. We will sit down with you to review your goals, discuss any issues or risks that might affect your business, and provide a customized plan to help you reach your goals.
                        </p>
                         <p class="wow fadeInUp" data-wow-delay="0.4s">
                           Our services are provided in the areas of business consulting, accounting, and financial planning. We offer our clients complete solutions for their accounting needs.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           At The Bookify, we pride ourselves on delivering reliable and transparent financial guidance that helps you make smarter business decisions. Our experts not only manage your books but also help identify opportunities to improve cash flow, reduce unnecessary expenses, and strengthen your company’s financial foundation.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/my-img/company-finance.jpg" 
                                 alt="Introduction Video" 
                                 class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section id="payroll-services-2x2" style="padding:70px 20px; background:#f5f7fa; font-family: 'DM Sans', sans-serif;">
  <div style="max-width:1200px; margin:0 auto; text-align:center;">
    <h2 style="font-size:32px; font-weight:700; color:#111; margin-bottom:10px;">
     The Bookify’s Tax And Accounting Service
    </h2>
    <div style="width:60px; height:3px; background:#00cc61; margin:10px auto 40px auto;"></div>
  </div>

  <!-- Grid Container -->
  <div id="ps-grid" style="display:grid; grid-template-columns:repeat(2,1fr); gap:30px; max-width:1100px; margin:0 auto;">

    <!-- Box 1 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-file-invoice" style="font-size:30px; color:#e63946; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Planned Tax Estimation</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        You can accurately ascertain your tax liability using our tax planning service. Long-term savings are possible if you accurately anticipate your taxes. The Bookify maps out strategies to ensure maximum tax benefits.
      </p>
    </div>

    <!-- Box 2 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-laptop-code" style="font-size:30px; color:#0077b6; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Corporate Taxes</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        The Bookify keeps up with changes to tax laws. We have registered CPAs that are knowledgeable about every element of a tax return. Our professionals file your corporation tax return types the 1120s, 1065, and even Schedule C.
      </p>
    </div>

    <!-- Box 3 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-users" style="font-size:30px; color:#f4a261; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">IRS Notice</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
       You should act when you have a tax issue, and you can rely on us to do so. You can get individualized assistance from skilled tax professionals of The Bookify to deal with the IRS. We can assist with IRS notice translation and resolution.
      </p>
    </div>

    <!-- Box 4 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-money-check-dollar" style="font-size:30px; color:#7b2cbf; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Personal Taxes</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        The Bookify Tax and Accounting Services can take care of all your federal IRS tax returns needs. Whether you have a single job or need to file a 1040-EZ, our tax preparers are knowledgeable and proficient in all areas of the tax return.
      </p>
    </div>

  </div>
</section>

<style>
  
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



<div class="our-feature">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h2 class="text-anime-style-2 text-center" data-cursor="-opaque">Why <span>Choose Us? </span></h2>
                        <p class="text-center">With certified professionals, smart technology, and years of experience, we deliver efficient and cost-effective tax and accounting services. Count on us for clear insights, dependable results, and a smoother financial journey.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-feature-list">
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Reliable</h3>
                                <p>Our clients come from all walks of life, and some have grown to be giant corporations. We take pride in the fact that we can help our clients with our affordable tax and accounting services.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-2.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>360° Approach</h3>
                                <p>The Bookify offers 360° tax and accounting services. You will receive affordable accounting and tax services for small business also provide assistance during this process. When it comes to realizing your full profit potential, we are your one-stop shop.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-3.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Expert Help</h3>
                                <p>With the professional accounting and tax services, The Bookify can assist you like no other can. Whether you require assistance securing scalability, attentive bookkeeping, or tax audit preparation, our team is here to assist you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <a href="tel:+15513481040" class="btn-default">
                    <i class="fa-solid fa-phone me-2"></i> Contact Now
                </a>
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
          <p>Happy Customers</p>
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
          <h2><span class="counter">30</span>+</h2>
          <p>Payroll Services Offered</p>
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