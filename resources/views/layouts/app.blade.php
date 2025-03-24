
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        @php
            $seo = $page->seo ?? (object)[];
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

            <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" as="style">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <!--<link rel="stylesheet" href="css/hover-min.css" type="text/css">-->
            <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" type="text/css">
            <link rel="stylesheet" href="{{ asset('css/slick.css')}}" type="text/css">
            <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
            <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
            <link  href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
            <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet">
            @php
                $styles = [];
                switch (true) {
                    case str_contains($currentPath, 'product-page'):
                        $styles[] = 'css/product-template.css';
                        break;
                    case str_contains($currentPath, 'architect-center'):
                        $styles[] = 'css/architect.css';
                        break;
                    case str_contains($currentPath, 'contractor-center'):
                        $styles[] = ['css/puFloor.css', 'css/contractual.css', 'css/architect.css'];
                        break;
                    case str_contains($currentPath, 'about-us') || str_contains($currentPath, 'support-center'):
                        $styles[] = 'css/aboutus.css';
                        break;
                    case str_contains($currentPath, 'upload-cv'):
                        $styles[] = 'css/uploadCV.css';
                        break;
                    case str_contains($currentPath, 'careers'):
                        $styles[] = 'css/careersStyle.css';
                        break;
                    case str_contains($currentPath, 'contact-us'):
                        $styles[] = ['css/puFloor.css', 'css/contractual.css', 'css/contact.css'];
                        break;
                    case !empty($page->content['is_product_list']) && $page->content['is_product_list'] == 1:
                        $styles[] = 'css/epoxyIndustry.css';
                        break;
                    case str_contains($currentPath, 'pu-flooring'):
                        $styles[] = ['css/epoxy.css', 'css/epoxyCost.css', 'css/puFloor.css'];
                        break;
                    case str_contains($currentPath, 'epoxy-flooring-services'):
                        $styles[] = 'css/epoxy.css';
                        break;
                    case str_contains($currentPath, 'epoxy-flooring-cost-price'):
                        $styles[] = ['css/epoxy.css', 'css/epoxyCost.css'];
                        break;
                }
            @endphp

            @foreach ((array)$styles as $style)
                @if(is_array($style))
                    @foreach ($style as $s)
                        <link rel="stylesheet" href="{{ asset($s) }}">
                    @endforeach
                @else
                    <link rel="stylesheet" href="{{ asset($style) }}">
                @endif
            @endforeach

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
        <link rel="shotcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
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

<meta name="google-site-verification" content="CH-Fx7-BhdxpR3zCWKu8yDohtQt5iGrXBd4oDnjFdHs" />

    </head>

    <body>
        
            @include('CommonTemplates.headerHome')
            
            @if(request()->is('*product-page*'))
               @includeIf('Templates.Product.'.$template,['product'=> $page])
            @else
                @includeIf($templatePath,['page'=> $page])
            @endif

            @include('CommonTemplates.footerHome')
            <script defer src="{{ asset('js/jquery.min.js') }}" type="text/jscript"></script>
            <script defer src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
            @if(empty($page->content['is_product_list']))
                <script defer src="{{ asset('js/slick.js') }}"></script>
                <script defer src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
                <script defer src="{{ asset('js/custom.js') }}"></script>
            @endif
            
            <script defer type="text/javascript">
                $('#showLeft').click(function(){
                $(this).toggleClass('open');
                $(".nav").slideToggle();
            });
            </script>

            
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZ869XPN"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <meta name="google-site-verification" content="CH-Fx7-BhdxpR3zCWKu8yDohtQt5iGrXBd4oDnjFdHs" />
    </body>

    </html>

  
 
