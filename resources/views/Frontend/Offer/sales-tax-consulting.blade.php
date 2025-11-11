@extends('layouts.frontend')
@section('title') Sales tax Consultant | The Bookify @endsection
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
            Sales tax Consultant
          </h1>
          <p style="color:#fff; margin-top:15px;">
            Our experts will help you stay up-to-date with recent changes in law, advise the most profitable way to sell your products and suggest ways to avoid paying sales tax.
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

  .how-it-work {
    padding: 40px 0;
}
</style>


<div class="how-it-work ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work-content">
                    <div class="section-title text-center">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          TheBookify is a group of qualified and experienced experts in the field of taxation who strive to offer the best Sale tax consulting services. 
                        </p>
                         <p class="wow fadeInUp" data-wow-delay="0.2s">
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
                            What are Sales <span>Tax consulting services?</span>
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
                          Why should you choose us for your  <span style="color:#00C853;">company's Sales Tax Consulting?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We have provided our services for over a decade in the field and have been acknowledged by all the top-tier organizations.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We provide consultation on how to set up a new business, avoid pitfalls and risks, and advise what steps must be taken to comply with current legislation.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our team combines deep industry knowledge with practical experience to deliver tailored tax solutions that fit your business model. We focus on simplifying complex tax structures, ensuring accuracy in filings, and optimizing your operations to enhance efficiency and profitability.
</p>

                    </div>
                    <div class="fact-counter-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li> Sales tax consulting.</li>
                            <li> Software development .</li>
                            <li> Outsourcing.</li>
                            <li> Compliance management.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="how-it-work pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work-content">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            How do Sales  <span>Tax consulting services work?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           Taxes are one of those things that nobody likes to deal with, but they’re something that we all need to face. When dealing with taxes, it’s always best to get help from a professional.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           Sales Tax consulting services are the next best thing. These professionals can ensure that all your sales tax obligations are taken care of and reported correctly.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           Taxes are a part of life, but they don’t have to be the scary and confusing process that most people make them out to be. You can always consult a Sales Tax Adviser for help when you’re unsure about something. 
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          TheBookify is a great place to find professionals who know all about taxes and can answer any questions you might have.
                        </p>
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
                <!-- Section Title End -->
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



@endsection