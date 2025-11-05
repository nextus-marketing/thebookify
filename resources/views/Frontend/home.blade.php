@extends('layouts.frontend')
@section('title') The Bookify @endsection
@section('content')
<style>
    .pricing-body {
    margin-bottom: 0px;
}
.what-we-do {
    background-color: var(--secondary-color);
    padding: 44px 0;
}
</style>
 <!-- Hero Section Start -->
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">welcome to The Bookify</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                            Get Smart  <span>Online Accounting Services</span>
                            For Your Complex Finances </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Get your books clean and audit-ready with The Bookify online accounting services. Trusted by over 500+ clients.</p>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.4s">
                            <div class="hero-btn text-center">
                            <a href="#0" class="btn btn-success openPopupBtn"
                                style="background-color:#00cc61; color:#fff; border:none; padding:12px 25px; border-radius:30px; font-weight:600;">
                                <i class="fa-solid fa-gift me-2"></i> Get Free Trial
                            </a>
                            </div>
                            <div class="hero-btn">
                                <a href="tel:+15513481040" class="btn-default">
                                    <i class="fa-solid fa-phone me-2"></i> +1 (551) 348-1040
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="hero-img">
                            <figure>
                                <img src="/frontend/images/hero-img.png" alt="">
                            </figure>
                        </div>
                        <div class="company-experience">
                            <h3><span class="counter">15</span>+</h3>
                            <p>Years of financial expertise</p>
                        </div>                 
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="partners-section py-5" style="background-color: #cdcdcd;">
  <div class="container">
    <div class="row align-items-center justify-content-between gy-4">
    
      <div class="col-lg-6 col-md-12">
        <div class="section-title">
          <h2 class="text-anime-style-2" data-cursor="-opaque">
            We partner with the <span>world’s best</span>
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

<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
 
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Want to know How 
                            <span>We Can Help You?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            To optimize your business efficiency and keep up with the ever-changing rules and laws, 
                            The Bookify is the one-stop solution for bookkeeping and accounting services. 
                            We hold you back in the competitive environment with a range of services available 
                            at affordable premiums and flexible accounting solutions.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            Here is a well-versed video for you to go through. This video contains all the information 
                            on how to start your professional bookkeeping journey with us. 
                            Watch this video to clear all your concerns.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0" style="pointer-events: none;">
                            <div class="ratio ratio-16x9" style="pointer-events: auto;">
                                <iframe 
                                    src="https://www.youtube.com/embed/cPSRUvOy3U4" 
                                    title="Bookify Video"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen
                                    class="rounded shadow"
                                    style="width: 100%; height: 100%;">
                                </iframe>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="/frontend/my-img/america.jpg" alt="">
                            </figure>
                        </div>
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="/frontend/images/about-img-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">America’s Largest Professional Accounting Service – <span>TheBookify</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At, The Bookify we serve business owners with all their financial needs through our unmatched technology and human support. Our affordable solutions help you to attain financial mastery.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We are professional accounting service firm.  You can call us your CPA as well. We provide bookkeeping, tax filing, and other financial services for businesses and personal use.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">We help with bookkeeping services that would otherwise be very time-consuming and complex. The Bookify also offers accounting & tax solutions and preparation to increase business profits.</p>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">At The Bookify, our mission is to simplify your financial journey so you can focus on growing your business with confidence. Whether you’re a startup, small business, or established enterprise, our team ensures accuracy, compliance, and strategic insights in every financial report. With our blend of modern tools and expert guidance, we empower you to make smarter decisions, save time, and achieve long-term financial stability.
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color:#f6fff9;">
  <div class="container text-center">
    <h2 class="text-anime-style-2" data-cursor="-opaque" style="margin: 0 0 20px 0; padding: 0; font-weight: 700;">
      How Bookify 
      <span style="color: #00cc61;">Can Help You</span>
    </h2>
    <div class="row g-4 justify-content-center">

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 shadow-sm border-bottom"
             style="background:#fff; border-bottom:4px solid #1b6b3a; transition:0.3s;">
          <img src="https://cdn-icons-png.flaticon.com/512/4205/4205983.png" 
               alt="Bookkeeping" width="60" class="mb-3">
          <a href="/what-we-offer/bookkeeping-services" style="display:block; color:#1b6b3a; font-weight:600; text-decoration:none; font-size:18px;">Bookkeeping</a>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 shadow-sm border-bottom"
             style="background:#fff; border-bottom:4px solid #2eb872; transition:0.3s;">
          <img src="https://cdn-icons-png.flaticon.com/512/4149/4149648.png" 
     alt="CFO Advisory Icon" width="60" class="mb-3">


          <a href="/what-we-offer/cfo-advisory" style="display:block; color:#1b6b3a; font-weight:600; text-decoration:none; font-size:18px;">CFO Advisory</a>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 shadow-sm border-bottom"
             style="background:#fff; border-bottom:4px solid #4bb368; transition:0.3s;">
          <img src="https://cdn-icons-png.flaticon.com/512/2910/2910768.png" 
               alt="Accounting & Tax" width="60" class="mb-3">
          <a href="/what-we-offer/tax-and-accounting" style="display:block; color:#1b6b3a; font-weight:600; text-decoration:none; font-size:18px;">Accounting & Tax</a>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 shadow-sm border-bottom"
             style="background:#fff; border-bottom:4px solid #1b6b3a; transition:0.3s;">
          <img src="https://cdn-icons-png.flaticon.com/512/3798/3798090.png" 
               alt="Sales Tax Consulting" width="60" class="mb-3">
          <a href="/what-we-offer/sales-tax-consulting" style="display:block; color:#1b6b3a; font-weight:600; text-decoration:none; font-size:18px;">Sales Tax Consulting</a>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 shadow-sm border-bottom"
             style="background:#fff; border-bottom:4px solid #2eb872; transition:0.3s;">
         <img src="https://cdn-icons-png.flaticon.com/512/3592/3592912.png" 
     alt="Online Payroll Icon" width="60" class="mb-3">



          <a href="/what-we-offer/payroll-services" style="display:block; color:#1b6b3a; font-weight:600; text-decoration:none; font-size:18px;">Online Payroll</a>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="p-4 rounded-4 shadow-sm border-bottom"
             style="background:#fff; border-bottom:4px solid #4bb368; transition:0.3s;">
          <img src="https://cdn-icons-png.flaticon.com/512/1162/1162456.png" 
               alt="Incorporation" width="60" class="mb-3">
          <a href="/what-we-offer/incorporation" style="display:block; color:#1b6b3a; font-weight:600; text-decoration:none; font-size:18px;">Incorporation</a>
        </div>
      </div>
    </div>
  </div>
