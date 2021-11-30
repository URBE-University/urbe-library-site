<?php

use App\Http\Controllers\ResourceController;
use App\Models\Resource;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web.home');
});

Route::get('issues', function () {
    return view('web.newsletter');
})->name('newsletter');

Route::get('about-us', function () {
    return view('web.about-us');
})->name('about-us');

Route::get('databases', function () {
    return view('web.databases');
})->name('databases');

Route::get('docs', function () {
    return view('web.docs');
})->name('docs');

Route::get('contact', function () {
    return view('web.contact');
})->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/resources', [ResourceController::class, 'index'])->name('resources');

});
