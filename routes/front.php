<?php

use App\Http\Controllers\Firm\BuyController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Global\CategoryController;
use App\Http\Controllers\Global\LanguageStoreController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->group(function () {
    Route::post('buy/webhook', [BuyController::class,'webhook'])->name('buy.webhook');
    Route::post('language', LanguageStoreController::class)->name('language.store');
    Route::get('articles',[FrontController::class,'articles'])->name('articles');
    Route::get('projects',[FrontController::class,'projects'])->name('projects');
    Route::get('projects/{project}',[FrontController::class,'SingleProject'])->name('projects.single');
    Route::get('articles/{article}',[FrontController::class,'SingleArticle'])->name('articles.single');
    Route::get('adminCategories',CategoryController::class)->name('adminCategories');
    Route::post('makeAplication/{project}', [FrontController::class,'makeAplication'])->name('aplicationNoLogin.store');
    Route::get('generateCaptcha', [FrontController::class, 'generateCaptcha'])->name('generateCaptcha');
    Route::get('resetSessionCapcha', [FrontController::class, 'resetSessionCapcha'])->name('resetSessionCapcha');
    Route::post('verify-captcha', [FrontController::class, 'verifyCaptcha']);
});



