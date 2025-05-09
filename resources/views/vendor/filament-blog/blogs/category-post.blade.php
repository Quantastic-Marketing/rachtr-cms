<!DOCTYPE html>
<html>
    <head>
        <meta name="google-site-verification" content="LLHnCxL0ply51MwNKvI7mbYW7yFJQ1GK6g_DrijdgMU" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="msvalidate.01" content="8C0F176F0755630859963DA6D5140F0A" />
        @php
            $seo = $page->seoDetail ?? (object)[];
            $seoTitle = $seo->title ?? config('app.name');
            $seoDescription = $seo->description ?? 'Rachtr';
            $seoAuthor = $seo->author ?? 'Rachtr';
            $canonicalUrl = $seo->canonical_url ?? url()->current();
            $seoImage = $seo->image ?? asset('images/default-image.jpg');

            $metaData = json_decode($seo->meta ?? '{}', true);
            $focusKeywords = isset($metaData['focus_keywords']) ? implode(', ', $metaData['focus_keywords']) : 'rachtr';

            $currentPath = request()->path();
        @endphp
        <title>{{ $seoTitle }}</title>
            <meta name="description" content="{{ $seoDescription }}">
            <meta name="author" content="{{ $seoAuthor }}">
            <meta name="keywords" content="{{ $focusKeywords }}">
            <link rel="canonical" href="{{ $canonicalUrl }}">

            <!-- Open Graph (Facebook, LinkedIn) -->
            <meta property="og:title" content="{{ $seoTitle }}">
            <meta property="og:description" content="{{ $seoDescription }}">
            <meta property="og:image" content="{{ $seoImage }}">
            <meta property="og:url" content="{{ $canonicalUrl }}">
            <meta property="og:type" content="website">

            <!-- Twitter Card -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="{{ $seoTitle }}">
            <meta name="twitter:description" content="{{ $seoDescription }}">
            <meta name="twitter:image" content="{{ $seoImage }}">
            <meta name="robots" content="index,follow">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script  src="{{ asset('js/jquery.min.js') }}" type="text/jscript"></script>
        <script defer src="{{ asset('js/slick.js') }}"></script>
        <!--<link rel="stylesheet" href="css/hover-min.css" type="text/css">-->
        @vite([ 
                'resources/js/app.js',
                'resources/css/bootstrap.min.css',
                'resources/css/jquery.fancybox.min.css',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/css/style.css',
                'resources/css/responsive.css',
                'resources/css/puFloor.css',
                'resources/css/blog.css',
                'resources/css/blogArchive.css',
                'resources/js/cdn.min.js',
                'resources/js/micromodal.min.js',
                'resources/js/header.js',
            ])
        <link rel="shotcut icon" type="image/x-icon" href="{{ asset('images/favicon_img.webp') }}">

         <!-- Google Tag Manager -->
         <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MZ869XPN');
        </script>
        <!-- End Google Tag Manager -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FZT2PX2KST"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FZT2PX2KST');
        </script>
        
    </head>
