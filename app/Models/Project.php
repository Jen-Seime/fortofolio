<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Cache;

class Project extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'technology' => 'array',
            'date' => 'date',
            'is_featured' => 'boolean',
        ];
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'cover');
    }

    public function thumbnails(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable')->where('type', 'thumbnail');
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function category_role()
    {
        return $this->belongsTo(CategoryRole::class);
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('projects_data');
        });

        static::deleting(function ($project) {
            $project->images->each->delete();
        });

        static::deleted(function () {
            Cache::forget('projects_data');
        });
    }
}
