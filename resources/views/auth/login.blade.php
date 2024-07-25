@extends('layouts.layout')
@section('title', 'Library System Login')
@section('content')
<div class="bg-[#F3E2C7] shadow-lg rounded-lg p-8 w-full max-w-screen-lg flex">
    <div class="w-1/2 flex items-center justify-center">
        <img src="{{ asset('/img/Library-rafiki.svg') }}" alt="Library" class="w-auto h-auto object-cover rounded-lg" />
    </div>
    <div class="w-1/2 p-4">
        <h2 class="text-2xl font-bold mb-4 text-[#8C7155]">Library System Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Session Status -->
            @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-2 text-[#8C7155]">Email</label>
                <input id="email" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2"
                    type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                @error('email')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-2 text-[#8C7155]">Password</label>
                <input id="password" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2"
                    type="password" name="password" required autocomplete="current-password" />
                @error('password')
                    <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-[#8C7155] shadow-sm focus:ring-[#8C7155]" name="remember">
                    <span class="ml-2 text-sm text-[#8C7155]">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-[#8C7155] hover:text-[#5A4633] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8C7155]"
                        href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <button type="submit"
                    class="w-1/3 ml-4 p-3 rounded-md bg-[#8C7155] text-[#F3ECE7] hover:bg-[#705942]">Log in</button>
            </div>
        </form>
    </div>
</div>
@endsection