<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Foundation;
use App\Models\Order;
use App\Models\PremiumCertificateHistory;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class PremiumCertificateController extends Controller
{
    public function show()
    {
        $firm = auth()->user()->firm;
        $foundations = Order::where('user_id', auth()->id())->latest()->first()?->foundation;

        $certificateHistory = $firm->premiumCertificateHistories()
            ->orderBy('generated_at', 'desc')
            ->get();

        return inertia('Firm/PremiumCertificate', [
            'certificateHistory' => $certificateHistory,
            'collectedPoints' => $firm->points,
            'currentLevel' => $firm->premium_certificate_level,
            'nextLevelPoints' => $this->getNextLevelPoints($firm->points),
            'certificatePath' => $firm->premium_certificate_path,
            'canGenerate' => $this->canGenerateNextLevel($firm),
            'foundations' => $foundations,
            'levelPoints' => config('premium.points_required'),
            'levelNames' => collect(config('premium.level_names'))->mapWithKeys(function ($translationKey, $level) {
                return [$level => __($translationKey)];
            })->all(),
            'levelColors' => config('premium.level_colors'),
        ]);
    }

    public function generate(Request $request)
    {
        $request->validate([
            'selectedLevel' => 'required|integer|min:1|max:4',
        ]);

        $firm = auth()->user()->firm;
        $selectedLevel = $request->selectedLevel;

        // Sprawdź czy użytkownik ma wystarczająco punktów na wybrany poziom
        if ($firm->points < config('premium.points_required')[$selectedLevel]) {
            return back()->with([
                'flash.banner' => __('Nie masz wystarczającej liczby punktów na wybrany poziom'),
                'flash.bannerStyle' => 'danger',
            ]);
        }

        // Oblicz ile punktów należy odjąć
        $pointsToDeduct = config('premium.points_required')[$selectedLevel];

        $templates = [
            1 => 'templates.pdf.premium-bronze',
            2 => 'templates.pdf.premium-silver',
            3 => 'templates.pdf.premium-gold',
            4 => 'templates.pdf.premium-diamond'
        ];

        $amount = config('premium.amount')[$selectedLevel];

        if (!isset($templates[$selectedLevel])) {
            return back()->with([
                'flash.banner' => __('Nieprawidłowy poziom certyfikatu'),
                'flash.bannerStyle' => 'danger',
            ]);
        }

        $pdf = PDF::loadView($templates[$selectedLevel], [
            'firm' => $firm,
            'level' => $selectedLevel,
            'date' => now()->format('d.m.Y'),
        ])->setPaper('a4', 'landscape');

        $fileName = 'premium_certificate_' . $firm->id . '_' . time() . '.pdf';
        $path = 'certificates/' . $fileName;

        Storage::disk('local')->put($path, $pdf->output());

        // Używamy już wcześniej obliczonej wartości pointsToDeduct
        $remainingPoints = $firm->points - $pointsToDeduct;

        $firm->update([
            'premium_certificate_path' => $path,
            'premium_certificate_level' => $selectedLevel,
            'points' => max(0, $remainingPoints) // zachowaj nadwyżkę punktów
        ]);

        // Zapisz historię certyfikatu
        $firm->premiumCertificateHistories()->create([
            'certificate_path' => $path,
            'level' => $selectedLevel,
            'amount' => $amount ?? NULL, // Pusta kwota do uzupełnienia w przyszłości
            'generated_at' => now(),
        ]);

        return to_route('firm.premium-certificate.show')->with([
            'flash.banner' => __('Certyfikat został wygenerowany'),
            'flash.bannerStyle' => 'success',
        ]);
    }

    private function getNextLevelPoints($currentPoints)
    {
        foreach (config('premium.points_required') as $level => $points) {
            if ($currentPoints < $points) {
                return $points;
            }
        }
        return null;
    }

    private function canGenerateNextLevel($firm)
    {
        // Sprawdź, czy użytkownik ma wystarczająco punktów na jakikolwiek poziom
        foreach (config('premium.points_required') as $level => $requiredPoints) {
            if ($firm->points >= $requiredPoints) {
                return true;
            }
        }
        return false;
    }

    public function download()
    {
        $firm = auth()->user()->firm;
        if (!$firm->premium_certificate_path) {
            return back()->with([
                'flash.banner' => __('Certyfikat nie został jeszcze wygenerowany'),
                'flash.bannerStyle' => 'danger',
            ]);
        }
        $existFile = Storage::disk('local')->exists($firm->premium_certificate_path);
        if ($existFile) {
            return response()->download(storage_path('app/'.$firm->premium_certificate_path));
        } else{
            abort(404);
        }
    }

    public function downloadFromList(PremiumCertificateHistory $history)
    {
        $existFile = Storage::disk('local')->exists($history->certificate_path);
        if ($existFile) {
            return response()->download(storage_path('app/'.$history->certificate_path));
        } else{
            abort(404);
        }
    }

    public function list(Request $request)
    {
        $query = PremiumCertificateHistory::where('firm_id', auth()->user()->id);

        if ($request->filled('from')) {
            $query->whereDate('generated_at', '>=', $request->from);
        }

        if ($request->filled('to')) {
            $query->whereDate('generated_at', '<=', $request->to);
        }

        $histories = $query
            ->orderByDesc('generated_at')
            ->paginate(10)
            ->withQueryString(); // zachowuje filtry przy paginacji

        $totalAmount = $query->sum('amount');

        return inertia('Firm/PremiumCertificateList', [
            'histories' => $histories,
            'levelNames' => collect(config('premium.level_names'))->mapWithKeys(function ($translationKey, $level) {
                return [$level => __($translationKey)];
            }),
            'filters' => [
                'from' => $request->from,
                'to' => $request->to,
            ],
            'totalAmount' => $totalAmount,
        ]);
    }
}