</section>


    <div class="what-we-do">
    <div class="container">
        <div class="row align-items-start">
            
            <!-- Left Content Section -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            What Makes The 
                            <span style="color: #00cc61;">Bookify Unique?</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: #555; line-height: 1.8;">
                            The Bookify online accounting services offer personalized bookkeeping services. You can access your files from any device at any time. With our online accounting service, you don’t need to worry about the safety of your data since it’s completely secure and backed up automatically.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 10px; color: #555; line-height: 1.8;">
                            We are best at bookkeeping because we provide you with a detailed workflow and efficiently organize your finances. This can help you better understand your financial state and make informed decisions in the future.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s" style="margin-top: 10px; color: #555; line-height: 1.8;">
                           In addition, The Bookify ensures complete transparency and real-time insights into your business finances through advanced accounting tools and expert support. Our team continuously monitors your accounts to maintain accuracy and compliance, saving you time and reducing errors. Whether you’re a startup or an established business, we tailor our services to meet your unique financial needs—helping you focus on growth while we take care of the numbers.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Right Image Section -->
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/my-img/old_img/unique.webp" 
                                 alt="Introduction Video" 
                                 class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-blog">
    <div class="container">
        
        <div class="section-title dark-section text-center">
            <h2 class="text-anime-style-2" data-cursor="-opaque" style="margin: 0 auto;">
                <span>Finances Made Easy With Accounting Service Firm</span>
            </h2>
            <p style="color: #000; margin-top: 15px;">
                If you are looking for a financial partner, then The Bookify is here. We will strategically set up the bookkeeping, tax filing, and payroll procedures. With our full-service accounting firm, you can shift your business potential to a new level.
            </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/tax.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                    Tax Management
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/data graph.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                    Data Accessibility
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Post 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/banking.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                    Easy Banking
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-blog">
    <div class="container">
        
        <div class="section-title dark-section text-center">
            <h2 class="text-anime-style-2" data-cursor="-opaque" style="margin: 0 auto;">
                <span>Why Do Businesses Trust Us?</span>
            </h2>
            <p style="color: #000; margin-top: 15px;">
               With our accounting solutions company, businesses get all-around support. We integrate their records into the cloud accounting software. Our clients have real-time access to the records, quick financial reports, and KPIs all at affordable premiums.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/code.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                   Nothing but the accurate </br>figures
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/team-colleagues.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                    Connect with the Accounts Executive in No Time
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/trust.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                    We Don’t Trust Anyone but Accounts Executives
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/23.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                   100% US-based
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/5.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                   Accrual Basis Reporting
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <div class="post-featured-image">
                        <a href="#0" >
                            <figure class="image-anime">
                                <img src="/frontend/my-img/old_img/data.webp" alt="">
                            </figure>
                        </a>
                    </div>
                    <div class="post-item-body">
                        <div class="post-item-content text-center">
                            <h2 style="margin: 0;">
                                <a href="#0" style="display: inline-block; color: inherit; text-decoration: none;">
                                  Secure Data
                                </a>
                            </h2>
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
            
            <!-- Left Image Section (moved here) -->
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/my-img/new.png" 
                                alt="Introduction Video" 
                                class="img-fluid rounded"
                                style="width:460px; height:452px; object-fit:cover; border-radius:8px;">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content Section (moved here) -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                           Your Financial 
                            <span>Helping Hand</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           At The Bookify, we provide you with the best-in-class CPAs with years of experience in the business. We’re here to help you with your financial management needs.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           Because we’ve been in the sector for over 15 years and served countless industry experts, you can rely on “the bookify” for all of your financial management needs. You can grow your firm exponentially with our dedicated small business accounting services.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           A specialized team of financial advisors works with experience to make personal finances straightforward. Our accounting service for small businesses takes your firm to a new level.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="our-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="testimonial-content">
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">our testimonial</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Trusted by  <span>Thousands of People</span>
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
                            <div class="swiper-wrapper">
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

    <!-- Our Testimonial Section End -->
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

    <!-- Pricing Cards -->
    <div class="row justify-content-center text-center g-4">
      <!-- Card 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="pricing-box shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp">
          <div class="pricing-header mb-3">
            <img src="/frontend/my-img/startup.webp" alt="Start-up Icon" class="img-fluid mb-3" style="width:70px; height:70px;">
            <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Start-Up</h3>
          </div>
          <hr class="my-3" style="border-top:1px solid #eee;">
          <div class="pricing-body">
            <h4 class="fw-semibold mb-2" style="font-size:1.05rem; color:#111;">What’s Included?</h4>
            <p style="color:#555; font-size:0.95rem; line-height:1.6;">
              Don’t think of all the mess finance creates in mind while starting-up a business. That is our job to do!
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="pricing-box shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp">
          <div class="pricing-header mb-3">
            <img src="/frontend/my-img/growth.webp" alt="growth Icon" class="img-fluid mb-3" style="width:70px; height:70px;">
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

      <!-- Card 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="pricing-box shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp">
          <div class="pricing-header mb-3">
            <img src="/frontend/my-img/expansion.webp" alt="Expansion Icon" class="img-fluid mb-3" style="width:70px; height:70px;">
            <h3 class="fw-bold mb-0" style="font-size:1.3rem; color:#000;">Expansion</h3>
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

      <!-- Card 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="pricing-box shadow-sm rounded-4 p-4 bg-white h-100 wow fadeInUp">
          <div class="pricing-header mb-3">
            <img src="/frontend/my-img/personalized.webp" alt="Personalized Icon" class="img-fluid mb-3" style="width:70px; height:70px;">
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
    </div>

    <!-- Buttons Below Cards -->
    <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.4s">
      <a href="/pricing" class="btn-default">
         Select Your Plan
      </a>

      <a href="tel:51-348-1040" class="btn-default">
        <i class="fa-solid fa-phone me-2"></i> 
Call Us : 551-348-1040

      </a>
    </div>

  </div>
</div>


<div class="page-blog">
     <div class="section-title text-center">
          <h2 class="text-anime-style-2" data-cursor="-opaque">
            Improve your business’s <span>financial health .</span>
          </h2>
        </div>
    <div class="container">
        <div class="row justify-content-center">

            @forelse($blogs as $blog)
                @php
                    $content = json_decode($blog->description, true);
                    $previewText = '';
                    if (isset($content['blocks'][0]['data']['text'])) {
                        $previewText = strip_tags($content['blocks'][0]['data']['text']);
                    } else {
                        $previewText = strip_tags($blog->description);
                    }
                @endphp

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="{{ route('blogs.details', $blog->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img 
                                        src="{{ $blog->photo ? asset(Storage::url($blog->photo)) : asset('frontend/images/default-blog.jpg') }}" 
                                        alt="{{ $blog->title }}" 
                                        style="width:100%; height:300px; object-fit:cover; border-radius:10px;"
                                    >
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-meta">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i> 
                                        {{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('d M, Y') }}
                                    </li>
                                    <li><i class="fa-solid fa-user"></i> {{ $blog->author }}</li>
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2>
                                    <a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h2>
                                <p style="color:#555;">{{ Str::limit($previewText, 120) }}</p>
                            </div>
                            <div class="post-item-btn">
                                <a href="{{ route('blogs.details', $blog->slug) }}" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h4>No blogs available right now.</h4>
                </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        @if($blogs->hasPages())
            <div class="page-pagination wow fadeInUp" data-wow-delay="0.3s">
                <ul class="pagination justify-content-center">
                    {{-- Prev --}}
                    <li class="{{ $blogs->onFirstPage() ? 'disabled' : '' }}">
                        @if(!$blogs->onFirstPage())
                            <a href="{{ $blogs->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a>
                        @else
                            <span><i class="fa-solid fa-angle-left"></i></span>
                        @endif
                    </li>

                    {{-- Page Numbers --}}
                    @for($i = 1; $i <= $blogs->lastPage(); $i++)
                        <li class="{{ $i == $blogs->currentPage() ? 'active' : '' }}">
                            @if($i == $blogs->currentPage())
                                <span>{{ $i }}</span>
                            @else
                                <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                            @endif
                        </li>
                    @endfor

                    {{-- Next --}}
                    <li class="{{ $blogs->hasMorePages() ? '' : 'disabled' }}">
                        @if($blogs->hasMorePages())
                            <a href="{{ $blogs->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a>
                        @else
                            <span><i class="fa-solid fa-angle-right"></i></span>
                        @endif
                    </li>
                </ul>
            </div>
        @endif
    </div>
