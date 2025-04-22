
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
      <!-- This is a banner open -->
      

        <div class="bnr_sldr service-banner service-solution-hero">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="item">
                <div class="banner-sec">
                    <img
                      src= "{{ isset($banner['banner_image']) ? asset('storage/' . $banner['banner_image'] ) : asset('images/hero-banner-residential-commercial-building-pic.webp')  }}"
                      alt="{{ $banner['banner_alt'] ?? 'Resiential & commercial Buildings' }}"
                    />
                  <div class="banner_overlay col-lg-12">
                    <div class="content col-lg-10 col-md-12">
                      <div class="container">
                        <div class="content-details ms-0">
                          <h1 class="text-white fw-bold">
                            <span style="color: #ef6e25">Solutions</span> for
                            <br/>
                            {{ $banner['banner_title'] ?? 'Residential & Commercial Buildings' }}
                          </h1>
                          <p>{{ $banner['banner_description'] ?? 'We offer a comprehensive range of products specifically formulated for various applications in residential and commercial buildings.' }}</p>
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
                  <div class="col-lg-6 order-2 d-none d-lg-block">
                    <div class="image-container">
                      <!-- <div class="background-box"></div> -->
                        <img
                          src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/residential-commercial-building-solution.webp') }}"
                          alt="{{ $about['img_alt'] ?? 'Residential Commercial Buildings' }}"
                          class="d-none d-lg-block"
                        />
                        <img
                          src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/residential-commercial-building-solution.webp') }}"
                          alt="{{ $about['img_alt'] ?? 'Residential Commercial Buildings' }}"
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
                      <span style="color: #ef6e25">RachTR</span>
                      Residential & Commercial Buildings Solutions
                    </h2>
                  @endif
                    
                    <div class="image-container d-flex d-lg-none my-3">
                      <!-- <div class="background-box"></div> -->
                      <img
                        src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/residential-commercial-building-solution.webp') }}"
                        alt="{{ $about['img_alt'] ?? 'Residential commercial building solution'}}"
                        class="d-none d-lg-block"
                      />
                      <img
                        src="{{ isset($about['image']) ? asset('storage/' . $about['image']) : asset('images/residential-commercial-building-solution.webp') }}"
                        alt="{{ $about['img_alt'] ?? 'Residential commercial building solution' }}"
                        class="s-block d-lg-none"
                      />
                      <!-- <div class="overlay-box"></div> -->
                    </div> 
                    @forelse($about['paragraphs'] ?? [] as $para)
                      <p>{{ $para['text'] }}</p>
                      @empty
                       <p>Flooring is the major highlight for any residential or commercial building project. However, selection of right chemicals for stones and tiles flooring is a major challenge.</p>
                       <p>RachTR provides the best solutions for all kind of marbles, stones & tiles and all application area, which results in a hassle-free experience both during and after flooring work and a perfect floor.</p>
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
        <section class="commercial-building-solutions residential comprnsive_solution" style="background: url('{{ asset( empty ($backgroundImage) ? 'images/commercial-building-solutions.webp' : 'storage/' . $backgroundImage) }}') no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="header-heading-part pb-5">
                    <h2 class="text-center display-6 display-lg-4 fw-bold text-black mb-2">
                        {{ empty($mainHeading) ? 'Residential Commercial Building' : $mainHeading }} <span style="color: #ef6e25">Solutions</span>
                    </h2>
                    @if($subHeading)
                        <h5 class="text-black text-center fw-bold">{{ empty($subHeading) ? 'Where Quality Matters' : $subHeading }}</h5>
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
                            <div class="col-lg-7 col-12 d-flex align-items-center position-relative">
                                <span class="slider-nav-block right-nav">{!! html_entity_decode($slide['right_tab'] ?? '') !!}</span>
                                <div class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100">
                                    <h3 class="fw-bold m-0 pb-4">{{ $slide['heading'] ?? '' }}</h3>
                                    <p class="mb-4 m-0">{{ $slide['intro_paragraph'] ?? '' }}</p>
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
                                >Resorts &<br />
                                Landscaping</span
                              >
                              <figure>
                                <img
                                  src="images/high-rising-buildings.webp"
                                  alt="High Rise Buildings"
                                  class="img-fluid h-100 w-100 object-fit-cover"
                                />
                              </figure>
                            </div>
                          </div>
                          <div
                            class="col-lg-7 col-12 d-flex align-items-center position-relative"
                          >
                            <span class="slider-nav-block right-nav"
                              >Residential Homes <br />& Villas
                            </span>
                            <div
                              class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100"
                            >
                              <h3 class="fw-bold m-0 pb-4">High Rise Buildings</h3>
                              <p class="mb-4 m-0">
                                Our products are engineered to withstand the unique
                                challenges of
                              </p>
                              <ul class="custom-list">
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Tall structures
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Providing superior durability
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Weather resistance
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Aesthetic appeal
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                          <div class="col-lg-5 col-12 d-flex position-relative">
                            <div class="case_studies_downd case_study_img-block w-100">
                              <span class="slider-nav-block left-nav"
                                >High Rise<br />
                                Buildings</span
                              >
                              <figure>
                                <img
                                  src="images/residential-home-villas.webp"
                                  alt="Residential Homes & Villas"
                                  class="img-fluid h-100 w-100 object-fit-cover"
                                />
                              </figure>
                            </div>
                          </div>
                          <div
                            class="col-lg-7 col-12 d-flex align-items-center position-relative"
                          >
                            <span class="slider-nav-block right-nav"
                              >Public <br />Buildings
                            </span>
                            <div
                              class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100"
                            >
                              <h3 class="fw-bold m-0 pb-4">Residential Homes & Villas</h3>
                              <p class="mb-4 m-0">
                                Our coatings and adhesives enhance the beauty,
                                functionality, and longevity of
                              </p>
                              <ul class="custom-list">
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Residential spaces
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Offering protection against wear
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Moisture
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Stains
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                          <div class="col-lg-5 col-12 d-flex position-relative">
                            <div class="case_studies_downd case_study_img-block w-100">
                              <span class="slider-nav-block left-nav"
                                >Residential Homes<br />
                                & Villas
                              </span>
                              <figure>
                                <img
                                  src="images/public-buildings.webp"
                                  alt="Public Buildings"
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
                              class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100"
                            >
                              <h3 class="fw-bold m-0 pb-4">Public Buildings</h3>
                              <p class="mb-4 m-0">
                                RachTR offers specialized solutions for public buildings
                                such as
                              </p>
                              <ul class="custom-list">
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Schools
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Hospitals
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Government facilities
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Commercial complexes
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                          <div class="col-lg-5 col-12 d-flex position-relative">
                            <div class="case_studies_downd case_study_img-block w-100">
                              <span class="slider-nav-block left-nav"
                                >Public <br />Buildings
                              </span>
                              <figure>
                                <img
                                  src="images/swimming-pools.webp"
                                  alt="Swimming Pools"
                                  class="img-fluid h-100 w-100 object-fit-cover"
                                />
                              </figure>
                            </div>
                          </div>
                          <div
                            class="col-lg-7 col-12 d-flex align-items-center position-relative"
                          >
                            <span class="slider-nav-block right-nav"
                              >Resorts &<br />
                              Landscaping
                            </span>
                            <div
                              class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100"
                            >
                              <h3 class="fw-bold m-0 pb-4">Swimming Pools</h3>
                              <p class="mb-4 m-0">
                                Our waterproofing solutions protect pool surfaces from
                              </p>
                              <ul class="custom-list">
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Leaks
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Cracks
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Chemical damage
                                </li>
                              </ul>
                              <p class="mt-4">
                                ensuring a safe and enjoyable swimming experience
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="case_studies row g-4 px-lg-5 align-items-stretch">
                          <div class="col-lg-5 col-12 d-flex position-relative">
                            <div class="case_studies_downd case_study_img-block w-100">
                              <span class="slider-nav-block left-nav"
                                >Swimming <br />Pools</span
                              >
                              <figure>
                                <img
                                  src="images/resort-landscaping.webp"
                                  alt="Resorts & Landscaping"
                                  class="img-fluid h-100 w-100 object-fit-cover"
                                />
                              </figure>
                            </div>
                          </div>
                          <div
                            class="col-lg-7 col-12 d-flex align-items-center position-relative"
                          >
                            <span class="slider-nav-block right-nav"
                              >High Rise <br />Buildings</span
                            >
                            <div
                              class="case_studies_contn solution-slide-block d-flex flex-column justify-content-center align-items-start h-100"
                            >
                              <h3 class="fw-bold m-0 pb-4">Resorts &amp; Landscaping</h3>
                              <p class="mb-4 m-0">
                                Our coatings and adhesives are designed to withstand
                              </p>
                              <ul class="custom-list">
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Outdoor elements
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" /> UV
                                  exposure
                                </li>
                                <li>
                                  <img src="images/tickmark-icon.webp" alt="Tick Mark" />
                                  Heavy usage
                                </li>
                              </ul>
                              <p class="mt-4">
                                making them ideal for resorts, theme parks, gardens, and
                                outdoor recreational areas.
                              </p>
                            </div>
                          </div>
                        </div>
                    @endforelse
                </div>
            </div>
            <span class="banner-overlay"></span>
        </section>
    

      
      <div class="section-ordering d-flex flex-column g-0">
        @if(!empty($productsOffer))
          <section class="product-we-offer-section order-2 order-md-1 m-0">
            <div class="container-fluid px-2 px-md-5 ">
              <h2 class="text-center text-black mb-lg-5 mb-4 fw-bold">
                Products
                <span class="color-orange">We Offer </span>
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
                      <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-4">
                        <div class="header-part mb-lg-5 mb-4">
                          <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                            INSTALLATION SYSTEMS
                          </h3>
                          <h4 class="text-center mb-lg-4 mb-2 fs-2 color-orange">
                            ​TILE ADHESIVE
                          </h4>
                          <p class="text-center fs-6">
                            Our high-quality tile adhesive ensures strong and durable bonds,
                            making installations secure and long-lasting.
                          </p>
                        </div>

                        <div
                          class="offer-product-lists six-col-block bg-white px-3 py-4 mb-3 mb-lg-5"
                        >
                          <div class="row">
                            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-LTX-133.webp"
                                    alt="RachTR LTX 133"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-ltx-133'}}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR LTX 133</a
                                  >
                                </h6>
                              </div>
                            </div>
                            <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-AdFlex-206.webp"
                                    alt="RachTR AdFlex 206"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-adflex-206'}}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR AdFlex 206</a
                                  >
                                </h6>
                              </div>
                            </div>
                            

                            <div class="col-6 col-lg-2 mb-0">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-TSA-ECO-plus.webp"
                                    alt="RachTR TSA ECO +"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-tsa-eco-1' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR TSA ECO +</a
                                  >
                                </h6>
                              </div>
                            </div>
                            <div class="col-6 col-lg-2 mb-0">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-TSA-ECO.webp"
                                    alt="RachTR TSA ECO"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-tsa-eco' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR TSA ECO</a
                                  >
                                </h6>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="header-part mb-lg-5 mb-4">
                          <h4 class="text-center mb-lg-4 mb-2 fs-2 color-orange">GROUTS</h4>
                          <p class="text-center fs-6 w-70">
                            With our epoxy grout, you get a seamless finish that resists
                            stains and is easy to clean, enhancing the appearance of your
                            tiles.
                          </p>
                        </div>

                        <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                          <div class="row">
                            <div class="col-6 col-lg-3 mb-4">
                              <div class="offer-product">
                                <figure>
                                  <img src="images/RACHTR-EG-200.webp" alt="RACHTR EG 200" />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/eg-200' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RACHTR EG 200</a
                                  >
                                </h6>
                              </div>
                            </div>
                            <div class="col-6 col-lg-3 mb-4">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-PULU-G-30.webp"
                                    alt="RachTR PULU-G 30"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-pulu-g-30' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR PULU-G 30</a
                                  >
                                </h6>
                              </div>
                            </div>
                            
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-R-105-THIXO.webp"
                                    alt="RachTR R 105 THIXO"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-r-105-thixo' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR R 105 THIXO</a
                                  >
                                </h6>
                              </div>
                            </div>
                            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                              <div class="offer-product">
                                <figure>
                                  <img
                                    src="images/RachTR-PULU-75.webp"
                                    alt="RachTR PULU 75"
                                  />
                                </figure>
                                <h6 class="text-center heading-underline">
                                  <a
                                    href="{{ config('app.url') . '/product-page/rachtr-pulu-75' }}"
                                    class="text-black fs-6 fw-bold"
                                    >RachTR PULU 75</a
                                  >
                                </h6>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                  @endforelse
                </div>
                @else
                  <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-3">
                    <div class="header-part mb-lg-5 mb-4">
                      <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                        {{ strtoupper($system['category_title']) ?? '' }}
                      </h3>
    
                      <p class="text-center fs-6 w-70">
                      {{ $system['description'] ?? '' }}
                      </p>
                    </div>
                    
                    <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                      <div class="row">
                        @foreach($system['products'] as $productId)
                          @php $product = $products[$productId] ?? null; @endphp
                          @if($product)
                          <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="offer-product">
                              <figure>
                                <img
                                  src="{{ asset($product->product_images[0] ?? 'images/default-image.webp') }}"
                                  class="big-height"
                                  alt="{{ $product->name }}"
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
          <section class="product-we-offer-section order-2 order-md-1 m-0">
            <div class="container-fluid px-2 px-md-5 ">
              <h2 class="text-center text-black mb-lg-5 mb-4 fw-bold">
                Products
                <span style="color: #ef6e25">We Offer </span>
              </h2>
              <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-4">
                <div class="header-part mb-lg-5 mb-4">
                  <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                    INSTALLATION SYSTEMS
                  </h3>
                  <h4 class="text-center mb-lg-4 mb-2 fs-2 color-orange">
                    ​TILE ADHESIVE
                  </h4>
                  <p class="text-center fs-6">
                    Our high-quality tile adhesive ensures strong and durable bonds,
                    making installations secure and long-lasting.
                  </p>
                </div>

                <div
                  class="offer-product-lists six-col-block bg-white px-3 py-4 mb-3 mb-lg-5"
                >
                  <div class="row">
                    <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-ltx-133'}}" class="">
                          <figure>
                            <img
                              src="images/RachTR-LTX-133.webp"
                              alt="RachTR LTX 133"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR LTX 133
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-adflex-206'}}">
                          <figure>
                            <img
                              src="images/RachTR-AdFlex-206.webp"
                              alt="RachTR AdFlex 206"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR AdFlex 206
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="https://www.rachtr.com/product-page/rachtr-tsa-pr" class="">
                          <figure>
                            <img src="images/RachTR-TSA-PR.webp" alt="RachTR TSA PR">
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR TSA PR
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="https://www.rachtr.com/product-page/rachtr-tsa-st" class="text-black fs-6 fw-bold">
                          <figure>
                            <img src="images/RachTR-TSA-ST.webp" alt="RachTR TSA ST">
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR TSA ST
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 mb-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-tsa-eco-1' }}">
                          <figure>
                            <img
                              src="images/RachTR-TSA-ECO-plus.webp"
                              alt="RachTR TSA ECO +"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR TSA ECO +
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-2 mb-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-tsa-eco' }}">
                          <figure>
                            <img
                              src="images/RachTR-TSA-ECO.webp"
                              alt="RachTR TSA ECO"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                          RachTR TSA ECO
                          </h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="header-part mb-lg-5 mb-4">
                  <h4 class="text-center mb-lg-4 mb-2 fs-2 color-orange">GROUTS</h4>
                  <p class="text-center fs-6 w-70">
                    With our epoxy grout, you get a seamless finish that resists
                    stains and is easy to clean, enhancing the appearance of your
                    tiles.
                  </p>
                </div>

                <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                  <div class="row">
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/eg-200' }}">
                          <figure>
                            <img src="images/RACHTR-EG-200.webp" alt="RACHTR EG 200" />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RACHTR EG 200
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-pulu-g-30' }}">
                          <figure>
                            <img
                              src="images/RachTR-PULU-G-30.webp"
                              alt="RachTR PULU-G 30"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-dark fs-6 fw-bold">
                            RachTR PULU-G 30
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="https://www.rachtr.com/product-page/rachtr-mh-103-thixo" class="">
                          <figure>
                            <img src="images/RachTR-MH-103-THIXO.webp" alt="RachTR MH 103 THIXO">
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR MH 103 THIXO
                          </h6>
                        </a>
                      </div>
                    </div> 
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="https://www.rachtr.com/product-page/rachtr-pulu-g" class="text-black fs-6 fw-bold">
                          <figure>
                            <img src="images/RachTR-PULU-G.webp" alt="RachTR PULU-G">
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR PULU-G
                          </h6>
                        </a>
                      </div>
                    </div>                
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-r-105-thixo' }}" class="">
                          <figure>
                            <img
                              src="images/RachTR-R-105-THIXO.webp"
                              alt="RachTR R 105 THIXO"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR R 105 THIXO
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-pulu-75' }}">
                          <figure>
                            <img
                              src="images/RachTR-PULU-75.webp"
                              alt="RachTR PULU 75"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR PULU 75
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-0 mb-lg-0">
                      <div class="offer-product">
                        <a href="https://www.rachtr.com/product-page/rachtr-eg-150" class="">
                          <figure>
                            <img src="images/ractr-eg-150.webp" class="big-height m-block-height" alt="RachTR EG 150">
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR EG 150
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-0 mb-lg-0">
                      <div class="offer-product">
                        <a href="https://www.rachtr.com/product-page/rachtr-epoxy-201-g">
                          <figure>
                            <img src="images/rachtr-pulu-img.avif" alt="RachTR Epoxy 201 G">
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">  
                            RachTR Epoxy 201 G
                          </h6>
                        </a>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-3">
                <div class="header-part mb-lg-5 mb-4">
                  <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                    POLISHING SYSTEMS
                  </h3>

                  <p class="text-center fs-6 w-70">
                    Achieve a brilliant shine and smooth finish for your marble
                    surfaces with our advanced marble tile polish, bringing out the
                    natural beauty of the stone.
                  </p>
                </div>

                <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                  <div class="row">
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-r-105-liquid' }}" class="">
                          <figure>
                            <img
                              src="images/RachTR-R-105-LIQUID.webp"
                              class="big-height"
                              alt="RachTR R 105 LIQUID"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR R 105 LIQUID
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-stone-power' }}" class="">
                          <figure>
                            <img
                              src="images/RachTR-Stone-Power.webp"
                              class="big-height"
                              alt="RachTR Stone Power"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fw-bold fs-6">
                            RachTR Stone Power
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-top-fill' }}">
                          <figure>
                            <img
                              src="images/RachTR-Top-Fill.webp"
                              class="big-height"
                              alt="RachTR Top Fill"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR Top Fill
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-epoxy-201-l' }}">
                          <figure>
                            <img
                              src="images/RachTR-Epoxy-201-L.webp"
                              class="big-height"
                              alt="RachTR Epoxy 201 L"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR Epoxy 201 L
                          </h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-3 mb-lg-5">
                <div class="header-part mb-lg-5 mb-4">
                  <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                    PROTECTION SYSTEMS​
                  </h3>

                  <p class="text-center fs-6 w-70">
                    Protect your marble surfaces from stains, moisture, and wear
                    with our range of marble sealers, extending the life of your
                    installations and preserving their elegance.
                  </p>
                </div>

                <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                  <div class="row justify-content-start">
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-bleedx' }}">
                          <figure>
                            <img src="images/RachTR-BLEEDX.webp" alt="RachTR BLEEDX" />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR BLEEDX
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-top-seal' }}">
                          <figure>
                            <img
                              src="images/RachTR-TOP-SEAL.webp"
                              alt="RachTR TOP SEAL"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR TOP SEAL
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-color-enhancer' }}">
                          <figure>
                            <img
                              src="images/RachTR-COLOR-ENHANCER.webp"
                              alt="RachTR COLOR ENHANCER"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR COLOR ENHANCER
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-back-seal' }}">
                          <figure>
                            <img
                              src="images/RachTR-BACK-SEAL.webp"
                              alt="RachTR BACK SEAL"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR BACK SEAL
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-defendor' }}">
                          <figure>
                            <img
                              src="images/RachTR-DEFENDOR.webp"
                              alt="RachTR DEFENDOR"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR DEFENDOR
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-wl-barrier' }}">
                          <figure>
                            <img
                              src="images/RachTR-WL-BARRIER.webp"
                              alt="RachTR WL BARRIER"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR WL BARRIER
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-ss-sealer' }}">
                          <figure>
                            <img
                              src="images/RachTR-SS-SEALER.webp"
                              alt="RachTR SS SEALER"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR SS SEALER
                          </h6>
                      </a>
                      </div>
                    </div>
                    <div class="col-md-3 d-md-block d-none"></div>
                  </div>
                </div>
              </div>

              <div class="product-offer-block p-lg-5 p-3 bg-fafafa mb-lg-5 mb-3">
                <div class="header-part mb-lg-5 mb-4">
                  <h3 class="fw-bold text-center mb-2 fs-2 color-orange">
                    CLEANING AND MAINTENANCE
                  </h3>

                  <p class="text-center fs-6 w-70">
                    Keep your marble surfaces pristine with our effective marble
                    cleaners, designed to remove dirt, grime, and stains without
                    damaging the stone.
                  </p>
                </div>

                <div class="offer-product-lists bg-white px-3 py-4 mb-3 mb-lg-5">
                  <div class="row">
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-stain-r' }}">
                          <figure>
                            <img
                              src="images/RachTR-Stain-R.webp"
                              class="fixed-height"
                              alt="RachTR Stain R"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR Stain R
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-xc-4' }}">
                          <figure>
                            <img
                              src="images/RachTR-XC-4.webp"
                              class="fixed-height"
                              alt="RachTR XC 4"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR XC 4
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-xc-1' }}">
                          <figure>
                            <img
                              src="images/RachTR-XC-1.webp"
                              class="fixed-height"
                              alt="RachTR XC 1"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR XC 1
                          </h6>
                        </a>
                      </div>
                    </div>
                    <div class="col-6 col-lg-3">
                      <div class="offer-product">
                        <a href="{{ config('app.url') . '/product-page/rachtr-xc-2' }}">
                          <figure>
                            <img
                              src="images/RachTR-XC-2.webp"
                              class="fixed-height"
                              alt="RachTR XC 2"
                            />
                          </figure>
                          <h6 class="text-center heading-underline text-black fs-6 fw-bold">
                            RachTR XC 2
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
          <section class="why-trust-rachtr-section order-1 order-md-2 m-0">
            <video preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video"   class="bg-video">
              <source src="{{ asset( empty($whyTrust['video_webm']) ? 'videos/why-trust.webm' : 'storage/' . $whyTrust['video_webm']) }}" type="video/webm">
              <source src="{{ asset( empty($whyTrust['video_mp4']) ? 'videos/why-trust.mp4' : 'storage/' .$whyTrust['video_mp4']) }}" type="video/mp4">
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
                  Residential Commercial Buildings?
                @endif
                </h2>
                <div class="row">
                  @forelse($whyTrust['features'] as $feature)
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
                          src="images/quality-assurance.webp"
                          alt="QUALITY Assurance"
                        />
                        <h6 class="text-center fw-bold text-md-start">
                        QUALITY <br>
                        ASSURANCE
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                        We test our products for quality, performance, durability, and safety.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                      <img src="images/customized-solution.webp" alt="CUSTOMIZED SOLUTIONS">
                        <h6 class="text-center fw-bold text-md-start">
                          CUSTOMIZED <br />
                          SOLUTIONS
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                      We customize solutions for your project to ensure satisfaction
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                      <img src="images/expert-support.webp" alt="EXPERT SUPPORT">
                        <h6 class="text-center fw-bold text-md-start">
                          EXPERT <br />
                          SUPPORT
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                      Our team of experts provides technical support, application
                      guidance, and product recommendations to help you achieve
                      professional results.
                      </p>
                    </div>
                    <div class="col-xl-3 col-6">
                      <div
                        class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                      >
                      <img src="images/proven-track-record.webp" alt="PROVEN TRACK RECORD">
                        <h6 class="text-center fw-bold text-md-start">
                          PROVEN TRACK <br />
                          RECORDS
                        </h6>
                      </div>
                      <p class="text-black text-center text-md-start fs-6">
                      Fill this form if your supervisor team needs a session on the
                      selection of the right product & application process.
                      </p>
                    </div>
                  @endforelse
                  
                </div>
              </div>
            </div>
          </section>
        @else
          <section class="why-trust-rachtr-section order-1 order-md-2 m-0">
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
                  Residential Commercial Buildings?
                </h2>
                <div class="row">
                  <div class="col-xl-3 col-6">
                    <div
                      class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                    >
                      <img
                        src="images/quality-assurance.webp"
                        alt="QUALITY Assurance"
                      />
                      <h6 class="text-center fw-bold text-md-start">
                      QUALITY <br>
                      ASSURANCE
                      </h6>
                    </div>
                    <p class="text-black text-center text-md-start fs-6">
                      We test our products for quality, performance, durability, and safety.
                    </p>
                  </div>
                  <div class="col-xl-3 col-6">
                    <div
                      class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                    >
                    <img src="images/customized-solution.webp" alt="CUSTOMIZED SOLUTIONS">
                      <h6 class="text-center fw-bold text-md-start">
                        CUSTOMIZED <br />
                        SOLUTIONS
                      </h6>
                    </div>
                    <p class="text-black text-center text-md-start fs-6">
                    We customize solutions for your project to ensure satisfaction
                    </p>
                  </div>
                  <div class="col-xl-3 col-6">
                    <div
                      class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                    >
                    <img src="images/expert-support.webp" alt="EXPERT SUPPORT">
                      <h6 class="text-center fw-bold text-md-start">
                        EXPERT <br />
                        SUPPORT
                      </h6>
                    </div>
                    <p class="text-black text-center text-md-start fs-6">
                    Our team of experts provides technical support, application
                    guidance, and product recommendations to help you achieve
                    professional results.
                    </p>
                  </div>
                  <div class="col-xl-3 col-6">
                    <div
                      class="d-flex flex-column flex-md-row gap-3 mb-lg-4 mb-3 align-items-center"
                    >
                    <img src="images/proven-track-record.webp" alt="PROVEN TRACK RECORD">
                      <h6 class="text-center fw-bold text-md-start">
                        PROVEN TRACK <br />
                        RECORDS
                      </h6>
                    </div>
                    <p class="text-black text-center text-md-start fs-6">
                    Fill this form if your supervisor team needs a session on the
                    selection of the right product & application process.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        @endif
      </div>

      <section class="commercial-comprnsive comprnsive_solution case-study-block-section py-lg-5 py-3">
        <div class="container">
          <div class="row g-0">
            <div class="cmp_solutn_heding col-lg-8 col-md-12 py-lg-5 py-3">
              <h2 class="display-6 display-lg-4 fw-bold">
              {!! !empty($caseStudy['heading']) ? html_entity_decode($caseStudy['heading']) : 'Case <span class="color-orange">Studies</span>' !!}
              </h2>
            </div>
            @forelse ($caseStudy['slides'] ?? [] as $slide)
            <div class="case_studies_downd d-md-none mt-4">
                      <div class="downd_img">
                        <img
                          src="{{ asset('storage/' . $slide['image_mobile']) }}"
                          alt="{{ $slide['img_alt'] ?? '' }}"
                        />
                      </div>
            </div>
            <div class="case-studies-item">
              <div class="case_studies row g-0">
                <div class="col-md-4 col-12 order-2 order-md-1">
                  <div class="case_studies_contn">
                    <h5 class="fw-bold pb-2">
                    {{ $slide['left_title'] }}
                    </h5>
                    @foreach ($slide['paragraphs'] ?? [] as $para)
                      <p class="pb--md-5 mb-md--5">{{ $para['text'] }}</p>
                    @endforeach
                    <a
                      href="{{ $slide['link'] ?? '#' }}"
                      target="_blank"
                      >View Case Study</a
                    >
                    
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
                      class="case-study-info d-flex justify-content-between p-lg-4 p-3 gap-2"
                    >
                      <div class="study-details">
                        <h6 class="color-grey fw-bold fs-6">{{ $slide['right_title'] }}</h6>
                        <h4 class="color-black fw-bold fs-5 mb-0">
                        {{ $slide['subtitle'] }}
                        </h4>
                      </div>
                      <div class="study-link rotate-90">
                        <a href="{{ $slide['link'] ?? '#' }}"
                          ><svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                          <g>
                              <path d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80zm35.533 91.251l-30.37 28.03a7.27 7.27 0 0 1-2.264 1.434 7.221 7.221 0 0 1-2.697.515c-.066 0-.135 0-.203-.003-1.836.038-3.688-.587-5.144-1.931L64.468 111.25a7.292 7.292 0 0 1-.413-10.305 7.291 7.291 0 0 1 10.305-.413l18.547 17.118V59.185a7.293 7.293 0 1 1 14.586 0v58.098l18.148-16.749a7.293 7.293 0 0 1 9.892 10.717z" clip-rule="evenodd" fill-rule="evenodd"></path>
                          </g>
                      </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              @empty
              <div class="case_studies_downd d-md-none mt-4">
                      <div class="downd_img">
                        <img
                          src="images/casestudy-slide-img-1.webp"
                        />
                      </div>
              </div>
              <div class="case-studies-item">
                <div class="case_studies row g-0">
                  <div class="col-md-4 col-12 order-2 order-md-1">
                    <div class="case_studies_contn">
                      <h5 class="fw-bold pb-2">
                        White Marble being difficult to install, as white marble
                        is suscpetible to stains, yellowness of joints, etc.
                      </h5>
                      <p class="pb--md-5 mb-md--5">
                        8/10 contractors refuse to install white marble owing to
                        project failure rate which is exorbitantly high.
                      </p>
                      <p class="pb--md-5 mb-md--5">
                        Problem starts immediately and keep on coming at regular
                        intervals upto 2-3 years which is a...
                      </p>
                      <a
                        href="{{ config('app.url') . '/blogs/white-marble-installation-methodology' }}"
                        target="_blank"
                        >View Case Study</a
                      >
                      
                    </div>
                  </div>
                  <div
                    class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block"
                  >
                    <div class="case_studies_downd">
                      <div class="downd_img">
                        <img
                          src="images/case-study-1.webp"
                        />
                      </div>
                      <div
                        class="case-study-info d-flex justify-content-between p-lg-5 p-3 gap-2"
                      >
                        <div class="study-details">
                          <h6 class="color-grey fw-bold fs-6">View Case Study</h6>
                          <h4 class="color-black fw-bold fs-5 mb-0">
                            White Marble Installation
                          </h4>
                        </div>
                        <div class="study-link rotate-90">
                          <a href="{{ config('app.url') . '/blogs/white-marble-installation-methodology' }}">
                            <svg preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                              <g>
                                  <path d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80zm35.533 91.251l-30.37 28.03a7.27 7.27 0 0 1-2.264 1.434 7.221 7.221 0 0 1-2.697.515c-.066 0-.135 0-.203-.003-1.836.038-3.688-.587-5.144-1.931L64.468 111.25a7.292 7.292 0 0 1-.413-10.305 7.291 7.291 0 0 1 10.305-.413l18.547 17.118V59.185a7.293 7.293 0 1 1 14.586 0v58.098l18.148-16.749a7.293 7.293 0 0 1 9.892 10.717z" clip-rule="evenodd" fill-rule="evenodd"></path>
                              </g>
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforelse
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
                    class="mb-3 pb-2 display-6 display-lg-4 fw-bold text-start text-dark blog-case-heading"
                  >
                    Blogs related to Residential <br />& Commercial Industry
                  </h2>
                  <p class="color-black">
                    Check out some of our informative blog posts, research and
                    guides on topics related to Residential & Commercial
                    Industry.
                  </p>
                </div>
                <ul class="padd0">
                  @foreach($blogs->take(3) as $blog)
                  <li class="col-lg-4 mx-3">
                    <a href="{{ route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                      <div class="blogs_img">
                        <img src="{{ asset($blog->featurePhoto) }}" />
                      </div>
                      <div class="blogs_contnt">
                        
                          <div class="top_cont">
                            <span class="fw-bold">{{ \Carbon\Carbon::parse($blog->published_at)->format('M d')}}</span>
                            <sup class="fw-bold">.</sup>
                            <span class="fw-bold">4 min read</span>
                          </div>
                          <div class="btm_cont">
                            <h2><strong class="title-blog">{{$blog->title}}</strong></h2>
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
                      <p>A luxurious room with white marble floors</p>
                    </a>
                  </div>
                @empty
                  <div class="img">
                    <a href="{{asset('images/residential-pic-1.webp')}}" data-fancybox="gallery" data-caption="A luxurious room with white marble floors">
                      <img src="images/residential-pic-1.webp" />
                      <p>A luxurious room with white marble floors</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/residential-pic-2.webp')}}" data-fancybox="gallery" data-caption="hite marble decor room">
                      <img src="images/residential-pic-2.webp" />
                      <p>White marble decor room</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/residential-faq-3.webp')}}" data-fancybox="gallery" data-caption="A luxurious beautiful people with white marbles">
                      <img src="images/residential-faq-3.webp" />
                      <p>A luxurious beautiful people with white marbles</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/residential-pic-4.webp')}}" data-fancybox="gallery" data-caption="A Luxurious place with marble flooring">
                      <img src="images/residential-pic-4.webp" />
                      <p>A Luxurious place with marble flooring</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/residential-faq-5.webp')}}" data-fancybox="gallery" data-caption="Luxurious room with white marble tiles">
                      <img src="images/residential-faq-5.webp" />
                      <p>Luxurious room with white marble tiles</p>
                    </a>
                  </div>
                  <div class="img">
                    <a href="{{asset('images/residential-pic-6.webp')}}" data-fancybox="gallery" data-caption="A Wall with white marble tiles, installed with TSA PR">
                      <img src="images/residential-pic-6.webp" />
                      <p>A Wall with white marble tiles, installed with TSA PR</p>
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
                    @forelse ($faq['questions'] ?? [] as $faq)
                      <div class="accordion-wrapper">
                        <div class="acc-head py-3">
                          <h6 class="mb-0 fw-bold">{!! $faq['acc_title'] !!} </h6>
                        </div>
                        <div class="acc-body"> {!! $faq['acc_body'] !!}</div>
                      </div>
                      @empty
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              What products does RachTR offer for tile
                              installation systems?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR offers a range of tile adhesives and grouts
                              designed for various tile installations. Our tile
                              adhesives ensure strong bonding and prevent vertical
                              slip, while our epoxy grouts provide durability and
                              resistance to stains and chemicals.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              How do RachTR tile adhesives prevent vertical slip
                              during installation?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR tile adhesives are formulated with high bond
                              strength and non-slip properties, ensuring that
                              tiles stay in place during the installation process.
                              This makes them ideal for vertical surfaces and
                              large-format tiles.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              What are the benefits of using RachTR grouts?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR grouts are highly durable, resistant to
                              chemicals, stains, and moisture. They provide a
                              seamless and aesthetically pleasing finish, making
                              them ideal for both residential and commercial
                              applications.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              Can RachTR polishing systems be used on various
                              types of floors?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              Yes, RachTR polishing systems are versatile and can
                              be used on a variety of floor types, including
                              concrete, terrazzo, and natural stone. Our systems
                              provide a high-gloss finish and enhance the
                              durability of the floors.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              How do RachTR cleaning and maintenance products
                              benefit property owners?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR cleaning and maintenance products are
                              designed to keep surfaces looking new and extend
                              their longevity. They are effective in removing
                              dirt, grime, and stains without damaging the
                              surfaces, making them ideal for routine maintenance.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              What support does RachTR provide for product
                              installation and use?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR offers comprehensive support, including
                              detailed product manuals, installation guides, and
                              access to our technical support team. We provide
                              training and consultation services to ensure proper
                              product application and usage.
                            </p>
                          </div>
                        </div>
                        <div class="accordion-wrapper">
                          <div class="acc-head py-3">
                            <h6 class="mb-0 fw-bold">
                              Where can I purchase RachTR products for my
                              residential or commercial project?
                            </h6>
                          </div>
                          <div class="acc-body">
                            <p>
                              RachTR products can be purchased through our
                              authorized distributors or directly by
                              <a href="{{url('/contact-us')}}"
                                ><span class="color-orange"
                                  >contacting us</span
                                ></a
                              >. For large commercial projects, we offer
                              customized solutions and bulk purchasing options.
                              Contact our sales team for more information.
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
  