<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Cooperation extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'name',
        'phone',
        'job',
        'description',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('background')
            ->nonQueued();
    }

    /**
     * Active Scope
     */
    public function scopeActive($query)
    {
        $query->where('is_active', 1);
    }
    
    /**
     * Active Scope
     */
    public function scopeLang($query, $lang = null)
    {
        $query->where('lang', $lang ?: config('app.locale'));
    }
}
