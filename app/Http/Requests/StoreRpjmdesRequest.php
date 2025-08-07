<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRpjmdesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Ubah menjadi logika otorisasi sesuai kebutuhan
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'bidang_id' => 'required|exists:bidangs,id',
            'sub_bidang_id' => 'required|exists:sub_bidangs,id',
            'nama_program_kegiatan' => 'required|string|max:255',
            'sdgs_ke' => 'nullable|string|max:50',
            'target_capaian_tahun.tahun_ke_0' => 'nullable|integer',
            'target_capaian_tahun.tahun_ke_1' => 'nullable|integer',
            'target_capaian_tahun.tahun_ke_2' => 'nullable|integer',
            'target_capaian_tahun.tahun_ke_3' => 'nullable|integer',
            'target_capaian_tahun.tahun_ke_4' => 'nullable|integer',
            'target_capaian_tahun.tahun_ke_5' => 'nullable|integer',
            'target_capaian_tahun.tahun_ke_6' => 'nullable|integer',
            'lokasi_dusun.lokasi' => 'required|string|max:255',
            'lokasi_dusun.dusun' => 'required|string|max:255',
            'lokasi_dusun.satuan' => 'required|string|max:50',
            'penerima_manfaat' => 'required|string|max:255',
            'waktu_pelaksanaan.tahun_2022' => 'nullable|integer',
            'waktu_pelaksanaan.tahun_2023' => 'nullable|integer',
            'waktu_pelaksanaan.tahun_2024' => 'nullable|integer',
            'waktu_pelaksanaan.tahun_2025' => 'nullable|integer',
            'waktu_pelaksanaan.tahun_2026' => 'nullable|integer',
            'waktu_pelaksanaan.tahun_2027' => 'nullable|integer',
            'prakiraan_biaya.jumlah' => 'required|numeric',
            'prakiraan_biaya.sumber_dana' => 'required|string|max:255',
            'prakiraan_biaya.swakelola' => 'required|string|max:255',
            'prakiraan_biaya.antara_pihak' => 'required|string|max:255',
            'prakiraan_biaya.kerjasama_desa' => 'required|string|max:255',
            'prakiraan_biaya.pola_pelaksanaan' => 'required|string|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'bidang_id.required' => 'Bidang wajib dipilih.',
            'sub_bidang_id.required' => 'Sub Bidang wajib dipilih.',
            'nama_program_kegiatan.required' => 'Nama Program/Kegiatan wajib diisi.',
            'lokasi_dusun.lokasi.required' => 'Lokasi wajib diisi.',
            'lokasi_dusun.dusun.required' => 'Dusun wajib diisi.',
            'lokasi_dusun.satuan.required' => 'Satuan wajib diisi.',
            'penerima_manfaat.required' => 'Penerima Manfaat wajib diisi.',
            'prakiraan_biaya.jumlah.required' => 'Jumlah wajib diisi.',
            'prakiraan_biaya.sumber_dana.required' => 'Sumber Dana wajib diisi.',
            'prakiraan_biaya.swakelola.required' => 'Swakelola wajib diisi.',
            'prakiraan_biaya.antara_pihak.required' => 'Antara Pihak wajib diisi.',
            'prakiraan_biaya.kerjasama_desa.required' => 'Kerjasama Desa wajib diisi.',
            'prakiraan_biaya.pola_pelaksanaan.required' => 'Pola Pelaksanaan wajib diisi.',
        ];
    }
}