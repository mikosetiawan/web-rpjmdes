<x-app-layout title="Tambah Pola Pelaksanaan">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Pola Pelaksanaan Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Form Tambah</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('pola-pelaksanaan.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="waktu_pelaksanaan_id" class="block text-sm font-medium text-gray-700">Waktu Pelaksanaan</label>
                            <select name="waktu_pelaksanaan_id" id="waktu_pelaksanaan_id"
                                    class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                                @foreach ($waktuPelaksanaan as $wp)
                                    <option value="{{ $wp->id }}">{{ $wp->tanggal_mulai }} - {{ $wp->tanggal_selesai }}</option>
                                @endforeach
                            </select>
                            @error('waktu_pelaksanaan_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="pola" class="block text-sm font-medium text-gray-700">Pola</label>
                            <input type="text" name="pola" id="pola" value="{{ old('pola') }}"
                                   class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                            @error('pola')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">Simpan</button>
                        <a href="{{ route('pola-pelaksanaan.index') }}"
                           class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded ml-2 transition">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
