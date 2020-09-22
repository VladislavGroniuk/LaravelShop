<?php

namespace App\Providers;

use App\Category;
use App\Http\Controllers\CartController;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Darryldecode\Cart\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::orderBy('id')->get();
        View::share([
            'categories' => $categories,
        ]);
    }
}
