<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publication';

    protected $fillable = [
        'title',
        'cover',
        'file_path',
    ];

    public $timestamps = true;

    protected $appends = ['cover_url', 'file_url'];

    public function getCoverUrlAttribute(): ?string
    {
        return $this->cover ? asset('storage/' . $this->cover)
            : asset('static/img/no-image-placeholder.svg');
    }

    public function getFileUrlAttribute(): ?string
    {
        return $this->file_path ? asset('storage/' . $this->file_path)
            : asset('static/img/no-image-placeholder.svg');
    }
}
