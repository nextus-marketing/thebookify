@extends('layouts.frontend')
@section('title') Incorporation | The Bookify @endsection
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
            Incorporation Service Made Simple to Support Business Expansion
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Streamline your business registrations, Licenses, Permits, Tax Filings, and more with TheBookify Incorporation Services.
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


  }
</style>


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
                           Expert Incorporation Services for  <span style="color:#00C853;">Future Milestones</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It may be challenging for small business incorporation. So, if you consider a business incorporation package, you should speak with a professional first. Whether it is a small business owner or a venture capitalist, TheBookify can complete the required paperwork to set up your firm and assist you in taking advantage of the built-in tax benefits for your selected structure because of our expertise in financial and tax services.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">TheBookify can assist you in selecting and maintaining the proper structure for your requirements, whether it is:</p>

                    </div>
                    <div class="fact-counter-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li> Corporations (C-corp, S-corp, sometimes B-corp)</li>
                            <li> Limited Liability Companies (LLC)</li>
                            <li> Partnerships and sole proprietorships</li>
                            <li> Nonprofit Corporations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="payroll-services-2x2" style="padding:70px 20px; background:#f5f7fa;">
  <div style="max-width:1200px; margin:0 auto; text-align:center;">
    <h2 style="font-size:32px; font-weight:700; color:#111; margin-bottom:10px;">
   Our Incorporation Services
    </h2>
    <div style="width:60px; height:3px; background:#00cc61; margin:10px auto 40px auto;"></div>
    <p>There are many things to think about while starting a new business. What is your company model? Do you have a business plan? How much money do you have to put into your business? And how exactly are you going to set up the business? Working with an online incorporation firm is frequently a wise choice because it may help you save a ton of time and effort. With our company incorporation services you can access lot of modules. </p>
  </div>

  <!-- Grid Container -->
 <div id="ps-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:30px; max-width:1200px; margin:0 auto;">

  <!-- Box 1 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s; text-align:left;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-building-columns" style="font-size:30px; color:#0077b6; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Corporate Supplies</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Corporate and LLC Kits</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> LLC Member Share Certificates</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Corporate Stock Certificates</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Forms & Templates</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Corporate Minutes and Bylaws</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Meeting Minutes Templates</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> LLC Operating Agreement</li>
    </ul>
  </div>

  <!-- Box 2 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
     <i class="fa-solid fa-file-lines" style="font-size:30px; color:#f4a261; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Forms & Templates</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Corporate Minutes and Bylaws</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Meeting Minutes Templates</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> LLC Operating Agreement</li>
    </ul>
  </div>

  <!-- Box 3 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-briefcase" style="font-size:30px; color:#f4a261; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Services & Supplies</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Registered Agent Services</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Corporate Supplies</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Express Filing Services</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Licenses, Permits, & Tax Filings</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Entity Classification</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> S Corp Elections Form 2553</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> 501C (3) Filings</li>
    </ul>
  </div>

  <!-- Box 3 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-id-card" style="font-size:30px; color:#7b2cbf; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Licenses & Registrations</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Employer Identification Numbers (EINs)</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Sales & Use Tax Permits</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Payroll Tax Registration (SUI/SIT)</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Business Licenses</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Secretary of State Filings</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> FEIN from the IRS</li>
    </ul>
  </div>

  <!-- Box 4 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-diagram-project" style="font-size:30px; color:#e63946; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Business Structures</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> C Corporation</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> S Corporation</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Nonprofit Corporation</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Sole Proprietorship</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Partnership</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Limited Liability Partnership (LLP)</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Limited Liability Company (LLC)</li>
    </ul>
  </div>

  <!-- Box 5 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-file-contract" style="font-size:30px; color:#00a896; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Business Filings</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Doing Business As (DBAs)</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Change a Registered Agent</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Articles of Amendments</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Entity Conversions</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Reinstatements</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Articles of Dissolution (Close a Business)</li>
    </ul>
  </div>

  <!-- Box 6 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-file-shield" style="font-size:30px; color:#ff9f1c; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Compliance Services</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Registered Agent Services</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Initial Reports</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Annual Reports</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Certificates Of Good Standing</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Certified Copies Of Documents</li>
    </ul>
  </div>

  <!-- Box 7 -->
  <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:.3s;">
    <div style="display:flex; align-items:center; margin-bottom:15px;">
      <i class="fa-solid fa-certificate" style="font-size:30px; color:#264653; margin-right:12px;"></i>
      <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Names & Trademark Protection</h3>
    </div>
    <ul style="list-style:none; padding:0; margin:0; color:#555; font-size:15px;">
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Doing Business As (DBAs)</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Trademark Search and Registration</li>
      <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Business Name Search and Reservations</li>
    </ul>
  </div>

</div>

</section>

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
                           Let’s start the journey towards success and enhance revenue for your business. Take your company to the next level.
                        </p>
                    </div>
                    <div class="testimonial-btn">
                        <a href="/contact" class="btn-default"><i class="fa-solid fa-phone me-2"></i> contact now</a>
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

<div class="our-pricing">
    <div class="container">
        <!-- Section Row Start -->
        <div class="row section-row align-items-center">
            <div class="col-lg-5">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">pricing plan</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Only the Best Plans  </br><span>Made for You.</span>
                    </h2>
                    <p>Let’s start the journey towards success and enhance revenue for your business.  Take your company to the next level.</p>
                </div>
            </div>

            <div class="col-lg-7">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a href="/contact" class="btn-default"><i class="fa-solid fa-phone me-2"></i> contact now</a>
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
                </div>
            </div>
            <div style="display:flex; justify-content:center; width:100%;">
          <a href="tel:+15513481040" 
            class="btn-default">
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
           Need professional help with <br>
             <span style="color:#00cc61;"> your CFO Advisory ?</span>
          </h2>
        </div>
        
        <!-- Centered Button -->
        <div style="display:flex; justify-content:center; width:100%;">
          <a href="tel:+15513481040" 
            class="btn-default">
            <i class="fa-solid fa-phone" style="margin-right:10px; font-size:1rem;"></i>
            Call Now : +1 551-348-1040
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection