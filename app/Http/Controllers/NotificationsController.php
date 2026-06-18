<?php

namespace App\Http\Controllers;

use App\Mail\MissingPositionReplyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class NotificationsController extends Controller
{
    /**
     * Wyświetla listę powiadomień zalogowanego użytkownika.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->paginate(10);

        // Przygotowanie danych powiadomień - zostawiamy tłumaczenie frontendowi
        $formattedNotifications = $notifications->through(function ($notification) {
            $data = $notification->data;

            // Ustaw domyślne klucze, jeśli nie istnieją (dla starych powiadomień)
            if (! isset($data['title'])) {
                $data['title'] = 'translate.newNotification';
            }

            if (! isset($data['message']) && isset($data['aplication'])) {
                $data['message'] = 'translate.applicationNotificationMessage';
            }

            $notification->data = $data;

            return $notification;
        });

        return Inertia::render('Notifications/Index', [
            'notifications' => $formattedNotifications,
        ]);
    }

    /**
     * Oznacza powiadomienie jako przeczytane.
     */
    public function markAsRead(Request $request, string $id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();
    }

    /**
     * Oznacza wszystkie powiadomienia jako przeczytane.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function markAllAsRead(Request $request)
    {
        Auth::user()->unreadNotifications->markAsRead();

        return redirect()->back();
    }

    /**
     * Pobiera liczbę nieprzeczytanych powiadomień.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCount()
    {
        $unreadCount = Auth::user()->unreadNotifications()->count();

        return redirect()->back();
    }

    /**
     * Wysyła e-mail w odpowiedzi na zgłoszenie brakującego stanowiska.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function replyEmail(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'notification_id' => 'required|exists:notifications,id',
        ]);

        $notification = Auth::user()->notifications()->findOrFail($validated['notification_id']);

        // W rzeczywistej aplikacji tutaj pobralibyśmy e-mail użytkownika, który zgłosił brakujące stanowisko.
        // Zakładamy, że e-mail może być przekazany w danych powiadomienia lub musimy go znaleźć.
        // Na potrzeby zadania używamy przykładowego odbiorcy lub wyciągamy z danych jeśli tam jest.
        $recipient = $notification->data['user_email'] ?? 'kontakt@work4you.global'; // Domyślny fallback

        Mail::to($recipient)->send(new MissingPositionReplyMail($validated['subject'], $validated['message']));

        // Aktualizacja statusu w powiadomieniu
        $data = $notification->data;
        $data['email_sent'] = true;
        $data['email_sent_at'] = now()->toDateTimeString();
        $data['email_sent_count'] = ($data['email_sent_count'] ?? 0) + 1;
        $notification->data = $data;
        $notification->save();

        session()->flash('flash.banner', 'E-mail został wysłany.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }
}
