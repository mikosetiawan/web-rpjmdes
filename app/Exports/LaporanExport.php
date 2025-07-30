<?php

namespace App\Exports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LaporanExport implements FromCollection, WithHeadings, WithMapping
{
    protected $laporan;

    public function __construct($laporan)
    {
        $this->laporan = $laporan;
    }

    public function collection()
    {
        return $this->laporan;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Pola Pelaksanaan',
            'Konten',
            'Created At',
            'Updated At'
        ];
    }

    public function map($laporan): array
    {
        return [
            $laporan->id,
            $laporan->polaPelaksanaan->nama_pola, // assuming polaPelaksanaan has a 'nama_pola' field
            $laporan->konten,
            $laporan->created_at,
            $laporan->updated_at
        ];
    }
}