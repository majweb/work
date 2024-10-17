<?php

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Firm\AboutController;
use App\Http\Controllers\Firm\AplicationController;
use App\Http\Controllers\Firm\ArticleController;
use App\Http\Controllers\Firm\BuyController;
use App\Http\Controllers\Firm\FirmBuyController;
use App\Http\Controllers\Firm\FirmController;
use App\Http\Controllers\Firm\InvoiceController;
use App\Http\Controllers\Firm\OrderController;
use App\Http\Controllers\Firm\PoinstController;
use App\Http\Controllers\Firm\ProjectController;
use App\Http\Controllers\Recruit\ProjectController as ProjectControllerRecruit;
use App\Http\Controllers\Firm\StatisticController;
use App\Http\Controllers\Firm\RecruitController;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::mediaLibrary();


Route::get('/', function () {
    $page = Page::whereId(1)->first();
    return Inertia::render('Welcome', [
        'page' => new PageResource($page),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register')
    ]);
})->name('front');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('logged')->group(function () {
    Route::get('/dashboard', function (MonthlyUsersChart $chart) {
        return inertia()->render('Dashboard',['chart' => $chart->build()]);
    })->name('dashboard');
    Route::resource('recruits',RecruitController::class)->middleware('role:firm');
    Route::resource('orders',OrderController::class)->middleware('role:firm')->only([
        'index'
    ]);
    Route::resource('invoices',InvoiceController::class)->middleware('role:firm')->only([
        'index', 'update'
    ]);
    Route::get('invoicesDownload/{invoice}',[InvoiceController::class,'downloadPDF'])->middleware('role:firm')->name('invoicesDownload');
    Route::get('ordersDownload/{order}',[OrderController::class,'downloadPDF'])->middleware('role:firm')->name('ordersDownload');
    Route::resource('aplications',AplicationController::class)->middleware('role:firm');
    Route::resource('projects',ProjectController::class)->middleware('role:firm');
    Route::resource('articles',ArticleController::class)->middleware('role:firm')->except('show');
    Route::put('firmForm',FirmController::class)->middleware('role:firm')->name('firm.update.form');
    Route::put('firmUpdateForm',AboutController::class)->middleware('role:firm')->name('firm.update.about.form');
    Route::put('firmBuy',FirmBuyController::class)->middleware('role:firm')->name('firm-buy-information.update');
    Route::get('/statistics',[StatisticController::class,'index'])->name('statistics.index')->middleware('role:firm');
    Route::get('/buy',[BuyController::class,'index'])->name('buy.index')->middleware('role:firm');
    Route::get('/buydetail',[BuyController::class,'detail'])->name('buy.detail')->middleware('role:firm');
    Route::get('/points',[PoinstController::class,'index'])->name('points.index')->middleware('role:firm');
//    CART
    Route::get('/buyAddToCart/{product}',[BuyController::class,'store'])->name('buy.store')->middleware('role:firm');
    Route::delete('/buyRemoveFromCart/{product}',[BuyController::class,'detailRemoveFromCart'])->name('buy.detailRemoveFromCart')->middleware('role:firm');
    Route::post('/buyIncrementCart/{product}/{qty}',[BuyController::class,'detailIncrementCart'])->name('buy.detailIncrementCart')->middleware('role:firm');
    Route::post('/buyDecrementCart/{product}/{qty}',[BuyController::class,'detailDecrementCart'])->name('buy.detailDecrementCart')->middleware('role:firm');
    Route::post('/makeOrder',[BuyController::class,'makeOrder'])->name('buy.order')->middleware('role:firm');
    Route::get('/paymentView',[BuyController::class,'paymentView'])->name('buy.paymentView')->middleware('role:firm');
    Route::get('/successView',[BuyController::class,'successView'])->name('buy.successView')->middleware('role:firm');
    Route::post('/changeToPoints/{product}/{points}',[BuyController::class,'changeToPoints'])->name('buy.change')->middleware('role:firm');

//    RECRUIT
    Route::resource('project-recruits',ProjectControllerRecruit::class)->middleware('role:recruit')->parameters(['project-recruits' => 'project']);
    Route::post('project-recruits/storeFirsStep',[ProjectControllerRecruit::class,'storeFirsStep'])->middleware('role:recruit')->name('project-recruits.storeFirsStep');
    Route::put('project-recruits/updateFirsStep/{project}',[ProjectControllerRecruit::class,'updateFirsStep'])->middleware('role:recruit')->name('project-recruits.updateFirsStep');
    Route::get('getChildsCategory/{parent}',[ProjectControllerRecruit::class,'getChildsCategory'])->middleware('role:recruit')->name('getChildsCategory');
    Route::get('getTitlesCategory/{parent}',[ProjectControllerRecruit::class,'getTitlesCategory'])->middleware('role:recruit')->name('getTitlesCategory');
    Route::post('generateTitle',[ProjectControllerRecruit::class,'generateTitle'])->middleware('role:recruit')->name('generateTitle');
});


require __DIR__.'/socialstream.php';
require __DIR__.'/front.php';
