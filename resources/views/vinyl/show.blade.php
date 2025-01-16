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
        <div>
            <p class="text-gray-600">door {{ $vinyl->artist }}</p>
        </div>
    </div>
</x-layout>
