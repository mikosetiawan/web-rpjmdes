<x-app-layout title="Tambah Laporan Baru">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Laporan Baru</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-lg mb-4">Form Tambah</h2>

                    <form action="{{ route('laporan.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="pola_pelaksanaan_id" class="block text-sm font-medium text-gray-700">Pola
                                Pelaksanaan</label>
                            <select name="pola_pelaksanaan_id" id="pola_pelaksanaan_id"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                @foreach ($polaPelaksanaan as $pp)
                                    <option value="{{ $pp->id }}">{{ $pp->pola }}</option>
                                @endforeach
                            </select>
                            @error('pola_pelaksanaan_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="konten" class="block text-sm font-medium text-gray-700">Konten</label>
                            <textarea name="konten" id="konten" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('konten') }}</textarea>
                            @error('konten')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex space-x-2">
                            <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
                            <a href="{{ route('laporan.index') }}"
                                class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
