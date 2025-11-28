@extends('layouts.frontend')
@section('title') Blog Details | The Bookify @endsection
@section('meta_description')
    {{ $blog->meta_description }}
@endsection

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

@section('content')
<style>
/* ---------- PAGE HEADER ---------- */
.page-header-box h1 {
    display: inline-block;
    font-size: 50px;
    font-weight: 700;
    line-height: 1.2em;
    color: var(--white-color);
    text-align: center;
    margin-bottom: 10px;
}

/* ---------- MAIN BLOG SECTION ---------- */
.page-single-post {
    background-color: #fff;
    padding: 50px 15px; /* small padding for smaller screens */
}

/* Use a max-width container to prevent sticking to edges on laptops */
.page-single-post .container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Post content styling */
.post-entry h2 {
    font-size: 28px;
    font-weight: 700;
}
.post-entry h3 {
    font-size: 20px;
    font-weight: 600;
}
.post-entry p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

/* Related blogs sidebar */
.related-blogs {
    background: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
    position: sticky;
    top: 100px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
}
.related-blogs h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
    border-bottom: 2px solid #eee;
    padding-bottom: 10px;
}
.related-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}
.related-item:last-child {
    margin-bottom: 0;
}
.related-thumb img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 6px;
    transition: transform 0.3s ease;
}
.related-thumb img:hover {
    transform: scale(1.05);
}
.related-info {
    flex: 1;
}
.related-title {
    display: block;
    font-weight: 600;
    font-size: 15px;
    color: #333;
    line-height: 1.3em;
    text-decoration: none;
}
.related-title:hover {
    color: var(--primary-color);
}
.related-date {
    font-size: 13px;
    color: #777;
    margin-top: 5px;
}

/* ---------- RESPONSIVE DESIGN ---------- */
@media (max-width: 1199px) {
    .page-single-post .container {
        padding-left: 30px;
        padding-right: 30px;
    }
}
@media (max-width: 991px) {
    .related-blogs {
        position: relative;
        top: 0;
        margin-top: 40px;
    }
    .related-item {
        flex-direction: row;
    }
}
</style>

<!-- ---------- PAGE HEADER ---------- -->
<div class="page-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-12">
        <div class="page-header-box">
          <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $blog->title }}</h1>
          <nav class="wow fadeInUp">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">home</a></li>
              <li class="breadcrumb-item"><a href="/blogs">Blogs</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ---------- BLOG + RELATED POSTS ---------- -->
