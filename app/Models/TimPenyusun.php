<?php 


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimPenyusun extends Model
{
    protected $fillable = ['nama', 'jabatan_dalam_tim', 'jabatan_bidang'];

    public $timestamps = true;
}