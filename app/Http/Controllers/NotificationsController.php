<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // Przygotowanie danych powiadomień z dodatkowymi informacjami
        $formattedNotifications = $notifications->through(function($notification) {
            $data = $notification->data;

            // Dodajemy odpowiednie dane w zależności od typu powiadomienia
            if (isset($data['aplication'])) {
                $data['message'] = __('translate.applicationNotificationMessage', ['id' => $data['aplication']]);
            }

            // Ustaw domyślny tytuł, jeśli nie istnieje
            if (!isset($data['title'])) {
                $data['title'] = __('translate.newNotification');
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
     *
     * @param Request $request
     * @param string $id
     */
    public function markAsRead(Request $request, string $id)
    {
        $notification = Auth::user()->notifications()->findOrFail($id);
        $notification->markAsRead();
    }

    /**
     * Oznacza wszystkie powiadomienia jako przeczytane.
     *
     * @param Request $request
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
}
