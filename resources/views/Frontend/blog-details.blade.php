@extends('layouts.frontend')
@section('title') Blog Details | The Bookify @endsection
@section('meta_description')
    {{ $blog->meta_description }}
@endsection
@section('content')
<style>
.page-blog {
 padding: 15px 0;
 }
 .post-entry h2 {
    font-size: 28px;
}
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
.post-entry h3 {
font-size: 26px;
}
.post-entry h6 {
    font-size: 18px;
}

</style>
@section('structured_data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "headline": "{{ addslashes($blog->meta_title ?? $blog->title) }}",
      "description": "{{ addslashes(strip_tags($blog->meta_description ?? Str::limit($blog->content ?? '', 150))) }}",
      "author": {
        "@type": "Person",
        "name": "{{ addslashes($blog->author_name ?? 'Admin') }}"
      },
      "publisher": {
        "@type": "Organization",
        "name": "OEM Used Car Part",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ url('/frontend/my-img/old-logo.webp') }}"
        }
      },
      "datePublished": "{{ $blog->created_at->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at->toIso8601String() }}"
    }
    @if(!empty($blog->faqs) && count($blog->faqs) > 0)
    ,
    {
      "@type": "FAQPage",
      "mainEntity": [
        @foreach($blog->faqs as $faq)
        {
          "@type": "Question",
          "name": "{{ addslashes($faq['question']) }}",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "{{ addslashes(strip_tags($faq['answer'])) }}"
          }
        }@if(!$loop->last),@endif
        @endforeach
      ]
    }
    @endif
  ]
}
</script>
@endsection
<style>
    .page-single-post {
    background-color: var(--white-color);
    padding: 10px 0;
}
</style>
 <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $blog->title }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</br>
<div class="page-single-post">
    <div class="container">
        <!-- Blog Title -->
        <h2 class="text-anime-style-2 text-center" data-cursor="-opaque" style="margin: 0 auto;">
            <span>{{ $blog->title }}</span>
        </h2>
        <div class="post-meta text-center mt-3 mb-4">
            <span class="me-3"><i class="fa-solid fa-user"></i> By <strong>{{ $blog->author }}</strong></span>
            <span class="me-3"><i class="fa-regular fa-calendar-days"></i> Published on <strong>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('F j Y') }}</strong></span>
        </div>
       
        <div class="row">
            <div class="col-lg-12">
                <!-- Blog Image -->
                <div class="post-image text-center">
                    <figure class="image-anime reveal">
                        <img src="{{ asset(Storage::url($blog->photo)) }}" alt="Blog Details" class="img-fluid rounded">
                    </figure>
                </div>

                <!-- Blog Meta -->
               
                <!-- Blog Content -->
                <div class="post-content">
                    <div class="post-entry">
                        <p class="wow fadeInUp">
                            @php
                            $description = json_decode($blog->description, true);
                            if (!empty($description['blocks']) && is_array($description['blocks'])) {
                                foreach ($description['blocks'] as $d) {
                                    switch ($d['type']) {
                                        case 'header':
                                            $level = $d['data']['level'] ?? 2;
                                            echo "<h{$level}>{$d['data']['text']}</h{$level}>";
                                            break;
                                        case 'paragraph':
                                            echo "<p>{$d['data']['text']}</p>";
                                            break;
                                        case 'delimiter':
                                            echo '<hr>';
                                            break;
                                        case 'image':
                                            if (!empty($d['data']['file']['url'])) {
                                                $url = htmlspecialchars($d['data']['file']['url']);
                                                $caption = $d['data']['caption'] ?? '';
                                                $align = $d['data']['alignment'] ?? 'center';
                                                echo "<div class='image-container {$align}'><img src='{$url}' alt='".strip_tags($caption)."'>";
                                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                                echo "</div>";
                                            }
                                            break;
                                        case 'list':
                                            $items = $d['data']['items'] ?? [];
                                            $style = $d['data']['style'] ?? 'unordered';
                                            if ($style === 'ordered') {
                                                echo "<ol>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ol>";
                                            } elseif ($style === 'unordered') {
                                                echo "<ul>";
                                                foreach ($items as $item) echo "<li>{$item['content']}</li>";
                                                echo "</ul>";
                                            } elseif ($style === 'checklist') {
                                                echo "<ul class='checklist'>";
                                                foreach ($items as $item) {
                                                    $checked = !empty($item['meta']['checked']) ? 'checked' : '';
                                                    echo "<li><input type='checkbox' disabled {$checked}> {$item['content']}</li>";
                                                }
                                                echo "</ul>";
                                            }
                                            break;
                                        case 'table':
                                            if (!empty($d['data']['content'])) {
                                                echo '<table class="editor-table">';
                                                foreach ($d['data']['content'] as $row) {
                                                    echo '<tr>';
                                                    foreach ($row as $cell) echo "<td>{$cell}</td>";
                                                    echo '</tr>';
                                                }
                                                echo '</table>';
                                            }
                                            break;
                                        case 'linkTool':
                                            if (!empty($d['data']['link'])) {
                                                $href = htmlspecialchars($d['data']['link']);
                                                $text = $d['data']['meta']['title'] ?? $href;
                                                echo "<a href='{$href}' target='_blank'>{$text}</a>";
                                            }
                                            break;
                                    }
                                }
                            } else {
                                echo '<p>No description available.</p>';
                            }
                        @endphp
                    </p>
                    </div>
                </div> <!-- End post-content -->
            </div>
        </div>
    </div>
</div>


    <div class="page-blog">
    <div class="container">
        <div class="section-title dark-section text-center">
            <h2 class="text-anime-style-2" data-cursor="-opaque" style="margin: 0 auto;">
                <span>Related posts:</span>
            </h2>
        </div>

        <div class="row justify-content-center">
            @foreach($latestBlogs as $latest) 
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="{{ route('blogs.details', $latest->slug) }}" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset(Storage::url($latest->photo)) }}" alt="{{ $latest->title }}">
                                </figure>
                            </a>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-meta">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-calendar-days"></i> 
                                        {{ \Carbon\Carbon::parse($latest->publish_date)->format('M d, Y') }}
                                    </li>
                                </ul>
                            </div>
                            <div class="post-item-content">
                                <h2>
                                    <a href="{{ route('blogs.details', $latest->slug) }}">{{ $latest->title }}</a>
                                </h2>
                            </div>
                            <div class="post-item-btn">
                                <a href="{{ route('blogs.details', $latest->slug) }}" class="readmore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection