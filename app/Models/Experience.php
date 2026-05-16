<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Experience extends Model
{
    protected function casts(): array
    {
        return [
            'technology' => 'array',
            'start_date' => 'date',
            'end_date' => 'date',
        ];
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('experience_data');
        });

        static::deleted(function () {
            Cache::forget('experience_data');
        });
    }
}
