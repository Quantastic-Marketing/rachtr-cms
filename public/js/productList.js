 
$(document).ready(function () {
    let sectionsData = [];
    let startAjax = performance.now();
    // Collect section data dynamically
    $('.product-card-section').each(function () {
        let sectionKey = $(this).data('section-key');
        let productIds = $(this).data('product-ids');
        
        if (productIds.length > 0) {
            sectionsData.push({ section_key: sectionKey, product_ids: productIds });
        }
    });

    console.log("Sending AJAX request with sections:", sectionsData);
    // Send a single AJAX request
    $.ajax({
        url: "/get-products",
        type: "POST",
        data: { sections: sectionsData },
        headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')  },
        success: function (response) {
            let endAjax = performance.now();
            console.log("AJAX request completed in", ((endAjax - startAjax) / 1000).toFixed(4), "seconds");
            if (response.products) {
                response.products.forEach(section => {
                    console.log("there is response");
                    let sectionElement = $(`.product-card-section[data-section-key='${section.section_key}'] .row.justify-content-center.gap-5`);
                    let productHtml = '';

                    section.products.forEach(product => {
                        let firstImage = null;
                        let productImages = product.product_images ? JSON.parse(product.product_images) : [];
                        if (Array.isArray(productImages) && productImages.length > 0) {
                            firstImage = productImages[0].product_image || null;
                        }
                        productHtml += `
                            <div class="col-lg-9 px-5">
                                <div class="row align-items-center product-card">
                                    <div class="col-md-6">
                                        <div class="product-image-wrapper">
                                        ${
                                            firstImage 
                                            ? `<img src="/storage/${firstImage}" alt="${product.name}" loading="lazy">` 
                                            : `<p>No image available</p>`
                                        }
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-details">
                                            <h2 class="product-title">${product.name}</h2>
                                            <p class="product-description">${product.product_desc.substring(0, 120)}...</p>
                                            <a href="/product/${product.slug}" class="btn btn-orange">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    sectionElement.append(productHtml);
                });
            }
        },
        error: function (error) {
            console.error("Error fetching products:", error);
        }
    });
});