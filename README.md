# RachTR CMS 

This is a custom Content Management System (CMS) built for the RachTR website using the Laravel framework and the Filament admin panel. It provides a comprehensive interface for managing website content, including pages, products, blog posts, categories, SEO settings, and more.

## Table of Contents

- [About The Project](#about-the-project)
- [Key Features](#key-features)
- [Technology Stack](#technology-stack)
- [Installation](#installation)
  - [Prerequisites](#prerequisites)
  - [Steps](#steps)
- [Usage](#usage)
  - [Admin Panel](#admin-panel)
  - [Frontend](#frontend)
- [Key Functionality Details](#key-functionality-details)
  - [Dynamic Page Rendering](#dynamic-page-rendering)
  - [Product Management](#product-management)
  - [Blog Management](#blog-management)
  - [SEO Management](#seo-management)
  - [Sitemap Generation](#sitemap-generation)
  - [Search](#search)
  - [Form Handling](#form-handling)
  - [URL Redirection](#url-redirection)
  - [Template File Management (PageObserver)](#template-file-management-pageobserver)
- [Contributing](#contributing)
- [License](#license)

## About The Project

RachTR CMS is designed to manage the content for the RachTR website. It leverages Laravel's robust backend capabilities and Filament's elegant admin interface to provide a user-friendly experience for content editors. The system handles various content types, offers dynamic page structures with parent-child relationships, manages SEO effectively, and integrates with external services like Algolia for search and Google Sheets for form submissions.

## Key Features

*   **Content Management:** Create, edit, and manage dynamic Pages, Products, Categories, and Blog Posts.
*   **Filament Admin Panel:** Intuitive and powerful admin interface located at `/admin`.
*   **Dynamic Page Templates:** Pages utilize specific Blade templates based on their slug structure (e.g., `resources/views/Templates/about-us.blade.php`). Includes fallback logic.
*   **Hierarchical Pages:** Pages can be nested using parent-child relationships, automatically generating nested URL structures (e.g., `/parent-slug/child-slug`).
*   **Product Management:** Manage products with details, images, benefits (accordion), datasheets, certificates, and assign them to categories and sections (tags).
*   **Blog Management:** Integrated blogging system powered by `firefly/filament-blog`, with a custom API endpoint for backdating posts.
*   **SEO Management:** Comprehensive SEO controls per page/product using `ralphjsmit/laravel-filament-seo`, including title, description, robots meta tags, canonical URLs, focus keywords, and JSON-LD schema data.
*   **Reusable Components:** Manage common website elements like Headers and Footers through Filament.
*   **URL Redirection:** Manage 301 redirects for old URLs via the `RedirectResource`.
*   **Sitemap Generation:** Automated XML sitemap generation including pages, products, and blog posts via `spatie/laravel-sitemap`.
*   **Search Integration:** Laravel Scout integration with Algolia configured for Products and Blog Posts. Includes a live search dropdown feature.
*   **Form Handling:** Controllers to handle various frontend forms (Contact, Connect, CV Upload, Epoxy Quote) with Google reCAPTCHA v3 validation and submission to **hardcoded** Google Sheets webhooks.
*   **User Management:** Basic user management via `tomatophp/filament-users`, with access control based on email domain.
*   **Middleware:** Includes middleware to automatically redirect users visiting old URLs defined in the `Redirects` table.

## Technology Stack

*   **Backend:** PHP 8.2+, Laravel 11
*   **Admin Panel:** Filament 3
*   **Frontend:** Blade Templates, Bootstrap 5, Custom CSS, JavaScript (jQuery, Alpine.js, Slick Carousel, Fancybox)
*   **Styling:** Primarily Bootstrap and custom CSS files (`style.css`, `puFloor.css`, `epoxy.css`, etc.) for the frontend. Tailwind CSS is configured but mainly utilized by the Filament admin panel.
*   **Database:** Eloquent ORM (Configured for SQLite, MySQL, MariaDB, PostgreSQL, SQL Server). Uses JSON columns extensively.
*   **Search:** Laravel Scout, Algolia
*   **Asset Bundling:** Vite
*   **Key Packages:**
    *   `spatie/laravel-sitemap`
    *   `ralphjsmit/laravel-filament-seo`
    *   `firefly/filament-blog`
    *   `tomatophp/filament-users`
    *   `laravel/sanctum`

## Installation

### Prerequisites

*   PHP >= 8.2
*   Composer
*   Node.js & npm (or yarn)
*   Database (MySQL, PostgreSQL, SQLite, etc.)
*   Web Server (Nginx, Apache)
*   Algolia Account & API Keys (for search)
*   Google reCAPTCHA v3 Keys (for forms)
*   Google Apps Script URLs (for form submissions - *currently hardcoded*)

### Steps

1.  **Clone the repository:**
    ```bash
    git clone <your-repository-url> rachtr_bp
    cd rachtr_bp
    ```
2.  **Install PHP dependencies:**
    ```bash
    composer install
    ```
3.  **Install Node.js dependencies:**
    ```bash
    npm install
    # or
    yarn install
    ```
4.  **Set up environment variables:**
    *   Copy the example environment file: `cp .env.example .env`
    *   Generate an application key: `php artisan key:generate`
    *   Configure your `.env` file with:
        *   `APP_NAME`, `APP_ENV`, `APP_DEBUG`, `APP_URL`
        *   Database credentials (`DB_*` variables)
        *   Algolia credentials (`ALGOLIA_APP_ID`, `ALGOLIA_API_KEY`)
        *   Mail driver settings (`MAIL_*` variables)
        *   Google reCAPTCHA keys (`RECAPTCHA_SITE_KEY`, `RECAPTCHA_SECRET_KEY`)
        *   (Optional) Redis, Cache, Queue settings if not using defaults.
5.  **Run database migrations:**
    ```bash
    php artisan migrate
    ```
6.  **(Optional) Seed the database:**
    ```bash
    php artisan db:seed # Creates a default test user if needed
    ```
7.  **Build frontend assets:**
    ```bash
    npm run dev # For development with hot reloading
    # or
    npm run build # For production assets
    ```
8.  **Create storage link:**
    ```bash
    php artisan storage:link
    ```
9.  **Configure your web server:**
    *   Set the document root to the `/public` directory.
    *   Ensure URL rewriting (e.g., `.htaccess` for Apache, `try_files` for Nginx) is enabled.
10. **(Optional) Import data into search index:**
    ```bash
    php artisan scout:import 'App\Models\Product'
    php artisan scout:import 'App\Models\Post'
    ```
11. **(Optional) Generate the initial sitemap:**
    ```bash
    php artisan app:generate-sitemap
    ```
12. **Set up a scheduled task (cron job) for sitemap generation (Recommended):**
    Configure your server's scheduler to run `php artisan schedule:run` every minute. Add the following to your `app/Console/Kernel.php`:
    ```php
    protected function schedule(Schedule $schedule): void
    {
        // ... other tasks
        $schedule->command('app:generate-sitemap')->daily(); // Or desired frequency
    }
    ```

## Usage

### Admin Panel

*   Access the admin panel by navigating to `/admin` in your browser.
*   Log in using credentials for a user whose email ends with `@quantastic.in` (as defined in `app/Models/User.php`). Access control is currently limited to this check.
*   The admin panel allows management of various content types as listed in the Key Features.

### Frontend

*   The public website is accessible via the `APP_URL` defined in your `.env` file.
*   Pages are dynamically rendered based on their slugs. The `PageController` handles this logic.
*   Templates are loaded based on slugs from `resources/views/Templates/`. If a specific template is not found, or if a page route results in a 404, the `resources/views/fallback.blade.php` view is displayed.
*   Product pages are accessed via `/product-page/{slug}`.
*   Blog posts are accessible via `/blogs/{slug}`.
*   Product listing/category pages are handled via routes like `/category/{slug}` and `/product-lists`.

## Key Functionality Details

### Dynamic Page Rendering

*   Managed by `PageController::getPage()`.
*   Handles homepage rendering based on the `is_homepage` flag.
*   For other pages, it finds the `Pages` model matching the last slug segment and verifies the full path.
*   Loads templates from `resources/views/Templates/` matching the full slug path (e.g., `/about-us` loads `Templates/about-us.blade.php`).
*   If the `content.is_product_list` flag is set on a Page, the `Templates.product_list.blade.php` template is used. This template fetches product details based on product IDs stored within that specific page's `content` JSON field (under the `sections` key). The corresponding `sections` repeater in `PageResource` is only shown in Filament when this flag is checked.
*   If no page model or specific template is found, it renders `resources/views/fallback.blade.php`.

### Product Management

*   Uses `ProductResource` and the `Product` model.
*   Flexible content structure via the `content` JSON column.
*   Product sections/tags (like "Trending") are managed via the `ProductsSection` model, storing related product IDs.
*   The `productList.js` file contains functionality for AJAX-based product loading on specific pages, but this feature is **not currently active**; products are rendered server-side via Blade.

### Blog Management

*   Uses `firefly/filament-blog`.
*   A custom API endpoint `/update-slug` exists in `BlogController`. This is intended to be called **manually** when needing to backdate a blog post. It parses a date/time from the post title (format: `[YYYY-MM-DD HH:MM] Actual Title` or `[YYYY-MM-DD] Actual Title`) and updates the `published_at` field accordingly.

### SEO Management

*   Leverages `ralphjsmit/laravel-filament-seo`.
*   SEO data is stored polymorphically in the `seo` table.
*   Includes support for standard meta tags, Open Graph, Twitter Cards, robots tags, canonical URLs, and JSON-LD Schema data (stored as an array in the `schema_data` field).
*   Focus keywords are managed within the `seo.meta` JSON field.

### Sitemap Generation

*   The `app:generate-sitemap` command creates `public/sitemap.xml`.
*   Includes homepage, hierarchical pages, products, and blog posts.
*   Uses `spatie/laravel-sitemap`.

### Search

*   Uses Laravel Scout with Algolia.
*   Configuration is primarily handled in `config/scout.php` (index settings, searchable attributes). No additional fine-tuning is currently done in the Algolia dashboard itself.
*   Live header search fetches results via the `/api/product-lists` endpoint.

### Form Handling

*   Managed by `FormController`.
*   Includes Google reCAPTCHA v3 validation.
*   Submits data to Google Apps Script webhooks. **Note:** The webhook URLs are currently **hardcoded** within the `FormController`. It is recommended to move these to the `.env` file for better security and configuration management.

### URL Redirection

*   The `RedirectIfOldUrl` middleware automatically handles 301 redirects based on entries in the `redirects` table.

### Template File Management (PageObserver)

*   An observer (`app/Observers/PageObserver.php`) exists containing logic to automatically rename/move Blade template files in `resources/views/Templates/` when a page's slug or parent is changed in the CMS.
*   **Note:** This observer is **currently disabled** as its registration is commented out in `AppServiceProvider`. If this functionality is desired in the future, the observer needs to be registered.


Excellent! Thank you for the confirmation. All my assumptions are correct, which means I can now provide you with accurate and detailed documentation.

Here is the documentation for the **Resources** section of your README file, formatted for GitHub Markdown.

***

# Detailed Rachtr Components:

## Table of Contents
* [Filament Admin Panel](#filament-admin-panel)
  * [Resources](#resources)
    * [Page Resource](#page-resource)
    * [Category Resource](#category-resource)
    * [Redirect Resource](#redirect-resource)
    * [Product Section Resource (Product Tags)](#product-section-resource-product-tags)
    * [Product Resource](#product-resource)
    * [Common Component Resource](#common-component-resource)
* [Controllers](#controllers)
    * [BlogController](#blogcontrollerphp)
    * [FormController](#formcontrollerphp)
    * [PageController](#pagecontrollerphp)
    * [ProductController](#productcontrollerphp)
* [Models](#models)
    * [Pages Model](#pages-model)
    * [Post Model](#post-model)
    * [Product Model](#product-model)
    * [ProductSection Model](#productsection-model)
    * [Seo Model](#seo-model)
    * [Redirects Model](#redirects-model)
    * [Category Model](#category-model)
    * [CommmonComponents Model](#commoncomponents-model)
    * [User Model](#user-model)
*[Views & Frontend - Blade Tenmplates](#views-&-frontend-blade-tenmplates)

---

## Filament Admin Panel

The admin panel is built using [Filament](https://filamentphp.com/), providing a robust and developer-friendly interface for managing all website content.

## Resources

This section details the purpose and functionality of each Filament Resource, which corresponds to a section in the admin panel's navigation.

### Page Resource

#### Purpose
The **Page Resource** is the core of the content management system, used for creating, viewing, updating, and deleting all the informational and structural pages of the website (e.g., 'About Us', 'Contact Us', industry solution pages, product listing pages).

#### Key Features & Implementation Details

*   **Standard Page Fields:** Manages fundamental page data like `title`, `slug`, `status` (Draft, Published, Archived), and parent-child relationships for creating URL structures (e.g., `/support-center/architect-center`).
*   **Homepage Management:** Includes a toggle (`is_homepage`) to designate a single page as the website's homepage. The `Pages` model contains logic to ensure only one page can be the homepage at any given time.
*   **SEO Management:** Integrates with the `ralphjsmit/laravel-seo` package, providing dedicated fields for SEO Title, Description, Canonical URL, and meta robot tags.
*   **Dynamic Content Fields with `getSchemaBySlug()`:** This is a key architectural feature. The fields available for a page's content change dynamically based on its slug. This is handled by the `getSchemaBySlug(string $slug): array` method within `PageResource.php`.
    *   **How it Works:** The main form schema calls `self::getSchemaBySlug($get('slug') ?? 'default')` within an 'Additional Content' tab.
    *   This method uses a `match` statement to return a specific array of Filament form components tailored to the needs of that particular page.
    *   **Example:** For a page with the slug `about-us`, it returns the schema from the `aboutTemplate()` method, which includes fields for the banner, founder details, and highlights.
    *   **Important for Developers:** To create a new page with a unique content structure, you must:
        1.  Add a new `case` to the `match` statement in `getSchemaBySlug()`.
        2.  Create a corresponding `public static function` (e.g., `newTemplate(): array`) that returns the desired Filament form schema.
*   **Template-based Rendering:** The front end uses a convention-over-configuration approach to render pages. The `PageController` determines which Blade view to use based on the page's full slug.
    *   **Convention:** A page with slug `/industrial-flooring-solutions/epoxy-flooring-services` will attempt to render the view at `resources/views/Templates/industrial-flooring-solutions/epoxy-flooring-services.blade.php`.
    *   **Developer Action:** When adding a new page that requires a unique layout, a corresponding Blade file must be created in the `resources/views/Templates` directory, mirroring the URL structure.

---

### Category Resource

#### Purpose
The **Category Resource** (`Product Categories` in the navigation) is a straightforward CRUD interface for managing product categories. These categories are used to organize products and allow for filtering on the front end.

#### Key Features & Implementation Details
*   **Fields:** Manages `name`, `slug`, and a `description` for each category.
*   **Relationships:** A `Category` has a many-to-many relationship with the `Product` model. In the `ProductResource`, these categories can be assigned to a product.

---

### Redirect Resource

#### Purpose
The **Redirect Resource** is an essential SEO and user experience tool. It allows administrators to create and manage 301 (permanent) redirects from old or non-existent URLs to new, active pages.

#### Key Features & Implementation Details
*   **Functionality:** Provides a simple form with two fields: `Old URL` and `New URL`.
*   **Middleware:** The `app/Http/Middleware/RedirectIfOldUrl.php` middleware intercepts incoming requests. It checks if the requested path exists in the `redirects` table as an `old_url`. If a match is found, it performs a 301 redirect to the corresponding `new_url`.
*   **Usage:** Primarily used to fix 404 errors for pages that have been moved or renamed, preserving link equity and preventing user frustration.

---

### Product Section Resource (Product Tags)

#### Purpose
The **Product Section Resource** (labeled `Product Tags` in the navigation) acts as a manual product grouping or tagging system. It allows the creation of curated product collections that can be used for special sections on the website, such as "Trending Products" or "Recommended for You."

#### Key Features & Implementation Details
*   **Fields:** Consists of a `name` for the section (e.g., `trending`) and a multi-select dropdown to associate multiple `products`.
*   **Usage on Frontend:** The `PageController` contains a `getTrendingProduct()` method which fetches the `ProductsSection` named 'trending', retrieves the associated product IDs, and then queries the `Product` model to display them. This pattern can be replicated for other sections.

---

### Product Resource

#### Purpose
The **Product Resource** is for managing all product information, including details, images, technical documents, and SEO data.

#### Key Features & Implementation Details
*   **Core Fields:** Manages product `name`, `slug`, `template` (default), and category assignments.
*   **Content Fields:** Utilizes a JSON `content` column for flexible data, managed via Filament `Repeater` and `RichEditor` components for:
    *   Product Images (gallery)
    *   Benefits (accordion)
    *   Description
*   **File Uploads (Data Sheets & Certificates):**
    *   Allows uploading of PDF and Word documents for technical data sheets and certificates.
    *   ⚠️ **Important Note:** The `FileUpload` component uses `->preserveFilenames()`. This means if a file with the **same name** as an existing one is uploaded for **any product**, it will overwrite the old file in the `storage/app/public/products` directory. To avoid this, **ensure all uploaded datasheets and certificates have a unique name**, preferably including the product name/SKU (e.g., `rachtr-floor-3010-n-datasheet.pdf`).

---

### Common Component Resource

#### Purpose
The **Common Component Resource** allows for the management of reusable website components, primarily the **Header** and **Footer**. This is a powerful feature that enables content editors to update navigation menus and logos without requiring developer intervention.

#### Key Features & Implementation Details
*   **Component Types:** Uses a `Select` field to define the component `type` (Header or Footer).
*   **Dynamic Content:** The `content` field is a flexible JSON-based schema built with `Repeater` components. For the header, this allows for building nested navigation menus with dynamic links and text.
*   **Integration:**
    *   In the `PageResource`, `Select` fields (`header_id` and `footer_id`) allow an editor to choose which header and footer to display on a specific page.
    *   The frontend Blade layouts (`headerHome.blade.php`, `footerHome.blade.php`) then fetch the content from the selected `CommonComponents` model and render it dynamically. This decouples the site's navigation from hardcoded templates.

## Controllers

### BlogController.php

##### Purpose
This controller is primarily responsible for rendering individual blog posts and includes a custom utility for back-dating posts.

##### Methods

**`show($slug)`**
- **Parameters:**
  - `$slug` (string): The URL slug of the blog post to be displayed.
- **Description:**
  Fetches a single published blog post from the database using its slug and renders the main blog post template.
- **Logic/Workflow:**
  1.  Receives the `$slug` from the route.
  2.  Queries the `Post` model using `where('slug', $slug)->where('status', 'published')->firstOrFail()`.
  3.  If no post is found, Laravel automatically throws a `ModelNotFoundException`, which results in a 404 page.
  4.  If a post is found, it is passed to the `Blog.blog-template.blade.php` view for rendering.
- **Returns:** An `Illuminate\View\View` instance.

**`updatePublishedDates()`**
- **Parameters:** None.
- **Description:**
  A custom utility method designed to update the `published_at` timestamp of a blog post to a date in the past. This is useful for content scheduling or importing older posts while preserving their original publication date.
- **Logic/Workflow:**
  1.  **Trigger:** This method is manually triggered by visiting the `/update-slug` route.
  2.  **Title Format:** The user must first edit a blog post in Filament and prefix its title with a date in the format `[YYYY-MM-DD]` or `[YYYY-MM-DD HH:MM AM/PM]`. Example: `[2024-01-15] My Awesome Blog Post Title`.
  3.  **Query:** The method queries for all posts where the title starts with `[` and ends with `]`.
  4.  **Processing:** It iterates through the found posts, using a regular expression to parse the date and the new title.
  5.  **Database Update:** It updates the `published_at` field with the parsed date and updates the `title` field to remove the date prefix.
- **Returns:** A JSON response confirming that the update process has completed.

---

### FormController.php

#### Purpose
This controller centralizes the handling of all front-end form submissions. It ensures a consistent process for validation, spam protection, and data forwarding.

#### Common Workflow for All Methods
1.  **Validation:** Laravel's `Validator` is used to check for required fields and correct data formats (e.g., `email`, `string`).
2.  **reCAPTCHA v3 Verification:** It sends the `recaptcha_token` from the form to Google's `siteverify` API. It checks for a success status, a `submit` action, and a score above `0.5` to prevent spam.
3.  **Webhook Integration:** Validated data is sent via an HTTP POST request to an external **Google Apps Script** URL. This script is responsible for processing the data (e.g., adding a row to a Google Sheet).
4.  **JSON Response:** The controller returns a standardized JSON response (`{ "success": true/false, "message": "..." }`) which is handled by the front-end JavaScript to display success or error modals.

#### Methods

**`addContactDetail(Request $request)`**
- **Parameters:** `Illuminate\Http\Request $request` object containing form data (`Name`, `Phone`, `Email`, `Profession`, etc.) and `recaptcha_token`.
- **Description:** Handles the main product inquiry/contact form submission.
- **Returns:** JSON response indicating success or failure.

**`addConnectDetail(Request $request)`**
- **Parameters:** `Illuminate\Http.Request $request` object containing form data (`Name`, `Phone`, `Email`, etc.) and `recaptcha_token`.
- **Description:** Handles a minimal "Let’s Connect" form submission.
- **Returns:** JSON response indicating success or failure.

**`addCvDetail(Request $request)`**
- **Parameters:** `Illuminate\Http\Request $request` object containing form data and a file upload named `cv`.
- **Description:** Manages career/CV submissions.
- **Logic/Workflow:**
  1.  Performs standard validation plus file validation for mime types (`pdf`, `doc`, `docx`) and size (max 2MB).
  2.  After successful reCAPTCHA verification, it stores the uploaded file in `storage/app/public/cvs`.
  3.  It constructs a public URL for the stored file and appends it to the form data as `CV Link`.
  4.  It sends all data, including the file attachment, to the Google Apps Script endpoint using `Http::attach`.
- **Returns:** JSON response indicating success or failure.

**`addEpoxyDetail(Request $request)`**
- **Parameters:** `Illuminate\Http.Request $request` object containing epoxy flooring inquiry data.
- **Description:** Captures and processes detailed inquiries for epoxy flooring solutions.
- **Returns:** JSON response indicating success or failure.

---

### PageController.php

#### Purpose
The primary controller for rendering the website's pages. It handles routing, data fetching, and template selection based on URL slugs.

#### Methods

**`getPage($slug = null)`**
- **Parameters:**
  - `$slug` (string, optional): The full URL slug from the request, defaults to `null` for the homepage.
- **Description:**
  This is the main "catch-all" method for displaying pages. It dynamically determines which content and template to load based on the URL.
- **Logic/Workflow:**
  1.  **Homepage:** If `$slug` is `null` or `/`, it queries the `Pages` table for the entry where `is_homepage` is `true`.
  2.  **Child Pages:** For any other slug, it parses only the **last segment** of the URL slug (e.g., for `/path/to/page`, it queries for a page with the slug `page`). This allows for nested URL structures.
  3.  **Template Selection:**
      - If the fetched page has the `is_product_list` flag set to true, it sets `$templatePath` to the generic `Templates.product_list` view.
      - Otherwise, it dynamically constructs the template path based on the full slug (e.g., `/about-us` maps to `Templates.about-us.blade.php`).
  4.  **Data Fetching:** It checks the page's JSON `content` for product or blog IDs (under keys like `sections`, `systems`, or `blogs`) and fetches the corresponding models from the database.
  5.  **Rendering:** It passes all fetched data (`$page`, `$products`, `$blogs`, etc.) to the `layouts.app` view, which then includes the appropriate `$templatePath`.
- **Returns:** An `Illuminate\View\View` instance or a 404 error page if no page or template is found.

**`getProductPage($slug)`**
- **Parameters:**
  - `$slug` (string): The unique slug for a product.
- **Description:** Renders a single product detail page.
- **Logic/Workflow:**
  1.  Queries the `Product` model for an entry matching the `$slug`.
  2.  Eager loads the associated SEO data using `with('seo')`.
  3.  If found, it passes the `$product` object to the `layouts.app` view. The view uses the `template` attribute from the product to include the correct product detail template (e.g., `Templates.Product.default-template.blade.php`).
- **Returns:** An `Illuminate\View\View` instance or a 404 error page.

**`getSitemap()`**
- **Parameters:** None.
- **Description:** Generates and returns the `sitemap.xml` for SEO purposes.
- **Logic/Workflow:**
  1.  Uses the `spatie/laravel-sitemap` package.
  2.  Queries all published `Pages`, `Products`, and `Posts`.
  3.  Constructs the full, absolute URL for each item. For nested pages, it recursively builds the full slug.
  4.  Writes the final XML to `public/sitemap.xml` and returns the file as a response.
- **Returns:** An `Illuminate\Http\Response` with the XML content.

**`publishPendingPosts()`**
- **Parameters:** None.
- **Description:** A utility function to batch-update the status of all blog posts from `PENDING` to `PUBLISHED`.
- **Returns:** JSON response indicating the number of updated rows.

**`getTrendingProduct()`**
- **Parameters:** None.
- **Description:** A helper method to fetch products marked as "trending" for use on the front end.
- **Performance:** Caches the query result for 10 minutes using the key `header_trending_products` to reduce database queries on every page load.
- **Returns:** An Eloquent `Collection` of products or an empty collection.

---

### ProductController.php

#### Purpose
This controller manages product-related displays, including the main search page, category listings, and AJAX endpoints for search functionality.

#### Methods

**`index(Request $request)`**
- **Parameters:** `Illuminate\Http\Request $request` which may contain a `query` parameter.
- **Description:** Handles the main search results page at `/product-lists`.
- **Logic/Workflow:**
  - **With Query:** If a `query` parameter exists, it uses Laravel Scout to search Algolia for matching `Product` and `Post` models.
  - **Without Query:** If no query is provided, it returns a paginated list of all products and posts.
- **Returns:** A view (`layouts.app`) populated with search results or paginated items.

**`getAllProducts(Request $request, $slug)`**
- **Parameters:**
  - `Illuminate\Http\Request $request`: Contains optional `page` and `sort` query parameters.
  - `$slug` (string): The slug for the category to display, or `all-products`.
- **Description:** Renders product listing pages, filtered by category and sorted as requested.
- **Performance:** Caching is applied to the database queries for 10 minutes. The cache key is dynamic and includes the slug, page number, and sort order to ensure unique results are cached (e.g., `category_installation-systems_products_az`).
- **Returns:** A view (`layouts.app`) with the filtered and paginated product data.

**`getSearchResultsDropdown(Request $request)`**
- **Parameters:** `Illuminate\Http\Request $request` containing a `query` parameter.
- **Description:** An API endpoint that provides a lightweight JSON response for the instant search dropdown in the site header.
- **Logic/Workflow:**
  1.  Takes the `query` string from the request.
  2.  Uses Algolia search to fetch the top 3 matching `Product` and `Post` results.
- **Returns:** A JSON object containing `products` and `blogs` arrays.

**`getRecommendedProducts(Request $request)`**
- **Parameters:** `Illuminate\Http\Request $request`.
- **Description:** Fetches products that have been manually curated in the "Product Tags" resource under the name `recommended`.
- **Performance:** The list of recommended product IDs is cached for 10 minutes. The paginated results are also cached separately to optimize performance.
- **Returns:** A paginated collection of products.

**`getTrendingProducts(Request $request)`**
- **Parameters:** `Illuminate\Http\Request $request`.
- **Description:** An API endpoint that fetches products marked as `trending` from the "Product Tags" resource.
- **Performance:** Results are cached for 10 minutes under the key `header_trending_products`.
- **Returns:** A JSON response containing an array of trending products.


## Models

This section provides a detailed overview of the primary Eloquent models used in the RachTR application. These models define the data structure, relationships, and business logic for the core entities managed by the CMS.

### Pages Model

#### Purpose
The `Pages` model represents dynamic pages on the site, such as 'About Us', 'Contact', and other content-driven pages. It is the backbone of the CMS's page management functionality.

#### Key Features & Implementation Details
-   **Fields:**
    -   `title`:Used as the visible page title and often shown in meta tags or page headers.
    -   `slug`: Determines the page’s public URL. For example, a page with the slug about-us is accessible at /about-us or, if it's nested, /parent-slug/about-us.
    -   `parent_id`: Enables nested URLs and breadcrumb logic (e.g., /solutions/architecture).
    -   `header_id` integer (nullable, foreign key to pages.id): Controls which header layout appears on the frontend for this page.
    -   `footer_id` integer (nullable, foreign key to pages.id): Used to display a consistent footer or vary it across different sections of the site.
    -   `is_homepage` (boolean) :Only one page can have this flag set to true. Automatically resets others on save.
    -   `status` (enum): Helps determine whether the page should be shown to the public or is still being worked on.
    -   `schema_data` (array) : This field is basically a json and is used to get the different schemas in the head section of the product page. give in this format.
    -   `content` (array):  Powers the modular sections of the page—e.g., hero banners, testimonials, forms, etc.—through the Filament CMS.
   
-   **Relationships:**
    -   `parent()` / `children()`: A self-referencing `belongsTo` / `hasMany` relationship that enables a parent-child hierarchy for creating nested page URLs (e.g., `/solutions/epoxy`).
    -   `header()` / `footer()`: `belongsTo` relationships linking a page to a specific `CommonComponents` record for its header and footer.
    -   `seo()`: A polymorphic `morphOne` relationship to the `Seo` model, allowing each page to have its own unique SEO metadata.
-   **Attributes & Accessors:**
    -   `is_homepage` (boolean): A flag to designate a single page as the website's homepage.
    -   `content` & `schema_data` (array): Cast to arrays, these JSON columns store flexible, unstructured data managed through the Filament panel.
    -   `getFullSlugAttribute()`: A custom accessor that dynamically generates the full URL slug by concatenating the parent's slug with its own (e.g., `parent-slug/child-slug`).
-   **Business Logic:**
    -   A `boot()` method contains a `saving` event listener that enforces a site-wide rule: only one page can have `is_homepage` set to `true`. When a page is saved as the homepage, all other pages are automatically updated to remove the flag.

---

### Product Model

#### Purpose
The `Product` model represents an individual product in the catalog. It is a feature-rich model that handles product data, search indexing, and media management.

#### Key Features & Implementation Details
-   **Fields:**
    -   `name` (string): Name of the Product.
    -   `slug` (string): The urls lug for this product(unique).
    -   `template` (string): Choose the template that should be applied to it ( Currently only defauilt-template is there but once a new template or different template for selective product is there then you can add it from here for that product ).
    -   `content` (array): It is a json based field that stores the content for each section in K-V pairs.
    -   `is_active` (boolean): A field that is used to check if the page is to be shown or not.
    -   `schema_data` (array) : This field is basically a json and is used to get the different schemas in the head section of the product page. give in this format   
-   **Traits:**
    -   `Laravel\Scout\Searchable`: Enables full-text search capabilities, configured to work with Algolia.
    -   `RalphJSmit\Laravel\SEO\Support\HasSEO`: Integrates with the SEO package.
-   **Relationships:**
    -   `categories()`: A `belongsToMany` relationship to the `Category` model.
    -   `seo()`: A polymorphic `morphOne` relationship to the `Seo` model.
-   **Searchability:**
    -   The `toSearchableArray()` method defines which data is sent to the Algolia index. It includes the product's `name`, `slug`, and a JSON-encoded version of its `content`.
-   **Model Events & File Management:**
    -   The `booted()` method contains critical logic for maintaining data integrity and storage cleanliness:
        -   **`updated` event:** When a product's `content` is updated, it triggers a `deleteRemovedImages()` method to automatically delete any old images, datasheets, or certificates from the `storage` directory that are no longer referenced. This prevents orphaned files on update.
        -   **`saved` & `deleted` events:** These events automatically clear relevant caches (`categories_with_products`, `products_name_slug`) to ensure the front end always displays up-to-date information.
    -   ⚠️ **Developer Note on Deletion:** The current implementation does **not** automatically delete associated files from storage when a `Product` record is deleted entirely. An observer or a `deleting` model event would need to be implemented to add this functionality and prevent orphaned files upon product deletion.

---

### ProductsSection Model

#### Purpose
The `ProductsSection` model is used to create manually curated groups of products. Instead of relying on dynamic categories, administrators can use this to create specific, named collections for promotional or navigational purposes.

#### Key Features & Implementation Details
-   **Fields:**
    -   `name` (string): The unique identifier for the section (e.g., `trending`, `recommended`).
    -   `product_ids` (array): A JSON column that stores an array of product IDs belonging to this section. It is automatically cast to an array in Laravel.
-   **Usage:**
    -   **Trending Products:** Used to populate the "Trending Products" list that appears on the search bar hover/focus (`ProductController@getTrendingProducts`).
    -   **Recommended Filter:** Used to populate the "Recommended" filter option on category and product listing pages (`ProductController@getRecommendedProducts`).

---

### Redirect Model

#### Purpose
The `Redirect` model handles permanent (301) URL redirects. It is a simple but powerful tool for SEO and user experience, ensuring that outdated or changed URLs point to the correct new pages.

#### Key Features & Implementation Details
-   **Fields:**
    -   `old_url` (string): The old path that should trigger a redirect.
    -   `new_url` (string): The new destination path.
-   **Integration:** This model is used by the `RedirectIfOldUrl` middleware, which intercepts incoming requests and performs a 301 redirect if a match is found in the `redirects` table.

---

### Seo Model

#### Purpose
This model extends the `RalphJSmit\Laravel\SEO\Models\SEO` base class to store and manage all SEO-related metadata for other models in the application.

#### Key Features & Implementation Details
-   **Polymorphic Relationship:** It is designed to be attached to any Eloquent model (e.g., `Page`, `Product`, `Post`) via a `morphOne` relationship. This allows for a centralized and reusable SEO system.
-   **Fields:**
    -   `title`, `description`, `robots`, `canonical_url`: Standard meta tags.
    -   `meta` (JSON): A flexible field for storing additional metadata, such as `focus_keywords`.

---

### Post Model

#### Purpose
The `Post` model represents a blog post. It extends the `BasePost` class from the `firefly/filament-blog` package and adds custom search functionality.

#### Key Features & Implementation Details
-   **Traits:**
    -   `Laravel\Scout\Searchable`: Enables full-text search via Algolia.
-   **Searchability:**
    -   `toSearchableArray()`: This method is customized to prepare data for indexing. It sanitizes the post's HTML `body` by stripping out style tags, inline styles, and images before sending it to Algolia. This ensures the search index contains clean, relevant text.
    -   `searchableAs()`: Configures the model to use a specific Algolia index named `fblog_posts`.
-   **Attributes:**
    -   `$appends = ['feature_photo']`: Exposes a `feature_photo` attribute. This accessor is inherited from the parent `BasePost` class and provides a convenient URL to the post's main image.

---

### Category Model

#### Purpose
Represents a product category, used for organizing and filtering products.

#### Key Features & Implementation Details
-   **Relationships:**
    -   `products()`: A `belongsToMany` relationship to the `Product` model, linked via the `category_product` pivot table.
-   **Performance:**
    -   The `booted()` method includes `saved` and `deleted` hooks that automatically clear the `categories_with_products` cache. This ensures that any changes to categories or their product associations are immediately reflected on the front end.

---

### CommonComponents Model

#### Purpose
Represents reusable layout blocks, such as the website's header and footer. This allows for centralized management of shared UI elements like navigation menus.

#### Key Features & Implementation Details
-   **Fields:**
    -   `type` (enum): Defines the component type (e.g., `header` or `footer`).
    -   `content` (JSON): Stores the component's data, such as navigation links and logo paths, in a flexible format. The attribute is cast to an array.
-   **Relationships:**
    -   `pagesAsHeader()` / `pagesAsFooter()`: `hasMany` relationships to the `Pages` model, allowing a single component to be used across multiple pages.

---

### User Model

#### Purpose
The `User` model handles user authentication and authorization, primarily for the Filament admin panel.

#### Key Features & Implementation Details
-   **Interfaces & Traits:**
    -   Implements `Filament\Models\Contracts\FilamentUser` to integrate with Filament's authentication system.
    -   Uses the `Firefly\FilamentBlog\Traits\HasBlog` trait, enabling users to be authors of blog posts.
-   **Authorization:**
    -   The `canAccessPanel()` method contains critical security logic. It restricts access to the Filament admin panel to only those users whose email address ends with `@quantastic.in`.
-   **Functionality:**
    -   The `canComment()` method is included to support blog commenting functionality provided by the Firefly package.


## Views & Frontend - Blade Tenmplates

This section outlines the structure and purpose of the Blade templates and front-end assets that render the RachTR website. The system uses a combination of convention-based routing, dynamic templates, and reusable components.

### Directory Structure

The `resources/views` directory is organized as follows:

-   **`CommonTemplates/`**: Contains Blade partials for reusable UI components that are shared across multiple pages, such as the site header (`headerHome.blade.php`) and footer (`footerHome.blade.php`).
-   **`fallback.blade.php`**: A custom 404 error page that is displayed when a route or page slug is not found.
-   **`Templates/`**: This is the primary directory for all page-specific layouts. The CMS uses a convention-based approach to render templates from this folder.
    -   **Nested Structure:** The directory structure mirrors the URL slug hierarchy. For a page with a URL like `/solutions/epoxy-flooring`, the system will look for a template at `resources/views/Templates/solutions/epoxy-flooring.blade.php`.
    -   **`Templates/Product/`**: Contains templates specifically for rendering product detail pages.
-   **`vendor/filament-blog/`**: Contains Blade views that have been overridden from the `firefly/filament-blog` package. These files control the layout and appearance of the blog index, individual posts, and category pages.
-   **`layouts/app.blade.php`**: The master layout file that wraps almost every page on the site.

### Core Layouts

#### `layouts/app.blade.php`
This Blade file acts as the universal layout template used to render all dynamic CMS-driven pages across the RachTR website, with the exception of blog-related pages. It is automatically loaded for every route and serves as the foundational HTML structure into which different types of content are injected based on the URL and route parameters.

-   **SEO Integration:** Dynamically sets all critical SEO metadata (`title`, `description`, `keywords`, Open Graph tags, Twitter Card metadata, `canonical` URL, and `robots` tag) by reading from the `$page->seo` object, falling back to sensible defaults when values are not present.
-   **Structured Data:** Renders inline JSON-LD schemas from the `schema_data` array stored in the page model.
-   **Asset Management:** Loads all CSS and JavaScript assets via Vite. It includes core libraries (Bootstrap, Slick, Fancybox) and page-specific styles to ensure efficient loading.
-   **Dynamic Content Routing:** This file contains the primary logic for rendering the correct content template. It checks the request path to determine if it's a product page (`*product-page*`), a search results page (`*product-lists*`), or a category listing (`*category*`). Based on the path, it includes the appropriate Blade partial. For all other standard pages, it renders the layout specified by the `$templatePath` variable.
-   **Shared Components:** It includes the global header and footer from `CommonTemplates` and defines the site-wide success/error modals triggered during form submissions using Micromodal.

### Template-Specific Views

#### `Templates/` Directory
This directory holds the unique Blade templates for content pages. The naming and folder structure **must** match the URL slug defined in the `Pages` resource in Filament.

-   **Example-1:** A page with the slug `about-us` must have a corresponding template at `resources/views/Templates/about-us.blade.php`.
-   **Example-2:** A page with the slug `industrial-flooring-solutions/pu-flooring` must have a corresponding template at `resources/views/Templates/industrial-flooring-solutions/pu-flooring.blade.php`.
-   Basically the templates uder this are the views that are rendered for each page and based on the file path and slug correctness both file path and the slug should match only then the file will be rendered else it will be taken as a 404 page or typo.

#### `Templates/product_list.blade.php`
A generic and reusable template for pages flagged as a "Product List" in the CMS (e.g., Installation Systems, Polishing Systems). It renders a banner and body content controlled by the `Pages` model's JSON `content` field. The Blade file serves as a reusable "scaffolding" for this page type.

#### `Templates/search.blade.php`
This Blade file powers the dynamic search results page.
-   **Trigger:** It is rendered when a user submits a search from the header, handled by `ProductController@index`.
-   **Backend Logic:** The controller uses Laravel Scout with Algolia to fetch matching products and blog posts.
-   **Frontend Interaction:**
    -   The page uses **Alpine.js** to manage a tabbed layout: "All," "Products," and "Blog Posts," with live counts for each.
    -   The "All" tab shows a preview of the top results for both content types.
    -   The "Products" tab includes an Alpine.js-powered sidebar for category-based filtering.
    -   All relevant data (`productsData`, `categoriesData`, `postsData`) is serialized into JavaScript variables to enable this client-side interactivity without further server calls.
    -   A JavaScript function highlights the search query within the results for better user visibility.
    -   Both the Products and Blog Posts tabs feature a "Load More" button for paginated reveal.

#### `fallback.blade.php`
This is the custom 404 "Not Found" page. It features a Lottie animation and a link back to the homepage, providing a better user experience than a standard server error page.

### Blog Views (`vendor/filament-blog/`)

These views override the default templates from the `firefly/filament-blog` package to provide a custom look and feel for the RachTR blog. The rendering is handled by the package's routes, not the `BlogController`.

> **Note:** The file at `resources/views/Blog/blog-template.blade.php` is deprecated and not in use.

#### `index.blade.php`
This is the main landing page for the blog (`/blogs`).
-   **Functionality:** It displays a paginated list of all published blog posts. Each post is rendered as a card showing its feature image, publication date, categories, title, and a snippet of the body. Pagination is handled by a custom Blade partial.
-   **SEO:** Contains static, hardcoded SEO metadata specifically for the main blog landing page.

#### `show.blade.php`
This template renders an individual blog post.
-   **Functionality:** Displays the full post content, including the title, publication date, feature image, and sanitized HTML body. It also includes social sharing links and category tags.
-   **Related Posts:** It features a "Recent Posts" section at the bottom, which dynamically pulls related posts using the `relatedPosts()` method on the `Post` model.
-   **SEO:** Dynamically injects all SEO metadata from the post's associated `Seo` model record.

#### `category-post.blade.php`
This template is used for displaying posts belonging to a specific category.
-   **Functionality:** Similar to `index.blade.php`, but the `$posts` collection passed to it is pre-filtered by the selected category.
-   **SEO:** The SEO metadata is dynamically populated based on the category being viewed.

#### `all-post.blade.php` & `tag-post.blade.php`
These files serve niche filtering purposes.
-   **`all-post.blade.php`**: Renders a listing of all blog posts, typically without the same pagination limits as the index, for a comprehensive overview.
-   **`tag-post.blade.php`**: Displays a filtered list of posts that share a specific tag.
## Contributing

(Add any specific contribution guidelines here if applicable, otherwise remove or keep generic).
Please follow standard contributing guidelines (e.g., feature branches, pull requests).

## License

This project is likely licensed under the MIT License, inheriting from the Laravel framework. Please check the `LICENSE` file (if present) or assume standard Laravel licensing.    
