<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   Welcome to your Dashboard <bold class="text-[#8C7155]">{{ Auth::user()->name }}</bold> 
                </div>
            </div>

            <!-- Custom Content with DaisyUI -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <div class="card shadow-lg bg-primary text-primary-content">
                    <div class="card-body">
                        <h2 class="card-title">Card 1</h2>
                        <p>Content for the first card.</p>
                    </div>
                </div>
                <div class="card shadow-lg bg-secondary text-secondary-content">
                    <div class="card-body">
                        <h2 class="card-title">Card 2</h2>
                        <p>Content for the second card.</p>
                    </div>
                </div>
                <div class="card shadow-lg bg-accent text-accent-content">
                    <div class="card-body">
                        <h2 class="card-title">Card 3</h2>
                        <p>Content for the third card.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>