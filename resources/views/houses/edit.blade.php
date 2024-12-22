@extends('layouts.default')

@section('content')
    <div class="max-w-7xl mx-auto py-20 px-4">
        <h1 class="text-2xl font-bold mb-6">Edit Rumah</h1>

        <form action="/houses/{{ $house->id }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @method('PUT')
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Rumah</label>
                <input type="text" value="{{ $house->name }}" name="name" id="name" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="description" id="description" rows="3"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">{{ $house->description }}</textarea>
            </div>

            <div>
                <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                <input type="text" value="{{ $house->location }}" name="location" id="location" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="land_area" class="block text-sm font-medium text-gray-700">Luas Tanah (m²)</label>
                    <input type="number" value="{{ $house->land_area }}" name="land_area" id="land_area" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="building_area" class="block text-sm font-medium text-gray-700">Luas Bangunan (m²)</label>
                    <input type="number" value="{{ $house->building_area }}" name="building_area" id="building_area"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="floor_count" class="block text-sm font-medium text-gray-700">Jumlah Lantai</label>
                    <input type="number" value="{{ $house->floor_count }}" name="floor_count" id="floor_count" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="bedroom_count" class="block text-sm font-medium text-gray-700">Jumlah Kamar Tidur</label>
                    <input type="number" value="{{ $house->bedroom_count }}" name="bedroom_count" id="bedroom_count"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="bathroom_count" class="block text-sm font-medium text-gray-700">Jumlah Kamar Mandi</label>
                    <input type="number" value="{{ $house->bathroom_count }}" name="bathroom_count" id="bathroom_count"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                    <input type="number" value="{{ $house->price }}" name="price" id="price" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            </div>

            <div>
                <label for="unit_count" class="block text-sm font-medium text-gray-700">Jumlah Unit</label>
                <input type="number" value="{{ $house->unit_count }}" name="unit_count" id="unit_count" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    <option value="Available">Available</option>
                    <option value="Sold Out">Sold Out</option>
                </select>
            </div>

            <div>
                <label for="map" class="block text-sm font-medium text-gray-700">Embed Map</label>
                <input type="text" value="{{ $house->map }}" name="map" id="map" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                <input type="file" name="image" id="image"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded-md shadow-sm">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
