<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateSurat extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_surat_template',
        'file_surat',
    ];
}
