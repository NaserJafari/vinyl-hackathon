<x-layout title="Vinyl">
    <div class="p-20">
        <div class="flex justify-between">
            <h1 class="text-4xl">Vinyl pagina</h1>
            @if (Auth::check())
                @if (Auth::user()->role_id == 1)
                    <div class="my-2">
                        <a href="{{ route('vinyl.create') }}">
                            <button class="rounded-lg bg-lime-400 p-4">
                                Vinyl toevoegen
                            </button>
                        </a>
                    </div>
                @endif
            @endif
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mt-4">
            @foreach ($vinyls as $vinyl)
                <div class="border rounded-lg shadow-lg p-4">
                    <div class="text-center">
                        <h2 class="text-xl font-semibold">{{ $vinyl->name }}</h2>
                        <p class="text-gray-600">door {{ $vinyl->artist }}</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('vinyl.show', $vinyl->id) }}">
                            <button class="w-full bg-lime-400  py-2 rounded-lg">
                                Bekijk details
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($vinyls->isEmpty())
            <p class="mt-8 text-center text-gray-500">Er zijn momenteel geen vinyls beschikbaar.</p>
        @endif
    </div>
</x-layout>
