<x-app-layout title="Dashboard">

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <!-- Tim Penyusun -->
        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Tim Penyusun</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalTimPenyusun }}</p>
                    <p class="text-sm text-yellow-600 mt-1">
                        <i class="fas fa-users mr-1"></i>
                        Terdaftar per {{ now()->translatedFormat('d M Y') }}
                    </p>
                </div>
                <div class="bg-yellow-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-user-tie text-2xl text-yellow-500"></i>
                </div>
            </div>
        </div>

        <!-- Potensi Inventarisir -->
        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Potensi Inventarisir</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalPotensi }}</p>
                    <p class="text-sm text-purple-600 mt-1">
                        <i class="fas fa-list mr-1"></i>
                        Diperbarui {{ now()->translatedFormat('d M Y') }}
                    </p>
                </div>
                <div class="bg-purple-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-chart-pie text-2xl text-purple-500"></i>
                </div>
            </div>
        </div>

        <!-- RPJM Desa -->
        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total RPJM Desa</p>
                    <p class="text-3xl font-bold text-gray-900">{{ $totalRpjmdes }}</p>
                    <p class="text-sm text-green-600 mt-1">
                        <i class="fas fa-file-alt mr-1"></i>
                        Update terakhir {{ now()->translatedFormat('d M Y') }}
                    </p>
                </div>
                <div class="bg-green-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-edit text-2xl text-green-500"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Tables Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Recent Activities -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-lg font-semibold text-gray-800">Aktivitas Terbaru</h3>
            </div>
            <div class="space-y-4">
                @forelse ($recentActivities as $activity)
                    <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                        <div class="bg-{{ $activity['color'] }} p-2 rounded-full">
                            <i class="fas {{ $activity['icon'] }} text-white text-sm"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-800">{{ $activity['description'] }}</p>
                            <p class="text-sm text-gray-600">{{ $activity['timestamp']->translatedFormat('H:i, d M Y') }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-sm text-gray-600">Belum ada aktivitas terbaru.</p>
                @endforelse
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Aksi Cepat</h3>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('tim-penyusun.create') }}"
                   class="card-hover flex flex-col items-center justify-center p-4 bg-blue-50 hover:bg-blue-100 rounded-lg border-2 border-dashed border-blue-200 transition">
                    <i class="fas fa-user-plus text-3xl text-blue-500 mb-2"></i>
                    <span class="text-sm font-medium text-blue-700">Tambah Tim Penyusun</span>
                </a>
                <a href="{{ route('potensi-inventarisir.create') }}"
                   class="card-hover flex flex-col items-center justify-center p-4 bg-green-50 hover:bg-green-100 rounded-lg border-2 border-dashed border-green-200 transition">
                    <i class="fas fa-plus-circle text-3xl text-green-500 mb-2"></i>
                    <span class="text-sm font-medium text-green-700">Tambah Potensi</span>
                </a>
                <a href="{{ route('rpjmdes.create') }}"
                   class="card-hover flex flex-col items-center justify-center p-4 bg-yellow-50 hover:bg-yellow-100 rounded-lg border-2 border-dashed border-yellow-200 transition">
                    <i class="fas fa-file-alt text-3xl text-yellow-500 mb-2"></i>
                    <span class="text-sm font-medium text-yellow-700">Tambah RPJM Desa</span>
                </a>
                <a href="{{ route('tim-penyusun.index') }}"
                   class="card-hover flex flex-col items-center justify-center p-4 bg-purple-50 hover:bg-purple-100 rounded-lg border-2 border-dashed border-purple-200 transition">
                    <i class="fas fa-list text-3xl text-purple-500 mb-2"></i>
                    <span class="text-sm font-medium text-purple-700">Lihat Tim Penyusun</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Data Tables -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Potensi Inventarisir Terbaru</h3>
            <div class="flex space-x-2">
                <a href="{{ route('potensi-inventarisir.index') }}"
                   class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm transition">
                    <i class="fas fa-filter mr-2"></i>Lihat Semua
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">No</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Potensi</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Lokasi</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Keterangan</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Tanggal Ditambahkan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recentPotensi as $index => $potensi)
                        <tr class="border-b border-gray-100 hover:bg-gray-50">
                            <td class="py-3 px-4">{{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}</td>
                            <td class="py-3 px-4 font-medium">{{ $potensi->potensi }}</td>
                            <td class="py-3 px-4">{{ $potensi->lokasi }}</td>
                            <td class="py-3 px-4">{{ $potensi->keterangan }}</td>
                            <td class="py-3 px-4">{{ $potensi->created_at->translatedFormat('d M Y, H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-3 px-4 text-center text-gray-600">
                                Belum ada data potensi inventarisir.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
