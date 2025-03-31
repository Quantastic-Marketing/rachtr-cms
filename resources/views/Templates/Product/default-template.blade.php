
    <!-- This is a wrapper open -->
    <div class="wrapper">
       @if(!empty($product->content))
       <section class="product-section py-2 py-lg-5">
        <div class="container">
            <div class="row">
                <!-- Image & Description -->
                <div class="col-lg-7 product-left-part">
                        <div class="product-slider mb-lg-2">
                            @if(!empty($product->content['product_images']) && count($product->content['product_images']) == 1 &&  !is_null($product->content['product_images'][0]['product_image']))
                                <div class="product-main-slider">
                                    <div class="image-wrapper">
                                        <a href="{{asset('/storage/'.$product->content['product_images'][0]['product_image'])}}" data-fancybox="gallery">
                                        <img src="{{asset('/storage/'.$product->content['product_images'][0]['product_image'])}}" alt="Product 1">
                                        </a>
                                    </div>
                                </div>
                            @elseif(!empty($product->content['product_images']))
                            
                                <!-- Main Image Slider -->
                                <div class="product-main-slider">
                                    @foreach($product->content['product_images'] as $image)
                                        @if(!empty($image['product_image']))
                                            <div class="image-wrapper">
                                                <a href="{{asset('/storage/'.$image['product_image'])}}" data-fancybox="gallery">
                                                <img src="{{asset('/storage/'.$image['product_image'])}}" alt="Product 1">
                                                </a>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- Thumbnail Slider -->
                                <div class="product-thumbnail-slider d-none d-lg-block">
                                    @foreach($product->content['product_images'] as $image)
                                        <div class="image-wrapper">
                                            <img src="{{asset('/storage/'.$image['product_image'])}}" alt="Product 1">
                                        </div>
                                    @endforeach
                                </div>
                            
                            @endif
                        </div>
                    @isset($product->name)
                        <h2 class="py-2 product-title text-orange d-lg-none fs-3 text-center">{{$product->name}}</h2>
                    @endisset
                    @if(!empty($product->content['product_desc']))
                        {!! $product->content['product_desc'] !!}
                    @endif
                </div>

                <!-- Accordion for Details -->
                <div class="col-lg-5 align-items-start">
                    @isset($product->name)
                     <h2 class="product-title text-orange d-none d-lg-block">{{ $product->name }}</h2>
                    @endisset

                    @if(!empty($product->content['product_benefits']))
                        <div class="product-features faq-block">
                            <div class="product-feature-block faq-block">
                                @foreach($product->content['product_benefits'] as $benefit)
                                    <div class="accordion-wrapper">
                                        @isset($benefit['benefit_title'])
                                            <div class="acc-head text-orange py-4">
                                                <h6 class="mb-0 fs-6">{{ $benefit['benefit_title'] }}</h6>
                                            </div>
                                        @endisset
                                        @if(!empty($benefit['benefit_body']))
                                            <div class="acc-body">
                                            {!! str($benefit['benefit_body'])->sanitizeHtml() !!}
                                               
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Buttons -->
            
        </div>
        <div class="download-sec text-center mt-4 py-5 d-flex justify-content-center gap-2 gap-md-5">
            <a href="{{ isset($product->content['download_sheet']) ? asset('/storage/'.$product->content['download_sheet']) : '#' }}" class="btn btn-dark p-2 p-md-3 m-0">DOWNLOAD DATA SHEET</a>
            <a href="{{ isset($product->content['download_cert']) ? asset('/storage/'.$product->content['download_cert']) : '#' }}" class="btn btn-dark p-2 p-md-3 m-0">DOWNLOAD CERTIFICATE</a>
        </div>
       </section>
       @endif
   </div>