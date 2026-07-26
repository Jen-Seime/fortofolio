<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Profil extends Model
{
    protected $guarded = [];

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('profil_data');
        });

        static::updating(function ($profil) {
            if ($profil->isDirty('cv_file') && ! empty($profil->getOriginal('cv_file'))) {
                Storage::disk('public_uploads')->delete($profil->getOriginal('cv_file'));
            }
        });

        static::deleting(function ($profil) {
            $profil->images->each->delete();

            if (! empty($profil->cv_file)) {
                Storage::disk('public_uploads')->delete($profil->cv_file);
            }
        });

        static::deleted(function () {
            Cache::forget('profil_data');
        });
    }
}
