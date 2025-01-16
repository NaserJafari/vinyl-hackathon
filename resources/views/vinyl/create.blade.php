<x-layout title="Vinyl toevoegen">
    <div class="p-20">
        <form action="{{ route('vinyl.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('name') }}" required>
            </div>
            <div class="mb-4">
                <label for="artist" class="block text-gray-700 text-sm font-bold mb-2">Artist:</label>
                <input type="text" name="artist" id="artist" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('artist') }}" required>
            </div>
            <div class="mb-4">
                <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Aantal:</label>
                <input type="number" min="1" max="500" step="1" name="stock" id="stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('stock') }}" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Prijs:</label>
                <input type="number" min="1" max="500" step="any" name="price" id="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('price') }}" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
        <div class="mt-2">
            <a href="{{ route('vinyl.index') }}">
                <button class="rounded-lg bg-lime-400 p-2">
                    Ga terug
                </button>
            </a>
        </div>
    </div>
</x-layout>
