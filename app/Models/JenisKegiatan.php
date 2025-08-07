<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKegiatan extends Model
{
    protected $fillable = ['sub_bidang_id', 'nama_program_kegiatan', 'sdgs_ke'];

    public function subBidang()
    {
        return $this->belongsTo(SubBidang::class);
    }

    public function targetCapaianTahuns()
    {
        return $this->hasMany(TargetCapaianTahun::class);
    }

    public function lokasiDusuns()
    {
        return $this->hasMany(LokasiDusun::class);
    }

    public function penerimaManfaats()
    {
        return $this->hasMany(PenerimaManfaat::class);
    }

    public function waktuPelaksanaans()
    {
        return $this->hasMany(WaktuPelaksanaan::class);
    }

    public function prakirakanBiayas()
    {
        return $this->hasMany(PrakiraanBiaya::class);
    }
}