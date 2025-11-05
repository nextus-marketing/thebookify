@extends('layouts.frontend')
@section('title') Thank You | The Bookify @endsection
@section('content')
<div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Thank You</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="error-page-image wow fadeInUp">
                        <img src="/frontend/images/404-error-img.png" alt="">
                    </div> -->
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Thank You for  <span>Contacting Us</span></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We appreciate your message and have received it. Our team will review it and contact you soon.</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.5s" href="/"><span>back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection