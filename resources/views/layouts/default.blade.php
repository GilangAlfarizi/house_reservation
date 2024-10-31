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
    @vite('resources/css/app.css')
</head>
<body>
    <header class="flex justify-center fixed top-0 left-0 right-0 z-10">
  
        <div class="bg-[#8F8B55] text-white my-10 flex justify-start font-lora w-fit rounded-3xl px-8">
    
            <p class="my-2 py-2 px-6 mx-2 bg-gray-400/60 rounded-3xl">Home</p>

        <a href="{{route('reservation.index')}}">
            <p class="my-2 py-2 px-6 mx-2">Order</p>
        </a>

            <p class="my-2 py-2 px-6 mx-2">About</p>
        </div>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </header>
    <div class="flex-grow">
        @yield('content')
    </div>
    <footer class="mt-10 bg-gray-800 text-white py-4">
        <img src="{{URL::asset('/images/IMG-20240508-WA0064.jpg')}}" alt="logo" class="w-40 h-30">
        <div class="container mx-auto text-center">
          <p>&copy; 2024 Reservasi Rumah. All Rights Reserved.</p>
        </div>
      </footer>
</body>
</html>