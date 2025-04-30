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

## Contributing

(Add any specific contribution guidelines here if applicable, otherwise remove or keep generic).
Please follow standard contributing guidelines (e.g., feature branches, pull requests).

## License

This project is likely licensed under the MIT License, inheriting from the Laravel framework. Please check the `LICENSE` file (if present) or assume standard Laravel licensing.    