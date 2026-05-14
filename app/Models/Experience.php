<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
            \Illuminate\Support\Facades\Cache::forget('experience_data');
        });

        static::deleted(function () {
            \Illuminate\Support\Facades\Cache::forget('experience_data');
        });
    }
}
