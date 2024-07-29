@extends('layouts.layout')
@section('content')
<div class="bg-[#F3E2C7] shadow-lg rounded-lg p-8 w-full max-w-screen-lg flex">
    <div class="w-1/2 flex items-center justify-center">
        <img src="{{ asset('/img/Library-rafiki.svg') }}" alt="Library" class="w-auto h-auto object-cover rounded-lg" />
    </div>
    <div class="w-1/2 p-4">
        <h2 class="text-2xl font-bold mb-4 text-[#8C7155]">Library Registration</h2>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <!-- Other input fields -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-2 text-[#8C7155]">Name</label>
                <input id="name" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2"
                    type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                @error('name')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-2 text-[#8C7155]">Email</label>
                <input id="email" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2"
                    type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-2 text-[#8C7155]">Password</label>
                <input id="password" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2"
                    type="password" name="password" required autocomplete="new-password" />
                @error('password')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium mb-2 text-[#8C7155]">Confirm
                    Password</label>
                <input id="password_confirmation"
                    class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                @error('password_confirmation')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="profile_img" class="block text-sm font-medium mb-2 text-[#8C7155]">Profile Image</label>
                <input id="profile_img" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2"
                    type="file" name="profile_img" accept="image/*" />
                @error('profile_img')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Other input fields -->

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-[#8C7155] hover:text-[#5A4633] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8C7155]"
                    href="{{ route('login') }}">
                    Already registered?
                </a>
                <button type="submit"
                    class="w-1/3 ml-4 p-3 rounded-md bg-[#8C7155] text-[#F3ECE7] hover:bg-[#705942] btn-xs sm:btn-sm md:btn-md lg:btn-lg">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
