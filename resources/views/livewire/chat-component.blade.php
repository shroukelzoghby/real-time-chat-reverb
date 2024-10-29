<div>
    {{-- The Master doesn't talk, he acts. --}}

        <form wire:submit="sendMessage">
            <x-text-input type="text" wire:model="newMessage"/>
            <button type="submit">Send</button>
        </form>

</div>
