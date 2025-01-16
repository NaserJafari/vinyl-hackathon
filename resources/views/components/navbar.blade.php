<nav class="bg-yellow-400 p-4">
    <div class="flex">
        <div class="mr-2">
            <img src="{{ asset('images/logo.png') }}" alt="" class="h-8 rounded-2xl">
        </div>
        <ul class="flex space-x-2">
            <x-navlink link="{{ route('welcome') }}">Home</x-navlink>
            <x-navlink link="{{ route('vinyl.index') }}">Vinyl</x-navlink>
            <x-navlink link="{{ route('welcome') }}">Chat</x-navlink>
            @if (Auth::check())
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">
                        Uitloggen
                    </button>
                </form>
            @else
                <x-navlink link="{{ route('login') }}">Inloggen</x-navlink>
                <x-navlink link="{{ route('register') }}">Registreren</x-navlink>
            @endif
        </ul>
    </div>
</nav>
