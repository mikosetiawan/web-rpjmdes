<x-app-layout title="Tambah Inventarisir Potensi">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Inventarisir Potensi Desa Pejaten</h2>
            <form action="{{ route('potensi-inventarisir.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="potensi" class="block text-sm font-medium text-gray-700">Potensi</label>
                        <input type="text" id="potensi" name="potensi" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
                    <a href="{{ route('potensi-inventarisir.index') }}" class="ml-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>