<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Education extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [

            'coursework' => 'array',
        ];
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('education_data');
        });

        static::deleted(function () {
            Cache::forget('education_data');
        });
    }
}
