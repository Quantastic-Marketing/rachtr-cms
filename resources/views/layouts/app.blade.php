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

            <meta name="csrf-token" content="{{ csrf_token() }}">

            <style>
@charset 'UTF-8';@font-face{font-family:Montserrat;font-style:normal;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Uw-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Ew-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Ew-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Ew-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Ew-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu170w-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM70w-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr70w-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:normal;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC70w-.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:100;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:200;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:600;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:800;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6aX8.ttf) format('truetype')}@font-face{font-family:Montserrat;font-style:italic;font-weight:900;font-display:swap;src:url(https://fonts.gstatic.com/s/montserrat/v29/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16aX8.ttf) format('truetype')}h1,h2,h3,h5,h6{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}h5{font-size:1.25rem}button,input{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{text-transform:none}.px-4{padding-right:1.5rem!important;padding-left:1.5rem!important}.px-5{padding-right:3rem!important;padding-left:3rem!important}.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}h5{font-size:16px}.comprnsive_solution .case_studies .case_studies_downd .downd_txt ul li{float:left;text-align:left}.comprnsive_solution .case_studies .case_studies_downd .downd_txt ul li:last-child{float:right}.comprnsive_solution .case_studies .case_studies_downd .downd_txt ul li .icon svg{width:42px;height:42px;float:right}.comprnsive_solution .case_studies .case_studies_downd .downd_txt ul li .icon svg [data-color="1"]{fill:#ef6e25}.comprnsive_solution .case_studies .case_studies_downd .downd_txt ul li div.txt span{color:#c7c7c7;font-weight:700;font-size:14px}.faqs .faqs_detls .tab_sec ul.tabs li{float:left;padding:0 20px}.faqs .faqs_detls .tab_sec ul.tabs li{font-size:14px;line-height:34px;color:#000}.faqs .faqs_detls .tab_sec ul.tabs li.current{color:#ef6e25;font-weight:700}.footer .copyright span a{color:#000;font-weight:600;text-decoration:underline}.footer .desk{display:block}@media (max-width:992px){.header{padding:10px 0}.comprnsive_solution .case_studies .case_studies_downd .downd_txt{display:none}.faqs .faqs_detls .tab_sec ul.tabs{display:none}.footer .desk{display:none}.homepg-banner .banner-sec .banner_overlay .content-details h1{font-size:34px;color:#fff}}@media (max-width:767px){.header .row{display:block}.header .nav{margin-top:30px}.faqs .faqs_detls .tab_sec ul.tabs li{padding:10px}}@media (max-width:480px){#showLeft{top:10px}h1,h2{font-size:24px}p{font-size:15px}.header{padding:2px 0}.header .logo{width:100px}.bnr_sldr .item .banner-sec .banner_overlay,.bnr_sldr .item .banner-sec video{height:270px}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details{width:80%}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p{font-size:12px;padding:0}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p span{font-size:14px;padding:0}.footer .form_sec{text-align:center}.footer .copyright{display:none}}:root{--bs-blue:#0d6efd;--bs-indigo:#6610f2;--bs-purple:#6f42c1;--bs-pink:#d63384;--bs-red:#dc3545;--bs-orange:#fd7e14;--bs-yellow:#ffc107;--bs-green:#198754;--bs-teal:#20c997;--bs-cyan:#0dcaf0;--bs-white:#fff;--bs-gray:#6c757d;--bs-gray-dark:#343a40;--bs-primary:#0d6efd;--bs-secondary:#6c757d;--bs-success:#198754;--bs-info:#0dcaf0;--bs-warning:#ffc107;--bs-danger:#dc3545;--bs-light:#f8f9fa;--bs-dark:#212529;--bs-font-sans-serif:system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--bs-font-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--bs-gradient:linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0))}*,::after,::before{box-sizing:border-box}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:smooth}}body{margin:0;font-family:var(--bs-font-sans-serif);font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;-webkit-text-size-adjust:100%}h1,h2,h3,h6{margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:calc(1.375rem + 1.5vw)}@media (min-width:1200px){h1{font-size:2.5rem}}h2{font-size:calc(1.325rem + .9vw)}@media (min-width:1200px){h2{font-size:2rem}}h3{font-size:calc(1.3rem + .6vw)}@media (min-width:1200px){h3{font-size:1.75rem}}h6{font-size:1rem}p{margin-top:0;margin-bottom:1rem}ul{padding-left:2rem}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}a{color:#0d6efd;text-decoration:underline}img,svg{vertical-align:middle}button{border-radius:0}button,input,select{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,select{text-transform:none}select{word-wrap:normal}[type=submit],button{-webkit-appearance:button}::-moz-focus-inner{padding:0;border-style:none}::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-fields-wrapper,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-text,::-webkit-datetime-edit-year-field{padding:0}::-webkit-inner-spin-button{height:auto}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-color-swatch-wrapper{padding:0}::file-selector-button{font:inherit}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}iframe{border:0}.container{width:100%;padding-right:var(--bs-gutter-x,.75rem);padding-left:var(--bs-gutter-x,.75rem);margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{--bs-gutter-x:1.5rem;--bs-gutter-y:0;display:flex;flex-wrap:wrap;margin-top:calc(var(--bs-gutter-y) * -1);margin-right:calc(var(--bs-gutter-x) * -.5);margin-left:calc(var(--bs-gutter-x) * -.5)}.row>*{flex-shrink:0;width:100%;max-width:100%;padding-right:calc(var(--bs-gutter-x) * .5);padding-left:calc(var(--bs-gutter-x) * .5);margin-top:var(--bs-gutter-y)}.col{flex:1 0 0%}.g-0{--bs-gutter-x:0}.g-0{--bs-gutter-y:0}@media (min-width:768px){.col-md-2{flex:0 0 auto;width:16.66666667%}.col-md-10{flex:0 0 auto;width:83.33333333%}}@media (min-width:992px){.col-lg-2{flex:0 0 auto;width:16.66666667%}.col-lg-10{flex:0 0 auto;width:83.33333333%}.col-lg-12{flex:0 0 auto;width:100%}}.form-control{display:block;width:100%;padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;-webkit-appearance:none;-moz-appearance:none;appearance:none;border-radius:.25rem}.form-control::-webkit-date-and-time-value{height:1.5em}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control::-webkit-file-upload-button{padding:.375rem .75rem;margin:-.375rem -.75rem;-webkit-margin-end:.75rem;margin-inline-end:.75rem;color:#212529;background-color:#e9ecef;border-color:inherit;border-style:solid;border-width:0;border-inline-end-width:1px;border-radius:0}.btn{display:inline-block;font-weight:400;line-height:1.5;color:#212529;text-align:center;text-decoration:none;vertical-align:middle;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;border-radius:.25rem}.btn-primary{color:#fff;background-color:#0d6efd;border-color:#0d6efd}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.modal{position:fixed;top:0;left:0;z-index:1060;display:none;width:100%;height:100%;overflow-x:hidden;overflow-y:auto;outline:0}.mb-0{margin-bottom:0!important}.mb-2{margin-bottom:.5rem!important}.ms-0{margin-left:0!important}.py-2{padding-top:.5rem!important;padding-bottom:.5rem!important}.py-3{padding-top:1rem!important;padding-bottom:1rem!important}.py-5{padding-top:3rem!important;padding-bottom:3rem!important}.pt-0{padding-top:0!important}.pt-2{padding-top:.5rem!important}.pe-0{padding-right:0!important}.pe-1{padding-right:.25rem!important}.ps-1{padding-left:.25rem!important}.fw-bold{font-weight:700!important}*{margin:0 auto;padding:0 auto}img{max-width:100%;margin:0 auto}h1{font-size:24px}h2{font-size:22px}h3{font-size:20px}h6{font-size:16px}p{font-size:16px;font-weight:400;font-family:montserrat,sans-serif}a{font-weight:400;text-decoration:none}ul{text-align:center;padding:0;margin:0}ul li{list-style:none}.org{color:#ee6e25;text-decoration:none}body{margin:0 auto;font-family:montserrat,sans-serif}.clear{clear:both;font-size:0;line-height:0;display:block}.wrapper{margin:0 auto}.header{position:absolute;top:0;left:0;right:0;width:100%;background:#000;z-index:9999;padding:30px 0}.header .logo{float:left;width:135px;padding:6px 0}.header .logo a{display:block}.header .nav{float:right}.header .nav ul.head-nav{padding:0}.header .nav ul{float:right;padding:20px 0 0}.header .nav ul li{list-style:none;float:left;padding-right:20px}.header .nav ul li a{font-weight:400;font-size:14px;text-transform:uppercase;color:#fff;letter-spacing:1px;text-decoration:none}.header .nav ul li:last-child div.search-container{background:#ee6e25;margin-top:6px;border-radius:100px}.header .nav ul li div.search-container{padding:0 10px}.header .nav ul li div.search-container svg{width:15px;color:#fff}.header .nav ul li div.search-container input{background:0 0;border:0;width:120px;height:45px;font-size:14px;color:#fff;outline:0;border-radius:100px}.nav ul{position:relative}.nav a{display:block;color:#fff;font-size:20px;line-height:60px;text-decoration:none}.nav ul ul.submenu{display:none;position:absolute;top:60px;background:0 0}.nav ul li ul.submenu li{width:350px;float:none;display:list-item;position:relative;background:#fff;padding-right:0;margin-bottom:4px;text-align:left}.nav ul li ul.submenu li ul{left:51%;top:40px}.nav ul li ul.submenu li a{color:#000;line-height:40px!important;padding:0 5px}.nav ul ul ul li{position:relative;top:-60px;left:170px}.bnr_sldr .item .banner-sec{position:relative;top:0;display:flex}.bnr_sldr .item .banner-sec video{width:100%;height:738px;object-fit:cover;background-color:rgba(0,0,0,.7)}.bnr_sldr .item .banner-sec .banner_overlay{position:absolute;width:100%;top:0;height:738px;background-color:rgba(0,0,0,.4)}.bnr_sldr .item .banner-sec .banner_overlay .content{padding:15% 0 0}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details{width:60%}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p{color:#fff;padding:20px 0;font-size:20px}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p span{font-size:38px;font-weight:700}.bnr_sldr .item .banner-sec .banner_overlay .content .content-list ul{text-align:left;padding-top:150px}.bnr_sldr .item .banner-sec .banner_overlay .content .content-list ul li{width:33.33%;float:left;border-bottom:1px solid #fff;line-height:45px}.bnr_sldr .item .banner-sec .banner_overlay .content .content-list ul li a{color:#fff}.bnr_sldr .item .banner-sec .banner_overlay .content .content-list ul li:first-child{border-bottom:1px solid #cf1c1c}.faqs .faqs_detls .tab_sec .tabs_detls .tab-content{display:none}.faqs .faqs_detls .tab_sec .select-dropdown{display:none}.faqs .faqs_detls .tab_sec .select-dropdown select{width:100%;font-size:16px;height:40px;border:2px solid #000;padding:0 10px;color:#ef6e25}.accordion-wrapper{position:relative;margin-bottom:.5rem;border-bottom:1px solid #ef6e25;background-color:transparent}.accordion-wrapper .acc-head h6{font-size:16px}.accordion-wrapper .acc-body p{font-size:14px}.acc-head{position:relative;padding-right:25px}.acc-head::after{content:"\276F";position:absolute;right:16px;color:grey;transform:rotate(90deg);top:16px}.acc-body{padding:10px 10px 10px 0;display:none}.tab-content{animation:.4s ease-out accordn}@keyframes accordn{0%{opacity:0;transform:translateY(100%)}to{opacity:1;transform:translateY(0)}}.form-control{border:2px solid #ef6e25;border-radius:0;font-size:14px;font-weight:600;color:#000}.btn-primary{color:#fff;background-color:#ef6e25;border-color:#ef6e25;text-transform:uppercase;font-weight:700;width:100%}.footer .mbl{display:none}.micromodal-slide{display:none}.micromodal-slide[aria-hidden=true]{display:none}.micromodal-slide .modal__overlay{background-color:rgba(0,0,0,.6);position:fixed;inset:0;display:flex;justify-content:center;align-items:center;backdrop-filter:blur(5px)}.micromodal-slide .modal__container{background:#fff;padding:25px;border-radius:10px;width:420px;max-width:90%;text-align:center;box-shadow:0 10px 20px rgba(0,0,0,.2);animation:.3s ease-in-out fadeInUp;position:relative}.modal__title{font-size:22px;font-weight:700;color:#333;margin-bottom:10px}.modal__content p{font-size:16px;color:#555;margin-bottom:20px}.modal__close{background:0 0;border:none;font-size:22px;position:absolute;top:10px;right:15px;color:#888}.modal__btn{background:#007bff;color:#fff;padding:10px 20px;font-size:16px;border:none;border-radius:5px}@keyframes fadeInUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}.footer .follow_us .copyright-bottom{display:none}.footer .follow_us .copyright-bottom a{text-decoration:underline;font-weight:500}.homepg-banner .banner-sec .banner_overlay .content-details h1{font-size:42px;color:#fff}@media (max-width:1399px){.container{width:96%;max-width:100%}.header .nav ul li{padding-right:16px}}@media (max-width:1319px){.header .nav ul li{padding-right:14px}.header .nav ul li a{font-size:12px}.bnr_sldr .item .banner-sec .banner_overlay .content{padding:15% 0 0 3%}}@media (max-width:1239px){.header .nav{display:none;width:100%;background:#000;margin-top:100px}.header .nav ul{float:none;padding:0}.header .nav ul li{float:none;text-align:center;line-height:30px}.header .nav ul li a{text-align:left;padding-left:10px;line-height:30px}.nav ul ul ul li{position:static}.nav ul li ul.submenu li{position:static;float:none;width:100%;background:#000}.nav ul li ul.submenu li ul{left:0;position:static;display:none}.nav ul ul.submenu{width:100%;position:static}.nav ul ul.submenu{display:none;padding-left:10px}.nav ul ul.submenu li{display:none;height:auto}.nav ul li ul.submenu li a{color:#fff}li>a:after{content:" \276F";color:red}li>a:only-child:after{content:""}.header .nav ul li:last-child div.search-container{display:none}.menuBar-wrap{width:100%;position:relative}#showLeft{width:35px;height:25px;position:absolute;top:5px;right:5px;display:block;background:0 0;border:none}#showLeft span{display:block;position:absolute;height:4px;background:#e35211;opacity:1;right:0;width:100%;border-radius:50px}#showLeft span:nth-child(1){top:0;width:60%;left:-16px}#showLeft span:nth-child(2){top:9px;width:100%}#showLeft span:nth-child(3){top:19px;width:60%}.bnr_sldr .item .banner-sec .banner_overlay .content{padding:18% 0 0 3%}.bnr_sldr .item .banner-sec .banner_overlay{height:99%}.homepg-banner .item .banner-sec .banner_overlay{height:100%}.bnr_sldr .item .banner-sec .banner_overlay .content .content-list{display:none}.bnr_sldr .item .banner-sec video{height:auto}}@media (max-width:992px){.header{padding:10px 0}.faqs .faqs_detls .tab_sec .select-dropdown{display:block}.footer .mbl{display:block}.homepg-banner .banner-sec .banner_overlay .content-details h1{font-size:34px;color:#fff}}@media (max-width:768px){.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p{padding:10px 0;font-size:14px}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p span{font-size:22px}.homepg-banner .banner-sec .banner_overlay .content-details h1{font-size:24px}}@media (max-width:767px){.header .row{display:block}.header .nav{margin-top:30px}}@media (max-width:499px){.accordion-wrapper .acc-head h6{font-weight:700}}@media (max-width:480px){#showLeft{top:10px}h1,h2{font-size:24px}p{font-size:15px}.header{padding:2px 0}.header .logo{width:100px}.bnr_sldr .item .banner-sec .banner_overlay,.bnr_sldr .item .banner-sec video{height:270px}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details{width:80%}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p{font-size:12px;padding:0}.bnr_sldr .item .banner-sec .banner_overlay .content .content-details p span{font-size:14px;padding:0}.footer .form_sec{text-align:center}.footer .follow_us p{text-align:center;font-size:16px;line-height:18px}.footer .follow_us .copyright-bottom{display:flex;flex-direction:column}.footer .follow_us .copyright-bottom a{text-decoration:underline;font-weight:700;color:#000}}

            </style>


                        <!-- Preload Google Fonts (critical for typography) -->
            <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap"></noscript>

            <!-- Preload Font Awesome (if used above the fold) -->
            <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></noscript>

            <!-- Preload Critical CSS (style.css + responsive.css) -->
            <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link rel="preload" href="{{ asset('css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <link rel="preload" href="{{ asset('css/responsive.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
            <noscript>
            <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            </noscript>

            <!-- Defer Non-Critical CSS (Bootstrap, plugins, etc.) -->
            <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="print" onload="this.media='all'"> -->
            <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="{{ asset('css/slick.css') }}" media="print" onload="this.media='all'">
            <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}" media="print" onload="this.media='all'">
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
                    case str_contains($currentPath, 'category'):
                        $styles[] = ['css/allProduct.css'];
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
        @if(request()->is('*product-lists*'))
        <link rel="stylesheet" href="{{ asset('css/search.css') }}">
        @endif
  
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

    <body  x-data="{ query: new URLSearchParams(window.location.search).get('query') || '' }">
        
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
            <script  src="{{ asset('js/jquery.min.js') }}" type="text/jscript"></script>
            <script defer src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
            <script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
            <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
            @if(empty($page->content['is_product_list']))
                <script defer src="{{ asset('js/slick.js') }}"></script>
                <script defer src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
                <script defer src="{{ asset('js/custom.js') }}"></script>
            @endif
            @if(request()->is('*product-lists*'))
                <script src="{{ asset('js/customTab.js') }}"></script>
            @endif
            <script defer src="{{ asset('js/forms.js') }}" type="text/javascript"></script>
            @if(!empty($page->content['is_product_list']))
                <script defer type="text/javascript">
                    $(document).ready(function () {
                        $('.acc-head').click(function () {
                        $(this).next().slideToggle(500);
                        $(this).toggleClass('active');
                        })
                    });
                </script>
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

  
 
