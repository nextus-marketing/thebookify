@extends('layouts.frontend')
@section('title') Pricing | The Bookify @endsection
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
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box wow fadeInUp">
                        <div class="pricing-header">
                            <h3>personal plan</h3>
                            <h2><sup>$</sup>29.00<sub>/per month</sub></h2>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-list-title">
                                <h3>What's included?</h3>
                            </br>
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

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="pricing-header">
                            <h3>Growth</h3>

                            <h2><sup>$</sup>149<sub>/per month</sub></h2>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-list-title">
                                <h3>What's included?</h3>
                                </br>
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

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-header">
                            <h3>Expansion</h3>

                            <h2><sup>$</sup>229<sub>/per month</sub></h2>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-list-title">
                                <h3>What's included?</h3>
                                </br>
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

                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box highlighted-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-header">
                            <h3>Expansion</h3>

                            <h2><sup>$</sup>399<sub>/per month</sub></h2>
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-list-title">
                                <h3>What's included?</h3>
                                </br>
                                <p style="color:#fff;">Additional Solutions Available Get Complete CFO advisory with Starter plan</p>
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


                <div class="col-lg-4 col-md-6">
                    <div class="pricing-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-header">
                            <h3>Customized</h3>

                            <!-- <h2><sup>$</sup>399<sub>/per month</sub></h2> -->
                        </div>
                        <div class="pricing-body">
                            <div class="pricing-list-title">
                                <h3>What's included?</h3>
                                </br>
                                <p>Customize your finances as you want and save a lot of money quickly.</p>
</br>
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
                 <div class="col-lg-12">
                    <!-- Pricing Benifit List Start -->
                    <div class="pricing-benefit-list wow fadeInUp" data-wow-delay="0.6s">
                        <ul>
                            <li><img src="/frontend/images/icon-pricing-benefit-1.svg" alt="">Get 30 day free trial</li>
                            <li><img src="/frontend/images/icon-pricing-benefit-2.svg" alt="">No any hidden fees pay</li>
                            <li><img src="/frontend/images/icon-pricing-benefit-3.svg" alt="">You can cancel anytime </li>
                        </ul>
                    </div>
                    <!-- Pricing Benifit List End -->
                </div>
            </div>
        </div>
    </div>
@endsection