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
                            <img src="{{ !empty($banner['banner_desktop'])  ? asset('storage/' . $banner['banner_desktop']) : asset('images/epoxy-banner.png')}}" alt="{{ $banner['banner_alt'] ?? 'RachTR Epoxy Flooring   '}}" class="d-none d-md-block">
                            <img src="{{ !empty($banner['banner_mobile'] ) ? asset('storage/' . $banner['banner_mobile']) : asset('images/arch_mob_bg.webp')}}" alt="{{ $banner['banner_alt'] ?? 'img background'}}" class=" d-block d-md-none">
                        </div>
                        <div class="heading-holder">
                            <h1 class="fw-bold">{!! $banner['banner_heading'] ?? 'Epoxy Flooring' !!}</h1>
                            @if(!empty($banner['banner_desc']))
                            <p>{!! $banner['banner_desc'] ?? ' Welcome to the RachTR Architect Center, a dedicated hub designed to support architects
                                and designers in creating exceptional spaces.' !!}</p>
                            @endif
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
                                    <img src="{{ !empty($solutions['innovative_image']) ? asset('storage/' . $solutions['innovative_image']) : asset('images/epoxy_floor.png')}}" alt="{{ $solutions['innovative_image_alt'] ?? 'Modern Architect Center with sleek glass buildings and innovative design'}}">
                                    <!-- <div class="overlay-box"></div> -->
                                </div>
                            </div>
                            <div class="col-lg-6 px-4 order-1">
                                <div class="heading-holder pb-4">
                                    <h2 class="fw-bold">{!! $solutions['innovative_heading'] ?? 'Introduction' !!}</h2>
                                </div>
                                @if(!empty($solutions['innovative_description']))
                                    {!! $solutions['innovative_description'] !!}
                                @else
                                <p> Looking for high-performance epoxy flooring that lasts? At RachTR, we deliver top-tier epoxy flooring systems trusted across industrial and commercial projects. Whether it's a warehouse, factory, garage, or food-grade facility, our seamless coatings are engineered for durability, chemical resistance, and safety compliance.</p>
                                <p>Our in-house epoxy formulations ensure unmatched strength, aesthetics, and easy maintenance-making RachTR the preferred choice for businesses across India</p> 
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a banner close -->

        <section class="epoxy-flooring-info-section">
            <div class="container">
                <div class="col-lg-10 col-md-12">
                    <h2 class="epoxy-flooring-title">What is Epoxy Flooring?</h2>
                    <p class="epoxy-flooring-description">
                        Epoxy flooring is a thermosetting resin-based system that forms a tough, seamless surface when applied to concrete. It's widely used in industrial environments due to its chemical resistance, abrasion durability, and anti-slip properties.
                    </p>
                    <p class="epoxy-flooring-custom-note">
                        RachTR's epoxy floors are custom-designed based on your industry, foot traffic, and surface conditions.
                    </p>
                </div>
            </div>
        </section>

        <section class="epoxy-types-section">
            <div class="epoxy-types-container">
                <h2 class="epoxy-types-heading">Types of Epoxy Flooring Offered</h2>

                <div class="epoxy-types-slider-wrapper">
                    <div class="epoxy-types-slick-slider">
                        <div class="epoxy-types-slide-item">
                            <img src="images/epoxy1.png" alt="Epoxy Flooring 1" class="epoxy-types-slide-image">
                        </div>
                        <div class="epoxy-types-slide-item">
                            <img src="images/epoxy2.png" alt="Epoxy Flooring 2" class="epoxy-types-slide-image">
                        </div>
                        <div class="epoxy-types-slide-item">
                            <img src="images/epoxy3.png" alt="Epoxy Flooring 3" class="epoxy-types-slide-image">
                        </div>
                        <div class="epoxy-types-slide-item">
                            <img src="images/epoxy4.png" alt="Epoxy Flooring 4" class="epoxy-types-slide-image">
                        </div>
                        <div class="epoxy-types-slide-item">
                            <img src="images/epoxy2.png" alt="Epoxy Flooring 5" class="epoxy-types-slide-image">
                        </div>
                    </div>
                </div>

                <div class="epoxy-types-table-wrapper">
                    <table class="epoxy-types-comparison-table">
                        <thead class="epoxy-types-table-head">
                            <tr class="epoxy-types-header-row">
                                <th class="epoxy-types-column-type">Type</th>
                                <th class="epoxy-types-column-bestfor">Best For</th>
                                <th class="epoxy-types-column-features">Key Features</th>
                            </tr>
                        </thead>
                        <tbody class="epoxy-types-table-body">
                            <tr class="epoxy-types-data-row">
                                <td class="epoxy-types-cell-type">Self-Leveling Epoxy</td>
                                <td class="epoxy-types-cell-bestfor">Pharma, food, warehouses</td>
                                <td class="epoxy-types-cell-features">Smooth, seamless, high load bearing</td>
                            </tr>
                            <tr class="epoxy-types-data-row">
                                <td class="epoxy-types-cell-type">Quartz Epoxy</td>
                                <td class="epoxy-types-cell-bestfor">Decorative + durable surfaces</td>
                                <td class="epoxy-types-cell-features">Scratch-resistant, textured finish</td>
                            </tr>
                            <tr class="epoxy-types-data-row">
                                <td class="epoxy-types-cell-type">Anti-Static Epoxy (ESD)</td>
                                <td class="epoxy-types-cell-bestfor">Electronics, labs</td>
                                <td class="epoxy-types-cell-features">Discharges electrostatic safely</td>
                            </tr>
                            <tr class="epoxy-types-data-row">
                                <td class="epoxy-types-cell-type">Mortar Epoxy</td>
                                <td class="epoxy-types-cell-bestfor">Heavy-duty industries</td>
                                <td class="epoxy-types-cell-features">Extreme impact resistance</td>
                            </tr>
                            <tr class="epoxy-types-data-row">
                                <td class="epoxy-types-cell-type">Decorative Metallic</td>
                                <td class="epoxy-types-cell-bestfor">Commercial interiors, showrooms</td>
                                <td class="epoxy-types-cell-features">Glossy, aesthetic finishes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class=" section-ordering">
            <div class="row g-0">
                <div class="col-12 order-2 order-md-1">
                    <section class="build-to-last py-5" style=" background: url('{{ !empty($build['built_image']) ? asset('storage/' . $build['built_image']) : asset('images/build-last-bg.webp') }}');">
                        <div class="container">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="heading-holder py-2">
                                        <h2 class="fw-bold">{!! $build['built_title'] ?? 'Built to Last:<br>
                                        <span>Benefits of Epoxy Flooring Services</span>' !!}</h2>
                                        @if(!empty($build['built_description']))
                                            <p>{!! $build['built_description'] !!}</p>
                                        @else
                                            <p>Experience the superior performance and lasting beauty of floors designed for diverse conditions.</p>
                                        @endif
                                    </div>
                                    <div class="benefits-blocks">
                                        <div class="row">
                                            @forelse($build['built_benefits'] ?? [] as $benefit)
                                                <div class="col-md-4">
                                                    <div class="benefits-card">
                                                        <div class="benefit-img">
                                                            {!! $benefit['benefit_icon']!!}
                                                        </div>
                                                        <h3>{!! $benefit['benefit_title'] !!}</h3>
                                                        <p>{!! $benefit['benefit_description'] !!}</p>
                                                    </div>
                                                </div>
                                            @empty
                                                <div class="col-md-4">
                                                    <div class="benefits-card">
                                                        <div class="benefit-img">
                                                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="31.775 31.899 448.23 448.103" viewBox="31.775 31.899 448.23 448.103" height="682.667" width="682.667" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                                                                <g>
                                                                    <path d="M68.1 33.6c-16.9 4.5-30.1 18-34.6 35.1-2.3 8.6-2.3 366 0 374.6 4.5 17.3 17.8 30.7 35 35.2 5.2 1.3 27.7 1.5 187.5 1.5 198 0 186.5.3 198.2-5.6 7.1-3.6 15.9-12.3 19.7-19.3 6.5-12.3 6.1.8 6.1-199.1 0-159.8-.2-182.3-1.5-187.5-4.5-17.2-17.9-30.5-35.2-35-8.5-2.2-366.9-2.1-375.2.1zm372.5 33c1.5 1.1 3.7 3.3 4.8 4.8l2.1 2.7v363.8l-2.1 2.7c-1.1 1.5-3.3 3.7-4.8 4.8l-2.7 2.1H74.1l-2.7-2.1c-1.5-1.1-3.7-3.3-4.8-4.8l-2.1-2.7-.3-179.2c-.1-98.6 0-180.6.3-182.4.7-4 4.9-9.1 9-10.9 2.5-1.1 35-1.3 183.7-1.1l180.7.2 2.7 2.1z"></path>
                                                                    <path d="M202 97.1c-6.8 2.8-6.6 2.1-33.1 81.7-27 81-26.7 79.9-22.2 86.1 4.7 6.2 6 6.6 24.4 6.9 15.4.3 16.9.5 16.5 2-.3.9-6.7 29.6-14.2 63.7-15.4 69.5-15.1 67.2-8.3 73.7 4.3 4.1 8.8 5.4 14.7 4.3 3.2-.6 7.7-4.7 32.9-29.8 16.1-16 29.3-28.9 29.3-28.7 0 .3 1.5 4.9 3.4 10.3 10.4 30.2 35.4 53.2 67.5 61.9 10.2 2.8 34.2 3.1 44.5.5 35.6-9 62-34.9 71.8-70.6 3.1-11 3.1-35.2 0-46.2-8.8-32.2-31.6-57.1-61.9-67.5-5.4-1.9-10-3.4-10.2-3.4-.1 0 2-2.5 4.8-5.5 7.2-8 8.1-15.8 2.5-22.5-4.5-5.3-5.2-5.5-31-6l-24.1-.5 13.4-46.5c14.2-49.5 14.7-52.3 10.6-57.8-1.1-1.4-3.2-3.5-4.7-4.6-2.7-2.1-3.9-2.1-63.4-2.3-38.9-.1-61.6.2-63.2.8zm95.1 37.1c-24.8 86.3-25.3 88.2-24.8 92.1.6 4.4 2.9 8 7.1 11.1 2.4 1.9 4.4 2.1 18.3 2.4 15.2.3 15.5.4 13.7 2.3-.9 1-2.2 1.9-2.8 1.9-2.7.1-18 7.2-24.7 11.5-9.5 6.1-22.3 18.9-28.4 28.4-4.3 6.6-11.4 22-11.5 24.6 0 .6-9.1 10-20.1 21-14.3 14.2-20 19.3-19.6 17.5.3-1.4 4.9-22.3 10.2-46.6 10.6-47.7 10.7-48.7 5.8-54.5-4.3-5.1-7.6-5.9-23.7-5.9h-14.4l18.6-56 18.7-56h79.4l-1.8 6.2zm52.4 139.3c33.9 7.1 56.3 41.7 49 75.8-1.4 6.6-6.2 18.7-7.4 18.7-.8 0-87.1-86.3-87.1-87.1 0-1.2 12-6 18.3-7.4 8.3-1.8 18.6-1.8 27.2 0zm-24.8 73.7c23.8 23.8 43.3 43.6 43.3 43.9 0 1.2-12.1 6-18.7 7.4-21.3 4.5-42.6-1.9-58.3-17.5-15.6-15.5-22-37-17.5-58.3 1.4-6.6 6.2-18.7 7.4-18.7.3 0 20.1 19.5 43.8 43.2z"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <h3>Self Leveling</h3>
                                                        <p>RachTR epoxy flooring guarantees self-levelling properties for a perfect finish, reducing installation time</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="benefits-card">
                                                        <div class="benefit-img">
                                                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="0 -0.075 64 64.075" viewBox="0 -0.075 64 64.075" height="85.333" width="85.333" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-label="">
                                                                <g>
                                                                    <path d="M11.2 1.2c-1.7 1.7-1.7 39.9 0 41.6 1.7 1.7 39.9 1.7 41.6 0 1.7-1.7 1.7-39.9 0-41.6-1.7-1.7-39.9-1.7-41.6 0zM52 22v20H12V2h40v20z"></path>
                                                                    <path d="M15.5 7c-2.2 4.2-1.9 5 1.8 5 4.5 0 4.9-.6 3-4.6-2-4.2-2.8-4.2-4.8-.4zM19 9.1c0 .5-.7.9-1.5.9-.9 0-1.2-.6-.9-1.5.6-1.5 2.4-1.1 2.4.6z"></path>
                                                                    <path d="M24.7 6.9C22.2 11.2 22.6 12 27 12s4.7-.7 2.5-5c-1.9-3.7-2.6-3.7-4.8-.1zM28 8.5c0 .8-.4 1.5-1 1.5-.5 0-1-.7-1-1.5S26.5 7 27 7c.6 0 1 .7 1 1.5z"></path>
                                                                    <path d="M33.7 7.4c-1.9 4-1.5 4.6 3 4.6 3.7 0 4-.8 1.8-5-2-3.8-2.8-3.8-4.8.4zm3.2 2.5c-1.5.5-2.2-.6-1.4-1.9.6-.9 1-.9 1.6.1.5.8.4 1.5-.2 1.8z"></path>
                                                                    <path d="M43.5 7c-2.2 4.2-1.9 5 1.8 5 4.5 0 4.9-.6 3-4.6-2-4.2-2.8-4.2-4.8-.4zM47 9.1c0 .5-.7.9-1.5.9-.9 0-1.2-.6-.9-1.5.6-1.5 2.4-1.1 2.4.6z"></path>
                                                                    <path d="m20 17-2 4h4c2.2 0 4-.5 4-1 0-1.3-2.9-7-3.5-7-.3 0-1.4 1.8-2.5 4zm3.5 1c.3.5-.1 1-1 1s-1.3-.5-1-1c.3-.6.8-1 1-1 .2 0 .7.4 1 1z"></path>
                                                                    <path d="M29.7 15.9C27.2 20.2 27.6 21 32 21h4l-2-4c-1.1-2.2-2.2-4-2.3-4-.1 0-1 1.3-2 2.9zm2.8 2.1c.3.5-.1 1-1 1s-1.3-.5-1-1c.3-.6.8-1 1-1 .2 0 .7.4 1 1z"></path>
                                                                    <path d="M38.5 17c-2.1 4-2 4 2.5 4 2.2 0 4-.2 4-.5 0-1.4-3.2-6.5-4-6.5-.5 0-1.6 1.3-2.5 3zm3.5 1c0 .5-.4 1-1 1-.5 0-1-.5-1-1 0-.6.5-1 1-1 .6 0 1 .4 1 1z"></path>
                                                                    <path d="M16 26.2c-2.7 4.5-2.6 4.8 2 4.8 2.2 0 4-.5 4-1 0-1.4-2.9-7-3.5-7-.3 0-1.4 1.5-2.5 3.2zm2.9 2.7c-1.5.5-2.2-.6-1.4-1.9.6-.9 1-.9 1.6.1.5.8.4 1.5-.2 1.8z"></path>
                                                                    <path d="M25.5 25.9c-2.2 4.3-1.9 5.1 1.8 5.1 4.4 0 4.9-.7 3.2-4.1-2.2-4.1-3.2-4.3-5-1zm3.5 2.2c0 .5-.7.9-1.5.9-.9 0-1.2-.6-.9-1.5.6-1.5 2.4-1.1 2.4.6z"></path>
                                                                    <path d="M34.8 26.1C32.3 30.5 32.5 31 37 31c2.2 0 4-.2 4-.5 0-1-3.4-7.5-3.9-7.5-.3 0-1.4 1.4-2.3 3.1zM38 28c0 .5-.7 1-1.6 1-.8 0-1.2-.5-.9-1 .3-.6 1-1 1.6-1 .5 0 .9.4.9 1z"></path>
                                                                    <path d="M43.7 26.5c-.9 2-1.7 3.8-1.7 4 0 .3 1.8.5 4 .5 4.4 0 4.7-.7 2.5-5-2-3.9-2.8-3.8-4.8.5zm3.2 2.4c-1.5.5-2.2-.6-1.4-1.9.6-.9 1-.9 1.6.1.5.8.4 1.5-.2 1.8z"></path>
                                                                    <path d="M20.5 36c-1.9 3.7-1.3 5 2.5 5 1.6 0 3.2-.4 3.5-1 .7-1.2-2.2-7-3.5-7-.5 0-1.7 1.4-2.5 3zm3.5 1.5c0 .8-.4 1.5-1 1.5-.5 0-1-.7-1-1.5s.5-1.5 1-1.5c.6 0 1 .7 1 1.5z"></path>
                                                                    <path d="M29.7 36.4c-1.8 3.9-1.4 4.6 2.4 4.6 3.7 0 4.3-1.3 2.4-5-2-3.8-2.8-3.8-4.8.4zm3.2 2.5c-1.5.5-2.2-.6-1.4-1.9.6-.9 1-.9 1.6.1.5.8.4 1.5-.2 1.8z"></path>
                                                                    <path d="M39.6 35.5C37 39.4 37.5 41 41.3 41c4.5 0 4.9-.6 3-4.6-2-4.1-2.6-4.2-4.7-.9zm3.4 2.6c0 .5-.7.9-1.5.9-.9 0-1.2-.6-.9-1.5.6-1.5 2.4-1.1 2.4.6z"></path>
                                                                    <path d="M2.5 56.4c1.7.7 3.9 2.3 4.9 3.5L9.3 62H4.7c-2.6 0-4.7.4-4.7 1s11.3 1 32 1 32-.4 32-1-.8-1-1.8-1-3.1-1.3-4.6-2.9l-2.9-3 4.9-.4c2.7-.2-9.7-.4-27.6-.5-27.7-.1-32.1.1-29.5 1.2zm13 2.6 2.9 3H15c-3.2 0-8-3.1-8-5.2s5.8-.6 8.5 2.2zm10 0 2.9 3H25c-3.2 0-8-3.1-8-5.2s5.8-.6 8.5 2.2zm9.7 0 3.3 2.9-3.6.1c-2.6 0-4.2-.7-6.4-3l-2.9-3h3.2c2.1 0 4.3 1 6.4 3zm9.3 0 2.9 3H44c-3.2 0-8-3.1-8-5.2s5.8-.6 8.5 2.2zm10 0 2.9 3H54c-3.2 0-8-3.1-8-5.2s5.8-.6 8.5 2.2z"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <h3>Anti Skid</h3>
                                                        <p>Anti-skid formula minimizes the risk of slips and falls, creating a safer environment</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="benefits-card">
                                                        <div class="benefit-img">
                                                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="20 78.495 160 43.005" viewBox="20 78.495 160 43.005" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="tint" role="presentation" aria-hidden="true" aria-label="">
                                                                <g>
                                                                    <path d="M180 81.3c0-1.6-1.3-2.8-2.8-2.8H22.8c-1.5-.1-2.8 1.2-2.8 2.8v37.4c0 1.6 1.3 2.8 2.8 2.8h154.4c.8 0 1.4-.3 2-.8.5-.5.8-1.2.8-2V81.3zm-12.8 34.6V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.3v-11.4c0-1.6-1.3-2.8-2.8-2.8s-2.8 1.3-2.8 2.8v11.4h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9H77v-11.4c0-1.6-1.3-2.8-2.8-2.8s-2.8 1.3-2.8 2.8v11.4h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.3V110c0-1.6-1.3-2.8-2.8-2.8s-2.8 1.3-2.8 2.8v5.9h-7.3V110c0-1.6-1.3-2.8-2.8-2.8-1.5 0-2.8 1.3-2.8 2.8v5.9h-7.2V94.1h41.7c.8 0 1.4-.3 2-.8.5-.5.8-1.2.8-2 0-1.6-1.3-2.8-2.8-2.8l-41.7-.1V84h148.7v31.7l-7 .2zM80.5 88.5h-1.9c-1.5 0-2.8 1.3-2.8 2.8 0 1.6 1.3 2.8 2.8 2.8h1.9c.8 0 1.4-.3 2-.8.5-.5.8-1.2.8-2 0-1.5-1.3-2.8-2.8-2.8z" fill="#FFFFFF"></path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                        <h3>Anti Static</h3>
                                                        <p>RachTR's anti-static properties reduce static build-up, ideal for areas where static discharge can be a concern.
                    
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="benefits-note mx-md-5 px-md-5 px-3 px-sm-5">
                                        @if(!empty($build['built_note']))
                                            {!! $build['built_note'] !!}
                                        @else
                                            <p>When considering <a href="{{ config('app.url') .'/industrial-flooring-solutions/epoxy-flooring-cost-price'}}">epoxy flooring price per sq ft </a>, these factors play a critical role in determining the overall budget for your industrial epoxy flooring project.</p>
                                            <p><a href="{{ config('app.url') .'/industrial-flooring-solutions/epoxy-flooring-cost-price'}}">Click here</a> to get a customized epoxy flooring quote!</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="bg-overlay"></div>
                        </div>
                    </section>
                </div>
                <div class="col-12 order-1 order-md-3">
                    <section class="comprnsive_solution epoxy-proj py-5">   
                        <div class="container">
                            <div class="row g-0">
                                <div class="cmp_solutn_heding col-lg-8 col-md-12 py-5">
                                    <h2 class="fw-bold">{!! $ourProjects['heading'] ?? 'Applications and industries served' !!}</h2>
                                </div>
                            <div class="case-studies-item">
                                @forelse($ourProjects['slides'] ?? [] as $project)
                                    <div class="case_studies row g-0">
                                        <div class="col-md-4 col-12 order-2 order-md-1">
                                            <div class="case_studies_contn">
                                                <h5 class="fw-bold pb-2">{!! $project['title'] !!}</h5>
                                                {!! $project['description'] !!}
                                                <a href="{!! $project['link'] !!}" target="_blank">{!! $project['btn'] !!}</a>
                                                <div class="case_studies_downd d-md-none">
                                                    <div class="downd_img">
                                                    <img src="{{ asset('storage/' . $project['image'])  }}" alt="{{ $project['img_alt'] ?? 'Our project Image'}}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block">
                                            <div class="case_studies_downd">
                                                <div class="downd_img">
                                                    <img src="{{ asset('storage/' . $project['image'])  }}" alt="{{ $project['img_alt'] ?? 'Our project Image'}}"/>
                                                </div>
                                                <!-- <div class="before-block">Before</div>
                                                <div class="after-block">After</div> -->
                                            </div>
                                        </div>    
                                    </div>
                                @empty
                                    <div class="case_studies row g-0">
                                    <div class="col-md-4 col-12 order-2 order-md-1">
                                        <div class="case_studies_contn">
                                            <h5 class="fw-bold pb-2">RachTR solves Welspun's Epoxy Flooring debonding issue caused by excessive oil</h5>
                                            <p class="pb--md-5 mb-md--5">Welspun were facing issues of excessive oil on the floor, which caused the debonding between epoxy flooring and concrete.</p>
                                            <p class="pb--md-5 mb-md--5">Check out how RachTR fixed this issue by clicking on the "View Case Study" button.</p>
                                            <a href="#" target="_blank">View Case Study</a>
                                            <div class="case_studies_downd d-md-none">
                                                <div class="downd_img">
                                                <img src="{{ asset('images/welspun_pro_img.webp')}}" alt="Before and After applying epoxy flooring in Welspun"/>
                                                </div>
                                                <!-- <div class="before-block">Before</div>
                                                <div class="after-block">After</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block">
                                        <div class="case_studies_downd">
                                            <div class="downd_img">
                                                <img src="{{ asset('images/welspun_pro_img.webp')}}" alt="Before and After applying epoxy flooring in Welspun"/>
                                            </div>
                                            <!-- <div class="before-block">Before</div>
                                            <div class="after-block">After</div> -->
                                        </div>
                                    </div>    
                                    </div>
                                    <div class="case_studies row g-0">
                                    <div class="col-md-4 col-12 order-2 order-md-1">
                                        <div class="case_studies_contn">
                                            <h5 class="fw-bold pb-2">RachTR completed Epoxy Flooring at ITC, Haridwar</h5>
                                            <p class="pb--md-5 mb-md--5">ITC facility at Haridwar faced themselves with issues of broken tiles and slippery surface which often caused an issue for the workers at the facility.</p>
                                            <p class="pb--md-5 mb-md--5">Check out how RachTR fixed this issue by clicking on the "View Case Study" button.</p>
                                            <a href="#" target="_blank">View Case Study</a>
                                            <div class="case_studies_downd d-md-none">
                                                <div class="downd_img">
                                                <img src="{{ asset('images/itc_project_img.webp')}}" alt="Before and After applying epoxy flooring in ITC, Haridwar"/>
                                                </div>
                                                <!-- <div class="before-block">Before</div>
                                                <div class="after-block">After</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block" >
                                        <div class="case_studies_downd">
                                            <div class="downd_img">
                                                <img src="{{ asset('images/itc_project_img.webp')}}" alt="Before and After applying epoxy flooring in ITC, Haridwar"/>
                                            </div>
                                            <!-- <div class="before-block">Before</div>
                                            <div class="after-block">After</div> -->
                                        </div>
                                    </div>    
                                    </div>
                                    <div class="case_studies row g-0">
                                    <div class="col-md-4 col-12 order-2 order-md-1">
                                        <div class="case_studies_contn">
                                            <h5 class="fw-bold pb-2">Epoxy flooring installation for a Delhivery warehouse in Faridabad</h5>
                                            <p class="pb--md-5 mb-md--5">Delhivery, a logistics company, likely faced the challenge of needing a durable and chemical-resistant floor for one of their warehouses in Faridabad.</p>
                                            <p class="pb-2 mb-2">Check out how RachTR fixed this issue by clicking on the "View Case Study" button.</p>
                                            <a href="#" target="_blank">View Case Study</a>
                                            <div class="case_studies_downd d-md-none">
                                                <div class="downd_img">
                                                <img src="{{ asset('images/faridabad_proj_img.webp')}}" alt="Before and After applying epoxy flooring in Faridabad"/>
                                                </div>
                                                <!-- <div class="before-block">Before</div>
                                                <div class="after-block">After</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-12 order-1 order-md-2 d-none d-md-block">
                                        <div class="case_studies_downd">
                                            <div class="downd_img">
                                                <img src="{{ asset('images/faridabad_proj_img.webp')}}" alt="Before and After applying epoxy flooring in Faridabad"/>
                                            </div>
                                            <!-- <div class="before-block">Before</div>
                                            <div class="after-block">After</div> -->
                                        </div>
                                    </div>    
                                    </div>        
                                @endforelse
                                
                            </div>   
                            </div> 
                        </div>
                    </section> 
                </div>
            </div>
        </div>

         <!-- This is a section-2 open -->
        <section class="architect-our our-industries our_strengths py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="our_strengths_contnt">
                            <h2 class="pb-3 fw-bold">{{ $showcase['heading'] ?? 'Project Showcase'}}</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="any_projects pt-5">
                            <ul class="col-lg-12 col-md-12 col-sm-12 blog_list d-lg-flex">
                                @forelse($showcase['items'] ?? [] as $item)
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                @foreach($item['images'] as $image)
                                                    <div class="project-slide">
                                                        <a href="{{ asset('storage/' . $image['image']) }}"
                                                            data-fancybox="gallery" data-caption="Surat">
                                                            <img alt="{{$image['img_alt'] ?? 'Project Showcase Image'}}" data-ssr-src-done="true" fetchpriority="high"
                                                                src="{{ asset('storage/' . $image['image']) }}">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="projects_txt">
                                                {!! $item['description'] !!}
                                            </div>

                                        </div>
                                    </li>
                                @empty
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-1.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src="{{asset('images/project-slide-1.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-2.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Marble flooring in Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-2.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-3.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Modern interior with marble flooring, staircase, and tall curtains." data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-3.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href=" {{asset('images/project-slide-4.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Garden with tiled flooring and swimming pool" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-4.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-5.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Sapcious garden with tiled flooring" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-5.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-6.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Room with white marble flooring in Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-6.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project-slide-7.webp')}}"
                                                        data-fancybox="gallery" data-caption="Surat">
                                                        <img alt="Tile flooring in Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project-slide-7.webp')}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="projects_txt">
                                                <p>Location: Surat</p>
                                                <p>Architect: Ajit Jariwala</p>
                                                <p>Contractor: Quality Civl Decor, Mumbai</p>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project2-slide-1.webp')}}"
                                                        data-fancybox="surat-gallery" data-caption="Surat">
                                                        <img alt="Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src="{{asset('images/project2-slide-1.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project2-slide-2.webp')}}"
                                                        data-fancybox="surat-gallery" data-caption="Surat">
                                                        <img data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project2-slide-2.webp')}}" alt="Marble flooring in a luxurious living room in Surat">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project2-slide-3.webp')}}"
                                                        data-fancybox="surat-gallery" data-caption="Surat">
                                                        <img data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project2-slide-3.webp')}}" alt="Elegant hallway with marble flooring, floral wall art, and decorative statues.">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="projects_txt">
                                                <p>Location: Surat</p>
                                                <p>Architect: Jigar Talati</p>
                                                <p>Contractor: Murari Lal Sharma</p>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="projects_blogs">
                                            <div class="project-slider mb-1">
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-1.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Surat" data-ssr-src-done="true" fetchpriority="high"
                                                            src="{{asset('images/project3-slide-1.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-2.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Room with glossy marble flooring in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-2.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-3.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Marble flooring in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-3.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href=" {{asset('images/project3-slide-4.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Tile flooring in a washroom in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-4.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-5.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Tile flooring in a washroom in Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-5.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-6.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Shower area with marble walls and glass enclosure" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-6.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-7.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="White marble home temple in Palacia, Jaipur" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-7.webp')}}">
                                                    </a>
                                                </div>
                                                <div class="project-slide">
                                                    <a href="{{asset('images/project3-slide-8.webp')}}"
                                                        data-fancybox="Palacia-gallery" data-caption="Palacia">
                                                        <img alt="Glossy marble flooring near large glass window in a bright room" data-ssr-src-done="true" fetchpriority="high"
                                                            src=" {{asset('images/project3-slide-8.webp')}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="projects_txt">
                                                <p>Location: Palacia, Jaipur</p>
                                                <p>Architect: Theme Design Studio</p>
                                                <p>Contractor: Swati Interior</p>
                                            </div>

                                        </div>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- This is a section-2 close -->
         <!-- @if(!empty($pageContent['blogs'])) -->
            <!-- <section class="blogs epoxy-blogs bg-white">
                <div class="container">
                <div class="row g-0">
                    <div class="col-lg-12">
                    <div class="blogs_sec py-lg-5 py-2">
                        <div class="mb-lg-5 mb-2 px-lg-5 mx-lg-5">
                        <h2
                            class="mb-3 pb-2 display-6 display-lg-4 fw-bold text-start text-dark blog-case-heading"
                        >
                        {!! $pageContent['blog-heading'] ?? 'Blogs related to Epoxy Flooring Cost Price' !!}     </h2>
                        @if($pageContent['blog-sub-heading'])
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
            </section>  -->
         <!-- @endif    -->

         <section class="res-blogs blogs bg-white">
            <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                <div class="blogs_sec py-lg-5 py-2">
                    <div class="mb-lg-5 mb-2 px-lg-5 mx-lg-5">
                    <h2 class="mb-3 pb-2  fw-bold text-start text-dark">
                        Read our blogs to know more about Epoxy Flooring
                    </h2>
                    </div>
                    <ul class="padd0">
                                        <li class="col-lg-4 mx-3">
                        <a href="https://www.rachtr.com/blogs/epoxy-vs-pu-flooring-in-monsoon">
                        <div class="blogs_img">
                            <img src="https://www.rachtr.com/storage/blog-feature-images/epoxy-vs-pu.jpg">
                        </div>
                        <div class="blogs_contnt">
                            
                            <div class="top_cont">
                                <span class="fw-bold">Sep 02</span>
                                <sup class="fw-bold">.</sup>
                                <span class="fw-bold">4 min read</span>
                            </div>
                            <div class="btm_cont">
                                <h2><strong class="title-blog">Epoxy vs PU Flooring in Monsoon: Which One Should You Choose for Moisture Resistance?</strong></h2>
                            </div>
                        
                        </div>
                        </a>
                    </li>
                    <li class="col-lg-4 mx-3">
                        <a href="https://www.rachtr.com/blogs/common-epoxy-grout-issues-and-fixes">
                        <div class="blogs_img">
                            <img src="https://www.rachtr.com/storage/blog-feature-images/blog.jpg">
                        </div>
                        <div class="blogs_contnt">
                            
                            <div class="top_cont">
                                <span class="fw-bold">Jul 18</span>
                                <sup class="fw-bold">.</sup>
                                <span class="fw-bold">4 min read</span>
                            </div>
                            <div class="btm_cont">
                                <h2><strong class="title-blog">Solving Common Epoxy Grout Issues: Bubbling, Discoloration & Expert Fixes</strong></h2>
                            </div>
                        
                        </div>
                        </a>
                    </li>
                                        <li class="col-lg-4 mx-3">
                        <a href="https://www.rachtr.com/blogs/how-much-does-epoxy-flooring-cost-in-india">
                        <div class="blogs_img">
                            <img src="https://www.rachtr.com/storage/blog-feature-images/rachtr%201200%20x%20626%20(2).png">
                        </div>
                        <div class="blogs_contnt">
                            
                            <div class="top_cont">
                                <span class="fw-bold">Jun 12</span>
                                <sup class="fw-bold">.</sup>
                                <span class="fw-bold">4 min read</span>
                            </div>
                            <div class="btm_cont">
                                <h2><strong class="title-blog">How Much Does Epoxy Flooring Cost in India?</strong></h2>
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


         
          <!-- This is a section-7 open -->   
        <section class="locations-served pt-5">   
            <div class="container">
                <div class="row g-0">
                    <div class="locations-block d-flex flex-column justify-content-center align-items-center gap-5">
                        <div class="heading-holder">
                            <h2 class="fw-bold">{!! $location['heading'] ?? "<span>Locations</span>  We've served" !!}</h2>
                        </div>
                        <div class="location-img ps-md-5">
                            <img src="{{ !empty($location['image']) ? asset('storage/' . $location['image']) : asset('images/location-img.webp') }}" alt="{{ $location['img_alt'] ?? 'loaction-map'}}">
                        </div>
                    </div>   
                </div> 
            </div>
        </section>    
       <!-- This is a section-7 close  -->
       <!-- This is a section-7 close  -->

          <!-- This is a section-8 open -->   
        <section class="common-faqs py-5">   
            <div class="container">
                <div class="row g-0">
                    <div class="common-faq-block">
                        <div class="heading-holder py-5 text-center">
                            <h2 class="fw-bold">
                                {!! isset($pageContent['faq_section_content']['heading']) && !empty($pageContent['faq_section_content']['heading']) 
                                ? trim($pageContent['faq_section_content']['heading']) 
                                : 'Common FAQs related to <span>RachTR Epoxy Solutions</span>' !!}
                            </h2>
                        </div>
                        <div class="faq-block  ">
                        <div class="faq-block px-md-5 mx-md-5 px-sm-3 mx-sm-3">
                        @forelse($pageContent['faq_section_content']['faqs'] ?? [] as $faq)
                            <div class="accordion-wrapper">
                                    <div class="acc-head py-4">
                                    {!! trim($faq['acc_title'] ?? '') !!}
                                    </div>
                                    <div class="acc-body">
                                    {!! trim($faq['acc_body'] ?? '') !!}
                                    </div>
                            </div>
                        @empty
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">What are the benefits of RachTR epoxy flooring?</h6>
                                </div>
                                <div class="acc-body">
                                    <p> 
                                        <ul>
                                            <li><strong>Durability & Long-Lasting:</strong> Our epoxy floors are highly resistant to scratches, cracks, chemicals, and abrasions, ensuring a long lifespan compared to traditional options.</li>
                                            <li><strong>Easy to Maintain:</strong> The smooth, seamless surface is easy to clean and requires minimal maintenance.</li>
                                            <li><strong>Wide Range of Applications:</strong> RachTR epoxy flooring is suitable for various settings, including homes, garages, warehouses, retail spaces, and more.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">How much does RachTR epoxy flooring cost?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>
                                        The cost of epoxy flooring is typically priced per square foot (Rs. / sq. ft.) or per square meter (Rs. / sq. meter).<br>
                                        <strong>Several factors influence the total cost of your project, including:</strong>
                                        <ul>
                                        <li>Surface on which it is being done if it is Plain concrete floor(pcc), or RCC, or Old Epoxy floor,</li>  
                                        <li>Undulations in the surface</li> 
                                        <li>Properties required from Epoxy flooring</li> 
                                        <li>Type of Surface preparation Required</li>
                                        <li>Area or size of the floor size</li> 
                                        </ul>
                                        <strong>And cost has three component:</strong>
                                        <ul>
                                        <li>Material or epoxy coatings cost</li>  
                                        <li>Application charges or labor cost</li> 
                                        <li>Surface preparation or treatment cost</li>
                                        </ul>
                                        To know more about the pricing, you can visit our page by clicking <a href="{{ config('app.url') . '/industrial-flooring-solutions/epoxy-flooring-services?utm_source=gads_Q_faq_section_price_details_epoxy&utm_medium=gads_Q_faq_section_price_details_epoxy&utm_campaign=gads_Q_faq_section_price_details_epoxy' }}" class="org" target="_blank">here</a>.
                                    </p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">What is the warranty on RachTR epoxy flooring?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>RachTR offers a comprehensive warranty on its epoxy flooring products. Please refer to our official page or contact us for details.</p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">How does volume affect resin cure?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>Heat is released during the chemical reaction that converts liquid part A and part B into solid epoxy. The amount of heat released depends on the epoxy’s chemistry and the amount of epoxy used. That is, a certain amount of mixed part A and part B will result in the release in a certain amount of heat.</p>
                                    <p>The curing epoxy must be able to shed the heat it generates efficiently enough to avoid overheating. The ability to shed heat is largely governed by the ratio of top surface area that is open to the air relative to the volume.</p>
                                    <p>For the same resin system, thinner castings  will have greater top surface areas in comparison to overall volume and will shed heat more efficiently. Thicker castings cannot shed heat as efficiently and may overheat.</p>
                                    <p>For the same volume of epoxy, a thinner casting will have a larger top surface area and will shed heat more efficiently compared to a thicker casting with a smaller top surface area.</p>
                                    <img src="{{ asset('images/resin_faq.webp') }}" alt="resin faq img"/>
                                    <p>EcoPoxy systems are developed to have reactivity levels suited to their intended applications. Always consult your product’s Technical Data Sheet or Application Guide for recommended volume and thickness.</p>

                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">How do I dispose of epoxy resins and hardeners?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>Cured epoxy resin is inert and should be disposed of as you would other solid non-hazardous waste. Uncured resin, or residue left over in jugs, must be disposed of properly as the hardener and resin are unreacted. If the jugs have been sufficiently drained, they may be recycled but the amount of allowable residue will be determined by your local hazardous waste collection center and the prevailing regulations. When contacting your local waste collection center, you will need the Safety Data Sheets that are available for download from our website.</p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">Why did my epoxy overheat and turn yellow?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>Epoxy releases heat when curing. EcoPoxy makes recommendations for maximum project volumes and/or thicknesses to allow projects to shed heat efficiently and  prevent overheating and yellowing. If the recommended maximum pour depth and volume are exceeded, the epoxy will not be able to shed heat quickly enough, and the temperature will increase uncontrollably. Cure temperatures that reach 100°C (212°F) for extended periods are known to cause yellowing, and extremely high temperatures can cause epoxy to amber and form cracks. If a deeper pour is required for a project, it is recommended to pour multiple layers to build up to the desired final thickness.</p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">Are epoxies biodegradable or recyclable?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>During the curing process, epoxy resins and hardeners form crosslinks that cannot easily be broken. Technologies are being developed to break down these types of plastics for recycling, or via other biodegradation methods, but none are readily accessible. Practically, this means that all epoxy resin systems are neither biodegradable nor recyclable.</p>
                                </div>
                            </div>
                            <div class="accordion-wrapper">
                                <div class="acc-head py-4">
                                <h6 class="mb-0 fw-bold">How can I get a free quote for RachTR epoxy flooring?</h6>
                                </div>
                                <div class="acc-body">
                                    <p>Simply fill out the form by clicking <a href="{{ config('app.url') . '/industrial-flooring-solutions/epoxy-flooring-services#epoxy-form-sec' }}"  class="org" target="_blank">here</a>, and a RachTR representative will contact you to discuss your project and provide a free quote.</p>
                                </div>
                            </div>
                        @endforelse
                        </div>
                    </div>
                    
                </div> 
            </div>
        </section>   
       <!-- This is a section-8 close  -->
 
         

        <!-- This is a section-9 open -->   
        <section class="get-free-quote py-5" style=" background: url({{ !empty($quote['image']) ? asset('storage/' . $quote['image']) : asset('images/get-free-quote-bg.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">   
            <div class="container">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="get-free-content d-flex flex-column">
                            <div class="heading-holder pt-5 text-center">
                                <h2 class="fw-bold">{!! $quote['heading'] ?? "Don't Wait! Get a Free Quote & <br>
                                    Transform Your Floors Today" !!}</h2>
                            </div>
                            <div class="banner-buttons d-flex justify-content-center gap-3 py-5 flex-column flex-md-row">
                                <button type="button" class="btn btn-primary w-auto p-3 text-normal fs-6 d-flex align-items-center gap-2 justify-center" onclick="window.open('{{ $quote['whatsapp_link'] ?? 'https://wa.link/xdnyq9' }}', '_blank')"><i class="fa fa-whatsapp fs-3 m-0"></i>
                                    {{ $quote['whatsapp_btn'] ?? 'CHAT WITH US ON WHATSAPP'}}</button>
                                <button type="button" class="btn btn-outline-light fw-bold" id="openFormBtn">{{ $quote['get_btn_text'] ?? 'GET AN INSTANT QUOTE'}}</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
            <div class="banner_overlay"></div>
        </section>
       <!-- This is a section-9 close  -->
       <!-- Blur Overlay -->
       <div class="blur-overlay" id="blurOverlay"></div>

<!-- Form Popup -->
<div class="form-popup" id="formPopup">
    <button class="close-btn" id="closeBtn">&times;</button>
    <h2 class="form-title">Request a Custom Epoxy Flooring Solution</h2>
    
    <form class="epoxy-form" action="/submit-epoxy-form" method="POST">
        <input type="hidden" name="_token" value="RPWy8dccq2Airh5Fu58VlxtpIJMLNta001bZbnIM" autocomplete="off">        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="name" name="Name" placeholder="Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" id="email" name="Email" placeholder="Email" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <input type="tel" class="form-control" id="phone" pattern="[6-9]\d{9}" title="Enter a valid 10-digit mobile number starting with 6, 7, 8, or 9" name="Phone" placeholder="Phone" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" id="company" name="Company Name" placeholder="Company Name" required>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="city" name="City" placeholder="City Name" required>
            </div>
            <div class="col-md-6">
                <select class="form-select" name="Preferences" id="Preferences" required>
                    <option value="" selected disabled>Preferences</option>
                    <option value="Commercial Space">Commercial Space</option>
                    <option value="Factory">Factory</option>
                    <option value="Car Parking">Car Parking</option>
                    <option value="Basement">Basement</option>
                    <option value="Covered">Covered</option>
                    <option value="Hospital">Hospital</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <select class="form-select" name="Select Unit" id="Select Unit" required>
                    <option value="" selected disabled>Select Unit (SQ Feet / SQ Meter)</option>
                    <option value="sq feet">SQ Feet</option>
                    <option value="sq meter">SQ Meter</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-select" name="Select Area" id="Select Area" required>
                    <option value="" selected disabled>Select Area (SQ Feet / SQ Meter)</option>
                    <option value="4000-10000">4000-10000</option>
                    <option value="10000-15000">10000-15000</option>
                    <option value="15000-20000">15000-20000</option>
                    <option value="20000-25000">20000-25000</option>
                    <option value="25000-50000">25000-50000</option>
                    <option value="50000-1 lac">50000-1 lac</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <textarea class="form-control" id="message" name="Message" placeholder="Comment Or Message *" required></textarea>
            </div>
        </div>
        <input type="hidden" name="recaptcha_token" id="recaptcha_token">
        <button type="submit" class="submit-btn submit-btn-form" id="submit-btn">SUBMIT ></button>
    </form>
</div>


     
    <!-- This is a section-9 open --> 
    
   </div>