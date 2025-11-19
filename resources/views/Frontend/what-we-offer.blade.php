@extends('layouts.frontend')
@section('title')  What We Offer | The Bookify @endsection
@section('meta_description') Explore The Bookify’s full range of accounting, bookkeeping, payroll, tax, and CFO services designed to support business growth with accuracy, transparency, and expertise. @endsection
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "What We Offer",
  "url": "https://the-bookify.com/what-we-offer",
  "description": " Explore The Bookify’s full range of accounting, bookkeeping, payroll, tax, and CFO services designed to support business growth with accuracy, transparency, and expertise.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://the-bookify.com/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "What We Offer",
        "item": "https://the-bookify.com/what-we-offer"
      }
    ]
  },
  "about": {
    "@type": "Organization",
    "name": "The Bookify",
    "url": "https://the-bookify.com/",
    "logo": "https://the-bookify.com/frontend/my-img/logo.png"
  },
  "mainEntity": {
    "@type": "ItemList",
    "name": "Accounting Services List",
    "itemListOrder": "Ascending",
    "itemListElement": [
      {
        "@type": "Service",
        "name": "Bookkeeping Services",
        "url": "https://the-bookify.com/bookkeeping",
        "description": "Accurate and reliable bookkeeping services for small businesses including transaction recording, monthly reports, and financial organization."
      },
      {
        "@type": "Service",
        "name": "Payroll Services",
        "url": "https://the-bookify.com/payroll",
        "description": "End-to-end payroll services including salary processing, tax deductions, compliance management, and employee payroll setup."
      },
      {
        "@type": "Service",
        "name": "Tax Management & Filing",
        "url": "https://the-bookify.com/tax-management",
        "description": "Professional tax preparation and filing services for individuals and businesses, ensuring compliance and maximum savings."
      },
      {
        "@type": "Service",
        "name": "CFO Advisory Services",
        "url": "https://the-bookify.com/cfo-advisory",
        "description": "Expert virtual CFO services including financial planning, budgeting, forecasting, and strategy for business growth."
      },
      {
        "@type": "Service",
        "name": "Business Incorporation",
        "url": "https://the-bookify.com/business-incorporation",
        "description": "Business formation and incorporation assistance including LLC, S-Corp, and compliance setup for new businesses."
      },
      {
        "@type": "Service",
        "name": "Sales Tax Services",
        "url": "https://the-bookify.com/sales-tax-services",
        "description": "Sales tax registration, filing, compliance, and reporting for businesses operating across different states."
      }
    ]
  }
}
</script>
@section('content')
<style>
    .service-item {
  display: flex;
  flex-direction: column;
  height: 100%;
}
.service-item-content {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}
.service-item-content p {
  flex-grow: 1;
}
.service-btn {
  align-self: flex-start;
  margin-top: auto;
}
</style>
<div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">What We Offer</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">What We Offer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-service-1.svg" alt="icon-service">
                        </div>

                        <div class="service-item-content">
                            <h3>Bookkeeping</h3>
                            <p>We at TheBookify intent to provide best-in-class bookkeeping solutions for all types of ventures. Our bookkeeping services ensure timely response as per the needs of our clientele. </p>
                            <a href="/what-we-offer/bookkeeping-services" class="service-btn"><img src="/frontend/images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-service-2.svg" alt="icon-service">
                        </div>

                        <div class="service-item-content">
                            <h3>Payroll</h3>
                            <p>TheBookify have provided the best payroll services in the industry. We are innovative and forward-thinking. We offer many different payroll services to meet your company’s needs.</p>
                            <a href="/what-we-offer/payroll-services" class="service-btn"><img src="/frontend/images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-service-3.svg" alt="icon-service">
                        </div>
                        <div class="service-item-content">
                            <h3>Tax and Accounting</h3>
                            <p>You may have heard of the term “accountant” and may be wondering what they do. Thebookify is a firm that offers tax planning, accounting, bookkeeping, and payroll services.</p>
                            <a href="/what-we-offer/tax-and-accounting" class="service-btn"><img src="/frontend/images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-service-4.svg" alt="">
                        </div>

                        <div class="service-item-content">
                            <h3>CFO Advisory</h3>
                            <p>A CFO advisor is a financial specialist who fills in for the CFO in various positions at a company. An outsourced CFO is a cost-effective and efficient solution for many firms to benefit from an internal finance function without the costs and hazards. </p>
                            <a href="/what-we-offer/cfo-advisory" class="service-btn"><img src="/frontend/images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-service-5.svg" alt="">
                        </div>

                        <div class="service-item-content">
                            <h3>Incorporation</h3>
                            <p>TheBookify have been providing incorporation services for over 10 years. We incorporate a wide range of entities to meet the diverse needs of our clients.
                            </br>
                            </br>
                            </br>
                            </p>
                            <a href="/what-we-offer/incorporation" class="service-btn"><img src="/frontend/images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="icon-box">
                            <img src="/frontend/images/icon-service-6.svg" alt="">
                        </div>

                        <div class="service-item-content">
                            <h3>Sales Tax Consulting</h3>
                            <p>TheBookify is a group of qualified and experienced experts in the field of taxation who strive to offer the best Sale tax consulting services. We understand that it can be hard to handle all the different rules and regulations in this field on your own, which is why we are here to help.</p>
                            <a href="/what-we-offer/sales-tax-consulting" class="service-btn"><img src="/frontend/images/arrow-white.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="service-footer wow fadeInUp" data-wow-delay="1.2s">
                        <p>Let's make something great work together. <a href="/contact">Get Free Quote</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection