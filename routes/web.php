<?php

use App\Http\Controllers\Admin\FoundationController;
use App\Http\Controllers\Admin\QuestionAcceptController;
use App\Http\Controllers\BannerUploadController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\CategoryControllerInvoke;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Firm\AboutController;
use App\Http\Controllers\Firm\AplicationController;
use App\Http\Controllers\Firm\ArticleController;
use App\Http\Controllers\Firm\BuyController;
use App\Http\Controllers\Firm\CandidateQuestionController;
use App\Http\Controllers\Firm\FirmController;
use App\Http\Controllers\Firm\InvoiceController;
use App\Http\Controllers\Firm\OrderController;
use App\Http\Controllers\Firm\PoinstController;
use App\Http\Controllers\Firm\PremiumCertificateController;
use App\Http\Controllers\Firm\ProjectController;
use App\Http\Controllers\Firm\RecruitController;
use App\Http\Controllers\Firm\StatisticController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Global\DeletePosterFile;
use App\Http\Controllers\Global\DeleteTemporaryFileController;
use App\Http\Controllers\Global\ExternalResponseController;
use App\Http\Controllers\Global\FileUploadController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Recruit\AplicationController as AplicationControllerRecruit;
use App\Http\Controllers\Recruit\ProjectController as ProjectControllerRecruit;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\Worker\WorkerController;
use App\Http\Controllers\Worker\WorkerDetailController;
use App\Http\Resources\PageResource;
use App\Models\Country;
use App\Models\Page;
use App\Services\DictionaryService;
use App\Services\Helper;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia; // to jest instancja, nie fasada

