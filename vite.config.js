import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bootstrap.min.css',
                'resources/css/style.css',
                'resources/css/responsive.css',
                'resources/css/jquery.fancybox.min.css',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/css/product-template.css',
                'resources/css/architect.css',
                'resources/css/puFloor.css',
                'resources/css/contractual.css',
                'resources/css/aboutus.css',
                'resources/css/uploadCV.css',
                'resources/css/careersStyle.css',
                'resources/css/contact.css',
                'resources/css/epoxyIndustry.css',
                'resources/css/epoxy.css',
                'resources/css/epoxyCost.css',
                'resources/css/allProduct.css',
                'resources/css/search.css',
                'resources/css/blog.css',
                'resources/css/blogTemplate.css',
                'resources/css/blogArchive.css',
                'resources/js/jquery.min.js',
                'resources/js/bootstrap.min.js',
                'resources/js/bootstrap.bundle.min.js',
                'resources/js/slick.js',
                'resources/js/jquery.fancybox.min.js',
                'resources/js/cdn.min.js',
                'resources/js/micromodal.min.js',
                'resources/js/custom.js',
                'resources/js/customTab.js',
                'resources/js/forms.js',
            ],
            refresh: true,
        }),
    ],
});
