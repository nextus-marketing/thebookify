@extends('layouts.frontend')
@section('title') E-commerce | The Bookify @endsection
@section('meta_description') End-to-end e-commerce accounting with automated bookkeeping, inventory tracking, sales tax compliance, and profit insights to help your online store scale. @endsection
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

    .how-it-work {
        padding: 10px 0;
    }
     .what-we-do {
    background-color: var(--secondary-color);
    padding: 10px 0;
    }
</style>


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box text-center">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">
                       E-commerce
                    </h1>
                    <p style="color:#fff; font-size:20px;">Our CPA tackles all your accounting for your smoth Ecommerce business drive.</p>
                    <nav class="wow fadeInUp d-flex justify-content-center">
                        <div class="hero-btn">
                            <a href="tel:+15513481040" class="btn-default"
                                style="display:inline-flex; align-items:center; justify-content:center;">
                                <i class="fa-solid fa-phone me-2"></i> Request A Quote
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<div class="how-it-work pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work-content">
                    <div class="section-title text-center">
                        <!-- <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Why do you need a <span>CPA for Medical Industry?</span>
                        </h2> -->
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           In the beginning, most eCommerce business owners may get away with handling their own accounts. It’s usually the cheapest choice, and it’s a terrific opportunity to learn about (and remain on top of) your company.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          But, Working with a qualified eCommerce accountant becomes increasingly crucial when your firm grows, expands internationally, or enters new markets with various compliance needs, which is why we are here for you.
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
                            Why would you need e-commerce experts to  <span> work with your company?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           You want to find someone you can trust, just like any new employee. There’s also the question of whether you should choose a generalist or an eCommerce specialised accountant.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          While there’s nothing wrong with generalist accountants, eCommerce is a different animal altogether.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                          Working with eCommerce experts ensures that your financial strategies are tailored to the unique challenges and opportunities of online business. They understand platform specific fees, digital sales tax regulations, inventory management complexities, and cash flow cycles that differ from traditional retail. With their specialized knowledge, you gain accurate insights, smarter forecasting, and compliance confidence helping your business grow sustainably in a highly competitive digital marketplace.

                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/my-img/e-com.jpg" alt="Simplifying Taxes">
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
                            <img src="/frontend/my-img/process.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            OUR  <span>WORK PROCESS</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           There are significant steps in the eCommerce working process of a company.
                        </p>
                        <br>
                        <ul style="line-height:35px;">
                            <li>First, we identify your target market.</li>
                            <li>Second, we conduct a market study to research the customer’s needs and identify the most efficient way to reach this market.</li>
                            <li>The process of bringing a product to market depends on the product type and the company’s size.</li>
                            <li>Larger companies might have teams of designers, developers, marketers and other professionals who work together to launch a new product.</li>
                            <li>Smaller businesses might rely on individuals with various skills to get their products off the ground.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


 <div class="our-faqs">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">faqs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Your most frequently asked <span>questions answered</span></h2>
                    </div>
                </div>

            </div>

            <div class="row align-items-center">
                
                <div class="col-lg-12">
                    <div class="our-faq-section">
                        <div class="faq-accordion" id="faqaccordion">
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                       When should I get e-commerce expert help?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>When your firm generates enough revenue to make it a full-time job (roughly US$20,000-$50,000 in revenue), it's a good time to start exploring.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                       What makes e-commerce experts the best option?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>When you've determined that you need an accountant, the next step is to choose the one you wish to deal with. You want to find someone you can trust, just like any new employee. There's also the question of whether you should choose a generalist or an eCommerce specialised accountant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

<section class="container py-5" style="background-color:#f9fafb;">
  <div class="row align-items-center">
    
    <!-- Text Section -->
    <div class="col-lg-6 col-md-12 text-center text-lg-start">
      <h2 class="text-anime-style-2" data-cursor="-opaque">
        What softwares  <span>do we use?</span>
      </h2>
</br>
      <p style="font-size:17px; line-height:1.6; color:#333; max-width:550px; margin:auto;">
        For the data of the firm, we utilise the best software. 
        <strong style="color:#00b060;">Xero</strong> and 
        <strong style="color:#00b060;">QuickBooks</strong> are two of the most popular 
        accounting software programmes that help us manage financial data efficiently and securely.
      </p>
    </div>

    <!-- Image Section -->
    <div class="col-lg-6 col-md-12 text-center mt-4 mt-lg-0">
      <img src="/frontend/my-img/erp-vs-accouting.jpg" 
           alt="ERP vs Accounting Software" 
           class="img-fluid rounded shadow"
           style="max-width:100%; border-radius:12px; box-shadow:0 6px 20px rgba(0,0,0,0.1);">
    </div>

  </div>
</section>



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
                        Only the Best Plans </br><span>Made for You.</span>
                    </h2>
                    <p>Let’s start the journey towards success and enhance revenue for your business. Take your company
                        to the next level.</p>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-7">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a href="tel:+15513481040" class="btn-default"><i class="fa-solid fa-phone me-2"></i> contact now</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>
        <!-- Section Row End -->

        <!-- Pricing Row Start -->
        <div class="row">

            <!-- Pricing Box 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp"
                    style="transition: all 0.3s ease;">
                    <!-- Pricing Header -->
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3 image-anime">
                            <img src="/frontend/my-img/startup.webp" alt="Start-up Icon" class="img-fluid"
                                style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Start-Up</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <!-- Pricing Body -->
                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            Don’t think of all the mess finance creates in mind while starting-up a business. That is
                            our job to do!
                        </p>
                    </div>
                </div>
            </div>
            <!-- Pricing Box 1 End -->

            <!-- Pricing Box 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp"
                    style="transition: all 0.3s ease;">
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3 image-anime">
                            <img src="/frontend/my-img/growth.webp" alt="growth Icon" class="img-fluid"
                                style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Growth</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            Noticing profits? Don’t let the complex bookkeeping and accounting issues break that
                            momentum. Trust our Accounts executive.
                        </p>
                    </div>

                </div>
            </div>
            <!-- Pricing Box 2 End -->

            <!-- Pricing Box 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp"
                    style="transition: all 0.3s ease;">
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3 image-anime">
                            <img src="/frontend/my-img/expansion.webp" alt="Start-up Icon" class="img-fluid"
                                style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Start-Up</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            Expanding brings revenue but can also be hectic. Get the best accounting solutions for your
                            maturing business.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Pricing Box 3 End -->

            <!-- Pricing Box 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp"
                    style="transition: all 0.3s ease;">
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3 image-anime">
                            <img src="/frontend/my-img/personalized.webp" alt="Start-up Icon" class="img-fluid"
                                style="width:70px; height:70px;">
                        </div>
                        <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Personalized</h3>
                    </div>

                    <hr class="my-3" style="border-top:1px solid #eee;">

                    <div class="pricing-body">
                        <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
                        <p style="color:#555; font-size:0.95rem; line-height:1.6;">
                            We can help you curate the finance strategy just the way you want. Obviously, with
                            suggestions from the Accounts Executives.
                        </p>
                    </div>
                </div>
            </div>
            <div style="display:flex; justify-content:center; width:100%;">
                <a href="tel:+15513481040"
                   class="btn-default">
                    <i class="fa-solid fa-phone" style="margin-right:10px; font-size:1rem;"></i>
                    Call Now : +1(551) 348-1040
                </a>
            </div>
        </div>
    </div>
</div>


@endsection