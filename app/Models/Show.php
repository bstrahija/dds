<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Show extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'venue_name',
        'venue_url',
        'city',
        'country',
        'lineup',
        'status',
        'scheduled_at',
    ];

    protected $casts = [
        'scheduled_at' => 'date',
    ];

    public function galleries(): BelongsToMany
    {
        return $this->belongsToMany(Gallery::class);
    }

    public function posterUrl(): string
    {
        return $this->getFirstMediaUrl('posters');
    }

    /**
     * @param null|App\Models\Media $media
     * @return void
     */
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }
}
