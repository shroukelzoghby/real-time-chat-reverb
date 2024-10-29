<?php

namespace App\Livewire;

use App\Events\MessageEvent;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatComponent extends Component
{
    public $message;
    public $convo =[];
    public function sendMessage() {
        MessageEvent::dispatch(Auth::user()->id, $this->message);
        $this->message='';
    }
    public function render()
    {
        return view('livewire.chat-component');
    }
}
