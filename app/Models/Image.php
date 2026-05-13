<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    //

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function booted()
    {
        static::deleting(function ($image) {
            Storage::disk('public')->delete($image->url);
        });

        static::updating(function ($image) {
            if ($image->isDirty('url')) {
                Storage::disk('public')->delete($image->getOriginal('url'));
            }
        });
    }
}
