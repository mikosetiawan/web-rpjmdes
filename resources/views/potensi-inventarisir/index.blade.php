<x-app-layout title="Daftar Inventarisir Potensi">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            @if(session('success'))
                <x-alert type="success" message="{{ session('success') }}" />
                <hr>
            @endif

            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Inventarisir Potensi Kantor Desa wanakarta</h2>
            <hr><br>
            <div class="mb-4">
                <a href="{{ route('potensi-inventarisir.create') }}"
                   class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah Data</a>
            </div>
            <div class="overflow-x-auto">
                <table id="dataTable" class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Potensi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Masalah</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($potensiInventarisirs as $potensi)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $potensi->potensi }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $potensi->lokasi }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $potensi->keterangan }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $potensi->masalah }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('potensi-inventarisir.edit', $potensi->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                    <form action="{{ route('potensi-inventarisir.destroy', $potensi->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-4 text-center">Tidak ada data potensi.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>