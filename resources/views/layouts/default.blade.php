<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reka Kreasi Bumi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body>
    <header class="flex justify-center fixed top-0 left-0 right-0 z-0">
  
        <div class="bg-[#8F8B55] text-white my-10 flex justify-start font-lora w-fit rounded-3xl px-8">
            
        <a href="/" class="home-link">
            <p class="my-2 py-2 px-6 mx-2  bg-gray-400/60 rounded-3xl" id="home-text">Home</p>
        </a>

        <a href="/houses" class="projects-link">
            <p class="my-2 py-2 px-6 mx-2" id="projects-text">Projects</p>
        </a>

        <a href="/contact">
            <p class="my-2 py-2 px-6 mx-2">Contact</p>
        </a>
        </div>
        
        @auth
        <div class="py-12 px-4 fixed top-0 right-0 z-10" >
            <a class="  bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        @endauth
        
    </header>
    <main class="flex-grow">
        @yield('content')
        <footer class="mt-10 bg-gray-800 text-white py-4 fixed bottom-0 left-0 w-full">
            <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-40 h-30">
            <div class="container mx-auto text-center">
            <p>&copy; 2024 Reservasi Rumah. All Rights Reserved.</p>
            </div>
        </footer>
    </main>
    
</body>
    
</html>
