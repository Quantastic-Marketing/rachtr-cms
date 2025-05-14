
    <!-- This is a wrapper open -->
    <div class="wrapper">
        @php 
         $pageContent = $page->content ?? [];
         $client = $pageContent['client'] ?? [];
         $banner = $pageContent['banner'] ?? [];
         $about = $pageContent['about'] ?? [];
         $whyTrust = $pageContent['why_trust'] ?? [];
         $faq = $pageContent['faq'] ?? [];
         $caseStudy = $pageContent['case_study'] ?? [];
         $productsOffer = $pageContent['systems'] ?? [];
        @endphp
      <div class="bnr_sldr service-banner service-solution-hero">
        <div class="row g-0">
          <div class="col-lg-12">
            <div class="item">
              <div class="banner-sec">
                <img
                  src="{{ isset($banner['banner_image']) ? asset('storage/' . $banner['banner_image']) : asset('images/Industria-Flooring-hero-banner.webp') }}"
                  alt="{{$banner['banner_alt'] ?? 'Industrial Flooring' }}"
                  style="object-position: top"
                />
                <div class="banner_overlay col-lg-12">
                  <div class="content col-lg-10 col-md-12">
                    <div class="container">
                      <div class="content-details ms-0">
                        <h1 class="text-white fw-bold">
                          <span style="color: #ef6e25">Solutions</span> for
                          <br />
                          {{ $banner['banner_title'] ?? 'Industrial Flooring' }}
                        </h1>
                        <p class="">
                        {{ $banner['banner_description'] ?? ' We offer a comprehensive range of products specifically formulated for various industrial floorings'}}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="about-solution industrial-about innovation-solutions py-3 py-sm-5">
        <div class="container">
          <div class="row align-items-center d-flex">
            <div class="col-md-11">
              <div class="row d-flex">
                <div class="col-lg-6 order-2">
                  <div class="image-container">
                    <!-- <div class="background-box"></div> -->
                    <img
                      src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/Industrial-Flooring-Solutions-about.webp') }}"
                      alt="{{ $about['img_alt'] ?? 'Industrial Flooring Solutions'}}"
                      class="d-none d-lg-block"
                    />
                    <img
                      src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/Industrial-Flooring-Solutions-about.webp') }}"
                      alt="{{ $about['img_alt'] ?? 'Industrial Flooring Solutions'}}"
                      class="s-block d-lg-none"
                    />
                    <!-- <div class="overlay-box"></div> -->
                  </div>
                </div>
                <div
                  class="col-lg-6 px-4 order-1 d-flex flex-column align-items-center justify-content-center"
                >
                @if(isset($about['heading']))
                  <h2
                      class="lh-lg-base lh-small display-6 display-md-3 fw-bold mb-4 p-lg-0"
                    >
                      {{ Str::before($about['heading'], $about['highlight_text']) }}
                      <span style="color: #ef6e25">{{ $about['highlight_text'] }}</span>
                      {{ Str::after($about['heading'], $about['highlight_text']) }}
                    </h2>
                @else
                  <h2 class="lh-lg-base lh-small display-6 display-md-3 fw-bold mb-4 ms-0 p-lg-0">
                    Welcome to  <span style="color: #ef6e25">RachTR</span><br /> Industrial
                    Flooring Solutions
                  </h2>
                @endif

                @forelse($about['paragraphs'] ?? [] as $para)
                      <p>{{ $para['text'] }}</p>
                      @empty
                        <p>
                          The rise of the industrial sector in the 21st century has
                          driven human progress, emphasizing efficient operations amid
                          challenging conditions.
                        </p>
                        <p>
                          Selecting suitable industrial flooring is crucial for
                          success on the shop floor, focusing on requirements like
                          aesthetics, durability, quality, chemical resistance,
                          affordability, and more.
                        </p>
                        <p>
                          Every sector requires a particular level of flooring
                          coverage, but is not able to get the right flooring.
                        </p>
                        <p>
                          That’s why RachTR always takes a professional, competitive,
                          and independent approach to meet your <a href="{{url('/industrial-flooring-solutions/epoxy-flooring-service')}}"><span>epoxy flooring service</span></a> needs.
                        </p>
                @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      
      @php
        $typeSlider = $pageContent['type_slider'] ?? [];
        $backgroundImage = $typeSlider['img'] ?? null;
        $mainHeading = $typeSlider['title'] ?? '';
        $subHeading = $typeSlider['sub_title'] ?? '';
        $slides = $typeSlider['slides'] ?? [];
      @endphp
        <section class="commercial-building-solutions industrial-solutions-slider comprnsive_solution">
          <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"   class="bg-video">
            <source src="{{ asset('videos/industrial_floor_slider_bg.webm') }}" type="video/webm">
            <source src="{{ asset('videos/industrial_floor_slider_bg.mp4') }}" type="video/mp4">
              Your browser does not support the video tag.
          </video>
          <div class="container">
            <div class="header-heading-part pb-5">
              <h2 class="text-center display-6 display-lg-4 fw-bold text-black mb-2">
                {{ empty($mainHeading) ? 'Industrial Flooring' : $mainHeading}}
                <span style="color: #ef6e25">Solutions</span>
              </h2>
              <h5 class="text-black text-center fw-bold">{{ empty($subHeading) ? 'Where Quality Matters' : $subHeading }}</h5>
            </div>

            <div class="case-studies-item mx-lg-5">
              @forelse($slides as $slide)
                <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                  <div class="col-lg-5 col-12 d-flex  position-relative">
                    <div class="case_studies_downd case_study_img-block w-100">
                      <span class="slider-nav-block left-nav">{!! html_entity_decode($slide['left_tab'] ?? '') !!}</span>
                      <figure>
                        <img
                          src="{{ asset('storage/' . ($slide['image'] ?? '')) }}"
                          alt="{{ $slide['img_alt'] ?? '' }}"
                          class="img-fluid h-100 w-100 object-fit-cover"
                        />
                      </figure>
                    </div>
                  </div>
                  <div class="col-lg-7 col-12 d-flex align-items-center position-relative">
                    <span class="slider-nav-block right-nav">{!! html_entity_decode($slide['right_tab'] ?? '') !!}</span>
                    <div class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0">
                      <h3 class="fw-bold m-0 pb-4">{{ $slide['heading'] ?? '' }}</h3>
                      <p class="mb-4 m-0">
                      {{ $slide['intro_paragraph'] ?? '' }}
                      </p>
                      @if(!empty($slide['features']))
                        <ul class="custom-list">
                          @foreach($slide['features'] as $feature)
                            <li>
                              <img src="{{ asset('images/tickmark-icon.webp') }}" alt="Tick Mark" />
                              {{ $feature['text'] ?? '' }}
                            </li>
                          @endforeach
                        </ul>
                      @endif
                      @if(!empty($slide['bottom_paragraph']))
                        <p class="mt-4">{{ $slide['bottom_paragraph'] }}</p>
                      @endif
                    </div>
                  </div>
                </div>
                @empty
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav"
                          >Warehousing & <br>Logistics</span
                        >
                        <figure>
                          <img
                            src="images/Food-Beverages-Pharma-Industry.webp"
                            alt="Food, Beverages & Pharma Industry"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav"
                        >Automotive, Electronics <br> & Metal Industry</span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Food, Beverages & Pharma Industry</h3>
                        <p class="mb-4 m-0">
                        Hygienic and durable flooring solutions for stringent cleanliness standards and heavy foot traffic.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav"
                          >Food, Beverages &<br /> Pharma Industry</span
                        >
                        <figure>
                          <img
                            src="images/Automotive-Electronics-Meta-Industry.webp"
                            alt="Automotive, Electronics, & Metal Industry"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav"
                        >Chemicals & Fertilizers <br />Industry</span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Automotive, Electronics, & Metal Industry</h3>
                        <p class="mb-4 m-0">
                          Tough and chemical-resistant flooring solutions designed to withstand heavy machinery and harsh environments.
                        </p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav"
                          >Automotive, Electronics, <br />
                          & Metal industry
                        </span>
                        <figure>
                          <img
                            src="images/Chemicals-Fertilizers-Industry.webp"
                            alt="Chemicals & Fertilizers Industry"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav"
                        >Shipping, Railway  <br />& Aviation Industry
                      </span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Chemicals & Fertilizers Industry</h3>
                        <p class="mb-4 m-0">
                        Chemical-resistant and corrosion-proof flooring solutions for safe and efficient operations in aggressive chemical environments.
                        </p>
            
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav"
                          >Chemicals & Fertilizers <br />Industry</span>
                        <figure>
                          <img
                            src="images/Shipping-Railway-Aviation-Industry.webp"
                            alt="Shipping, Railway & Aviation Industry"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav"
                        >Swimming <br />Pools
                      </span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Shipping, Railway & Aviation Industry</h3>
                        <p class="mb-4 m-0">
                          High-performance flooring solutions for heavy-duty usage, including vehicle traffic and cargo handling.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav"
                          >Chemicals & Fertilizers <br /> Industry</span>
                        <figure>
                          <img
                            src="images/Warehousing-Logistics.webp"
                            alt="Warehousing & Logistics"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav"
                        > Food, Beverages & <br /> Pharma Industry</span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Warehousing & Logistics</h3>
                        <p class="mb-4 m-0">
                        Robust and anti-slip flooring solutions for safe material handling, storage, and logistics operations.
                        </p>
                      </div>
                    </div>
                  </div>
              @endforelse
            </div>
          </div>
          <span class="banner-overlay"></span>
        </section>

      @if(!empty($productsOffer))
        <section class="product-we-offer-section">
          <div class="container">
            <h2 class="text-center text-black mb-lg-5 mb-4 fw-bold">
              Products
              <span style="color: #ef6e25">We Offer </span>
            </h2>

            @foreach( $productsOffer ?? [] as $system)
              @if($system['product_category'])
                <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-4">
                    <div class="header-part mb-lg-5 mb-4">
                      <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                        {{ strtoupper($system['category_title']) ?? '' }}
                      </h3>
    
                      <p class="text-center fs-6 w-70">
                      {{ $system['description'] ?? '' }}
                      </p>
                    </div>
                    @forelse($system['product_category'] ?? [] as $productCat) 
                        <div class="header-part mb-lg-5 mb-4">
                          <h4 class="text-center mb-lg-4 mb-2 fs-2 color-orange">{{$productCat['category_subtitle'] ?? ''}}</h4>
                          <p class="text-center fs-6 w-70">
                            {{$productCat['description'] ?? ''}}
                          </p>
                        </div>

                        <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                          <div class="row">
                          
                            @foreach($productCat['products'] as $productId)
                              @php $product = $products[$productId] ?? null; @endphp
                              @if($product)
                                
                                <div class="col-6 col-lg-3 mb-4">
                                  <div class="offer-product">
                                    <figure>
                                      <img src="{{ asset($product->product_images[0] ?? 'images/default-image.webp') }}" alt="{{ $product->name }}" />
                                    </figure>
                                    <h6 class="text-center heading-underline">
                                      <a
                                        href="{{ config('app.url') . '/product-page/' . $product->slug }}"
                                        class="text-black fs-6 fw-bold"
                                        >{{ $product->name }}</a
                                      >
                                    </h6>
                                  </div>
                                </div>
                              @endif
                            @endforeach
                          </div>
                        </div>
                    @empty 
                    @endforelse
                </div>
              @else
              <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-4">
                <div class="header-part mb-lg-5 mb-4">
                  <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                  {{ strtoupper($system['category_title']) ?? '' }}
                  </h3>
                  <p class="text-center fs-6">
                  {{ $system['description'] ?? '' }}
                  </p>
                </div>

                <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                  <div class="epoxy-flooring-block-lists">
                    @foreach($system['products'] as $productId)
                      @php $product = $products[$productId] ?? null; @endphp
                      @if($product)
                        <div class="epoxy-block-view">
                          <div class="offer-product">
                            <figure>
                              <img
                                src="{{ asset($product->product_images[0] ?? 'images/default-image.webp') }}"
                                alt="RachTR Floor 3010 N"
                              />
                            </figure>
                            <h6 class="text-center heading-underline">
                              <a
                                href="{{ config('app.url') . '/product-page/' . $product->slug }}"
                                class="text-black fs-6 fw-bold"
                                >{{ $product->name }}</a
                              >
                            </h6>
                          </div>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </div>

              </div>
              @endif
            @endforeach

          </div>
        </section>
      @else
        <section class="product-we-offer-section">
          <div class="container">
            <h2 class="text-center text-black mb-lg-5 mb-4 fw-bold">
              Products
              <span style="color: #ef6e25">We Offer </span>
            </h2>
            <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-4">
              <div class="header-part mb-lg-5 mb-4">
                <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                  EPOXY FLOORING PRODUCTS
                </h3>
                <p class="text-center fs-6">
                  RachTR's Epoxy Flooring Products offer a complete solution for durable and high-performance floors. Our range includes primers for excellent substrate adhesion, screeds for a robust and level base, and top coats for a seamless, glossy finish.
                </p>
              </div>

              <div
                class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5"
              >
                <div class="epoxy-flooring-block-lists">
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-floor-3010-n' }}">
                        <figure>
                          <img
                            src="images/3010product.webp"
                            alt="RachTR Floor 3010 N"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR Floor 3010 N
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-ec-500' }}">
                        <figure>
                          <img
                            src="images/RachTR-EC-500.webp"
                            alt="RachTR EC 500"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                        RachTR EC 500
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-floor-2010-n' }}">
                        <figure>
                          <img
                            src="images/RachTR-Floor-2010-N.webp"
                            alt="RachTR Floor 2010 N"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR Floor 2010 N
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/screed-ep-81' }}">
                        <figure>
                          <img
                            src="images/Screed-EP-81.webp"
                            alt="Screed EP 81"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          Screed EP 81
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/screed-ep-91' }}">
                        <figure>
                          <img
                            src="images/Screed-EP-91.webp"
                            alt="Screed EP 91"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          Screed EP 91
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-floor-1010-n'}}">
                        <figure>
                          <img
                            src="images/RachTR-Floor-1010-N.webp"
                            alt="RachTR Floor 1010 N"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR Floor 1010 N
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-ep-402' }}">
                        <figure>
                          <img
                            src="images/RachTR-EP-402.webp"
                            alt="RachTR EP 402"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR EP 402
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-ec-250' }}">
                        <figure>
                          <img
                            src="images/RachTR-EC-250.webp"
                            alt="RachTR EC 250"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR EC 250
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-floor-screed-ep-85'}}">
                        <figure>
                          <img
                            src="images/RachTR-Floor-Screed-EP-85.webp"
                            alt="RachTR Floor Screed EP 85"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR Floor Screed EP 85
                        </h6>
                      </a>
                    </div>
                  </div>
                  <div class="epoxy-block-view">
                    <div class="offer-product">
                      <a href="{{ config('app.url') . '/product-page/rachtr-ep-101' }}">
                        <figure>
                          <img
                            src="images/RachTR-EP-101.webp"
                            alt="RachTR EP 101"
                          />
                        </figure>
                        <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR EP 101
                        </h6>
                      </a>
                    </div>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </section>
      @endif
      

      @if(!empty($pageContent['why_trust']))
        <section class="why-trust-rachtr-section">
          <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"   class="bg-video">
          <source src="{{ asset( empty($whyTrust['video_webm']) ? 'videos/why-trust.webm' : 'storage/' . $whyTrust['video_webm'] ) }}" type="video/webm">
          <source src="{{ asset(empty($whyTrust['video_mp4']) ? 'videos/why-trust.mp4' : 'storage/' . $whyTrust['video_mp4'] ) }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="overlay"></div>
          <div class="container">
            <div class="why-trust-inner-block p-lg-5 p-4">
              <h2
                class="text-left display-6 display-md-3 fw-bold lh-lg-lg lh-sm text-black pb-lg-3 pb-2 mb-lg-5 mb-4"
              >
              @if(!empty($whyTrust['heading']))
                {!! html_entity_decode($whyTrust['heading']) !!}
              @else
                Why Trust <span class="color-orange">RachTR</span> for <br />
                Industrial Flooring?
              @endif
              </h2>
              <div class="row">
                @forelse ($whyTrust['features'] as $feature)
                  <div class="col-xl-3 col-6">
                    <div class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center">
                      <img
                        src="{{ asset('storage/' . $feature['image']) }}"
                        alt="{{ strip_tags($feature['title']) }}"
                      />
                      <h6 class="text-center fw-bold text-md-start">
                      {!! $feature['title'] !!}
                      </h6>
                    </div>
                    <p class="text-black text-center text-md-start fs-6">
                    {{ $feature['description'] }}
                    </p>
                  </div>
                  @empty
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                        <img
                          src="images/quality-assurance.webp"
                          alt="QUALITY ASSURANCE"
                        />
                        <h6 class="text-center fw-bold text-md-start">
                          QUALITY <br />
                          ASSURANCE
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        RachTR's industrial flooring is durable and built to last with quality materials and construction methods.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                        <img
                          src="images/customized-solution.webp"
                          alt="RANGE OF OPTIONS"
                        />
                        <h6 class="text-center fw-bold text-md-start">
                          RANGE OF <br> OPTIONS
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        We provide various industrial flooring options to meet your specific needs, including, PU, anti-slip, and chemical-resistant coatings.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                        <img src="images/innovative-products.webp" alt="INNOVATIVE PRODUCTS" />
                        <h6 class="text-center fw-bold text-md-start">
                          INNOVATIVE <br />
                          PRODUCTS
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        We innovate and offer products like anti-slip coatings, sealants, and epoxy flooring to improve safety and efficiency.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                        <img
                          src="images/technical-support.webp"
                          alt="TECHNICAL SUPPORT"
                        />
                        <h6 class="text-center fw-bold text-md-start">
                          TECHNICAL <br />
                          SUPPORT
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        We offer support and training for flooring solutions to ensure your success and satisfaction.
                      </p>
                    </div>
                @endforelse
              </div>
            </div>
          </div>
        </section>
      @else
        <section class="why-trust-rachtr-section">
          <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"   class="bg-video">
          <source src="{{ asset('videos/why-trust.webm') }}" type="video/webm">
          <source src="{{ asset('videos/why-trust.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="overlay"></div>
          <div class="container">
            <div class="why-trust-inner-block p-lg-5 p-4">
              <h2
                class="text-left display-6 display-md-3 fw-bold lh-lg-lg lh-sm text-black pb-lg-3 pb-2 mb-lg-5 mb-4"
              >
                Why Trust <span class="color-orange">RachTR</span> for <br />
                Industrial Flooring?
              </h2>
              <div class="row">
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img
                      src="images/quality-assurance.webp"
                      alt="QUALITY ASSURANCE"
                    />
                    <h6 class="text-center fw-bold text-md-start">
                      QUALITY <br />
                      ASSURANCE
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    RachTR's industrial flooring is durable and built to last with quality materials and construction methods.
                  </p>
                </div>
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img
                      src="images/customized-solution.webp"
                      alt="RANGE OF OPTIONS"
                    />
                    <h6 class="text-center fw-bold text-md-start">
                      RANGE OF <br> OPTIONS
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    We provide various industrial flooring options to meet your specific needs, including, PU, anti-slip, and chemical-resistant coatings.
                  </p>
                </div>
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img src="images/innovative-products.webp" alt="INNOVATIVE PRODUCTS" />
                    <h6 class="text-center fw-bold text-md-start">
                      INNOVATIVE <br />
                      PRODUCTS
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    We innovate and offer products like anti-slip coatings, sealants, and epoxy flooring to improve safety and efficiency.
                  </p>
                </div>
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img
                      src="images/technical-support.webp"
                      alt="TECHNICAL SUPPORT"
                    />
                    <h6 class="text-center fw-bold text-md-start">
                      TECHNICAL <br />
                      SUPPORT
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    We offer support and training for flooring solutions to ensure your success and satisfaction.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      @endif


      <section class="comprnsive_solution case-study-block-section py-lg-5 py-3">
        <div class="container">
          <div class="row g-0">
            <div class="cmp_solutn_heding col-lg-8 col-md-12 py-lg-5 py-3">
              <h2 class="display-6 display-lg-4 fw-bold">
              {!! !empty($caseStudy['heading']) ? html_entity_decode($caseStudy['heading']) : 'Case <span class="color-orange">Studies</span>' !!}
              </h2>
            </div>
            <div class="case-studies-item">
              @forelse ($caseStudy['slides'] ?? [] as $slide)
                <div class="case_studies row g-0">
                  <div class="col-md-4 col-12 order-2 order-md-1">
                    <div class="case_studies_contn">
                      <h3 class="fw-bold pb-2">
                      {{ $slide['left_title'] }}
                      </h3>
                      @foreach ($slide['paragraphs'] ?? [] as $para)
                        <p class="pb--md-5 mb-md--5">{{ $para['text'] }}</p>
                      @endforeach
                    
                      <a
                        href="{{ $slide['link'] ?? '#' }}"
                        target="_blank"
                        >View Case Study</a
                      >
                      <div class="case_studies_downd d-md-none mt-4">
                        <div class="downd_img">
                          <img
                            src="{{ asset('storage/' . $slide['image_desktop']) }}"
                            alt="{{ $slide['img_alt'] ?? '' }}"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block"
                  >
                    <div class="case_studies_downd">
                      <div class="downd_img">
                        <img
                          src="{{ asset('storage/' . $slide['image_desktop']) }}"
                          alt="{{ $slide['img_alt'] ?? '' }}"
                        />
                      </div>
                      <div
                        class="case-study-info d-flex justify-content-between p-lg-5 p-3 gap-2"
                      >
                        <div class="study-details">
                          <h6 class="color-grey fw-bold fs-6">{{ $slide['right_title'] }}</h6>
                          <h4 class="color-black fw-bold fs-5 mb-0">
                          {{ $slide['subtitle'] }}
                          </h4>
                        </div>
                        <div class="study-link">
                          <a href="{{ $slide['link'] ?? '#' }}" target="_blank">
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rf06 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
                                <g>
                                    <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
                                </g>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @empty
                  <div class="case_studies row g-0">
                    <div class="col-md-4 col-12 order-2 order-md-1">
                      <div class="case_studies_contn">
                        <h3 class="fw-bold pb-2">
                          Successful Restoration of Delhivery's Warehouse Damaged Concrete Floor
                        </h3>
                        <p class="pb--md-5 mb-md--5">
                          Delhivery, since 2011, is a top e-commerce logistics provider in India, handling last-mile delivery, warehousing, and freight. Its tech and network are vital for Indian e-commerce.
                        </p>
                      
                        <a
                          href="{{ asset('/pdfFile/Delhivery_carousel.pdf')}}"
                          target="_blank"
                          >View Case Study</a
                        >
                        <div class="case_studies_downd d-md-none mt-4">
                          <div class="downd_img">
                            <img
                              src="images/Restoration-of-Delhivery-Damaged-Floor.webp"
                              alt="Restoration of Delhivery's damaged floor"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block"
                    >
                      <div class="case_studies_downd">
                        <div class="downd_img">
                          <img
                            src="images/Restoration-of-Delhivery-Damaged-Floor.webp"
                            alt="Restoration of Delhivery's damaged floor"
                          />
                        </div>
                        <div
                          class="case-study-info d-flex justify-content-between p-lg-5 p-3 gap-2"
                        >
                          <div class="study-details">
                            <h6 class="color-grey fw-bold fs-6">Download Case Study</h6>
                            <h4 class="color-black fw-bold fs-5 mb-0">
                              Restoration of Delhivery's Damaged Floor
                            </h4>
                          </div>
                          <div class="study-link">
                            <a href="{{ asset('/pdfFile/Delhivery_carousel.pdf')}}" target="_blank">
                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rf06 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
                                <g>
                                    <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
                                </g>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-0">
                    <div class="col-md-4 col-12 order-2 order-md-1">
                      <div class="case_studies_contn">
                        <h3 class="fw-bold pb-2">
                          Epoxy Flooring Solution on Oil-Prone Areas for Welspun
                        </h3>
                        <p class="pb--md-5 mb-md--5">
                          Welspun, a global leader in textiles, offers high-quality home textiles & flooring solutions. Their diverse reach and focus on innovation & sustainability set them apart. They aim to be a top brand, prioritizing customer experience and social responsibility.
                        </p>
                      
                        <a
                          href="{{asset('pdfFile/Welpsun_carousel.pdf')}}"
                          target="_blank"
                          >View Case Study</a
                        >
                        <div class="case_studies_downd d-md-none mt-4">
                          <div class="downd_img">
                            <img
                              src="images/Epoxy-Flooring-Solution-for-Welspun.webp"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block"
                    >
                      <div class="case_studies_downd">
                        <div class="downd_img">
                          <img
                            src="images/Epoxy-Flooring-Solution-for-Welspun.webp"
                          />
                        </div>
                        <div
                          class="case-study-info d-flex justify-content-between p-lg-5 p-3 gap-2"
                        >
                          <div class="study-details">
                            <h6 class="color-grey fw-bold fs-6">Download Case Study</h6>
                            <h4 class="color-black fw-bold fs-5 mb-0">
                              Epoxy Flooring Solution for Welspun
                            </h4>
                          </div>
                          <div class="study-link">
                            <a href="{{asset('pdfFile/Welpsun_carousel.pdf')}}" target="_blank">
                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rf06 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
                                <g>
                                    <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
                                </g>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-0">
                    <div class="col-md-4 col-12 order-2 order-md-1">
                      <div class="case_studies_contn">
                        <h3 class="fw-bold pb-2">
                          Achieved a Seamless and Hygienic Flooring Solution at FMCG Factory, Haridwar
                        </h3>
                        <p class="pb--md-5 mb-md--5">
                          FMCG Haridwar, a prominent player in the food industry, required a seamless flooring solution to inhibit microorganism growth and ensure product safety.
                        </p>
                        <p class="pb--md-5 mb-md--5">
                          The existing epoxy flooring was damaged, and the plant operations could not be halted, necessitating a swift, dust-free maintenance solution.
                        </p>
                        <a
                          href="{{ asset('pdfFile/Case_study_ITC.pdf')}}"
                          target="_blank"
                          >View Case Study</a
                        >
                        <div class="case_studies_downd d-md-none mt-4">
                          <div class="downd_img">
                            <img
                              src="images/Hygienic-Flooring-Solution-for-FMCG-Factory-Haridwar.webp"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block"
                    >
                      <div class="case_studies_downd">
                        <div class="downd_img">
                          <img
                            src="images/Hygienic-Flooring-Solution-for-FMCG-Factory-Haridwar.webp"
                          />
                        </div>
                        <div
                          class="case-study-info d-flex justify-content-between p-lg-5 p-3 gap-2"
                        >
                          <div class="study-details">
                            <h6 class="color-grey fw-bold fs-6">Download Case Study</h6>
                            <h4 class="color-black fw-bold fs-5 mb-0">
                              Hygienic Flooring Solution for FMCG Factory, Haridwar
                            </h4>
                          </div>
                          <div class="study-link">
                            <a href="{{ asset('pdfFile/Case_study_ITC.pdf')}}" target="_blank">
                              <svg preserveAspectRatio="xMidYMid meet" data-bbox="16.378 16.378 167.244 167.244" viewBox="16.378 16.378 167.244 167.244" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-label=""><defs><style>#comp-lyo12rf06 svg [data-color="1"] {fill: #EF6E25;}</style></defs>
                                <g>
                                    <path d="M100 16.378c-46.183 0-83.622 37.438-83.622 83.622 0 46.183 37.439 83.622 83.622 83.622 46.184 0 83.622-37.439 83.622-83.622 0-46.184-37.438-83.622-83.622-83.622zM77.228 94.654a4.955 4.955 0 0 1 7.009 0l8.328 8.328v-36.42a7.435 7.435 0 1 1 14.87 0v36.421l8.329-8.329a4.955 4.955 0 0 1 7.009 0 4.955 4.955 0 0 1 0 7.009l-19.265 19.265-.003.003a4.94 4.94 0 0 1-3.505 1.452 4.942 4.942 0 0 1-3.504-1.451l-19.268-19.267a4.958 4.958 0 0 1 0-7.011zm56.616 42.181c0 2.78-2.275 5.054-5.054 5.054H71.21c-2.78 0-5.054-2.275-5.054-5.054v-1.989c0-2.78 2.275-5.054 5.054-5.054h57.58c2.78 0 5.054 2.275 5.054 5.054v1.989z" fill="#010107" data-color="1"></path>
                                </g>
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforelse
            </div>
          </div>
        </div>
      </section>

      <section class="blogs bg-white">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="blogs_sec py-lg-5 py-2">
                <div class="mb-lg-5 mb-2 px-lg-5 mx-lg-5">
                  <h2
                    class="mb-3 pb-2 display-6 display-lg-4 fw-bold blog-case-heading text-dark text-start"
                  >
                    Blogs related to Industrial  <br /> Flooring Industry
                  </h2>
                  <p class="color-black">
                    Check out some of our informative blog posts, research and guides on topics related to Industrial Flooring.


                  </p>
                </div>
                <ul class="custom-blog-design padd0 col-lg-10 mx-auto">
                  @php $blogs = $blogs->take(2); @endphp
                  @foreach($blogs as $blog)
                  <li>
                    <a href="{{ route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                      <div class="blogs_img">
                        <img
                          src="{{$blog->featurePhoto}}"
                        />
                      </div>
                      <div class="blogs_contnt">
                          <div class="top_cont">
                            <span class="fw-bold">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d')}}</span>
                            <sup class="fw-bold">.</sup>
                            <span class="fw-bold">2 min read</span>
                          </div>
                          <div class="btm_cont">
                            <h5><strong class="title-blog">{{$blog->title}}</strong></h5>
                          </div>
                      </div>
                    </a>
                  </li>
                  @endforeach
                </ul>
                <div class="view_btn col-lg-3 py-lg-5 py-3">
                  <a href="{{ config('app.url') . '/blogs'}}" target="_blank"
                    >VIEW ALL</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="our-clients py-lg-5 py-3 bg-grey">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12">
              <div class="clients-content row align-items-center">
                <div class="heading-holder col-12 col-lg-2 mb-4 mb-lg-0">
                  <h2 class="mb-0 color-orange fs-2 fw-bold">{{ $client['title'] ?? 'Our Clients' }}</h2>
                </div>
                <div class="client-slider col-12 col-lg-10">
                  @forelse ($client['companies'] ?? [] as $company)
                    <div class="client-slide">
                      <img src="{{ asset('storage/' . ($company['image'] ?? '')) }}" alt="{{$company['img_alt'] ?? 'Image Alt' }}" />
                    </div>
                    @empty
                      <div class="client-slide">
                      <img src="images/studio-logo.webp" alt="Studio" />
                      </div>
                      <div class="client-slide">
                        <img src="images/genpact-logo.webp" alt="Genpact" />
                      </div>
                      <div class="client-slide">
                        <img src="images/novotel.webp" alt="Novotel" />
                      </div>
                      <div class="client-slide">
                        <img src="images/godrej-logo.webp" alt="godrej" />
                      </div>
                      <div class="client-slide">
                        <img src="images/unilever.webp" alt="Unilever" />
                      </div>
                      <div class="client-slide">
                        <img src="images/kamala-pasand.webp" alt="Kamala Pasand" />
                      </div>
                      <div class="client-slide">
                        <img src="images/wonder-logo.webp" alt="Wonder" />
                      </div>
                      <div class="client-slide">
                        <img src="images/honeywell-logo.webp" alt="Honeywell" />
                      </div>
                      <div class="client-slide">
                        <img src="images/temple-logo.webp" alt="Temple" />
                      </div>
                      <div class="client-slide">
                        <img src="images/vimal-logo.webp" alt="Vimal" />
                      </div>
                      <div class="client-slide">
                        <img src="images/delhi-metro-logo.webp" alt="Delhi Metro" />
                      </div>
                      <div class="client-slide">
                        <img src="images/grand-hyat-logo.webp" alt="Grand Hyat" />
                      </div>
                      <div class="client-slide">
                        <img src="images/ramada-logo.webp" alt="Ramada" />
                      </div>
                      <div class="client-slide">
                        <img src="images/india-bulls-logo.webp" alt="India Bulls" />
                      </div>
                      <div class="client-slide">
                        <img src="images/ds-group-logo.webp" alt="DS Group" />
                      </div>
                      <div class="client-slide">
                        <img src="images/rajashree-logo.webp" alt="Rajashree" />
                      </div>
                      <div class="client-slide">
                        <img src="images/kent-logo.webp" alt="Kent" />
                      </div>
                      <div class="client-slide">
                        <img src="images/taj-logo.webp" alt="Taj" />
                      </div>
                      <div class="client-slide">
                        <img src="images/gulshan-logo.webp" alt="Gulshan" />
                      </div>
                      <div class="client-slide">
                        <img src="images/punj-lyod-logo.webp" alt="Punj Llyod" />
                      </div>
                      <div class="client-slide">
                        <img src="images/mahagun-logo.webp" alt="Mahagun" />
                      </div>
                      <div class="client-slide">
                        <img src="images/ace-logo.webp" alt="ACE" />
                      </div>
                      <div class="client-slide">
                        <img src="images/ds-food-logo.webp" alt="DS Food" />
                      </div>
                      <div class="client-slide">
                        <img src="images/dlf-logo.webp" alt="DLF" />
                      </div>
                  @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="faqs bg-white pb-5">
        <div class="container">
          <div class="row g-0">
            <div class="faqs_headng col-lg-12  py-lg-5 py-4">
              <h2 class="mb-4 fw-bold">{{ $faq['title'] ?? 'FAQs' }}</h2>
              {{ $faq['title'] ?? 'FAQs' }}
              
            </div>
            <div class="faqs_detls row g-0">
              <div class="col-lg-4 faq_fade_effct pt-lg-5">
                @forelse ($faq['images'] ?? [] as $faqImage)
                  <div class="img">
                    <a href="{{asset('storage/' . $faqImage['image']) }}" data-fancybox="gallery" data-caption="A luxurious room with white marble floors">
                      <img src="{{ asset('storage/' . $faqImage['image']) }}" alt="{{$faqImage['img_alt'] ?? ''}}" />
                      <p></p>
                    </a>
                  </div>
                 @empty
                  <div class="img">
                    <a href="{{asset('images/industry-solution-pic1.webp') }}" data-fancybox="gallery" data-caption="Green Industrial Epoxy Flooring RachTR">
                    <img src="images/industry-solution-pic1.webp" alt="RachTR's green industrial epoxy flooring"/>
                    <p>Green Industrial Epoxy Flooring RachTR</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/industry-solution-pic2.webp') }}" data-fancybox="gallery" data-caption="An individual applying grey epoxy flooring">
                      <img src="images/industry-solution-pic2.webp" alt="An individual applying grey epoxy flooring"/>
                      <p>An individual applying grey epoxy flooring</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/industry-faq-3.webp') }}" data-fancybox="gallery" data-caption="RachTR's team performing epoxy flooring activities">
                      <img src="images/industry-faq-3.webp" alt="RachTR's team performing epoxy flooring activities"/>
                      <p>RachTR's team performing epoxy flooring activities</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/industry-solution-pic4.webp') }}" data-fancybox="gallery" data-caption="RachTR's team applying Epoxy flooring in an industry">
                      <img src="images/industry-solution-pic4.webp" alt="RachTR's team applying epoxy flooring in a factory"/>
                      <p>RachTR's team applying Epoxy flooring in an industry</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/industry-faq-5.webp') }}" data-fancybox="gallery" data-caption="An individual applying blue color epoxy flooring">
                      <img src="images/industry-faq-5.webp" alt="An individual applying blue color epoxy flooring"/>
                      <p>An individual applying blue color epoxy flooring</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/industry-solution-pic6.webp') }}" data-fancybox="gallery" data-caption="Process before applying RachTR's epoxy flooring">
                      <img src="images/industry-solution-pic6.webp" alt="Process before applying RachTR's epoxy flooring "/>
                      <p>Process before applying RachTR's epoxy flooring</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/industry-solution-pic7.webp') }}" data-fancybox="gallery" data-caption="Blue RachTR Epoxy Flooring in Welspun">
                      <img src="images/industry-solution-pic7.webp" alt="Blue RachTR epoxy flooring in Welspun"/>
                      <p>Blue RachTR Epoxy Flooring in Welspun</p>
                    </a>
                  </div>
                @endforelse
              </div>
              <div class="col-lg-7">
                <div class="tab_sec">
                  <div
                    class="tabs_detls mt-4"
                    style="overflow-y: visible; height: auto"
                  >
                    <div class="tab-content current">
                      @forelse($faq['questions'] ?? [] as $faq)
                      <div class="accordion-wrapper">
                        <div class="acc-head py-3">
                          <h6 class="mb-0 fw-bold">
                          {!! $faq['acc_title'] !!} 
                          </h6>
                        </div>
                        <div class="acc-body">
                        {!! $faq['acc_body'] !!}
                        </div>
                      </div>
                        @empty
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                What types of industrial flooring solutions does RachTR offer?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                RachTR offers a range of industrial flooring solutions, including Epoxy Flooring and Polyurethane (PU) Flooring. These solutions are designed to meet the specific needs of various industries, providing durability, chemical resistance, and ease of maintenance.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                What are the benefits of using Epoxy Flooring in industrial settings?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                Epoxy Flooring provides excellent durability, chemical resistance, and a seamless finish that is easy to clean and maintain. It is ideal for high-traffic areas and environments where a strong, long-lasting floor is essential.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                How does PU Flooring differ from Epoxy Flooring?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                PU Flooring is more flexible and can withstand higher levels of thermal shock and UV exposure compared to Epoxy Flooring. This makes it suitable for environments with significant temperature fluctuations and where outdoor exposure is common.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                              What industries can benefit from RachTR's industrial flooring solutions?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                RachTR's industrial flooring solutions are suitable for various industries, including Automobile, Pharmaceutical, Electronics, Food & Beverages, Metal Fabrication, Chemical Industry, and Warehouses & Godowns.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                Are RachTR's flooring solutions resistant to chemicals and stains?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                Yes, both Epoxy and PU Flooring solutions from RachTR offer high resistance to chemicals and stains, making them ideal for industries where spills and exposure to harsh substances are common.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                How do RachTR's flooring solutions contribute to safety in the workplace?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                RachTR's flooring solutions can be customized with anti-slip properties, enhancing safety by reducing the risk of slips and falls. They also create a seamless surface that minimizes tripping hazards.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                Can RachTR's flooring solutions withstand heavy machinery and high traffic?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                Yes, RachTR's Epoxy and PU Flooring solutions are designed to withstand heavy machinery, high foot traffic, and the wear and tear typical in industrial environments. They provide a durable surface that maintains its integrity over time.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                                How do RachTR's flooring solutions ensure hygiene in the food and pharmaceutical industries?

                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                                RachTR's flooring solutions provide seamless, non-porous surfaces that are easy to clean and sanitize. This is crucial for maintaining hygiene standards in food and pharmaceutical industries, preventing contamination and ensuring a safe production environment.
                              </p>
                            </div>
                          </div>
                          <div class="accordion-wrapper">
                            <div class="acc-head py-3">
                              <h6 class="mb-0 fw-bold">
                              How do I get a free quote for RachTR epoxy flooring?
                              </h6>
                            </div>
                            <div class="acc-body">
                              <p>
                              Simply fill out the form by <a href="{{ config('app.url') . '/industrial-flooring-solutions/epoxy-flooring-services#epoxy-form-sec'}}"><span class="color-orange">clicking here</span></a>, and a RachTR representative will contact you to discuss your project and provide a free quote.
                              </p>
                            </div>
                          </div>
                      @endforelse
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
