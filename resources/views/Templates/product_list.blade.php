
<div class="wrapper">
        @php 
         $pageContent = $page->content;
        @endphp

    @if(!empty($pageContent))
            <section class="industry-banner">
                <div class="row g-0">
                    <div class="col-lg-12">  
                        <div class="banner-section">
                            <div class="image-wrapper">
                            @if (!empty($pageContent['banner_image']))
                                <img src="{{ asset('storage/'.$pageContent['banner_image']) }}" alt="Banner Image" width="100%">
                            @endif
                            
                            </div>
                            <div class="heading-holder">
                                <h2>{!! html_entity_decode($pageContent['page_heading'] ?? '') !!}</h2>
                                @if(!empty($parentName) && !empty($fullParentSlug))
                                    <p><span class="text-orange">HOME ></span><a href="{{ url($fullParentSlug) }}">{{ $parentName }}</a></p>
                                @endif
                                <!-- <p><span class="text-orange"></span>{{ $parentName ?? '' }}</p> -->
                            </div>
                        </div>                   
                    </div>
                    
                    </div>
            </section>
        @if(isset($pageContent['body']))
            <section class="system-overview py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="content">
                                {!! $pageContent['body'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if(isset($pageContent['sections']))
            @foreach($pageContent['sections'] as $section)
                <section class="product-card-section py-5" style="background-color: {{ $section['bg_color'] ?? '#ffffff' }};">
                    <div class="container">
                        <div class="row justify-content-center gap-5">
                            @if(!is_null($section['section_heading']))
                            <h2 class="fs-1 fw-bold text-center">{{$section['section_heading']}}</h2>
                            @endif
                            @foreach($section['products'] as $productId)
                                @php
                                    $product = $products->firstWhere('id', $productId);
                                    $productImage = optional(json_decode($product->product_images, true))[0]['product_image'] ?? null; 
                                    $productDescription = Str::limit(
                                                            preg_replace('/\s+/', ' ', strip_tags(html_entity_decode($product->product_desc ?? 'No description available'))), 
                                                            120, 
                                                            '...'
                                                        );
                                @endphp
                                <div class="col-lg-9 px-5">
                                    <div class="row align-items-center product-card">
                                        <div class="col-md-6">
                                            <div class="product-image-wrapper">
                                                @if (!empty($productImage))
                                                    <img src="{{ asset('storage/' . $productImage) }}" alt="{{$product->title ?? 'Product Title'}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details">
                                                <h2 class="product-title">{{$product->name ?? 'Product Title'}}</h2>
                                                <p class="product-description">
                                                    @if($productDescription != 'null')
                                                    {{$productDescription}}
                                                    @else(!empty($productDescription))
                                                    No description
                                                    @endif
                                                </p>
                                                <a href="{{ route('product.page', ['slug' => $product->slug]) }}" class="btn btn-orange">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endforeach
        @endif
        @if(!empty($pageContent['faq_section']))
        <section class="product-list-faq faqs py-lg-4 py-3 pb-lg-5 pb-3">
                <div class="container faqs_detls">
                <div class="heading-holder py-lg-5 py-3 text-center">
                    <h2 class="fs-1 fw-bold ">FAQs</h2>
                </div>
        
                <div class="row">
                    <div
                    class="col-md-9 mt-4"
                    style="overflow-y: visible; height: auto"
                    >
                    <!-- tab-1 Open -->
                    <div  class="tab-content current">
                        @foreach($pageContent['faq_section'] as $faq)
                        <div class="accordion-wrapper">
                        <div class="acc-head py-3 pb-3">
                            <!-- <h6 class="mb-0">
                            What is the purpose of RachTR's Block Reinforcement
                            System?
                            </h6> -->
                            {!! trim($faq['acc_title'] ?? '') !!}
                        </div>
                        <div class="acc-body">
                        {!! trim($faq['acc_body'] ?? '') !!}
                        </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- tab-2 close -->
                    </div>
                </div>
                </div>
        </section>
        @endif
   @endif
   </div>

</html>

