<x-app-layout title="Edit Jenis Kegiatan">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Edit Jenis Kegiatan</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <form action="{{ route('jenis-kegiatan.update', $jenisKegiatan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="sub_bidang_id" class="block text-sm font-medium text-gray-700">Sub Bidang</label>
                            <select name="sub_bidang_id" id="sub_bidang_id"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm">
                                @foreach ($subBidang as $sb)
                                    <option value="{{ $sb->id }}" {{ $jenisKegiatan->sub_bidang_id == $sb->id ? 'selected' : '' }}>
                                        {{ $sb->nama_sub_bidang }}
                                    </option>
                                @endforeach
                            </select>
                            @error('sub_bidang_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_kegiatan" class="block text-sm font-medium text-gray-700">Nama Kegiatan</label>
                            <input type="text" name="nama_kegiatan" id="nama_kegiatan"
                                value="{{ old('nama_kegiatan', $jenisKegiatan->nama_kegiatan) }}"
                                class="mt-1 block w-full border-gray-300 p-2 border rounded-md shadow-sm"
                                placeholder="Masukkan nama kegiatan.." autofocus>
                            @error('nama_kegiatan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">Update</button>
                        <a href="{{ route('jenis-kegiatan.index') }}"
                            class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded ml-2 transition">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
