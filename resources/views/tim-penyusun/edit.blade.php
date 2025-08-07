<x-app-layout title="Edit Tim Penyusun RPJM Desa">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Tim Penyusun RPJM Desa</h2>
            <form action="{{ route('tim-penyusun.update', $timPenyusun->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ $timPenyusun->nama }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="jabatan_dalam_tim" class="block text-sm font-medium text-gray-700">Jabatan dalam Tim</label>
                        <input type="text" id="jabatan_dalam_tim" name="jabatan_dalam_tim" value="{{ $timPenyusun->jabatan_dalam_tim }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="jabatan_bidang" class="block text-sm font-medium text-gray-700">Jabatan/Bidang</label>
                        <input type="text" id="jabatan_bidang" name="jabatan_bidang" value="{{ $timPenyusun->jabatan_bidang }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                    <a href="{{ route('tim-penyusun.index') }}" class="ml-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>