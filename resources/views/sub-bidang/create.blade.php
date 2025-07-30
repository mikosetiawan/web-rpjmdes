<x-app-layout title="Tambah Sub Bidang Baru">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Tambah Sub Bidang Baru</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('sub-bidang.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="bidang_id" class="block text-sm font-medium text-gray-700">Bidang</label>
                            <select name="bidang_id" id="bidang_id"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                                @foreach ($bidang as $b)
                                    <option value="{{ $b->id }}">{{ $b->nama_bidang }}</option>
                                @endforeach
                            </select>
                            @error('bidang_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_sub_bidang" class="block text-sm font-medium text-gray-700">Nama Sub Bidang</label>
                            <input type="text" name="nama_sub_bidang" id="nama_sub_bidang" value="{{ old('nama_sub_bidang') }}"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm" placeholder="Masukkan nama sub bidang.." autofocus>
                            @error('nama_sub_bidang')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">Simpan</button>
                        <a href="{{ route('sub-bidang.index') }}"
                            class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded ml-2 transition">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
