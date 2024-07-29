<x-app-layout>
    @section('title', 'Dashboard')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books Dashboard') }}
        </h2>
        <a href="{{ route('books.index') }}" class="btn btn-primary">Books</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Welcome to your Dashboard <bold class="text-[#8C7155]">{{ Auth::user()->name }}</bold>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>