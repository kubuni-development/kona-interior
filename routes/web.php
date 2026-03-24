<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Statische pagina's
Route::view('/webshop', 'webshop')->name('webshop');
Route::view('/about', 'about')->name('about');
Route::view('/archive', 'archive')->name('archive');
Route::view('/terms', 'terms')->name('terms');
// Om de pagina te BEKIJKEN (GET)
Route::view('/contact', 'contact')->name('contact');
// Om het formulier te VERZENDEN (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// 1. Algemeen Dashboard (voor gewone klanten/gebruikers)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 2. Beveiligde Admin Groep (voor jou als beheerder)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    
    // Je nieuwe Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Profiel routes BINNEN de admin prefix, maar met de STANDAARD namen van Breeze
    // Zo blijven de formulieren in je 'edit.blade.php' werken zonder foutmeldingen.
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // 3. Categorieën (Bijv: Stoelen, Tafels, Verlichting)
    Route::resource('categories', CategoryController::class);

    // 4. Producten (De items zelf)
    Route::resource('products', ProductController::class);
});


require __DIR__.'/auth.php';
