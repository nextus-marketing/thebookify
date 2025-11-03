@extends('layouts.frontend')
@section('title') Bookkeeping Services | The Bookify @endsection
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

</style>
 <div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-12">
                <div class="page-header-box text-center">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">
                        Professional Bookkeeping Services to Ease the Burden of Accounting
                    </h1>
                    <p style="color:#fff;">
                        Comprehensive and Professional bookkeeping services to sole traders, partnerships, and limited companies.
                    </p>
                </div>
            </div>

            <nav class="wow fadeInUp d-flex justify-content-center">
                <div class="hero-btn">
                    <a href="tel:+15513481040" class="btn-default" 
                       style="display:inline-flex; align-items:center; justify-content:center;">
                        <i class="fa-solid fa-phone me-2"></i> 
                        Book a free consultation
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="partners-section py-5" style="background-color: #cdcdcd;">
    <div class="container">
        <div class="row align-items-center justify-content-between gy-4">
            
            <div class="col-lg-6 col-md-12">
                <div class="section-title">
                    <h2 class="text-anime-style-2" data-cursor="-opaque">
                        Accounting Softwares We Integrate To 
                        <span>Make Your Business Easy!</span>
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


<div class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="our-service-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">services</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Put the right foot with our  <span>certified bookkeepers.</span></h2>
                        </div>
                        <div class="service-content-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="/contact" class="btn-default">Contact Us</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="our-service-list">
                        <div class="service-item">
                            <div class="service-no">
                                <h2>01</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-1.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>A financial system that is always up-to-date with live transactions</h3>
                                    <p>Better decision making by more accurate financial reports.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>02</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-2.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>A friendly experience around the clock</h3>
                                    <p>Get committed Bookkeeping executive support for all of your demands and projects any place, any time.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>03</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-3.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Accounting software</h3>
                                    <p>Access the business-in-progress on the go and update your accounting records anywhere.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>04</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-4.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Financial reporting</h3>
                                    <p>In-depth analysis of your business profitability, income, expenses, and losses to help you make smarter business decisions.
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>05</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-5.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Tax season support</h3>
                                    <p>To avoid issues and headaches during tax filing season, organize your bookkeeping records and other documents chronologically.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-no">
                                <h2>06</h2>
                            </div>
                            <div class="service-content-box">
                                <div class="icon-box">
                                    <img src="/frontend/images/icon-service-6.svg" alt="">
                                </div>
    
                                <div class="service-item-content">
                                    <h3>Mobile accounting</h3>
                                    <p>Catch up with your financial and other business-related information through any mobile device.</p>
                                </div>
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
            
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Level Up your <span>Business with TheBookify</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            We will help you to maintain a clear perspective on your company’s performance 
                            and be financially ready throughout the year with the aid of periodic reports, 
                            standardized breakdowns, and biweekly evaluations.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                            TheBookify syncs with your financial bookkeeping to maintain order and pave the way for a better future for you.
                             Virtual Financial Review is available at any time and welcomes any inquiries, day or night.
                              Set up an appointment with your designated Accounts executive right away to discuss your 
                              financial review or other inquiry forms.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                           TheBookify provides best bookkeeping services for small 
                           business to maintain all financial records.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="what-we-do-images position-relative text-center">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal mb-0">
                            <img src="/frontend/images/what-we-do-img-1.jpg" 
                                 alt="Introduction Video" 
                                 class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="section-title mt-5">
    <h2 class="text-anime-style-2 text-center" data-cursor="-opaque" style="line-height:1.4;">
        Bookkeeping Services 
        <span style="display:block; margin-top:10px;">
            Why should a business like yours choose TheBookify?
        </span>
    </h2>
</div>