</div>


<div class="partners-section" 
     style="background-color:#cdcdcd; display:flex; align-items:center; justify-content:center; text-align:center; padding:80px 0;">
  <div class="container" style="max-width:900px; width:100%;">
    <div class="row" style="display:flex; justify-content:center;">
      
      <!-- Centered Content -->
      <div class="col-lg-8 col-md-10">
        
        <!-- Heading -->
        <div class="section-title" style="margin-bottom:25px;">
          <h2 class="text-anime-style-2" data-cursor="-opaque" 
              style="color:#000; font-weight:700; line-height:1.4; font-size:2rem; margin:0;">
            Eliminate Complexity and Increase <br>
            Your <span style="color:#00cc61;">Profit Margins</span>
          </h2>
        </div>
        
        <!-- Buttons Row -->
        <div style="display:flex; justify-content:center; align-items:center; gap:20px; width:100%; flex-wrap:nowrap; margin-top:30px;">
          
          <!-- Button 1 -->
          <a href="tel:+15513481040" 
             style="background-color:#00cc61; color:#fff; padding:14px 36px; border-radius:50px; text-decoration:none; font-weight:600; display:inline-flex; align-items:center; justify-content:center; font-size:1rem; white-space:nowrap; transition:all 0.3s ease;">
            <i class="fa-solid fa-phone" style="margin-right:10px; font-size:1rem;"></i>
            Call Now : +1 551-348-1040
          </a>

          <!-- Button 2 -->
          <a href="#quote" 
             style="background-color:#00cc61; color:#fff; padding:14px 36px; border-radius:50px; text-decoration:none; font-weight:600; display:inline-flex; align-items:center; justify-content:center; font-size:1rem; white-space:nowrap; transition:all 0.3s ease;">
            Get Quote
          </a>

          <!-- Button 3 -->
          <a href="#free-trial" 
             style="background-color:#00cc61; color:#fff; padding:14px 36px; border-radius:50px; text-decoration:none; font-weight:600; display:inline-flex; align-items:center; justify-content:center; font-size:1rem; white-space:nowrap; transition:all 0.3s ease;">
            Get Free Trial
          </a>

        </div>

      </div>
    </div>
  </div>
</div>




@endsection