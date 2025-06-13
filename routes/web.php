<?php

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\BookingController;
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
use App\Http\Controllers\Global\DeletePosterFile;
use App\Http\Controllers\Global\DeleteTemporaryFileController;
use App\Http\Controllers\Global\FileUploadController;
use App\Http\Controllers\Recruit\ProjectController as ProjectControllerRecruit;
use App\Http\Controllers\Recruit\AplicationController as AplicationControllerRecruit;
use App\Http\Controllers\Firm\StatisticController;
use App\Http\Controllers\Firm\RecruitController;
use App\Http\Controllers\Worker\WorkerDetailController;
use App\Http\Resources\PageResource;
use App\Models\Page;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::mediaLibrary();

Route::get('/moje', function () {
    return inertia()->render('Moje');
});
Route::get('/test', function () {

    $unsupportedLanguages = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];

    if (in_array(app()->getLocale(), $unsupportedLanguages)) {
        $lang = 'en';
    }


    $pdf = Pdf::loadView('template', ['data' => 'Dane dla PDF']);
    return $pdf->stream();
});

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
    Route::resource('aplications',AplicationController::class)->middleware('role:firm')->only('index','show');
    Route::put('aplications/{aplication}/status',[AplicationController::class,'updateStatus'])->middleware('role:firm')->name('firm.applications.update-status');
    Route::post('aplications/{aplication}/notes',[AplicationController::class,'storeNote'])->middleware('role:firm')->name('firm.applications.store-note');
    Route::put('aplications/notes/{note}',[AplicationController::class,'updateNote'])->middleware('role:firm')->name('firm.applications.update-note');
    Route::delete('aplications/notes/{note}',[AplicationController::class,'deleteNote'])->middleware('role:firm')->name('firm.applications.delete-note');
    Route::get('acceptedApplications',[AplicationController::class,'acceptedApplications'])->middleware('role:firm')->name('firm.applications.acceptedApplications');
    Route::get('maybeApplications',[AplicationController::class,'maybeApplications'])->middleware('role:firm')->name('firm.applications.maybeApplications');
    Route::get('noApplications',[AplicationController::class,'noApplications'])->middleware('role:firm')->name('firm.applications.noApplications');
    Route::resource('projects',ProjectController::class)->middleware('role:firm');
    Route::resource('articles',ArticleController::class)->middleware('role:firm')->except('show');
    Route::put('firmForm',FirmController::class)->middleware('role:firm')->name('firm.update.form');
    Route::put('firmUpdateForm',AboutController::class)->middleware('role:firm')->name('firm.update.about.form');
    Route::put('firmBuy',FirmBuyController::class)->middleware('role:firm')->name('firm-buy-information.update');
    Route::get('/statistics',[StatisticController::class,'index'])->name('statistics.index')->middleware('role:firm');
    Route::get('/buy',[BuyController::class,'index'])->name('buy.index')->middleware('role:firm');
    Route::get('/buydetail',[BuyController::class,'detail'])->name('buy.detail')->middleware('role:firm');
    Route::get('/points',[PoinstController::class,'index'])->name('points.index')->middleware('role:firm');
    Route::post('/addMoreRecruits/{project}',[ProjectController::class,'addMoreRecruits'])->name('firm.addMoreRecruits')->middleware('role:firm');
    Route::post('/changeRecruit/{project}',[ProjectController::class,'changeRecruit'])->name('firm.changeRecruit')->middleware('role:firm');
//    CART
    Route::get('/buyAddToCart/{product}',[BuyController::class,'store'])->name('buy.store')->middleware('role:firm');
    Route::delete('/buyRemoveFromCart/{product}',[BuyController::class,'detailRemoveFromCart'])->name('buy.detailRemoveFromCart')->middleware('role:firm');
    Route::post('/buyIncrementCart/{product}/{qty}',[BuyController::class,'detailIncrementCart'])->name('buy.detailIncrementCart')->middleware('role:firm');
    Route::post('/buyDecrementCart/{product}/{qty}',[BuyController::class,'detailDecrementCart'])->name('buy.detailDecrementCart')->middleware('role:firm');
    Route::post('/makeOrder',[BuyController::class,'makeOrder'])->name('buy.order')->middleware('role:firm');
    Route::post('/addFoundation',[BuyController::class,'addFoundation'])->name('buy.addFoundation')->middleware('role:firm');
    Route::get('/paymentView',[BuyController::class,'paymentView'])->name('buy.paymentView')->middleware('role:firm');
    Route::get('/successView',[BuyController::class,'successView'])->name('buy.successView')->middleware('role:firm');
    Route::post('/changeToPoints/{product}/{points}',[BuyController::class,'changeToPoints'])->name('buy.change')->middleware('role:firm');

//    RECRUIT
    Route::resource('project-recruits',ProjectControllerRecruit::class)->parameters(['project-recruits' => 'project']);
    Route::resource('project-aplications-recruits',AplicationControllerRecruit::class)->parameters(['project-aplications-recruits' => 'aplication']);
    Route::get('project-aplications-recruits/{aplication}/recruitmentView',[AplicationControllerRecruit::class,'recruitmentView'])->name('project-aplications-recruits.recruitmentView');
    Route::get('getChildsCategory/{parent}',[ProjectControllerRecruit::class,'getChildsCategory'])->middleware('role:recruit')->name('getChildsCategory');
//    WORKER
    Route::put('workerForm',WorkerDetailController::class)->middleware('role:worker')->name('worker.update.form');
});
Route::post('temporary/upload',FileUploadController::class)->name('temporary.upload');
Route::delete('temporary/delete',DeleteTemporaryFileController::class)->name('temporary.delete');
Route::post('temporary/poster',DeletePosterFile::class)->name('temporary.delete.poster');


require __DIR__.'/socialstream.php';
require __DIR__.'/front.php';
