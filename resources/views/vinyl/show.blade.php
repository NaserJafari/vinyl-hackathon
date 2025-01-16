<x-layout title="Vinyl product: {{ $vinyl->name }}">
    <div class="p-20">
        <div class="flex justify-between">
            <h1 class="text-4xl">Vinyl: {{ $vinyl->name }}</h1>
            @if (Auth::check())
                @if (Auth::user()->role_id == 1)
                    <div class="flex space-x-2">
                        <div class="my-2">
                            <a href="{{ route('vinyl.edit', $vinyl->id) }}">
                                <button class="rounded-lg bg-orange-400 p-4">
                                    Vinyl aanpassen
                                </button>
                            </a>
                        </div>
                        <div class="my-2">
                            <form action="{{ route('vinyl.destroy', $vinyl->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-lg bg-red-400 p-4">
                                    Vinyl verwijderen
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            @endif
        </div>
        <div class="border rounded-lg shadow-lg p-6 bg-white">
{{--            <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $vinyl->name }}</h2>--}}
            <div class="text-lg text-gray-700 space-y-2">
                <p><span class="font-semibold">Artiest:</span> {{ $vinyl->artist }}</p>
                <p><span class="font-semibold">Aantal:</span> {{ $vinyl->stock }} stuk(s) op voorraad</p>
                <p>
                    <span class="font-semibold">Prijs:</span>
                    <span class="text-lime-500 font-bold">€{{ number_format($vinyl->price, 2, ',', '.') }}</span>
                </p>
            </div>
            <div class="mt-6">
                <button class="w-full bg-lime-500 text-white font-semibold py-2 rounded-lg hover:bg-lime-600 transition">
                    Toevoegen aan winkelwagen
                </button>
            </div>
        </div>
        <div>
            <a href="{{ route('vinyl.index') }}">
                <button class="rounded-lg bg-lime-400 p-2 mt-4">
                    Ga terug
                </button>
            </a>
        </div>
    </div>
</x-layout>
