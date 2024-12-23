@extends('layouts.default')

@section('content')
    <div class="relative w-full h-screen">
        <img src="image/type45(2).jpg" alt="Home Background"
            class="blur-sm hover:blur-none w-full h-full object-cover absolute top-0 left-0 z-0">
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <a class="flex items-center justify-center py-10">
                <h5 class="text-white text-4xl font-lora bg-[#8F8B55] bg-opacity-50 px-6 py-3 rounded-lg">
                    BOGAS CLUSTER
                </h5>
            </a>
            <a class="flex items-center justify-center">
                <h1 class="text-white text-6xl font-bold bg-[#8F8B55] bg-opacity-50 px-6 py-3 rounded-lg">
                    Temukan Rumah Impianmu Sekarang!
                </h1>
            </a>
        </div>
    </div>

    <div class="mt-20">
        <a class="flex items-center justify-center">
            <h1 class="text-6xl font-bold">Silahkan Pilih Rumah Impian Kalian!</h1>
        </a>
    </div>
    <div class="mt-20 items-end grid grid-cols-4 px-96">
        <div class="flex justify-center">
            <img class="h-96 max-w-full" src="{{ asset('image/Bogas5.jpg') }}" alt="">
        </div>
        <div class="flex justify-center">
            <img class="h-80 max-w-full" src="{{ asset('image/Bogas6.jpg') }}" alt="">
        </div>
        <div class="flex justify-center">
            <img class="h-80 max-w-full" src="{{ asset('image/BogasHill.jpg') }}" alt="">
        </div>
        <div class="flex justify-center">
            <img class="h-96 max-w-full" src="{{ asset('image/BogasValley.jpg') }}" alt="">
        </div>
    </div>

    <div class="mt-20">
        <a class="flex items-center justify-center">
            <h1 class="text-6xl font-bold">Proyek Hunian Bogas Cluster</h1>
        </a>
        <p class="mx-auto mt-3 max-w-screen-md text-center text-base tracking-tight">Pilihan rumah di lokasi strategis dan
            desain modern yang sesuai dengan kebutuhanmu.</p>
    </div>
    <div class="mx-40 mt-10 flex justify-items-center gap-8">
        @foreach ($houses as $house)
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('image/' . $house->image) }}"
                    alt="product image" />
                <div class="px-5 pb-5">
                    <h5 class="mt-4 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        {{ $house->name }}
                    </h5>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            {{ $house->location }}
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">Rp.
                            @if ($house->price % 1000000000 === 0)
                                {{ number_format($house->price / 1000000000, 0) }} M
                            @else
                                {{ number_format($house->price / 1000000000, 1) }} M
                            @endif
                        </span>
                        <a href="{{ route('houses.show', $house->id) }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
