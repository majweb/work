<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\CategoryControllerInvoke;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Firm\PremiumCertificateController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Global\ExternalResponseController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NewsletterController;
use App\Models\Country;
use App\Services\Helper;
use Illuminate\Support\Facades\Route;

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Admin\QuestionAcceptController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Firm\AboutController;
use App\Http\Controllers\Firm\AplicationController;
use App\Http\Controllers\Firm\ArticleController;
use App\Http\Controllers\Firm\BuyController;
use App\Http\Controllers\Firm\CandidateQuestionController;
use App\Http\Controllers\ExternalCompanyController;
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
use App\Models\ProjectQuestion;
use Barryvdh\DomPDF\Facade\Pdf;
use Inertia\Inertia;
use Illuminate\Http\Request; // to jest instancja, nie fasada

Route::mediaLibrary();

Route::post('/upload-image', function (Request $request) { // <- instancja!
    $request->validate([
        'image' => 'required|image|max:5120',
    ]);
    $file = $request->file('image');
    if ($file && $file->isValid()) {
        $filename = Str::random(20) . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('/images', $filename,'public');
        return response()->json([
            'url' => Storage::url($path)
        ]);
    }
    return response()->json(['error' => 'Niepoprawny plik'], 400);
});


Route::get('/moje', function () {
    return inertia()->render('Moje');
});
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/test', function () {
    $unsupportedLanguages = ['am', 'ps', 'bn', 'dz', 'zh', 'ka', 'ja', 'km', 'ko', 'dv', 'th'];

    if (in_array(app()->getLocale(), $unsupportedLanguages)) {
        $lang = 'en';
    }


    $pdf = Pdf::loadView('template', ['data' => 'Dane dla PDF']);
    return $pdf->stream();
});

Route::get('/cities/{countryCode}', LocationController::class)
    ->name('cities.byCountry');
Route::get('/categories/{countryCode}', CategoryControllerInvoke::class)
    ->name('categories.byCountry');

Route::get('/', function () {
    $page = Page::whereId(1)->first();
    $imageUrl = Country::getRandomImageFromBrowserLocale();
    $countries = (new Helper())->makeCountriesToSelectHasProjects();

    return Inertia::render('Welcome', [
        'page' => new PageResource($page),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'imageUrl' => $imageUrl,
        'countries' => $countries,
    ]);
})->name('front');




Route::get('/external-response', [ExternalResponseController::class, 'showResponseView'])
    ->name('external.response');

Route::post('/external-response/answer', [ExternalResponseController::class, 'storeAnswer'])
    ->name('external.answer');

