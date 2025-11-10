@extends('layouts.frontend')
@section('title') Blogs | The Bookify @endsection
@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Latest Blog</h1>
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

<!-- Blog Section Start -->
<div class="page-blog pt-100 pb-70">
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
                    <div class="post-item wow fadeInUp" data-wow-delay="0.3s">
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
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2>
                                    <a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h2>
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

            {{-- Dynamic Pagination --}}
            @if ($blogs->hasPages())
                <div class="col-lg-12">
                    <div class="page-pagination  text-center" data-wow-delay="1.2s">
                        <ul class="pagination justify-content-center">
                            {{-- Previous Page Link --}}
                            @if ($blogs->onFirstPage())
                                <li class="disabled"><span><i class="fa-solid fa-angle-left"></i></span></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}"><i class="fa-solid fa-angle-left"></i></a></li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                @if ($page == $blogs->currentPage())
                                    <li class="active"><a href="#">{{ $page }}</a></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}"><i class="fa-solid fa-angle-right"></i></a></li>
                            @else
                                <li class="disabled"><span><i class="fa-solid fa-angle-right"></i></span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>
<!-- Blog Section End -->

@endsection
