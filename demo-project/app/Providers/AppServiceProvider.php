<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Services\PaymentService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PaymentService::class, function ($app) {
            return new PaymentService(env('PAYMENT_GATEWAY', 'stripe')); // Default to Stripe
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
