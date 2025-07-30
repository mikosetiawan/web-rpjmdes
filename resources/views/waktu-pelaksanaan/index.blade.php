<x-app-layout title="Kelola Waktu Pelaksanaan">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Kelola Waktu Pelaksanaan</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="font-semibold p-3 text-xl text-gray-800 leading-tight">Daftar Waktu Pelaksanaan</h2>
                <hr>
                <div class="p-6 text-gray-900">
                    <a href="{{ route('waktu-pelaksanaan.create') }}"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md transition duration-150 ease-in-out mb-4">
                        Tambah Waktu Pelaksanaan
                    </a>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200" id="dataTable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Mulai</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Selesai</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kegiatan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($waktuPelaksanaan as $item)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->tanggal_mulai }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->tanggal_selesai }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $item->jenisKegiatan->nama_kegiatan }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <a href="{{ route('waktu-pelaksanaan.edit', $item->id) }}"
                                                class="bg-blue-600 p-2 rounded-lg text-white hover:bg-blue-700">Edit</a>
                                            <form action="{{ route('waktu-pelaksanaan.destroy', $item->id) }}" method="POST" class="inline-block"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-600 p-2 rounded-lg text-white hover:bg-red-700 ml-2">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
