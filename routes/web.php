<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('page.welcome');

Route::get('about', function () {
    return view('about');
})->name('page.about');

Route::get('contact', function () {
    return view('contact');
})->name('page.contact');

Route::get('menu', function () {
    return view('menu');
})->name('page.menu');

Route::get('products', function () {
    return view('products');
})->name('page.products');

Route::get('store', function () {
    return view('store');
})->name('page.storage');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
?>