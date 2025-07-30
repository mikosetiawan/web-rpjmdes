<x-app-layout title="Tambah Waktu Pelaksanaan">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Waktu Pelaksanaan Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Form Tambah</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('waktu-pelaksanaan.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="jenis_kegiatan_id" class="block text-sm font-medium text-gray-700">Jenis Kegiatan</label>
                            <select name="jenis_kegiatan_id" id="jenis_kegiatan_id"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                                @foreach ($jenisKegiatan as $jk)
                                    <option value="{{ $jk->id }}">{{ $jk->nama_kegiatan }}</option>
                                @endforeach
                            </select>
                            @error('jenis_kegiatan_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_mulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" id="tanggal_mulai" value="{{ old('tanggal_mulai') }}"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                            @error('tanggal_mulai')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="tanggal_selesai" class="block text-sm font-medium text-gray-700">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" value="{{ old('tanggal_selesai') }}"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                            @error('tanggal_selesai')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">Simpan</button>
                        <a href="{{ route('waktu-pelaksanaan.index') }}"
                            class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded ml-2 transition">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
