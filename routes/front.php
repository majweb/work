<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\Global\CategoryController;
use App\Http\Controllers\Global\LanguageStoreController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::name('front.')->group(function () {
    Route::post('language', LanguageStoreController::class)->name('language.store');
    Route::get('articles',[FrontController::class,'articles'])->name('articles');
    Route::get('articles/{article}',[FrontController::class,'SingleArticle'])->name('articles.single');
    Route::get('adminCategories',CategoryController::class)->name('adminCategories');
});



