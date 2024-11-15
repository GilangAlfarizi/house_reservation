@extends('layouts.default')

@section('content')

<div class="relative w-full h-screen">
    <img src="/images/type45(2).jpg" alt="Home Background" class="blur-sm hover:blur-none w-full h-full object-cover">
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
    <a href="" class="flex items-center justify-center">
        <h1 class="text-6xl font-bold">Silahkan Pilih Rumah Impian Kalian!</h1>
    </a>
</div>
<div class="grid grid-cols-4 gap-2">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('image/Bogas5.jpg') }}" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('image/Bogas6.jpg') }}" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('image/BogasHill.jpg') }}" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{ asset('image/BogasValley.jpg') }}" alt="">
    </div>
</div>
