
    <!-- This is a wrapper open -->
    <div class="wrapper"> 
    
        <section class="search-banner banner">
            <div class="row g-0">
            <div class="col-lg-12">  
                <div class="banner-section">
                    <div class="image-wrapper">
                        <img src="images/search_banner.webp" alt="img background">
                       
                    </div>
                    <div class="heading-holder">
                        <h2 class="fw-bold" style="color:#f26522">SEARCH</h2>
                    </div>
                </div>
              </div>
             
            </div>
        </section>

        <section class="search-sec container-search">
            <div class="container">
            
                <div class="search-box">
                    <form action="{{ route('product-lists')}}" method="GET" >
                        <input type="text" class="form-control" placeholder="Search for products..." name="query" x-model.debounce.500ms="query" value="{{request('query')}}" onkeypress="if(event.key === 'Enter') this.form.submit();">
                    </form>
                </div>
            </div>
        </section>
    
        <!-- Search Box -->
            @php 

                $totalProduct = $products->count();
                $totalBlogs = $blogs->count();

            @endphp
    
        <!-- Filter Tabs -->
        <div class="container mt-4 container-search">
            <ul class="nav nav-tabs custom-tabs" id="searchTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All ({{ $totalProduct + $totalBlogs}})</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab" aria-controls="products" aria-selected="false">Products ({{$totalProduct}})</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="blog-tab" data-bs-toggle="tab" data-bs-target="#blog" type="button" role="tab" aria-controls="blog" aria-selected="false">Blog Posts ({{$totalBlogs}})</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">Other Pages (2)</button>
                </li> -->
            </ul>
            @if($totalProduct != 0 || $totalBlogs != 0)
            <!-- Tab Content -->
            <div class="tab-content" id="searchTabsContent">
                <!-- All Tab -->
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="search-results">
                        <p class="results-count">{{ $totalProduct + $totalBlogs }} items found</p>
                        
                        <!-- Products Section -->
                        <div class="section-container">
                            <h2>Products ({{ $totalProduct }})</h2>
                            @if(!empty($products))
                            <div class="row">
                            @foreach($products->take(3) as $product)
                                <div class="col-md-4 mb-4">
                                    <div class="product-card">
                                        <a href="{{ route('product.page', ['slug' => $product['slug']]) }}">
                                            @if(isset($product['content']['product_images'][0]['product_image']))
                                            <img src="{{ asset('storage/'.$product['content']['product_images'][0]['product_image']) }}" alt="RachTR PULU 75" class="img-fluid">
                                            @endif
                                            <h3 x-html="highlightText('{{ $product['name'] ?? '' }}')">{{ $product['name'] ?? ''}}</h3>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                            <button class="btn btn-primary">View All</button>
                            @endif
                        </div>
                        
                        <!-- Blog Posts Section -->
                        <div class="section-container">
                            <h2>Blog Posts ({{ $totalBlogs ?? 0}})</h2>

                            @if(!empty($blogs))
                            @foreach($blogs->take(3) as $blog)
                            <div class="blog-post">
                                <div class="row">
                                    
                                        <div class="col-md-2">
                                            <a href="{{route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                                                <img src="{{ asset($blog->featurePhoto) }}" alt="{{ $blog->photo_alt_text ?? 'Blog Image'}}" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-md-10">
                                            <a href="{{route('filamentblog.post.show', ['post' => $blog->slug]) }}">
                                               <h3 x-html="highlightText(`{{ $blog->title ?? 'Blog Title' }}`)">{{ $blog->title ?? 'Blog Title'}}</h3>
                                               <p x-html="highlightText(`{{ Str::limit(strip_tags(html_entity_decode($blog->body)), 150) }}`)">{{Str::limit(strip_tags(html_entity_decode($blog->body)), 150) ?? 'Blog Body'}}</p>
                                            </a>
                                        </div>
                                    
                                    
                                </div>
                            </div>
                            @endforeach
                            <button class="btn btn-primary">View All</button>
                            @endif
                        </div>
                        
                        <!-- Other Pages Section -->
                        <!-- <div class="section-container">
                            <h2>Other Pages (2)</h2>
                            <div class="other-page">
                                <h3>Marble & Tile Adhesives and Epoxy Grouts - Installation Systems by RachTR</h3>
                                <p>thixotropic transparent paste with high viscosity for gluing and fixing marbles, stones and tiles RachTR <span class="badge bg-orange">PULU</span> free, 2 component liquid reaction-resin system for joint filling and bonding of natural stones RachTR <span class="badge bg-orange">PULU</span> C RachTR <span class="badge bg-orange">PULU</span>...</p>
                            </div>
                            <div class="other-page">
                                <h3>Residential & Commercial Buildings Flooring Solutions - RachTR</h3>
                                <p>RACHTR EG 200 RachTR <span class="badge bg-orange">PULU</span> C 30 RachTR MH 103 THIXO RachTR <span class="badge bg-orange">PULU</span> C RachTR R 105 THIXO RachTR <span class="badge bg-orange">PULU</span> 75 RachTR</p>
                            </div>
                            <button class="btn btn-primary">View All</button>
                        </div> -->
                    </div>
                </div>
                
                <!-- Products Tab -->
                <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">
                    <div class="search-results">
                        <p class="results-count">{{ $totalProduct }} items found</p>
                        
                        <div class="section-container"
                             x-data="{
                                        categories: window.categoriesData ?? [],
                                        products: window.productsData ?? [],
                                        filteredProducts: window.productsData ?? [],
                                        visibleProductCount: 6,
                                        selectedCategories: [],

                                        getProductUrl(slug) {
                                            return '{{ route('product.page', ['slug' => '__SLUG__']) }}'.replace('__SLUG__', slug);
                                        },

                                        filterProducts() {
                                            if (this.selectedCategories.length === 0) {
                                                this.filteredProducts = this.products;
                                            } else {
                                                this.filteredProducts = this.products.filter(product => 
                                                    product.categories.some(category => this.selectedCategories.includes(category.id))
                                                );
                                            }
                                            this.visibleProductCount = 6; 
                                        },

                                        toggleCategory(categoryId) {
                                            if (this.selectedCategories.includes(categoryId)) {
                                                this.selectedCategories = this.selectedCategories.filter(id => id !== categoryId);
                                            } else {
                                                this.selectedCategories.push(categoryId);
                                            }
                                            this.filterProducts();
                                        },

                                        loadMoreProduct() {
                                            if (this.visibleProductCount < this.filteredProducts.length) {
                                                this.visibleProductCount += 6;
                                            }
                                        }
                                    }">
                            <div class="row">
                            <!-- Left Sidebar -->
                            <div class="col-md-3">
                                <div class="category-title">Category</div>

                                <div class="category-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="category-all" 
                                            @change="selectedCategories = []; filterProducts();" 
                                            :checked="selectedCategories.length === 0">
                                        <label class="form-check-label" for="category-all">
                                            All Products (<span x-text="products.length"></span>)
                                        </label>
                                    </div>
                                </div>
                                <template x-for="category in categories" :key="category.id">
                                    <div class="category-item">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  :id="'category-' + category.id" @change="toggleCategory(category.id)">
                                            <label class="form-check-label" :for="'category-' + category.id">
                                                <span x-text="category.name"></span>  
                                                (<span x-text="products.filter(product => product.categories.some(c => c.id === category.id)).length"></span>)
                                            </label>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Product Grid -->
                            <div class="col-md-9">
                                            <div class="row">
                                                <!-- Product 1 -->
                                                <template x-for="(product, index) in filteredProducts.slice(0, visibleProductCount)" :key="index">
                                                    <div class="col-md-4">
                                                        <div class="card product-card d-flex">
                                                            <a :href="getProductUrl(product.slug)">
                                                            <template x-if="product.content?.product_images?.length > 0">
                                                                <img :src="'/storage/' + product.content.product_images[0].product_image" class="card-img-top" alt="Product Image">
                                                            </template>
                                                            <div class="card-body p-2">
                                                            <h5 x-html="highlightText(product.name ?? 'Product Title')" class="product-title"></h5>
                                                            </div>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                        
                                            
                                            <!-- Pagination -->
                                            <button x-ref="loadMoreProductButton" x-show="visibleProductCount < filteredProducts.length"  @click.prevent="loadMoreProduct()"  class="btn btn-primary loadMore">
                                                Load More
                                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- Blog Posts Tab -->
                <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab">
                    <div class="search-results">
                        <p class="results-count">{{ $totalBlogs }} items found</p>
                        
                        <div class="section-container"
                             x-data="{
                                        posts: window.postsData ?? [],
                                        totalBlogs: @json($blogs->count()),
                                        visibleBlogCount: 6,
                                        decodeAndLimitText(html, limit = 200) {
                                            let txt = document.createElement('textarea');
                                            txt.innerHTML = html;
                                            let decoded = txt.value.replace(/<\/?[^>]+(>|$)/g, ''); // Remove HTML tags
                                            return decoded.length > limit ? decoded.substring(0, limit) + '...' : decoded;
                                        },
                                        getPostUrl(slug) {
                                            return '{{ route('filamentblog.post.show', ['post' => '__SLUG__']) }}'.replace('__SLUG__', slug);
                                        },
                                        loadMoreBlog() {
                                            
                                               if (this.visibleBlogCount < this.posts.length) {
                                                    this.visibleBlogCount += 6;
                                                }
                                        }

                                        }">
                            <h2>Blog Posts ({{ $totalBlogs }})</h2>
                            <template x-if="posts.length > 0">
                            <template x-for="(blog, index) in posts.slice(0, visibleBlogCount)" :key="index">
                                <div class="blog-post">
                                    <div class="row">
                                        
                                            <div class="col-md-2">
                                              <a :href="getPostUrl(blog.slug)">
                                                <img :src="blog.featurePhoto" :alt="blog.photo_alt_text ?? 'blog image'" class="img-fluid">
                                              </a>
                                            </div>
                                         
                                            <div class="col-md-10">
                                            <a :href="getPostUrl(blog.slug)">
                                                <h3 x-html="highlightText(blog.title ?? '')" ></h3>
                                                <p x-html="highlightText(decodeAndLimitText(blog.body))" ></p>
                                            </a>
                                            </div>
                                           
                                    </div>
                                </div>
                            </template>
                            </template>

                            <button x-show="visibleBlogCount < totalBlogs" @click="loadMoreBlog()" class="btn btn-primary">
                                Load More
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Other Pages Tab -->
                <!-- <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
                    <div class="search-results">
                        <p class="results-count">2 items found</p>
                        
                        <div class="section-container">
                            <h2>Other Pages (2)</h2>
                            <div class="other-page">
                                <h3>Marble & Tile Adhesives and Epoxy Grouts - Installation Systems by RachTR</h3>
                                <p>thixotropic transparent paste with high viscosity for gluing and fixing marbles, stones and tiles RachTR <span class="badge bg-orange">PULU</span> free, 2 component liquid reaction-resin system for joint filling and bonding of natural stones RachTR <span class="badge bg-orange">PULU</span> C RachTR <span class="badge bg-orange">PULU</span>...</p>
                            </div>
                            <div class="other-page">
                                <h3>Residential & Commercial Buildings Flooring Solutions - RachTR</h3>
                                <p>RACHTR EG 200 RachTR <span class="badge bg-orange">PULU</span> C 30 RachTR MH 103 THIXO RachTR <span class="badge bg-orange">PULU</span> C RachTR R 105 THIXO RachTR <span class="badge bg-orange">PULU</span> 75 RachTR</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            @else
            <div class="d-flex py-5 justify-center">
                <h2> No results found </h2>
            </div>
            
            @endif


        </div>
   </div>

<script>
    window.productsData = {!! json_encode($products->map(function ($product) {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'slug' => $product->slug,
            'content' => $product->content,
            'categories' => $product->categories->map(function ($cat) {
                return [
                    'id' => $cat->id,
                    'name' => $cat->name
                ];
            })->toArray() // Ensure it's an array
        ];
    }), JSON_UNESCAPED_UNICODE) !!};
    window.categoriesData = @json($categories, JSON_UNESCAPED_UNICODE);
    window.postsData = {!! json_encode($blogs->map(function ($blog) {
    return [
        'id' => $blog->id,
        'title' => $blog->title,
        'body' => $blog->body,
        'slug' => $blog->slug,
        'featurePhoto' => $blog->featurePhoto,
        'photo_alt_text' => $blog->photo_alt_text
    ];
}), JSON_UNESCAPED_UNICODE) !!};

function highlightText(text) {
    let query = new URLSearchParams(window.location.search).get("query");
    if (!query || !text) return text;

    let regex = new RegExp(`(${query})`, 'gi');
    return text.replace(regex, '<span style="background-color:#ff6b24;">$1</span>');
}
</script>
