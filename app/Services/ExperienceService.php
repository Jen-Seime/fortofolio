<?php

namespace App\Services;

use App\Models\Experience;
use Illuminate\Support\Facades\Cache;

class ExperienceService
{
    public function getExperience()
    {
        return Cache::remember('experience_data', now()->addDay(), function () {
            return Experience::all();
        });
    }

    public function clearCache(): void
    {
        Cache::forget('experience_data');
    }
}
