@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-4">Category List</h1> 
    <a href="/category/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Category</a> <br> <br>

    <!-- Tabel Kategori -->
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">id</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Status</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $key => $item)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $key+1 }}</td>
                        <td class="px-6 py-4 text-sm text-gray-800">{{ $item->name }}</td>
                        <td class="px-6 py-4 text-sm text-gray-600">
                            <span class="px-3 py-1 rounded-full text-xs {{ $item->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ ucfirst($item->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <a href="/category/{{$item->id}}" class="text-blue-600 hover:text-blue-800">Detail</a> | 
                            <a href="/category/{{$item->id}}/edit" class="text-blue-600 hover:text-blue-800">Edit</a> |
                            <form action="/category/{{$item->id}}" method="POST">
                                @method('delete')
                                @csrf
                                <input type="submit" class="text-red-600 hover:text-red-800" value="Delete">
                            </form>
                            
                        </td>
                    </tr>
                    @empty
                        <tr class="justify-center">
                            <td>
                                No Category
                            </td>
                        </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
