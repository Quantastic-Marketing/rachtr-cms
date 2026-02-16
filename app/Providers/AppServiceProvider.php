<?php

namespace App\Providers;
use App\Models\Post;
use App\Models\Pages;

use App\Observers\PageObserver;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\UserPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->environment('local') && class_exists(\Laravel\Telescope\TelescopeServiceProvider::class)) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /** 
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Pages::observe(PageObserver::class);
        Route::bind('post', function ($value) {
            return Post::where('slug', $value)->published()->firstOrFail();
        });
        Paginator::useBootstrap();
        Gate::policy(User::class, UserPolicy::class);
    }
}
