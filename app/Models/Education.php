<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Education extends Model
{
    protected $guarded = [];

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
