<div>
    {{-- The Master doesn't talk, he acts. --}}

    <ul>
        @foreach($convo as $convoItem)
            <li>{{$convoItem['username']}}:{{$convoItem['message']}}</li>
        @endforeach
    </ul>

    <form wire:submit.prevent="sendMessage">
        <x-text-input type="text" wire:model="message"/>
        <button type="submit">Send</button>
    </form>

</div>
