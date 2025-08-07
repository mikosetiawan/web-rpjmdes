<x-app-layout title="Edit RPJMDES">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Edit Data RPJMDES</h2>
            <form action="{{ route('rpjmdes.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="bidang_id" class="block text-sm font-medium text-gray-700">Bidang</label>
                        <select id="bidang_id" name="bidang_id" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="">Pilih Bidang</option>
                            @foreach ($bidangs as $bidang)
                                <option value="{{ $bidang->id }}" {{ $rpjmdes->subBidang->bidang->id == $bidang->id ? 'selected' : '' }}>{{ $bidang->nama_bidang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="sub_bidang_id" class="block text-sm font-medium text-gray-700">Sub Bidang</label>
                        <select id="sub_bidang_id" name="sub_bidang_id" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                            <option value="">Pilih Sub Bidang</option>
                            @foreach ($subBidangs as $subBidang)
                                <option value="{{ $subBidang->id }}" {{ $rpjmdes->subBidang->id == $subBidang->id ? 'selected' : '' }}>{{ $subBidang->nama_sub_bidang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="nama_program_kegiatan" class="block text-sm font-medium text-gray-700">Nama Program/Kegiatan</label>
                        <input type="text" id="nama_program_kegiatan" name="nama_program_kegiatan" value="{{ $rpjmdes->nama_program_kegiatan }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="sdgs_ke" class="block text-sm font-medium text-gray-700">SDGs Ke</label>
                        <input type="text" id="sdgs_ke" name="sdgs_ke" value="{{ $rpjmdes->sdgs_ke }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Target Capaian Tahun</label>
                        <div class="grid grid-cols-7 gap-4 mt-1">
                            <input type="number" name="target_capaian_tahun[tahun_ke_0]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_0 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 0">
                            <input type="number" name="target_capaian_tahun[tahun_ke_1]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_1 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 1">
                            <input type="number" name="target_capaian_tahun[tahun_ke_2]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_2 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 2">
                            <input type="number" name="target_capaian_tahun[tahun_ke_3]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_3 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 3">
                            <input type="number" name="target_capaian_tahun[tahun_ke_4]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_4 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 4">
                            <input type="number" name="target_capaian_tahun[tahun_ke_5]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_5 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 5">
                            <input type="number" name="target_capaian_tahun[tahun_ke_6]" value="{{ $rpjmdes->targetCapaianTahuns->first()->tahun_ke_6 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="Tahun 6">
                        </div>
                    </div>
                    <div>
                        <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi_dusun[lokasi]" value="{{ $rpjmdes->lokasiDusuns->first()->lokasi ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="dusun" class="block text-sm font-medium text-gray-700">Dusun</label>
                        <input type="text" id="dusun" name="lokasi_dusun[dusun]" value="{{ $rpjmdes->lokasiDusuns->first()->dusun ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="satuan" class="block text-sm font-medium text-gray-700">Satuan</label>
                        <input type="text" id="satuan" name="lokasi_dusun[satuan]" value="{{ $rpjmdes->lokasiDusuns->first()->satuan ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="penerima_manfaat" class="block text-sm font-medium text-gray-700">Penerima Manfaat</label>
                        <input type="text" id="penerima_manfaat" name="penerima_manfaat" value="{{ $rpjmdes->penerimaManfaats->first()->penerima_manfaat ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Waktu Pelaksanaan</label>
                        <div class="grid grid-cols-6 gap-4 mt-1">
                            <input type="number" name="waktu_pelaksanaan[tahun_2022]" value="{{ $rpjmdes->waktuPelaksanaans->first()->tahun_2022 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="2022">
                            <input type="number" name="waktu_pelaksanaan[tahun_2023]" value="{{ $rpjmdes->waktuPelaksanaans->first()->tahun_2023 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="2023">
                            <input type="number" name="waktu_pelaksanaan[tahun_2024]" value="{{ $rpjmdes->waktuPelaksanaans->first()->tahun_2024 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="2024">
                            <input type="number" name="waktu_pelaksanaan[tahun_2025]" value="{{ $rpjmdes->waktuPelaksanaans->first()->tahun_2025 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="2025">
                            <input type="number" name="waktu_pelaksanaan[tahun_2026]" value="{{ $rpjmdes->waktuPelaksanaans->first()->tahun_2026 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="2026">
                            <input type="number" name="waktu_pelaksanaan[tahun_2027]" value="{{ $rpjmdes->waktuPelaksanaans->first()->tahun_2027 ?? '' }}" class="border-gray-300 rounded-md shadow-sm" placeholder="2027">
                        </div>
                    </div>
                    <div>
                        <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah (Rp)</label>
                        <input type="number" id="jumlah" name="prakiraan_biaya[jumlah]" value="{{ $rpjmdes->prakirakanBiayas->first()->jumlah ?? '' }}" step="0.01" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="sumber_dana" class="block text-sm font-medium text-gray-700">Sumber Dana</label>
                        <input type="text" id="sumber_dana" name="prakiraan_biaya[sumber_dana]" value="{{ $rpjmdes->prakirakanBiayas->first()->sumber_dana ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="swakelola" class="block text-sm font-medium text-gray-700">Swakelola</label>
                        <input type="text" id="swakelola" name="prakiraan_biaya[swakelola]" value="{{ $rpjmdes->prakirakanBiayas->first()->swakelola ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="antara_pihak" class="block text-sm font-medium text-gray-700">Antara Pihak</label>
                        <input type="text" id="antara_pihak" name="prakiraan_biaya[antara_pihak]" value="{{ $rpjmdes->prakirakanBiayas->first()->antara_pihak ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="kerjasama_desa" class="block text-sm font-medium text-gray-700">Kerjasama Desa</label>
                        <input type="text" id="kerjasama_desa" name="prakiraan_biaya[kerjasama_desa]" value="{{ $rpjmdes->prakirakanBiayas->first()->kerjasama_desa ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                    <div>
                        <label for="pola_pelaksanaan" class="block text-sm font-medium text-gray-700">Pola Pelaksanaan</label>
                        <input type="text" id="pola_pelaksanaan" name="prakiraan_biaya[pola_pelaksanaan]" value="{{ $rpjmdes->prakirakanBiayas->first()->pola_pelaksanaan ?? '' }}" class="mt-1 block p-2 w-full border-gray-300 rounded-md shadow-sm" required>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update</button>
                    <a href="{{ route('rpjmdes.index') }}" class="ml-2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Batal</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>