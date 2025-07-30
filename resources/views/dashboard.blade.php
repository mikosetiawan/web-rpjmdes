<x-app-layout>
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Total Penduduk</p>
                    <p class="text-3xl font-bold text-gray-900">2,485</p>
                    <p class="text-sm text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +2.5% dari bulan lalu
                    </p>
                </div>
                <div class="bg-blue-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-users text-2xl text-blue-500"></i>
                </div>
            </div>
        </div>

        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Jumlah KK</p>
                    <p class="text-3xl font-bold text-gray-900">742</p>
                    <p class="text-sm text-green-600 mt-1">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +1.2% dari bulan lalu
                    </p>
                </div>
                <div class="bg-green-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-home text-2xl text-green-500"></i>
                </div>
            </div>
        </div>

        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Surat Diproses</p>
                    <p class="text-3xl font-bold text-gray-900">28</p>
                    <p class="text-sm text-yellow-600 mt-1">
                        <i class="fas fa-clock mr-1"></i>
                        Menunggu persetujuan
                    </p>
                </div>
                <div class="bg-yellow-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-file-alt text-2xl text-yellow-500"></i>
                </div>
            </div>
        </div>

        <div class="card-hover bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-600">Dana Desa</p>
                    <p class="text-3xl font-bold text-gray-900">1.2M</p>
                    <p class="text-sm text-purple-600 mt-1">
                        <i class="fas fa-wallet mr-1"></i>
                        Tahun 2024
                    </p>
                </div>
                <div class="bg-purple-500 bg-opacity-20 p-3 rounded-full">
                    <i class="fas fa-money-bill-wave text-2xl text-purple-500"></i>
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
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                    Lihat Semua
                </button>
            </div>
            <div class="space-y-4">
                <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                    <div class="bg-green-500 p-2 rounded-full">
                        <i class="fas fa-check text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-800">Surat Keterangan Domisili disetujui</p>
                        <p class="text-sm text-gray-600">Atas nama Budi Santoso - 2 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                    <div class="bg-blue-500 p-2 rounded-full">
                        <i class="fas fa-file-plus text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-800">Permohonan KTP baru diterima</p>
                        <p class="text-sm text-gray-600">Atas nama Siti Aminah - 4 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg">
                    <div class="bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-exclamation text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-gray-800">Laporan kerusakan jalan masuk</p>
                        <p class="text-sm text-gray-600">RT 02/RW 03 - 6 jam yang lalu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Aksi Cepat</h3>
            <div class="grid grid-cols-2 gap-4">
                <button
                    class="card-hover flex flex-col items-center justify-center p-4 bg-blue-50 hover:bg-blue-100 rounded-lg border-2 border-dashed border-blue-200 transition">
                    <i class="fas fa-plus-circle text-3xl text-blue-500 mb-2"></i>
                    <span class="text-sm font-medium text-blue-700">Tambah Penduduk</span>
                </button>
                <button
                    class="card-hover flex flex-col items-center justify-center p-4 bg-green-50 hover:bg-green-100 rounded-lg border-2 border-dashed border-green-200 transition">
                    <i class="fas fa-file-signature text-3xl text-green-500 mb-2"></i>
                    <span class="text-sm font-medium text-green-700">Buat Surat</span>
                </button>
                <button
                    class="card-hover flex flex-col items-center justify-center p-4 bg-yellow-50 hover:bg-yellow-100 rounded-lg border-2 border-dashed border-yellow-200 transition">
                    <i class="fas fa-chart-line text-3xl text-yellow-500 mb-2"></i>
                    <span class="text-sm font-medium text-yellow-700">Lihat Laporan</span>
                </button>
                <button
                    class="card-hover flex flex-col items-center justify-center p-4 bg-purple-50 hover:bg-purple-100 rounded-lg border-2 border-dashed border-purple-200 transition">
                    <i class="fas fa-calendar-alt text-3xl text-purple-500 mb-2"></i>
                    <span class="text-sm font-medium text-purple-700">Jadwal Acara</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Data Tables -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-gray-800">Permohonan Surat Terbaru</h3>
            <div class="flex space-x-2">
                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg text-sm transition">
                    <i class="fas fa-filter mr-2"></i>Filter
                </button>
                <button class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg text-sm transition">
                    <i class="fas fa-download mr-2"></i>Export
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">No</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Nama Pemohon</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Jenis Surat</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Tanggal</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4">001</td>
                        <td class="py-3 px-4 font-medium">Ahmad Fauzi</td>
                        <td class="py-3 px-4">Surat Keterangan Domisili</td>
                        <td class="py-3 px-4">25 Jul 2024</td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-sm rounded-full">Menunggu</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="text-blue-600 hover:text-blue-800 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4">002</td>
                        <td class="py-3 px-4 font-medium">Sari Dewi</td>
                        <td class="py-3 px-4">Surat Pengantar SKCK</td>
                        <td class="py-3 px-4">24 Jul 2024</td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">Selesai</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="text-blue-600 hover:text-blue-800 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-purple-600 hover:text-purple-800">
                                <i class="fas fa-download"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-3 px-4">003</td>
                        <td class="py-3 px-4 font-medium">Rudi Hartono</td>
                        <td class="py-3 px-4">Surat Keterangan Usaha</td>
                        <td class="py-3 px-4">23 Jul 2024</td>
                        <td class="py-3 px-4">
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 text-sm rounded-full">Diproses</span>
                        </td>
                        <td class="py-3 px-4">
                            <button class="text-blue-600 hover:text-blue-800 mr-3">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="text-green-600 hover:text-green-800">
                                <i class="fas fa-check"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
