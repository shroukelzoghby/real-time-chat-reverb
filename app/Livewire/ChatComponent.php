<?php

namespace App\Livewire;

use App\Events\MessageEvent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{
    public $message;
    public $convo = [];

    public function mount()
    {
        $this->loadMessages();
    }
    public function loadMessages()
    {
        $messages = Message::with('user')->get();
        foreach ($messages as $message) {
            $this->convo[] = [
                'username' => $message->user->name,
                'message' => $message->message,
            ];
        }
    }

    public function sendMessage() {
        MessageEvent::dispatch(Auth::user()->id, $this->message);
        $this->message='';
    }

    #[on('echo:our-channel,MessageEvent')]

    public function listenForMessage($data)
    {
        $this->convo[] = [
            'username' => $data['username'],
            'message' => $data['message'],
        ];


    }
    public function render()
    {
        return view('livewire.chat-component');
    }
}
