<x-app-layout title="Edit RPJMDES">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Data RPJMDES</h2>
            <hr><br>

            <form action="{{ route('rpjmdes.update', $rpjmdes->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Bidang -->
                    <div>
                        <label for="nama_bidang" class="block text-sm font-medium text-gray-700">Nama Bidang</label>
                        <input type="text" name="nama_bidang" id="nama_bidang" value="{{ old('nama_bidang', $rpjmdes->nama_bidang) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                               required>
                        @error('nama_bidang')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Sub Bidang (Dynamic Inputs) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Sub Bidang</label>
                        <div id="sub-bidang-container">
                            @foreach ($rpjmdes->nama_sub_bidang as $subBidang)
                                <div class="sub-bidang-group flex items-center mb-2">
                                    <input type="text" name="nama_sub_bidang[]" value="{{ old('nama_sub_bidang.' . $loop->index, $subBidang) }}"
                                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                           required>
                                    <button type="button" class="remove-sub-bidang ml-2 text-red-600 hover:text-red-800">Hapus</button>
                                </div>
                            @endforeach
                        </div>
                        <button type="button" id="add-sub-bidang" class="mt-2 text-blue-600 hover:text-blue-800">+ Tambah Sub Bidang</button>
                        @error('nama_sub_bidang.*')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Jenis Kegiatan -->
                    <div>
                        <label for="nama_program_kegiatan" class="block text-sm font-medium text-gray-700">Nama Program/Kegiatan</label>
                        <input type="text" name="nama_program_kegiatan" id="nama_program_kegiatan" value="{{ old('nama_program_kegiatan', $rpjmdes->nama_program_kegiatan) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                               required>
                        @error('nama_program_kegiatan')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- SDGs -->
                    <div>
                        <label for="sdgs_ke" class="block text-sm font-medium text-gray-700">Mendukung SDGs Ke-</label>
                        <input type="text" name="sdgs_ke" id="sdgs_ke" value="{{ old('sdgs_ke', $rpjmdes->sdgs_ke) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('sdgs_ke')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Data Existing -->
                    <div>
                        <label for="data_existing_tahun_ke" class="block text-sm font-medium text-gray-700">Data Existing Tahun Ke-0</label>
                        <input type="text" name="data_existing_tahun_ke" id="data_existing_tahun_ke" value="{{ old('data_existing_tahun_ke', $rpjmdes->data_existing_tahun_ke) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('data_existing_tahun_ke')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Target Capaian Tahun -->
                    @for ($i = 0; $i <= 6; $i++)
                        <div>
                            <label for="tahun_ke_{{ $i }}" class="block text-sm font-medium text-gray-700">Target Capaian Tahun Ke-{{ $i }}</label>
                            <input type="number" name="tahun_ke_{{ $i }}" id="tahun_ke_{{ $i }}" value="{{ old('tahun_ke_' . $i, $rpjmdes->{'tahun_ke_' . $i}) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            @error('tahun_ke_' . $i)
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    @endfor

                    <!-- Lokasi & Dusun -->
                    <div>
                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi (RT/RW)</label>
                        <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $rpjmdes->lokasi) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('lokasi')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="dusun" class="block text-sm font-medium text-gray-700">Dusun</label>
                        <input type="text" name="dusun" id="dusun" value="{{ old('dusun', $rpjmdes->dusun) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('dusun')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Satuan -->
                    <div>
                        <label for="satuan" class="block text-sm font-medium text-gray-700">Satuan</label>
                        <input type="text" name="satuan" id="satuan" value="{{ old('satuan', $rpjmdes->satuan) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('satuan')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Penerima Manfaat -->
                    <div>
                        <label for="penerima_manfaat" class="block text-sm font-medium text-gray-700">Penerima Manfaat</label>
                        <input type="text" name="penerima_manfaat" id="penerima_manfaat" value="{{ old('penerima_manfaat', $rpjmdes->penerima_manfaat) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('penerima_manfaat')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Waktu Pelaksanaan -->
                    @foreach ([2022, 2023, 2024, 2025, 2026, 2027] as $year)
                        <div>
                            <label for="tahun_{{ $year }}" class="block text-sm font-medium text-gray-700">Tahun {{ $year }}</label>
                            <input type="number" name="tahun_{{ $year }}" id="tahun_{{ $year }}" value="{{ old('tahun_' . $year, $rpjmdes->{'tahun_' . $year}) }}"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                                   min="1900" max="2100">
                            @error('tahun_' . $year)
                                <span class="text-red-600 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach

                    <!-- Prakiraan Biaya -->
                    <div>
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Biaya (Rp)</label>
                        <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah', $rpjmdes->jumlah) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                               step="0.01" min="0">
                        @error('jumlah')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="sumber_dana" class="block text-sm font-medium text-gray-700">Sumber Dana</label>
                        <input type="text" name="sumber_dana" id="sumber_dana" value="{{ old('sumber_dana', $rpjmdes->sumber_dana) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('sumber_dana')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Pola Pelaksanaan -->
                    <div>
                        <label for="swakelola" class="block text-sm font-medium text-gray-700">Swakelola</label>
                        <input type="text" name="swakelola" id="swakelola" value="{{ old('swakelola', $rpjmdes->swakelola) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('swakelola')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="kerjasama_desa" class="block text-sm font-medium text-gray-700">Kerjasama Antar Desa</label>
                        <input type="text" name="kerjasama_desa" id="kerjasama_desa" value="{{ old('kerjasama_desa', $rpjmdes->kerjasama_desa) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('kerjasama_desa')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="kerjasama_pihak_ketiga" class="block text-sm font-medium text-gray-700">Kerjasama Pihak Ketiga</label>
                        <input type="text" name="kerjasama_pihak_ketiga" id="kerjasama_pihak_ketiga" value="{{ old('kerjasama_pihak_ketiga', $rpjmdes->kerjasama_pihak_ketiga) }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('kerjasama_pihak_ketiga')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
                    <a href="{{ route('rpjmdes.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('add-sub-bidang').addEventListener('click', function() {
            const container = document.getElementById('sub-bidang-container');
            const newGroup = document.createElement('div');
            newGroup.className = 'sub-bidang-group flex items-center mb-2';
            newGroup.innerHTML = `
                <input type="text" name="nama_sub_bidang[]" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                <button type="button" class="remove-sub-bidang ml-2 text-red-600 hover:text-red-800">Hapus</button>
            `;
            container.appendChild(newGroup);
        });

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-sub-bidang')) {
                e.target.parentElement.remove();
            }
        });
    </script>
</x-app-layout>