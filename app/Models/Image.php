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
            if (! empty($image->url)) {
                Storage::disk('public_uploads')->delete($image->url);
            }
        });

        static::updating(function ($image) {
            if ($image->isDirty('url') && ! empty($image->getOriginal('url'))) {
                Storage::disk('public_uploads')->delete($image->getOriginal('url'));
            }
        });
    }
}
