<?php

namespace App\Models;

use App\Constant;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'description', 'user_id'];

    public function status(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Constant::PostStatus[$value],
        );
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post_pivot')->withTimestamps();
    }

    public function user()
    {
        return   $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_post_pivot')->withTimestamps();
    }

    /**
     * Get the tempPost that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tempPost()
    {
        return $this->belongsTo(TempPost::class);
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}
