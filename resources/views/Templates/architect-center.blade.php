<div class="wrapper">
       @php 
            $pageContent = $page->content ?? [];
            $banner = $pageContent['banner'] ?? [];
            $solutions = $pageContent['solutions'] ?? [];
            $industries = $pageContent['industries'] ?? [];
            $collaboration = $pageContent['collaboration'] ?? [];
            $showcase = $pageContent['showcase'] ?? [];
            $archMarvels = $pageContent['architect'] ?? [];
            $caseStudy = $pageContent['case_study'] ?? [];
            $caseStudy2 = $pageContent['case_study_2'] ?? [];
        @endphp
        <!-- above caseStudy2 is added by dewansh for new case study section -->
        <section class="architect-banner banner">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="banner-section">
                        <div class="image-wrapper">
                            <img src="{{ !empty($banner['banner_desktop'])  ? asset('storage/' . $banner['banner_desktop']) : asset('images/architect_bg.webp')}}" alt="{{ $banner['banner_alt'] ?? 'RachTR Architect Center solutions'}}" class="d-none d-md-block">
                            <img src="{{ !empty($banner['banner_mobile'] ) ? asset('storage/' . $banner['banner_mobile']) : asset('images/arch_mob_bg.webp')}}" alt="{{ $banner['banner_alt'] ?? 'img background'}}" class=" d-block d-md-none">
                        </div>
                        <div class="heading-holder">
                            <h1 class="fw-bold">{!! $banner['banner_heading'] ?? 'ARCHITECT CENTER' !!}</h1>
                            <p>{!! $banner['banner_desc'] ?? ' Welcome to the RachTR Architect Center, a dedicated hub designed to support architects
                                and designers in creating exceptional spaces.' !!}</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- This is a banner close -->
        <section class="arch-solution innovation-solutions py-3 py-sm-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <div class="row d-flex">
                            <div class="col-lg-6 pt-lg-0 ps-lg-0 order-2 py-3 pe-5">
                                <div class="image-container">
                                    <!-- <div class="background-box"></div> -->
                                    <img src="{{ !empty($solutions['innovative_image']) ? asset('storage/' . $solutions['innovative_image']) : asset('images/innovation.webp')}}" alt="{{ $solutions['innovative_image_alt'] ?? 'Modern Architect Center with sleek glass buildings and innovative design'}}">
                                    <!-- <div class="overlay-box"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 px-4 order-1">
                                <div class="heading-holder pb-4">
                                    <h2 class="fw-bold">{!! $solutions['innovative_heading'] ?? 'Innovative Solutions for Architects' !!}</h2>
                                </div>
                                @if(!empty($solutions['innovative_description']))
                                    {!! $solutions['innovative_description'] !!}
                                @else
                                <p> <strong>At RachTR</strong>, we understand the unique challenges and demands faced by
                                    architects.</p>
                                <p>Our <strong>Architect Center</strong> offers a <strong>range of resources</strong>
                                    and <strong>expertise</strong> to help you bring your vision to life with our
                                    advanced industrial solutions and products.</p>
                                <p>Our extensive portfolio of products includes advanced industrial flooring,
                                    construction chemicals, and surface care solutions tailored to meet the highest
                                    standards of quality, durability, and aesthetics.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- This is a section-7 open -->
 
        <!-- This is a new section-6 closed section added by dewansh close -->

        <!-- new client changes start -->
        <!-- This is a new section-6  open added by dewansh on sep-14 -->
        <!-- This is a new section-6 open added by dewansh on sep-14 -->
        <!-- This is a new section-6 open added by dewansh on sep-14 -->

         <!-- <section class="architect-center comprnsive_solution py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="cmp_solutn_heding ps-3 col-md-12 py-5">
                        <h2 class="ps-3 fw-bold">Making the Impossible Possible</h2>
                    </div>
                    <div class="case-studies-item">
                        <div class="case_studies row g-0">
                            <div class="col-lg-4 col-md-12">
                                <div class="case_studies_contn">
                                    <h3 class="fw-bold pb-2">Insights from Architect Shweta Sardana on achieving better project outcomes with RachTR’s support and solutions.</h3>
        
                                    <a href="{{asset('pdfFile/Case Study.pdf')}}"
                                        target="_blank">View Case Study</a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="case_studies_downd">
                                    <div class="downd_img">
                                        <img src="{{ asset('images/1777978713773864.jpg')}}" alt="Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor" />
                                    </div>
                                    <div class="downd_txt px-5 py-4">
                                        <ul>
                                            <li>
                                                <div class="txt">
                                                    <span>Download Case Study</span>
                                                    <h5 class="fw-bold py-2">
                                                    </h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon py-2">
                                                    <a href="{{asset('pdfFile/Case Study.pdf')}}" target="_blank">
                                                        <svg preserveAspectRatio="xMidYMid meet"
                                                            data-bbox="16.378 16.378 167.244 167.244"
                                                            viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lyo12rer9 svg [data-color="1"] {
                                                                        fill: #EF6E25;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                    fill="#010107" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
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
                                    <h3 class="fw-bold pb-2">Learn how RachTR products helped architect Jigar Talati in achieving superior finishes</h3>
                                    <a href="{{asset('pdfFile/Rachtr_Final_New_2.pdf')}}" target="_blank">View Case Study</a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="case_studies_downd">
                                    <div class="downd_img">
                                        <img src="{{ asset('images/Rachtr_Final_New_2.webp')}}" alt="Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor" />
                                    </div>
                                    <div class="downd_txt px-5 py-4">
                                        <ul>
                                            <li>
                                                <div class="txt">
                                                    <span>Download Case Study</span>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon py-2">
                                                    <a href="{{asset('pdfFile/Rachtr_Final_New_2.pdf')}}" target="_blank">
                                                        <svg preserveAspectRatio="xMidYMid meet"
                                                            data-bbox="16.378 16.378 167.244 167.244"
                                                            viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lyo12rer9 svg [data-color="1"] {
                                                                        fill: #EF6E25;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                    fill="#010107" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
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
                                    <h3 class="fw-bold pb-2">A vision this refined deserves materials that deliver equally refined results. In this showcase, Architect Venu Gopal highlights how RachTR’s Stone Power and Topfill helped achieve seamless finishes, lasting durability, and premium aesthetics.</h3>
                                    <a href="{{asset('pdfFile/RachTR_Venu_Gopal.pdf')}}" target="_blank">View Case Study</a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="case_studies_downd">
                                    <div class="downd_img">
                                        <img src="{{ asset('images/venu_gopal_case_study.webp')}}" alt="Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor" />
                                    </div>
                                    <div class="downd_txt px-5 py-4">
                                        <ul>
                                            <li>
                                                <div class="txt">
                                                    <span>Download Case Study</span>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon py-2">
                                                    <a href="{{asset('pdfFile/RachTR_Venu_Gopal.pdf')}}" target="_blank">
                                                        <svg preserveAspectRatio="xMidYMid meet"
                                                            data-bbox="16.378 16.378 167.244 167.244"
                                                            viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lyo12rer9 svg [data-color="1"] {
                                                                        fill: #EF6E25;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                    fill="#010107" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
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
        </section> -->
        
<section class="architect-center comprnsive_solution py-5">
    <div class="container">
        <div class="row g-0">

            <div class="cmp_solutn_heding ps-3 col-md-12 py-5">

                <h2 class="ps-3 fw-bold">
                    {!! !empty($caseStudy2['heading'])
                        ? html_entity_decode($caseStudy2['heading'])
                        : 'Case Study' !!}
                </h2>

                @if(!empty($caseStudy2['description']))
                    {!! $caseStudy2['description'] !!}
                @endif

            </div>

            <div class="case-studies-item">

                @forelse($caseStudy2['slides'] ?? [] as $slideIndex => $slide)

                    @php
                        $caseStudyImages = $slide['images'] ?? [];
                        $caseStudyModalId = 'caseStudyModal' . $slideIndex;
                    @endphp

                    <div class="case_studies row g-0">

                        <!-- LEFT CONTENT -->
                        <div class="col-lg-4 col-md-12">

                            <div class="case_studies_contn">

                                <h3 class="fw-bold pb-2">
                                    {{ $slide['left_title'] }}
                                </h3>

                                @foreach ($slide['paragraphs'] ?? [] as $para)

                                    <p class="{{ $loop->last ? 'pb-md-5 mb-md-5' : '' }}">
                                        {{ $para['text'] }}
                                    </p>

                                @endforeach

                                @php
                                    $finalUrl = '';

                                    if (!empty($slide['link'])) {
                                        $finalUrl = $slide['link'];
                                    } elseif (!empty($slide['fallback_file'])) {
                                        $finalUrl = config('app.url') . '/storage/' . ltrim($slide['fallback_file'], '/');
                                    }
                                @endphp

                                <!-- VIEW CASE STUDY BUTTON -->
                                @if(count($caseStudyImages) > 0)

                                    <a href="javascript:void(0);"
                                       class="case-study-view-btn"
                                       data-bs-toggle="modal"
                                       data-bs-target="#{{ $caseStudyModalId }}">

                                        View Case Study
                                    </a>

                                @else

                                    <a href="{{ $finalUrl ?: '#' }}"
                                       target="_blank"
                                       class="case-study-view-btn">

                                        View Case Study
                                    </a>

                                @endif

                            </div>

                        </div>


                        <!-- RIGHT CONTENT -->
                        <div class="col-lg-7 col-md-12">

                            <div class="case_studies_downd">

                                <!-- DESKTOP IMAGE -->
                                <div class="downd_img">

                                    @if(!empty($slide['image_desktop']))

                                        <img
                                            src="{{ asset('storage/' . $slide['image_desktop']) }}"
                                            alt="{{ $slide['img_alt'] ?? '' }}"
                                        />

                                    @endif

                                </div>


                                <div class="downd_txt px-5 py-4">

                                    <ul>

                                        <li>
                                            <div class="txt">

                                                <span>
                                                    {{ $slide['right_title'] }}
                                                </span>

                                                <h5 class="fw-bold py-2">
                                                    {{ $slide['subtitle'] }}
                                                </h5>

                                            </div>
                                        </li>


                                        <li>

                                            <div class="icon py-2">

                                                @if(count($caseStudyImages) > 0)

                                                    <a href="javascript:void(0);"
                                                       class="case-study-zoom-trigger"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#{{ $caseStudyModalId }}"
                                                       aria-label="View Case Study Images">

                                                        <!-- ORIGINAL SVG RESTORED -->
                                                        <!-- <svg preserveAspectRatio="xMidYMid meet"
                                                             data-bbox="16.378 16.378 167.244 167.244"
                                                             viewBox="16.378 16.378 167.244 167.244"
                                                             height="200"
                                                             width="200"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             data-type="color"
                                                             role="presentation"
                                                             aria-hidden="true"
                                                             aria-label="">

                                                            <defs>
                                                                <style>
                                                                    #comp-lyo12rer9 svg [data-color="1"] {
                                                                        fill: #EF6E25;
                                                                    }
                                                                </style>
                                                            </defs>

                                                            <g>
                                                                <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                      fill="#010107"
                                                                      data-color="1">
                                                                </path>
                                                            </g>

                                                        </svg> -->

                                                    </a>

                                                @endif

                                            </div>

                                        </li>

                                    </ul>

                                    <i class="clear"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                @empty

                @endforelse

            </div>

        </div>
    </div>
</section>
<!-- This is a new section-6 closed section added by dewansh close -->



{{-- ========================================================= --}}
{{-- CASE STUDY MODALS --}}
{{-- IMPORTANT: MODALS ARE OUTSIDE .case-studies-item --}}
{{-- ========================================================= --}}

@foreach($caseStudy2['slides'] ?? [] as $slideIndex => $slide)

    @php
        $caseStudyImages = $slide['images'] ?? [];
        $caseStudyModalId = 'caseStudyModal' . $slideIndex;
    @endphp

    @if(!empty($caseStudyImages))

        <div class="modal fade case-study-modal"
             id="{{ $caseStudyModalId }}"
             tabindex="-1"
             aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">


                    <!-- ================================================= -->
                    <!-- MODAL HEADER -->
                    <!-- ================================================= -->

                    <div class="case-study-modal-header">

                        <!-- ZOOM CONTROLS -->
                        <div class="case-study-zoom-controls">

                            <!-- ZOOM OUT -->
                            <button
                                type="button"
                                class="zoom-control-btn zoom-out-btn"
                                title="Zoom Out"
                                aria-label="Zoom Out">

                                <span>−</span>

                            </button>


                            <!-- RESET -->
                            <button
                                type="button"
                                class="zoom-control-btn zoom-reset-btn"
                                title="Reset Zoom"
                                aria-label="Reset Zoom">

                                <span>↺</span>

                            </button>


                            <!-- ZOOM IN -->
                            <button
                                type="button"
                                class="zoom-control-btn zoom-in-btn"
                                title="Zoom In"
                                aria-label="Zoom In">

                                <span>+</span>

                            </button>

                        </div>


                        <!-- CLOSE BUTTON -->
                        <button
                            type="button"
                            class="case-study-close-btn"
                            data-bs-dismiss="modal"
                            aria-label="Close">

                            <span>×</span>

                        </button>

                    </div>


                    <!-- ================================================= -->
                    <!-- MODAL BODY -->
                    <!-- ================================================= -->

                    <div class="case-study-modal-body">

                        <div
                            id="caseStudyCarousel{{ $slideIndex }}"
                            class="carousel slide case-study-carousel"
                            data-bs-interval="false">

                            <div class="carousel-inner">

                                @foreach($caseStudyImages as $imageIndex => $imageData)

                                    @if(!empty($imageData['image']))

                                        <div class="carousel-item {{ $imageIndex === 0 ? 'active' : '' }}">

                                            <div class="case-study-image-wrapper">

                                                <img
                                                    src="{{ asset('storage/' . $imageData['image']) }}"
                                                    alt="{{ $slide['img_alt'] ?? 'Case Study Image' }}"
                                                    class="case-study-modal-image"
                                                    draggable="false"
                                                />

                                            </div>

                                        </div>

                                    @endif

                                @endforeach

                            </div>


                            @if(count($caseStudyImages) > 1)

                                <!-- PREVIOUS -->
                                <button
                                    class="carousel-control-prev case-study-carousel-control"
                                    type="button"
                                    data-bs-target="#caseStudyCarousel{{ $slideIndex }}"
                                    data-bs-slide="prev">

                                    <span class="case-study-arrow">
                                        <span>‹</span>
                                    </span>

                                    <span class="visually-hidden">
                                        Previous
                                    </span>

                                </button>


                                <!-- NEXT -->
                                <button
                                    class="carousel-control-next case-study-carousel-control"
                                    type="button"
                                    data-bs-target="#caseStudyCarousel{{ $slideIndex }}"
                                    data-bs-slide="next">

                                    <span class="case-study-arrow">
                                        <span>›</span>
                                    </span>

                                    <span class="visually-hidden">
                                        Next
                                    </span>

                                </button>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    @endif

@endforeach



<style>

/* =========================================================
   CASE STUDY MODAL
   ========================================================= */

.case-study-modal {
    --case-modal-width: 960px;
    --case-modal-height: 650px;
}


/* =========================================================
   MODAL DIALOG
   ========================================================= */

.case-study-modal .modal-dialog {
    max-width: var(--case-modal-width);
    width: calc(100% - 30px);

    margin: 1.75rem auto;
}


/* =========================================================
   MODAL CONTENT
   ========================================================= */

.case-study-modal .modal-content {

    width: 100%;
    height: var(--case-modal-height);

    border: 0;
    border-radius: 18px;

    overflow: hidden;

    background: #111;

    box-shadow:
        0 30px 80px rgba(0, 0, 0, 0.45),
        0 10px 30px rgba(0, 0, 0, 0.25);

    position: relative;
}


/* =========================================================
   MODAL HEADER
   ========================================================= */

.case-study-modal-header {

    height: 68px;

    display: flex;
    align-items: center;
    justify-content: flex-end;

    padding: 0 18px;

    background:
        linear-gradient(
            135deg,
            rgba(30, 30, 30, 0.98),
            rgba(12, 12, 12, 0.98)
        );

    border-bottom: 1px solid rgba(255,255,255,0.08);

    position: relative;

    z-index: 20;
}


/* =========================================================
   ZOOM CONTROLS
   ========================================================= */

.case-study-zoom-controls {

    display: flex;
    align-items: center;

    gap: 7px;

    margin-right: 48px;
}


.zoom-control-btn {

    width: 36px;
    height: 36px;

    border: 1px solid rgba(255,255,255,0.14);

    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255,255,255,0.07);

    color: #fff;

    cursor: pointer;

    transition:
        background 0.2s ease,
        border-color 0.2s ease,
        transform 0.2s ease,
        box-shadow 0.2s ease;
}


.zoom-control-btn:hover {

    background: #fff;

    color: #111;

    border-color: #fff;

    transform: translateY(-1px);

    box-shadow:
        0 5px 18px rgba(255,255,255,0.18);
}


.zoom-control-btn:active {

    transform: scale(0.92);
}


/* PLUS / MINUS */

.zoom-in-btn span,
.zoom-out-btn span {

    font-size: 23px;

    line-height: 1;

    font-weight: 300;
}


/* RESET */

.zoom-reset-btn span {

    font-size: 20px;

    line-height: 1;
}


/* =========================================================
   CLOSE BUTTON
   ========================================================= */

.case-study-close-btn {

    position: absolute;

    top: 16px;
    right: 18px;

    width: 36px;
    height: 36px;

    border: 1px solid rgba(255,255,255,0.14);

    border-radius: 50%;

    background: rgba(255,255,255,0.07);

    color: #fff;

    display: flex;
    align-items: center;
    justify-content: center;

    cursor: pointer;

    transition: all 0.2s ease;

    z-index: 30;
}


.case-study-close-btn span {

    font-size: 25px;

    font-weight: 200;

    line-height: 1;

    margin-top: -2px;
}


.case-study-close-btn:hover {

    background: #fff;

    color: #111;

    transform: rotate(90deg);
}


/* =========================================================
   MODAL BODY
   ========================================================= */

.case-study-modal-body {

    width: 100%;

    height: calc(
        var(--case-modal-height) - 68px
    );

    padding: 0;

    background:
        radial-gradient(
            circle at center,
            #242424 0%,
            #141414 65%,
            #0c0c0c 100%
        );

    position: relative;

    overflow: hidden;
}


/* =========================================================
   CAROUSEL
   ========================================================= */

.case-study-carousel {

    width: 100%;

    height: 100%;
}


.case-study-carousel .carousel-inner {

    width: 100%;

    height: 100%;
}


.case-study-carousel .carousel-item {

    width: 100%;

    height: 100%;
}


/* =========================================================
   IMAGE WRAPPER
   ========================================================= */

.case-study-image-wrapper {

    width: 100%;

    height: 100%;

    display: flex;

    align-items: center;

    justify-content: center;

    overflow: hidden;

    padding: 12px 70px;

    cursor: grab;

    position: relative;
}


.case-study-image-wrapper:active {

    cursor: grabbing;
}


/* =========================================================
   IMAGE
   ========================================================= */

.case-study-modal-image {

    width: 100%;

    height: 100%;

    object-fit: contain;

    display: block;

    user-select: none;

    -webkit-user-drag: none;

    transform:
        translate3d(0, 0, 0)
        scale(1);

    transform-origin: center center;

    transition:
        transform 0.25s cubic-bezier(0.2, 0.8, 0.2, 1);

    will-change: transform;
}


/*
|--------------------------------------------------------------------------
| IMPORTANT
|--------------------------------------------------------------------------
| When image is zoomed, remove the transition while dragging.
*/

.case-study-modal-image.is-dragging {

    transition: none;
}


/* =========================================================
   CAROUSEL ARROWS
   ========================================================= */

.case-study-carousel-control {

    width: 64px !important;

    opacity: 1 !important;

    top: 50% !important;

    bottom: auto !important;

    transform: translateY(-50%);

    z-index: 10;
}


.case-study-carousel-control.carousel-control-prev {

    left: 4px;
}


.case-study-carousel-control.carousel-control-next {

    right: 4px;
}


.case-study-arrow {

    width: 46px;
    height: 46px;

    display: flex;

    align-items: center;

    justify-content: center;

    border-radius: 50%;

    background: rgba(255,255,255,0.96);

    color: #111;

    border: 1px solid rgba(0,0,0,0.15);

    box-shadow:
        0 8px 25px rgba(0,0,0,0.25);

    transition: all 0.2s ease;
}


.case-study-arrow span {

    font-size: 38px;

    font-weight: 400;

    line-height: 0;

    margin-top: -5px;
}


.case-study-carousel-control:hover .case-study-arrow {

    background: #111;

    color: #fff;

    border-color: #fff;

    transform: scale(1.08);

    box-shadow:
        0 10px 30px rgba(0,0,0,0.4);
}


/* =========================================================
   MOBILE
   ========================================================= */

@media (max-width: 991px) {

    .case-study-modal {

        --case-modal-width: 95vw;

        --case-modal-height: 75vh;
    }


    .case-study-modal .modal-dialog {

        width: 95vw;

        max-width: 95vw;
    }


    .case-study-modal-header {

        height: 62px;

        padding: 0 14px;
    }


    .case-study-modal-body {

        height: calc(
            var(--case-modal-height) - 62px
        );
    }


    .case-study-image-wrapper {

        padding: 10px 55px;
    }


    .case-study-zoom-controls {

        margin-right: 48px;
    }


    .zoom-control-btn {

        width: 34px;

        height: 34px;
    }


    .case-study-arrow {

        width: 42px;

        height: 42px;
    }

}


@media (max-width: 575px) {

    .case-study-modal {

        --case-modal-height: 70vh;
    }


    .case-study-modal .modal-dialog {

        width: 96vw;

        max-width: 96vw;

        margin: 0.75rem auto;
    }


    .case-study-modal .modal-content {

        border-radius: 14px;
    }


    .case-study-zoom-controls {

        gap: 4px;

        margin-right: 45px;
    }


    .zoom-control-btn {

        width: 31px;

        height: 31px;
    }


    .zoom-in-btn span,
    .zoom-out-btn span {

        font-size: 19px;
    }


    .zoom-reset-btn span {

        font-size: 17px;
    }


    .case-study-image-wrapper {

        padding: 8px 48px;
    }


    .case-study-arrow {

        width: 38px;

        height: 38px;
    }


    .case-study-arrow span {

        font-size: 31px;
    }

}

</style>



<script>
document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | CASE STUDY IMAGE ZOOM
    |--------------------------------------------------------------------------
    */

    document.querySelectorAll('.case-study-modal').forEach(function (modal) {

        let currentZoom = 1;

        let translateX = 0;
        let translateY = 0;

        const minZoom = 1;
        const maxZoom = 3;
        const zoomStep = 0.25;


        const zoomInBtn =
            modal.querySelector('.zoom-in-btn');

        const zoomOutBtn =
            modal.querySelector('.zoom-out-btn');

        const zoomResetBtn =
            modal.querySelector('.zoom-reset-btn');


        const carousel =
            modal.querySelector('.case-study-carousel');


        /*
        |--------------------------------------------------------------------------
        | Get Active Image
        |--------------------------------------------------------------------------
        */

        function getActiveImage() {

            return modal.querySelector(
                '.carousel-item.active .case-study-modal-image'
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Get Active Image Wrapper
        |--------------------------------------------------------------------------
        */

        function getActiveWrapper() {

            const image = getActiveImage();

            if (!image) {
                return null;
            }

            return image.closest(
                '.case-study-image-wrapper'
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Apply Transform
        |--------------------------------------------------------------------------
        */

        function applyTransform(image, animate = true) {

            if (!image) {
                return;
            }


            image.style.transition =
                animate
                    ? 'transform 0.25s cubic-bezier(0.2, 0.8, 0.2, 1)'
                    : 'none';


            image.style.transform =
                'translate3d(' +
                translateX +
                'px, ' +
                translateY +
                'px, 0) scale(' +
                currentZoom +
                ')';

        }


        /*
        |--------------------------------------------------------------------------
        | Reset Zoom
        |--------------------------------------------------------------------------
        */

        function resetZoom() {

            currentZoom = 1;

            translateX = 0;
            translateY = 0;


            modal.querySelectorAll(
                '.case-study-modal-image'
            ).forEach(function (image) {

                image.style.transition =
                    'transform 0.25s cubic-bezier(0.2, 0.8, 0.2, 1)';

                image.style.transform =
                    'translate3d(0, 0, 0) scale(1)';

            });

        }


        /*
        |--------------------------------------------------------------------------
        | ZOOM AT MOUSE POSITION
        |--------------------------------------------------------------------------
        */

        function zoomAtPoint(newZoom, clientX, clientY) {

            const image = getActiveImage();

            const wrapper = getActiveWrapper();

            if (!image || !wrapper) {
                return;
            }


            const oldZoom = currentZoom;


            if (newZoom === oldZoom) {
                return;
            }


            /*
            |--------------------------------------------------------------------------
            | Mouse position relative to wrapper center
            |--------------------------------------------------------------------------
            */

            const wrapperRect =
                wrapper.getBoundingClientRect();


            const pointX =
                clientX -
                (wrapperRect.left + wrapperRect.width / 2);


            const pointY =
                clientY -
                (wrapperRect.top + wrapperRect.height / 2);


            /*
            |--------------------------------------------------------------------------
            | Keep point under mouse while zooming
            |--------------------------------------------------------------------------
            */

            const zoomRatio =
                newZoom / oldZoom;


            translateX =
                pointX -
                (pointX - translateX) * zoomRatio;


            translateY =
                pointY -
                (pointY - translateY) * zoomRatio;


            /*
            |--------------------------------------------------------------------------
            | If zoom returns to 1
            |--------------------------------------------------------------------------
            */

            if (newZoom === 1) {

                translateX = 0;
                translateY = 0;

            }


            currentZoom = newZoom;


            applyTransform(image);

        }


        /*
        |--------------------------------------------------------------------------
        | ZOOM IN BUTTON
        |--------------------------------------------------------------------------
        */

        if (zoomInBtn) {

            zoomInBtn.addEventListener(
                'click',
                function (event) {

                    event.preventDefault();

                    event.stopPropagation();


                    const wrapper =
                        getActiveWrapper();


                    if (!wrapper) {
                        return;
                    }


                    const rect =
                        wrapper.getBoundingClientRect();


                    let mouseX =
                        wrapper.dataset.mouseX
                            ? parseFloat(wrapper.dataset.mouseX)
                            : rect.left + rect.width / 2;


                    let mouseY =
                        wrapper.dataset.mouseY
                            ? parseFloat(wrapper.dataset.mouseY)
                            : rect.top + rect.height / 2;


                    const newZoom =
                        Math.min(
                            currentZoom + zoomStep,
                            maxZoom
                        );


                    zoomAtPoint(
                        newZoom,
                        mouseX,
                        mouseY
                    );

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | ZOOM OUT BUTTON
        |--------------------------------------------------------------------------
        */

        if (zoomOutBtn) {

            zoomOutBtn.addEventListener(
                'click',
                function (event) {

                    event.preventDefault();

                    event.stopPropagation();


                    const wrapper =
                        getActiveWrapper();


                    if (!wrapper) {
                        return;
                    }


                    const rect =
                        wrapper.getBoundingClientRect();


                    let mouseX =
                        wrapper.dataset.mouseX
                            ? parseFloat(wrapper.dataset.mouseX)
                            : rect.left + rect.width / 2;


                    let mouseY =
                        wrapper.dataset.mouseY
                            ? parseFloat(wrapper.dataset.mouseY)
                            : rect.top + rect.height / 2;


                    const newZoom =
                        Math.max(
                            currentZoom - zoomStep,
                            minZoom
                        );


                    zoomAtPoint(
                        newZoom,
                        mouseX,
                        mouseY
                    );

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | RESET BUTTON
        |--------------------------------------------------------------------------
        */

        if (zoomResetBtn) {

            zoomResetBtn.addEventListener(
                'click',
                function (event) {

                    event.preventDefault();

                    event.stopPropagation();

                    resetZoom();

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | RESET WHEN MODAL OPENS
        |--------------------------------------------------------------------------
        */

        modal.addEventListener(
            'shown.bs.modal',
            function () {

                resetZoom();

            }
        );


        /*
        |--------------------------------------------------------------------------
        | RESET WHEN CAROUSEL IMAGE CHANGES
        |--------------------------------------------------------------------------
        */

        if (carousel) {

            carousel.addEventListener(
                'slid.bs.carousel',
                function () {

                    resetZoom();

                }
            );

        }


        /*
        |--------------------------------------------------------------------------
        | TRACK MOUSE POSITION
        |--------------------------------------------------------------------------
        */

        modal.addEventListener(
            'mousemove',
            function (event) {

                const wrapper =
                    getActiveWrapper();


                if (!wrapper) {
                    return;
                }


                const rect =
                    wrapper.getBoundingClientRect();


                if (
                    event.clientX >= rect.left &&
                    event.clientX <= rect.right &&
                    event.clientY >= rect.top &&
                    event.clientY <= rect.bottom
                ) {

                    wrapper.dataset.mouseX =
                        event.clientX;

                    wrapper.dataset.mouseY =
                        event.clientY;

                }

            }
        );


        /*
        |--------------------------------------------------------------------------
        | DOUBLE CLICK ZOOM
        |--------------------------------------------------------------------------
        */

        modal.addEventListener(
            'dblclick',
            function (event) {

                const image =
                    getActiveImage();


                const wrapper =
                    getActiveWrapper();


                if (!image || !wrapper) {
                    return;
                }


                if (
                    event.target !== image &&
                    !event.target.closest(
                        '.case-study-image-wrapper'
                    )
                ) {
                    return;
                }


                if (currentZoom === 1) {

                    zoomAtPoint(
                        2,
                        event.clientX,
                        event.clientY
                    );

                } else {

                    resetZoom();

                }

            }
        );


        /*
        |--------------------------------------------------------------------------
        | MOUSE WHEEL ZOOM
        |--------------------------------------------------------------------------
        */

        modal.addEventListener(
            'wheel',
            function (event) {

                const image =
                    getActiveImage();


                const wrapper =
                    getActiveWrapper();


                if (!image || !wrapper) {
                    return;
                }


                if (!modal.classList.contains('show')) {
                    return;
                }


                const rect =
                    wrapper.getBoundingClientRect();


                if (
                    event.clientX < rect.left ||
                    event.clientX > rect.right ||
                    event.clientY < rect.top ||
                    event.clientY > rect.bottom
                ) {
                    return;
                }


                event.preventDefault();


                let newZoom;


                if (event.deltaY < 0) {

                    newZoom =
                        Math.min(
                            currentZoom + zoomStep,
                            maxZoom
                        );

                } else {

                    newZoom =
                        Math.max(
                            currentZoom - zoomStep,
                            minZoom
                        );

                }


                zoomAtPoint(
                    newZoom,
                    event.clientX,
                    event.clientY
                );

            },
            {
                passive: false
            }
        );


        /*
        |--------------------------------------------------------------------------
        | DRAG / PAN
        |--------------------------------------------------------------------------
        */

        let isDragging = false;

        let startX = 0;
        let startY = 0;

        let startTranslateX = 0;
        let startTranslateY = 0;


        modal.addEventListener(
            'mousedown',
            function (event) {

                const image =
                    getActiveImage();


                if (!image) {
                    return;
                }


                if (currentZoom <= 1) {
                    return;
                }


                if (
                    event.target !== image
                ) {
                    return;
                }


                isDragging = true;


                startX =
                    event.clientX;

                startY =
                    event.clientY;


                startTranslateX =
                    translateX;

                startTranslateY =
                    translateY;


                image.classList.add(
                    'is-dragging'
                );


                event.preventDefault();

            }
        );


        document.addEventListener(
            'mousemove',
            function (event) {

                if (!isDragging) {
                    return;
                }


                const image =
                    getActiveImage();


                if (!image) {
                    return;
                }


                translateX =
                    startTranslateX +
                    (
                        event.clientX -
                        startX
                    );


                translateY =
                    startTranslateY +
                    (
                        event.clientY -
                        startY
                    );


                applyTransform(
                    image,
                    false
                );

            }
        );


        document.addEventListener(
            'mouseup',
            function () {

                if (!isDragging) {
                    return;
                }


                const image =
                    getActiveImage();


                if (image) {

                    image.classList.remove(
                        'is-dragging'
                    );

                }


                isDragging = false;

            }
        );


        /*
        |--------------------------------------------------------------------------
        | PREVENT IMAGE DRAG BROWSER BEHAVIOUR
        |--------------------------------------------------------------------------
        */

        modal.querySelectorAll(
            '.case-study-modal-image'
        ).forEach(function (image) {

            image.addEventListener(
                'dragstart',
                function (event) {

                    event.preventDefault();

                }
            );

        });

    });

});
</script>
<!-- This is a new section-6 closed section added by dewansh close -->
        <!-- This is a new section-6 closed section added by dewansh close -->                                              
        <!-- new client changes end  -->

        <!-- <section class="architect-center comprnsive_solution py-5">
            <div class="container">
                <div class="row g-0">Case Stud
                    <div class="cmp_solutn_heding ps-3 col-md-12 py-5">
                        <h2 class="ps-3 fw-bold">Making the Impossible Possible</h2>
                    </div>
                    <div class="case-studies-item">
                        <div class="case_studies row g-0">
                            <div class="col-lg-4 col-md-12">
                                <div class="case_studies_contn">
                                    <h3 class="fw-bold pb-2">Insights from Architect Shweta Sardana on achieving better project outcomes with RachTR’s support and solutions.</h3>
                               
                                    <a href="{{asset('pdfFile/Case Study.pdf')}}"
                                        target="_blank">View Case Study</a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="case_studies_downd">
                                    <div class="downd_img">
                                        <img src="{{ asset('images/1777978713773864.jpg')}}" alt="Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor" />
                                    </div>
                                    <div class="downd_txt px-5 py-4">
                                        <ul>
                                            <li>
                                                <div class="txt">
                                                    <span>Download Case Study</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon py-2">
                                                    <a href="{{asset('pdfFile/Case Study.pdf')}}" target="_blank">
                                                        <svg preserveAspectRatio="xMidYMid meet"
                                                            data-bbox="16.378 16.378 167.244 167.244"
                                                            viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lyo12rer9 svg [data-color="1"] {
                                                                        fill: #EF6E25;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                    fill="#010107" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
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
                                    <h3 class="fw-bold pb-2">Epoxy Flooring Solution on Oil-Prone Areas for Welspun</h3>
                                    <p class="pb-5 mb-5">Welspun, a global leader in textiles, offers high-quality home
                                        textiles & flooring solutions. Their diverse reach and focus on innovation &
                                        sustainability set them apart. They aim to be a top brand, prioritizing customer
                                        experience and social responsibility.</p>
                                    <a href="{{asset('pdfFile/Welpsun_carousel.pdf')}}"
                                        target="_blank">View Case Study</a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <div class="case_studies_downd">
                                    <div class="downd_img">
                                        <img src="{{ asset('images/welspun%20epoxy.webp')}}" alt="Epoxy flooring solution for Welspun"/>
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
                                                    <a href="{{asset('pdfFile/Welpsun_carousel.pdf')}}" target="_blank">
                                                        <svg preserveAspectRatio="xMidYMid meet"
                                                            data-bbox="16.378 16.378 167.244 167.244"
                                                            viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lyo12rf06 svg [data-color="1"] {
                                                                        fill: #EF6E25;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                    fill="#010107" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
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
        </section> -->

        <!-- This is a section-7 close -->

        <!-- This is a section-2 open -->
        <section class="architect-our our_strengths ">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="our_strengths_contnt">
                            <h2 class="pb-3 fw-bold">{!! $industries['industries_heading'] ?? 'Our <span class="org">Industries</span>' !!}</h2>
                            <p>{!! $industries['industries_subheading'] ?? 'Innovative Solutions for Every Industrial Challenge' !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="any_projects pt-5">
                            <ul class="col-lg-12 col-md-12 col-sm-12">
                                @forelse($industries['industries_items'] ?? [] as $item)
                                    <li class="col-lg-4 col-md-4 col-sm-12 {{ $loop->iteration === 2 ? 'mx-5' : '' }}">
                                        <div class="projects_blogs">
                                            <div class="projects_img pb-1">
                                                <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"  
                                                    >
                                                    <source src="{{ asset('storage/' . $item['video_webm']) }}" type="video/webm">
                                                    <source src="{{ asset('storage/' . $item['video_mp4']) }}" type="video/mp4"></video>
                                            </div>
                                            <div class="projects_txt">
                                                <h6 class="fw-bold">{!! $item['title'] !!}</h6>
                                                {!! $item['description'] !!}
                                            </div>
                                            <div class="blog_tranprnt">
                                                <div class="blogs_icon">
                                                    <a href="{{ $item['link'] }}">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155"
                                                            viewBox="20 22.5 160 155" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lu9g83n7 svg [data-color="1"] {
                                                                        fill: #FFFFFF;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z"
                                                                    fill="#FF5200" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>  
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="projects_img pb-1">
                                                <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"  
                                                    >
                                                    <source src="{{asset('videos/video-showcase-2.webm') }}" type="video/webm">
                                                    <source src="{{asset('videos/video-showcase-2.mp4') }}" type="video/mp4"></video>
                                            </div>
                                            <div class="projects_txt">
                                                <h6 class="fw-bold">Residential & Commercial Buildings</h6>
                                                <p>From dream homes to iconic landmarks, RachTR offers reliable solutions
                                                    for all your building needs.</p>
                                            </div>
                                            <div class="blog_tranprnt">
                                                <div class="blogs_icon">
                                                    <a href="{{ config('app.url') . '/residential-commercial-building'}}">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155"
                                                            viewBox="20 22.5 160 155" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lu9g83n7 svg [data-color="1"] {
                                                                        fill: #FFFFFF;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z"
                                                                    fill="#FF5200" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>  
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-12 mx-5">
                                        <div class="projects_blogs">
                                            <div class="projects_img pb-1">
                                                <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"  >
                                                <source src="{{asset('videos/video-showcase-1.webm') }}" type="video/webm">
                                                <source src="{{asset('videos/video-showcase-1.mp4') }}" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="projects_txt">
                                                <h6 class="fw-bold">Stone Processing Industry</h6>
                                                <p>Enhance the beauty and durability of natural stone with our specialized
                                                    coatings and adhesives.</p>
                                            </div>
                                            <div class="blog_tranprnt">
                                                <div class="blogs_icon">
                                                    <a href="{{ config('app.url') . '/stone-processing-industry'}}">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155"
                                                            viewBox="20 22.5 160 155" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lu9g83n7 svg [data-color="1"] {
                                                                        fill: #FFFFFF;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z"
                                                                    fill="#FF5200" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a> 
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="projects_img pb-1">
                                                <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"  >
                                                <source src="{{asset('videos/video-showcase-3.webm') }}" type="video/webm">
                                                <source src="{{asset('videos/video-showcase-3.mp4') }}" type="video/mp4">
                                                </video>
                                            </div>
                                            <div class="projects_txt">
                                                <h6 class="fw-bold">Industrial Flooring</h6>
                                                <p>Ensure high-performance and safety for your industrial spaces with our
                                                    robust flooring solutions. </p>
                                            </div>
                                            <div class="blog_tranprnt">
                                                <div class="blogs_icon">
                                                    <a href="{{ config('app.url') . '/industrial-flooring-solutions'}}">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 22.5 160 155"
                                                            viewBox="20 22.5 160 155" height="200" width="200"
                                                            xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                            role="presentation" aria-hidden="true" aria-label="">
                                                            <defs>
                                                                <style>
                                                                    #comp-lu9g83n7 svg [data-color="1"] {
                                                                        fill: #FFFFFF;
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <g>
                                                                <path
                                                                    d="M180 58.079V177.5H65.019v-19.127h81.689L20 36.276 33.317 22.5l127.404 122.89V58.079H180z"
                                                                    fill="#FF5200" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a section-2 close -->

        <!-- This is a section-3 open -->
        <section class="arch-intive intive_res_dev py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-12">
                        <div class="res_dev_contnt col-lg-10 col-md-12">
                            <h2 class="fw-bold">Technical Resources</h2>

                            <div class="row g-0">
                                <div class="res_dev_txt col-lg-8 col-md-8 col-sm-12 mx-0 pt-4">
                                    <p>Access a wealth of technical resources, including detailed product datasheets,
                                        application guides, and case studies that showcase the successful implementation
                                        of our products in various construction projects.:</p>
                                </div>
                                <div class="res_dev_btn col-lg-3 col-md-3 col-sm-12 pt-4 me-1">
                                    <a href="{{ config('app.url') . '/blogs' }}"
                                        target="_blank">VIEW ALL</a>
                                </div>
                                <i class="clear"></i>
                            </div>
                        </div>
                        <div class="res_dev_sec py-5">
                            <ul class="padd0 flex-column flex-md-row d-flex align-items-stretch gap-3">
                                @foreach($blogs->take(3) as $blog)
                                <li class="col-lg-4 mx-3">
                                    <div class="letst_advermnt_img">
                                        <img src= "{{ asset($blog->featurePhoto) }}" alt="{{$blog->title}}" />
                                    </div>
                                    <div class="letst_advermnt_contnt">
                                        <a href="{{ route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                                            <div class="top_cont m-0 ms-2 mt-2">
                                                <span>{{ \Carbon\Carbon::parse($blog->published_at)->format('M d')}}</span>
                                                <sup>.</sup>
                                                <span>5 min read</span>
                                            </div>
                                            <div class="btm_cont">
                                                <h2 class="title-blog  ms-2"><strong>{{$blog->title}}</strong></h2>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a section-3 close -->

        <!-- This is a section-6 open -->
        <section class="architect-center comprnsive_solution py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="cmp_solutn_heding ps-3 col-md-12 py-5">
                        <h2 class="ps-3 fw-bold">{!! !empty($caseStudy['heading']) ? html_entity_decode($caseStudy['heading']) : 'Case Study' !!}</h2>
                        
                         @if(!empty($caseStudy['description']))
                           {!! $caseStudy['description'] !!}                                     
                         @else
                            <p class="ps-3">Explore our project showcase to see real-world examples of how architects have utilized RachTR products to create stunning and functional spaces.</p>
                         @endif
                    </div>
                    <div class="case-studies-item">
                        @forelse($caseStudy['slides'] ?? [] as $slide)
                            <div class="case_studies row g-0">
                                <div class="col-lg-4 col-md-12">
                                    <div class="case_studies_contn">
                                        <h3 class="fw-bold pb-2">{{ $slide['left_title'] }}</h3>
                                       @foreach ($slide['paragraphs'] ?? [] as $para)
                                        <p class="{{ $loop->last ? 'pb-md-5 mb-md-5' : '' }}">{{ $para['text'] }}</p>
                                       @endforeach
                                       @php
                                            $finalUrl = '';

                                            if (!empty($slide['link'])) {
                                                $finalUrl = $slide['link'];
                                            } elseif (!empty($slide['fallback_file'])) {
                                                $finalUrl = config('app.url') . '/storage/' . ltrim($slide['fallback_file'], '/');
                                                
                                            }
                                        @endphp
                                        <a href="{{ $finalUrl ?? '#' }}"
                                            target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('storage/' . $slide['image_desktop']) }}" alt="{{ $slide['img_alt'] ?? '' }}" />
                                        </div>
                                        <div class="downd_txt px-5 py-4">
                                            <ul>
                                                <li>
                                                    <div class="txt">
                                                        <span>{{ $slide['right_title'] }}</span>
                                                        <h5 class="fw-bold py-2">{{ $slide['subtitle'] }}
                                                        </h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon py-2">
                                                        <a href="{{ $finalUrl ?? '#' }}" target="_blank">
                                                            <svg preserveAspectRatio="xMidYMid meet"
                                                                data-bbox="16.378 16.378 167.244 167.244"
                                                                viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                                xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                role="presentation" aria-hidden="true" aria-label="">
                                                                <defs>
                                                                    <style>
                                                                        #comp-lyo12rer9 svg [data-color="1"] {
                                                                            fill: #EF6E25;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <g>
                                                                    <path
                                                                        d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                        fill="#010107" data-color="1"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <i class="clear"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="case_studies row g-0">
                                <div class="col-lg-4 col-md-12">
                                    <div class="case_studies_contn">
                                        <h3 class="fw-bold pb-2">Successful Restoration of Delhivery's Warehouse Damaged
                                            Concrete Floor</h3>
                                        <p class="pb-5 mb-5">Delhivery, since 2011, is a top e-commerce logistics provider
                                            in India, handling last-mile delivery, warehousing, and freight. Its tech and
                                            network are vital for Indian e-commerce.</p>
                                        <a href="{{asset('pdfFile/Delhivery_carousel.pdf')}}"
                                            target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('images/delhivery.webp')}}" alt="Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor" />
                                        </div>
                                        <div class="downd_txt px-5 py-4">
                                            <ul>
                                                <li>
                                                    <div class="txt">
                                                        <span>Download Case Study</span>
                                                        <h5 class="fw-bold py-2">Restoration of Delhivery's Damaged Floor
                                                        </h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon py-2">
                                                        <a href="{{asset('pdfFile/Delhivery_carousel.pdf')}}" target="_blank">
                                                            <svg preserveAspectRatio="xMidYMid meet"
                                                                data-bbox="16.378 16.378 167.244 167.244"
                                                                viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                                xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                role="presentation" aria-hidden="true" aria-label="">
                                                                <defs>
                                                                    <style>
                                                                        #comp-lyo12rer9 svg [data-color="1"] {
                                                                            fill: #EF6E25;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <g>
                                                                    <path
                                                                        d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                        fill="#010107" data-color="1"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
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
                                        <h3 class="fw-bold pb-2">Epoxy Flooring Solution on Oil-Prone Areas for Welspun</h3>
                                        <p class="pb-5 mb-5">Welspun, a global leader in textiles, offers high-quality home
                                            textiles & flooring solutions. Their diverse reach and focus on innovation &
                                            sustainability set them apart. They aim to be a top brand, prioritizing customer
                                            experience and social responsibility.</p>
                                        <a href="{{asset('pdfFile/Welpsun_carousel.pdf')}}"
                                            target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('images/welspun%20epoxy.webp')}}" alt="Epoxy flooring solution for Welspun"/>
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
                                                        <a href="{{asset('pdfFile/Welpsun_carousel.pdf')}}" target="_blank">
                                                            <svg preserveAspectRatio="xMidYMid meet"
                                                                data-bbox="16.378 16.378 167.244 167.244"
                                                                viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                                xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                role="presentation" aria-hidden="true" aria-label="">
                                                                <defs>
                                                                    <style>
                                                                        #comp-lyo12rf06 svg [data-color="1"] {
                                                                            fill: #EF6E25;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <g>
                                                                    <path
                                                                        d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                        fill="#010107" data-color="1"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
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
                                        <h3 class="fw-bold pb-2">White Marble being difficult to install, as white marble is
                                            susceptible to stains, yellowness of joints, etc.</h3>
                                        <p>8/10 contractors refuse to install white marble owing to project failure rate
                                            which is exorbitantly high.</p>
                                        <p class="pb-5 mb-5">Problem starts immediately and keep on coming at regular
                                            intervals upto 2-3 years which is a...</p>
                                        <a href="{{ config('app.url') . '/blogs' }}" target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('images/Perfect-White-Marble.webp')}}" alt="Perfect White Marble"/>
                                        </div>
                                        <div class="downd_txt px-5 py-4">
                                            <ul>
                                                <li>
                                                    <div class="txt">
                                                        <span>View Case Study</span>
                                                        <h5 class="fw-bold py-2">White Marble Installation</h5>
                                                    </div>
                                                </li>
                                                <li class="rotate-90">
                                                    <div class="icon py-2">
                                                        <a href="{{ config('app.url') . '/blogs' }}">
                                                            <svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                                                                <g>
                                                                    <path d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80zm35.533 91.251l-30.37 28.03a7.27 7.27 0 0 1-2.264 1.434 7.221 7.221 0 0 1-2.697.515c-.066 0-.135 0-.203-.003-1.836.038-3.688-.587-5.144-1.931L64.468 111.25a7.292 7.292 0 0 1-.413-10.305 7.291 7.291 0 0 1 10.305-.413l18.547 17.118V59.185a7.293 7.293 0 1 1 14.586 0v58.098l18.148-16.749a7.293 7.293 0 0 1 9.892 10.717z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
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
                                        <h3 class="fw-bold pb-2">Achieved a Seamless and Hygienic Flooring Solution at FMCG
                                            Factory, Haridwar</h3>
                                        <p>FMCG Haridwar, a prominent player in the food industry, required a seamless
                                            flooring solution to inhibit microorganism growth and ensure product safety.</p>
                                        <p class="pb-2 mb-2">The existing epoxy flooring was damaged, and the plant
                                            operations could not be halted, necessitating a swift, dust-free maintenance
                                            solution.</p>
                                        <a href="{{asset('pdfFile/Case_study_ITC.pdf')}}"
                                            target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('images/itc%20before%20after%20rachtr.webp')}}" alt="Before and After applying epoxy flooring in ITC, Haridwar"/>
                                        </div>
                                        <div class="downd_txt px-5 py-4">
                                            <ul>
                                                <li>
                                                    <div class="txt">
                                                        <span>Download Case Study</span>
                                                        <h5 class="fw-bold py-2">Hygienic Flooring Solution for FMCG
                                                            Factory, Haridwar</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon py-2">
                                                        <a href="{{asset('pdfFile/Case_study_ITC.pdf')}}" target="_blank">
                                                            <svg preserveAspectRatio="xMidYMid meet"
                                                                data-bbox="16.378 16.378 167.244 167.244"
                                                                viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                                xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                role="presentation" aria-hidden="true" aria-label="">
                                                                <defs>
                                                                    <style>
                                                                        #comp-lyo12rer9 svg [data-color="1"] {
                                                                            fill: #EF6E25;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <g>
                                                                    <path
                                                                        d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                        fill="#010107" data-color="1"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
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
                                        <h3 class="fw-bold pb-2">Successful Delivery of Complex Flooring in Just 3 Days for
                                            Escorts Kubota</h3>
                                        <p>We had just 72 hours to transform a large industrial space for Escorts Kubota
                                            into a showroom-ready floor, complete with intricate designs, multiple colors,
                                            and precision-aligned white lines.</p>
                                        <p class="pb-2 mb-2">Read more to know how we successfully delivered complex
                                            flooring for Escorts Kubota in record time</p>
                                        <a href="{{ config('app.url') . '/blogs/industrial-epoxy-flooring-in-just-3-days-for-escorts-kubota'}}"
                                            target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('images/Escort%20Kubota%20Blog%20Banner.webp')}}" />
                                        </div>
                                        <div class="downd_txt px-4 py-4">
                                            <ul>
                                                <li>
                                                    <div class="txt">
                                                        <span>View Case Study</span>
                                                        <h5 class="fw-bold py-2">Delivered Complex Flooring in Just 3 Days
                                                            for Escorts Kubota</h5>
                                                    </div>
                                                </li>
                                                <li class="rotate-90">
                                                    <div class="icon py-2">
                                                        <a href="{{ config('app.url') . '/blogs/industrial-epoxy-flooring-in-just-3-days-for-escorts-kubota'}}">
                                                            <svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                                                                <g>
                                                                    <path d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80zm35.533 91.251l-30.37 28.03a7.27 7.27 0 0 1-2.264 1.434 7.221 7.221 0 0 1-2.697.515c-.066 0-.135 0-.203-.003-1.836.038-3.688-.587-5.144-1.931L64.468 111.25a7.292 7.292 0 0 1-.413-10.305 7.291 7.291 0 0 1 10.305-.413l18.547 17.118V59.185a7.293 7.293 0 1 1 14.586 0v58.098l18.148-16.749a7.293 7.293 0 0 1 9.892 10.717z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <i class="clear"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="case_studies row g-0">
                                <div class="col-lg-4 col-md-12">
                                    <div class="case_studies_contn">
                                        <h3 class="fw-bold pb-2">From Recurring Tile Problems to Lasting Performance</h3>
                                        <p class="pb-5 mb-5">Architect Jigar Talati shares how the right grout solution helped overcome tile installation challenges and deliver lasting durability.</p>
                                        <a href="{{asset('pdfFile/New Case Study - Jigar Talati 2.pdf')}}"
                                            target="_blank">View Case Study</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="case_studies_downd">
                                        <div class="downd_img">
                                            <img src="{{ asset('images/recurring tile problems_1.webp')}}" alt="Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor" />
                                        </div>
                                        <div class="downd_txt px-5 py-4">
                                            <ul>
                                                <li>
                                                    <div class="txt">
                                                        <span>Download Case Study</span>
                                                        
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon py-2">
                                                        <a href="{{asset('pdfFile/New Case Study - Jigar Talati 2.pdf')}}" target="_blank">
                                                            <svg preserveAspectRatio="xMidYMid meet"
                                                                data-bbox="16.378 16.378 167.244 167.244"
                                                                viewBox="16.378 16.378 167.244 167.244" height="200" width="200"
                                                                xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                role="presentation" aria-hidden="true" aria-label="">
                                                                <defs>
                                                                    <style>
                                                                        #comp-lyo12rer9 svg [data-color="1"] {
                                                                            fill: #EF6E25;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <g>
                                                                    <path
                                                                        d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z"
                                                                        fill="#010107" data-color="1"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <i class="clear"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a section-6 close -->
        

        

        <!-- This is a section-2 open -->
        <section class="architect-our our-industries our_strengths py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="our_strengths_contnt">
                            <h2 class="pb-3 fw-bold">{{ $showcase['heading'] ?? 'Project Showcase'}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="any_projects pt-5">
                            <ul class="col-lg-12 col-md-12 col-sm-12 blog_list d-lg-flex">
                                @forelse($showcase['items'] ?? [] as $item)
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                @foreach($item['images'] as $image)
                                                    <div class="project-slide">
                                                        <a href="{{ asset('storage/' . $image['image']) }}"
                                                            data-fancybox="gallery" data-caption="Surat">
                                                            <img alt="{{$image['img_alt'] ?? 'Project Showcase Image'}}" data-ssr-src-done="true" fetchpriority="high"
                                                                src="{{ asset('storage/' . $image['image']) }}">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="projects_txt">
                                                {!! $item['description'] !!}
                                            </div>

                                        </div>
                                    </li>
                                @empty
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-1.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src="{{asset('images/project-slide-1.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-2.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Marble flooring in Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-2.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-3.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Modern interior with marble flooring, staircase, and tall curtains." data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-3.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href=" {{asset('images/project-slide-4.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Garden with tiled flooring and swimming pool" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-4.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-5.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Sapcious garden with tiled flooring" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-5.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-6.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Room with white marble flooring in Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-6.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-7.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Tile flooring in Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-7.webp')}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="projects_txt">
                                                <p>Location: Surat</p>
                                                <p>Architect: Ajit Jariwala</p>
                                                <p>Contractor: Quality Civl Decor, Mumbai</p>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project2-slide-1.webp')}}"
                                                        data-fancybox="surat-gallery" data-caption="Surat">
                                                        <img alt="Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src="{{asset('images/project2-slide-1.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project2-slide-2.webp')}}"
                                                        data-fancybox="surat-gallery" data-caption="Surat">
                                                        <img data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project2-slide-2.webp')}}" alt="Marble flooring in a luxurious living room in Surat">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project2-slide-3.webp')}}"
                                                        data-fancybox="surat-gallery" data-caption="Surat">
                                                        <img data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project2-slide-3.webp')}}" alt="Elegant hallway with marble flooring, floral wall art, and decorative statues.">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="projects_txt">
                                                <p>Location: Surat</p>
                                                <p>Architect: Jigar Talati</p>
                                                <p>Contractor: Murari Lal Sharma</p>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-1.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src="{{asset('images/project3-slide-1.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-2.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Room with glossy marble flooring in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-2.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-3.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Marble flooring in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-3.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href=" {{asset('images/project3-slide-4.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Tile flooring in a washroom in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-4.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-5.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Tile flooring in a washroom in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-5.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-6.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Shower area with marble walls and glass enclosure" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-6.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-7.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="White marble home temple in Palacia, Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-7.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-8.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Glossy marble flooring near large glass window in a bright room" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-8.webp')}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="projects_txt">
                                                <p>Location: Palacia, Jaipur</p>
                                                <p>Architect: Theme Design Studio</p>
                                                <p>Contractor: Swati Interior</p>
                                            </div>

                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a section-2 close -->

        <div class="collaboration colab-arch">
            <div class="container-fluid">
                <div class="row collab-section">
                    <!-- Left Section (White Background) -->
                    <div class="col-lg-6 collab-left d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-9 col-xxl-6">
                                <h2 class="fw-bold">{!! $collaboration['collab_heading'] ?? 'Collaboration <span class="color-orange">Opportunities</span></h2>
                                 <p>Partner with RachTR for your next project and benefit from our collaborative approach.' !!}</p>
                            </div>
                        </div>  
                    </div>
    
                    <!-- Right Section (Black Background) -->
                    <div class="col-lg-6 collab-right d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-10 ">
                                @if(!empty($collaboration['collab_right_content']))
                                 {!! html_entity_decode($collaboration['collab_right_content']) !!}
                                @else
                                <p>We work closely with contractors to develop customized solutions that meet the specific needs and
                                    challenges of each project.</p>
                                <hr class="my-2" style="border-color: #E87722; width: 50px;">
                                <p>We’re here to help you achieve your construction goals with innovative and reliable solutions.
                                </p>
                                @endif
                                <a href="tel: {{ $collaboration['collab_phone'] ?? +91-124-4453999}}" class="cta-btn mt-3">{{ $collaboration['collab_btn'] ??'Call us Now'}}</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        

        <!--<section class="architectural-marvels py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="slide-title">{!! $archMarvels['heading'] ?? 'Architectural Marvels of 2024' !!}</h2>
                        <div class="marvels-slider">
                            @forelse($archMarvels['marvels'] ?? [] as $marvel)
                                <div class="slide-container">
                                    <div class="row w-100 align-items-stretch">
                                        <div class="col-12 col-lg-5 pe-0 d-flex">
                                            <div class="marvel-image-slider">
                                                @foreach($marvel['images'] as $marvelImage)
                                                    <div class="image-container">
                                                        <a href= "{{ asset('storage/' . $marvelImage['image']) }}" data-fancybox="gallery-1">
                                                            <img src="{{ asset('storage/' . $marvelImage['image']) }}" alt="{{ $marvelImage['img_alt'] ?? 'Building Image'}}">
                                                        </a>
                                                        <div class="hover-overlay"></div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-7 p-0 d-flex">
                                            <div class="slide-card">
                                                <h3 class="highlight-text">{{$marvel['heading']}}</h3>
                                                <div class="row w-100">
                                                    <div class="icon-list d-flex flex-column flex-md-row flex-md-wrap gy-4 ">
                                                        @foreach($marvel['details'] as $detail)
                                                            <div class="col-md-6 m-0 ">
                                                                <div class="icon-text d-flex ">
                                                                    <div class="icon-circle">
                                                                       {!! $detail['icon'] !!}
                                                                    </div>
                                                                    <div class="icon-desc-1 d-flex flex-column">
                                                                        <p class="m-0"><strong>{{$detail['heading']}}</strong></p>
                                                                        <p class="m-0"> {!! $detail['desc'] !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                @php
                                                    $richContent = $marvel['para'] ?? '';
                                                    // Add class to the first <ul> tag only if it exists
                                                    $richContent = preg_replace(
                                                        '/<ul(.*?)>/i',
                                                        '<ul class="d-flex flex-column middle-points ms-4 py-3"$1>',
                                                        $richContent,
                                                        1
                                                    );
                                                @endphp
                                                {!! $richContent !!}

                                                @if($marvel['awards_text'])
                                                    <div class="awards-div icon-text d-flex flex-column flex-md-row gap-3 gap-md-2">
                                                        <div class="icon-circle align-self-start">
                                                            {!! $marvel['awards_icon'] !!}
                                                        </div>
                                                        <div class="icon-desc-2 d-flex flex-column m-0 ms-4 ms-md-5 ">
                                                            <p class="m-0"><strong>{{ $marvel['awards_text']  ?? 'Awards'}} :</strong></p>
                                                            {!! $marvel['awards_desc'] !!}
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="slide-container">
                                    <div class="row w-100 align-items-stretch">
                                        <div class="col-12 col-lg-5 pe-0 d-flex">
                                            <div class="marvel-image-slider">
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slideImage.webp')}}" data-fancybox="gallery-1">
                                                        <img src="{{ asset('images/slideImage.webp')}}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slideImage2.webp')}}" data-fancybox="gallery-1">
                                                        <img src="{{ asset('images/slideImage2.webp')}}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slideImage3.webp')}}" data-fancybox="gallery-1">
                                                        <img src="{{ asset('images/slideImage3.webp')}}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slideImage4.webp')}}" data-fancybox="gallery-1">
                                                        <img src="{{ asset('images/slideImage4.webp')}}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-7 p-0 d-flex">
                                            <div class="slide-card">
                                                <h3 class="highlight-text">Zaishui Art Museum, China</h3>

                                                <div class="row">
                                                    <div class="icon-list d-flex flex-column flex-md-row flex-md-wrap gy-4 ">
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="28 20 144 160" viewBox="28 20 144 160"
                                                                        height="200" width="200" xmlns="http://www.w3.org/2000/svg"
                                                                        data-type="tint" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path d="M127.8 112.8l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 136.1l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M59.6 80.7v63.6H59V80.7h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M95 108v63.6h-.6V108h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M103.8 62.5v63.6h-.6V62.5h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M139.2 89.8v63.6h-.6V89.8h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M127.8 68.7l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 92l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M36.3 121.1l88.2 58.4-.3.5L36 121.6c-.1 0 .3-.5.3-.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M166.4 163.5l-130.5-86 .3-.5 130.5 86-.3.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M83.8 63.9l88.2 58.4-.3.5-88.2-58.5.3-.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M100.8 136.2l-34-103.9.5-.2 34 103.9-.5.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M112.7 20l32.8 100.6-.5.2-32.9-100.6.6-.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M79 35.4l.5.2-25.8 75.1-.5-.2c-.1 0 25.8-75.1 25.8-75.1z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M122.1 21.1l.5.2-24.7 74-.5-.2 24.7-74z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M141.4 28.1l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M93.9 116.4c-.3 0-.5-.1-.8-.2L58.4 92.9 72.2 52c.2-.5.7-.9 1.2-.9.6 0 1.1.4 1.2.9l20.5 62.7c.2.7-.2 1.5-.9 1.7h-.3zM61 92l31.3 21-18.8-57.8L61 92z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M94.5 117.5l-.7-2.1 44-15.1-20.7-62.4-43.4 15.3-.7-2.1 45.5-16 22.1 66.6-46.1 15.8z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 162.6l-37.6-24.8.3-43.7h2.2l-.3 42.5 33.2 21.9v-42.3h2.2v46.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 161.8l-.7-2.1 42.8-15.1v-42.7h2.2v44.3c-.1 0-44.3 15.6-44.3 15.6z"
                                                                                fill="#FFFFFF"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column">
                                                                    <p class="m-0"><strong>Architect:</strong></p>
                                                                    <p class="m-0"> Junya Ishigami + Associates</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle m-0">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="20.9 60.914 160.1 80.286"
                                                                        viewBox="20.9 60.914 160.1 80.286" height="200" width="200"
                                                                        xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                        role="presentation" aria-hidden="true" aria-label="">
                                                                        <defs>
                                                                            <style>
                                                                                #comp-m5v5y3xa svg [data-color="1"] {
                                                                                    fill: #FFFFFF;
                                                                                }

                                                                                #comp-m5v5y3xa svg [data-color="2"] {
                                                                                    fill: #FFFFFF;
                                                                                }
                                                                            </style>
                                                                        </defs>
                                                                        <g>
                                                                            <path
                                                                                d="M157.6 67.6c-.3-.8-1-1.4-1.9-1.4h-16.6l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9h-20.1l.9-2.7c.3-1-.2-2.2-1.3-2.5s-2.2.2-2.5 1.3l-1.3 3.9H90.4l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9H66.1l.9-2.7c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-1.3 3.9H46.2c-.9 0-1.6.6-1.9 1.4l-23.3 71c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8H179c.6 0 1.2-.3 1.6-.8s.5-1.2.3-1.8l-23.3-71zm-86.9 69.6h-45l22-67h12.9l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h14l-22 67h-59zm63.3 0l21.1-64.4 21.1 64.4H134z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M57.7 92.2l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H46c-1.1 0-2 .9-2 2s.9 2 2 2h6.2l5.5-4.1z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M136 92.2h-6.1l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5h-19.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H81.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-3.4 10.5 2.9 4h19.8l-5.2 16H75.2l-5.5 4-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h8c1.1 0 2-.9 2-2s-.9-2-2-2h-6.7l5.2-16h7.4c1.1 0 2-.9 2-2s-.7-2-1.8-2zm-16.9 20H99.3l5.2-16h19.8l-5.2 16z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M46.9 112.2H40c-1.1 0-2 .9-2 2s.9 2 2 2h5.6l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5-2.9-3.9z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M74.3 114.9l.9-2.6 3.2-9.8 2.5-7.6c.2-.6.1-1.3-.3-1.8s-1-.8-1.6-.8H54.9c-.9 0-1.6.6-1.9 1.4l-.9 2.6-1.6 5-4.1 12.4c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8h24c1-.1 1.8-.6 2-1.4zM56.4 96.2h19.8l-1.4 4.4-3.8 11.6H51.2l5.2-16z"
                                                                                fill="#FF8762" data-color="2"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column m-0 ms-2 ">
                                                                    <p class="m-0"><strong>Built:</strong></p>
                                                                    <p class="m-0"> 2023</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="22 20 156 160" xmlns="http://www.w3.org/2000/svg"
                                                                        width="200" height="200" viewBox="22 20 156 160"
                                                                        data-type="shape" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path
                                                                                d="M175.71 128.712H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h151.42c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M147.106 180a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v50.241a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M128.264 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M109.421 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M90.579 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M71.736 180a2.285 2.285 0 01-2.29-2.279v-42.098c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v50.241a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M42.566 128.487a2.29 2.29 0 01-2.07-1.303 2.275 2.275 0 011.087-3.036l57.436-27.113a2.302 2.302 0 011.963 0l57.435 27.113a2.274 2.274 0 011.087 3.036 2.294 2.294 0 01-3.05 1.082L100 101.617l-56.454 26.65a2.314 2.314 0 01-.98.22z">
                                                                            </path>
                                                                            <path
                                                                                d="M27.581 178.418a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v48.659a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M172.419 178.418a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v48.659a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M175.71 180h-28.604a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M73.325 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M86.663 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 101.373a2.285 2.285 0 01-2.29-2.279V86.442c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v12.653a2.284 2.284 0 01-2.29 2.278z">
                                                                            </path>
                                                                            <path
                                                                                d="M113.337 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M126.675 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M130.988 86.235H69.012c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h61.976c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M79.796 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.286 2.286 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M120.204 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M123.837 69.478H76.163c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h47.674c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M119.4 67.445a2.285 2.285 0 01-2.29-2.279c0-9.39-7.675-17.029-17.11-17.029s-17.11 7.639-17.11 17.029a2.285 2.285 0 01-2.29 2.279 2.285 2.285 0 01-2.29-2.279c0-11.903 9.73-21.587 21.69-21.587 11.959 0 21.689 9.684 21.689 21.587a2.283 2.283 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 44.851H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 36.943H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 35.136a2.285 2.285 0 01-2.29-2.279V22.279C97.711 21.02 98.736 20 100 20s2.29 1.02 2.29 2.279v10.578a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M156.399 118.996h-18.565c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h18.565c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M62.667 118.996H43.601c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h19.066c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M89.459 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 78.393a2.285 2.285 0 01-2.29-2.279v-.621c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M110.541 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column">
                                                                    <p class="m-0"><strong>Purpose:</strong></p>
                                                                    <p class="m-0"> Art Museum & visitor Path</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <ul class="d-flex flex-column  middle-points ms-4 py-3">
                                                    <li class="text-start"><strong>Seamless integration with nature:</strong> Built
                                                        on an artificial lake with a flowing, undulating roof that creates a calm,
                                                        immersive experience.</li>
                                                    <li class="text-start"><strong>Eco-friendly:</strong> Natural ventilation and
                                                        sustainable systems blend with the surroundings.</li>
                                                </ul>


                                                <div class="icon-text d-flex flex-column flex-md-row gap-3 gap-md-2">
                                                    <div class="icon-circle align-self-start">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="42 17.8 116.075 164.3" viewBox="42 17.8 116.075 164.3" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-m5v63stn3 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
                                                            <g>
                                                                <path d="M137.6 111h.6c7.8 0 13.3-7.9 10.7-15.4-1.7-4.9 0-10.4 4.3-13.4 6.5-4.6 6.5-14.4 0-19-4.2-3-6-8.4-4.3-13.4 2.6-7.5-2.9-15.4-10.7-15.4h-.6c-5 0-9.4-3.3-10.9-8.3-1.5-5.2-6.1-8.3-10.9-8.3-2.4 0-4.8.8-6.9 2.4-2 1.6-4.5 2.4-6.9 2.4-2.4 0-4.9-.8-6.9-2.4-2.1-1.6-4.5-2.4-6.9-2.4-4.8 0-9.4 3.1-10.9 8.3-1.4 4.9-5.9 8.3-10.9 8.3h-.6c-7.8 0-13.3 7.9-10.7 15.4 1.7 4.9 0 10.4-4.3 13.4-6.5 4.6-6.5 14.4 0 19 4.2 3 6 8.4 4.3 13.4-2.6 7.4 2.8 15.2 10.4 15.4L42 164.1l27.8-10.6 9.3 28.6 20.5-45.9 20.5 45.8 9.3-28.5 27.9 10.7L133 112c1.4-.6 3-1 4.6-1zm-76.9-7.7c-1.2-1.8-1.5-4-.8-6.1 2.4-7-.1-14.8-6.1-19C52 77 51 75 51 72.8s1-4.2 2.8-5.5c6-4.2 8.5-12 6.1-19-.7-2.1-.4-4.3.8-6.1 1.2-1.8 3.2-2.8 5.3-2.8h.6c7.1 0 13.4-4.8 15.5-11.8 1-3.3 3.9-4.8 6.3-4.8 1.4 0 2.8.5 3.9 1.4 2.8 2.2 6.3 3.4 9.8 3.4 3.5 0 7-1.2 9.8-3.4 1.2-.9 2.5-1.4 3.9-1.4 2.4 0 5.3 1.5 6.3 4.8 2 6.9 8.4 11.8 15.5 11.8h.6c2.1 0 4.1 1 5.3 2.8 1.2 1.8 1.5 4 .8 6.1-2.4 7 .1 14.8 6.1 19 1.8 1.3 2.8 3.3 2.8 5.5s-1 4.2-2.8 5.5c-6 4.2-8.5 12-6.1 19 .7 2.1.4 4.3-.8 6.1-1.2 1.8-3.2 2.8-5.3 2.8h-.6c-7.1 0-13.4 4.8-15.5 11.8-1 3.3-3.9 4.8-6.3 4.8-1.4 0-2.8-.5-3.9-1.4-2.8-2.2-6.3-3.4-9.8-3.4-3.5 0-7 1.2-9.8 3.4-1.2.9-2.5 1.4-3.9 1.4-2.4 0-5.3-1.5-6.3-4.8-2-6.9-8.4-11.8-15.5-11.8H66c-2.1-.1-4.1-1.1-5.3-2.9zM98 123.5l-1.4.6c.5-.2 1-.4 1.4-.6zm-18.2 45.1l-7-21.6-21.6 8.3 19.4-43.4-1.3-.6c3.8 1 7 3.9 8.2 7.9 1.5 5.2 6.1 8.3 10.9 8.3 2.2 0 4.4-.7 6.4-2.1l2.2 4.8-17.2 38.4zm46.6-21.5l-7 21.6L99 123.2c1-.3 2-.4 3-.4 2.4 0 4.9.8 6.9 2.4 2.1 1.6 4.5 2.4 6.9 2.4 4.8 0 9.4-3.1 10.9-8.3.5-1.7 1.3-3.1 2.4-4.4l18.8 40.4-21.5-8.2z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M94.5 93.2l3.6 3.2.1-.1.1.1 3.1-3.7 23.9-28.2 3.2-3.7-3.7-3.2-5.8-5.1-3.6-3.2-3.1 3.7-15.9 18.6-5.8-5.1-3.6-3.2-3.1 3.7-5 5.9-3.1 3.7 3.6 3.2 15.1 13.4zm-7.1-22.9l9.4 8.3 19-22.4 5.8 5.1-23.8 28.1-.1-.1-.1.1-15.1-13.2 4.9-5.9z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M102.1 114c22.3 0 40.5-18.5 40.5-41.2s-18.1-41.2-40.5-41.2S61.6 50 61.6 72.8 79.8 114 102.1 114zm0-77.6c19.7 0 35.7 16.3 35.7 36.3s-16 36.3-35.7 36.3c-19.7 0-35.7-16.3-35.7-36.3s16-36.3 35.7-36.3z" fill="#ffffff" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="icon-desc-2 d-flex flex-column m-0 ms-4 ms-md-5 ">
                                                        <p class="m-0"><strong>Awards:</strong></p>
                                                        <ul class="d-flex flex-column">
                                                            <li class="text-start m-0">ADC International Architecture & Design Award 2023</li>
                                                            <li class="text-start m-0">Recognized for innovation and environmental harmony</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-container">
                                    <div class="row w-100 align-items-stretch">
                                        <div class="col-12 col-lg-5 pe-0  d-flex">
                                            <div class="marvel-image-slider">
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/tree-1.webp')}}" data-fancybox="gallery-2">
                                                        <img src="{{ asset('images/tree-1.webp')}}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/tree-2.webp')}}" data-fancybox="gallery-2">
                                                        <img src="{{ asset('images/tree-2.webp')}}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/tree-3.webp') }}" data-fancybox="gallery-2">
                                                        <img src="{{ asset('images/tree-3.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/tree-4.webp') }}" data-fancybox="gallery-2">
                                                        <img src="{{ asset('images/tree-4.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/tree-5.webp') }}" data-fancybox="gallery-2">
                                                        <img src="{{ asset('images/tree-5.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-7 p-0  d-flex">
                                            <div class="slide-card">
                                                <h3 class="highlight-text">House in the Trees</h3>

                                                <div class="row">
                                                    <div class="icon-list d-flex flex-column flex-md-row flex-md-wrap gy-4 ">
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="28 20 144 160" viewBox="28 20 144 160"
                                                                        height="200" width="200" xmlns="http://www.w3.org/2000/svg"
                                                                        data-type="tint" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path d="M127.8 112.8l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 136.1l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M59.6 80.7v63.6H59V80.7h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M95 108v63.6h-.6V108h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M103.8 62.5v63.6h-.6V62.5h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M139.2 89.8v63.6h-.6V89.8h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M127.8 68.7l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 92l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M36.3 121.1l88.2 58.4-.3.5L36 121.6c-.1 0 .3-.5.3-.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M166.4 163.5l-130.5-86 .3-.5 130.5 86-.3.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M83.8 63.9l88.2 58.4-.3.5-88.2-58.5.3-.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M100.8 136.2l-34-103.9.5-.2 34 103.9-.5.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M112.7 20l32.8 100.6-.5.2-32.9-100.6.6-.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M79 35.4l.5.2-25.8 75.1-.5-.2c-.1 0 25.8-75.1 25.8-75.1z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M122.1 21.1l.5.2-24.7 74-.5-.2 24.7-74z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M141.4 28.1l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M93.9 116.4c-.3 0-.5-.1-.8-.2L58.4 92.9 72.2 52c.2-.5.7-.9 1.2-.9.6 0 1.1.4 1.2.9l20.5 62.7c.2.7-.2 1.5-.9 1.7h-.3zM61 92l31.3 21-18.8-57.8L61 92z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M94.5 117.5l-.7-2.1 44-15.1-20.7-62.4-43.4 15.3-.7-2.1 45.5-16 22.1 66.6-46.1 15.8z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 162.6l-37.6-24.8.3-43.7h2.2l-.3 42.5 33.2 21.9v-42.3h2.2v46.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 161.8l-.7-2.1 42.8-15.1v-42.7h2.2v44.3c-.1 0-44.3 15.6-44.3 15.6z"
                                                                                fill="#FFFFFF"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc d-flex flex-column m-0">
                                                                    <p class="m-0"><strong>Architect:</strong></p>
                                                                    <p class="m-0">Ayako Arquitetura</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle m-0">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="20.9 60.914 160.1 80.286"
                                                                        viewBox="20.9 60.914 160.1 80.286" height="200" width="200"
                                                                        xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                        role="presentation" aria-hidden="true" aria-label="">
                                                                        <defs>
                                                                            <style>
                                                                                #comp-m5v5y3xa svg [data-color="1"] {
                                                                                    fill: #FFFFFF;
                                                                                }

                                                                                #comp-m5v5y3xa svg [data-color="2"] {
                                                                                    fill: #FFFFFF;
                                                                                }
                                                                            </style>
                                                                        </defs>
                                                                        <g>
                                                                            <path
                                                                                d="M157.6 67.6c-.3-.8-1-1.4-1.9-1.4h-16.6l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9h-20.1l.9-2.7c.3-1-.2-2.2-1.3-2.5s-2.2.2-2.5 1.3l-1.3 3.9H90.4l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9H66.1l.9-2.7c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-1.3 3.9H46.2c-.9 0-1.6.6-1.9 1.4l-23.3 71c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8H179c.6 0 1.2-.3 1.6-.8s.5-1.2.3-1.8l-23.3-71zm-86.9 69.6h-45l22-67h12.9l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h14l-22 67h-59zm63.3 0l21.1-64.4 21.1 64.4H134z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M57.7 92.2l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H46c-1.1 0-2 .9-2 2s.9 2 2 2h6.2l5.5-4.1z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M136 92.2h-6.1l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5h-19.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H81.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-3.4 10.5 2.9 4h19.8l-5.2 16H75.2l-5.5 4-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h8c1.1 0 2-.9 2-2s-.9-2-2-2h-6.7l5.2-16h7.4c1.1 0 2-.9 2-2s-.7-2-1.8-2zm-16.9 20H99.3l5.2-16h19.8l-5.2 16z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M46.9 112.2H40c-1.1 0-2 .9-2 2s.9 2 2 2h5.6l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5-2.9-3.9z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M74.3 114.9l.9-2.6 3.2-9.8 2.5-7.6c.2-.6.1-1.3-.3-1.8s-1-.8-1.6-.8H54.9c-.9 0-1.6.6-1.9 1.4l-.9 2.6-1.6 5-4.1 12.4c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8h24c1-.1 1.8-.6 2-1.4zM56.4 96.2h19.8l-1.4 4.4-3.8 11.6H51.2l5.2-16z"
                                                                                fill="#FF8762" data-color="2"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc d-flex flex-column m-0 ms-2 ">
                                                                    <p class="m-0"><strong>Built:</strong></p>
                                                                    <p class="m-0">2022</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="22 20 156 160" xmlns="http://www.w3.org/2000/svg"
                                                                        width="200" height="200" viewBox="22 20 156 160"
                                                                        data-type="shape" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path
                                                                                d="M175.71 128.712H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h151.42c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M147.106 180a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v50.241a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M128.264 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M109.421 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M90.579 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M71.736 180a2.285 2.285 0 01-2.29-2.279v-42.098c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v50.241a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M42.566 128.487a2.29 2.29 0 01-2.07-1.303 2.275 2.275 0 011.087-3.036l57.436-27.113a2.302 2.302 0 011.963 0l57.435 27.113a2.274 2.274 0 011.087 3.036 2.294 2.294 0 01-3.05 1.082L100 101.617l-56.454 26.65a2.314 2.314 0 01-.98.22z">
                                                                            </path>
                                                                            <path
                                                                                d="M27.581 178.418a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v48.659a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M172.419 178.418a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v48.659a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M175.71 180h-28.604a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M73.325 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M86.663 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 101.373a2.285 2.285 0 01-2.29-2.279V86.442c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v12.653a2.284 2.284 0 01-2.29 2.278z">
                                                                            </path>
                                                                            <path
                                                                                d="M113.337 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M126.675 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M130.988 86.235H69.012c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h61.976c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M79.796 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.286 2.286 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M120.204 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M123.837 69.478H76.163c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h47.674c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M119.4 67.445a2.285 2.285 0 01-2.29-2.279c0-9.39-7.675-17.029-17.11-17.029s-17.11 7.639-17.11 17.029a2.285 2.285 0 01-2.29 2.279 2.285 2.285 0 01-2.29-2.279c0-11.903 9.73-21.587 21.69-21.587 11.959 0 21.689 9.684 21.689 21.587a2.283 2.283 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 44.851H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 36.943H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 35.136a2.285 2.285 0 01-2.29-2.279V22.279C97.711 21.02 98.736 20 100 20s2.29 1.02 2.29 2.279v10.578a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M156.399 118.996h-18.565c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h18.565c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M62.667 118.996H43.601c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h19.066c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M89.459 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 78.393a2.285 2.285 0 01-2.29-2.279v-.621c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M110.541 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc d-flex flex-column m-0">
                                                                    <p class="m-0"><strong>Location:</strong></p>
                                                                    <p class="m-0">Teresópolis, Brazil</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <ul class="d-flex flex-column  middle-points  ms-4 py-3">
                                                    <li class="text-start"><strong>Skyline Serenity: </strong>Raised 7 meters, offering breathtaking treetop views and preserving natural life below.</li>
                                                    <li class="text-start"><strong>Nature-Infused Design:</strong> Expansive windows seamlessly connect the interior with the lush forest, creating a tranquil, immersive environment.</li>
                                                </ul>


                                                <div class="icon-text d-flex flex-column flex-md-row gap-3 gap-md-2">
                                                    <div class="icon-circle align-self-start">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="42 17.8 116.075 164.3" viewBox="42 17.8 116.075 164.3" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-m5v63stn3 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
                                                            <g>
                                                                <path d="M137.6 111h.6c7.8 0 13.3-7.9 10.7-15.4-1.7-4.9 0-10.4 4.3-13.4 6.5-4.6 6.5-14.4 0-19-4.2-3-6-8.4-4.3-13.4 2.6-7.5-2.9-15.4-10.7-15.4h-.6c-5 0-9.4-3.3-10.9-8.3-1.5-5.2-6.1-8.3-10.9-8.3-2.4 0-4.8.8-6.9 2.4-2 1.6-4.5 2.4-6.9 2.4-2.4 0-4.9-.8-6.9-2.4-2.1-1.6-4.5-2.4-6.9-2.4-4.8 0-9.4 3.1-10.9 8.3-1.4 4.9-5.9 8.3-10.9 8.3h-.6c-7.8 0-13.3 7.9-10.7 15.4 1.7 4.9 0 10.4-4.3 13.4-6.5 4.6-6.5 14.4 0 19 4.2 3 6 8.4 4.3 13.4-2.6 7.4 2.8 15.2 10.4 15.4L42 164.1l27.8-10.6 9.3 28.6 20.5-45.9 20.5 45.8 9.3-28.5 27.9 10.7L133 112c1.4-.6 3-1 4.6-1zm-76.9-7.7c-1.2-1.8-1.5-4-.8-6.1 2.4-7-.1-14.8-6.1-19C52 77 51 75 51 72.8s1-4.2 2.8-5.5c6-4.2 8.5-12 6.1-19-.7-2.1-.4-4.3.8-6.1 1.2-1.8 3.2-2.8 5.3-2.8h.6c7.1 0 13.4-4.8 15.5-11.8 1-3.3 3.9-4.8 6.3-4.8 1.4 0 2.8.5 3.9 1.4 2.8 2.2 6.3 3.4 9.8 3.4 3.5 0 7-1.2 9.8-3.4 1.2-.9 2.5-1.4 3.9-1.4 2.4 0 5.3 1.5 6.3 4.8 2 6.9 8.4 11.8 15.5 11.8h.6c2.1 0 4.1 1 5.3 2.8 1.2 1.8 1.5 4 .8 6.1-2.4 7 .1 14.8 6.1 19 1.8 1.3 2.8 3.3 2.8 5.5s-1 4.2-2.8 5.5c-6 4.2-8.5 12-6.1 19 .7 2.1.4 4.3-.8 6.1-1.2 1.8-3.2 2.8-5.3 2.8h-.6c-7.1 0-13.4 4.8-15.5 11.8-1 3.3-3.9 4.8-6.3 4.8-1.4 0-2.8-.5-3.9-1.4-2.8-2.2-6.3-3.4-9.8-3.4-3.5 0-7 1.2-9.8 3.4-1.2.9-2.5 1.4-3.9 1.4-2.4 0-5.3-1.5-6.3-4.8-2-6.9-8.4-11.8-15.5-11.8H66c-2.1-.1-4.1-1.1-5.3-2.9zM98 123.5l-1.4.6c.5-.2 1-.4 1.4-.6zm-18.2 45.1l-7-21.6-21.6 8.3 19.4-43.4-1.3-.6c3.8 1 7 3.9 8.2 7.9 1.5 5.2 6.1 8.3 10.9 8.3 2.2 0 4.4-.7 6.4-2.1l2.2 4.8-17.2 38.4zm46.6-21.5l-7 21.6L99 123.2c1-.3 2-.4 3-.4 2.4 0 4.9.8 6.9 2.4 2.1 1.6 4.5 2.4 6.9 2.4 4.8 0 9.4-3.1 10.9-8.3.5-1.7 1.3-3.1 2.4-4.4l18.8 40.4-21.5-8.2z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M94.5 93.2l3.6 3.2.1-.1.1.1 3.1-3.7 23.9-28.2 3.2-3.7-3.7-3.2-5.8-5.1-3.6-3.2-3.1 3.7-15.9 18.6-5.8-5.1-3.6-3.2-3.1 3.7-5 5.9-3.1 3.7 3.6 3.2 15.1 13.4zm-7.1-22.9l9.4 8.3 19-22.4 5.8 5.1-23.8 28.1-.1-.1-.1.1-15.1-13.2 4.9-5.9z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M102.1 114c22.3 0 40.5-18.5 40.5-41.2s-18.1-41.2-40.5-41.2S61.6 50 61.6 72.8 79.8 114 102.1 114zm0-77.6c19.7 0 35.7 16.3 35.7 36.3s-16 36.3-35.7 36.3c-19.7 0-35.7-16.3-35.7-36.3s16-36.3 35.7-36.3z" fill="#ffffff" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="icon-desc-2 d-flex flex-column m-0 ms-4 ms-md-5 ">
                                                        <p class="m-0"><strong>Awards:</strong></p>
                                                        <ul class="d-flex flex-column">
                                                            <li class="text-start m-0"><strong>Featured on ArchDaily:</strong> Celebrated for its innovative integration with nature.</li>
                                                            <li class="text-start m-0"><strong>Showcased on Arkitera:</strong> Praised for its harmonious blend with the surrounding landscape</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-container">
                                    <div class="row w-100 align-items-stretch">
                                        <div class="col-12 col-lg-5 pe-0  d-flex">
                                            <div class="marvel-image-slider">
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/bluff-1.webp') }}" data-fancybox="gallery-3">
                                                        <img src="{{ asset('images/bluff-1.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/bluff-2.webp') }}" data-fancybox="gallery-3">
                                                        <img src="{{ asset('images/bluff-2.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/bluff-3.webp') }}" data-fancybox="gallery-3">
                                                        <img src="{{ asset('images/bluff-3.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/bluff-4.webp') }}" data-fancybox="gallery-3">
                                                        <img src="{{ asset('images/bluff-4.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/bluff-5.webp') }}" data-fancybox="gallery-3">
                                                        <img src="{{ asset('images/bluff-5.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-7 p-0  d-flex">
                                            <div class="slide-card justify-content-center d-flex flex-column">
                                                <h3 class="highlight-text ms-0">House of Bluff by Chaoffice</h3>

                                                <div class="row">
                                                    <div class="icon-list d-flex flex-column flex-md-row  flex-md-wrap gy-4 ">
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="22 20 156 160" xmlns="http://www.w3.org/2000/svg"
                                                                        width="200" height="200" viewBox="22 20 156 160"
                                                                        data-type="shape" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path
                                                                                d="M175.71 128.712H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h151.42c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M147.106 180a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v50.241a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M128.264 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M109.421 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M90.579 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M71.736 180a2.285 2.285 0 01-2.29-2.279v-42.098c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v50.241a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M42.566 128.487a2.29 2.29 0 01-2.07-1.303 2.275 2.275 0 011.087-3.036l57.436-27.113a2.302 2.302 0 011.963 0l57.435 27.113a2.274 2.274 0 011.087 3.036 2.294 2.294 0 01-3.05 1.082L100 101.617l-56.454 26.65a2.314 2.314 0 01-.98.22z">
                                                                            </path>
                                                                            <path
                                                                                d="M27.581 178.418a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v48.659a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M172.419 178.418a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v48.659a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M175.71 180h-28.604a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M73.325 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M86.663 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 101.373a2.285 2.285 0 01-2.29-2.279V86.442c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v12.653a2.284 2.284 0 01-2.29 2.278z">
                                                                            </path>
                                                                            <path
                                                                                d="M113.337 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M126.675 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M130.988 86.235H69.012c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h61.976c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M79.796 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.286 2.286 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M120.204 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M123.837 69.478H76.163c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h47.674c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M119.4 67.445a2.285 2.285 0 01-2.29-2.279c0-9.39-7.675-17.029-17.11-17.029s-17.11 7.639-17.11 17.029a2.285 2.285 0 01-2.29 2.279 2.285 2.285 0 01-2.29-2.279c0-11.903 9.73-21.587 21.69-21.587 11.959 0 21.689 9.684 21.689 21.587a2.283 2.283 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 44.851H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 36.943H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 35.136a2.285 2.285 0 01-2.29-2.279V22.279C97.711 21.02 98.736 20 100 20s2.29 1.02 2.29 2.279v10.578a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M156.399 118.996h-18.565c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h18.565c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M62.667 118.996H43.601c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h19.066c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M89.459 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 78.393a2.285 2.285 0 01-2.29-2.279v-.621c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M110.541 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column">
                                                                    <p class="m-0"><strong>Location:</strong></p>
                                                                    <p class="m-0">Mentougou District, Beijing, <br> China</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle m-0">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="20.9 60.914 160.1 80.286"
                                                                        viewBox="20.9 60.914 160.1 80.286" height="200" width="200"
                                                                        xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                        role="presentation" aria-hidden="true" aria-label="">
                                                                        <defs>
                                                                            <style>
                                                                                #comp-m5v5y3xa svg [data-color="1"] {
                                                                                    fill: #FFFFFF;
                                                                                }

                                                                                #comp-m5v5y3xa svg [data-color="2"] {
                                                                                    fill: #FFFFFF;
                                                                                }
                                                                            </style>
                                                                        </defs>
                                                                        <g>
                                                                            <path
                                                                                d="M157.6 67.6c-.3-.8-1-1.4-1.9-1.4h-16.6l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9h-20.1l.9-2.7c.3-1-.2-2.2-1.3-2.5s-2.2.2-2.5 1.3l-1.3 3.9H90.4l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9H66.1l.9-2.7c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-1.3 3.9H46.2c-.9 0-1.6.6-1.9 1.4l-23.3 71c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8H179c.6 0 1.2-.3 1.6-.8s.5-1.2.3-1.8l-23.3-71zm-86.9 69.6h-45l22-67h12.9l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h14l-22 67h-59zm63.3 0l21.1-64.4 21.1 64.4H134z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M57.7 92.2l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H46c-1.1 0-2 .9-2 2s.9 2 2 2h6.2l5.5-4.1z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M136 92.2h-6.1l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5h-19.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H81.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-3.4 10.5 2.9 4h19.8l-5.2 16H75.2l-5.5 4-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h8c1.1 0 2-.9 2-2s-.9-2-2-2h-6.7l5.2-16h7.4c1.1 0 2-.9 2-2s-.7-2-1.8-2zm-16.9 20H99.3l5.2-16h19.8l-5.2 16z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M46.9 112.2H40c-1.1 0-2 .9-2 2s.9 2 2 2h5.6l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5-2.9-3.9z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M74.3 114.9l.9-2.6 3.2-9.8 2.5-7.6c.2-.6.1-1.3-.3-1.8s-1-.8-1.6-.8H54.9c-.9 0-1.6.6-1.9 1.4l-.9 2.6-1.6 5-4.1 12.4c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8h24c1-.1 1.8-.6 2-1.4zM56.4 96.2h19.8l-1.4 4.4-3.8 11.6H51.2l5.2-16z"
                                                                                fill="#FF8762" data-color="2"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column m-0 ms-2 ">
                                                                    <p class="m-0"><strong>Built:</strong></p>
                                                                    <p class="m-0">2024</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <ul class="d-flex flex-column  middle-points  ms-4 py-3">
                                                    <li class="text-start"><strong>Wasteland to Retreat:</strong> Transforms a neglected site into a vibrant living space with expansive indoor and outdoor areas.</li>
                                                    <li class="text-start"><strong>Joyful Living:</strong> Includes an open-air bath, swing, slide, and spiral staircase that blur the line between indoors and outdoors.</li>
                                                </ul>


                                                <div class="icon-text d-flex flex-column flex-md-row gap-3 gap-md-2">
                                                    <div class="icon-circle align-self-start">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="42 17.8 116.075 164.3" viewBox="42 17.8 116.075 164.3" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-m5v63stn3 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
                                                            <g>
                                                                <path d="M137.6 111h.6c7.8 0 13.3-7.9 10.7-15.4-1.7-4.9 0-10.4 4.3-13.4 6.5-4.6 6.5-14.4 0-19-4.2-3-6-8.4-4.3-13.4 2.6-7.5-2.9-15.4-10.7-15.4h-.6c-5 0-9.4-3.3-10.9-8.3-1.5-5.2-6.1-8.3-10.9-8.3-2.4 0-4.8.8-6.9 2.4-2 1.6-4.5 2.4-6.9 2.4-2.4 0-4.9-.8-6.9-2.4-2.1-1.6-4.5-2.4-6.9-2.4-4.8 0-9.4 3.1-10.9 8.3-1.4 4.9-5.9 8.3-10.9 8.3h-.6c-7.8 0-13.3 7.9-10.7 15.4 1.7 4.9 0 10.4-4.3 13.4-6.5 4.6-6.5 14.4 0 19 4.2 3 6 8.4 4.3 13.4-2.6 7.4 2.8 15.2 10.4 15.4L42 164.1l27.8-10.6 9.3 28.6 20.5-45.9 20.5 45.8 9.3-28.5 27.9 10.7L133 112c1.4-.6 3-1 4.6-1zm-76.9-7.7c-1.2-1.8-1.5-4-.8-6.1 2.4-7-.1-14.8-6.1-19C52 77 51 75 51 72.8s1-4.2 2.8-5.5c6-4.2 8.5-12 6.1-19-.7-2.1-.4-4.3.8-6.1 1.2-1.8 3.2-2.8 5.3-2.8h.6c7.1 0 13.4-4.8 15.5-11.8 1-3.3 3.9-4.8 6.3-4.8 1.4 0 2.8.5 3.9 1.4 2.8 2.2 6.3 3.4 9.8 3.4 3.5 0 7-1.2 9.8-3.4 1.2-.9 2.5-1.4 3.9-1.4 2.4 0 5.3 1.5 6.3 4.8 2 6.9 8.4 11.8 15.5 11.8h.6c2.1 0 4.1 1 5.3 2.8 1.2 1.8 1.5 4 .8 6.1-2.4 7 .1 14.8 6.1 19 1.8 1.3 2.8 3.3 2.8 5.5s-1 4.2-2.8 5.5c-6 4.2-8.5 12-6.1 19 .7 2.1.4 4.3-.8 6.1-1.2 1.8-3.2 2.8-5.3 2.8h-.6c-7.1 0-13.4 4.8-15.5 11.8-1 3.3-3.9 4.8-6.3 4.8-1.4 0-2.8-.5-3.9-1.4-2.8-2.2-6.3-3.4-9.8-3.4-3.5 0-7 1.2-9.8 3.4-1.2.9-2.5 1.4-3.9 1.4-2.4 0-5.3-1.5-6.3-4.8-2-6.9-8.4-11.8-15.5-11.8H66c-2.1-.1-4.1-1.1-5.3-2.9zM98 123.5l-1.4.6c.5-.2 1-.4 1.4-.6zm-18.2 45.1l-7-21.6-21.6 8.3 19.4-43.4-1.3-.6c3.8 1 7 3.9 8.2 7.9 1.5 5.2 6.1 8.3 10.9 8.3 2.2 0 4.4-.7 6.4-2.1l2.2 4.8-17.2 38.4zm46.6-21.5l-7 21.6L99 123.2c1-.3 2-.4 3-.4 2.4 0 4.9.8 6.9 2.4 2.1 1.6 4.5 2.4 6.9 2.4 4.8 0 9.4-3.1 10.9-8.3.5-1.7 1.3-3.1 2.4-4.4l18.8 40.4-21.5-8.2z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M94.5 93.2l3.6 3.2.1-.1.1.1 3.1-3.7 23.9-28.2 3.2-3.7-3.7-3.2-5.8-5.1-3.6-3.2-3.1 3.7-15.9 18.6-5.8-5.1-3.6-3.2-3.1 3.7-5 5.9-3.1 3.7 3.6 3.2 15.1 13.4zm-7.1-22.9l9.4 8.3 19-22.4 5.8 5.1-23.8 28.1-.1-.1-.1.1-15.1-13.2 4.9-5.9z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M102.1 114c22.3 0 40.5-18.5 40.5-41.2s-18.1-41.2-40.5-41.2S61.6 50 61.6 72.8 79.8 114 102.1 114zm0-77.6c19.7 0 35.7 16.3 35.7 36.3s-16 36.3-35.7 36.3c-19.7 0-35.7-16.3-35.7-36.3s16-36.3 35.7-36.3z" fill="#ffffff" data-color="1"></path>
                                                            </g>
                                                        </svg>  
                                                    </div>
                                                    <div class="icon-desc-2 d-flex flex-column m-0 ms-4 ms-md-5 ">
                                                        <p class="m-0"><strong>Awards:</strong></p>
                                                        <ul class="d-flex flex-column">
                                                            <li class="text-start m-0">Featured for innovative design and nature integration.</li>
                                                            <li class="text-start m-0">Celebrated for transforming wasteland into a paradise</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-container">
                                    <div class="row w-100 align-items-stretch">
                                        <div class="col-12 col-lg-5 pe-0 d-flex">
                                            <div class="marvel-image-slider">
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic1.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic1.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic2.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic2.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic3.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic3.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic4.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic4.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic5.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic5.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic6.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic6.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic7.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic7.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/slide2-pic8.webp') }}" data-fancybox="gallery-4">
                                                        <img src="{{ asset('images/slide2-pic8.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-7 p-0 d-flex">
                                            <div class="slide-card">
                                                <h3 class="highlight-text">Vaazh House</h3>

                                                <div class="row">
                                                    <div class="icon-list d-flex flex-column flex-md-row  flex-md-wrap gy-4 ">
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="28 20 144 160" viewBox="28 20 144 160"
                                                                        height="200" width="200" xmlns="http://www.w3.org/2000/svg"
                                                                        data-type="tint" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path d="M127.8 112.8l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 136.1l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M59.6 80.7v63.6H59V80.7h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M95 108v63.6h-.6V108h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M103.8 62.5v63.6h-.6V62.5h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M139.2 89.8v63.6h-.6V89.8h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M127.8 68.7l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 92l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M36.3 121.1l88.2 58.4-.3.5L36 121.6c-.1 0 .3-.5.3-.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M166.4 163.5l-130.5-86 .3-.5 130.5 86-.3.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M83.8 63.9l88.2 58.4-.3.5-88.2-58.5.3-.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M100.8 136.2l-34-103.9.5-.2 34 103.9-.5.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M112.7 20l32.8 100.6-.5.2-32.9-100.6.6-.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M79 35.4l.5.2-25.8 75.1-.5-.2c-.1 0 25.8-75.1 25.8-75.1z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M122.1 21.1l.5.2-24.7 74-.5-.2 24.7-74z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M141.4 28.1l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M93.9 116.4c-.3 0-.5-.1-.8-.2L58.4 92.9 72.2 52c.2-.5.7-.9 1.2-.9.6 0 1.1.4 1.2.9l20.5 62.7c.2.7-.2 1.5-.9 1.7h-.3zM61 92l31.3 21-18.8-57.8L61 92z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M94.5 117.5l-.7-2.1 44-15.1-20.7-62.4-43.4 15.3-.7-2.1 45.5-16 22.1 66.6-46.1 15.8z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 162.6l-37.6-24.8.3-43.7h2.2l-.3 42.5 33.2 21.9v-42.3h2.2v46.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 161.8l-.7-2.1 42.8-15.1v-42.7h2.2v44.3c-.1 0-44.3 15.6-44.3 15.6z"
                                                                                fill="#FFFFFF"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc d-flex flex-column">
                                                                    <p class="m-0"><strong>Architect:</strong></p>
                                                                    <p class="m-0">VY Architecture Studio <br> (Venkatesh and Yogalakshmi)</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle m-0">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="20.9 60.914 160.1 80.286"
                                                                        viewBox="20.9 60.914 160.1 80.286" height="200" width="200"
                                                                        xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                        role="presentation" aria-hidden="true" aria-label="">
                                                                        <defs>
                                                                            <style>
                                                                                #comp-m5v5y3xa svg [data-color="1"] {
                                                                                    fill: #FFFFFF;
                                                                                }

                                                                                #comp-m5v5y3xa svg [data-color="2"] {
                                                                                    fill: #FFFFFF;
                                                                                }
                                                                            </style>
                                                                        </defs>
                                                                        <g>
                                                                            <path
                                                                                d="M157.6 67.6c-.3-.8-1-1.4-1.9-1.4h-16.6l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9h-20.1l.9-2.7c.3-1-.2-2.2-1.3-2.5s-2.2.2-2.5 1.3l-1.3 3.9H90.4l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9H66.1l.9-2.7c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-1.3 3.9H46.2c-.9 0-1.6.6-1.9 1.4l-23.3 71c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8H179c.6 0 1.2-.3 1.6-.8s.5-1.2.3-1.8l-23.3-71zm-86.9 69.6h-45l22-67h12.9l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h14l-22 67h-59zm63.3 0l21.1-64.4 21.1 64.4H134z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M57.7 92.2l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H46c-1.1 0-2 .9-2 2s.9 2 2 2h6.2l5.5-4.1z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M136 92.2h-6.1l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5h-19.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H81.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-3.4 10.5 2.9 4h19.8l-5.2 16H75.2l-5.5 4-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h8c1.1 0 2-.9 2-2s-.9-2-2-2h-6.7l5.2-16h7.4c1.1 0 2-.9 2-2s-.7-2-1.8-2zm-16.9 20H99.3l5.2-16h19.8l-5.2 16z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M46.9 112.2H40c-1.1 0-2 .9-2 2s.9 2 2 2h5.6l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5-2.9-3.9z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M74.3 114.9l.9-2.6 3.2-9.8 2.5-7.6c.2-.6.1-1.3-.3-1.8s-1-.8-1.6-.8H54.9c-.9 0-1.6.6-1.9 1.4l-.9 2.6-1.6 5-4.1 12.4c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8h24c1-.1 1.8-.6 2-1.4zM56.4 96.2h19.8l-1.4 4.4-3.8 11.6H51.2l5.2-16z"
                                                                                fill="#FF8762" data-color="2"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column m-0 ms-2 ">
                                                                    <p class="m-0"><strong>Built:</strong></p>
                                                                    <p class="m-0">2024</p>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="22 20 156 160" xmlns="http://www.w3.org/2000/svg"
                                                                        width="200" height="200" viewBox="22 20 156 160"
                                                                        data-type="shape" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path
                                                                                d="M175.71 128.712H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h151.42c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M147.106 180a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v50.241a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M128.264 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M109.421 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M90.579 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M71.736 180a2.285 2.285 0 01-2.29-2.279v-42.098c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v50.241a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M42.566 128.487a2.29 2.29 0 01-2.07-1.303 2.275 2.275 0 011.087-3.036l57.436-27.113a2.302 2.302 0 011.963 0l57.435 27.113a2.274 2.274 0 011.087 3.036 2.294 2.294 0 01-3.05 1.082L100 101.617l-56.454 26.65a2.314 2.314 0 01-.98.22z">
                                                                            </path>
                                                                            <path
                                                                                d="M27.581 178.418a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v48.659a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M172.419 178.418a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v48.659a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M175.71 180h-28.604a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M73.325 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M86.663 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 101.373a2.285 2.285 0 01-2.29-2.279V86.442c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v12.653a2.284 2.284 0 01-2.29 2.278z">
                                                                            </path>
                                                                            <path
                                                                                d="M113.337 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M126.675 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M130.988 86.235H69.012c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h61.976c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M79.796 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.286 2.286 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M120.204 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M123.837 69.478H76.163c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h47.674c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M119.4 67.445a2.285 2.285 0 01-2.29-2.279c0-9.39-7.675-17.029-17.11-17.029s-17.11 7.639-17.11 17.029a2.285 2.285 0 01-2.29 2.279 2.285 2.285 0 01-2.29-2.279c0-11.903 9.73-21.587 21.69-21.587 11.959 0 21.689 9.684 21.689 21.587a2.283 2.283 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 44.851H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 36.943H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 35.136a2.285 2.285 0 01-2.29-2.279V22.279C97.711 21.02 98.736 20 100 20s2.29 1.02 2.29 2.279v10.578a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M156.399 118.996h-18.565c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h18.565c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M62.667 118.996H43.601c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h19.066c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M89.459 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 78.393a2.285 2.285 0 01-2.29-2.279v-.621c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M110.541 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column">
                                                                    <p class="m-0"><strong>Location:</strong></p>
                                                                    <p class="m-0">Vedanthangal, Tamil Nadu, India</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                                <ul class="d-flex flex-column  middle-points  ms-4 py-3">
                                                    <li class="text-start"><strong> Curved Wall:</strong> Sculptural, functional, and sun-shielding, winding gracefully through the courtyard.</li>
                                                    <li class="text-start"><strong>Indoor-Outdoor Flow:</strong>  Seamless living spaces that connect with nature, promoting natural ventilation.</li>
                                                </ul>


                                                <div class="icon-text d-flex flex-column flex-md-row gap-3 gap-md-2">
                                                    <div class="icon-circle align-self-start">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="42 17.8 116.075 164.3" viewBox="42 17.8 116.075 164.3" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-m5v63stn3 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
                                                            <g>
                                                                <path d="M137.6 111h.6c7.8 0 13.3-7.9 10.7-15.4-1.7-4.9 0-10.4 4.3-13.4 6.5-4.6 6.5-14.4 0-19-4.2-3-6-8.4-4.3-13.4 2.6-7.5-2.9-15.4-10.7-15.4h-.6c-5 0-9.4-3.3-10.9-8.3-1.5-5.2-6.1-8.3-10.9-8.3-2.4 0-4.8.8-6.9 2.4-2 1.6-4.5 2.4-6.9 2.4-2.4 0-4.9-.8-6.9-2.4-2.1-1.6-4.5-2.4-6.9-2.4-4.8 0-9.4 3.1-10.9 8.3-1.4 4.9-5.9 8.3-10.9 8.3h-.6c-7.8 0-13.3 7.9-10.7 15.4 1.7 4.9 0 10.4-4.3 13.4-6.5 4.6-6.5 14.4 0 19 4.2 3 6 8.4 4.3 13.4-2.6 7.4 2.8 15.2 10.4 15.4L42 164.1l27.8-10.6 9.3 28.6 20.5-45.9 20.5 45.8 9.3-28.5 27.9 10.7L133 112c1.4-.6 3-1 4.6-1zm-76.9-7.7c-1.2-1.8-1.5-4-.8-6.1 2.4-7-.1-14.8-6.1-19C52 77 51 75 51 72.8s1-4.2 2.8-5.5c6-4.2 8.5-12 6.1-19-.7-2.1-.4-4.3.8-6.1 1.2-1.8 3.2-2.8 5.3-2.8h.6c7.1 0 13.4-4.8 15.5-11.8 1-3.3 3.9-4.8 6.3-4.8 1.4 0 2.8.5 3.9 1.4 2.8 2.2 6.3 3.4 9.8 3.4 3.5 0 7-1.2 9.8-3.4 1.2-.9 2.5-1.4 3.9-1.4 2.4 0 5.3 1.5 6.3 4.8 2 6.9 8.4 11.8 15.5 11.8h.6c2.1 0 4.1 1 5.3 2.8 1.2 1.8 1.5 4 .8 6.1-2.4 7 .1 14.8 6.1 19 1.8 1.3 2.8 3.3 2.8 5.5s-1 4.2-2.8 5.5c-6 4.2-8.5 12-6.1 19 .7 2.1.4 4.3-.8 6.1-1.2 1.8-3.2 2.8-5.3 2.8h-.6c-7.1 0-13.4 4.8-15.5 11.8-1 3.3-3.9 4.8-6.3 4.8-1.4 0-2.8-.5-3.9-1.4-2.8-2.2-6.3-3.4-9.8-3.4-3.5 0-7 1.2-9.8 3.4-1.2.9-2.5 1.4-3.9 1.4-2.4 0-5.3-1.5-6.3-4.8-2-6.9-8.4-11.8-15.5-11.8H66c-2.1-.1-4.1-1.1-5.3-2.9zM98 123.5l-1.4.6c.5-.2 1-.4 1.4-.6zm-18.2 45.1l-7-21.6-21.6 8.3 19.4-43.4-1.3-.6c3.8 1 7 3.9 8.2 7.9 1.5 5.2 6.1 8.3 10.9 8.3 2.2 0 4.4-.7 6.4-2.1l2.2 4.8-17.2 38.4zm46.6-21.5l-7 21.6L99 123.2c1-.3 2-.4 3-.4 2.4 0 4.9.8 6.9 2.4 2.1 1.6 4.5 2.4 6.9 2.4 4.8 0 9.4-3.1 10.9-8.3.5-1.7 1.3-3.1 2.4-4.4l18.8 40.4-21.5-8.2z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M94.5 93.2l3.6 3.2.1-.1.1.1 3.1-3.7 23.9-28.2 3.2-3.7-3.7-3.2-5.8-5.1-3.6-3.2-3.1 3.7-15.9 18.6-5.8-5.1-3.6-3.2-3.1 3.7-5 5.9-3.1 3.7 3.6 3.2 15.1 13.4zm-7.1-22.9l9.4 8.3 19-22.4 5.8 5.1-23.8 28.1-.1-.1-.1.1-15.1-13.2 4.9-5.9z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M102.1 114c22.3 0 40.5-18.5 40.5-41.2s-18.1-41.2-40.5-41.2S61.6 50 61.6 72.8 79.8 114 102.1 114zm0-77.6c19.7 0 35.7 16.3 35.7 36.3s-16 36.3-35.7 36.3c-19.7 0-35.7-16.3-35.7-36.3s16-36.3 35.7-36.3z" fill="#ffffff" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="icon-desc-2 d-flex flex-column m-0 ms-4 ms-md-5 ">
                                                        <p class="m-0"><strong>Awards:</strong></p>
                                                        <ul class="d-flex flex-column">
                                                            <li class="text-start m-0"><strong>Featured on ArchDaily:</strong> Recognized for its innovative design blending tradition and modernity.</li>
                                                            <li class="text-start m-0"><strong>Showcased on Arkitera:</strong> Praised for its respectful integration with the local ecosystem and climate.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-container">
                                    <div class="row w-100 align-items-stretch">
                                        <div class="col-12 col-lg-5 pe-0 d-flex">
                                            <div class="marvel-image-slider">
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/delugen-1.webp') }}" data-fancybox="gallery-5">
                                                        <img src="{{ asset('images/delugen-1.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/delugen-2.webp') }}" data-fancybox="gallery-5">
                                                        <img src="{{ asset('images/delugen-2.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/delugen-3.webp') }}" data-fancybox="gallery-5">
                                                        <img src="{{ asset('images/delugen-3.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/delugen-4.webp') }}" data-fancybox="gallery-5">
                                                        <img src="{{ asset('images/delugen-4.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/delugen-5.webp') }}" data-fancybox="gallery-5">
                                                        <img src="{{ asset('images/delugen-5.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                                <div class="image-container">
                                                    <a href= "{{ asset('images/delugen-6.webp') }}" data-fancybox="gallery-5">
                                                        <img src="{{ asset('images/delugen-6.webp') }}" alt="Building Image">
                                                    </a>
                                                    <div class="hover-overlay"></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 col-lg-7 p-0 d-flex">
                                            <div class="slide-card">
                                                <h3 class="highlight-text">Expo Cultural Park Greenhouse Garden</h3>

                                                <div class="row">
                                                    <div class="icon-list d-flex flex-column flex-md-row  flex-md-wrap gy-4 ">
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="28 20 144 160" viewBox="28 20 144 160"
                                                                        height="200" width="200" xmlns="http://www.w3.org/2000/svg"
                                                                        data-type="tint" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path d="M127.8 112.8l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 136.1l.2.5-99.8 35.3-.2-.5 99.8-35.3z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M59.6 80.7v63.6H59V80.7h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M95 108v63.6h-.6V108h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M103.8 62.5v63.6h-.6V62.5h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M139.2 89.8v63.6h-.6V89.8h.6z" fill="#FFFFFF">
                                                                            </path>
                                                                            <path d="M127.8 68.7l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M163.5 92l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M36.3 121.1l88.2 58.4-.3.5L36 121.6c-.1 0 .3-.5.3-.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M166.4 163.5l-130.5-86 .3-.5 130.5 86-.3.5z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M83.8 63.9l88.2 58.4-.3.5-88.2-58.5.3-.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M100.8 136.2l-34-103.9.5-.2 34 103.9-.5.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M112.7 20l32.8 100.6-.5.2-32.9-100.6.6-.2z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M79 35.4l.5.2-25.8 75.1-.5-.2c-.1 0 25.8-75.1 25.8-75.1z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M122.1 21.1l.5.2-24.7 74-.5-.2 24.7-74z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path d="M141.4 28.1l.2.5-93.2 32-.2-.5 93.2-32z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M93.9 116.4c-.3 0-.5-.1-.8-.2L58.4 92.9 72.2 52c.2-.5.7-.9 1.2-.9.6 0 1.1.4 1.2.9l20.5 62.7c.2.7-.2 1.5-.9 1.7h-.3zM61 92l31.3 21-18.8-57.8L61 92z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M94.5 117.5l-.7-2.1 44-15.1-20.7-62.4-43.4 15.3-.7-2.1 45.5-16 22.1 66.6-46.1 15.8z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 162.6l-37.6-24.8.3-43.7h2.2l-.3 42.5 33.2 21.9v-42.3h2.2v46.4z"
                                                                                fill="#FFFFFF"></path>
                                                                            <path
                                                                                d="M95.8 161.8l-.7-2.1 42.8-15.1v-42.7h2.2v44.3c-.1 0-44.3 15.6-44.3 15.6z"
                                                                                fill="#FFFFFF"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc d-flex flex-column">
                                                                    <p class="m-0"><strong>Architect:</strong></p>
                                                                    <p class="m-0">Delugan  Meissl <br> Associated Architects (DMAA)</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 m-0">
                                                            <div class="icon-text d-flex gap-2">
                                                                <div class="icon-circle m-0">
                                                                    <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="20.9 60.914 160.1 80.286"
                                                                        viewBox="20.9 60.914 160.1 80.286" height="200" width="200"
                                                                        xmlns="http://www.w3.org/2000/svg" data-type="color"
                                                                        role="presentation" aria-hidden="true" aria-label="">
                                                                        <defs>
                                                                            <style>
                                                                                #comp-m5v5y3xa svg [data-color="1"] {
                                                                                    fill: #FFFFFF;
                                                                                }

                                                                                #comp-m5v5y3xa svg [data-color="2"] {
                                                                                    fill: #FFFFFF;
                                                                                }
                                                                            </style>
                                                                        </defs>
                                                                        <g>
                                                                            <path
                                                                                d="M157.6 67.6c-.3-.8-1-1.4-1.9-1.4h-16.6l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9h-20.1l.9-2.7c.3-1-.2-2.2-1.3-2.5s-2.2.2-2.5 1.3l-1.3 3.9H90.4l.9-2.7c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-1.3 3.9H66.1l.9-2.7c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-1.3 3.9H46.2c-.9 0-1.6.6-1.9 1.4l-23.3 71c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8H179c.6 0 1.2-.3 1.6-.8s.5-1.2.3-1.8l-23.3-71zm-86.9 69.6h-45l22-67h12.9l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h20.1l-.9 2.7c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l1.3-3.9h14l-22 67h-59zm63.3 0l21.1-64.4 21.1 64.4H134z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M57.7 92.2l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H46c-1.1 0-2 .9-2 2s.9 2 2 2h6.2l5.5-4.1z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M136 92.2h-6.1l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5h-19.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1.1-.3-2.2.2-2.5 1.3l-3.4 10.5H81.8l3-9.2c.3-1-.2-2.2-1.3-2.5-1-.3-2.2.2-2.5 1.3l-3.4 10.5 2.9 4h19.8l-5.2 16H75.2l-5.5 4-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h19.8l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5h8c1.1 0 2-.9 2-2s-.9-2-2-2h-6.7l5.2-16h7.4c1.1 0 2-.9 2-2s-.7-2-1.8-2zm-16.9 20H99.3l5.2-16h19.8l-5.2 16z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M46.9 112.2H40c-1.1 0-2 .9-2 2s.9 2 2 2h5.6l-4 12.2c-.3 1 .2 2.2 1.3 2.5.2.1.4.1.6.1.8 0 1.6-.5 1.9-1.4l4.4-13.5-2.9-3.9z"
                                                                                fill="#C7E3E3" data-color="1"></path>
                                                                            <path
                                                                                d="M74.3 114.9l.9-2.6 3.2-9.8 2.5-7.6c.2-.6.1-1.3-.3-1.8s-1-.8-1.6-.8H54.9c-.9 0-1.6.6-1.9 1.4l-.9 2.6-1.6 5-4.1 12.4c-.2.6-.1 1.3.3 1.8s1 .8 1.6.8h24c1-.1 1.8-.6 2-1.4zM56.4 96.2h19.8l-1.4 4.4-3.8 11.6H51.2l5.2-16z"
                                                                                fill="#FF8762" data-color="2"></path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column m-0 ms-2 ">
                                                                    <p class="m-0"><strong>Built:</strong></p>
                                                                    <p class="m-0">2024</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6 m-0 ">
                                                            <div class="icon-text d-flex ">
                                                                <div class="icon-circle">
                                                                <svg preserveAspectRatio="xMidYMid meet"
                                                                        data-bbox="22 20 156 160" xmlns="http://www.w3.org/2000/svg"
                                                                        width="200" height="200" viewBox="22 20 156 160"
                                                                        data-type="shape" role="presentation" aria-hidden="true"
                                                                        aria-label="">
                                                                        <g>
                                                                            <path
                                                                                d="M175.71 128.712H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h151.42c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M147.106 180a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v50.241a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M128.264 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M109.421 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M90.579 180a2.285 2.285 0 01-2.29-2.279v-42.098a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v42.098a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M71.736 180a2.285 2.285 0 01-2.29-2.279v-42.098c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v42.098a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v50.241a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M42.566 128.487a2.29 2.29 0 01-2.07-1.303 2.275 2.275 0 011.087-3.036l57.436-27.113a2.302 2.302 0 011.963 0l57.435 27.113a2.274 2.274 0 011.087 3.036 2.294 2.294 0 01-3.05 1.082L100 101.617l-56.454 26.65a2.314 2.314 0 01-.98.22z">
                                                                            </path>
                                                                            <path
                                                                                d="M27.581 178.418a2.285 2.285 0 01-2.29-2.279V127.48a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v48.659a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M172.419 178.418a2.285 2.285 0 01-2.29-2.279V127.48c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v48.659a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M52.894 180H24.29a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M175.71 180h-28.604a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h28.604c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M73.325 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M86.663 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 101.373a2.285 2.285 0 01-2.29-2.279V86.442c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v12.653a2.284 2.284 0 01-2.29 2.278z">
                                                                            </path>
                                                                            <path
                                                                                d="M113.337 105.892a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v17.171a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M126.675 113.095a2.285 2.285 0 01-2.29-2.279V86.442a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v24.374a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M130.988 86.235H69.012c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h61.976c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M79.796 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.286 2.286 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M120.204 85.332a2.285 2.285 0 01-2.29-2.279V68.555a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v14.498a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M123.837 69.478H76.163c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h47.674c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M119.4 67.445a2.285 2.285 0 01-2.29-2.279c0-9.39-7.675-17.029-17.11-17.029s-17.11 7.639-17.11 17.029a2.285 2.285 0 01-2.29 2.279 2.285 2.285 0 01-2.29-2.279c0-11.903 9.73-21.587 21.69-21.587 11.959 0 21.689 9.684 21.689 21.587a2.283 2.283 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 44.851H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M105.903 36.943H94.097a2.285 2.285 0 01-2.29-2.279 2.285 2.285 0 012.29-2.279h11.805c1.264 0 2.29 1.02 2.29 2.279a2.284 2.284 0 01-2.289 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 35.136a2.285 2.285 0 01-2.29-2.279V22.279C97.711 21.02 98.736 20 100 20s2.29 1.02 2.29 2.279v10.578a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M156.399 118.996h-18.565c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h18.565c1.264 0 2.29 1.02 2.29 2.279s-1.026 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M62.667 118.996H43.601c-1.264 0-2.29-1.02-2.29-2.279s1.025-2.279 2.29-2.279h19.066c1.264 0 2.29 1.02 2.29 2.279s-1.025 2.279-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M89.459 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.285 2.285 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M100 78.393a2.285 2.285 0 01-2.29-2.279v-.621c0-1.258 1.025-2.279 2.29-2.279s2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                            <path
                                                                                d="M110.541 78.393a2.285 2.285 0 01-2.29-2.279v-.621a2.285 2.285 0 012.29-2.279c1.264 0 2.29 1.02 2.29 2.279v.621a2.284 2.284 0 01-2.29 2.279z">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                                <div class="icon-desc-1 d-flex flex-column">
                                                                    <p class="m-0"><strong>Location:</strong></p>
                                                                    <p class="m-0">Pudong, Shanghai, China</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>



                                                <ul class="d-flex flex-column  middle-points  ms-4 py-3">
                                                    <li class="text-start"><strong>Zero-Energy Design: </strong> The greenhouse operates as a zero-energy building, utilizing energy-efficient systems and natural ventilation.</li>
                                                    <li class="text-start"><strong>Distinct Climate Zones:</strong> Divided into three pavilions—desert, tropical rainforest, and flower garden—each reflecting a unique climate.</li>
                                                </ul>


                                                <div class="icon-text d-flex flex-column flex-md-row gap-3 gap-md-2">
                                                    <div class="icon-circle align-self-start">
                                                        <svg preserveAspectRatio="xMidYMid meet" data-bbox="42 17.8 116.075 164.3" viewBox="42 17.8 116.075 164.3" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-m5v63stn3 svg [data-color="1"] {fill: #FFFFFF;}</style></defs>
                                                            <g>
                                                                <path d="M137.6 111h.6c7.8 0 13.3-7.9 10.7-15.4-1.7-4.9 0-10.4 4.3-13.4 6.5-4.6 6.5-14.4 0-19-4.2-3-6-8.4-4.3-13.4 2.6-7.5-2.9-15.4-10.7-15.4h-.6c-5 0-9.4-3.3-10.9-8.3-1.5-5.2-6.1-8.3-10.9-8.3-2.4 0-4.8.8-6.9 2.4-2 1.6-4.5 2.4-6.9 2.4-2.4 0-4.9-.8-6.9-2.4-2.1-1.6-4.5-2.4-6.9-2.4-4.8 0-9.4 3.1-10.9 8.3-1.4 4.9-5.9 8.3-10.9 8.3h-.6c-7.8 0-13.3 7.9-10.7 15.4 1.7 4.9 0 10.4-4.3 13.4-6.5 4.6-6.5 14.4 0 19 4.2 3 6 8.4 4.3 13.4-2.6 7.4 2.8 15.2 10.4 15.4L42 164.1l27.8-10.6 9.3 28.6 20.5-45.9 20.5 45.8 9.3-28.5 27.9 10.7L133 112c1.4-.6 3-1 4.6-1zm-76.9-7.7c-1.2-1.8-1.5-4-.8-6.1 2.4-7-.1-14.8-6.1-19C52 77 51 75 51 72.8s1-4.2 2.8-5.5c6-4.2 8.5-12 6.1-19-.7-2.1-.4-4.3.8-6.1 1.2-1.8 3.2-2.8 5.3-2.8h.6c7.1 0 13.4-4.8 15.5-11.8 1-3.3 3.9-4.8 6.3-4.8 1.4 0 2.8.5 3.9 1.4 2.8 2.2 6.3 3.4 9.8 3.4 3.5 0 7-1.2 9.8-3.4 1.2-.9 2.5-1.4 3.9-1.4 2.4 0 5.3 1.5 6.3 4.8 2 6.9 8.4 11.8 15.5 11.8h.6c2.1 0 4.1 1 5.3 2.8 1.2 1.8 1.5 4 .8 6.1-2.4 7 .1 14.8 6.1 19 1.8 1.3 2.8 3.3 2.8 5.5s-1 4.2-2.8 5.5c-6 4.2-8.5 12-6.1 19 .7 2.1.4 4.3-.8 6.1-1.2 1.8-3.2 2.8-5.3 2.8h-.6c-7.1 0-13.4 4.8-15.5 11.8-1 3.3-3.9 4.8-6.3 4.8-1.4 0-2.8-.5-3.9-1.4-2.8-2.2-6.3-3.4-9.8-3.4-3.5 0-7 1.2-9.8 3.4-1.2.9-2.5 1.4-3.9 1.4-2.4 0-5.3-1.5-6.3-4.8-2-6.9-8.4-11.8-15.5-11.8H66c-2.1-.1-4.1-1.1-5.3-2.9zM98 123.5l-1.4.6c.5-.2 1-.4 1.4-.6zm-18.2 45.1l-7-21.6-21.6 8.3 19.4-43.4-1.3-.6c3.8 1 7 3.9 8.2 7.9 1.5 5.2 6.1 8.3 10.9 8.3 2.2 0 4.4-.7 6.4-2.1l2.2 4.8-17.2 38.4zm46.6-21.5l-7 21.6L99 123.2c1-.3 2-.4 3-.4 2.4 0 4.9.8 6.9 2.4 2.1 1.6 4.5 2.4 6.9 2.4 4.8 0 9.4-3.1 10.9-8.3.5-1.7 1.3-3.1 2.4-4.4l18.8 40.4-21.5-8.2z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M94.5 93.2l3.6 3.2.1-.1.1.1 3.1-3.7 23.9-28.2 3.2-3.7-3.7-3.2-5.8-5.1-3.6-3.2-3.1 3.7-15.9 18.6-5.8-5.1-3.6-3.2-3.1 3.7-5 5.9-3.1 3.7 3.6 3.2 15.1 13.4zm-7.1-22.9l9.4 8.3 19-22.4 5.8 5.1-23.8 28.1-.1-.1-.1.1-15.1-13.2 4.9-5.9z" fill="#ffffff" data-color="1"></path>
                                                                <path d="M102.1 114c22.3 0 40.5-18.5 40.5-41.2s-18.1-41.2-40.5-41.2S61.6 50 61.6 72.8 79.8 114 102.1 114zm0-77.6c19.7 0 35.7 16.3 35.7 36.3s-16 36.3-35.7 36.3c-19.7 0-35.7-16.3-35.7-36.3s16-36.3 35.7-36.3z" fill="#ffffff" data-color="1"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="icon-desc-2 d-flex flex-column m-0 ms-4 ms-md-5 ">
                                                        <p class="m-0"><strong>Awards:</strong></p>
                                                        <ul class="d-flex flex-column">
                                                            <li class="text-start m-0"><strong>1st Prize in Competition:</strong> Awarded for its innovative design and sustainability approach in 2019.</li>
                                                            <li class="text-start m-0"><strong> Architectural Excellence:</strong> Celebrated for creatively integrating industrial heritage with natural beauty.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
