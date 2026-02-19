<?php

namespace App\Events;

use App\Models\Aplication;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AplicationMakeEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $aplication;
    public $auth;
    public $cvType;
    public $sessionId;

    /**
     * Create a new event instance.
     */
    public function __construct(Aplication $aplication, User $auth = null, $cvType = null, $sessionId = null)
    {
        $this->aplication = $aplication;
        $this->auth = $auth;
        $this->cvType = $cvType;
        $this->sessionId = $sessionId;
    }
}
