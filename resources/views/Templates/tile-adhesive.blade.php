@php
$pageContent = $page->content ?? [];
  $banner = $pageContent['banner'] ?? [];
  $solutions = $pageContent['solutions'] ?? [];
  $experience = $pageContent['experience'] ?? [];
  $location = $pageContent['location'] ?? [];
  $ourProjects = $pageContent['project'] ?? [];
  $build = $pageContent['build'] ?? [];
  $quote = $pageContent['quote'] ?? [];
  $showcase = $pageContent['showcase'] ?? [];
  $blogHeading = $pageContent['blog-heading'] ?? [] ;
@endphp

<div class="wrapper">
        <section class="architect-banner banner">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="banner-section">
                        <div class="image-wrapper">
                            <img src="images/banner-tile.webp" alt="RachTR Epoxy Flooring" class="d-none d-md-block">
                            <img src="images/arch_mob_bg.webp" alt="img background" class=" d-block d-md-none">
                        </div>
                        <div class="heading-holder">
                            <h1 class="fw-bold">Tile Adhesive</h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- This is a banner close -->
        <section class="arch-solution innovation-solutions py-3 py-sm-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <div class="row d-flex">
                            <div class="col-lg-6 pt-lg-0 ps-lg-0 order-2 py-3 pe-5">
                                <div class="image-container">
                                    <!-- <div class="background-box"></div> -->
                                    <img src="images/kitchen.webp" alt="Modern Architect Center with sleek glass buildings and innovative design">
                                    <!-- <div class="overlay-box"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 px-4 order-1">
                                <div class="heading-holder pb-4">
                                    <h2 class="fw-bold">Introduction</h2>
                                </div>
                               <p>Marble & Tile installation requires precision and the right bonding material to ensure lasting
                                strength and durability. At RachTR, we provide high-performance marble & tile adhesives designed to fix tiles and natural stones with unmatched grip. Whether for residential flooring, commercial lobbies, or industrial spaces, our tile adhesives guarantee crack-free, slip-resistant, and long-lasting results.
                               </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a banner close -->

        <section class="why-choose-section py-3 py-sm-5">
            <div class="container">
                <h2 class="why-choose-heading">Why Choose RachTR Marble & Tile Adhesives?</h2>

                <div class="why-choose-features-grid">
                    <div class="why-choose-feature-card">
                        <div class="why-choose-feature-content">
                            <h3 class="why-choose-feature-title">Strong Bonding Strength</h3>
                            <p class="why-choose-feature-description">Ensures tiles stay firmly in place even in high-traffic areas.</p>
                        </div>
                    </div>

                    <div class="why-choose-feature-card">
                        <div class="why-choose-feature-content">
                            <h3 class="why-choose-feature-title">Water-resistant Formula</h3>
                            <p class="why-choose-feature-description">Protects against seepage and dampness, ideal for bathrooms, kitchens, and monsoon-prone regions.</p>
                        </div>
                    </div>

                    <div class="why-choose-feature-card">
                        <div class="why-choose-feature-content">
                            <h3 class="why-choose-feature-title">Slip-Resistant Application</h3>
                            <p class="why-choose-feature-description">Prevents tile displacement during fixing.</p>
                        </div>
                    </div>

                    <div class="why-choose-feature-card">
                        <div class="why-choose-feature-content">
                            <h3 class="why-choose-feature-title">Versatile Usage</h3>
                            <p class="why-choose-feature-description">Suitable for marble, granite, vitrified, ceramic, and mosaic tiles.</p>
                        </div>
                    </div>

                    <div class="why-choose-feature-card">
                        <div class="why-choose-feature-content">
                            <h3 class="why-choose-feature-title">Long-Lasting Finish</h3>
                            <p class="why-choose-feature-description">Withstands heavy loads, moisture, and seasonal changes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="polishing-section py-3 py-sm-5">
            <div class="container">
                <div class="section-header">
                    <h2>Tile adhesive Products</h2>
                    <!-- <p>Achieve a brilliant shine and smooth finish for your marble surfaces with our advanced marble tile polish, bringing out the natural beauty of the stone.</p> -->
                </div>

                <div class="products-grid">
                    <a href="https://www.rachtr.com/product-page/rachtr-tsa-eco" class="product-card">
                        <div class="product-image">
                            <img src="https://www.rachtr.com/storage/images/01JNN0TQPD2NXRY30XM1C4FD8W.avif" alt="RachTR TSA ECO">
                        </div>
                        <h3 class="product-title">RachTR TSA ECO +</h3>
                    </a>

                    <a href="https://www.rachtr.com/product-page/rachtr-tsa-st" class="product-card">
                        <div class="product-image">
                            <img src="https://www.rachtr.com/storage/images/01JP5BDSBHPY0KZ7T1BWQ6915X.avif" alt="RachTR TSA ST">
                        </div>
                        <h3 class="product-title">RachTR TSA ST</h3>
                    </a>

                    <a href="https://www.rachtr.com/product-page/rachtr-tsa-pr" class="product-card">
                        <div class="product-image">
                            <img src="https://www.rachtr.com/storage/images/01JP70KV3ACV9P7C9Z860CY89W.avif" alt="RachTR TSA PR">
                        </div>
                        <h3 class="product-title">RachTR TSA PR</h3>
                    </a>

                    <a href="https://www.rachtr.com/product-page/rachtr-ltx-133" class="product-card">
                        <div class="product-image">
                            <img src="https://www.rachtr.com/storage/images/01JP71FQWTYCTZDSTKTYAYPGYE.avif" alt="RachTR LTX 133">
                        </div>
                        <h3 class="product-title">RachTR LTX 133</h3>
                    </a>
                </div>
            </div>
        </section>

        <section class="applications-section py-3 py-sm-5" style="background-color: #EDEDED;">
            <div class="container">
                <h2 class="applications-heading">Applications of RachTR Tile Adhesives</h2>

                <div class="applications-slider-wrapper">
                    <div class="applications-slick-slider">
                        <div class="applications-slide-item">
                            <img src="images/img1.webp" alt="Bathrooms & Wet Areas" class="applications-slide-image">
                            <h3 class="applications-slide-title">Bathrooms & Wet Areas</h3>
                        </div>
                        <div class="applications-slide-item">
                            <img src="images/img4.webp" alt="Commercial Flooring Projects" class="applications-slide-image">
                            <h3 class="applications-slide-title">Commercial Flooring Projects</h3>
                        </div>
                        <div class="applications-slide-item">
                            <img src="images/img2.webp" alt="Outdoor Balconies" class="applications-slide-image">
                            <h3 class="applications-slide-title">Outdoor Balconies</h3>
                        </div>
                        <div class="applications-slide-item">
                            <img src="images/kitchen1.webp" alt="Kitchen Areas" class="applications-slide-image">
                            <h3 class="applications-slide-title">Kitchen Areas</h3>
                        </div>
                        <div class="applications-slide-item">
                            <img src="images/img3.webp" alt="Interior Spaces" class="applications-slide-image">
                            <h3 class="applications-slide-title">Interior Spaces</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="guide-section py-3 py-sm-5">
            <div class="container">
                <!-- Section Heading -->
                <h2 class="section-heading text-center mb-5">
                    How to Use Tile Adhesive Effectively
                </h2>
                
                <!-- Steps Grid -->
                <div class="row g-4">
                    <!-- Step 1: Surface Preparation -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="step-card">
                            <div class="d-flex align-items-start gap-3">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h3 class="step-title mb-2">Surface Preparation</h3>
                                    <p class="step-description mb-0">
                                        Ensure surface is clean, levelled, and dust-free.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Mixing -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="step-card">
                            <div class="d-flex align-items-start gap-3">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h3 class="step-title mb-2">Mixing</h3>
                                    <p class="step-description mb-0">
                                        Prepare adhesive paste as per instructions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3: Application -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="step-card">
                            <div class="d-flex align-items-start gap-3">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h3 class="step-title mb-2">Application</h3>
                                    <p class="step-description mb-0">
                                        Spread adhesive evenly with a notched trowel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4: Tile Fixing -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="step-card">
                            <div class="d-flex align-items-start gap-3">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h3 class="step-title mb-2">Tile Fixing</h3>
                                    <p class="step-description mb-0">
                                        Press tiles firmly with slight movement for maximum grip.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5: Curing -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="step-card">
                            <div class="d-flex align-items-start gap-3">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h3 class="step-title mb-2">Curing</h3>
                                    <p class="step-description mb-0">
                                        Allow sufficient time before grouting or foot traffic.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits-section-epoxy py-3 py-sm-5" style="background-color: #EDEDED;">
            <div class="container">
                <!-- Section Heading -->
                <h2 class="section-heading text-center mb-5">
                    Benefits of RachTR Tile Adhesives
                </h2>
                
                <!-- Benefits Grid -->
                <div class="row g-4 benefits-grid">
                    <!-- Benefit 1: Superior bonding strength -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <img src="images/flash.png" alt="">
                            </div>
                            <div class="benefit-content">
                                <p class="benefit-text">Superior bonding strength</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 2: Crack-resistant / shrinkage resistance -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <img src="images/securityshield.png" alt="">
                            </div>
                            <div class="benefit-content">
                                <p class="benefit-text">Crack-resistant | Shrinkage resistance</p>
                            </div>
                        </div>
                    </div>

                    <!-- Benefit 3: Water-resistant / weatherproof -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <img src="images/waterproof.webp" alt="waterproof and weatherproof">
                            </div>
                            <div class="benefit-content">
                                <p class="benefit-text">Water-resistant | Weatherproof</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trusted-section py-3 py-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="trusted-content">
                            <h2 class="trusted-heading">Why RachTR is Trusted for Tile Adhesives?</h2>
                            <p class="trusted-description">
                                RachTR has established itself as a trusted name in industrial and residential flooring solutions. With advanced formulations and tested durability, our adhesives are designed to withstand Indian weather conditions, heavy footfall, and moisture exposure.
                            </p>
                            <div class="trusted-links">
                                <a href="#epoxy-flooring" class="btn trusted-link">
                                    <span class="trusted-link-icon">→</span>
                                    <span class="trusted-link-text">Browse our Epoxy Flooring Solutions</span>
                                </a>
                                <a href="#pu-flooring" class="btn trusted-link">
                                    <span class="trusted-link-icon">→</span>
                                    <span class="trusted-link-text">Explore PU Flooring Products</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="res-blogs blogs bg-white">
            <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                <div class="blogs_sec py-lg-5 py-2">
                    <div class="mb-lg-5 mb-2 px-lg-5 mx-lg-5">
                    <h2 class="mb-3 pb-2  fw-bold text-start text-dark">
                        Read our blogs to know more about tile adhesive
                    </h2>
                    </div>
                    <ul class="padd0">
                                        <li class="col-lg-4 mx-3">
                        <a href="https://www.rachtr.com/blogs/large-format-tile-adhesives">
                        <div class="blogs_img">
                            <img src="https://www.rachtr.com/storage/blog-feature-images/large%20format%20tiles.jpg">
                        </div>
                        <div class="blogs_contnt">
                            
                            <div class="top_cont">
                                <span class="fw-bold">Sep 17</span>
                                <sup class="fw-bold">.</sup>
                                <span class="fw-bold">4 min read</span>
                            </div>
                            <div class="btm_cont">
                                <h2><strong class="title-blog">The Role of Tile Adhesives in Large-Format Tiles & Modern Flooring Trends</strong></h2>
                            </div>
                        
                        </div>
                        </a>
                    </li>
                                        <li class="col-lg-4 mx-3">
                        <a href="https://www.rachtr.com/blogs/tile-adhesives-for-renovation">
                        <div class="blogs_img">
                            <img src="https://www.rachtr.com/storage/blog-feature-images/renovation.jpg">
                        </div>
                        <div class="blogs_contnt">
                            
                            <div class="top_cont">
                                <span class="fw-bold">Sep 24</span>
                                <sup class="fw-bold">.</sup>
                                <span class="fw-bold">4 min read</span>
                            </div>
                            <div class="btm_cont">
                                <h2><strong class="title-blog">Tile Adhesives for Renovation: Fixing Tiles Without Removing Old Flooring</strong></h2>
                            </div>
                        
                        </div>
                        </a>
                    </li>
                                        <li class="col-lg-4 mx-3">
                        <a href="https://www.rachtr.com/storage/blog-feature-images/rachtr%201200%20x%20626%20(2).png">
                        <div class="blogs_img">
                            <img src="https://www.rachtr.com/storage/blog-feature-images/tile%20vs%20natural%20stone%20(1).jpg">
                        </div>
                        <div class="blogs_contnt">
                            
                            <div class="top_cont">
                                <span class="fw-bold">Oct 01</span>
                                <sup class="fw-bold">.</sup>
                                <span class="fw-bold">4 min read</span>
                            </div>
                            <div class="btm_cont">
                                <h2><strong class="title-blog">Tile vs Natural Stone: Understanding the Difference</strong></h2>
                            </div>
                        
                        </div>
                        </a>
                    </li>
                                    </ul>
                    <div class="view_btn col-lg-3 py-lg-5 py-3">
                    <a href="https://www.rachtr.com/blogs" target="_blank" class="">VIEW ALL</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <section class="carrer-collaborate py-3 py-sm-5">
            <div class="collaboration">
                <div class="container-fluid">
                    <div class="row collab-section">
                        <!-- Left Section (White Background) -->
                        <div class="col-lg-5 collab-left d-flex flex-column justify-content-center career-left">
                            <div class="row py-lg-5">
                                <div class="col-md-10  col-xl-9 col-xxl-8 ">
                                    <h2 class="fw-bold">Get the Right Tile Adhesive for Your Project</h2>
                                    
                                </div>
                            </div>  
                        </div>
        
                        <!-- Right Section (Black Background) -->
                        <div class="col-lg-7 collab-right d-flex flex-column justify-content-center">
                            <div class="row p-lg-5">
                                <div class="col-md-9  ">
                                    <p>Whether you are a homeowner, contractor, or builder, choosing the right adhesive is
                                        critical to the durability of your tile work. RachTR tile adhesives ensure strength,
                                        longevity, and superior finishing.
                                        </p>
                                        <p>Contact Us Today to get expert recommendations or request a free consultation.</p>
                                    <hr class="my-2" style="color: #ffffff; width: 50px;">
                                    <a href="https://api.whatsapp.com/send?phone=917827191824&text=Hey%2C%20greetings%2C%20I%20want%20to%20learn%20more%20about%20your%20business!" class="cta-btn cta-btn-style mt-3">Reach out Now !</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="common-faqs py-5">   
            <div class="container">
                <div class="row g-0">
                    <div class="common-faq-block">
                        <div class="heading-holder py-5 text-center">
                            <h2 class="fw-bold">
                               Common FAQs related to <span>RachTR Tile Adhesives</span>
                            </h2>
                        </div>
                        <div class="faq-block  ">
                        <div class="faq-block px-md-5 mx-md-5 px-sm-3 mx-sm-3">
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">Can tile adhesive be used outdoors?</h6>
                                </div>
                                <div class="acc-body">
                                    <p> Yes, RachTR tile adhesives are weatherproof and ideal for external applications.</p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">Is tile adhesive waterproof?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>Yes, especially our epoxy-based polymer-modified adhesives. </p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">Can I use tile adhesive for marble & stone?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>Yes, we offer AdFlex 206 specially designed for heavy stone and tiles.</p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">How much tile adhesive is needed per sq. ft.?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>On average, 0.25–0.35 kg per sq. ft., depending on tile size.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> 
            </div>
        </section>  
</div>