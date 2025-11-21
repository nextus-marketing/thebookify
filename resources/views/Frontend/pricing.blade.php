@extends('layouts.frontend')
@section('title') Pricing | The Bookify @endsection
@section('meta_description') Discover transparent and affordable pricing at The Bookify for online accounting, bookkeeping, payroll, and tax services designed to fit every business size and budget. @endsection
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

</style>
<div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Handling Your Business Gets Faster And Easier When done with TheBookify .</h1>
                       <nav class="wow fadeInUp d-flex justify-content-center">
                            <div class="hero-btn">
                                <a href="tel:+15513481040" class="btn-default" 
                                style="display:inline-flex; align-items:center; justify-content:center;">
                                <i class="fa-solid fa-phone me-2"></i> Start free bookkeeping trial
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-pricing">
  <div class="container">
    <div class="row justify-content-center">

      <!-- Personal Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-box wow fadeInUp">
          <div class="pricing-header">
            <h3>Personal Plan</h3>
            <h2><sup>$</sup>29.00<sub>/per month</sub></h2>
          </div>
          <div class="pricing-body">
            <div class="pricing-list-title">
              <h3>What's included?</h3>
              <br>
              <p>Start a business on solid foundations, the fundamentals you'd want to have.</p>
            </div>
            <div class="pricing-list">
              <ul>
                <li>Basic bookkeeping setup</li>
                <li>Tax filing guidance</li>
                <li>Monthly reports</li>
                <li>Business registration help</li>
              </ul>
            </div>
          </div>
          <div class="pricing-btn">
            <a href="#" class="btn-default btn-highlighted">Select this package</a>
          </div>
        </div>
      </div>

      <!-- Growth Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-box wow fadeInUp" data-wow-delay="0.2s">
          <div class="pricing-header">
            <h3>Growth</h3>
            <h2><sup>$</sup>149<sub>/per month</sub></h2>
          </div>
          <div class="pricing-body">
            <div class="pricing-list-title">
              <h3>What's included?</h3>
              <br>
              <p>Like many other companies, we constantly push for new development.</p>
            </div>
            <div class="pricing-list">
              <ul>
                <li>Advanced bookkeeping</li>
                <li>Financial planning</li>
                <li>Tax optimization</li>
                <li>Performance tracking</li>
              </ul>
            </div>
          </div>
          <div class="pricing-btn">
            <a href="#" class="btn-default btn-highlighted">Select this package</a>
          </div>
        </div>
      </div>

      <!-- Expansion Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-box wow fadeInUp" data-wow-delay="0.4s">
          <div class="pricing-header">
            <h3>Expansion</h3>
            <h2><sup>$</sup>229<sub>/per month</sub></h2>
          </div>
          <div class="pricing-body">
            <div class="pricing-list-title">
              <h3>What's included?</h3>
              <br>
              <p>Business is flourishing? Manage your finances better than ever.</p>
            </div>
            <div class="pricing-list">
              <ul>
                <li>Forecasting & analysis</li>
                <li>Payroll management</li>
                <li>Automation setup</li>
                <li>Quarterly reviews</li>
              </ul>
            </div>
          </div>
          <div class="pricing-btn">
            <a href="#" class="btn-default btn-highlighted">Select this package</a>
          </div>
        </div>
      </div>

      <!-- CFO Advisory (Highlighted Box) -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-box highlighted-box wow fadeInUp" data-wow-delay="0.6s">
          <div class="pricing-header">
            <h3>CFO Advisory</h3>
            <h2><sup>$</sup>399<sub>/per month</sub></h2>
          </div>
          <div class="pricing-body">
            <div class="pricing-list-title">
              <h3>What's included?</h3>
              <br>
              <p style="color:#fff;">Additional Solutions Available — Get Complete CFO advisory with Starter plan.</p>
            </div>
            <div class="pricing-list">
              <ul>
                <li>CFO consultations</li>
                <li>Risk management</li>
                <li>KPI dashboard setup</li>
                <li>Financial reports</li>
              </ul>
            </div>
          </div>
          <div class="pricing-btn">
            <a href="#" class="btn-default btn-highlighted">Select this package</a>
          </div>
        </div>
      </div>

      <!-- Customized Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-box wow fadeInUp" data-wow-delay="0.8s">
          <div class="pricing-header">
            <h3>Customized</h3>
          </div>
          <div class="pricing-body">
            <div class="pricing-list-title">
              <h3>What's included?</h3>
              <br>
              <p>Customize your finances as you want and save a lot of money quickly.</p>
              <br>
            </div>
            <div class="pricing-list">
              <ul>
                <li>Tailored solutions</li>
                <li>Flexible pricing</li>
                <li>Personalized tax help</li>
                <li>On-demand reports</li>
              </ul>
            </div>
          </div>
          <div class="pricing-btn">
            <a href="#" class="btn-default btn-highlighted">Select this package</a>
          </div>
        </div>
      </div>

      <!-- Benefit List -->
      <div class="col-lg-12">
        <div class="pricing-benefit-list wow fadeInUp" data-wow-delay="1s">
          <ul>
            <li><img src="/frontend/images/icon-pricing-benefit-1.svg" alt="">Get 30 day free trial</li>
            <li><img src="/frontend/images/icon-pricing-benefit-2.svg" alt="">No hidden fees</li>
            <li><img src="/frontend/images/icon-pricing-benefit-3.svg" alt="">You can cancel anytime</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="our-partners">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="our-partners-content">
                        <div class="section-title dark-section">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Exceptional Services at  <span>Exclusive Prices</span></h2>
                            
                            <ul>
                                <li style="color:#fff;">The Bookify provides all scale of plans that perfectly fits your business requirements and needs. There is a range of plans for all types of businesses that you own or may look to expand into.</li>
                                </br>
                                <li style="color:#fff;">The Bookify plans are cost-efficient and considerable of everything you may need to boost your business growth.</li>
                                </br>
                                <li style="color:#fff;">The plans range from $99 to $399.</li>
                            </ul>
                      
                        </div>
                        <div class="our-partner-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="tel:+15513481040" class="btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-partners-list image-anime">
                       <img src="/frontend/my-img/exceptional.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-faqs">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">contact us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Get in Touch <span>with Us</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Have questions or need assistance? Reach out to us today! We're here to provide expert solutions and friendly support.</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="contact-form">
                        <!-- Contact Form Start -->
                         <form action="{{ route('contact-enquiry') }}" enctype="multipart/form-data" method="POST" id="contactForm" class="wow fadeInUp" data-wow-delay="0.5s" data-toggle="validator">
                            @csrf  
                            <div class="row">
                                <input type="hidden" name="enquiry_type" id="enquiry_type" value="Pricing">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="full_name" class="form-control" id="full_name" placeholder="First name">
                                     <div class="field_error" id="full_name-error" style="color:#ff0000;"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Phone no">
                                     <div class="field_error" id="mobile-error" style="color:#ff0000;"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail address">
                                     <div class="field_error" id="email-error" style="color:#ff0000;"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="profession" class="form-control" id="profession" placeholder="Profession">
                                     <div class="field_error" id="profession-error" style="color:#ff0000;"></div>
                                </div>
                                <div class="form-group col-md-12 mb-4 text-center">
                                    <div class="d-inline-block">
                                        <div class="g-recaptcha" data-sitekey="6Lf5KxMsAAAAAPmSX6ShrBobBt-I0g2OqOa762Kf"></div>
                                        <div class="field_error" id="captcha-error" style="color:#ff0000; margin-top:5px;"></div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-default">send message</button>
                                </div>
                            </div>
                        </form>
                        <!-- Google reCAPTCHA Script -->
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <!-- Contact Form End -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="our-faq-section">
                        <div class="faq-accordion" id="faqaccordion">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    Can I change my plan at any time?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>At The Bookify, you can change your plan at any time at your convenience. There are no extra or hidden costs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                      Can you change your plan midway?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Yes, you absolutely can change your plan mid-way, and the affected cost will be adjusted based on your modification.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                       Can I drop my plan mid-way?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Plans cannot be dropped midway. Don’t worry. You will not have the need to drop it.A plan paid for cannot be dropped before its due time.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                      What software is used on The Bookify to provide the services?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>The Bookify use the most efficient and quality-driven softwares, such as Xero and Quickbooks, for efficient resolutions to the customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                     Can I choose my own plan ?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>The Bookify allows you to choose from the variety of plans which are specific to your requirements. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<section style="background-color:#f5f7fa; padding:70px 20px; font-family:'Poppins',sans-serif; color:#222;">
  <div style="max-width:1200px; margin:0 auto;">
    <h2 style="font-size:30px; font-weight:700; color:#111; text-align:center; margin-bottom:40px;">Plan Details</h2>

    <div style="overflow-x:auto;">
      <table style="width:100%; border-collapse:collapse; border-radius:10px; background:#fff; box-shadow:0 4px 20px rgba(0,0,0,0.05); overflow:hidden;">
        <thead>
          <tr>
            <th style="padding:16px; text-align:center; background-color:#00cc61; color:#fff; font-weight:600; text-transform:uppercase;"></th>
            <th style="padding:16px; text-align:center; background-color:#00cc61; color:#fff; font-weight:600; text-transform:uppercase;">Starter</th>
            <th style="padding:16px; text-align:center; background-color:#00cc61; color:#fff; font-weight:600; text-transform:uppercase;">Growth</th>
            <th style="padding:16px; text-align:center; background-color:#00cc61; color:#fff; font-weight:600; text-transform:uppercase;">Expansion</th>
            <th style="padding:16px; text-align:center; background-color:#00cc61; color:#fff; font-weight:600; text-transform:uppercase;">Additional Solutions</th>
          </tr>
        </thead>

        <tbody>
          <!-- Bookkeeping Category -->
          <tr>
            <td colspan="5" style="background-color:#e9f9f0; font-weight:700; color:#00a651; text-transform:uppercase; text-align:left; padding:14px;">Bookkeeping</td>
          </tr>
          <tr style="transition:0.3s;">
            <td style="padding:16px; text-align:left; color:#333;">Cash Basis</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Modified Accrual Basis</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Report delivery day</td>
            <td style="padding:16px; text-align:center;">15th</td>
            <td style="padding:16px; text-align:center;">10th</td>
            <td style="padding:16px; text-align:center;">5th</td>
            <td style="padding:16px; text-align:center;">5th</td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Custom chart of accounts</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
          </tr>

          <!-- Tax & CPA Category -->
          <tr>
            <td colspan="5" style="background-color:#e9f9f0; font-weight:700; color:#00a651; text-transform:uppercase; text-align:left; padding:14px;">Tax &amp; CPA</td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Tax Advice</td>
            <td style="padding:16px; text-align:center;">Semi-annually</td>
            <td style="padding:16px; text-align:center;">Quarterly</td>
            <td style="padding:16px; text-align:center;">Monthly</td>
            <td style="padding:16px; text-align:center;">Monthly</td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Business Tax Return</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Personal Tax Return</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Annual Depreciation Schedule</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
          </tr>
          <tr>
            <td style="padding:16px; text-align:left;">Sales Tax Return Filing (1 state)</td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-xmark" style="color:#d9534f;"></i></td>
            <td style="padding:16px; text-align:center;"><i class="fa-solid fa-check" style="color:#00cc61;"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>


<style>
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
@endsection