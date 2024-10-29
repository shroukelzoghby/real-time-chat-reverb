<div class="container mx-auto p-4 bg-gray-50 rounded-lg shadow-md max-w-xl">
    {{-- The Master doesn't talk, he acts. --}}
    <x-header></x-header>


    <ul class="chat-messages list-none overflow-y-auto p-4 space-y-3" style="max-height: 300px;">
        @foreach($convo as $convoItem)
            <li class="bg-indigo-300/10 px-4 py-2 rounded-md">
                <div class="font-bold"> {{$convoItem['username']}}</div>{{$convoItem['message']}}
            </li>
        @endforeach
    </ul>

    <form wire:submit.prevent="sendMessage" class="flex items-center p-4 border-t border-gray-300 space-x-2">
        <x-text-input type="text" wire:model="message" class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Type your message..."/>
        <button type="submit" class="btn-primary px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Send</button>

    </form>

</div>

