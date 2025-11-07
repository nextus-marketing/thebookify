@extends('layouts.frontend')
@section('title') College & Universities | The Bookify @endsection
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
</style>


<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box text-center">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">
                       College & Universities
                    </h1>
                    <p style="color:#fff; font-size:20px;">CPA handles all your expenses and taxes while you focus on education.</p>
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
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Why do you need a <span>CPA for the Education Industry?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            You have high standards for your mission. But in the education industry, with limited financial support, declining enrolment rate, and extensive regulation, that mission can easily become bogged down.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            So, without proper financial assistance and consultation, everything is void, and thus it becomes crucial to manage the financial resources and accounting aspects efficiently.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            We understand that the education sector differs significantly from other sectors and the importance of regular financial monitoring to determine profitability.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            That’s why we think it is important to keep our clients informed and provide them with monthly financial statements and reports on profitability tailored to their needs.
                        </p>
                        </br>
                        <!-- New Content Starts Here -->
                        <h3 class="mt-4 wow fadeInUp" data-wow-delay="0.6s">Benefits of working with Bookify</h3>
                        <ul class="wow fadeInUp" data-wow-delay="0.7s" style="line-height: 28px;">
                            <li>Identifying the most effective cost-saving strategies and measures.</li>
                            <li>Our specialists have a great deal of expertise in this area and solid experience with several types of accounting software.</li>
                            <li>We only believe in providing the highest standards of accounting services and ethical accounting practices to serve our clients.</li>
                            <li>Our bookkeeping and CPA services can assist your business in achieving its objectives and lowering your tax obligations.</li>
                        </ul>
                        </br>
                        <h3 class="mt-4 wow fadeInUp" data-wow-delay="0.8s">Our Work Process</h3>
                        <p class="wow fadeInUp" data-wow-delay="0.9s">
                            Our comprehensive accounting services include bookkeeping, managing payables and receivables, managing payroll, tax preparation, and more. 
                            We assist clients in maintaining financial accuracy and compliance while supporting overall business growth.
                        </p>
                        <ul class="wow fadeInUp" data-wow-delay="1s" style="line-height: 28px;">
                            <li>Financial auditing</li>
                            <li>Planning and preparation of taxes</li>
                            <li>Tax compliance</li>
                            <li>Providing consultation on financial reports and accounting standards</li>
                            <li>Assisting with various types of financial transactions and services</li>
                        </ul>
                        <!-- New Content Ends Here -->
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
                                      What Software Do We Use?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Our experts have a great deal of expertise in this area and solid experience with several popular accounting software such as Xero and Quickbooks.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    What’s the need for a CPA in the education industry?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>With the help of a CPA, you can manage the financial resources and other accounting aspects efficiently.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                      What accounting services are provided by a CPA?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Various accounting services, including bookkeeping, managing payables and receivables, managing payroll, tax preparation, etc., are provided by a CPA.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                      What accounting softwares are used by a CPA?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>Most popular accounting softwares such as Xero and Quickbooks are used by a CPA.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                     What Benefits will a CPA provide to an education institution?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                    <div class="accordion-body">
                                        <p>A CPA provides various beneficial services such as Financial auditing, planning and preparation of taxes, tax compliance, consultation on financial reports and accounting standards and assisting with various types of financial transactions and services.</p>
                                    </div>
                                </div>
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
                <div class="pricing-box text-center shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp"
                    style="transition: all 0.3s ease;">
                    <!-- Pricing Header -->
                    <div class="pricing-header mb-3">
                        <div class="icon-wrapper mb-3">
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
                        <div class="icon-wrapper mb-3">
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
                        <div class="icon-wrapper mb-3">
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
                        <div class="icon-wrapper mb-3">
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
                    style="background-color:#00cc61; color:#fff; padding:14px 36px; border-radius:50px; text-decoration:none; font-weight:600; display:inline-flex; align-items:center; justify-content:center; font-size:1rem; transition:all 0.3s ease;">
                    <i class="fa-solid fa-phone" style="margin-right:10px; font-size:1rem;"></i>
                    Call Now : +1 551-348-1040
                </a>
            </div>
        </div>
    </div>
</div>


@endsection