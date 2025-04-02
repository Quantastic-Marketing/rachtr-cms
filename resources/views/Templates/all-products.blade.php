<div class="wrapper">  
    <!-- Hero Section -->
        <div class="hero-section" style="background-image: url('{{ asset('/images/product_banner.webp')}}' ); ">
            <div class="container">
                <h1 class="text-center">ALL PRODUCTS</h1>
            </div>
        </div>

    <!-- Main Content -->
    <div class="product-container container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">{{ ucfirst(str_replace('-', ' ', last(request()->segments()))) }}</li>
            </ol>
        </nav>

        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 sidebar">
                <h5>Browse by</h5>
                @if(!empty($categories))
                    <ul>
                        <li><a href="{{ route('all-products' ,['slug' => 'all-products']) }}" class="{{ 'all-products' == $slug ? 'active' : '' }}">All Products</a></li>
                        @foreach($categories as $category)
                            <li><a href="{{ route('all-products',['slug' => $category->slug]) }}" class="{{ $category->slug == $slug ? 'active' : '' }}" >{{$category->name}}</a></li>
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
                            <li><a class="dropdown-item" href="#">Recommended</a></li>
                            <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                            <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                            <li><a class="dropdown-item" href="#">Newest</a></li>
                        </ul>
                    </div>
                </div>
                
     
                @if($products)
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