<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surat Keputusan Kepala Desa Wanakarta</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
      padding: 20px;
    }
    .container {
      width: 100%;
      max-width: 800px;
      margin: 0 auto;
      text-align: left;
    }
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    h1 {
      font-size: 16px;
      margin-bottom: 5px;
      text-decoration: underline;
      font-weight: bold;
    }
    h2 {
      font-size: 14px;
      margin-bottom: 5px;
      font-weight: bold;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      font-size: 12px;
    }
    th, td {
      border: 1px solid #000;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
      text-align: center;
    }
    .footer {
      margin-top: 30px;
      text-align: right;
    }
    .signature {
      margin-top: 50px;
      text-align: center;
    }
    .signature-line {
      border-top: 1px solid #000;
      width: 200px;
      margin: 0 auto;
      padding-top: 5px;
    }
    @page {
      size: A4;
      margin: 20mm;
    }
    @media print {
      body {
        padding: 0;
      }
      .no-print {
        display: none;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>LAMPIRAN</h1>
      <h2>SURAT KEPUTUSAN KEPALA DESA WANAKARTA</h2>
      <h2>NOMOR : .../.../SK/Ds-.../.../2023</h2>
      <h2>SUSUNAN TIM PENYUSUN</h2>
      <h2>RENCANA PEMBANGUNAN JANGKA MENENGAH DESA (RPJM-DESA)</h2>
      <h2>TAHUN 2023-2029</h2>
    </div>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jabatan dalam Tim Penyusun</th>
          <th>Jabatan/Bidang</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($timPenyusuns as $tim)
        <tr>
          <td style="text-align: center">{{ $loop->iteration }}</td>
          <td>{{ $tim->nama }}</td>
          <td>{{ $tim->jabatan_dalam_tim }}</td>
          <td>{{ $tim->jabatan_bidang ?? '-' }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="4" style="text-align: center">Tidak ada data tim penyusun</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <div class="footer">
      <p>Ditetapkan di : Wanakarta</p>
      <p>Pada tanggal : {{ date('d F Y') }}</p>
    </div>

    <div class="signature">
      <p>KEPALA DESA WANAKARTA</p>
      <div class="signature-line"></div>
      <p>(.................................)</p>
    </div>

    <div class="no-print" style="margin-top: 20px; text-align: center;">
      <button onclick="window.print()" style="padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
        Cetak Dokumen
      </button>
      <button onclick="window.close()" style="padding: 8px 16px; background-color: #f44336; color: white; border: none; border-radius: 4px; cursor: pointer; margin-left: 10px;">
        Tutup
      </button>
    </div>
  </div>

  <script>
    window.onload = function() {
      // Auto-print if desired
      // setTimeout(function(){ window.print(); }, 1000);
    };
  </script>
</body>
</html>