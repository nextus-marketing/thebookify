@extends('layouts.frontend')
@section('title') About Us | The Bookify @endsection
@section('meta_description') Learn how The Bookify helps businesses grow with reliable online accounting, expert bookkeepers, and tailored financial solutions backed by trust, accuracy & innovation. @endsection
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
                        Grow Seamless with Industry-specific Experts and Advance Tools.
                    </h1>
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


<!-- Our Approach Start -->
<div class="our-approach">
    <div class="container">
        <div class="row g-4">

            <!-- Mission -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="mission-vission-item wow fadeInUp d-flex flex-column justify-content-between w-100"
                    style="background:#fff; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.08); padding:20px;">
                    <div class="mission-vission-header">
                        <div class="icon-box mb-3">
                            <img src="/frontend/images/icon-our-vision.svg" alt="">
                        </div>
                        <div class="mission-vission-content">
                            <h3>Our Mission</h3>
                            <p>
                                TheBookify's goal is to offer unrivaled, expert, outsourced accounting solutions, such as
                                bookkeeping, tax preparation, CFO advisory, incorporation, payroll etc. Our objective is to
                                create solid, long-lasting corporate relationships based on trust.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="mission-vission-item wow fadeInUp d-flex flex-column justify-content-between w-100"
                    style="background:#fff; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.08); padding:20px;">
                    <div class="mission-vission-header">
                        <div class="icon-box mb-3">
                            <img src="/frontend/images/icon-our-mission.svg" alt="">
                        </div>
                        <div class="mission-vission-content">
                            <h3>Our Vision</h3>
                            <p>
                                Our mission is to offer each and every one of our clients honest, fair, and professional
                                accounting services. We collaborate with our clients to comprehend their business needs, and
                                we make sure to provide sound counsel and vital consultation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Value -->
            <div class="col-lg-4 col-md-6 d-flex">
                <div class="mission-vission-item wow fadeInUp d-flex flex-column justify-content-between w-100"
                    style="background:#fff; border-radius:16px; box-shadow:0 4px 10px rgba(0,0,0,0.08); padding:20px;">
                    <div class="mission-vission-header">
                        <div class="icon-box mb-3">
                            <img src="/frontend/images/icon-our-value.svg" alt="">
                        </div>
                        <div class="mission-vission-content">
                            <h3>Our Value</h3>
                            <p>
                                We adhere to the ethical standards of AICPA and uphold honesty, boldness, and integrity in all
                                business operations. Our fundamental values serve as the foundation for providing expert
                                advice in offering professional, dependable, and efficient bookkeeping services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Our Approach End -->


<!-- How It Work Start -->
<div class="how-it-work pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="how-it-work-content">
                    <div class="section-title text-center">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Expert in Keeping Track of <span>Finances</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            TheBookify has established a solid reputation as a top-tier provider of accounting services in
                            Jersey City over the years. Regardless of the industry in which your business operates, we can
                            offer you top-notch bookkeeping services that will help you save money. At first, we started
                            assisting sole proprietors and small to medium-sized businesses, but today we provide professional
                            bookkeeping services to everyone in need of a committed accountancy team.
                        </p>
                    </div>

                   <div class="how-it-work-btn wow fadeInUp text-center" data-wow-delay="0.4s">
                    <a href="tel:+15513481040" class="btn-default">
                        <i class="fa-solid fa-phone me-2"></i> Call Now
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How It Work End -->


<!-- Our Benefit Start -->
<div class="our-benefit">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side Content -->
            <div class="col-lg-6">
                <div class="our-benefit-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            <span>Why Choose </span>Us?
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Unlocking growth opportunities with tailored financial strategies for maximum value and
                            long-term success.
                        </p>
                    </div>
                    <div class="our-benefit-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="tel:+15513481040" class="btn-default"><i class="fa-solid fa-phone me-2"></i> Contact Us</a>
                    </div>
                    <div class="our-benefit-img">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/our-benefit-img.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Side Benefits List -->
            <div class="col-lg-6">
                <div class="our-benefit-box">
                    <div class="our-benefit-list">

                        <div class="our-benefit-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-benefit-1.svg" alt="">
                            </div>
                            <div class="benefit-item-content">
                                <h3>Expertise</h3>
                                <p>We are committed to upholding our professional standards. Our team comprises experienced
                                    CPAs and innovative minds.</p>
                            </div>
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-benefit-2.svg" alt="">
                            </div>
                            <div class="benefit-item-content">
                                <h3>Affordable and Flexible Fee</h3>
                                <p>We are economical and always adhere to your spending plan. Get a price quote for the
                                    services you require.</p>
                            </div>
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-benefit-3.svg" alt="">
                            </div>
                            <div class="benefit-item-content">
                                <h3>Strong Communication</h3>
                                <p>We pay attention to clients' accounting needs and implement strategic initiatives with the
                                    client's approval.</p>
                            </div>
                        </div>

                        <div class="our-benefit-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="/frontend/images/icon-our-benefit-4.svg" alt="">
                            </div>
                            <div class="benefit-item-content">
                                <h3>Technologies Services</h3>
                                <p>Knowledgeable about various accounting programs, including Xero, QuickBooks, Zoho Projects,
                                    and many others.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Benefit End -->


<!-- Partners Section Start -->
<div class="partners-section"
    style="background-color:#cdcdcd; display:flex; align-items:center; justify-content:center; text-align:center; padding:80px 0;">
    <div class="container" style="max-width:900px; width:100%;">
        <div class="row" style="display:flex; justify-content:center;">
            <div class="col-lg-8 col-md-10" style="margin:0 auto;">
                <div class="section-title" style="margin-bottom:25px;">
                    <h2 class="text-anime-style-2" data-cursor="-opaque"
                        style="color:#000; font-weight:700; line-height:1.4; font-size:2rem; margin:0;">
                        Connect with </br> our
                        <span style="color:#00cc61;"> certified professionals </span> and get </br>
                        the assistance you require.
                    </h2>
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
</div>
<!-- Partners Section Ends-->

@endsection
