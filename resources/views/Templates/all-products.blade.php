<div class="wrapper">  
    <!-- Hero Section -->
        <div class="hero-section" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('/images/product_banner.webp')}}' ); ">
            <div class="container">
                <h1 class="text-center fw-bold"> {{ strtoupper(str_replace('-', ' ', last(request()->segments()))) }}</h1>
            </div>
        </div>

    <!-- Main Content -->
    <div class="product-container container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb ms-4">
                <li class="breadcrumb-item m-0 text-dark"><a href="#">Home</a></li>
                <li class="breadcrumb-item active m-0 text-dark">{{ ucfirst(str_replace('-', ' ', last(request()->segments()))) }}</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-2 sidebar">
                <h3 class="fw-bold">Browse by</h3>
                <hr>
                @if(!empty($categories))
                    <ul>
                        <li><a href="{{ route('all-products' ,['slug' => 'all-products']) }}" class="{{ 'all-products' == $slug ? 'active text-decoration-underline' : '' }} fw-bold">All Products</a></li>
                        @foreach($categories as $category)
                            <li ><a href="{{ route('all-products',['slug' => $category->slug]) }}" class="{{ $category->slug == $slug ? 'active text-decoration-underline' : '' }} fw-bold" >{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                @endif
            </div>

            <!-- Products Grid -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-end mb-4">
                    <div class="dropdown" style="margin: 0;">
                        <button class="sort-dropdown dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                            Sort by: Recommended
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'recommended']) }}">Recommended</a></li>
                            <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                            <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}">Newest</a></li>
                            <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'az']) }}">Sort A - Z</a></li>
                            <li><a class="dropdown-item" href="{{ request()->fullUrlWithQuery(['sort' => 'za']) }}">Sort Z - A</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                
                @if($products->count() > 0)
                <div class="row">
                    <!-- Product 1 -->

                    @if($slug === 'all-products' || $slug === 'products')
                        @foreach($products as $product)
                            <div class="col-md-4 product-card">
                                <a href="{{ route('product.page', ['slug' => $product->slug]) }}">
                                    @if(!empty($product->content['product_images'][0]['product_image']))
                                        <img src="{{ asset('storage/'.$product['content']['product_images'][0]['product_image']) }}" alt="Product Image">
                                    @endif
                                    <h6>{{$product->name ?? 'Product Title'}}</h6>
                                </a>
                            </div>
                        @endforeach

                    @else

                        @foreach($products as $product)
                            <div class="col-md-4 product-card">
                                <a href="{{ route('product.page', ['slug' => $product->slug]) }}">
                                    @if(!empty($product['content']['product_images'][0]['product_image']))
                                        <img src="{{ asset('storage/'.$product['content']['product_images'][0]['product_image']) }}" alt="Product Image">
                                    @endif
                                    <h6>{{$product->name ?? 'Product Title'}}</h6>
                                </a>
                            </div>
                        @endforeach

                    @endif

                </div>
                @else
                    <div class="text-center">
                        <h2>Not a valid category</h2>
                    </div>
                @endif

                @if(($slug === 'all-products' || $slug === 'products') && $products->hasMorePages())
                <div class="text-center mb-4">
                    <button class="load-more"><a href="{{ $products->nextPageUrl() }}">Load More</a></button>
                </div>
                @endif
            </div>
        </div>
    </div>
    </div>