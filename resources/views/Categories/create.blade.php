<head>
    @vite(['resources/css/app.css'])
</head>

<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Buat Kategori Baru</h1>
    
    <form action="/category" method="POST">
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert""> 
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf 
        <!-- Nama Kategori -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Category Name</label>
            <input type="text"  name="name" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Masukkan nama kategori" >
        </div>

        <!-- Deskripsi Kategori -->
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Description</label>
            <textarea name="description" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" rows="4" placeholder="Deskripsi singkat mengenai kategori"></textarea>
        </div>

        <!-- Status Kategori -->
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
            <select id="status" name="status" class="w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                <option value="active">Aktif</option>
                <option value="inactive">Tidak Aktif</option>
            </select>
        </div>

        <!-- Tombol Submit -->
        <div class="flex justify-end">
            <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">Simpan Kategori</button>
        </div>
    </form>
</div>