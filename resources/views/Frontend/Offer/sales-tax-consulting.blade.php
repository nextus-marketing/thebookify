@extends('layouts.frontend')
@section('title') Sales Tax Consultant | The Bookify @endsection
@section('meta_description') Get expert sales tax consulting with accurate filings, compliance support, nexus guidance, and state-specific strategies to help businesses avoid penalties and stay compliant. @endsection
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
</style>
 <div class="page-header" style="background-color:#014652; padding:100px 0;">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <!-- Left Content -->
      <div class="col-lg-6 col-md-12 mb-5 mb-lg-0">
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque" style="color:#fff; font-weight:700; line-height:1.3;">
            Sales Tax Consultant
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Our experts will help you stay up-to-date with recent changes in law, advise the most profitable way to sell your products and suggest ways to avoid paying sales tax.
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
            <input type="hidden" name="enquiry_type" id="enquiry_type" value="Sales Tax Consulting">
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

  .how-it-work {
    padding: 40px 0;
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


<div class="how-it-work ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work-content">
                    <div class="section-title text-center">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          The Bookify is a group of qualified and experienced experts in the field of taxation who strive to offer the best Sale tax consulting services. 
                          We understand that it can be hard to handle all the different rules and regulations in this field on your own, which is why we are here to help. Our professionals are highly trained professionals with extensive experience in this domain. 
                        </p>
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
                            What Are Sales <span>Tax Consulting Services?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            With the extensive complexities of state and federal laws, it can be difficult to understand the requirements for sales tax. In order to stay compliant with regulations, you need expert advice and guidance.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Sales Tax consulting services are an essential part of any business. The complexities of state and federal laws can be challenging to understand even for experienced professionals, which is why you need a Sales Tax consultant. 
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            A consultant will help you stay up-to-date with recent changes in law, advise the most profitable way to sell your products, and suggest ways to avoid paying sales tax.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Our Sales Tax consultants also assist in identifying potential tax savings, minimizing risks of penalties, and streamlining your compliance process.
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
                            <img src="/frontend/my-img/sales-tax.jpg" alt="Simplifying Taxes">
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
                            <img src="/frontend/my-img/tax-2.jpg" alt="" style="width: 100%; border-radius: 10px;">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content Section -->
            <div class="col-lg-6">
                <div class="fact-counter-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" >
                          Why Should You Choose Us For Your  <span style="color:#00C853;">Company's Sales Tax Consulting?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We have provided our services for over a decade in the field and have been acknowledged by all the top-tier organizations.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We provide consultation on how to set up a new business, avoid pitfalls and risks, and advise what steps must be taken to comply with current legislation.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our team combines deep industry knowledge with practical experience to deliver tailored tax solutions that fit your business model. We focus on simplifying complex tax structures, ensuring accuracy in filings, and optimizing your operations to enhance efficiency and profitability.
</p>

                    </div>
                        <ul>
                            <li> Sales tax consulting</li>
                            <li> Software development</li>
                            <li> Outsourcing</li>
                            <li> Compliance management</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="payroll-services-2x2" style="padding:70px 20px; background:#f5f7fa; font-family: 'DM Sans', sans-serif;">
  <div style="max-width:1200px; margin:0 auto; text-align:center;">
    <h2 style="font-size:32px; font-weight:700; color:#111; margin-bottom:10px;">
      Our Payroll Services
    </h2>
    <div style="width:60px; height:3px; background:#00cc61; margin:10px auto 40px auto;"></div>
  </div>

  <!-- Grid Container -->
  <div id="ps-grid" style="display:grid; grid-template-columns:repeat(2,1fr); gap:30px; max-width:1100px; margin:0 auto;">

    <!-- Box 1 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-scale-balanced" style="font-size:30px; color:#e63946; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Why Professional Tax Help Matters</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
       Taxes are one of those things that nobody likes to deal with, but they’re something that we all need to face. When dealing with taxes, it’s always best to get help from a professional.
      </p>
    </div>

    <!-- Box 2 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-user-check" style="font-size:30px; color:#0077b6; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Trusted Sales Tax Experts</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        Sales Tax consulting services are the next best thing. These professionals can ensure that all your sales tax obligations are taken care of and reported correctly.
      </p>
    </div>

    <!-- Box 3 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-comments-dollar" style="font-size:30px; color:#f4a261; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Sales Tax Advice Made Simple</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
        Taxes are a part of life, but they don’t have to be the scary and confusing process that most people make them out to be. You can always consult a Sales Tax Adviser for help when you’re unsure about something.
      </p>
    </div>

    <!-- Box 4 -->
    <div style="background:#fff; border-radius:12px; padding:30px; box-shadow:0 4px 20px rgba(0,0,0,0.08); transition:transform .25s ease, box-shadow .25s ease;">
      <div style="display:flex; align-items:center; margin-bottom:15px;">
        <i class="fa-solid fa-hand-holding-usd" style="font-size:30px; color:#7b2cbf; margin-right:12px;"></i>
        <h3 style="font-size:20px; font-weight:700; color:#111; margin:0;">Your Hub For Professional Tax Help</h3>
      </div>
      <p style="color:#555; font-size:15px; margin-bottom:10px;">
       The Bookify is a great place to find professionals who know all about taxes and can answer any questions you might have.
      </p>
    </div>

  </div>
</section>

<!-- Small scoped styles to ensure responsiveness and hover effect only for this section -->
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
            Only the Best Plans <span>Made for You</span>
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