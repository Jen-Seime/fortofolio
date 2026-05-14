<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];
    protected static function booted()
    {
        static::saved(function () {
            \Illuminate\Support\Facades\Cache::forget('experience_data');
        });

        static::deleted(function () {
            \Illuminate\Support\Facades\Cache::forget('experience_data');
        });
    }
}
