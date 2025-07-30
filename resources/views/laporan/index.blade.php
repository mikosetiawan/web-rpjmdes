<x-app-layout title="Laporan / Report">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Laporan / Report</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-lg mb-4">Daftar Laporan</h2>

                    <a href="{{ route('laporan.create') }}"
                       class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md mb-4">
                        Tambah Laporan
                    </a>

                    <div class="flex flex-wrap gap-2 mb-4">
                        <a href="{{ route('laporan.export.excel') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Download Excel</a>
                        <a href="{{ route('laporan.export.pdf') }}" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Download PDF</a>
                        <a href="{{ route('laporan.print') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Print</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200" id="dataTable">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Konten</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pola Pelaksanaan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($laporan as $item)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->konten }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-900">{{ $item->polaPelaksanaan->pola }}</td>
                                        <td class="px-6 py-4 text-sm space-x-2">
                                            <a href="{{ route('laporan.edit', $item->id) }}" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</a>
                                            <form action="{{ route('laporan.destroy', $item->id) }}" method="POST" class="inline-block"
                                                  onsubmit="return confirm('Yakin ingin menghapus laporan ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4 text-gray-500">Belum ada laporan</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
