<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Certification extends Model
{
    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'skills_covered' => 'array',
            'issue_date' => 'date',
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
}
