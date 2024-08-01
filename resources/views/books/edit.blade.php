<x-app-layout>
    @section('title', 'Edit Book')
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Book') }}
            </h2>
            <a href="{{ route('books.index') }}" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-2 transition duration-300">
                Home
            </a>
        </div>
    </x-slot>

    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 text-gray-900">
                <!-- Display validation errors -->
                @if ($errors->any())
                    <div class="alert alert-danger mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Edit form -->
                <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Title -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" value="{{ old('title', $book->title) }}" required>
                    </div>

                    <!-- Author -->
                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" id="author" name="author" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" value="{{ old('author', $book->author) }}" required>
                    </div>

                    <!-- Genre -->
                    <div class="mb-4">
                        <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                        <input type="text" id="genre" name="genre" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" value="{{ old('genre', $book->genre) }}" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required>{{ old('description', $book->description) }}</textarea>
                    </div>

                    <!-- Year Published -->
                    <div class="mb-4">
                        <label for="year_published" class="block text-sm font-medium text-gray-700">Year Published</label>
                        <input type="number" id="year_published" name="year_published" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" value="{{ old('year_published', $book->year_published) }}" required>
                    </div>

                    <!-- Copies Available -->
                    <div class="mb-4">
                        <label for="copies_available" class="block text-sm font-medium text-gray-700">Copies Available</label>
                        <input type="number" id="copies_available" name="copies_available" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" value="{{ old('copies_available', $book->copies_available) }}" required>
                    </div>

                    <!-- Book Cover Image -->
                    <div class="mb-4">
                        <label for="image_book" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image_book" name="image_book" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm">
                        @if ($book->image_book)
                            <img src="{{ asset('storage/' . $book->image_book) }}" alt="Book Cover" class="mt-2" style="width: 100px; height: auto;">
                        @endif
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-[#8C7155] text-white p-3 rounded-md shadow-sm hover:bg-[#d5bea6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8C7155]">Update Book</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
