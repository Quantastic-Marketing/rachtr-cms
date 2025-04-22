<!DOCTYPE html>
<html>
    <head>
        <meta name="google-site-verification" content="LLHnCxL0ply51MwNKvI7mbYW7yFJQ1GK6g_DrijdgMU" />  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        @php
            $seo = $post->seoDetail ?? (object)[];
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
                'resources/css/blogTemplate.css',
                'resources/js/cdn.min.js',
                'resources/js/micromodal.min.js'
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
                    <img src="{{ asset('images/blog-bg.webp')}}" alt="img background">
                   
                </div>
                <div class="heading-holder">
                    <h3 class="fw-bold color-orange">OUR BLOG</h3>
                </div>
            </div>                   
          </div>
         
        </div>
    </section>

    <section class=" blogs-content py-5 ">
        <div class="container">
            <div class="row">
                <!-- Main Blog Section -->
                <div class="col-lg-8 ">
                    <div class="card border-sm  shadow-md  mb-4">
                        <div class="card-body p-4 p-sm-5">
                            <div class="blog-content pb-4">
                                <h1 class="blog-title mt-2">{{$post->title ?? ''}}</h1>
                                <p>Updated : {{ $post->updated_at->diffForHumans() }}</p>
                            </div>
                            <div class="image-wrapper py-2">
                                <img class="w-100 h-100 object-fit-cover" src="{{$post->feature_photo}}" alt="{{$post->photo_alt_text}}">
                            </div>

                            <div class="blog-body py-5">
                            {!! str($post->body)->sanitizeHtml() !!}
                            </div>

                            <div class="category-links mb-4 mt-2">
                                @if($post->tags)
                                    @foreach($post->tags as $tags)
                                        <a href="#" class="category-link active">{{$tags['name'] ?? ''}}</a>
                                    @endforeach
                                @endif
                            </div>

                            <div class="blog-stats d-flex flex-column ">
                                <hr class="d-md-block m-0 my-md-2 order-2 order-md-1 ">
                                <div class="d-flex flex-column-reverse flex-sm-row  gap-3 gap-sm-0  justify-content-between align-items-center order-1 order-md-2 m-0 my-2">
                                    <div class="d-flex gap-5 gap-sm-3 m-0 align-items-center align-self-start social-links">
                                       
                                            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <div class="d-flex x-icon align-items-center">
                                                <a href="https://www.facebook.com/"><img src="{{ asset('images/x-twitter-brands.svg') }}" alt="twitter logo"></a>    
                                            </div>
                                            <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            <a href="https://x.com/?lang=en"><i class="fa fa-link" aria-hidden="true"></i> </a>  
                                    </div>
                                    <div class="d-flex m-0 align-items-center align-self-start">
                                        @if($post->categories)
                                            @foreach($post->categories as $categories)
                                                <a href="{{route('filamentblog.category.post',['category' => $categories['slug']])}}">
                                                    <p class="m-0 fs-14">{{$categories['name'] ?? ''}}</p>
                                                </a>
                                            @endforeach
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="blog-stats d-flex flex-column pt-2 pt-sm-0">
                                <hr class="d-none d-md-block m-0 my-md-2 order-2 order-md-1">
                                <div class="d-flex justify-content-between align-items-center order-1 order-md-2 m-0 my-2">
                                    <div class="d-flex gap-4 gap-md-3 m-0">
                                        <div class="d-flex gap-2 align-items-center">
                                            <i class="fa fa-eye d-md-none" aria-hidden="true"></i>
                                            <p class="views-comments d-none d-md-block mb-0">60 views</p>
                                            <p id="viewsCount" class="views-comments d-md-none mb-0">60</p>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center">
                                            <i class="fa fa-comment-o d-md-none" aria-hidden="true"></i>
                                            <p class="views-comments d-none d-md-block mb-0">0 comments</p>
                                            <p id="viewsCount" class="views-comments d-md-none mb-0">0</p>
                                        </div>   
                                    </div>
                                    <div class="d-flex m-0">
                                        <p id="likeCount"></p>
                                        <button class="like-btn">
                                        <i class="fa fa-heart"></i>
                                        </button>
                                    </div>
                                    
                                </div>
                            </div>
                            

                        </div>
                    </div>

                    <!-- recent-post -->
                     <div class="recent-post-card">
                        <div class="row">
                            <div class="heading-holder d-flex justify-content-between align-items-center mx-0 py-3 ">
                                <h2 class="mx-0">Recent Posts</h2>
                                <a href="{{ route('filamentblog.post.index') }}" class="mx-0 d-flex">See All</a>
                            </div>
                            @if($post->relatedPosts(2)->count() >= 1)
                                <div class="d-flex">    
                                    @foreach($post->relatedPosts(2) as $relatedPost)
                                        <!-- Blog Post 1 -->
                                        <div class="d-none d-sm-flex col-sm-6 me-2">
                                            <div class="card recent-blog m-0 w-100">
                                                <div class="rec-post-img">
                                                    <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}">
                                                        <img src="{{$relatedPost->feature_photo}}" alt="Marble Floor Polishing">
                                                    </a>
                                                </div>
                                                
                                                <div class="d-flex flex-column gap-4 justify-content-between p-4 m-0 rec-pos-style">
                                                    <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}" class="rec-post-title m-0">{{$relatedPost->title ?? ''}}</a>
                                                    <div class="blog-stats d-flex flex-column m-0">
                                                        <hr class="d-md-block m-0 my-md-2 order-2 order-md-1">
                                                        <div class="d-flex justify-content-between align-items-center order-1 order-md-2 m-0 my-2">
                                                            <div class="d-flex gap-4 gap-md-3 m-0 align-items-center">
                                                                <div class="d-flex gap-2">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    <p id="viewsCount" class="views-comments m-0">60</p>
                                                                </div>
                                                                <div class="d-flex gap-2">
                                                                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                    <p id="viewsCount" class="views-comments m-0">0</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex m-0 ">
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
                            @endif
                            @if($post->relatedPosts(3)->count() >= 1)
                                <div class="blog-slider d-flex">    
                                    @foreach($post->relatedPosts(3) as $relatedPost)
                                        <!-- Blog Post 1 -->
                                        <div class="d-flex d-sm-none col-sm-6 me-2">
                                            <div class="card recent-blog m-0 w-100">
                                                <div class="rec-post-img">
                                                    <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}">
                                                        <img src="{{$relatedPost->feature_photo}}" alt="Marble Floor Polishing">
                                                    </a>
                                                </div>
                                                
                                                <div class="d-flex flex-column gap-4 justify-content-between p-4 m-0 rec-pos-style">
                                                    <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}" class="rec-post-title m-0">{{$relatedPost->title ?? ''}}</a>
                                                    <div class="blog-stats d-flex flex-column m-0">
                                                        <hr class="d-md-block m-0 my-md-2 order-2 order-md-1">
                                                        <div class="d-flex justify-content-between align-items-center order-1 order-md-2 m-0 my-2">
                                                            <div class="d-flex gap-4 gap-md-3 m-0 align-items-center">
                                                                <div class="d-flex gap-2">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    <p id="viewsCount" class="views-comments m-0">60</p>
                                                                </div>
                                                                <div class="d-flex gap-2">
                                                                    <i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                    <p id="viewsCount" class="views-comments m-0">0</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex m-0 ">
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
                            @endif
                            
                        </div>
                     </div>
                    <!-- Comments Section -->
                    <div class="card comment-section">
                        <h3 class="m-0 fs-6 fw-bold">Comments</h3>
                        <hr>
                        <input type="text" class="comment-input" placeholder="Write a comment...">

                        
                    </div>
                   
                    
                </div>
        
                <!-- Sidebar -->
                <div class="col-lg-3 p-lg-0 ms-0">
                    <!-- Related Posts -->
                    @if($post->relatedPosts()->count() >= 1)
                        <div class="post-list d-flex flex-column flex-md-row m-2 m-lg-0 gap-md-2 flex-lg-column gap-2 gap-lg-3 mb-4">
                            @foreach($post->relatedPosts() as $relatedPost)
                                <div class="d-flex related-posts">
                                    <div class="related-post-desc">
                                        <a href="{{ route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}" class="text-dark text-decoration-none">{{$relatedPost->title ?? ''}}</a>
                                        <p class="small text-muted">{{ \Carbon\Carbon::parse($relatedPost->published_at)->format('M d')}}</p>
                                    </div>
                                    <a href="{{route('filamentblog.post.show', ['post' => $relatedPost->slug]) }}" class="me-0">
                                        <img src="{{$relatedPost->feature_photo}}" alt="Post Image">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
        
                    <!-- Archives -->
                    <div class="archives" style="display:none;">
                        <h5>Archives</h5>
                        <ul class="archive-list ps-0">
                            <li><a href="" class="text-dark text-decoration-none">January 2025 (4)</a></li>
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