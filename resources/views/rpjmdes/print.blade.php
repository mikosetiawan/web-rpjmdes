<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rencana Pembangunan Jangka Menengah Desa</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 10mm;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 16px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }

        .header-row {
            background-color: #2B6CB0;
            color: white;
        }

        .sub-header {
            background-color: #7F9CF5;
        }

        tr:nth-child(even) {
            background-color: #E2E8F0;
        }

        tr:hover {
            background-color: #B2BEB5;
        }

        /* Column widths */
        th:nth-child(1),
        td:nth-child(1) {
            width: 3%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 10%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 8%;
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 10%;
        }

        th:nth-child(5),
        td:nth-child(5) {
            width: 5%;
        }

        th:nth-child(6),
        td:nth-child(6) {
            width: 5%;
        }

        th:nth-child(7),
        td:nth-child(7) {
            width: 4%;
        }

        th:nth-child(8),
        td:nth-child(8) {
            width: 4%;
        }

        th:nth-child(9),
        td:nth-child(9) {
            width: 4%;
        }

        th:nth-child(10),
        td:nth-child(10) {
            width: 4%;
        }

        th:nth-child(11),
        td:nth-child(11) {
            width: 4%;
        }

        th:nth-child(12),
        td:nth-child(12) {
            width: 4%;
        }

        th:nth-child(13),
        td:nth-child(13) {
            width: 8%;
        }

        th:nth-child(14),
        td:nth-child(14) {
            width: 6%;
        }

        th:nth-child(15),
        td:nth-child(15) {
            width: 6%;
        }

        th:nth-child(16),
        td:nth-child(16) {
            width: 3%;
        }

        th:nth-child(17),
        td:nth-child(17) {
            width: 3%;
        }

        th:nth-child(18),
        td:nth-child(18) {
            width: 3%;
        }

        th:nth-child(19),
        td:nth-child(19) {
            width: 3%;
        }

        th:nth-child(20),
        td:nth-child(20) {
            width: 3%;
        }

        th:nth-child(21),
        td:nth-child(21) {
            width: 3%;
        }

        th:nth-child(22),
        td:nth-child(22) {
            width: 8%;
        }

        th:nth-child(23),
        td:nth-child(23) {
            width: 3%;
        }

        th:nth-child(24),
        td:nth-child(24) {
            width: 3%;
        }

        th:nth-child(25),
        td:nth-child(25) {
            width: 3%;
        }

        .total-row {
            background-color: #2B6CB0;
            color: white;
            font-weight: bold;
            text-align: center;
            height: 20px;
        }

        .signature-section {
            margin-top: 40px;
            display: flex;
            justify-content: space-between;
            font-size: 12px;
        }

        .signature-left,
        .signature-right {
            width: 45%;
            text-align: center;
        }

        .signature-left p,
        .signature-right p {
            margin: 10px 0;
        }

        .signature-space {
            margin-top: 60px;
        }

        .location-table {
            width: 30%;
            margin: 10px auto;
            border-collapse: collapse;
            font-size: 12px;
        }

        .location-table td {
            border: 1px solid #ddd;
            padding: 5px;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            table {
                page-break-inside: auto;
            }

            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }

            h2 {
                margin-top: 0;
                color: #333 !important;
            }

            .header-row {
                background-color: #2B6CB0 !important;
                color: white !important;
            }

            .sub-header {
                background-color: #7F9CF5 !important;
            }

            tr:nth-child(even) {
                background-color: #E2E8F0 !important;
            }

            tr:hover {
                background-color: inherit !important;
            }

            .total-row {
                background-color: #2B6CB0 !important;
                color: white !important;
            }
        }
    </style>
    <script>
        window.onload = function () {
            window.print();
        };
    </script>
</head>

