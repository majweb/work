<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\MissingPositionReplyMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Inertia\Response;

class MissingPositionController extends Controller
{
    public function index(Request $request): Response
    {
        $notifications = DatabaseNotification::where('notifiable_id', auth()->id())
            ->where('data->type', 'missing_position')
            ->orderBy('created_at', 'desc')
            ->paginate(20)
            ->withQueryString();

        return Inertia::render('Admin/MissingPositions/Index', [
            'notifications' => $notifications,
        ]);
    }

    public function replyEmail(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'notification_id' => 'required|exists:notifications,id',
        ]);

        $notification = DatabaseNotification::findOrFail($validated['notification_id']);
        $recipient = $notification->data['user_email'] ?? 'kontakt@work4you.global';

        Mail::to($recipient)->send(new MissingPositionReplyMail($validated['subject'], $validated['message']));

        $data = $notification->data;
        $content = $data['content'] ?? null;
        $firmId = $data['firm_id'] ?? null;

        $related = DatabaseNotification::where('data->type', 'missing_position')
            ->where('data->content', $content)
            ->where('data->firm_id', $firmId)
            ->get();

        foreach ($related as $item) {
            $itemData = $item->data;
            $itemData['email_sent'] = true;
            $itemData['email_sent_at'] = now()->toDateTimeString();
            $itemData['email_sent_count'] = ($itemData['email_sent_count'] ?? 0) + 1;
            $item->data = $itemData;
            $item->save();
        }

        session()->flash('flash.banner', 'E-mail został wysłany.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }
}
