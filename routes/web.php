<?php

use App\Http\Controllers\FrontEnd;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', [FrontEnd::class, 'index'])->name('frontend.index');

    Route::get('/404', function () {
        return abort('404');
    })->name(
        '404'
    );
});
