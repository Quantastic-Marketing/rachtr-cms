<!DOCTYPE html>
<html>
<head>
        <meta name="google-site-verification" content="LLHnCxL0ply51MwNKvI7mbYW7yFJQ1GK6g_DrijdgMU" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="msvalidate.01" content="8C0F176F0755630859963DA6D5140F0A" />
        @php
            $seo = $page->seo ?? (object)[];
            $seoTitle = $seo->title ?? config('app.name');
            $seoDescription = $seo->description ?? 'Rachtr';
            $seoAuthor = $seo->author ?? 'Rachtr';
            $canonicalUrl = $seo->canonical_url ?? url()->current();
            $seoImage = $seo->image ?? asset('images/favicon_img.webp');
            $metaData = json_decode($seo->meta ?? '{}', true);
            $focusKeywords = isset($metaData['focus_keywords']) ? implode(', ', $metaData['focus_keywords']) : 'rachtr';
            $robots = $seo->robots ?? 'not specified';

            $currentPath = request()->path();
        @endphp
        <title>{{ $seoTitle }}</title>
            <meta name="description" content="{{ $seoDescription }}">
            <meta name="author" content="{{ $seoAuthor }}">
            <meta name="keywords" content="{{ $focusKeywords }}">
            <link rel="canonical" href="{{ $canonicalUrl }}">
            <meta name="robots" content="{{ $robots }}">
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

            <meta name="csrf-token" content="{{ csrf_token() }}">

            

            @if(request()->is('/'))
                <link rel="preload" as="image" href="https://www.rachtr.com/images/about-RachTr-780.webp" imagesrcset="https://www.rachtr.com/images/about-RachTr-499.webp 499w, https://www.rachtr.com/images/about-RachTr-780.webp 768w" imagesizes="(max-width: 499px) 45vw, 
                                    (max-width: 780px) 55vw, 
                                    1299px" type="image/webp">  
            @endif
                            <!-- Preload Google Fonts (critical for typography) -->
                <!-- <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap"></noscript> -->

                <!-- Preload Font Awesome (if used above the fold) -->
                <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
                <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></noscript>
                <script  src="{{ asset('js/jquery.min.js') }}" type="text/jscript" defer></script>
                <script defer src="{{ asset('js/slick.js') }}"></script>
                
            @vite([
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/bootstrap.min.css',
                'resources/css/jquery.fancybox.min.css',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/css/style.css',
                'resources/css/responsive.css',
                'resources/css/product-template.css',
                'resources/css/puFloor.css',
                'resources/css/contractual.css',
                'resources/css/architect.css',
                'resources/css/aboutus.css',
                'resources/css/uploadCV.css',
                'resources/css/careersStyle.css',
                'resources/css/contact.css',
                'resources/css/epoxyIndustry.css',
                'resources/css/allProduct.css',
                'resources/css/search.css',
                'resources/js/cdn.min.js',
                'resources/js/micromodal.min.js',
                'resources/js/customTab.js',
                'resources/js/header.js',
                'resources/js/forms.js'

            ])

            @if(request()->is('*epoxy-flooring*'))
                @vite([
                    'resources/css/epoxy.css',
                    'resources/css/epoxyCost.css'
                    ])
            @endif


        <script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"Rachtr","alternateName":"Rachtr","url":"https://www.rachtr.com/","logo":"https://static.wixstatic.com/media/386348_1185cc80ad414f0b866b359f72e3844b~mv2.png/v1/fill/w_108,h_40,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Asset%201%20copy.png","sameAs":["https://www.instagram.com/rachtr_/","https://www.facebook.com/rachtr1","https://www.linkedin.com/company/13608620/admin/dashboard/","https://www.youtube.com/@rachtrchemicals7185"]}</script>
  
        @if (!empty($page->schema_data) && is_array($page->schema_data))
            @foreach ($page->schema_data as $schemaItem)
                @if (isset($schemaItem['schema']))
                    <script type="application/ld+json">
                        {!! $schemaItem['schema'] !!}
                    </script>
                @endif
            @endforeach
        @endif
        <link rel="shotcut icon" type="image/x-icon" href="{{ asset('images/favicon_img.webp') }}">
        <!-- Google Tag Manager -->
        <script async defer>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-MZ869XPN');
        </script>
        <!-- End Google Tag Manager -->
         <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-FZT2PX2KST"></script>
        <script async defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-FZT2PX2KST');
        </script>



    </head>

    <body  x-data="{ query: new URLSearchParams(window.location.search).get('query') || '' }">
        
    <meta name="google-site-verification" content="LLHnCxL0ply51MwNKvI7mbYW7yFJQ1GK6g_DrijdgMU" />
        
            @include('CommonTemplates.headerHome')

            <!-- Success Modal -->
<div class="modal micromodal-slide" id="success-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true">
            <header class="modal__header">
                <h2 class="modal__title">Success</h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content">
                <p id="success-message" >Form submitted successfully!</p>
            </main>
            <footer class="modal__footer">
                <button class="modal__btn" data-micromodal-close>Close</button>
            </footer>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal micromodal-slide" id="error-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true">
            <header class="modal__header">
                <h2 class="modal__title">Error</h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content">
                <p id="error-message">Something went wrong. Please try again.</p>
            </main>
            <footer class="modal__footer">
                <button class="modal__btn" data-micromodal-close>Close</button>
            </footer>
        </div>
    </div>
</div>
            
            @if(request()->is('*product-page*'))
               @includeIf('Templates.Product.'.$template,['product'=> $page])
            @elseif(request()->is('*product-lists*'))
               @includeIf('Templates.search',['products'=>$products,'blogs'=>$blogs,'categories'=>$categories])
            @elseif(request()->is('*category*'))
                @includeIf('Templates.all-products')
            @else
                @includeIf($templatePath,['page'=> $page])
            @endif

            @include('CommonTemplates.footerHome')

            <!-- External CDN scripts (Vite doesn’t handle these) -->
           
            
    

            
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ869XPN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

    </body>

    </html>

  
 
