<x-app-layout>
    @section('title', 'Dashboard')
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create a new book') }}
            </h2>
            <a href="{{ route('books.index') }}" class="btn btn-primary text-white bg-blue-500 hover:bg-blue-700 rounded-full px-4 py-2 transition duration-300">
                Home
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-100">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 text-gray-900">
                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                        <input type="text" id="author" name="author" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="genre" class="block text-sm font-medium text-gray-700">Genre</label>
                        <input type="text" id="genre" name="genre" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="year_published" class="block text-sm font-medium text-gray-700">Year Published</label>
                        <input type="number" id="year_published" name="year_published" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="copies_available" class="block text-sm font-medium text-gray-700">Copies Available</label>
                        <input type="number" id="copies_available" name="copies_available" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm" required>
                    </div>
                    <div class="mb-4">
                        <label for="image_book" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" id="image_book" name="image_book" class="mt-1 block w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-[#8C7155] focus:border-[#8C7155] sm:text-sm">
                    </div>
                    <button type="submit" class="w-full bg-[#8C7155] text-white p-3 rounded-md shadow-sm hover:bg-[#d5bea6] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8C7155]">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
