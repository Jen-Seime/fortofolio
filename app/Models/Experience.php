<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Cache;

class Experience extends Model
{
    protected function casts(): array
    {
        return [
            'techStack' => 'array',
            'start_date' => 'date',
            'end_date' => 'date',
            'achievements' => 'array',
        ];
    }

    public function issuerLogo(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'logo');
    }

    public function pdfFile(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'pdf');
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
