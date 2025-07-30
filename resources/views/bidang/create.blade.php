<x-app-layout title="Create Bidang">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Kelola Penginputan Bidang</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('bidang.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_bidang" class="block text-sm font-medium text-gray-700">Nama Bidang</label>
                            <input type="text" name="nama_bidang" id="nama_bidang" value="{{ old('nama_bidang') }}"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm"
                                placeholder="masukan bidang..">
                            @error('nama_bidang')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
                        <a href="{{ route('bidang.index') }}"
                            class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
