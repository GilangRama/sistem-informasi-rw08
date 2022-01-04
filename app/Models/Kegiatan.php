<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_kegiatan',
        'tanggal_pelaksanaan',
        'penanggung_jawab',
        'izin',
        'detail',
        'daerah_RT',
        'surat_masuks_id',
    ];
    public function surat_masuks() {
        return $this->belongsTo(SuratMasuk::class);
    }
}
