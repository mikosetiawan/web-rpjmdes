<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Inventarisir Potensi Desa Wanakarta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }
        .header {
            text-align: left;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 18px;
            margin-bottom: 5px;
            text-transform: uppercase;
        }

        .header p {
            margin: 3px 0;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 12px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .no {
            width: 5%;
            text-align: center;
        }

        .potensi {
            width: 25%;
        }

        .lokasi {
            width: 20%;
        }

        .keterangan {
            width: 25%;
        }

        .masalah {
            width: 25%;
        }
    </style>

    <script>
        window.print();
    </script>
</head>

<body>
    <h2 class="title">Daftar Inventarisir Potensi</h2>
    <div class="header">
        <p>DESA : WANAKARTA</p>
        <p>KECAMATAN : [NAMA KECAMATAN]</p>
        <p>KABUPATEN : [NAMA KABUPATEN]</p>
        <p>PROVINSI : [NAMA PROVINSI]</p>
    </div>

    <table>
        <thead>
            <tr>
                <th class="no">No</th>
                <th class="potensi">Potensi</th>
                <th class="lokasi">Lokasi</th>
                <th class="keterangan">Keterangan</th>
                <th class="masalah">Masalah</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($potensiInventarisirs as $potensi)
                <tr>
                    <td class="no">{{ $loop->iteration }}</td>
                    <td>{{ $potensi->potensi }}</td>
                    <td>{{ $potensi->lokasi }}</td>
                    <td>{{ $potensi->keterangan }}</td>
                    <td>{{ $potensi->masalah }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data potensi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>