@extends('layouts.frontend')
@section('title') CFO Advisory | The Bookify @endsection
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
            Get Premium CFO Advisory Services for a Fraction of the In-House Price!
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Effective CFO Advisory Services to assist you in making complex business decisions and developing better business strategies. 
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
            <input type="hidden" name="enquiry_type" id="enquiry_type" value="CFO Advisory">
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


<div class="partners-section py-4" style="background-color:#d8d8d8;">
  <div class="container">
    <div class="row align-items-center justify-content-between text-center text-lg-start" style="margin:0;">

      <!-- Text Section -->
      <div class="col-lg-auto col-md-12 mb-3 mb-lg-0" style="flex: 0 0 auto; margin-bottom: 0;">
        <h2 class="mb-0" style="font-weight:700; font-size:2.3rem; white-space: nowrap;">
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
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Choose Experienced CFO Endorsed by  <span>Industry Professionals</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           As organizations expand, executives need knowledge and data to make wise choices. Eventually, you spend more time managing finances than running the company. Or, even worse, you are overwhelmed by your complex financial situation and make expensive judgments on inaccurate information. Later you understand that you do need assistance with financial competence instead of a full-time CFO. 
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            TheBookify team goes above and beyond to fully comprehend your organization so that we can assist you in modernizing finance in ways that support your long-term business objectives. We can assist CFO’s and other finance leaders in establishing themselves as seasoned experts within the organization thanks to our in-depth knowledge of finance and accounting. Together, we create and enhance your operational model while keeping financial objectives of utmost priority. While choosing CFO consulting services, the reliable and trusted firm is TheBookify.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/my-img/cfo.jpg" 
                                 alt="Introduction Video" 
                                 class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="payroll-services-2x2" style="padding:70px 20px; background:#f5f7fa; font-family:'Poppins',sans-serif;">
  <div style="max-width:1200px; margin:0 auto; text-align:center;">
    <h2 style="font-size:32px; font-weight:700; color:#111; margin-bottom:10px;">
    CFO Advisory Services
    </h2>
    <div style="width:60px; height:3px; background:#00cc61; margin:10px auto 40px auto;"></div>
    <p>TheBookify provides financial leaders, business owners, and investors with essential consulting services and assistance that address the particular problems, complexities, and ever-changing environment that the CFO office encounters.</p>
  </div>

  <!-- Grid Container -->
  <div id="ps-grid" style="display:grid; grid-template-columns:repeat(2,1fr); gap:30px; max-width:1100px; margin:0 auto;">

    <!-- Box 1 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-file-invoice" style="font-size:30px; color:#e63946; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Audit Readiness</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        Prepare for an audit of financial statements with the aid of a qualified team.
      </p>
      <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Financial Reports</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> KPI</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Internal Control</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Enterprise Resource Planning (ERP)</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Inventory Management</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Audit Support</li>
      </ul>
    </div>

    <!-- Box 2 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-laptop-code" style="font-size:30px; color:#0077b6; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Fractional CFO</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        With our fractional CFO services, you'll have a dedicated CFO Consultant who knows your company through and out. For one-time or recurring operations, we provide scalable solutions. Some of the ways we assist our clients are as follows:
      </p>
      <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Cash Flow Optimization</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Growth Strategy</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Profitability Analysis</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Pricing and Cost Analysis</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> CFO for Startup</li>
      </ul>
    </div>

    <!-- Box 3 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-users" style="font-size:30px; color:#f4a261; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Financial Advisory</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        To examine financial performance, consult with experienced professionals with the standards you need for your business strategy.
      </p>
      <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Corporate Finance</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Bank Negotiations</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Budget Outlook</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Cash Flow</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Forecasts</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Planning</li>
      </ul>
    </div>

   <!-- Box 4 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-money-check-dollar" style="font-size:30px; color:#7b2cbf; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Operations</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
       There is comfort in knowing that a professional is overseeing, protecting, and constantly improving the financial side of your business.
      </p>
      <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Business Process Review</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Risk Management</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>ERP</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Inventory Management</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Business Interruption</li>
        
      </ul>
    </div>

    <!-- Box 5 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-money-check-dollar" style="font-size:30px; color:#7b2cbf; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Restructuring</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
       We get a better understanding of the financial side of your business. So you have fewer hurdles and more control over the money.
      </p>
      <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Restructuring Process</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Equity Restructure</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Debt Restructure</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Crisis Management</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Forecasts</li>
        <li><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i> Planning</li>
      </ul>
    </div>

    <!-- Box 6 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-money-check-dollar" style="font-size:30px; color:#7b2cbf; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Strategic Consulting</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
       A conveniently available expert board that can help you make challenging business decisions and clarify your business goals.
      </p>
      <ul style="list-style:none; padding:0; margin:0;">
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Strategic Financial Plan</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Profitability Analysis</li>
        <li style="margin-bottom:6px;"><i class="fa-solid fa-check" style="color:#00cc61; margin-right:8px;"></i>Management Change</li>
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



<div class="our-feature">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">How  <span>CFO helps?</span></h2>
                        <p>The role of the CFO is becoming increasingly complex, with an equally vast mandate. From strategic finance and decision assistance to core financial and accounting services, our CFO advice services are tailored to support this important job.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="/contact" class="btn-default">contact now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-feature-list">
                        
                        <div class="our-feature-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-2.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Support and preparation for transactions</h3>
                                <p>Expert guidance to ensure smooth execution and documentation of business transactions.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-3.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Treasury management and financial flow</h3>
                                <p>Optimize cash flow and liquidity with strategic treasury and fund management.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Inspection readiness</h3>
                                <p>Prepare your financials and documentation to meet audit and compliance standards effortlessly.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Reporting to management</h3>
                                <p>Deliver clear, data-driven financial insights to support informed leadership decisions.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Financial closing and reporting</h3>
                                <p>Ensure timely and accurate month-end and year-end financial statements.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Business software</h3>
                                <p>Implement and integrate modern accounting tools to streamline your financial operations.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Management of costs</h3>
                                <p>Identify and control expenses to enhance profitability and business efficiency.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>Assistance with technical accounting</h3>
                                <p>Navigate complex accounting standards with expert technical support.</p>
                            </div>
                        </div>
                        <div class="our-feature-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-feature-1.svg" alt="">
                            </div>
                            <div class="feature-item-content">
                                <h3>FP&A (Financial Planning & Analysis)</h3>
                                <p>Drive growth through data-backed budgeting, forecasting, and performance analysis.</p>
                            </div>
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
           Need professional help with <br>
             <span style="color:#00cc61;"> your CFO Advisory ?</span>
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