Route::get('/thank-you/{app?}/{decision?}', function () {
    return Inertia::render('External/ThankYou')->with(['app'=>request()->app,'decision'=>request()->decision]);
})->name('thank.you');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('logged')->group(function () {

    Route::get('/notifications', [\App\Http\Controllers\NotificationsController::class, 'index'])->name('notifications.index');
    Route::post('/notifications/{id}/mark-as-read', [\App\Http\Controllers\NotificationsController::class, 'markAsRead'])->name('notifications.markAsRead');
    Route::post('/notifications/mark-all-as-read', [\App\Http\Controllers\NotificationsController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');
    Route::get('/notifications/count', [\App\Http\Controllers\NotificationsController::class, 'getCount'])->name('notifications.count');



    // Trasa do synchronizacji istniejących aplikacji z kandydatami
    Route::get('/sync-applications', [\App\Http\Controllers\BatchProcessController::class, 'syncExistingApplicationsWithCandidates'])
        ->middleware('role:admin')
        ->name('sync.applications.candidates');
    Route::get('/dashboard', function (MonthlyUsersChart $chart) {

        $countQuestions = ProjectQuestion::whereNull('accepted')->count();
        return inertia()->render('Dashboard',[
            'chart' => $chart->build(),
            'countQuestions'=>$countQuestions
        ]);
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
    Route::post('applications/export', [AplicationController::class, 'export'])->middleware('role:firm')->name('firm.applications.export');
    Route::put('aplications/{aplication}/status',[AplicationController::class,'updateStatus'])->middleware('role:firm')->name('firm.applications.update-status');
    Route::post('aplications/{aplication}/notes',[AplicationController::class,'storeNote'])->middleware('role:firm')->name('firm.applications.store-note');
    Route::post('applications/{candidate}/save-answers', [AplicationController::class, 'saveAnswers'])->middleware('role:firm')->name('candidate.save-answers');
    Route::post('applications/{candidate}/unlock-questions', [AplicationController::class, 'unlockQuestions'])->middleware('role:firm')->name('candidate.unlock-questions');
    Route::post('applications/{aplication}/create-candidate', [AplicationController::class, 'createCandidate'])->middleware('role:firm')->name('firm.applications.create-candidate');
    Route::put('aplications/notes/{note}',[AplicationController::class,'updateNote'])->middleware('role:firm')->name('firm.applications.update-note');
    Route::delete('aplications/notes/{note}',[AplicationController::class,'deleteNote'])->middleware('role:firm')->name('firm.applications.delete-note');
    Route::get('acceptedApplications',[AplicationController::class,'acceptedApplications'])->middleware('role:firm')->name('firm.applications.acceptedApplications');
    Route::get('maybeApplications',[AplicationController::class,'maybeApplications'])->middleware('role:firm')->name('firm.applications.maybeApplications');
    Route::get('noApplications',[AplicationController::class,'noApplications'])->middleware('role:firm')->name('firm.applications.noApplications');
    Route::resource('projects',ProjectController::class)->middleware('role:firm');
    Route::resource('articles',ArticleController::class)->middleware('role:firm')->except('show');
    Route::post('/comments/{comment}/toggle-visibility', [ArticleController::class, 'toggleCommentVisibility'])->middleware('role:firm')
        ->name('comments.toggle-visibility');
    Route::put('firmForm',FirmController::class)->middleware('role:firm')->name('firm.update.form');
    Route::put('firmUpdateForm',AboutController::class)->middleware('role:firm')->name('firm.update.about.form');
    Route::put('firmBuy',FirmBuyController::class)->middleware('role:firm')->name('firm-buy-information.update');
    Route::get('/statistics',[StatisticController::class,'index'])->name('statistics.index')->middleware('role:firm');
    Route::get('/buy',[BuyController::class,'index'])->name('buy.index')->middleware('role:firm');
    Route::get('/buydetail',[BuyController::class,'detail'])->name('buy.detail')->middleware('role:firm');
    Route::get('50/50',[BuyController::class,'p50'])->middleware('role:firm')->name('firm.p50');
    Route::post('50/50',[BuyController::class,'generate50'])->middleware('role:firm')->name('firm.generate50');
    Route::get('download/50/50',[BuyController::class,'downloadPDF'])->middleware('role:firm')->name('firm.download50');
    Route::get('banners',[BuyController::class,'banners'])->middleware('role:firm')->name('firm.banners');
    Route::post('banners',[BuyController::class,'bannersStore'])->middleware('role:firm')->name('firm.banners.store');
    Route::get('/points',[PoinstController::class,'index'])->name('points.index')->middleware('role:firm');
    Route::post('/addMoreRecruits/{project}',[ProjectController::class,'addMoreRecruits'])->name('firm.addMoreRecruits')->middleware('role:firm');
    Route::post('/changeRecruit/{project}',[ProjectController::class,'changeRecruit'])->name('firm.changeRecruit')->middleware('role:firm');
    Route::post('/changeRecruitApp/{aplication}',[ProjectController::class,'changeRecruitApp'])->name('firm.changeRecruitApp')->middleware('role:firm');
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
    Route::post('/reservedProject',[BuyController::class,'reservedProject'])->name('buy.reservedProject')->middleware('role:firm');

    // Trasy dla zarządzania pytaniami kandydatów
    Route::resource('candidate-questions', CandidateQuestionController::class)->middleware('role:firm');
    Route::put('candidate-questions/{candidateQuestion}/toggle-active', [CandidateQuestionController::class, 'toggleActive'])->name('candidate-questions.toggle-active')->middleware('role:firm');

    // Zarządzanie firmami zewnętrznymi
    Route::resource('external-companies', App\Http\Controllers\ExternalCompanyController::class)->middleware('role:firm');
    Route::resource('tags', App\Http\Controllers\Firm\TagController::class)->middleware('role:firm');
Route::middleware(['auth', 'verified', 'role:firm'])->group(function () {
    Route::get('/premium-certificate', [PremiumCertificateController::class, 'show'])
        ->name('firm.premium-certificate.show');
    Route::post('/premium-certificate/generate', [PremiumCertificateController::class, 'generate'])
        ->name('firm.premium-certificate.generate');
    Route::get('/premium-certificate/download', [PremiumCertificateController::class, 'download'])
        ->name('firm.premium-certificate.download');
    Route::get('/premium-certificate/downloadFromList/{history}', [PremiumCertificateController::class, 'downloadFromList'])
        ->name('firm.premium-certificate.downloadFromList');
    Route::get('/premium-certificate/list', [PremiumCertificateController::class, 'list'])
        ->name('firm.premium-certificate.list');



});
    // Trasy dla kandydatów
    Route::middleware(['role:firm'])->group(function () {
            Route::get('/candidates', [CandidatesController::class, 'index'])->name('candidates.index');
            Route::get('/candidates/{candidate}', [CandidatesController::class, 'show'])->name('candidates.show');
            Route::get('/candidates/{candidate}/evidence', [CandidatesController::class, 'evidence'])->name('candidates.evidence');
            Route::post('/candidates/{candidate}/evidence', [CandidatesController::class, 'evidencesStore'])->name('candidates.evidence.store');
            Route::delete('/candidates/{candidate}/evidence/{evidence}', [CandidatesController::class, 'evidencesDelete'])->name('candidates.evidence.delete');
            Route::put('/candidates/{candidate}/evidence/{evidence}', [CandidatesController::class, 'evidencesUpdate'])->name('candidates.evidence.update');
            Route::get('/candidates/{candidate}/tags', [CandidatesController::class, 'getTags'])->name('candidates.getTags');
            Route::post('/candidates/{candidate}/tags', [CandidatesController::class, 'saveTags'])->name('candidates.saveTags');

        // Zarządzanie CV kandydatów
            Route::post('/candidate-cv/upload', [\App\Http\Controllers\CandidateCvController::class, 'uploadCv'])->name('candidate-cv.upload');
            Route::post('/candidate-cv/{candidate}/save', [\App\Http\Controllers\CandidateCvController::class, 'saveCv'])->name('candidate-cv.save');
            Route::delete('/candidate-cv/{candidate}', [\App\Http\Controllers\CandidateCvController::class, 'deleteCv'])->name('candidate-cv.delete');
            // Wysyłka aplikacji do firm zewnetrznych
            Route::post('/send-external', [\App\Http\Controllers\CandidateCvController::class, 'sendExternal'])->name('send.external');


    });
//    RECRUIT
    Route::resource('project-recruits',ProjectControllerRecruit::class)->parameters(['project-recruits' => 'project']);
    Route::post('/project-recruits/{project}/duplicate', [ProjectControllerRecruit::class, 'duplicate'])->name('project-recruits.duplicate');


    Route::resource('project-aplications-recruits',AplicationControllerRecruit::class)->parameters(['project-aplications-recruits' => 'aplication']);
    Route::get('project-aplications-recruits/{aplication}/recruitmentView',[AplicationControllerRecruit::class,'recruitmentView'])->name('project-aplications-recruits.recruitmentView');
    Route::get('acceptedApplicationsRecruit',[AplicationControllerRecruit::class,'acceptedApplications'])->name('project-aplications-recruits.acceptedApplications');
    Route::get('maybeApplicationsRecruit',[AplicationControllerRecruit::class,'maybeApplications'])->name('project-aplications-recruits.maybeApplications');
    Route::get('noApplicationsRecruit',[AplicationControllerRecruit::class,'noApplications'])->name('project-aplications-recruits.noApplications');
    Route::post('project-aplications-recruit/export', [AplicationControllerRecruit::class, 'export'])->middleware('role:recruit')->name('recruit.project-aplications-recruits.export');

    Route::post('project-aplications-recruits/{aplication}/notes',[AplicationControllerRecruit::class,'storeNote'])->name('project-aplications-recruits.store-note');
    Route::put('project-aplications-recruits/notes/{note}',[AplicationControllerRecruit::class,'updateNote'])->name('project-aplications-recruits.update-note');
    Route::delete('project-aplications-recruits/notes/{note}',[AplicationControllerRecruit::class,'deleteNote'])->name('project-aplications-recruits.delete-note');
    Route::post('applications/{aplication}/create-candidate', [AplicationControllerRecruit::class, 'createCandidate'])->middleware('role:recruit')->name('recruit.applications.create-candidate');
    Route::post('/send-external-recruit', [\App\Http\Controllers\CandidateCvController::class, 'sendExternalRecruit'])->name('send.external.recruit');


    Route::get('getChildsCategory/{parent}',[ProjectControllerRecruit::class,'getChildsCategory'])->middleware('role:recruit')->name('getChildsCategory');
    //    WORKER
    Route::put('workerForm',WorkerDetailController::class)->middleware('role:worker')->name('worker.update.form');




    Route::post('/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->middleware('auth')->name('comments.destroy');


    //    ADMIN
    Route::middleware(['role:admin'])->name('admin.')->group(function () {
        Route::get('questions-accepts',[QuestionAcceptController::class,'index'])->name('questions-accepts.index');
        Route::get('questions-accepts/{projectQuestion}',[QuestionAcceptController::class,'show'])->name('questions-accepts.show');
        Route::delete('questions-accepts/{projectQuestion}',[QuestionAcceptController::class,'destroy'])->name('questions-accepts.destroy');
        Route::put('questions-accepts/{projectQuestion}/accept', [QuestionAcceptController::class, 'accept'])->name('questions-accepts.accept');
//        APLIKACJE
        Route::get('aplicationsAdmin',[\App\Http\Controllers\Admin\AplicationController::class,'index'])->name('aplicationsA.index');
        Route::post('aplicationsAdmin/applications/export/{form}', [App\Http\Controllers\Admin\AplicationController::class, 'export'])
            ->name('aplicationsA.export');


        Route::put('aplicationsAdmin/{aplication}/status',[App\Http\Controllers\Admin\AplicationController::class,'updateStatus'])->name('aplicationsA.update-status');
        Route::post('aplicationsAdmin/{aplication}/notes',[App\Http\Controllers\Admin\AplicationController::class,'storeNote'])->name('aplicationsA.store-note');
        Route::get('aplicationsAdmin/show/{aplication}',[App\Http\Controllers\Admin\AplicationController::class,'show'])->name('aplicationsA.show');
        Route::put('aplicationsAdmin/notes/{note}',[App\Http\Controllers\Admin\AplicationController::class,'updateNote'])->name('aplicationsA.update-note');
        Route::delete('aplicationsAdmin/notes/{note}',[App\Http\Controllers\Admin\AplicationController::class,'deleteNote'])->name('aplicationsA.delete-note');
        Route::get('acceptedApplicationsAdmin',[App\Http\Controllers\Admin\AplicationController::class,'acceptedApplications'])->name('aplicationsA.acceptedApplications');
        Route::get('maybeApplicationsAdmin',[App\Http\Controllers\Admin\AplicationController::class,'maybeApplications'])->name('aplicationsA.maybeApplications');
        Route::get('noApplicationsAdmin',[App\Http\Controllers\Admin\AplicationController::class,'noApplications'])->name('aplicationsA.noApplications');
    });
});
Route::post('temporary/upload',FileUploadController::class)->name('temporary.upload');
Route::delete('temporary/delete',DeleteTemporaryFileController::class)->name('temporary.delete');
Route::post('temporary/poster',DeletePosterFile::class)->name('temporary.delete.poster');

Route::get('category/sub/{categoryId}', [FrontController::class, 'getCategorySub'])->name('category.sub');
Route::get('category/professions/{categorySubId}', [FrontController::class, 'getProfessions'])->name('category.professions');
Route::get('category/positions/{professionId}', [FrontController::class, 'getPositions'])->name('category.positions');

Route::get('/download/cv-audio/{id}', function ($id) {
    $app = App\Models\Aplication::findOrFail($id);
    if($app->cvAudio){
    return Storage::download($app->cvAudio->file_path);
    } elseif ($app->cvVideo){
        return Storage::download($app->cvVideo->file_path);
    }
})->name('cv_audio.download');


require __DIR__.'/socialstream.php';
require __DIR__.'/front.php';