<body x-data="{ query: new URLSearchParams(window.location.search).get('query') || '' }">
<meta name="google-site-verification" content="LLHnCxL0ply51MwNKvI7mbYW7yFJQ1GK6g_DrijdgMU" />
    <!-- This is a wrapper open -->
    <div class="wrapper"> 
      @includeIf('CommonTemplates.headerHome');
        
          
      <section class="blog-banner banner">
        <div class="row g-0">
        <div class="col-lg-12">  
            <div class="banner-section">
                <div class="image-wrapper">
                    <img src="images/blog-bg.webp" alt="img background">
                   
                </div>
                <div class="heading-holder">
                    <h1 class="fw-bold">BLOGS & ARTICLES</h1>
                </div>
            </div>                   
          </div>
         
        </div>
        </section>

        <section class="blogs-archive blogs-content py-5 ">
        <div class="container">
            <div class="row">
                <!-- Main Blog Section -->
                <div class="col-lg-8 ">
                    @foreach($posts as $post)
                        <div class="card border-0 shadow-sm mb-4 d-flex flex-column flex-md-row">
                            <div class="d-flex flex-column flex-md-row row-md">
                                <div class="col-md-6 card-image-wrapper">
                                    <a href="{{route('filamentblog.post.show', ['post' => $post->slug]) }}">
                                        <img src="{{ asset($post->featurePhoto) }}" class="" alt="{{ $post->photo_alt_text}}">
                                    </a>
                                </div>
                                <div class="col-md-6 card-body p-4  p-md-3 py-md-4">
                                    <div class="blog-content">
                                        <p class="fs-12 text-muted mb-1">{{ \Carbon\Carbon::parse($post->published_at)->format('M d')}}</p>
                                        @foreach ($post->categories as $category)
                                            <a href="{{route('filamentblog.category.post',['category' => $category->slug])}}" class="blog-category">{{$category->name}}</a>
                                        @endforeach
                                        <a href="{{route('filamentblog.post.show', ['post' => $post->slug]) }}">
                                            <h2 class="blog-title mt-2">{{$post->title}}</h2>
                                            <p class="d-md-none">{{Str::limit(strip_tags(html_entity_decode($post->body)), 150)}}</p>
                                        </a>
                                    </div>
                                    <div class="blog-stats d-flex flex-column">
                                        <hr class="d-md-block m-0 my-md-2 order-2 order-md-1">
                                        <div class="d-flex justify-content-between align-items-center order-1 order-md-2 m-0">
                                            <div class="d-flex gap-4 gap-md-3 m-0 align-items-center">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa fa-eye d-md-none" aria-hidden="true"></i>
                                                    <p class="views-comments d-none d-md-block m-0">60 views</p>
                                                    <p id="viewsCount" class="views-comments d-md-none m-0">60</p>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <i class="fa fa-comment-o d-md-none" aria-hidden="true"></i>
                                                    <p class="views-comments d-none d-md-block m-0">0 comments</p>
                                                    <p id="viewsCount" class="views-comments d-md-none m-0">0</p>
                                                </div>   
                                            </div>
                                            <div class="d-flex m-0 align-items-center">
                                                <p id="likeCount"></p>
                                                <button class="like-btn">
                                                <i class="fa fa-heart"></i>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
        
                                </div>
                            </div>  
                        </div>
                    @endforeach
                </div>
        
                <!-- Sidebar -->
                <div class="col-lg-3 p-0 ms-0">
                    <!-- Related Posts -->
                    <div class="post-list d-flex flex-column  flex-lg-column gap-3 mb-4">
                      @foreach($post->relatedPosts() as $relatedPost)
                        <div class="d-flex related-posts">
                            <div class="related-post-desc">
                                <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}" class="text-dark text-decoration-none">{{\Illuminate\Support\Str::limit(strip_tags($relatedPost->title), 50, '...')}}</a>
                                @foreach ($relatedPost->categories as $category)
                                <a href="{{route('filamentblog.category.post',['category' => $category->slug])}}">
                                    <p class="text-muted small">{{$category->name}}</p>
                                </a>
                                @endforeach
                            </div>
                            <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}" class="me-0">
                                <img src="{{$relatedPost->feature_photo}}" alt="{{$relatedPost->photo_alt_text}}">
                            </a>
                        </div>
                      @endforeach
                    </div>
        
                    <!-- Archives -->
                    <div class="archives" style="display:none;">
                        <h5>Archives</h5>
                        <ul class="archive-list ps-0">
                            <li><a href="#" class="text-dark text-decoration-none">January 2025 (4)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">December 2024 (3)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">November 2024 (3)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">September 2024 (3)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">August 2024 (2)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">January 2025 (4)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">December 2024 (3)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">November 2024 (3)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">September 2024 (3)</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">August 2024 (2)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </section>


    @includeIf('CommonTemplates.footerHome');
   </div>
    <!-- This is a wrapper close -->


  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ869XPN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    
</body>   
</html>