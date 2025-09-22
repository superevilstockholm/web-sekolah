<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    protected $table = 'ppdb';

    protected $fillable = [
        'jenis_pendaftaran',
        'jenjang',
        'nama_peserta_didik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp',
        'no_hp',
        'no_hp2',
        'email',
    ];

    public $timestamps = true;

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
}