<div class="page-single-post">
  <div class="container">
    <div class="row">
      <!-- LEFT: BLOG CONTENT -->
      <div class="col-lg-8 col-md-12">
        <h2 class="text-anime-style-2 text-center mb-3">{{ $blog->title }}</h2>
        <div class="post-meta text-center mb-4">
          <span class="me-3"><i class="fa-solid fa-user"></i> By <strong>{{ $blog->author }}</strong></span>
          <span class="me-3"><i class="fa-regular fa-calendar-days"></i> 
            Published on <strong>{{ \Carbon\Carbon::parse($blog->publish_date)->timezone('Asia/Kolkata')->format('F j, Y') }}</strong>
          </span>
        </div>

        <div class="post-image text-center mb-4">
          <img src="{{ asset(Storage::url($blog->photo)) }}" alt="Blog Details" class="img-fluid rounded">
        </div>

        <div class="post-content">
          <div class="post-entry">
            @php
            $description = json_decode($blog->description, true);

            /**
            * Helper: safely get string (handles null)
            */
            function _s($v) {
                return is_null($v) ? '' : $v;
            }

            if (!empty($description['blocks']) && is_array($description['blocks'])) {
                foreach ($description['blocks'] as $d) {
                    $type = $d['type'] ?? '';
                    $data = $d['data'] ?? [];

                    switch ($type) {
                        case 'header':
                            $level = isset($data['level']) ? intval($data['level']) : 2;
                            $text = _s($data['text']);
                            echo "<h{$level}>{$text}</h{$level}>";
                            break;

                        case 'paragraph':
                            $text = _s($data['text']);
                            echo "<p>{$text}</p>";
                            break;

                        case 'raw':
                            // Raw HTML — output as-is
                            $html = _s($data['html'] ?? $data['content'] ?? '');
                            echo $html;
                            break;

                        case 'delimiter':
                            echo '<hr>';
                            break;

                        case 'image':
                            // Editor.js image block often stores file.url or a base64 data URL
                            $url = '';
                            if (!empty($data['file']['url'])) $url = $data['file']['url'];
                            elseif (!empty($data['url'])) $url = $data['url'];
                            // caption
                            $caption = _s($data['caption'] ?? '');
                            if ($url) {
                                $safeUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
                                $safeCaption = htmlspecialchars(strip_tags($caption), ENT_QUOTES, 'UTF-8');
                                echo "<div class='image-container'>";
                                echo "<img src='{$safeUrl}' alt='{$safeCaption}'>";
                                if ($caption) echo "<p class='caption'>{$caption}</p>";
                                echo "</div>";
                            }
                            break;

                        case 'list':
                            $items = $data['items'] ?? [];
                            $style = $data['style'] ?? 'unordered';

                            // items can be array of strings or array of arrays/objects
                            if ($style === 'ordered') {
                                echo "<ol>";
                                foreach ($items as $item) {
                                    if (is_string($item)) {
                                        $content = $item;
                                    } elseif (is_array($item)) {
                                        // new List plugin might store ['content' => 'text'] or ['text' => 'text']
                                        $content = $item['content'] ?? $item['text'] ?? '';
                                    } else {
                                        $content = '';
                                    }
                                    echo "<li>{$content}</li>";
                                }
                                echo "</ol>";
                            } elseif ($style === 'unordered') {
                                echo "<ul>";
                                foreach ($items as $item) {
                                    if (is_string($item)) {
                                        $content = $item;
                                    } elseif (is_array($item)) {
                                        $content = $item['content'] ?? $item['text'] ?? '';
                                    } else {
                                        $content = '';
                                    }
                                    echo "<li>{$content}</li>";
                                }
                                echo "</ul>";
                            } elseif ($style === 'checklist') {
                                echo "<ul class='checklist'>";
                                foreach ($items as $item) {
                                    // Checklist items may be objects with 'text' and 'checked' or 'meta' => ['checked' => true]
                                    if (is_string($item)) {
                                        $content = $item;
                                        $checked = false;
                                    } elseif (is_array($item)) {
                                        $content = $item['content'] ?? $item['text'] ?? '';
                                        $checked = !empty($item['checked']) || !empty($item['meta']['checked']);
                                    } else {
                                        $content = '';
                                        $checked = false;
                                    }
                                    $checkedAttr = $checked ? 'checked' : '';
                                    echo "<li><input type='checkbox' disabled {$checkedAttr}> {$content}</li>";
                                }
                                echo "</ul>";
                            }
                            break;

                        case 'table':
                            $content = $data['content'] ?? [];
                            if (is_array($content) && count($content)) {
                                echo '<table class="editor-table">';
                                foreach ($content as $r) {
                                    echo '<tr>';
                                    foreach ($r as $cell) {
                                        echo '<td>' . _s($cell) . '</td>';
                                    }
                                    echo '</tr>';
                                }
                                echo '</table>';
                            }
                            break;

                        case 'linkTool':
                            // linkTool stores link and meta
                            $link = _s($data['link'] ?? $data['url'] ?? '');
                            $metaTitle = _s($data['meta']['title'] ?? $data['meta']['ogTitle'] ?? '');
                            if ($link) {
                                $href = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');
                                $text = $metaTitle ?: $href;
                                echo "<p><a href='{$href}' target='_blank' rel='noopener noreferrer'>{$text}</a></p>";
                            }
                            break;

                        case 'spacer':
                        case 'spaced':
                            // custom spacer block — height may be in data.height
                            $height = isset($data['height']) ? intval($data['height']) : (isset($data['size']) ? intval($data['size']) : 30);
                            // render invisible spacer (no dashed border) for frontend
                            echo "<div style='height:{$height}px; width:100%;'></div>";
                            break;

                        default:
                            // If unknown block type, try to render any textual data available (fallback)
                            if (!empty($data['text'])) {
                                echo "<p>" . _s($data['text']) . "</p>";
                            } elseif (!empty($data['html'])) {
                                echo $data['html'];
                            } else {
                                // silently ignore unknown blocks to avoid exposing debug info
                            }
                            break;
                    }
                }
            } else {
                echo '<p>No description available.</p>';
            }
            @endphp
          </div>
        </div>
      </div>

      <!-- RIGHT: RELATED BLOGS SIDEBAR -->
      <div class="col-lg-4 col-md-12">
        <aside class="related-blogs">
          <h4>Related Articles</h4>
          @foreach($latestBlogs as $latest)
          <div class="related-item">
            <div class="related-thumb me-3">
              <a href="{{ route('blogs.details', $latest->slug) }}">
                <img src="{{ asset(Storage::url($latest->photo)) }}" alt="{{ $latest->title }}">
              </a>
            </div>
            <div class="related-info">
              <a href="{{ route('blogs.details', $latest->slug) }}" class="related-title">{{ $latest->title }}</a>
              <p class="related-date"><i class="fa-regular fa-calendar-days"></i> 
                {{ \Carbon\Carbon::parse($latest->publish_date)->format('d M, Y') }}
              </p>
            </div>
          </div>
          @endforeach
        </aside>
      </div>
    </div>
  </div>
</div>
@endsection
