<x-layout title="Vinyl: {{ $vinyl->name }} aanpassen">
    <div class="p-20">
        <h1 class="text-4xl">Vinyl: {{ $vinyl->name }} aanpassen</h1>
        <div class="mt-2">
            <form action="{{ route('vinyl.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name', $vinyl->name) }}" required>
                </div>
                <div class="mb-4">
                    <label for="artist" class="block text-gray-700 text-sm font-bold mb-2">Artist:</label>
                    <input type="text" name="artist" id="artist" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('artist', $vinyl->artist) }}" required>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        <div class="mt-2">
            <a href="{{ route('vinyl.index') }}">
                <button class="rounded-lg bg-lime-400 p-2">
                    Ga terug
                </button>
            </a>
        </div>
    </div>
</x-layout>
