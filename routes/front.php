<?php

use App\Http\Controllers\AudioUploadController;
use App\Http\Controllers\Firm\BuyController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Global\CategoryController;
use App\Http\Controllers\Global\LanguageStoreController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->group(function () {
    Route::post('buy/webhook', [BuyController::class,'webhook'])->name('buy.webhook');
    Route::post('language', LanguageStoreController::class)->name('language.store');
    Route::get('articles',[FrontController::class,'articles'])->name('articles');
    Route::get('projects',[FrontController::class,'projects'])->name('projects');
    Route::post('projects/apply/{project}/next-step', [FrontController::class, 'nextStep'])->name('projects.next.step');
    Route::post('/projects/apply/generate-pdf/{templateId}', [FrontController::class, 'generatePdf'])->name('projects.generate.pdf');
    Route::post('/projects/apply/deletePdf', [FrontController::class, 'deletePdf'])->name('projects.deletePdf');
    Route::get('projects/apply/{project}',[FrontController::class,'applyView'])->name('projects.applyView');


    Route::get('projects/{project}',[FrontController::class,'SingleProject'])->name('projects.single');
    Route::get('articles/{article}',[FrontController::class,'SingleArticle'])->name('articles.single');
    Route::get('adminCategories',CategoryController::class)->name('adminCategories');
    Route::post('makeAplication/{project}', [FrontController::class,'makeAplication'])->name('aplicationNoLogin.store');
    Route::get('generateCaptcha', [FrontController::class, 'generateCaptcha'])->name('generateCaptcha');
    Route::post('verify-captcha', [FrontController::class, 'verifyCaptcha']);
    Route::get('getChildsCategoryWitoutDetail',[FrontController::class,'getChildsCategoryWitoutDetail'])->name('getChildsCategoryWitoutDetail');
    Route::post('uploadVideo', [VideoController::class, 'upload'])->name('video.upload');
    Route::post('uploadAudio', [AudioUploadController::class, 'upload'])->name('audio.upload');

});



