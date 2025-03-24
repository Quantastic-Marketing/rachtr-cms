<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <title>{{ $page->seo->title }}</title>

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
        <meta property="og:image" content="{{ $page->seo->image ? asset($page->image) : asset('images/default-image.jpg') }}">
        <meta property="og:url" content="{{ $page->seo->canonical_url ?? url()->current() }}">
        <meta property="og:type" content="website">

        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->seo->title ?? config('app.name') }}">
        <meta name="twitter:description" content="{{ $page->seo->description ?? 'Rahctr' }}">
        <meta name="twitter:image" content="{{ $page->seo->image ? asset($page->image) : asset('images/default-image.jpg') }}">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="css/hover-min.css" type="text/css">-->
        <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/slick.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/fancybox.css')}}"/>
        <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
        <link  href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" type="text/css" rel="stylesheet">
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
    <!-- This is a wrapper open -->
    <div class="wrapper"> 
      <!-- This is a header open -->
        @includeIf('CommonTemplates.headerHome')

       <!-- This is a header close -->
       <!-- This is a banner open -->
       <div class="bnr_sldr">
           <div class="row g-0">
           <div class="banr col-lg-12">                     
              <div class="item">
                  <div class="banner-sec">
                      <video width="100%" height="100%" autoplay muted loop class="desktop">
                            <source id="#movie1" src="videos/file-1.mp4" type="video/mp4">
                      </video>
                      <div class="banner_overlay col-lg-12">
                         <div class="content">
                             <div class="container">
                                 <div class="content-details ms-0">
                                      <h2>Building Communities, Brick by Brick</h2>
                                      <p>RachTR empowers builders, architects, and artisans with high-performance coatings and adhesives. Together, we're shaping India's built environment.</p>
                                      <p class="pt-0"><span class="wht">#Rach</span><span class="org">TRibe</span></p> 
                                 </div>
                                 <div class="content-list ms-0">
                                    <ul>
                                        <li><a href="#">⦿ Residential & Commercial Buildings</a></li>
                                        <li><a href="#">⦿ Stone Processing Industry</a></li>
                                        <li><a href="#">⦿ Industrial Flooring</a></li>
                                     </ul>
                                 </div>
                             </div> 
                         </div>
                     </div>
                 </div> 
               </div>
               <div class="item">
                  <div class="banner-sec"> 
                      <video width="100%" height="100%" autoplay muted loop class="desktop">
                            <source id="#movie1" src="videos/file-2.mp4" type="video/mp4">
                      </video>
                      <div class="banner_overlay col-lg-12">
                         <div class="content">
                             <div class="container">
                                 <div class="content-details ms-0">
                                      <h2><span class="org">RachTR,</span><br/>World-Class Quality, <br/>Made for Local Conditions</h2>
                                      <p>Coatings & Adhesives Designed for<br/> Diverse Conditions</p>
                                 </div>
                                 <div class="content-list ms-0">
                                    <ul>
                                        <li><a href="#">⦿ Residential & Commercial Buildings</a></li>
                                        <li><a href="#">⦿ Stone Processing Industry</a></li>
                                        <li><a href="#">⦿ Industrial Flooring</a></li>
                                     </ul>
                                 </div>
                             </div> 
                         </div>
                     </div>
                  </div>  
               </div>
               <div class="item">
                  <div class="banner-sec"> 
                      <video width="100%" height="100%" autoplay muted loop class="desktop">
                            <source id="#movie1" src="videos/file-3.mp4" type="video/mp4">
                      </video>
                      <div class="banner_overlay col-lg-12">
                         <div class="content">
                             <div class="container">
                                 <div class="content-details ms-0">
                                      <h2>Built on Trust</h2>
                                      <p>RachTR is your trusted partner for construction and industrial<br/> solutions. Made for diverse conditions.</p>
                                      <p class="pt-0"><span class="wht">#Rach</span><span class="org">TRust</span></p> 
                                 </div>
                                 <div class="content-list ms-0">
                                    <ul>
                                        <li><a href="#">⦿ Residential & Commercial Buildings</a></li>
                                        <li><a href="#">⦿ Stone Processing Industry</a></li>
                                        <li><a href="#">⦿ Industrial Flooring</a></li>
                                     </ul>
                                 </div>
                             </div> 
                         </div>
                     </div>
                  </div>  
               </div>
               <div class="item">
                  <div class="banner-sec"> 
                      <video width="100%" height="100%" autoplay muted loop class="desktop">
                            <source id="#movie1" src="videos/file-4.mp4" type="video/mp4">
                      </video>
                      <div class="banner_overlay col-lg-12">
                         <div class="content">
                             <div class="container">
                                 <div class="content-details ms-0">
                                      <h2>Innovating for the Future, At the Forefront</h2>
                                      <p>RachTR is at the forefront of construction technology, developing solutions for the future of Indian infrastructure.</p>
                                      <p class="pt-0"><span class="wht">#Rach</span><span class="org">TRend</span></p> 
                                 </div>
                                 <div class="content-list ms-0">
                                    <ul>
                                        <li><a href="#">⦿ Residential & Commercial Buildings</a></li>
                                        <li><a href="#">⦿ Stone Processing Industry</a></li>
                                        <li><a href="#">⦿ Industrial Flooring</a></li>
                                     </ul>
                                 </div>
                             </div> 
                         </div>
                     </div>
                  </div>  
               </div>
             </div>
            
           </div>
       </div>
      <!-- This is a banner close -->
      <!-- This is a section-1 open -->
        <section class="about_techTr py-5">
            <div class="container">
               <div class="row g-0">
                   <div class="col-lg-4">
                       <div class="about_techTr_img">
                           <img src="images/about-RachTr.jpg"/>
                       </div>
                   </div>
                   <div class="col-lg-6 ps-0">
                       <div class="about_techTr_content">
                            <h1 class="pb-3">About <span class="org">RachTR</span></h1>
                            <p>At RachTR, we specialize in developing, manufacturing, and selling coatings and <span>marble tile adhesives</span> for construction and industrial sectors.</p>
                           <p>We also provide <span>industrial epoxy flooring services</span> cater to diverse sectors, including Automobile, Pharmaceutical, Electronics, Food & Beverages, Metal Fabrication, Chemical, and Warehouses & Godowns.</p>
                           <p>Since 2013, our pioneering efforts have focused on revolutionizing products tailored for Indian conditions, ensuring optimal performance and customer satisfaction.</p>
                           <p><span class="text-decoration-none">At RachTR, we believe in 3 principles:</span></p>
                           
                           <div class="thr_principles">
                               <div class="thr_principles_dtl">
                                   <div class="thr_principles-icon rounded me-5">
                                       <span><svg preserveAspectRatio="xMidYMid meet" data-bbox="25.502 49.499 148.998 101.005" viewBox="25.502 49.499 148.998 101.005" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lw63kkaf svg [data-color="1"] {fill: #000000;}#comp-lw63kkaf svg [data-color="2"] {fill: #EF6E25;}</style></defs>
                                        <g>
            <path d="M150.812 98.779a2.692 2.692 0 0 0-3.758.626l-7.272 10.193-13.538-9.249a9.477 9.477 0 0 0-.258-.169c-1.316-.975-16.082-11.899-27.309-19.416.356-1.162-.013-2.489-1.048-3.157a2.695 2.695 0 0 0-3.909 1.111l-9.112 16.9c-.46.851-1.319 1.161-1.79 1.269-.931.212-1.988.05-2.901-.444l-.294-.16c-.916-.496-1.631-1.294-1.962-2.189-.168-.454-.381-1.344.078-2.195l8.819-16.345a.041.041 0 0 1 .023-.02l10.686-4.002a5.38 5.38 0 0 1 2.158-.335l18.195.92.006.001 12.122 2.163a2.7 2.7 0 0 0 3.156-2.417c.132-1.43-.988-2.68-2.4-2.932l-12.098-2.159-.345-.039-20.034-1.012a2.77 2.77 0 0 0-1.079.167l-13.15 4.924c-.51.191-.956.529-1.27.975-.177.251-.34.513-.488.788l-.264.489c-4.956-.321-12.9-1.405-12.986-1.417a2.689 2.689 0 0 0-3.035 2.308c-.202 1.478-4.617 2.25 2.303 3.041.307.035 6.038.821 10.916 1.261l-5.975 11.075c-1.073 1.988-1.215 4.407-.391 6.638.791 2.139 2.372 3.938 4.451 5.063l.293.159a9.716 9.716 0 0 0 4.623 1.19c.687 0 1.373-.076 2.046-.231 2.313-.531 4.255-1.975 5.328-3.963l6.807-12.616c11.522 7.743 26.555 18.898 26.716 19.018.07.051.141.1.216.144l15.837 10.814a2.937 2.937 0 0 1 1.232 1.897 2.943 2.943 0 0 1-.455 2.216l-.164.241a2.954 2.954 0 0 1-4.106.778l-15.707-10.73a2.686 2.686 0 0 0-3.743.71 2.7 2.7 0 0 0 .708 3.75l12.233 8.356c.141.156.296.303.477.427a2.937 2.937 0 0 1 1.232 1.897 2.943 2.943 0 0 1-.455 2.216l-.164.241c-.918 1.35-2.759 1.697-4.163.741l-13.66-8.828a2.689 2.689 0 0 0-3.724.805 2.702 2.702 0 0 0 .804 3.731l11.184 7.227c.153.18.322.35.527.489a2.937 2.937 0 0 1 1.232 1.897 2.943 2.943 0 0 1-.455 2.216l-.164.241a2.958 2.958 0 0 1-4.117.771l-11.008-7.436a2.69 2.69 0 0 0-3.74.729 2.703 2.703 0 0 0 .727 3.747l7.434 5.022c.165.208.352.402.583.56a2.937 2.937 0 0 1 1.232 1.897 2.943 2.943 0 0 1-.455 2.216l-.164.241c-.919 1.348-2.76 1.698-4.094.787l-9.857-6.808 2.053-2.921c2.324-3.307 1.53-7.892-1.771-10.222l-.624-.44a7.273 7.273 0 0 0-2.454-1.109c.622-3.053-.552-6.33-3.253-8.236l-.688-.486a7.988 7.988 0 0 0-5.154-1.449c-.01-.066-.013-.133-.025-.199a8.297 8.297 0 0 0-3.406-5.404l-.24-.17c-2.9-2.046-6.662-1.967-9.449-.098-.473-.68-1.047-1.305-1.761-1.809l-.624-.44a7.25 7.25 0 0 0-5.466-1.224 7.264 7.264 0 0 0-4.735 2.998l-1.251 1.78-5.385-7.97c-6.868-10.67-2.509-1.557-3.741-.722a2.702 2.702 0 0 0-.721 3.748l6.529 9.664-3.307 4.704a7.296 7.296 0 0 0-1.222 5.477 7.285 7.285 0 0 0 2.993 4.744l.625.441a7.235 7.235 0 0 0 3.437 1.277c.053 2.57 1.272 5.083 3.526 6.673l.236.167a8.254 8.254 0 0 0 4.778 1.521c.481 0 .967-.042 1.452-.126a8.49 8.49 0 0 0 1.292-.34 8.026 8.026 0 0 0 2.803 3.529l.688.486a7.985 7.985 0 0 0 4.619 1.47c.235 0 .471-.041.707-.061.389 1.703 1.356 3.28 2.89 4.363l.626.442a7.27 7.27 0 0 0 4.204 1.335 7.315 7.315 0 0 0 5.997-3.109l2.72-3.869 9.913 6.847a8.292 8.292 0 0 0 4.687 1.449 8.336 8.336 0 0 0 6.905-3.647l.164-.241a8.315 8.315 0 0 0 1.409-3.934c.342.043.686.075 1.028.075a8.336 8.336 0 0 0 6.905-3.647l.164-.241a8.329 8.329 0 0 0 1.446-4.637 8.333 8.333 0 0 0 6.81-3.641l.164-.241a8.294 8.294 0 0 0 1.402-3.837c.344.044.69.078 1.04.078.524 0 1.051-.049 1.577-.149a8.282 8.282 0 0 0 5.343-3.497l.164-.241a8.313 8.313 0 0 0 1.298-6.261 8.358 8.358 0 0 0-1.49-3.414l7.477-10.48a2.71 2.71 0 0 0-.627-3.77zm-90.018 24.84a1.912 1.912 0 0 1-1.193.732 1.914 1.914 0 0 1-1.443-.32l-.625-.441a1.922 1.922 0 0 1-.786-1.253 1.92 1.92 0 0 1 .319-1.445l7.876-11.204a1.92 1.92 0 0 1 1.25-.788 1.904 1.904 0 0 1 1.444.32l.624.44a1.935 1.935 0 0 1 .545 2.56l-8.011 11.399zm8.681 7.814a2.929 2.929 0 0 1-1.911 1.206 2.946 2.946 0 0 1-2.207-.491l-.236-.167a2.967 2.967 0 0 1-.715-4.125l.748-1.065c.032-.043.073-.076.103-.12l7.876-11.204c.03-.042.046-.09.074-.132l2.145-3.051a2.93 2.93 0 0 1 1.912-1.206c.174-.03.347-.045.52-.045.603 0 1.187.183 1.682.533l.241.17a2.967 2.967 0 0 1 .714 4.125l-10.946 15.572zm10.628 5.136a2.66 2.66 0 0 1-1.734 1.093 2.652 2.652 0 0 1-1.999-.443l-.689-.486a2.692 2.692 0 0 1-.648-3.741l9.527-13.554a2.678 2.678 0 0 1 3.732-.65l.689.486a2.692 2.692 0 0 1 .648 3.741v-.001l-9.526 13.555zm15.679-4.809l-7.876 11.204a1.933 1.933 0 0 1-2.693.469l-.625-.442a1.943 1.943 0 0 1-.468-2.699l7.876-11.204a1.923 1.923 0 0 1 1.251-.788 1.904 1.904 0 0 1 1.443.32l.624.44a1.944 1.944 0 0 1 .468 2.7z" fill="#0E4828" data-color="1"></path>
            <path d="M174.3 96.518l-31.78-46.522a1.138 1.138 0 0 0-1.585-.297l-16.671 11.433a1.144 1.144 0 0 0-.297 1.588l31.781 46.522a1.138 1.138 0 0 0 1.585.297l16.671-11.433a1.144 1.144 0 0 0 .296-1.588z" fill="#E98866" data-color="2"></path>
            <path d="M72.839 61.978l-17.496-10.12a1.137 1.137 0 0 0-1.557.418l-28.133 48.823a1.147 1.147 0 0 0 .417 1.56l17.496 10.12a1.135 1.135 0 0 0 1.558-.417l28.133-48.823a1.147 1.147 0 0 0-.418-1.561z" fill="#E98866" data-color="2"></path>
            <path fill="#0E4828" d="M44.723 97.769a4.15 4.15 0 0 1-4.146 4.154 4.15 4.15 0 0 1-4.146-4.154 4.15 4.15 0 0 1 4.146-4.154 4.15 4.15 0 0 1 4.146 4.154z" data-color="1"></path>
            <path fill="#0E4828" d="M163.157 94.395a4.15 4.15 0 0 1-4.146 4.154 4.15 4.15 0 0 1-4.146-4.154 4.15 4.15 0 0 1 4.146-4.154 4.15 4.15 0 0 1 4.146 4.154z" data-color="1"></path>
        </g>
                                        </svg></span>
                                   </div>
                                   <div class="thr_principles-contnt">
                                      <p><span class="org text-decoration-none">TRust</span>: For reliable construction and industrial solutions, made for diverse Indian conditions.</p>
                                   </div>
                               </div>
                               <div class="thr_principles_dtl">
                                   <div class="thr_principles-icon rounded me-5">
                                       <span><svg preserveAspectRatio="xMidYMid meet" data-bbox="28.9 20.1 142.017 160" viewBox="28.9 20.1 142.017 160" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lw63kpu1 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M100.1 87.6c7.1 0 12.9-5.8 12.9-12.9s-5.8-12.9-12.9-12.9c-7.1 0-12.9 5.8-12.9 12.9s5.8 12.9 12.9 12.9zm0-18.6c3.2 0 5.7 2.5 5.7 5.7s-2.5 5.7-5.7 5.7-5.7-2.5-5.7-5.7 2.5-5.7 5.7-5.7z" fill="#d9e021" data-color="1"></path>
        <path d="M132.6 89.6H67.3c-2.7.1-4.5 3.2-2.7 5.7.7 1 1.8 1.5 3 1.5h65.1c1.8 0 3.7-1.6 3.7-3.6 0-1-.3-1.8-1-2.6-.9-.6-1.7-1-2.8-1z" fill="#d9e021" data-color="1"></path>
        <path d="M167.5 89.6h-5.6c-.5-26-17.2-48.6-42-57v-8.9c0-2-1.6-3.6-3.6-3.6H83.6c-2 0-3.6 1.6-3.6 3.6v9c-24.7 8.4-41.5 31.1-42 56.9h-5.5c-2 0-3.6 1.6-3.6 3.6v13.6c0 2 1.6 3.6 3.6 3.6h134.8c2 0 3.6-1.6 3.6-3.6V93.2c.2-2-1.4-3.6-3.4-3.6zm-3.8 13.6H36.2v-6.4h11.4c.9 0 1.9-.3 2.5-1 .7-.6 1.1-1.6 1.1-2.5 0-2-1.6-3.6-3.6-3.6H46c.5-21.7 14-41.1 34.2-48.9v15.7c0 1 .3 1.8 1 2.5.6.7 1.6 1.1 2.5 1.1h.1c2 0 3.5-1.6 3.5-3.6V27.2H96v23.2h8V27.2h8.8v29.2c0 2 1.6 3.6 3.5 3.6 2.1 0 3.6-1.6 3.6-3.6V40.8c20.1 7.9 33.7 27.2 34.2 48.8H152c-2.1.1-3.6 1.6-3.6 3.6s1.6 3.6 3.6 3.6h11.8l-.1 6.4z" fill="#d9e021" data-color="1"></path>
        <path d="M155.7 117.6H44.5c-1.9 0-3.4 1.5-3.4 3.4 0 32.6 26.5 59.1 59 59.1s59.1-26.5 59-59.1c0-1.9-1.5-3.4-3.4-3.4zm-55.6 55.8c-27.6 0-50.3-21.5-52-48.6h104c-1.8 27.1-24.4 48.6-52 48.6z" fill="#d9e021" data-color="1"></path>
    </g>
</svg></span>
                                   </div>
                                   <div class="thr_principles-contnt">
                                      <p><span class="org text-decoration-none">TRibe</span>: Empowering builders and artisans with high-performance coatings and adhesives.</p>
                                   </div>
                               </div>
                               <div class="thr_principles_dtl">
                                   <div class="thr_principles-icon rounded me-5">
                                       <span><svg preserveAspectRatio="xMidYMid meet" data-bbox="10 20.5 180.1 159" viewBox="10 20.5 180.1 159" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lw63kvoj svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M187.5 174.1H171V76.7c0-4.4-2.5-8-7-8h-37.5V28.5c0-4.4-3.6-8-8.1-8H59.5c-4.4 0-8 3.6-8 8v17H37.1c-4.4 0-8 3.6-8 8v120.6H12.7c-1.5 0-2.7 1.2-2.7 2.7 0 1.5 1.2 2.7 2.7 2.7h174.9c1.4 0 2.5-1.3 2.5-2.7-.1-1.4-1.3-2.7-2.6-2.7zm-121.8 0H53.2v-22.3h12.5v22.3zm18.7 0H71.3V149c0-1.4-1.2-2.5-2.5-2.5H50.4c-1.4 0-2.5 1.2-2.5 2.5v25.2H34.4V52.9c0-1.6 1.3-2.9 3-2.9h44.2c1.6 0 3 1.3 3 2.9l-.2 121.2zm-3-128.6H55.9V28.8c0-1.6 1.3-2.9 3-2.9h60.3c1.6 0 3 1.3 3 2.9v19.4h-35c-1.5-1.6-3.6-2.7-5.8-2.7zm40.6 7.2V67H89V52.7h33zM106.8 175H89v-63.4h17.9c-.1 0-.1 63.4-.1 63.4zm0-68.7H89V92h17.9c-.1 0-.1 14.3-.1 14.3zm0-29.9v10.2H89V72.3h19c-.7 1.2-1.2 2.6-1.2 4.1zm59.9 97.7h-55.3v-98c0-1.6 1.3-2.9 3-2.9h49.5c1.6 0 3 1.3 3 2.9l-.2 98z" fill="#353f69" data-color="1"></path>
        <path d="M64.2 60.7h-9.6c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.6c0-.7-.7-1.4-1.5-1.4z" fill="#353f69" data-color="1"></path>
        <path d="M64.3 81.2h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.6c0-.7-.6-1.4-1.4-1.4z" fill="#353f69" data-color="1"></path>
        <path d="M64.3 101.8h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.7c0-.6-.6-1.3-1.4-1.3z" fill="#353f69" data-color="1"></path>
        <path d="M64.3 122.3h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.6c0-.7-.6-1.4-1.4-1.4z" fill="#353f69" data-color="1"></path>
        <path d="M154.6 85.7h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4V87c.1-.7-.6-1.3-1.4-1.3z" fill="#353f69" data-color="1"></path>
        <path d="M134 85.7h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.6c.1-.8-.6-1.4-1.4-1.4z" fill="#353f69" data-color="1"></path>
        <path d="M154.6 107.1h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.7c.1-.5-.6-1.3-1.4-1.3z" fill="#353f69" data-color="1"></path>
        <path d="M134 107.1h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.7c.1-.5-.6-1.3-1.4-1.3z" fill="#353f69" data-color="1"></path>
        <path d="M154.6 129.5h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.7c.1-.7-.6-1.3-1.4-1.3z" fill="#353f69" data-color="1"></path>
        <path d="M134 129.5h-9.7c-.8 0-1.4.6-1.4 1.4v9.6c0 .8.6 1.4 1.4 1.4h9.7c.8 0 1.4-.6 1.4-1.4v-9.6c.1-.8-.6-1.4-1.4-1.4z" fill="#353f69" data-color="1"></path>
    </g>
</svg></span>
                                   </div>
                                   <div class="thr_principles-contnt">
                                      <p><span class="org text-decoration-none">TRend</span>: Pioneering innovative solutions for India's future infrastructure.</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </section>
      <!-- This is a section-1 close -->
        
     <!-- This is a section-2 open -->
        <section class="our_strengths py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="our_strengths_contnt">
                            <h1 class="pb-3">Our <span class="org">Strengths</span></h1>
                            <p>At RachTR, we are dedicated to providing top-notch services tailored to meet your needs. Our team of experts is committed to delivering exceptional results and ensuring your satisfaction.</p>
                            <p>With our extensive experience and dedication to excellence, you can trust us to handle any project, big or small.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="any_projects pt-5">
                            <ul class="col-lg-12 col-md-12 col-sm-12">
                                <li class="col-lg-4 col-md-4 col-sm-12">
                                  <div class="projects_blogs">
                                      <div class="projects_img pb-1">
                                        <img src="images/Innovative%20Research%20&%20Development.jpg"/>
                                      </div>
                                      <div class="projects_txt">
                                        <h6>Innovative Research & Development</h6>
                                        <p>Driven by innovation, our brilliant team is dedicated to developing cutting-edge solutions. </p>
                                      </div>
                                      <div class="blog_tranprnt">
                                          <div class="blogs_icon">
                                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155" viewBox="20 22.5 160 155" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lu9g83n7 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
        <g>
            <path d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z" fill="#FF5200" data-color="1"></path>
        </g>
    </svg>
                                          </div>
                                    </div>      
                                  </div>
                                </li>
                                <li class="col-lg-4 col-md-4 col-sm-12 mx-5">
                                  <div class="projects_blogs">
                                      <div class="projects_img pb-1">
                                        <img src="images/Advanced%20Manufacturing.jpg"/>
                                      </div>
                                      <div class="projects_txt">
                                        <h6>Advanced Manufacturing</h6>
                                        <p>Our advanced manufacturing sets us apart. We're committed to producing high-quality products.</p>
                                      </div>
                                      <div class="blog_tranprnt">
                                          <div class="blogs_icon">
                                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155" viewBox="20 22.5 160 155" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lu9g83n7 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
        <g>
            <path d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z" fill="#FF5200" data-color="1"></path>
        </g>
    </svg>
                                          </div>
                                    </div>
                                  </div>
                                </li>
                                <li class="col-lg-4 col-md-4 col-sm-12">
                                  <div class="projects_blogs">
                                      <div class="projects_img pb-1">
                                        <img src="images/Comprehensive%20Solutions.jpg"/>
                                      </div>
                                      <div class="projects_txt">
                                        <h6>Comprehensive Solutions</h6>
                                        <p>Achieve exceptional results through our informative blog posts & case studies on industries, companies, products, and application tips.</p>
                                      </div>
                                      <div class="blog_tranprnt">
                                          <div class="blogs_icon">
                                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155" viewBox="20 22.5 160 155" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lu9g83n7 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
        <g>
            <path d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z" fill="#FF5200" data-color="1"></path>
        </g>
    </svg>
                                          </div>
                                    </div>
                                  </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <!-- This is a section-2 close -->
    
    <!-- This is a section-3 open -->
      <section class="intive_res_dev py-5">
          <div class="container">
              <div class="row g-0">
                  <div class="col-lg-12">
                      <div class="res_dev_contnt col-lg-10 col-md-12">
                         <h2>Innovative Research & Development</h2>
                         
                          <div class="row g-0">
                               <div class="res_dev_txt col-lg-8 col-md-8 col-sm-12 mx-0 pt-4">  
                                    <p>At RachTR, we are relentless in our pursuit of innovation. Our team of brilliant minds is dedicated to developing solutions. We are proud to unveil our latest advancements in:</p>
                               </div>
                                <div class="res_dev_btn col-lg-3 col-md-3 col-sm-12 pt-4 me-1">
                                    <a href="https://www.rachtr.com/blog/categories/latest-research-solutions" target="_blank">VIEW ALL</a>
                                </div>
                                <i class="clear"></i>
                             </div>
                      </div>
                      <div class="res_dev_sec py-5">
                         <ul class="padd0">
                            <li class="col-lg-4 mx-3">
                                <div class="letst_advermnt_img">
                                   <img src='images/Tailormade.jpg'/>
                                </div>
                                <div class="letst_advermnt_contnt">
                                   <div class="top_cont">
                                       <span>Aug 30</span>
                                       <sup>.</sup>
                                       <span>5 min read</span>
                                    </div>
                                    <div class="btm_cont">
                                       <h5><strong>Tailormade Solutions for Stone/Marble Processing</strong></h5>
                                    </div>
                                </div>
                            </li>
                             <li class="col-lg-4 mx-3">
                                <div class="letst_advermnt_img">
                                   <img src='images/Abrasion.jpg'/>
                                </div>
                                <div class="letst_advermnt_contnt">
                                   <div class="top_cont">
                                       <span>Jul 27</span>
                                       <sup>.</sup>
                                       <span>5 min read</span>
                                    </div>
                                    <div class="btm_cont">
                                       <h5><strong>Abrasion Resistant Epoxy Flooring Top Coats</strong></h5>
                                    </div>
                                </div>
                            </li>
                             <li class="col-lg-4 mx-3">
                                <div class="letst_advermnt_img">
                                   <img src='images/Perfect-White-Marble.jpg'/>
                                </div>
                                <div class="letst_advermnt_contnt">
                                   <div class="top_cont">
                                       <span>May 15</span>
                                       <sup>.</sup>
                                       <span>5 min read</span>
                                    </div>
                                    <div class="btm_cont">
                                       <h5><strong>Perfect White Marble Installation Methodology & Products</strong></h5>
                                    </div>
                                </div>
                            </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>    
    <!-- This is a section-3 close -->    
    <!-- This is a section-4 open -->  
     <section class="advce_manufrng">
        <div class="row g-0">
           <div class="col-lg-4">
              <div class="advce_manufrng_contnt">
                 <h2>Advanced Manufacturing</h2>
                  <p><strong>At RachTR,</strong> our advanced manufacturing capabilities set us apart in the industry.</p>
                  <p>We are committed to <strong>producing high-quality products</strong> that meet the stringent demands of our clients across various sectors.</p>
                  <p>Here’s a closer look at what makes our manufacturing processes exceptional:</p>
               </div> 
           </div>
           <div class="col-lg-8">
               <div class="advce_manufrng_vdo">
                    <video width="100%" height="100%" autoplay muted loop class="desktop">
                        <source id="#movie1" src="videos/Advanced-Manufacturing.mp4" type="video/mp4">
                  </video>
               </div>
           </div>
        </div>
     </section>   
    <!-- This is a section-4 close --> 
    <!-- This is a section-5 poen -->
    <section class="advce_manufrng_steps">
       <div class="row g-0">
           <div class="item-slidr col-lg-12 py-5">
               <div class="container">
                  <ul class="multiple-items mb-0 pb-2">
                      <li class="col-lg-4 px-4">
                         <div class="icon">
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="30.195 14.9 239.353 255.4" viewBox="30.195 14.9 239.353 255.4" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lwor8oqk svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
    <g>
        <path d="M138.1 14.9c2.9.9 5.7 1.6 8.6 2.6 21.5 7.2 35.7 26.1 36.9 48.9.2 3.2.2 6.4.1 9.6-.1 4.7.5 9 2.8 13.5 4.7 9.1-.5 20.6-10.2 24.1-1.8.6-3.6 1-5.6 1.6-1.9 10-6.2 18.5-13.9 25.3-.9.8-1.4 2.6-1.4 4-.2 3.2-.1 6.4-.1 10.1 7.6 3 15.1 5.9 22.6 8.8 3.6-2.9 6.6-6.2 10.3-8.2 5.6-3.1 11.6-5.3 17.5-7.8 2.6-1.1 5.5-1.4 6.5 2s-1.4 4.3-4.2 5.4c-5.4 2.1-11.1 4-15.9 7.2-15.9 10.8-22.5 30.3-17.1 48.5 5.3 18 21.2 30.6 40 31.7 18.9 1.1 36.3-9.9 43.5-27.6 9.8-24-3.5-51.7-28.5-58.9-1.4-.4-2.9-.8-4.3-1.3-2.2-.8-3.6-2.3-2.9-4.7.7-2.6 2.6-3.3 5.3-2.7 8.8 2.1 16.8 5.8 23.6 11.8 29.9 26.3 20.8 74.5-16.6 88.2-3.4 1.3-5 2.8-4.6 6.5.2 1.9 0 3.8.1 5.7.2 5-1.5 8.9-6.2 11.1H36c-4.4-3.1-5.9-7.4-5.8-12.7.2-14.8 0-29.5.1-44.3 0-19.6 8.9-32.6 27-39.7 14.6-5.7 29.3-11.3 43.9-17.1 1.7-.6 3.7-1.6 4.4-3 1.9-3.8-.1-11.3-3.6-14.3-5.9-5.2-9.7-11.7-11.4-19.2-.8-3.7-2.4-5.2-5.9-6.2-10.5-3.1-16-14.8-11.1-23.9 2.3-4.3 2.9-8.4 2.8-13-.1-3.8-.2-7.6.1-11.3 1.9-23 13.9-38.6 35-47.4 3.4-1.4 7.2-2.2 10.7-3.3h15.9zm-23.5 184.9c-.7.2-1.2.3-1.7.5-6.1 2.6-8.7 1.7-11.9-4.2-.9-1.7-1.7-3.4-2.6-5.1-3.5-6.9-6.9-13.8-10.6-21-11.4 4.5-22.5 8.3-33 13.3-10.4 4.9-16.1 13.9-16.3 25.4-.4 17.4 0 34.8 0 52.2 0 .3.3.6.7 1.2h26.1v-40.6c0-4.9 1.2-7.2 3.8-6.9 4.3.5 3.8 4.1 3.9 7 .1 11.4 0 22.7 0 34.1 0 2 .2 4 .3 6.4h35.2c.3-.9.6-1.4.7-1.9 2.9-17.3 5.8-34.7 8.9-52 .6-3.8-1.1-6.1-3.5-8.4zM97.2 80.9c0 10.8-.4 21 .1 31.1.9 17.5 15.4 30.5 33.2 30.5 17.2 0 31.8-13.9 32.4-31.4.3-10 .2-20 .1-30 0-1.6-.4-3.5-1.4-4.7-3-3.6-6.3-6.9-9.7-10.5-16.7 10.3-34.6 15.4-54.7 15zm-12.7-.5c2.4-1.5 4.4-2.1 5.2-3.4 2.4-3.8 5.9-4.1 9.8-4.3 6.8-.4 13.5-.8 20.2-1.9 9.4-1.5 18-5.5 26.2-10.4 3.6-2.2 7.5-3.9 10.9-.3 5 5.3 9.5 11.1 14.3 16.7 1 1.2 2.5 1.9 4.3 3.3 2.1-21.1-2.8-38.3-20.1-49.6-16.1-10.6-33.4-10.8-49.7-.5-18.1 11.2-23.1 28.8-21.1 50.4zm59.2 181.7c-.2-2-.3-3.7-.6-5.3-.6-3.7-1.2-7.5-1.8-11.2-.4-2.7 0-5.2 3.2-5.6 2.7-.4 4 1.6 4.5 4.1.4 2 .6 4.1 1 6.2.7 4 1.5 8 2.3 11.8H188c0-5.4-.2-10.5.1-15.5.2-3.7-.9-6.2-3.9-8.6-10.3-8.5-16.9-19.5-18.1-32.9-.6-7.2.2-14.6.3-21.4-2.1 4-4.3 8.7-6.9 13.3-2.7 4.9-5.7 5.8-10.9 3.6-.8-.3-1.6-.7-2.1-.9-4.1 3.1-4.1 7-3.2 11 .9 4.6 1.7 9.3 2.5 13.9.4 2.6-.5 4.6-3.3 5-2.5.4-3.8-1.2-4.4-3.5-.2-.9-.3-1.9-.4-2.8-.9-5-1.9-10-2.8-15H126c-3.1 18-6 35.6-9.1 53.7 9.2.1 17.8.1 26.8.1zm-13.3-85.3c4.9-6 9-11.5 13.7-16.7 3.6-4 3.6-8.2 2.5-13.2-10.9 4.4-21.7 3.8-33.3.2.3 3.8-.4 7.3 1.1 9.4 4.8 7 10.4 13.3 16 20.3zm-21.9 17c5.7-4 10.8-7.6 16.2-11.5-5.8-7.1-11.1-13.6-16.4-20.1-4.5 1.8-8.5 3.3-13.1 5.1 4.5 8.9 8.8 17.4 13.3 26.5zm43.9.1c4.6-9.2 8.8-17.7 13.2-26.6-4.8-1.8-8.8-3.4-13.2-5.1-5.4 6.7-10.7 13.2-16.3 20.1 5.4 3.9 10.4 7.4 16.3 11.6zm70.2 57.3c-9.2-1.5-17.7-2.8-26.2-4.2v14.9h26.2v-10.7zM89.1 106.4V87.1c-6.5 1.7-9.3 4.9-9.2 10 .2 5.1 3.1 8.2 9.2 9.3zm32.4 87.8c1.6 7.2 6.8 5.9 11.4 6.1 4.2.1 5.1-2.8 6.5-6.1-3.2-2.1-6.1-4.1-9.1-6.1-3.1 2.2-5.9 4.1-8.8 6.1zm49.8-87.6c6.7-2.1 9.3-5.7 8.8-11.1-.5-4.8-3.4-7.6-8.8-8.4v19.5z" fill="#ef6e25" data-color="1"></path>
        <path d="M256.3 197.5c.6 21.1-16.5 39.4-38.3 39.6-22.9.2-39.1-17.5-39.5-38.2-.4-21.4 16.5-39 38.2-39.6 21.2-.7 39 16.5 39.6 38.2zM217.6 167c-14.9-.2-31.5 10.8-31.3 31.3.2 20.7 16.3 30.6 30.6 30.9 17.2.4 31.7-13.9 31.8-31 .1-16.9-14.1-31.1-31.1-31.2z" fill="#ef6e25" data-color="1"></path>
        <path d="M215.2 201c4-3.9 7.6-7.4 11.2-10.9 1.1-1 2-2.5 3.3-3 1.6-.5 3.8-.8 5-.1 2.1 1.3 1.7 3.7.2 5.4-2.4 2.7-5 5.1-7.6 7.6-2.8 2.8-5.7 5.5-8.5 8.2-2.4 2.4-4.8 2.7-7.4.2-2.5-2.5-5.1-5-7.6-7.6-1.6-1.7-2-3.7-.2-5.5 1.8-1.8 3.8-1.4 5.6.1 1.9 1.6 3.6 3.4 6 5.6z" fill="#ef6e25" data-color="1"></path>
    </g>
</svg>
                         </div>
                         <div class="detls ps-4">
                             <h6>Team of highly trained professionals</h6>
                             <p class="mb-0">in our manufacturing team</p>
                        </div>
                      </li>
                      <li class="col-lg-4 px-4">
                         <div class="icon">
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="30.195 14.9 239.353 255.4" viewBox="30.195 14.9 239.353 255.4" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lwor8oqk svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
    <g>
        <path d="M138.1 14.9c2.9.9 5.7 1.6 8.6 2.6 21.5 7.2 35.7 26.1 36.9 48.9.2 3.2.2 6.4.1 9.6-.1 4.7.5 9 2.8 13.5 4.7 9.1-.5 20.6-10.2 24.1-1.8.6-3.6 1-5.6 1.6-1.9 10-6.2 18.5-13.9 25.3-.9.8-1.4 2.6-1.4 4-.2 3.2-.1 6.4-.1 10.1 7.6 3 15.1 5.9 22.6 8.8 3.6-2.9 6.6-6.2 10.3-8.2 5.6-3.1 11.6-5.3 17.5-7.8 2.6-1.1 5.5-1.4 6.5 2s-1.4 4.3-4.2 5.4c-5.4 2.1-11.1 4-15.9 7.2-15.9 10.8-22.5 30.3-17.1 48.5 5.3 18 21.2 30.6 40 31.7 18.9 1.1 36.3-9.9 43.5-27.6 9.8-24-3.5-51.7-28.5-58.9-1.4-.4-2.9-.8-4.3-1.3-2.2-.8-3.6-2.3-2.9-4.7.7-2.6 2.6-3.3 5.3-2.7 8.8 2.1 16.8 5.8 23.6 11.8 29.9 26.3 20.8 74.5-16.6 88.2-3.4 1.3-5 2.8-4.6 6.5.2 1.9 0 3.8.1 5.7.2 5-1.5 8.9-6.2 11.1H36c-4.4-3.1-5.9-7.4-5.8-12.7.2-14.8 0-29.5.1-44.3 0-19.6 8.9-32.6 27-39.7 14.6-5.7 29.3-11.3 43.9-17.1 1.7-.6 3.7-1.6 4.4-3 1.9-3.8-.1-11.3-3.6-14.3-5.9-5.2-9.7-11.7-11.4-19.2-.8-3.7-2.4-5.2-5.9-6.2-10.5-3.1-16-14.8-11.1-23.9 2.3-4.3 2.9-8.4 2.8-13-.1-3.8-.2-7.6.1-11.3 1.9-23 13.9-38.6 35-47.4 3.4-1.4 7.2-2.2 10.7-3.3h15.9zm-23.5 184.9c-.7.2-1.2.3-1.7.5-6.1 2.6-8.7 1.7-11.9-4.2-.9-1.7-1.7-3.4-2.6-5.1-3.5-6.9-6.9-13.8-10.6-21-11.4 4.5-22.5 8.3-33 13.3-10.4 4.9-16.1 13.9-16.3 25.4-.4 17.4 0 34.8 0 52.2 0 .3.3.6.7 1.2h26.1v-40.6c0-4.9 1.2-7.2 3.8-6.9 4.3.5 3.8 4.1 3.9 7 .1 11.4 0 22.7 0 34.1 0 2 .2 4 .3 6.4h35.2c.3-.9.6-1.4.7-1.9 2.9-17.3 5.8-34.7 8.9-52 .6-3.8-1.1-6.1-3.5-8.4zM97.2 80.9c0 10.8-.4 21 .1 31.1.9 17.5 15.4 30.5 33.2 30.5 17.2 0 31.8-13.9 32.4-31.4.3-10 .2-20 .1-30 0-1.6-.4-3.5-1.4-4.7-3-3.6-6.3-6.9-9.7-10.5-16.7 10.3-34.6 15.4-54.7 15zm-12.7-.5c2.4-1.5 4.4-2.1 5.2-3.4 2.4-3.8 5.9-4.1 9.8-4.3 6.8-.4 13.5-.8 20.2-1.9 9.4-1.5 18-5.5 26.2-10.4 3.6-2.2 7.5-3.9 10.9-.3 5 5.3 9.5 11.1 14.3 16.7 1 1.2 2.5 1.9 4.3 3.3 2.1-21.1-2.8-38.3-20.1-49.6-16.1-10.6-33.4-10.8-49.7-.5-18.1 11.2-23.1 28.8-21.1 50.4zm59.2 181.7c-.2-2-.3-3.7-.6-5.3-.6-3.7-1.2-7.5-1.8-11.2-.4-2.7 0-5.2 3.2-5.6 2.7-.4 4 1.6 4.5 4.1.4 2 .6 4.1 1 6.2.7 4 1.5 8 2.3 11.8H188c0-5.4-.2-10.5.1-15.5.2-3.7-.9-6.2-3.9-8.6-10.3-8.5-16.9-19.5-18.1-32.9-.6-7.2.2-14.6.3-21.4-2.1 4-4.3 8.7-6.9 13.3-2.7 4.9-5.7 5.8-10.9 3.6-.8-.3-1.6-.7-2.1-.9-4.1 3.1-4.1 7-3.2 11 .9 4.6 1.7 9.3 2.5 13.9.4 2.6-.5 4.6-3.3 5-2.5.4-3.8-1.2-4.4-3.5-.2-.9-.3-1.9-.4-2.8-.9-5-1.9-10-2.8-15H126c-3.1 18-6 35.6-9.1 53.7 9.2.1 17.8.1 26.8.1zm-13.3-85.3c4.9-6 9-11.5 13.7-16.7 3.6-4 3.6-8.2 2.5-13.2-10.9 4.4-21.7 3.8-33.3.2.3 3.8-.4 7.3 1.1 9.4 4.8 7 10.4 13.3 16 20.3zm-21.9 17c5.7-4 10.8-7.6 16.2-11.5-5.8-7.1-11.1-13.6-16.4-20.1-4.5 1.8-8.5 3.3-13.1 5.1 4.5 8.9 8.8 17.4 13.3 26.5zm43.9.1c4.6-9.2 8.8-17.7 13.2-26.6-4.8-1.8-8.8-3.4-13.2-5.1-5.4 6.7-10.7 13.2-16.3 20.1 5.4 3.9 10.4 7.4 16.3 11.6zm70.2 57.3c-9.2-1.5-17.7-2.8-26.2-4.2v14.9h26.2v-10.7zM89.1 106.4V87.1c-6.5 1.7-9.3 4.9-9.2 10 .2 5.1 3.1 8.2 9.2 9.3zm32.4 87.8c1.6 7.2 6.8 5.9 11.4 6.1 4.2.1 5.1-2.8 6.5-6.1-3.2-2.1-6.1-4.1-9.1-6.1-3.1 2.2-5.9 4.1-8.8 6.1zm49.8-87.6c6.7-2.1 9.3-5.7 8.8-11.1-.5-4.8-3.4-7.6-8.8-8.4v19.5z" fill="#ef6e25" data-color="1"></path>
        <path d="M256.3 197.5c.6 21.1-16.5 39.4-38.3 39.6-22.9.2-39.1-17.5-39.5-38.2-.4-21.4 16.5-39 38.2-39.6 21.2-.7 39 16.5 39.6 38.2zM217.6 167c-14.9-.2-31.5 10.8-31.3 31.3.2 20.7 16.3 30.6 30.6 30.9 17.2.4 31.7-13.9 31.8-31 .1-16.9-14.1-31.1-31.1-31.2z" fill="#ef6e25" data-color="1"></path>
        <path d="M215.2 201c4-3.9 7.6-7.4 11.2-10.9 1.1-1 2-2.5 3.3-3 1.6-.5 3.8-.8 5-.1 2.1 1.3 1.7 3.7.2 5.4-2.4 2.7-5 5.1-7.6 7.6-2.8 2.8-5.7 5.5-8.5 8.2-2.4 2.4-4.8 2.7-7.4.2-2.5-2.5-5.1-5-7.6-7.6-1.6-1.7-2-3.7-.2-5.5 1.8-1.8 3.8-1.4 5.6.1 1.9 1.6 3.6 3.4 6 5.6z" fill="#ef6e25" data-color="1"></path>
    </g>
</svg>
                         </div>
                         <div class="detls ps-4">
                             <h6>Delivering Best-in-Class Quality with</h6>
                             <p class="mb-0">Trusted Brands and Imported Raw Materials</p>
                        </div>
                      </li>
                      <li class="col-lg-4 px-4">
                         <div class="icon">
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="30.195 14.9 239.353 255.4" viewBox="30.195 14.9 239.353 255.4" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lwor8oqk svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
    <g>
        <path d="M138.1 14.9c2.9.9 5.7 1.6 8.6 2.6 21.5 7.2 35.7 26.1 36.9 48.9.2 3.2.2 6.4.1 9.6-.1 4.7.5 9 2.8 13.5 4.7 9.1-.5 20.6-10.2 24.1-1.8.6-3.6 1-5.6 1.6-1.9 10-6.2 18.5-13.9 25.3-.9.8-1.4 2.6-1.4 4-.2 3.2-.1 6.4-.1 10.1 7.6 3 15.1 5.9 22.6 8.8 3.6-2.9 6.6-6.2 10.3-8.2 5.6-3.1 11.6-5.3 17.5-7.8 2.6-1.1 5.5-1.4 6.5 2s-1.4 4.3-4.2 5.4c-5.4 2.1-11.1 4-15.9 7.2-15.9 10.8-22.5 30.3-17.1 48.5 5.3 18 21.2 30.6 40 31.7 18.9 1.1 36.3-9.9 43.5-27.6 9.8-24-3.5-51.7-28.5-58.9-1.4-.4-2.9-.8-4.3-1.3-2.2-.8-3.6-2.3-2.9-4.7.7-2.6 2.6-3.3 5.3-2.7 8.8 2.1 16.8 5.8 23.6 11.8 29.9 26.3 20.8 74.5-16.6 88.2-3.4 1.3-5 2.8-4.6 6.5.2 1.9 0 3.8.1 5.7.2 5-1.5 8.9-6.2 11.1H36c-4.4-3.1-5.9-7.4-5.8-12.7.2-14.8 0-29.5.1-44.3 0-19.6 8.9-32.6 27-39.7 14.6-5.7 29.3-11.3 43.9-17.1 1.7-.6 3.7-1.6 4.4-3 1.9-3.8-.1-11.3-3.6-14.3-5.9-5.2-9.7-11.7-11.4-19.2-.8-3.7-2.4-5.2-5.9-6.2-10.5-3.1-16-14.8-11.1-23.9 2.3-4.3 2.9-8.4 2.8-13-.1-3.8-.2-7.6.1-11.3 1.9-23 13.9-38.6 35-47.4 3.4-1.4 7.2-2.2 10.7-3.3h15.9zm-23.5 184.9c-.7.2-1.2.3-1.7.5-6.1 2.6-8.7 1.7-11.9-4.2-.9-1.7-1.7-3.4-2.6-5.1-3.5-6.9-6.9-13.8-10.6-21-11.4 4.5-22.5 8.3-33 13.3-10.4 4.9-16.1 13.9-16.3 25.4-.4 17.4 0 34.8 0 52.2 0 .3.3.6.7 1.2h26.1v-40.6c0-4.9 1.2-7.2 3.8-6.9 4.3.5 3.8 4.1 3.9 7 .1 11.4 0 22.7 0 34.1 0 2 .2 4 .3 6.4h35.2c.3-.9.6-1.4.7-1.9 2.9-17.3 5.8-34.7 8.9-52 .6-3.8-1.1-6.1-3.5-8.4zM97.2 80.9c0 10.8-.4 21 .1 31.1.9 17.5 15.4 30.5 33.2 30.5 17.2 0 31.8-13.9 32.4-31.4.3-10 .2-20 .1-30 0-1.6-.4-3.5-1.4-4.7-3-3.6-6.3-6.9-9.7-10.5-16.7 10.3-34.6 15.4-54.7 15zm-12.7-.5c2.4-1.5 4.4-2.1 5.2-3.4 2.4-3.8 5.9-4.1 9.8-4.3 6.8-.4 13.5-.8 20.2-1.9 9.4-1.5 18-5.5 26.2-10.4 3.6-2.2 7.5-3.9 10.9-.3 5 5.3 9.5 11.1 14.3 16.7 1 1.2 2.5 1.9 4.3 3.3 2.1-21.1-2.8-38.3-20.1-49.6-16.1-10.6-33.4-10.8-49.7-.5-18.1 11.2-23.1 28.8-21.1 50.4zm59.2 181.7c-.2-2-.3-3.7-.6-5.3-.6-3.7-1.2-7.5-1.8-11.2-.4-2.7 0-5.2 3.2-5.6 2.7-.4 4 1.6 4.5 4.1.4 2 .6 4.1 1 6.2.7 4 1.5 8 2.3 11.8H188c0-5.4-.2-10.5.1-15.5.2-3.7-.9-6.2-3.9-8.6-10.3-8.5-16.9-19.5-18.1-32.9-.6-7.2.2-14.6.3-21.4-2.1 4-4.3 8.7-6.9 13.3-2.7 4.9-5.7 5.8-10.9 3.6-.8-.3-1.6-.7-2.1-.9-4.1 3.1-4.1 7-3.2 11 .9 4.6 1.7 9.3 2.5 13.9.4 2.6-.5 4.6-3.3 5-2.5.4-3.8-1.2-4.4-3.5-.2-.9-.3-1.9-.4-2.8-.9-5-1.9-10-2.8-15H126c-3.1 18-6 35.6-9.1 53.7 9.2.1 17.8.1 26.8.1zm-13.3-85.3c4.9-6 9-11.5 13.7-16.7 3.6-4 3.6-8.2 2.5-13.2-10.9 4.4-21.7 3.8-33.3.2.3 3.8-.4 7.3 1.1 9.4 4.8 7 10.4 13.3 16 20.3zm-21.9 17c5.7-4 10.8-7.6 16.2-11.5-5.8-7.1-11.1-13.6-16.4-20.1-4.5 1.8-8.5 3.3-13.1 5.1 4.5 8.9 8.8 17.4 13.3 26.5zm43.9.1c4.6-9.2 8.8-17.7 13.2-26.6-4.8-1.8-8.8-3.4-13.2-5.1-5.4 6.7-10.7 13.2-16.3 20.1 5.4 3.9 10.4 7.4 16.3 11.6zm70.2 57.3c-9.2-1.5-17.7-2.8-26.2-4.2v14.9h26.2v-10.7zM89.1 106.4V87.1c-6.5 1.7-9.3 4.9-9.2 10 .2 5.1 3.1 8.2 9.2 9.3zm32.4 87.8c1.6 7.2 6.8 5.9 11.4 6.1 4.2.1 5.1-2.8 6.5-6.1-3.2-2.1-6.1-4.1-9.1-6.1-3.1 2.2-5.9 4.1-8.8 6.1zm49.8-87.6c6.7-2.1 9.3-5.7 8.8-11.1-.5-4.8-3.4-7.6-8.8-8.4v19.5z" fill="#ef6e25" data-color="1"></path>
        <path d="M256.3 197.5c.6 21.1-16.5 39.4-38.3 39.6-22.9.2-39.1-17.5-39.5-38.2-.4-21.4 16.5-39 38.2-39.6 21.2-.7 39 16.5 39.6 38.2zM217.6 167c-14.9-.2-31.5 10.8-31.3 31.3.2 20.7 16.3 30.6 30.6 30.9 17.2.4 31.7-13.9 31.8-31 .1-16.9-14.1-31.1-31.1-31.2z" fill="#ef6e25" data-color="1"></path>
        <path d="M215.2 201c4-3.9 7.6-7.4 11.2-10.9 1.1-1 2-2.5 3.3-3 1.6-.5 3.8-.8 5-.1 2.1 1.3 1.7 3.7.2 5.4-2.4 2.7-5 5.1-7.6 7.6-2.8 2.8-5.7 5.5-8.5 8.2-2.4 2.4-4.8 2.7-7.4.2-2.5-2.5-5.1-5-7.6-7.6-1.6-1.7-2-3.7-.2-5.5 1.8-1.8 3.8-1.4 5.6.1 1.9 1.6 3.6 3.4 6 5.6z" fill="#ef6e25" data-color="1"></path>
    </g>
</svg>
                         </div>
                         <div class="detls ps-4">
                             <h6>Certifications in quality and safety,</h6>
                             <p class="mb-0">including ISO 9001 and ISO 14001</p>
                        </div>
                      </li>
                      <li class="col-lg-4 px-4">
                         <div class="icon">
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="30.195 14.9 239.353 255.4" viewBox="30.195 14.9 239.353 255.4" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lwor8oqk svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
    <g>
        <path d="M138.1 14.9c2.9.9 5.7 1.6 8.6 2.6 21.5 7.2 35.7 26.1 36.9 48.9.2 3.2.2 6.4.1 9.6-.1 4.7.5 9 2.8 13.5 4.7 9.1-.5 20.6-10.2 24.1-1.8.6-3.6 1-5.6 1.6-1.9 10-6.2 18.5-13.9 25.3-.9.8-1.4 2.6-1.4 4-.2 3.2-.1 6.4-.1 10.1 7.6 3 15.1 5.9 22.6 8.8 3.6-2.9 6.6-6.2 10.3-8.2 5.6-3.1 11.6-5.3 17.5-7.8 2.6-1.1 5.5-1.4 6.5 2s-1.4 4.3-4.2 5.4c-5.4 2.1-11.1 4-15.9 7.2-15.9 10.8-22.5 30.3-17.1 48.5 5.3 18 21.2 30.6 40 31.7 18.9 1.1 36.3-9.9 43.5-27.6 9.8-24-3.5-51.7-28.5-58.9-1.4-.4-2.9-.8-4.3-1.3-2.2-.8-3.6-2.3-2.9-4.7.7-2.6 2.6-3.3 5.3-2.7 8.8 2.1 16.8 5.8 23.6 11.8 29.9 26.3 20.8 74.5-16.6 88.2-3.4 1.3-5 2.8-4.6 6.5.2 1.9 0 3.8.1 5.7.2 5-1.5 8.9-6.2 11.1H36c-4.4-3.1-5.9-7.4-5.8-12.7.2-14.8 0-29.5.1-44.3 0-19.6 8.9-32.6 27-39.7 14.6-5.7 29.3-11.3 43.9-17.1 1.7-.6 3.7-1.6 4.4-3 1.9-3.8-.1-11.3-3.6-14.3-5.9-5.2-9.7-11.7-11.4-19.2-.8-3.7-2.4-5.2-5.9-6.2-10.5-3.1-16-14.8-11.1-23.9 2.3-4.3 2.9-8.4 2.8-13-.1-3.8-.2-7.6.1-11.3 1.9-23 13.9-38.6 35-47.4 3.4-1.4 7.2-2.2 10.7-3.3h15.9zm-23.5 184.9c-.7.2-1.2.3-1.7.5-6.1 2.6-8.7 1.7-11.9-4.2-.9-1.7-1.7-3.4-2.6-5.1-3.5-6.9-6.9-13.8-10.6-21-11.4 4.5-22.5 8.3-33 13.3-10.4 4.9-16.1 13.9-16.3 25.4-.4 17.4 0 34.8 0 52.2 0 .3.3.6.7 1.2h26.1v-40.6c0-4.9 1.2-7.2 3.8-6.9 4.3.5 3.8 4.1 3.9 7 .1 11.4 0 22.7 0 34.1 0 2 .2 4 .3 6.4h35.2c.3-.9.6-1.4.7-1.9 2.9-17.3 5.8-34.7 8.9-52 .6-3.8-1.1-6.1-3.5-8.4zM97.2 80.9c0 10.8-.4 21 .1 31.1.9 17.5 15.4 30.5 33.2 30.5 17.2 0 31.8-13.9 32.4-31.4.3-10 .2-20 .1-30 0-1.6-.4-3.5-1.4-4.7-3-3.6-6.3-6.9-9.7-10.5-16.7 10.3-34.6 15.4-54.7 15zm-12.7-.5c2.4-1.5 4.4-2.1 5.2-3.4 2.4-3.8 5.9-4.1 9.8-4.3 6.8-.4 13.5-.8 20.2-1.9 9.4-1.5 18-5.5 26.2-10.4 3.6-2.2 7.5-3.9 10.9-.3 5 5.3 9.5 11.1 14.3 16.7 1 1.2 2.5 1.9 4.3 3.3 2.1-21.1-2.8-38.3-20.1-49.6-16.1-10.6-33.4-10.8-49.7-.5-18.1 11.2-23.1 28.8-21.1 50.4zm59.2 181.7c-.2-2-.3-3.7-.6-5.3-.6-3.7-1.2-7.5-1.8-11.2-.4-2.7 0-5.2 3.2-5.6 2.7-.4 4 1.6 4.5 4.1.4 2 .6 4.1 1 6.2.7 4 1.5 8 2.3 11.8H188c0-5.4-.2-10.5.1-15.5.2-3.7-.9-6.2-3.9-8.6-10.3-8.5-16.9-19.5-18.1-32.9-.6-7.2.2-14.6.3-21.4-2.1 4-4.3 8.7-6.9 13.3-2.7 4.9-5.7 5.8-10.9 3.6-.8-.3-1.6-.7-2.1-.9-4.1 3.1-4.1 7-3.2 11 .9 4.6 1.7 9.3 2.5 13.9.4 2.6-.5 4.6-3.3 5-2.5.4-3.8-1.2-4.4-3.5-.2-.9-.3-1.9-.4-2.8-.9-5-1.9-10-2.8-15H126c-3.1 18-6 35.6-9.1 53.7 9.2.1 17.8.1 26.8.1zm-13.3-85.3c4.9-6 9-11.5 13.7-16.7 3.6-4 3.6-8.2 2.5-13.2-10.9 4.4-21.7 3.8-33.3.2.3 3.8-.4 7.3 1.1 9.4 4.8 7 10.4 13.3 16 20.3zm-21.9 17c5.7-4 10.8-7.6 16.2-11.5-5.8-7.1-11.1-13.6-16.4-20.1-4.5 1.8-8.5 3.3-13.1 5.1 4.5 8.9 8.8 17.4 13.3 26.5zm43.9.1c4.6-9.2 8.8-17.7 13.2-26.6-4.8-1.8-8.8-3.4-13.2-5.1-5.4 6.7-10.7 13.2-16.3 20.1 5.4 3.9 10.4 7.4 16.3 11.6zm70.2 57.3c-9.2-1.5-17.7-2.8-26.2-4.2v14.9h26.2v-10.7zM89.1 106.4V87.1c-6.5 1.7-9.3 4.9-9.2 10 .2 5.1 3.1 8.2 9.2 9.3zm32.4 87.8c1.6 7.2 6.8 5.9 11.4 6.1 4.2.1 5.1-2.8 6.5-6.1-3.2-2.1-6.1-4.1-9.1-6.1-3.1 2.2-5.9 4.1-8.8 6.1zm49.8-87.6c6.7-2.1 9.3-5.7 8.8-11.1-.5-4.8-3.4-7.6-8.8-8.4v19.5z" fill="#ef6e25" data-color="1"></path>
        <path d="M256.3 197.5c.6 21.1-16.5 39.4-38.3 39.6-22.9.2-39.1-17.5-39.5-38.2-.4-21.4 16.5-39 38.2-39.6 21.2-.7 39 16.5 39.6 38.2zM217.6 167c-14.9-.2-31.5 10.8-31.3 31.3.2 20.7 16.3 30.6 30.6 30.9 17.2.4 31.7-13.9 31.8-31 .1-16.9-14.1-31.1-31.1-31.2z" fill="#ef6e25" data-color="1"></path>
        <path d="M215.2 201c4-3.9 7.6-7.4 11.2-10.9 1.1-1 2-2.5 3.3-3 1.6-.5 3.8-.8 5-.1 2.1 1.3 1.7 3.7.2 5.4-2.4 2.7-5 5.1-7.6 7.6-2.8 2.8-5.7 5.5-8.5 8.2-2.4 2.4-4.8 2.7-7.4.2-2.5-2.5-5.1-5-7.6-7.6-1.6-1.7-2-3.7-.2-5.5 1.8-1.8 3.8-1.4 5.6.1 1.9 1.6 3.6 3.4 6 5.6z" fill="#ef6e25" data-color="1"></path>
    </g>
</svg>
                         </div>
                         <div class="detls ps-4">
                             <h6>Team of highly trained professionals</h6>
                             <p class="mb-0">in our manufacturing team</p>
                        </div>
                      </li>
                   </ul>
               </div>
           </div> 
       </div> 
    </section>    
    <!-- This is a section-5 close -->
    <!-- This is a section-6 open -->   
     <section class="comprnsive_solution">   
        <div class="container">
            <div class="row g-0">
                <div class="cmp_solutn_heding col-lg-8 col-md-12 py-5">
                    <h2>Comprehensive Solutions</h2>
                    <h3 class="py-4">Case Studies</h3>
                    <p class="px-5">Check out some of our informative blog posts on topics like construction trends, product knowledge, application tips, etc.</p>
                </div>
               <div class="case-studies-item">
                <div class="case_studies row g-0">
                   <div class="col-lg-4 col-md-12">
                      <div class="case_studies_contn">
                          <h5 class="fw-bold pb-2">Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor</h5>
                          <p class="pb-5 mb-5">Delhivery, since 2011, is a top e-commerce logistics provider in India, handling last-mile delivery, warehousing, and freight. Its tech and network are vital for Indian e-commerce.</p>
                          <a href="https://www.rachtr.com/_files/ugd/f8ee4f_49c135e9175b4329ba811ee263b633ff.pdf" target="_blank">View Case Study</a>
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12">
                       <div class="case_studies_downd">
                          <div class="downd_img">
                             <img src="images/delhivery.jpg"/>
                          </div>
                          <div class="downd_txt px-5 py-4">
                             <ul>
                                <li>
                                    <div class="txt"> 
                                         <span>Download Case Study</span>
                                         <h5 class="fw-bold py-2">Restoration of Delhivery's Damaged Floor</h5>
                                     </div>
                                 </li>
                                <li>
                                   <div class="icon py-2">
                                 <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rer9 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
    </g>
</svg>
                             </div> 
                                </li>
                             </ul> 
                             <i class="clear"></i> 
                          </div>
                       </div>
                  </div>    
                </div>
                <div class="case_studies row g-0">
                   <div class="col-lg-4 col-md-12 lft-cont">
                      <div class="case_studies_contn">
                          <h5 class="fw-bold pb-2">Epoxy Flooring Solution on Oil-Prone Areas for Welspun</h5>
                          <p class="pb-5 mb-5">Welspun, a global leader in textiles, offers high-quality home textiles & flooring solutions. Their diverse reach and focus on innovation & sustainability set them apart. They aim to be a top brand, prioritizing customer experience and social responsibility.</p>
                          <a href="https://www.rachtr.com/_files/ugd/f8ee4f_5514b35959b7459f858e43a4562aaee7.pdf" target="_blank">View Case Study</a>
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12">
                       <div class="case_studies_downd">
                          <div class="downd_img">
                             <img src="images/welspun%20epoxy.jpg"/>
                          </div>
                          <div class="downd_txt px-5 py-4">
                             <ul>
                                <li>
                                    <div class="txt"> 
                                         <span>Download Case Study</span>
                                         <h5 class="fw-bold py-2">Epoxy Flooring Solution for Welspun</h5>
                                     </div>
                                 </li>
                                <li>
                                   <div class="icon py-2">
                                 <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rf06 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
    </g>
</svg>
                             </div> 
                                </li>
                             </ul> 
                             <i class="clear"></i> 
                          </div>
                       </div>
                  </div>    
                </div>
                <div class="case_studies row g-0">
                   <div class="col-lg-4 col-md-12 lft-cont">
                      <div class="case_studies_contn">
                          <h5 class="fw-bold pb-2">White Marble being difficult to install, as white marble is susceptible to stains, yellowness of joints, etc.</h5>
                          <p>8/10 contractors refuse to install white marble owing to project failure rate which is exorbitantly high.</p>
                          <p class="pb-5 mb-5">Problem starts immediately and keep on coming at regular intervals upto 2-3 years which is a...</p>
                          <a href="https://www.rachtr.com/post/solutions" target="_blank">View Case Study</a>
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12">
                       <div class="case_studies_downd">
                          <div class="downd_img">
                             <img src="images/Perfect-White-Marble.jpg"/>
                          </div>
                          <div class="downd_txt px-5 py-4">
                             <ul>
                                <li>
                                    <div class="txt"> 
                                         <span>View Case Study</span>
                                         <h5 class="fw-bold py-2">White Marble Installation</h5>
                                     </div>
                                 </li>
                                <li>
                                   <div class="icon py-2">
                                 <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rer9 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
    </g>
</svg>
                             </div> 
                                </li>
                             </ul> 
                             <i class="clear"></i> 
                          </div>
                       </div>
                  </div>    
                </div>
                <div class="case_studies row g-0">
                   <div class="col-lg-4 col-md-12 lft-cont">
                      <div class="case_studies_contn">
                          <h5 class="fw-bold pb-2">Achieved a Seamless and Hygienic Flooring Solution at FMCG Factory, Haridwar</h5>
                          <p>FMCG Haridwar, a prominent player in the food industry, required a seamless flooring solution to inhibit microorganism growth and ensure product safety.</p>
                          <p class="pb-2 mb-2">The existing epoxy flooring was damaged, and the plant operations could not be halted, necessitating a swift, dust-free maintenance solution.</p>
                          <a href="https://www.rachtr.com/_files/ugd/f8ee4f_c3b0af2201184666aaa6c29513b7229f.pdf" target="_blank">View Case Study</a>
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12">
                       <div class="case_studies_downd">
                          <div class="downd_img">
                             <img src="images/itc%20before%20after%20rachtr.jpg"/>
                          </div>
                          <div class="downd_txt px-5 py-4">
                             <ul>
                                <li>
                                    <div class="txt"> 
                                         <span>Download Case Study</span>
                                         <h5 class="fw-bold py-2">Hygienic Flooring Solution for FMCG Factory, Haridwar</h5>
                                     </div>
                                 </li>
                                <li>
                                   <div class="icon py-2">
                                 <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rer9 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
    </g>
</svg>
                             </div> 
                                </li>
                             </ul> 
                             <i class="clear"></i> 
                          </div>
                       </div>
                  </div>    
                </div>
                <div class="case_studies row g-0">
                   <div class="col-lg-4 col-md-12 lft-cont">
                      <div class="case_studies_contn">
                          <h5 class="fw-bold pb-2">Successful Delivery of Complex Flooring in Just 3 Days for Escorts Kubota</h5>
                          <p>We had just 72 hours to transform a large industrial space for Escorts Kubota into a showroom-ready floor, complete with intricate designs, multiple colors, and precision-aligned white lines.</p>
                          <p class="pb-2 mb-2">Read more to know how we successfully delivered complex flooring for Escorts Kubota in record time</p>
                          <a href="https://www.rachtr.com/post/industrial-epoxy-flooring-in-just-3-days-for-escorts-kubota" target="_blank">View Case Study</a>
                       </div>
                   </div>
                   <div class="col-lg-7 col-md-12">
                       <div class="case_studies_downd">
                          <div class="downd_img">
                             <img src="images/Escort%20Kubota%20Blog%20Banner.jpg"/>
                          </div>
                          <div class="downd_txt px-4 py-4">
                             <ul>
                                <li>
                                    <div class="txt"> 
                                         <span>View Case Study</span>
                                         <h5 class="fw-bold py-2">Delivered Complex Flooring in Just 3 Days for Escorts Kubota</h5>
                                     </div>
                                 </li>
                                <li>
                                   <div class="icon py-2">
                                 <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rer9 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
    <g>
        <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
    </g>
</svg>
                             </div> 
                                </li>
                             </ul> 
                             <i class="clear"></i> 
                          </div>
                       </div>
                  </div>    
                </div>    
                </div>   
            </div> 
        </div>
     </section>    
     <!-- This is a section-6 close -->    
    <!-- This is a section-7 open -->
     <section class="blogs">
         <div class="container">
              <div class="row g-0">
                  <div class="col-lg-12">
                     <div class="blogs_sec py-5">
                         <h2>Blogs</h2>
                         <ul class="padd0">
                            <li class="col-lg-4 mx-3">
                                <div class="blogs_img">
                                   <img src='images/blog-1.jpg'/>
                                </div>
                                <div class="blogs_contnt">
                                   <div class="top_cont">
                                       <span>Aug 30</span>
                                       <sup>.</sup>
                                       <span>5 min read</span>
                                    </div>
                                    <div class="btm_cont">
                                       <h5><strong>How RachTR Resolved Salt Issues in Egyptian and Turkish Marble Installations for Mukul</strong></h5>
                                    </div>
                                </div>
                            </li>
                             <li class="col-lg-4 mx-3">
                                <div class="blogs_img">
                                   <img src='images/blog-2.jpg'/>
                                </div>
                                <div class="blogs_contnt">
                                   <div class="top_cont">
                                       <span>Jul 27</span>
                                       <sup>.</sup>
                                       <span>5 min read</span>
                                    </div>
                                    <div class="btm_cont">
                                       <h5><strong>Natural Stone Cladding in Exterior: Wet Cladding vs. Dry Cladding</strong></h5>
                                    </div>
                                </div>
                            </li>
                             <li class="col-lg-4 mx-3">
                                <div class="blogs_img">
                                   <img src='images/blog-3.jpg'/>
                                </div>
                                <div class="blogs_contnt">
                                   <div class="top_cont">
                                       <span>May 15</span>
                                       <sup>.</sup>
                                       <span>5 min read</span>
                                    </div>
                                    <div class="btm_cont">
                                       <h5><strong>Why go for Epoxy Flooring in the first place?</strong></h5>
                                    </div>
                                </div>
                            </li>
                          </ul>
                         <div class="view_btn col-lg-3 py-5">
                             <a href="https://www.rachtr.com/blog" target="_blank">VIEW ALL</a>
                        </div>
                      </div>
                  </div>    
             </div>
         </div>
         
     </section>      
    <!-- This is a section-7 close -->       
    <!-- This is a section-8 open -->
     <section class="faqs">
         <div class="container">
                 <div class="row g-0">
                 <div class="faqs_headng col-lg-12 py-5">
                      <h2 class="mb-4">FAQs</h2>
                     <p>Find answers to common questions about RachTR's products, services, ordering process, and technical inquiries.</p>
                 </div>
                 <div class="faqs_detls row g-0">
                    <div class="col-lg-4 faq_fade_effct">
                       <div class="img">
                           <img src="images/faq-1.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-2.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-3.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-4.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-5.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-6.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-7.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-8.jpg"/>
                        </div>
                        <div class="img">
                           <img src="images/faq-9.jpg"/>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="tab_sec">
                            <div class="select-dropdown">
                                <select id="select-box">
                                    <option text="General" value="tab-1">General</option>
                                    <option text="GeneralResidential & Commercial Building" value="tab-2">GeneralResidential & Commercial Building</option>
                                    <option text="Stone Processing Industry" value="tab-3">Stone Processing Industry</option>
                                    <option text="Industrial Flooring" value="tab-4">Industrial Flooring</option>
                                </select>
                            </div>
                            
                            <ul class="tabs">
                                <li class="tab current" data-tab="tab-1">General</li>
                                <li class="tab" data-tab="tab-2">GeneralResidential & Commercial Building</li>
                                <li class="tab" data-tab="tab-3">Stone Processing Industry</li>
                                <li class="tab" data-tab="tab-4">Industrial Flooring</li>
                            </ul>
                            <i class="clear"></i>
                        <div class="tabs_detls mt-4">
                            <!-- tab-1 Open -->
                            <div id="tab-1" class="tab-content current">
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What industries do you cater to?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>We cater to a wide range of industries, including residential and commercial buildings, stone processing, industrial flooring, and more. Our versatile coatings and adhesives are designed to meet the unique needs of each industry segment.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How do I know which RachTR product is right for my project?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>We recommend visiting the specific industry pages (<a href="https://www.rachtr.com/residential-commercial-building" target="_blank" class="org">Residential & Commercial Buildings,</a> <a href="https://www.rachtr.com/stone-processing-industry" target="_blank" class="org">Stone Processing Industry,</a> <a href="https://www.rachtrindia.com/industrial-flooring-solutions" target="_blank" class="org">Industrial Flooring</a>) for detailed information and product recommendations. Our team is also happy to assist you. <a href="https://www.rachtr.com/contact-us" target="_blank" class="org">Contact us</a> for personalized advice.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">I need help choosing the right products for my specific project. Can you assist me?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Absolutely! Our team is also happy to provide personalized recommendations. Contact us for expert advice by filling this form here.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How can I place an order or request a quote?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>You can place an order or request a quote by clicking here (fill the form). We'll provide pricing, availability, and delivery options based on your requirements.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Do you offer technical support for your products?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, we have a team of experienced professionals who can provide technical support and guidance on product application and selection.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Do your products come with warranties?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, many RachTR products come with warranties that guarantee their performance for a specified period. Please refer to the individual product specifications for warranty details.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Are RachTR products suitable for both new construction and renovation projects?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, our products are well-suited for both new construction and renovation projects. We offer a wide range of solutions for various stages of building, from waterproofing basements to applying finishing touches.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Do you offer training or instructional resources for applying your products?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Our products are formulated for user-friendliness. We offer comprehensive installation guides and technical data sheets for each product. Additionally, consider contacting us for any specific application inquiries.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- tab-1 Close -->
                            
                            <!-- tab-2 Open -->   
                            <div id="tab-2" class="tab-content">
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What products does RachTR offer for tile installation systems?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR offers a range of tile adhesives and grouts designed for various tile installations. Our tile adhesives ensure strong bonding and prevent vertical slip, while our epoxy grouts provide durability and resistance to stains and chemicals.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How do RachTR tile adhesives prevent vertical slip during installation?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR tile adhesives are formulated with high bond strength and non-slip properties, ensuring that tiles stay in place during the installation process. This makes them ideal for vertical surfaces and large-format tiles.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What are the benefits of using RachTR grouts?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR grouts are highly durable, resistant to chemicals, stains, and moisture. They provide a seamless and aesthetically pleasing finish, making them ideal for both residential and commercial applications.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Can RachTR polishing systems be used on various types of floors?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, RachTR polishing systems are versatile and can be used on a variety of floor types, including concrete, terrazzo, and natural stone. Our systems provide a high-gloss finish and enhance the durability of the floors.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How do RachTR cleaning and maintenance products benefit property owners?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR cleaning and maintenance products are designed to keep surfaces looking new and extend their longevity. They are effective in removing dirt, grime, and stains without damaging the surfaces, making them ideal for routine maintenance.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What support does RachTR provide for product installation and use?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR offers comprehensive support, including detailed product manuals, installation guides, and access to our technical support team. We provide training and consultation services to ensure proper product application and usage.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Where can I purchase RachTR products for my residential or commercial project?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR products can be purchased through our authorized distributors or directly by <a href="https://www.rachtr.com/contact-us" target="_blank" class="org">contacting us</a>. For large commercial projects, we offer customized solutions and bulk purchasing options. Contact our sales team for more information.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- tab-2 close -->  
                            
                            <!-- tab-3 Open -->   
                            <div id="tab-3" class="tab-content">
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What is the purpose of RachTR's Block Reinforcement System?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's Block Reinforcement System is designed to enhance the structural integrity of stone blocks, preventing cracks and breakage during handling, transportation, and processing. This system ensures that stone blocks remain intact and easier to work with.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How does RachTR's Resin Line System benefit stone processing?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's Resin Line System improves the quality and durability of stone slabs by filling in micro-cracks and pores. This results in a smoother, stronger surface that is less prone to damage and provides a better finish for further processing.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What types of cracks can RachTR's Crack Repairing Systems handle?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's Crack Repairing Systems are versatile and can handle a wide range of cracks, from hairline fractures to more significant breaks in stone. These systems provide a durable repair that blends seamlessly with the stone's natural appearance.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What are the advantages of using RachTR's Color & Gloss Enhancer Systems?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's Color & Gloss Enhancer Systems enhance the natural beauty of stone by deepening its color and adding a high-gloss finish. These systems also provide a protective layer that makes the stone more resistant to stains and environmental damage.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Can RachTR's Block Reinforcement System be used on all types of natural stones?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, RachTR's Block Reinforcement System is suitable for a wide variety of natural stones, including marble, granite, limestone, and sandstone. It is designed to work effectively across different stone types to enhance their structural integrity.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Are RachTR's Crack Repairing Systems visible after application?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>No, RachTR's Crack Repairing Systems are designed to blend seamlessly with the stone, making the repairs virtually invisible. The repaired areas maintain the stone's natural appearance and structural integrity.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What maintenance is required for stones treated with RachTR's Color & Gloss Enhancer Systems?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Stones treated with RachTR's Color & Gloss Enhancer Systems require minimal maintenance. Regular cleaning with non-abrasive products will help maintain the enhanced appearance. Periodic reapplication may be necessary to sustain the gloss and color intensity over time.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Where can I purchase RachTR products for stone processing?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR stone processing products can be purchased through our authorized distributors or you can <a href="https://www.rachtr.com/contact-us" target="_blank" class="org">contact us</a> directly. For bulk orders and customized solutions, you can contact our sales team for assistance and to find the best options for your specific needs.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- tab-3 close -->
                            
                            <!-- tab-4 Open -->   
                            <div id="tab-4" class="tab-content">
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What types of industrial flooring solutions does RachTR offer?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR offers a range of industrial flooring solutions, including Epoxy Flooring and Polyurethane (PU) Flooring. These solutions are designed to meet the specific needs of various industries, providing durability, chemical resistance, and ease of maintenance.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What are the benefits of using Epoxy Flooring in industrial settings?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Epoxy Flooring provides excellent durability, chemical resistance, and a seamless finish that is easy to clean and maintain. It is ideal for high-traffic areas and environments where a strong, long-lasting floor is essential.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How does PU Flooring differ from Epoxy Flooring?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>PU Flooring is more flexible and can withstand higher levels of thermal shock and UV exposure compared to Epoxy Flooring. This makes it suitable for environments with significant temperature fluctuations and where outdoor exposure is common.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">What industries can benefit from RachTR's industrial flooring solutions?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's industrial flooring solutions are suitable for various industries, including Automobile, Pharmaceutical, Electronics, Food & Beverages, Metal Fabrication, Chemical Industry, and Warehouses & Godowns.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Are RachTR's flooring solutions resistant to chemicals and stains?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, both Epoxy and PU Flooring solutions from RachTR offer high resistance to chemicals and stains, making them ideal for industries where spills and exposure to harsh substances are common.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How do RachTR's flooring solutions contribute to safety in the workplace?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's flooring solutions can be customized with anti-slip properties, enhancing safety by reducing the risk of slips and falls. They also create a seamless surface that minimizes tripping hazards.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">Can RachTR's flooring solutions withstand heavy machinery and high traffic?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Yes, RachTR's Epoxy and PU Flooring solutions are designed to withstand heavy machinery, high foot traffic, and the wear and tear typical in industrial environments. They provide a durable surface that maintains its integrity over time.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How do RachTR's flooring solutions ensure hygiene in the food and pharmaceutical industries?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>RachTR's flooring solutions provide seamless, non-porous surfaces that are easy to clean and sanitize. This is crucial for maintaining hygiene standards in food and pharmaceutical industries, preventing contamination and ensuring a safe production environment.</p>
                                    </div>
                                </div>
                                <div class="accordion-wrapper">
                                  <div class="acc-head py-3">
                                    <h6 class="mb-0">How do I get a free quote for RachTR epoxy flooring?</h6>
                                  </div>
                                  <div class="acc-body">
                                        <p>Simply fill out the form by clicking here, and a RachTR representative will contact you to discuss your project and provide a free quote.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- tab-4 close -->
                            </div>
                        </div>
                        </div> 
                    </div>  
                 </div>
         </div>
     </section>    
    <!-- This is a section-8 close -->
    <!-- This is a section-9 open --> 
       
        @includeIf('CommonTemplates.footerHome')
       
    <!-- This is a section-9 close -->     
   </div>
    <!-- This is a wrapper close -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/jscript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/fancybox.umd.js') }}"></script>    
<script type="text/javascript">
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

