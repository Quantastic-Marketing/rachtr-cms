class SearchContainer {
    constructor({
        inputId,
        dropdownId,
        wrapperId,
        resultsId,
        searchResultsDropdownId,
        productResultsId,
        blogResultsId
    }) {
        this.input = document.getElementById(inputId);
        this.dropdown = document.getElementById(dropdownId);
        this.wrapper = document.getElementById(wrapperId);
        this.results = document.getElementById(resultsId);
        this.searchResult = document.getElementById(searchResultsDropdownId);
        this.productResultsContainer = document.getElementById(productResultsId);
        this.blogResultsContainer = document.getElementById(blogResultsId);

        this.dropdownVisible = false;
        this.DEBOUNCE_DELAY = 300;
        this.debounceTimeout = null;
        this.isLoading = false;

        this.initSearchFunctionality();
    }

    initSearchFunctionality() {
        this.input.addEventListener('focus', () => this.handleSearchFocus());
        this.input.addEventListener('input', (e) => this.handleSearchInput(e));
        document.addEventListener('click', (e) => this.handleOutsideClick(e));
    }

    handleSearchFocus() {
        this.wrapper.classList.add('focused');
        this.dropdown.style.display = 'block';
        if (this.results.innerHTML.trim().length <= 0) {
            // this.dropdown.style.display = 'block';
            this.fetchTrendingProducts();
            // return;
        }
        this.showDropdown();
    }

    showDropdown() {
        this.dropdown.classList.add('show');
        this.dropdownVisible = true;
    }

    handleOutsideClick(e) {
        if (!e.target.closest(`#${this.wrapper.id}`)) {
            this.wrapper.classList.remove('focused');
            if (this.dropdown && !this.dropdown.contains(e.target)) {
                this.dropdown.style.display = 'none';
            }
            this.searchResult.classList.remove('show');
        }
    }

    handleSearchInput(e) {
        const query = e.target.value.trim();
        clearTimeout(this.debounceTimeout);
        this.dropdown.style.display = 'none';

        if (query.length === 0) {
            this.searchResult.classList.remove('show');
            this.dropdown.classList.add('show');
            return;
        }

        this.searchResult.classList.add('show');
        if (!this.isLoading) {
            this.showLoadingState();
        }

        this.debounceTimeout = setTimeout(() => {
            this.fetchSearchResults(query);
        }, this.DEBOUNCE_DELAY);
    }

    showLoadingState() {
        this.isLoading = true;
        this.productResultsContainer.innerHTML = '<div class="loading">Loading products...</div>';
        this.blogResultsContainer.innerHTML = '<div class="loading">Loading blogs...</div>';
    }

    async fetchSearchResults(query) {
        try {
            const response = await fetch(`/api/product-lists?query=${encodeURIComponent(query)}`, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }

            const data = await response.json();
            this.updateSearchResults(data);
        } catch (error) {
            console.error('Error fetching search results:', error);
            this.showErrorState();
        } finally {
            this.isLoading = false;
        }
    }

    async fetchTrendingProducts() {
        // prevent double fetching
        if (this.trendingLoaded) return;
        // this.trendingLoaded = true;
    
        this.results.innerHTML = '<div class="loading">Loading trending products...</div>';
        try {
            const response = await fetch('/api/trending-products', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
    
            if (!response.ok) throw new Error('Failed to fetch trending products');
    
            const data = await response.json();
            console.log('Trending products:', data);
            if (data.products && Object.keys(data.products).length > 0) {
                const productsArray = Object.values(data.products);
                this.results.innerHTML = productsArray.map(p => this.createProductHTML(p)).join('');
            } else {
                console.warn('No trending products found');
                console.log('Trending products data :', data.products);
                this.results.innerHTML = '<div class="no-results">No trending products found.</div>';
            }
    
        } catch (err) {
            console.error('Trending error:', err);
            this.results.innerHTML = '<div class="error">Could not load trending products.</div>';
        } finally {
            this.trendingLoaded = true;
        }
    }

    updateSearchResults(data) {
        if (data.products && data.products.length > 0) {
            this.productResultsContainer.innerHTML = data.products.map(product => this.createProductHTML(product)).join('');
        } else {
            this.productResultsContainer.innerHTML = '<div class="no-results">No products found</div>';
        }

        if (data.blogs && data.blogs.length > 0) {
            this.blogResultsContainer.innerHTML = data.blogs.map(blog => this.createBlogHTML(blog)).join('');
        } else {
            this.blogResultsContainer.innerHTML = '<div class="no-results">No blogs found</div>';
        }
    }

    createProductHTML(product) {
        const images = product.content.product_images || '[]';
        const imageUrl = images.length > 0 ? `/storage/${images[0].product_image}` : '';
        const description = this.stripTags(product.content.product_desc || '').substring(0, 15) + '...';

        return `
            <div class="result-item">
                <a href="/product-page/${product.slug}">
                    <div class="result-image">
                        <img src="${imageUrl}" alt="${product.name}" width="50" height="50">
                    </div>
                    <div class="result-info">
                        <h4>${product.name}</h4>
                        <p>${this.escapeHTML(description)}</p>
                    </div>
                </a>
            </div>
        `;
    }

    createBlogHTML(blog) {
        let imageUrl = '';
        const description = this.stripTags(blog.body || '').substring(0, 25) + '...';

        return `
            <div class="result-item">
                <a href="blogs/${blog.slug}">
                    <div class="result-image">
                        <img src="${blog.feature_photo}" alt="${blog.title}" width="50" height="50">
                    </div>
                    <div class="result-info">
                        <h4>${this.stripTags(blog.title || '').substring(0, 15) + '...'}</h4>
                        <p>${this.escapeHTML(description)}</p>
                    </div>
                </a>
            </div>
        `;
    }

    showErrorState() {
        this.productResultsContainer.innerHTML = '<div class="error">Failed to load products. Please try again.</div>';
        this.blogResultsContainer.innerHTML = '<div class="error">Failed to load blogs. Please try again.</div>';
    }

    stripTags(str) {
        return str ? str.replace(/<\/?[^>]+(>|$)/g, '') : '';
    }

    escapeHTML(str) {
        return str
            ? str
                  .replace(/&/g, '&amp;')
                  .replace(/</g, '&lt;')
                  .replace(/>/g, '&gt;')
                  .replace(/"/g, '&quot;')
                  .replace(/'/g, '&#039;')
            : '';
    }
}

// Initialize search containers
document.addEventListener('DOMContentLoaded', () => {
    // Desktop search container
    const desktopSearch = new SearchContainer({
        inputId: 'searchInput',
        dropdownId: 'searchDropdown',
        wrapperId: 'searchWrap',
        resultsId: 'search-results',
        searchResultsDropdownId: 'searchResultsDropdown',
        productResultsId: 'product-results',
        blogResultsId: 'blog-results'
    });

    // Mobile search container
    

    const initMobileSearch = () => {
        if (window.innerWidth <= 1238) {
            // Check if mobile search elements exist
            if (document.getElementById('mobile-searchWrap')) {
                const mobileSearch = new SearchContainer({
                    inputId: 'mobile-searchInput', // Adjust ID for mobile
                    dropdownId: 'mobile-searchDropdown',
                    wrapperId: 'mobile-searchWrap',
                    resultsId: 'mobile-search-results',
                    searchResultsDropdownId: 'mobile-searchResultsDropdown',
                    productResultsId: 'mobile-product-results',
                    blogResultsId: 'mobile-blog-results'
                });
            } else {
                console.warn('Mobile search container not found. Ensure mobile-searchWrap exists in the DOM.');
            }
        }
    };

    // Initial check
    initMobileSearch();

    // Re-check on window resize
    window.addEventListener('resize', () => {
        initMobileSearch();
    });
});
