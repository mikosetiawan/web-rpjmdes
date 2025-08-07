<x-app-layout title="Daftar RPJMDES">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <!-- Add alert component here -->
            @if(session('success'))
                <x-alert type="success" message="{{ session('success') }}" />
                <hr>
            @endif
            @if(session('error'))
                <x-alert type="error" message="{{ session('error') }}" />
                <hr>
            @endif
            
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar RPJMDES Tahun {{ date('Y') }}</h2>
            <hr><br>
            <div class="mb-4">
                <a href="{{ route('rpjmdes.create') }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Tambah Data</a>
            </div>
            <div class="overflow-x-auto">
                <table id="dataTable" class="display w-full">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bidang/Jenis Kegiatan</th>
                            <th>Sub Bidang</th>
                            <th>Mendukung SDGs Ke-</th>
                            <th>Data Existing Tahun Ke-0</th>
                            <th>Target Capaian Tahun Ke-1</th>
                            <th>Target Capaian Tahun Ke-2</th>
                            <th>Target Capaian Tahun Ke-3</th>
                            <th>Target Capaian Tahun Ke-4</th>
                            <th>Target Capaian Tahun Ke-5</th>
                            <th>Target Capaian Tahun Ke-6</th>
                            <th>Lokasi (RT/RW)</th>
                            <th>Prakiraan Volume & Satuan</th>
                            <th>Penerima Manfaat</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Prakiraan Biaya dan Sumber Pembiayaan</th>
                            <th>Prakiraan Pola Pelaksanaan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rpjmdes as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->subBidang->bidang->nama_bidang ?? '-' }} -
                                    {{ $data->nama_program_kegiatan ?? '-' }}</td>
                                <td>{{ $data->subBidang->nama_sub_bidang ?? '-' }}</td>
                                <td>{{ $data->sdgs_ke ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_0 ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_1 ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_2 ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_3 ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_4 ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_5 ?? '-' }}</td>
                                <td>{{ $data->targetCapaianTahuns->first()->tahun_ke_6 ?? '-' }}</td>
                                <td>{{ $data->lokasiDusuns->first()->lokasi ?? '-' }}
                                    ({{ $data->lokasiDusuns->first()->dusun ?? '-' }})</td>
                                <td>{{ $data->lokasiDusuns->first()->satuan ?? '-' }}</td>
                                <td>{{ $data->penerimaManfaats->first()->penerima_manfaat ?? '-' }}</td>
                                <td>
                                    @php
                                        $waktu = $data->waktuPelaksanaans->first();
                                        $years = [];
                                        if ($waktu) {
                                            foreach (
                                                [
                                                    'tahun_2022',
                                                    'tahun_2023',
                                                    'tahun_2024',
                                                    'tahun_2025',
                                                    'tahun_2026',
                                                    'tahun_2027',
                                                ]
                                                as $year
                                            ) {
                                                if ($waktu->$year) {
                                                    $years[] = substr($year, 6);
                                                }
                                            }
                                        }
                                    @endphp
                                    {{ implode(', ', $years) ?: '-' }}
                                </td>
                                <td>{{ 'Rp ' . number_format($data->prakirakanBiayas->first()->jumlah ?? 0, 2) }}
                                    ({{ $data->prakirakanBiayas->first()->sumber_dana ?? '-' }})</td>
                                <td>{{ $data->prakirakanBiayas->first()->pola_pelaksanaan ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('rpjmdes.edit', $data->id) }}"
                                        class="bg-blue-600 hover:bg-blue-800 mr-2 p-2 text-white rounded-lg">Edit</a>
                                    <form action="{{ route('rpjmdes.destroy', $data->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-600 hover:bg-red-800 p-2 text-white rounded-lg"
                                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
