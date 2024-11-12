<?php

use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return 'Application all kind of cache has been cleared';
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/searchflight', [IndexController::class, 'searchFlight'])->name('search.flight');
