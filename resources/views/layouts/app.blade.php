
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>{{ $page->seo->title ?? config('app.name')}}</title>
        <meta name="description" content="{{ $page->seo->description ?? 'Rahctr' }}">
        <meta name="author" content="{{ $page->seo->author ?? 'Rachtr' }}">
        @php
            $metaData = json_decode($page->seo->meta ?? '{}', true);
            $focusKeywords = isset($metaData['focus_keywords']) ? implode(', ', $metaData['focus_keywords']) : 'rachtr';
        @endphp
        <meta name="keywords" content="{{ $focusKeywords }}">
        <link rel="canonical" href="{{ $page->seo->canonical_url ?? url()->current() }}">

        <!-- Open Graph (Facebook, LinkedIn) -->
        <meta property="og:title" content="{{ $page->seo->title ?? config('app.name') }}">
        <meta property="og:description" content="{{ $page->seo->description ?? 'Rahctr' }}">
        <meta property="og:image" content="{{ isset($page->seo->image) ? asset($page->image) : asset('images/default-image.jpg') }}">
        <meta property="og:url" content="{{ $page->seo->canonical_url ?? url()->current() }}">
        <meta property="og:type" content="website">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->seo->title ?? config('app.name') }}">
        <meta name="twitter:description" content="{{ $page->seo->description ?? 'Rahctr' }}">
        <meta name="twitter:image" content="{{ isset($page->seo->image) ? asset($page->image) : asset('images/default-image.jpg') }}">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="css/hover-min.css" type="text/css">-->
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/fancybox.css')}}"/>
        <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link  href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet">
            @if(request()->is('*product-page*'))
                <link rel="stylesheet" href="{{ asset('css/product-template.css') }}" type="text/css">
            @endif
            @if(request()->is('*architect-center'))
            <link rel="stylesheet" href="{{ asset('css/architect.css') }}">
            @endif
            @if(request()->is('*contractor-center'))
            <link  href="{{ asset('css/puFloor.css') }}" type="text/css" rel="stylesheet">
            <link  href="{{ asset('css/contractual.css') }}" type="text/css" rel="stylesheet">
            @endif
        @if(request()->is('*about-us') || request()->is('*support-center'))
        <link href="{{ asset('css/aboutus.css') }}" type="text/css" rel="stylesheet">
        @endif
        @if(request()->is('*upload-cv'))
        <link rel="stylesheet" href="{{ asset('css/uploadCV.css') }}">
        @endif
        @if(request()->is('*careers'))
            <link rel="stylesheet" href="{{ asset('css/careersStyle.css') }}">
        @endif
        @if(request()->is('*contact-us'))
        <link  href="{{ asset('css/puFloor.css') }}" type="text/css" rel="stylesheet">
        <link href="css/contractual.css" type="text/css" rel="stylesheet">
        <link href="css/contact.css" type="text/css" rel="stylesheet">  
        @endif
        
       
        @if(!empty($page->schema_data))
        <script type="application/ld+json">{!! $page->schema_data !!}</script>
        @endif
        <link rel="shotcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    </head>

    <body>
        
            @include('CommonTemplates.headerHome')
            
            @if(request()->is('*product-page*'))
               @includeIf('Templates.Product.'.$template,['product'=> $page])
            @else
                @includeIf($templatePath,['page'=> $page])
            @endif

            @include('CommonTemplates.footerHome')
            <script src="{{ asset('js/jquery.min.js') }}" type="text/jscript"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/slick.js') }}"></script>
            <script src="{{ asset('js/fancybox.umd.js') }}"></script>
            <script src="{{ asset('js/custom.js') }}"></script>
            
            <script type="text/javascript">
                $('#showLeft').click(function(){
                $(this).toggleClass('open');
                $(".nav").slideToggle();
            });
            </script>
    </body>

    </html>

  
 
