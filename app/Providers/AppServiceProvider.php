<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\FooterController;

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
        // Registra un View Composer per passare i dati del footer a tutte le viste
        View::composer('*', function ($view) {
            $footerController = new FooterController();
            $footerData = $footerController->index()->getData();

            $view->with('footerSections', $footerData['footerSections']);
            $view->with('socialIcons', $footerData['socialIcons']);
        });
    }
}
