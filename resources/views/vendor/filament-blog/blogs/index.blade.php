<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>RachTR</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="css/hover-min.css" type="text/css">-->
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
        <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/puFloor.css') }}" type="text/css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
        <link rel="shotcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
        
    </head>
<body>
    <!-- This is a wrapper open -->
    <div class="wrapper"> 
      
    <!-- header -->
     @includeIf('CommonTemplates.headerHome')
     <!-- header close -->
        
       <section class="blog-banner banner">
        <div class="row g-0">
        <div class="col-lg-12">  
            <div class="banner-section">
                <div class="image-wrapper">
                    <img src="images/blog-bg.jpg" alt="img background">
                   
                </div>
                <div class="heading-holder">
                    <h2>BLOGS & ARTICLES</h2>
                </div>
            </div>                   
          </div>
         
        </div>
    </section>

    <section class="blogs-content py-5 ">
        <div class="container">
            <div class="row">
                <!-- Main Blog Section -->
                <div class="col-lg-8 ">
                    @foreach($posts as $post)
                        <div class="card border-0 shadow-sm mb-4">
                            <img src="{{ asset($post->featurePhoto) }}" class="card-img-top card-img-style" alt="{{ $post->photo_alt_text}}">
                            <div class="card-body p-4 p-sm-5 m-0">
                                <div class="blog-content pb-4">
                                    <p class="fs-12 text-muted mb-1">{{ \Carbon\Carbon::parse($post->published_at)->format('M d')}}</p>
                                    @foreach ($post->categories as $category)
                                        <a href="#" class="blog-category">{{$category->name}}</a>
                                    @endforeach
                                    <a href="{{route('filamentblog.post.show', ['post' => $post->slug]) }}" class="post_body">
                                        <h2 class="blog-title mt-2">{{$post->title}}</h2>
                                        <p class="clamp-text">{{Str::limit(strip_tags(html_entity_decode($post->body)), 150)}}</p>
                                    </a>
                                    
                                </div>
                                <div class="blog-stats d-flex flex-column">
                                    <hr class="d-md-block m-0 my-md-2 order-2 order-md-1">
                                    <div class="d-flex justify-content-between align-items-center order-1 order-md-2 m-0">
                                        <div class="d-flex gap-4 gap-md-3 m-0">
                                            <div class="d-flex gap-2">
                                                <i class="fa fa-eye d-md-none" aria-hidden="true"></i>
                                                <p class="views-comments d-none d-md-block">60 views</p>
                                                <p id="viewsCount" class="views-comments d-md-none">60</p>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <i class="fa fa-comment-o d-md-none" aria-hidden="true"></i>
                                                <p class="views-comments d-none d-md-block">0 comments</p>
                                                <p id="viewsCount" class="views-comments d-md-none">0</p>
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
                    @endforeach
                    
                    <div class="container d-flex align-items-start">
                        <!-- <nav aria-label="Page navigation"> -->
                          {{$posts->links('pagination::bootstrap-4')}}  
                        <!-- </nav> -->
                    </div>
                </div>
        
                <!-- Sidebar -->
                <div class="col-lg-3 p-0 ms-0">
                    <!-- Related Posts -->
                    <div class="post-list d-flex flex-column flex-md-row flex-lg-column gap-2 gap-lg-3 mb-4 px-2 p-md-0">
                        @foreach($posts->take(3) as $post)
                            <div class="d-flex related-posts">
                                <div class="related-post-desc">
                                    <a href="{{route('filamentblog.post.show', ['post' => $post->slug]) }}" class="text-dark text-decoration-none">{{\Illuminate\Support\Str::limit(strip_tags($post->title), 50, '...')}}</a>
                                    @foreach($post->categories as $category)
                                        <p class="text-muted small">{{$category->name}}</p>
                                    @endforeach
                                </div>
                                <img src="{{ asset($post->featurePhoto) }}" alt="{{ $post->photo_alt_text}}">
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

    
    
       
     
    <!-- This is a section-9 open --> 
    @includeIf('CommonTemplates.footerHome')
    <!-- This is a section-9 close -->     
   </div>
    <!-- This is a wrapper close -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/jscript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>  
  
<script type="text/javascript">
    $('#showLeft').click(function(){
	$(this).toggleClass('open');
	$(".nav").slideToggle();	
});
</script> 

    
    
</body>   
</html>