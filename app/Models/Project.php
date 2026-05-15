<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        return $this->morphOne(Image::class, 'imageable');
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('projects_data');
        });

        static::deleted(function () {
            Cache::forget('projects_data');
        });
    }
}
