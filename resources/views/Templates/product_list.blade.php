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
                            <img 
                                src="{{ asset('storage/'.$pageContent['banner_image']) }}" 
                                srcset="
                                    {{ asset('storage/'.$pageContent['banner_image']) }}?w=480 480w, 
                                    {{ asset('storage/'.$pageContent['banner_image']) }}?w=768 768w, 
                                    {{ asset('storage/'.$pageContent['banner_image']) }}?w=1024 1024w, 
                                    {{ asset('storage/'.$pageContent['banner_image']) }}?w=1440 1440w" 
                                sizes="(max-width: 480px) 480px, 
                                    (max-width: 768px) 768px, 
                                    (max-width: 1024px) 1024px, 
                                    1440px" 
                                alt="Banner Image" 
                                width="100%">
                            @endif
                            
                            </div>
                            <div class="heading-holder">
                                <h1 class="fw-bold">{!! html_entity_decode($pageContent['page_heading'] ?? '') !!}</h1>
                                
                                <p class="mt-3 px-3 fw-bold"><span class="text-orange">HOME ></span><a href="{{ config('app.url') . '/' . $parentName }}" class="fw-bold">{{ ucwords(str_replace('-', ' ', $parentName)) }}</a></p>
                                
                                <!-- <p><span class="text-orange"> <a href="{{ config('app.url') . '/$parentName'  }}"> </span>{{ $parentName ?? '' }} </a></p> -->
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
            @foreach($pageContent['sections'] as $index => $section)
             @if(!empty($section['products']))
                <section class="product-card-section py-5" style="background-color: {{ $section['bg_color'] ?? '#ffffff' }};" 
                data-section-key="{{ $index }}" 
                data-product-ids="{{ json_encode($section['products']) }}"  >
                    <div class="container">
                        <div class="row justify-content-center gap-5">
                            @if(!is_null($section['section_heading']))
                            <h2 class="fs-1 fw-bold text-center">{{$section['section_heading']}}</h2>
                            @endif
                            @foreach($section['products'] as $productId)
                                @php
                                    $product = $products[$productId] ?? null;
                                    
                                    if($product){
                                            $productImage = optional(json_decode($product->product_images, true))[0]['product_image'] ?? null; 
                                            $descriptionHtml = html_entity_decode($product->product_desc ?? 'No description available');
                                            $cleanedDescription = preg_replace('/<br\s*\/?>|&nbsp;|\s+/', ' ', $descriptionHtml);
                                            $productDescription = preg_match('/<p>(.*?)<\/p>/is', $cleanedDescription, $matches) 
                                                ? $matches[1] 
                                                : strip_tags($cleanedDescription);
                                        }
                                @endphp
                                <div class="col-lg-9 px-5">
                                    <div class="row align-items-center product-card">
                                        <div class="col-md-6">
                                            <div class="product-image-wrapper">
                                                @if ($productImage)
                                                    <img src="{{ asset('storage/' . $productImage) }}" alt="{{$product->name ?? 'Product Title'}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="product-details">
                                                <h2 class="product-title">{{$product->name ?? 'Product Title'}}</h2>
                                                <p class="product-description product-strip">
                                                    {{$productDescription}}
                                                </p>
                                                <a href="{{ route('product.page', ['slug' => $product->slug]) }}" class="btn btn-orange">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        
                        </div>
                    </div>
                </section>
             @endif
            @endforeach
        @endif

        @if(!empty($pageContent['blogs']))
        <section class="blogs bg-white">
            <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                <div class="blogs_sec py-lg-5 py-2">
                    <div class="mb-lg-5 mb-2 px-lg-5 mx-lg-5">
                    <h2
                        class="mb-3 pb-2 display-6 display-lg-4 fw-bold text-start text-dark blog-case-heading"
                    >
                    {!! $pageContent['blog-heading'] ?? 'Blogs related to Epoxy' !!}     </h2>
                    @if(!empty($pageContent['blog-sub-heading']))
                    <p class="color-black">
                        {!! $pageContent['blog-sub-heading'] ?? '' !!}
                    </p>
                    @endif
                    </div>
                    <ul class="padd0">
                    @foreach($blogs->take(3) as $blog)
                    <li class="col-lg-4 mx-3">
                        <a href="{{ route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                        <div class="blogs_img">
                            <img src="{{ asset($blog->featurePhoto) }}" alt="{{$blog->title}}"/>
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
                        <div class="acc-head py-3 pb-3 fw-bold">
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