<body>
    <h2>Rencana Pembangunan Jangka Menengah Desa (RPJMDes)</h2>
    <h2>Tahun 2022-2027</h2>
    {{-- <table class="location-table">
        <tr>
            <td>DESA</td>
            <td>: WANAKARTA</td>
        </tr>
        <tr>
            <td>KECAMATAN</td>
            <td>: BOJONEGARA</td>
        </tr>
        <tr>
            <td>PROVINSI</td>
            <td>: BANTEN</td>
        </tr>
    </table> --}}
    <table>
        <tr class="header-row">
            <th>No</th>
            <th>Bidang/Jenis Kegiatan</th>
            <th>Sub Bidang</th>
            <th>Nama Program / Kegiatan</th>
            <th>Mendukung SDGs ke-</th>
            <th colspan="7">Target Capaian ke</th>
            <th>Lokasi (RT/RW / Dusun)</th>
            <th>Prakiraan Volume & Satuan</th>
            <th>Prakiraan & Penerima Manfaat</th>
            <th colspan="6">Waktu Pelaksanaan</th>
            <th>Prakiraan Biaya dan Sumber Pembiayaan</th>
            <th colspan="3">Prakiraan Pola Pelaksanaan</th>
        </tr>
        <tr class="header-row">
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>Data Existing Tahun ke-0</th>
            <th>Tahun ke-1</th>
            <th>Tahun ke-2</th>
            <th>Tahun ke-3</th>
            <th>Tahun ke-4</th>
            <th>Tahun ke-5</th>
            <th>Tahun ke-6</th>
            <th></th>
            <th></th>
            <th></th>
            <th>2022</th>
            <th>2023</th>
            <th>2024</th>
            <th>2025</th>
            <th>2026</th>
            <th>2027</th>
            <th></th>
            <th>Swakelola</th>
            <th>Kerjasama Desa</th>
            <th>Kerjasama Pihak Ketiga</th>
        </tr>
        @foreach ($rpjmdes as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama_bidang }}</td>
                <td>{{ implode(', ', $data->nama_sub_bidang) }}</td>
                <td>{{ $data->nama_program_kegiatan }}</td>
                <td>{{ $data->sdgs_ke ?? '-' }}</td>
                <td>{{ $data->data_existing_tahun_ke ?? '-' }}</td>
                <td>{{ $data->tahun_ke_1 ?? '-' }}</td>
                <td>{{ $data->tahun_ke_2 ?? '-' }}</td>
                <td>{{ $data->tahun_ke_3 ?? '-' }}</td>
                <td>{{ $data->tahun_ke_4 ?? '-' }}</td>
                <td>{{ $data->tahun_ke_5 ?? '-' }}</td>
                <td>{{ $data->tahun_ke_6 ?? '-' }}</td>
                <td>{{ $data->lokasi ?? ($data->dusun ?? '-') }}</td>
                <td>{{ $data->satuan ?? '-' }}</td>
                <td>{{ $data->penerima_manfaat ?? '-' }}</td>
                <td>{{ $data->tahun_2022 ? '✓' : '' }}</td>
                <td>{{ $data->tahun_2023 ? '✓' : '' }}</td>
                <td>{{ $data->tahun_2024 ? '✓' : '' }}</td>
                <td>{{ $data->tahun_2025 ? '✓' : '' }}</td>
                <td>{{ $data->tahun_2026 ? '✓' : '' }}</td>
                <td>{{ $data->tahun_2027 ? '✓' : '' }}</td>
                <td>{{ number_format($data->jumlah, 2) }} ({{ $data->sumber_dana ?? '-' }})</td>
                <td>{{ $data->swakelola ? '✓' : '' }}</td>
                <td>{{ $data->kerjasama_desa ? '✓' : '' }}</td>
                <td>{{ $data->kerjasama_pihak_ketiga ? '✓' : '' }}</td>
            </tr>
        @endforeach
        <tr>
            <td class="total-row" colspan="21">SUB TOTAL BIDANG PENYELENGGARA PEMERINTAH DESA</td>
            {{-- <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td>
            <td class="total-row"></td> --}}
            <td class="total-row">
                {{ number_format($rpjmdes->sum('jumlah'), 2) }}
            </td>
            <td colspan="3" class="total-row"></td>
            {{-- <td></td>
            <td></td> --}}
        </tr>
    </table>
    {{-- <div class="total-row" style="width: 100%;">SUB TOTAL BIDANG PENYELENGGARA PEMERINTAH DESA</div> --}}

    <div class="signature-section">
        <div class="signature-left">
            <p>Mengetahui:</p>
            <p>Kepala Desa {{ $desa }}</p>
            <p class="signature-space">_____________________________</p>
        </div>
        <div class="signature-right">
            <p>{{ $desa }}, {{ date('d F Y') }}</p>
            <p>Disusun oleh:</p>
            <p>Tim Penyusun RPJM Desa</p>
            <p class="signature-space">_____________________________</p>
        </div>
    </div>
</body>

</html>