<div class="what-we-do">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Left Image -->
            <div class="col-lg-6">
                <div class="what-we-do-images">
                    <div class="what-do-we-img-1">
                        <figure class="image-anime reveal">
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>


            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Bookkeeping Precision  <span>Expert</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It is essential to have an expert bookkeeper on board for your company who knows how to organize your finances without wasting a lot of your time. TheBookify offers such expertise, and with our collaboration, you can have a bigger chance of building and growing your business with industry’s best bookkeeper services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                           At TheBookify, we go beyond basic bookkeeping to give you a clear and complete picture of your company’s financial health. Our experts continuously monitor your income, expenses, assets, and liabilities to identify patterns that influence profitability and sustainability. Through detailed financial analysis, we help you recognize underperforming areas, optimize cash flow, and uncover new opportunities for growth. Whether it’s monthly performance reviews, budget forecasting, or trend evaluations, our proactive approach ensures your business remains financially sound and strategically positioned for success.
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
                            Monitoring Financial <span>Health</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           Receive your company’s financial performance analyzed so you can make informed decisions on its financial prospects, from basic cost accounting systems to investment analysis with our best accounting and bookkeeping services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                         At TheBookify, we go beyond basic bookkeeping to give you a clear and complete picture of your company’s financial health. Our experts continuously monitor your income, expenses, assets, and liabilities to identify patterns that influence profitability and sustainability. Through detailed financial analysis, we help you recognize underperforming areas, optimize cash flow, and uncover new opportunities for growth. Whether it’s monthly performance reviews, budget forecasting, or trend evaluations, our proactive approach ensures your business remains financially sound and strategically positioned for success.
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Designated Expert">
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>


            <!-- Right Content -->
            <div class="col-lg-6">
                <div class="what-we-do-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Designated  <span>Expert</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                           It is essential to have an expert bookkeeper on board for your company who knows how to organize your finances without wasting a lot of your time. TheBookify offers such expertise, and with our collaboration, you can have a bigger chance of building and growing your business with industry’s best bookkeeper services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            Our designated experts bring years of experience across diverse industries, ensuring that every financial record is accurate, compliant, and insightful. With their guidance, you gain real-time visibility into your business’s financial health, empowering you to make informed decisions and drive sustainable growth with confidence.
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
                            Task  <span>Automation</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Easily automate your business processes with a few simple clicks and save time every time with our Online Bookkeeping Services.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                           Our automation tools work seamlessly in the background, ensuring your financial data stays accurate, updated, and ready for smart business decisions.
                        </p>
                    </div>

                    <div class="what-we-do-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>Technical support</li>
                            <li>Monitoring Bill Payments</li>
                            <li>Building Banking Transactions Databases </li>
                            <li>Detecting Data Management Errors </li>
                            <li>Creating Balance Sheets </li>
                            <li>Generating Income Statements </li>
                            <li>Verifying Reports Authenticity</li>
                        </ul>
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="" style="width: 100%; border-radius: 10px;">
                        </figure>
                    </div>
                </div>
            </div>

            <!-- Right Content Section -->
            <div class="col-lg-6">
                <div class="fact-counter-content">
                    <div class="section-title">
                        <h2 class="text-anime-style-2" data-cursor="-opaque" >
                            Key facts our <span style="color:#00C853;">expertise</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Our expertise is built on years of industry experience, proven financial strategies and a commitment to client success.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our expertise is built on decades of hands-on experience, innovative financial solutions, and a deep understanding of evolving tax regulations. We help businesses streamline their compliance processes, minimize liabilities, and stay focused on sustainable growth.</p>

                    </div>
                    <div class="fact-counter-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li> Advising, Preparing and Filing Tax Forms.</li>
                            <li> Managing Client and Tax Authority Communication.</li>
                            <li> Checking Legal Compliances of Tax Forms.</li>
                            <li> Assisting in Future Tax Planning.</li>
                        </ul>
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
                            Simplifying <span>Taxes</span>
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            You’ll have financial data prepared for tax season, and the taxman won’t be on your tail if you have TheBookify’s bookkeeping service in place. Enjoy the convenience of complete tax preparation and live tax consultant services throughout the season without stress.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.3s">
                            With TheBookify, tax time becomes effortless. Our team ensures every transaction is accurately categorized, every document is in place, and every report is ready when you need it. From linking your accounts to managing vendor data, we simplify complex bookkeeping so you can focus on running your business, not chasing paperwork.
                        </p>
                    </div>

                    <div class="what-we-do-list wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>Connect bank accounts</li>
                            <li>Vendor list</li>
                            <li>All your products and services</li>
                            <li>Technical support</li>
                        </ul>
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
                            <img src="/frontend/images/what-we-do-img-1.jpg" alt="Simplifying Taxes">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection