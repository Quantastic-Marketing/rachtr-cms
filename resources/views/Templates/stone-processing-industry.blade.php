

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
                <img src="{{ isset($banner['banner_image']) ? asset('storage/' . $banner['banner_image']) : asset('images/stone-processing-hero-banner.webp')}}" alt="{{$banner['banner_alt'] ?? 'Stone Processing Industry'}}" />
                <div class="banner_overlay col-lg-12">
                  <div class="content col-lg-10 col-md-12">
                    <div class="container">
                      <div class="content-details ms-0">
                        <h1 class="text-white fw-bold">
                          <span style="color: #ef6e25">Solutions</span> for
                          <br />
                          {{ $banner['banner_title'] ?? 'Stone Processing Industry' }}
                        </h1>
                        <p class="">
                        {{ $banner['banner_description'] ?? ' We offer a comprehensive range of products specifically formulated for various applications in the stone processing industry.' }}
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
      <section class="about-solution innovation-solutions py-3 py-sm-5">
        <div class="container">
          <div class="row align-items-center d-flex">
            <div class="col-md-10">
              <div class="row d-flex">
                <div class="col-lg-6 order-2">
                  <div class="image-container">
                    <!-- <div class="background-box"></div> -->
                    <img
                      src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/Stone-Processing-Industry-Solutions-pic.webp') }}"
                      alt="{{ $about['img_alt'] ?? 'Stone Processing Industry Solutions'}}"
                      class="d-none d-lg-block"
                    />
                    <img
                      src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/Stone-Processing-Industry-Solutions-pic.webp') }}"
                      alt="{{ $about['img_alt'] ?? 'Stone Processing Industry Solutions'}}"
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
                      class="lh-lg-base lh-small display-6 display-md-3 fw-bold mb-4"
                    >
                      {{ Str::before($about['heading'], $about['highlight_text']) }}
                      <span style="color: #ef6e25">{{ $about['highlight_text'] }}</span>
                      {{ Str::after($about['heading'], $about['highlight_text']) }}
                    </h2>
                @else
                  <h2
                      class="lh-lg-base lh-small display-6 display-md-3 fw-bold mb-4"
                    >
                      Welcome to
                      <span style="color: #ef6e25">RachTR</span> Stone Processing
                      Industry Solutions
                    </h2>
                @endif

                @forelse($about['paragraphs'] ?? [] as $para)
                      <p>{{ $para['text'] }}</p>
                      @empty
                      <p>
                        The global demand for natural stones like marble, granite,
                        sandstone, and limestone has surged, especially in the
                        construction industry. India has led in exporting these
                        stones, thanks to innovation in the Stone Processing
                        Industry.
                      </p>
                      <p>
                        To maintain this success, the industry needs quality stones,
                        top-notch processing machinery, and affordable chemicals.
                      </p>
                      <p>
                        RachTR offers comprehensive solutions for stone processing,
                        aiming to reduce dependency on imports and empower Indian
                        stone processors to excel in the global market.
                      </p>
                @endforelse
                  
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      @if(!empty($pageContent) && array_key_exists('type_slider', $pageContent))
      @php
        $typeSlider = $pageContent['type_slider'];
        $backgroundImage = $typeSlider['img'] ?? null;
        $mainHeading = $typeSlider['title'] ?? '';
        $subHeading = $typeSlider['sub_title'] ?? '';
        $slides = $typeSlider['slides'] ?? [];
        
      @endphp
        <section
          class="commercial-building-solutions stone-processing-solutions comprnsive_solution"
          style="background: url('{{ asset(!empty($backgroundImage) ? 'storage/' . $backgroundImage : 'images/stone-process-bg.webp') }}') no-repeat
            center center; background-size: cover;">
          <div class="container">
            <div class="header-heading-part pb-5">
              <h2
                class="text-center display-6 display-lg-4 fw-bold text-black mb-2"
              >
              @if(!empty($mainHeading))
              {{ $mainHeading }} <span style="color: #ef6e25">Solutions</span>
              @else
              Stone Processing
                <span style="color: #ef6e25">Solutions</span>
              @endif
              </h2>
              @if(!empty($subHeading))
                        <h5 class="text-black text-center fw-bold">{{ $subHeading ?? 'Where Quality Matters' }}</h5>
              @endif
            </div>

            <div class="case-studies-item mx-lg-5">
               @forelse($slides as $slide)
                <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                  <div class="col-lg-5 col-12 d-flex position-relative">
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
                  <div
                    class="col-lg-7 col-12 d-flex align-items-center position-relative"
                  >
                    <span class="slider-nav-block right-nav">{!! html_entity_decode($slide['right_tab'] ?? '') !!}</span>
                    <div
                      class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                    >
                      <h3 class="fw-bold m-0 pb-4">{{ $slide['heading'] ?? '' }}</h3>
                      <p class="mb-4 m-0">
                      {{ $slide['intro_paragraph'] ?? '' }}
                      </p>
                    </div>
                  </div>
                </div>
                @empty
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav">Sandstone</span>
                        <figure>
                          <img
                            src="images/marble-pic.webp"
                            alt="Marble"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav">Granite</span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Marble</h3>
                        <p class="mb-4 m-0">
                          Precision solutions for enhancing the elegance of marble
                          surfaces.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav">Marble</span>
                        <figure>
                          <img
                            src="images/granite-pic.webp"
                            alt="Granite"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav">Travertine </span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Granite</h3>
                        <p class="mb-4 m-0">
                          Advanced processing techniques for durable and stunning
                          granite finishes.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav">Granite</span>
                        <figure>
                          <img
                            src="images/travertine-pic.webp"
                            alt="Travertine"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav">Quartzite </span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Travertine</h3>
                        <p class="mb-4 m-0">
                          Tailored solutions to elevate the natural beauty and
                          resilience of travertine.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav">Travertine </span>
                        <figure>
                          <img
                            src="images/quartzite-pic.webp"
                            alt="Quartzite"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav">Sandstone </span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Quartzite</h3>
                        <p class="mb-4 m-0">
                          Innovative methods for transforming quartzite into a symbol
                          of strength and beauty.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                    <div class="col-lg-5 col-12 d-flex position-relative">
                      <div class="case_studies_downd case_study_img-block w-100">
                        <span class="slider-nav-block left-nav">Quartzite </span>
                        <figure>
                          <img
                            src="images/sandstone-pic.webp"
                            alt="Sandstone"
                            class="img-fluid h-100 w-100 object-fit-cover"
                          />
                        </figure>
                      </div>
                    </div>
                    <div
                      class="col-lg-7 col-12 d-flex align-items-center position-relative"
                    >
                      <span class="slider-nav-block right-nav">Marble </span>
                      <div
                        class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                      >
                        <h3 class="fw-bold m-0 pb-4">Sandstone</h3>
                        <p class="mb-4 m-0">
                          Cutting-edge solutions for preserving the texture and color
                          vibrancy of sandstone surfaces.
                        </p>
                      </div>
                    </div>
                  </div>
               @endforelse
            </div>
          </div>
          <span class="banner-overlay"></span>
        </section>
      @else
        <section
          class="commercial-building-solutions stone-processing-solutions comprnsive_solution"
          style="background: url(' {{ asset('images/stone-process-bg.webp') }}') no-repeat
            center center; background-size: cover;">
          <div class="container">
            <div class="header-heading-part pb-5">
              <h2
                class="text-center display-6 display-lg-4 fw-bold text-black mb-2"
              >
                Stone Processing
                <span style="color: #ef6e25">Solutions</span>
              </h2>
              <h5 class="text-black text-center fw-bold">
                Where Quality Matters
              </h5>
            </div>

            <div class="case-studies-item mx-lg-5">
              <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                <div class="col-lg-5 col-12 d-flex position-relative">
                  <div class="case_studies_downd case_study_img-block w-100">
                    <span class="slider-nav-block left-nav">Sandstone</span>
                    <figure>
                      <img
                        src="images/marble-pic.webp"
                        alt="Marble"
                        class="img-fluid h-100 w-100 object-fit-cover"
                      />
                    </figure>
                  </div>
                </div>
                <div
                  class="col-lg-7 col-12 d-flex align-items-center position-relative"
                >
                  <span class="slider-nav-block right-nav">Granite</span>
                  <div
                    class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                  >
                    <h3 class="fw-bold m-0 pb-4">Marble</h3>
                    <p class="mb-4 m-0">
                      Precision solutions for enhancing the elegance of marble
                      surfaces.
                    </p>
                  </div>
                </div>
              </div>
              <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                <div class="col-lg-5 col-12 d-flex position-relative">
                  <div class="case_studies_downd case_study_img-block w-100">
                    <span class="slider-nav-block left-nav">Marble</span>
                    <figure>
                      <img
                        src="images/granite-pic.webp"
                        alt="Granite"
                        class="img-fluid h-100 w-100 object-fit-cover"
                      />
                    </figure>
                  </div>
                </div>
                <div
                  class="col-lg-7 col-12 d-flex align-items-center position-relative"
                >
                  <span class="slider-nav-block right-nav">Travertine </span>
                  <div
                    class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                  >
                    <h3 class="fw-bold m-0 pb-4">Granite</h3>
                    <p class="mb-4 m-0">
                      Advanced processing techniques for durable and stunning
                      granite finishes.
                    </p>
                  </div>
                </div>
              </div>
              <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                <div class="col-lg-5 col-12 d-flex position-relative">
                  <div class="case_studies_downd case_study_img-block w-100">
                    <span class="slider-nav-block left-nav">Granite</span>
                    <figure>
                      <img
                        src="images/travertine-pic.webp"
                        alt="Travertine"
                        class="img-fluid h-100 w-100 object-fit-cover"
                      />
                    </figure>
                  </div>
                </div>
                <div
                  class="col-lg-7 col-12 d-flex align-items-center position-relative"
                >
                  <span class="slider-nav-block right-nav">Quartzite </span>
                  <div
                    class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                  >
                    <h3 class="fw-bold m-0 pb-4">Travertine</h3>
                    <p class="mb-4 m-0">
                      Tailored solutions to elevate the natural beauty and
                      resilience of travertine.
                    </p>
                  </div>
                </div>
              </div>
              <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                <div class="col-lg-5 col-12 d-flex position-relative">
                  <div class="case_studies_downd case_study_img-block w-100">
                    <span class="slider-nav-block left-nav">Travertine </span>
                    <figure>
                      <img
                        src="images/quartzite-pic.webp"
                        alt="Quartzite"
                        class="img-fluid h-100 w-100 object-fit-cover"
                      />
                    </figure>
                  </div>
                </div>
                <div
                  class="col-lg-7 col-12 d-flex align-items-center position-relative"
                >
                  <span class="slider-nav-block right-nav">Sandstone </span>
                  <div
                    class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                  >
                    <h3 class="fw-bold m-0 pb-4">Quartzite</h3>
                    <p class="mb-4 m-0">
                      Innovative methods for transforming quartzite into a symbol
                      of strength and beauty.
                    </p>
                  </div>
                </div>
              </div>
              <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                <div class="col-lg-5 col-12 d-flex position-relative">
                  <div class="case_studies_downd case_study_img-block w-100">
                    <span class="slider-nav-block left-nav">Quartzite </span>
                    <figure>
                      <img
                        src="images/sandstone-pic.webp"
                        alt="Sandstone"
                        class="img-fluid h-100 w-100 object-fit-cover"
                      />
                    </figure>
                  </div>
                </div>
                <div
                  class="col-lg-7 col-12 d-flex align-items-center position-relative"
                >
                  <span class="slider-nav-block right-nav">Marble </span>
                  <div
                    class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100 w-100 m-0"
                  >
                    <h3 class="fw-bold m-0 pb-4">Sandstone</h3>
                    <p class="mb-4 m-0">
                      Cutting-edge solutions for preserving the texture and color
                      vibrancy of sandstone surfaces.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="banner-overlay"></span>
        </section>
      @endif

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
                    @forelse($system['product_category'] as $productCat)
                      
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
                    <p class="text-center fs-6 w-70">
                    {{ $system['description'] ?? '' }}
                    </p>
                  </div>

                  <div class="offer-product-lists six-col-block bg-white px-3 py-4 mb-3 mb-lg-5">
                    <div class="row mx-auto w-80">
                      @foreach($system['products'] as $productId)
                          @php $product = $products[$productId] ?? null; @endphp
                          @if($product)
                            <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                              <div class="offer-product">
                                <figure>
                                  <img src="images/RachTR-VBE33.webp" alt="RachTR VBE33" />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-vbe33' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR VBE33</a
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
                  ​BLOCK REINFORCEMENT SYSTEM
                </h3>
                <p class="text-center fs-6">
                  RachTR's Block Reinforcement System protects and strengthens
                  stone and marble during processing with advanced epoxy adhesives
                  and vacuum infusion technology, ensuring durability and
                  resilience.
                </p>
              </div>

              <div
                class="offer-product-lists six-col-block bg-white px-3 py-4 mb-3 mb-lg-5"
              >
                <div class="row mx-auto">
                  <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img src="images/RachTR-VBE33.webp" alt="RachTR VBE33" />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-vbe33' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR VBE33</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-RE-50-IN.webp"
                          alt="RachTR RE 50 IN"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-re-50-in' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR RE 50 IN</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-BA-50-IN.webp"
                          alt="RachTR BA 50 IN"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-ba-50-in' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR BA 50 IN</a
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-3">
              <div class="header-part mb-lg-5 mb-4">
                <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                  RESIN LINE & CRACK REPAIRING SYSTEMS
                </h3>

                <p class="text-center fs-6">
                  RachTR's Resin Line & Crack Repairing Systems offer
                  UV-resistant, non-yellowing solutions for durable stone repairs,
                  including bleeding-free formulations and fast-curing adhesives.
                </p>
              </div>

              <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                <div class="row">
                  <div class="col-6 col-lg-3 mb-2 mb-lg-4">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-GLE-25.webp"
                          class="big-height cover-fit"
                          alt="RachTR GLE 25"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-gle-25' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR GLE 25</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-2 mb-lg-4">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-NE-25.webp"
                          class="big-height cover-fit"
                          alt="RachTR NE 25"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-ne-25' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR NE 25</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-2 mb-lg-4">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-GLE-34.webp"
                          class="big-height cover-fit"
                          alt="RachTR GLE 34"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-gle-34' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR GLE 34</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-2 mb-lg-4">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-MLE-35.webp"
                          class="big-height cover-fit"
                          alt="RachTR MLE 35"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-mle-35' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR MLE 35</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-GLE-33.webp"
                          class="big-height cover-fit"
                          alt="RachTR GLE 33"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-gle-33' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR GLE 33</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-2 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-MLE-33.webp"
                          class="big-height cover-fit"
                          alt="RachTR MLE 33"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-mle-33' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR MLE 33</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-0 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-RLE-31.webp"
                          class="big-height cover-fit"
                          alt="RachTR RLE 31"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-mle-33' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR RLE 31</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-3 mb-0 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img
                          src="images/RachTR-RLE-21.webp"
                          class="big-height cover-fit"
                          alt="RachTR RLE 21"
                        />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-rle-21' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR RLE 21</a
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-4">
              <div class="header-part mb-lg-5 mb-4">
                <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                  COLOR & GLOSS ENHANCER SYSTEMS
                </h3>
                <p class="text-center fs-6">
                  RachTR's Color & Gloss Enhancer Systems intensify the beauty of
                  granites with deep penetration and vibrant, long-lasting
                  results.
                </p>
              </div>

              <div
                class="offer-product-lists six-col-block bg-white px-3 py-4 mb-3 mb-lg-5"
              >
                <div class="row mx-auto">
                  <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img src="images/RachTR-DG-35.webp" alt="RachTR DG 35" />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-dg-35' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR DG 35</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img src="images/RachTR-SG-34.webp" alt="RachTR SG 34" />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-sg-34' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR SG 34</a
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="col-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="offer-product">
                      <figure>
                        <img src="images/RachTR-SG-33.webp" alt="RachTR SG 33" />
                      </figure>
                      <h6 class="text-center heading-underline">
                        <a
                          href="{{ config('app.url') . '/product-page/rachtr-sg-33' }}"
                          class="text-black fs-6 fw-bold"
                          >RachTR SG 33</a
                        >
                      </h6>
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
          <img src="{{ isset($whyTrust['bg_image']) ? asset('storage/' . $whyTrust['bg_image']) : asset('images/why-trust-bg.webp') }}" class="bg-cover bg-video" alt="{{$whyTrust['img_alt'] ?? ''}}" />
          <div class="overlay"></div>
          <div class="container">
            <div class="why-trust-inner-block p-lg-5 p-4">
              <h2
                class="text-left display-6 display-md-3 fw-bold lh-lg-lg lh-sm text-black pb-lg-3 pb-2 mb-lg-5 mb-4"
              >
              @if(!empty($whyTrust['heading']))
              {!! html_entity_decode($whyTrust['heading'] ?? '') !!}
              @else
                Why Trust <span class="color-orange">RachTR</span> for <br />
                Stone Processing?
              @endif
              </h2>
              <div class="row">
                @forelse ($whyTrust['features'] as $feature)
                  <div class="col-xl-3 col-6">
                    <div
                      class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                    >
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
                            src="images/industry-expertise.webp"
                            alt="INDUSTRY EXPERTISE"
                          />
                          <h6 class="text-center fw-bold text-md-start">
                            INDUSTRY <br />
                            EXPERTISE
                          </h6>
                        </div>
                        <p class="text-black text-center text-md-start fs-6">
                          RachTR has extensive experience in stone processing, offering
                          customized solutions to meet industry demands.
                        </p>
                    </div>
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
                        We prioritize quality in all aspects of our products and
                        services, from sourcing testing, to meet high standards.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                        <img
                          src="images/comprehensive-range.webp"
                          alt="COMPREHENSIVE RANGE"
                        />
                        <h6 class="text-center fw-bold text-md-start">
                          COMPREHENSIVE <br />
                          RANGE
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        We offer complete stone processing solutions, including
                        cleaning, sealing, enhancing, and protecting surfaces.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                        <img
                          src="images/specialize-solution.webp"
                          alt="SPECIALIZED SOLUTIONS"
                        />
                        <h6 class="text-center fw-bold text-md-start">
                          SPECIALIZED <br />
                          SOLUTIONS
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        We specialize in stone processing solutions for marble,
                        granite, travertine quartzite, and sandstone to improve end
                        product quality.
                      </p>
                    </div>
                @endforelse
              </div>
            </div>
          </div>
        </section>
      @else
        <section class="why-trust-rachtr-section">
          <img src="images/why-trust-bg.webp" class="bg-cover bg-video" alt="" />
          <div class="overlay"></div>
          <div class="container">
            <div class="why-trust-inner-block p-lg-5 p-4">
              <h2
                class="text-left display-6 display-md-3 fw-bold lh-lg-lg lh-sm text-black pb-lg-3 pb-2 mb-lg-5 mb-4"
              >
                Why Trust <span class="color-orange">RachTR</span> for <br />
                Stone Processing?
              </h2>
              <div class="row">
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img
                      src="images/industry-expertise.webp"
                      alt="INDUSTRY EXPERTISE"
                    />
                    <h6 class="text-center fw-bold text-md-start">
                      INDUSTRY <br />
                      EXPERTISE
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    RachTR has extensive experience in stone processing, offering
                    customized solutions to meet industry demands.
                  </p>
                </div>
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
                    We prioritize quality in all aspects of our products and
                    services, from sourcing testing, to meet high standards.
                  </p>
                </div>
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img
                      src="images/comprehensive-range.webp"
                      alt="COMPREHENSIVE RANGE"
                    />
                    <h6 class="text-center fw-bold text-md-start">
                      COMPREHENSIVE <br />
                      RANGE
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    We offer complete stone processing solutions, including
                    cleaning, sealing, enhancing, and protecting surfaces.
                  </p>
                </div>
                <div class="col-xl-3 col-6">
                  <div
                    class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                  >
                    <img
                      src="images/specialize-solution.webp"
                      alt="SPECIALIZED SOLUTIONS"
                    />
                    <h6 class="text-center fw-bold text-md-start">
                      SPECIALIZED <br />
                      SOLUTIONS
                    </h6>
                  </div>
                  <p class="text-black text-center text-md-start fs-6">
                    We specialize in stone processing solutions for marble,
                    granite, travertine quartzite, and sandstone to improve end
                    product quality.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
      @endif

      <section class="blogs bg-white">
        <div class="container">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="blogs_sec py-lg-5 py-2">
                <div class="mb-lg-5 mb-2 px-lg-5 mx-lg-5">
                  <h2
                    class="mb-3 pb-2 display-6 display-lg-4 fw-bold blog-case-heading text-dark text-start"
                  >
                    Blogs related to
                    <span class="color-orange">Stone Processing Industry</span>
                  </h2>
                  <p class="color-black">
                    Check out some of our informative blog posts, research and
                    guides on topics related to Stone Processing Industry.
                  </p>
                </div>
                <ul class="padd0">
                  @foreach($blogs->take(3) as $blog)
                  <li class="col-lg-4 mx-3">
                    <a href="{{ route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                      <div class="blogs_img">
                        <img src="{{$blog->featurePhoto}}" />
                      </div>
                      <div class="blogs_contnt">
                        <div class="top_cont">
                            <span class="fw-bold">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d')}}</span>
                            <sup class="fw-bold">.</sup>
                            <span lass="fw-bold">3 min read</span>
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
                  <a href="{{ config('app.url') . '/blogs' }}" target="_blank"
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
            <div class="faqs_headng col-lg-12 py-lg-5 py-4">
              <h2 class="mb-4 fw-bold">{{ $faq['title'] ?? 'FAQs' }}</h2>
              {{ $faq['title'] ?? 'FAQs' }}
            </div>
            <div class="faqs_detls row g-0">
              <div class="col-lg-4 faq_fade_effct pt-lg-5">
                @forelse ($faq['images'] ?? [] as $faqImage)
                    <div class="img">
                      <a href="{{asset('storage/' . $faqImage['image']) }}" data-fancybox="gallery" data-caption="A luxurious room with white marble floors">
                        <img src="{{ asset('storage/' . $faqImage['image']) }}"  alt="{{$faqImage['img_alt'] ?? ''}}"/>
                        <p></p>
                      </a>
                    </div>
                  @empty
                    <div class="img">
                      <a href="{{asset('images/stone-processing-pic1.avif') }}" data-fancybox="gallery" data-caption="Marble slab in a factory">
                        <img src="images/stone-processing-pic1.avif" />
                        <p>Marble slab in a factory</p>
                      </a>
                    </div>
                    <div class="img">
                      <a href="{{asset('images/stone-processing-pic2.avif') }}" data-fancybox="gallery" data-caption="Worker applying RachTR GLE 33 on a marble slab in a factory">
                        <img src="images/stone-processing-pic2.avif" />
                        <p>Worker applying RachTR GLE 33 on a marble slab in a factory</p>
                      </a>
                    </div>
                    <div class="img">
                      <a href="{{asset('images/stone-processing-pic3.avif') }}" data-fancybox="gallery" data-caption="Marble slab in a factory">
                        <img src="images/stone-processing-pic3.avif" />
                        <p>Marble slab in a factory</p>
                      </a>
                    </div>
                    <div class="img">
                      <a href="{{asset('images/stone-processing-pic4.avif') }}" data-fancybox="gallery" data-caption="Marble slab in a factory getting ready for curing">
                        <img src="images/stone-processing-pic4.avif" />
                        <p>Marble slab in a factory getting ready for curing</p>
                      </a>
                    </div>
                    <div class="img">
                      <a href="{{asset('images/stone-processing-pic5.webp') }}" data-fancybox="gallery" data-caption="A factory worker applying RachTR GLE 34 on a white marble slab">
                        <img src="images/stone-processing-pic5.webp" />
                        <p>A factory worker applying RachTR GLE 34 on a white marble slab</p>
                      </a>
                    </div>
                    <div class="img">
                      <a href="{{asset('images/stone-processing-pic6.webp') }}" data-fancybox="gallery" data-caption="A factory worker applying RachTR MLE 33 on a marble slab">
                        <img src="images/stone-processing-pic6.webp" />
                        <p>A factory worker applying RachTR MLE 33 on a marble slab</p>
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
                              What is the purpose of RachTR's Block Reinforcement
                              System?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR's Block Reinforcement System is designed to
                              enhance the structural integrity of stone blocks,
                              preventing cracks and breakage during handling,
                              transportation, and processing. This system ensures
                              that stone blocks remain intact and easier to work
                              with.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              How does RachTR's Resin Line System benefit stone
                              processing?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR's Resin Line System improves the quality and
                              durability of stone slabs by filling in micro-cracks
                              and pores. This results in a smoother, stronger
                              surface that is less prone to damage and provides a
                              better finish for further processing.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              What types of cracks can RachTR's Crack Repairing
                              Systems handle?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR's Crack Repairing Systems are versatile and
                              can handle a wide range of cracks, from hairline
                              fractures to more significant breaks in stone. These
                              systems provide a durable repair that blends
                              seamlessly with the stone's natural appearance.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              What are the advantages of using RachTR's Color &
                              Gloss Enhancer Systems?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR's Color & Gloss Enhancer Systems enhance the
                              natural beauty of stone by deepening its color and
                              adding a high-gloss finish. These systems also
                              provide a protective layer that makes the stone more
                              resistant to stains and environmental damage.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              Can RachTR's Block Reinforcement System be used on
                              all types of natural stones?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              Yes, RachTR's Block Reinforcement System is suitable
                              for a wide variety of natural stones, including
                              marble, granite, limestone, and sandstone. It is
                              designed to work effectively across different stone
                              types to enhance their structural integrity.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              Are RachTR's Crack Repairing Systems visible after
                              application?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              No, RachTR's Crack Repairing Systems are designed to
                              blend seamlessly with the stone, making the repairs
                              virtually invisible. The repaired areas maintain the
                              stone's natural appearance and structural integrity.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              What maintenance is required for stones treated with
                              RachTR's Color & Gloss Enhancer Systems?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              Stones treated with RachTR's Color & Gloss Enhancer
                              Systems require minimal maintenance. Regular
                              cleaning with non-abrasive products will help
                              maintain the enhanced appearance. Periodic
                              reapplication may be necessary to sustain the gloss
                              and color intensity over time.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              Where can I purchase RachTR products for stone
                              processing?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR stone processing products can be purchased
                              through our authorized distributors or you can
                              <a href="{{ config('app.url') . '/contact-us'}}"
                                ><span class="color-orange">contact us</span></a
                              >
                              directly. For bulk orders and customized solutions,
                              you can contact our sales team for assistance and to
                              find the best options for your specific needs.
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
    
