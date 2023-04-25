<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share([
            'phone' => '+7(988)344-08-55',
            'address' => 'пос. Пятихатки, ул.Дачная, 7',
            'emailAddress' => 'stuchis@yandex.ru',
            'waLink' => 'http://wa.me/79883440855',
            'tgLink' => 'http://t.me/Tsarevich22'
        ]);
    }
}
