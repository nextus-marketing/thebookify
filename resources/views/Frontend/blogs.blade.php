@extends('layouts.frontend')
@section('title') Blogs | The Bookify @endsection
@section('content')
 <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Latest blog</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-meta">
                                <ul>
                                    <li><i class="fa-solid fa-calendar-days"></i> 15 sep, 2024</li>
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2><a href="/blog-details">10 Essential Steps to Create Foolproof Financial Plan for Long-Term Stability</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-meta">
                                <ul>
                                    <li><i class="fa-solid fa-calendar-days"></i> 15 sep, 2024</li>
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2><a href="/blog-details">mastering budgeting: practical steps to ensure your financial success</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-meta">
                                <ul>
                                    <li><i class="fa-solid fa-calendar-days"></i> 15 sep, 2024</li>
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2><a href="/blog-details">Understanding Cash Flow: Key to a Healthy Business and Financial Stability</a></h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>  

                <div class="col-lg-12">
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection