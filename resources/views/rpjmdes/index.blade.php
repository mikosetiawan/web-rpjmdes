<x-app-layout title="Daftar RPJMDES">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            @if(session('success'))
                <x-alert type="success" message="{{ session('success') }}" />
                <hr>
            @endif
            @if(session('error'))
                <x-alert type="error" message="{{ session('error') }}" />
                <hr>
            @endif
            
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar RPJMDES</h2>
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
                                <td>{{ $data->nama_bidang }} / {{ $data->nama_program_kegiatan }}</td>
                                <td>{{ implode(', ', $data->nama_sub_bidang) }}</td>
                                <td>{{ $data->sdgs_ke ?? '-' }}</td>
                                <td>{{ $data->data_existing_tahun_ke ?? '-' }}</td>
                                <td>{{ $data->tahun_ke_1 ?? '-' }}</td>
                                <td>{{ $data->tahun_ke_2 ?? '-' }}</td>
                                <td>{{ $data->tahun_ke_3 ?? '-' }}</td>
                                <td>{{ $data->tahun_ke_4 ?? '-' }}</td>
                                <td>{{ $data->tahun_ke_5 ?? '-' }}</td>
                                <td>{{ $data->tahun_ke_6 ?? '-' }}</td>
                                <td>{{ $data->lokasi ?? '-' }}</td>
                                <td>{{ $data->satuan ?? '-' }}</td>
                                <td>{{ $data->penerima_manfaat ?? '-' }}</td>
                                <td>
                                    @foreach ([2022, 2023, 2024, 2025, 2026, 2027] as $year)
                                        @if ($data->{'tahun_' . $year})
                                            {{ $year }},
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ number_format($data->jumlah, 2) }} ({{ $data->sumber_dana ?? '-' }})</td>
                                <td>{{ $data->kerjasama_pihak_ketiga ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('rpjmdes.edit', $data->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                                    <form action="{{ route('rpjmdes.destroy', $data->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
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