@extends('layouts.frontend')
@section('title') 404 Not Found | The Bookify @endsection
@section('content')
<div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Page Not Found</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">404 error page</li>
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
                    <div class="error-page-image wow fadeInUp">
                        <img src="/frontend/images/404-error-img.png" alt="">
                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Oops! Page <span>Not Found</span></h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.25s">The page you are looking for does not exist</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.5s" href="/"><span>back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection