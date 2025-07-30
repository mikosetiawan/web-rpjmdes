<x-app-layout title="Edit Bidang">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Kelola Penginputan Bidang</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('bidang.update', $bidang->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nama_bidang" class="block text-sm font-medium text-gray-700">Nama Bidang</label>
                            <input type="text" name="nama_bidang" id="nama_bidang"
                                value="{{ old('nama_bidang', $bidang->nama_bidang) }}"
                                class="mt-1 block w-full border-gray-300  p-2 border rounded-md shadow-sm"
                                placeholder="Masukan nama bidang..">
                            @error('nama_bidang')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                        <a href="{{ route('bidang.index') }}"
                            class="bg-gray-500 text-white px-4 py-2 rounded ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
