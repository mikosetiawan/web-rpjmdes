<x-app-layout title="Edit Laporan">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Laporan</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-lg mb-4">Form Edit</h2>

                    <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="pola_pelaksanaan_id" class="block text-sm font-medium text-gray-700">Pola
                                Pelaksanaan</label>
                            <select name="pola_pelaksanaan_id" id="pola_pelaksanaan_id"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                                @foreach ($polaPelaksanaan as $pp)
                                    <option value="{{ $pp->id }}"
                                        {{ $laporan->pola_pelaksanaan_id == $pp->id ? 'selected' : '' }}>
                                        {{ $pp->pola }}
                                    </option>
                                @endforeach
                            </select>
                            @error('pola_pelaksanaan_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="konten" class="block text-sm font-medium text-gray-700">Konten</label>
                            <textarea name="konten" id="konten" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('konten', $laporan->konten) }}</textarea>
                            @error('konten')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex space-x-2">
                            <button type="submit"
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
                            <a href="{{ route('laporan.index') }}"
                                class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
