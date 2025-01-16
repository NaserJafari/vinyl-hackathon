<nav class="bg-yellow-400 p-4">
    <div class="flex">
        <div class="mr-2">
            <img src="{{ asset('images/logo.png') }}" alt="" class="h-8 rounded-2xl">
        </div>
        <ul class="flex space-x-2">
            <x-navlink link="{{ route('welcome') }}">Home</x-navlink>
            <x-navlink link="{{ route('welcome') }}">Vinyl</x-navlink>
            <x-navlink link="{{ route('welcome') }}">Chat</x-navlink>
            <x-navlink link="{{ route('register') }}">Registreren</x-navlink>
            <x-navlink link="{{ route('login') }}">Inloggen</x-navlink>
        </ul>
    </div>
</nav>
