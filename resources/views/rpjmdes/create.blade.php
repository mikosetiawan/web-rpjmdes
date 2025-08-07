<x-app-layout title="Tambah RPJMDES">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Tambah Data RPJMDES</h2>
            <form action="{{ route('rpjmdes.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="bidang_id" class="block text-sm font-medium text-gray-700">Bidang</label>
                        <select id="bidang_id" name="bidang_id" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="">Pilih Bidang</option>
                            @foreach ($bidangs as $bidang)
                                <option value="{{ $bidang->id }}">{{ $bidang->nama_bidang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="sub_bidang_id" class="block text-sm font-medium text-gray-700">Sub Bidang</label>
                        <select id="sub_bidang_id" name="sub_bidang_id" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="">Pilih Sub Bidang</option>
                            @foreach ($subBidangs as $subBidang)
                                <option value="{{ $subBidang->id }}">{{ $subBidang->nama_sub_bidang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="nama_program_kegiatan" class="block text-sm font-medium text-gray-700">Nama Program/Kegiatan</label>
                        <input type="text" id="nama_program_kegiatan" name="nama_program_kegiatan" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="sdgs_ke" class="block text-sm font-medium text-gray-700">SDGs Ke</label>
                        <input type="text" id="sdgs_ke" name="sdgs_ke" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>

                <!-- Target Capaian -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">Target Capaian Tahun</label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-4 mt-2">
                        @for ($i = 0; $i <= 6; $i++)
                            <input type="number" name="target_capaian_tahun[tahun_ke_{{ $i }}]" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun {{ $i }}">
                        @endfor
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi_dusun[lokasi]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="dusun" class="block text-sm font-medium text-gray-700">Dusun</label>
                        <input type="text" id="dusun" name="lokasi_dusun[dusun]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="satuan" class="block text-sm font-medium text-gray-700">Satuan</label>
                        <input type="text" id="satuan" name="lokasi_dusun[satuan]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="penerima_manfaat" class="block text-sm font-medium text-gray-700">Penerima Manfaat</label>
                        <input type="text" id="penerima_manfaat" name="penerima_manfaat" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                </div>

                <!-- Waktu Pelaksanaan -->
                <div class="mt-6">
                    <label class="block text-sm font-medium text-gray-700">Waktu Pelaksanaan</label>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 mt-2">
                        @foreach ([2022, 2023, 2024, 2025, 2026, 2027] as $tahun)
                            <input type="number" name="waktu_pelaksanaan[tahun_{{ $tahun }}]" class="border-gray-300 rounded-md shadow-sm" placeholder="{{ $tahun }}">
                        @endforeach
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Rp)</label>
                        <input type="number" id="jumlah" name="prakiraan_biaya[jumlah]" step="0.01" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="sumber_dana" class="block text-sm font-medium text-gray-700">Sumber Dana</label>
                        <input type="text" id="sumber_dana" name="prakiraan_biaya[sumber_dana]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="swakelola" class="block text-sm font-medium text-gray-700">Swakelola</label>
                        <input type="text" id="swakelola" name="prakiraan_biaya[swakelola]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="antara_pihak" class="block text-sm font-medium text-gray-700">Antara Pihak</label>
                        <input type="text" id="antara_pihak" name="prakiraan_biaya[antara_pihak]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="kerjasama_desa" class="block text-sm font-medium text-gray-700">Kerjasama Desa</label>
                        <input type="text" id="kerjasama_desa" name="prakiraan_biaya[kerjasama_desa]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="pola_pelaksanaan" class="block text-sm font-medium text-gray-700">Pola Pelaksanaan</label>
                        <input type="text" id="pola_pelaksanaan" name="prakiraan_biaya[pola_pelaksanaan]" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Simpan</button>
                    <a href="{{ route('rpjmdes.index') }}" class="ml-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