Route::mediaLibrary();
Route::post('/stripe/webhook', [BuyController::class, 'stripeWebhook'])->name('buy.stripe.webhook');
Route::post('/upload-image', function (Request $request) { // <- instancja!
    $request->validate([
        'image' => 'required|image|max:5120',
    ]);
    $file = $request->file('image');
    if ($file && $file->isValid()) {
        $filename = Str::random(20).'.'.$file->getClientOriginalExtension();
        $path = $file->storeAs('/images', $filename, 'public');

        return response()->json([
            'url' => Storage::url($path),
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

Route::get('/start', [FrontController::class, 'Landing'])->name('landing');

Route::get('/', function (DictionaryService $dictionaryService) {
    $page = Page::findOrFail(1);
    $countries = (new Helper)->makeCountriesToSelectHasProjects();
    $imageUrl = Country::getRandomImageFromBrowserLocale();

    return Inertia::render('Welcome', [
        'page' => new PageResource($page),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'countries' => $countries,
        'imageUrl' => $imageUrl,
        'distanceOptions' => $dictionaryService->getDistanceOptions(),
        'newsletterAgreements' => \App\Models\Agreement::where('type', 'newsletter')->where('is_active', true)->get(['id', 'description', 'is_required']),
    ]);
})->name('front');

Route::get('/external-response', [ExternalResponseController::class, 'showResponseView'])
    ->name('external.response');

Route::post('/external-response/answer', [ExternalResponseController::class, 'storeAnswer'])
    ->name('external.answer');

Route::get('/thank-you/{app?}/{decision?}', function () {
    return Inertia::render('External/ThankYou')->with(['app' => request()->app, 'decision' => request()->decision]);
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

    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::post('/support/tickets', [SupportController::class, 'store'])
        ->name('support.tickets.store');
    Route::resource('recruits', RecruitController::class)->middleware('role:firm');
    Route::delete('recruits/{recruit}/photo', [RecruitController::class, 'destroyPhoto'])->name('recruits.photo.destroy')->middleware('role:firm');
    Route::resource('orders', OrderController::class)->middleware('role:firm')->only([
        'index',
    ]);
    Route::resource('invoices', InvoiceController::class)->middleware('role:firm')->only([
        'index', 'update',
    ]);
    Route::get('invoicesDownload/{invoice}', [InvoiceController::class, 'downloadPDF'])->middleware('role:firm|admin')->name('invoicesDownload');
    Route::get('invoicesCorrectionDownload/{correction}', [InvoiceController::class, 'downloadCorrection'])->middleware('role:firm|admin')->name('invoicesCorrectionDownload');
    Route::get('ordersDownload/{order}', [OrderController::class, 'downloadPDF'])->middleware('role:firm|admin')->name('ordersDownload');
    Route::resource('aplications', AplicationController::class)->middleware('role:firm')->only('index', 'show');
    Route::post('applications/export', [AplicationController::class, 'export'])->middleware('role:firm')->name('firm.applications.export');
    Route::put('aplications/{aplication}/status', [AplicationController::class, 'updateStatus'])->middleware('role:firm')->name('firm.applications.update-status');
    Route::post('aplications/{aplication}/notes', [AplicationController::class, 'storeNote'])->middleware('role:firm')->name('firm.applications.store-note');
    Route::post('applications/{candidate}/save-answers', [AplicationController::class, 'saveAnswers'])->middleware('role:firm|admin')->name('candidate.save-answers');
    Route::post('applications/{candidate}/unlock-questions', [AplicationController::class, 'unlockQuestions'])->middleware('role:firm|admin')->name('candidate.unlock-questions');
    Route::post('firm/applications/{aplication}/create-candidate', [AplicationController::class, 'createCandidate'])->middleware('role:firm')->name('firm.applications.create-candidate');
    Route::put('aplications/notes/{note}', [AplicationController::class, 'updateNote'])->middleware('role:firm')->name('firm.applications.update-note');
    Route::delete('aplications/notes/{note}', [AplicationController::class, 'deleteNote'])->middleware('role:firm')->name('firm.applications.delete-note');
    Route::get('acceptedApplications', [AplicationController::class, 'acceptedApplications'])->middleware('role:firm')->name('firm.applications.acceptedApplications');
    Route::get('maybeApplications', [AplicationController::class, 'maybeApplications'])->middleware('role:firm')->name('firm.applications.maybeApplications');
    Route::get('noApplications', [AplicationController::class, 'noApplications'])->middleware('role:firm')->name('firm.applications.noApplications');
    Route::resource('projects', ProjectController::class)->middleware('role:firm');
    Route::get('projects/{project}/generator', [ProjectController::class, 'generatorData'])->middleware('role:firm|recruit')->name('projects.generator');
    Route::post('projects/{project}/generator', [ProjectController::class, 'generatorSave'])->middleware('role:firm|recruit')->name('projects.generator.save');
    Route::get('projects/getChildsCategory/{parent}', [ProjectController::class, 'getChildsCategory'])->middleware('role:firm')->name('projects.getChildsCategory');
    Route::post('/projects/{project}/duplicate', [ProjectController::class, 'duplicate'])->name('projects.duplicate');
    Route::resource('articles', ArticleController::class)->middleware('role:firm')->except('show');
    Route::post('/comments/{comment}/toggle-visibility', [ArticleController::class, 'toggleCommentVisibility'])->middleware('role:firm')
        ->name('comments.toggle-visibility');
    Route::put('firmForm', FirmController::class)->middleware('role:firm')->name('firm.update.form');
    Route::put('firmUpdateForm', AboutController::class)->middleware('role:firm')->name('firm.update.about.form');
    Route::get('/statistics', [StatisticController::class, 'index'])->name('statistics.index')->middleware('role:firm');
    Route::get('/buy', [BuyController::class, 'index'])->name('buy.index')->middleware('role:firm');
    Route::get('/buydetail', [BuyController::class, 'detail'])->name('buy.detail')->middleware('role:firm');
    Route::get('50/50', [BuyController::class, 'p50'])->middleware('role:firm')->name('firm.p50');
    Route::post('50/50', [BuyController::class, 'generate50'])->middleware('role:firm')->name('firm.generate50');
    Route::get('download/50/50', [BuyController::class, 'downloadPDF'])->middleware('role:firm')->name('firm.download50');
    Route::get('banners', [BuyController::class, 'banners'])->middleware('role:firm')->name('firm.banners');
    Route::get('featured-employer', [BuyController::class, 'featuredEmployer'])->middleware('role:firm')->name('firm.featuredEmployer');
    Route::get('social-media', [BuyController::class, 'socialMedia'])->middleware('role:firm')->name('firm.socialMedia');
    Route::post('banners', [BuyController::class, 'bannersStore'])->middleware('role:firm')->name('firm.banners.store');
    Route::get('/points', [PoinstController::class, 'index'])->name('points.index')->middleware('role:firm');
    Route::post('/addMoreRecruits/{project}', [ProjectController::class, 'addMoreRecruits'])->name('firm.addMoreRecruits')->middleware('role:firm');
    Route::post('/changeRecruit/{project}', [ProjectController::class, 'changeRecruit'])->name('firm.changeRecruit')->middleware('role:firm');
    Route::post('/changeRecruitApp/{aplication}', [ProjectController::class, 'changeRecruitApp'])->name('firm.changeRecruitApp')->middleware('role:firm');
    //    CART
    Route::get('/buyAddToCart/{product}', [BuyController::class, 'store'])->name('buy.store')->middleware('role:firm');
    Route::delete('/buyRemoveFromCart/{product}', [BuyController::class, 'detailRemoveFromCart'])->name('buy.detailRemoveFromCart')->middleware('role:firm');
    Route::post('/buyIncrementCart/{product}/{qty}', [BuyController::class, 'detailIncrementCart'])->name('buy.detailIncrementCart')->middleware('role:firm');
    Route::post('/buyDecrementCart/{product}/{qty}', [BuyController::class, 'detailDecrementCart'])->name('buy.detailDecrementCart')->middleware('role:firm');
    Route::post('/makeOrder', [BuyController::class, 'makeOrder'])->name('buy.order')->middleware('role:firm');
    Route::post('/stripe-checkout', [BuyController::class, 'stripeCheckout'])->name('buy.stripe-checkout')->middleware('role:firm');
    Route::post('/addFoundation', [BuyController::class, 'addFoundation'])->name('buy.addFoundation')->middleware('role:firm');
    Route::get('/paymentView', [BuyController::class, 'paymentView'])->name('buy.paymentView')->middleware('role:firm');
    Route::get('/successView', [BuyController::class, 'successView'])->name('buy.successView')->middleware('role:firm');
    Route::post('/changeToPoints/{product}/{points}', [BuyController::class, 'changeToPoints'])->name('buy.change')->middleware('role:firm');
    Route::post('/reservedProject', [BuyController::class, 'reservedProject'])->name('buy.reservedProject')->middleware('role:firm');

    // Trasy dla zarządzania pytaniami kandydatów
    Route::resource('candidate-questions', CandidateQuestionController::class)->middleware('role:firm');
    Route::put('candidate-questions/{candidateQuestion}/toggle-active', [CandidateQuestionController::class, 'toggleActive'])->name('candidate-questions.toggle-active')->middleware('role:firm');

    // Zarządzanie firmami zewnętrznymi
    Route::resource('external-companies', App\Http\Controllers\ExternalCompanyController::class)
        ->names('external-companies')
        ->middleware('role:firm');
    Route::resource('tags', App\Http\Controllers\Firm\TagController::class)->middleware('role:firm|recruit');
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
    Route::middleware(['role:firm|recruit|admin'])->group(function () {
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
    Route::resource('project-recruits', ProjectControllerRecruit::class)->parameters(['project-recruits' => 'project']);
    Route::post('/project-recruits/{project}/duplicate', [ProjectControllerRecruit::class, 'duplicate'])->name('project-recruits.duplicate');
    Route::post('/project-recruits/validate-step', [ProjectControllerRecruit::class, 'validateStep'])
        ->name('project-recruits.validate-step');
    Route::post('/projects/validate-step', [ProjectController::class, 'validateStep'])
        ->name('projects.validate-step');

    Route::resource('project-aplications-recruits', AplicationControllerRecruit::class)->parameters(['project-aplications-recruits' => 'aplication']);
    Route::put('project-aplications-recruits/{aplication}/status', [AplicationControllerRecruit::class, 'updateStatus'])->name('project-aplications-recruits.update-status');
    Route::get('project-aplications-recruits/{aplication}/recruitmentView', [AplicationControllerRecruit::class, 'recruitmentView'])->name('project-aplications-recruits.recruitmentView');
    Route::get('acceptedApplicationsRecruit', [AplicationControllerRecruit::class, 'acceptedApplications'])->name('project-aplications-recruits.acceptedApplications');
    Route::get('maybeApplicationsRecruit', [AplicationControllerRecruit::class, 'maybeApplications'])->name('project-aplications-recruits.maybeApplications');
    Route::get('noApplicationsRecruit', [AplicationControllerRecruit::class, 'noApplications'])->name('project-aplications-recruits.noApplications');
    Route::post('project-aplications-recruit/export', [AplicationControllerRecruit::class, 'export'])->middleware('role:recruit')->name('recruit.project-aplications-recruits.export');

    Route::post('project-aplications-recruits/{aplication}/notes', [AplicationControllerRecruit::class, 'storeNote'])->name('project-aplications-recruits.store-note');
    Route::put('project-aplications-recruits/notes/{note}', [AplicationControllerRecruit::class, 'updateNote'])->name('project-aplications-recruits.update-note');
    Route::delete('project-aplications-recruits/notes/{note}', [AplicationControllerRecruit::class, 'deleteNote'])->name('project-aplications-recruits.delete-note');
    Route::post('recruit/applications/{aplication}/create-candidate', [AplicationControllerRecruit::class, 'createCandidate'])->middleware('role:recruit')->name('recruit.applications.create-candidate');
    Route::post('/send-external-recruit', [\App\Http\Controllers\CandidateCvController::class, 'sendExternalRecruit'])->name('send.external.recruit');

    Route::get('getChildsCategory/{parent}', [ProjectControllerRecruit::class, 'getChildsCategory'])->middleware('role:recruit')->name('getChildsCategory');
    //    WORKER
    Route::put('workerForm', WorkerDetailController::class)->middleware('role:worker')->name('worker.update.form');
    Route::post('/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->middleware('auth')->name('comments.destroy');
    Route::get('/project-recruits/category-sub/{categoryId}', [ProjectControllerRecruit::class, 'getCategorySubForRecruit'])->name('project-recruits.category.sub');
    Route::get('/project-recruits/professions/{categorySubId}', [ProjectControllerRecruit::class, 'getProfessionsForRecruit'])->name('project-recruits.category.professions');
    Route::get('/project-recruits/positions/{professionId}', [ProjectControllerRecruit::class, 'getPositionsForRecruit'])->name('project-recruits.category.positions');

    //    ADMIN
    Route::middleware(['role:admin'])->name('admin.')->group(function () {
        Route::get('questions-accepts', [QuestionAcceptController::class, 'index'])->name('questions-accepts.index');
        Route::get('questions-accepts/{projectQuestion}', [QuestionAcceptController::class, 'show'])->name('questions-accepts.show');
        Route::delete('questions-accepts/{projectQuestion}', [QuestionAcceptController::class, 'destroy'])->name('questions-accepts.destroy');
        Route::put('questions-accepts/{projectQuestion}/accept', [QuestionAcceptController::class, 'accept'])->name('questions-accepts.accept');
        //        BANERY
        Route::get('banners-accepts', [\App\Http\Controllers\Admin\BannerAcceptController::class, 'index'])->name('banners-accepts.index');
        Route::get('banners-accepts/{banner}', [\App\Http\Controllers\Admin\BannerAcceptController::class, 'show'])->name('banners-accepts.show');
        Route::delete('banners-accepts/{banner}', [\App\Http\Controllers\Admin\BannerAcceptController::class, 'destroy'])->name('banners-accepts.destroy');
        Route::put('banners-accepts/{banner}/accept', [\App\Http\Controllers\Admin\BannerAcceptController::class, 'accept'])->name('banners-accepts.accept');

        //        ARTYKULY
        Route::get('articles-accepts', [\App\Http\Controllers\Admin\ArticleAcceptController::class, 'index'])->name('articles-accepts.index');
        Route::get('articles-accepts/{article}', [\App\Http\Controllers\Admin\ArticleAcceptController::class, 'show'])->name('articles-accepts.show');
        Route::delete('articles-accepts/{article}', [\App\Http\Controllers\Admin\ArticleAcceptController::class, 'destroy'])->name('articles-accepts.destroy');
        Route::put('articles-accepts/{article}/accept', [\App\Http\Controllers\Admin\ArticleAcceptController::class, 'accept'])->name('articles-accepts.accept');

        // SOCIAL MEDIA PROMOTION
        Route::get('social-media-promotions', [\App\Http\Controllers\Admin\SocialMediaPromotionController::class, 'index'])->name('social-media.index');
        Route::post('social-media-promotions/{changeProduct}/decrement', [\App\Http\Controllers\Admin\SocialMediaPromotionController::class, 'decrement'])->name('social-media.decrement');

        //        RYNEK PRACY
        Route::get('job-offers', [\App\Http\Controllers\Admin\JobOfferController::class, 'index'])->name('job-offers.index');
        Route::get('job-offers/export', [\App\Http\Controllers\Admin\JobOfferController::class, 'export'])->name('job-offers.export');
        Route::get('job-offers/{project}', [\App\Http\Controllers\Admin\JobOfferController::class, 'show'])->name('job-offers.show');
        Route::get('job-offers/{project}/edit', [\App\Http\Controllers\Admin\JobOfferController::class, 'edit'])->name('job-offers.edit');
        Route::put('job-offers/{project}', [\App\Http\Controllers\Admin\JobOfferController::class, 'update'])->name('job-offers.update');
        Route::delete('job-offers/{project}', [\App\Http\Controllers\Admin\JobOfferController::class, 'destroy'])->name('job-offers.destroy');
        Route::post('job-offers/validate-step', [\App\Http\Controllers\Admin\JobOfferController::class, 'validateStep'])->name('job-offers.validate-step');
        Route::post('job-offers/recruiters', [\App\Http\Controllers\Admin\JobOfferController::class, 'getRecruiters'])->name('job-offers.getRecruiters');
        Route::get('job-offers/cities/{country}', [\App\Http\Controllers\Admin\JobOfferController::class, 'getCities'])->name('job-offers.cities');
        Route::get('job-offers/getChildsCategory/{parent}', [\App\Http\Controllers\Admin\JobOfferController::class, 'getChildsCategory'])->name('job-offers.getChildsCategory');
        Route::post('job-offers/{project}/toggle-status', [\App\Http\Controllers\Admin\JobOfferController::class, 'toggleStatus'])->name('job-offers.toggle-status');

        Route::middleware(['can:super-admin-only'])->group(function () {
            Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
            Route::resource('industries', \App\Http\Controllers\Admin\IndustryController::class);
            Route::resource('agreements', \App\Http\Controllers\Admin\AgreementController::class);

            Route::get('countries', [\App\Http\Controllers\Admin\CountryController::class, 'index'])->name('countries.index');
            Route::get('countries/create', [\App\Http\Controllers\Admin\CountryController::class, 'create'])->name('countries.create');
            Route::post('countries', [\App\Http\Controllers\Admin\CountryController::class, 'store'])->name('countries.store');
            Route::get('countries/{country}/edit', [\App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('countries.edit');
            Route::put('countries/{country}', [\App\Http\Controllers\Admin\CountryController::class, 'update'])->name('countries.update');
            Route::delete('countries/{country}', [\App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('countries.destroy');

            Route::get('languages', [\App\Http\Controllers\Admin\LanguageController::class, 'index'])->name('languages.index');
            Route::get('languages/create', [\App\Http\Controllers\Admin\LanguageController::class, 'create'])->name('languages.create');
            Route::post('languages', [\App\Http\Controllers\Admin\LanguageController::class, 'store'])->name('languages.store');
            Route::get('languages/{language}/edit', [\App\Http\Controllers\Admin\LanguageController::class, 'edit'])->name('languages.edit');
            Route::put('languages/{language}', [\App\Http\Controllers\Admin\LanguageController::class, 'update'])->name('languages.update');
            Route::delete('languages/{language}', [\App\Http\Controllers\Admin\LanguageController::class, 'destroy'])->name('languages.destroy');

            Route::get('currencies', [\App\Http\Controllers\Admin\CurrencyController::class, 'index'])->name('currencies.index');
            Route::get('currencies/create', [\App\Http\Controllers\Admin\CurrencyController::class, 'create'])->name('currencies.create');
            Route::post('currencies', [\App\Http\Controllers\Admin\CurrencyController::class, 'store'])->name('currencies.store');
            Route::get('currencies/{currency}/edit', [\App\Http\Controllers\Admin\CurrencyController::class, 'edit'])->name('currencies.edit');
            Route::put('currencies/{currency}', [\App\Http\Controllers\Admin\CurrencyController::class, 'update'])->name('currencies.update');
            Route::delete('currencies/{currency}', [\App\Http\Controllers\Admin\CurrencyController::class, 'destroy'])->name('currencies.destroy');
        });

        //        ZGŁOSZENIA
        Route::get('tickets', [\App\Http\Controllers\Admin\TicketController::class, 'index'])->name('tickets.index');
        Route::get('tickets/export', [\App\Http\Controllers\Admin\TicketController::class, 'export'])->name('tickets.export');
        Route::post('tickets/{ticket}/mark-as-read', [\App\Http\Controllers\Admin\TicketController::class, 'markAsRead'])->name('tickets.markAsRead');

        //        BEZPIECZEŃSTWO
        Route::get('security/ip-email-blocks', [\App\Http\Controllers\Admin\IpEmailBlockController::class, 'index'])->name('security.ip-email-blocks.index');
        Route::post('security/ip-email-blocks', [\App\Http\Controllers\Admin\IpEmailBlockController::class, 'store'])->name('security.ip-email-blocks.store');
        Route::delete('security/ip-email-blocks/{ipEmailBlock}', [\App\Http\Controllers\Admin\IpEmailBlockController::class, 'destroy'])->name('security.ip-email-blocks.destroy');

        //        LOGI
        Route::get('logs', [\App\Http\Controllers\Admin\LogController::class, 'index'])->name('logs.index');
        Route::get('logs/download', [\App\Http\Controllers\Admin\LogController::class, 'download'])->name('logs.download');
        Route::delete('logs/clear', [\App\Http\Controllers\Admin\LogController::class, 'clear'])->name('logs.clear');

        //        FINANSE
        Route::middleware(['can:super-admin-only'])->group(function () {
            Route::get('finance/points', [\App\Http\Controllers\Admin\PointHistoryController::class, 'index'])->name('finance.points.index');
            Route::get('finance/points/export', [\App\Http\Controllers\Admin\PointHistoryController::class, 'export'])->name('finance.points.export');
            Route::delete('finance/points/{userId}', [\App\Http\Controllers\Admin\PointHistoryController::class, 'clearHistory'])->name('finance.points.clear');

            Route::get('finance/invoices', [\App\Http\Controllers\Admin\InvoiceController::class, 'index'])->name('finance.invoices.index');
            Route::get('finance/invoices/{invoice}/correction', [\App\Http\Controllers\Admin\InvoiceController::class, 'createCorrection'])->name('finance.invoices.correction.create');
            Route::post('finance/invoices/{invoice}/correction', [\App\Http\Controllers\Admin\InvoiceController::class, 'storeCorrection'])->name('finance.invoices.correction.store');
            Route::get('finance/corrections/{correction}/download', [\App\Http\Controllers\Admin\InvoiceController::class, 'downloadCorrection'])->name('finance.corrections.download');
            Route::delete('finance/corrections/{correction}', [\App\Http\Controllers\Admin\InvoiceController::class, 'destroyCorrection'])->name('finance.corrections.destroy');
        });

        //        APLIKACJE
        Route::get('aplicationsAdmin', [\App\Http\Controllers\Admin\AplicationController::class, 'index'])->name('aplicationsA.index');
        Route::post('aplicationsAdmin/applications/export/{form}', [App\Http\Controllers\Admin\AplicationController::class, 'export'])
            ->name('aplicationsA.export');

        //        ADMIN BANNERS
        Route::resource('admin-banners', \App\Http\Controllers\Admin\AdminBannerController::class);
        Route::post('admin-banners/{adminBanner}/toggle', [\App\Http\Controllers\Admin\AdminBannerController::class, 'toggle'])->name('admin-banners.toggle');

        //        STATYSTYKI
        Route::get('statisticsAdmin', [\App\Http\Controllers\Admin\StatisticsController::class, 'index'])->name('statistics.index');
        Route::get('statisticsAdmin/charts', [\App\Http\Controllers\Admin\StatisticsController::class, 'charts'])->name('statistics.charts');
        Route::get('statisticsAdmin/card-stats', [\App\Http\Controllers\Admin\StatisticsController::class, 'cardStats'])->name('statistics.card-stats');
        //        PARTNERZY
        Route::get('firms', [App\Http\Controllers\Admin\FirmController::class, 'index'])->name('firms.index');
        Route::get('firms/export', [App\Http\Controllers\Admin\FirmController::class, 'export'])->name('firms.export');
        Route::get('firms/{user}', [App\Http\Controllers\Admin\FirmController::class, 'show'])->name('firms.show');
        Route::get('firms/{user}/edit', [App\Http\Controllers\Admin\FirmController::class, 'edit'])->name('firms.edit');
        Route::put('firms/{user}', [App\Http\Controllers\Admin\FirmController::class, 'update'])->name('firms.update');
        Route::post('firms/{user}/status', [App\Http\Controllers\Admin\FirmController::class, 'changeStatus'])->name('firms.changeStatus');
        Route::post('firms/{user}/verify-email', [App\Http\Controllers\Admin\FirmController::class, 'verifyEmail'])->name('firms.verifyEmail');
        Route::post('firms/{user}/credits', [App\Http\Controllers\Admin\FirmController::class, 'updateCredits'])->name('firms.updateCredits');
        Route::get('firms/{user}/credits', [App\Http\Controllers\Admin\FirmController::class, 'manageCredits'])->name('firms.manageCredits');
        Route::get('firms/{user}/offers', [App\Http\Controllers\Admin\FirmController::class, 'offers'])->name('firms.offers');
        Route::get('firms/{user}/recruiters', [App\Http\Controllers\Admin\FirmController::class, 'recruiters'])->name('firms.recruiters');

        //        FIRMY ZEWNĘTRZNE
        Route::get('admin-external-companies', [App\Http\Controllers\Admin\ExternalCompanyController::class, 'index'])->name('external-companies.index');
        Route::get('admin-external-companies/export', [App\Http\Controllers\Admin\ExternalCompanyController::class, 'export'])->name('external-companies.export');
        Route::get('admin-external-companies/{externalCompany}', [App\Http\Controllers\Admin\ExternalCompanyController::class, 'show'])->name('external-companies.show');
        Route::get('admin-external-companies/{externalCompany}/edit', [App\Http\Controllers\Admin\ExternalCompanyController::class, 'edit'])->name('external-companies.edit');
        Route::put('admin-external-companies/{externalCompany}', [App\Http\Controllers\Admin\ExternalCompanyController::class, 'update'])->name('external-companies.update');

        Route::resource('partners', \App\Http\Controllers\Admin\PartnerController::class);
        Route::put('partners/{partner}/toggle', [\App\Http\Controllers\Admin\PartnerController::class, 'toggle'])
            ->name('partners.toggle');

        //        UŻYTKOWNICY
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('workers', [App\Http\Controllers\Admin\WorkerController::class, 'index'])->name('workers.index');
            Route::get('workers/export', [App\Http\Controllers\Admin\WorkerController::class, 'export'])->name('workers.export');
            Route::get('workers/{user}/edit', [App\Http\Controllers\Admin\WorkerController::class, 'edit'])->name('workers.edit');
            Route::put('workers/{user}', [App\Http\Controllers\Admin\WorkerController::class, 'update'])->name('workers.update');
            Route::post('workers/{user}/block', [App\Http\Controllers\Admin\WorkerController::class, 'toggleBlock'])->name('workers.block');
            Route::post('workers/{user}/verify-email', [App\Http\Controllers\Admin\WorkerController::class, 'verifyEmail'])->name('workers.verifyEmail');

            Route::get('workers/{user}/evidence', [App\Http\Controllers\Admin\WorkerController::class, 'evidence'])->name('workers.evidence');
            Route::post('workers/{user}/evidence', [App\Http\Controllers\Admin\WorkerController::class, 'evidencesStore'])->name('workers.evidence.store');
            Route::put('workers/{user}/evidence/{evidence}', [App\Http\Controllers\Admin\WorkerController::class, 'evidencesUpdate'])->name('workers.evidence.update');
            Route::delete('workers/{user}/evidence/{evidence}', [App\Http\Controllers\Admin\WorkerController::class, 'evidencesDelete'])->name('workers.evidence.delete');

            Route::get('recruits', [App\Http\Controllers\Admin\RecruitController::class, 'index'])->name('recruits.index');
            Route::get('recruits/export', [App\Http\Controllers\Admin\RecruitController::class, 'export'])->name('recruits.export');
            Route::get('recruits/{user}/edit', [App\Http\Controllers\Admin\RecruitController::class, 'edit'])->name('recruits.edit');
            Route::put('recruits/{user}', [App\Http\Controllers\Admin\RecruitController::class, 'update'])->name('recruits.update');
            Route::post('recruits/{user}/block', [App\Http\Controllers\Admin\RecruitController::class, 'toggleBlock'])->name('recruits.block');
            Route::post('recruits/{user}/verify-email', [App\Http\Controllers\Admin\RecruitController::class, 'verifyEmail'])->name('recruits.verifyEmail');

            Route::get('admins', [\App\Http\Controllers\Admin\AdminsController::class, 'index'])->name('admins.index')->middleware(['can:super-admin-only']);
            Route::post('admins', [\App\Http\Controllers\Admin\AdminsController::class, 'store'])->name('admins.store')->middleware(['can:super-admin-only']);
            Route::post('admins/{user}/toggle-subadmin', [\App\Http\Controllers\Admin\AdminsController::class, 'toggleSubAdmin'])->name('admins.toggle-subadmin')->middleware(['can:super-admin-only']);
            Route::delete('admins/{user}', [\App\Http\Controllers\Admin\AdminsController::class, 'destroy'])->name('admins.destroy')->middleware(['can:super-admin-only']);
        });

        // Wsteczna kompatybilność dla paska bocznego (jeśli użyłem admin.workers.index)
        Route::get('workers', [App\Http\Controllers\Admin\WorkerController::class, 'index'])->name('workers.index');
        Route::get('workers/export', [App\Http\Controllers\Admin\WorkerController::class, 'export'])->name('workers.export');
        Route::get('workers/{user}/edit', [App\Http\Controllers\Admin\WorkerController::class, 'edit'])->name('workers.edit');
        Route::put('workers/{user}', [App\Http\Controllers\Admin\WorkerController::class, 'update'])->name('workers.update');
        Route::post('workers/{user}/block', [App\Http\Controllers\Admin\WorkerController::class, 'toggleBlock'])->name('workers.block');
        Route::post('workers/{user}/verify-email', [App\Http\Controllers\Admin\WorkerController::class, 'verifyEmail'])->name('workers.verifyEmail');

        //        FUNDACJE
        Route::middleware(['can:super-admin-only'])->group(function () {
            Route::resource('foundations', FoundationController::class);
            Route::put('foundations/{foundation}/toggle', [FoundationController::class, 'toggle'])
                ->name('foundations.toggle');
        });

        Route::resource('promotion-services', App\Http\Controllers\Admin\PromotionServiceController::class)->except(['create', 'store', 'destroy', 'show']);
        Route::put('promotion-services/{promotion_service}/toggle', [App\Http\Controllers\Admin\PromotionServiceController::class, 'toggle'])
            ->name('promotion-services.toggle');

        Route::resource('admin-points', App\Http\Controllers\Admin\PointsController::class)
            ->parameters(['admin-points' => 'point']) // Teraz parametrem będzie {point}
            ->only(['index', 'edit', 'update']);
        Route::put('points/operation/{key}', [App\Http\Controllers\Admin\PointsController::class, 'updateOperation'])->name('points.update-operation');
        Route::put('points/operation/{key}/restore', [App\Http\Controllers\Admin\PointsController::class, 'restoreOperation'])->name('points.restore-operation');
        Route::put('points/{product}/toggle', [App\Http\Controllers\Admin\PointsController::class, 'toggle'])->name('points.toggle');

        Route::get('active-services', [\App\Http\Controllers\Admin\ActiveServiceController::class, 'index'])->name('active-services.index');
        Route::get('active-services/{activeService}/edit', [\App\Http\Controllers\Admin\ActiveServiceController::class, 'edit'])->name('active-services.edit');
        Route::post('active-services/{activeService}', [\App\Http\Controllers\Admin\ActiveServiceController::class, 'update'])->name('active-services.update');
        Route::get('active-services/{activeService}/download', [\App\Http\Controllers\Admin\ActiveServiceController::class, 'downloadPdf'])->name('active-services.download');
        Route::get('foundations/getChildsCategory/{parent}', [FoundationController::class, 'getChildsCategory'])->name('getChildsCategory');

        Route::put('aplicationsAdmin/{aplication}/status', [App\Http\Controllers\Admin\AplicationController::class, 'updateStatus'])->name('aplicationsA.update-status');
        Route::post('aplicationsAdmin/{aplication}/notes', [App\Http\Controllers\Admin\AplicationController::class, 'storeNote'])->name('aplicationsA.store-note');
        Route::get('aplicationsAdmin/show/{aplication}', [App\Http\Controllers\Admin\AplicationController::class, 'show'])->name('aplicationsA.show');
        Route::get('aplicationsAdmin/recruits/{firmId}', [App\Http\Controllers\Admin\AplicationController::class, 'getRecruitsByFirm'])
            ->name('aplicationsA.recruits');
        Route::put('aplicationsAdmin/notes/{note}', [App\Http\Controllers\Admin\AplicationController::class, 'updateNote'])->name('aplicationsA.update-note');
        Route::delete('aplicationsAdmin/notes/{note}', [App\Http\Controllers\Admin\AplicationController::class, 'deleteNote'])->name('aplicationsA.delete-note');
        Route::get('acceptedApplicationsAdmin', [App\Http\Controllers\Admin\AplicationController::class, 'acceptedApplications'])->name('aplicationsA.acceptedApplications');
        Route::get('maybeApplicationsAdmin', [App\Http\Controllers\Admin\AplicationController::class, 'maybeApplications'])->name('aplicationsA.maybeApplications');
        Route::get('noApplicationsAdmin', [App\Http\Controllers\Admin\AplicationController::class, 'noApplications'])->name('aplicationsA.noApplications');

        // CMS (Strony publiczne)
        Route::get('cms', [\App\Http\Controllers\Admin\PageController::class, 'index'])->name('cms.index');
        Route::get('cms/{page}/edit', [\App\Http\Controllers\Admin\PageController::class, 'edit'])->name('cms.edit');
        Route::put('cms/{page}', [\App\Http\Controllers\Admin\PageController::class, 'update'])->name('cms.update');

        // Integracje
        Route::middleware(['can:super-admin-only'])->group(function () {
            Route::get('integrations', [\App\Http\Controllers\Admin\IntegrationController::class, 'edit'])->name('integrations.edit');
            Route::put('integrations', [\App\Http\Controllers\Admin\IntegrationController::class, 'update'])->name('integrations.update');

            // Ustawienia Główne
            Route::get('general-settings', [\App\Http\Controllers\Admin\GeneralSettingsController::class, 'edit'])->name('general.edit');
            Route::put('general-settings', [\App\Http\Controllers\Admin\GeneralSettingsController::class, 'update'])->name('general.update');

            // Statystyki wyszukiwarki
            Route::get('search-statistics', [\App\Http\Controllers\Admin\SearchStatisticsController::class, 'index'])->name('search-statistics.index');

            // Newsletter
            Route::get('newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
            Route::get('newsletter/export', [NewsletterController::class, 'export'])->name('newsletter.export');
        });
    });
    Route::middleware(['role:worker'])->name('worker.')->prefix('worker')->group(function () {
        Route::get('aplications', [WorkerController::class, 'aplications'])->name('aplications');
        Route::get('mycv', [WorkerController::class, 'myCv'])->name('myCv');
        Route::put('myCvUpdateCv/{selectedCv}', [WorkerController::class, 'myCvUpdateCv'])->name('myCvUpdateCv');
        Route::put('myCvUpdateBasic/{selectedCv}', [WorkerController::class, 'updateBasicInformation'])->name('myCvUpdateBasic');
        Route::get('aplication/{aplication}', [WorkerController::class, 'singleAplication'])->name('singleAplication');
    });
});
Route::post('temporary/upload', FileUploadController::class)->name('temporary.upload');
Route::delete('temporary/delete', DeleteTemporaryFileController::class)->name('temporary.delete');
Route::post('temporary/poster', DeletePosterFile::class)->name('temporary.delete.poster');

//Baner
Route::post('temporary/upload/banner', [BannerUploadController::class, 'upload'])->name('temporary.upload.banner');

Route::get('category/sub/{categoryId}', [FrontController::class, 'getCategorySub'])->name('category.sub');
Route::get('category/professions/{categorySubId}', [FrontController::class, 'getProfessions'])->name('category.professions');
Route::get('category/positions/{professionId}', [FrontController::class, 'getPositions'])->name('category.positions');

Route::get('/download/cv-audio/{id}', function ($id) {
    $app = App\Models\Aplication::findOrFail($id);
    if ($app->cvAudio) {
        return Storage::download($app->cvAudio->file_path);
    } elseif ($app->cvVideo) {
        return Storage::download($app->cvVideo->file_path);
    }
})->name('cv_audio.download');

require __DIR__.'/socialstream.php';
require __DIR__.'/front.php';
