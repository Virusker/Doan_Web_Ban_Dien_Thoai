<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $categories = DB::table('Categories')->get();
        View::share('categories', $categories);

        View::composer(['layout.header','checkout'], function ($view) {
            $cart_count = Auth::check() ? DB::table('Carts')
                ->where('user_id', Auth::id())
                ->sum('quantity') : 0;
            $view->with('cart_count', $cart_count);
        });
    }
}
