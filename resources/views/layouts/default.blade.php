<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- to allow mixed content --}}
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Reka Kreasi Bumi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    
</head>
<body>
    <header class="flex justify-center item-center fixed top-0 left-0 right-0 z-20">
        <nav class="bg-[#8F8B55] fixed w-full z-20 top-0 start-0">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logo.png') }}" class="h-9" alt="Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/contact" class="text-white bg-gray-800 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chat Langsung</a>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                <a href="/" class="{{ Request::is('/') ? 'text-black ' : 'text-white' }} hover:text-gray-400 block py-2 px-3">Home</a>
                </li>
                <li>
                <a href="/houses" class="{{ Request::is('houses') ? 'text-black ' : 'text-white' }} hover:text-gray-400 block py-2 px-3">Projects</a>
                </li>
                <li>
                <a href="/contact" class="{{ Request::is('contact') ? 'text-black ' : 'text-white' }} hover:text-gray-400 block py-2 px-3">Contact</a>
                </li>
            </ul>
            </div>
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
        </nav>
    </header>
    <main class="flex-grow">
        @yield('content')
        <footer class="mt-10 bg-gray-800 text-white py-4 flex bottom-0 left-0 w-full">
            <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-40 h-30">
            <div class="container mx-auto text-center">
            <p>&copy; 2024 Reka Kreasi Bumi. All Rights Reserved.</p>
            </div>
        </footer>
    </main>
    
</body>
    
</html>