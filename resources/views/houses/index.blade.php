@extends('layouts.default')



@section('content')
    <div class="max-w-7xl mx-auto py-20 px-4">
        <h1 class="text-3xl text-center font-bold mb-6">Bogas Cluster</h1>
        <p class="text-center text-gray-600 mb-8">Pilihan rumah di lokasi strategis dan desain modern yang sesuai dengan
            kebutuhanmu.</p>

        @auth
            <div class="py-2">
                <a href="/houses/create"
                    class="py-2 px-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-0 px-1 rounded">Create</a>
            </div>
        @endauth


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($houses as $item)
                <div class="border rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                    <img src="{{ asset('image/' . $item->image) }}" alt=""
                        class="w-full h-48 object-cover rounded-t-lg">

                    <div class="p-4">
                        <h2 class="text-lg font-semibold">{{ $item->name }}</h2>
                        <div class="flex items-center gap-2 my-2">
                            <span
                                class="inline-block w-2 h-2 rounded-full {{ $item->status == 'Sold Out' ? 'bg-red-500' : 'bg-green-500' }}"></span>
                            <span class="text-sm text-gray-500">{{ $item->status }}</span>
                            <span class="ml-auto text-sm text-red-500">{{ $item->unit_count }} unit tersisa</span>
                        </div>

                        <p class="text-sm text-gray-600">{{ $item->location }}</p>
                        <div class="text-sm mt-2 space-y-1">
                            <p>Luas Tanah: {{ $item->land_area }}m²</p>
                            <p>Luas Bangunan: {{ $item->building_area }}m²</p>
                            <p>{{ $item->floor_count }} Tingkat</p>
                            <p>Kamar Tidur: {{ $item->bedroom_count }}</p>
                            <p>Kamar Mandi: {{ $item->bathroom_count }}</p>
                        </div>

                        <div class="text-lg font-bold text-gray-800 mt-4">
                            Rp.
                            @if ($item->price % 1000000000 === 0)
                                {{ number_format($item->price / 1000000000, 0) }} M
                            @else
                                {{ number_format($item->price / 1000000000, 1) }} M
                            @endif
                        </div>

                        <a href="{{ route('houses.show', $item->id) }}"
                            class="inline-block mt-4 text-blue-500 hover:underline">
                            Lihat detail &rarr;
                        </a>

                        @auth
                            <a href="/houses/{{ $item->id }}/edit"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                            <form action="/houses/{{ $item->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            </form>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
