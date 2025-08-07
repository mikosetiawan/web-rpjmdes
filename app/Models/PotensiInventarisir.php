<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotensiInventarisir extends Model
{
    protected $fillable = ['potensi', 'lokasi', 'keterangan'];

    public $timestamps = true;
}