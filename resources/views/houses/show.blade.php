@extends('layouts.default')

@section('content')
    <div class="container mx-auto py-20 px-4">

        {{-- Back Button --}}
        <div class="mb-4">
            <a href="javascript:history.back()" class="text-gray-600 hover:text-gray-800">
                ← Back
            </a>
        </div>

        {{-- Header Section --}}
        <div class="">

            {{-- Image Gallery --}}
            <div class="w-full ">
                <div class="grid grid-cols-2 gap-2 place-items-center">
                    <img src="{{ asset('image/' . $house->image) }}" alt="Property Image 1" class="rounded-lg">
                    <div class="flex justify-center">
                        {!! $house->map !!}
                    </div>
                </div>
            </div>

            {{-- Property Info --}}
            <div class="w-full lg:w-1/3 flex flex-col gap-4">
                {{-- Property Title and Address --}}
                <div>
                    <h1 class="text-3xl font-bold mt-4">{{ $house->name }}</h1>
                    <p class="text-gray-500 mt-1">{{ $house->location }}</p>
                </div>

                {{-- Availability and Details --}}
                <div class="flex items-center space-x-2">
                    <span class="bg-green-200 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">
                        {{ $house->status }}
                    </span>
                    <span class="text-red-500 text-sm font-semibold">Sisa {{ $house->unit_count }} Unit</span>
                </div>

                {{-- Description --}}
                <div>
                    <p class="text-gray-700">{{ $house->description }}</p>
                </div>

                {{-- Price --}}
                <div class="text-lg font-bold text-gray-800">
                    Rp.
                    @if ($house->price % 1000000000 === 0)
                        {{ number_format($house->price / 1000000000, 0) }} M
                    @else
                        {{ number_format($house->price / 1000000000, 1) }} M
                    @endif
                </div>
            </div>
        </div>

        {{-- Property Details --}}
        <div class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
            <div>
                <h3 class="text-gray-600">Luas Tanah</h3>
                <p class="text-lg font-semibold">{{ $house->land_area }} m²</p>
            </div>
            <div>
                <h3 class="text-gray-600">Luas Bangunan</h3>
                <p class="text-lg font-semibold">{{ $house->building_area }} m²</p>
            </div>
            <div>
                <h3 class="text-gray-600">Tingkat</h3>
                <p class="text-lg font-semibold">{{ $house->floor_count }}</p>
            </div>
            <div>
                <h3 class="text-gray-600">Kamar Tidur</h3>
                <p class="text-lg font-semibold">{{ $house->bedroom_count }}</p>
            </div>
            <div>
                <h3 class="text-gray-600">Kamar Mandi</h3>
                <p class="text-lg font-semibold">{{ $house->bathroom_count }}</p>
            </div>
        </div>

    </div>
@endsection
