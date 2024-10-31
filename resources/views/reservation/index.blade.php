<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservasi Pembelian Rumah</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])</head>
<body class="bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">Reservasi Rumah</h1>
      <div>
        <a href="/" class="text-gray-600 hover:text-indigo-500 mr-4">Home</a>
        <a href="/reservasi" class="text-gray-600 hover:text-indigo-500">Reservasi</a>
      </div>
    </div>
  </nav>

  <!-- Container -->
  <div class="container mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-3xl font-semibold text-gray-800 mb-6">Reservasi Pembelian Rumah</h2>

    <!-- Detail Rumah -->
    <div class="flex items-start mb-8">
      <img src="https://via.placeholder.com/150" alt="Rumah" class="w-48 h-48 object-cover rounded-lg shadow-lg">
      <div class="ml-6">
        <h3 class="text-2xl font-bold text-indigo-600">Rumah Idaman</h3>
        <p class="text-gray-700 mt-2">Lokasi: Jakarta Selatan</p>
        <p class="text-gray-700 mt-1">Harga: Rp 1,200,000,000</p>
        <p class="text-gray-700 mt-1">Status: Tersedia</p>
      </div>
    </div>

    <!-- Formulir Reservasi -->
    <form action="/reservasi" method="POST" class="space-y-6">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
          <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Pembelian</label>
          <input type="date" id="tanggal" name="tanggal" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
          <label for="telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
          <input type="tel" id="telepon" name="telepon" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        </div>
      </div>

      <!-- Catatan -->
      <div>
        <label for="catatan" class="block text-sm font-medium text-gray-700">Catatan Tambahan</label>
        <textarea id="catatan" name="catatan" rows="4"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
      </div>

      <!-- Total Harga dan Button Submit -->
      <div class="flex justify-between items-center mt-8">
        <p class="text-xl font-semibold text-gray-700">Total: Rp 1,200,000,000</p>
        <button type="submit"
          class="bg-indigo-600 text-white px-6 py-2 rounded-md shadow-md hover:bg-indigo-500">
          Reservasi Sekarang
        </button>
      </div>
    </form>
  </div>

  <!-- Footer -->
  <footer class="mt-10 bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
      <p>&copy; 2024 Reservasi Rumah. All Rights Reserved.</p>
    </div>
  </footer>

</body>
</html>
