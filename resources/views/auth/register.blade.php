<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
    <script type="text/javascript">
        window.tailwind.config = {
            darkMode: ['class'],
            theme: {
                extend: {
                    colors: {
                        border: 'hsl(var(--border))',
                        input: 'hsl(var(--input))',
                        ring: 'hsl(var(--ring))',
                        background: 'hsl(var(--background))',
                        foreground: 'hsl(var(--foreground))',
                        primary: {
                            DEFAULT: 'hsl(var(--primary))',
                            foreground: 'hsl(var(--primary-foreground))'
                        },
                        secondary: {
                            DEFAULT: 'hsl(var(--secondary))',
                            foreground: 'hsl(var(--secondary-foreground))'
                        },
                        destructive: {
                            DEFAULT: 'hsl(var(--destructive))',
                            foreground: 'hsl(var(--destructive-foreground))'
                        },
                        muted: {
                            DEFAULT: 'hsl(var(--muted))',
                            foreground: 'hsl(var(--muted-foreground))'
                        },
                        accent: {
                            DEFAULT: 'hsl(var(--accent))',
                            foreground: 'hsl(var(--accent-foreground))'
                        },
                        popover: {
                            DEFAULT: 'hsl(var(--popover))',
                            foreground: 'hsl(var(--popover-foreground))'
                        },
                        card: {
                            DEFAULT: 'hsl(var(--card))',
                            foreground: 'hsl(var(--card-foreground))'
                        },
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer base {
            :root {
                --background: 0 0% 100%;
                --foreground: 240 10% 3.9%;
                --card: 0 0% 100%;
                --card-foreground: 240 10% 3.9%;
                --popover: 0 0% 100%;
                --popover-foreground: 240 10% 3.9%;
                --primary: 240 5.9% 10%;
                --primary-foreground: 0 0% 98%;
                --secondary: 240 4.8% 95.9%;
                --secondary-foreground: 240 5.9% 10%;
                --muted: 240 4.8% 95.9%;
                --muted-foreground: 240 3.8% 46.1%;
                --accent: 240 4.8% 95.9%;
                --accent-foreground: 240 5.9% 10%;
                --destructive: 0 84.2% 60.2%;
                --destructive-foreground: 0 0% 98%;
                --border: 240 5.9% 90%;
                --input: 240 5.9% 90%;
                --ring: 240 5.9% 10%;
                --radius: 0.5rem;
            }
            .dark {
                --background: 240 10% 3.9%;
                --foreground: 0 0% 98%;
                --card: 240 10% 3.9%;
                --card-foreground: 0 0% 98%;
                --popover: 240 10% 3.9%;
                --popover-foreground: 0 0% 98%;
                --primary: 0 0% 98%;
                --primary-foreground: 240 5.9% 10%;
                --secondary: 240 3.7% 15.9%;
                --secondary-foreground: 0 0% 98%;
                --muted: 240 3.7% 15.9%;
                --muted-foreground: 240 5% 64.9%;
                --accent: 240 3.7% 15.9%;
                --accent-foreground: 0 0% 98%;
                --destructive: 0 62.8% 30.6%;
                --destructive-foreground: 0 0% 98%;
                --border: 240 3.7% 15.9%;
                --input: 240 3.7% 15.9%;
                --ring: 240 4.9% 83.9%;
            }
        }
    </style>
</head>
<body class="bg-[#F8F0E3] text-[#5A4633] min-h-screen flex items-center justify-center">
    <div class="bg-[#F3E2C7] shadow-lg rounded-lg p-8 w-full max-w-screen-lg flex">
        <div class="w-1/2 flex items-center justify-center">
            <img src="{{ asset('/img/Library-rafiki.svg') }}" alt="Library" class="w-auto h-auto object-cover rounded-lg" />
        </div>
        <div class="w-1/2 p-4">
            <h2 class="text-2xl font-bold mb-4 text-[#8C7155]">Library Registration</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium mb-2 text-[#8C7155]">Name</label>
                    <input id="name" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    @error('name')
                        <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-2 text-[#8C7155]">Email</label>
                    <input id="email" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                    @error('email')
                        <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium mb-2 text-[#8C7155]">Password</label>
                    <input id="password" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2" type="password" name="password" required autocomplete="new-password" />
                    @error('password')
                        <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium mb-2 text-[#8C7155]">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full text-[#8C7155] border border-[#8C7155] rounded-md p-2" type="password" name="password_confirmation" required autocomplete="new-password" />
                    @error('password_confirmation')
                        <span class="mt-2 text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-[#8C7155] hover:text-[#5A4633] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#8C7155]" href="{{ route('login') }}">
                        Already registered?
                    </a>
                    <button type="submit" class="w-1/3 ml-4 p-3 rounded-md bg-[#8C7155] text-[#F3ECE7] hover:bg-[#705942]">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>

</body>
</html>
