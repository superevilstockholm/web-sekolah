<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\User;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'content',
        'category',
        'user_id',
    ];

    public $timestamps = true;

    protected $appends = ['image_url'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    // Otomatis generatte slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = static::generateUniqueSlug($blog->title);
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title')) {
                $blog->slug = static::generateUniqueSlug($blog->title, $blog->id);
            }
        });
    }

    // Pembuat slug unik
    public static function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
