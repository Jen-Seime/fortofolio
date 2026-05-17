<?php

namespace App\Services;

use App\Models\Education;
use Illuminate\Support\Facades\Cache;

class EducationService
{
    public function getEducation()
    {
        return Cache::remember('education_data', now()->addDay(), function () {
            return Education::all();
        });
    }

    public function clearCache()
    {
        Cache::forget('education_data');
    }
}
