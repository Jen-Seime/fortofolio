<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Profil extends Model
{
    protected $guarded = [];

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    protected static function booted()
    {
        static::saved(function () {
            \Illuminate\Support\Facades\Cache::forget('profil_data');
        });

        static::deleted(function () {
            \Illuminate\Support\Facades\Cache::forget('profil_data');
        });
    }
}
