<x-app-layout>
    @section('title', 'Dashboard')
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Books Dashboard') }}
            </h2>
            <a href="{{ route('books.create') }}" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-2 transition duration-300">
               Add Books
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-lg mb-4">Welcome to your Dashboard, <strong class="text-[#8C7155]">{{ Auth::user()->name }}</strong></p>
                    <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($books as $book)
                            <div class="bg-white border rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition duration-300">
                                <img class="w-full h-48 object-cover" src="{{ $book->image_book ? asset('storage/' . $book->image_book) : 'default-image-path.jpg' }}" alt="{{ $book->title }}">
                                <div class="p-6">
                                    <h3 class="font-bold text-xl mb-2">{{ $book->title }}</h3>
                                    <p class="text-gray-700"><strong>Author:</strong> {{ $book->author }}</p>
                                    <p class="text-gray-700"><strong>Genre:</strong> {{ $book->genre }}</p>
                                    <p class="text-gray-700 mb-4"><strong>Description:</strong> {{ $book->description }}</p>
                                    <p class="text-gray-700"><strong>Published:</strong> {{ $book->year_published }}</p>
                                    <p class="text-gray-700"><strong>Copies Available:</strong> {{ $book->copies_available }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
